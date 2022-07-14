<?php
if(!defined('_TUBEWEB_')) exit;
?>
<!-- Mem_form Area Start -->
<div id="mem_form" class="pb_12">
	<!-- 모바일 상단 타이틀 -->
	<div class="mobile_title05">
	  <div class="container">
		<!-- 모바일 히스토리 뒤로가기 버튼 -->
		<div id="history_back">
		  <button onclick="history.back()"><img src="<?php echo TB_IMG_URL; ?>/hi_back_ico.png" alt="history_back"></button>
		</div><!-- 모바일 히스토리 뒤로가기 버튼 -->
		<h3>회원가입</h3>
	  </div>
	</div><!-- 모바일 상단 타이틀 -->

	<!-- Sub_title03 Area Start -->
	<div class="sub_title03">
	  <div class="container1">
		<h2>회원가입</h2>
		<p class="text_m">이메일로 간단 회원가입</p>
		<!-- <p>회원가입 시 2,000 포인트 선물!</p> -->
	  </div>
	</div><!-- Sub_title03 Area End -->

	<!-- Mem_box Area Start -->
	<form name="fregisterform" id="fregisterform" action="<?php echo $register_action_url; ?>" onsubmit="return fregisterform_submit(this);" method="post" autocomplete="off">
	<input type="hidden" name="pt_id" value="<?php echo $pt_id; ?>">
	<input type="hidden" name="token" value="<?php echo $token; ?>">
	<input type="hidden" name="auth_check" value="N">
	<input type="hidden" name="phone_check" value="N">
	<div class="mem_box">
	  <div class="container1">

		<div class="text">
		  <h3>이메일로 간단 회원가입</h3>
		</div>

		<!-- List_box Area Start -->

		  <ul class="list_box">
			<li>
			  <dl>
				<dt>*이름 </dt>
				<dd><input type="text" name="name"  value="<?php echo $cert_name; ?>"  required itemname="회원명" ></dd>
			  </dl>
			</li>
			<li>
			  <dl>
				<dt>*아이디 <span>(이메일)</span></dt>
				<dd><input type="text" name="id" id="mb_id" email required  itemname="아이디" onblur="reg_mb_id_ajax();"></dd>
			  </dl>
			</li>
			<li>
			  <dl>
				<dt>*비밀번호 <span>(영문 숫자 조합 8자 이상)</span></dt>
				<dd><input type="password" name="passwd" required itemname="비밀번호" placeholder="영문 숫자 조합 8자 이상" maxlength="20" minlength="8"></dd>
			  </dl>
			</li>
			<li>
			  <dl>
				<dt>*비밀번호 확인</dt>
				<dd class="df"><input type="password" name="repasswd" required itemname="비밀번호확인" placeholder="영문 숫자 조합 8자 이상" maxlength="20" minlength="8"><button type="button" onclick="form_check('pass');">확인</button></dd>
			  </dl>
			</li>
			<li>
			  <dl>
				<dt>*닉네임</dt>
				<dd class="df"><input type="text" name="nickname"  required itemname="닉네임" ><button type="button" onclick="form_check('nicname');">확인</button></dd>
			  </dl>
			</li>
			<li>
			  <dl>
				<dt>성별</dt>
				<dd class="df">
				  <label for="women" class="df gender">
					<input type="radio" <?php if($cert['j_sex']=='0'){echo " checked";}?> value="F" name="gender" id="women">
					<span>여자</span>
				  </label>
				  <label for="men" class="df gender">
					<input type="radio" <?php if($cert['j_sex']=='1'){echo " checked";}?> value="M" name="gender" id="men">
					<span>남자</span>
				  </label>
				</dd>
			  </dl>
			</li>
			<li>
			  <dl>
				<dt>*생년월일</dt>
				<dd class="df date">
				  <select name="birth_year"  itemname="생년월일" <?php if($default['de_certify_use']){echo $readonly;}?>>
					<option value="" selected disabled hidden>년</option>
					<?php for($i=1900;$i<date("Y");$i++){ ?>
					<option value="<?=$i?>"><?=$i?></option>
					<?php }?>
				  </select>
				  <select name="birth_month"  itemname="생년월일" <?php if($default['de_certify_use']){echo $readonly;}?>>
					<option value="" selected disabled hidden>월</option>
					<?php for($i=1;$i<=12;$i++){ ?>
					<option value="<?=str_pad($i,2, "0", STR_PAD_LEFT)?>"><?=str_pad($i,2, "0", STR_PAD_LEFT)?></option>
					<?php }?>
				  </select>
				  <select name="birth_day"  itemname="생년월일" <?php if($default['de_certify_use']){echo $readonly;}?> >
					<option value="" selected disabled hidden>일</option>
					<?php for($i=1;$i<=31;$i++){ ?>
					<option value="<?=str_pad($i,2, "0", STR_PAD_LEFT)?>"><?=str_pad($i,2, "0", STR_PAD_LEFT)?></option>
					<?php }?>
				  </select>
				  <select name="birth_time">
					<option value="" selected disabled hidden>시</option>
					<option value="모름">모름</option>
					<?php for($i=1;$i<=24;$i++){ ?>
					<option value="<?=str_pad($i,2, "0", STR_PAD_LEFT)?>"><?=str_pad($i,2, "0", STR_PAD_LEFT)?></option>
					<?php }?>
				  </select>
				</dd>
			  </dl>
			</li>
			<li>
			  <dl>
				<dt>*전화번호</dt>
				<dd class="df">
				  <label class="df phone">
					<input type="text" name="phone1" required maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" //>
					<input type="text" name="phone2" required maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" //>
					<input type="text" name="phone3" required maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" //>
				  </label>
				  <button onclick="form_check('phone');" type="button">확인</button>
				</dd>
			  </dl>
			</li>
			<li>
					<dl>
						<dt>*인증번호</dt>
						<dd class="df">
							<input type="text" name="authenticode" id="authenticode" placeholder="인증번호 입력" required/>
							<button type="button" onclick="form_check('authenticode');" >인증</button>
						</dd>
					</dl>
			</li>
		  </ul>
		<!-- List_box Area End -->

		<!-- 비밀번호가 일치하지 않을 시 출력되는 창 -->
		<div class="invalid">
		  <p>비밀번호가 일치하지 않습니다.</p>
		</div><!-- 비밀번호가 일치하지 않을 시 출력되는 창 -->

		<!-- Agree_box Area Start -->
		<div class="agree_box">
		  <label for="mem_agree_1">
			<input type="checkbox" name="mem_agree" id="mem_agree_1">
				<p>본인은 만 19세 이상이며, <span>이용약관, 개인정보 수집 및 이용</span> 내용을 확인하였으며, 동의합니다.</p>
		  </label>
		</div><!-- Agree_box Area End -->

		<!-- Agree_bt Area Start -->
		<div class="agree_bt">
			<input type="submit" id="real_join" value="동의하고 가입하기">
		</div><!-- Agree_bt Area End -->

		<!-- Text_deco Area Start -->
		<div class="text_deco">
		  <p>‘ * ’ 표시는 필수 입력 사항입니다.</p>
		</div><!-- Text_deco Area End -->

	  </div>
	</div>    <!-- Mem_box Area End -->
	</form>
</div><!-- Mem_form Area End -->
<script>

function form_check(check_type){

	var f		=	document.fregisterform;
	var msg	=	"";

	//패스워드 체크
	if(check_type == "pass"){

		var chk_num	=	f.passwd.value.search(/[0-9]/g);
		var chk_eng	=	f.passwd.value.search(/[a-z]/ig);


		var msg		=	"사용하셔도 좋은 패스워드 입니다.";


		if(chk_num < 0 || chk_eng < 0){
			msg	=	"비밀번호는 숫자와 영문자 조합으로 사용해야 합니다.";
			f.passwd.focus();
		}


		// 패스워드 검사
		if(f.passwd.value.length < 8) {
			msg	=	"비밀번호를 8글자 이상 입력하십시오.";
			f.passwd.focus();
		}

		if(f.passwd.value != f.repasswd.value) {
			msg	=	"비밀번호가 일치하지 않습니다.";
			f.repasswd.focus();		
		}

		$(".invalid").fadeIn("slow")
		$(".invalid p").empty().text(msg);
		
		setTimeout(function() {
			$(".invalid").fadeOut("slow")
		}, 2000);
		
		return;

	}


	//닉네임 체크
	if(check_type == "nicname"){

		if($.trim($("input[name=nickname]").val()) == ""){

			f.nickname.focus();
			$(".invalid").fadeIn("slow")
			$(".invalid p").empty().text("닉네임을 입력하십시오.");
			
			setTimeout(function() {
				$(".invalid").fadeOut("slow")
			}, 2000);

			return;
		}

		var mb_name = $.trim($("input[name=nickname]").val());

		$.post(
			tb_bbs_url+"/ajax.mb_name_check.php",
			{ mb_name: mb_name },
			function(data) {
				
				if(data == "Y"){
					var msg		=	"사용하셔도 좋은 닉네임 입니다.";
				}else{
					var msg		=	"이미 사용중인 닉네임 입니다.";				
				}

				$(".invalid").fadeIn("slow")
				$(".invalid p").empty().text(msg);
				
				setTimeout(function() {
					$(".invalid").fadeOut("slow")
				}, 2000);
				
			}
		);
	}

	//전화번호 체크
	if(check_type == "phone"){

		if($.trim($("input[name=phone1]").val()) == "" || $.trim($("input[name=phone2]").val()) == "" || $.trim($("input[name=phone3]").val()) == ""){

			$(".invalid").fadeIn("slow")
			$(".invalid p").empty().text("전화번호를 입력하십시오.");
			
			setTimeout(function() {
				$(".invalid").fadeOut("slow")
			}, 2000);

			return;
		}


		var mb_phone = $.trim($("input[name=phone1]").val())+"-"+$.trim($("input[name=phone2]").val())+"-"+$.trim($("input[name=phone3]").val());

		$.post(
			tb_bbs_url+"/ajax.mb_phone_check.php",
			{mb_phone: mb_phone},
			function(data) {

				if(data == "Y"){					
					$("input[name=phone_check]").val("Y");
					var msg		=	"사용하셔도 좋은 전화번호 입니다.";
				}else{
					$("input[name=phone_check]").val("N");
					var msg		=	"이미 사용중인 전화번호 입니다.";				
				}

				$(".invalid").fadeIn("slow")
				$(".invalid p").empty().text(msg);
				
				setTimeout(function() {
					$(".invalid").fadeOut("slow")
				}, 2000);
				
			}
		);
	}

	//인증번호 인증
	if(check_type == "authenticode"){

		if($.trim($("input[name=authenticode]").val()) == ""){

			$(".invalid").fadeIn("slow")
			$(".invalid p").empty().text("인증번호를 입력하십시오.");
			
			setTimeout(function() {
				$(".invalid").fadeOut("slow")
			}, 2000);

			return;
		}

		var authenticode	=	$.trim($("input[name=authenticode]").val());

		$.post(
			tb_bbs_url+"/ajax.mb_authcode_check.php",
			{cert_code: authenticode},
			function(data) {

				if(data == "Y"){
					$("input[name=auth_check]").val("Y");
					var msg		=	"인증이 정상적으로 완료되었습니다";
				}else{
					$("input[name=auth_check]").val("N");
					var msg		=	"인증이 실패하였습니다.";				
				}

				$(".invalid").fadeIn("slow")
				$(".invalid p").empty().text(msg);
				
				setTimeout(function() {
					$(".invalid").fadeOut("slow")
				}, 2000);
				
			}
		);
	}

}


function fregisterform_submit(f)
{
	var mb_id = reg_mb_id_check(f.id.value);
	if(mb_id) {
		alert("'"+mb_id+"'은(는) 사용하실 수 없는 아이디입니다.");
		f.id.focus();
		return false;
	}



	var chk_num	=	f.passwd.value.search(/[0-9]/g);
	var chk_eng	=	f.passwd.value.search(/[a-z]/ig);



	if(chk_num < 0 || chk_eng < 0){

		msg	=	"비밀번호는 숫자와 영문자 조합으로 10글자 이상 사용해야 합니다.";

		f.passwd.focus();
		$(".invalid").fadeIn("slow")
		$(".invalid p").empty().text(msg);
		
		setTimeout(function() {
			$(".invalid").fadeOut("slow")
		}, 2000);
		
        return false;
	}




	// 패스워드 검사
	if(f.passwd.value.length < 8) {
		msg	=	"비밀번호를 8글자 이상 입력하십시오.";
		f.passwd.focus();
		$(".invalid").fadeIn("slow")
		$(".invalid p").empty().text(msg);
		
		setTimeout(function() {
			$(".invalid").fadeOut("slow")
		}, 2000);
		
		return false;
	}

	if(f.passwd.value != f.repasswd.value) {

		msg	=	"비밀번호가 일치하지 않습니다.";
		f.repasswd.focus();
		$(".invalid").fadeIn("slow")
		$(".invalid p").empty().text(msg);
		
		setTimeout(function() {
			$(".invalid").fadeOut("slow")
		}, 2000);

		return false;
	}

	if($.trim($("input[name=nickname]").val()) == ""){

		f.nickname.focus();
		$(".invalid").fadeIn("slow")
		$(".invalid p").empty().text("닉네임을 입력하십시오.");
		
		setTimeout(function() {
			$(".invalid").fadeOut("slow")
		}, 2000);

		return false;
	}

	var mb_name = $.trim($("input[name=nickname]").val());

	$.post(
		tb_bbs_url+"/ajax.mb_name_check.php",
		{ mb_name: mb_name },
		function(data) {

			if(data != "Y"){
				
				$(".invalid").fadeIn("slow")
				$(".invalid p").empty().text("이미 사용중인 닉네임 입니다.");
				
				setTimeout(function() {
					$(".invalid").fadeOut("slow")
				}, 2000);

				return false;
			}			
		}
	);
	
	/*
	if($("input[name=gender]:eq(0)").is(":checked") == false && $("input[name=gender]:eq(1)").is(":checked") == false){
		alert("성별을 선택해주세요.");
		return false;
	}
	*/

	if($.trim($("input[name=phone1]").val()) == "" || $.trim($("input[name=phone2]").val()) == "" || $.trim($("input[name=phone3]").val()) == ""){

		$(".invalid").fadeIn("slow")
		$(".invalid p").empty().text("전화번호를 입력하십시오.");
		
		setTimeout(function() {
			$(".invalid").fadeOut("slow")
		}, 2000);

		return false;
	}

	/*
	var mb_phone = $.trim($("input[name=phone1]").val())+"-"+$.trim($("input[name=phone2]").val())+"-"+$.trim($("input[name=phone3]").val());

	$.post(
		tb_bbs_url+"/ajax.mb_phone_check.php",
		{mb_phone: mb_phone},
		function(data) {

			if(data != "Y"){			

				$(".invalid").fadeIn("slow")
				$(".invalid p").empty().text("이미 사용중인 전화번호 입니다.");
				
				setTimeout(function() {
					$(".invalid").fadeOut("slow")
				}, 2000);

				return false;
			}	
		}
	);
	*/
	

	if($.trim($("input[name=phone_check]").val()) == "N"){

		$(".invalid").fadeIn("slow")
		$(".invalid p").empty().text("입력하신 전화번호의 중복확인이 필요합니다.");
		
		setTimeout(function() {
			$(".invalid").fadeOut("slow")
		}, 2000);

		return false;
	}

	if($.trim($("input[name=auth_check]").val()) == "N"){

		$(".invalid").fadeIn("slow")
		$(".invalid p").empty().text("인증번호를 인증하십시오.");
		
		setTimeout(function() {
			$(".invalid").fadeOut("slow")
		}, 2000);

		return false;
	}


	if($("input[name=mem_agree]").is(":checked") == false){
		alert("본인은 만 19세 이상이며, 이용약관, 개인정보 수집 및 이용 내용을 확인하였으며, 동의를 하셔야 합니다.");
		return false;
	}

	if(confirm("회원가입 하시겠습니까?") == false)
		return false;

    return true;
}

// 회원아이디 검사
function reg_mb_id_check(mb_id)
{
    mb_id = mb_id.toLowerCase();

    var prohibit_mb_id = "<?php echo trim(strtolower($config['prohibit_id'])); ?>";
    var s = prohibit_mb_id.split(",");

    for(i=0; i<s.length; i++) {
        if(s[i] == mb_id)
            return mb_id;
    }
    return "";
}

// 금지 메일 도메인 검사
function prohibit_email_check(email)
{
    email = email.toLowerCase();

    var prohibit_email = "<?php echo trim(strtolower(preg_replace("/(\r\n|\r|\n)/", ",", $config['prohibit_email']))); ?>";
    var s = prohibit_email.split(",");
    var tmp = email.split("@");
    var domain = tmp[tmp.length - 1]; // 메일 도메인만 얻는다

    for(i=0; i<s.length; i++) {
        if(s[i] == domain)
            return domain;
    }
    return "";
}

function reg_mb_id_ajax() {
	var mb_id = $.trim($("#mb_id").val());
	$.post(
		tb_bbs_url+"/ajax.mb_id_check.php",
		{ mb_id: mb_id },
		function(data) {
			$(".invalid").fadeIn("slow")
			$(".invalid p").empty().text(data);
			
			setTimeout(function() {
				$(".invalid").fadeOut("slow")
			}, 1000);
			
		}
	);
}
</script>