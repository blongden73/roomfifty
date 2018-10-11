var fs = require("fs");
var mergeJSON = require("merge-json") ;

var page1 = require('../data/roomfifty-page-1.json');
var page2 = require('../data/roomfifty-page-2.json');
var page3 = require('../data/roomfifty-page-3.json');
var page4 = require('../data/roomfifty-page-4.json');
var page5 = require('../data/roomfifty-page-5.json');
var page6 = require('../data/roomfifty-page-6.json');
var page7 = require('../data/roomfifty-page-7.json');
var page8 = require('../data/roomfifty-page-8.json');
var page9 = require('../data/roomfifty-page-9.json');

var all = 'data/allroomfifty.json';

//merge each page
var result1 = mergeJSON.merge(page1, page2);
var result2 = mergeJSON.merge(result1, page3);
var result3 = mergeJSON.merge(result2, page4);
var result4 = mergeJSON.merge(result3, page5);
var result5 = mergeJSON.merge(result4, page6);
var result6 = mergeJSON.merge(result5, page7);
var result7 = mergeJSON.merge(result6, page8);
var result8 = mergeJSON.merge(result7, page9);


//save the result
var rs = JSON.stringify(result8);
var wrap = '{"products":' + rs + '}';
console.log(result8.length);

//write to master file
fs.writeFile(all, wrap, function(error) {
     if (error) {
       console.error("write error:  " + error.message);
     } else {
       console.log("Successful Write to " + all);
     }
});
