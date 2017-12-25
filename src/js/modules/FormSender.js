
class FormSender {
    constructor() {
        this.popup = document.querySelector(".popup");
        this.events();
    }

    events() {
        let self = this;
        document.addEventListener("submit", function(event) {
            event.preventDefault();
            
            self.popup.classList.add("popup--show");
        })
    }
}

export default FormSender;