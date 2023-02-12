<?php
session_start();

// Connexion à la base de données
$url = "labo-g4.info";
$database = "patruno_realmaster";
$username = "patruno_php";
$password = "M,Q=6D=ojc-@";

// $conn = mysqli_connect($url, $username, $password, $database);

// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// Récupération de la base64 envoyée en JSON
$image = file_get_contents('php://input');

$_SESSION['skin_avatar']= "data:image/png;base64," . $image;




// Préparation de la requête SQL
// $stmt = $conn->prepare("INSERT INTO avatar (image_base64) VALUES (?)");
// $stmt->bind_param("s", $image);

// Exécution de la requête
// if ($stmt->execute()) {
//     echo "Image enregistrée avec succès dans la base de données.";
// } else {
//     echo "Erreur lors de l'enregistrement de l'image dans la base de données : " . $conn->error;
// }

// Fermeture de la connexion à la base de données
// $stmt->close();
// mysqli_close($conn);

?>
