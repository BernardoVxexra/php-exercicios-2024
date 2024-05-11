<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou impar</title>
</head>
<body>
<?php
    if(isset($_POST['verificarnum'])) {
        
        if(isset($_POST['numero']) && !empty($_POST['numero'])) {
            
            $numero = intval($_POST['numero']);
            // Verifica se o número é par ou ímpar
            if($numero % 2 == 0) {
                echo "<p>O número $numero é par.</p>";
            } else {
                echo "<p>O número $numero é ímpar.</p>";
            }
        } else {
            echo "<p>Por favor, digite um número.</p>";
        }
    }
    ?>
</body>
</html>