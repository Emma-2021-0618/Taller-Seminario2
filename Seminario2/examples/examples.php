<?Php

// Que es PHP?
// Acronimo: Hypertext Preprocessor, es un lenguaje de programacion
// interpretado del lado del servidor y de uso general que se adapta
// especialmente al desarrollo web.

//Estructura basica del lenguaje.

// Que es una variable? es un espacio de la memoria del ordenador.
// Declarar una variable
$nombre = 'Pedro Santana';
$edad = 5;
$direccion = 'Avenida Duarte';


//Que son funciones? Un conjunto de intrucciones que ejecutan una operacion.

function nombre_funcion($parametro)
{
    //cuerpo de la funcion
};

//ejemplo
function imprimir_hola()
{
    echo "hola";
};

//Que son condicionales? Sirve para ejecutar instrucciones dependiendo las condicionales.

if ($condicion) {
    //cuerpo de la condicion
}

// Ejemplo

if (10 > 5) {
    echo "el primer valor es mayor!!!";
} else {
    echo "el segundo valor es mayor";
};

// Que son arreglos? Es una coleccion ordenada de datos. Se usan para almacenar multiples valores en una sola variable.

$nombre_arrelgo = [];
$nombre_arreglo2 = array();

//Ejemplo

$gavetero = [
    "gavetero1" => "medias",
    "gavetero2" => "Franelas",
    "gavetero3" => "ropa interior",
];


//Que son bucles?  es una secuencia de instrucciones de código que se ejecuta repetidas veces,
//hasta que la condición asignada a dicho bucle deja de cumplirse.

// Bucle for

for ($i = 1; $i <= 10; $i++) {
    echo $i;
};

// bucle while

$num = 1;
while ($num <= 10) {
    echo $i++;  /* el valor presentado sería
                   $i antes del incremento
                   (post-incremento) */
}


//Que es MYSQLI? Es una extension que nos permite interactuar con la base de datos.

mysqli_connect($host,$usuario,$contrasena,$nombre_database);
mysqli_fetch_array($consulta_database);
mysqli_query($conexion_database, "consulta de base de datos");


//https://www.php.net
//https://www.php.net/manual/es/book.mysqli.php

















