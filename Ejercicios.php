<?php

/**
 * Función que invierte un array de números
 * @param array $numeros Array de números a invertir
 * @return array Array invertido
 */
function invertirLista($numeros) {
    $longitud = count($numeros);
    $listaInvertida = [];
    
    for ($i = $longitud - 1; $i >= 0; $i--) {
        $listaInvertida[] = $numeros[$i];
    }
    
    return $listaInvertida;
}

/**
 * Función que suma los números pares de un array
 * @param array $numeros Array de números enteros
 * @return int Suma de los números pares
 */
function sumarPares($numeros) {
    $suma = 0;
    
    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $suma += $numero;
        }
    }
    
    return $suma;
}

/**
 * Función que cuenta la frecuencia de cada carácter en una cadena
 * @param string $texto Cadena de texto a analizar
 * @return array Array asociativo con la frecuencia de cada carácter
 */
function contarCaracteres($texto) {
    $frecuencia = [];
    
    // Convertir a minúsculas para no distinguir entre mayúsculas y minúsculas
    $texto = strtolower($texto);
    
    // Contar cada carácter
    for ($i = 0; $i < strlen($texto); $i++) {
        $caracter = $texto[$i];
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            $frecuencia[$caracter] = 1;
        }
    }
    
    // Ordenar el array por clave
    ksort($frecuencia);
    
    return $frecuencia;
}

/**
 * Función que imprime una pirámide de asteriscos
 * @param int $altura Altura de la pirámide
 */
function imprimirPiramide($altura) {
    for ($i = 1; $i <= $altura; $i++) {
        // Imprimir espacios
        for ($j = 1; $j <= $altura - $i; $j++) {
            echo " ";
        }
        
        // Imprimir asteriscos
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }
        
        echo "\n";
    }
}

// Ejemplos de uso

// 1. Lista Invertida
echo "1. Problema de Lista Invertida:\n";
$numeros = [1, 2, 3, 4, 5];
echo "Lista original: " . implode(", ", $numeros) . "\n";
$invertida = invertirLista($numeros);
echo "Lista invertida: " . implode(", ", $invertida) . "\n\n";

// 2. Suma de Números Pares
echo "2. Problema de Suma de Números Pares:\n";
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "Números: " . implode(", ", $numeros) . "\n";
$sumaPares = sumarPares($numeros);
echo "La suma de los números pares es: $sumaPares\n\n";

// 3. Frecuencia de Caracteres
echo "3. Problema de Frecuencia de Caracteres:\n";
$texto = "Kodigo es genial";
echo "Texto: $texto\n";
$frecuencia = contarCaracteres($texto);
echo "Frecuencia de caracteres:\n";
foreach ($frecuencia as $caracter => $cantidad) {
    echo "'$caracter': $cantidad\n";
}
echo "\n";

// 4. Pirámide de Asteriscos
echo "4. Problema de Bucle Anidado (Pirámide de 5 niveles):\n";
imprimirPiramide(5);

?>