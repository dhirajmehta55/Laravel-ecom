<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products(){
        $settingColor = Setting::first();
        $category = Category::all();
        $product = Product::all();
        return view('Frontend.Page.Products.Products',compact('settingColor','category','product'));
    }

    public function categoryProduct($id){
        $category = Category::all();
        $product = Product::where('category_id',$id)->get();
        $settingColor = Setting::first();
        return view('Frontend.Page.Products.Category-Product',compact('category','product','settingColor'));
    }
}
