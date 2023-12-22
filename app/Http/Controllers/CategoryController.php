<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getCategories(){
        $categories = Category::all();
        return $categories;
    }

    public function createCategories(){
        $categories = Category::create(['name'=>'BOOK']);
        return categories;
    }

    public function getCategory($categoryId){}

    public function updateCategory($categoryId){}

    public function deleteCategory($categoryId){}

}
