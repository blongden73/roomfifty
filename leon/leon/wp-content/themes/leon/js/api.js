var shopifyAPI = require('shopify-node-api');
var fs = require("fs");


var Shopify = new shopifyAPI({
  shop: 'room-fifty', // MYSHOP.myshopify.com
  shopify_api_key: '9961488000856a5fb4d31011cbe22b14', // Your API key
  access_token: '6cef839448d74c1a2cc406130be5edae' // Your API password
});

function callback(err, data, headers) {
  var api_limit = headers['http_x_shopify_shop_api_call_limit'];
  console.log( api_limit ); // "1/40"
}

var path1 = "data/roomfifty-page-1.json";
var path2 = "data/roomfifty-page-2.json";
var path3 = "data/roomfifty-page-3.json";
var path4 = "data/roomfifty-page-4.json";
var path5 = "data/roomfifty-page-5.json";
var path6 = "data/roomfifty-page-6.json";
var path7 = "data/roomfifty-page-7.json";
var path8 = "data/roomfifty-page-8.json";
var path9 = "data/roomfifty-page-9.json";
var path10 = "data/roomfifty-page-10.json";
var path11 = "data/roomfifty-page-11.json";


Shopify.get('/admin/products.json?page=1', function(err, data, headers){
  console.log(data.products); // Data contains product json information
  var json = JSON.stringify(data.products);
  // var replace = json.replace('[', '').replace(/]$/,"");

  fs.writeFile(path1, json, function(error) {
       if (error) {
         console.error("write error:  " + error.message);
       } else {
         console.log("Successful Write to " + path1);
       }
  });
});
Shopify.get('/admin/products.json?page=2', function(err, data, headers){
  console.log(data.products); // Data contains product json information
  var json = JSON.stringify(data.products);
  // var replace = json.replace('[', '').replace(/]$/,"");

  fs.writeFile(path2, json, function(error) {
       if (error) {
         console.error("write error:  " + error.message);
       } else {
         console.log("Successful Write to " + path2);
       }
  });
});
Shopify.get('/admin/products.json?page=3', function(err, data, headers){
  console.log(data.products); // Data contains product json information
  var json = JSON.stringify(data.products);
  // var replace = json.replace('[', '').replace(/]$/,"");

  fs.writeFile(path3, json, function(error) {
       if (error) {
         console.error("write error:  " + error.message);
       } else {
         console.log("Successful Write to " + path3);
       }
  });
});
Shopify.get('/admin/products.json?page=4', function(err, data, headers){
  console.log(data.products); // Data contains product json information
  var json = JSON.stringify(data.products);
  // var replace = json.replace('[', '').replace(/]$/,"");

  fs.writeFile(path4, json, function(error) {
       if (error) {
         console.error("write error:  " + error.message);
       } else {
         console.log("Successful Write to " + path4);
       }
  });
});

Shopify.get('/admin/products.json?page=5', function(err, data, headers){
  console.log(data.products); // Data contains product json information
  var json = JSON.stringify(data.products);
  // var replace = json.replace('[', '').replace(/]$/,"");

  fs.writeFile(path5, json, function(error) {
       if (error) {
         console.error("write error:  " + error.message);
       } else {
         console.log("Successful Write to " + path5);
       }
  });
});

Shopify.get('/admin/products.json?page=6', function(err, data, headers){
  console.log(data.products); // Data contains product json information
  var json = JSON.stringify(data.products);
  // var replace = json.replace('[', '').replace(/]$/,"");

  fs.writeFile(path6, json, function(error) {
       if (error) {
         console.error("write error:  " + error.message);
       } else {
         console.log("Successful Write to " + path6);
       }
  });
});

Shopify.get('/admin/products.json?page=7', function(err, data, headers){
  console.log(data.products); // Data contains product json information
  var json = JSON.stringify(data.products);
  // var replace = json.replace('[', '').replace(/]$/,"");

  fs.writeFile(path7, json, function(error) {
       if (error) {
         console.error("write error:  " + error.message);
       } else {
         console.log("Successful Write to " + path6);
       }
  });
});

Shopify.get('/admin/products.json?page=8', function(err, data, headers){
  console.log(data.products); // Data contains product json information
  var json = JSON.stringify(data.products);
  // var replace = json.replace('[', '').replace(/]$/,"");

  fs.writeFile(path8, json, function(error) {
       if (error) {
         console.error("write error:  " + error.message);
       } else {
         console.log("Successful Write to " + path6);
       }
  });
});

Shopify.get('/admin/products.json?page=9', function(err, data, headers){
  console.log(data.products); // Data contains product json information
  var json = JSON.stringify(data.products);
  // var replace = json.replace('[', '').replace(/]$/,"");

  fs.writeFile(path9, json, function(error) {
       if (error) {
         console.error("write error:  " + error.message);
       } else {
         console.log("Successful Write to " + path6);
       }
  });
});

Shopify.get('/admin/products.json?page=10', function(err, data, headers){
  console.log(data.products); // Data contains product json information
  var json = JSON.stringify(data.products);
  // var replace = json.replace('[', '').replace(/]$/,"");

  fs.writeFile(path10, json, function(error) {
       if (error) {
         console.error("write error:  " + error.message);
       } else {
         console.log("Successful Write to " + path6);
       }
  });
});

Shopify.get('/admin/products.json?page=11', function(err, data, headers){
  console.log(data.products); // Data contains product json information
  var json = JSON.stringify(data.products);
  // var replace = json.replace('[', '').replace(/]$/,"");

  fs.writeFile(path11, json, function(error) {
       if (error) {
         console.error("write error:  " + error.message);
       } else {
         console.log("Successful Write to " + path6);
       }
  });
});
