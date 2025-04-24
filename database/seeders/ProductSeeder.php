<?php
namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductSpecification;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Product 1: ARM TIE 95CM
        $product1 = Product::create([
            'name' => 'ARM TIE 95CM',
            'type' => 'Hardware',
            'price' => 150000.00,
        ]);

        ProductSpecification::create([
            'product_id' => $product1->id,
            'spec_key' => 'Panjang',
            'spec_value' => '95cm',
        ]);
        ProductSpecification::create([
            'product_id' => $product1->id,
            'spec_key' => 'Lebar Siku',
            'spec_value' => '5cm',
        ]);
        ProductSpecification::create([
            'product_id' => $product1->id,
            'spec_key' => 'Ketebalan Siku',
            'spec_value' => '5mm',
        ]);
        ProductSpecification::create([
            'product_id' => $product1->id,
            'spec_key' => 'Jarak Lobang Pin Isolator',
            'spec_value' => '2,5cm',
        ]);
        ProductSpecification::create([
            'product_id' => $product1->id,
            'spec_key' => 'Berat',
            'spec_value' => '3,4kg',
        ]);
        ProductSpecification::create([
            'product_id' => $product1->id,
            'spec_key' => 'Ketebalan',
            'spec_value' => 'HOT DEEP GALVANIZED',
        ]);

        ProductImage::create([
            'product_id' => $product1->id,
            'image_path' => '/storage/images/arm-tie-1.jpg',
        ]);
        ProductImage::create([
            'product_id' => $product1->id,
            'image_path' => '/storage/images/arm-tie-2.jpg',
        ]);

        // Product 2: Sample Product
        $product2 = Product::create([
            'name' => 'Steel Bracket 50CM',
            'type' => 'Hardware',
            'price' => 100000.00,
        ]);

        ProductSpecification::create([
            'product_id' => $product2->id,
            'spec_key' => 'Panjang',
            'spec_value' => '50cm',
        ]);
        ProductSpecification::create([
            'product_id' => $product2->id,
            'spec_key' => 'Berat',
            'spec_value' => '2kg',
        ]);

        ProductImage::create([
            'product_id' => $product2->id,
            'image_path' => '/storage/images/steel-bracket-1.jpg',
        ]);

        // Add more products as needed...
    }
}