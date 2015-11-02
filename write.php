<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Tweet Maker</title>
</head>
<body>
	<center>
		<div>
			<h1>Twitter Form</h1>
			<form action="send.php" method="post">
				Your Tweet<br>
    			<textarea onkeyup="textCounter(this,'counter',140);" id="message" type="text" rows="3" cols="25" name="form_tweet" placeholder="Tweet, tweet, twat..." required autofocus maxlength="140"></textarea><br>
    			Characters remaining: <input disabled  maxlength="3" size="3" value="140" id="counter"><br>
    			<br>
    			<input type="submit" value="Send">
    			<input type="reset" value="Clear">
				<script type="text/javascript" src="characters.js"></script>
			</form>
			
		</div>
	</center>
</body>
</html>
