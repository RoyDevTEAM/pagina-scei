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

<!-- Incluye el encabezado (header.php) -->
<?php include('includes/header.php'); ?>

<!-- Contenido de la página de Contacto -->
<section class="contacto">
    <div class="container">
        <h2 class="titulo">Contáctanos</h2>

        <!-- Información de contacto -->
        <div class="informacion-contacto">
            <div class="contacto-item">
                <i class="fas fa-envelope"></i>
                <p>Email: contacto@tuempresa.com</p>
            </div>
            <div class="contacto-item">
                <i class="fas fa-phone"></i>
                <p>Teléfono: +123 456 789</p>
            </div>
            <div class="contacto-item">
                <i class="fas fa-map-marker-alt"></i>
                <p>Dirección: Calle Principal, Ciudad</p>
            </div>
        </div>

        <!-- Formulario de contacto -->
        <div class="formulario-contacto">
            <h3>Envíanos un mensaje</h3>
            <form action="tu_script_de_procesamiento.php" method="POST">
                <div class="input-container">
                    <i class="fas fa-user"></i>
                    <input type="text" name="nombre" placeholder="Nombre" required>
                </div>
                <div class="input-container">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-container">
                    <i class="fas fa-edit"></i>
                    <textarea name="mensaje" placeholder="Mensaje" required></textarea>
                </div>
                <button type="submit">Enviar Mensaje</button>
            </form>
        </div>
    </div>
</section>

<!-- Incluye el pie de página (footer.php) -->
<?php include('includes/footer.php'); ?>
