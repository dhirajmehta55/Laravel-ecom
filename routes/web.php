<?php

use App\Http\Controllers\Backend\CarouselController;
use App\Http\Controllers\Backend\CategoryControler;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Frontend\PageController as FrontendPageController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;




Route::get('/',[FrontendPageController::class,'index'])->name('home');







Route::prefix('dashboard')->group(function(){

    Route::get('/home',[PageController::class,'dashboard'])->name('dashboard');

    //carousels route start
    Route::get('/carousel',[CarouselController::class,'carousel'])->name('carousel.index');
    Route::get('/carousel/create',[CarouselController::class,'carouselCreate'])->name('carousel.create');
    Route::post('/carousel/create',[CarouselController::class,'carouselstore'])->name('carousel.store');
    Route::get('/carousel/edit/{id}',[CarouselController::class,'carouseledit'])->name('carousel.edit');
    Route::post('/carousel/edit/{id}',[CarouselController::class,'carouselupdate'])->name('carousel.update');
    Route::get('/carousel/delete/{id}',[CarouselController::class,'carouselDelete'])->name('carousel.delete');
    Route::get('carousel-active/{id}',[CarouselController::class,'ActiveShow'])->name('carousel.active');
    Route::get('carousel-deactive/{id}',[CarouselController::class,'DeactiveShow'])->name('carousel.deactive');

    //carousels route end

    //setting Route start
     
    Route::get('/setting',[SettingController::class,'index'])->name('settings');
    Route::get('/setting/create',[SettingController::class,'create'])->name('setting.create');
    Route::post('/setting/create',[SettingController::class,'store'])->name('setting.store');
    Route::get('/setting/edit/{id}',[SettingController::class,'edit'])->name('setting.edit');
    Route::post('/setting/edit/{id}',[SettingController::class,'update'])->name('setting.update');


    //setting Route End
     // CATERGORY ROUTE START
     Route::get('/category',[CategoryControler::class,'index'])->name('category');
     Route::get('/category/create',[CategoryControler::class,'create'])->name('category.create');
     Route::post('/category/create',[CategoryControler::class,'store'])->name('category.post');
     Route::get('/category/edit/{id}',[CategoryControler::class,'edit'])->name('category.edit');
     Route::post('/category/edit/{id}',[CategoryControler::class,'update'])->name('category.update');
     Route::get('/category/delete/{id}',[CategoryControler::class,'delete'])->name('category.delete');
     Route::get('/category/active/{id}',[CategoryControler::class,'active'])->name('category.active');
     Route::get('/category/deactive/{id}',[CategoryControler::class,'deactive'])->name('category.deactive');
     // CATERGORY ROUTE END

     // PRODUCT ROUTE

    Route::get('/product',[ProductController::class,'index'])->name('product');
    Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
    Route::post('/product/create',[ProductController::class,'store'])->name('product.store');
    Route::get('product/show/{id}',[ProductController::class,'productShow'])->name('product.show');
    Route::get('/featured-active/{id}',[ProductController::class,'activeFeatured'])->name('featured.active');
    Route::get('/featured-deactive/{id}',[ProductController::class,'deActiveFeatured'])->name('featured.deactive');
});



