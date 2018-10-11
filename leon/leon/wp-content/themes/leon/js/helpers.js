//helpers

//These are a back up incase handlebars node modules gets reinstall todo: make this not depend on comilehandlebars.js
//todo write special helper to find gift card an tote
handlebars.registerHelper("splitTitle", function(title, value) {
   var t = title.toLowerCase().split(" by ");
   return t[value];
});

handlebars.registerHelper("findURL", function(title, dev) {
   var t = title.split(", ");
   var found = t.find(function(string){
       if(string.startsWith('http')){
           return string.startsWith('http');
       }else {
           var full = string.startsWith('roomfifty');
           return full;
       }
   });
   console.log(found, dev);
   if(found.startsWith('http')){
       return found;
   }else if(found.startsWith('roomfifty')){
       return 'http://' + found;
   }
});

handlebars.registerHelper("excludeURL", function(title) {
   var t = title.split(", ");
   var found = t.find(function(string){
       if(string.startsWith('http')){
           return string.startsWith('http');
       }else {
           return string.startsWith('roomfifty');
       }
   });
   var p = t.indexOf(found)
   t.splice(p, 1, '');
   return t.join(' ');
});
