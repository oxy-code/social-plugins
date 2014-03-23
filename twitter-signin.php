<?php
	require 'twitter/twitteroauth.php';

	$consumer_key		= 'a5bA7l9BbN44eQVpdUsz8A';
	$consumer_secret	= 'O5HtbtRGKxo0vz1MHtKK7O1Elwe8mRWnknDJxslhVw';
	$oauth_token		= null;
	//$oauth_token		= '207052240-py7PYFpYdkTux9UjxA5gGJ8Saqt17Et7RNCRFe8R';
	$oauth_secret		= null;
	//$oauth_secret		= 'AHGOQBFONWmgru77nQGqgMsjY5czUyoSDvvmKg5Z4YXKd';

	$connection = new TwitterOAuth($consumer_key,$consumer_secret,$oauth_token,$oauth_secret);
	$temporary_credentials = $connection->getRequestToken('http://locvel.co/'); // Use config.php callback URL.
	$redirect_url = $connection->getAuthorizeURL($temporary_credentials); // Use Sign in with Twitter
	//$redirect_url = $connection->getAuthorizeURL();
	echo $redirect_url;exit;
?>
