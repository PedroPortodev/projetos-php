<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    <?php
        $n = array( 0 => 5,
                    1 => 9,
                    2 => 8,
                    3 =>7);
        unset($n[0]);
        print_r($n);
    ?>
    </pre>
</div>
</body>
</html>
 