
$(document).ready(function() {

    var interval = setInterval(function() {

        $.ajax({
            url: 'chat.php',
            success: function(data) {
                $('#messages').html(data);
                console.log(data);
            }
        });

    }, 1000);

    $.ajax({
        url: 'chat.php',
        success: function(data) {
            $('#messages').stop().animate({
                scrollTop: $("#messages")[0].scrollHeight
            }, 800);
        }
    });

    var btn = document.getElementById('message');
    btn.addEventListener('keydown', function(e) {
        if (e.keyCode == 13) {
            console.log('sadasdsdasdasdasdsa');
            $('#send').click();
        }
    });
});