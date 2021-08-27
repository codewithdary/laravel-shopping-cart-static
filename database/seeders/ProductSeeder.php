<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Oculus Quest 2',
                'description' => 'Oculus quest 2 is our most advanced all-in-one VR system yet.
    ',
                'image' => 'https://dummyimage.com/600x400/000/fff',
                'price' => '299'
            ],
            [
                'name' => 'Nintendo Switch with Neon Blue and Neon Red Joy‑Con',
                'description' => 'Get the gaming system that lets you play the games you want.',
                'image' => 'https://dummyimage.com/600x400/000/fff',
                'price' => '299'
            ],
            [
                'name' => 'Acer Chromebook Spin 311 Convertible Laptop,',
                'description' => 'The stylish Chromebook Spin 311 easily transforms into anything you need it to be—thanks to its versatile.',
                'image' => 'https://dummyimage.com/600x400/000/fff',
                'price' => '254'
            ],
        ];

        foreach($products as $key => $value) {
            Product::create($value);
        }
    }
}
