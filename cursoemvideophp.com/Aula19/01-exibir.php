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
        $v = array("A","J","M","X","K");
        print_r($v);
        echo "<hr>";
        var_dump($v);
        echo "<hr>";
        echo "O vetor tem ". count($v). " elememos.";
        echo "<hr>";
        $v[] = "O";
        print_r($v);
        echo "<hr>";
        array_push($v, 7);
        print_r($v);
        array_pop($v);
        print_r($v);
        echo "<hr>";
        array_unshift($v, "B");
        print_r($v);
        echo "<hr>";
        array_shift($v);
        print_r($v);
        echo "<hr>";
        $num = array(2=>3,5=>5,4=>8,3=>2);
        sort($num);
        print_r($num);
        echo "<hr>";
        rsort($v);
        print_r($v);
        echo "<hr>";
        asort($v);
        print_r($v);
        echo "<hr>";
        arsort($num);
        print_r($num);
        echo "<hr>";
        ksort($num);
        print_r($num);
        echo "<hr>";
        krsort($num);
        print_r($num);
    ?>
    </pre>
</div>
</body>
</html>

