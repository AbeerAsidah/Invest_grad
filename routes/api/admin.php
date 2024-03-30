<?php


use App\Http\Controllers\PassportAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('admin/login',[\App\Http\Controllers\PassportAuthController::class,'adminLogin'])->name('adminLogin');

Route::group( ['prefix' => 'admin','middleware' => ['auth:admin-api','scopes:admin'] ],function(){
   // authenticated staff routes here
    //Route::get('dashboard',[PassportAuthController::class,'adminDashboard']);
    Route::get('logout',[PassportAuthController::class,'adminlogout'])->name('adminLogout');
    Route::post('delete/{id}', [\App\Http\Controllers\PassportAuthController::class, 'destroy']);



      

    });
