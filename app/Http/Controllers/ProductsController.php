<?php

namespace App\Http\Controllers;

use App\Http\Resources\productResource;
use App\Http\Requests\ProductStoreRequest;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller {

    public function index() {
        return view('products.index', ['products' => Product::all()]);
    }

   public function create(Request $request) {

        $product = new Product();
        $categories = Category::all();

        return view('products.create', compact('product', 'categories'));
    }

    public function store(ProductStoreRequest $request) {
        $product = new Product($request->validated());
        $product->save();

        return redirect()
                        ->route('products.index')
                        ->with(['alert-success' => __('messages.created_success')]);
    }
}
