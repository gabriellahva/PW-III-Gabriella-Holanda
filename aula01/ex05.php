<?php

$peso = 70;
$altura = 1.70;

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "Abaixo do peso\n";
} else if ($imc >= 18.5 && $imc < 24.9) {
    echo "Peso normal\n";
} else if ($imc >= 25 && $imc < 29.9) {
    echo "Sobrepeso\n";
} else if ($imc >= 30 && $imc < 34.9) {
    echo "Obesidade grau 1\n";
} else if ($imc >= 35 && $imc < 39.9) {
    echo "Obesidade grau 2\n";
} else {
    echo "Obesidade grau 3\n"; 
}

?>