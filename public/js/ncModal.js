/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/ncModal.js ***!
  \*********************************/
/*
✔​ version : "0.0.1"
✔​ private : true
✔​ name    : "NCModal"
✔​ author  : "<Leat Sophat>"
✔​ date    : "14-08-2022"
*/
window.NCModal = function (optionControl) {
  var randomNumber = Math.ceil(Math.random() * 13579);
  var backDropID = "backDrop-" + randomNumber;

  function __create() {
    __applyUserOptions();

    __createBackDrop();
  }

  function __applyUserOptions() {
    var _optionControl$id, _optionControl$backDr, _optionControl$classN, _optionControl$animat, _optionControl$clickA, _optionControl$remove;

    ncOptions = {
      id: (_optionControl$id = optionControl === null || optionControl === void 0 ? void 0 : optionControl.id) !== null && _optionControl$id !== void 0 ? _optionControl$id : "ncModal",
      backDrop: (_optionControl$backDr = optionControl === null || optionControl === void 0 ? void 0 : optionControl.backDrop) !== null && _optionControl$backDr !== void 0 ? _optionControl$backDr : "bg-black/20 absolute top-0 bottom-0 w-full min-h-screen z-[998]",
      className: (_optionControl$classN = optionControl === null || optionControl === void 0 ? void 0 : optionControl.className) !== null && _optionControl$classN !== void 0 ? _optionControl$classN : null,
      animateIn: (_optionControl$animat = optionControl === null || optionControl === void 0 ? void 0 : optionControl.animateIn) !== null && _optionControl$animat !== void 0 ? _optionControl$animat : true,
      clickAway: (_optionControl$clickA = optionControl === null || optionControl === void 0 ? void 0 : optionControl.clickAway) !== null && _optionControl$clickA !== void 0 ? _optionControl$clickA : false,
      removeBTN: (_optionControl$remove = optionControl === null || optionControl === void 0 ? void 0 : optionControl.removeBTN) !== null && _optionControl$remove !== void 0 ? _optionControl$remove : "ncModalRemove"
    };
  }

  function __createBackDrop() {
    var backDrop = window.document.body;
    var backDropContainer = document.createElement('nc-backdrop-modal');
    backDropContainer.id = backDropID;
    backDropContainer.className = ncOptions.backDrop;
    backDrop.appendChild(backDropContainer);

    function __createModalCard() {
      if (typeof ncOptions.id !== "undefined") {
        var _ref;

        var modalId = document.getElementById(ncOptions.id);
        var clone = modalId.cloneNode(true);
        clone.removeAttribute('hidden');
        clone.id = "ncModal-" + randomNumber;
        clone.className = (_ref = "animate-fadeIn " + ncOptions.className) !== null && _ref !== void 0 ? _ref : modalId.children[0].className;
        var cloneTo = document.getElementById(backDropID);
        console.log(cloneTo);
        cloneTo.appendChild(clone);
      }
    }

    __createModalCard();

    function __removeModal() {
      if (typeof ncOptions.clickAway !== 'undefined') {
        if (ncOptions.clickAway == true) {
          var clickAway = document.getElementById(backDropID);
          clickAway.addEventListener('click', function () {
            backDropContainer.remove();
          });
        }

        if (ncOptions.clickAway == false) {
          var removeBTN = document.getElementsByClassName(ncOptions.removeBTN)[1];
          removeBTN.addEventListener('click', function () {
            backDropContainer.remove();
          });
        }
      }
    }

    __removeModal();
  }

  __create();
};
/******/ })()
;