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
//각 변수에 write.php에서 input name값들을 저장한다
$username = $_POST['name'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d');
$memo2 = $_POST['memo2'];
$value['memo2']				= $_POST['memo2']; //상품설명

if ($username && $userpw && $title && $content) {
	$sql = mq("insert into board(name,pw,title,content,date,hit,memo2) values('" . $username . "','" . $userpw . "','" . $title . "','" . $content . "','" . $date . "','0','". $memo2 . "')");
	echo "<script>
    alert('글쓰기 완료되었습니다.');
    location.href='board.php';</script>";
} else {
	echo "<script>
    alert('글쓰기에 실패했습니다.');
    history.back();</script>";
}
?>