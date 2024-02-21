<?php
// Label pagina
$page_label = 'PHP Strong Password Generator';



// Controllo per gestire il default value dell'input
// * SE c'è qualcosa in GET restituiscimelo altrimenti restituisci 'NULL'
$psw_length = $_GET['psw-length'] ?? NULL;

// var_dump($psw_length);

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
                        <input type="number" min="1" class="form-control" id="length" placeholder="Numero caratteri"
                            name="psw-length" value="<?= $psw_length ?? 1 ?>">
                    </div>
                    <button class="btn btn-secondary">Crea</button>
                    <a href="index.php" class="btn btn-warning">Annulla</a>
                </form>
            </div>
        </section>
    </main>
</body>

</html>