<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15/09</title>
</head>

<body>
    <form action="exercicio_copias.php" method="post">

        <div class="container">
            <h1>Loja de cópias</h1>
            <p style="text-decoration: underline;">Cópia colorida 2,50</p>
            <p style="text-decoration: underline;">Cópia simples 1,20</p>

            <div style="gap: 20px;" class="form-inline">
                <label for="exampleInputEmail1">Digite a quantidade de cópias que deseja:</label>
                <input type="number" name="n1" style="width: 80px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0">
                <button class="btn btn-primary mb-2" type="submit">Confirmar</button>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="opcao1" checked>
                <label class="form-check-label" for="exampleRadios1">
                    Cópia Colorida
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="opcao2">
                <label class="form-check-label" for="exampleRadios2">
                    Cópia Normal
                </label>
            </div>
        </div>
    </form>
</body>

</html>

<?php
    $q = $_POST['n1'];
    $radio = $_POST["exampleRadios"];
    $m = $q * 2.50;
    $n = $q * 1.20;
    switch ($radio) {
        case $radio == "opcao1":
            echo "quantidade de cópias: $q, Total a ser pago: R$", number_format($m) ;
            break;

        case $radio == "opcao2":
            echo "quantidade de cópias: $q, Total a ser pago: R$", number_format($n);
            break;
    }
?>