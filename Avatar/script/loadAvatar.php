<?php


$file_to_include = '../../script/script_base_db.php';
include $file_to_include;

$enregister_avatar = $bdd->query('SELECT * FROM avatar ORDER BY id DESC');




while($avatar =$enregister_avatar->fetch()) {
    
    ?>
    <style>.carte_avatar_img {  background-image: url(<?=$avatar['image_base64']?>); }</style>
    <div  class="carte_avatar carte_load_avatar">
        <img src="<?=$avatar['image_base64']?>">
        <div class="carte_avatar_img"></div>
        <h2><?=$avatar['pseudo'] ?></h2>
        </div>
    </div>

        <?php
    }


?> 