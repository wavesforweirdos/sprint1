<?php
$cadena = 'wwxyyz';
$cadena1 = 'a';
$cadena2 = 'Ab';

function intercambio($string)

{
    if (strlen($string) <= 1) {
        return $string;
    } elseif (strlen($string) != 1) {
        $primer_caracter = substr($string, 0, 1); //substrae del string, desde el indice 0, un solo valor
        $ultimo_caracter = substr($string, -1, 1); //substrae del string, desde el indice -1 (final), un solo valor

        //substr_replace($string,$replacement,$start,$length)

        $new_string = substr_replace($string, $ultimo_caracter, 0, 1);
        $new_string = substr_replace($new_string, $primer_caracter, -1, 1);

        return $new_string;
    }
}

echo 'Para la cadena <b>' . $cadena . '</b> el cambio es <b>' . intercambio($cadena) . '</b>.<br>';
echo 'Para la cadena <b>' . $cadena1 . '</b> el cambio es <b>' . intercambio($cadena1) . '</b>.<br>';
echo 'Para la cadena <b>' . $cadena2 . '</b> el cambio es <b>' . intercambio($cadena2) . '</b>.<br>';

?>