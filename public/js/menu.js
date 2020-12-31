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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/menu.js":
/*!******************************!*\
  !*** ./resources/js/menu.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

var atividade = document.querySelector('.subMenu');
menu(atividade);

function menu(atividade) {
  document.querySelector('.button').addEventListener('click', function () {
    atividade.classList.toggle('mostrar');
  });
  document.querySelector('.content').addEventListener('click', function () {
    atividade.classList.remove('mostrar');
  });
  document.querySelector('.menu-lateral').addEventListener('click', function () {
    atividade.classList.remove('mostrar');
  });
}

var menuL = document.querySelector('.menu-lateral');
menuLA(menuL);

function menuLA(menuL) {
  document.querySelector('.menu').addEventListener('click', function () {
    menuL.classList.toggle('mostrar-menu');
  });
}

var theme_defaul_menu = document.querySelector('.menu-lateral');
var theme_defaul_cont = document.querySelector('.content');
theme_menu(theme_defaul_menu, theme_defaul_cont);

function theme_menu(theme_defaul_menu, theme_defaul_cont) {
  document.querySelector('.mode_dark').addEventListener('click', function () {
    if (localStorage.getItem('theme')) {
      theme_defaul_menu.classList.remove('theme-dark-menu');
      theme_defaul_menu.classList.add('theme-defaul-menu');
      theme_defaul_cont.classList.remove('theme-dark');
      theme_defaul_cont.classList.add('theme-default');
    } else {
      theme_defaul_menu.classList.remove('theme-defaul-menu');
      theme_defaul_menu.classList.add('theme-dark-menu');
      theme_defaul_cont.classList.remove('theme-default');
      theme_defaul_cont.classList.add('theme-dark');
    }
  });
}

if (localStorage.getItem('theme')) {
  theme_defaul_menu.classList.add('theme-dark-menu');
} else {
  theme_defaul_menu.classList.add('theme-defaul-menu');
}

/***/ }),

/***/ 0:
/*!************************************!*\
  !*** multi ./resources/js/menu.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /var/www/Ed-List/resources/js/menu.js */"./resources/js/menu.js");


/***/ })

/******/ });