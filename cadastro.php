<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Cadastro</title>
</head>
<body>
    <div class="container" style="margin-top:50px; width:50vw;">
    <h3 class="text-center">Informações</h3>

        <?php
            if(!$nome || !$email || !$telefone){
               echo "<p class='text-center'> Nenhuma Informação adicionada! </p>";
            }
            else{    
                echo "<p class='text-center'>$nome</p>";
                echo "<p class='text-center'>$email</p>";
                echo "<p class='text-center'>$telefone</p>";
            }
        ?>
        <a href="index.html">
            <button type="button" class="btn btn-outline-secondary">Voltar</button>
        </a>
    </div>
</body>
</html>