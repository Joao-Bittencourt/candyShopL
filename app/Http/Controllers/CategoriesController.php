<?php

namespace App\Http\Controllers;

use App\Http\Resources\categoryResource;
use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller {

    public function index() {
        return view('categories.index', ['categories' => Category::all()]);
    }

    public function create(Request $request) {

        $category = new Category();

        return view('categories.create', compact('category'));
    }

    public function store(CategoryStoreRequest $request) {
        $category = new Category($request->validated());
        $category->save();

        return redirect()
                        ->route('categories.index')
                        ->with(['alert-success' => __('messages.created_success')]);
    }

}
