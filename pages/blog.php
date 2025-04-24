<!DOCTYPE html>
<html lang="es">
<head>
  <?php include("../includes/head.html"); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="../css/blog.css">
</head>
<body>
<?php include("../includes/nav.html"); ?>
  <!-- Artículos -->
  <section class="features py-5">
    <div class="container">
      <h2 class="text-center mb-5">Últimos Artículos</h2>
      <div class="row g-4">

        <!-- Artículo Destacado -->
        <div class="col-12">
          <div class="feature-card p-4">
            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="img-fluid rounded" alt="Destacado">
            <h4 class="mt-3">Las 5 tendencias en electrónica que dominarán 2024</h4>
            <p><i class="far fa-calendar-alt"></i> 15 Mayo 2024 | <i class="far fa-user"></i> Carlos Tech</p>
            <p>Desde wearables con IA hasta procesadores de nueva generación...</p>
            <a href="#" class="btn btn-neon mt-2">Leer más</a>
          </div>
        </div>

        <!-- Más artículos -->
        <div class="col-md-4">
          <div class="feature-card p-4">
            <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45" class="img-fluid rounded" alt="Componentes">
            <h4 class="mt-3">Elegir componentes para tu PC</h4>
            <p><i class="far fa-calendar-alt"></i> 10 Mayo 2024 | Ana Circuitos</p>
            <a href="#" class="btn btn-neon btn-sm mt-2">Leer más</a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="feature-card p-4">
            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b" class="img-fluid rounded" alt="Domótica">
            <h4 class="mt-3">Smart Home con bajo presupuesto</h4>
            <p><i class="far fa-calendar-alt"></i> 5 Mayo 2024 | Luis Automatiza</p>
            <a href="#" class="btn btn-neon btn-sm mt-2">Leer más</a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="feature-card p-4">
            <img src="https://images.unsplash.com/photo-1540932239986-30128078f3c5" class="img-fluid rounded" alt="RV">
            <h4 class="mt-3">¿Vale la pena el hype de la RV?</h4>
            <p><i class="far fa-calendar-alt"></i> 28 Abril 2024 | Marta VR</p>
            <a href="#" class="btn btn-neon btn-sm mt-2">Leer más</a>
          </div>
        </div>

        <!-- Puedes seguir agregando más tarjetas aquí -->

      </div>
    </div>
  </section>

  <!-- Newsletter -->
  <section class="text-center py-5 bg-dark text-white">
    <div class="container">
      <h2>Suscríbete a nuestro Newsletter</h2>
      <p>Recibe noticias, tutoriales y ofertas exclusivas en tu correo.</p>
      <form class="row justify-content-center">
        <div class="col-md-6 d-flex">
          <input type="email" class="form-control" placeholder="Tu correo electrónico" required>
          <button class="btn btn-neon ms-2" type="submit"><i class="fas fa-paper-plane"></i> Suscribirse</button>
        </div>
      </form>
    </div>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>