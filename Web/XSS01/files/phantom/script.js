var page = require('webpage').create();
var host = "127.0.0.1";
var url = "http://"+host+"/challengeUtils/read.php";
var timeout = 2000;


page.open(url,(function(status){
    console.log(status);
});
 
phantom.addCookie({
    'name': 'adminCookie',
    'value': 'ZWh0aWNhbEhhY2tpbmdYU1NDaGFsbGVuZ2U=',
    'domain': host,
    'path': '/',
    'httponly': false
});

page.onNavigationRequested = function(url, type, willNavigate, main) {
    console.log("[URL] URL="+url);  
};
 
page.settings.resourceTimeout = timeout;
page.onResourceTimeout = function(e) {
    setTimeout(function(){
        console.log("[INFO] Timeout")
        phantom.exit();
    }, 1);
};
 
page.open(url, function(status) {
    console.log("[INFO] rendered page");
    setTimeout(function(){
        phantom.exit();
    }, 1);
});

