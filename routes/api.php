<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('nome', function (Request $request) {

    $nome = $request->input('name');

    return $nome;
});


Route::get('nome/idade', function (Request $request) {


    $nome = $request->input('name');

    $idade = $request->input('year');

    return 'Meu nome é ' . $nome . ' tenho ' . $idade . ' anos de idade ';
});



Route::get('nome/nascimento/cidade', function (Request $request) {


    $nome = $request->input('name');

    $nascimento = $request->input('ano');

    $cidade = $request->input('cidade');


    return ' Meu nome é ' . $nome . ' nasci no ano de ' . $nascimento . ' na cidade de ' . $cidade;
});


Route::get('Calculadora', function (Request $request) {

    $primerioNumero = $request->input('numeroUm');

    $segundoNumero = $request->input('numeroDois');

    $resultado = $primerioNumero + $segundoNumero;

    return $resultado;
});


Route::get('calculadora/dois', function (Request $request) {


    $primerioNumero = $request->input('numeroUm');

    $segundoNumero = $request->input('numeroDois');

    $terceiroNumero = $request->input('numeroTres');

    $resultado = $primerioNumero - $segundoNumero - $terceiroNumero;

    return $resultado;
});

Route::get('calculadora/divisao', function (Request $request) {


    $primerioNumero = $request->input('numeroUm');

    $segundoNumero = $request->input('numeroDois');

    $resultado = $primerioNumero / $segundoNumero;

    return $resultado;
});

Route::get('calculadora/multiplicacao', function (Request $request) {


    $primerioNumero = $request->input('numeroUm');

    $segundoNumero = $request->input('numeroDois');

    $resultado = $primerioNumero * $segundoNumero;


    return $resultado;
});

Route::get('media', function (Request $request) {



    $primeraNota = $request->input('notaUm');

    $segundaNota = $request->input('notaDois');

    $terceiraNota = $request->input('notaTres');

    $quartaNota = $request->input('notaQuatro');

    $quintaNota = $request->input('notaCinco');

    $resultado = ($primeraNota + $segundaNota + $terceiraNota + $quartaNota + $quintaNota) / '5';

    return $resultado;
});

Route::get('calculadora/divisao/dois', function (Request $request) {


    $primerioNumero = $request->input('numeroUm');

    $segundoNumero = $request->input('numeroDois');

    $resultado = $segundoNumero / $primerioNumero;

    return $resultado;
});


Route::get('dobro', function (Request $request) {

    $primerioNumero = $request->input('numero');
    $resultado = $primerioNumero * '2';

    return ' O dobro do número ' . $primerioNumero . ' é ' . $resultado;
});

Route::get('retangulo', function (Request $request) {

    $base = $request->input('numero1');
    $altura = $request->input('numero2');
    $resultado = $base * $altura;

    return $resultado;
});

Route::get('loja', function (Request $request) {

    $produto = $request->input('preço');
    $desconto = $request->input('cupom');
    $resultado = $desconto / 100 * $produto;
    $resultado2 = $produto - $resultado;

    return ' O preço do produto sem desconto é ' . $produto . ' com o cumpom de desconto de ' . $desconto . ' % fica ' . $resultado2;
});


Route::get('salario', function (Request $request) {

    $salario = $request->input('salario');
    $aumento = $request->input('aumento');

    $resultado = $aumento / 100 * $salario;

    $resultado2 = $salario + $resultado;

    return 'o salario era ' . $salario . ' com o aumento percentual de ' . $aumento . '% ficou ' . $resultado2;
});

Route::get('fidelidade', function (Request $request) {

    $valor = $request->input('produto');
    $fidelidade = $valor / 10;

    return $fidelidade;
});


Route::get('comissao', function (Request $request) {


    $valor = $request->input('venda');
    $comissao = 5;
    $salario = $valor / 100 * $comissao;

    return $salario;
});


Route::get('horas', function (Request $request) {

    $dias = $request->input('days');

    $horas = $dias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;

    return 'o total de dias foram ' . $dias . ' e o total de horas desses dias é ' . $horas .
        ' e possui um total de ' . $minutos . ' minutos, e um total de ' . $segundos . ' segundos';
});

Route::get('programa', function (Request $request) {

    $produto = $request->input('quantidade');
    $preço = $request->input('preço');

    $resultado = $produto * $preço;

    return ' A quantidade de produto foi ' . $produto . ' o preço do produto é ' . $preço . ' o total da compra foi ' . $resultado;
});


Route::get('verifica/idade', function (Request $request){

    $idade = $request->input('idade');

    if($idade >= 18){
        return "maior de idade";
    } else {
        return "menor de idade";
    }

});


Route::get('verifica/par', function (Request $request){

   $numero = $request->input('numero');
   if($numero % 2 == 0){
    return 'par';
   } else{
    return 'impar';
   }

});


Route::get('verifica/numero', function (Request $request){

    $numero = $request->input('numero');

    if($numero >= 10){
        return "o numero é maior que 10";
    } else {
        return "o numero é menor que 10";
    }

});

Route::get('verifica/temperatura', function (Request $request){

    $temp = $request->input('temperatura');

    if($temp >= 30){
        return "Está quente, a temperatura ambiente é " . $temp . " °C";
    } else {
        return "a temperatura ambiente é " . $temp . " °C";
    }

});

Route::get('verifica/positivo' , function(Request $request){

    $numero = $request->input('numero');

    if($numero > 0){
        return "O número " . $numero . " é positivo";
    } else if($numero == 0){
        return "O número é zero";
    } else {
        return " O número " . $numero . " é negativo";
    }

});

Route::get('verifica/maior/numero', function (Request $request){

    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');

    if($numero1 > $numero2){
        return "O número " . $numero1 . " é maior que " . $numero2;
    } else {
        return "O número " . $numero1 . " é menor que " . $numero2;
    }

});

Route::get('verifica/divisivel', function (Request $request){

    $numero = $request->input('numero');
    if($numero % 3 == 0){
     return 'O número ' . $numero . " é divisivel por 3";
    } else{
     return 'O número ' . $numero . " não é divisivel por 3";
    }
 
 });

 Route::get('lista/exercicios1' , function(Request $request){

    $numero = $request->input('numero');

    if($numero > 10){
        return "O número " . $numero . " é maior que 10";
    } else if($numero == 10){
        return "O número é igual a 10";
    } else {
        return " O número " . $numero . " é menor que 10";
    }

});

Route::get('lista/exercicios2' , function(Request $request){

    $numero = $request->input('numero');

    if($numero > 0){
        return "O número " . $numero . " é positivo";
    } else if($numero == 0){
        return "O número é zero";
    } else {
        return " O número " . $numero . " é negativo";
    }

});

Route::get('lista/exercicios3', function (Request $request){

    $idade = $request->input('idade');

    if($idade >= 18){
        return "maior de idade";
    } else {
        return "menor de idade";
    }

});

Route::get('lista/exercicios4', function (Request $request){

    $numero = $request->input('numero');
    if($numero % 2 == 0){
     return 'par';
    } else{
     return 'impar';
    }
 
 });


 Route::get('lista/exercicios5', function (Request $request){

    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');

    if($numero1 > $numero2){
        return "O número " . $numero1 . " é maior que " . $numero2;
    } else {
        return "O número " . $numero1 . " é menor que " . $numero2;
    }

});

Route::get('lista/exercicios6', function (Request $request){

    $numero = $request->input('numero');
    if($numero % 9 == 0){
     return 'O número ' . $numero . " é divisivel por 9";
    } else{
     return 'O número ' . $numero . " não é divisivel por 9";
    }
 
 });

 Route::get('lista/exercicios7', function (Request $request){

    $temp = $request->input('temperatura');

    if($temp >= 30){
        return "Está quente, a temperatura ambiente é " . $temp . " °C";
    } else {
        return "a temperatura ambiente é " . $temp . " °C";
    }

});

Route::get('lista/exercicios8', function (Request $request){

    $numero = $request->input('numero');
    if($numero % 7 == 0){
     return 'O número ' . $numero . " é divisivel por 7";
    } else{
     return 'O número ' . $numero . " não é divisivel por 7";
    }
 
 });

 Route::get('lista/exercicios9', function (Request $request){

    $idade = $request->input('idade');

    if($idade <= 12){
        return "Você é uma criança";
    } else {
        return "Você não é uma criança";
    }

});

Route::get('lista/exercicios10', function (Request $request){

    $numero = $request->input('numero');
    if($numero > 0){
        if($numero %2 != 0){
            return 'O número é positivo e impar';
        }
    }
 
 });

Route::get('lista/exercicios11' , function(Request $request){

    $numero = $request->input('numero');

    if($numero > 100){
        return "O número " . $numero . " é maior que 100";
    } else if($numero == 100){
        return "O número é igual a 100";
    } else {
        return " O número " . $numero . " é menor que 100";
    }

});

Route::get('lista/exercicios12', function (Request $request){

    $numero = $request->input('numero');
    if($numero % 6 == 0){
     return "O número " . $numero . " é divisivel por 6";
    } else{
     return "O número " . $numero . " não é divisivel por 6";
    }
 
 });

 Route::get('lista/exercicios13', function (Request $request){

    $nome = $request->input('nome');
    if($nome == 'Alice'){
        return "Olá, Alice!";
    } else{
        return "Seja bem vindo " . $nome;
    }

 });

 Route::get('lista/exercicios14', function (Request $request){

    $idade = $request->input('idade');
    $habilitação = $request->input('carteira');

    if ($idade >= 18) {
        if ($habilitação =='sim') {
            return 'Você é de maior e possui habilitação, então pode dirigir';
        } else {
            return 'Você é de maior mas não pode dirigir, porque não tem habilitação';
        } 
    } else {
        return 'Você não possui habilitação e nem é maior de idade';
    }
 });

 Route::get('lista/exercicios16' , function (Request $request){

    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');

    if ($numero1 != $numero2){
        if($numero1 < $numero2){
            return 'O número ' . $numero1 . ' é o menor número entre eles ';
        } else {
            return 'O número ' . $numero2 . ' é o menor número entre eles ';
        }
    } else {
        return "Os números são iguais";
    }

 });

 Route::get('lista/exercicios17', function (Request $request){

    $idade = $request->input('idade');
    $nome = $request->input('nome');

    if($idade >= 18){
        return $nome . " você é maior de idade";
    } else {
        return $nome . " você é menor de idade";
    }

});

Route::get('lista/exercicios18' , function (Request $request){

    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    

    if($numero1 == 0){
        return "não é possível efetuar a divisão pois o primeiro número é zero";
    } else if ($numero2 == 0){
        return "não é possível efetuar a divisão pois o segundo número é zero";
    } else {
        $resultado = $numero1 / $numero2;
        return ' O resultado foi ' . $resultado;
    }

});

Route::get('lista/exercicios19' , function (Request $request){

    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    $resultado = $numero1 * $numero2;

    if($resultado >100){
        return "O resultado foi " . $resultado . " ou seja é maior que 100";
    } else if($resultado == 100){
        return "O resultado" . $resultado . " é igual a 100";
    } else {
        return "O resultado foi " . $resultado . " ou seja é menor que 100 ";
    }


});

Route::get('lista/exercicios20' , function (Request $request){

 
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    $resultado = $numero1 + $numero2;

    if($resultado % 2 == 0){
        return $numero1 * $numero2;
    } else {
        return  $numero1 / $numero2;
    }
      
});

Route::get('exercicios/complementar1' , function (Request $request){

    $nota1 = $request->input('nota1');
    $nota2 = $request->input('nota2');
    $nota3 = $request->input('nota3');
    $resultado = ($nota1 + $nota2 + $nota3) / 3;

    if($resultado >= 7 ){
        return "Parabéns você foi aprovado com a média de " . $resultado;
    }else {
        return "Infelizmente você não foi aprovado, sua média foi de " . $resultado;
    }

});

Route::get('exercicios/complementar2' , function (Request $request){

   $renda = $request->input('renda');
   if ($renda <= 1900){
    return 'isento de imposto';
   }if ($renda >1900){
    if ($renda <= 2800){
        return $renda -($renda * 7 / 100);
    }if ($renda >2800){
        if($renda <=3700){
            return $renda - ($renda *15 / 100)
        ;}if ($renda >=3700){
            return $renda - ($renda *22 / 100);
        }
    }
       
    
   }
    
});