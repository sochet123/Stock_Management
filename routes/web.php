<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//    return view('welcome');
});
Route::get('/hello', function (){
    return "<h1>Hello BBU !</h1>";
});
Route::match(['get','post'],'/match', function (){
    return "This is match for Multiple routes and parameters ";
});
Route::get('/student/{id}', function ($id){
   return "Student Info for Id : ".$id;
})->where('id','[0-9]+');

Route::get('/home',[HomeController::class,'index']);
