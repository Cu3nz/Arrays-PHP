<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="#000" text="#fff">
    
    <?php

    // arrays de mas de una dimension

    $provAnd = ['Almeria', 'Cadiz', 'Cordoba' , 'Granada', 'Huelva', 'Jaen', 'Malaga', 'Sevilla'];  // tamaño de 7 

    $provExt = ['Caceres', 'Badajoz']; // tamaño de 2 

    $provVal = ['Alicante', 'Castellon', 'Valencia']; // tamaño de 3 

    $total = [ // array que tiene 3 indices, pero andalucia tiene asociada a su vez otro array, la de provincias de almeria. 
        'Andalucia' => $provAnd,
        'Extremadura' => $provExt,
        'Valencia' => $provVal
    ];

    // desordenar los arrays gracias a la funcion shuffle 
    /**
     * ? desordenamos el array, cada vez que se llama se va desordenando de forma aleatoria
     * * con el print_r devuelve por pantalla el array
     */

    //shuffle($provAnd);
    //print_r($provAnd);

    //echo "<br><br>";

    //echo "voy a devolver una provincia aleatorioa del array \$provAnd cada vez que recargo la pagina: $provAnd[0]";

        // ordenaar los arrays 

        //metodo sort();

        $nombres = ['Sergio' , 'Angela' , 'Lucia' , 'Adri' , 'Alba'];

        echo "<h2>Metodo sort ordenada de la A-Z</h2>";

        echo "Antes de ordenar el array \$nombre : <br> ";

        print_r($nombres); // devuelve el array

        sort($nombres); // ordeno el array

        echo "Despues de ordenar el array \$nombre : <br> ";

        print_r($nombres); // devuelve el array ya ordenada de la A-Z

        ECHO "<HR>";

        echo "<h2>Metodo sort ordenado de forma reversa Z - A</h2>";

        $nombres = ['Sergio' , 'Angela' , 'Lucia' , 'Adri' , 'Alba'];

        echo "Antes de ordenar el array \$nombre : <br> ";

        print_r($nombres); // devuelve el array

        rsort($nombres); // ordeno el array

        echo "Despues de ordenar el array de la Z-A \$nombre : <br> ";

        print_r($nombres); // devuelve el array ya ordenada de la A-Z


        // array asociativa

        $datos1 = [
            'uno' => 'Mi primer dato',
            'dos' => 'Ana', 
            'tres' => 'Zacarias'
        ];

       /* echo "<h2>Metodo sort ordenado con un array asociativa</h2>"; // elimina las claves ( ' uno ' , ' dos ' y  ' tres')

        sort($datos);

        echo "<hr>";

        print_r($datos);

        echo "<br><br>";

        echo "<hr>";

        echo "<h2>Ordena por el tamaño del subarray</h2>"; // elimina las claves ( ' uno ' , ' dos ' y  ' tres')

        sort($total); // ordena por el tamaño de los subarray de menor cantidad de datos a mayor numero de datos 

        print_r($total);*/
        
        // rsort hara de mayor cantidad a menor cantidad probar....


        // ksort ordena las claves


        /*ksort($datos);

        echo "<br>----------<br>";

        print_r($datos1);


        echo "<br>";

        $datos2 = [
            'uno' => 'Mi primer dato',
            'dos' => 'Ana', 
            'tres' => 'Zacarias',
            'a' => 'valor de a'
        ];

        krsort($datos2);

        echo "<br>probando krsort<br>";

        print_r($datos2);*/


        // metodo asort ordena los valores, pero  esta no se carga las claves ('uno' , 'dos' , 'tres' etc...)



        $datos3= [
            'uno' => 'a',
            'dos' => 'z', 
            'tres' => 'j',
            'a' => 'p'
        ];

        echo "<h2>Probando assort</h2>";

        asort($datos3);
        echo "<br> Probando asort()<br>";
        print_r($datos3); // te devuelve las claves ('uno') y ordena los valores de la A - Z.


        echo "<h2>Funciones explode , implode. compact. in array()</h2>";

        // funcion compact 

        echo "<br>";

        echo "<h2>Funcion  compact</h2>";

        

        $nom = "Sergio";
        $email = "sergioffdfd@gmail.com";
        $datos = compact('nom' , 'email'); // devuelve ['nom' => 'Sergio' , 'email' => 'sergioffdfd@gmail.com']. basicamente te crea un array, si no existe la variable se queda en blanco
        print_r($datos);

        echo "<hr>";

        echo "<h2>Funcion  implode solo funciona con arrays normales</h2>"; // los elementos de un array los pasa a un string

        $datos = ["Juan" , "sergioffdfd@gmail.com" , 'Almeria' , 'Jefe' ];

        $datos = implode(" , " , $datos); // lo separa con un espacio y una coma , lo que hay delante de la variale, es como va a separar los strings

        echo "<br>$datos<br>";


        echo "<h2>Funcion  implode explode</h2>"; // coge un string y lo convierte en un array

        $datos = "user::\home\user::/bin/bash::****";

        $datosArray = explode("::" , $datos); // convierte un string en un array , buscar por los dos puntos

        echo "<br>";

        print_r($datosArray); // devuelve [0] => user [1] => \home\user [2] => /bin/bash [3] => ****


        // ------------------------------- 

        $comunidades=[
            'Madrid' => ['Madrid'],
            'Extremadura' => ['Caceres', 'Badajoz'],
            'Andalucia' => ['Sevilla' , 'Granada' , 'Almeria'],
            'Galicia' => ['a coruña' , 'oresne' , 'lugo' , 'Pontevedra']
        ];

        echo "<br><br><br>";

        echo "<h3>Ordenar array por las comunidades y tambien ordenen por las provincias</h3>";

      ksort($comunidades); // ordenas las claves madrid extremadura andalucia y galicia
      foreach ($comunidades as $comunidad => $provincia) {
        sort($comunidades[$comunidad]); // ordena los valores que hay dentro del array $comunidades, por ejemplo en andalucia ordena Almeria, granada etc.... 
      }
      print_r($comunidades);

      echo "<br>Esto es una cadena".PHP_EOL; // es como el /n traduce el /n que tiene el sistema operativo. no lo vamos a usar mucho porque mac ubuntu y windows utiliza el /n

      //array asociativa

      echo "<br>";

      var_dump($_SERVER); // INFORMACION DEL SERVIDOR

      ECHO "<HR>";

      echo $_SERVER['PHP_SELF'];


        // ordenar el array, comunidades ordenadas y tambien que ordene las provincias de cada comunidad.










        






















    ?>

</body>
</html>