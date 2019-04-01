"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

!function (e) {
  var t = {};

  function n(o) {
    if (t[o]) return t[o].exports;
    var r = t[o] = {
      i: o,
      l: !1,
      exports: {}
    };
    return e[o].call(r.exports, r, r.exports, n), r.l = !0, r.exports;
  }

  n.m = e, n.c = t, n.d = function (e, t, o) {
    n.o(e, t) || Object.defineProperty(e, t, {
      enumerable: !0,
      get: o
    });
  }, n.r = function (e) {
    "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
      value: "Module"
    }), Object.defineProperty(e, "__esModule", {
      value: !0
    });
  }, n.t = function (e, t) {
    if (1 & t && (e = n(e)), 8 & t) return e;
    if (4 & t && "object" == _typeof(e) && e && e.__esModule) return e;
    var o = Object.create(null);
    if (n.r(o), Object.defineProperty(o, "default", {
      enumerable: !0,
      value: e
    }), 2 & t && "string" != typeof e) for (var r in e) {
      n.d(o, r, function (t) {
        return e[t];
      }.bind(null, r));
    }
    return o;
  }, n.n = function (e) {
    var t = e && e.__esModule ? function () {
      return e.default;
    } : function () {
      return e;
    };
    return n.d(t, "a", t), t;
  }, n.o = function (e, t) {
    return Object.prototype.hasOwnProperty.call(e, t);
  }, n.p = "", n(n.s = 6);
}([function (e, t, n) {
  "use strict";

  t.a =
  /*#__PURE__*/
  function () {
    function _class() {
      _classCallCheck(this, _class);

      this.mainNav = document.querySelector(".main-nav"), this.menuIcon = document.querySelector(".menu-icon"), this.events();
    }

    _createClass(_class, [{
      key: "events",
      value: function events() {
        var _this = this;

        this.menuIcon.addEventListener("click", function () {
          _this.toggleMenu();
        }), this.mainNav.addEventListener("click", function (e) {
          "main-nav__link" == e.target.className && _this.toggleMenu();
        });
      }
    }, {
      key: "toggleMenu",
      value: function toggleMenu() {
        this.mainNav.classList.toggle("main-nav--shown"), this.menuIcon.classList.toggle("menu-icon--close-x");
      }
    }]);

    return _class;
  }();
}, function (e, t, n) {
  "use strict";

  t.a =
  /*#__PURE__*/
  function () {
    function _class2() {
      _classCallCheck(this, _class2);

      this.popup = document.querySelector(".popup"), this.events();
    }

    _createClass(_class2, [{
      key: "events",
      value: function events() {
        var _this2 = this;

        document.addEventListener("submit", function (e) {
          e.preventDefault(), _this2.validate(e.target) && _this2.sendForm(e.target);
        }), this.popup.addEventListener("click", function (e) {
          e.target != _this2.popup.querySelector(".popup__accept") && e.target != _this2.popup.querySelector(".popup__close") || _this2.popup.classList.remove("popup--show");
        });
      }
    }, {
      key: "validate",
      value: function validate(e) {
        var t = e.querySelectorAll(".hero-form__input"),
            n = !0;
        var _iteratorNormalCompletion = true;
        var _didIteratorError = false;
        var _iteratorError = undefined;

        try {
          for (var _iterator = t[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
            var _e = _step.value;

            var _t = !0;

            if ("" === _e.value && (_t = !1, n = !1), !_t) {
              var _t2 = document.createElement("div");

              _t2.classList.add("hero-form__error"), _t2.innerHTML = "Проверьте&nbsp;правильность<br>заполнения&nbsp;поля", _e.parentElement.appendChild(_t2);
            }
          }
        } catch (err) {
          _didIteratorError = true;
          _iteratorError = err;
        } finally {
          try {
            if (!_iteratorNormalCompletion && _iterator.return != null) {
              _iterator.return();
            }
          } finally {
            if (_didIteratorError) {
              throw _iteratorError;
            }
          }
        }

        return n;
      }
    }, {
      key: "sendForm",
      value: function sendForm(e) {
        var _this3 = this;

        var t = e.querySelectorAll(".hero-form__input"),
            n = {
          content: "<table>"
        };
        var _iteratorNormalCompletion2 = true;
        var _didIteratorError2 = false;
        var _iteratorError2 = undefined;

        try {
          for (var _iterator2 = t[Symbol.iterator](), _step2; !(_iteratorNormalCompletion2 = (_step2 = _iterator2.next()).done); _iteratorNormalCompletion2 = true) {
            var _e2 = _step2.value;

            var _t3 = "<tr><td>".concat(_e2.name, "</td><td>").concat(_e2.value, "</td></tr>");

            n.content += _t3;
          }
        } catch (err) {
          _didIteratorError2 = true;
          _iteratorError2 = err;
        } finally {
          try {
            if (!_iteratorNormalCompletion2 && _iterator2.return != null) {
              _iterator2.return();
            }
          } finally {
            if (_didIteratorError2) {
              throw _iteratorError2;
            }
          }
        }

        n.content += "</table>", n.email = e.querySelector("input[type='email']").value;
        var o = new XMLHttpRequest(),
            r = JSON.stringify(n);
        o.addEventListener("load", function (e) {
          console.log(e.target.responseText), _this3.popup.classList.add("popup--show");
        }), o.open("POST", "".concat(window.location.origin, "/order"), !0), o.send(r);
      }
    }]);

    return _class2;
  }();
},,,,, function (e, t, n) {
  "use strict";

  n.r(t);
  var o = n(0),
      r = n(1);

  var i =
  /*#__PURE__*/
  function () {
    function i() {
      _classCallCheck(this, i);

      this.events();
    }

    _createClass(i, [{
      key: "events",
      value: function events() {
        setTimeout("document.getElementById('overlay').style.display='block'", 1e3);
      }
    }]);

    return i;
  }();

  new o.a(), new r.a(), new i();
}]);