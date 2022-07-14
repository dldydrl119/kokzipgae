<?php
if (!defined('_TUBEWEB_')) exit;
?>

<script type="text/javascript" src="/plugin/editor/smarteditor2/js/HuskyEZCreator.js" charset="utf-8"></script>
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
	<div style="height: 90px;"></div>
	<h1><a href="/">신고하기</a></h1>
	<h4>신고하실 내용을 작성해주세요.</h4>
	<div id="write_area">
		<form action="board_write_ok.php" method="post" onsubmit="return fregform_submit(this)" enctype="MULTIPART/FORM-DATA">
			<div id="in_title">
				<textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required></textarea>
			</div>
			<div class="wi_line"></div>
			<div id="in_name">
				<textarea name="name" id="uname" rows="1" cols="55" placeholder="글쓴이" maxlength="100" required></textarea>
			</div>


				<!-- <?php echo editor_html('memo2', get_text(stripcslashes($board['memo2']), 0)); ?> -->
				<?php echo editor_html('memo2', get_text($board['memo2'], 0)); ?>


			<div class="wi_line"></div>
			<div id="in_content">
				<textarea name="content" id="ucontent" placeholder="내용" required></textarea>
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
