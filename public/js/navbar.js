const hamburger = document.getElementById("hamburger");
const navMenu = document.getElementById("nav-menu");

hamburger.addEventListener("click", () => {
    navMenu.classList.toggle("active");
});

// Klik di mana saja selain hamburger atau navMenu akan menutup menu
document.addEventListener("click", (event) => {
    const isClickInsideMenu = navMenu.contains(event.target);
    const isClickOnHamburger = hamburger.contains(event.target);

    if (!isClickInsideMenu && !isClickOnHamburger) {
        navMenu.classList.remove("active");
    }
});

const navLinks = document.querySelectorAll("#nav-menu a");
const currentUrl = window.location.href;

navLinks.forEach((link) => {
    if (currentUrl === link.href) {
        link.classList.add("active");
    }

    // Hover efek tetap bisa manual, jika belum pakai CSS :hover
    link.addEventListener("mouseover", () => {
        link.style.color = "orange";
    });

    link.addEventListener("mouseout", () => {
        if (!link.classList.contains("active")) {
            link.style.color = "";
        }
    });
});
