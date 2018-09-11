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

//Route::get('/view', function (){
//   $tasks= DB::table('tasks')->get();
//   return view('view', compact('tasks'));
//});
//
//Route::get('/view/{id}', function ($id){
//    $task= DB::table('tasks')->find($id);
//    return view('show', compact('task'));
//});

Route::resource('questions','QuestionsController');