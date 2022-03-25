<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>

    <?php
        $v = array(
                3=>5,
                1=>9,
                0=>8,
                7=>7
        );
        $v[] = "E";
        unset($v[0]);
        print_r($v);
        echo "<hr>";
        $card = array(
                "nome" => "Ana",
                "idade" => 23,
                "peso" => 78.5
        );
        foreach ($card as $i => $c) {
            echo "O campo $i possui o conteúdo $c <br>";
        }
    ?>

    </pre>
</div>
</body>
</html>

