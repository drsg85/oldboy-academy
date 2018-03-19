

class Slider {
    constructor(sliderID, createNavigation) {
        // default values
        let _createNav = createNavigation || false;

        // connecting slider
        this.slider = document.getElementById(sliderID);
        if (!this.slider) {
            throw new Error("There is no id: " + sliderID + " in document");
        }

        // connecting slides
        let maxHeight = 0;
        // console.log(this.slider.children);
        this.slides = [];
        for (let i = 0; i < this.slider.children.length; i++) {
            this.slides.push(this.slider.children[i]);
            if (this.slider.children[i].offsetHeight > maxHeight) {
                maxHeight = this.slider.children[i].offsetHeight;
            }
        }
        // console.log(this.slides);
        if (!this.slides.length) {
            throw new Error("There is no slides in slider: " + sliderID);
        }

        // setting slider height
        this.slider.style.height = maxHeight + "px";

        // creating slider navigation
        this.dots = [];
        let self = this;
        if (_createNav) {
            // dots
            this.navigation = document.createElement("div");
            this.navigation.className = "slider__navigation";
            this.slider.insertBefore(this.navigation, this.slider.firstChild);
            for (let i = 0; i < this.slides.length; i++) {
                let dot = document.createElement("div");
                dot.className = "slider__dot";
                dot.index = i;
                dot.addEventListener("click", function() {
                    self.currentSlide = this.index;
                });
                this.dots.push(dot);
                this.navigation.appendChild(dot);
            }

            // prev button
            this.prev = document.createElement("div");
            this.prev.className = "slider__prev";
            this.slider.insertBefore(this.prev, this.slider.firstChild);
            
            // next button
            this.next = document.createElement("div");
            this.next.className = "slider__next";
            this.slider.insertBefore(this.next, this.slider.firstChild);
        }

        // setting current slide
        this.__currentSlide = 0;
        this.currentSlide = 0;

        this.events();
    }
    
    set currentSlide(num) {
        let maxSlideNum = this.slides.length - 1;
        if (num > maxSlideNum) {
            num = 0;
        }
        if (num < 0) {
            num = maxSlideNum;
        }
        this.__currentSlide = num;

        for (let i = 0; i <= maxSlideNum; i++) {
            if (i === this.__currentSlide) {
                this.slides[i].classList.add("slider__slide--current");
                this.dots[i].classList.add("slider__dot--active");
            } else {
                this.slides[i].classList.remove("slider__slide--current");
                this.dots[i].classList.remove("slider__dot--active");
            }
        }
    }

    get currentSlide () {
        return this.__currentSlide;
    }
    
    events() {
        this.next.addEventListener("click", () => {
            this.currentSlide++;
        });

        this.prev.addEventListener("click", () => {
            this.currentSlide--;
        });
    }
}

export default Slider;