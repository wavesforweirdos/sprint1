<?php
$random = mt_rand(0, 100); //crea un número aleatorio hasta el 100
$msj = 'El número aleatorio es <b>' . $random . '</b> ';

function esPar($num,$msj)
{
    if ($num == 0) {
        $msj .= 'y es <b>par</b> aunque habrá quien lo cuestione.';
    } elseif ($num % 2 == 0) {
        $msj .= 'y es <b>par.</b>';
    } elseif ($num % 2 != 0) {
        $msj .= 'y es <b>impar.</b>';
    }

    return $msj;
}

echo esPar($random,$msj);

?>
