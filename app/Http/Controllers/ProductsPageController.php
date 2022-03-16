<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ProductsPageController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('products', ['services' => $services]);
    }
}
