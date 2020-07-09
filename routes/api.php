<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('registerUser', 'RegisterCustomer@createCustomer');
Route::get('listUsers', 'GetUsers@listAllUsers');
Route::get('listUsers/email/{email}', 'GetUsers@listUserBuEmail');
Route::get('listUsers/city/{city}', 'GetUsers@listUserBuCity');
Route::get('listUsers/state/{state}', 'GetUsers@listUserBuState');
Route::get('getCustomerDetails/{id}', 'GetCustomerDetail@listCustomer');
