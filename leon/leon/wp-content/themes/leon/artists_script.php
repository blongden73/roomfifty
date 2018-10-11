<script src="https://roomfifty.com/wp-content/themes/leon/js/handlebars-v4.0.11.js" type="text/javascript"></script>
<script>
function loadJSON(path, success, error) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                if (success)
                    success(JSON.parse(xhr.responseText));
            } else {
                if (error) {
                    error(xhr);
                }
            }
        }
    };
    xhr.open("GET", path, true);
    xhr.send();
}

loadJSON("https://roomfifty.com/wp-content/themes/leon/110818.json", function(data) {
    Handlebars.registerHelper("image", function(find) {
       var findItem = find;
       for(var i=0; i < data.products.length; i++) {
           console.log(data.products[1].id, 'finding', findItem);
           if(data.products[i].id === findItem) {
               console.log(data.products[i].image.src);
               return data.products[i].image.src;
               break;
           }
       }
    });
    var el = document.getElementsByClassName("rf-product-images");
    var dataHB = data;

    for(var i = 0; i < el.length; i++) {
        var source = el[i].innerHTML;
        var template = Handlebars.compile(source);
        var html = template(dataHB);
        var insert = document.getElementsByClassName('rf-product__image--wrapper');
        insert[i].innerHTML = html;
    }

    function printGallery() {
        console.log('print-page 5')
        var isPrintPage = document.querySelector('.rf-artist_print__custom');
        var buttons = document.querySelectorAll('.rf-intro-cta');
        var images = document.querySelectorAll('.rf-products__images');
        var black = document.querySelectorAll('.rf-black-container');
        var artwork = document.getElementsByClassName('rf-product--artwork');
        console.log(buttons);
        console.log(images);

        if(isPrintPage) {
            setTimeout(function(){
                for(var j=0; j < artwork.length; j ++) {
                    var height = artwork[j].offsetHeight;
                    var width = artwork[j].offsetWidth;
                    if(width > height){
                        console.log(artwork[j].parentElement);
                        var parent = artwork[j].parentElement;
                        console.log(parent.parentElement);
                        parent.parentElement.classList.add('landscape');
                    }
                }
            }, 1000);
            for(var k=0; k< black.length; k++) {
                black[k].classList.add('show');
            }
            for(var i = 0; i < buttons.length; i++) {
                buttons[i].addEventListener('click', function(){
                    this.classList.toggle('show');
                    for(var j=0; j < images.length; j++) {
                        console.log(images[j]);
                        images[j].classList.toggle('show');
                    }
                });
            }
        }
    }
    printGallery();
});
</script>
