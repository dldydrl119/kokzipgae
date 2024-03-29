﻿<?php
if(!defined('_TUBEWEB_')) exit;

include_once(TB_THEME_PATH.'/aside_my.skin.php');
?>

<div id="con_lf">
	<h2 class="pg_tit">
		<span><?php echo $tb['title']; ?></span>
		<p class="pg_nav">HOME<i>&gt;</i>My Page<i>&gt;</i><?php echo $tb['title']; ?></p>
	</h2>

	<p class="pg_cnt">Order number <em><?php echo $od_id; ?></em> Details of .</p>

	<div class="tbl_head02 tbl_wrap">
		<table>
		<colgroup>
			<col class="w90">
			<col>
			<col class="w100">
			<col class="w140">
		</colgroup>
		<thead>
		<tr>
			<th scope="col">Order date</th>
			<th scope="col">Product information</th>
			<th scope="col">Payment amount</th>
			<th scope="col">State</th>
		</tr>
		</thead>
		<tbody>
		<?php
        $st_count1 = $st_count2 = $st_cancel_price = 0;
        $custom_cancel = false;

		$sql = " select * from shop_order where od_id = '$od_id' group by od_id order by index_no desc ";
		$result = sql_query($sql);
		for($i=0; $row=sql_fetch_array($result); $i++) {
			$sql = " select * from shop_cart where od_id = '$od_id' ";
			$sql.= " group by gs_id order by io_type asc, index_no asc ";
			$res = sql_query($sql);
			$rowspan = sql_num_rows($res) + 1;

			for($k=0; $ct=sql_fetch_array($res); $k++) {
				$rw = get_order($ct['od_no']);
				$gs = unserialize($rw['od_goods']);

				$dlcomp = explode('|', trim($rw['delivery']));

				$href = TB_SHOP_URL.'/view.php?index_no='.$rw['gs_id'];

				unset($it_name);
				$it_options = print_complete_options($ct['gs_id'], $ct['od_id']);
				if($it_options){
					$it_name = '<div class="sod_opt">'.$it_options.'</div>';
				}

				if($k == 0) {
		?>
		<tr>
			<td class="tac" rowspan="<?php echo $rowspan; ?>">
				<p class="bold"><?php echo substr($rw['od_time'],0,10);?></p>
				<p class="padt5"><a href="<?php echo TB_SHOP_URL; ?>/orderprint.php?od_id=<?php echo $rw['od_id']; ?>" onclick="win_open(this,'winorderprint','670','600','yes');return false;" class="btn_small bx-white"><i class="fa fa-print fs14 vam marb2 marr3"></i> Print</a></p>
			</td>
		</tr>
		<?php } ?>
		<tr class="rows">
			<td>
				<div class="ini_wrap">
					<table class="wfull">
					<colgroup>
						<col class="w70">
						<col>
					</colgroup>
					<tr>
						<td class="vat tal"><a href="<?php echo $href; ?>"><?php echo get_od_image($rw['od_id'], $gs['simg1'], 60, 60); ?></a></td>
						<td class="vat tal">
							<a href="<?php echo $href; ?>"><?php echo get_text($gs['gname']); ?></a>
							<?php echo $it_name; ?>
							<p class="padt3 fc_999">Order number : <?php echo $rw['od_id']; ?> / Quantity : <?php echo display_qty($rw['sum_qty']); ?> / The delivery charge : <?php echo display_price($rw['baesong_price']); ?></p>
							<?php if($rw['dan'] == 5) { ?>
							<p class="padt3"><a href="<?php echo TB_SHOP_URL; ?>/orderreview.php?gs_id=<?php echo $rw['gs_id']; ?>&od_id=<?php echo $rw['od_id']; ?>" onclick="win_open(this, 'winorderreview', '650', '530','yes');return false;" class="btn_ssmall bx-white">Create Reviews</a></p>
							<?php } ?>
						</td>
					</tr>
					</table>
				</div>
			</td>
			<td class="tar"><?php echo display_price($rw['use_price']); ?></td>
			<td class="tac">
				<p><?php echo $gw_status[$rw['dan']]; ?></p>
				<?php if($dlcomp[0] && $rw['delivery_no']) { ?>
				<p class="padt3 fc_90"><?php echo $dlcomp[0]; ?><br><?php echo $rw['delivery_no']; ?></p>
				<?php } ?>
				<?php if($dlcomp[1] && $rw['delivery_no']) { ?>
				<p class="padt3"><?php echo get_delivery_inquiry($rw['delivery'], $rw['delivery_no'], 'btn_ssmall'); ?></p>
				<?php } ?>
			</td>
		</tr>
		<?php
				$st_count1++;
				if(in_array($rw['dan'], array('1','2','3')))
					$st_count2++;

				$st_cancel_price += $rw['cancel_price'];
			}
		}

		// Cancellation of customer if order status is in the previous stage
		if($st_count1 > 0 && $st_count1 == $st_count2)
			$custom_cancel = true;
		?>
		</tbody>
		</table>
	</div>

	<dl id="sod_ws_tot">
		<dt class="bt_nolne">Total order amount</dt>
		<dd class="bt_nolne"><strong><?php echo display_price($stotal['price']); ?></strong></dd>
		<?php if($stotal['coupon']) { ?>
		<dt>coupon discount</dt>
		<dd><strong><?php echo display_price($stotal['coupon']); ?></strong></dd>
		<?php } ?>
		<?php if($stotal['usepoint']) { ?>
		<dt>Point payment</dt>
		<dd><strong><?php echo display_point($stotal['usepoint']); ?></strong></dd>
		<?php } ?>
		<?php if($stotal['baesong']) { ?>
		<dt>The delivery charge</dt>
		<dd><strong><?php echo display_price($stotal['baesong']); ?></strong></dd>
		<?php } ?>
		<dt class="ws_price">Total</dt>
		<dd class="ws_price"><strong><?php echo display_price($stotal['useprice']); ?></strong></dd>
		<dt class="bt_nolne">Point application</dt>
		<dd class="bt_nolne"><strong><?php echo display_point($stotal['point']); ?></strong></dd>
	</dl>

	<section id="sod_fin_pay">
		<h2 class="anc_tit">Payment information</h2>
		<div class="tbl_frm01 tbl_wrap">
			<table>
			<colgroup>
				<col class="w140">
				<col>
			</colgroup>
			<tbody>
			<tr>
				<th scope="row">Order number</th>
				<td><?php echo $od_id; ?></td>
			</tr>
			<tr>
				<th scope="row">Order time</th>
				<td><?php echo $od['od_time']; ?></td>
			</tr>
			<tr>
				<th scope="row">Payment method</th>
				<td><?php echo ($easy_pay_name ? $easy_pay_name.'('.$od['paymethod'].')' : $od['paymethod']); ?></td>
			</tr>
			<tr>
				<th scope="row">Payment amount</th>
				<td><?php echo display_price($stotal['useprice']); ?></td>
			</tr>
			<?php
			if(!is_null_time($od['receipt_time'])) {
			?>
			<tr>
				<th scope="row">Payment date</th>
				<td><?php echo $od['receipt_time']; ?></td>
			</tr>
			<?php
			}

			// Approval number, mobile phone number, transaction number
			if($app_no_subj) {
			?>
			<tr>
				<th scope="row"><?php echo $app_no_subj; ?></th>
				<td><?php echo $app_no; ?></td>
			</tr>
			<?php
			}

			// Account information
			if($disp_bank) {
			?>
			<tr>
				<th scope="row">Deposit holder name</th>
				<td><?php echo get_text($od['deposit_name']); ?></td>
			</tr>
			<tr>
				<th scope="row">Deposit account</th>
				<td><?php echo get_text($od['bank']); ?></td>
			</tr>
			<?php
			}

			if($disp_receipt) {
			?>
			<tr>
				<th scope="row">Receipt</th>
				<td>
					<?php
					if($od['paymethod'] == 'Cell phone')
					{
						if($od['od_pg'] == 'lg') {
							require_once TB_SHOP_PATH.'/settle_lg.inc.php';
							$LGD_TID      = $od['od_tno'];
							$LGD_MERTKEY  = $default['de_lg_mid'];
							$LGD_HASHDATA = md5($LGD_MID.$LGD_TID.$LGD_MERTKEY);

							$hp_receipt_script = 'showReceiptByTID(\''.$LGD_MID.'\', \''.$LGD_TID.'\', \''.$LGD_HASHDATA.'\');';
						} else if($od['od_pg'] == 'inicis') {
							$hp_receipt_script = 'window.open(\'https://iniweb.inicis.com/DefaultWebApp/mall/cr/cm/mCmReceipt_head.jsp?noTid='.$od['od_tno'].'&noMethod=1\',\'receipt\',\'width=430,height=700\');';
						} else if($od['od_pg'] == 'kcp') {
							$hp_receipt_script = 'window.open(\''.TB_BILL_RECEIPT_URL.'mcash_bill&tno='.$od['od_tno'].'&order_no='.$od['od_id'].'&trade_mony='.$stotal['useprice'].'\', \'winreceipt\', \'width=500,height=690,scrollbars=yes,resizable=yes\');';
						}
					?>
					<a href="javascript:;" onclick="<?php echo $hp_receipt_script; ?>" class="btn_small">Print Receipt</a>
					<?php
					}

					if($od['paymethod'] == 'Credit card')
					{
						if($od['od_pg'] == 'lg') {
							require_once TB_SHOP_PATH.'/settle_lg.inc.php';
							$LGD_TID      = $od['od_tno'];
							$LGD_MERTKEY  = $default['de_lg_mid'];
							$LGD_HASHDATA = md5($LGD_MID.$LGD_TID.$LGD_MERTKEY);

							$card_receipt_script = 'showReceiptByTID(\''.$LGD_MID.'\', \''.$LGD_TID.'\', \''.$LGD_HASHDATA.'\');';
						} else if($od['od_pg'] == 'inicis') {
							$card_receipt_script = 'window.open(\'https://iniweb.inicis.com/DefaultWebApp/mall/cr/cm/mCmReceipt_head.jsp?noTid='.$od['od_tno'].'&noMethod=1\',\'receipt\',\'width=430,height=700\');';
						} else if($od['od_pg'] == 'kcp') {
							$card_receipt_script = 'window.open(\''.TB_BILL_RECEIPT_URL.'card_bill&tno='.$od['od_tno'].'&order_no='.$od['od_id'].'&trade_mony='.$stotal['useprice'].'\', \'winreceipt\', \'width=470,height=815,scrollbars=yes,resizable=yes\');';
						}
					?>
					<a href="javascript:;" onclick="<?php echo $card_receipt_script; ?>" class="btn_small">Print Receipt</a>
					<?php
					}

					if($od['paymethod'] == 'KAKAOPAY')
					{
						$card_receipt_script = 'window.open(\'https://mms.cnspay.co.kr/trans/retrieveIssueLoader.do?TID='.$od['od_tno'].'&type=0\', \'popupIssue\', \'toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,width=420,height=540\');';
					?>
					<a href="javascript:;" onclick="<?php echo $card_receipt_script; ?>" class="btn_small">Print Receipt</a>
					<?php
					}
					?>
				</td>
			</tr>
			<?php
			}

			// Only if cash receipt is issued
			if($default['de_taxsave_use']) {
				// You can issue a cash receipt only if you do not have a non-receivable amount and you are in cash.
				if(!is_null_time($od['receipt_time']) && ($od['paymethod'] == 'without bankbook' || $od['paymethod'] == 'account transfer' || $od['paymethod'] == 'virtual account')) {
			?>
			<tr>
				<th scope="row">Cash receipt</th>
				<td>
				<?php
				if($od['od_cash'])
				{
					if($od['od_pg'] == 'lg') {
						require_once TB_SHOP_PATH.'/settle_lg.inc.php';

						switch($od['paymethod']) {
							case 'account transfer':
								$trade_type = 'BANK';
								break;
							case 'virtual account':
								$trade_type = 'CAS';
								break;
							default:
								$trade_type = 'CR';
								break;
						}
						$cash_receipt_script = 'javascript:showCashReceipts(\''.$LGD_MID.'\',\''.$od['od_id'].'\',\''.$od['od_casseqno'].'\',\''.$trade_type.'\',\''.$CST_PLATFORM.'\');';
					} else if($od['od_pg'] == 'inicis') {
						$cash = unserialize($od['od_cash_info']);
						$cash_receipt_script = 'window.open(\'https://iniweb.inicis.com/DefaultWebApp/mall/cr/cm/Cash_mCmReceipt.jsp?noTid='.$cash['TID'].'&clpaymethod=22\',\'showreceipt\',\'width=380,height=540,scrollbars=no,resizable=no\');';
					} else if($od['od_pg'] == 'kcp') {
						require_once TB_SHOP_PATH.'/settle_kcp.inc.php';

						$cash = unserialize($od['od_cash_info']);
						$cash_receipt_script = 'window.open(\''.TB_CASH_RECEIPT_URL.$default['de_kcp_mid'].'&orderid='.$od_id.'&bill_yn=Y&authno='.$cash['receipt_no'].'\', \'taxsave_receipt\', \'width=360,height=647,scrollbars=0,menus=0\');';
					}
				?>
					<a href="javascript:;" onclick="<?php echo $cash_receipt_script; ?>" class="btn_small">Check cash receipt</a>
				<?php
				}
				else {
				?>
					<a href="javascript:;" onclick="window.open('<?php echo TB_SHOP_URL; ?>/taxsave.php?od_id=<?php echo $od_id; ?>', 'taxsave', 'width=550,height=400,scrollbars=1,menus=0');" class="btn_small">Issuing a cash receipt</a>
				<?php } ?>
				</td>
			</tr>
			<?php
				}
			}
			?>
			</tbody>
			</table>
		</div>
	</section>

	<section id="sod_fin_orderer">
		<h2 class="anc_tit">The person you ordered</h2>
		<div class="tbl_frm01 tbl_wrap">
			<table>
			<colgroup>
				<col class="w140">
				<col>
			</colgroup>
			<tr>
				<th scope="row">Name</th>
				<td><?php echo get_text($od['name']); ?></td>
			</tr>
			<tr>
				<th scope="row">Phone number</th>
				<td><?php echo get_text($od['telephone']); ?></td>
			</tr>
			<tr>
				<th scope="row">cell phone</th>
				<td><?php echo get_text($od['cellphone']); ?></td>
			</tr>
			<tr>
				<th scope="row">Address</th>
				<td><?php echo get_text(sprintf("(%s)", $od['zip']).' '.print_address($od['addr1'], $od['addr2'], $od['addr3'], $od['addr_jibeon'])); ?></td>
			</tr>
			<tr>
				<th scope="row">E-mail</th>
				<td><?php echo get_text($od['email']); ?></td>
			</tr>
			</table>
		</div>
	</section>

	<section id="sod_fin_receiver">
		<h2 class="anc_tit">Receiver</h2>
		<div class="tbl_frm01 tbl_wrap">
			<table>
			<colgroup>
				<col class="w140">
				<col>
			</colgroup>
			<tr>
				<th scope="row">Name</th>
				<td><?php echo get_text($od['b_name']); ?></td>
			</tr>
			<tr>
				<th scope="row">Phone number</th>
				<td><?php echo get_text($od['b_telephone']); ?></td>
			</tr>
			<tr>
				<th scope="row">cell phone</th>
				<td><?php echo get_text($od['b_cellphone']); ?></td>
			</tr>
			<tr>
				<th scope="row">Address</th>
				<td><?php echo get_text(sprintf("(%s)", $od['b_zip']).' '.print_address($od['b_addr1'], $od['b_addr2'], $od['b_addr3'], $od['b_addr_jibeon'])); ?></td>
			</tr>
			<?php if($od['memo']) { ?>
			<tr>
				<th scope="row">a message to you</th>
				<td><?php echo conv_content($od['memo'], 0); ?></td>
			</tr>
			<?php } ?>
			</table>
		</div>
	</section>

	<?php
	// If there's no history of cancellation,
	if($st_cancel_price == 0 && $custom_cancel) {
	?>
	<section id="sod_fin_cancel">
		<h2>order cancellation</h2>
		<button type="button" onclick="document.getElementById('sod_fin_cancelfrm').style.display='block';" class="btn_medium wset">Cancel Order</button>

		<div id="sod_fin_cancelfrm">
			<form method="post" action="<?php echo TB_SHOP_URL; ?>/orderinquirycancel.php" onsubmit="return fcancel_check(this);">
			<input type="hidden" name="od_id"  value="<?php echo $od_id; ?>">
			<input type="hidden" name="token"  value="<?php echo $token; ?>">
			<label for="cancel_memo">Reasons for cancellation</label>
			<input type="text" name="cancel_memo" id="cancel_memo" required class="frm_input required" size="40" maxlength="100">
			<input type="submit" value="Check" class="btn_small">
			</form>
		</div>
	</section>
	<?php } ?>
</div>

<script>
function fcancel_check(f)
{
    if(!confirm("Are you sure you want to cancel the order?"))
        return false;

    var memo = f.cancel_memo.value;
    if(memo == "") {
        alert("Enter reason for cancellation.");
        return false;
    }

    return true;
}
</script>
