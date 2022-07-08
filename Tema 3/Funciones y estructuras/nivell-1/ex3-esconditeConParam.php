<?php

$max_num = mt_rand(0, 50); //número aleatorio hasta el 50

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

$msj = escondite($max_num);
echo $msj;

?>