<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATRICES</title>
</head>
<body>
    <?php
       //PRIMERA FORMA D MANERAJAR UNA MATRIZ
       $m1[0][0]=10;
       $m1[0][1]="hola";
       $m1[0][2]=53;
       $m1[1][0]=787;
       $m1[1][1]="saludos";
       $m1[1][2]=54;
       $m1[2][0]=33;
       $m1[2][1]="a";
       $m1[2][2]="todos..!!";
       var_dump($m1);

       foreach($m1 as $key=>$filas){
            echo "[";  
           foreach($filas as $key=>$columnas){
            echo $columnas." , ";
           }
           echo "] <br>";
       }

       foreach($m1 as $key =>$filas) {
        echo "[" .implode(",",$filas). "]";
       }

    ?>
</body>
</html>