$(document).ready(function () {
    $('#login-form-link').click(function(e) {
    	$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
        
    $('#btnRegistrar').click(function(){
        var nombre = $('#nombre').val();
        var password = $('#password').val();
        var role = $('#role').val();
        var data = { nombre : nombre, password : password, role : role};
        $.ajax({
            type : 'POST',
            data : data,
            url: 'php/registrar.php',
            dataType : 'json',
            success : function(data){
                
            }
        });
    });
    
    $('#btnLogin').click(function(){
        var nombre = $('#nombreLogin').val();
        var password = $('#passwordLogin').val();
        $.ajax({
            url : 'php/login.php',
            data : { nombre : nombre, password : password},
            type : 'POST',
            dataType : 'json',
            success : function(data){
               
            }
        });
    });
});