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
        $nome = "Robson Monteiro";
        $nome2 = strtolower($nome);
        echo "Seu nome é $nome2 <br>";
        $nome3 = strtoupper($nome);
        echo "Seu nome é $nome3";
    ?>
</div>
</body>
</html>
