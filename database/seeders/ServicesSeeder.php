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
    // {
    //     DB::table('services')->insert([
    //         [
    //             'name' =>'Credit Restoration',
    //             'route' => 'cr.index',
    //             'path' => 'credit-restoration',
    //             'is_subscription' => true,
    //         ],

    //     ]);
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
                'price' => 15000
            ]
        ]);
        // DB::table('products')->insert([
        //     [
        //         'name' => 'Fast Track Program',
        //         'service_id' => 1,
        //     ],
        //     [
        //         'name' => 'Restoration Deal',
        //         'service_id' => 1,
        //     ],
        //     [
        //         'name' => 'New Home Deal',
        //         'service_id' => 1,
        //     ]
        // ]);

        // DB::table('plans')->insert([
        //     [
        //         'name' => 'Monthly',
        //         'price' => 7500,
        //         'product_id' => 1,
        //     ],
        //     [
        //         'name' => 'Quarterly',
        //         'price' => 22500,
        //         'product_id' => 1,
        //     ],
        //     [
        //         'name' => 'Yearly',
        //         'price' => 79900,
        //         'product_id' => 1,
        //     ],
        //     [
        //         'name' => 'Monthly',
        //         'price' => 12500,
        //         'product_id' => 2,
        //     ],
        //     [
        //         'name' => 'Quarterly',
        //         'price' => 35000,
        //         'product_id' => 2,
        //     ],
        //     [
        //         'name' => 'Yearly',
        //         'price' => 119500,
        //         'product_id' => 2,
        //     ],
        //     [
        //         'name' => 'Monthly',
        //         'price' => 9000,
        //         'product_id' => 3,
        //     ],
        //     [
        //         'name' => 'Quarterly',
        //         'price' => 25000,
        //         'product_id' => 3,
        //     ],
        //     [
        //         'name' => 'Yearly',
        //         'price' => 90000,
        //         'product_id' => 3,
        //     ],
        // ]);

    }
}
