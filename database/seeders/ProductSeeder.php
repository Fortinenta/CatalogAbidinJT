<?php
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'ARM TIE 95CM',
                'type' => 'ARM TIE',
                'price' => 25000,
                'location' => 'Salerno, Italy',
            ],
            // Add more products with locations
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}