<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Casts\CastsPrice;
use App\Models\Product;
use App\Models\Service;

class Plan extends Model
{
    use HasFactory;

    protected $table = 'plans';

    protected $casts = [
        'price' => CastsPrice::class,
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    
}
