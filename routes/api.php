<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\jugador_controller;

Route::middleware('auth:sanctum')->get('/user',function($request)
{ return $request->user();
    
}
);


Route::controller(jugador_controller::class)->group(function(){
    Route::get('/jugador','index');
    Route::get('/jugador/{id}','show');
});

