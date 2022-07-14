<?php
if(!defined('_TUBEWEB_')) exit;

$upl_dir	=	TB_DATA_URL."/member";
?>
<div class="mem_info">
	<div class="container1">
		<div class="left_box">
			<div class="img_box">
				<?php if($member['mem_img']){ ?>
					<?php if($member['mem_img_type'] == "S"){ ?>
					<img src="<?php echo $member['mem_img']?>" alt="img">
					<?php }else{ ?>
					<img src="<?php echo $upl_dir; ?>/<?=$member['mem_img']?>" alt="img">
					<?php } ?>
				<?php }else{ ?>
					<span class="mem_no_img"><img src="<?php echo TB_IMG_URL; ?>/no_img.jpg" alt="img"></span>
				<?php } ?>
			</div>
		</div>
		<div class="right_box">
			<dl class="info">
				<dt>
					<!-- <div class="ico_box"><img src="<?php echo TB_IMG_URL; ?>/my_sns_ico1.png" alt=""></div> -->
					<div class="name"><?=$member['nickname']?></div>
					<div class="system"><a href="<?php echo TB_SHOP_URL; ?>/mypage_write.php"><img src="<?php echo TB_IMG_URL; ?>/my_system.png" alt="ico"></a></div>
				</dt>
				<dd>포인트: <span class="e_point"><?php echo number_format($member['point']); ?></span>P</dd>
			</dl>
			<div class="btn_box">
				<a href="<?php echo TB_SHOP_URL; ?>/point_payment.php">포인트 충전하기</a>
			</div>
		</div>
	</div>
</div>
