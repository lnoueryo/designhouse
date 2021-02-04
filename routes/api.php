<?php

use Illuminate\Http\Request;


Route::group(['middleware' => ['auth:api']], function(){

});
Route::group(['middleware' => ['guest:api']], function(){
    Route::post('register', 'Auth\RegisterController@register');
});
