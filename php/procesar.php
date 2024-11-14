<?php
//Verificamos que la llamada sea post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //Verificamos que todos los campos OBLIGATORIOS estén completos y no vengan vacíos
    if (
        isset(
        $_POST['nombre-completo'],
        $_POST['email'],
        $_POST['fecha-evento'],
        $_POST['tipo-entrada'],
        $_POST['usuario'],
        $_POST['contrasenia'],
        $_POST['contrasenia-confirm'],
        $_POST['terms-condi']
    ) &&
        !empty($_POST['nombre-completo']) &&
        !empty($_POST['email']) &&
        !empty($_POST['fecha-evento']) &&
        !empty($_POST['tipo-entrada']) &&
        !empty($_POST['usuario']) &&
        !empty($_POST['contrasenia']) &&
        !empty($_POST['contrasenia-confirm']) &&
        !empty($_POST['terms-condi'])
    ) {

        //Solo continuamos con el resto del procesamiento si ambas contraseñas son iguales
        if ($_POST['contrasenia'] == $_POST['contrasenia-confirm']) {

            //Asignamos valores genéricos a los campos OPCIONALES que tengan valor undefined en $_POST
            if (!isset($_POST['genero'])) {
                $_POST['genero'] = "indefinido";
            }
            if (!isset($_POST['pref1-vegetariano'])) {
                $_POST['pref1-vegetariano'] = "no marcado";
            }
            if (!isset($_POST['pref2-vegano'])) {
                $_POST['pref2-vegano'] = "no marcado";
            }
            if (!isset($_POST['pref3-sin-gluten'])) {
                $_POST['pref3-sin-gluten'] = "no marcado";
            }
            if (!isset($_POST['pref4-sin-preferencias'])) {
                $_POST['pref4-sin-preferencias'] = "no marcado";
            }
            if (!isset($_POST['noti-email'])) {
                $_POST['noti-email'] = "rechazado";
            }


            //Asignamos los datos del formulario a variables php
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

            //Pintamos por pantalla los datos del formulario
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

            //Si las contraseñas no son iguales mostramos el siguiente mensaje
            echo "Las contraseñas no coinciden";
        }

        //Si alguno de los campos obligatorios no está completo mandamos un mensaje concreto y claro
    } else {
        if (!isset($_POST['nombre-completo']) || empty($_POST['nombre-completo'])) {
            echo "Debe completar el campo Nombre.<br>";
        }
        if (!isset($_POST['email']) || empty($_POST['email'])) {
            echo "Debe completar el campo Correo Electrónico.<br>";
        }
        if (!isset($_POST['fecha-evento']) || empty($_POST['fecha-evento'])) {
            echo "Debe completar la Fecha del Evento.<br>";
        }
        if (!isset($_POST['tipo-entrada']) || empty($_POST['tipo-entrada'])) {
            echo "Debe seleccionar el Tipo de Entrada.<br>";
        }
        if (!isset($_POST['usuario']) || empty($_POST['usuario'])) {
            echo "Debe completar el campo Nombre de Usuario.<br>";
        }
        if (!isset($_POST['contrasenia']) || empty($_POST['contrasenia'])) {
            echo "Debe completar el campo Contraseña.<br>";
        }
        if (!isset($_POST['contrasenia-confirm']) || empty($_POST['contrasenia-confirm'])) {
            echo "Debe confirmar la Contraseña.<br>";
        }
        if (!isset($_POST['terms-condi']) || empty($_POST['terms-condi'])) {
            echo "Debe aceptar los Términos y Condiciones.<br>";
        }
    }

    //Si el formulario no está mandado con el método post, mostramos un mensaje que lo indique
} else {
    echo "El formulario debe estar enviado con el método post";
}

?>