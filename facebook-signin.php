<?php
	/**
	 * For Documentation https://github.com/facebook/facebook-php-sdk
	 */
	require 'facebook/facebook.php';

	$facebook = new Facebook(array(
		'appId'  => '193437524138735',//app_id
		'secret' => '5fe263cb8f901b6e81294de44764eb0f',//app_secret
	));

	try {
		$access_token = $facebook->getAccessToken();
		$param_token = array('access_token' => $access_token);
		$user_info = $facebook->api('/me','GET',$param_token);
		if ($user_info) {
			echo "<pre>";
			print_r($user_info);
			echo "</pre>";
		}
	} catch (FacebookApiException $e) {
		$url = $facebook->getLoginUrl(array('scope' => 'email'));
		//$url = $facebook->getLoginUrl();
		//echo $url;exit;
		header('Location:'.$url);
	}
?>
