<?php

use Illuminate\Database\Seeder;

class ProductBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Product::find(1)->banner()->create([
            'valid_start_date'=>\Illuminate\Support\Carbon::now()->subDay(4),
            'valid_end_date'=> \Illuminate\Support\Carbon::now()
        ])
            ->service()
            ->associate(\App\ServiceType::find(1) )
            ->save()
        ;

        \App\Product::find(2)->banner()->create([
            'valid_start_date'=>\Illuminate\Support\Carbon::now(),
            'valid_end_date'=> \Illuminate\Support\Carbon::now()->addDays(4)
        ])
            ->service()
            ->associate(\App\ServiceType::find(1) )
            ->save()
        ;

        \App\Product::find(3)->banner()->create([
            'valid_start_date'=>\Illuminate\Support\Carbon::now()->addDays(4),
            'valid_end_date'=> \Illuminate\Support\Carbon::now()->addDays(9)
        ])
            ->service()
            ->associate(\App\ServiceType::find(1) )
            ->save()
        ;
    }
}
