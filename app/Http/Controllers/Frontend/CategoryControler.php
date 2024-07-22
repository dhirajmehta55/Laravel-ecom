<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;

class CategoryControler extends Controller
{
    public function category(){
        $category = Category::Where('status','active')->get();
        $settingColor = Setting::first();
        return view('Frontend.Page.Category.Category',compact('category','settingColor'));
    }
}
