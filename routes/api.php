<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Category
Route::post("/addCategory", "CategoryController@store");

// Patient Routes

Route::post("/addPatient", "PatientController@store");

Route::get("/showPatient/{id}", "PatientController@show");

Route::put("/updatePatient/{id}", "PatientController@update");

Route::delete("/deletePatient/{id}", "PatientController@destroy");

Route::get("/allPatient", "PatientController@index");

// User Routes

Route::post("/adduser","UserController@store");

// Article Routes

Route::get('/searchArticle/{param}',"ArticleController@search");

Route::post('/addArticle',"ArticleController@store");

// Doctor Routes

Route::post("/addDoctor", "DoctorController@store");
