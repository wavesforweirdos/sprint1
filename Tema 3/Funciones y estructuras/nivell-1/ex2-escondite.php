<?php


function escondite()
{
    $msj = 'Vamos a jugar al escondite... <br>';
    $contar_hasta = 10;

    for ($i = 0; $i <= $contar_hasta; $i += 2) {

        if ($i < $contar_hasta) {
            $msj .= $i . '... ';
        } else {
            $msj .= $i . '... YA!';
        }
    }
    return $msj;
}

$msj = escondite();
echo $msj;

?>