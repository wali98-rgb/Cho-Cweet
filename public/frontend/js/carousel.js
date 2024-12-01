const carousel = document.querySelector('.carousels');
const thumbnails = document.querySelector('.thumbnails');
const listCarousel = document.querySelector('.list-car');
const next = document.querySelector('#next');
const prev = document.querySelector('#prev');

// Autoplay Carousel
let runAutoPlay = setTimeout(() => {
    next.click();
}, 4500);

next.addEventListener('click', () => {
    initCarousel('next');
});

prev.addEventListener('click', () => {
    initCarousel('prev');
});

const initCarousel = (type) => {
    const carouselItems = listCarousel.querySelectorAll('.items');
    const thumbnailItems = thumbnails.querySelectorAll('.items');

    if (type === 'next') {
        listCarousel.appendChild(carouselItems[0]);
        thumbnails.appendChild(thumbnailItems[0]);
        carousel.classList.add('next');
    } else {
        const lastItemPosition = carouselItems.length - 1;
        listCarousel.prepend(carouselItems[lastItemPosition]);
        thumbnails.prepend(thumbnailItems[lastItemPosition]);
        carousel.classList.add('prev');
    }

    setTimeout(() => {
        carousel.classList.remove('next');
        carousel.classList.remove('prev');
    }, 500);

    clearTimeout(runAutoPlay);
    runAutoPlay = setTimeout(() => {
        next.click();
    }, 4500);
};

// Slide Other Product
let currentIndex = 0;

function showNextOtherProduct() {
    const others = document.querySelector('.other');
    const totalProducts = others.children.length;
    currentIndex = (currentIndex + 1) % (totalProducts - 2);
    others.style.transform = `translateX(-${currentIndex * 33.33}%)`;
}

setInterval(showNextOtherProduct, 3000);

// const other = document.querySelector('.other');
// let isDown = false;
// let startX;
// let scrollLeft;

// other.addEventListener('mousedown', (e) => {
//     isDown = true;
//     other.classList.add('active');
//     startX = e.pageX - other.offsetLeft;
//     scrollLeft = other.scrollLeft;
// });

// other.addEventListener('mouseleave', () => {
//     isDown = false;
//     other.classList.remove('active');
// });

// other.addEventListener('mouseup', () => {
//     isDown = false;
//     other.classList.remove('active');
// });

// other.addEventListener('mousemove', (e) => {
//     if (!isDown) return;
//     e.preventDefault();
//     const x = e.pageX - other.offsetLeft;
//     const walk = (x - startX) * 3; //scroll-fast
//     other.scrollLeft = scrollLeft - walk;
// });

