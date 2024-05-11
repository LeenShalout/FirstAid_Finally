alert('yessssssss')



document.addEventListener('scroll', () => {
    alert('iiiii')

    const navbar = document.querySelector('nav');
    if (window.scrollY > 0) {
        navbar.classList.add('active');
    } else {
        navbar.classList.remove('active');
    }
});
