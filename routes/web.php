<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $products= Product::all();
    return view('products', ['products'=> $products]);
});
   
Route::get('/products/{product}',function(Product $product){
  //  $product=Product::find($id);
    return view('product',['products'=> $product]);
});

Route:: get('/create_product',function(){
  Product::create([
      'product_name' => 'Ipad',
      'product_desc' => 'This is the most branded ipad in the market',
      'image'=> '',
      'price'=> '200000'
      ]);
//      $products= new Product;
//    $products->product_name= 'Washing Machine';
//  $product->product_desc='This is the requirement';
//    $product->price='115000';
 //  $product->save();
});

Route:: get('/home',function(){
    $products= Product::all();
    return view('home', ['products'=> $products]);
});
//Route:: get('/get_product',function(){
 //   $products= Product::get();
  //  return $products;
//});
// laravel gives Eloquent