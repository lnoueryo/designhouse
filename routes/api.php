<?php

use Illuminate\Http\Request;
// use Illuminate\Routing\Route;

Route::group(['middleware' => ['auth:api']], function(){

});
Route::group(['middleware' => ['guest:api']], function(){
    Route::post('register', 'Auth\RegisterController@register');
    Route::post('verification/verify/{user}', 'Auth\VerificationController@verify')->name('verification.verify');
    Route::post('verification/resend', 'Auth\VerificationController@resend');
});
