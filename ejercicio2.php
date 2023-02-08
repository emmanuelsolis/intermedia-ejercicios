<?php

function espalindromo($cadena){
    $array = str_split($cadena);
    $voltear=array_reverse($array);

    return $cadena == implode("",$voltear) ? "Es palindromo" : "No es palindromo";
}

echo espalindromo("anitalavalatina");