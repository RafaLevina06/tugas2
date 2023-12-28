<?php
use Illuminate\Support\Facades\Route;
use App\Http\HomeController;

Route::get('/biodata',[HomeController::class,'bio']);

Route::get('/',[HomeController::class,'utama']);
Route::post('/kirim',[HomeController::class,'kirim']);

Route: :get('/master',function(){
    return view('layout.master');
});