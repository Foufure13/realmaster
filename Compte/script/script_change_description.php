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


if(isset($_POST['confirmer_description'])){
    if(!empty($_POST['description'])) {
        $new_description = htmlspecialchars($_POST['description']);

        $confirmation_pseudo = $bdd->prepare('SELECT description FROM users WHERE pseudo = ?');
        $confirmation_pseudo->execute(array($_SESSION['pseudo']));

        if($confirmation_pseudo->rowCount() == 1)
        {
            $recuperation_pseudo = $bdd->prepare('UPDATE users SET description = ? WHERE pseudo = ?');
            $recuperation_pseudo->execute(array($new_description, $_SESSION['pseudo']));

            // $_SESSION['pseudo'] = $pseudo;
            header('location:../modification_profil.php');
        }
        else{
            $_SESSION["message_erreur_pseudo"] = 'Aucun utilisateur trouvé';
            header('location: ../modification_profil.php');
            exit();
        }

    }else{
        $_SESSION["message_erreur"] = '
        <div class="erreur">
            <h3 style="text-align: center;">
            veuiller compléter le champ
            </h3>
        </div>
        ';
        header('location: ../modification_profil.php');
        exit();
    }
}
?>
