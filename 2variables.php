<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h2> Variable de tipo entero </h2>";
        $e = 41; //
        echo "Mi edad es: $e" ;
        echo "<h2> Variable de tipo texto</h2>";
        $nombre="Juan Zambrana";
        echo "Mi nombre es:$nombre";
        echo "<h2> Variable te tipo Decimal</h2>";
        $estatura=1.78;
        print("Mi estatura es:". $estatura);

        print"<h2> Constantes </h2>";
        define('vpi',3.1416);
        print"El valor de mi constante es:" . vpi;

    ?>
</body>
</html>