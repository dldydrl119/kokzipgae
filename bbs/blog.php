<?php
include_once("./_common.php");

if(TB_IS_MOBILE) {
	goto_url(TB_MBBS_URL.'/blog.php?co_id='.$co_id);
}

$co	= sql_fetch("select * from shop_blog where co_id = '$co_id'");
if(!$co["co_id"]){
	alert('�ڷᰡ �����ϴ�.', TB_URL);
}

$tb['title'] = $co['co_subject'];
include_once("./_head.php");
include_once(TB_THEME_PATH.'/blog.skin.php');
include_once("./_tail.php");
?>