<?php
if (!defined('_TUBEWEB_')) exit;
?>
<div id="wish_list" class="pb_12">
	<div class="sub_title04">
		<div class="container">
			<h2><span>찜주머니</span></h2>
		</div>
	</div>
	<!-- List_box Area Start -->
	<div class="list_box">
		<div class="container">
			<ul class="clearfix">
				<?php

				$upl_dir	=	TB_DATA_URL . "/member";

				for ($i = 0; $row = sql_fetch_array($result); $i++) {

					$it_href = TB_SHOP_URL . '/view.php?index_no=' . $row['gs_id'];

					$gs	=	get_goods($row['gs_id']);
					$ca	=	sql_fetch("select b.catename from shop_goods_cate a, shop_cate b where a.gcate = b.catecode and  a.gs_id = '" . $gs["index_no"] . "'");
					$tc	=	sql_fetch("select a.*, b.mem_img from shop_teacher a, shop_member b where a.mb_code = b.index_no and a.index_no = '" . $gs["tc_code"] . "'");



					//상품평 건수 구하기
					$sql = "select count(*) as cnt from shop_goods_review where gs_id = '" . $gs["index_no"] . "'";
					if ($default['de_review_wr_use']) {
						$sql .= " and pt_id = '$pt_id' ";
					}
					$row = sql_fetch($sql);
					$item_use_count = (int)$row['cnt'];

					// 고객선호도 별점수
					$star_score = get_star_image($gs["index_no"]);

				?>
					<li>
						<!-- PC Area Start -->
						<a href="<?= $it_href ?>" class="pc">
							<div class="txt_top">
								<div class="icon_box">
									<div class="cate_ico">#<?= $ca["catename"] ?></div>
									<?= counseling_sticker($tc["counseling_type"], 'pc') ?>
								</div>
								<div class="txt">
									<h3><?= $gs["gname"] ?></h3>
									<dl>
										<dt class="time">상담시간 <span><?= $tc["counseling_time"] ?></span></dt>
										<dd class="point">
											<img src="<?php echo TB_IMG_URL; ?>/point_ico.png" alt="point"><?= $star_score ?>
											<?php if ($item_use_count > 0) {  ?>
												<span class="count">(<?= $item_use_count ?>)</span>
											<?php } ?>
										</dd>
									</dl>
								</div>
							</div>
							<div class="txt_bottom">
								<div class="img_box">
									<?php if ($tc["mem_img"]) { ?>
										<img src="<?php echo $upl_dir; ?>/<?= $tc["mem_img"] ?>" alt="mem">
									<?php } else { ?>
										<img src="<?php echo TB_IMG_URL; ?>/mem_img.png" alt="mem">
									<?php } ?>
								</div>
								<div class="name"><?= $tc["name"] ?></div>
								<div class="price"><?php echo get_price($gs['index_no']); ?></div>
							</div>
						</a><!-- PC Area End -->
						<!-- Mobild Area Start -->
						<a href="<?= $it_href ?>" class="mb">
							<div class="top">
								<div class="m_h">
									<div><img class="m_h_img" src="<?php echo $upl_dir; ?>/<?= $tc["mem_img"] ?>"></div>
									<!-- <div class="point">
										<img src="<?php echo TB_IMG_URL; ?>/m_point_ico.png" alt="point"><?= $star_score ?>
										<?php if ($item_use_count > 0) {  ?>
											<span class="count">(<?= $item_use_count ?>)</span>
										<?php } ?>
									</div> -->
								</div>
								<div class="m_b">
									<!-- <div class="time">상담시간 <span><?= $tc["counseling_time"] ?></span></div> -->
									<!-- <div class="price"><?php echo get_price($gs['index_no']); ?></div> -->
								</div>
							</div>
							<div class="bottom">
								<div class="user">
									<!-- <div class="img_box">
										<?php if ($tc["mem_img"]) { ?>
											<img src="<?php echo $upl_dir; ?>/<?= $tc["mem_img"] ?>" alt="mem">
										<?php } else { ?>
											<img src="<?php echo TB_IMG_URL; ?>/mem_img.png" alt="mem">
										<?php } ?>
									</div> -->
									<div class="name"><?= $tc["name"] ?> | <?= $gs['brand_nm'] ?></div>
									<!-- <div class="cate_ico">#<?= $ca["catename"] ?></div> -->
								</div>
								<?= counseling_sticker($tc["counseling_type"], 'mo') ?>
							</div>
							<div class="bottom2">
								<div class="time"><span><?= $tc["counseling_time"] ?></span></div>
								<div class="point">
									<img src="<?php echo TB_IMG_URL; ?>/m_point_ico.png" alt="point"><?= $star_score ?>
									<?php if ($item_use_count > 0) {  ?>
										<span class="count">(<?= $item_use_count ?>)</span>
									<?php } ?>
								</div>
								<!-- <div class="price"><?php echo get_price($gs['index_no']); ?></div> -->
							</div>
						</a><!-- Mobild Area End -->
					</li>
				<?php
				}
				if ($i == 0)
					echo '<li class="empty_list"><div><img src="/img/wish_ico.png" alt="img"><span>아직 찜한 상품이 없습니다.</span></div></li>';
				?>
			</ul>
		</div>
	</div><!-- List_box Area End -->
</div>