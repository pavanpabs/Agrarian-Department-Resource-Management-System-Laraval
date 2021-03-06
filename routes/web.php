<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

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

Route::get('/','HomeController@index');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration user Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Registration farmer Routes...
Route::get('register_farmer', 'Auth\RegisterFarmerController@showRegistrationForm')->name('register_farmer');
Route::post('register_farmer', 'Auth\RegisterFarmerController@register')->name('register_farmer');
//farmer Routes...
Route::get('farmers', 'FarmerController@index')->name('farmer.viewall');
Route::put('farmers', 'FarmerController@update')->name('update_farmer');
Route::post('farmers', 'FarmerController@delete')->name('delete_farmer');
// Route::post('register_farmer', 'RegisterFarmerController@register')->name('register_farmer');

//officer Routes...
Route::get('officers', 'OfficerController@index')->name('officer.viewall');
Route::put('officers', 'OfficerController@update')->name('update_officer');
Route::post('officers', 'OfficerController@delete')->name('delete_officer');
//Harvest Routes...
Route::get('harvest', 'HarvestController@index')->name('harvest');
Route::get('harvest_shop', 'HarvestController@shop')->name('harvest.shop');
Route::get('harvest_all', 'HarvestController@viewAll')->name('harvest.viewall');
Route::get('harvest_shop/{id}', 'HarvestController@product')->name('harvest.product');
Route::post('harvest', 'HarvestController@store')->name('harvest.add');
Route::put('harvest_update', 'HarvestController@update')->name('harvest.update');
Route::post('harvest_delete', 'HarvestController@delete')->name('harvest.delete');
Route::post('harvest_buy', 'HarvestController@buy')->name('harvest.buy')->middleware('auth');
Route::get('harvest_confirm', 'HarvestController@confirm')->name('harvest.confirm')->middleware('auth');

//Profile Routes...
Route::get('profile', 'ProfileController@index')->name('profile.view');
Route::put('profile', 'ProfileController@update')->name('profile.update');

// Registration officer Routes...
Route::get('register_officer', 'Auth\RegisterOfficerController@showRegistrationForm')->name('register_officer');
Route::post('register_officer', 'Auth\RegisterOfficerController@register')->name('register_officer');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Confirm Password (added in v6.2)
Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

// Email Verification Routes...
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify'); // v6.x
/* Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify'); // v5.x */
Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

// Route::get('/email/verify', function () {
//     return view('auth.verify');
// })->name('verification.notice');
Route::get('/mailable', function () {
    $name = "Saman";
    $username = "Saman@123.com";
    $password = "XYZ123";
    $url = "http://127.0.0.1:8000/login";

    return new App\Mail\MailPasswordSend($name,$username ,$password , $url);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', function () {
//     return view('vendor.notifications.password_send');
// });
Route::get('/dashboard', 'DashboardController@index');

Route::get('/subsidies', 'SubsidiesController@index');
Route::post('/subsidies', 'SubsidiesController@store');
Route::put('/subsidies', 'SubsidiesController@update');
Route::delete('/subsidies', 'SubsidiesController@delete');

Route::get('/events', 'EventsController@index');
Route::post('/events', 'EventsController@store');
Route::put('/events', 'EventsController@update');
Route::delete('/events', 'EventsController@delete');

Route::get('datatables/data', 'DatatablesController@anyData')->name('datatables.data');

//for testing a view
// Route::get('/test', function () {
//     return view('profile.profile_admin');
// });

Route::get('/fertilizerFarmer', 'FertilizerFarmerController@index');
Route::post('/fertilizerFarmer', 'FertilizerFarmerController@store');

Route::get('/fertilizerOfficer', 'FertilizerOfficerController@index');
Route::post('/fertilizerOfficer', 'FertilizerOfficerController@store');


Route::get('/fertilizerAdmin', 'FertilizerAdminController@index');
Route::post('/fertilizerApprove', 'FertilizerAdminController@approve');
Route::post('/fertilizerReject', 'FertilizerAdminController@reject');
Route::get('/test', function () {
    return view('profile');
});


Route::get('/farmerDashboard', 'FarmerDashboardController@index');

