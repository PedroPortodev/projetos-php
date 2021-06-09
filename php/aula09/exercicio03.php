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
        $nota1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
        $nota2 = isset($_GET["nota2"])?$_GET["nota2"]:0;
        $media = ($nota1+$nota2)/2;
        echo "A média entre $nota1 e $nota2 é igual a $media </br>";
        if ($media < 5) {
          $nota = "REPROVADO";
        }
        if ($media >= 5 && $media < 6){
           $nota = "RECULPERAÇÃO";
         } 
         if ($media > 6) {
         $nota = "APROVADO";
         }
        echo "a situação do aluno: $nota";
    ?>
</div>
</body>
</html>
 