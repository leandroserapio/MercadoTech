<?php

//formas de testear lo que hay en una variable

//print_r ($_POST);

//var_dump ($_POST); //muestra la estructura, datos y sus tipos (string, int, float, bool) de variable tipo array 

/* validar si la peticion http es get o post */


if ( $_SERVER ["REQUEST_METHOD"]  == "POST" ){//--> si la peticion http es post
        //aca programo que hacer con los datos del formulario de contacto

        if( empty($_POST["nombre"]) || is_numeric($_POST["nombre"]) ){
            echo "error, carga tu nombre valido papa";
        }
        elseif(empty($_POST["email"])  ||  !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) ){
            echo "dale mostro, carga un email valido";
        }
        elseif(empty($_POST["mensaje"]) || strlen($_POST["mensaje"]) < 10  ||  strlen($_POST["mensaje"]) > 280 ){
            echo "ingrese un msj de 10 hasta 280 caracteres";
        }
        else{
            $nombre =  filter_var($_POST["nombre"],  FILTER_SANITIZE_SPECIAL_CHARS);
            $email =   filter_var($_POST["email"],   FILTER_SANITIZE_EMAIL );
            $mensaje = filter_var($_POST["mensaje"], FILTER_SANITIZE_SPECIAL_CHARS);

            $destinatario = "leandroserapio95@gmail.com";
            $asunto = "Consulta MercadoTech";
            $cuerpo = "<h1>DATOS DE LA CONSULTA</h1>";
            $cuerpo .= "<p>Nombre: {$nombre} </p>";
            $cuerpo .= "<p>Email: {$email} </p>";
            $cuerpo .= "<p>Mensaje: {$mensaje} </p>";

            require 'mail.config.php';

            $mail->setFrom($email, $nombre);                        // ◄ EMISOR 
            $mail->addAddress($destinatario, 'Leandro');            // ◄ DESTINATARIO
            //$mail->addReplyTo(, 'Information');

            $mail->isHTML(true);									// ◄ Soporte para HTML (true/false)
            $mail->Subject = $asunto;								// ◄ Asunto del E-Mail
            $mail->Body = $cuerpo;
            $mail->CharSet = 'UTF-8';							    // ◄ Cuerpo del E-Mail
            $mail->SMTPDebug = 0;									// ◄ Visualizador para testeo (0: apagado | 1: mensajes del cliente | 2: mensajes del cliente y servidor)

            if( $mail->send() ){
                echo "Gracias por su consulta!";
            } else {
                echo "Ocurrio un error, intente de nuevo...";
            }
        }

} else { //--> si la peticion hhtp no es post
        //▼ aca programo que el usuario sea redireccionado hacia el formulario de contacto

        header("location: index.php?p=contacto");

}

?>

