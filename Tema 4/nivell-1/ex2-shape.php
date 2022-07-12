    <?php

    class Shape
    {
        //atributos 
        protected int $ancho;
        protected int $alto;
        protected int $area;

        //métodos
        public function initialize($valor1, $valor2)
        {
            $this->ancho = $valor1;
            $this->alto = $valor2;
        }

        public function mostrarArea()
        {
            return $this->area;
        }
    }

    class Triangulo extends Shape
    {

        public function area(): int
        {
            $this->area = $this->ancho * $this->alto / 2;
            return $this->area;
        }
    }
    class Rectangulo extends Shape
    {

        public function area(): int
        {
            $this->area = $this->ancho * $this->alto;
            return $this->area;
        }
    }
    ?>
