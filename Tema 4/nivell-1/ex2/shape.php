    <?php

    class Shape
    {
        //atributos 
        protected $ancho;
        protected $alto;
        protected $area;

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
            parent:$area = $this->ancho * $this->alto / 2;
            echo 'El área del triángulo es ' . $area . '. <br>';
            return $area;
        }
    }
    class Rectangulo extends Shape
    {
        
        public function area()
        {
            parent:$area = $this->ancho * $this->alto;
            echo 'El área del rectángulo es ' . $area . '. <br>';
            return $area;
        }
    }
    ?>
