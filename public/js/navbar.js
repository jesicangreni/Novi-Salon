
window.addEventListener('scroll', function () {
    const header = document.querySelector('.header');
    header.classList.toggle('scrolled', window.scrollY > 50);
});

document.querySelector('.mobile-nav-toggle').addEventListener('click', function () {
    document.querySelector('.navmenu').classList.toggle('active');
});
