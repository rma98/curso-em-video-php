<?php
    $frase = "Eu vou estudar PHP agora";
    $cont = str_word_count($frase, 0);
    echo $cont;
    echo "<hr/>";
    // explode
    $site = "Curso em video";
    $vetor = explode(" ",$site);
    print_r($vetor);
    echo "<hr/>";

    $letra = chr(67);
    echo "A letra de código 67 é $letra";
?>

