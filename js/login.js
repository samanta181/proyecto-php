function login(){
    var user= document.getElementById('user').value;
    var password= document.getElementById('password').value;
 
    var parametros ={
        user: user,
        pass: password
    }

    var urllogin = 'sesion/login.php';
    $.ajax({
        url: urllogin,
        type: "POST",
        data: parametros,
        beforeSend: function () {
          $('#spinner').css('display', 'block'); // Mostrar el spinner
        },
        success: function (data) {
          $('#spinner').css('display', 'none'); // Mostrar el spinner
          
         if(data==='correcto'){
           window.location='./home';
         }
        }
      });

}