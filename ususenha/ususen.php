<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario e senha</title>
</head>
<body>
<?php
    if(isset($_POST['ususenha'])) {
        
        if(isset($_POST['usuario']) && isset($_POST['senha']) && !empty($_POST['usuario']) && !empty($_POST['senha'])) {
            
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
            // Verifica se o usuário e a senha são válidos
            if($usuario === "ETE" && $senha === "ETE") {
                echo "<p>Bem-vindo ao Sistema prof Edna.</p>";
            } else {
                echo "<p>Usuário ou senha inválidos!!,Por favor tente novamente!!!</p>";
            }
        } else {
            echo "<p>Por favor, preencha o usuário e a senha.</p>";
        }
    }
    ?>
</body>
</html>