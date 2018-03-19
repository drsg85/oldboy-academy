
class Popup {
    constructor() {
        this.popup = document.querySelector(".popup");
        this.closeButton = document.querySelector(".popup__close");
        this.okButton = document.querySelector(".popup__controls a");

        this.events();
    }

    events() {
        this.closeButton.addEventListener("click", () => {
            this.close();
        });

        this.okButton.addEventListener("click", () => {
            this.close();
        });
    }

    close() {
        this.popup.classList.remove("popup--show");
    }
}

export default Popup;