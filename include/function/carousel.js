const carouselSlide = document.querySelector('.carousel-slide');
const carouselImages = document.querySelectorAll('.carousel-slide div');
const prevBtn = document.querySelector('prevBtn');
let counter = 0;
const size = carouselImages[0].clientWidth;
carouselImages[counter].style.transform = "scale(1)";

document.getElementById('nextBtn').onclick = function() {
    if (counter >= carouselImages.length -1) return;
    counter++;
    console.log(counter);
    carouselSlide.style.transform = 'translateX(' + (-size*counter)+'px)';
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    carouselImages[counter].style.transform = "scale(1)";
    carouselImages[counter-1].style.transform = "scale(0.7)";
    if (counter < carouselImages.length -1) {
        carouselImages[counter+1].style.transform = "scale(0.7)";
    }
}

document.getElementById('prevBtn').onclick = function() {
    if (counter <= 0) return;
    counter--;
    console.log(counter);
    carouselSlide.style.transform = 'translateX(' + (-size*counter)+'px)';
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    carouselImages[counter].style.transform = "scale(1)";
    carouselImages[counter+1].style.transform = "scale(0.7)";
    if (counter > 0) {
        carouselImages[counter-1].style.transform = "scale(0.7)";
    }
}
