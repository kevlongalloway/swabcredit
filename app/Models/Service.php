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

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'price' => CastsPrice::class,
    ];

    /**
     * Get the Products that the Service owns.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'service_id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @return Boolean
     */
    public function hasProducts()
    {
        return $this->products()->exists();
    }

    /**
     * Get the Plans that the Service owns.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plans()
    {
        return $this->hasMany(Plan::class, 'service_id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @return Boolean
     */
    public function hasPlans()
    {
        return $this->plans()->exists();
    }
}
