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
        $nome = "robson monteiro";
        $nome2 = ucwords($nome);
        echo "Seu nome é $nome2 <br>";
        print (strrev($nome));
    ?>
</div>
</body>
</html>
 