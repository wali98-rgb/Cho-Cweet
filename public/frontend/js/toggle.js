document.getElementById('toggleMenu').addEventListener('click', function () {
    // Toggle class 'active' pada ul dan 'menu-active' pada body
    const navMenu = document.getElementById('navMenu');
    navMenu.classList.toggle('active');

    // Jika ul memiliki class 'active', tambahkan class 'menu-active' pada body
    if (navMenu.classList.contains('active')) {
        document.body.classList.add('menu-active');
    } else {
        document.body.classList.remove('menu-active');
    }
});

// Saat diklik diluar navbar, navnya ilang
const toggleMenu = document.getElementById('toggleMenu');
const navMenu = document.getElementById('navMenu');

document.addEventListener('click', function (event) {
    if (!toggleMenu.contains(event.target) && !navMenu.contains(event.target)) {
        navMenu.classList.remove('active')
    }

    // Jika ul memiliki class 'active', tambahkan class 'menu-active' pada body
    if (navMenu.classList.contains('active')) {
        document.body.classList.add('menu-active');
    } else {
        document.body.classList.remove('menu-active');
    }
})
