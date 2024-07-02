<?php
use Illuminate\Support\Facades\Route;
use LP\Calculator\CalculatorController;

Route::get('/calculator',function(){
    echo "hello testing";
});

Route::get('/add/{a}/{b}',[CalculatorController::class,'add']);
Route::get('/substract/{a}/{b}',[CalculatorController::class,'substract']);