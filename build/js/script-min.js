!function(e){"use strict";function t(e){return e&&"object"==typeof e&&"default"in e?e:{default:e}}var n=t(jQuery);window.$=window.jQuery=n.default;let o=document.getElementById("stars");window.addEventListener("scroll",(function(){let e=window.scrollY;o.style.left=.25*e+"px"}));var i=e=>`${e.charAt(0).toLowerCase()}${e.replace(/[\W_]/g,"|").split("|").map((e=>`${e.charAt(0).toUpperCase()}${e.slice(1)}`)).join("").slice(1)}`;var s={init(){const e=$(".menu-button"),t=$(".site-nav");e.on("click",(function(){t.toggleClass("revealed")})),document.onkeydown=function(e){27==(e=e||window.event).keyCode&&t.removeClass("revealed")},t.find(".menu-item-has-children > button").each((function(){$(this).on("click",(function(e){e.preventDefault(),$(this).parent(".menu-item-has-children").toggleClass("sub-menu-open")}))}))},finalize(){}};const r=new class{constructor(e){this.routes=e}fire(e,t="init",n){""!==e&&this.routes[e]&&"function"==typeof this.routes[e][t]&&this.routes[e][t](n)}loadEvents(){this.fire("common"),document.body.className.toLowerCase().replace(/-/g,"_").split(/\s+/).map(i).forEach((e=>{this.fire(e),this.fire(e,"finalize")})),this.fire("common","finalize")}}({common:s});jQuery(document).ready((()=>r.loadEvents()))}();
//# sourceMappingURL=script-min.js.map