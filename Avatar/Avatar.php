<?php
ini_set('display_errors', 1);

// $image = "data:image/png;base64,". $_POST["var1"];
// $class = $_POST["var2"];
// $_SESSION['skin_avatar']=$image;
// $_SESSION['classe_avatar'] = $class;

$file_to_include = '../script/script_base_db.php';
include $file_to_include;

$file_to_include = './script/default_avatar.php';
include $file_to_include;

$_SESSION['couleur']= "#b012c58f";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avatar</title>
    <link rel="icon" href="../Media/Oryx_jeu.png">
    <link rel="stylesheet" href="avatar.css">
    <link rel="stylesheet" href="creation_avatar.css">
    <link rel="stylesheet" href="../messages_generale/style_message.css">
    <!-- <script src="https://kit.fontawesome.com/32d4b62f47.js" crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- ajout des dépenlce JS pour le chargement des message  -->
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
        <div class="animation start-blog"></div>
    </nav>







    <section class="carte_avatar">



         <?php if (!isset($_SESSION['skin_avatar'])) { ?>
          <div class="carte_avatar_img_default"> 
            <img src="<?=$_SESSION['skin_avatar_default'];?>">
            <img src="<?=$_SESSION['stuff_avatar_default'];?>"> 
        </div>

        <?php } else {?>
          <div class="carte_avatar_img_default"> 
          <div><img src="<?=$_SESSION['skin_avatar'] ;?>"> </div>
            <div class="stuff_avatar"><img src="<?=$_SESSION['stuff_avatar'];?>"> </div>
            <?=$_SESSION['classe_avatar'] ;?>
            
        </div>
          
        <?php }?> 
        <?php if (!isset($_SESSION['pseudo'])) { ?>
        <div class="position_button">
            <a class="" href="../Connexion/login.php"><button class="button_creation">Creation   _Avatar</button></a>
        </div>
        <?php } else {?>
          <div class="position_button">
            <a class="" href="../api_skin_viewer/index.html"><button class="button_creation">Creation   _Avatar</button></a>
        </div>
        <?php }?>

        <?php if (isset($_SESSION['creation_avatar'])) { if ($_SESSION['creation_avatar'] == 1) { ?>
        <div class="position_button_enregister">
        <form method="POST" class="" action="./script/Envoie_avatar.php"> <input class="button_creation button_enregister_color" type="submit" name="Envoie_avatar" value="confirmer"></form>
        </div>
        <?php }}?> 
        

    </section>


    <section id="load_avatar"></section>









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



    <script src="/Avatar/script/chargement_avatar.js"></script>

    <script src="/js/chargement_message.js"></script>

    <!-- ouvrire fermer la windows message -->
    <script src="/js/navbar_interaction.js"></script>

    <!-- envoyer un message -->
    <script src="/js/envoie_message.js"></script>



</body>

</html>