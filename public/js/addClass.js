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
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/addClass.js":
/*!**********************************!*\
  !*** ./resources/js/addClass.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var mark = document.querySelector('.header');

function menu_mark(mark) {
  document.querySelector('.mark_01').addEventListener('click', function () {
    localStorage.setItem('mark', '.mark_01');
  });
  document.querySelector('.mark_03').addEventListener('click', function () {
    localStorage.setItem('mark', '.mark_03');
  });
  document.querySelector('.mark_04').addEventListener('click', function () {
    localStorage.setItem('mark', '.mark_04');
  });
}

menu_mark(mark);
var mark_1 = document.querySelector('.menu-lateral');

function lateral_menu_mark(mark_1) {
  document.querySelector('.mark_05').addEventListener('click', function () {
    localStorage.setItem('mark', '.mark_05');
  });
  document.querySelector('.mark_06').addEventListener('click', function () {
    localStorage.setItem('mark', '.mark_06');
  });
  document.querySelector('.mark_07').addEventListener('click', function () {
    localStorage.setItem('mark', '.mark_07');
  });
  document.querySelector('.mark_08').addEventListener('click', function () {
    localStorage.setItem('mark', '.mark_08');
  });
  document.querySelector('.mark_09').addEventListener('click', function () {
    localStorage.setItem('mark', '.mark_09');
  });
  document.querySelector('.mark_10').addEventListener('click', function () {
    localStorage.setItem('mark', '.mark_01');
  });
}

lateral_menu_mark(mark_1);
var markClass = localStorage.getItem('mark');

if (markClass == '.mark_03' || markClass == '.mark_04') {
  document.querySelector(markClass).classList.add('clickMark');
  document.querySelector('.mark_02').classList.add('clickMark');
} else {
  document.querySelector(markClass).classList.add('clickMark');
}

/***/ }),

/***/ 3:
/*!****************************************!*\
  !*** multi ./resources/js/addClass.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /var/www/Ed-List/resources/js/addClass.js */"./resources/js/addClass.js");


/***/ })

/******/ });