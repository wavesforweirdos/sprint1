<?php

$X = array(10, 10, 10, 20, 30, 40, 50, 10, 60, 70, 20);
$valor_eliminar = 10;

function eliminar_valor($array, $valor_eliminar)
{

    if (!is_array($array)) {
        return 'No estás buscando dentro de un array.';
    } else {
        //recorremos el array con un foreach
        print_r($array);
        echo '<br>';

        $array_length = count($array);

        for ($i = 0; $i <= $array_length; $i++) {
            if ($valor_eliminar === $array[$i]) {
                array_splice($array, $i, 1);
            }
            print_r($array);
            echo '<br>';;
        }

        return $array;
    }
}

$new_array = eliminar_valor($X, $valor_eliminar);

echo "<pre>";
echo 'Teniendo el siguiente array:<br>';
print_r($X);
echo 'Si queremos eliminar el valor ' . $valor_eliminar . ', el array resultante es: <br>';
print_r($new_array);
echo "</pre>";
