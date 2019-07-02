<?php

use App\User;
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

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/print', function () {
        return view('print');
    });
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('accountsettings', 'DashboardController@accountSettings');
    Route::post('changePassword', 'DashboardController@changePassword');
    Route::resource('/dashboard/tkm/orders', 'TkmOrdersController');
    Route::resource('/dashboard/tkm/goods', 'TkmGoodsController');
    Route::resource('/dashboard/was/orders', 'WasOrdersController');
    Route::resource('/dashboard/was/goods', 'GoodsController');
    Route::get('/addagain/{id}', 'GoodsController@addagain');
    Route::get('/update/{id}', 'GoodsController@edit');
    Route::get('/delete/{id}', 'GoodsController@destroy');

    Route::post('/updatetit/{id}', 'GoodsController@updateit');
    Route::get('/getresults/{row},{col},{rack}', 'GoodsController@getlocresults');
    Route::post('/was/status', 'WasOrdersController@statuschange');
    //Route::get('/was/status', 'WasOrdersController@statuschange');
    Route::get('/getBarcodeDetails/{barcode}', 'GoodsController@ShowBarcodes');
    Route::get('was/goods/addagain/{idtoprint}', 'GoodsController@MultibarcodePrnting');

    // Route::get('/addagain/{id}', 'GoodsController@addagain');
    Route::post('/was/update/{id}', 'WasOrdersController@status');
    Route::get('stockOverview', 'DashboardController@StockChart');
    Route::get('stock/chart','StockController@chart');
    Route::get('goodslocation','GoodsController@LocationControl');
    Route::get('/PDF/{codes}', function ($codes) {
        return view('was/goods/pdf',compact('codes'));
    });
});

Route::get('/wasadminupdate', function(){
    $user = User::where('email','was@demo.com')->get();
    $user[0]->role = 2;
    $user[0]->save();
    return "done";
});