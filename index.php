<?php
ini_set('display_errors', 0);


$file_to_include = './script/script_base_db.php';
include $file_to_include;



$_SESSION['PATH']= "/index.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="messages_generale/style_message.css">
    <script src="https://kit.fontawesome.com/32d4b62f47.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script><!-- ajout des dépencance JS pour le chargement des message  -->
</head>
<body>
    <div class="connect">
    <?php if (!isset($_SESSION['pseudo'])) { ?>
      <button class="log" href=""><a href="../Connexion/login.php">Connexion</a></button>
      <button class="log" href=""><a href="../Inscription/registration.php">Inscription</a></button>
  <?php } else {?>
      <form action="../script/deconnexion.php" method="post">
        <button type="submit" class="log">Deconnexion</button>
      </form>
  <?php }?>
    </div>
    <h1>REALMASTER</h1>

<nav>
  <a href="../index.php">Accueil</a>
  <a href="../Jeu/Jeu.php">Jeu</a>
  <a href="../Avatar/Avatar.php">Avatar</a>
  <a href="../Compte/profile.php">Compte</a>     
  <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
  <div class="animation start-home"></div>
</nav>




<section class="window1">
  <!-- ======= Header ======= -->
  <div class="header messagerie_style">
    <img class="oryx_message" src="/Media/oryx_golem-removebg-preview.png">

    <div class="affichage_chat">  
      <div id="messages">
        <div class="message">
          </div></div>
          <script src="/js/chargement_message.js"></script>
        </div>

        <div class="formulaire_message">
          <form id="form-message" style="text-align:center">
          <textarea class="zone_message" type="text" name="message" placeholder="Message" required="required" spellcheck="true"></textarea><br>
          <input class="zone_button" value="Envoyer" type="submit" name="valider">
          </form>
      </div>
    </div>
  </div>

  <div>
    <i id="zone_m" class="bi bi-list mobile-nav-toggle d-xl-none"><i class="fa-regular fa-message"></i></i>
  </div>
</section> 








<script src="/js/envoie_message.js"></script>
<script src="/js/navbar_interaction.js"></script>


</body>
</html>

