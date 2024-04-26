<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vectores</title>
</head>
<body>
    <?php
        //PRIMERA FORMA COMO DEFIMIR UN VECTOR
         $v1[1]="Saludos";
         $v1[2]= 25;
         $v1[3]="Hola";
         $v1[4]=3.1416;
         $v1[5]="a";
         $v1[6]="todos";
         var_dump($v1);
        //PRIMERA FORMA COMO DEFIMIR UN VECTOR

         $v2 =array("hola", "a","todos",25);
         var_dump($v2);
        //FOREACH SIRVE PARA RECORRER TODO EL VECTOR
         foreach($v2 as $i =>$valor){
            echo "V2[".$i."]= ".$valor ."<br>";
         }
         //TERCERA FORMA DE DEFINIR UN VECTOR
         $v3 =[
                 1=>"uno",
                 2=>"dos",
                 3=>"tres",
                 4=>"cuatro",
                 5=>"cinco",
         ];
         var_dump($v3);

         echo "Longitud: " . count($v3);
         $lg = count ($v3);
         for($i=1; $i<= $lg; $i++){
            echo "V3[".$i."]=" .$v3[$i]."<br>";
         }
    ?>
</body>
</html>