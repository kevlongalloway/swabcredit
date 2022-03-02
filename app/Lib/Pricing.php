<?php

namespace App\Lib;

class Pricing
{
    public static function services()
    {
        return [
            'services' => [
                'credit-restoration' => [
                    'fast-track-program' => [
                        'monthly'   => '75',
                        'quarterly' => '225',
                        'annually'  => '799',
                    ],
                    'restoration-deal'   => [
                        'monthly'   => '125',
                        'quarterly' => '350',
                        'annually'  => '1195',
                    ],
                    'new-home-program'   => [
                        'monthly'   => '90',
                        'quarterly' => '250',
                        'annually'  => '900',
                    ],
                ],
            ],
        ];
    }
}
