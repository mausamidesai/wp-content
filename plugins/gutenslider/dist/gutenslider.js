!function(t){function e(i){if(n[i])return n[i].exports;var o=n[i]={i:i,l:!1,exports:{}};return t[i].call(o.exports,o,o.exports,e),o.l=!0,o.exports}var n={};e.m=t,e.c=n,e.d=function(t,n,i){e.o(t,n)||Object.defineProperty(t,n,{configurable:!1,enumerable:!0,get:i})},e.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,"a",n),n},e.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},e.p="",e(e.s=478)}({478:function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=n(479),o=n.n(i),r="function"===typeof Symbol&&"symbol"===typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"===typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t};window.NodeList&&!NodeList.prototype.forEach&&(NodeList.prototype.forEach=Array.prototype.forEach),Object.defineProperty(HTMLMediaElement.prototype,"playing",{get:function(){return!!(this.currentTime>0&&!this.paused&&!this.ended&&this.readyState>2)}});var s=function(){document.querySelectorAll(".eedee-background-div video").forEach(function(t){t.playing||t.play()})};(document.body.addEventListener("click",s),document.body.addEventListener("touchstart",s),document.querySelectorAll(".wp-block-eedee-block-gutenslider").forEach(function(t){var e=t.querySelectorAll(".slick-slider"),n=jQuery(t).find(".eedee-gutenslider-prev")[0],i=jQuery(t).find(".eedee-gutenslider-next")[0];jQuery(e).slick({slide:".wp-block-eedee-block-gutenslide",prevArrow:n,nextArrow:i}),jQuery(e).on("beforeChange",function(){jQuery(e).css("background-image","url( '' )")}),jQuery(n).on("click",function(){jQuery(e).slick("slickPrev")}),jQuery(i).on("click",function(){jQuery(e).slick("slickNext")})}),void 0!==("undefined"===typeof o.a?"undefined":r(o.a)))&&document.querySelectorAll(".wp-block-eedee-block-gutenslider.has-parallax").forEach(function(t){var e=t.dataset.parallaxDirection||"top",n=t.dataset.parallaxAmount||1.3,i=t.querySelectorAll(".eedee-background-div img");new o.a(i,{scale:n,orientation:e})})},479:function(t,e,n){!function(e,n){t.exports=n()}(window,function(){return function(t){function e(i){if(n[i])return n[i].exports;var o=n[i]={i:i,l:!1,exports:{}};return t[i].call(o.exports,o,o.exports,e),o.l=!0,o.exports}var n={};return e.m=t,e.c=n,e.d=function(t,n,i){e.o(t,n)||Object.defineProperty(t,n,{enumerable:!0,get:i})},e.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},e.t=function(t,n){if(1&n&&(t=e(t)),8&n)return t;if(4&n&&"object"==typeof t&&t&&t.__esModule)return t;var i=Object.create(null);if(e.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:t}),2&n&&"string"!=typeof t)for(var o in t)e.d(i,o,function(e){return t[e]}.bind(null,o));return i},e.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,"a",n),n},e.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},e.p="",e(e.s=0)}([function(t,e,n){"use strict";function i(t,e){for(var n=0;n<e.length;n++){var i=e[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}function o(t){return function(t){if(Array.isArray(t))return r(t)}(t)||function(t){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(t))return Array.from(t)}(t)||function(t,e){if(t){if("string"==typeof t)return r(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?r(t,e):void 0}}(t)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function r(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,i=new Array(e);n<e;n++)i[n]=t[n];return i}function s(t,e){for(var n=0;n<e.length;n++){var i=e[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}function a(t){return function(t){if(Array.isArray(t))return c(t)}(t)||function(t){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(t))return Array.from(t)}(t)||u(t)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function l(t,e){return function(t){if(Array.isArray(t))return t}(t)||function(t,e){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(t)){var n=[],i=!0,o=!1,r=void 0;try{for(var s,a=t[Symbol.iterator]();!(i=(s=a.next()).done)&&(n.push(s.value),!e||n.length!==e);i=!0);}catch(t){o=!0,r=t}finally{try{i||null==a.return||a.return()}finally{if(o)throw r}}return n}}(t,e)||u(t,e)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function u(t,e){if(t){if("string"==typeof t)return c(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?c(t,e):void 0}}function c(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,i=new Array(e);n<e;n++)i[n]=t[n];return i}function h(t,e){for(var n=0;n<e.length;n++){var i=e[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}n.r(e),n.d(e,"default",function(){return S});var f,p,m=function(){return Element.prototype.closest&&"IntersectionObserver"in window},d=new(function(){function t(){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),this.positions={top:0,bottom:0,height:0}}var e,n;return e=t,(n=[{key:"setViewportTop",value:function(t){return this.positions.top=t?t.scrollTop:window.pageYOffset,this.positions}},{key:"setViewportBottom",value:function(){return this.positions.bottom=this.positions.top+this.positions.height,this.positions}},{key:"setViewportAll",value:function(t){return this.positions.top=t?t.scrollTop:window.pageYOffset,this.positions.height=t?t.clientHeight:document.documentElement.clientHeight,this.positions.bottom=this.positions.top+this.positions.height,this.positions}}])&&i(e.prototype,n),t}()),y=function(t){return NodeList.prototype.isPrototypeOf(t)||HTMLCollection.prototype.isPrototypeOf(t)?Array.from(t):"string"==typeof t||t instanceof String?document.querySelectorAll(t):[t]},v=function(){for(var t,e="transform webkitTransform mozTransform oTransform msTransform".split(" "),n=0;void 0===t;)t=void 0!==document.createElement("div").style[e[n]]?e[n]:void 0,n+=1;return t}(),g=function(t){return"img"!==t.tagName.toLowerCase()&&"picture"!==t.tagName.toLowerCase()||!!t&&!!t.complete&&(void 0===t.naturalWidth||0!==t.naturalWidth)},b=function(){function t(e,n){var i=this;!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),this.element=e,this.elementContainer=e,this.settings=n,this.isVisible=!0,this.isInit=!1,this.oldTranslateValue=-1,this.init=this.init.bind(this),this.customWrapper=this.settings.customWrapper&&this.element.closest(this.settings.customWrapper)?this.element.closest(this.settings.customWrapper):null,g(e)?this.init():this.element.addEventListener("load",function(){setTimeout(function(){i.init(!0)},50)})}var e,n;return e=t,(n=[{key:"init",value:function(t){var e=this;this.isInit||(t&&(this.rangeMax=null),this.element.closest(".simpleParallax")||(!1===this.settings.overflow&&this.wrapElement(this.element),this.setTransformCSS(),this.getElementOffset(),this.intersectionObserver(),this.getTranslateValue(),this.animate(),this.settings.delay>0?setTimeout(function(){e.setTransitionCSS(),e.elementContainer.classList.add("simple-parallax-initialized")},10):this.elementContainer.classList.add("simple-parallax-initialized"),this.isInit=!0))}},{key:"wrapElement",value:function(){var t=this.element.closest("picture")||this.element,e=this.customWrapper||document.createElement("div");e.classList.add("simpleParallax"),e.style.overflow="hidden",this.customWrapper||(t.parentNode.insertBefore(e,t),e.appendChild(t)),this.elementContainer=e}},{key:"unWrapElement",value:function(){var t=this.elementContainer;this.customWrapper?(t.classList.remove("simpleParallax"),t.style.overflow=""):t.replaceWith.apply(t,o(t.childNodes))}},{key:"setTransformCSS",value:function(){!1===this.settings.overflow&&(this.element.style[v]="scale(".concat(this.settings.scale,")")),this.element.style.willChange="transform"}},{key:"setTransitionCSS",value:function(){this.element.style.transition="transform ".concat(this.settings.delay,"s ").concat(this.settings.transition)}},{key:"unSetStyle",value:function(){this.element.style.willChange="",this.element.style[v]="",this.element.style.transition=""}},{key:"getElementOffset",value:function(){var t=this.elementContainer.getBoundingClientRect();if(this.elementHeight=t.height,this.elementTop=t.top+d.positions.top,this.settings.customContainer){var e=this.settings.customContainer.getBoundingClientRect();this.elementTop=t.top-e.top+d.positions.top}this.elementBottom=this.elementHeight+this.elementTop}},{key:"buildThresholdList",value:function(){for(var t=[],e=1;e<=this.elementHeight;e++){var n=e/this.elementHeight;t.push(n)}return t}},{key:"intersectionObserver",value:function(){var t={root:null,threshold:this.buildThresholdList()};this.observer=new IntersectionObserver(this.intersectionObserverCallback.bind(this),t),this.observer.observe(this.element)}},{key:"intersectionObserverCallback",value:function(t){var e=this;t.forEach(function(t){t.isIntersecting?e.isVisible=!0:e.isVisible=!1})}},{key:"checkIfVisible",value:function(){return this.elementBottom>d.positions.top&&this.elementTop<d.positions.bottom}},{key:"getRangeMax",value:function(){var t=this.element.clientHeight;this.rangeMax=t*this.settings.scale-t}},{key:"getTranslateValue",value:function(){var t=((d.positions.bottom-this.elementTop)/((d.positions.height+this.elementHeight)/100)).toFixed(1);return t=Math.min(100,Math.max(0,t)),0!==this.settings.maxTransition&&t>this.settings.maxTransition&&(t=this.settings.maxTransition),this.oldPercentage!==t&&(this.rangeMax||this.getRangeMax(),this.translateValue=(t/100*this.rangeMax-this.rangeMax/2).toFixed(0),this.oldTranslateValue!==this.translateValue&&(this.oldPercentage=t,this.oldTranslateValue=this.translateValue,!0))}},{key:"animate",value:function(){var t,e=0,n=0;(this.settings.orientation.includes("left")||this.settings.orientation.includes("right"))&&(n="".concat(this.settings.orientation.includes("left")?-1*this.translateValue:this.translateValue,"px")),(this.settings.orientation.includes("up")||this.settings.orientation.includes("down"))&&(e="".concat(this.settings.orientation.includes("up")?-1*this.translateValue:this.translateValue,"px")),t=!1===this.settings.overflow?"translate3d(".concat(n,", ").concat(e,", 0) scale(").concat(this.settings.scale,")"):"translate3d(".concat(n,", ").concat(e,", 0)"),this.element.style[v]=t}}])&&s(e.prototype,n),t}(),w=!1,k=[],S=function(){function t(e,n){if(function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),e&&m()){if(this.elements=y(e),this.defaults={delay:0,orientation:"up",scale:1.3,overflow:!1,transition:"cubic-bezier(0,0,0,1)",customContainer:"",customWrapper:"",maxTransition:0},this.settings=Object.assign(this.defaults,n),this.settings.customContainer){var i=l(y(this.settings.customContainer),1);this.customContainer=i[0]}this.lastPosition=-1,this.resizeIsDone=this.resizeIsDone.bind(this),this.refresh=this.refresh.bind(this),this.proceedRequestAnimationFrame=this.proceedRequestAnimationFrame.bind(this),this.init()}}var e,n;return e=t,(n=[{key:"init",value:function(){var t=this;d.setViewportAll(this.customContainer),k=[].concat(a(this.elements.map(function(e){return new b(e,t.settings)})),a(k)),w||(this.proceedRequestAnimationFrame(),window.addEventListener("resize",this.resizeIsDone),w=!0)}},{key:"resizeIsDone",value:function(){clearTimeout(p),p=setTimeout(this.refresh,200)}},{key:"proceedRequestAnimationFrame",value:function(){var t=this;d.setViewportTop(this.customContainer),this.lastPosition!==d.positions.top?(d.setViewportBottom(),k.forEach(function(e){t.proceedElement(e)}),f=window.requestAnimationFrame(this.proceedRequestAnimationFrame),this.lastPosition=d.positions.top):f=window.requestAnimationFrame(this.proceedRequestAnimationFrame)}},{key:"proceedElement",value:function(t){(this.customContainer?t.checkIfVisible():t.isVisible)&&t.getTranslateValue()&&t.animate()}},{key:"refresh",value:function(){d.setViewportAll(this.customContainer),k.forEach(function(t){t.getElementOffset(),t.getRangeMax()}),this.lastPosition=-1}},{key:"destroy",value:function(){var t=this,e=[];k=k.filter(function(n){return t.elements.includes(n.element)?(e.push(n),!1):n}),e.forEach(function(e){e.unSetStyle(),!1===t.settings.overflow&&e.unWrapElement()}),k.length||(window.cancelAnimationFrame(f),window.removeEventListener("resize",this.refresh),w=!1)}}])&&h(e.prototype,n),t}()}]).default})}});