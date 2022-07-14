<?php
if(!defined('_TUBEWEB_')) exit;

require_once(TB_SHOP_PATH.'/settle_kakaopay.inc.php');

if($is_kakaopay_use) {
	require_once(TB_SHOP_PATH.'/kakaopay/orderform.1.php');
}
?>
<div id="product_pay" class="pd_12">
    <!-- Sub_title06 Area Start -->
    <div class="sub_title06 tit1">
      <div class="container2">
        <div class="ico_box"><img src="<?php echo TB_IMG_URL; ?>/pay_ico1.png" alt="ico1"></div>
        <h4>주문을 확인해주세요.</h4>
      </div>
    </div><!-- Sub_title06 Area End -->
	<?php
	$goods = '';
	$goods_count = -1;

	$sql = " select *
			   from shop_cart
			  where od_id = '$od_id'
				and ct_select = '0'
			  group by gs_id
			  order by index_no ";
	$result = sql_query($sql);
	
	for($i=0; $row=sql_fetch_array($result); $i++) {
		$rw	=	get_order($row['od_no']);
		$gs	=	get_goods($row['gs_id'], 'gname,tc_code, simg1');
		$tc	=	sql_fetch("select a.*, b.mem_img from shop_teacher a, shop_member b where a.mb_code = b.index_no and a.index_no = '".$gs["tc_code"]."'");


		if(!$goods)
			$goods = preg_replace("/\'|\"|\||\,|\&|\;/", "", $gs['gname']);

		$goods_count++;

		$it_name = stripslashes($gs['gname']);
		$it_options = print_complete_options($row['gs_id'], $od_id);
		if($it_options){
			$it_name .= '<div class="sod_opt">'.$it_options.'</div>';
		}
	?>
	<div class="list_box1">
		<div class="container2">
			<ul>
				<li>
					<dl>
						<dt><img src="<?php echo TB_IMG_URL; ?>/product_pay_ico1.png" alt="ico1">상품</dt>
						<dd><?=$it_name?></dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt><img src="<?php echo TB_IMG_URL; ?>/product_pay_ico2.png" alt="ico2">상담사</dt>
						<dd><?=$tc["name"]?></dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt><img src="<?php echo TB_IMG_URL; ?>/product_pay_ico1.png" alt="ico1">평균시간</dt>
						<dd><?=$tc["counseling_time"]?></dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt><img src="<?php echo TB_IMG_URL; ?>/product_pay_ico2.png" alt="ico2">결제금액</dt>
						<dd><?php echo get_price($row['gs_id']); ?></dd>
					</dl>
				</li>
			</ul>
		</div>
	</div><!-- List_box Area End -->
	<?php
	}

	if($goods_count) $goods .= ' 외 '.$goods_count.'건';

	// 복합과세처리
	$comm_tax_mny  = 0; // 과세금액
	$comm_vat_mny  = 0; // 부가세
	$comm_free_mny = 0; // 면세금액
	if($default['de_tax_flag_use']) {
		$info = comm_tax_flag($od_id);
		$comm_tax_mny  = $info['comm_tax_mny'];
		$comm_vat_mny  = $info['comm_vat_mny'];
		$comm_free_mny = $info['comm_free_mny'];
	}
	?>
	<div class="box">
		<div class="container2">
			<?php if($stotal['coupon'] > 0){ ?>
			<!-- point Area Start -->
			<div class="point">
				<h5>쿠폰</h5>
				<dl class="possession_point">
					<dt>쿠폰 할인</dt>
					<dd><span><?php echo display_price($stotal['coupon']); ?></span></dd>
				</dl>
			</div><!-- point Area End -->
			<?php } ?>

			<?php if($stotal['usepoint'] > 0){ ?>
			<!-- point Area Start -->
			<div class="point">
				<h5>포인트</h5>
				<dl class="possession_point">
					<dt>사용 포인트</dt>
					<dd><span><?php echo display_price($stotal['usepoint']); ?></span></dd>
				</dl>
			</div><!-- point Area End -->
			<?php } ?>

			<form name="forderform" id="forderform" method="post" action="<?php echo $order_action_url; ?>" autocomplete="off">
			<?php
			if($is_kakaopay_use) {
				require_once(TB_SHOP_PATH.'/kakaopay/orderform.2.php');
			}
			?>
			<!-- point Area Start -->
			<div class="point">
			  <h5>결제정보</h5>
			  <dl class="possession_point">
				<dt>결제방법</dt>
				<dd><?php echo $od['paymethod']; ?></dd>
			  </dl>
			  <dl class="possession_point">
				<dt>최종 결제금액</dt>
				<dd><span><?php echo display_price($tot_price); ?></span></dd>
			  </dl>
			</div><!-- point Area End -->
		</div>
	</div><!-- box End -->
	<div class="container2">
		<ul>
			<li><a href = "javascript:forderform_check(document.forderform);">결제하기</a></li>
		</ul>
	</div>
</div>
</form>

<?php
if($is_kakaopay_use) {
	require_once(TB_SHOP_PATH.'/kakaopay/orderform.3.php');
} else {
	echo '<p id="sod_pay_not">카카오페이 미설정으로 결제하실 수 없습니다.</p>';
}
?>

<script>
function forderform_check(f)
{
	<?php if($default['de_tax_flag_use']) { ?>
	f.SupplyAmt.value = parseInt(f.comm_tax_mny.value) + parseInt(f.comm_free_mny.value);
	f.GoodsVat.value  = parseInt(f.comm_vat_mny.value);
	<?php } ?>
	getTxnId(f);
	return false;
}
</script>
<!-- } 카카오페이결제 끝 -->
