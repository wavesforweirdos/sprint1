    <?php
    require_once "ex2-shape.php";

    //Creación y asignación de objetos
    $triangulo = new Triangulo();
    $triangulo->initialize(2, 4);
    $triangulo->area();
    echo 'El área de un triángulo de 2 x 4 es ';
    echo $triangulo->mostrarArea() . '.';

    echo '<br>';

    $rectangulo = new Rectangulo();
    $rectangulo->initialize(2, 4);
    $rectangulo->area();
    echo 'El área de un rectángulo de 2 x 4 es ';
    echo $rectangulo->mostrarArea() . '.';
    ?>
