
// charger les messages
$('#load_avatar').load('/Compte/script/loadAvatar.php');
setInterval('load_avatar()',5000);
function load_avatar(){
    $('#load_avatar').load('/Compte/script/loadAvatar.php');

}

