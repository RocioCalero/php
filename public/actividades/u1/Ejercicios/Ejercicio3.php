<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
</head>
<body>
    <?php
        echo "<h1>Multiplos de 5</h1>";
        $i = 0;
        do {
            if ($i % 5 == 0){
                echo "$i". " es múltiplo de 5 <br>";
            }
            $i++;
        } while ($i <= 100);
    ?>
</body>
</html>