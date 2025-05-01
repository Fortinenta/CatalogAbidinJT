<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductSpecification;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::with('images');

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->filled('type')) {
            $query->where('type', 'like', '%' . $request->type . '%');
        }

        if ($request->filled('price')) {
            $query->orderBy('price', $request->price == 'asc' ? 'asc' : 'desc');
        }

        $products = $query->paginate(12)->appends($request->query());

        return view('catalog', compact('products'));
    }

    public function show($id)
    {
        $product = Product::with('specifications', 'images')->findOrFail($id);

        // Fetch related products (same type, excluding the current product)
        $relatedProducts = Product::with('images')
            ->where('type', $product->type) // Match products with the same type
            ->where('id', '!=', $product->id) // Exclude the current product
            ->inRandomOrder() // Randomize the results
            ->take(4) // Limit to 4 related products
            ->get();

        return view('product', compact('product', 'relatedProducts'));
    }

    public function products()
    {
        $products = Product::with('images')->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function createProduct()
    {
        return view('admin.products.create');
    }

    public function storeProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'specifications' => 'nullable|array',
            'specifications.*' => 'nullable|string|max:255',
            'images' => 'required|array|min:1',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'images.required' => 'At least one image is required.',
            'images.*.mimes' => 'Each image must be a JPEG, PNG, or JPG file.',
            'images.*.max' => 'Each image must not exceed 2MB.',
        ]);

        try {
            $product = Product::create([
                'name' => $request->name,
                'type' => $request->type,
                'price' => $request->price,
            ]);

            if ($request->has('specifications')) {
                $specifications = array_filter($request->specifications, function ($value) {
                    return !is_null($value) && $value !== '';
                });

                $specs = [];
                for ($i = 0; $i < count($specifications); $i += 2) {
                    if (isset($specifications[$i], $specifications[$i + 1]) && !empty($specifications[$i]) && !empty($specifications[$i + 1])) {
                        $specs[] = [
                            'product_id' => $product->id,
                            'spec_key' => $specifications[$i],
                            'spec_value' => $specifications[$i + 1],
                            'created_at' => now(),
                            'updated_at' => now(),
                        ];
                    }
                }
                ProductSpecification::insert($specs);
            }

            foreach ($request->file('images') as $image) {
                $path = $image->store('public/images');
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => Storage::url($path),
                ]);
            }

            return redirect()->route('admin.products')->with('success', 'Product created successfully');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to create product: ' . $e->getMessage()])->withInput();
        }
    }

    public function editProduct($id)
    {
        $product = Product::with('specifications', 'images')->findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'specifications' => 'nullable|array',
            'specifications.*' => 'nullable|string|max:255',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'images.*.mimes' => 'Each image must be a JPEG, PNG, or JPG file.',
            'images.*.max' => 'Each image must not exceed 2MB.',
        ]);

        try {
            $product = Product::findOrFail($id);
            $product->update([
                'name' => $request->name,
                'type' => $request->type,
                'price' => $request->price,
            ]);

            if ($request->has('specifications')) {
                $product->specifications()->delete();
                $specifications = array_filter($request->specifications, function ($value) {
                    return !is_null($value) && $value !== '';
                });

                $specs = [];
                for ($i = 0; $i < count($specifications); $i += 2) {
                    if (isset($specifications[$i], $specifications[$i + 1]) && !empty($specifications[$i]) && !empty($specifications[$i + 1])) {
                        $specs[] = [
                            'product_id' => $product->id,
                            'spec_key' => $specifications[$i],
                            'spec_value' => $specifications[$i + 1],
                            'created_at' => now(),
                            'updated_at' => now(),
                        ];
                    }
                }
                ProductSpecification::insert($specs);
            }

            if ($request->hasFile('images')) {
                foreach ($product->images as $image) {
                    Storage::delete(str_replace('/storage/', 'public/', $image->image_path));
                    $image->delete();
                }

                foreach ($request->file('images') as $image) {
                    $path = $image->store('public/images');
                    ProductImage::create([
                        'product_id' => $product->id,
                        'image_path' => Storage::url($path),
                    ]);
                }
            }

            return redirect()->route('admin.products')->with('success', 'Product updated successfully');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to update product: ' . $e->getMessage()])->withInput();
        }
    }

    public function deleteProduct($id)
    {
        try {
            $product = Product::findOrFail($id);
            foreach ($product->images as $image) {
                Storage::delete(str_replace('/storage/', 'public/', $image->image_path));
            }
            $product->delete();
            return redirect()->route('admin.products')->with('success', 'Product deleted successfully');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to delete product: ' . $e->getMessage()]);
        }
    }
}