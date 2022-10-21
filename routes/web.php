<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return redirect()->route('home');
// });

Auth::routes();
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id?}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get('/', [FrontendController::class, 'index'])->name('welcome');
Route::get('/faq', [FrontendController::class, 'faqIndex'])->name('faq');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], function () {
    Route::get('', [FrontendController::class, 'adminLogin'])->name('admin.login');
});

Route::post('/registrations', [HomeController::class, 'manuallRegistrations'])->name('user.manual.registrations');


/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
*/
Route::group(['prefix' => 'user'], function () {
    Route::get('/profile', [UserController::class, 'profileIndex'])->name('user.profile');
});

Route::group(['middleware' => ['auth','verified']], function () {

    Route::group(['prefix' => 'user'], function () {
        Route::get('/dashboard', 'DashboardController@userDashboard')->name('user.dashboard');
    });

    Route::get('/home', 'HomeController@index')->name('home');


    Route::resource('users', 'UserController');
    Route::get('/users/{user?}', 'UserController@profile')->name('users.index');
    Route::get('/profile/{user}', 'UserController@profile')->name('profile.edit');
    Route::post('/profile/{user}', 'UserController@profileUpdate')->name('profile.update');

    Route::get('/settings', 'SettingController@index')->name('settings.index');
    Route::post('/settings', 'SettingController@update')->name('settings.update');

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/dashboard', 'DashboardController@inspectorDashboard')->name('admin.dashboard');
    });
});
