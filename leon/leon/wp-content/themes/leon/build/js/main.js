function splash(){var splashImage=document.getElementsByClassName("rf-splash__wrapper"),splashTitle=document.getElementsByClassName("rf-titles");if(splashImage.length>=1){splashImage.length;splashImage[0].classList.add("show"),splashTitle[0].classList.add("show"),splashCarousel()}}function splashCarousel(){var titleset=document.getElementsByClassName("rf-titles"),imageset=document.getElementsByClassName("rf-splash__wrapper");setInterval(function(){var a=document.querySelector(".rf-titles.show"),n=document.querySelector(".rf-titles.show + .rf-titles"),b=document.querySelector(".rf-splash__wrapper.show"),c=document.querySelector(".rf-splash__wrapper.show + .rf-splash__wrapper");if(!n||!c)var n=titleset[0],c=imageset[0];a.classList.remove("show"),n.classList.add("show"),b.classList.remove("show"),c.classList.add("show")},1500)}function menu(){var burger=document.querySelector(".rf-burger"),menu=document.querySelector(".rf-mobile__menu");burger.addEventListener("click",function(){this.classList.toggle("clicked"),menu.classList.toggle("clicked")})}function spec(){var techSpec=document.querySelector(".rf-single__tech-spec"),prodDesc=document.querySelector(".rf-single__prod-desc");techSpec&&(techSpec.addEventListener("click",function(){this.classList.toggle("clicked")}),prodDesc.addEventListener("click",function(){this.classList.toggle("clicked")}))}function devMode(){var url=window.location.href;console.log("is it dev mode?"),url.indexOf("devMode")>1?(console.log("yes"),console.log(document.querySelector(".rf-temporary")),document.querySelector(".rf-temporary").classList.add("none")):console.log("no")}function init(){menu(),splash(),spec(),devMode()}init();