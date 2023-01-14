<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('todo_show','TodoController@show');
Route::get('todo_delete/{id}','TodoController@destroy');
Route::get('todo_create','TodoController@create');
Route::post('todo_submit','TodoController@store');
Route::get('todo_edit/{id}','TodoController@edit');
Route::post('todo_update/{id}','TodoController@update')->name('todo.update');