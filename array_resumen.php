<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de primera parte de array</title>
</head>

<body bgcolor="#000" text="#fff">

    <style>
        body {
            font-size: 20px;
        }

        h2 {
            text-align: center;
            color: orange;
        }
    </style>

    <center>
        <h1>Vamos a ver como imprimir arrays, recorrer los arrays y hacer una tabla con array</h1>
    </center>

    <?php

    //! Creacion de arrays de diferentes maneras */

    $prov = ['Almeria', 'Cordoba'];
    $prov1 = array('Almeria', 'Cordoba');
    $prov2 = []; // vacia
    $prov3 = array(); // vacia

    echo "<h2>Vamos a imprirmir por pantalla el array \$prov para ver que devuelve</h2>";

    echo "<br> El contenido del array llamada \$prov con print_r es : ", print_r($prov), "<br>";
    echo "<br> El contenido del array llamada \$prov con var_dump es : ", var_dump($prov), "<br>"; // todo nos da informacion mas detallada del array,como el tipo de dato, el tamaño del array y que dato hay en cada posicion del array

    echo "<hr>";

    // todo Diferencia entre imprimir con print_r y var_dump

    echo "<h2>Diferencia entonces de imprimir con print_r (Primera linea ) a imprirmir el array con var_dump (segunda linea)</h2>";

    echo "Primera linea : ", print_r($prov);
    echo "<br><br>";
    echo "Segunda linea: ", var_dump($prov); //esto sirve para cualquier tipo de dato

    echo "<hr>";

    echo "<h2>Añadir cadiz al array en la siguiente posicion disponible</h2>";

    //? Añade cadiz a la siguiente posicion disponible en el array, si la ultima posicion es 1, cadiz se añade en la posicion 2

    $prov[] = "Cadiz"; // añade a la siguiente posicion disponible en el array el valor de cadiz
    echo "<br>";
    var_dump($prov); // imprimimos el array con mas informacion.

    echo "<hr>";

    //todo Cambiar el valor de un indice, en este caso en la posicion 1 se almacena cadiz cuando antes estaba cordoba en la posicion 1.

    echo "<h2>Modificamos para que cadiz en el array tome la posicion 1 </h2>";

    echo "Antes de que tome la posicion 1 : ", var_dump($prov), "<br><br>"; // ! en la posicion 2 esta cadiz

    $prov[1] = "Cadiz"; // ? machacamos el valor que tenga 1 y se almacena Cadiz , por lo tanto cordoba se borra del array

    echo "Despues de hacer la modificacion para que Cadiz tome la posicion 1 en el array \$prov: ", var_dump($prov); //? cordoba que estaba en la posicion 1 se borra 

    echo "<hr>";

    // todo Añadir en la posicion 15 el valor de granada

    echo "<h2>Añadir en la posicion 15 del array el valor de granada </h2>";

    $prov[15] = "Granada";
    echo "Añadir en la posicion 15 granada: ", var_dump($prov);


    echo "<hr>";

    //todo Añadir en la siguiente posicion libre de array, en este caso el 16 el valor de malaga
    //? No le importa que nos saltemos indices, toma la siguiente indice del ultimo (si nos saltamos del 3 al 15 el siguiente indice libre va a ser el 16).

    echo "<h2>Añadir en la siguiente posicion libre del array el valor de Malaga (en este caso el 16) </h2>";

    $prov[] = "Malaga";
    var_dump($prov); // Añade malaga en la posicion 16, que es la siguiente que esta libre

    echo "<hr>";

    //todo Añadir en la posicion 6 el valor de Valencia

    echo "<h2>Añadir en la  posicion  6 del array el valor de Valencia </h2>";

    $prov[6] = "Valencia";
    var_dump($prov); // se añade la ultima, no se añade en la posicion 6 del array de forma ordenada, por lo tanto ahora mismo el array estaria desordenado

    echo "<hr>";

    //todo Añadir en la posicion -1 el valor de Alicante

    echo "<h2>Añadir en la  posicion  -1 del array el valor de Alicante </h2>";

    //? Se almacena en la ultima posicion del array, alado del 16 */

    $prov[-1] = "Alicante";
    var_dump($prov);

    echo "<hr>";

    //todo Borrar valor introduciendo la posicion en el array 

    echo "<h2>Eliminar el valor que hay en el indice 0 del array (En este caso almeria) </h2>";

    unset($prov[0]); // Eliminamos el valor que hay en la posicion 0 del array $prov
    print_r($prov);

    echo "<hr>";

    //todo Añadimos de nuevo el valor de almeria en la posicion 0, se añade en la ultima posicion alado del -1

    echo "<h2>Añadir el valor de Almeria en la posicion 0 del array (Se añade alado del -1) </h2>";

    $prov[0] = "Almeria";
    print_r($prov);

    echo "<hr>";
    
    //todo Calcular la longitud del array con count
    
    echo "<h2>Calcular el tamaño del array con la funcion count </h2>";
    
    echo "El tamaño que tiene el array \$prov es de : ", count($prov);
    
    
    // todo Arrays asociativas (clave/valor)
    
    
    echo "<hr>";
    
    echo "<h2>Arrays asociativas (clave/valor)</h2>";
    
    //? definimos un array
    
    $datos1=[
        'nombre'=>"Manolo",
        'Apellidos'=>"Fernandez Perez",
        'edad'=>56,
        'isAdmin'=>false,
        12=>'Dato libre',
    ];
    
    echo "<h2>Imprimir por pantalla el array asociativo \$datos</h2>";
    
    var_dump($datos1); // imprime el nombre con su valor y asi con los demas claves y valores
    
    echo "<hr>";
    
    // todo  mostrar el valor definiendo una clave 
    
    echo "<h2>Mostrar un valor definiendo una clave (en este caso nombre)</h2>"; //! tener cuidado con las mayusculas y minusculas porque diferencia
    
    echo "<br><br>Voy a imprimir el valor que contiene la clave nombre en el array \$datos1: " , $datos1['nombre'];
    
    echo "<hr>";
    
    // todo Otras formas de imprimir el contenido de una clave. 
    
    echo "<h2>Otras formas de imprimir el contenido de una clave. </h2>"; //! tener cuidado con las mayusculas y minusculas porque diferencia
    
    
    echo "<br>El nombre es: {$datos1['nombre']}"; // con llaves
    echo "<br>El nombre es: ".$datos1['nombre']; // concatenando 
    
    echo "<hr>";

    // todo recorrer con un bucle foreach el array y imprimir tanto las claves como los valores de cada una de las claves que tenga el array
    
    echo "<h2>Recorrer todos las claves y imprimir cada valor con un bucle foreach </h2>";
    
    /**
     * ? me meto dentro del array grande
     * ? $key son las claves ( 'nombre' , 'Apellidos', 'edad' , 'isAdmin' y 12 )
     * * value son los valores de cada una de esas claves 
     */
    
    foreach ($datos1 as $key => $value) {
        echo "<br>\$datos1[$key] = $value"; // imprimo la clave y luego el valor
    }

    echo "<hr>";
    
    // todo imprimir solos los valores del array $datos1

    echo "<h2>Imprimir solos los valores del array \$datos1 con un foreach </h2>"; //! porque aqui tengo que poner $datos1 y no puedo poner $value preguntar paco

    /**
     * ? me meto en el array grande 
     * * defino que solo quiero sacar los valores que contenga ese array grande (internamente se mete en provAnd , provExt , provVal ) y imprime los valores
     */

    foreach ($datos1 as $value) {
        echo "<br> los valores son : " , $value;
    }

    // añadir en la posicion 56 del array de prov Zaragoza

    
    // todo array de mas de una dimension
    
    
    echo "<hr>";
    
    echo "<h2>Arrays de mas de una dimension</h2>";
    
    $provAnd = [
        'Almeria',
        'Cadiz',
        'Cordoba',
        'Granada',
        'Huelva',
        'Jaen',
        'Malaga',
        'Sevilla'
    ];
    $provExt = ['Cáceres', 'Badajoz'];
    $provVal = ['Alicante', 'Castellón', 'Valencia'];
    $total = [
        'Andalucia' => $provAnd,
        'Extremadura' => $provExt,
        'Valencia' => $provVal
    ];
    
    
    //todo Voy a mostrar por pantalla el array $total
    
    echo "<h2>Imprimir por pantalla el array \$total</h2>";
    
    print_r($total); // Imprime Andalucia con todas sun comunidades, lo mismo con extremadura --> con todas sus comunidades  y valencia --> con todas sus comunidades.
    
    echo "<hr>";
    
    //echo "<h2>Arrays asociativas (clave/valor)</h2>";
    
    echo "<h2>Crear una lista, donde como titutlo de la lista va a ser Andalucia , Extremadura y Valencia  y despues su correspondientes comunidades almacenadas en cada subarray</h2>";
    

    /**
     * ? El primer bucle for each accede al array $total que tiene la clave de las comunidades (Andalucia , Extremadura y Valencia) y los subarray con las respectivas provincias (Andalucia --> Almeria, granada etc...). 
     * * $comunidad define a las claves ('Andalucia' , 'Extremadura' y 'Valencia').
     * todo $provincia a las subarrays que contienen las provincias de cada comunidad autonoma ('Andalucia tiene la subarray provAnd', 'Extremadura tiene el subarray provExt' y 'Valencia tiene el subarray provVal')
     * 
     */


     
    echo "<ol>";

    foreach ($total as $comunidad => $provincia) {
        echo "<li>$comunidad</li>"; // Imprime el nombre de la comunidades (Andalucia, extremadura y valencia) que son las claves
        echo "<ul>";
        /**
         * ? El segundo foreach accede a las subarrays ( provAnd , provExt y provVal) y asigna una variable ($nombreProv) para que almacene todas las provincias que se almacena en esas subarray de cada comunidad auntonoma ('Andalucia' , 'Extremadura' y 'Valencia').
         */
        foreach ($provincia as $nombreProv) { //! preguntar a paco  porque aqui si que puedo poner $provincia
            echo "<li>$nombreProv</li>"; // Imprimo el contenido de las subarray de cada comunidad autonoma
        }
        echo "</ul>";
    }

    echo "</ol>";


    $prov[56] = "Zaragoza";
    print_r($prov);


    //borrar zaragoza 
    /*unset($prov[56]);
    echo "<br>";
    print_r($prov);*/
    
    //ordenar por los valores
    
    /*echo "<br>";
    sort($prov);
    print_r($prov);*/
    
    // ordenar las claves 
    echo "<br>";
    ksort($prov);
    print_r($prov);
















    ?>

</body>

</html>