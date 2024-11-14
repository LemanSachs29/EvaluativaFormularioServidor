const btnEnviar = document.getElementById('btn-enviar');

btnEnviar.addEventListener('click', function (event) {
    const contrasenia = document.getElementById('contrasenia');
    const contraseniaConfirm = document.getElementById('contrasenia-confirm');

    if (contrasenia.value != contraseniaConfirm.value) {
        event.preventDefault();
        alert("Las contraseñas no coinciden!")
    }
});



