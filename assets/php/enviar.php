<?php

      //llamando a las variables
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
   
    //datos para el correo
    $destinatario = "gtytptsp@gmail.com";
    $asunto = "Portafolio";

    $carta = "De: $nombre $apellido \n";
    $carta .= "Correo: $correo \n";
    $carta .= "Mensaje: $mensaje";

    //enviando mensaje
   
    mail($destinatario, $asunto, $carta);
    header('location:indexphp.html');
    


?>