function elementInViewport(el) {
  var top = el.offsetTop;
  var left = el.offsetLeft;
  var width = el.offsetWidth;
  var height = el.offsetHeight;

  while(el.offsetParent) {
    el = el.offsetParent;
    top += el.offsetTop;
    left += el.offsetLeft;
  }

  return (
    top >= window.pageYOffset &&
    left >= window.pageXOffset &&
    (top + height) <= (window.pageYOffset + window.innerHeight) &&
    (left + width) <= (window.pageXOffset + window.innerWidth)
  );
}

function splash(){
    if(document.querySelector(".rf-splash__wrapper")){
        var splashImage = document.getElementsByClassName('rf-splash__wrapper');
        if(splashImage.length >= 1) {
            var count = splashImage.length;

            function getRandomInt(min, max) {
              min = Math.ceil(min);
              max = Math.floor(max);
              return Math.floor(Math.random() * (max - min)) + min;
            }
            console.log('new carousel');
            splashImage[getRandomInt(0, count)].classList.add('show');
        }
    }
}

function splashCarousel(){
    if(document.querySelector(".rf-splash__wrapper")){
        var titleset = document.getElementsByClassName('rf-titles');
        var imageset = document.getElementsByClassName('rf-splash__wrapper');

        setInterval(function(){
              var a = document.querySelector('.rf-titles.show');
              var n = document.querySelector('.rf-titles.show + .rf-titles');
              var b = document.querySelector('.rf-splash__wrapper.show');
              var c = document.querySelector('.rf-splash__wrapper.show + .rf-splash__wrapper');
              if(!n || !c){
                var n = titleset[0];
                var c = imageset[0];
              }
              a.classList.remove('show');
              n.classList.add('show');
              b.classList.remove('show');
              c.classList.add('show');
        }, 3000)
    }
}

function menu() {
    var burger = document.querySelector('.rf-burger');
    var menu = document.querySelector('.rf-mobile__menu');
    burger.addEventListener("click", function(){
        this.classList.toggle('clicked');
        menu.classList.toggle('clicked');
    })
}

function spec(){
    var techSpec = document.querySelector('.rf-single__tech-spec');
    var prodDesc = document.querySelector('.rf-single__prod-desc');
    if (techSpec){
        techSpec.addEventListener('click', function(){
            this.classList.toggle('clicked');
        });
        prodDesc.addEventListener('click', function(){
            this.classList.toggle('clicked');
        });
    }
}

function saleTimer() {
    if(document.querySelector(".rf-hour")){
        var countDownDate = new Date("Jun 11, 2018 6:00:00").getTime();
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = 24 * days + Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        console.log(hours, minutes);
        var splitHour = hours.toString().split('');
        var hoursLabel = 'hrs';

        if(splitHour[1] === undefined) {
            splitHour[1] = "";
        }

        if(distance <= 1) {
            hoursLabel = 'hr';
        }

        document.querySelector(".rf-hour").innerHTML = '<span class="number-one">' + splitHour[0] + '</span><span class="number-two">' + splitHour[1] + '</span> '+ hoursLabel;

        if (distance < 0) {
            clearInterval(x);
            document.querySelector(".rf-hour").innerHTML = "0";
        }
    }
}

function hideEl($element){
    for(var i = 0; i < $element.length; i++) {
        console.log('hide', $element.length)
        $element[i].classList.add('none');
    }
}

function showEl($element) {
    for(var j = 0; j < $element.length; j++) {
        console.log('show', $element.length)
        $element[j].classList.add('block');
    }
}

function devMode(){
    var url = window.location.href;
    console.log('is it dev mode?');
    if(url.indexOf('devMode') > 1) {
        console.log('yes');
        var none = document.getElementsByClassName('rf-temporary-none');
        var block = document.getElementsByClassName('rf-temporary-block');
        showEl(block);
        hideEl(none);
    } else {
        console.log('no');
    }
}

function cookie() {
    var lightbox = document.querySelector('.rf-lightbox');
    if(document.querySelector('.rf-lightbox')){
        if(!Cookies.get('lightbox')){
            Cookies.set('lightbox', 'false');
        }
        if(Cookies.get('lightbox') === 'false') {
            lightbox.classList.add('display');
            Cookies.set('lightbox', 'true');
        }
    }
}

function closeLightbox() {
    var lightbox = document.querySelector('.rf-lightbox');
    var close = document.querySelector('.rf-lightbox-close');
    if(document.querySelector(".rf-lightbox")){
        close.addEventListener('click', function(){
            lightbox.classList.remove('display');
        });
    }
}

function loadMore() {
    if(document.querySelector(".rf-new-shop__wrapper")){
        var newShop = document.getElementsByClassName('rf-new-shop__wrapper');
        var loadButton = document.querySelector('.rf-load-more');
        var images = document.getElementsByClassName('rf-new-shop__src');
        var productsTally = document.querySelector('.rf-shop-amount-update');
        var pagination = document.querySelector('.rf-pagination-update');
        var resetButton = document.querySelector('.rf-reset-button');
        if(document.querySelector(".rf-special-product-wrapper")) {
          //amount of pages
          var m = 2;
        } else {
          //amount of pages
          var m = 13;
        }
        //proxy for index
        var x = 1;
        //amount of products
        var l = newShop.length / m;
        //target
        var tar = Math.round(l)*x;
        //load initail products
        function showImagesLoad(){
          if(document.querySelector(".rf-special-product-wrapper")) {
            for(var i = 0; i < l; i++){
                newShop[i].classList.add('display');
                var data = images[i].dataset.src;
                images[i].setAttribute('src', data);
                productsTally.innerHTML = l + ' prints';
                pagination.innerHTML = x + '/' + m;
            }
            x++;
          } else {
            for(var i = 0; i < m; i++){
                newShop[i].classList.add('display');
                var data = images[i].dataset.src;
                images[i].setAttribute('src', data);
                productsTally.innerHTML = m + ' prints';
                pagination.innerHTML = x + '/' + m;
            }
            x++;
          }
        };
        showImagesLoad();
        function showImagesClick(){
            loadButton.addEventListener('click', function(){
                tar = Math.round(l)*x;
                for(var i = 0; i < tar; i++){
                    newShop[i].classList.add('display');
                      var imageWrapper = newShop[i].querySelector('.rf-new-shop__image');
                      var imageInner = imageWrapper.querySelector('.rf-new-shop__src');
                      if(imageInner != null || imageInner != undefined) {
                        console.log(tar, i);
                        var imageData = imageInner.dataset.src;
                        imageInner.setAttribute('src', imageData);
                      }
                    productsTally.innerHTML = Math.ceil(tar) + ' prints';
                    if((x - 1) <= m) {
                        pagination.innerHTML = x + '/' + m;
                    }
                }
                x++;
            });
        };
        showImagesClick();
        function reset() {
            if(document.querySelector(".rf-special-product-wrapper")) {
              //amount of pages
              var m = 2;
            } else {
              //amount of pages
              var m = 13;
            }
            x = 1;
            var selected = document.querySelector('.selector.display');
            var shopTitle = document.querySelector('.rf-shop-title-update');
            selected.classList.remove('display');
            for(i = 0; i < newShop.length; i++) {
                newShop[i].classList.remove('display');
            }
            showImagesLoad();
            shopTitle.innerHTML = "all products";
        };
        resetButton.addEventListener('click', function(){
            reset();
        });
    }
}

function tags() {
    var selector = document.getElementsByClassName('selector');
    var s = document.querySelectorAll('.selector');
    var product = document.getElementsByClassName('rf-new-shop__wrapper');
    var image = document.getElementsByClassName('rf-new-shop__src');
    var productsTally = document.querySelector('.rf-shop-amount-update');
    var pageTitle = document.querySelector('.rf-shop-title-update');
    var isHomePage = document.querySelector('.rf-splash__wrapper');
    var pagination = document.querySelector('.rf-pagination-update');
    var showing;
    if(window.location.href.indexOf('?') > 1 && pageTitle) {
        var split = window.location.href.split('?');
        for(var j = 0; j < product.length; j++){
            var tags = product[j].dataset.tags;
            var cleanTags = tags.replace('  ', ' ').toLowerCase();
            product[j].classList.remove('display');
            if(cleanTags.includes(split[1].replace(/-/g, ' '))){
                product[j].classList.add('display');
                var src = image[j].dataset.src;
                image[j].setAttribute('src',src);
            }
        }
        pageTitle.innerHTML = split[1].replace(/-/g, ' ');
        showing = document.querySelectorAll('.rf-new-shop__wrapper.display').length;
        productsTally.innerHTML = showing + ' prints';
    }
    if(pageTitle){
        for(var i = 0; i < selector.length; i++){
            selector[i].addEventListener('click', function(){
                var selectorTag = this.getAttribute('data-click').toLowerCase();
                s.forEach(function(el){
                    el.classList.remove('display');
                });
                this.classList.add('display');
                for(var j = 0; j < product.length; j++){
                    var tags = product[j].dataset.tags;
                    var cleanTags = tags.replace('  ', ' ').toLowerCase();
                    product[j].classList.remove('display');
                    if(cleanTags.includes(selectorTag)){
                        product[j].classList.add('display');
                        var imageWrapper = product[j].querySelector('.rf-new-shop__image');
                        var imageInner = imageWrapper.querySelector('.rf-new-shop__src');
                        var imageData = imageInner.dataset.src;
                        imageInner.setAttribute('src', imageData);
                        console.log(cleanTags.includes(selectorTag), j, imageData);
                    }
                }
                pageTitle.innerHTML = selectorTag;
                window.scrollTo(0, 0);
                showing = document.querySelectorAll('.rf-new-shop__wrapper.display').length;
                productsTally.innerHTML = showing + ' prints';
                pagination.innerHTML = '';
            });
        }
    }else if(isHomePage){
        console.log('home 4');
        for(var i = 0; i < selector.length; i++) {
            selector[i].addEventListener('click', function(){
                var selectorTag = this.getAttribute('data-click').toLowerCase().replace(/ /g, '-');
                console.log(selectorTag);
                window.location.href = 'https://roomfifty.com/shop/' + '?' + selectorTag;
            });
        }
    }
}

function mobileTags() {
    if(document.querySelector('.rf-new-shop__filter')){
        var tagTitle = document.querySelectorAll('.rf-new-shop__filter > div > h1');
        var tags = document.querySelectorAll('.rf-new-shop__filter > div');
        console.log(tags);
        console.log(tagTitle);
        for(var i=0; i < tagTitle.length; i++){
            tagTitle[i].addEventListener('click', function(){
                for(var i=0; i < tagTitle.length; i++) {
                    tagTitle[i].classList.remove('clicked');
                }
                this.classList.toggle('clicked');
            });
        }
    }
}

function artistOverview() {
    var artist = document.querySelectorAll('.rf-home__products-image-src');
    if(artist) {
        document.addEventListener('scroll', function(){
            console.log('scrolling');
            for(var i=0; i < artist.length; i++) {
                console.log(artist[i]);
                if(elementInViewport(artist[i])) {
                    var src = artist[i].dataset.src;
                    artist[i].setAttribute('src', src);
                }
            }
        });
    }
}

function checkSpecial(){
  if(window.location.href.indexOf('print-item') > 1 && window.location.href.indexOf('special') < 1){
    console.log('finding promo');
    var specialPromo = document.querySelector('.rf-new-product-promotion');
    specialPromo.classList.add('hide');
  }
}

function init() {
    menu();
    splash();
    spec();
    devMode();
    cookie();
    closeLightbox();
    saleTimer();
    loadMore();
    tags();
    mobileTags();
    artistOverview();
    checkSpecial();
}
init();
