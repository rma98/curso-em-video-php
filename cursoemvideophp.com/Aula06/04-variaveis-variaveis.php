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
        $x = "abc";
        $$x = "def";
        echo "O conteúdo da variável x é $x";
        echo "<br>O conteúdo da variável ABC criada recebeu o valor $abc";
    ?>
</div>
</body>
</html>
