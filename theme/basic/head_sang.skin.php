<?php
if (!defined('_TUBEWEB_')) exit;

if (defined('_INDEX_')) { // index에서만 실행
	include_once(TB_LIB_PATH . '/popup.inc.php'); // 팝업레이어
}


if (is_mobile() == true) {
	$filed	=	"mobile_logo";
} else {
	$filed	=	"basic_logo";
}

$row = sql_fetch("select $filed from shop_logo where mb_id='$pt_id'");

if (!$row[$filed] && $pt_id != 'admin') {
	$row = sql_fetch("select $filed from shop_logo where mb_id='admin'");
}

$file	=	TB_DATA_URL . '/banner/' . $row[$filed];

?>
<!-- Header Area Start -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MPFD645" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header>
	<div class="gnb">
		<div class="container">

			<ul>
				<?php
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
				<h1><a href="/index.php#main_category" class="ir" style="background:url('<?= $file ?>') no-repeat 50% 50% / cover;">콕집게</a></h1>
			</div>
			<form name="fsearch" id="fsearch" method="post" action="/" autocomplete="off">
				<input type="hidden" name="hash_token" value="<?php echo TB_HASH_TOKEN; ?>">
				<input type="text" name="ss_tx" class="sch_stx" maxlength="20" placeholder="제 사주팔자를 알고 싶어요." value="<?= $_REQUEST["ss_tx"] ?>">
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
	<div class="m_alarm_ico">
		<a href="<?php echo TB_BBS_URL; ?>/alarm.php"><img src="<?php echo TB_IMG_URL; ?>/quick_ico.png" alt="quick_ico"></a>
	</div>
</header><!-- Header Area End -->