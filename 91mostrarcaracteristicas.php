<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Caracteristicas PC</title>
</head>
<body>
    <?php
         //include("9_caracteristicaspc.php");
         include_once("9_caracteristicaspc.php");
         //require("9_caracteristicaspc.php");
         print "<h2>Caracteristicas de mi PC </h2>";
         print "Monitor: " . $monitor . "<br>";
         print "Procesador:". $procesador ."<br>";
         print "Memoria:". $memoria . "<br>";
         print "HD:". $discoduro ;

    ?>
</body>
</html>