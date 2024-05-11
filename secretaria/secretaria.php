<html>
 <head>
   <meta charset="utf-8">
    <title>Secretaria</title>
 </head>
  <body>
       <?php
          $secretaria = $_POST['num1'];
          switch ($secretaria){
            case 1: echo "seu cargo é Secretária"; break;
            case 2: echo "seu cargo é Gerente"; break;
               //utilizando opções, seu cargo atual é X
            case 3: echo "seu cargo é Operário"; break;
            case 4: echo "seu cargo é Analista"; break;
              //Diminua os exercicios tem muito:>
            case 5: echo "seu cargo é Faxineiro"; break;
            
            default: echo "Digite o valor dentre as opçoes apresentadas";
                 break;
          } ?>
  </body>

</html>