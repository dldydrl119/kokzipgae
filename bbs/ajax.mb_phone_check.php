<?php
define('_PURENESS_', true);
include_once("./_common.php");

$mb = sql_fetch("select  *  from shop_member where cellphone = TRIM('$mb_phone')");

if($mb['cellphone']) {
	echo 'N';		//이미 사용중인 전화번호 입니다.
} else {

	//SMS 확인 문자전송
	$cert_code			=	generateRandomString(6);

	//세션 생성
	set_session('ss_cert_code', $cert_code);

	$sms_content		=	"[".$config["shop_name"]."] 인증번호는 ".$cert_code." 입니다. 정확히 입력히주세요.";

	sms_member_send($mb_phone,$sms_content,'00','','');

	echo 'Y';		//사용하셔도 좋은 전화번호 입니다.
}

?>