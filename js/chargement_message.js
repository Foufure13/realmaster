
// charger les messages
$('#messages').load('../messages_generale/loadMessages.php');
setInterval('load_messages()',5000);
function load_messages(){
    $('#messages').load('../messages_generale/loadMessages.php');
}

