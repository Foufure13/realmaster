<?php
ini_set('display_errors', 1);


$file_to_include = '../script/script_base_db.php';
include $file_to_include;


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile <?= $_SESSION['pseudo']; ?></title>
    <link rel="stylesheet" href="modif_compte.css">
    <script src="https://kit.fontawesome.com/32d4b62f47.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="titre"><h1>REALMASTER</h1></div>
    

    <nav>
  <a href="../index.php">Accueil</a>
  <a href="../Jeu/Jeu.php">Jeu</a>
  <a href="../Avatar/Avatar.php">Avatar</a>
  <a href="../Compte/profile.php">Compte</a>     
  <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
  <div class="animation start-home"></div>
</nav>


  <div class="card-container">
    <!-- <span class="pro">PG</span> -->
    <div class="img">
      <img class="round" src="../Media/Madgod.jpg" alt="user" />
    </div>


    <div class="info">
      <div class="info1">
        <h1><?= $_SESSION['pseudo']; ?></h1>
        <h5>Date de creation: <?= $_SESSION['user_date']; ?></h5>
      </div>

      <form method="POST" class="box" action="script/script_change_pseudo.php">
        <div class="form">
           <h2>Changer de pseudo : </h2> 
           <div class="inputbox">
            <input type="text" name="pseudo" required="required">
            <input type="submit" name="confirmer_pseudo" value="confirmer">
            <?php if (isset($_SESSION["message_erreur_pseudo"])){ echo $_SESSION["message_erreur_pseudo"]; }unset($_SESSION["message_erreur_pseudo"]); ?>
           </div>
        </div>
      </form>


      <br/><br/>
      <h2>Rang Maître</h2>

      <div class="description">
        <h2>Description:</h2>
        <div class="contenant"> 
        <h3><?= $_SESSION['user_description']; ?></h3>
        </div>
      </div> 
      <form method="POST" class="box" action="script/script_change_description.php">
        <div class="form">
          <h2>Changer la description : </h2> 
          <div class="inputbox">
            <textarea type="text" name="description" required="required" style="min-width: 350px; min-height: 40px;"></textarea>
            <input type="submit" name="confirmer_description" value="confirmer">
            <?php if (isset($_SESSION["message_erreur_description"])){ echo $_SESSION["message_erreur_description"]; }unset($_SESSION["message_erreur_description"]); ?>
          </div>
      </div>
    </form>
     
    </div>


    <a class="btn" href="profile.php"> 
      <button class="primary">Retour profil</button>
    </a>
  </div>
  


</body>
</html>

