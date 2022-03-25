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
        $site = "Curso em Vídeo";
        $sub = substr($site, 0, 5);
        echo "$sub";
        echo "<hr>";
        $nome = "Francy";
        $novo = str_pad($nome,30,"  ", STR_PAD_LEFT);
        print("Essa menina $novo é muito linda!");
    ?>
</div>
</body>
</html>

