<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function getChitiet(){
        return view('page.chitiet_sanpham');
    }
    function getAbout(){
        return view('page.about');
    }
    function getBlog(){
        return view('page.blog');
    }
    function getBlogDetails(){
        return view('page.blog_detail');
    }
    function getCart(){
        return view('page.cart');
    }
    function getCheckout(){
        return view('page.checkout');
    }
    function getContact(){
        return view('page.contact');
    }
    function getLogin(){
        return view('page.login');
    }
    function getMyAccout(){
        return view('page.my_accout');
    }
    function getRegister(){
        return view('page.register');
    }
    function getShop(){
        return view('page.shop');
    }
    function getWishList(){
        return view('page.wish_list');
    }
    
    
}
