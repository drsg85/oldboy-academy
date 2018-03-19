class MobileMenu {
    constructor() {
        this.mainNav = document.querySelector(".main-nav");
        this.menuIcon = document.querySelector(".menu-icon");

        this.events();
    }
    
    events() {
        this.menuIcon.addEventListener("click", () => {
            this.toggleMenu();
        });

        this.mainNav.addEventListener("click", (event) => {
            if (event.target.className == "main-nav__link") {
                this.toggleMenu();
            }
        });
    }
    
    toggleMenu() {
        this.mainNav.classList.toggle("main-nav--shown");
        this.menuIcon.classList.toggle("menu-icon--close-x");
    }
}

export default MobileMenu;