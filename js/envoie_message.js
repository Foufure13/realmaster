
// envoyer des messages sans recharger la page

  $(document).ready(function() {
    $('#form-message').submit(function(e) {
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: '/messages_generale/messagerie.php',
        data: $('#form-message').serialize(),
        success: function(response) {
          console.log('Le message a été envoyé avec succès.');
          $('.zone_message').val('');
          $('html, body').animate({
            scrollTop: $("#message").offset().top
          }, 2000);
        }
      });
    });
  });


