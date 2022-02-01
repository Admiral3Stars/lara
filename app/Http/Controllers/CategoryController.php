<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\{Category,News,User};

class CategoryController extends Controller
{
    public function index()
    {
        $model = new Category();
        $categories = $model->getCategory();

        return view('categories.index', ['categories' => $categories]);
    }

    public function show(int $id)
    {
        if ($id > 10) {
            abort(404);
        }
        $model = new Category();
        return view('categories.show', [
            'category' => $model->getCategoryById($id)[0]
        ]);
    }
}
