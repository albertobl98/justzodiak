$('#btn').click(function () {

    // Esta variable es la que trae el valor del input nombre del formulario

    var nombre = $("#Nombre").val();

    // Esta variable es la que trae el valor del input apellido del formulario

    var apellido = $("#Apellido").val();

    // A través de esta variable pasamos los datos anteriores a la página back.php que es la que muestra los datos en la web con ajax para que se muestren las modificaciones oportunas sin recargar la página

    var ruta = "Nom=" + nombre + "&Ape=" + apellido;

    // Aquí utilizado ajax para mostrar datos de forma automática sin necesidad de recarga
    $.ajax({
            url: 'back.php',
            method: 'POST',
            data: ruta,
        })
        .done(function (res) {
            $('#respuesta').html(res)
        })
});
// Aquí estoy dando acceso al usuario para que elija su signo y vaya a la página resultado.php para que vea su futuro

$(document).ready(function () {
    $("#btn").click(function () {

        $("#futuroForm").show("slow", function () {

        });
         $('#btn').click(function () {
            $(this).text('Cambiar Datos');

        })
    });
        

});


    // Esto cambia el texto del boton del primer formulario para que se pueda cambiar el nombre y el apellido y se vea la funcionalidad de ajax


    
