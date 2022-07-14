<?php
if (!defined('_TUBEWEB_')) exit;
?>
<?php if ($od["dan"] == 2) { ?>
	<div class="phone_box" id="phone_box_<?= $od['od_id'] ?>">
		<div class="info">상담안내</div>
		<div class="infoDetail">
			<p><strong>[ <?= $gs["gname"] ?> ]</strong> 상담을 원하시면 </p>
			<p><strong>[<?= $tc["cellphone"] ?>]</strong> 으로 전화주시면 됩니다.</p>
		</div>
		<button type="button">확인</button>
	</div>
<?php } ?>
<div id="pay_result" class="pb_12">
	<!-- Sub_title04 Area Start -->
	<div class="sub_title04">
		<div class="container1">
			<h2><span>콕결제가 완료</span> 되었습니다. 감사합니다.</h2>
		</div>
	</div><!-- Sub_title04 Area End -->

	<!-- Content Area Start -->
	<div class="content">
		<div class="container1">
			<?php

			$st_count1 = $st_count2 = $st_cancel_price = 0;
			$custom_cancel = false;

			$sql = " select * from shop_order where od_id = '$od_id' group by od_id order by index_no desc ";
			$result = sql_query($sql);
			for ($i = 0; $row = sql_fetch_array($result); $i++) {

				$sql = " select * from shop_cart where od_id = '$od_id' ";
				$sql .= " group by gs_id order by io_type asc, index_no asc ";
				$res = sql_query($sql);
				$rowspan = sql_num_rows($res) + 1;

				for ($k = 0; $ct = sql_fetch_array($res); $k++) {
					$rw	=	get_order($ct['od_no']);
					$gs	=	unserialize($rw['od_goods']);
					$tc	=	sql_fetch("select a.*, b.mem_img from shop_teacher a, shop_member b where a.mb_code = b.index_no and a.index_no = '" . $gs["tc_code"] . "'");



					$dlcomp = explode('|', trim($rw['delivery']));

					$href = TB_SHOP_URL . '/view.php?index_no=' . $rw['gs_id'];

					$it_name = stripslashes($gs['gname']);

			?>
					<!-- Box Area Start -->
					<div class="box">
						<ul>
							<li>
								<dl>
									<dt>상담사</dt>
									<dd><?= $tc["name"] ?></dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt>상품</dt>
									<dd><?= $gs["brand_nm"] ?></dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt>상담</dt>
									<dd> <?= $gs["model"] ?></dd>
								</dl>
							</li>
						</ul>
						<div class="text_deco1">선생님께서 먼저 걸려온 상담으로 인해 전화가 지연 될 수 있습니다.</div>
					</div><!-- Box Area End -->
			<?php
					$st_count1++;
					if (in_array($rw['dan'], array('1', '2', '3')))
						$st_count2++;

					$st_cancel_price += $rw['cancel_price'];
				}
			}

			// 주문상태가 배송중 이전 단계이면 고객 취소 가능
			if ($st_count1 > 0 && $st_count1 == $st_count2)
				$custom_cancel = true;
			?>
			<!-- Caution Area Start -->
			<div class="caution">
				<p>'상담 전 콕집게 통해서 전화 한다고 말해주세요'</p>
				<div class="icon"><span>잠깐!</span></div>
			</div><!-- Caution Area End -->

			<!-- Call_bt Area Start -->
			<div class="call_bt">
				<?= $act_popup ?>
			</div><!-- Call_bt Area End -->

			<!-- Text_deco2 Area Start -->
			<div class="text_deco2">
				* '전화하기’ 클릭 시 상담 전화번호가 안내 됩니다.<br> 상담 내역 및 구매 내용은 마이메뉴를 통해 확인 가능합니다.
			</div><!-- Text_deco2 Area End -->

			<!-- Confirm_bt Area Start -->
			<div class="confirm_bt">
				<a href="<?php echo TB_SHOP_URL; ?>/orderinquiry.php">
					<p>결제 내역 확인하기</p><img src="<?php echo TB_IMG_URL; ?>/confirm_bt_ico.png" alt="ico">
				</a>
			</div><!-- Confirm_bt Area End -->

			<!-- Main_move_bt Area Start -->
			<div class="main_move_bt">
				<a href="/"><span>홈으로 이동</span></a>
			</div><!-- Main_move_bt Area End -->
		</div>
	</div><!-- Content Area End -->
</div>
<script>
	function phone_box(od_id) {
		$("#phone_box_" + od_id).show();
	}
</script>