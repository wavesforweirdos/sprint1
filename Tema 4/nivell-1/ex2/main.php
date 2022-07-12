    <?php
    require_once "shape.php";

    //Creación y asignación de objetos
    $triangulo = new Triangulo();
    $triangulo->initialize(2, 4);
    $triangulo->area();

    $rectangulo = new Rectangulo();
    $rectangulo->initialize(2, 4);
    $rectangulo->area();
    ?>
