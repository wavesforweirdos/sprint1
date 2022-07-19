<?php

function escondite($num = 10)
{
    $msj = 'Vamos a jugar al escondite. ¡Contaré hasta ' . $num . '! <br>';

    for ($i = 0; $i <= $num; $i += 2) {

        if ($i < $num) {
            $msj .= $i . '... ';
        } else {
            $msj .= $i . '... YA!';
        }
    }
    return $msj;
}

/* Podemos pasarle un parámetro a la función y usará este valor */
    $msj = escondite(20);
    echo $msj;
    
    echo '<br><br>';

/* en caso contrario, sino especificamos un valor, utilizará el valor por defecto de la función*/
    $msj = escondite();
    echo $msj;


?>