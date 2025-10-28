// Animaciones personalizadas para las imágenes
document.addEventListener('DOMContentLoaded', function() {
    // Función para verificar si un elemento está en el viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Función para verificar si un elemento está parcialmente visible
    function isPartiallyVisible(element) {
        const rect = element.getBoundingClientRect();
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;
        const windowWidth = window.innerWidth || document.documentElement.clientWidth;
        
        return (
            rect.bottom > 0 &&
            rect.right > 0 &&
            rect.top < windowHeight &&
            rect.left < windowWidth
        );
    }

    // Función para activar las animaciones
    function activateAnimations() {
        const animatedImages = document.querySelectorAll('.animate-image');
        
        animatedImages.forEach(function(image) {
            if (isPartiallyVisible(image) && !image.classList.contains('visible')) {
                image.classList.add('visible');
            }
        });
    }

    // Activar animaciones al cargar la página
    activateAnimations();

    // Activar animaciones al hacer scroll
    window.addEventListener('scroll', function() {
        activateAnimations();
    });

    // Activar animaciones al redimensionar la ventana
    window.addEventListener('resize', function() {
        activateAnimations();
    });

    // Efecto hover mejorado para las imágenes
    const contentImages = document.querySelectorAll('.content-image img');
    
    contentImages.forEach(function(img) {
        img.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
            this.style.transition = 'transform 0.3s ease';
        });
        
        img.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });

    // Animación de entrada suave para los textos
    const contentTexts = document.querySelectorAll('.content-text');
    
    function activateTextAnimations() {
        contentTexts.forEach(function(text, index) {
            if (isPartiallyVisible(text) && !text.classList.contains('text-animated')) {
                text.style.opacity = '0';
                text.style.transform = 'translateY(20px)';
                text.style.transition = 'all 0.6s ease';
                
                setTimeout(function() {
                    text.style.opacity = '1';
                    text.style.transform = 'translateY(0)';
                    text.classList.add('text-animated');
                }, index * 100); // Retraso escalonado
            }
        });
    }

    // Activar animaciones de texto
    activateTextAnimations();
    window.addEventListener('scroll', activateTextAnimations);

    // Animación de parallax suave para las imágenes
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const parallaxImages = document.querySelectorAll('.animate-image.visible');
        
        parallaxImages.forEach(function(img) {
            const rate = scrolled * -0.1;
            img.style.transform = `translateY(${rate}px)`;
        });
    });
});

// Función para reiniciar animaciones (útil para navegación SPA)
function resetAnimations() {
    const animatedElements = document.querySelectorAll('.animate-image, .content-text');
    
    animatedElements.forEach(function(element) {
        element.classList.remove('visible', 'text-animated');
        element.style.opacity = '';
        element.style.transform = '';
    });
    
    // Reactivar animaciones después de un breve retraso
    setTimeout(function() {
        const event = new Event('scroll');
        window.dispatchEvent(event);
    }, 100);
}

// Exportar función para uso global
window.resetAnimations = resetAnimations;