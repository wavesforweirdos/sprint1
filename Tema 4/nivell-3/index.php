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
    $cliente = new Account('Marta', 'Cruz Quimasó', 'ABC', 1900);
    echo 'Cliente cargado <p><pre>';
    var_dump($cliente);
    echo '</pre></p>';
    ?>

<div>
    <form method="get">
            <input type="number" name="amount" step="any" placeholder="€" required>
            <select name="opcion">
                <option value="ingresar">Ingresar</option>
                <option value="retirar">Retirar</option>
            </select>
            <button>Operar</button>
        </form>
    </div>
    
    <?php
    echo '<br>';
    
    if (!(empty($_GET))) {
        $amount = $_GET["amount"];
        $operacion = $_GET["opcion"];
        
        echo $cliente->operar($amount, $operacion);
        echo '<br>Cliente actualizado <p><pre>';
        var_dump($cliente);
        echo '</pre>';
    }
    ?>

</body>

</html>