<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

// Lancement du moteur Twig
echo $twig->render('login_page.twig', [
    'style' => 'login_page',
]);