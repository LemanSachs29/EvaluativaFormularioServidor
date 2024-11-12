<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['nombre-completo'], 
              $_POST['email'], 
              $_POST['fecha-evento'], 
              $_POST['tipo-entrada'], 
              $_POST['usuario'], 
              $_POST['contrasenia'], 
              $_POST['contrasenia-confirm'], 
              $_POST['terms-condi']) && 
              !empty($_POST['nombre-completo']) && 
              !empty($_POST['email']) && 
              !empty($_POST['fecha-evento']) && 
              !empty($_POST['tipo-entrada']) && 
              !empty($_POST['usuario']) && 
              !empty($_POST['contrasenia']) && 
              !empty($_POST['contrasenia-confirm']) && 
              !empty($_POST['terms-condi'])){

        if(!isset($_POST['pref1-vegetariano'])){
            $_POST['pref1-vegetariano'] = "no marcado";
        }
        if(!isset($_POST['pref2-vegano'])){
            $_POST['pref2-vegano'] = "no marcado";
        }
        if(!isset($_POST['pref3-sin-gluten'])){
            $_POST['pref3-sin-gluten'] = "no marcado";
        }
        if(!isset($_POST['pref4-sin-preferencias'])){
            $_POST['pref4-sin-preferencias'] = "no marcado";
        }
        if(!isset($_POST['noti-email'])){
            $_POST['noti-email'] = "rechazado";
        }

        $nombreCompleto = htmlspecialchars($_POST['nombre-completo']);
        $genero = htmlspecialchars($_POST['genero']);
        $tel = htmlspecialchars($_POST['tel']);
        $email = htmlspecialchars($_POST['email']);
        $fechaNac = htmlspecialchars($_POST['fecha-nac']);
        $fechaEvento = htmlspecialchars($_POST['fecha-evento']);
        $tipoEntrada = htmlspecialchars($_POST['tipo-entrada']);
        $pref1Vegetariano = htmlspecialchars($_POST['pref1-vegetariano']);
        $pref2Vegano = htmlspecialchars($_POST['pref2-vegano']);
        $pref3SinGluten = htmlspecialchars($_POST['pref3-sin-gluten']);
        $pref4SinPreferencias = htmlspecialchars($_POST['pref4-sin-preferencias']);
        $usuario = htmlspecialchars($_POST['usuario']);
        $contrasenia = htmlspecialchars($_POST['contrasenia']);
        $contraseniaConfirm = htmlspecialchars($_POST['contrasenia-confirm']);
        $notiEmail = htmlspecialchars($_POST['noti-email']);
        $termsCondi = htmlspecialchars($_POST['terms-condi']);
        $calificacion = htmlspecialchars($_POST['calificacion']);
        $opinionPersonal = htmlspecialchars($_POST['opinion-personal']);

        echo "Nombre Completo: $nombreCompleto<br>";
        echo "Género: $genero<br>";
        echo "Teléfono: $tel<br>";
        echo "Fecha de Nacimiento: $fechaNac<br>";
        echo "Fecha del Evento: $fechaEvento<br>";
        echo "Tipo de Entrada: $tipoEntrada<br>";
        echo "Preferencias Vegetarianas: $pref1Vegetariano<br>";
        echo "Preferencias Veganas: $pref2Vegano<br>";
        echo "Sin Gluten: $pref3SinGluten<br>";
        echo "Sin Preferencias: $pref4SinPreferencias<br>";
        echo "Usuario: $usuario<br>";
        echo "Contraseña: $contrasenia<br>";
        echo "Confirmación de Contraseña: $contraseniaConfirm<br>";
        echo "Notificaciones por Email: $notiEmail<br>";
        echo "Aceptación de Términos y Condiciones: $termsCondi<br>";
        echo "Calificación: $calificacion<br>";
        echo "Opinión Personal: $opinionPersonal<br>";
    } else {
        echo "Por favor, complete todos los campos obligatorios.";
        var_dump($_POST);
    }
}else{
    echo "Formulario enviado con otro método."
}

?>
