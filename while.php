<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="while.php" method="post">

        <div class="container" style="margin-top:1em;">
            <h1>Laços de condições (While)</h1>
            
            <h4>Digite um número</h4>
            <input type="number" name="n1" placeholder="0" id="">
            <button type="submit" class="btn btn-success">Confirmar</button>
        </div>

        <div class="container" style="margin-top: 3em;">
            <?php $n = $_POST['n1']; echo "<h4> Tabuada do $n</h4>"; ?>
                        
            <?php
                $a = 1;
                $n = $_POST['n1'];
                while ($a <= 10) {
                $m = $n * $a;
                    echo "<p>$n x $a = $m</p>";
                    $a++;
                }
            ?>
        </div>
    </form>

</body>
</html>