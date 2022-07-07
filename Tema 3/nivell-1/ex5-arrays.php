<?php

//declaración de variables
//tipo int
$array5 = array(1, 2, 3, 4, 5);
$array3 = array(6, 7, 8);



//-------------------------AÑADIR VALOR A ARRAY-------------------------

$array3[] = 9;

//esto imprime (con var_dump) por pantalla todo el recorrido del array y su índice 
echo "<pre>";
echo ('<b>El array3 con el nuevo valor es: <br></b>');
var_dump($array3);
echo "</pre>";



//-------------------------UNIR ARRAYS-------------------------

$new_array = array_merge($array5, $array3);

echo ("El tamaño del nuevo array es <b>" . count($new_array). '</b>.');



//-------------------------IMPRIMIR POR PANTALLA VALOR A VALOR (con print_r)-------------------------

echo "<pre>";
echo ('<b>El nuevo array es: <br></b>');
print_r ($new_array);
echo "</pre>";

?>