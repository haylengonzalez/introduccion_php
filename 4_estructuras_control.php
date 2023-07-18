<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8>
    <meta name="viewport" content="width=device-width, initial-scale
    <title>Esstructuras de control</title
</head>
<body>
    <h1>Estructurasde control</h1>
    <?php
       
       //if

        <?php
        if (  $diaMes < 7 ){
        echo 'Estamos a primeros de mes';
        }
        if ( $diaMes >= 7 && $diaMes <=23 ){
        echo 'Es mediados de mes';
        }
        if ( $diaMes > 23 ){
        echo 'Es final de mes';
        } 
        ?>
        
        //if-else

        <?php
        if ( $a > $b ){
        if ( $a > $c ) {
        echo 'El mayor es ' . $a;
        } else {
        echo 'El mayor es ' . $b;
        }
        } else { //$a será mayor que $b
        if ( $b > $c ) {
        echo 'El mayor es ' . $b;
        } else {
        echo 'El myor es ' . $c;
        }
        }
        ?>
        
        //while
        //do-wilw
        //for
        //require
        //include
        //swich
        ?>

</body>
</html>