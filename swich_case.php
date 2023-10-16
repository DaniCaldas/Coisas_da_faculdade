<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swoch Case</title>
</head>

<body>
    <form action="swich_case.php" method="post">
        <p>Digite um valor entre 1 e 5</p>
        <input type="number" name="n1" placeholder="Digite um número" id="">
        <button type="submit">Confirmar</button>
    </form>
</body>

</html>

<?php
$variable = $_POST['n1'];
switch ($variable) {
    case 1:
        echo "<p> O número é 1</p>";
        break;
    case 2:
        echo "<p> O número é 2</p>";
        break;
    case 3:
        echo "<p> O número é 3</p>";
        break;
    case 4:
        echo "<p> O número é 4</p>";
        break;
    case 5:
        echo "<p> O número é 5</p>";
        break;
}
?>