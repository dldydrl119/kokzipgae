<?php
define('_PURENESS_', true);
include_once("./_common.php");


//SMS 인증 전송
$cert_code				=	trim($_POST['cert_code']);

//인증번호 체크 
$regist_cert_code	=	get_session('ss_cert_code');

if($cert_code == $regist_cert_code){

	//세션 초기화
	set_session('ss_cert_code',"");
	echo "Y";
	exit;

}else{
	echo "N";	
	exit;
}


?>