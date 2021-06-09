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
        $ano = $_GET["an"];
        $idade = 2021 - $ano;
        echo "quem nasceu em $ano tem $idade anos";
        $tipo = ($idade>= 18 && $idade<65)?"OBRIGATORIO":"NÃO OBRIGATÓRIO";
        echo " e dessa forma seu voto é $tipo"
      ?>
    </div>
  </body>
</html>