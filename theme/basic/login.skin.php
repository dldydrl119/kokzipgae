<?php
if (!defined('_TUBEWEB_')) exit;
?>
<form name="flogin" action="<?php echo $login_action_url; ?>" method="post">
	<input type="hidden" name="url" value="<?php echo $login_url; ?>">
	<div id="login_page" class="pb_12">
		<div class="container1">
			<div class="login">
				<!-- Text_guide Area Start -->
				<div class="sub_title04">
					<!-- <h2 class="no_login">
						아직 <span>로그인</span>을 하지 않으셨습니다.<br>
						로그인 후 이용 부탁드립니다.
					</h2> -->
					<h2 class="mis_type">
						계정 정보가 일치하지 않습니다.
						
					</h2>
				</div><!-- Text_guide Area End -->

				<!-- Login_box Area Start -->
				<div class="login_box">
					<div class="box_top">
						<a href="<?php echo TB_BBS_URL; ?>/login.php" class="on">로그인</a>
						<a href="<?php echo TB_BBS_URL; ?>/register_intro.php">회원가입</a>
					</div>
					<div class="box_bottom">
						<div class="login_form">
							<input type="text" name="mb_id" id="login_id" placeholder="이메일" onkeydown="javascipt:if(event.keyCode == 13) flogin_submit(document.flogin);">
							<input type="password" name="mb_password" id="login_pw" placeholder="비밀번호" maxlength="20" minlength="10" onkeydown="javascipt:if(event.keyCode == 13) flogin_submit(document.flogin);">
						</div>
						<label for="id_save">
							<input type="checkbox" name="auto_login" id="login_auto_login">
							<span>아이디 저장</span>
						</label>
						<button type="button" onclick="flogin_submit(document.flogin);">로그인</button>
						<!-- SNS_login Area Start -->
						 <div class="sns_login">

							<ul>
								<?php if ($default['de_kakao_rest_apikey']) { ?>
									<li class="sns_ka"><?php echo get_login_oauth('kakao', 1); ?></li>
								<?php } ?>
								<?php if ($default['de_naver_appid'] && $default['de_naver_secret']) { ?>
									<li class="sns_na"><?php echo get_login_oauth('naver', 1); ?></li>
								<?php } ?>
								<?php if ($default['de_facebook_appid'] && $default['de_facebook_secret']) { ?>
									<li><?php echo get_login_oauth('facebook', 1); ?></li>
								<?php } ?>
								<li><?php echo get_login_oauth('google', 1); ?></li>
							</ul>
						</div> 
						
						<!-- SNS_login Area Start -->
						<div class="search_mem">
							<a href="<?php echo TB_BBS_URL; ?>/find_id.php">아이디 찾기</a>
							<a href="<?php echo TB_BBS_URL; ?>/find_pwd.php">비밀번호 찾기</a>
						</div>
					</div>
				</div><!-- Login_box Area End -->


			</div>
		</div>
	</div>
</form>
<script>
	$(function() {
		$("#login_auto_login").click(function() {
			if (this.checked) {
				this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
			}
		});
	});


	function flogin_no_act() {
		$(".sub_title04 h2.no_login").hide();
		$(".sub_title04 h2.mis_type").show();
	}

	function flogin_submit(f) {
		if (!f.mb_id.value) {
			alert('아이디를 입력하세요.');
			f.mb_id.focus();
			return;
		}
		if (!f.mb_password.value) {
			alert('비밀번호를 입력하세요.');
			f.mb_password.focus();
			return;
		}

		$.post(
			tb_bbs_url + "/ajax.login_check.php", {
				mb_id: f.mb_id.value,
				mb_password: f.mb_password.value
			},
			function(data) {

				if (data == "N") {
					flogin_no_act();
					return;
				} else {
					f.submit();
				}
			}
		);

		return true;
	}

	function fguest_submit(f) {
		if (!f.od_id.value) {
			alert('주문번호를 입력하세요.');
			f.od_id.focus();
			return false;
		}
		if (!f.od_pwd.value) {
			alert('비밀번호를 입력해주세요.');
			f.od_pwd.focus();
			return false;
		}

		return true;
	}

	$(document).ready(function() {
		$(".login_tab>li:eq(0)").addClass('active');
		$("#login_fld").addClass('active');

		$(".login_tab>li").click(function() {
			var activeTab = $(this).attr('data-tab');
			$(".login_tab>li").removeClass('active');
			$(".login_wrap").removeClass('active');
			$(this).addClass('active');
			$("#" + activeTab).addClass('active');
		});
	});
</script>