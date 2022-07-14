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
$sql = mq("select * from board where idx='$bno';");
$board = $sql->fetch_array();

?>
<style>
	#board_write {
		width: 100%;
		position: relative;
		margin: 0 auto;
		text-align: center;
	}

	#write_area {
		margin-top: 70px;
		font-size: 14px;
	}

	#in_name {
		margin-top: 30px;
	}

	#in_name textarea {
		font-weight: bold;
		font-size: 26px;
		color: #333;
		width: 100%;
		border: none;
		resize: none;
	}

	#in_title {
		margin-top: 30px;
	}

	#in_title textarea {
		font-weight: bold;
		font-size: 26px;
		color: #333;
		width: 100%;
		border: none;
		resize: none;
	}

	.wi_line {
		border: solid 1px lightgray;
		margin-top: 10px;
	}

	#in_content {
		margin-top: 10px;
	}

	#in_content textarea {
		font: 14px;
		color: #333;
		width: 98%;
		height: 400px;
		resize: none;
	}

	#in_pw input {
		font: 14px;
		margin-top: 10px;
	}

	.bt_se {
		margin-top: 20px;
		text-align: center;
	}

	.bt_se button {
		width: 110px;
		height: 30px;
	}
</style>

<div id="board_write">
	<h1><a href="/">자유게시판</a></h1>
	<h4>글을 수정합니다.</h4>
	<div id="write_area">
		<form action="board_modify_ok.php?idx=<?php echo $bno; ?>" method="post">
			<div id="in_title">
				<textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required><?php echo $board['title']; ?></textarea>
			</div>
			<div class="wi_line"></div>
			<div id="in_name">
				<textarea name="name" id="uname" rows="1" cols="55" placeholder="글쓴이" maxlength="100" required><?php echo $board['name']; ?></textarea>
			</div>
			<div class="wi_line"></div>
			<div id="in_content">
				<textarea name="content" id="ucontent" placeholder="내용" required><?php echo $board['content']; ?></textarea>
			</div>
			<div id="in_pw">
				<input type="password" name="pw" id="upw" placeholder="비밀번호" required />
			</div>
			<div class="bt_se">
				<button type="submit">글 작성</button>
			</div>
		</form>
	</div>
</div>