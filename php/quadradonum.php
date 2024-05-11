<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Quadrados numeros</title>
</head>
<body>
          <?php
           $resultado = 0;
           $quad = 1;
                //realizando soma dos quadrados
           for ($i=$quad; $i<=10;$i++){
                $resultado = pow($i,2);
                echo  "o quadrado de " .$i ." é  : " .$resultado ."<br>";
           }

       ?>
</body>
</html>