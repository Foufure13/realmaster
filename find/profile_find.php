<?php
ini_set('display_errors', 1);

$file_to_include = '../script/script_base_db.php';
include $file_to_include;

$script_recup_info_user = './script_recup_info_user.php';
include $script_recup_info_user;


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile <?= $_SESSION['pseudo_recherche']; ?></title>
    <link rel="icon" href="../Media/Oryx_jeu.png">
    <link rel="stylesheet" href="compte_recherche.css">
    <link rel="stylesheet" href="../Avatar/creation_avatar.css">
    <link rel="stylesheet" href="../messages_generale/style_message.css">
    <script src="https://kit.fontawesome.com/32d4b62f47.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script><!-- ajout des dépencance JS pour le chargement des message  -->
</head>
<body>


<div class="connect">
    <?php if (!isset($_SESSION['pseudo'])) { ?>
      <form action="../script/deconnexion.php" method="post">
        <button type="submit" class="log" name="Connexion">Connexion</button>
      </form>
      <form action="../script/deconnexion.php" method="post">
        <button type="submit" class="log" name="Inscription">Inscription</button>
      </form>
  <?php } else {?>
      <form action="../script/deconnexion.php" method="post">
        <button type="submit" class="log" name="Deconnexion">Deconnexion</button>
      </form>
  <?php }?>
    </div>

    <div class="titre"><h1>REALMASTER</h1></div>


    <div id="output"></div>

    
    <nav>
    <a href="../index.php">Accueil</a>
    <a href="../Jeu/Jeu.php">Jeu</a>
    <a href="../Avatar/Avatar.php">Avatar</a>
    <a href="../Compte/profile.php">Compte</a>
    <a href="#"><i class="fa-solid fa-magnifying-glass"></i><form method="POST" class="form" action="../find/script_recherche.php">
    <input type="text" name="recherche_pseudo" class="recherche" required="required" placeholder="Rechecher un pseudo">
    </form></a>
    <div class="animation start-animate"></div>
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
          <textarea class="zone_message" type="text" name="message" placeholder="Message" required="required" spellcheck="true" style="background-color :<?= $_SESSION['couleur'] ?>"></textarea><br>
          <input class="zone_button" value="Envoyer" type="submit" name="valider" style="background-color :<?= $_SESSION['couleur'] ?>">
          </form>
      </div>
    </div>
  </div>

  <div>
    <i id="zone_m" class="bi bi-list mobile-nav-toggle d-xl-none" style="background-color :<?= $_SESSION['couleur'] ?>"><i class="fa-regular fa-message"></i></i>
  </div>
</section> 




  <div class="card-container">
    <!-- <span class="pro">PG</span> -->
    <div class="img">
      <img class="round" src="../Media/Madgod.jpg" alt="user" />
    </div>
    <div class="info">
      <div class="info1">
        <h1><?= $find_user_pseudo; ?></h1>
        <h5>Date de creation: <?= $find_user_date; ?></h5>
      </div>
      <h2>Rang Maître</h2>
      <div class="description">
        <h2>Description:</h2>
        <div class="contenant"> 
          <h3><?= $find_user_description; ?></h3>
        </div>
      </div>      
    </div>
    <a class="btn" href="modification_profil.php"> 
      <button class="primary">Modifier le profil</button>
    </a>
  </div>


  <section id="load_avatar"></section>










  <script src="/find/chargement_avatar.js"></script>

  <script src="/js/navbar_interaction.js"></script>
  <script src="/js/envoie_message.js"></script>
  
</body>
</html>

