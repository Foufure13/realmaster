<?php
session_start();

$image = file_get_contents('php://input');

$_SESSION['stuff_avatar'] = "data:image/png;base64," . $image;
?>