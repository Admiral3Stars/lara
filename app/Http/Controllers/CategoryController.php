<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = $this->getCategory();

        return view('categories.index', [
            'categories' => $categories
        ]);


    }

    public function show(int $id)
    {
        if ($id > 10) {
            abort(404);
        }
        $categoriesItem = $this->getCategoryById($id);
        return view('categories.show', [
            'categoriesItem' => $categoriesItem
        ]);
    }
}
