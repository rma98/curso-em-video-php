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
        $frase = "Eu estou aprendendo PHP";
        $pos = strpos($frase, "PHP");
        echo "$frase <br> A string foi encontrada na posição $pos <br>";
        $pos = stripos($frase, "php");
        echo "A string foi encontrada na posição $pos";
        echo "<hr>";
        $frase2 = "Eu estou aprendendo PHP no Curso em Vídeo de PHP";
        $cont = substr_count($frase2, "PHP");
        print ("PHP encontrado $cont vezes");
    ?>
</div>
</body>
</html>

