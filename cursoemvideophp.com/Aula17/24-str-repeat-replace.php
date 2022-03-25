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
        $txt = str_repeat("Php", 5);
        print ("O texto gerado foi $txt<br>");
        print (str_repeat("-",20));
        echo "<hr>";
        $frase = "Gosto de estudar matemática!!!";
        $novaFrase = str_ireplace("Matemática","PHP", $frase);
        echo "$novaFrase";
    ?>
</div>
</body>
</html>

