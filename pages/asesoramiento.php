<!DOCTYPE html>
 <html lang="es">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Asesoramiento en Electrónica - TuTiendaElectrónica</title>
     <link rel="stylesheet" href="../css/asesoramiento.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
 </head>
 <body>
    <?php include("../includes/nav.html") ?>
     <header class="header">
         <div class="container">
             <h1>Asesoramiento Especializado en Electrónica</h1>
             <p>Nuestros expertos te ayudan a encontrar la mejor solución para tus necesidades tecnológicas</p>
         </div>
     </header>
 
     <main class="container main-content">
         <section class="services-section">
             <h2>Nuestros Servicios de Asesoramiento</h2>
             <div class="services-grid">
                 <div class="service-card">
                     <i class="fas fa-laptop-code service-icon"></i>
                     <h3>Configuración de Equipos</h3>
                     <p>Te ayudamos a seleccionar y configurar tu equipo ideal según tus necesidades de trabajo o entretenimiento.</p>
                 </div>
                 <div class="service-card">
                     <i class="fas fa-network-wired service-icon"></i>
                     <h3>Soluciones de Red</h3>
                     <p>Asesoramiento para configurar redes domésticas o pequeñas oficinas con el mejor rendimiento.</p>
                 </div>
                 <div class="service-card">
                     <i class="fas fa-gamepad service-icon"></i>
                     <h3>Gaming</h3>
                     <p>Recomendaciones personalizadas para setups gaming según tu presupuesto y tipo de juegos.</p>
                 </div>
                 <div class="service-card">
                     <i class="fas fa-home service-icon"></i>
                     <h3>Domótica</h3>
                     <p>Convierte tu hogar en una smart home con nuestros sistemas de automatización recomendados.</p>
                 </div>
                 <div class="service-card">
                     <i class="fas fa-headphones service-icon"></i>
                     <h3>Audio Profesional</h3>
                     <p>Asesoramiento para estudios caseros, sistemas de sonido o equipos de DJ.</p>
                 </div>
                 <div class="service-card">
                     <i class="fas fa-mobile-alt service-icon"></i>
                     <h3>Movilidad</h3>
                     <p>Encuentra el dispositivo móvil perfecto y los accesorios que mejor se adapten a tu estilo de vida.</p>
                 </div>
             </div>
         </section>
 
         <section class="consultation-section">
             <div class="consultation-info">
                 <h2>¿Necesitas asesoramiento personalizado?</h2>
                 <p>Nuestros expertos en electrónica están listos para ayudarte a encontrar las mejores soluciones tecnológicas adaptadas a tus necesidades específicas.</p>
                 <ul class="benefits-list">
                     <li><i class="fas fa-check-circle"></i> Análisis de tus necesidades reales</li>
                     <li><i class="fas fa-check-circle"></i> Recomendaciones sin compromiso</li>
                     <li><i class="fas fa-check-circle"></i> Comparativa de opciones disponibles</li>
                     <li><i class="fas fa-check-circle"></i> Presupuesto adaptado a tus posibilidades</li>
                     <li><i class="fas fa-check-circle"></i> Seguimiento post-venta</li>
                 </ul>
                 <div class="testimonial">
                     <blockquote>
                         "Gracias al asesoramiento recibido pude montar mi estudio de podcast con exactamente lo que necesitaba, sin gastar de más en equipos innecesarios."
                         <cite>- Carlos M., cliente satisfecho</cite>
                     </blockquote>
                 </div>
             </div>
 
             <div class="consultation-form">
                 <h3>Solicita tu asesoramiento personalizado</h3>
                 <form id="consultationForm">
                     <div class="form-group">
                         <label for="name">Nombre completo*</label>
                         <input type="text" id="name" name="name" required>
                     </div>
                     <div class="form-group">
                         <label for="email">Correo electrónico*</label>
                         <input type="email" id="email" name="email" required>
                     </div>
                     <div class="form-group">
                         <label for="phone">Teléfono</label>
                         <input type="tel" id="phone" name="phone">
                     </div>
                     <div class="form-group">
                         <label for="service-type">Tipo de asesoramiento*</label>
                         <select id="service-type" name="service-type" required>
                             <option value="">Selecciona una opción</option>
                             <option value="configuracion">Configuración de equipos</option>
                             <option value="redes">Soluciones de red</option>
                             <option value="gaming">Setup Gaming</option>
                             <option value="domotica">Domótica y Smart Home</option>
                             <option value="audio">Audio profesional</option>
                             <option value="movilidad">Dispositivos móviles</option>
                             <option value="otro">Otro (especificar en comentarios)</option>
                         </select>
                     </div>
                     <div class="form-group">
                         <label for="budget">Presupuesto aproximado</label>
                         <select id="budget" name="budget">
                             <option value="">No especificado</option>
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
                         <input type="checkbox" id="newsletter" name="newsletter">
                         <label for="newsletter">Deseo recibir ofertas y novedades por email</label>
                     </div>
                     <button type="submit" class="submit-btn">Solicitar asesoramiento</button>
                 </form>
             </div>
         </section>
 
         <section class="faq-section">
             <h2>Preguntas Frecuentes</h2>
             <div class="faq-item">
                 <button class="faq-question">¿Cuánto tiempo tarda en responderse mi solicitud de asesoramiento?<i class="fas fa-chevron-down"></i></button>
                 <div class="faq-answer">
                     <p>Normalmente respondemos en un plazo de 24-48 horas laborables. Para solicitudes urgentes, puedes indicarlo en el campo de comentarios y haremos lo posible por atenderte antes.</p>
                 </div>
             </div>
             <div class="faq-item">
                 <button class="faq-question">¿Tiene algún coste el servicio de asesoramiento?<i class="fas fa-chevron-down"></i></button>
                 <div class="faq-answer">
                     <p>El asesoramiento inicial es completamente gratuito. Solo en caso de requerir un proyecto técnico complejo o un estudio detallado podríamos aplicar cargos, que siempre serán comunicados y aceptados por ti previamente.</p>
                 </div>
             </div>
             <div class="faq-item">
                 <button class="faq-question">¿Puedo solicitar asesoramiento para equipos que no he comprado en su tienda?<i class="fas fa-chevron-down"></i></button>
                 <div class="faq-answer">
                     <p>Sí, aunque nuestro servicio está optimizado para nuestros productos, estaremos encantados de asesorarte sobre cualquier equipo electrónico que necesites configurar o mejorar.</p>
                 </div>
             </div>
         </section>
     </main>
 
     <footer class="footer">
         <div class="container">
             <p>© 2023 TuTiendaElectrónica. Todos los derechos reservados.</p>
             <p>Nuestros asesores están disponibles de lunes a viernes de 9:00 a 18:00.</p>
         </div>
     </footer>
 
     <div id="successModal" class="modal">
         <div class="modal-content">
             <span class="close-modal">&times;</span>
             <i class="fas fa-check-circle modal-icon"></i>
             <h3>¡Solicitud enviada con éxito!</h3>
             <p>Hemos recibido tu solicitud de asesoramiento. Uno de nuestros expertos se pondrá en contacto contigo en breve.</p>
             <button class="modal-btn">Aceptar</button>
         </div>
     </div>
 
     <script src="script.js"></script>
 </body>
 </html>