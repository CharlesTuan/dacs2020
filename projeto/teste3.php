<!DOCTYPE html>
<html>
    <head>
       
    </head>
    <body>
        <?php
          $i = 10;
          $nome = "Zezinho";
          $falso = FALSE;
          $valor = 10.50;
          $souumtexto = "10.50";
          //$valor .= "eu nao acredito";
          echo "O valor e: $valor" . " seu tipo " . gettype($valor);
          echo "</br>is_string: " . is_string($valor);
          echo "</br>isset: " . isset($valor);
          var_dump($valor);
          var_dump($falso);
          echo (int)$valor;
          echo (int)$souumtexto;
          echo " \"esse texto entre aspas\" ";
         
        ?>
    </body>
</html>