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

    protected $table = 'products';
    
    protected $casts = [
            'price' => CastsPrice::class,
    ];
    

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }

}
