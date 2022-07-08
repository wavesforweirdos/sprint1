<?php

function escondite($num)
{
    $msj = 'Vamos a jugar al escondite. ¡Contaré hasta '.$num.'! <br>';

    for ($i = 0; $i <= $num; $i += 2) {

        if ($i < $num) {
            $msj .= $i . '... ';
        } else {
            $msj .= $i . '... YA!';
        }
    }
    return $msj;
}

$msj = escondite(10);
echo $msj;

?>