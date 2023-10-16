<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consumo médio do carro</title>
</head>
<body>
    <div class="container" style="width:30vw; margin-top:3em;">
        <form action="carro.php" method="get">
            <div class="form-group">
                <label for="exampleInputEmail1">Km rodados</label>
                <input type="number" class="form-control" name="km" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kms rodados">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Litros abastecidos</label>
                <input type="number" class="form-control" name="litros" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="quantidade de Litros abastecidos">
            </div>
            <input type="submit" class="btn btn-primary btn-lg" value="Calcular">
        </form>
    </div>  
    <br>
    <?php
        $km = $_GET['km'];
        $litros = $_GET['litros'];
        $total = $km / $litros;

        echo "<p class='text-center shadow-none p-3 mb-5 bg-light rounded'> O consumo médio do carro é $total KM/L</p>";
    ?>
</body>
</html>