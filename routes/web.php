<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsiteController;

Route::get('test', function () {
    return view('testshop');
});

Route::get('/',[NewsiteController :: class,'home'])->name('home');

Route::get('shop',[NewsiteController :: class,'shop'])->name('shop');

Route::get('blog',[NewsiteController :: class,'blog'])->name('blog');

Route::get('aboutus',[NewsiteController :: class,'aboutus'])->name('aboutus');