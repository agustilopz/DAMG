document.addEventListener('DOMContentLoaded', function() {
    // FAQ Accordion
    const faqQuestions = document.querySelectorAll('.faq-question');
    
    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const answer = question.nextElementSibling;
            const isActive = question.classList.contains('active');
            
            // Cerrar todas las respuestas primero
            faqQuestions.forEach(q => {
                q.classList.remove('active');
                q.nextElementSibling.classList.remove('show');
            });
            
            // Abrir la respuesta clickeada si no estaba activa
            if (!isActive) {
                question.classList.add('active');
                answer.classList.add('show');
            }
        });
    });
    
    // Formulario de asesoramiento
    const consultationForm = document.getElementById('consultationForm');
    const successModal = document.getElementById('successModal');
    const closeModal = document.querySelector('.close-modal');
    const modalBtn = document.querySelector('.modal-btn');
    
    consultationForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Aquí iría la lógica para enviar el formulario (AJAX, etc.)
        // Por ahora solo mostramos el modal de éxito
        successModal.style.display = 'flex';
        
        // Limpiar el formulario
        consultationForm.reset();
    });
    
    // Cerrar modal
    closeModal.addEventListener('click', () => {
        successModal.style.display = 'none';
    });
    
    modalBtn.addEventListener('click', () => {
        successModal.style.display = 'none';
    });
    
    // Cerrar modal al hacer clic fuera del contenido
    window.addEventListener('click', (e) => {
        if (e.target === successModal) {
            successModal.style.display = 'none';
        }
    });
});