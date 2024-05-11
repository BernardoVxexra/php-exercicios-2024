<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Verifiando soma do intervalo</title>
</head>
<body>
<?php
           $resultado = 0;
                //vericando a soma dos intervalos entre 8 e 3 ou 3 e 8
           for ($i=3; $i<=8;$i=$i+1){
                $resultado = $resultado + $i;
           } echo "a soma dos valores entre 8 e 3 é  : " .$resultado;


       ?>
</body>
</html>