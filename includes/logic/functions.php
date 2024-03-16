<?php
require __DIR__ . '/../utils/Characters.php';

// Recupero il dato inviato
$psw_length = $_GET['psw-length'] ?? NULL;

// Controllo se posso usare i duplicati dopo aver controllato se ho una lunghezza
if($psw_length){
    $duplicates_allowed = $_GET['duplicates'] || false;
}

// Controllo i caratteri ammessi (lettere, numeri, simboli)
$allowed_characters = $_GET['characters'] ?? [];

$input_class = '';
$suggest_class = '';

// Controllo del valore
if(!isset($psw_length)){
    // Se non vengono inseriti valori allora avremo
    $class = 'alert-secondary';
    $message = "👉🏼 Password here 👈🏼";
}else if(empty($psw_length) || empty($allowed_characters)){
    $class = 'alert-danger';
    $input_class = 'is-invalid';
    $suggest_class = 'invalid-feedback';
    $message = "Invalid password length ⚠️";
}else{
    $password = generate_password($psw_length, $duplicates_allowed, $allowed_characters);
    $class = 'alert-success';
    $message = $password;
    // var_dump($password);
}

// # Funzione per generare una password con lunghezza scelta dall'utente
function generate_password($length, $duplicates_allowed, $allowed_characters) {

    //* Imposto la variabile password come stringa vuota
    $password = '';

    //* Creo i possibili caratteri
    $arr_char = set_characters($allowed_characters);

    //* Calcolo la lunghezza dell'array per la funzione random poiché accetta min(0) e max
    $characters_length = mb_strlen($arr_char);

    //* Se i duplicati non sono ammessi e la lunghezza scelta è maggiore dei caratteri totali  
    if(!$duplicates_allowed && $length > $characters_length){
        $message = "La lunghezza massima della password senza duplicati è $characters_length";
    }

    //* Estraggo caratteri a caso fintanto che non raggiungo la lunghezza richiesta
    while(mb_strlen($password) < $length){
        // Prendo un carattere a caso tra quelli disponibili
        $random_character = $arr_char[rand(0, $characters_length -1)];

        
        if($duplicates_allowed || !str_contains($password, $random_character)){

            // Concateno la stringa password
            $password .= $random_character;
        }
    }

     return $password;
}