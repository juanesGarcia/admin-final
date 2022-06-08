




function pru(){

nombre = document.getElementById('nombre').value
 email = document.getElementById('email').value
 pass = document.getElementById('password').value
 pass1= document.getElementById('password1').value
 img= document.getElementById('imagenes').value

 console.log(nombre)

if(nombre=="" || email=="" || pass=="" || pass1=="" || pass!==pass1 ){
    Swal.fire({
        title: 'Error!',
        text: 'Tiene un error en el registro',
        icon: 'error',
        confirmButtonText: 'Cool'
      })
   
}else{
    Swal.fire({
        title: 'Exitoso',
        text: 'Su registro fue satisfactorio',
        icon: 'success',
        confirmButtonText: 'Cool'
      })
}

}

function ini(){
 email = document.getElementById('email').value
 pass = document.getElementById('password').value
 console.log(email)

 if(email==" " || pass==""){
    Swal.fire({
        title: 'Error!',
        text: 'Do you want to continue',
        icon: 'error',
        confirmButtonText: 'Cool'
      })
 }

}
