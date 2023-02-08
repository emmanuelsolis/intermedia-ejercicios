
<?php
if (isset($_POST['enviar'])){
    $palabra=$_POST['palabra'];
    //Creamos una función que recibe una palabra de texto y devuelve si es palíndromo o no.
    function espalindromo($palabra){
        //Creamos un array con las letras de la palabra de texto 
        $array = str_split($palabra);
        //Invertimos el array
        $voltear=array_reverse($array);
        //Comparamos si la palabra de texto es igual al array invertido
        return $palabra == implode("",$voltear) ? "$palabra, es un palindromo" : "$palabra, no es palindromo";
    }
    
    echo espalindromo("$palabra");
}
?>
<br><br>
<a href="index.html">Regresar a home</a>