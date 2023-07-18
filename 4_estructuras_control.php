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
        <?php
        $numero_secreto = 42;
        $intentos = 0;

        while ($intentos < 3) {
        $adivinanza = readline("Adivina el número secreto (entre 1 y 100): ");
    
        if ($adivinanza == $numero_secreto) {
        echo "¡Felicidades, has adivinado el número secreto!";
        break;
        } else {
        echo "Lo siento, intenta de nuevo...<br>";
        $intentos++;
        }
        }

        if ($intentos == 3) {
        echo "Lo siento, has excedido el número máximo de intentos.";
        }
        ?>

        //do-wilw

        <?php
        do {
        $nombre = readline("Ingresa tu nombre: ");
        } while (strlen($nombre) == 0);

        echo "Hola, " . $nombre . "!";
        ?>

        //for

        $num = 5;

        for ($i = 1; $i <= 10; $i++) {
        $resultado = $num * $i;
        echo $num . " x " . $i . " = " . $resultado . "<br>";
        }

        //require

        <?php
        require 'prepend.php';
        require $somefile;
        require ('somefile.txt');
        ?>

        //include
        
        <?php
        /* Este ejemplo asume que www.example.com está configurado para analizar .php
        * archivos y no archivos .txt. Además, 'Funciona' aquí significa que las variables
        * $foo y $bar están disponibles en el archivo incluido.*/

        // No fu ncionará; file.txt no fue manejado por www.example.com como PHP
        include 'http://www.example.com/file.txt?foo=1&bar=2';

        // No funcionará; busca un archivo llamado 'file.php?foo=1&bar=2' en el
        // sistema de archivos local.
        include 'file.php?foo=1&bar=2';

        // Obras
        include 'http://www.example.com/file.php?foo=1&bar=2';

        $foo = 1;
        $bar = 2;
        include 'file.txt';  // Obras.
        include 'file.php';  // Obras.
        ?>

        //swich

        <?php
        $dia = "lunes";
        switch ($dia) {
        case "lunes":
        echo "Hoy es lunes";
        break;
        case "martes":
        echo "Hoy es martes";
        break;
        case "miércoles":
        echo "Hoy es miércoles";
        break;
        case "jueves":
        echo "Hoy es jueves";
        break;
        case "viernes":
        echo "Hoy es viernes";
        break;
        case "sábado":
        echo "Hoy es sábado";
        break;
        case "domingo":
        echo "Hoy es domingo";
        break;
        default:
        echo "Día inválido";
        break;
        }
        ?>



        //if, if-else

        //Ejmplo 1
        $color = "rojo";
        if(color = "rojo")
        {
            print("Efecttivamente, el color es rojo");
        }

        //Ejemplo 2
        $x = 18;
        $y = 15;
        if($x == $y)
        {
            print("x e y son iguales");
        }
        elseif($x > $y)
        {
            print("x es mayor que y");
        }
        elseif($x < $y)
        {
            print("x esmenor que y");
        }
        //While
        // indica que mientras no se cumla una determinada condición, no se saldrá del bucle y no
        // ssaltará a la siguiente linea de código
        $x = 10;
        {
            echo "<big>";
            echo "<b>"
            print("Número: ".$x);
            echo "<br>";
            echo "<hr>";

        }

        //do-wilw
        
        
        //for
        //será utilizado ara ejecutar un bucle determinado número de veces, hasta que se cumpla na
        //condición
        echo "<br>";
        echo "<h1>for</h1";
        for($x=5; $x<=10; $x++)
        {
            print("Número:" .$x. "<br>");
        }
 
        //require
        //Sirve para incluir archivos en nuestras páginas y solo será necesario hacer referencia
        //a este archivo con la instrucción require. se una principalmente para definir variables,
        //y estas estarán listas una vez hagamos una llamada al rchivo donde están guardadas.

        //include
        //El funcionamiento es igul que el de la instrucción requiere(), con la diferencia de que si
        //puede procesar e código tantas veces acomo la llamemos a esa página externa.
        incluude("variables.php")
        echo"<br>";
        print("$x" . "$z" . "$y");

        //switch
        //se utiliza para comprobar un dato entre varias posibilidades

        $color = "negro";
        switch($color)
        {
            case"blanco";
               $sector = "claro";
               break;
            case "naranja";
               $sector = "normal";
               break;
            case "negro";
               $sector = "oscuro";
               break;

        }
        print($sector);

        
        


</body>
</html>