<<<<<<< HEAD
<?php
/*
 * login_with_github.php
 *
 * @(#) $Id: login_with_github.php,v 1.2 2014/03/16 11:23:53 mlemos Exp $
 *
 */

	/*
	 *  Get the http.php file from http://www.phpclasses.org/httpclient
	 */
	 include_once('./_common.php');
	require('http.php');
	require('oauth_client.php');

	$client = new oauth_client_class;
	$client->debug = false;
	$client->debug_http = true;
	$client->server = 'github';
	$client->redirect_uri = 'http://'.$_SERVER['HTTP_HOST'].
		dirname(strtok($_SERVER['REQUEST_URI'],'?')).'/login_with_github.php';

	$client->client_id = $github_ClientID; $application_line = __LINE__;
	$client->client_secret = $github_ClientSecret;

	if(strlen($client->client_id) == 0
	|| strlen($client->client_secret) == 0)
		alert_close('깃허브 연동키값을 확인해 주세요.');
	/* API permissions
	 */
	$client->scope = 'user:email';
	if(($success = $client->Initialize()))
	{
		if(($success = $client->Process()))
		{
			if(strlen($client->authorization_error))
			{
				$client->error = $client->authorization_error;
				$success = false;
			}
			elseif(strlen($client->access_token))
			{
				$success = $client->CallAPI(
					'https://api.github.com/user',
					'GET', array(), array('FailOnAccessError'=>true), $user);
			}
		}
		$success = $client->Finalize($success);
	}
	if($client->exit)
		exit;
	if($success)
	{
		$client->GetAccessToken($AccessToken);

		$mb_gubun = 'git_';
		$mb_id = $user->login;
		$mb_name = $user->login;
		$mb_nick = $user->login;
		$mb_email = $user->emails;
		$token_value = $AccessToken['value'];
		$token_secret = '';
		$token_refresh = $AccessToken['refresh'];

		//$client->ResetAccessToken();

		include_once('./oauth_check.php');
	} else {
		$error = HtmlSpecialChars($client->error);
		alert_close($error);
	}
=======
<?php
/*
 * login_with_github.php
 *
 * @(#) $Id: login_with_github.php,v 1.2 2014/03/16 11:23:53 mlemos Exp $
 *
 */

	/*
	 *  Get the http.php file from http://www.phpclasses.org/httpclient
	 */
	 include_once('./_common.php');
	require('http.php');
	require('oauth_client.php');

	$client = new oauth_client_class;
	$client->debug = false;
	$client->debug_http = true;
	$client->server = 'github';
	$client->redirect_uri = 'http://'.$_SERVER['HTTP_HOST'].
		dirname(strtok($_SERVER['REQUEST_URI'],'?')).'/login_with_github.php';

	$client->client_id = $github_ClientID; $application_line = __LINE__;
	$client->client_secret = $github_ClientSecret;

	if(strlen($client->client_id) == 0
	|| strlen($client->client_secret) == 0)
		alert_close('깃허브 연동키값을 확인해 주세요.');
	/* API permissions
	 */
	$client->scope = 'user:email';
	if(($success = $client->Initialize()))
	{
		if(($success = $client->Process()))
		{
			if(strlen($client->authorization_error))
			{
				$client->error = $client->authorization_error;
				$success = false;
			}
			elseif(strlen($client->access_token))
			{
				$success = $client->CallAPI(
					'https://api.github.com/user',
					'GET', array(), array('FailOnAccessError'=>true), $user);
			}
		}
		$success = $client->Finalize($success);
	}
	if($client->exit)
		exit;
	if($success)
	{
		$client->GetAccessToken($AccessToken);

		$mb_gubun = 'git_';
		$mb_id = $user->login;
		$mb_name = $user->login;
		$mb_nick = $user->login;
		$mb_email = $user->emails;
		$token_value = $AccessToken['value'];
		$token_secret = '';
		$token_refresh = $AccessToken['refresh'];

		//$client->ResetAccessToken();

		include_once('./oauth_check.php');
	} else {
		$error = HtmlSpecialChars($client->error);
		alert_close($error);
	}
>>>>>>> 78f73c664159341f41233d9d1aff2c31be21e3a9
?>