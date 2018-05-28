function splash(){
    var splashImage = document.getElementsByClassName('rf-splash__wrapper');
    var splashTitle = document.getElementsByClassName('rf-titles');
    if(splashImage.length >= 1) {
        var count = splashImage.length;

        function getRandomInt(min, max) {
          min = Math.ceil(min);
          max = Math.floor(max);
          return Math.floor(Math.random() * (max - min)) + min;
        }

        splashImage[0].classList.add('show');
        splashTitle[0].classList.add('show');
        splashCarousel();
    }
}

function splashCarousel(){
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
    }, 1500)

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

function devMode(){
    var url = window.location.href;
    console.log('is it dev mode?');
    if(url.indexOf('devMode') > 1) {
        console.log('yes');
        console.log(document.querySelector('.rf-temporary'));
        document.querySelector('.rf-temporary').classList.add('block');
    } else {
        console.log('no');
    }
}

function cookie() {
    var lightbox = document.querySelector('.rf-lightbox');
    if(!Cookies.get('lightbox')){
        Cookies.set('lightbox', 'false');
    }
    if(Cookies.get('lightbox') === 'false') {
        lightbox.classList.add('display');
        Cookies.set('lightbox', 'true');
    }
}

function closeLightbox() {
    var lightbox = document.querySelector('.rf-lightbox');
    var close = document.querySelector('.rf-lightbox-close');
    close.addEventListener('click', function(){
        lightbox.classList.remove('display');
    });
}

function init() {
    menu();
    splash();
    spec();
    devMode();
    cookie();
    closeLightbox();
}
init();
