<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $txt = isset($_GET["t"])?$_GET["t"]:"TEXTO GENÉRICO";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
<div>
    <?php
        echo "<span class='texto'>$txt</span>";
    ?>
    <a href="03-exercicio.html">Voltar</a>
</div>
</body>
</html>
