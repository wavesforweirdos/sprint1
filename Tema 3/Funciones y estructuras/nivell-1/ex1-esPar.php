<?php
$random = mt_rand(0, 100); //crea un número aleatorio hasta el 100
$msj = 'El número aleatorio es <b>' . $random . '</b> ';


function esPar($num){
if ($num % 2){
    return false;
}else{
    return true;
}
}

function mostrarMsj($num,$msj)
{
    if ($num === 0) {
        $msj .= 'y es <b>par</b> aunque habrá quien lo cuestione.';
    } elseif (esPar($num)) {
        $msj .= 'y es <b>par.</b>';
    } else {
        $msj .= 'y es <b>impar.</b>';
    }

    return $msj;
}

echo mostrarMsj($random,$msj);
