<?php
session_start();

$image = "data:image/png;base64,". $_POST["var1"];
$class = $_POST["var2"];

$_SESSION['skin_avatar']=$image;
$_SESSION['classe_avatar'] = $class;

// echo "etape un -->".$image;
// echo "etape deux -->".$_SESSION['skin_avatar'];

// //rogner l'image 
// $file_to_include = '../../../script/rogner_image.php';
// include $file_to_include;

// $_SESSION['skin_avatar']= "data:image/png;base64," . $_SESSION['skin_avatar'];
?>