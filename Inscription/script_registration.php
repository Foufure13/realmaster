<?php
$file_to_include = '../script/script_base_db.php';
include $file_to_include;

$message_erreur = '';

// création dun code hewa dune couleur aléatoire
function getRandomColor() {
    $letters = '0123456789ABCDEF';
    $color = '#';
    for ($i = 0; $i < 6; $i++) {
        $color .= $letters[rand(0, 15)];
    }
    return $color;
}
// création dun code hewa dune couleur aléatoire




if(isset($_POST['envoi'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp']) AND !empty($_POST['mdpConfirmation'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = md5($_POST['mdp']);
        $mdp_confirmation = md5($_POST['mdpConfirmation']);


        $verification_user = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $verification_user->execute(array($pseudo));
        if($verification_user->rowCount() == 0) {
            if($mdp_confirmation == $mdp){
                $insertUser = $bdd->prepare('INSERT INTO users(pseudo,mdp, couleur)VALUES(?, ?, ?)');
                $insertUser->execute(array($pseudo, $mdp ,getRandomColor()));
        
                $recuperation_user = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND mdp = ?');
                $recuperation_user->execute(array($pseudo, $mdp));
                if($recuperation_user->rowCount() > 0)
                {
                    $_SESSION['pseudo'] = $pseudo;
                    $_SESSION['mdp'] = $mdp;
                    $_SESSION['id'] = $recuperation_user->fetch()['id'];
                }
                header('location: ../Compte/profile.php');

            } else{
                $message_erreur = "Vos mot de passe ne sont pas identique";
                appel_message_erreur($message_erreur);
            }
        } else {
            $message_erreur = "Ce pseudo existe deja";
            appel_message_erreur($message_erreur);
        }
    }else{
        $message_erreur = "veuiller compléter tous les champ";
        appel_message_erreur($message_erreur);
    }
}
function appel_message_erreur($message_erreur){
    $_SESSION["message_erreur"] = '
    <div class="erreur">
        <h3 style="text-align: center;">
        '.$message_erreur.'
        </h3>
    </div>';
    header('location: registration.php');
    exit();
}
?>
