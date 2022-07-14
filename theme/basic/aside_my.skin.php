<?php
if(!defined('_TUBEWEB_')) exit;

$cp	=	get_cp_precompose($member["id"]);
?>
<div class="left_box">
	<!-- Top Area Start -->
	<div class="top">
		<h3>내정보</h3>
		<ul>
			<li><a href="<?php echo TB_SHOP_URL; ?>/orderinquiry.php">결제 내역</a></li>
			<!-- PC Menu Area Start -->
			<li><a href="<?php echo TB_SHOP_URL; ?>/point.php">포인트내역</a></li>
			<?php if($config['coupon_yes']) { ?>
			<li><a href="<?php echo TB_SHOP_URL; ?>/coupon.php">쿠폰내역</a></li>
			<?php } ?>
			<!-- PC Menu Area End -->
			<!-- Mobile Menu Area Start -->
			<li><a href="<?php echo TB_SHOP_URL; ?>/point.php">포인트(<span><?php echo display_point($member['point']); ?></span>)</a></li>
			<li><a href="<?php echo TB_SHOP_URL; ?>/coupon.php">쿠폰(<span><?php echo $cp[3]; ?></span>장)</a></li>
			<!-- Mobile Menu Area End -->
		</ul>
	</div>
	<!-- Bottom Area Start -->
	<div class="bottom">
		<h3>고객센터</h3>
				<ul>
					<li><a href="<?php echo TB_BBS_URL; ?>/qna_list.php">1 : 1 문의하기</a></li>
					<li><a href="<?php echo TB_BBS_URL; ?>/report_list.php">신고하기</a></li>
					<li><a href="<?php echo TB_BBS_URL; ?>/faq.php?faqcate=1">FAQ</a></li>
					<li><a href="<?php echo TB_BBS_URL; ?>/provision.php">이용약관</a></li>
					<li><a href="<?php echo TB_BBS_URL; ?>/policy.php">개인정보 취급방침</a></li>
				</ul>
		</div>

		<!-- Text_box Area Start -->
		<div class="text_box">
			<!-- 모바일 -->
			<h4>고객센터</h4><!-- 모바일 -->
			<p><?php echo $config['company_hours']; ?></p>
			<p><?php echo $config['company_lunch']; ?></p><br>
			<p><?php echo $config['company_close']; ?></p>
		</div>
		<div id="m_my_menu_ico">
			<button><img src="<?php echo TB_IMG_URL; ?>/m_my_menu_bt.png" alt="button"></button>
		</div>
</div><!-- Left_box Area End -->
