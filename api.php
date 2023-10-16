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
    <div class="container">
        <?php

        // Inicializa a sessão cURL
        $curl = curl_init();

        // Define a URL da API
        $url = 'https://e-commerce-api-dri9.onrender.com/produtos';

        // Define as opções da requisição
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // Envia a requisição e obtém a resposta
        $response = curl_exec($curl);

        // Fecha a sessão cURL
        curl_close($curl);

        // Exibe a resposta
        echo $response;

        $response
        ?>

    </div>
</body>

</html>