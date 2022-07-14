<?php
if(!defined('_TUBEWEB_')) exit;
?>
<form name="form_data" action="<?php echo $form_action_url; ?>" onsubmit="return form_submit(this);" method="post" target="popwin">
<input type="hidden" name="token" value="<?php echo $token; ?>">
<input type="hidden" name="phone_check" value="0">
<!-- find_id Area Start -->
<div id="find_id" class="pb_12">
	<!-- Sub_title04 Area Start -->
	<div class="sub_title04">
	  <div class="container1">
		<h2>계정정보 찾기</h2>
	  </div>
	</div><!-- Sub_title04 Area End -->

	<!-- Box Area Start -->
	<div class="box">
	  <div class="container1">

		<!-- Hd_box Area Start -->
		<ul class="hd_box">
		  <li class="on"><a href="<?php echo TB_BBS_URL; ?>/find_id.php">아이디(이메일)찾기</a></li>
		  <li><a href="<?php echo TB_BBS_URL; ?>/find_pwd.php">비밀번호 찾기</a></li>
		</ul><!-- Hd_box Area End -->

		<!-- Find_id Area Start -->
		<div class="find_id">
		  <h4>휴대폰 인증</h4>
		  <div class="phone">
			<label>
			  <input type="number" name="phone1" maxlength="4" oninput="numberMaxLength(this);"/>
			  <input type="number" name="phone2" maxlength="4" oninput="numberMaxLength(this);"/>
			  <input type="number" name="phone3" maxlength="4" oninput="numberMaxLength(this);"/>
			</label>
			<button type="button" onclick="form_check('phone');">확인</button>
		  </div>
		  <div class="btn_box">
			<button>아이디(이메일)찾기</button>
		  </div>
		</div><!-- Find_id Area End -->

	  </div>
	</div><!-- Box Area End -->
</div><!-- find_id Area End -->
</form>
<script>
function form_check(check_type){

	var f		=	document.fregisterform;
	var msg	=	"";


	//전화번호 체크
	if(check_type == "phone"){

		if($.trim($("input[name=phone1]").val()) == "" || $.trim($("input[name=phone2]").val()) == "" || $.trim($("input[name=phone3]").val()) == ""){
			alert("회원가입시 입력하셨던 연락처 정보를 입력해주세요.");
			return;
		}


		var mb_phone = $.trim($("input[name=phone1]").val())+"-"+$.trim($("input[name=phone2]").val())+"-"+$.trim($("input[name=phone3]").val());

		$.post(
			tb_bbs_url+"/ajax.mb_phone_check.php",
			{mb_phone: mb_phone},
			function(data) {
				if(data == "N"){
					alert("휴대폰 인증 정보를 확인하였습니다.");
					$("input[name=phone_check]").val(1);
					return;
				}else{
					alert("회원가입시 입력하셨던 연락처 정보를 입력해주세요.");
					return;
				}				
			}
		);
	}
}

function openwin() {

}

function form_submit(f){

	if($.trim($("input[name=phone1]").val()) == "" || $.trim($("input[name=phone2]").val()) == "" || $.trim($("input[name=phone3]").val()) == ""){
		alert("회원가입시 입력하셨던 연락처 정보를 입력해주세요.");
		return false;
	}

	if(f.phone_check.value != 1) {
		alert('휴대폰 인증 확인을 하셔야합니다.');
		return false;
	}

	win_open('about:blank', "popwin", "700", "600", "no");

	f.form_data.submit();
}
</script>
