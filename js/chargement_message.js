
// charger les messages

setInterval('load_messages()',5000);
function load_messages(){
    $('#messages').load('../messages_generale/loadMessages.php');
}

