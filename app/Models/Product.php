<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Plan;
use App\Models\Service;
use App\Casts\CastsPrice;

class Product extends Model
{
    use HasFactory;

    /**
     * Table Name
     *
     * @var string
     */
    protected $table = 'products';
    
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
            'price' => CastsPrice::class,
    ];
    
    /**
     * Get the plans that belong to the Product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plans()
    {
        return $this->hasMany(Plan::class);
    }

    /**
     * Get the Service the Product belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

}
