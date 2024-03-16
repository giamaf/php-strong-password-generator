<section class="form-password">
    <form>

        <!-- Psw length -->
        <div class="my-sm-3">
            <label for="length" class="form-label m-0">Password length:</label>
            <input style="width: 200px" type="number" class="form-control my-2 <?= $input_class ?>"
                min="<?= $min_char ?>" max="<?= $max_char ?>" id="length" name="psw-length"
                value="<?= $psw_length ?? NULL ?>">
            <div class="form-text <?= $suggest_class ?>">
                <p class="small"><?= $label_password_field ?></p>
            </div>
        </div>

        <!-- Parameters choice -->
        <div class=" form-options my-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="characters[]" value="L" id="letters"
                    <?= $letters_checked ?>>
                <label class="form-check-label" for="letters">
                    Letters
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="characters[]" value="N" id="numbers"
                    <?= $numbers_checked ?>>
                <label class="form-check-label" for="numbers">
                    Numbers
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="characters[]" value="S" id="symbols"
                    <?= $symbols_checked ?>>
                <label class="form-check-label" for="symbols">
                    Symbols
                </label>
            </div>
        </div>

        <!-- Char rep -->
        <fieldset class="row">
            <legend class="col-form-label col">Allow characters reps:</legend>
            <div class="col-12 ">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="duplicates" id="duplicates" value="1" checked>
                    <label class="form-check-label" for="duplicates">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="duplicates" id="no-duplicates" value="0" checked>
                    <label class="form-check-label" for="no-duplicates">
                        No
                    </label>
                </div>
            </div>
        </fieldset>

        <!-- Buttons -->
        <div class="buttons my-3">
            <button class="btn btn-secondary">Generate</button>
            <a class="btn btn-warning" href="index.php">Reset</a>
        </div>
    </form>
</section>