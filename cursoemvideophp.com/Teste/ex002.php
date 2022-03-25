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
        $a = 10;
        $b = "10";
        if ($a == $b) {
            print "Caso 1";
        }
        else {
            print "Caso 2";
        }
        echo "<br>";
        if ($a == $b) {
            print "Caso 3";
        }
        else {
            print "Caso 4";
        }
    ?>
</div>
</body>
</html>

