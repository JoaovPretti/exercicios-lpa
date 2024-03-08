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


Route::get('calculadora/dois' , function (Request $request){ 


    $primerioNumero = $request->input('numeroUm'); 

    $segundoNumero = $request->input('numeroDois'); 

    $terceiroNumero = $request->input('numeroTres'); 

    $resultado = $primerioNumero - $segundoNumero - $terceiroNumero; 

    return $resultado; 

}); 

Route::get('calculadora/divisao' , function (Request $request){ 


    $primerioNumero = $request->input('numeroUm'); 

    $segundoNumero = $request->input('numeroDois'); 

    $resultado = $primerioNumero / $segundoNumero; 

    return $resultado; 

}); 

Route::get('calculadora/multiplicacao' , function (Request $request){ 


    $primerioNumero = $request->input('numeroUm'); 

    $segundoNumero = $request->input('numeroDois'); 

    $resultado = $primerioNumero * $segundoNumero; 


    return $resultado; 
}); 

Route::get('media' , function (Request $request){ 



    $primeraNota = $request->input('notaUm'); 

    $segundaNota = $request->input('notaDois'); 

    $terceiraNota = $request->input('notaTres'); 

    $quartaNota = $request->input('notaQuatro'); 

    $quintaNota = $request->input('notaCinco'); 

    $resultado = ($primeraNota + $segundaNota + $terceiraNota + $quartaNota +$quintaNota) / '5'; 

    return $resultado; 


}); 

Route::get('calculadora/divisao/dois' , function (Request $request){ 


    $primerioNumero = $request->input('numeroUm'); 

    $segundoNumero = $request->input('numeroDois'); 

    $resultado = $segundoNumero / $primerioNumero; 

    return $resultado; 

});


Route::get('dobro' , function (Request $request){

    $primerioNumero = $request->input('numero');
    $resultado = $primerioNumero * '2';

    return ' O dobro do número ' . $primerioNumero . ' é ' . $resultado;

});

Route::get('retangulo' , function (Request $request){

    $base = $request->input('numero1');
    $altura = $request->input('numero2');
    $resultado = $base * $altura;

    return $resultado;

});

Route::get('loja' , function (Request $request){
    
    $produto = $request->input('preço');
    $desconto = $request->input('cupom');
    $resultado = $desconto / 100 * $produto;
    $resultado2 = $produto - $resultado;
    
    return ' O preço do produto sem desconto é ' . $produto . ' com o cumpom de desconto de ' . $desconto . ' % fica ' . $resultado2;
});


Route::get('salario' , function (Request $request){

    $salario = $request->input('salario');
    $aumento = $request->input('aumento');

    $resultado = $aumento / 100 * $salario;

    $resultado2 = $salario + $resultado;

    return 'o salario era ' . $salario . ' com o aumento percentual de ' . $aumento . '% ficou ' . $resultado2;
});

Route::get('fidelidade', function (Request $request){

    $valor = $request->input('produto');
    $fidelidade = $valor / 10;

    return $fidelidade;
});


Route::get('comissao' , function (Request $request){


    $valor = $request->input('venda');
    $comissao = 5;
    $salario = $valor / 100 * $comissao;

    return $salario;

});











