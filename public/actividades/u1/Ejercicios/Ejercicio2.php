<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
    <?php
        $i = 0;
        while ($i<=100){
            if ($i % 5 == 0){
                echo "$i". " es múltiplo de 5 <br>";
            }
            $i++;
        }
    ?>
</body>
</html>