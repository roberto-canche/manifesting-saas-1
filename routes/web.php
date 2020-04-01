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
Route::get('customer/fill','CustomerController@fill');
Route::get('customer/recepction','CustomerController@recepction');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){

});

//agent Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('agent','\App\Http\Controllers\AgentController');
  Route::post('agent/{id}/update','\App\Http\Controllers\AgentController@update');
  Route::get('agent/{id}/delete','\App\Http\Controllers\AgentController@destroy');
  Route::get('agent/{id}/deleteMsg','\App\Http\Controllers\AgentController@DeleteMsg');
});

//instructor Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('instructor','\App\Http\Controllers\InstructorController');
  Route::post('instructor/{id}/update','\App\Http\Controllers\InstructorController@update');
  Route::get('instructor/{id}/delete','\App\Http\Controllers\InstructorController@destroy');
  Route::get('instructor/{id}/deleteMsg','\App\Http\Controllers\InstructorController@DeleteMsg');
});

//jump_type Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('jump_type','\App\Http\Controllers\Jump_typeController');
  Route::post('jump_type/{id}/update','\App\Http\Controllers\Jump_typeController@update');
  Route::get('jump_type/{id}/delete','\App\Http\Controllers\Jump_typeController@destroy');
  Route::get('jump_type/{id}/deleteMsg','\App\Http\Controllers\Jump_typeController@DeleteMsg');
});

//transport_type Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('transport_type','\App\Http\Controllers\Transport_typeController');
  Route::post('transport_type/{id}/update','\App\Http\Controllers\Transport_typeController@update');
  Route::get('transport_type/{id}/delete','\App\Http\Controllers\Transport_typeController@destroy');
  Route::get('transport_type/{id}/deleteMsg','\App\Http\Controllers\Transport_typeController@DeleteMsg');
});

//country Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('country','\App\Http\Controllers\CountryController');
  Route::post('country/{id}/update','\App\Http\Controllers\CountryController@update');
  Route::get('country/{id}/delete','\App\Http\Controllers\CountryController@destroy');
  Route::get('country/{id}/deleteMsg','\App\Http\Controllers\CountryController@DeleteMsg');
});

//customer Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('customer', 'CustomerController');
  Route::get('customer2', 'CustomerController@test');
  Route::post('customer/{id}/update','\App\Http\Controllers\CustomerController@update');
  Route::get('customer/{id}/delete','\App\Http\Controllers\CustomerController@destroy');
  Route::get('customer/{id}/deleteMsg','\App\Http\Controllers\CustomerController@DeleteMsg');
  Route::get('customer/fill','CustomerController@fill');
});

Route::get('/gear-test','GearController@index_test');
//gear Routes
Route::get('/gear','HomeController@gear');
Route::get('gear/{any}','HomeController@gear')->where('any', '.*');
//Route::post('gear/{id}/update','\App\Http\Controllers\GearController@update');
//Route::get('gear/{id}/delete','\App\Http\Controllers\GearController@destroy');
//Route::get('gear/{id}/deleteMsg','\App\Http\Controllers\GearController@DeleteMsg');

Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});
//gear_set Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('gear_set','\App\Http\Controllers\GearSetController');
  Route::post('gear_set/{id}/update','\App\Http\Controllers\GearSetController@update');
  Route::get('gear_set/{id}/delete','\App\Http\Controllers\GearSetController@destroy');
  Route::get('gear_set/{id}/deleteMsg','\App\Http\Controllers\GearSetController@DeleteMsg');
});

//item Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('item','\App\Http\Controllers\ItemController');
  Route::post('item/{id}/update','\App\Http\Controllers\ItemController@update');
  Route::get('item/{id}/delete','\App\Http\Controllers\ItemController@destroy');
  Route::get('item/{id}/deleteMsg','\App\Http\Controllers\ItemController@DeleteMsg');
});

//gear_item Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('gear_item','\App\Http\Controllers\GearItemController');
  Route::post('gear_item/{id}/update','\App\Http\Controllers\GearItemController@update');
  Route::get('gear_item/{id}/delete','\App\Http\Controllers\GearItemController@destroy');
  Route::get('gear_item/{id}/deleteMsg','\App\Http\Controllers\GearItemController@DeleteMsg');
});
