<?php
session_start(); // Démarre la session

if(!empty($_POST['recherche_pseudo'])) {
    $_SESSION['pseudo_recherche'] = $_POST['recherche_pseudo'];
    echo($_POST['recherche_pseudo']);
    header('location: profile_find.php');
}
?>
