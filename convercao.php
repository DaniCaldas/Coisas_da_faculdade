<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converção de polegadas em cm</title>
</head>
<body>
    <div class="container" style="width:30vw; margin-top:3em;">
        <form action="convercao.php" method="GET">
            <div class="input-group mb-3">

                <input type="number" class="form-control" name="polegadas" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="polegadas">
            <div class="input-group-append">
                <input type="submit" class="btn btn-primary " value="Enviar">
            </div>
        </form>
        <br>
    </div>
    
    <?php
            $pl = $_GET['polegadas'];
            $cm = $pl * 2.54;
            echo "<p class='text-center shadow-none p-3 mb-5 bg-light rounded'> a converção é igual a $cm</p>";    
    ?>
</body>
</html>