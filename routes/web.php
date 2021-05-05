<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('about', 'AboutController@index');
Route::get('facilities', 'FacilityController@index');
Route::get('staffs', 'StaffController@index');
Route::get('academic', 'AcademicController@index');
Route::get('donate', 'DonateController@index');
Route::get('contact', 'ContactController@index');
Route::get('news', 'NewsController@index');

Route::get('gallery', 'GalleryController@index');
Route::get('gallery/class', 'GalleryController@class');
Route::get('gallery/assembly', 'GalleryController@assembly');
Route::get('gallery/tour', 'GalleryController@tour');
Route::get('gallery/ifter', 'GalleryController@ifter');
Route::get('gallery/therapy', 'GalleryController@therapy');
Route::get('gallery/play', 'GalleryController@play');
Route::get('gallery/prize', 'GalleryController@prize');
Route::get('gallery/outing', 'GalleryController@outing');
Route::get('gallery/sport', 'GalleryController@sport');
