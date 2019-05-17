<?php

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

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
//    return view('welcome');

    $data = [
        "title"=>"Hi I hope you are doing fine",
        "content"=>"Created with lots of love",
    ];
    Mail::send("email.test", $data, function($message){
        $message->to("djerryboy2@gmail.com")->subject("Hi, what's up");
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource("/admin/users", "AdminUserController");
Route::get("/admin", function (){
    return view("admin.index");
});
