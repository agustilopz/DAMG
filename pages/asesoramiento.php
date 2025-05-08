<!DOCTYPE html>
<html lang="es">
<head>
  <?php include("../includes/head.html"); ?>
  <link rel="stylesheet" href="../css/asesoramiento.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
</head>
<body>
  <?php include("../includes/nav.php"); ?>

  <header class="header">
    <div class="container">
      <h1>Asesoramiento Especializado en Electrónica</h1>
      <p>Te ayudamos a encontrar la mejor solución para tus necesidades tecnológicas</p>
    </div>
  </header>

  <main class="container main-content">
    <section class="services-section">
      <h2>Nuestros Servicios de Asesoramiento</h2>
      <div class="services-grid">
        <!-- Tarjetas de servicio -->
        <div class="service-card">
          <i class="fas fa-laptop-code service-icon"></i>
          <h3>Configuración de Equipos</h3>
          <p>Te ayudamos a elegir y montar el equipo ideal para tu día a día.</p>
        </div>
        <div class="service-card">
          <i class="fas fa-network-wired service-icon"></i>
          <h3>Soluciones de Red</h3>
          <p>Configuramos redes domésticas o de oficina para un rendimiento óptimo.</p>
        </div>
        <div class="service-card">
          <i class="fas fa-gamepad service-icon"></i>
          <h3>Gaming</h3>
          <p>Recomendaciones para tu setup gamer ideal, con el mejor rendimiento.</p>
        </div>
        <div class="service-card">
          <i class="fas fa-home service-icon"></i>
          <h3>Domótica</h3>
          <p>Automatiza tu hogar con soluciones inteligentes personalizadas.</p>
        </div>
        <div class="service-card">
          <i class="fas fa-headphones service-icon"></i>
          <h3>Audio Profesional</h3>
          <p>Desde estudios caseros hasta eventos, te guiamos en tu elección de audio.</p>
        </div>
        <div class="service-card">
          <i class="fas fa-mobile-alt service-icon"></i>
          <h3>Movilidad</h3>
          <p>Te ayudamos a elegir el mejor dispositivo móvil y sus accesorios.</p>
        </div>
      </div>
    </section>

    <section class="consultation-section">
      <div class="consultation-info">
        <h2>¿Necesitas asesoramiento personalizado?</h2>
        <p>Estamos listos para ayudarte a encontrar la mejor solución tecnológica.</p>
        <ul class="benefits-list">
          <li><i class="fas fa-check-circle"></i> Análisis personalizado</li>
          <li><i class="fas fa-check-circle"></i> Recomendaciones objetivas</li>
          <li><i class="fas fa-check-circle"></i> Comparativa de productos</li>
          <li><i class="fas fa-check-circle"></i> Presupuestos a medida</li>
          <li><i class="fas fa-check-circle"></i> Seguimiento post-venta</li>
        </ul>
        <div class="testimonial">
          <blockquote>
            "Gracias al asesoramiento recibido pude montar mi estudio de podcast sin errores ni gastos innecesarios."
            <cite>- Carlos M., cliente satisfecho</cite>
          </blockquote>
        </div>
      </div>

      <div class="consultation-form">
        <h3>Solicita tu asesoramiento personalizado</h3>
        <form id="consultationForm">
          <div class="form-group">
            <label for="name">Nombre completo*</label>
            <input type="text" id="name" name="name" required />
          </div>
          <div class="form-group">
            <label for="email">Correo electrónico*</label>
            <input type="email" id="email" name="email" required />
          </div>
          <div class="form-group">
            <label for="phone">Teléfono</label>
            <input type="tel" id="phone" name="phone" />
          </div>
          <div class="form-group">
            <label for="service-type">Tipo de asesoramiento*</label>
            <select id="service-type" name="service-type" required>
              <option value="">Selecciona una opción</option>
              <option value="configuracion">Configuración de equipos</option>
              <option value="redes">Soluciones de red</option>
              <option value="gaming">Gaming</option>
              <option value="domotica">Domótica</option>
              <option value="audio">Audio profesional</option>
              <option value="movilidad">Movilidad</option>
              <option value="otro">Otro</option>
            </select>
          </div>
          <div class="form-group">
            <label for="budget">Presupuesto</label>
            <select id="budget" name="budget">
              <option value="">Sin especificar</option>
              <option value="0-500">Menos de 500€</option>
              <option value="500-1000">500€ - 1000€</option>
              <option value="1000-2000">1000€ - 2000€</option>
              <option value="2000+">Más de 2000€</option>
            </select>
          </div>
          <div class="form-group">
            <label for="details">Detalla tus necesidades*</label>
            <textarea id="details" name="details" rows="4" required></textarea>
          </div>
          <div class="form-group checkbox-group">
            <input type="checkbox" id="newsletter" name="newsletter" />
            <label for="newsletter">Quiero recibir novedades y ofertas</label>
          </div>
          <button type="submit" class="submit-btn">Solicitar asesoramiento</button>
        </form>
      </div>
    </section>

    <section class="faq-section">
      <h2>Preguntas Frecuentes</h2>
      <div class="faq-item">
        <button class="faq-question">¿Cuánto tarda en responderse?<i class="fas fa-chevron-down"></i></button>
        <div class="faq-answer">
          <p>Respondemos en 24-48 horas laborables. Urgencias: indícalo en tu solicitud.</p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question">¿Tiene coste el servicio?<i class="fas fa-chevron-down"></i></button>
        <div class="faq-answer">
          <p>El asesoramiento básico es gratuito. Solo servicios avanzados pueden tener coste.</p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question">¿Puedo pedir ayuda con productos ajenos?<i class="fas fa-chevron-down"></i></button>
        <div class="faq-answer">
          <p>Sí, también asesoramos sobre productos que no hayas comprado en nuestra tienda.</p>
        </div>
      </div>
    </section>
  </main>

  <script src="../scripts/asesoramiento.js"></script>
</body>
</html>