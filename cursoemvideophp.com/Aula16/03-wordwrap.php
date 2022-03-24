<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
	h1 { font: 20pt Arial; }
  </style>
</head>
<body>
<div>
    <?php
        $t = "Aqui temops um texto gigante criado pelo PHP e vai mostrar o funcionamento da funçao wordwrap";
        $r = wordwrap($t, 5, "<br/>\n", true);
        echo $r;
        echo "<hr/>";
        $txt = "Curso em Vídeo";
        $tamanho = strlen($txt);
        echo $tamanho;
    ?>
</div>
</body>
</html>
 