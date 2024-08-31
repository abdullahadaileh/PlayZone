<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\FieldHistoryController;
use App\Http\Controllers\FieldImagesController;
use App\Http\Controllers\FieldTypeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SportTypeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ** controllers ** //

// Routes for UserController
Route::resource('users', UserController::class);

// Routes for BookingController
Route::resource('bookings', BookingController::class);

// Routes for ContactUsController
Route::resource('contact-us', ContactUsController::class);

// Routes for FieldController
Route::resource('fields', FieldController::class);

// Routes for FieldHistoryController
Route::resource('field-histories', FieldHistoryController::class);

// Routes for FieldImagesController
Route::resource('field-images', FieldImagesController::class);

// Routes for FieldTypeController
Route::resource('field-types', FieldTypeController::class);

// Routes for SportTypeController
Route::resource('sport-types', SportTypeController::class);



/////landing_page


Route::get('/', function () {
    return view('landing_page.landing');
})->name('Home');

Route::get('/contact', function () {
    return view('landing_page.pages.contact');
})->name('contact');

Route::get('/about', function () {
    return view('landing_page.pages.about');
})->name('about');
Route::resource('services', ServiceController::class);
Route::get('/blogs', function () {
    return view('landing_page.pages.blogs');
})->name('blogs');



///Dashboard 
Route::get('/dash', function () {
    return view('Dashboard.main');
});