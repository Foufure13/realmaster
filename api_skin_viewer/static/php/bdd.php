<?php
session_start();

$image = $_POST["var1"];
$class = $_POST["var2"];

$_SESSION['skin_avatar'] = "data:image/png;base64," . $image;
$_SESSION['classe_avatar'] = $class;
?>