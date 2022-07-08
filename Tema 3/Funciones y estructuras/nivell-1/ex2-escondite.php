<?php


function escondite()
{
    $msj = 'Vamos a jugar al escondite... <br>';

    for ($i = 0; $i <= 10; $i += 2) {

        if ($i < 10) {
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