
window.addEventListener('scroll', function () {
    localStorage.setItem('scrollPosition', window.scrollY);
});

// Vratite poziciju pri povratku na stranicu
window.addEventListener('load', function () {
    const scrollPosition = parseInt(localStorage.getItem('scrollPosition')) || 0;
    window.scrollTo(0, scrollPosition);
});



