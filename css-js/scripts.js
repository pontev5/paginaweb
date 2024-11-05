// Espera a que el DOM esté completamente cargado
document.addEventListener('DOMContentLoaded', function () {
    // Alerta al cargar la página usando SweetAlert con una cara feliz personalizada en la parte superior
    Swal.fire({
        title: 'Bienvenido a TECNOLOGY PARTNER!',
        html: '<div style="font-size: 48px; text-align: center;">😊</div><p style="text-align: center;">¡Estamos encantados de tenerte aquí!</p>',
       // icon: 'success', // Icono de información opcional
        confirmButtonText: 'Aceptar'
    });

    // Ejemplo de manipulación del DOM
    var contactForm = document.querySelector('form');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault(); // Evita el envío del formulario para demostración

            var nombre = document.getElementById('nombre').value;
            var email = document.getElementById('email').value;
            var mensaje = document.getElementById('mensaje').value;

            // Validar los campos del formulario
            if (!nombre || !email || !mensaje) {
                Swal.fire({
                    title: 'Error!',
                    html: '<div style="font-size: 48px; text-align: center;">😔</div><p style="text-align: center;">Por favor, complete todos los campos.</p>',
                    icon: 'error', // Cara triste para el error
                    confirmButtonText: 'Aceptar'
                });
                return;
            }

            // Validar el formato del email
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                Swal.fire({
                    title: 'Error!',
                    html: '<div style="font-size: 48px; text-align: center;">😔</div><p style="text-align: center;">Por favor, introduzca un correo electrónico válido.</p>',
                    icon: 'error', // Cara triste para el error
                    confirmButtonText: 'Aceptar'
                });
                return;
            }

            // Mostrar la información del formulario en la consola
            console.log('Nombre: ' + nombre);
            console.log('Correo: ' + email);
            console.log('Mensaje: ' + mensaje);

            // Mostrar un mensaje de éxito
            Swal.fire({
                title: 'Formulario Enviado!',
                html: '<div style="font-size: 48px; text-align: center;">😊</div><p style="text-align: center;">¡Gracias, ' + nombre + '!</p>',
                icon: 'success', // Cara feliz para el éxito
                confirmButtonText: 'Aceptar'
            });
        });
    }
});
