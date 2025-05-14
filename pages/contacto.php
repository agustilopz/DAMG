<!DOCTYPE html>
<html lang="es">
<head>
  <?php include("../includes/head.html"); ?>
  <link rel="stylesheet" href="../css/contacto.css">
</head>
<body>
  <?php include("../includes/nav.php"); ?>

  <!-- Hero Contacto -->
  <section class="contact-hero d-flex align-items-center text-center text-white">
    <div class="container">
      <h1 class="display-4 fw-bold">Contáctanos</h1>
      <p class="lead">Estamos aquí para ayudarte con tus proyectos tecnológicos.</p>
    </div>
  </section>

  <!-- Formulario y datos -->
  <section class="contact-form py-5">
    <div class="container">
      <div class="row g-4">
        <!-- Formulario -->
        <div class="col-lg-7">
          <form action="contacto.proc.php" method="post" class="p-4 form-card">
            <div class="mb-3">
              <label for="name" class="form-label">Nombre</label>
              <input type="text" id="name" name="name" class="form-control" placeholder="Tu nombre" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="Tu correo" required>
            </div>
            <div class="mb-3">
              <label for="subject" class="form-label">Asunto</label>
              <input type="text" id="subject" name="subject" class="form-control" placeholder="Asunto" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Mensaje</label>
              <textarea id="message" name="message" rows="6" class="form-control" placeholder="Escribe tu mensaje..." required></textarea>
            </div>
            <button type="submit" class="btn btn-neon">Enviar Mensaje</button>
          </form>
        </div>

        <!-- Información de contacto -->
        <div class="col-lg-5">
          <div class="info-card p-4">
            <h4 class="text-success mb-3"><i class="fas fa-map-marker-alt me-2"></i>Nuestra Oficina</h4>
            <p>Av. Tecnológica 123, Ciudad Tech, 4000</p>

            <h4 class="text-success mt-4 mb-3"><i class="fas fa-phone me-2"></i>Teléfono</h4>
            <p>+34 912 345 678</p>

            <h4 class="text-success mt-4 mb-3"><i class="fas fa-envelope me-2"></i>Email</h4>
            <p>contacto@damg.com</p>

            <div class="social-icons mt-4">
              <a href="#" class="text-success me-3"><i class="fab fa-facebook fa-2x"></i></a>
              <a href="#" class="text-success me-3"><i class="fab fa-twitter fa-2x"></i></a>
              <a href="#" class="text-success"><i class="fab fa-linkedin fa-2x"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include("../includes/footer.html"); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
