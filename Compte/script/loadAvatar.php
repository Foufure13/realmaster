<?php


$file_to_include = '../../script/script_base_db.php';
include $file_to_include;

$current_user = $_SESSION['pseudo'];

$enregister_avatar = $bdd->prepare('SELECT * FROM avatar WHERE pseudo = ? ORDER BY id DESC');
$enregister_avatar->execute(array($current_user));



while($avatar =$enregister_avatar->fetch()) {
    
    ?>

    <div  class="carte_avatar carte_load_avatar">
        <img src="<?=$avatar['image_base64']?>" style="transform: scale(0.5);">
        <img src="<?=$avatar['stuff_base64']?>" style="transform: scale(2);" >
        <div class="carte_avatar_img"></div>
        <h2>Cree par <?=$avatar['pseudo'] ?> </br> Class : <?=$avatar['classe'] ?>  </h2>
        </div>
    </div>

        <?php
    }


?> 