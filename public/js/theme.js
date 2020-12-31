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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/theme.js":
/*!*******************************!*\
  !*** ./resources/js/theme.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

var theme = document.getElementsByClassName('root');
var theme_bar = document.getElementsByClassName('header');
var theme_camp = document.getElementsByClassName('div-form');
var theme_color_font = document.getElementsByClassName('font');
themes(theme, theme_bar, theme_camp, theme_color_font);

function themes(theme, theme_bar, theme_camp, theme_color_font) {
  document.querySelector('.mode_dark').addEventListener('click', function () {
    if (localStorage.getItem('theme')) {
      localStorage.removeItem('theme');

      for (var i = 0, len = theme.length; i < len; i++) {
        var array = theme[i];
        array.classList.remove('theme-dark');
        array.classList.add('theme-default');
      }

      for (var i = 0, len = theme_bar.length; i < len; i++) {
        var _array = theme_bar[i];

        _array.classList.remove('theme-dark-bar');

        _array.classList.add('theme-default-bar');
      }

      for (var i = 0, len = theme_camp.length; i < len; i++) {
        var _array2 = theme_camp[i];

        _array2.classList.remove('theme-dark-camp');

        _array2.classList.add('theme-default-camp');
      }

      for (var i = 0, len = theme_color_font.length; i < len; i++) {
        var _array3 = theme_color_font[i];

        _array3.classList.remove('theme-dark-color-font');

        _array3.classList.add('theme-defaul-color-font');
      }
    } else {
      localStorage.setItem('theme', '1');

      for (var i = 0, len = theme.length; i < len; i++) {
        var _array4 = theme[i];

        _array4.classList.remove('theme-default');

        _array4.classList.add('theme-dark');
      }

      for (var i = 0, len = theme_bar.length; i < len; i++) {
        var _array5 = theme_bar[i];

        _array5.classList.remove('theme-default-bar');

        _array5.classList.add('theme-dark-bar');
      }

      for (var i = 0, len = theme_camp.length; i < len; i++) {
        var _array6 = theme_camp[i];

        _array6.classList.remove('theme-default-camp');

        _array6.classList.add('theme-dark-camp');
      }

      for (var i = 0, len = theme_color_font.length; i < len; i++) {
        var _array7 = theme_color_font[i];

        _array7.classList.remove('theme-defaul-color-font');

        _array7.classList.add('theme-dark-color-font');
      }
    }
  });
}

/***/ }),

/***/ 1:
/*!*************************************!*\
  !*** multi ./resources/js/theme.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /var/www/Ed-List/resources/js/theme.js */"./resources/js/theme.js");


/***/ })

/******/ });