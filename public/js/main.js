const init = () => {
    const nextBtn = document.querySelector('.next');
    const prevBtn = document.querySelector('.prev');

    let offset = 0; // смещение от левого края
    const sliderLine = document.querySelector('.slider-line');

    function nextSlide() {
        offset = offset + 600;
        if (offset > 2400) {
            offset = 0;
        }
        sliderLine.style.left = -offset + 'px';
    }

    function prevSlide() {
        offset = offset - 600;
        if (offset < 0) {
            offset = 2400;
        }
        sliderLine.style.left = -offset + 'px';
    }

    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);
};
document.addEventListener('DOMContentLoaded', init);
