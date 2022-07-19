<?php

$cadena = 'Hello world';

function array_sin_espacios($string)
{

    //--------------ELIMINAMOS ESPACIOS----------------------

    //str_replace($searchString, $replaceString, $originalString, $count);
    $string_sin_espacios = str_replace(' ', '', $string);

    //--------------CREAMOS ARRAY----------------------
    $array = str_split($string_sin_espacios);
    return $array;
}

$array_de_cadena = array_sin_espacios($cadena);

echo "<pre>";
echo ('El array creado a partir de "<b>' . $cadena . '</b>" es: <br>');
var_dump($array_de_cadena);
echo "</pre>";

?>