<?php
$numero = (int)mt_rand(2, 200);
//(int) me aseguro la conversión a entero de cualquier número introducido

function erastostenes($num)
{
    $lista_numeros = 'Criba de Erastóstenes para los números primos menores que ' . $num . ':<br>';

    if ($num == 0 || $num == 1) {
        $lista_numeros = 'El número ' . $num . ' no se clasifica.';
    } elseif ($num < 0) {
        $lista_numeros = 'Los números negativos no se clasifican.';
    } elseif ($num >= 2) {
        for ($i = 2; $i < $num; $i++) {
            //bucle para recorrer todos los números del 2 al $num
            if (esPrimo($i)) $lista_numeros .= $i . ' ';
            //se añaden a la lista todos aquellos numeros del bucle que sean primos

        }
    }

    return $lista_numeros;
}

function esPrimo($cifra)
{
    $contador = 0;

    for ($i = 2; $i <= $cifra; $i++) {
        if ($cifra % $i == 0) {
            //Solo entraran los números enteros que sean divisibles por $i.

            ++$contador; //sumamos 1 al contador cada vez que sea divisible por $i
            if ($contador > 1) return false; //si es divisible más de una vez, no es primo (false)
        }
    }
    return true; //si sólo es divisible una vez, es primo (true)
}

echo erastostenes($numero);
