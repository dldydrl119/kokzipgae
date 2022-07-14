<?php
include_once("./_common.php");

if(!$is_member) {
	goto_url(TB_BBS_URL.'/login.php?url='.$urlencode);
}

$tb['title'] = '마이페이지 메뉴';
include_once("./_head.php"); 


include_once(TB_THEME_PATH.'/m_page_list.skin.php');

include_once("./_tail.php");
?>