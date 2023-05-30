<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    //this is the the function for the iradblog view
    public function BlogCategory(){
        return view('category');
    }
}
