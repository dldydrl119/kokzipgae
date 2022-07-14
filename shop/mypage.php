<?php
include_once("./_common.php");

if(TB_IS_MOBILE) {
	goto_url(TB_MSHOP_URL.'/mypage.php');
}

if(!$is_member) {
	goto_url(TB_BBS_URL.'/login.php?url='.$urlencode);
}

$tb['title'] = "마이페이지";
include_once("./_head.php");


include_once(TB_THEME_PATH.'/mypage.skin.php');

include_once("./_tail.php");
?>