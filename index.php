<?php
// Label pagina
$page_label = 'PHP Strong Password Generator';

// Controllo per gestire il default value dell'input
// * SE c'è qualcosa in GET restituiscimelo altrimenti restituisci 'NULL'
$psw_length = $_GET['psw-length'] ?? NULL;

// Creo una striga contenente tutte le lettere dell'alfabeto maiuscole e minuscole
$letters = 'a b c d e f g h i l m n o p q r s t u v z A B C D E F G H I L M N O P Q R S T U V Z';

// Creo una stringa contenente i numeri da 0 a 9
$numbers = '0 1 2 3 4 5 6 7 8 9';

// Creo una stringa contenente i simboli
$symbols = "! \" # $ % & ' ( ) * +  - . / : ; < = > ? @ [ \ ] ^ _` { | }";

// Creo un array unico con tutte le lettere, i numeri e i simboli
$string = "$letters $numbers $symbols";
$arr_char = explode(" ", $string);
var_dump($arr_char);

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
                <div class="alert alert-secondary" role="alert">
                    Nessun carattere valido inserito!
                </div>
            </div>
        </section>

        <!-- Form -->
        <section id="psw-form">
            <div class="container">

                <form action="">
                    <div class="psw-length">
                        <label for="length" class="form-label m-0">Lunghezza password:</label>
                        <input type="number" min="8" max="32" class="form-control" id="length"
                            placeholder="Numero caratteri" name="psw-length" value="<?= $psw_length ?? 8 ?>">
                        <span id="passwordHelpInline" class="form-text">
                            Must be 8-32 characters long
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