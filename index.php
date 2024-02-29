<?php
// Label pagina
$page_label = 'PHP Strong Password Generator';

// Valore di caratteri massimo e minimo 
$min_char = 8;
$max_char = 32;

// Label campo password
$label_password_field = "Must be $min_char-$max_char characters long";

// # LOGICA
require __DIR__ . '/includes/logic/functions.php';

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

    <link rel="stylesheet" href="style.css">

    <title><?= $page_label ?></title>
</head>

<body>

    <!-- Header -->
    <?php  include __DIR__ . '/includes/templates/header.php' ?>

    <main>
        <!-- Alert -->
        <?php  include __DIR__ . '/includes/templates/alert.php' ?>

        <!-- Form -->
        <?php  include __DIR__ . '/includes/templates/form.php' ?>

    </main>
</body>

</html>