<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
 public function index(){
    return view('home');
 }
 public function redirect(){

    if(!empty(Auth::user()) && Auth::user()->role == '1'){
        return view('admin.admin');
    }
    else{
        return view('home');
    }
 }

 public function Shop(){
    return view('leftSidebar');
 }

 public function category(){
    return view('category');
 }
 public function gallery(){
    return view('gallery');
 }
 public function about_us(){
    return view('about_us');
 }
 public function contact_us(){
    return view('contact_us');
 }
 public function cart(){
    return view('cart');
 }
 public function checkout(){
    return view('checkout');
 }
 public function product(){
    return view('product');
 }
 public function wishlist(){
    return view('wishlist');
 }
}
