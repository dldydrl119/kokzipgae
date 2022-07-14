<?php
include_once("./_common.php");

if(!$is_member) {
	goto_url(TB_BBS_URL.'/login.php?url='.$urlencode);
}

$tb['title'] = '오늘의 운세';
include_once("./_head.php");


$form_action_url = TB_HTTPS_SHOP_URL.'/point_payment_result.php';

include_once(TB_THEME_PATH.'/todaysaju.skin.php');

include_once("./_tail.php");
?>
