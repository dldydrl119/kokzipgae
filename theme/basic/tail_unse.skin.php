<?php
if (!defined('_TUBEWEB_')) exit;

?>
<!-- M_Quick_menu Area Start -->
<div id="m_quick_menu" >
	<div class="container">
		<ul>
			<li><a href="/index.php"><img src="/img/btn/m_quick_ico1_off.png">
					<p>콕집게</p>
				</a></li>
			<li><a href="https://kokzipgae.com:443/shop/wish.php"><img src="/img/btn/m_quick_ico2.png" alt="ico2">
					<p>찜주머니</p>
				</a></li>
			<li><a href="https://kokzipgae.com:443/bbs/m_page_list.php"><img src="/img/btn/m_quick_ico3.png" alt="ico3">
					<p>마이메뉴</p>
				</a></li>
			<li><a href="https://kokzipgae.com:443/shop/point_payment.php"><img src="/img/btn/m_quick_ico4.png">
					<p>포인트충전</p>
				</a></li>
			<li><a href="https://kokzipgae.com/unse/main1.php" class="on"><img src="/img/btn/m_quick_ico5.png">
					<p>오늘의운세</p>
				</a></li>
		</ul>
	</div>
</div><!-- M_Quick_menu Area End -->


<!-- Footer Area Start -->
<footer class="trigger" style="position:absolute; top:95%;">
	<!-- Quick_menu Area Start -->
	<div id="quick_menu" class="sticky fixed">
		<div class="icon">
			<a href="<?php echo TB_BBS_URL; ?>/alarm.php"><img src="<?php echo TB_IMG_URL; ?>/quick_ico.png" alt="quick_ico"></a>
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
				<!-- <li><a href="<?php echo TB_BBS_URL; ?>/content.php?co_id=1">회사소개</a></li> -->
			</ul>
			<p>상호명 : <?php echo $config['company_name']; ?> | 대표 : <?php echo $config['company_owner']; ?> | 주소 : <?php echo $config['company_addr']; ?> | 통신판매업신고번호 : 2021-서울서초-0581호</p>
			<p>문의메일 : <?php echo $super['email']; ?> | 사업자등록번호 : <?php echo $config['company_saupja_no']; ?> | 유선번호 : <?php echo $config['company_tel']; ?></p>
		</div>

		<div class="f_info mb">
			<ul>
				<li><a href="<?php echo TB_BBS_URL; ?>/policy1.php" onclick="window.open(this.href, 'popup', 'scrollbars,width=700,height=500');return false;">개인정보처리방침</a></li>
				<li><a href="<?php echo TB_BBS_URL; ?>/provision1.php" onclick="window.open(this.href, 'popup', 'scrollbars,width=700,height=500');return false;">이용약관</a></li>
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

		</div>

	</div>
</footer><!-- Footer Area Start -->
<!-- My JS -->
<script src="<?php echo TB_JS_URL; ?>/main.js?ver=<?php echo TB_JS_VER; ?>"></script>
</body>

</html>