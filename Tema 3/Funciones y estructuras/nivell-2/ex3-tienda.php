<?php
$precio_chocolate = 1;
$precio_chicles = 0.50;
$precio_caramelos = 1.5;

$cantidad_chocolate = mt_rand(0, 10);
$cantidad_chicles = mt_rand(0, 10);
$cantidad_caramelos = mt_rand(0, 10);

function subtotalProducto($cantidad, $precio)
{
    $subtotal = $cantidad * $precio;
    return $subtotal;
}

$total = subtotalProducto($cantidad_chocolate, $precio_chocolate) + subtotalProducto($cantidad_caramelos, $precio_caramelos) + subtotalProducto($cantidad_chicles, $precio_chicles);

if (!$total) {
    echo 'No has comprado nada.';
} else {
    $ticket = 'Tu compra: <br><br>';
    $ticket .= '&nbsp&nbsp' . $cantidad_chocolate . 'x chocolate <br>';
    $ticket .= '&nbsp&nbsp' . $cantidad_chicles . 'x chicle <br>';
    $ticket .= '&nbsp&nbsp' . $cantidad_caramelos . 'x caramelo <br><br>';
    $ticket .= '<b>TOTAL = ' . $total . '€</b>';

    echo $ticket;
}
