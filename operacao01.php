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
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "os valores passados foram $n1 e $n2 </br>";
      ?>
    </div>
  </body>
</html>