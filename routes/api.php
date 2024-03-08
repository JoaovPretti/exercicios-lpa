<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('alterar', function (Request $request){   

    $nome = $request->input('name');

    return $nome;  

});   

 
Route::get('nome/idade', function (Request $request){   


    $nome = $request->input('name');   

    $idade = $request->input('year');   

    return 'Meu nome é ' . $nome . ' tenho ' . $idade . ' anos de idade ';   
});   
 


Route::get('nome/nascimento/cidade' , function (Request $request){   

 
    $nome = $request->input('name');   

    $nascimento = $request->input('ano');    

    $cidade = $request->input('cidade');   


    return ' Meu nome é ' . $nome . ' nasci no ano de ' . $nascimento . ' na cidade de ' . $cidade;  
});   


Route::get('Calculadora' , function (Request $request){  

    $primerioNumero = $request->input('numeroUm');   

    $segundoNumero = $request->input('numeroDois');   

    $resultado = $primerioNumero + $segundoNumero;  

    return $resultado;  


});  