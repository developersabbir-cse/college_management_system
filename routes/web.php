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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/student/add-student',[
    'uses'  =>'StudentController@addStudent',
    'as'    =>'add-student'
]);
Route::post('/new-student',[
    'uses'  =>'StudentController@newStudent',
    'as'    =>'new-student'
]);
Route::get('/roll-check/{roll}',[
    'uses'  =>'StudentController@rollCheck',
    'as'    =>'roll-check'
]);
Route::get('student/manage-student',[
    'uses'  =>'StudentController@manageStudent',
    'as'    =>'manage-student'
]);
Route::get('department-check',[
    'uses'  =>'StudentController@departmentCheck',
    'as'    =>'department-check'
]);
Route::get('/add-department',[
    'uses'  =>'StudentController@addDepartment',
    'as'    =>'add-department'
]);
Route::post('new-department',[
    'uses'  =>'StudentController@newDepartment',
    'as'    =>'new-department'
]);
Route::get('/student/student-info/{id}',[
    'uses'  =>'StudentController@studentInfo',
    'as'    =>'student-info'
]);