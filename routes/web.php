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

Route::get('/', 'PagesController@main')->name('main');
Route::get('/team', 'PagesController@team')->name('team');
Route::get('/devis', 'PagesController@devis')->name('devis');
Route::get('/offres', 'PagesController@offres')->name('offres');
Route::get('/detailOffres', 'PagesController@detailOffres')->name('detailOffres');
Route::prefix('firebase')->group(function () {
    Route::get('insert', 'FirebaseDBController@insert');
    Route::get('update', 'FirebaseDBController@update');
});

Route::get('/signature', 'PagesController@signature');
Route::post('/resultSignature', 'PagesController@resultSignature')->name("resultSignature");


Route::post('/sendemail', "SendEmailController@send")->name('sendemail');
