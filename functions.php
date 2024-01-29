<?php

function generatePassword($length) {
    // Caratteri consentiti per la password
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()-_+=<>?';

    // Combinare tutti i tipi di caratteri
    $allChars = $uppercase . $lowercase . $numbers . $specialChars;

    // Inizializzare la password come stringa vuota
    $password = '';

    // Aggiungere almeno un carattere da ciascuna categoria
    $password .= $uppercase[rand(0, strlen($uppercase) - 1)];
    $password .= $lowercase[rand(0, strlen($lowercase) - 1)];
    $password .= $numbers[rand(0, strlen($numbers) - 1)];
    $password .= $specialChars[rand(0, strlen($specialChars) - 1)];

    // Generare il resto della password
    for ($i = strlen($password); $i < $length; $i++) {
        $password .= $allChars[rand(0, strlen($allChars) - 1)];
    }

    // Mescolare la password per rendere l'ordine casuale
    $password = str_shuffle($password);

    return $password;
}

?>