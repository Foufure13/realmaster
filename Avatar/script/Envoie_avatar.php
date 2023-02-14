<?php
session_start();

//connection a la base de donnée
$host = "labo-g4.info";
$username = "patruno_php";
$password = "M,Q=6D=ojc-@";
$dbname = "patruno_realmaster";
try {

    $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "PDO Connection failed: " . $e->getMessage();
}





if(isset($_POST['Envoie_avatar'])){
    if (isset($_SESSION['skin_avatar'])) {

        


        
        





        $insertUser = $bdd->prepare('INSERT INTO avatar(pseudo, image_base64)VALUES(?, ?)');
        $insertUser->execute(array($_SESSION['pseudo'], $_SESSION['skin_avatar']));
        header('location: ../Avatar.php');

    //}else{
    //     $_SESSION["message_erreur"] = '
    //     <div class="erreur">
    //         <h3 style="text-align: center;">
    //         veuiller compléter le champ
    //         </h3>
    //     </div>
    //     ';
    //     header('location: ../Avatar.php');
    //     exit();
     }
}
?>
