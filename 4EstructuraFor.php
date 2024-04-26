<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura For</title>
</head>
<body>
    <?php
        echo "Estructura de control FOR <br>";
        for($i=1; $i <=6; $i++){
            echo " <h$i> encabezado de nivel $i </h$i> ";
        }
        for($i=10; $i <=100 ; $i=$i+10){
            echo "$i";
        }

    ?>
</body>
</html>