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

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin_dashboard', 'AdminController@admin')->name('admin_dashboard');
Route::get('/student_home', 'StudentController@student')->name('student_home');



//Add my controller ('modelname',''controllername)
Route::resource('Teacher', 'Teacher');

//Users middleware
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
    Route::match(['get', 'post'], '/admin_dashboard/', 'AdminController@admin');
    
});
Route::group(['middleware' => 'App\Http\Middleware\StudentMiddleware'], function()
{
    Route::match(['get', 'post'], '/student_home/', 'StudentController@student');
    
});
Route::group(['middleware' => 'App\Http\Middleware\SuperAdminMiddleware'], function()
{
    Route::match(['get', 'post'], '/superAdminOnlyPage/', 'HomeController@super_admin');
    
});
  


//EXCEL IMPORT
Route::get('/showdata', 'CsvController@showdata');     
Route::post('/import', 'CsvController@import');




?>