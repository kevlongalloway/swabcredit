<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'name' => 'Tax Preparation',
                'route' => 'tp.index',
                'path' => 'tax-preparation',
                'is_subscription' => false,
                'price' => 24999,
            ],
            [
                'name' =>'Business Formation',
                'route' => 'bf.index',
                'path' => 'business-formation',
                'is_subscription' => false,
                'price' => 25999
            ]
        ]);

    }
}
