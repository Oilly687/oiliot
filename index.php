  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body >
<html lang="en">
<h1 align = 'center'> Oilly Apaporn Thipsavak 62111687 <br/>
 <?php
$api_url = 'https://api.thingspeak.com/channels/1458419/feeds.json?results=2';
$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data);
$user_data = $response_data->channel;
$user_data = array_slice($user_data, 0, 9);
foreach ($user_data as $user) {
	echo "Humidity: ".$user->field1;
	echo "<br />";
	echo "Temperature: ".$user->field2;
	echo "<br /> <br />";
        echo "Created at: ".$user->created_at;
	echo "<br /> <br />";
}

?>

<br/> <iframe src="https://thingspeak.com/channels/1458419/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" width="450" height="250"> </iframe>
<iframe src="https://thingspeak.com/channels/1458419/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" width="450" height="250"> </iframe>
<iframe src="https://thingspeak.com/channels/1458419/maps/channel_show" width="455" height="260"> </iframe>
        
        
        
       
<script type="text/JavaScript">
function timedRefresh(timeoutPeriod) {
 setTimeout("location.reload(true);",timeoutPeriod);
}</script>
</body>
 
