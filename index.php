<html lang="en">
<h1 align = 'center'> Oilly Apaporn Thipsavak 62111687 <br/> 
https=require('https');
https.get('https://api.thingspeak.com/channels/1458419/fields/1/last.json?key=T1WRG0V9V42XSWCH', function(res) {
console.log("Got response: " + res.statusCode);
}).on('error', function(e) {
console.log("Got error: " + e.message);
context.done(null, 'FAILURE');
});

<br/> <iframe src="https://thingspeak.com/channels/1458419/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" width="450" height="250"> </iframe>
<iframe src="https://thingspeak.com/channels/1458419/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" width="450" height="250"> </iframe>
<iframe src="https://thingspeak.com/channels/1458419/maps/channel_show" width="455" height="260"> </iframe>

 
