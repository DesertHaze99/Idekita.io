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
    return view('idea');
})->name('idea');

Route::get('index', function () {
    return view('index');
});


Route::get('mainan','IdektiaController@mainan');

//Route::get('detail/{post_id}','detailcontroller@detail')->name('detail');

Route::get('profile', function () {
    return view('profile') ;
})->name('profile');

Route::get('detail', function () {
    return view('detail') ;
})->name('detail');



Route::group(['middleware' => ['auth']], function() {
     // uses 'auth' middleware
    Route::get('new', function () {
    	return view('new');
	})->name('new');
});




Route::get('tambahpost', function () {
    return view('tambahpost');
});


Route::get('master', function () {
    return view('master');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('reg',function (){
// 	return view('auth.register'); 
// })->name('register'); 

// Route::post('reg','RegController@post_reg')->name('post_register'); 

Route::get('test_create','IdektiaController@create')->name('create');


Route::post('upload/profil_picture','IdektiaController@uploadPhoto');

