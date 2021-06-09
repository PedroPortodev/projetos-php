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
        $a = isset($_GET["ano"])?$_GET["ano"]:1;
        $i = date("Y") - $a;
        echo "você nasceu em $a e tera $i anos.</br>";
        if($i >= 18) {
          $v = "ja pode voltar";
          $d = "ja pode dirigir";
        }
        else{
          $v = "não pode voltar";
          $d = "não pode dirigir";
        }
        echo "com essa idade você $v e $d"
    ?>
</div>
</body>
</html>
 