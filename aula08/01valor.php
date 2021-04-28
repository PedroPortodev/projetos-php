<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
       $valor = $_GET["v"];
       $rq = sqrt($valor);
       echo "a raiz de $valor é igual a $rq";
    ?>
    <a href="exrcicio01.html">voltar</a>
</div>
</body>
</html>
 