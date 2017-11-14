const $ = require("jquery");

class MobileMenu {
    constructor() {
        this.mainNav = $(".main-nav");
        this.menuIcon = $(".menu-icon");
        this.menuLinks = $(".main-nav a");

        this.events();
    }

    events() {
        this.menuIcon.on("tap", () => {
            this.toggleMenu();
        });

        this.menuLinks.on("tap", () => {
            this.toggleMenu();
        });

        this.menuIcon.on("click", () => {
            this.toggleMenu();
        });

        this.menuLinks.on("click", () => {
            this.toggleMenu();
        });

    }

    toggleMenu() {
        this.mainNav.toggleClass("main-nav--shown");
        this.menuIcon.toggleClass("menu-icon--close-x");
    }
}

let mobileMenu = new MobileMenu();