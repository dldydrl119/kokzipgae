<style>
	.animated-text {
		color: #000;
		position: relative;
		width: 80%;
		top: 0%;
		left: 50%;
		transform: translate(-50%, 0%);
		background: #ffffff;
		padding: 0 0px;
		height: 30px;
		overflow: hidden;
	}

	@media (min-width:500px) {
		.animated-text {
			display: none;
		}

	}

	.line1 {
		text-transform: uppercase;
		text-align: left;
		font-size: 15px;
		line-height: 30px;
		white-space: nowrap;
	}

	.line1 span {
		float: left;
		color: #969696;
		font-size: 12px;
		width: 80px;
	}

	.line1 span img {
		width: 23px;
		margin-bottom: 6px;
	}

	.line1:first-child {
		animation: anim 12s infinite;
		animation-duration: 18s
	}

	@keyframes anim {
		0% {
			margin-top: 0;
			animation-timing-function: ease;

		}

		16% {
			margin-top: -30px;
			animation-timing-function: ease;
		}

		33% {
			margin-top: -60px;
			animation-timing-function: ease;
		}

		50% {
			margin-top: -90px;
			animation-timing-function: ease;
		}

		66% {
			margin-top: -120px;
			animation-timing-function: ease;
		}

		82% {
			margin-top: -150px;
			animation-timing-function: ease;
		}

		100% {
			margin-top: 0;
			animation-timing-function: ease;
		}
	}
</style>
<?php
if (!defined('_TUBEWEB_')) exit;
?>
<!-- Main Area Start -->
<div id="main" class="pb_12">
	<!-- Main_Slide Area Start -->
	<?php
	if (defined('_INDEX_')) { // index에서만 실행
		$sql = sql_banner_rows(0, $pt_id);
		$res = sql_query($sql);
		$mbn_rows = sql_num_rows($res);
		if ($mbn_rows) {
	?>
			<div class="main_slide">
				<div class="slide1" id="mbn_wrap">
					<?php
					$txt_w = (100 / $mbn_rows);
					$txt_arr = array();
					for ($i = 0; $row = sql_fetch_array($res); $i++) {
						if ($row['bn_text'])
							$txt_arr[] = $row['bn_text'];

						$a1 = $a2 = $bg = '';
						$file = TB_DATA_PATH . '/banner/' . $row['bn_file'];
						if (is_file($file) && $row['bn_file']) {
							if ($row['bn_link']) {
								$a1 = "<a href=\"{$row['bn_link']}\" target=\"{$row['bn_target']}\">";
								$a2 = "</a>";
							}
							// /img/test/test_banner.png\ /data/banner/" . $row['bn_file'] . "\
							$img_src	=	"<img src=\"/data/banner/" . $row['bn_file'] . "\" alt=\"main_bg\">";

							$row['bn_bg'] = preg_replace("/([^a-zA-Z0-9])/", "", $row['bn_bg']);
							if ($row['bn_bg']) $bg = "#{$row['bn_bg']} ";

							$file = rpc($file, TB_PATH, TB_URL);
							echo "<div class=\"img_box mbn_img\" style=\"background:{$bg} no-repeat top center;\">{$a1}{$img_src}{$a2}</div>\n";
						}
					}
					?>
				</div>
				<script>
					$(document).on('ready', function() {
						<?php if (count($txt_arr) > 0) { ?>
							var txt_arr = <?php echo json_encode($txt_arr); ?>;

							$('#mbn_wrap').slick({
								autoplay: true,
								autoplaySpeed: 4000,
								dots: true,
								fade: true,
								customPaging: function(slider, i) {
									return "<span>" + txt_arr[i] + "</span>";
								}
							});
							$('#mbn_wrap .slick-dots li').css('width', '<?php echo $txt_w; ?>%');
						<?php } else { ?>
							$('#mbn_wrap').slick({
								autoplay: true,
								autoplaySpeed: 4000,
								dots: true,
								fade: true
							});
						<?php } ?>
					});
				</script>
			</div><!-- Main_Slide Area End -->
			<!-- } 메인 슬라이드배너 끝 -->
	<?php }
	}
	?>
	<!-- Content Area Start -->
	<div class="content">

		<!-- M_search_box Area Start -->


		<!-- <div class="m_search_box">
			<div style="text-align: center; color: #c12424; margin-bottom:6px;">6월의 BEST 댓글</div>
			<div class="animated-text" style=" margin-bottom:6px;">
				<div class="line1"><span><img src="<?php echo TB_IMG_URL; ?>/no_img.png" alt="img"> icedict</span> 풀이 감사합니다. 이해하기 쉬웠어...</div>
				<div class="line1"><span><img src="<?php echo TB_IMG_URL; ?>/no_img.png" alt="img"> KiKiK</span> 지금까지 여기서 상담받은 분들중...</div>
				<div class="line1"><span><img src="<?php echo TB_IMG_URL; ?>/no_img.png" alt="img"> 계란젤리</span> 매번 귀찮게 죽는소리해서 죄송해...</div>
				<div class="line1"><span><img src="<?php echo TB_IMG_URL; ?>/no_img.png" alt="img"> 사주맨</span> 올해 하두 뒤숭숭해서 결제했습니...</div>
				<div class="line1"><span><img src="<?php echo TB_IMG_URL; ?>/no_img.png" alt="img"> dkghs</span> 방금 전화드렸던 사람입니다. 선생...</div>
				<div class="line1"><span><img src="<?php echo TB_IMG_URL; ?>/no_img.png" alt="img"> 스마247</span> 제가 푸념만 늘어놔서 선생님도 많...</div>
			</div>
			<div class="container">
				<form class="search_box" action="/" name="search_form">
					<input type="hidden" name="ca_id" value="">
					<input type="hidden" name="hash_token" value="<?php echo TB_HASH_TOKEN; ?>">
					<input type="text" name="ss_tx" placeholder="제 사주팔자를 알고 싶어요." value="<?= $_REQUEST["ss_tx"] ?>">
					<button type="submit"><img src="<?php echo TB_IMG_URL; ?>/m_search_bt.png" alt="search_icon"></button>
				</form>
			</div>
		</div> -->
		<!-- M_search_box Area End -->

		<!-- Category Area Start -->

		<div class="category" id="main_category">
			<div class="container" style="padding: 0px;">
				<ul>
					<li><a id="all" class="on" href="javascript:product_list_ajax(this,'');">전체보기</a></li>
					<?php
					$res = sql_query_cgy('all');
					for ($i = 0; $row = sql_fetch_array($res); $i++) {
					?>
						<li><a id="<?= $row['catecode'] ?>" href="javascript:product_list_ajax($('.category .container ul li a:eq(<?= ($i + 1) ?>)'), '<?= $row['catecode'] ?>');"><?php echo $row['catename']; ?></a></li>
					<?php } ?>
				</ul>
			</div>
		</div><!-- Category Area End -->

		<!-- List_box Area Start -->
		<div class="list_box">
			<div class="container">
				<div class="state_box state_box_set"><a href="javascript:counseling_type_act(1);">상담 가능만 보기</a></div>
				<ul class="clearfix"></ul>
			</div>
		</div><!-- List_box Area End -->
	</div><!-- Content Area End -->
</div><!-- Main Area End -->
<script type="text/javascript">
	function counseling_type_act(state_box_set) {
		var ca_id = $("input[name=ca_id]").val();
		var search_txt = $("input[name=ss_tx]").val();

		$(".state_box_set").empty();
		if (state_box_set == "1") {
			$(".state_box_set").append("<a href=javascript:counseling_type_act(2);>전체보기</a>");
		} else {
			$(".state_box_set").append("<a href=javascript:counseling_type_act(1);>상담 가능만 보기</a>");
		}

		$.post(
			tb_shop_url + "/ajax.goods_list.php", {
				ca_id: ca_id,
				counseling_type: state_box_set,
				search_txt: search_txt
			},
			function(data) {
				$(".list_box .clearfix").html(data);
			}
		);

	}

	function product_list_ajax(obj, ca_id) {
		$(".state_box_set").empty();
		$(".state_box_set").append("<a href=javascript:counseling_type_act(1);>상담 가능만 보기</a>");

		$(".category .container ul li a").removeClass("on");

		$(obj).addClass("on");


		if (ca_id == "") {
			$(".category .container ul li a:eq(0)").addClass("on");
		}

		var counseling_type = $("input[name=counseling_type]").val();
		var search_txt = $("input[name=ss_tx]").val();

		$.post(
			tb_shop_url + "/ajax.goods_list.php", {
				ca_id: ca_id,
				counseling_type: counseling_type,
				search_txt: search_txt
			},
			function(data) {
				$("input[name=ca_id]").val(ca_id);
				$(".list_box .clearfix").html(data);
			}
		);
	}

	product_list_ajax($(".category .container ul li a:eq(0)"), '');
</script>