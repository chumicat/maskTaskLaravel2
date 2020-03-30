<?php

use Illuminate\Support\Facades\Route;
use App\Resume as Resume;
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
// ITEC 
Route::get('/maskTask', 'MaskTaskController@search');
Route::get('/resumeTest', function () {});
//Route::get('resumes', 'ResumeController@index');
Route::resource('resumes', 'ResumeController');