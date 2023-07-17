<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8>
    <meta name="viewport" content="width=device-width, initial-scale
    <title>Documentation</title
</head>
<body>
    <h1>Variables y constantes</h1>
    <!--script php-->
    <?php
        /*1. La forma de represenar las variables en PHP es anteponiendo el simbolo $ a la palabra que utilizaremos como variable. Ejemplo: $edad*/
        /*2. Debemos prestar atencion a las mayúsculas y minúsculas,ya que PHP reconoce la diferencias entre las dos. $valor es diferente de $VALOR */
        /*3. ¿Para qué se utilizan las variables? Gracias a ellas podremos realizar operaciones aritméticas y operaciones con cadenas, etc. */
        /*4. Las variaboles las utilizaremos como y cuando queremos en una misma página, ya que no existe limitación en cuanto a su uso */
        /*5. Hay que prestar atenci´on a no provocar errores por utilizar como variabes palabras reservadas por el lenguaje. Ejemplo: $os se genera error, porque es una variable predefinida.*/
        /*6. También se debe evitarel error de empezar una variable por número. Ejempli: $35var - 45 es un error*/ 
        /*En PHP no es necesarioespecificar el tipo de variable, pero si debemo saber cuándo utilizar las comillas a la hora de definirlas, ya que su uso indicaría que se está hablando de una cadena Ejemplo: $cuenta - 7, $nombre - "haylen"/ 
        /*Podemos mostrar las variables en pantalla de varias maneras: una de ellas puede ser utilizando las opciones echo();otra puede ser mediante print();*/
    
        $a =5;
        $b ="7";
        echo "<b><h1>";
        echo($a);
        echo "<br>";
        echo($b);
        echo "</b></h1>";

        //Constantes
        //La forma de definir una constante es mediante la funcion define 
        //Sintsxis:define("nombre_variable","valor_variable")

        define("capital_colombia","Bogota")
        define("habitantes", 7000000);

    ?>

   