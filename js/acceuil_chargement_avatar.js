
// charger les messages
$('#load_avatar').load('../script/AcceuilloadAvatar.php');
setInterval('load_messages()',6000);
function load_messages(){
    $('#load_avatar').load('../script/AcceuilloadAvatar.php');
}

