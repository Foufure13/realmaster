<?php
  ini_set('display_errors', 1);
  $file_to_include = '../script/script_base_db.php';
  include $file_to_include;
  $_SESSION['PATH']= "/api_dps/index.php";
?>


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta
      name="description"
      content="DPS Calculator for Realm of the Mad God."
    />
    <title>RotMG DPS Calculator</title>
    <script>
        var classe = "<?php echo isset($_SESSION['classe_avatar']) ? $_SESSION['classe_avatar'] : ''; ?>";
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
    <script defer="defer" src="./static/js/main.7b9910f8.js"></script>
    <link href="./static/css/main.df192802.css" rel="stylesheet" />
  </head>

  <body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root"></div>
    <div id="modal" />
    <div id="tooltip" />
  </body>
</html>