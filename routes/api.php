<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('alterar', function (Request $request){   

    $nome = $request->input('name');

    return $nome;  

});   