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
                $throws = 0;

                echo '<p>';
                if ($throws <= 1) {
                    echo 'Has tirado los dados ' . PokerDice::getTotalThrows() . ' vez.';
                } else {
                    echo 'Has tirado los dados ' . PokerDice::getTotalThrows() . ' veces.';
                }
                echo '</p>';
            }

            Pokerdice::letsPlay();
            $throws = PokerDice::getTotalThrows();
            showTotalThrows();

            Pokerdice::letsPlay();
            $throws = PokerDice::getTotalThrows();
            showTotalThrows();

            Pokerdice::letsPlay();
            $throws = PokerDice::getTotalThrows();
            showTotalThrows();
            
            Pokerdice::letsPlay();
            $throws = PokerDice::getTotalThrows();
            showTotalThrows();

            Pokerdice::letsPlay();
            $throws = PokerDice::getTotalThrows();
            showTotalThrows();
            ?>

        </div>
    </div>
</body>

</html>