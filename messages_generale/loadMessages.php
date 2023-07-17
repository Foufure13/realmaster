<?php


$file_to_include = '../script/script_base_db.php';
include $file_to_include;

$recu_messages = $bdd->query('SELECT * FROM messages ORDER BY id DESC');

$load_message = 0;

if (!isset($_SESSION['pseudo'])) {
    $user_pseudo = "";
} else {
    $user_pseudo = $_SESSION['pseudo'];
}


while($message =$recu_messages->fetch()) {
    
    if($user_pseudo  == $message['pseudo'])
    {
    ?>
    <!-- <div class="message" style="margin: 2px 0px 2px 20px; padding : 5px;background-color :<?= $_SESSION['couleur'] ?>; "> -->
    <div class="message" style="margin: 2px 0px 2px 20px; padding : 5px; background-color :<?= $_SESSION['couleur'] ?>; ">

        <h2>
            <strong style="font-size: 16px;"><?= $message['pseudo']; ?> : </strong><br/>
            <em style="font-size: 14px; margin-left:8px;"> "<?= $message['message']; ?>"</em>
        </h2>
    </div>
    <?php


    } else {
        ?>
        <div class="message" style="margin: 2px 20px 2px 0px; padding : 5px; background-color :<?= $_SESSION['couleur'] ?>; ">
    
            <h2>
                <strong style="font-size: 16px;"><?= $message['pseudo']; ?> : </strong><br/>
                <em style="font-size: 14px; margin-left:8px;"> "<?= $message['message']; ?>"</em>
            </h2>
        </div>
        <?php
    }



        $load_message++;
        if ($load_message >= 35) {
            break;
        }
    
    }

?> 