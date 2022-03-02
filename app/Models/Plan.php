<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Casts\CastsPrice;

class Plan extends Model
{
    use HasFactory;

    protected $table = 'plans';

    protected $casts = [
        'price' => CastsPrice::class,
    ];

    
}
