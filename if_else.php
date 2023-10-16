<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="if_else.php" method="post">

        <div style="width:50vw; margin:0 auto;">
            <h3>Digite 3 numeros</h3>
            <input type="number" class="form-control" style="width:20% ;" name="n1" aria-label="Usuário" aria-describedby="basic-addon1">
        <input type="number" class="form-control" style="width:20% ;" name="n2" aria-label="Usuário" aria-describedby="basic-addon1">
        <input type="number" class="form-control" style="width:20% ;" name="n3" aria-label="Usuário" aria-describedby="basic-addon1">
        
        <button type="submit" class="btn btn-primary">Analisar</button>
        <br>
        
            <?php
                $n1 = $_POST['n1'];
                $n2 = $_POST['n2'];
                $n3 = $_POST['n3'];

                if($n1 > $n2 && $n1 > $n3 ){
                    echo "$n1 é o maior numero";
                }
                else if($n2 > $n1 && $n2 > $n3 ){
                    echo "$n2 é o maior numero";
                }
                else if($n3 > $n2 && $n3 > $n1){
                    echo "$n3 é o maior numero";
                }
            ?>
        </div>
    </form>
</body>
</html>
