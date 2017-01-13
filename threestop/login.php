
<?php
  $usuari=$_POST['usr'];
  $contrasenya=$_POST['pass'];

  $admusr = "admin"; //user de prueba
  $admpasswd = "123456"; //su pass

  $resultadousr = strcmp($usuari, $admusr);
  $resultadopass = strcmp($contrasenya, $admpasswd);

  if (isset($_POST['entrar'])){

    if ($resultadousr) {


      header('Location: https://www.google.es');
      //redireccion, cambiar el link por página de error de autenticación

    } else{

      if ($resultadopass){

          header('Location: https://www.google.es');

        //redirección a pagina de error de autenticación
      } else{

      header('Location: https:/'); //redirección a menú

      }
    }
  }


?>
