<?php
$calificacion = 59;

function saberGrado($nota)
{
    switch ($nota) {
        case $nota >= 60:
            $msj = 'El grado del estudiante es de Primera División.';
            break;
        case (45 <= $nota):
            $msj = 'El grado del estudiante es de Segunda División.';
            break;
        case (33 <= $nota):
            $msj = 'El grado del estudiante es de Tercera División.';
            break;
        default:
            $msj = 'El estudiante reprobará.';
            break;
    }
    return $msj;
}

echo saberGrado($calificacion);

?>