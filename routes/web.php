<?php

use Illuminate\Support\Facades\Route;
use App\Models\Enquiry;
use App\Mail\EnquiryInternal as EnquiryInternal;


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

Route::get('/mail-preview', function () {
    $order = App\Models\Enquiry::where('id', 1)->first();
    return new App\Mail\EnquiryInternal($order);
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'App\Http\Controllers\PageController@index');

Route::post('/enquiry/store', 'App\Http\Controllers\EnquiryController@enquiry');

// Catch all for all other front end pages
Route::get('/{slug}', 'App\Http\Controllers\PageController@view')->where('slug', '.+');


