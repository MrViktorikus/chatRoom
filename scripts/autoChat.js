
$(document).ready(function() {

    var interval = setInterval(function() {

        $.ajax({
            url: 'chat.php',
            success: function(data) {
                $('#messages').html(data);
//                var chatBox = document.getElementById("messages");
//                chatBox.scrollTop = chatBox.scrollHeight;

                $('#messages').stop().animate({
                    scrollTop: $("#messages")[0].scrollHeight
                }, 800);
            }
        });
    }, 1000);
});

// var btn = document.getElementById('message');
//btn.addEventListerner('keydown', function (e) {
//    if(e.keyCode==13) {
//        console.log('sadasdsdasdasdasdsa');
//    }
//});