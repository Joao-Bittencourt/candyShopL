<?php

namespace App\Http\Controllers;

use App\Http\Resources\productResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return  ProductResource::collection(Product::all());
    }
}
