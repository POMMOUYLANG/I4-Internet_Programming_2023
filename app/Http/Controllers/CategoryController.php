<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class CategoryController extends Controller
{
    // --- GetAll /api/categories
    public function getCategories(){
       $categories = Category::all();

       return view('showcat',['c' => $categories]);
        // return $categories;
    }

    // --- Post /api/categories
    public function createCategories(){
        $name = Faker::create();

        $category = new Category([
            'name' => $name->name
        ]);
        $category->save();

        return view('showcat',['c'=> Category::all()]);
    }

    // --- Get /api/categories/{categoryId}
    public function getCategory($categoryId){
        $categories[] = Category::find($categoryId);

        return view('showcat',['c'=> $categories]);
        // return $categories;
    }

    // --- Patch /api/categories/{categoryId}
    public function updateCategory($categoryId){
        $category[] = Category::find($categoryId);

        $category[0]->name = 'ChangedName';
        $category[0]->save();

        return view('showcat',['c'=> $category]);
    }

    // --- Delete /api/categories/{categoryId}
    public function deleteCategory($categoryId){
        $category = Category::find($categoryId);

        $category->delete();
        return view('showcat',['c'=> Category::all()]);
    }


}