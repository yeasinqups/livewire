<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Mail\SendMailUser;

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
    return view('welcome');
});



// Route::get('/send-email', function () {
//     $email = 'yeasin.qups@gmail.com'; // Replace with the recipient's email address
    
//     // $delay=sleep(20) ;
//     event(new SendMailUser($email,$delay));
   
// });


Route::get('/counter', function (){
return view('counterVIEW');
});

Route::view('users','livewire.home');