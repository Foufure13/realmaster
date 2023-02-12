<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="ssignin.css">
</head>
<body>
    <form method="POST" class="box" action="script_registration.php">
        <div class="form">
           <h2>Inscription</h2> 
           <div class="inputbox">
            <input type="text" name="pseudo" required="required">
            <span>Pseudo</span>
            <i></i>
           </div>
           <div class="inputbox">
            <input type="password" name="mdp" required="required" autocomplete="off">
            <span>Mot de passe</span>
            <i></i>
           </div>
           <div class="inputbox">
            <input type="password" name="mdpConfirmation" required="required" autocomplete="off">
            <span>Confirmer le mot de passe </span>
            <i></i>
           </div>
           <div class="links">
            <a href="../Connexion/login.php">Connexion</a>
           </div>
           
           <input type="submit" name="envoi" value="Inscription">
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
