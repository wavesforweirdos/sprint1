<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./hojadeestilos.css">
    <title>Banco</title>
</head>

<body>

    <?php
    require_once "account.php";

    session_start();
    $cliente =  new Account('Marta', 'Cruz Quimasó', 'ABC', 1900);

    $contador = 1; //valor inicial
    echo '<h3>Cliente registrado (Registro nº1)</h3><p><pre>';
    var_dump($cliente);
    echo '</pre></p>';
    
    if (!(empty($_GET))) { //si se ha enviado el formulario
        $contador = $_GET["count"] + 1; //augmento en 1 el contador para los registros
        $cliente = $_SESSION['cliente']; //declaro mi clase de la sesion
    }
    ?>

    <div>
        <form method="get">
            <input type="hidden" name="count" value="<?php echo $contador ?>">
            <input type="number" name="amount" step="any" placeholder="€" min="0" required>
            <select name="opcion">
                <option value="ingresar">Ingresar</option>
                <option value="retirar">Retirar</option>
            </select>
            <button>Operar</button>
        </form>
    </div>

    <?php
    if (!(empty($_GET))) {

        $amount = $_GET["amount"];
        $operacion = $_GET["opcion"];
        $cliente->operar($amount, $operacion);

        $_SESSION['cliente'] = $cliente;
        echo '<h3>Cliente actualizado (Registro nº' . $contador . ')</h3><p><pre>';
        var_dump($_SESSION['cliente']);
        echo '</pre>';
    }
    ?>

</body>

</html>