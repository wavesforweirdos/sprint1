    <?php

    class Shape
    {
        //atributos 
        protected $ancho;
        protected $alto;

        //métodos
        public function initialize($valor1, $valor2)
        {
            $this->ancho = $valor1;
            $this->alto = $valor2;
        }
    }

    class Triangulo extends Shape
    {

        public function area()
        {
            $area = $this->ancho * $this->alto / 2;
            echo 'El área del triángulo es ' . $area . '. <br>';
        }
    }
    class Rectangulo extends Shape
    {

        public function area()
        {
            $area = $this->ancho * $this->alto;
            echo 'El área del rectángulo es ' . $area . '. <br>';
        }
    }
    ?>
