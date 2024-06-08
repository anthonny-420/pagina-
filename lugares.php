<?php

$climas = array(
    'Bogota' => 'frio',
    'Monteria' => 'calido',
    'Medellin' => 'templado'
);

$ubicacion = array(
    'norte' => 'Guajira',
    'sur' => 'Leticia',
    'este' => 'Santander',
    'oeste' => 'Antioquia'
);

$turismo = array(
    'mar' => 'Santa marta',
    'llano' => 'Villavicencio',
    'desierto' => 'Riohacha',
    'valle' => 'Quindio'
);

echo '¿por medio de que opción desea buscar el lugar a visitar: clima, ubicación, turismo? ';

$min_answer_option = readline();
$min_answer_option = strtolower($min_answer_option);

while ($min_answer_option != 'clima' && $min_answer_option != 'ubicacion' && $min_answer_option != 'ubicación' && $min_answer_option != 'turismo') {
    echo 'el valor anexado no se encontro, digita nuevamente un valor que este dentro de nuestros limites, ¡Gracias🤓!' . PHP_EOL;
    $min_answer_option = readline();
    $min_answer_option = strtolower($min_answer_option);
}

echo 'respuesta correcta, ¡prosigamos! 🐵' . PHP_EOL;

switch ($min_answer_option) {
    case 'clima':
        echo 'Teniendo en cuenta que tu respuesta fue ' . $min_answer_option . ' ¿por favor dime cual es tu clima favorito entre los siguientes: frio, calido o templado? ';
        $answer_weather = readline();

        if ($answer_weather == 'frio') {
            echo 'Encontramos que para el clima ' . $answer_weather . ', un sitio que te podria gustar es: Bogota';
        } elseif ($answer_weather == 'calido') {
            echo 'Encontramos que para el clima ' . $answer_weather . ', un sitio que te podria gustar es: Monteria';
        } elseif ($answer_weather == 'templado') {
            echo 'Encontramos que para el clima ' . $answer_weather . ' un sitio que te podria gustar es: Medellin ';
        } else {
            echo 'Aquel valor que digitas no se encuentra dentro del campo asignado para los ' . $min_answer_option . ', puedes probar con las  opciones ("Ubicación" o "Turismo"), ya que posiblimente se encuentra allí';
        }
        break;


    case 'ubicacion':
        echo '¿Hacia que dirección deseas viajar: Norte, Sur, Este o Oeste? ';
        $direction = readline();
        $direction_answer = strtolower($direction);
        if ($direction_answer == 'norte') {
            echo 'Un lugar que te podemos recomendar que se encuentra hacia el ' . $direction_answer . ' del pais sería la Guajira';
        } elseif ($direction_answer == 'sur') {
            echo 'Un lugar que te podemos recomendar que se encuentra hacia el ' . $direction_answer . ' del pais sería Leticia';
        } elseif ($direction_answer == 'este') {
            echo 'Un lugar que te podemos recomendar que se encuentra hacia el  ' . $direction_answer . ' del pais sería Santander';
        } elseif ($direction_answer == 'oeste') {
            echo 'Un lugar que te podemos recomendar que se encuentra hacia el ' . $direction_answer . ' del pais seria Antioquia';
        } else {
            echo 'Aquel valor que digitas no se encuentra dentro del campo asignado para los ' . $min_answer_option . ', puedes probar con las  opciones ("Climas" o "Turismo"), ya que posiblimente se encuentra allí';
        }
        break;


    case 'turismo':
        echo '¿Teniendo en cuenta las siguientes condiciones, a cual tu preferirias ir con fines turisticos: mar, llano, desierto, valle? ';
        $tourism = readline();
        $tourism_answer = strtolower($tourism);
        if ($tourism_answer == 'mar') {
            echo 'Un lugar turistico en el que puedes encontrar ' . $tourism_answer . ' es en la ciudad de Santa Marta ';
        } elseif ($tourism_answer == 'llano') {
            echo 'Un lugar turistico ubicado en el ' . $tourism_answer . ' es la ciudad de Villavicencio';
        } elseif ($tourism_answer == 'desierto') {
            echo 'Un lugar turistico ubicado en el ' . $tourism_answer . ' es la ciudad de Riohacha';
        } elseif ($tourism_answer == 'valle') {
            echo 'Un lugar turistico ubicado en el ' . $tourism_answer . ' es la ciudad de Quindio';
        } else {
            echo 'Aquel valor que digitas no se encuentra dentro del campo asignado para el ' . $min_answer_option . ', puedes probar con las  opciones ("Climas" o "Ubiciación"), ya que posiblimente se encuentra alli';
        }
        break;
}
