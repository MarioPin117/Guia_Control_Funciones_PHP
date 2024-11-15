<?php

function generarFibonacci($n) {

    $fibonacci = [0, 1];
    

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    
    return array_slice($fibonacci, 0, $n);
}

// Ejemplo de uso
$n = 5;
echo "Serie de Fibonacci para $n términos: <br>";
print_r(generarFibonacci($n));
?>
