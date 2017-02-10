$(document).ready(function () {

    $('#login-form-link').click(function (e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

    $('#register-form-link').click(function (e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

    $('#btnRegistrar').click(function () {
        var nombre = $('#nombre').val();
        var password = $('#password').val();
        var email = $('#email').val();
        $.ajax({
            type: 'POST',
            url: '../php/registrar.php',
            data: {nombre: nombre, password: password, email: email},
            success: function (data) {
                if (data === "1") {
                    location.href = "../index.php";
                } else {
                    alert(data);
                }
            }
        });
    });

    $('#btnLogin').click(function () {
        nombre = $('#nombreLogin').val();
        password = $('#passwordLogin').val();
        $.ajax({
            type: "POST",
            url: "../php/login.php",
            data: {nombre: nombre, password: password},
            success: function (data) {
                if (data === "1") {
                    location.href = "../index.php";
                } else {
                    alert("ERROR");
                }
            }
        });
    });
});