<html>
 <head>
   <meta charset="utf-8">
    <title>Verificando operações</title>
 </head>
  <body>
       <?php
          $num1 = $_POST['num1'];
          $num2 = $_POST['num2'];
          $idop = $_POST['id'];
          $resultado = 0;

           switch ($idop){
             case 1: 
                $resultado = $num1 + $num2;
                echo "a soma dos valores é : " .$resultado;
                break;
             case 2:   
                $resultado = $num1 - $num2;
                echo "a subtração dos valores é : " .$resultado;
                break;
             case 3:   
                 $resultado = $num1 / $num2;
                 echo "a divisão dos valore é : " .$resultado;
                 break;
             case 4:   
                 $resultado = $num1 * $num2;
                 echo "a multiplicação  é : " .$resultado;
                 break;
             default:
                echo "POR FAVOR DIGITE O CODIGO CORRETO!!";
                break;    

           }


       ?>
  </body>

</html>