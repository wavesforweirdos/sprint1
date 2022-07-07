<?php

//declaración de variables
//tipo int
$X = 10;
$Y = 2;

//tipo double
$N = 45.2;
$M = 9.7;

//-------------------------OPERACIONES-------------------------

function operaciones($num1, $num2)
{
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $producto = $num1 * $num2;
    $division = $num1 / $num2;
    $modulo = $num1 % $num2;

    $resultado = 'Para los números <b>' . $num1 . '</b> y <b>' . $num2 . '</b><br>';
    $resultado .= 'la <b>suma</b> es igual a <b>' . $suma . '</b>,<br>';
    $resultado .= 'la <b>resta</b> es igual a <b>' . $resta . '</b>,<br>';
    $resultado .= 'el <b>producto</b> es igual a <b>' . $producto . '</b>,<br>';
    $resultado .= 'la <b>división</b> es igual a <b>' . $division . '</b> y <br>';
    $resultado .= 'el <b>módulo</b> es igual a <b>' . $modulo . '</b>.<hr>';
    return $resultado;
}

echo (operaciones($X, $Y));
echo (operaciones($N, $M));

//-------------------------DOBLE-------------------------
function doble($num)
{
    $doble = $num * 2;

    $resultado = 'El doble de <b>' . $num . '</b> es <b>' . $doble . '</b>.<br>';
    return $resultado;
}

echo (doble($X));
echo (doble($Y));
echo (doble($N));
echo (doble($M));

//-------------------------SUMA DE TODAS LAS VARIABLES-------------------------

$suma_variables = $X + $Y + $M + $N;

echo ('<hr>La suma de <b>' . $X . '</b> + <b>' . $Y .  '</b> + <b>' . $M . '</b> + <b>' . $N . '</b> es <b>' . $suma_variables . ' </b>.');

//-------------------------PRODUCTO DE TODAS LAS VARIABLES-------------------------

$producto_variables = $X + $Y + $M + $N;

echo ('<hr>El producto de <b>' . $X . '</b> x <b>' . $Y .  '</b> x <b>' . $M . '</b> x <b>' . $N . '</b> es <b>' . $producto_variables . ' </b>.');

?>