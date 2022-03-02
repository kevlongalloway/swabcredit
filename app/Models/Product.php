<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Plan;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }
}
