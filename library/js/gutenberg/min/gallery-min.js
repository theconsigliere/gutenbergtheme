"use strict";function Gallery(e){if(!e)throw new Error("No Gallery Found!");var t,n=e.querySelector(".js-gallery"),r=Array.from(e.querySelectorAll("img")),i=e.querySelector(".gallery-modal"),o=i.querySelector(".prev"),c=i.querySelector(".next");function l(){i.classList.remove("open"),window.removeEventListener("keyup",u),c.removeEventListener("click",a),o.removeEventListener("click",d)}function u(e){return"Escape"===e.key?l():"ArrowRight"===e.key?a():"ArrowLeft"===e.key?d():void 0}function a(){s(t.nextElementSibling||n.firstElementChild)}function d(){s(t.previousElementSibling||n.lastElementChild)}function s(e){e&&(i.querySelector("img").src=e.src,i.querySelector("h2").textContent=e.title,i.querySelector("figure p").textContent=e.dataset.description,t=e,i.matches(".open")||(i.classList.add("open"),window.addEventListener("keyup",u),c.addEventListener("click",a),o.addEventListener("click",d)))}r.forEach((function(e){return e.addEventListener("click",(function(e){return s(e.currentTarget)}))})),r.forEach((function(e){e.addEventListener("keyup",(function(e){"Enter"===e.key&&s(e.currentTarget)}))})),i.addEventListener("click",(function(e){e.target===e.currentTarget&&l()}))}window.addEventListener("DOMContentLoaded",(function(){document.querySelectorAll(".gallery__section").forEach((function(e){Gallery(e)}))}));
//# sourceMappingURL=gallery-min.js.map