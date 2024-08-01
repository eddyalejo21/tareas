<?php

// 1. Declaración de Variables
$numero_entero_a = 7; // variable integer
$numero_entero_b = 10; // variable integer
$numero_flotante = 3.1416; // variable float
$texto = "Hola, Bienvenid@,"; // variable string
$esMayor = true; // variable boolean
$arreglo = array(); // variable array


// 2. Operaciones Aritméticas:
$suma = $numero_entero_a + $numero_entero_b;
$resta = $numero_entero_a - $numero_entero_b;
$producto = $numero_entero_a * $numero_flotante;
$division = $numero_entero_a / $numero_entero_b;

echo "La suma de $numero_entero_a y $numero_entero_b es: $suma<br>";
echo "La resta de $numero_entero_a y $numero_entero_b es: $resta<br>";
echo "El producto de $numero_entero_a y $numero_flotante es: $producto<br>";
echo "La división de $numero_entero_b y $numero_flotante es: $division<br>";

// 3. Manipulación de Cadenas:
$texto_nuevo = " Eddy Trejo";
$cadena_concatenada = $texto . $texto_nuevo;
$longitud_cadena = strlen($cadenaConcatenada);

echo "La cadena concatenada es: $cadena_concatenada<br>";
echo "La cadena de texto tiene: $longitud_cadena caracteres<br>";

// 4. Uso de Condicionales:
if ($booleano) {
    echo "El estudiante tiene aprobadas las materias en la primera fase<br>";
} else {
    echo "El estudiante no tiene aprobadas las materias en la primera fase<br>";
}

// 5. Creación de un Array:
$arreglo[] = "Proyectos Informáticos";
$arreglo[] = "Gestión Empresarial";
$arreglo[] = "Inteligencia de Negocios";
$arreglo[] = "Arquitectura de Software";
$arreglo[] = "Inteligencia Artificial";
$arreglo[] = "Aplicaciones Web";
echo "El tercer elemento del arreglo es: " . $arreglo[5] . "<br>";

?>