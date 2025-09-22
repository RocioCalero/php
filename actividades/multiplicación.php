<html>
    <head>
        <title>Multiplicación</title>
    </head>
    <body>
        <?php
            $numero1 = $_GET['number1'];
            $numero2 = $_GET['number2'];
            $multiplicacion = $numero1 * $numero2;
            echo "La multiplicación de los numeros $numero1 y $numero2 es $multiplicacion"
        ?>
    </body>
</html>
