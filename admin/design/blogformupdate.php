<?php
include_once("./_common.php");

check_demo();

check_admin_token();

unset($value);
$value['co_subject'] = $_POST['co_subject'];
$value['co_blog'] = $_POST['co_blog'];
$value['co_mobile_blog'] = $_POST['co_mobile_blog'];

if($w == "") {
	insert("shop_blog", $value);
	$co_id = sql_insert_id();

	goto_url(TB_ADMIN_URL."/design.php?code=blogform&w=u&co_id=$co_id");

} else if($w == "u") {
	update("shop_blog", $value," where co_id='$co_id'");
	
	goto_url(TB_ADMIN_URL."/design.php?code=blogform&w=u&co_id=$co_id$qstr&page=$page");
}
?>