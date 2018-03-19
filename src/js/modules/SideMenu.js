

class SideMenu {
    constructor () {
        this.aboutSection = document.querySelector(".about");
        this.menuIcon = document.querySelector(".menu-icon");
        this.mainMenu = document.querySelector(".main-nav");

        // aside
        this.heroAside = document.querySelector(".hero-aside");

        this.events();
    }

    events() {
        let self = this;
        window.addEventListener("scroll", () => {
            // if ((document.documentElement.scrollTop > self.aboutSection.offsetTop - 200) && (window.innerWidth >= 700)) {
            if ((window.pageYOffset > self.aboutSection.offsetTop - 200) && (window.innerWidth >= 700)) {
                self.menuIcon.style.display = "none";
                self.mainMenu.classList.add("main-nav--side-menu");
                self.heroAside.classList.add("hero-aside--hidden");
            } else {
                self.menuIcon.style.display = "";
                self.mainMenu.classList.remove("main-nav--side-menu");
                self.heroAside.classList.remove("hero-aside--hidden");
            }
            
            // aside
            // if ((document.documentElement.scrollTop > self.aboutSection.offsetTop - 200) && (window.innerWidth >= 700)) {
            // if ((window.pageYOffset > self.aboutSection.offsetTop - 200) && (window.innerWidth >= 700)) {
            // } else {
            // }
        });
    }
}

export default SideMenu;