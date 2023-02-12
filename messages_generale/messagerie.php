<?php
session_start();

$file_to_include = '../script/script_base_db.php';
include $file_to_include;

// if (isset($_POST['valider'])) {
    if (!empty($_SESSION['pseudo']) and !empty($_POST['message'])) {
        $pseudo = htmlspecialchars($_SESSION['pseudo']);
        $message = nl2br(htmlspecialchars($_POST['message']));

        $insere_message = $bdd->prepare('INSERT INTO messages(pseudo,message)VALUES(?, ?)');
        $insere_message->execute(array($pseudo, $message));
        $_SESSION['windonw_message']="true";
        header('location: ' . $_SESSION['PATH']);
        exit;
    }
    else{
        header('location: ' . $_SESSION['PATH']);
        echo "complété tous les champ";
    }
    
// }
?>


