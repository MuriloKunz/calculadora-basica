<?php
function adicao($a , $b){
    return $a + $b;
}
function subtracao($a , $b){
    return $a - $b;
}
function multiplicacao($a , $b){
    return $a * $b;
}
function divisao($a , $b){
    return $a / $b;
}
function expoente($a , $b){
    return pow($a, $b);
}
$um = readline("informe o valor de A: ");
$dois = readline("informe o valor de B: ");
$tipo  = readline("qual operação gostaria de fazer? valores possíveis a,s,m,d ou e: ");
switch ($tipo){
    case "a" :
        echo "o resultado da soma é: " . adicao($um , $dois);
        break;
    case "s" :
        echo "o resultado da subtração é: " . subtracao($um , $dois);
        break;
    case "m" :
        echo "o resultado da multiplicação é: " . multiplicacao($um , $dois);
        break;
    case "d" :
        echo "o resultado da divisão é: " . divisao($um , $dois);
        break;
    case "e" :
        echo "o resultado do expoente é: " . expoente($um , $dois);
        break;
    default:
        echo "valor errado!";
}