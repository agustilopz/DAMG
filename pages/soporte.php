<!DOCTYPE html>
<html lang="es">
<head>
  <link rel="stylesheet" href="../css/soporte.css" />
  <link rel="stylesheet" href="../css/nav.css" />
  <?php include("../includes/head.html"); ?>
</head>
<body class="support-page">
  <?php include("../includes/nav.php"); ?>

  <header class="header">
    <div class="container">
      <h1 class="neon-text">Soporte Técnico Avanzado</h1>
      <p>Soluciones rápidas y efectivas para todos tus dispositivos electrónicos</p>
    </div>
  </header>

  <main class="container main-content">
    <section class="support-options-section">
      <h2>Opciones de Soporte</h2>
      <div class="support-grid">
        <div class="support-card">
          <div class="card-icon">
            <i class="fas fa-laptop-medical"></i>
          </div>
          <h3>Diagnóstico Remoto</h3>
          <p>Análisis de problemas a distancia con nuestros técnicos especializados</p>
          <a href="#remote-form" class="btn-neon">Solicitar</a>
        </div>
        
        <div class="support-card">
          <div class="card-icon">
            <i class="fas fa-tools"></i>
          </div>
          <h3>Reparación</h3>
          <p>Servicio técnico profesional para hardware y problemas físicos</p>
          <a href="#repair-form" class="btn-neon">Solicitar</a>
        </div>
        
        <div class="support-card">
          <div class="card-icon">
            <i class="fas fa-rocket"></i>
          </div>
          <h3>Optimización</h3>
          <p>Mejora el rendimiento de tus dispositivos con nuestros servicios de optimización</p>
          <a href="#optimization-form" class="btn-neon">Solicitar</a>
        </div>
        
        <div class="support-card">
          <div class="card-icon">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3>Seguridad</h3>
          <p>Protección avanzada contra malware y amenazas digitales</p>
          <a href="#security-form" class="btn-neon">Solicitar</a>
        </div>
      </div>
    </section>

    <section class="diagnostic-section">
      <div class="diagnostic-grid">
        <div class="diagnostic-info">
          <h2>Diagnóstico Automático</h2>
          <p>Responde algunas preguntas para ayudarte a identificar tu problema técnico. Nuestro sistema te guiará hacia la mejor solución.</p>
          
          <div class="diagnostic-steps">
            <div class="step">
              <div class="step-number">1</div>
              <div class="step-content">
                <h4>Selecciona tu dispositivo</h4>
                <p>Indica qué tipo de dispositivo está presentando problemas</p>
              </div>
            </div>
            
            <div class="step">
              <div class="step-number">2</div>
              <div class="step-content">
                <h4>Describe el problema</h4>
                <p>Explícanos los síntomas y comportamientos anómalos</p>
              </div>
            </div>
            
            <div class="step">
              <div class="step-number">3</div>
              <div class="step-content">
                <h4>Recibe soluciones</h4>
                <p>Te proporcionaremos guías paso a paso o contacto con un técnico</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="diagnostic-tool" id="remote-form">
          <h3>Asistente de Diagnóstico</h3>
          <form id="diagnosticForm">
            <div class="form-group">
              <label for="device-type">Tipo de dispositivo*</label>
              <select id="device-type" name="device-type" required>
                <option value="">Selecciona una opción</option>
                <option value="pc">PC/Ordenador de sobremesa</option>
                <option value="laptop">Portátil</option>
                <option value="smartphone">Smartphone</option>
                <option value="tablet">Tablet</option>
                <option value="console">Consola de juegos</option>
                <option value="other">Otro dispositivo</option>
              </select>
            </div>
            
            <div class="form-group">
              <label for="issue-category">Categoría del problema*</label>
              <select id="issue-category" name="issue-category" required>
                <option value="">Selecciona una opción</option>
                <option value="hardware">Hardware</option>
                <option value="software">Software</option>
                <option value="network">Red/Conectividad</option>
                <option value="performance">Rendimiento</option>
                <option value="security">Seguridad</option>
              </select>
            </div>
            
            <div class="form-group">
              <label for="symptoms">Describe los síntomas*</label>
              <textarea id="symptoms" name="symptoms" rows="4" required></textarea>
            </div>
            
            <div class="form-group">
              <label for="contact-method">Método de contacto preferido*</label>
              <select id="contact-method" name="contact-method" required>
                <option value="">Selecciona una opción</option>
                <option value="email">Email</option>
                <option value="phone">Teléfono</option>
                <option value="chat">Chat en vivo</option>
                <option value="video">Videollamada</option>
              </select>
            </div>
            
            <div class="form-group">
              <label for="contact-info">Información de contacto*</label>
              <input type="text" id="contact-info" name="contact-info" required />
            </div>
            
            <button type="submit" class="submit-btn">Iniciar diagnóstico</button>
          </form>
        </div>
      </div>
    </section>

    <section class="support-plans-section">
      <h2>Planes de Soporte</h2>
      <div class="plans-grid">
        <div class="plan-card">
          <div class="plan-header">
            <h3>Básico</h3>
            <div class="plan-price">
              <span class="price">19.99€</span>
              <span class="period">/mes</span>
            </div>
          </div>
          <div class="plan-features">
            <ul>
              <li><i class="fas fa-check"></i> Soporte remoto 8/5</li>
              <li><i class="fas fa-check"></i> Diagnóstico básico</li>
              <li><i class="fas fa-check"></i> Tiempo de respuesta: 24h</li>
              <li><i class="fas fa-check"></i> 1 dispositivo</li>
              <li class="not-included"><i class="fas fa-times"></i> Soporte prioritario</li>
              <li class="not-included"><i class="fas fa-times"></i> Mantenimiento preventivo</li>
            </ul>
          </div>
          <div class="plan-action">
            <a href="#" class="plan-btn">Contratar</a>
          </div>
        </div>
        
        <div class="plan-card featured">
          <div class="plan-badge">Recomendado</div>
          <div class="plan-header">
            <h3>Premium</h3>
            <div class="plan-price">
              <span class="price">49.99€</span>
              <span class="period">/mes</span>
            </div>
          </div>
          <div class="plan-features">
            <ul>
              <li><i class="fas fa-check"></i> Soporte remoto 24/7</li>
              <li><i class="fas fa-check"></i> Diagnóstico avanzado</li>
              <li><i class="fas fa-check"></i> Tiempo de respuesta: 2h</li>
              <li><i class="fas fa-check"></i> Hasta 3 dispositivos</li>
              <li><i class="fas fa-check"></i> Soporte prioritario</li>
              <li><i class="fas fa-check"></i> Mantenimiento trimestral</li>
            </ul>
          </div>
          <div class="plan-action">
            <a href="#" class="plan-btn">Contratar</a>
          </div>
        </div>
        
        <div class="plan-card">
          <div class="plan-header">
            <h3>Empresarial</h3>
            <div class="plan-price">
              <span class="price">99.99€</span>
              <span class="period">/mes</span>
            </div>
          </div>
          <div class="plan-features">
            <ul>
              <li><i class="fas fa-check"></i> Soporte presencial y remoto 24/7</li>
              <li><i class="fas fa-check"></i> Diagnóstico avanzado</li>
              <li><i class="fas fa-check"></i> Tiempo de respuesta: inmediato</li>
              <li><i class="fas fa-check"></i> Dispositivos ilimitados</li>
              <li><i class="fas fa-check"></i> Soporte VIP</li>
              <li><i class="fas fa-check"></i> Mantenimiento mensual</li>
            </ul>
          </div>
          <div class="plan-action">
            <a href="#" class="plan-btn">Contactar</a>
          </div>
        </div>
      </div>
    </section>

    <section class="faq-section">
      <h2>Preguntas Frecuentes</h2>
      <div class="faq-container">
        <div class="faq-item">
          <button class="faq-question">¿Cuánto tiempo tarda la reparación de un dispositivo?<i class="fas fa-chevron-down"></i></button>
          <div class="faq-answer">
            <p>El tiempo de reparación varía según el problema y el dispositivo. Una vez recibido, realizamos un diagnóstico completo en 24-48 horas. Te proporcionamos un plazo estimado y te mantenemos informado sobre el progreso a través de nuestro portal de seguimiento.</p>
          </div>
        </div>
        
        <div class="faq-item">
          <button class="faq-question">¿Ofrecen garantía en las reparaciones?<i class="fas fa-chevron-down"></i></button>
          <div class="faq-answer">
            <p>Sí, todas nuestras reparaciones incluyen una garantía de 3 meses que cubre cualquier defecto relacionado con la reparación realizada. Los planes Premium y Empresarial incluyen garantías extendidas de 6 y 12 meses respectivamente.</p>
          </div>
        </div>
        
        <div class="faq-item">
          <button class="faq-question">¿Cómo funciona el soporte remoto?<i class="fas fa-chevron-down"></i></button>
          <div class="faq-answer">
            <p>Nuestro soporte remoto utiliza software seguro que nos permite conectarnos a tu dispositivo (con tu autorización) para diagnosticar y solucionar problemas sin necesidad de que nos envíes el equipo. Te guiaremos en la instalación y te explicaremos cada paso del proceso.</p>
          </div>
        </div>
        
        <div class="faq-item">
          <button class="faq-question">¿Qué ocurre si no pueden reparar mi dispositivo?<i class="fas fa-chevron-down"></i></button>
          <div class="faq-answer">
            <p>Si tras el diagnóstico determinamos que la reparación no es viable o su coste supera el valor del dispositivo, te lo comunicaremos inmediatamente. Solo cobraremos el diagnóstico (gratuito para clientes con plan) y te asesoraremos sobre opciones de reemplazo con descuentos especiales en nuestra tienda.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="tech-team-section">
      <h2>Nuestro Equipo Técnico</h2>
      <div class="team-grid">
        <div class="team-member">
          <div class="member-photo">
            <div class="photo-placeholder">
              <i class="fas fa-user-cog"></i>
            </div>
          </div>
          <h3>Dani Alarcon</h3>
          <p class="member-title">Especialista en Hardware</p>
          <p class="member-cert">Certificado Apple, Dell, HP</p>
        </div>
        
        <div class="team-member">
          <div class="member-photo">
            <div class="photo-placeholder">
              <i class="fas fa-user-shield"></i>
            </div>
          </div>
          <h3>Agustí López</h3>
          <p class="member-title">Experto en Seguridad</p>
          <p class="member-cert">CISSP, CompTIA Security+</p>
        </div>
        
        <div class="team-member">
          <div class="member-photo">
            <div class="photo-placeholder">
              <i class="fas fa-user-graduate"></i>
            </div>
          </div>
          <h3>Marc Bonamusa</h3>
          <p class="member-title">Especialista en Software</p>
          <p class="member-cert">Microsoft Certified, Linux Professional</p>
        </div>
        
        <div class="team-member">
          <div class="member-photo">
            <div class="photo-placeholder">
              <i class="fas fa-user-gear"></i>
            </div>
          </div>
          <h3>Guillermo Mir</h3>
          <p class="member-title">Técnico de Redes</p>
          <p class="member-cert">Cisco CCNA, Network+</p>
        </div>
      </div>
    </section>
  </main>

  <div class="modal" id="supportModal">
    <div class="modal-content">
      <span class="close-modal">&times;</span>
      <div class="modal-icon">
        <i class="fas fa-headset"></i>
      </div>
      <h3>Solicitud Recibida</h3>
      <p>Hemos registrado tu solicitud de soporte. Un técnico especializado se pondrá en contacto contigo en breve.</p>
      <button class="modal-btn">Aceptar</button>
    </div>
  </div>

  <script>
    // Funcionalidad para las preguntas frecuentes
    document.addEventListener('DOMContentLoaded', function() {
      const faqQuestions = document.querySelectorAll('.faq-question');
      
      faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
          const answer = question.nextElementSibling;
          const isActive = question.classList.contains('active');
          
          // Cerrar todas las respuestas
          document.querySelectorAll('.faq-answer').forEach(item => {
            item.classList.remove('show');
          });
          document.querySelectorAll('.faq-question').forEach(item => {
            item.classList.remove('active');
          });
          
          // Abrir la seleccionada si no estaba abierta
          if (!isActive) {
            answer.classList.add('show');
            question.classList.add('active');
          }
        });
      });
      
      // Formulario de diagnóstico
      const diagnosticForm = document.getElementById('diagnosticForm');
      if (diagnosticForm) {
        diagnosticForm.addEventListener('submit', function(e) {
          e.preventDefault();
          const modal = document.getElementById('supportModal');
          modal.style.display = 'flex';
        });
      }
      
      // Cerrar modal
      const closeModal = document.querySelector('.close-modal');
      const modalBtn = document.querySelector('.modal-btn');
      const modal = document.getElementById('supportModal');
      
      if (closeModal && modal) {
        closeModal.addEventListener('click', () => {
          modal.style.display = 'none';
        });
      }
      
      if (modalBtn && modal) {
        modalBtn.addEventListener('click', () => {
          modal.style.display = 'none';
        });
      }
    });
  </script>
</body>
</html>