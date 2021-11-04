<?php

namespace App\Http\Controllers;

use App\Http\Resources\categoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function index()
    {
        return CategoryResource::collection(Category::all());
    }
}
