<?php
// Label pagina
$page_label = 'Password Generator';

// Valore di caratteri massimo e minimo 
$min_char = 8;
$max_char = 32;

// Label campo password
$label_password_field = "*must be $min_char-$max_char characters";

// Mantengo la spunta della selezione dopo aver generato la password
$letters_checked = isset($_GET['characters']) && in_array('L', $_GET['characters']) ? 'checked' : 'checked';
$numbers_checked = isset($_GET['characters']) && in_array('N', $_GET['characters']) ? 'checked' : '';
$symbols_checked = isset($_GET['characters']) && in_array('S', $_GET['characters']) ? 'checked' : '';

// # LOGICA
require __DIR__ . '/includes/logic/functions.php';

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon"
        href="https://cdn.icon-icons.com/icons2/1744/PNG/512/3643767-key-keys-main-password-privilege_113429.png" />

    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />

    <title><?= $page_label ?></title>
</head>

<body>
    <div class="container-md my-4 small">

        <!-- Header -->
        <?php  include __DIR__ . '/includes/templates/header.php' ?>

        <main class="border-top border-bottom border-white border-opacity-50 p-3">
            <!-- Alert -->
            <?php  include __DIR__ . '/includes/templates/alert.php' ?>

            <!-- Form -->
            <?php  include __DIR__ . '/includes/templates/form.php' ?>

        </main>

    </div>
</body>

</html>