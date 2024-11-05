<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnology Partner | Soluciones Tecnológicas Innovadoras</title>
    <meta name="description" content="TECNOLOGY PARTNER ofrece soluciones tecnológicas avanzadas en redes, CCTV y soporte TI. Con más de 4 años de experiencia, garantizamos servicios personalizados para optimizar sus operaciones y seguridad.">
    
    <!-- Enlaces a estilos -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css-js/styles.css"> <!-- Tu CSS personalizado -->
    
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    <!-- Favicon -->
    <link rel="icon" href="image/icono/favicon.ico" type="image/x-icon">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
</head>
<body class="bg-dark text-light">
    <!-- Inclusión de archivos PHP -->
    <?php include 'vistas/nav.php'; ?>
    <?php include 'vistas/header.php'; ?>

    <!-- Sección de servicios destacados -->
    <section class="services py-5">
        <div class="container">
            <h1 class="text-center mb-4 display-4" id="typing-text" >Nuestra Empresa</h1>
            <p class="text-center mb-4">En TECNOLOGY PARTNER, somos líderes en soluciones tecnológicas innovadoras. 
                Con más de 4 años de experiencia, nos especializamos en ofrecer servicios de redes, CCTV y soporte TI,
                 entre otros. Nuestro compromiso es proporcionar a nuestros clientes soluciones personalizadas que 
                 optimicen sus operaciones y mejoren su seguridad.</p>
            
            <div class="row text-center">
                <!-- Misión -->
                <div class="col-md-6 mb-4">
                    <div class="card mx-auto bg-dark text-light" style="max-width: 500px;">
                        <img src="image/pat/mision.jpg" class="card-img-top" style="max-width: 100px; margin: 20px auto;" alt="Misión">
                        <div class="card-body">
                            <h2 class="card-title">Misión</h2>
                            <p class="card-text">TECNOLOGY PARTNER provee servicios y soluciones tecnológicas para la satisfacción de nuestros clientes, ofreciendo un trato personal, cercano y flexible para alcanzar la excelencia personal y profesional.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Visión -->
                <div class="col-md-6 mb-4">
                    <div class="card mx-auto bg-dark text-light" style="max-width: 500px;">
                        <img src="image/pat/vision.jpg" class="card-img-top" style="max-width: 100px; margin: 20px auto;" alt="Visión">
                        <div class="card-body">
                            <h2 class="card-title">Visión</h2>
                            <p class="card-text">Buscamos ganar la confianza de nuestros clientes mediante un trato honesto y confiable, manteniéndonos a la vanguardia de la tecnología para ofrecer siempre soluciones innovadoras.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <h1  class="text-center mb-4 display-4" id="typing-text">¿Por Qué Elegirnos?</h1>
            <ul class="text-center mb-4">
                <li><strong>Experiencia:</strong> Un equipo de profesionales altamente capacitados con amplia experiencia en el sector.</li>
                <li><strong>Innovación:</strong> Implementamos las tecnologías más avanzadas para ofrecer soluciones eficientes y efectivas.</li>
                <li><strong>Compromiso:</strong> Nos dedicamos a entender y satisfacer las necesidades específicas de cada cliente.</li>
            </ul>
            <br>
            <p class="text-center mb-4">En TECNOLOGY PARTNER, nos enorgullece ser su socio de confianza en tecnología. Contáctenos hoy para descubrir cómo podemos ayudar a su empresa a alcanzar nuevos niveles de éxito.</p>
        </div>
    </section>

    <!-- Botón de WhatsApp -->
    <a href="https://wa.me/+51952301718?text=Necesito%20más%20información" class="btn btn-success btn-lg btn-whatsapp" aria-label="Contáctanos por WhatsApp">
        <i class="bi bi-whatsapp" style="font-size: 60px; color: white;"></i>
        <span class="d-none d-sm-inline text-white ml-2"></span>
    </a>
    
    <!-- Inclusión del footer -->
    <?php include 'vistas/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="css-js/scripts.js"></script> <!-- Tu JS personalizado -->

    <!-- Animaciones -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const eye = document.querySelector('.eye');
            if (eye) {
                setInterval(() => {
                    eye.style.animation = 'blink 0.5s'; 
                    setTimeout(() => {
                        eye.style.animation = 'none'; 
                        eye.offsetHeight; 
                        eye.style.animation = 'blink 5s infinite'; 
                    }, 500); 
                }, 5000); 
            }

            const typingElement = document.querySelector('#typing-text');
            if (typingElement) {
                const lines = typingElement.querySelectorAll('.line');
                let delay = 0;
                
                lines.forEach((line, index) => {
                    line.style.animation = `typing ${4 + index * 5}s steps(40, end) forwards`;
                    line.style.animationDelay = `${delay}s`;
                    delay += 5; 
                });

                setTimeout(() => {
                    typingElement.classList.add('finished');
                }, (delay + 5) * 1000); 
            }
        });
    </script>
</body>
</html>

