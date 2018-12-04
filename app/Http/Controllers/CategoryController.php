<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug)
    {
    	$categories = Category::all();
    	$category = Category::where('slug', $slug)->first();
    	$products = $category->products()->get();
    	return view('pages.category', compact('products', 'categories', 'category'));
    }
}
