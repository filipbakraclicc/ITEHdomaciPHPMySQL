<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <div class="div-index">
        <h3 id="naslov-index">Internet tehnologije</h3>
        <h1 id="podnaslov-index" class="text-primary">Finansijski izvestaji - PHP MySQL AJAX</h1>

        <div class="tabela-izvestaja">

            <?php
            require 'tabela.php';
            ?>

        </div>

    </div>
</body>

</html>