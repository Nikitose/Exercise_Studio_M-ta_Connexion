<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

// Identifiants valides
$valid_username = 'user';
$valid_password = 'password';

// Récupère les données du formulaire
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Vérifier
if ($username === $valid_username && $password === $valid_password) {
    echo $twig->render('connected.twig', [
        'style' => 'message',
    ]);
} else {
    echo $twig->render('not_connected.twig', [
        'style' => 'message',
    ]);
}