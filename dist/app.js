/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Slider = function () {
    function Slider(sliderID, createNavigation) {
        _classCallCheck(this, Slider);

        // default values
        var _createNav = createNavigation || false;

        // connecting slider
        this.slider = document.getElementById(sliderID);
        if (!this.slider) {
            throw new Error("There is no id: " + sliderID + " in document");
        }

        // connecting slides
        var maxHeight = 0;
        // console.log(this.slider.children);
        this.slides = [];
        for (var i = 0; i < this.slider.children.length; i++) {
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
        var self = this;
        if (_createNav) {
            // dots
            this.navigation = document.createElement("div");
            this.navigation.className = "slider__navigation";
            this.slider.insertBefore(this.navigation, this.slider.firstChild);
            for (var _i = 0; _i < this.slides.length; _i++) {
                var dot = document.createElement("div");
                dot.className = "slider__dot";
                dot.index = _i;
                dot.addEventListener("click", function () {
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

    _createClass(Slider, [{
        key: "events",
        value: function events() {
            var _this = this;

            this.next.addEventListener("click", function () {
                _this.currentSlide++;
            });

            this.prev.addEventListener("click", function () {
                _this.currentSlide--;
            });
        }
    }, {
        key: "currentSlide",
        set: function set(num) {
            var maxSlideNum = this.slides.length - 1;
            if (num > maxSlideNum) {
                num = 0;
            }
            if (num < 0) {
                num = maxSlideNum;
            }
            this.__currentSlide = num;

            for (var i = 0; i <= maxSlideNum; i++) {
                if (i === this.__currentSlide) {
                    this.slides[i].classList.add("slider__slide--current");
                    this.dots[i].classList.add("slider__dot--active");
                } else {
                    this.slides[i].classList.remove("slider__slide--current");
                    this.dots[i].classList.remove("slider__dot--active");
                }
            }
        },
        get: function get() {
            return this.__currentSlide;
        }
    }]);

    return Slider;
}();

exports.default = Slider;

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var SideMenu = function () {
    function SideMenu() {
        _classCallCheck(this, SideMenu);

        this.aboutSection = document.querySelector(".about");
        this.menuIcon = document.querySelector(".menu-icon");
        this.mainMenu = document.querySelector(".main-nav");

        // aside
        this.heroAside = document.querySelector(".hero-aside");

        this.events();
    }

    _createClass(SideMenu, [{
        key: "events",
        value: function events() {
            var self = this;
            window.addEventListener("scroll", function () {
                // if ((document.documentElement.scrollTop > self.aboutSection.offsetTop - 200) && (window.innerWidth >= 700)) {
                if (window.pageYOffset > self.aboutSection.offsetTop - 200 && window.innerWidth >= 700) {
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
    }]);

    return SideMenu;
}();

exports.default = SideMenu;

/***/ }),
/* 2 */,
/* 3 */,
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _Slider = __webpack_require__(0);

var _Slider2 = _interopRequireDefault(_Slider);

var _SideMenu = __webpack_require__(1);

var _SideMenu2 = _interopRequireDefault(_SideMenu);

var _FormSender = __webpack_require__(5);

var _FormSender2 = _interopRequireDefault(_FormSender);

var _Popup = __webpack_require__(6);

var _Popup2 = _interopRequireDefault(_Popup);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var headerSlider = new _Slider2.default("header-slider", true);
var sideMenu = new _SideMenu2.default();
var formSender = new _FormSender2.default();
var popup = new _Popup2.default();

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var FormSender = function () {
    function FormSender() {
        _classCallCheck(this, FormSender);

        this.popup = document.querySelector(".popup");
        this.events();
    }

    _createClass(FormSender, [{
        key: "events",
        value: function events() {
            var self = this;
            document.addEventListener("submit", function (event) {
                event.preventDefault();

                self.popup.classList.add("popup--show");
            });
        }
    }]);

    return FormSender;
}();

exports.default = FormSender;

/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Popup = function () {
    function Popup() {
        _classCallCheck(this, Popup);

        this.popup = document.querySelector(".popup");
        this.closeButton = document.querySelector(".popup__close");
        this.okButton = document.querySelector(".popup__controls a");

        this.events();
    }

    _createClass(Popup, [{
        key: "events",
        value: function events() {
            var _this = this;

            this.closeButton.addEventListener("click", function () {
                _this.close();
            });

            this.okButton.addEventListener("click", function () {
                _this.close();
            });
        }
    }, {
        key: "close",
        value: function close() {
            this.popup.classList.remove("popup--show");
        }
    }]);

    return Popup;
}();

exports.default = Popup;

/***/ })
/******/ ]);