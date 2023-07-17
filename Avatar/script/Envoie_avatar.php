<?php
$file_to_include = '../../script/script_base_db.php';
include $file_to_include;





if(isset($_POST['Envoie_avatar'])){
    if (isset($_SESSION['skin_avatar'])) {


        $insertUser = $bdd->prepare('INSERT INTO avatar(pseudo, classe, image_base64, stuff_base64)VALUES(?, ?, ?, ?)');
        $insertUser->execute(array($_SESSION['pseudo'], $_SESSION['classe_avatar'], $_SESSION['skin_avatar'], $_SESSION['stuff_avatar']));
        header('location: ../Avatar.php');

        $_SESSION['skin_avatar'] = $_SESSION['skin_avatar_default'];
        $_SESSION['classe_avatar'] = "";
        $_SESSION['stuff_avatar'] = "";
        $_SESSION['creation_avatar'] = 0;
     }
}
?>
