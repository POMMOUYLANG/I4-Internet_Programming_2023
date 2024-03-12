<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //Get /api/categories
    public function getCategories(){}

    //Post /api/categories
    public function createCategories(){}

    //Get /api/categories/{categoryID}
    public function getCategory($categoryID){}

    //Patch /api/categories/{categoryID}
    public function updateCategory($categoryID){}

    //Delete /api/categories/{categoryID}
    public function deleteCategory($categoryID){}
}