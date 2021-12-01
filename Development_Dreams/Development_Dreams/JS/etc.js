$(document).ready(function () {
    $("#boton").submit(function (e) { 
        var nombre=$("#nombre").val();
        var mail=$("#mail").val();
        var telefono=$("#telefono").val();
        var mensaje=$("#texto").val();

        e.preventDefault();
        if(nombre!=""&&mail!=""&&telefono!=""&&mensaje!=""){
            Swal.fire(
                'Enviado!',
                'sus datos fueron enviados!',
                'success'
              )  
        }
    });
});

function alerta(){
    Swal.fire(
        'Enviado!',
        'sus datos fueron enviados!',
        'success'
      )  
}