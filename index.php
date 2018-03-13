$accessToken = "CHANGE ME";
$pageid = "CHANGE ME";
$url = "https://graph.facebook.com/v2.12/events/?ids=$pageid&access_token=$accessToken";

$json = file_get_contents($url);
$obj = json_decode($json, true);

foreach ($obj[$pageid]['data'] as $key) {
  echo "<b>Event Name</b> " . $key['name'] . "<b>at day: </b> " . $key['start_time'] . "<b> on the street: </b>" .  $key['place']['location']['street'] ."<br>";
}
