<?php

$numeros = [1, 2, 3, 4, 5];
$multiplicador = 2;

//mapear o array original para outro array com o resultado da multiplicação
    //Para isso vamos usar o array_map = recebe uma função e o array original
    //a funcao recebe cada item do array original
    //As funções anônimas do php não tem acesso ao escopo externo então importamos com use
$resultado = array_map(function ($item) use ($multiplicador) {
    return $item * $multiplicador;
}, $numeros);

var_dump($resultado);

//Agora com arrow functions (funções de seta) nossas funções anônimas ficam mais suscintas assim:
    //Essa sintaxe é quando a arrow functions só tem 1 linha
    //Temos acesso ao escopo externo

$resultado2 = array_map(fn ($item) => $item * $multiplicador, $numeros);

var_dump($resultado2);


