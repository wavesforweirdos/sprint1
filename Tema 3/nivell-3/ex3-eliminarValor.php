<?php

$X = array(10, 10, 10, 20, 30, 40, 50, 10, 60, 70, 20);
$valor_eliminar = 10;

function eliminar_valor($array, $valor_eliminar)
{

    if (!is_array($array)) {
        return 'No estás buscando dentro de un array.';
    } else {
        //array_diff() devuelve el array eliminando el valor indicado
        $array = array_diff($array, array($valor_eliminar));
        
        //array_values() devuelve todos los valores del array e indexa la matriz numéricamente.
        return array_values($array);
    }
}

$new_array = eliminar_valor($X, $valor_eliminar);

echo "<pre>";
echo 'Teniendo el siguiente array:<br>';
print_r($X);
echo 'Si queremos eliminar el valor ' . $valor_eliminar . ', el array resultante es: <br>';
print_r($new_array);
echo "</pre>";

?>