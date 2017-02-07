/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    
$('#btnLogin').click(function () {
        nombre = $('#nombreLogin').val();
        password = $('#passwordLogin').val();
        $.ajax({
            url: '../php/login.php?nombre=' + nombre + '&password=' + password,
            type: 'GET',
            //dataType: 'json',
            success: function (data) {
                location.href = "../php/hola.php";
            }
        });
        alert("ASD");
    });
    
});