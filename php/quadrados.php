<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Verificando quadrados em PHP</title>
</head>
<body>
<?php
 $resultado = 0;
           for ($i=5; $i<=10;$i=$i+1){
                $resultado = pow($i,2);  //fazendo os quadrados do 1 ate 10 
                echo "O quadrado de " .$i ." é :" .$resultado ."<br>";
           }
       ?>
</body>
</html>