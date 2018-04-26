class CourseForm {
    constructor() {
        this.popup = document.querySelector(".popup");
        this.events();
    }
    
    events() {
        document.addEventListener("submit", event => {
            event.preventDefault();

            if (this.validate(event.target)) {
                this.sendForm(event.target);
            }
        });
        
        this.popup.addEventListener("click", event => {
            if (event.target == this.popup.querySelector(".popup__accept") ||
            event.target == this.popup.querySelector(".popup__close")) {
                this.popup.classList.remove("popup--show");
            }
        });
    }
    
    validate(form) {
        let inputs = form.querySelectorAll(".course-form__input");
        let isFormValid = true;

        for (let input of inputs) {
            let isValid = true;
            if (input.value === "") {
                isValid = false;
                isFormValid = false;
            }

            // More things to check

            if (!isValid) {
                let errorLabel = document.createElement("div");
                errorLabel.classList.add("course-form__error");
                errorLabel.innerHTML = "Проверьте&nbsp;правильность<br>заполнения&nbsp;поля";
                input.parentElement.appendChild(errorLabel);
            }
        }

        return isFormValid;
    }

    sendForm(form) {
        let inputs = form.querySelectorAll(".course-form__input");

        let dataToSend = {
            content: "<table>"
        };
        for (let input of inputs) {
            let row = `<tr><td>${input.name}</td><td>${input.value}</td></tr>`;
            dataToSend.content += row;
        }
        dataToSend.content += "</table>";
        dataToSend.email = form.querySelector("input[type='email']").value;


        let XHR = new XMLHttpRequest();
        let jsonData = JSON.stringify(dataToSend);
        XHR.addEventListener("load", event => {
            console.log(event.target.responseText);
            this.popup.classList.add("popup--show");
        });
        // XHR.open("POST", `${window.location.origin}/order`, true);
        XHR.open("POST", "http://localhost/OldboyAcademy/order", true);
        XHR.send(jsonData);
    }
}

export default CourseForm;