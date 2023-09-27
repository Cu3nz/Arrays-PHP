<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 resumen de arrays</title>
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

    <?php

    // todo Creacion de un array

    $provAnd = [
        'Almeria',
        'Cádiz',
        'Cordoba',
        'Granada',
        'Huelva',
        'Jaen',
        'Málaga',
        'Sevilla'
    ];
    $provExt = ['Cáceres', 'Badajoz'];
    $provVal = ['Alicante', 'Castellón', 'Valencia'];
    // todo Creacion de un array, donde:
    //? 'Andalucia' , 'Extremadura' y 'Valencia' son las claves (key)
    //? $provAnd , $provExt y provVal son los valores
    $total = [
        'Andalucia' => $provAnd,
        'Extremadura' => $provExt,
        'Valencia' => $provVal
    ];

    echo "<h2>Desordenar de forma aleatoria un array gracias a la funcion shuffle (cada vez que se llama cambia de forma aleatoria)</h2>";

    // todo shuffle desordena el array cada vez que la llamamos, cuando recargamos la pagina cambia, nunca va a ser igual

    shuffle($provAnd);
    echo "Voy a mostrar los valores del array \$provAnd de forma aleatoria: ", print_r($provAnd);

    echo "<hr>";

    echo "<h2>Mostrar por pantalla un valor de forma aleatoria (cada vez que se llama el valor cambiade forma aleatoria)</h2>";

    // todo la desordeno gracias a la funcion shuffle
    // ? tengo que llamar al array y pasarle un indice, en ese indice es donde se va a cambiar el valor de forma aleatoria cada vez que se llama o se recarga la pagina.
    shuffle($provAnd);
    echo "Voy a mostrar un valor del array  \$provAnd de forma aleatoria: ", $provAnd[0];

    echo "<hr>";


    // todo Metodo para ordenar arrays 

    //! Metodo sort 

    $nombres = ["Zacarias", "Ana", "Mohamed", "Pedro"]; // un array de nombres

    echo "<h2>Mostrar un array ordenada con la funcion sort (Ordena el array de la A-Z)</h2>";

    $nombres[-1] = "Angela";
    echo "Antes de ser ordenada: ", print_r($nombres);
    echo "<br><br>";
    // todo sort ordena el array de la A-Z
    //! sort tambien ordena el indice
    sort($nombres);
    echo "Despues de ser ordenada: de la A-Z: ", print_r($nombres);

    echo "<hr>";

    echo "<h2>Mostrar un array ordenada de forma recursiva con la funcion rsort (Ordena el array de la Z-A</h2>";

    // todo con la funcion rsort ordenamos los valores del array de la Z-A

    echo "Antes de ser ordenada: ", print_r($nombres);
    echo "<br><br>";
    rsort($nombres); //? ordena los valores del array de la Z-A
    echo "Despues de ser ordenada con rsort de la Z-A : ", print_r($nombres);

    // ----------------------------

    $datos = [
        'uno' => 'Mi primer dato',
        'dos' => 'Ana',
        'tres' => 'Zacarias'
    ];

    echo "<hr>";

    echo "<h2>Ordenar de forma recursiva (Z-A) con rsort el array \$datos</h2>";

    rsort($datos);
    print_r($datos); // Imprime primero zakarias, luegoo mi primer dato y luego ana


    echo "<hr>";

    echo "<h2>Ordenar de forma recursiva (Z-A) con rsort el array \$total (Array grande )</h2>";

    echo "Antes de estar ordenada de forma recursiva: ", print_r($total);
    echo "<br><br>";
    rsort($total); //! con rsort se carga las claves de andalucia extremadura y valencia, preguntar a paco
    echo "Despes de estar ordenada de forma recursiva (Z-A):  ", print_r($total);

    echo "<hr>";

    // todo Metodo ksort que se utiliza para ordenar las claves (keys) de un array de la A-Z 

    $datos1 = [
        'f' => 'Mi primer dato',
        'c' => 'Ana',
        'b' => 'Zacarias',
        'a' => "valor de a",
        'z' => "valor de a",
    ];

    echo "<h2>Ordenar las claves con ksort (keys a z y d) del array \$datos1 de la A-Z</h2>";

    echo "Antes de que este ordenadas las claves : ", print_r($datos1); // imprime f,c,b,a,z (no ordenada)
    echo "<br><br>";
    ksort($datos1); // ordenar las claves (uno, dos y tres) de la A-Z
    echo "Despues de que este ordenada las claves: ", print_r($datos1); // imprime a,b,c,f,z

    // todo Metodo krsort que se utilizar para ordenar las claves de forma Recurisva (Z-A) en un array 

    $datos2 = [
        'f' => 'Mi primer dato',
        'c' => 'Ana',
        'b' => 'Zacarias',
        'a' => "valor de a",
        'z' => "valor de a",

    ];

    echo "<hr>";

    echo "<h2>Ordenar las claves de forma recursiva con krsort (keys f c b  A y Z ) del array \$datos2 de la Z-A</h2>";

    echo "Antes de ser ordenada: ", print_r($datos2); // imprime f,c,b,a,z (no ordenada)
    echo "<br><br>";
    krsort($datos2);
    echo "Despues de ordenar las claves de forma recurisva: ", print_r($datos2); // imprime z,f,c,b,a

    // todo Metodo asort para ordenar solamente los valores de un array (parte derecha)

    $datos3 = [
        'Uno' => 'a',
        'dos' => 'z',
        'tres' => 'j',
        'A' => "p",

    ];

    echo "<br><br><br><br>";

    echo "<hr>";

    echo "<h2>Ordenar los valores del array \$datos3 ( a , z , j y p) con la funcion asort de la A-Z</h2>";

    echo "Antes de estar ordenada: ", print_r($datos3); // imprime a,z,j,p
    echo "<br><br>";
    asort($datos3); // ordena los valores del array de la A-Z
    echo "Despues de estar ordenada: ", print_r($datos3); // imprime a , j , p , z

    echo "<hr>";

    echo "<h2>Ordenar los valores del array \$datos3 ( a , z , j y p) con la funcion arsort de la Z-A</h2>";

    echo "Antes de estar ordenada: ", print_r($datos3); // imprime a,z,j,p
    echo "<br><br>";
    arsort($datos3); // ordena los valores del array de la A-Z
    echo "Despues de estar ordenada: ", print_r($datos3); // imprime z,p,j,a

    echo "<hr>";

    // todo Metodos explode, compact , implode , in_array()

    /**
     * todo Metodo compact 
     * ? Utilizado para crear un array a partir de variables existentes.
     * ? No se usa directamente para imprimir un array con formato, ya que su propósito es crear un array a partir de variables definidas previamente.
     */

    echo "<h2>Crear un array a partir de variables que hay definidas ( en este caso nombre y email)</h2>";

    $nombre = "Juan";
    $email = "juan@email.es";
    $datos = compact('nombre', 'email'); // con compact imprime lo siguiente ['nom'=>'Juan', 'email'=>'juan@email.es];
    print_r($datos);

    echo "<hr>";

    /**
     * todo Metodo implode 
     * ? Utilizado para concatenar los valores de un array en una cadena, separados por un delimitador específico.
     * ? Puede ser útil para imprimir un array con formato, como se mostró anteriormente.
     */

    echo "<h2>Imprimir un array con formato</h2>";

    $datos = ["Juan", "juan@correo.es", 'Almeria', 'Jefe'];

    $arrayFormato = implode(" , ", $datos); //! lo que esta entre "" en la parte izquierda , es el formato o el caracter por el cual va a estar dividido los valores y con el que se va a imprimir por pantalla en este caso con un espacio y una , . Imprime Juan , correo , Almeria , Jefe
    echo $arrayFormato; // imprimo el array con formato

    /**
     * todo  metodo Explode Utilizado para dividir una cadena en un array basado en un delimitador específico.
     * ? Utilizado para dividir una cadena en un array basado en un delimitador específico.
     * ? Puede ser útil si tienes una cadena con elementos separados por un carácter especial y deseas convertirla en un array.
     * ? No es necesario en este caso para imprimir un array con formato.
     */


    echo "<hr>";

    echo "<h2>Dividir una cadena de un array basandome en un delimitador en especifico (en mi caso los ::)</h2>";

    $datos = "user::/home/user::/bin/bash::*****::hola";
    $datosArray = explode("::", $datos); // ? Especifico el delimitador que son los :: y que me imprima los valores que haya detras de los :: o delante en el caso de ser el ultimo
    print_r($datosArray); //! Imprime lo que hay detras de cada :: y lo que hay despues en caso de ser el ultimo (lo digo por el hola )

    echo "<hr>";

    $nombreTotal = "juan,fernandez,juan@email.es,al,eria";
    $imprimirArray = explode(",", $nombreTotal);
    print_r($imprimirArray); // imprime juan fernande correo al eria


    echo "<hr>";

    $comunidades = [
        'Madrid' => ['Madrid'],
        'Extremadura' => ['Caceres', 'Badajoz'],
        'Andalucia' => ['Sevilla', 'Granada', 'Almeria'],
        'Galicia' => ['La Coruña', 'Orense', 'Lugo', 'Pontevedra'],
    ];

    

    //?  Ejercicio  ordenar tanto las claves como los valores de cada comunidad autonoma Ejemplo: Andalucia --> Almeria , Granada , Sevilla.
    
    echo "<h2>Ejercicio  ordenar tanto las claves como los valores de cada comunidad autonoma Ejemplo: Andalucia --> Almeria , Granada , Sevilla.</h2>";

    ksort($comunidades); // Primero ordenamos las claves de A-Z

    echo "Comprobacion de que solo ordena las claves: " , print_r($comunidades['Andalucia']); //! Imprime Andalucia --> Sevilla, Granada , Almeria

    echo "<br><br>";
    
    sort($comunidades['Andalucia']);
    echo "lo que hace el sort dentro del for each: " , print_r($comunidades['Andalucia']); //! esto es lo que haria el sort dentro del foreach? 

    echo "<br><br>";
    /**
     * ? El foreach accede al array  grande $comunidades y almacena: 
     * * $comunidad las claves (Madrid , Extremadura , Andalucia y Galicia)
     * * $provincia  los valores que almacena cada clave por  Ejemplo:  de la clave Andalucia --> Almeria , Granada , Sevilla.
     
     * ? el sort dentro del foreach lo que hace es posicionarse en cada una de las provinciaas y ordenar los valores de cada clave o subarray.
     */

    foreach ($comunidades as $comunidad => $provincia) {
        sort($comunidades[$comunidad]); // lo que hace es posicionarse en cada una de las provinciaas y ordenar los valores de cada clave.
    }

   echo "Solucion al ejercicio: " ,  print_r($comunidades);


    







    ?>



</body>

</html>