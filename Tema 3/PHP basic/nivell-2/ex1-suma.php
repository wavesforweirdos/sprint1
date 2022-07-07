<?php
$valor1 = 1;
$valor2 = 2;

$valor3 = 3;
$valor4 = 2;

$valor5 = 2;
$valor6 = 2;

function operaciones($num1, $num2)
{
    $suma = $num1 + $num2;

    $resultado = 'Para los números <b>' . $num1 . '</b> y <b>' . $num2 . '</b> ';
    $resultado .= 'la <b>suma</b> es igual a <b>' . $suma . '</b>.<br>';

    if ($num1 == $num2) {
        $doble = $suma * 2;
        $resultado .= 'El <b>doble de la suma</b> es igual a <b>' . $doble . '</b>.<br>';
    }

    return $resultado;
}


echo '<p>'.operaciones($valor1, $valor2).'</p>';
echo '<p>'.operaciones($valor3, $valor4).'</p>';
echo '<p>'.operaciones($valor5, $valor6).'</p>';

?>