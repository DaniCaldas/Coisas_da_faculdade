<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seus filmes favoritos</title>
</head>

<body>
    <form action="Filmes.php" method="post">

        <div class="container" style="margin-top: 3em; width:40vw; display:flex ; flex-direction: column; gap:20px;">
            <h3>Adicione seus filmes Favoritos na Lista </h3>
            <input type="text" name="filmes[]" class="form-control" placeholder="Filme 1" id="">
            <input type="text" name="filmes[]" class="form-control" placeholder="Filme 2" id="">
            <input type="text" name="filmes[]" class="form-control" placeholder="Filme 2" id="">
            <button type="submit" class="btn btn-success" style="width: 30%;">Enviar</button>

            <?php
                $filmes = $_POST['filmes'];
                $count = count(($filmes));
                echo $count;
                foreach ($filmes as $f) {
                    echo "<p>$f</p>";
                }
            ?>
        </div>
    </form>
</body>

</html>