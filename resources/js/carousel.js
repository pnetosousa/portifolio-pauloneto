// Carousel functionality for Projects Page
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('screenshotCarousel');
    
    // Check if carousel exists on the page
    if (!carousel) return;
    
    const items = carousel.querySelectorAll('.carousel-item');
    const indicators = carousel.querySelectorAll('.indicator');
    const captionText = carousel.querySelector('.caption-text');
    let currentIndex = 0;
    
    const captions = [
        'Tela de Cadastro CRUD',
        'Consulta de Clientes',
        'CRUD Completo'
    ];
    
    function showSlide(index) {
        // Remove active class from all items and indicators
        items.forEach(item => item.classList.remove('active'));
        indicators.forEach(indicator => indicator.classList.remove('active'));
        
        // Add active class to current item and indicator
        items[index].classList.add('active');
        indicators[index].classList.add('active');
        
        // Update caption
        if (captionText) {
            captionText.textContent = captions[index];
        }
    }
    
    function nextSlide() {
        currentIndex = (currentIndex + 1) % items.length;
        showSlide(currentIndex);
    }
    
    // Auto advance every 5 seconds
    setInterval(nextSlide, 5000);
    
    // Click indicators to navigate
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentIndex = index;
            showSlide(currentIndex);
        });
    });
});
