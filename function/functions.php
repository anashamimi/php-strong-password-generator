<?php


$password = '';

if(!empty($_GET['lenght'])){
    $lunghezza_password = $_GET['lenght']; 
    if($lunghezza_password >= 8 && $lunghezza_password <= 32){
        for ($i = 0; $i < $lunghezza_password; $i++) {
            $password .= $alphabet[array_rand($alphabet)];
        }
    } else {
        $password .= 'La lunghezza della password deve essere compresa tra 8 e 32 caratteri.';
    }
} else {
    $password .= 'Inserisci una lunghezza valida';
}
