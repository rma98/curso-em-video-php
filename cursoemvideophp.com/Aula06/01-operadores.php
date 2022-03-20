<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $preço = $_GET["p"];
        echo "O preço do produto é R$ ". number_format($preço, 2);
        $preço += $preço*10/100;
        echo "<br/>E o novo preço com 10% de aumento será R$ ". number_format($preço, 2);
    ?>
</div>
</body>
</html>
