<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Post / Pre </title>
</head>
<body>
    <?php
         echo "<h2>Operador PostIncremento</h2";
         $a=10;
         echo "El valor actuales:".$a++."<br>";
         echo "El valor nuevo es:".$a;

         print "<h2> Operador PostDecremento </h2>";
         $b=100;
         print"El valor actual es:".$b-- ."<br>";
         print"El valor nuevo es :".$b;

         print"<h2> Operador PreIncremento</h2>" ;
         $x=50;
         print "El valor actual es: ". $x .<br>;
         print "El valor nuevo es" . ++$x;

         echo "<h2>Operador PosDecremento</h2>";
         $ = 500;
         echo "El valor actual es: ". $w . "<br>";
         echo "El valor nuevo es: ". --$w;

    ?>
</body>
</html>