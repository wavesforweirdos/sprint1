<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./hojadestilos.css" rel="stylesheet" type="text/css">
    <title>Aplicación de Dados</title>
</head>

<body>
    <div class="container">
        <div class="pokerContainer">

            <?php
            require_once "pokerDice.php";


            function showTotalThrows()
            {
                $throws = PokerDice::getThrows();
                $throws = PokerDice::getTotalThrows();

                echo '<p>';
                if ($throws <= 1) {
                    echo 'Has hecho ' . PokerDice::getThrows() . ' tirada.';
                } else {
                    echo 'Has hecho ' . PokerDice::getThrows() . ' tiradas.';
                }
                echo '<br>El total de dados tirados es de ' . PokerDice::getTotalThrows() . '.';
                echo '</p>';
            }

            Pokerdice::letsPlay();
            showTotalThrows();

            Pokerdice::letsPlay();
            showTotalThrows();

            Pokerdice::letsPlay();
            showTotalThrows();
            
            Pokerdice::letsPlay();
            showTotalThrows();

            Pokerdice::letsPlay();
            showTotalThrows();
            ?>

        </div>
    </div>
</body>

</html>