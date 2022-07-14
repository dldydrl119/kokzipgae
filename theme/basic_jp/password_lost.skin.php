<?php
if(!defined('_TUBEWEB_')) exit;
?>

<div id="find_info" class="new_win">
	<h1 id="win_title"><?php echo $tb['title']; ?></h1>

	<form name="fpasswordlost" action="<?php echo $form_action_url; ?>" method="post" autocomplete="off">
	<input type="hidden" name="token" value="<?php echo $token; ?>">
	<fieldset id="info_fs">
		<p>
			会員加入の際,登録されたメールアドレスを入力してください。<br>
			該当EメールにてIDとパスワード情報をお送り致します。
		</p>
		<div class="info_form">
			<label for="mb_email">E-mail 住所<strong class="sound_only">필수</strong></label>
			<input type="text" name="mb_email" id="mb_email" required email itemname="E-mail 住所" class="required frm_input" size="30">
		</div>
	</fieldset>

	<div class="win_btn">
		<input type="submit" class="btn_lsmall" value="確認">
		<button type="button" class="btn_lsmall bx-white" onclick="window.close();">ウィンドウを閉じる</button>
	</div>	
	</form>
</div>
