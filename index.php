<html>
<head>
</head>
 <body>
  <div class="container p-3 my-3 bg-dark text-white"></div>
  <h1 align = 'center'> Oilly Apaporn Thipsavak 62111687 <br>
  </div>
  <iframe src="https://thingspeak.com/channels/1458419/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" width="450" height="250">
  </iframe>
     <br>
     <?php
        $api_url = 'https://api.thingspeak.com/channels/1458419/fields/1.json?results=1';
        $json_data = file_get_contents($api_url);
        $response_data = json_decode($json_data);
        $user_data = $response_data->feeds;
        $user_data = array_slice($user_data, 0);
        foreach ($user_data as $user) {
            echo "Humidity: ".$user->field1; echo " %";
         }
        ?>
     </p>
      <iframe src="https://thingspeak.com/channels/1458419/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" width="450" height="250">
       </iframe>
      <br>
      <?php
        $api_url = 'https://api.thingspeak.com/channels/1458419/fields/2.json?results=1';
        $json_data = file_get_contents($api_url);
        $response_data = json_decode($json_data);
        $user_data = $response_data->feeds;
        $user_data = array_slice($user_data, 0);
        foreach ($user_data as $user) {
        echo "Temperature: ".$user->field2; echo " ํC"; 
         }
        ?>
       <br>
  <br>
      <iframe src="https://thingspeak.com/channels/1458419/maps/channel_show" width="455" height="260"> </iframe>
</body>
</html>
