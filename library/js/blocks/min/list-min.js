"use strict";!function(t){var e=function(e){var i=t(e).find(".list__item");if(console.log(i),i){var s=function(t){var e=t.target.closest(".list__item"),i=e.querySelector(".list__item_desc");i.offsetHeight>0?i.style.height="0px":i.style.height="".concat(i.scrollHeight,"px");var s=e.querySelector(".list__item_title").querySelector(".list__item_span");s.children[0].classList.toggle("js_list__left"),s.children[1].classList.toggle("js_list__right")};i.each((function(){t(this).on("click",s)}))}};t(document).ready((function(){t(".list-section").each((function(){e(t(this))}))})),window.acf&&window.acf.addAction("render_block_preview/type=list-section",e)}(jQuery);
//# sourceMappingURL=list-min.js.map