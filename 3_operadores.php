<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8>
    <meta name="viewport" content="width=device-width, initial-scale
    <title>Operadores</title
</head>
<body>
    <h1>Operadores</h1>
    <?php
    
    //Operadores aritméticos
   
    <?php

    echo (5 % 3)."\n";           // muestra 2
    echo (5 % -3)."\n";          // muestra 2
    echo (-5 % 3)."\n";          // muestra -2
    echo (-5 % -3)."\n";         // muestra -2

    ?>

    //Operadores de comparación
    
    <?php
    var_dump(0 == "a"); // 0 == 0 -> true
    var_dump("1" == "01"); // 1 == 1 -> true
    var_dump("10" == "1e1"); // 10 == 10 -> true
    var_dump(100 == "1e2"); // 100 == 100 -> true

    switch ("a") {
    case 0:
    echo "0";
    break;
    case "a": // nunca alcanzado debido a que "a" ya ha coincidido con 0
    echo "a";
    break;
    }
    ?>

    //Operadores lógicos 

    <?php

    // --------------------
    // foo() nunca será llamado ya que los operadores están en cortocircuito

    $a = (false && foo());
    $b = (true  || foo()); 
    $c = (false and foo());
    $d = (true  or  foo());

    // --------------------
    // "||" tiene una precedencia mayor que "or"

    // El resultado de la expresión (false || true) es asignado a $e
    // Actúa como: ($e = (false || true))
    $e = false || true;

    // La constante false es asignada a $f y entonces true es ignorado
    // Actúa como: (($f = false) or true)
    $f = false or true;

    var_dump($e, $f);

    // --------------------
    // "&&" tiene una precedencia mayor que "and"

    // El resultado de la expresión (true && false) es asignado a $g
    // Actúa como: ($g = (true && false))
    $g = true && false;

    // La constante true es asignada a $h y entonces false es ignorado
    // Actúa como: (($h = true) and false)
    $h = true and false;

    var_dump($g, $h);
    ?>

    //Operadores de unión de cadenas

    <?php
    $cadena1 = 'Primera cadena de texto';
    $Cadena2 = 'Segunda cadena de texto';
    $cadenaconc= $cadena1.$Cadena2 echo $cadenaconc;
    $cadenal = "Primera cadena de texto";
    $Cadena1 .= "Segunda cadena de texto";
    echo $cadena1;
    ?>

    ?>

</body>
</html>