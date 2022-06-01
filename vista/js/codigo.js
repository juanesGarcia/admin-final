
var nombre = document.getElementById('nombre')
var email = document.getElementById('email')
var pass = document.getElementById('password')

if(nombre.value == null || nombre.value == ''){
$("#btnSubmit").click(function(){
    Swal.fire({
        type:'error',
        title:'Error al momento de registrarse',
        text:'Verifique si todos los campos están completos'
    });
});
}
if(email.value == null || email.value == ''){
    $("#btnSubmit").click(function(){
        Swal.fire({
            type:'error',
            title:'Error al momento de registrarse',
            text:'Verifique si todos los campos están completos'
    });
});
}
if(pass.value == null || pass.value == ''){
    $("#btnSubmit").click(function(){
        Swal.fire({
            type:'error',
            title:'Error al momento de registrarse',
            text:'Verifique si todos los campos están completos'
        });
    });
    }