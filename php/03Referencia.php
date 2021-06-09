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
        $a = 3;
        $b = &$a;
        $b += 5;
        echo "a variavel A vale $a";
        echo "</br>a variavel B vale $b";
      ?>
    </div>
  </body>
</html>