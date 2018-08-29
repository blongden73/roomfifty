var fs = require("fs");
var mergeJSON = require("merge-json") ;

var page1 = require('../data/roomfifty-page-1.json');
var page2 = require('../data/roomfifty-page-2.json');
var page3 = require('../data/roomfifty-page-3.json');
var page4 = require('../data/roomfifty-page-4.json');
var page5 = require('../data/roomfifty-page-5.json');
var page6 = require('../data/roomfifty-page-6.json');

var all = 'data/allroomfifty.json';

//merge each page
var result1 = mergeJSON.merge(page1, page2);
var result2 = mergeJSON.merge(page3, page4);
var result3 = mergeJSON.merge(page5, page6);

//merge the rest
var result4 = mergeJSON.merge(result1, result2);
var result5 = mergeJSON.merge(result4, result3);

//save the result
var rs = JSON.stringify(result5);
var wrap = '{"products":' + rs + '}';
console.log(result5);

//write to master file
fs.writeFile(all, wrap, function(error) {
     if (error) {
       console.error("write error:  " + error.message);
     } else {
       console.log("Successful Write to " + all);
     }
});
