<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo <?php echo $_GET['name'] ?></title>
</head>
<body>
    <div class="container">
        <form action="exemplo.php" method="get">
            <h1>Trabalhando com get</h1>
            <input type="number" name="n1" placeholder="Digite um número" id="">
            <br>
            <input type="number" name="n2" placeholder="Digite um número" id="">
            <br>
            <input type="submit" value="Enviar">
            <?php
                $n1 = $_GET['n1'];
                $n2 = $_GET['n2'];
                $sum = $n1 + $n2;

                echo "<br> <h2>A soma de $n1 + $n2 é = $sum </h2>";
            ?>
        </form>
    </div>
</body>
</html>