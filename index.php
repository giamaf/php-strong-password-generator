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

// Controllo del valore
if(!$psw_length){
    // Se non vengono inseriti valori allora avremo
    $class = 'alert-secondary';
    $message = "👉🏼 Qui visualizzarai la tua password 👈🏼";
    $password = '';

}else if($psw_length === NULL){
    $class = 'alert-warning';
    $message = "Il numero di caratteri è obbligatorio per generare una password 👇🏼";
    $password = '';
}else if($psw_length < 8){
    $class = 'alert-warning';
    $message = "Il numero minimo di caratteri è <strong>$min_char</strong>";
    $password = '';
}else if ($psw_length > 32) {
    $class = 'alert-warning';
    $message = "Il numero massimo di caratteri è <strong>$max_char</strong>";
    $password = '';
}else{
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

    $password = generate_password($psw_length, $arr_char);
    // var_dump($password); 
    $class = 'alert-success';
    $message = "La tua password è: <strong>$password</strong>";
}


// # Funzione per generare una password con lunghezza scelta dall'utente

function generate_password($length, $characters){
    //* Imposto la variabile password come stringa vuota
    $password_array = [];

    //* Calcolo la lunghezza dell'array per la funzione random poiché accetta min(0) e max
    $characters_length = count($characters);

    //* Imposto la lunghezza massima dell'array password ($password_array)
    $length = min($length, $characters_length);

    //* Giro sull'array dei caratteri tante volte quante scelte dall'utente
    for($i = 0; $i < $length; $i++){
        //* Carattere estratto ad ogni giro
        $current_char = $characters[rand(0, $characters_length -1 )];
        
        //* Inserisci il carattere estratto ad ogni giro nell'array password SE NON è già presente 
        if(!in_array($current_char, $password_array)){
            $password_array[] = $current_char;
        }
    }
    return implode("", $password_array);
}


?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />

    <link rel="stylesheet" href="style.css" />

    <title><?= $page_label ?></title>
</head>

<body>

    <!-- Header -->
    <?php  include __DIR__ . '/includes/templates/header.php' ?>

    <main>
        <!-- Alert -->
        <section id="psw-alert">
            <div class="container">
                <div class="alert <?= $class ?>" role="alert">
                    <?= $message ?>
                </div>
            </div>
        </section>

        <!-- Form -->
        <section id="psw-form">
            <div class="container">

                <form action="">
                    <div class="psw-length">
                        <label for="length" class="form-label m-0">Lunghezza password:</label>
                        <input type="number" class="form-control" min="<?= $min_char ?>" max="<?= $max_char ?>"
                            id="length" placeholder="Numero caratteri" name="psw-length"
                            value="<?= $psw_length ?? NULL ?>">
                        <span id="passwordHelpInline" class="form-text">
                            <?= $label_password_field ?>
                        </span>
                    </div>
                    <button class="btn btn-secondary">Crea</button>
                    <a href="index.php" class="btn btn-warning">Annulla</a>
                </form>
            </div>
        </section>
    </main>
</body>

</html>