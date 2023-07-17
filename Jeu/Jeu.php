<?php
ini_set('display_errors', 1);

$file_to_include = '../script/script_base_db.php';
include $file_to_include;

$_SESSION['couleur'] = "#0062ff8f";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jeu</title>
  <link rel="stylesheet" href="jjeu.css">
  <link rel="icon" href="../Media/Oryx_jeu.png">
  <link rel="stylesheet" href="/messages_generale/style_message.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet"> -->
  <!-- <script src="https://kit.fontawesome.com/32d4b62f47.js" crossorigin="anonymous"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- ajout des dépencance JS pour le chargement des message  -->
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


  <h1>REALMASTER</h1>

  <nav>
    <a href="../index.php">Accueil</a>
    <a href="../Jeu/Jeu.php">Jeu</a>
    <a href="../Avatar/Avatar.php">Avatar</a>
    <a href="../Compte/profile.php">Compte</a>
    <a href="#"><i class="fa-solid fa-magnifying-glass"></i><form method="POST" class="form" action="../find/script_recherche.php">
    <input type="text" name="recherche_pseudo" class="recherche" required="required" placeholder="Rechecher un pseudo">
    </form></a>
    <div class="animation start-about"></div>
  </nav>

  
  <div class="pres">
    <h2>Presentation du Jeu</h2>
  </div>
  <div class="boite">
    <div class="text">
      <img class="rotmg" src="../Media/titre.png" alt="ROTMG">
     <b> Realm of the Mad God: Exalt</b> est un jeu de rôle massivement multijoueur en ligne (MMORPG) développé par Deca Games.
      <br>
      Il se déroule dans un monde fantastique rempli de créatures dangereuses et de trésors cachés. <br> <br>
      Dans ce jeu, vous incarnent des personnages et peuvent explorer le monde, combattre des ennemis, <br>
      amasser des ressources et progresser dans le jeu en acquérant de nouvelles compétences et en améliorant leurs
      équipements. <br>
      Le but est de survivre le plus longtemps possible dans un environnement hostile rempli de créatures folles et de
      pièges mortels.<br> <br>
      Realm of the Mad God: Exalt se distingue par son style graphique coloré et animé, ainsi que par sa musique
      entraînante. <br>
      vous peuvez jouer seuls ou en groupe avec d'autres joueurs du monde entier pour affronter les défis les
      plus redoutables du jeu. <br> <br>
      En résumé, Realm of the Mad God: Exalt est un jeu de rôle en ligne passionnant et <br>
      exigeant qui propose une expérience de jeu immersive et divertissante pour les joueurs de tous niveaux. <br> <br>


    </div>
  </div>

  <div class="boite">
    <div class="text2">
    <h3>Il y a plusieurs boss dans Realm of the Mad God (ROTMG), <br>
    chacun ayant ses propres attaques et ses propres défis uniques. <br>
    Voici une liste non exhaustive de certains des boss les plus populaires de ROTMG:</h3> <br><br>
    <ul>
      <li>
      <h2>Oryx the Mad God</h2>   <img class="boss1" src="../Media/Oryx_jeu.png" alt="">
      </li>
      <br>
      <li>
      <h2>The Forgotten King</h2> <img class="boss2" src="../Media/Boss/forgotten_king.png" alt="">
      </li>
      <br>
      <li>
      <h2>The Puppet Master</h2><img class="boss3" src="../Media/Boss/puppet_master.png" alt="">
      </li>
      <br>
      <li>
      <h2>Limon the Sprite Goddess</h2> <img class="boss4" src="../Media/Boss/limon.png" alt="">
      </li>
      <br>
      <li>
      <h2>The Cube God</h2> <img class="boss5" src="../Media/Boss/Cube_God.png" alt="">
      </li>
      <br>
      <li>
      <h2>Septavius the Ghost God</h2> <img class="boss6" src="../Media/Boss/ghost-god.png" alt="">
      </li>
    </ul>
    <br><br>
    Il y a évidemment beaucoup d'autres boss dans ROTMG, cette liste <br>
    n'étant qu'un échantillon des différents défis que vous autres, (futurs) joueurs peuvent affronter dans le jeu.
    </div>
  </div>

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




  <script> var windowON = "<?php echo $_SESSION['windonw_message']; ?>"; </script>

  <script src="/js/navbar_interaction.js"></script>

  <?php $_SESSION['windonw_message'] = "false"; ?>

</body>

</html>