<?php
if (!defined('_TUBEWEB_')) exit;


?>
<?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_TUBEWEB_')) exit; // 개별 페이지 접근 불가


$begin_time = get_microtime();

if (!isset($tb['title'])) {
	$tb['title'] = get_head_title('head_title', $pt_id);
	$tb_head_title = $tb['title'];
} else {
	$tb_head_title = $tb['title']; // 상태바에 표시될 제목
	$tb_head_title .= " | " . get_head_title('head_title', $pt_id);
}

// 현재 접속자
// 게시판 제목에 ' 포함되면 오류 발생
$tb['lo_location'] = addslashes($tb['title']);
if (!$tb['lo_location'])
	$tb['lo_location'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
$tb['lo_url'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
if (strstr($tb['lo_url'], '/' . TB_ADMIN_DIR . '/') || is_admin()) $tb['lo_url'] = '';





/*
// 만료된 페이지로 사용하시는 경우
header("Cache-Control: no-cache"); // HTTP/1.1
header("Expires: 0"); // rfc2616 - Section 14.21
header("Pragma: no-cache"); // HTTP/1.0
*/
?>
<!doctype html>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<meta http-equiv="imagetoolbar" content="no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- 테스트로 넣어봅니다. -->
	<?php
	include_once(TB_LIB_PATH . '/seometa.lib.php');

	if ($config['add_meta'])
		echo $config['add_meta'] . PHP_EOL;
	?>
	<title><?php echo $tb_head_title; ?></title>
	<link rel="stylesheet" href="<?php echo TB_CSS_URL; ?>/default.css?ver=<?php echo TB_CSS_VER; ?>">
	<link rel="stylesheet" href="<?php echo TB_THEME_URL; ?>/style.css?ver=<?php echo TB_CSS_VER; ?>">
	<?php if ($ico = display_logo_url('favicon_ico')) { // 파비콘 
	?>
		<link rel="shortcut icon" href="<?php echo $ico; ?>" type="image/x-icon">
	<?php } ?>
	<!-- Font Noto Sans -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<script>
		var tb_url = "<?php echo TB_URL; ?>";
		var tb_bbs_url = "<?php echo TB_BBS_URL; ?>";
		var tb_shop_url = "<?php echo TB_SHOP_URL; ?>";
		var tb_mobile_url = "<?php echo TB_MURL; ?>";
		var tb_mobile_bbs_url = "<?php echo TB_MBBS_URL; ?>";
		var tb_mobile_shop_url = "<?php echo TB_MSHOP_URL; ?>";
		var tb_is_member = "<?php echo $is_member; ?>";
		var tb_is_mobile = "<?php echo TB_IS_MOBILE; ?>";
		var tb_cookie_domain = "<?php echo TB_COOKIE_DOMAIN; ?>";
	</script>
	<script src="<?php echo TB_JS_URL; ?>/jquery-1.8.3.min.js"></script>
	<script src="<?php echo TB_JS_URL; ?>/jquery-ui-1.10.3.custom.js"></script>
	<script src="<?php echo TB_JS_URL; ?>/common.js?ver=<?php echo TB_JS_VER; ?>"></script>
	<script src="<?php echo TB_JS_URL; ?>/slick.js"></script>
	<?php if ($config['mouseblock_yes']) { // 마우스 우클릭 방지 
	?>
		<script>
			$(document).ready(function() {
				$(document).bind("contextmenu", function(e) {
					return false;
				});
			});
			$(document).bind('selectstart', function() {
				return false;
			});
			$(document).bind('dragstart', function() {
				return false;
			});
		</script>
	<?php } ?>
	<?php
	if ($config['head_script']) { // head 내부태그
		echo $config['head_script'] . PHP_EOL;
	}

	$at    =  sql_fetch("select count(*) as re_cnt , if(isnull(round(sum(score)/count(*),1)), '0',  round(sum(score)/count(*),1)) as score from shop_goods_review where  gs_id= '" . $row['index_no'] . "'");

	$goods_list[$i]  =  $row;


	$goods_list[$i]["re_cnt"]            =  $at["re_cnt"];
	?>


</head>
<body<?php echo isset($tb['body_script']) ? $tb['body_script'] : ''; ?>>



	<?php
	if (!defined('_TUBEWEB_')) exit;

	if (defined('_INDEX_')) { // index에서만 실행
		include_once(TB_LIB_PATH . '/popup.inc.php'); // 팝업레이어
	}


	if (is_mobile() == true) {
		$filed  =  "mobile_logo";
	} else {
		$filed  =  "basic_logo";
	}

	$row = sql_fetch("select $filed from shop_logo where mb_id='$pt_id'");

	if (!$row[$filed] && $pt_id != 'admin') {
		$row = sql_fetch("select $filed from shop_logo where mb_id='admin'");
	}

	$file  =  TB_DATA_URL . '/banner/' . $row[$filed];

	?>
	<!-- Header Area Start -->
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MPFD645" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<header style="border-bottom: 1px solid #f3f3f3;">
		<div class="gnb">
			<div class="container">

				<ul>
					<?php
					$counseling_type  =  trim($_POST['counseling_type']);
					$tnb = array();

					if ($is_admin)
						$tnb[] = '<li><a href="' . $is_admin . '" target="_blank">관리자</a></li>';
					if ($member['id']) {
						$tnb[] = '<li><a href="' . TB_BBS_URL . '/logout.php">로그아웃</a></li>';
						$tnb[] = '<li><a href="' . TB_SHOP_URL . '/orderinquiry.php">마이페이지</a></li>';
					} else {
						$tnb[] = '<li><a href="' . TB_BBS_URL . '/login.php?url=' . $urlencode . '" id="login">로그인</a></li>';
						$tnb[] = '<li><a href="' . TB_BBS_URL . '/register_intro.php" id="join">회원가입</a></li>';
					}

					$tnb_str = implode(PHP_EOL, $tnb);
					echo $tnb_str;
					?>
				</ul>
			</div>
		</div>
		<div class="hd">
			<div class="container">
				<div class="logo">
					<h1><a href="/index.php#main_category" class="ir_w" style="background:url('<?= $file ?>') no-repeat 50% 50% / cover;">콕집게</a></h1>
					<h1><a href="javascript:history.back()" class="ir_m" style="background:url('/img/main_prev1.png') no-repeat 50% 50%; width:10%; background-size:24px; float:left; height:26px; margin-bottom:10px;">콕집게</a></h1>
				</div>
				<form name="fsearch" id="fsearch" method="post" action="/" autocomplete="off">
					<input type="hidden" name="hash_token" value="<?php echo TB_HASH_TOKEN; ?>">
					<input type="text" name="ss_tx" class="sch_stx" maxlength="20" placeholder="제 사주팔자를 알고싶어요." value="<?= $_REQUEST["ss_tx"] ?>">
					<button type="submit"><img src="<?php echo TB_IMG_URL; ?>/search_ico.png" alt="search_icon"></button>
				</form>
				<ul>
					<?php
					$tnb = array();
					$tnb[] = '<li><a href="/index.php#main_category"><img src="' . TB_IMG_URL . '/hd_ico1.png" alt="ico1"><p>콕집게</p></a></li>';
					$tnb[] = '<li><a href="' . TB_SHOP_URL . '/wish.php"><img src="' . TB_IMG_URL . '/hd_ico2.png" alt="ico2"><p>찜주머니</p></a></li>';
					$tnb[] = '<li><a href="' . TB_SHOP_URL . '/orderinquiry.php"><img src="' . TB_IMG_URL . '/hd_ico3.png" alt="ico3"><p>마이메뉴</p></a></li>';
					$tnb_str = implode(PHP_EOL, $tnb);
					echo $tnb_str;
					?>
				</ul>
			</div>
		</div>
		<!-- <div class="m_alarm_ico">
      <a class="share_bt"><img src="<?php echo TB_IMG_URL; ?>/m_share_ico.png" alt="quick_ico"></a>
    </div>
    <div class="m_quick_left_top">
      <a href="javascript:itemlistwish('<?php echo $index_no; ?>');" class="m_bokzzim"><img src="<?php echo TB_IMG_URL; ?>/<? if ($wish_cnt["cnt"] == 0) {
																																echo "hd_ico22.png";
																															} else {
																																echo "m_call_dibs_ico.png";
																															} ?>" alt="ico2"><img src="https://dldydrl112.cafe24.com:443/img/hd_ico22.png" alt="ico2" style="display: none;"></a>
    </div> -->
	</header><!-- Header Area End -->



  <!-- Mypage Area Start -->
  <div id="mypage" class="pd_12">

      <!-- Mem_info Area Start -->
 	  <? include_once(TB_THEME_PATH.'/aside_mem_info.skin.php'); ?>
      <!-- Mem_info Area End -->

      <!-- My_box Area Start -->
      <div class="my_box">
        <div class="container1">
	 	  <? 
		  include_once(TB_THEME_PATH.'/aside_my.skin.php'); 
		   ?>
          <!-- Right_box Area Start -->
          <div class="right_box">
            <!-- Content_box Area Start -->
            <div class="content_box">
              <!-- Sub_title01 Area Start -->
              <div class="sub_title01"><h3><?=$tb['title']?></h3></div><!-- Sub_title01 Area End -->
				<div id="edit_profile">
				  <form name="fmemberform" id="fmemberform" method="post" action="<?=$form_action_url?>" enctype="MULTIPART/FORM-DATA">
				  <input type="hidden" name="token" value="<?php echo $token; ?>">
				  <input type="hidden" name="id" value="<?=$member['id']?>">
				  <input type="hidden" name="phone_flag" value="0">
				  <input type="hidden" name="check_number" value="">
				  <div class="list_box">
					<div class="mem_edit">
					  <div class="mem_img">
						<div class="img_box">
							<?php if($member['mem_img']){ ?>
								<?php if($member['mem_img_type'] == "S"){ ?>
								<img src="<?php echo $member['mem_img']; ?>" alt="img">
								<?php }else{ ?>
								<img src="<?php echo $upl_dir; ?>/<?=$member['mem_img']?>" alt="img">
								<?php }?>
							<?php }else{ ?>
								<span class="mem_no_img"><img src="<?php echo TB_IMG_URL; ?>/no_img.jpg" alt="img"></span>
							<?php } ?>
						</div>
						<input type="file" name="mem_img" id="thumb_upload" class="screen-hidden" onchange="checkImg(this);">
						<label for="thumb_upload"></label>
					  </div>
					  <div class="input-group">
						<div class="form-group has-feedback has-clear">
							<input type="text" class="form-control" name="nickname" value='<?=$member['nickname']?>' maxlength='7'>
							<span class="form-control-clear glyphicon glyphicon-remove form-control-feedback hidden"><img src="<?php echo TB_IMG_URL; ?>/no_text.png" alt="no_text"></span>
						</div>
					</div>
					</div>
					<ul class="container_ul">
					  <li>
						<dl class="name df">
						  <dt>이름: <span class="user_name"><?=$member['name']?></span></dt>
						</dl>
					  </li>
					  <li>
						<dl class="email df">
						  <dt>이메일</dt>
						  <dd><!-- <span><img src="<?php echo TB_IMG_URL; ?>/naver_email_ico.png" alt="naver_email_ico"></span> --><?=$member['id']?></dd>
						</dl>
					  </li>
					  <li>
						<dl class="pwd df">
						  <dt>비밀번호<span class="m_txt">(영문 숫자 조합 8자 이상)</span></dt>
						  <dd class="pwd_hidden"><input type="password" name="passwd" id="pwd1" placeholder="8자~20자 이내"></dd>
						  <dd><button class="pw_bt" type="button">변경</button></dd>
						</dl>
					  </li>
					  <li class="pwd_hidden">
						<dl class="pwd1 df">
						  <dt>비밀번호 확인</dt>
						  <dd class="df"><input type="password" name="repasswd" id="pwd2" placeholder="8자~20자 이내"><button type="button" onclick = "pass_change();">변경</button><span>(영문 숫자 조합 8자 이상)</span></dd>
						</dl>
					  </li>
					  <li>
						<dl class="phone df">
						  <dt>휴대폰 인증</dt>
						  <dd class="df phone_hidden clearfix">
							<div class="p_1 df">
							  <input type="text" name="phone1" id="phone1" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength=3 value="<?=$phone_01?>" readonly />
							  <input type="text" name="phone2" id="phone2" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength=4 value="<?=$phone_02?>" readonly />
							  <input type="text" name="phone3" id="phone3" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength=4 value="<?=$phone_03?>" readonly />
							  <button type="button" onclick="sms_send_check();">인증번호</button>
							</div>
							<div class="p_2 df">
							  <input type="text" name="certification" id="certification" placeholder="인증번호 입력">
							  <button type="button" onclick="sms_check_confirm();">인증</button>
							</div>
						  </dd>
						  <dd><button class="ph_bt" type="button" onclick="sms_send_check();">인증</button></dd>
						</dl>
					  </li>
					  <li class="bb_mo">
						<dl class="date">
						  <dt>생년월일 <span>(년/월/일/시)</span></dt>
						  <dd class="df">
							<input type="text" name="birth_year" id="year" placeholder="년도" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength=2 value="<?=$member["birth_year"]?>" />
							<input type="text" name="birth_month" id="month" placeholder="월" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength=2 value="<?=$member["birth_month"]?>" />
							<input type="text" name="birth_day" id="day" placeholder="일" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength=2  value="<?=$member["birth_day"]?>"  />
							<input type="text" name="birth_time" id="time" placeholder="시" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength=2 value="<?=$member["birth_time"]?>" />
							<input type="text" name="birth_minute" id="minute" placeholder="분" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength=2 value="<?=$member["birth_minute"]?>" />
						  </dd>
						</dl>
					  </li>
					  <li>
						<dl class="marketing">
						  <dt>마케팅 수신 정보동의</dt>
						  <dd>*이벤트 및 혜택에 대한 정보를 받으실 수 있어요.</dd>
						</dl>
					  </li>
					</ul>
					<div class="agree_box">
					  <label for="email_agree">
						<span>메일 수신동의</span>
						<input type="checkbox" name="mailser" id="email_agree" value="Y" <?php if($member["mailser"] == "Y") echo "checked"; ?>> 
					  </label>
					  <label for="sms_agree">
						<span>SMS 수신동의</span>
						<input type="checkbox" name="smsser" id="sms_agree" value="Y" <?php if($member["smsser"] == "Y") echo "checked"; ?>> 
					  </label>
					</div>
				  </form>
				  </div>
				  <div class="apply_bt">
					<a href="javascript:member_edit_submit();">수정하기</a>
				  </div>
				  <div class="btn_box">
					<a href="<?php echo TB_BBS_URL; ?>/logout.php">로그아웃</a>
					<a href="<?php echo TB_BBS_URL; ?>/leave_form.php">회원탈퇴</a>
				  </div>
				</div>
            </div><!-- Content_box Area End -->
          </div><!-- Right_box Area End -->

        </div>
      </div><!-- My_box Area End -->

  </div><!-- Mypage Area End -->
<script>

	function pass_change(){



		var chk_num	=	$("input[name=passwd]").val().search(/[0-9]/g);
		var chk_eng	=	$("input[name=passwd]").val().search(/[a-z]/ig);


		if(chk_num < 0 || chk_eng < 0){
			alert("비밀번호는 숫자와 영문자 조합으로 8글자 이상 사용해야 합니다.");			
			return false;
		}

		if($("input[name=passwd]").val().length < 8) {
			alert("비밀번호를 8자 이상 입력해주세요.");
			return;		
		}

		if($("input[name=passwd]").val() == ""){
			alert("변경하실 비밀번호를 입력해주세요.");
			return;		
		}

		if($("input[name=repasswd]").val() == ""){
			alert("변경하실 비밀번호 확인을 위해 비밀번호를 재입력해주세요.");
			return;		
		}

		if($("input[name=passwd]").val() != $("input[name=repasswd]").val()) {
			alert("비밀번호가 일치하지 않습니다.");
			return;		
		}

		if($("input[name=phone_flag]").val() != 1){
			alert("휴대폰 인증을 하셔야 합니다.");
			return;
		}

		var pass	=	$("input[name=repasswd]").val();

		$.post(
			tb_bbs_url+"/ajax_mb_pass_change.php",
			{ passwd:pass},
			function(data) {

				if(data == "Y"){				
					$("input[name=phone_flag]").val(0);
					$("input[name=check_number]").val("");
					alert("패스워드 변경이 정상적으로 처리되었습니다.");
					return;				
				}else{
					alert("정보가 잘못되었거나 등록되지 않은 회원입니다.");
					return;				
				}
			}
		);
	}

	function sms_send_check(){
		
		var recv_phone	=	$("input[name=phone1]").val()+"-"+$("input[name=phone2]").val()+"-"+$("input[name=phone3]").val();

		$.post(
			tb_bbs_url+"/ajax_sms_check.php",
			{ check_type:'send',recv_phone:recv_phone},
			function(data) {
				if(data == "N"){				
					alert("연락처 정보가 잘못되었거나 등록되지 않은 회원입니다.");
					return;
				}else{
					if(data.length == 6){
						$("input[name=check_number]").val(data);
					}else{
						alert("인증코드 발급에 실패하였습니다. 다시 시도해주세요.");
						return;					
					}
				}
			}
		);
	}


	function sms_check_confirm(){
		
		var cert_code	=	$("input[name=certification]").val();

		if(cert_code == ""){
			alert("전송받은 인증번호를 입력해 주세요.");
			$("input[name=certification]").focus();
			return;
		}

		$.post(
			tb_bbs_url+"/ajax_sms_check.php",
			{ check_type:'cert',cert_code:cert_code},
			function(data) {
				if(data == "Y"){				
					alert("휴대폰 인증이 성공하였습니다.\n비밀번호 변경이 가능하십니다.");
					$("input[name=phone_flag]").val(1);
					return;
				}else{
					alert("인증에 실패하였습니다.\n올바른 인증코드를 입력해주세요.");
					return;
				}
			}
		);
	}
	
	function checkImg(obj){

		if( $(obj).val() != "" ){

			  var ext = $(obj).val().split('.').pop().toLowerCase();

			  if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
				 alert('gif,png,jpg,jpeg 파일만 업로드 할수 있습니다.');
				 return;
			  }
		}
	}

	function member_edit_submit(){
			
		var f	=	document.fmemberform;

		if(f.nickname.value == ""){
			f.nickname.focus();
			alert("닉네임을 입력해주세요.");
			return;
		}
		
		f.submit();
	}
</script>