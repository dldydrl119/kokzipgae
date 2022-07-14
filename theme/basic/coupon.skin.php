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
			<!-- Left_box Area Start -->
			<? include_once(TB_THEME_PATH.'/aside_my.skin.php');?>
			<!-- Left_box Area End -->

			<!-- Right_box Area Start -->
			<div class="right_box">
				<!-- Content_box Area Start -->
				<div class="content_box">
					<!-- Sub_title01 Area Start -->
					<div class="sub_title01"><h3>쿠폰</h3></div><!-- Sub_title01 Area End -->
				<form name="fqaform" id="fqaform" method="post" action="<?php echo $form_action_url; ?>" onsubmit="return fqaform_submit(this);" autocomplete="off">
					<input type="hidden" name="token" value="<?php echo $token; ?>">
					<div id="coupon_ad">
						<div class="txt">쿠폰 등록하기</div>
						<div class="coupon_code_box">
							<h4>쿠폰 번호 입력</h4>
							<div class="coupon_code">
								<input type="text" name="gi_num1" id="gi_num1" maxlength="4">
								<input type="text" name="gi_num2" id="gi_num2" maxlength="4">
								<input type="text" name="gi_num3" id="gi_num3" maxlength="4">
								<input type="text" name="gi_num4" id="gi_num4" maxlength="4">
								<button type="submit"><span>쿠폰 번호</span> 입력</button>
							</div>
							<!-- 쿠폰번호가 틀렸을 경우 출력되는 창 -->
							<div class="invalid" onclick="coupon_dis();">
								<p>유효하지 않은 쿠폰입니다.<br>쿠폰 코드를 다시 한번 확인해주세요.</p>
							</div><!-- 쿠폰번호가 틀렸을 경우 출력되는 창 -->
						</div>
					</div>
				</form>
					<div id="my_coupon_list">
						<h4>사용가능 쿠폰  |  <strong><span class="coupon_count"><?=$total_count?></span>장</strong></h4>
						<ul>
							<?php
							for($i=0; $row=sql_fetch_array($result); $i++) {
							?>
							<li>
								<div class="discount"><?=$row['cp_sale_amt']?>원 할인 쿠폰</div>
								<div class="coupon_subject"><?=$row['cp_subject']?></div>
								<div class="coupon_date">사용기간 <span class="date"><?=$row['cp_inv_sdate']?> - <?=$row['cp_inv_edate']?></span></div>
							</li>
							<?php
							}
							if($i==0)
								echo '<li class="empty">사용가능한 쿠폰이 없습니다.</li>';
							?>	
						</ul>
					</div>
				</div><!-- Content_box Area End -->
			</div><!-- Right_box Area End -->
		</div>
	</div><!-- My_box Area End -->
</div><!-- Mypage Area End -->
<script>
var err = '<?=$err?>';
if(err == 'fail'){
	$(".invalid").show();
}else{
	$(".invalid").hide();
}

function coupon_dis(){
	$(".invalid").hide();
}

function fqaform_submit(f) {
	if(confirm("등록 하시겠습니까?") == false)
		return false;

	return true;
}
</script>
