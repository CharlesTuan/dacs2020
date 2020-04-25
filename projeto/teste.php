<html>
    <head>
        <title> Titulo </title>
    </head>
    <body>
        <?php
           for($i=0; $i <= 10; $i++){
        ?>
        <h3>O valor de $i: <?=$i?></h3>
        <?php
            if ($i % 2 == 0){
                echo "par";
            }else{
                echo "impar";
            }
           }
        ?>
    </body>
</html>