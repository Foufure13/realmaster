<?php
session_start();


$base64_image = $_SESSION['skin_avatar'];
$image = imagecreatefromstring(base64_decode($base64_image));

// récupérer les dimensions de l'image
$width = imagesx($image);
$height = imagesy($image);

// définir les dimensions du rognage
$crop_width = $width - 440;
$crop_height = $height;

// définir les coordonnées de départ du rognage
$x_offset = 220;
$y_offset = 0;

// créer une nouvelle image vide
$cropped_image = imagecreatetruecolor($crop_width, $crop_height);


// // rogner l'image dans la nouvelle image vide
 imagecopy($cropped_image, $image, 0, 0, $x_offset, $y_offset, $crop_width, $crop_height);

// // enregistrer la nouvelle image dans un fichier
// imagejpeg($cropped_image, "./croppé.jpeg");

// // libérer la mémoire
imagedestroy($image);
imagedestroy($cropped_image);


// enregistrer la nouvelle image dans un tampon mémoire
ob_start();
imagejpeg($cropped_image);
$image_data = ob_get_contents();
ob_end_clean();

// encoder l'image dans un format base64
$_SESSION['skin_avatar'] =  base64_encode($image_data);

// afficher le résultat
// echo $base64_image;

?>
