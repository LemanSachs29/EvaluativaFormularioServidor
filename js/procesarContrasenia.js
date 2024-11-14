//Se capura el boton submit
const btnEnviar = document.getElementById('btn-enviar');

//Adición del evento clic y disparo de la función
btnEnviar.addEventListener('click', function (event) {
    //captura de los campos contraseña
    const contrasenia = document.getElementById('contrasenia');
    const contraseniaConfirm = document.getElementById('contrasenia-confirm');

    //Si son distintos, lanza un alert indicando el problema.
    if (contrasenia.value != contraseniaConfirm.value) {
        event.preventDefault();
        alert("Las contraseñas no coinciden!")
    }
});



