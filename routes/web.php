<?php

use Illuminate\Support\Facades\Route;
include(app_path().'/global_constants.php');

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

Route::group(array('prefix' => 'admin'),  function() {
    Route::get('/', array('as' => 'admin.login', 'uses' => 'admin\UserController@index'));
    Route::post('/', array('as' => 'admin.login', 'uses' => 'admin\UserController@index'));
    Route::get('/logout', array('as' => 'admin.logout', 'uses' => 'admin\UserController@logout'));

    Route::get('/loans', array('as' => 'admin.loansDetails', 'uses' => 'admin\LoansController@index'));
    Route::get('/process-data', array('as' => 'loans.process', 'uses' => 'admin\EmiDetailsController@index'));
    Route::get('/process-data-emi', array('as' => 'loans.process.emi', 'uses' => 'admin\EmiDetailsController@process'));
});
