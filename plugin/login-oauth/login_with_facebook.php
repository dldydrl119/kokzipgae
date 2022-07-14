<?php
/*
 * login_with_facebook.php
 *
 * @(#) $Id: login_with_facebook.php,v 1.4 2015/04/08 23:28:52 mlemos Exp $
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
	$client->server = 'Facebook';
	$client->redirect_uri = 'http://'.$_SERVER['HTTP_HOST'].
		dirname(strtok($_SERVER['REQUEST_URI'],'?')).'/login_with_facebook.php';

	$client->client_id = $facebook_APPid; $application_line = __LINE__;
	$client->client_secret = $facebook_APPsecret;

	if(strlen($client->client_id) == 0
	|| strlen($client->client_secret) == 0)
		alert_close('페이스북 연동키값을 확인해 주세요.');
		/*
		die('Please go to Facebook Apps page https://developers.facebook.com/apps , '.
			'create an application, and in the line '.$application_line.
			' set the client_id to App ID/API Key and client_secret with App Secret');
		*/	
	/* API permissions
	 */
	$client->scope = 'email,publish_actions,user_website';
	if(($success = $client->Initialize()))
	{
		if(($success = $client->Process()))
		{
			if(strlen($client->access_token))
			{
				$success = $client->CallAPI(
					'https://graph.facebook.com/v2.3/me', 
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

		$mb_gubun = 'f_';
		
		print_r($user);
		exit;

		$mb_sns_id		=	$user->id; 
		$mb_id				=	$user->kakao_account->email;
		$mb_email			=	$user->kakao_account->email;
		$mb_name			=	$user->properties->nickname;
		$mb_nick			=	$user->properties->nickname;
		$mb_img			=	$user->properties->profile_image;
		$mb_img_type	=	"S";
		$mb_birth_year	=	$user->kakao_account->birthyear;
		$mb_birth_month	=	substr($user->kakao_account->birthday,0,2);
		$mb_birth_day	=	substr($user->kakao_account->birthday,2,2);
		$mb_phone		=	replace_tel(str_replace("+82","0",$user->kakao_account->phone_number));	//핸드폰

		if($user->kakao_account->birthday_type == "SOLAR"){
			$mb_birth_type		=	"S";
		}else if($user->kakao_account->birthday_type == "LUNAR"){
			$mb_birth_type		=	"L";
		}

		if($user->kakao_account->gender == "male"){
			$mb_gender		=	"M";
		}else if($user->kakao_account->gender == "female"){
			$mb_gender		=	"F";
		}
		/*

		$mb_id = $user->id;
		$mb_name = $user->name;
		$mb_nick = $user->name;
		$mb_email = $user->email;
		$mb_homepage = $user->website;
		*/

		$token_value = $AccessToken['value'];
		$token_secret = '';
		$token_refresh = '';

		//$client->ResetAccessToken();

		include_once('./oauth_check.php');
	} else {
		$error = HtmlSpecialChars($client->error);
		alert_close($error);
	}

?>