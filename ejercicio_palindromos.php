<?php

function esPalindromo($cadena) {

    $cadena = strtolower(str_replace(' ', '', $cadena));
    
    return $cadena === strrev($cadena);
}

// Ejemplo de uso
$texto = "Anita lava la tina";
echo "\"" . $texto . "\" es " . (esPalindromo($texto) ? "un palíndromo" : "no es un palíndromo");
?>