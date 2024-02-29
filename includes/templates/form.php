<section id="psw-form">
    <div class="container">
        <form action="">

            <!-- Lunghezza Password -->
            <div class="psw-length">
                <label for="length" class="form-label m-0">Lunghezza password:</label>
                <input type="number" class="form-control" min="<?= $min_char ?>" max="<?= $max_char ?>" id="length"
                    placeholder="Numero caratteri" name="psw-length" value="<?= $psw_length ?? NULL ?>">
                <span id="passwordHelpInline" class="form-text">
                    <?= $label_password_field ?>
                </span>
            </div>

            <!-- Ripetizione caratteri -->
            <fieldset class="row">
                <legend class="col-form-label col-sm-3">Consenti ripetizioni di uno o più caratteri</legend>
                <div class="col-sm-5">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="duplicates" id="duplicates" value="1"
                            checked>
                        <label class="form-check-label" for="duplicates">
                            Si
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="duplicates" id="no-duplicates" value="0">
                        <label class="form-check-label" for="no-duplicates">
                            No
                        </label>
                    </div>
                </div>
            </fieldset>

            <!-- Elementi da includere -->
            <div class="form-options my-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                    <label class="form-check-label" for="flexCheckDefault">
                        Lettere
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Numeri
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Simboli
                    </label>
                </div>
            </div>

            <!-- Tasti -->
            <button class="btn btn-secondary">Genera</button>
            <a href="index.php" class="btn btn-warning">Reset</a>
        </form>
    </div>
</section>