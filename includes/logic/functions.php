<?php
// Label pagina
$page_label = 'PHP Strong Password Generator';

// Recupero il dato inviato
$psw_length = $_GET['psw-length'] ?? NULL;
// var_dump($psw_length);

// Valore di caratteri massimo e minimo 
$min_char = 8;
$max_char = 32;

// Label campo password
$label_password_field = "Must be $min_char-$max_char characters long";

// Variabile password
$password = '';

 // Creo una striga contenente tutte le lettere dell'alfabeto maiuscole e minuscole
 $letters = 'a b c d e f g h i l m n o p q r s t u v z A B C D E F G H I L M N O P Q R S T U V Z';
    
 // Creo una stringa contenente i numeri da 0 a 9
 $numbers = '0 1 2 3 4 5 6 7 8 9';
 
 // Creo una stringa contenente i simboli
 $symbols = "! \" # $ % & ' ( ) * + - . / : ; < = > ? @ [ \ ] ^ _` { | }";
 
 // Creo un array unico con tutte le lettere, i numeri e i simboli
 $string = "$letters $numbers $symbols";
 $arr_char = explode(" ", $string);
 // var_dump($arr_char);

 // Controllo del valore
if($psw_length === NULL){
    // Se non vengono inseriti valori allora avremo
    $class = 'alert-secondary';
    $message = "👉🏼 Qui visualizzarai la tua password 👈🏼";
}else if($psw_length === ''){
    $class = 'alert-warning';
    $message = "Inserire un numero di caratteri compreso tra $min_char e $max_char per generare una password 👇🏼";
}else{
    $password = generate_password($psw_length, $arr_char);
    var_dump($password); 
    $class = 'alert-success';
    $message = "La tua password è: <strong>$password</strong>";
}

// # Funzione per generare una password con lunghezza scelta dall'utente

function generate_password($length, $characters) {
    //* Imposto la variabile password come stringa vuota
    $password = '';

    //* Calcolo la lunghezza dell'array per la funzione random poiché accetta min(0) e max
    $characters_length = count($characters);

    //* Imposto la lunghezza massima dell'array password ($password_array)
    $length = min($length, $characters_length);

    //* Mescolo l'array dei caratteri per rendere l'estrazione casuale
    shuffle($characters);

    //* Giro sull'array dei caratteri tante volte quante scelte dall'utente
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[$i];
    }

    return $password;
}