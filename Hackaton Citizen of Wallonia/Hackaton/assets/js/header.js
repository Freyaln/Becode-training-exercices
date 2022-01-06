setTimeout(() => {

    const navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    if (navbarBurgers.length > 0) {

        navbarBurgers.forEach(el => {
            el.addEventListener('click', () => {

                const target = el.dataset.target;
                const $target = document.getElementById(target);

                el.classList.toggle('is-active');
                $target.classList.toggle('is-active');

            });
        });
    }
}, 500);
setTimeout(() => {
    const transportToggle = document.getElementById("toggle");
    const transportMenu = document.getElementById("toggleMenu")
    transportToggle.addEventListener("click", () => {

        if (transportMenu.style.display === "none") {
            transportMenu.style.display = "block";
        }
        else {
            transportMenu.style.display = "none"
        }
    })
}, 500);