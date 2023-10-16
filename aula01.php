<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01 de PHP</title>
</head>
<body>
    <div style="margin-top:40px;" class="container">
        <form action="aula01.php" method="get" >
            <input type="text" name="nome"  id="" placeholder="Exemplo">
            <br>
            <input type="email" name="email" placeholder="exemplo@gmail.com" id="">
            <br>
            <input type="text" name="numero" placeholder="(99)9999-9999" id="">
            <br>
            <input type="submit" value="Enviar">
            <br>

            <div style="margin-top:40px; border: 2px solid black; width: 20vw;" class="container">
            <?php 
                echo "Nome: ", $_GET["nome"], "<br>";
                echo "E-mail: ", $_GET["email"], "<br>";
                echo "Numero: ", $_GET["numero"], "<br>";
            ?>
            </div>
        </form>
    </div>
</body>
</html>