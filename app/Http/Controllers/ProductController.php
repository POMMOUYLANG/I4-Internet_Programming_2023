<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Get /api/products
    //Retrieve all flights
    public function getProducts(){
        $products = Product::all();
        return response()->json($products);        
    }

    //Post /api/products
    //Create product by mass assignment
    public function createProducts(){
        $product = Product::create(['name' => 'Book']);
        return $product;
    }

    //Get /api/products/{productID}
    //Retrieve a product by its primary key id = 1
    public function getProduct($productID){
        $product = Product::find(1);
        return response()->json($product);
    }

    //Patch /api/products/{productID}
    //Find product with id=1, change name to 'Pen' and save the changes
    public function updateProduct($categoryID){
        $product = Product::find(1); //Find product with id = 1
        $product->name = 'Pen'; //Change product's name to 'Pen'
        $product->save(); //Save the new changes
        return $product;
    }

    //Delete /api/products/{productID}
    //Find product with id = 1, and then delete it from database
    public function deleteProduct($categoryID){
        $product = Product::find(1);
        $product->delete();
    }

    //Get /api/categories/{categoryID}/products
    public function getAllProducts($categoryID){}




    //Get 10 products which are active and order by name
    public function getActiveProducts(){
        $activeProducts = Product::where('active', 1)
            ->orderBy('name')
            ->take(10)
            ->get();
        return response()->json($activeProducts);
    }

    //Get the first product with price 2000
    public function getProductByPrice()
    {
        $product = Product::where('price', 2000)->first();
        return $product;
    }

    //$product remains unchanged, and $freshProduct contains the refreshed data
    public function getFreshProduct(Product $product)
    {
        $freshProduct = $product->fresh();
        return $freshProduct;
    }

    //$product is updated with the refreshed data
    public function refreshProduct(Product $product)
    {
        $product->refresh();
        return $product;
    }

    //The chunk method will retrieve a subset of Eloquent models. The chunk method may be used to process large numbers of models more eciently.
    public function chunkMethod()
    {
        Product::chunk(200, function ($products) {
            
        });
    }

    //Retrieve the first product matching the active = 1
    public function findActiveProduct()
    {
        $product = Product::where('active', 1)->first();
        return $product;
    }

    //Alternative to retrieving the first model matching the active = 1
    public function firstWhereActive()
    {
        $product = Product::firstWhere('active', 1);
        return $product;
    }

    //Find product with id = 1, if not found, do ......
    public function findOrCallback()
    {
        $product = Product::findOr(1, function () {
            
        });
        return $product;
    }

    //Retrieve the first result of the query; however, if no result is found, a ModelNotFoundException will be thrown
    public function findOrFailProduct($productId)
    {
        $product = Product::findOrFail(1);
        return $product;
    }

    //Retrieve product by name or create it if it doesn't exist
    public function firstOrCreateProduct()
    {
        $product = Product::firstOrCreate(['name' => 'Book']);
        return $product;
    }

    //Retrieve product by name or instantiate a new Product instance
    public function firstOrNewProduct()
    {
        $product = Product::firstOrNew(['name' => 'London to Paris']);
        return $product;
    }

    //Count products with active =1
    public function countActiveProducts()
    {
        $count = Product::where('active', 1)->count();
        return $count;
    }

    //Find the max price of a product with active = 1
    public function maxPrice()
    {
        $max = Product::where('active', 1)->max('price');
        return $max;
    }

    //Create, apply name and save instance
    public function saveNewProduct(Request $request)
    {
        $product = new Product; //Create product model instance
        $product->name = $request->name; //Apply name to the product instance
        $product->save(); //Save the instance to database
        return $product;
    }

    //Find products with name='Book' and category_id=1. If found, update them with price = 99 and discounted = 1. But if not found, create the product with the combined information.
    public function updateOrCreateProduct()
    {
        $product = Product::updateOrCreate(
            ['name' => 'Book', 'category_id' => 2],
            ['price' => 99, 'discounted' => 1]
        );
        return $product;
    }

    //Truncate product table. This will reset the primary key
    public function truncateProduct()
    {
        Product::truncate();
        return 'Product table truncated';
    }
}  