<?php

$periodo = 4;
$year_inicial = 1960;
$year_final = 2016;

function list_olimpiadas($inicio, $fin, $intervalo)
{
    $listado = 'Listado anual de Juegos Olímpicos desde el ' . $inicio . ' al ' . $fin . ':<br>';
    for ($i = $inicio; $i <= $fin; $i += $intervalo) {
        $listado .= ' &nbsp;&nbsp;&nbsp;&nbsp;-  &nbsp;' . $i . '<br>';
    }
    return $listado;
}

$lista = list_olimpiadas($year_inicial, $year_final, $periodo);
echo $lista;

?>