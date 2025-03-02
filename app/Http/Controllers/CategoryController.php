<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        // $categories=Category::take(10)->get();
        $categories=Category::all();
        // $categories=Category::limit(10)->get();
        // $categories=Category::take(10)->get();
        return view ('categories.categories',compact('categories'));
    }
}
