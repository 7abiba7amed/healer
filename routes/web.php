<?php

use App\Patient;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/posts',function (){

    $patient = Patient::findorfail(1);
    foreach ($patient->posts as $post){
        echo $post->content . '<br>' ;
    }
});

Route::resource('patient/', 'PatientController');
Route::resource('doctor', 'DoctorController');
Route::resource('article', 'ArticleController');
Route::resource('category', 'CategoryController');
Route::resource('post', 'PostController');
Route::resource('comment', 'CommentController');
Route::resource('session', 'SessionController');
Route::resource('feedback', 'FeedbackController');
Route::resource('doctor_info', 'Doctor_infoController');







Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
