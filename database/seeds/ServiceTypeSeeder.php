<?php

use Illuminate\Database\Seeder;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ServiceType ::create([
            'service_name'=>'Service 1',
            'created_at'=> date('Y-m-d'),
            'updated_at'=>date('Y-m-d')
        ]);
        \App\ServiceType::create([
            'service_name'=>'Service 2',
            'created_at'=> date('Y-m-d'),
            'updated_at'=>date('Y-m-d')
        ]);

    }
}
