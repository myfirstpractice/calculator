<?php
Route::get('calculator', function(){
echo 'Hello from the calculator package!';
});


Route::get('add/{a}/{b}', 'imran\calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'imran\calculator\CalculatorController@subtract');