<?php
require_once "account.php";

if (!(empty($_GET))) {
    $amount = $_GET["amount"];
    $operacion = $_GET["opcion"];
    echo $cliente->operar($amount, $operacion);
}

?>
