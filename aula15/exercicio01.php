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
        function teste(&$x) {
          $x += 2;
          echo "<p>o valor de X é $x</p>";
        }

        $a = 3;
        teste($a);
        echo "<p>o valor da A é $a</a>";
    ?>
</div>
</body>
</html>
 