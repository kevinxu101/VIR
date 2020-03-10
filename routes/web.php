
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
Route::resource('admin','AdminController');
Route::resource('studentList','StudentListController');

//Add my controller ('modelname',''controllername)



//Users middleware
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
    Route::get('/admin_dashboard', 'AdminController@index')->name('admin_dashboard');
    Route::get('/admin_registration',function(){
        return view('admin_registration');
    });
    Route::get('/admin_import',function(){
        return view('admin_import');
    });

});
Route::group(['middleware' => 'App\Http\Middleware\StudentMiddleware'], function()
{
    Route::get('/student_home', 'StudentController@index')->name('student_home');
});
/*
Route::group(['middleware' => 'App\Http\Middleware\SuperAdminMiddleware'], function()
{
    Route::match(['get', 'post'], '/superAdminOnlyPage/', 'HomeController@super_admin');
});
*/
Route::group(['middleware' => 'App\Http\Middleware\TeacherMiddleware'], function()
{
    Route::resource('Teacher', 'Teacher');
    Route::get('/teacher_dashboard', 'Teacher@index')->name('teacher_dashboard');
});

Route::get('/showdata', 'CsvController@showdata');
Route::get('/export', 'CsvController@export');
Route::post('/import', 'CsvController@import');
Route::post('/update', 'CsvController@update');


