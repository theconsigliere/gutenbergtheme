"use strict";var imageSections=document.querySelectorAll(".image-sections__js");if(matchMedia){var mq=window.matchMedia("(max-width: 992px)");mq.addListener(WidthChange),WidthChange(mq)}function WidthChange(e){e.matches?imageSections.forEach((function(e){e.children[0].classList.contains("image__item")&&e.classList.add("column-reverse")})):imageSections.forEach((function(e){e.children[0].classList.contains("image__item")&&e.classList.remove("column-reverse")}))}
//# sourceMappingURL=image-section-min.js.map