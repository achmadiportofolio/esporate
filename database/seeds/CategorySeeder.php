<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::create([
            'category_name'=>'Category 1',
            'created_at'=> date('Y-m-d'),
            'updated_at'=>date('Y-m-d')
        ])
            ->service()
            ->associate( \App\ServiceType::find(1) )
            ->save()
        ;
        \App\Category::create([
            'category_name'=>'Category 2',
            'created_at'=> date('Y-m-d'),
            'updated_at'=>date('Y-m-d')
        ])
            ->service()
            ->associate( \App\ServiceType::find(1) )
            ->save()
        ;
        \App\Category::create([
            'category_name'=>'Category 3',
            'created_at'=> date('Y-m-d'),
            'updated_at'=>date('Y-m-d')
        ])
            ->service()
            ->associate( \App\ServiceType::find(1) )
            ->save()
        ;
    }
}
