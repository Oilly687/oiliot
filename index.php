<html lang="en">
<h1 align = 'center'> Oilly Apaporn Thipsavak 62111687 <br/> 
<head> 
 <meta charest = "UTF-8">
 </head>
 <ul> id="myList"  </ul>

<script>
 function showData(data){
  let myList = document.querySelector('#myList');
  data.forEach(val => {
   let myEl = document.createElement('li');
   myEl.innerText = `Users: ${val.field1} ${val.field2}`;
   myList.appendChild(myEl)
  })
 }
 fetch('https://api.thingspeak.com/channels/1458419/feeds.json?results=')
 .then(response => response.json())
 .then(data => showData(data)(data));
 </script>

<br/> <iframe src="https://thingspeak.com/channels/1458419/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" width="450" height="250"> </iframe>
<iframe src="https://thingspeak.com/channels/1458419/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" width="450" height="250"> </iframe>
<iframe src="https://thingspeak.com/channels/1458419/maps/channel_show" width="455" height="260"> </iframe>

 
