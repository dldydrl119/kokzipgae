<?php
define('_PURENESS_', true);
include_once("./_common.php");

check_demo();

if($_POST["token"] && get_session("ss_token") == $_POST["token"]) {
	// 맞으면 세션을 지워 다시 입력폼을 통해서 들어오도록 한다.
	set_session("ss_token", "");
} else {
	alert("잘못된 접근 입니다.");
	exit;
}

$upl_dir	=	TB_DATA_PATH."/member";
$upl		=	new upload_files($upl_dir);



unset($value);

if($_FILES['mem_img']['name']) {
	$value['mem_img']			=	$upl->upload($_FILES['mem_img']);
	$value['mem_img_type']		=	 "N";
}

$value['nickname']		=	$_POST['nickname']; //닉네임
$value['birth_year']		=	$_POST['birth_year']; //년
$value['birth_month']	=	sprintf('%02d',$_POST['birth_month']); //월
$value['birth_day']		=	sprintf('%02d',$_POST['birth_day']); //일
$value['birth_time']		=	sprintf('%02d',$_POST['birth_time']); //시간
$value['age']				=	substr(date("Y")-$_POST['birth_year'],0,1).'0'; //연령대
$value['mailser']		=	$_POST['mailser'] ? $_POST['mailser'] : 'N'; //E-Mail을 수신
$value['smsser']		=	$_POST['smsser'] ? $_POST['smsser'] : 'N'; //SMS를 수신

update("shop_member", $value, "where id='$member[id]'");

goto_url(TB_SHOP_URL."/mypage_write.php");
?>