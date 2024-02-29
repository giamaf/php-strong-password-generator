<?php 
// # Funzione per crerare uno stringone di caratteri
function set_characters($allowed_characters)
{
    // Creo una striga contenente tutte le lettere dell'alfabeto minuscole
    $letters_low = 'abcdefghijklmnopqrstuvwxyz';

    // Creo una striga contenente tutte le lettere dell'alfabeto maiuscole
    $letters_up = strtoupper($letters_low);

    // Creo una stringa contenente i numeri da 0 a 9
    $numbers = '0123456789';
    
    // Creo una stringa contenente i simboli
    $symbols = "!\"#$%&'()*+-./:;=?@[\]^_`{|}";

    $characters = '';
    if(in_array('L', $allowed_characters)) $characters .= $letters_low . $letters_up;
    if(in_array('N', $allowed_characters)) $characters .= $numbers;
    if(in_array('S', $allowed_characters)) $characters .= $symbols;

    return $characters;
}
?>