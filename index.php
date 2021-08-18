<html lang="en">
<h1 align = 'center'> Oilly Apaporn Thipsavak 62111687 <br/> 
fetch('https://api.thingspeak.com/channels/1458419/feeds.json?results=2').then(function (response) {
	// The API call was successful!
	console.log('success!', response);
}).catch(function (err) {
	// There was an error
	console.warn('Something went wrong.', err);
});

<br/> <iframe src="https://thingspeak.com/channels/1458419/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" width="450" height="250"> </iframe>
<iframe src="https://thingspeak.com/channels/1458419/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" width="450" height="250"> </iframe>
<iframe src="https://thingspeak.com/channels/1458419/maps/channel_show" width="455" height="260"> </iframe>

 
