    <?php

function coste_llamada($minutos, $coste_inicial, $tarifa, $inicio_tarifa)
{
    $precio = $coste_inicial;
    if ($minutos >= $inicio_tarifa){
        $precio +=(($minutos - $inicio_tarifa) * $tarifa);
    }
    
    return $precio;
}

$minutos =  mt_rand(0, 100); //duración de la llamada
$coste_inicial = 0.10; 
$inicio_tarifa = 3; //min en el que se inicia el contador
$tarifa = 0.05; //valor del minuto

if ($minutos > 3) {
    $coste = coste_llamada($minutos, $coste_inicial, $tarifa, $inicio_tarifa);
} elseif ($minutos > 0 && $minutos <= 3) {
    $coste = $coste_inicial;
} elseif ($minutos <= 0) {
    $coste = 0;

    echo '<script type ="text/JavaScript">';
    echo 'alert(" No has realizado ninguna llamada. ")';
    echo '</script>';
}

echo 'Tu llamada ha durado ' . $minutos . ' minutos.<br> Tiene un coste total de ' . number_format($coste, 2) . '€.';

?>