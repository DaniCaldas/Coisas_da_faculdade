<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array</h1>

    <?php
        $f = ["abacaxi", "Uva", "Banana"];
        
        function maparray($n){
            return $n;
        }

        foreach($f as $df){
            print_r($df);
               
        }

        $r = array_map('maparray', $f); 
        #print_r($r);   
    ?>
</body>
</html>