<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Category as Category;
use \App\Models\Movie as Movie;
use \App\Http\Controllers\BaseController as BaseController;

class CategoryController extends BaseController
{
    public function index() {
        $categories = Category::all();

        return $this->success('Category listed', $categories);
    }

    public function detail($categoryId) {
        if(Category::where('id', $categoryId)->count() == 0) {
            return $this->error('Category not found');
        }

        $category = Category::findOrFail($categoryId);
        $movies = Movie::findByCategory($categoryId);

        return $this->success('Categories listed', [
            'category' => $category,
            'movies' => $movies,
        ]);
    }
}
