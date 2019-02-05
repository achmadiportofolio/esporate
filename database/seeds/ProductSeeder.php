<?php

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
        \App\Product::create([
            'product_name'=>'Product 1',
            'product_price'=>100000,
            'image'=>'img/bakso.jpeg'
        ])->category()
            ->associate(\App\Category::find(1))
            ->service()
            ->associate(\App\ServiceType::find(1))
            ->save();
        \App\Product::create([
            'product_name'=>'Product 2',
            'product_price'=>200000,
            'image'=>'img/bakso.jpeg'
        ])->category()
            ->associate(\App\Category::find(2))
            ->service()
            ->associate(\App\ServiceType::find(1))
            ->save();
        \App\Product::create([
            'product_name'=>'Product 3',
            'product_price'=>300000,
            'image'=>'img/bakso.jpeg'
        ])->category()
            ->associate(\App\Category::find(2))
            ->service()
            ->associate(\App\ServiceType::find(1))
            ->save();
        \App\Product::create([
            'product_name'=>'Product 4',
            'product_price'=>400000,
            'image'=>'img/bakso.jpeg'
        ])->category()
            ->associate(\App\Category::find(1))
            ->service()
            ->associate(\App\ServiceType::find(1))
            ->save();
        \App\Product::create([
            'product_name'=>'Product 5',
            'product_price'=>500000,
            'image'=>'img/bakso.jpeg'
        ])->category()
            ->associate(\App\Category::find(3))
            ->service()
            ->associate(\App\ServiceType::find(1))
            ->save();
    }
}
