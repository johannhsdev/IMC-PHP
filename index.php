<?php

$peso = readline("Ingrese su peso en kilogramos: ");
$altura = readline("Ingrese su altura en metros: ");

$imc = $peso / ($altura * $altura);

echo "Tu IMC es: " . round($imc, 2) . "\n";

if ($imc >= 25)
    echo "No estas en tu peso ideal, Hora de ir al Gym! 🏋️‍♀️";
else
    echo "Estas en tu peso ideal Felicidades! 🎉";