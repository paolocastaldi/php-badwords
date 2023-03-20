<?php

$data = $_GET;


var_dump($data);

$paragrafo = $_GET['paragrafo'];
$parola = $_GET['parola'];

$paragrafo_censurato = str_replace($parola,'***',$paragrafo);

var_dump($paragrafo);
var_dump($parola);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testo censurato</title>
</head>
<body>

<div>
    <p>
        <?php echo $paragrafo; ?>
    </p>
    <p>
       Il paragrafo originale è lungo: <strong> <?php echo strlen($paragrafo); ?></strong>.
    </p>
</div>

<div>
    <p>
        <?php echo $paragrafo_censurato; ?>
    </p>
    <p>
       Il paragrafo censurato è lungo: <strong> <?php echo strlen($paragrafo_censurato); ?></strong>.
    </p>
</div>
    
</body>
</html>
