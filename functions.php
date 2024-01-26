<?php
// Funzione per generare una password casuale
function generatePassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';
    $charactersLength = strlen($characters);

    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $charactersLength - 1)];
    }

    return $password;
}

// Verifica se è stato inviato il form
if (isset($_GET['password_length'])) {

    $passwordLength = $_GET['password_length'];

    $generatedPassword = generatePassword($passwordLength);
}
?>