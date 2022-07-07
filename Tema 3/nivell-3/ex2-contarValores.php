<?php

$X = array(10, 20, 30, 40, 50, 10);;
$valor_buscado = 10;

function cuenta_valor($array, $valor_buscado) {

    if (!is_array($array))
    {
        return 'No estás buscando dentro de un array.';
    } else 
    {
        //recorremos el array con un foreach
        $i=0;
        foreach($array as $valor) {
            if ($valor_buscado === $valor){
                $i++;
            }
        }
        return $i;
    }

}

$contador = cuenta_valor($X, $valor_buscado);

echo "<pre>";
echo 'Teniendo el siguiente array:<br>';
print_r($X);
echo 'El número de veces que aparece '.$valor_buscado. ' es '.$contador.'.'; 
echo "</pre>";

?>