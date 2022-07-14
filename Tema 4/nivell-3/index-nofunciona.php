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

    <div>
        <form class="formulario" method="post">
            <div class="form-container">
                <p>*Nombre: <input type="text" name="nombre" placeholder="Marta" autofocus></p>
                <p>*Apellidos: <input type="text" name="apellidos" placeholder="Cruz Quimasó"></p>
                <p>*Cuenta: <input type="text" name="cuenta" placeholder="ABC"></p>
                <p>*Saldo inicial: <input type="number" name="saldo" step="any" placeholder="0 €"></p>
                <p class="txt-right"><input type="submit" value="Enviar"></p>
            </div>
            <div>
                <p class="txt-right obligatorio">*Campos obligatorios</p>
            </div>
        </form>
    </div>
    <?php

    if (!(empty($_POST))) //si se ha enviado el formulario
    {

        if (empty($_POST['nombre']) || empty($_POST['apellidos']) || empty($_POST['cuenta'])) {  //si alguno de los 3 primeros campos está vacío
            echo '<script>alert("Debes especificar todos los campos.")</script>';
        } elseif (empty($_POST['saldo'])) {  //si el campo del saldo está vacío
            echo '<script>alert("No has introducido una cantidad en tu cuenta.")</script>';
        } elseif ($_POST['saldo'] <= 0) {
            echo '<script>alert("Introduce una cantidad positiva de dinero.")</script>';
        } else {
            require_once "account.php";

            echo '<script>alert("¡Formulario enviado correctamente!")</script>';

            $nombre = $_POST["nombre"];
            $apellidos = $_POST["apellidos"];
            $cuenta = $_POST["cuenta"];
            $saldo = $_POST["saldo"];

            $cliente = new Account($nombre, $apellidos, $cuenta, $saldo);

            echo '¡Felicidades <b>' . $cliente->getNombreCompleto() . '</b> has añadido la cuenta <b>' . $cliente->getCuenta() . '</b> correctamente! <br>';
            echo 'El saldo actual de ésta es de  <b>' . $cliente->getSaldo() . '€</b>.<br>';

            echo '<p>Si quieres realizar una operación, indica la cantidad y la acción:</p>';
            echo '
            <form method="get">
            <input type="number" name="amount" step="any" placeholder="€" required>
            <select name="opcion">
                <option value="ingresar">Ingresar</option>
                <option value="retirar">Retirar</option>
            </select>
            <button>Operar</button>
            </form>';

            header("destino.php?varCliente=$cliente");
            exit();

        }
    } else {
        echo '';
    }
    ?>
</body>

</html>