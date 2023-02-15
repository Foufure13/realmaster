<?php
session_start();

// $host = "localhost";
// $username = "root"; 
// $password = "root";
// $dbname = "rotml_membre";

$host = "labo-g4.info";
$username = "patruno_php";
$password = "M,Q=6D=ojc-@";
$dbname = "patruno_realmaster";
try {

    $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


// $bdd = mysqli_connect($host, $username, $password, $dbname);
// $bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8;',$username,$password);
    if(isset($_POST['envoi'])){
        if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])) {
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $mdp = md5($_POST['mdp']);
    
            $recuperation_user = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND mdp = ?');
            $recuperation_user->execute(array($pseudo, $mdp));
    
            if($recuperation_user->rowCount() > 0)
            {
                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['mdp'] = $mdp;
                $_SESSION['id'] = $recuperation_user->fetch()['id'];
                header('location:../Compte/profile.php');
            }
            else{
                $_SESSION["message_erreur"] = '
                <div class="erreur">
                    <h3 style="text-align: center;">
                        votre mot de passe ou pseudo est incorrecte
                    </h3>
                </div>
                ';
                header('location: login.php');
                exit();
            }
    
        } else{
            $_SESSION["message_erreur"] = "veuiller compléter tous les champ";
            header('location: login.php');
            exit();
        }
    }

?>
