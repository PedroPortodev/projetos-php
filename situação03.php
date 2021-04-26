<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>curso de php - cursoemvideo.com</title>
  </head>
  <body>
    <div>
      <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1+$nota2)/2;
        echo "a média entrae $nota1 e $nota2 é $m </br>";
        $sit = ($m<6)? "reprovado":"aprovado";
        echo "a situação do aluno é $sit"
      ?>
    </div>
  </body>
</html>