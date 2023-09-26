<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body bgcolor="#000" text="#fff">

    <?php

    


    function pintarTablaCorregida (array $datos){ // Imprime 'Andalucia'=>['Almeria', '',...]]
        echo "<br>";
        echo "<table border = '4' align='center'>";
        foreach ($datos as $nomComunidad => $provincia){
        echo "<tr>";
        echo "<td align='center' colspan='".count($provincia)."'>$nomComunidad</td>";
        echo "</tr>";
        echo "<tr>";
        foreach ($provincia as $nombresProvincias) {
            echo "<td>$nombresProvincias</td>";
        }
        echo "</tr>";

        echo "</table>";
        
    }
}

function pintarTabla($subarray, $comunidad)
{
    /*echo "<table border='2' align='center'>";

    // creamos la primera fila que va a ser el titulo con el colspan
    echo "<tr>";
    echo "<td align='center' colspan='10'>Andalucia</td>";
    echo "</tr>"; // cierrro la primera fila 

    // /**
    //  * ? El primer for crea la filas 
    //  * * El segundo for crea las celdas con el mensaje por dentro
    //  */
    // for ($i = 0; $i < 10; $i++) {
    //     echo "<tr>"; // abro etiqueta fila
    //     for ($j = 0; $j < 10; $j++) {
    //         echo "<td>Almeria</td>"; // creo las celdas
    //     }
    //     echo "</tr>"; // cierro etiqueta de fila
    // }
    // echo "</table>";

    echo "<table border='2' align='center'>";
        echo "<tr><td align='center' colspan='".count($subarray)."'>$comunidad</td></tr>"; // calculo el tamaño del subarray (Andalucia, extremadura etc...) para hacer el colspan 
        echo "<tr>";
    foreach ($subarray as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";

    echo "</table>";


}




    foreach ($total as $vCom => $kProv) {
        echo ("<li>$vCom</li>");
        echo "<ol>";
        foreach ($kProv as $nombre) {
            echo ("<li>$nombre</li>");
        }
        echo ("</ol>");
    }


    /**
     * todo print_r("nombre del array") muestra el contenido del array 
     * ! var_dump("nombre del array") muestra el contenido del array el tipo de dato, el indice donde esta
     */


    $provincias = ["Almeria", 'cordoba', 'granada'];
    /*$provincias1  = array('Almeria' , 'Cordoba');
    $provincias2 = [];
    $provincias3 = array();*/

    print_r($provincias); // muestra el contenido del array
    echo "<br>";
    var_dump($provincias); // esto sirve para cualquier dato, devuelve cuantos valores hay dentro del array y el tipo de dato(longitub del string) que hay en cada posicion.*/ 

    $provincias[] = "cadiz";
    echo "<br>";
    var_dump($provincias);


    $provincias[1] = "cadiz"; // machaca el nombre que hay en la posicion 1 y asigna cadiz 
    echo "<br>";
    var_dump($provincias);


    $provincias[15] = "Malaga"; // Asigno en la posicion 15 del array el valor de malaga
    echo "<br>";
    var_dump($provincias);


    $provincias[] = "Jaen"; // Asigno en la posicion siguiente del ultimo que tenga disponible, en este caso 16.
    echo "<br>";
    var_dump($provincias);


    $provincias[6] = "Valencia"; // Añade en el indice 6 valencia, pero despues del 16, osea que no esta ordenado
    echo "<br>";
    var_dump($provincias);


    $provincias[-1] = "Alicante"; // Pinta en el indice 6 valencia, pero despues del 6, osea que no esta ordenado
    echo "<br>";
    var_dump($provincias);
    echo "<br>$provincias[-1]"; // muestro por pantalla el texto que hay en la posicion -1 del array



    unset($provincias[0]);
    echo "<br>";
    print_r($provincias);

    // Añadios a la posicion 0 otra vez almeria
    $provincias[0] = "Almeria";
    echo "<br>";
    print_r($provincias);


    echo "<br> La longitub de \$provincias es: " . count($provincias); // Devolver el tamaño del array 




    // ARRAYS ASOCIATIVOS (Clave/Valor)

    echo "<hr>";

    echo "<br><br><br>";

    echo "ARRAYS ASOCIATIVOS (Clave/Valor) <br>";


    $datos = [
        'nombre' => "Manolo",
        'Apellidos' => "Fernandez Perez",
        'edad' => 56,
        'isAdmin' => false,
        12 => 'Dato libre', // asigno en el indice 12 "Dato libre"
    ];


    var_dump($datos);

    echo "<br> $datos[12]"; // imprime por pantalla Dato libre

    echo "<br> El nombre es : {$datos['nombre']}"; // Para imprimir algo que no es numerico tiene que ser entre {} ya que voy a mostrar un dato asociativo.

    echo "<br> El nombre es: " . $datos['nombre']; // Imprime el nombre sin tener que poner {}. 



    echo "<hr>";

    echo "Recorrer arrays";

    echo "<br>";


    /**
     * * $k --> Guarda las claves 
     * ! $v Guarda el valor de esa clave
     */

    foreach ($datos as $k => $v) {
        echo "<br>\$datos[$k] = $v";
    }

    echo "<br><br>";

    echo "Recorriendo el array de provincias";



    foreach ($provincias as $k => $v) {
        echo "<br>\$datos[$k] = $v";
    }

    echo "<br><br>";

    echo "Imprimir solo los valores";

    foreach ($datos as $k => $v) { // imprimir los valores
        echo "<br>$v";
    }


    // arrays de mas de una dimension

    $provAnd = ['Almeria', 'Cadiz', 'Cordoba' , 'Granada', 'Huelva', 'Jaen', 'Malaga', 'Sevilla'];  // tamaño de 7 

    $provExt = ['Caceres', 'Badajoz']; // tamaño de 2 

    $provVal = ['Alicante', 'Castellon', 'Valencia']; // tamaño de 3 

    $total = [ // array que tiene 3 indices, pero andalucia tiene asociada a su vez otro array, la de provincias de almeria. 
        'Andalucia' => $provAnd,
        'Extremadura' => $provExt,
        'Valencia' => $provVal
    ];







    /**
     * todo Esto lo que va a imprimir es andalucia --> imprime el array de provAnd y asi con los demas.
     */
    print_r($total);


    /* Hacer una lista, que ponga Andalucia y hacer una lista de puntos donde ponga almeria, cadiz cordoba.*/


    echo "<h1>Hacer una lista con tres titulos Andalucia, Extremadura y Valencia  y hacer una lista de puntos con sus localidades</h1>";



    foreach ($total as $comunidad => $provincia) {
        echo "<ul> $comunidad";
        foreach ($provincia as $nombre) {
            echo "<li>$nombre</li>";
        }
        echo "</ul>";
    }
    echo "</ul>";


    echo "<ol>";
    foreach ($total as $vCom => $kProv) {
        echo ("<li>$vCom</li>");
        echo "<ol>";
        foreach ($kProv as $nombre) {
            echo ("<li>$nombre</li>");
        }
        echo ("</ol>");
    }
    echo "</ol>";

    echo "<br><br><br>";

    echo "Creando la tabla con cada comunidad autonoma";

    foreach ($total as $key => $value) { // para que me cree las 3 tablas
        /**
         * * $value es el subarray (El subarray de andalucia es == provAnd )
         * ! key puede ser Andalucia extremadura o valencia
         */

         echo "<br><br>";

        pintarTabla($value , $key);
    }



   


    foreach ($total as $comunidad => $provincia) {
        pintarTablaCorregida([$comunidad => $provincia]); // ['Andalucia' => ['Almeria', 'granada' , etc.....]]
    }





    //primero le paso lo gordo, el metodo tiene que tener dos for each







    // pintar tabla la cual se le pasa 

    // $total['Andalucia'];





    ?>


</body>

</html>