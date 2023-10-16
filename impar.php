<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números ímpares</title>
</head>
<body>
    <div class="container">
        <form action="impar.php" method="post">
            <h4>Digite alguns números</h4>
            <input type="number" name="numero" placeholder="0" id="">
            <input type="number" name="numero1" placeholder="0" id="">
            <button  class="btn btn-primary" type="submit">
                Confirmar
            </button>   
        </form>
        <?php
            $n = $_POST['numero'];
            $n1 = $_POST['numero1'];
            echo "<h4> Tentativas </h4> <br>";

 

        ?>
    </div>
</body>
</html>