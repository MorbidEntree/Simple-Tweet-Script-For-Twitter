<?php
$tweet = $_POST['form_tweet'];
$reply_id = $_POST['form_reply_id'];
require_once('api.php');
 

 //Make an app at http://apps.twitter.com and use the access tokens and consumer keys and put them here
$settings = array(
    'oauth_access_token' => "YOUR_ACCESS_TOKEN",
    'oauth_access_token_secret' => "YOUR_ACCESS_TOKEN_SECRET",
    'consumer_key' => "YOUR_CONSUMER_KEY",
    'consumer_secret' => "YOUR_CONSUMER_KEY_SECRET"
);
 
$url = "https://api.twitter.com/1.1/statuses/update.json";
 
$requestMethod = 'POST'; 
 
$postfields = array(
    'status' => $tweet
);
 
$twitter = new TwitterAPIExchange($settings);
 
$response = $twitter->buildOauth($url, $requestMethod)
                   ->setPostfields($postfields)
                   ->performRequest();
 

$json = json_decode($response, true);?>

//shows the response from the Twitter API if it is successful
<html>
 <head>
 <title>Tweet Results</title>
 </head>
 
 <body>
  <center><br><h1>Tweet Results</h1>
  <p>Tweeted from: @<?php echo $json['user']['screen_name']?></p>
  <p>Tweet: <strong><?php echo $json['text']?></strong></p>
  <!--Edit this if you moved the location of 'write.php'--><p><a href="/write.php">Go back :)</a></p></center>
 </body>
</html> ?>
