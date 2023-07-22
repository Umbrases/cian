<?php


use App\Http\Controllers\Auth\Login\DestroyController;
use App\Http\Controllers\Auth\PasswordConfirmation\CreateController;
use App\Http\Controllers\Auth\PasswordConfirmation\StoreController;
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

Route::view('/', 'welcome')->name('welcome');

Route::group(['namespace' => 'Auth'] ,function (){
    Route::group(['namespace' => 'Register', 'middleware' => 'guest'], function () {
        Route::get('/register', 'CreateController')->name('register');
        Route::post('/register', 'StoreController')->name('register.store');
    });

    Route::group(['namespace' => 'Login', 'middleware' => 'guest'], function () {
        Route::get('/login', 'CreateController')->name('login');
        Route::post('/login', 'StoreController')->name('login.store');
    });

    Route::post('/logout', DestroyController::class)->name('logout')->middleware('auth');

    Route::group(['middleware' => 'auth', 'namespace' => 'EmailVerification'], function () {
        Route::get('/email/verify', 'EmailVerificationPromptController')->name('verification.notice');
        Route::get('/email/verify/{id}/{hash}', 'VerifyEmailController')->name('verification.verify')->middleware('signed');
        Route::post('/email/verification-notification', 'EmailVerificationNotificationController')->name('verification.send');
    });

    Route::group(['namespace' => 'ForgotPassword', 'middleware' => 'guest'], function () {
        Route::get('/forgot-password', 'CreateController')->name('password.request');
        Route::post('/forgot-password', 'StoreController')->name('password.email');
    });

    Route::group(['namespace' => 'ResetPassword', 'middleware' => 'guest'], function () {
        Route::get('/reset-password', 'CreateController')->name('password.reset');
        Route::post('/reset-password', 'StoreController')->name('password.update');
    });

    Route::view('/profile', 'profile')->middleware(['verified', 'password.confirm'])->name('profile');

    Route::get('/confirm-password', CreateController::class)->middleware('auth')->name('password.confirm');
    Route::post('/confirm-password', StoreController::class)->middleware('auth');

    Route::group(['namespace' => 'TwoFA'], function (){
        Route::get('/dashboard', 'IndexController')->middleware('verified')->name('dashboard');
        Route::post('/2fa', 'StoreController')->name('2fa.post');
        Route::get('2fa/reset', 'ResendController')->name('2fa.resend');
    });
});


Route::get('/search', 'SearchController')->name('search.index');


Route::group(['namespace' => 'LivingSpace', 'middleware' => '2fa'], function (){
    Route::get('/livingSpace/create', 'CreateController')->name('create');
    Route::post('/livingSpace', 'StoreController')->name('store');
});


Route::group(['namespace' => 'Flat'], function (){
    Route::get('/flat', 'IndexController')->name('flat.index');
    });


Route::group(['namespace' => 'Room'], function (){
    Route::get('/room', 'IndexController')->name('room.index');
    });


Route::group(['namespace' => 'House'], function (){
    Route::get('/house', 'IndexController')->name('house.index');
    });


Route::group(['namespace' => 'Sale'], function (){
    Route::get('/sale/{livingSpace}', 'ShowController')->name('sale.show');
    Route::get('/sale/{livingSpace}/edit', 'EditController')->name('sale.edit');
    Route::patch('/sale/{livingSpace}', 'UpdateController')->name('sale.update');
    Route::delete('/sale/{livingSpace}', 'DestroyController')->name('sale.destroy');

});




