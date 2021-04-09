<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title></title>
  </head>
  <body>
    <div>
      <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2>valores recebidos: $n1 e $n2</h2>";
        $m = ($n1 + $n2) / 2;
        echo "a soma vale ". ($n1+$n2);
        echo "</br>a subtração vale ". ($n1-$n2);
        echo "</br>a multiplicação vale ". ($n1*$n2);
        echo "</br>a divisão vale ". ($n1/$n2);
        echo "</br>o modulo vale ". ($n1%$n2);
        echo "</br>a media vale $m";
      ?>
    </div>
  </body>
</html>