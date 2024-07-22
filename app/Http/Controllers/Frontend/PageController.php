<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\carousel;
use App\Models\Setting;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $carousel = carousel::where('status','active')->get();
        $settingColor = Setting::first();
        return view('frontend.page.Home.Home',compact('carousel','settingColor'));
    }
}
