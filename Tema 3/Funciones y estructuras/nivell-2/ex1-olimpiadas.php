<?php

$periodo = 4;
$año_inicial = 1960;
$año_final = 2016;

function list_olimpiadas($inicio, $fin, $intervalo)
{
    $listado = 'Listado anual de Juegos Olímpicos desde el ' . $inicio . ' al ' . $fin . ':<br>';
    for ($i = $inicio; $i <= $fin; $i += $intervalo) {
        $listado .= ' &nbsp;&nbsp;&nbsp;&nbsp;-  &nbsp;' . $i . '<br>';
    }
    return $listado;
}

$lista = list_olimpiadas($año_inicial, $año_final, $periodo);
echo $lista;

?>