<?php
if (!defined('_TUBEWEB_')) exit;
?>

<?php

header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩

// localhost = DB주소, web=DB계정아이디, 1234=DB계정비밀번호, post_board="DB이름"
$db = new mysqli("211.47.74.10", "kokzipgaedev", "a123456789!", "dbkokzipgaedev");
$db->set_charset("utf8");

function mq($sql)
{
	global $db;
	return $db->query($sql);
}
$bno = $_GET['idx'];
$sql = mq("delete from board where idx='$bno';");
?>

<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/" />