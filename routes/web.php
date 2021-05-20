<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/admin/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin 
//Address
Route::get('/admin/address/state','Admin\StateController@create')->name('admin.address.state');
Route::POST('/admin/address/state-store','Admin\StateController@store')->name('admin.address.storeState');

Route::get('/admin/address/city','Admin\CityController@create')->name('admin.address.city');
Route::post('/admin/address/city-store','Admin\CityController@store')->name('admin.address.storeCity');

Route::get('/admin/address/district','Admin\DistrictController@create')->name('admin.address.district');
Route::post('/admin/address/district-store','Admin\DistrictController@store')->name('admin.address.storeDistrict');

//Account
Route::get('/admin/account/profile','Admin\ProfileController@edit')->name('admin.account.profile');
Route::post('/admin/account/{user}/profile','Admin\ProfileController@update')->name('admin.account.updateProfile');


Route::get('/admin/account/security','Admin\SecurityController@edit')->name('admin.account.security');
Route::post('/admin/account/security','Admin\SecurityController@update')->name('admin.account.updateSecurity');


//Accommodation
Route::get('/admin/accommodation','Admin\AccommodationController@index')->name('admin.accommodation.index');
Route::get('/admin/accommodation/create','Admin\AccommodationController@create')->name('admin.accommodation.create');
Route::post('/admin/accommodation/store','Admin\AccommodationController@store')->name('admin.accommodation.store');


//User
Route::get('/admin/user','Admin\UserController@index')->name('admin.user.list');
Route::get('/admin/user/add','Admin\UserController@create')->name('admin.user.add');
Route::post('/admin/user/add','Admin\UserController@store')->name('admin.user.store');


//Report
Route::get('/admin/report','Admin\ReportController@index')->name('admin.report.index');


//Chalet
Route::get('/admin/chalet/list-chalet','Admin\ChaletController@index')->name('admin.chalet.list-chalet');
Route::get('/admin/chalet/my-chalet','Admin\ChaletController@showMyChalet')->name('admin.chalet.my-chalet');

Route::get('/admin/chalet/create','Admin\ChaletController@create')->name('admin.chalet.add');
Route::post('/admin/chalet/create','Admin\ChaletController@store')->name('admin.chalet.store');


Route::get('/admin/chalet/{chalet}/location','Admin\ChaletController@createLocation')->name('admin.chalet.createLocation');
Route::post('/admin/chalet/{chalet}/location','Admin\ChaletController@storeLocation')->name('admin.chalet.storeLocation');

Route::get('/admin/chalet/{chalet}/accommodation','Admin\ChaletController@createAccommodation')->name('admin.chalet.createAccommodation');
Route::post('/admin/chalet/{chalet}/accommodation','Admin\ChaletController@storeAccommodation')->name('admin.chalet.storeAccommodation');

Route::get('/admin/chalet/{chalet}/policy','Admin\ChaletController@createPolicy')->name('admin.chalet.createPolicy');
Route::post('/admin/chalet/{chalet}/policy','Admin\ChaletController@storePolicy')->name('admin.chalet.storePolicy');

Route::get('/admin/chalet/{chalet}/room','Admin\ChaletController@createRoom')->name('admin.chalet.createRoom');
Route::post('/admin/chalet/{chalet}/room','Admin\ChaletController@storeRoom')->name('admin.chalet.storeRoom');

Route::get('/admin/chalet/{chalet}/photo','Admin\ChaletController@createPhoto')->name('admin.chalet.createPhoto');
Route::post('/admin/chalet/{chalet}/photo','Admin\ChaletController@storePhoto')->name('admin.chalet.storePhoto');

Route::get('/admin/{chalet}/chalet','Admin\ChaletController@show')->name('admin.chalet.show');

//Chalet //Room
Route::get('/admin/chalet/{chalet}/room/create','Admin\RoomController@create')->name('admin.room.create');
Route::post('/admin/chalet/{chalet}/room/create','Admin\RoomController@store')->name('admin.room.store');
Route::get('/admin/chalet/{chalet}/room/{room}/edit','Admin\RoomController@edit')->name('admin.room.edit');


//Chalet //Policy
Route::get('/admin/chalet/{chalet}/policy/create','Admin\PolicyController@create')->name('admin.policy.create');
Route::post('/admin/chalet/{chalet}/policy/create','Admin\PolicyController@store')->name('admin.policy.store');
Route::get('/admin/chalet/{chalet}/policy/{policy}/edit','Admin\PolicyController@edit')->name('admin.policy.edit');

//Chalet //Photo
Route::get('/admin/chalet/{chalet}/photo/create','Admin\PhotoController@create')->name('admin.photo.create');
Route::post('/admin/chalet/{chalet}/photo/create','Admin\PhotoController@store')->name('admin.photo.store');
