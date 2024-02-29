<?php 
// # Funzione per crerare uno stringone di caratteri
function set_characters()
{
    // Creo una striga contenente tutte le lettere dell'alfabeto minuscole
    $letters_low = 'abcdefghijklmnopqrstuvwxyz';

    // Creo una striga contenente tutte le lettere dell'alfabeto maiuscole
    $letters_up = strtoupper($letters_low);

    // Creo una stringa contenente i numeri da 0 a 9
    $numbers = '0123456789';
    
    // Creo una stringa contenente i simboli
    $symbols = "!\"#$%&'()*+-./:;=?@[\]^_`{|}";

    //! Creo uno stringone unico con tutte le lettere, i numeri e i simboli
    $characters = $letters_low . $letters_up . $numbers . $symbols;

    return $characters;
}
?>