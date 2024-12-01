const counters = document.querySelectorAll('#counter');
const duration = 2000; // Durasi animasi untuk semua elemen

// counters.forEach(counter => {
//     const targetNumber = parseInt(counter.getAttribute('data-target')); // Ambil target dari atribut

//     function animateCounter(target, duration) {
//         const start = 0;
//         const step = target / (duration / 16); // Hitung langkah per frame (~60fps)
//         let current = start;

//         function updateCounter() {
//             current += step;
//             if (current >= target) {
//                 current = target;
//                 counter.textContent = Math.floor(current);
//             } else {
//                 counter.textContent = Math.floor(current);
//                 requestAnimationFrame(updateCounter);
//             }
//         }

//         updateCounter();
//     }

//     animateCounter(targetNumber, duration);
// });

function animateCounter(counter, target, duration) {
    const start = 0;
    const step = target / (duration / 16); // Hitung langkah per frame (~60fps)
    let current = start;

    function updateCounter() {
        current += step;
        if (current >= target) {
            current = target;
            counter.textContent = Math.floor(current);
        } else {
            counter.textContent = Math.floor(current);
            requestAnimationFrame(updateCounter);
        }
    }

    updateCounter();
}

// Observer untuk mendeteksi elemen terlihat di viewport
const observerOptions = {
    root: null, // Menggunakan viewport sebagai batas
    threshold: 0.2 // Animasi dijalankan jika elemen terlihat 20% di layar
};

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const counter = entry.target;
            const targetNumber = parseInt(counter.getAttribute('data-target'));

            animateCounter(counter, targetNumber, duration);

            // Hentikan pengamatan setelah animasi selesai
            observer.unobserve(counter);
        }
    });
}, observerOptions);

// Daftarkan setiap elemen counter ke dalam observer
counters.forEach(counter => {
    observer.observe(counter);
});
