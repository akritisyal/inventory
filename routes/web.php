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

/*Route::get('blade', function () {
    return view('child');
});*/

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/others', function () {
    return view('others');
});
Route::get('/orders', function () {
    return view('orders');
});
Route::get('/users/create', function () {
    return view('create');
});*/


Route::group(['middleware' => ['web']], function () {
    Route::get('/', ['as' => 'login', 'uses' => 'AuthController@login']);
    Route::post('/handlelogin', ['as' => 'handlelogin', 'uses' => 'AuthController@handlelogin']);
   // Route::get('/verifyEmail', ['middleware' => 'auth', 'as' => 'verifyEmail', 'uses' => 'UsersController@verifyEmail']);
    //Route::get('/sendEmailDone/{email}/{verifyToken}',  ['as' => 'sendEmailDone', 'uses' => 'UsersController@sendEmailDone']);
    Route::get('/switchapps', ['middleware' => 'auth', 'as' => 'switchapps', 'uses' => 'UsersController@switchapps']);
    Route::get('/role', ['middleware' => 'auth', 'as' => 'role', 'uses' => 'UsersController@role']);
    Route::get('/resetpassword',['as'=>'showChangePasswordForm', 'uses'=>'AuthController@showChangePasswordForm']);
    Route::post('/resetpassword', ['as' => 'resetpassword', 'uses' => 'AuthController@resetpassword']);
    Route::get('/request', ['middleware' => 'auth', 'as' => 'request', 'uses' => 'UsersController@request']);
    Route::get('/replacement', ['middleware' => 'auth', 'as' => 'replacement', 'uses' => 'UsersController@replacement']);
    Route::get('/logout', ['as'=>'logout', 'uses'=>'AuthController@logout']);
    Route::get('/welcome', ['middleware' => 'auth', 'as' => 'welcome', 'uses' => 'UsersController@welcome']);
    Route::get('/others', ['middleware' => 'auth', 'as' => 'others', 'uses' => 'UsersController@others']);
    Route::get('/orders', ['middleware' => 'auth', 'as' => 'orders', 'uses' => 'UsersController@orders']);
    Route::get('/removefaculty', ['middleware' => 'auth', 'as' => 'removefaculty', 'uses' => 'UsersController@removefaculty']);
    Route::get('/viewstatus', ['middleware' => 'auth', 'as' => 'viewstatus', 'uses' => 'RequestsController@viewstatus']);
    Route::get('/assignitems', ['middleware' => 'auth', 'as' => 'assignitems', 'uses' => 'UsersController@assignitems']);
    Route::get('/replacement1', ['middleware' => 'auth', 'as' => 'replacement1', 'uses' => 'UsersController@replacement1']);
    Route::get('/request1', ['middleware' => 'auth', 'as' => 'request1', 'uses' => 'UsersController@request1']);
    Route::get('/request2', ['middleware' => 'auth', 'as' => 'request2', 'uses' => 'UsersController@request2']);
    Route::get('/replacement2', ['middleware' => 'auth', 'as' => 'replacement2', 'uses' => 'UsersController@replacement2']);
    Route::get('/reports', ['middleware' => 'auth', 'as' => 'reports', 'uses' => 'UsersController@reports']);
    Route::get('/itemmgmt', ['middleware' => 'auth', 'as' => 'itemmgmt', 'uses' => 'UsersController@itemmgmt']);
    Route::get('/usermanagement', ['middleware' => 'auth', 'as' => 'usermanagement', 'uses' => 'UsersController@usermanagement']);
    Route::get('/fixedasset', ['middleware' => 'auth', 'as' => 'fixedasset', 'uses' => 'UsersController@fixedasset']);
    Route::get('/nonconsumables', ['middleware' => 'auth', 'as' => 'nonconsumables', 'uses' => 'UsersController@nonconsumables']);
    Route::get('/consumables', ['middleware' => 'auth', 'as' => 'consumables', 'uses' => 'UsersController@consumables']);
    Route::get('/reports1', ['middleware' => 'auth', 'as' => 'reports1', 'uses' => 'UsersController@reports1']);
    Route::get('/request', ['middleware' => 'auth', 'as' => 'request', 'uses' => 'UsersController@request']);
    Route::resource('requests','RequestsController', ['only' => ['create', 'store']]);
    Route::resource('indent','IndentController', ['only' => ['create', 'store']]);
    Route::get('/store', ['middleware' => 'auth', 'as' => 'store', 'uses' => 'RequestsController@requests']);
    Route::resource('users','UsersController', ['only' => ['create', 'store']]);
    Route::get('/verifyEmail', ['as' => 'verifyEmail', 'uses' => 'UsersController@verifyEmail']);
    Route::get('/facultystatus/{item}', ['as' => 'facultystatus', 'uses' => 'IndentController@facultystatus']);
    Route::get('/remove/{email}', ['as' => 'remove', 'uses' => 'UsersController@remove']);
    Route::get('/sendEmailDone/{email}/{verifyToken}',  ['as' => 'sendEmailDone', 'uses' => 'UsersController@sendEmailDone']);
    Route::get('/generateindent', ['middleware' => 'auth', 'as' => 'generateindent', 'uses' => 'IndentController@generateindent']);
    Route::get('/profile', ['middleware' => 'auth', 'as' => 'profile', 'uses' => 'UsersController@profile']);
    Route::get('/department', ['middleware' => 'auth', 'as' => 'department', 'uses' => 'UsersController@department']);

    Route::post('/indentsubmit', ['middleware' => 'auth', 'as' => 'indentsubmit', 'uses' => 'IndentController@indentsubmit']);
    //Route::get('/indentfaculty', ['middleware' => 'auth', 'as' => 'indentfaculty', 'uses' => 'IndentController@indentfaculty']);
});


//Route::get('/verifyEmail','Auth\RegisterController@verifyEmail')->name('verifyEmail');

