<?php

session_start();

//connection a la base de donnée
$host = "localhost";
$username = "realmaster";
$password = "T-73bL]E5OwXe2IJ";
$dbname = "patruno_realmaster";

//$host = "labo-g4.info";
//$username = "patruno_php";
//$password = "M,Q=6D=ojc-@";
//$dbname = "patruno_realmaster";

try {

    $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "PDO Connection failed: " . $e->getMessage();
}

if (isset($_SESSION['pseudo']))
{
 


$user_pseudo = $_SESSION['pseudo'];
$recuperation_info_user = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
$recuperation_info_user->execute(array($user_pseudo));
$Liste_info_user = $recuperation_info_user->fetch();

$_SESSION['user_date'] = $Liste_info_user['date_created'];
$_SESSION['user_description'] = $Liste_info_user['description'];
// $_SESSION['couleur'] = $Liste_info_user['couleur'];


}
 
?>
