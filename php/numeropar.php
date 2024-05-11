<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Verificando pares em PHP</title>
</head>
<body>
<?php
           $resultado = 0;
           //Verificando numeros pares atraves do for
           echo "somente numeros pares: <br>"; 
           for ($i=2; $i<=10;$i=$i+2){
                echo $i .", ";
                $resultado = $resultado + $i;
           }
           echo " <br> A soma é:  " .$resultado;
       ?>
</body>
</html>