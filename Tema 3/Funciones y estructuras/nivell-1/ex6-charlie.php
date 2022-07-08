<?php


function isBitten()
{
    $r = rand(0, 1);
    if ($r == 1) {
        return true;
    } else {
        return false;
    }
}

$resultado = isBitten();
echo $resultado ? '¡Charlie me ha mordido el dedo! 😲' : 'Charlie no me ha mordido el dedo... 🥰'; //operador ternario

?>