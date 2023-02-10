/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/app.js":
/*!***********************!*\
  !*** ./src/js/app.js ***!
  \***********************/
/***/ (() => {

// Get the container element
var btn = document.querySelector('button.mobile-menu-button');
var menu = document.querySelector('.mobile-menu');
btn.addEventListener('click', function () {
  menu.classList.toggle('hidden');
});

/***/ }),

/***/ "./src/css/app.css":
/*!*************************!*\
  !*** ./src/css/app.css ***!
  \*************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/postcss-loader/dist/cjs.js):\nReferenceError: mix is not defined\n    at Object.<anonymous> (C:\\BE-Pemira-KM-ITERA-2022\\tailwind.config.js:61:1)\n    at Module._compile (internal/modules/cjs/loader.js:1072:14)\n    at Object.Module._extensions..js (internal/modules/cjs/loader.js:1101:10)\n    at Module.load (internal/modules/cjs/loader.js:937:32)\n    at Function.Module._load (internal/modules/cjs/loader.js:778:12)\n    at Module.require (internal/modules/cjs/loader.js:961:19)\n    at require (internal/modules/cjs/helpers.js:92:18)\n    at getTailwindConfig (C:\\BE-Pemira-KM-ITERA-2022\\node_modules\\tailwindcss\\lib\\lib\\setupTrackingContext.js:67:53)\n    at C:\\BE-Pemira-KM-ITERA-2022\\node_modules\\tailwindcss\\lib\\lib\\setupTrackingContext.js:96:92\n    at C:\\BE-Pemira-KM-ITERA-2022\\node_modules\\tailwindcss\\lib\\processTailwindFeatures.js:46:11\n    at processResult (C:\\BE-Pemira-KM-ITERA-2022\\node_modules\\webpack\\lib\\NormalModule.js:758:19)\n    at C:\\BE-Pemira-KM-ITERA-2022\\node_modules\\webpack\\lib\\NormalModule.js:860:5\n    at C:\\BE-Pemira-KM-ITERA-2022\\node_modules\\loader-runner\\lib\\LoaderRunner.js:400:11\n    at C:\\BE-Pemira-KM-ITERA-2022\\node_modules\\loader-runner\\lib\\LoaderRunner.js:252:18\n    at context.callback (C:\\BE-Pemira-KM-ITERA-2022\\node_modules\\loader-runner\\lib\\LoaderRunner.js:124:13)\n    at Object.loader (C:\\BE-Pemira-KM-ITERA-2022\\node_modules\\postcss-loader\\dist\\index.js:142:7)");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	__webpack_modules__["./src/js/app.js"]();
/******/ 	// This entry module doesn't tell about it's top-level declarations so it can't be inlined
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/css/app.css"]();
/******/ 	
/******/ })()
;