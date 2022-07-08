<?php

function escondite()
{
    for ($i = 0; $i <= 10; $i+=2) {
        $msj = $i.'... <br>';

        if ($i == 10) {
        $msj =$i.'... YA!'; 
        }
    }
    return $msj;
}
$msj = 'Vamos a jugar al escondite. <br>';
$msj .= escondite();