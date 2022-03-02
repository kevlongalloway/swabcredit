<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Plan;
use App\Casts\CastsPrice;


class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function hasProducts()
    {
        return $this->products()->exists();
    }

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }

    public function hasPlans()
    {
        return $this->plans()->exists();
    }
    protected $casts = [
        'price' => CastsPrice::class,
    ];
}
