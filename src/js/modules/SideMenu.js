

class SideMenu {
    constructor () {
        this.aboutSection = document.querySelector(".about");
        this.menuIcon = document.querySelector(".menu-icon");
        this.mainMenu = document.querySelector(".main-nav");

        this.events();
    }

    events() {
        let self = this;
        window.addEventListener("scroll", () => {
            console.log(document.documentElement.scrollTop);
            if ((document.documentElement.scrollTop > self.aboutSection.offsetTop - 100) && (window.innerWidth >= 700)) {
                self.menuIcon.style.display = "none";
                self.mainMenu.classList.add("main-nav--side-menu");
            } else {
                self.menuIcon.style.display = "";
                self.mainMenu.classList.remove("main-nav--side-menu");
            }
        });
        // alert(this.aboutSection.offsetTop);
    }

    showSideMenu() {

    }
}

export default SideMenu;