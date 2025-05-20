$(document).ready(function () {
    $('#register-form').on('submit', function (e) {
        e.preventDefault();

        let formData = {
            username: $('#username').val(),
            password: $('#password').val()
        };

        $('#message').html('<p>Se procesează...</p>');

        $.ajax({
            url: 'auth/register.php',
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    $('#message').html('<p class="success">' + response.message + '</p>');
                    setTimeout(function () {
                        window.location.href = 'index.php';
                    }, 1000);
                } else {
                    $('#message').html('<p class="error">' + response.message + '</p>');
                }
            },
            error: function () {
                $('#message').html('<p class="error">Eroare la conectarea cu serverul!</p>');
            }
        });
    });
});