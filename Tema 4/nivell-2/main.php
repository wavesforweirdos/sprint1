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

            function player()
            {
                Pokerdice::letsPlay();
                $throws = PokerDice::getTotalThrows();

                return $throws;
            }

            function button1()
            {
                $throws = player();

                echo '</div>';
                echo '<div>';
                if ($throws <= 1) {
                    echo 'Has tirado los dados ' . PokerDice::getTotalThrows() . ' vez.';
                } else {
                    echo 'Has tirado los dados ' . PokerDice::getTotalThrows() . ' veces.';
                }
                echo '</div>';
                echo '<br>';
            }

            if (array_key_exists('button1', $_POST)) {
                button1();
            }
            ?>

            <form method="post">
                <input type="submit" name="button1" class="button" value="Jugar" />
            </form>

        </div>
    </div>
</body>

</html>