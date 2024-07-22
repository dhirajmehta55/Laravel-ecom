<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        $setting = Setting::first();
        return view('backend.page.Setting.index',compact('setting'));
    }

    public function create(){
        return view('backend.page.Setting.create');
    }

    public function store(Request $request){
        $setting = new Setting();
        $setting->nav_color = $request->color;
        if($request->hasFile('logo')){
            $logo = $request->file('logo');
            $newlogo = $logo->hashName();
            $logo->move('logo', $newlogo);
            $setting->logo = "logo/$newlogo";
        }
        $setting->save();
        return redirect()->back();
    }  public function edit($id){
        $settings = Setting::findOrFail($id);
        return view('Backend.Page.Setting.edit',compact('settings'));
       }
    
       public function update(Request $request,$id){
        $setting = Setting::findOrFail($id);
        $setting->nav_color = $request->nav_color;
        if($request->hasFile('logo')){
            $logo = $request->file('logo');
            $newLogo = $logo->hashName();
            $logo->move('logo',$newLogo);
            $setting->logo = "logo/$newLogo";
        }
        $setting->update();
        toast('Setting Inserted','success');
        return redirect()->back();
       }
    

}
