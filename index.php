<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="https://www.upds.edu.bo/wp-content/uploads/2020/11/portada-web-1-1024x379.jpg"/>
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23green' class='bi bi-laptop' viewBox='0 0 16 16'%3E%3Cpath d='M13.488.488a.5.5 0 0 1 .024.648L12.04 2.94l.837.836a1.5 1.5 0 0 1 2.12 2.122l-.838.836 1.166 1.166a.5.5 0 0 1 .024.648l-.542.542a1.5 1.5 0 0 1-2.12 0L9.976 7.267l-.836.838a1.5 1.5 0 0 1-2.122 0L5.058 7.275 3.892 8.441a.5.5 0 0 1-.024.648l.542.542a1.5 1.5 0 0 1 0 2.12l-1.166 1.166-.837.837a1.5 1.5 0 0 1-2.12-2.12l.838-.838-1.167-1.166a.5.5 0 0 1-.024-.648l.542-.542a1.5 1.5 0 0 1 2.12 0L6.024 8.732l.836-.838a1.5 1.5 0 0 1 2.122 0L10.94 8.73l1.166-1.166a.5.5 0 0 1 .024-.648l-.542-.542a1.5 1.5 0 0 1 0-2.12l1.167-1.166.836-.837a1.5 1.5 0 0 1 2.12 2.12l-.838.838z'/%3E%3C/svg%3E" type="image/svg+xml">

    <title>Página de Inicio - SCEI</title>
    <!-- Enlazar los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Enlazar los estilos personalizados -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Enlazar Font Awesome para los iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <?php
    // Incluir el encabezado
    include("includes/header.php");
    ?>

    <!-- Sección de Portada -->
    <section class="portada">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-white text-center home-content">
                    <h1 class="titulo-portada"><span class="welcome-text">Bienvenido a la SCEI</span></h1>
                    <p class="descripcion-portada">¡Explora la ciencia y la ingeniería con nosotros!</p>
                    <div class="redes-sociales">
                        <a href="#" class="icono-red-social"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="icono-red-social"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="icono-red-social"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="icono-red-social"><i class="fab fa-instagram"></i></a>
                    </div>
                    <a href="#" class="btn btn-conectanos cta-button">Contáctanos</a>
                </div>
                <div class="col-md-6">
                    <img src="https://ucad.edu.mx/Becas_Universitarias/Promocion_Facebook/Ingenieria_En_Sistemas/images/imagen-hero.png" alt="Imagen de la Sociedad" class="img-empresa">
                </div>
            </div>
        </div>
    </section>

   <!-- Sección de Últimas Noticias -->
<section class="ultimas-noticias">
    <div class="container">
        <h2 class="text-center">Últimas Noticias</h2>
        <div class="row mt-4">
            <!-- Tarjeta 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card card-3d">
                    <img src="https://tesisymasters.com.ar/wp-content/uploads/imagenes-de-blog-84.jpg" alt="Noticia 1" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Noticia 1</h5>
                        <p class="card-text">Descripción de la noticia 1.</p>
                        <a href="noticias/noticia1.php" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card card-3d">
                    <img src="https://tesisymasters.com.ar/wp-content/uploads/imagenes-de-blog-84.jpg" alt="Noticia 2" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Noticia 2</h5>
                        <p class="card-text">Descripción de la noticia 2.</p>
                        <a href="noticias/noticia2.php" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card card-3d">
                    <img src="https://tesisymasters.com.ar/wp-content/uploads/imagenes-de-blog-84.jpg" alt="Noticia 3" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Noticia 3</h5>
                        <p class="card-text">Descripción de la noticia 3.</p>
                        <a href="noticias/noticia3.php" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Últimas Actividades -->
<section class="ultimas-actividades">
    <div class="container">
        <h2 class="text-center">Últimas Actividades</h2>
        <div class="row mt-4">
            <!-- Actividad 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="actividad">
                    <img src="https://css2.rtve.es/css/rtve.2022.deportes/mundial-futbol-catar-TE_SM7ALFL/estrellas/i/jugadores/messi.png" alt="Actividad 1" class="img-actividad">
                    <h5 class="actividad-titulo">Actividad 1</h5>
                    <p class="actividad-descripcion">Descripción de la actividad 1.</p>
                    <a href="#" class="btn btn-primary">Detalles</a>
                </div>
            </div>
            <!-- Actividad 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="actividad">
                    <img src="https://ucad.edu.mx/Becas_Universitarias/Promocion_Facebook/Ingenieria_En_Sistemas/images/imagen-hero.png" alt="Actividad 2" class="img-actividad">
                    <h5 class="actividad-titulo">Actividad 2</h5>
                    <p class="actividad-descripcion">Descripción de la actividad 2.</p>
                    <a href="#" class="btn btn-primary">Detalles</a>
                </div>
            </div>
            <!-- Actividad 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="actividad">
                    <img src="img/feria.jpeg" alt="Actividad 3" class="img-actividad">
                    <h5 class="actividad-titulo">Actividad 3</h5>
                    <p class="actividad-descripcion">Descripción de la actividad 3.</p>
                    <a href="#" class="btn btn-primary">Detalles</a>
                </div>
            </div>
        </div>
    </div>
</section>


    <?php
    // Incluir el pie de página
    include("includes/footer.php");
    ?>

    <!-- Enlazar los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
