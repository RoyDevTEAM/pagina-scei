<!-- Enlazar los estilos de Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- Enlazar los estilos personalizados -->
<link rel="stylesheet" href="css/styles.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<!-- Enlazar Font Awesome para los iconos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

<!-- Incluye el encabezado (header.php) -->
<?php include('includes/header.php'); ?>

<!-- Contenido de la página de Actividades -->
<section class="actividades">
    <div class="container">
        <h2 class="titulo">Acticidades</h2>

        <!-- Lista de actividades pasadas -->
        <div class="lista-actividades">
            <!-- Actividad Pasada 1 -->
            <div class="actividad">
                <div class="card">
                    <img src="https://tesisymasters.com.ar/wp-content/uploads/imagenes-de-blog-84.jpg" class="card-img-top" alt="Actividad Pasada 1">
                    <div class="card-body">
                        <h3 class="card-title">Actividad Pasada 1</h3>
                        <p class="card-text">Descripción de la actividad pasada 1.</p>
                        <p class="card-text">Fecha: [Fecha]</p>
                    </div>
                </div>
            </div>

            <!-- Actividad Pasada 2 -->
            <div class="actividad">
                <div class="card">
                    <img src="https://tesisymasters.com.ar/wp-content/uploads/imagenes-de-blog-84.jpg" class="card-img-top" alt="Actividad Pasada 2">
                    <div class="card-body">
                        <h3 class="card-title">Actividad Pasada 2</h3>
                        <p class="card-text">Descripción de la actividad pasada 2.</p>
                        <p class="card-text">Fecha: [Fecha]</p>
                    </div>
                </div>
            </div>

            <!-- Actividad Pasada 3 -->
            <div class="actividad">
                <div class="card">
                    <img src="https://tesisymasters.com.ar/wp-content/uploads/imagenes-de-blog-84.jpg" class="card-img-top" alt="Actividad Pasada 3">
                    <div class="card-body">
                        <h3 class="card-title">Actividad Pasada 3</h3>
                        <p class="card-text">Descripción de la actividad pasada 3.</p>
                        <p class="card-text">Fecha: [Fecha]</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lista de actividades futuras -->
        <div class="lista-actividades">
            <!-- Actividad Futura 1 -->
            <div class="actividad">
                <div class="card">
                    <img src="https://tesisymasters.com.ar/wp-content/uploads/imagenes-de-blog-84.jpg" class="card-img-top" alt="Actividad Futura 1">
                    <div class="card-body">
                        <h3 class="card-title">Actividad Futura 1</h3>
                        <p class="card-text">Descripción de la actividad futura 1.</p>
                        <p class="card-text">Fecha: [Fecha]</p>
                    </div>
                </div>
            </div>

            <!-- Actividad Futura 2 -->
            <div class="actividad">
                <div class="card">
                    <img src="https://tesisymasters.com.ar/wp-content/uploads/imagenes-de-blog-84.jpg" class="card-img-top" alt="Actividad Futura 2">
                    <div class="card-body">
                        <h3 class="card-title">Actividad Futura 2</h3>
                        <p class="card-text">Descripción de la actividad futura 2.</p>
                        <p class="card-text">Fecha: [Fecha]</p>
                    </div>
                </div>
            </div>

            <!-- Actividad Futura 3 -->
            <div class="actividad">
                <div class="card">
                    <img src="https://tesisymasters.com.ar/wp-content/uploads/imagenes-de-blog-84.jpg" class="card-img-top" alt="Actividad Futura 3">
                    <div class="card-body">
                        <h3 class="card-title">Actividad Futura 3</h3>
                        <p class="card-text">Descripción de la actividad futura 3.</p>
                        <p class="card-text">Fecha: [Fecha]</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detalles de la próxima actividad -->
        <div class="detalles-actividad">
            <h2>Detalles de la Próxima Actividad</h2>
            <h3>Nombre de la Próxima Actividad</h3>
            <p>Fecha: [Fecha]</p>
            <p>Lugar: [Lugar]</p>
            <p>Descripción: [Descripción]</p>
        </div>

        <!-- Galería de fotos de actividades anteriores (carrusel) -->
<div class="galeria-actividades">
    <h2>Galería de Fotos</h2>
    <div id="carrusel-fotos" class="carousel slide" data-ride="carousel">
        <!-- Indicadores del carrusel -->
        <ol class="carousel-indicators">
            <li data-target="#carrusel-fotos" data-slide-to="0" class="active"></li>
            <li data-target="#carrusel-fotos" data-slide-to="1"></li>
            <li data-target="#carrusel-fotos" data-slide-to="2"></li>
            <!-- Agrega más indicadores según la cantidad de fotos -->
        </ol>

       <!-- Contenedor del carrusel -->
<div class="portfolio-carousel owl-carousel">
    <!-- Imagen 1 -->
    <div class="portfolio-item">
        <div class="portfolio-img">
            <img src="img/Imagen de WhatsApp 2023-08-18 a las 21.43.46_1d81c358.jpg" alt="Imagen 1">
        </div>
    </div>
    <!-- Imagen 2 -->
    <div class="portfolio-item">
        <div class="portfolio-img">
            <img src="img/feria.jpeg" alt="Imagen 2">
        </div>
    </div>
    <!-- Imagen 3 -->
    <div class="portfolio-item">
        <div class="portfolio-img">
            <img src="img/Imagen de WhatsApp 2023-10-12 a las 17.33.33_b147bacf.jpg" alt="Imagen 3">
        </div>
    </div>
    <!-- Agrega más imágenes aquí -->
</div>

</section>
<!-- JavaScript para la galería de imágenes -->
<script>
    $(document).ready(function () {
        $(".portfolio-carousel").owlCarousel({
            items: 3, // Mostrar 3 imágenes a la vez
            loop: true, // Bucle infinito
            autoplay: true, // Reproducción automática
            autoplayTimeout: 5000, // Intervalo de cambio automático (5 segundos)
            nav: true, // Flechas de navegación
            navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"], // Iconos de flechas
            responsive: {
                0: {
                    items: 1 // En pantallas pequeñas, mostrar 1 imagen a la vez
                },
                768: {
                    items: 2 // En pantallas medianas, mostrar 2 imágenes a la vez
                },
                992: {
                    items: 3 // En pantallas grandes, mostrar 3 imágenes a la vez
                }
            }
        });
    });
</script>
<!-- Incluye el pie de página (footer.php) -->
<?php include('includes/footer.php'); ?>






