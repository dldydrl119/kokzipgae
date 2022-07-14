<?php
define('_PURENESS_', true);
include_once("./_common.php");

$ca_id					=	trim($_POST['ca_id']);
$counseling_type	=	trim($_POST['counseling_type']);
$search_txt			=	trim($_POST['search_txt']);

$upl_dir			=	TB_DATA_URL . "/member";
$upl_dir1			=	TB_DATA_URL . "/goods";

$len				=	strlen($ca_id);
$sql_search	=	" and left(b.gcate,$len)='$ca_id' ";

if ($search_txt != "") {
	$sql_search	.=	" and (a.gname like '%" . $search_txt . "%' or a.keywords like '%" . $search_txt . "%')";
}

$sql_common	=	get_sql_precompose($sql_search);
$sql_order		=	" group by a.index_no ";
$sql_order .= " order by a.rank desc, a.index_no desc ";

$sql			= " select a.*, c.catename $sql_common $sql_order ";
//echo $sql;
$result		= sql_query($sql);

for ($i = 0; $row = sql_fetch_array($result); $i++) {

	$it_href		= TB_SHOP_URL . '/view.php?index_no=' . $row['index_no'];
	$it_price		= get_price($row['index_no']);
	$it_amount = get_sale_price($row['index_no']);
	$it_point		= display_point($row['gpoint']);

	// (시중가 - 할인판매가) / 시중가 X 100 = 할인률%
	$it_sprice = $sale = '';

	if ($row['normal_price'] > $it_amount && !is_uncase($row['index_no'])) {
		$sett = ($row['normal_price'] - $it_amount) / $row['normal_price'] * 100;
		$sale = '<p class="sale">' . number_format($sett, 0) . '<span>%</span></p>';
		$it_sprice = display_price2($row['normal_price']);
	}
	
	
	$tc	=	sql_fetch("select a.*, b.mem_img from shop_teacher a, shop_member b where a.mb_code = b.index_no and a.index_no = '" . $row["tc_code"] . "'");
	$at    =	sql_fetch("select count(*) as re_cnt , if(isnull(round(sum(score)/count(*),1)), '0',  round(sum(score)/count(*),1)) as score from shop_goods_review where  gs_id= '" . $row['index_no'] . "'");

	$goods_list[$i]	=	$row;

	$goods_list[$i]["it_href"]					=	$it_href;
	$goods_list[$i]["it_sprice"]					=	$it_sprice;
	$goods_list[$i]["it_price"]					=	$it_price;
	
	$goods_list[$i]["name"]						=	$tc["name"];
	$goods_list[$i]["mem_img"]				=	$tc["mem_img"];
	$goods_list[$i]["counseling_type"]		=	$tc["counseling_type"];
	$goods_list[$i]["counseling_time"]		=	$tc["counseling_time"];
	$goods_list[$i]["score"]						=	$at["score"];
	$goods_list[$i]["re_cnt"]						=	$at["re_cnt"];
	

	
}

if (count($goods_list) > 0) {

	//배열 정렬
	$goods_list		=	arr_sort($goods_list, 'counseling_type', 'asc');

	for ($i = 0; $i < count($goods_list); $i++) {

		if ($counseling_type == 1) {

			if ($goods_list[$i]["counseling_type"] == 1) {
?>
				<li>
				<!-- PC Area Start -->
				<a href="<?= $goods_list[$i]["it_href"] ?>" class="pc">
					<div class="txt_top" style="background-image: url('<?php echo $upl_dir1; ?>/<?php echo $goods_list[$i]["simg5"]; ?>'); background-position: center; border-radius: 13px 13px 0 0;">
						<div class="icon_box">
							<!-- <div class="cate_ico">#3<?= $goods_list[$i]["catename"] ?></div> -->
							<?= counseling_sticker($goods_list[$i]["counseling_type"], 'pc') ?>
						</div>
						<div class="txt">
							<h3>
								<!-- <?= $goods_list[$i]["gname"] ?> -->
							</h3>
							<dl>
								<!-- <dt class="time">상담시간 <span><?= $goods_list[$i]["counseling_time"] ?></span></dt> -->
								<dd class="point">
									<!-- <img src="<?php echo TB_IMG_URL; ?>/point_ico.png" alt="point"><?= $goods_list[$i]["score"] ?> -->
									<!-- <span class="count"> (<?= $goods_list[$i]["re_cnt"] ?>)</span> pc 버전 별표 옆 댓글 수 -->
								</dd>

							</dl>
							<div class="txt_bottom">
								<!-- <div class="price"><?php echo $goods_list[$i]["it_sprice"]; ?><?php echo $goods_list[$i]["it_price"]; ?></div> -->
							</div>
						</div>
					</div>
					<div class="txt_bottom">
						<!-- <div class="img_box"><img src="<?php echo $upl_dir; ?>/<?= $goods_list[$i]["mem_img"] ?>" alt="img"></div> -->
						<div class="name">
							<div class="center_margin"><?= $goods_list[$i]["name"] ?>
								<div class="smallname">| <?= $goods_list[$i]["brand_nm"] ?></div>
							</div>
							<div class="price price2"><?php echo $goods_list[$i]["counseling_time"]; ?></div>
							<!-- <div class="price price2"><?php echo $goods_list[$i]["simg6"]; ?></div> -->
						</div>
						<div class="name">
							<div class="center_margin left">
								<img src="<?php echo TB_IMG_URL; ?>/point_ico.png" alt="point"><?= $goods_list[$i]["score"] ?>
							</div>
							<div class="price"><?php echo $goods_list[$i]["it_sprice"]; ?> <?php echo $goods_list[$i]["it_price"]; ?></div>
						</div>
					</div>
				</a><!-- PC Area End -->
					<!-- Mobild Area Start -->
					<a href="<?= $goods_list[$i]["it_href"] ?>" class="mb">
						<div class="top">
						<div><img src="<?php echo $upl_dir1; ?>/<?php echo $goods_list[$i]["simg5"]; ?>"></div>
							<!-- <div class="m_h">
							<div class="subject"><?= $goods_list[$i]["gname"] ?></div>
							<div class="point"><img src="<?php echo TB_IMG_URL; ?>/m_point_ico.png" alt="point"><?= $goods_list[$i]["score"] ?> -->
							<!-- <span class="count"> (<?= $goods_list[$i]["re_cnt"] ?>)</span> 별점 옆에 댓글입니다. -->
							<!-- </div>
						</div> -->
							<!-- <div class="m_b"> -->
							<!-- <div class="time">상담시간 <span><?= $goods_list[$i]["counseling_time"] ?></span></div> -->
							<!-- <div class="explan"><?php echo $goods_list[$i]["explan"]; ?></div>
							<div class="price"><?php echo $goods_list[$i]["it_sprice"]; ?><?php echo $goods_list[$i]["it_price"]; ?></div>
						</div> -->
						</div>
						<div class="bottom">
							<div class="user">
								<!-- <div class="img_box"><img src="<?php echo $upl_dir; ?>/<?= $goods_list[$i]["mem_img"] ?>" alt="img"></div> -->
								<div class="name"><?= $goods_list[$i]["name"] ?> <div class="smallname">| <?= $goods_list[$i]["brand_nm"] ?></div>
								</div>
								<!-- <div class="cate_ico">#4<?= $goods_list[$i]["catename"] ?></div> -->
							</div>
							<?= counseling_sticker($goods_list[$i]["counseling_type"], 'mo') ?>
							<div class="m_h">
								<div class="subject"><?= $goods_list[$i]["counseling_time"] ?><span class="point"><img src="<?php echo TB_IMG_URL; ?>/m_point_ico.png" alt="point"><?= $goods_list[$i]["score"] ?>
										<span class="count"> (<?= $goods_list[$i]["re_cnt"] ?>)</span>
									</span>
								</div>
							</div>
						</div>
					</a>
					<!-- Mobild Area End -->
				</li>
			<?
			}
		} else {
			?>
			<li>
				<!-- PC Area Start -->
				<a href="<?= $goods_list[$i]["it_href"] ?>" class="pc">
					<div class="txt_top" style="background-image: url('<?php echo $upl_dir1; ?>/<?php echo $goods_list[$i]["simg5"]; ?>'); background-position: center; border-radius: 13px 13px 0 0;">
						<div class="icon_box">
							<!-- <div class="cate_ico">#3<?= $goods_list[$i]["catename"] ?></div> -->
							<?= counseling_sticker($goods_list[$i]["counseling_type"], 'pc') ?>
						</div>
						<div class="txt">
							<h3>
								<!-- <?= $goods_list[$i]["gname"] ?> -->
							</h3>
							<dl>
								<!-- <dt class="time">상담시간 <span><?= $goods_list[$i]["counseling_time"] ?></span></dt> -->
								<dd class="point">
									<!-- <img src="<?php echo TB_IMG_URL; ?>/point_ico.png" alt="point"><?= $goods_list[$i]["score"] ?> -->
									<!-- <span class="count"> (<?= $goods_list[$i]["re_cnt"] ?>)</span> pc 버전 별표 옆 댓글 수 -->
								</dd>
							</dl>
							<div class="txt_bottom">
								<!-- <div class="price"><?php echo $goods_list[$i]["it_sprice"]; ?><?php echo $goods_list[$i]["it_price"]; ?></div> -->
							</div>
						</div>
					</div>
					<div class="txt_bottom">
						<!-- <div class="img_box"><img src="<?php echo $upl_dir; ?>/<?= $goods_list[$i]["mem_img"] ?>" alt="img"></div> -->
						<div class="name">
							<div class="center_margin"><?= $goods_list[$i]["name"] ?>
								<div class="smallname">| <?= $goods_list[$i]["brand_nm"] ?></div>
							</div>
							<div class="price price2"><?php echo $goods_list[$i]["counseling_time"]; ?></div>
							<!-- <div class="price price2"><?php echo $goods_list[$i]["simg6"]; ?></div> -->
						</div>
						<div class="name">
							<div class="center_margin left">
								<img src="<?php echo TB_IMG_URL; ?>/point_ico.png" alt="point"><?= $goods_list[$i]["score"] ?>
								<span class="count"> (<?= $goods_list[$i]["re_cnt"] ?>)</span>
							</div>
							<!-- <div class="price"><?php echo $goods_list[$i]["it_sprice"]; ?><?php echo $goods_list[$i]["it_price"]; ?></div> -->
						</div>
					</div>
				</a><!-- PC Area End -->
				<!-- Mobild Area Start -->
				<a href="<?= $goods_list[$i]["it_href"] ?>" class="mb">
					<div class="top">
						<div><img src="<?php echo $upl_dir1; ?>/<?php echo $goods_list[$i]["simg5"]; ?>"></div>
						<!-- <div class="m_h">
							<div class="subject"><?= $goods_list[$i]["gname"] ?></div>
							<div class="point"><img src="<?php echo TB_IMG_URL; ?>/m_point_ico.png" alt="point"><?= $goods_list[$i]["score"] ?> -->
						<!-- <span class="count"> (<?= $goods_list[$i]["re_cnt"] ?>)</span> 별점 옆에 댓글입니다. -->
						<!-- </div>
						</div> -->
						<!-- <div class="m_b"> -->
						<!-- <div class="time">상담시간 <span><?= $goods_list[$i]["counseling_time"] ?></span></div> -->
						<!-- <div class="explan"><?php echo $goods_list[$i]["explan"]; ?></div>
							<div class="price"><?php echo $goods_list[$i]["it_sprice"]; ?><?php echo $goods_list[$i]["it_price"]; ?></div>
						</div> -->
					</div>
					<div class="bottom">
						<div class="user">
							<!-- <div class="img_box"><img src="<?php echo $upl_dir; ?>/<?= $goods_list[$i]["mem_img"] ?>" alt="img"></div> -->
							<div class="name"><?= $goods_list[$i]["name"] ?> <div class="smallname">| <?= $goods_list[$i]["brand_nm"] ?></div>
							</div>
							<!-- <div class="cate_ico">#4<?= $goods_list[$i]["catename"] ?></div> -->
						</div>
						<?= counseling_sticker($goods_list[$i]["counseling_type"], 'mo') ?>
						<div class="m_h">
							<div class="subject"><?= $goods_list[$i]["counseling_time"] ?><span class="point"><img src="<?php echo TB_IMG_URL; ?>/m_point_ico.png" alt="point"><?= $goods_list[$i]["score"] ?>
									<span class="count"> (<?= $goods_list[$i]["re_cnt"] ?>)</span>
								</span>
							</div>

						</div>
					</div>
				</a>
				<!-- Mobild Area End -->
			</li>

<?

		}
	}
} else {
	echo "<li>검색 결과가 없습니다.</li>";
}
?>