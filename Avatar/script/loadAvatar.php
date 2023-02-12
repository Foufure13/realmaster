<?php


$file_to_include = '/script/script_base_db.php';
include $file_to_include;

$enregister_avatar = $bdd->query('SELECT * FROM avatar ORDER BY id DESC');




while($avatar =$enregister_avatar->fetch()) {
    
    ?>

    <div  class="carte_avatar carte_load_avatar">
        <div class="carte_avatar_img"></div>
        <h2><?=$_SESSION['pseudo'] ?></h2>
        </div>
    </div>

        <?php
    }


?> 