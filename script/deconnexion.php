<?php
session_start();

if(isset($_POST['Connexion'])){
    header('location: /Connexion/login.php');
}

if(isset($_POST['Inscription'])){
    header('location: /Inscription/registration.php');
}

if(isset($_POST['Deconnexion'])){
    session_destroy();
    header('location: /index.php');
    exit;
}
?>
