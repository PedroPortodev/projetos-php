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
        $preco = $_GET["p"];
        echo "o preço do produto e $preco";
        $preco += $preco*10/100;
        echo "</br>E o novo preco com 10% de aumento será R$ " . 
        number_format($preco, 2);
      ?>
    </div>
  </body>
</html>