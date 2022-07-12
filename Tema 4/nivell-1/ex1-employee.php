<html>

<head>
    <title>Clases</title>
</head>

<body>


    <?php

    class Employee
    {
        //atributos 
        private string $nombre;
        private int $sueldo;

        //métodos
        public function initialize($nombre, $sueldo)
        {
            $this->nombre = $nombre;
            $this->sueldo = $sueldo;
        }

        public function print()
        {
            echo $this->nombre;
            if ($this->sueldo > 6000) {
                echo ' tiene que pagar impuestos.';
            } else {
                echo ' no tiene que pagar impuestos.';
            }
        }
    }

    //Creación y asignación de objetos
    $persona = new Employee();
    $persona->initialize('Marta', 36651);
    $persona->print();


    ?>

</body>

</html>