var casper = require('casper').create();
var page = require('webpage').create();

var host = "127.0.0.1";
var url = "http://"+host+"/challengeUtils/read.php";
var timeout = 2000;

phantom.addCookie({
    'name': 'adminCookie',
    'value': 'ZWh0aWNhbEhhY2tpbmdYU1NDaGFsbGVuZ2U=',
    'domain': host,
    'path': '/',
    'httponly': false
});

casper.start(url,function(){
    var js=this.evaluate(function(){
        return document;
    });
    this.echo(js.all[0].outerHTML);
});

casper.then(function() {
    this.echo('First Page: ' + this.getTitle());
});

casper.run();
