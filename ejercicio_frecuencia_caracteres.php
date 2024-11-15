<?php

function frecuenciaCaracteres($cadena) {
    $frecuencia = [];
    
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];

        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            $frecuencia[$caracter] = 1; 
        }
    }
    
    return $frecuencia;
}

// Ejemplo de uso
$cadena = "programacion";
echo "Frecuencia de caracteres en \"$cadena\": <br>";
print_r(frecuenciaCaracteres($cadena));
?>
