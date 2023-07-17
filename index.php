<?php
ini_set('display_errors', 0);


$file_to_include = './script/script_base_db.php';
include $file_to_include;



$_SESSION['couleur'] = "#064a938f";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil</title>
  <link rel="stylesheet" href="index.css">
  <link rel="icon" href="/Media/Oryx_jeu.png">
  <link rel="stylesheet" href="/Avatar/creation_avatar.css">
  <link rel="stylesheet" href="messages_generale/style_message.css">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet"> -->
  <!-- <script src="https://kit.fontawesome.com/32d4b62f47.js" crossorigin="anonymous"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- ajout des dépencance JS pour le chargement des message  -->
</head>

<body>



  <div class="connect">
    <?php if (!isset($_SESSION['pseudo'])) { ?>
      <form action="/script/deconnexion.php" method="post">
        <button type="submit" class="log" name="Connexion">Connexion</button>
      </form>


      <form action="/script/deconnexion.php" method="post">
        <button type="submit" class="log" name="Inscription">Inscription</button>
      </form>
    <?php } else { ?>
      <form action="/script/deconnexion.php" method="post">
        <button type="submit" class="log" name="Deconnexion">Deconnexion</button>
      </form>
    <?php } ?>
  </div>



  <h1>REALMASTER</h1>



  <nav>
    <a href="../index.php">Accueil</a>
    <a href="../Jeu/Jeu.php">Jeu</a>
    <a href="../Avatar/Avatar.php">Avatar</a>
    <a href="../Compte/profile.php">Compte</a>
    <a href="#"><i class="fa-solid fa-magnifying-glass"></i>
      <form method="POST" class="form" action="../find/script_recherche.php">
        <input type="text" name="recherche_pseudo" class="recherche" required="required"
          placeholder="Rechecher un pseudo">
      </form>
    </a>
    <div class="animation start-home"></div>
  </nav>
  <div class="boite">
    <h2><b>Présentation du site</b></h2> <br><br>
    <div class="text">

      Nous avons créé ce site sur le jeu "Realm of the Mad God" qui permet<br> à ses utilisateurs de créer des avatars
      pour différents personnages <br>
      et classes de personnages. Cela permet aux joueurs de personnaliser <br>leur personnage et de les rendre uniques
      en leur genre.<br> <br>
      En plus de la création d'avatars, votre site offre également <br>une fonctionnalité de calcul de DPS (Dégâts Par
      Seconde)<br>
      en fonction de l'équipement choisi par l'utilisateur.<br> Cela signifie que les joueurs peuvent voir exactement à
      quoi s'attendre <br>
      en termes de dégâts qu'ils infligeront à <br>leurs ennemis en utilisant différents types d'équipement.
    </div>
  </div>

  <div class="boite">
    <div class="text">

      Cette fonctionnalité est extrêmement utile pour les <br>joueurs qui cherchent à maximiser leur potentiel de dégâts
      dans le jeu.<br>
      En connaissant leur DPS, ils peuvent choisir les équipements qui maximiseront leur efficacité en combat.<br><br>
      <img class="image"  src="../Media/pagecreation.png" alt="page création">
      En résumé, votre site offre aux joueurs de "Realm of the Mad God" <br>la possibilité de personnaliser leurs
      personnages et <br>
      de maximiser leur potentiel de dégâts grâce à la fonctionnalité de calcul de DPS. <br> <br>
      <div><img class="image_presentation" src="../Media/pagedps.png" alt="page dps "><img class="image_presentation" src="../Media/pagedps2.png" alt="page dps 2"></div>
      En résumé, Realmaster est un outil précieux <br>
      pour les joueurs de RotMG qui cherchent à optimiser <br>
      leur performance en utilisant des simulations de DPS <br>
      et des conseils de theorycrafting. <br><br>
      Pour commencer à creer vos personnages, rendez-vous sur la page <div class="avatar"><a href="../Avatar/Avatar.php"> "Avatar" </a></div>
    </div>
  </div>


  <section id="load_avatar"></section>




  <section class="window1">
    <!-- ======= Header ======= -->
    <div class="header messagerie_style">
      <img class="oryx_message" src="/Media/oryx_golem-removebg-preview.png">

      <div class="affichage_chat">
        <div id="messages">
          <div class="message">
          </div>
        </div>
        <script src="/js/chargement_message.js"></script>
      </div>

      <div class="formulaire_message">
        <form id="form-message" style="text-align:center">
          <textarea class="zone_message" type="text" name="message" placeholder="Message" required="required"
            spellcheck="true" style="background-color :<?= $_SESSION['couleur'] ?>"></textarea><br>
          <input class="zone_button" value="Envoyer" type="submit" name="valider"
            style="background-color :<?= $_SESSION['couleur'] ?>">
        </form>
      </div>
    </div>
    </div>

    <div>
      <i id="zone_m" class="bi bi-list mobile-nav-toggle d-xl-none"
        style="background-color :<?= $_SESSION['couleur'] ?>"><i class="fa-regular fa-message"></i></i>
    </div>
  </section>



  <!-- <script src="/Avatar/script/chargement_avatar.js"></script> -->

  <script src="/js/acceuil_chargement_avatar.js"></script>

  <script src="/js/envoie_message.js"></script>
  <script src="/js/navbar_interaction.js"></script>


</body>

</html>