<?php 
ini_set('display_errors', 1);
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="icon" href="../Media/Oryx_jeu.png">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form method="POST" class="box" action="script_identification.php">
        <div class="form">
           <h2>Connexion</h2> 
           <div class="inputbox">
            <input type="text" name="pseudo" required="required">
            <span>Pseudo</span>
            <i></i>
           </div>
           <div class="inputbox">
            <input type="password" name="mdp" required="required">
            <span>Mot de passe</span>
            <i></i>
           </div>
           <div class="links">
            <a href="#">Mot de passe oublie?</a>
            <a href="../Inscription/registration.php">S'inscrire</a>
           </div>
           <input type="submit" name="envoi" value="Connexion">
        </div>
    </form>
    <?php 
        if (isset($_SESSION["message_erreur"])){
            echo $_SESSION["message_erreur"]; 
        }
    unset($_SESSION["message_erreur"]); 
    ?>
</body>
</html>
