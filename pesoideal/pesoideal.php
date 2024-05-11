<html>
 <head>
   <meta charset="utf-8">
    <title> Verificar o Peso ideal</title>
 </head>
  <body>
      <?php
        $peso = $_POST['peso'];
        $alturaFM = $_POST['dadosaltura'];
        $Sexo = $_POST['sexo1'];
        $PSIdeal =0;
        //if e else para identificar se é masculino ou feminino
        if ($Sexo == "Mascu"){
     $PSIdeal = (pow($alturaFM,2))*23;
     if ($Peso>$PSIdeal){
     echo "<span style = 'color:red;'> Você está acims do seu Peso Ideal (" .$PSIdeal .")</span>";
             }
             //Descobrindo seu peso ideal
   else{
  if ($Peso<$PSIdeal){
    echo "<span style = 'color:orange;'> Você está abaixo do seu Peso Ideal (" .$PSIdeal .")</span>";
       }
           else{
                  echo "<span style = 'color:blue;'> você está em seu Peso Ideal(" .$PSIdeal .")</span>";
                   }
             }
        }

        else {
          //Sexo Femini,voce está acima do seu peso ideak
          if ($Sexo == "Femini"){
            $Ideal = (pow($alturaFM,2))*22;
            if ($Peso>$PSIdeal){
                echo "<span style = 'color:red;'> Você esta acima do seu Peso Ideal (" .$PSIdeal .")</span>";
              }
            else{
                  if ($Peso<$PSIdeal){
           echo "<span style = 'color:orange;'> Vocl esta abaixo do seu Peso Ideal (" .$PSIdeal .")</span>";
            }
                  else{
                     echo "<span style = 'color:blue;'> Você esta em seu Peso Ideal(" .$PSIdeal .")</span>";
                    }
              }
            }
            else{
                echo "O Sexo correto não foi informado, por favor informe se é masculino ou feminino!!";
            }
        }
      ?>
  </body>
</html>