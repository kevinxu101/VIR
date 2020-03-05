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
    return view('auth/login');
});



Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('teacher', 'TeacherController');

Route::resource('student','StudentController');

//Add my controller ('modelname',''controllername)
Route::resource('Teacher', 'Teacher');

//Users middleware
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
    Route::get('/admin_dashboard', 'AdminController@index')->name('admin_dashboard');
});
Route::group(['middleware' => 'App\Http\Middleware\StudentMiddleware'], function()
{
    Route::get('/student_home', 'StudentController@student')->name('student_home');
});
/*
Route::group(['middleware' => 'App\Http\Middleware\SuperAdminMiddleware'], function()
{
    Route::match(['get', 'post'], '/superAdminOnlyPage/', 'HomeController@super_admin');

});
*/
Route::group(['middleware' => 'App\Http\Middleware\TeacherMiddleware'], function()
{
    Route::get('/teacher_dashboard', 'TeacherController@index')->name('teacher_dashboard');

});

Route::get('/showdata', 'CsvController@showdata');
Route::get('/export', 'CsvController@export');
Route::post('/import', 'CsvController@import');
Route::post('/update', 'CsvController@update');




?>
