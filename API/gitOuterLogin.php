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
    include_once(G5_PATH.'/head.sub.php');

    $git_clientID = 'fad1f4720d8c241df34f';
    $git_clientSecret = 'c7dce37004ef63a6f55f65521d2029282b00ff64';
    $git_callbackURL = G5_URL.'/api/gitOuterLogin.php';
    $url = 'https://github.com/login/oauth/authorize?client_id='.$git_clientID.'&redirect_uri='.$git_clientSecret.'';

    $config = [
        'callback' => $git_callbackURL,
        'keys' => [ 'key' => $git_clientID, 'secret' => $git_callbackURL ]
    ];
    
    try {
        $twitter = new Hybridauth\Provider\Twitter($config);
    
        $twitter->authenticate();
    
        $accessToken = $twitter->getAccessToken();
        $userProfile = $twitter->getUserProfile();
        $apiResponse = $twitter->apiRequest('statuses/home_timeline.json');
    }
    catch (\Exception $e) {
        echo 'Oops, we ran into an issue! ' . $e->getMessage();
    }
?>


<?
 include_once(G5_PATH.'/tail.sub.php');
?>