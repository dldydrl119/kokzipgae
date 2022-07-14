<?php
if (!defined('_TUBEWEB_')) exit;

?>
<!-- M_Quick_menu Area Start -->
<div id="m_quick_menu">
	<div class="container">
		<ul>
			<li><a href="/index.php" <?php if ($_SERVER["PHP_SELF"] == "/index.php") echo "class=on"; ?>><img src="/img/btn/m_quick_ico1.png">
					<p>콕집게</p>
				</a></li>
			<li><a href="<?= TB_SHOP_URL ?>/wish.php" <?php if ($_SERVER["PHP_SELF"] == "/shop/wish.php") echo "class=on"; ?>><img src="/img/btn/m_quick_ico2.png" alt="ico2">
					<p>찜주머니</p>
				</a></li>
			<li><a href="<?= TB_BBS_URL ?>/m_page_list.php" <?php if ($_SERVER["PHP_SELF"] == "/bbs/m_page_list.php" || $_SERVER["PHP_SELF"] == "/shop/orderinquiry.php" || $_SERVER["PHP_SELF"] == "/shop/point.php" || $_SERVER["PHP_SELF"] == "/shop/coupon.php" || $_SERVER["PHP_SELF"] == "/bbs/qna_list.php" || $_SERVER["PHP_SELF"] == "/bbs/faq.php" || $_SERVER["PHP_SELF"] == "/bbs/provision.php"  || $_SERVER["PHP_SELF"] == "/shop/mypage_write.php" || $_SERVER["PHP_SELF"] == "/bbs/policy.php") echo "class=on"; ?>><img src="/img/btn/m_quick_ico3.png" alt="ico3">
					<p>마이메뉴</p>
				</a></li>
			<li><a href="<?= TB_SHOP_URL ?>/point_payment.php" <?php if ($_SERVER["PHP_SELF"] == "/shop/point_payment.php") echo "class=on"; ?>><img src="/img/btn/m_quick_ico4.png">
					<p>포인트충전</p>
				</a></li>
			<li><a href="https://kokzipgae.com/unse/main1.php"><img src="/img/btn/m_quick_ico5_off.png">
					<p>오늘의운세</p>
				</a></li>
		</ul>
	</div>
	<!-- Quick_menu Area Start -->
	<div id="quick_menu" class="sticky fixed_m">
		<div class="icon">
			<a href="http://pf.kakao.com/_kkFRs/chat"><img src="<?php echo TB_IMG_URL; ?>/kakao_quick_ico.png" alt="quick_ico"></a>
			<!-- <a href="<?php echo TB_BBS_URL; ?>/alarm.php"><img src="<?php echo TB_IMG_URL; ?>/quick_ico.png" alt="quick_ico"></a> -->
		</div>
	</div><!-- Quick_menu Area End -->
</div><!-- M_Quick_menu Area End -->


<!-- Footer Area Start -->
<footer class="trigger">
	<!-- Quick_menu Area Start -->
	<div id="quick_menu" class="sticky fixed">
		<div class="icon">
			<a href="http://pf.kakao.com/_kkFRs/chat"><img src="<?php echo TB_IMG_URL; ?>/kakao_quick_ico.png" alt="quick_ico"></a>
			<!-- <a href="<?php echo TB_BBS_URL; ?>/alarm.php"><img src="<?php echo TB_IMG_URL; ?>/quick_ico.png" alt="quick_ico"></a> -->
		</div>
	</div><!-- Quick_menu Area End -->

	

	<div class="container">
		<div class="f_logo">
			<!-- <?php echo display_logo(); ?> -->
			<a href="/"><img src="/img/kokzipgae_logo_white.png" alt="f_logo"></a>

		</div>
		<div class="f_info pc">
			<ul>
				<li><a href="<?php echo TB_BBS_URL; ?>/policy1.php" onclick="window.open(this.href, 'popup', 'scrollbars,width=700,height=500');return false;">개인정보처리방침</a></li>
				<li><a href="<?php echo TB_BBS_URL; ?>/provision1.php" onclick="window.open(this.href, 'popup', 'scrollbars,width=700,height=500');return false;">이용약관</a></li>
				<!-- <li><a href="https://blog.naver.com/sbj0710w">블로그</a></li> -->
				<li style="width: 35px;"><a href="https://www.youtube.com/channel/UCbFF_smuN8QtBROu6xiyuGw"><img src="<?php echo TB_IMG_URL; ?>/you_icon.png" alt="quick_ico"></a></li>
				<li style="width: 35px;"><a href="https://www.instagram.com/kokzipgae_official/"><img src="<?php echo TB_IMG_URL; ?>/in_icon.png" alt="quick_ico"></a></li>
				<li style="width: 35px;"><a href="https://blog.naver.com/sbj0710w"><img src="<?php echo TB_IMG_URL; ?>/blog_icon.png" alt="quick_ico"></a></li>
			</ul>
			<p>상호명 : <?php echo $config['company_name']; ?> | 대표 : <?php echo $config['company_owner']; ?> | 주소 : <?php echo $config['company_addr']; ?> | 통신판매업신고번호 : 2021-서울서초-0581호</p>
			<p>문의메일 : <?php echo $super['email']; ?> | 사업자등록번호 : <?php echo $config['company_saupja_no']; ?> | 유선번호 : <?php echo $config['company_tel']; ?></p>
			<p>Copyright © 2021 (주)에스비제이 </p>


		</div>

		<div class="f_info mb">
			<ul>
				<li><a href="<?php echo TB_BBS_URL; ?>/policy1.php" onclick="window.open(this.href, 'popup', 'scrollbars,width=700,height=500');return false;">개인정보처리방침</a></li>
				<li><a href="<?php echo TB_BBS_URL; ?>/provision1.php" onclick="window.open(this.href, 'popup', 'scrollbars,width=700,height=500');return false;">이용약관</a></li>
				<!-- <li><a href="https://blog.naver.com/sbj0710w">블로그</a></li> -->
				<li style="width: 20px;"><a href="https://www.youtube.com/channel/UCbFF_smuN8QtBROu6xiyuGw"><img src="<?php echo TB_IMG_URL; ?>/you_icon.png" alt="quick_ico"></a></li>
				<li style="width: 20px;"><a href="https://www.instagram.com/kokzipgae_official/"><img src="<?php echo TB_IMG_URL; ?>/in_icon.png" alt="quick_ico"></a></li>
				<li style="width: 20px;"><a href="https://blog.naver.com/sbj0710w"><img src="<?php echo TB_IMG_URL; ?>/blog_icon.png" alt="quick_ico"></a></li>
			</ul>
			<div>
				<span>상호명 : <?php echo $config['company_name']; ?> </span>
				<span> 대표 : <?php echo $config['company_owner']; ?> </span>
				<span> 주소 : <?php echo $config['company_addr']; ?> </span>
			</div>
			<div>
				<span>유선번호 : <?php echo $config['company_tel']; ?> </span>
				<span> 문의메일 : <?php echo $super['email']; ?> </span>
			</div>
			<div>
				<span>사업자등록번호 : <?php echo $config['company_saupja_no']; ?> </span>
				<span> 통신판매업신고번호 : 2021-서울서초-0581호</span>
			</div>
			<div>
				<span>Copyright © 2021 (주)에스비제이 </span>
			</div>

		</div>

	</div>
</footer><!-- Footer Area Start -->
<!-- My JS -->
<script src="<?php echo TB_JS_URL; ?>/main.js?ver=<?php echo TB_JS_VER; ?>"></script>
</body>

</html>