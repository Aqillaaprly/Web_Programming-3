$(document).ready(function() {
    let currentSlide = 0;
    let slides = $('.slide');
    let totalSlides = slides.length;

    slides.hide();
    slides.eq(currentSlide).show();

    function nextSlide() {
        slides.eq(currentSlide).fadeOut(500); 
        currentSlide = (currentSlide + 1) % totalSlides; 
        slides.eq(currentSlide).fadeIn(750);  
    }

    setInterval(nextSlide, 3000);
});
