<?php

use Illuminate\Support\Facades\Route;

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
    return view('page.trangchu');
});

Route::get('chi-tiet-san-pham',[
    'as'=>'chitietsanpham',
    'uses' =>'App\Http\Controllers\PageController@getChitiet'
]);
Route::get('about-us',[
    'as'=>'about-us',
    'uses'=>'App\Http\Controllers\PageController@getAbout'
]);
Route::get('blog',[
    'as'=>'blog',
    'uses'=>'App\Http\Controllers\PageController@getBlog'
]);
Route::get('blog-details',[
    'as'=>'blog-details',
    'uses'=>'App\Http\Controllers\PageController@getBlogDetails'
]);
Route::get('cart',[
    'as'=>'cart',
    'uses'=>'App\Http\Controllers\PageController@getCart'
]);
Route::get('check-out',[
    'as'=>'checkout',
    'uses'=>'App\Http\Controllers\PageController@getCheckout'
]);
Route::get('contact',[
    'as'=>'contact',
    'uses'=>'App\Http\Controllers\PageController@getContact'
]);
Route::get('login',[
    'as'=>'login',
    'uses'=>'App\Http\Controllers\PageController@getLogin'
]);
Route::get('register',[
    'as'=>'register',
    'uses'=>'App\Http\Controllers\PageController@getRegister'
]);
Route::get('my-accout',[
    'as'=>'myaccout',
    'uses'=>'App\Http\Controllers\PageController@getMyAccout'
]);

Route::get('shop',[
    'as'=>'shop',
    'uses'=>'App\Http\Controllers\PageController@getShop'
]);

Route::get('wish-list',[
    'as'=>'wishlist',
    'uses'=>'App\Http\Controllers\PageController@getWishList'
]);
