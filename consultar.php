<?php
    
    if (isset($_POST["consultar"])) {
        if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["email"]) && !empty($_POST["telefono"]) && !empty($_POST["area"]) && !empty($_POST["comentario"])){
            
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $email  = $_POST["email"];
            $telefono  = $_POST["telefono"];
            $areadelaempresa = $_POST["area"];
            $comentario = $_POST["comentario"];
            
            $destino="vlr2355@hotmail.com";
            $asunto="prueba de email";
            $carta="De: $nombre \n";
            $carta.="Correo: $email \n";
            $carta.="Telefono: $telefono \n";
            $carta.="Mensaje: $comentario";

            mail($destino,$asunto,$carta);
            header("Location:enviado.php");

    
        }
        
    }
    
            
?>