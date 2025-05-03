<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with('images')->get(); // Eager load images
        return view('home', compact('products'));
    }
    public function about()
    {
        return view('about');
    }

    // public function catalog(Request $request)
    // {
    //     $products = Product::with('images')->paginate(9); // Pagination
    //     return view('catalog', compact('products'));
    // }
}