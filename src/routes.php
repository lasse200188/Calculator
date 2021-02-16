<?php

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'lasse200188\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'lasse200188\Calculator\CalculatorController@subtract');

