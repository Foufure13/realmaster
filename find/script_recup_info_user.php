<?php



if (isset($_SESSION['pseudo_recherche'])) {

    $find_user_pseudo = $_SESSION['pseudo_recherche'];
    $recuperation_info_user = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
    $recuperation_info_user->execute(array($find_user_pseudo));
    $Liste_info_user = $recuperation_info_user->fetch();


    if ($recuperation_info_user->rowCount() == 1) {

        $find_user_date = $Liste_info_user['date_created'];
        $find_user_description = $Liste_info_user['description'];

    } else {
        // $_SESSION["message_erreur_pseudo"] = 'Aucun utilisateur trouvé';
        header('location: /index.php');
        exit();
    }

}


?>