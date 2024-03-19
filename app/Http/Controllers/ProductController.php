<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class ProductController extends Controller
{
    // GetAll /api/products
    public function getProducts(){
        $product = Product::all();

        return view("showpro",['p' => $product]);
    }
    
    // Post /api/products
    public function createProduct(){
        $fake = Faker::create();

        $product = new Product([
            'name'=> $fake->name,
            'category_id'=> 1,
            'pricing'=> rand(30,50),
            'description'=> $fake->sentence,

        ]);

        $product->save();

        return view("showpro",['p' => Product::all()]);

    }
    
    // GetOne /api/products/{product}
    public function getProduct($product){
        $pro[] = Product::find($product);

        return view('showpro',['p'=> $pro]);
    }

    // Post /api/products/{product}
    public function updateProduct($product){
        $name = Faker::create();
        $pro[] = Product::find($product);

        $pro[0]->name = $name->name;
        $pro[0]->save();

        return view('showpro',['p'=> Product::all()]);
    }

    // Delete /api/products/{product}
    public function deleteProduct($product){
        $pro = Product::find($product);
        $pro->delete();

        return view('showpro',['p'=> Product::all()]);
    }

    // GetCategoryProduct /api/categories/{categoryId}/products
    public function getCategoryProducts($categoryId){
        $pro = Product::where('category_id',$categoryId)->get();

        return view('showpro',['p'=> $pro]);
    }
}