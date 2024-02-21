<section id="psw-form">
    <div class="container">
        <form action="">
            <div class="psw-length">
                <label for="length" class="form-label m-0">Lunghezza password:</label>
                <input type="number" class="form-control" min="<?= $min_char ?>" max="<?= $max_char ?>" id="length"
                    placeholder="Numero caratteri" name="psw-length" value="<?= $psw_length ?? NULL ?>">
                <span id="passwordHelpInline" class="form-text">
                    <?= $label_password_field ?>
                </span>
            </div>
            <button class="btn btn-secondary">Crea</button>
            <a href="index.php" class="btn btn-warning">Azzera</a>
        </form>
    </div>
</section>