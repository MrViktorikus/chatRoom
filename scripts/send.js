$('#formInput').submit(function(){
    var message = $('#message').val();
    var sender = $('#sender').val();
    
    $.ajax({
       url: 'send.php',
       data: {sender: sender, message: message},
       success: function(data){
           $('#feedback').html(data);
       }
    });
    
    return false;
});

