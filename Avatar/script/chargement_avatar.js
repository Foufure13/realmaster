
// charger les messages
$('#load_avatar').load('/Avatar/script/loadAvatar.php');
setInterval('load_avatar()',6000);
function load_avatar(){
    $('#load_avatar').load('/Avatar/script/loadAvatar.php');

}

