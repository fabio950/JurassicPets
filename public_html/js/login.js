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
        var role = $('#role').val();
        var data = {nombre: nombre, password: password, role: role};
        $.ajax({
            type: 'POST',
            data: data,
            url: 'php/registrar.php',
            dataType: 'json',
            success: function (data) {

            }
        });
    });

    $('#btnLogin').click(function () {
        nombre = $('#nombreLogin').val();
        password = $('#passwordLogin').val();
        $.ajax({
            url: '../php/login.php?nombre=' + nombre + '&password=' + password,
            type: 'GET',
            //dataType: 'json',
            success: function (data) {
                if (data === "1") {
                    location.href = "../php/dashboard.php";
                }
                
              
            }
        });
         alert ("Ajax");
//         alert(location.href);
//         location.href = "./php/hola.php";
    });
});