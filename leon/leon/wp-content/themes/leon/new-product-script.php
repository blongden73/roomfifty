<script type="text/javascript">
/*<![CDATA[*/

var url = window.location.href;
console.log(url);
var urlSplit = url.split('?');
var artistName = urlSplit[5].replace('artist=', '');
var printName = urlSplit[4].replace('title=', '');
var printImage = urlSplit[2].replace('img=', '');
var productID = urlSplit[1];

document.querySelector('.artists-name').innerHTML = decodeURI(artistName);
document.querySelector('.print-name').innerHTML = decodeURI(printName);
document.querySelector('.print-image').setAttribute('src', printImage);

function orientation(printImage, productID) {
  var printImageNew = printImage;
  var artwork = document.querySelector('.print-image');
  var artworkHolder = document.querySelectorAll('.rf-product--artwork');
  var productImageWrapper = document.querySelector('.rf-new-product-page--product-images');
  //set Timeout for wainting for the page
  setTimeout(function(printImageNew){
    var artworkHeight = artwork.offsetHeight;
    var artworkWidth = artwork.offsetWidth;
    var orientation;
    //check orientation of image
    if(artworkHeight > artworkWidth){
      orientation = 'portrait';
    }else {
      orientation = 'landscape';
    }
    //add class to container to see which is being dipsplayed - used to change the postion of the artwork image
    productImageWrapper.classList.add(orientation+'-display');
    productImageWrapper.classList.add(productID);
    //selects the orientation container
    var orientationSelector = document.querySelectorAll("." + orientation);

    //loop through artwork and set src of artwork image add class to display correct orientation
    for(var i=0; i < artworkHolder.length; i++){
      artworkHolder[i].setAttribute('src', printImageNew);
      orientationSelector[i].classList.add('display');
      var orientationSrc = orientationSelector[i].dataset.src;
      orientationSelector[i].setAttribute('src', orientationSrc);
    }
  }, 1000, printImageNew);
}
orientation(printImage, productID);

(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }

  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }

  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'room-fifty.myshopify.com',
      apiKey: 'e49335295a988065da61dc09944518f8',
      appId: '6',
    });

    ShopifyBuy.UI.onReady(client).then(function (ui) {
      var productsWP = document.getElementsByClassName('rf-product-buy-button');
      for(i = 0; i < productsWP.length; i++){
      console.log(productID);
      var productLoop = productsWP[i];

      ui.createComponent('product', {
        id: productID,
        node: productLoop,
        moneyFormat: '%C2%A3%7B%7Bamount%7D%7D',
        options: {
          "option": {
            "styles": {
                "select": {
                    "background-color": "transparent",
                    "border": "0px",
                    "font-family": "Montserrat, sans-serif",
                    "border-radius": "0px"
                },
                "wrapper": {
                    "background-color": "transparent",
                    "border": "1px solid #000",
                    "border-radius": "0px"
                },
                "selectIcon": {
                    "fill": "#000"
                },
                "label": {
                    "margin-top": "0px"
                }
            },
          },
          "product": {
            "layout": "horizontal",
            "variantId": "all",
            "width": "100%",
            "contents": {
              "img": false,
              "imgWithCarousel": false,
              "title": true,
              "price": true,
              "variantTitle": false,
              "description": false,
              "buttonWithQuantity": false,
              "quantity": false
            },
            "text": {
              "button": "Add to basket"
            },
            "styles": {
              "product": {
                "text-align": "left",
                "@media (min-width: 601px)": {
                  "max-width": "100%",
                  "margin-left": "0",
                  "margin-bottom": "50px"
                }
              },
              "options": {
                  "max-width": "340px !important"
              },
              "buttonWrapper": {
                  "margin-top": "10px"
              },
              "button": {
                "background-color": "transparent",
                "color": "#000000",
                "border": "1px solid #000",
                "padding-left": "10px",
                "padding-right": "10px",
                "padding-top": "8px",
                "padding-bottom": "8px",
                "font-family": "Montserrat, sans-serif",
                ":hover": {
                    "background-color": "#0792d1",
                    "color": "#fff"
                },
                "border-radius": "0px",
                ":focus": {
                  "background-color": "#e6e6e6"
                }
              },
              "variantTitle": {
                "font-family": "Montserrat, sans-serif",
                "font-weight": "bold"
              },
              "title": {
                "font-family": "Montserrat, sans-serif",
                "font-size": "26px",
                "color": '#000'
              },
              "description": {
                "font-family": "Montserrat, sans-serif",
                "font-weight": "bold",
                "line-height": "18px",
                "display": "none"
              },
              "price": {
                "font-family": "Montserrat, sans-serif",
                "font-size": "26px",
                "line-height": "0px",
                "font-weight": "bold",
                "margin-bottom": "20px",
                "color": '#000'
              },
              "carouselitem":{
                  "display":"none !important",
                  "text-align": "left !important",
                  "opacity": "1 !important"
              },
              "compareAt": {
                "font-size": "12px"
              }
            }
          },
          "cart": {
            "contents": {
              "button": true
            },
            "text": {
              "title": "Your cart"
            },
            "styles": {
              "cart": {
                "background-color": "#f6f6f6"
              },
              "button": {
                "background-color": "#ffffff",
                "color": "#000000",
                ":hover": {
                  "background-color": "#0792d1",
                  "color": "#fff"
                },
                "border-radius": "0px",
                ":focus": {
                  "background-color": "#e6e6e6"
                }
              },
              "footer": {
                "background-color": "#f6f6f6"
              }
            }
          },
          "modalProduct": {
            "contents": {
              "img": false,
              "imgWithCarousel": true,
              "variantTitle": false,
              "buttonWithQuantity": true,
              "button": false,
              "quantity": false
            },
            "styles": {
              "product": {
                "@media (min-width: 601px)": {
                  "max-width": "100%",
                  "margin-left": "0px",
                  "margin-bottom": "0px"
                }
              },
              "button": {
                "background-color": "#ffffff",
                "color": "#000000",
                "padding-left": "10px",
                "padding-right": "10px",
                "font-family": "Montserrat, sans-serif",
                ":hover": {
                  "background-color": "#e6e6e6",
                  "color": "#000000"
                },
                "border-radius": "0px",
                ":focus": {
                  "background-color": "#e6e6e6"
                }
              }
            }
          },
          "toggle": {
            "styles": {
              "toggle": {
                "background-color": "#0792d1",
                "border-radius": "0px",
                ":hover": {
                  "background-color": "#190FC9"
                },
                ":focus": {
                  "background-color": "#000"
                }
              },
              "count": {
                "color": "#fff",
                ":hover": {
                  "color": "#fff"
                }
              },
              "iconPath": {
                "fill": "#fff"
              }
            }
          },
          "productSet": {
            "styles": {
              "products": {
                "@media (min-width: 601px)": {
                  "margin-left": "-20px"
                }
              }
            }
          }
        }
      });
      }
    });
  }
})();
/*]]>*/
</script>
