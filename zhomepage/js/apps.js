const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');
    //ToggleNav
    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
        // animate links
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index/7 +0.3}s`;
            }
            console.log(index / 5 + 0.2)
        });
        // burger animation starts here
        burger.classList.toggle('toggle');

    });

}
navSlide();