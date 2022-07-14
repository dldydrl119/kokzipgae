﻿<?php
if(!defined('_TUBEWEB_')) exit;

include_once(TB_THEME_PATH.'/aside_my.skin.php');
?>

<div id="con_lf">
	<h2 class="pg_tit">
		<span><?php echo $tb['title']; ?></span>
		<p class="pg_nav">HOME<i>&gt;</i>My Page<i>&gt;</i><?php echo $tb['title']; ?></p>
	</h2>

	<h2 class="anc_tit">Click the View Details button to inquire the order details.</h2>
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
		for($i=0; $row=sql_fetch_array($result); $i++) {
			$sql = " select * from shop_cart where od_id = '$row[od_id]' ";
			$sql.= " group by gs_id order by io_type asc, index_no asc ";
			$res = sql_query($sql);
			$rowspan = sql_num_rows($res) + 1;

			for($k=0; $ct=sql_fetch_array($res); $k++) {
				$od = get_order($ct['od_no']);
				$gs = unserialize($od['od_goods']);

				$dlcomp = explode('|', trim($od['delivery']));

				$href = TB_SHOP_URL.'/view.php?index_no='.$od['gs_id'];

				if($k == 0) {
		?>
		<tr>
			<td class="tac" rowspan="<?php echo $rowspan; ?>">
				<p class="bold"><?php echo substr($od['od_time'],0,10);?></p>
				<p class="padt5"><a href="<?php echo TB_SHOP_URL; ?>/orderinquiryview.php?od_id=<?php echo $od['od_id']; ?>" class="btn_small grey">View Details</a></p>
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
						<td class="vat tal"><a href="<?php echo $href; ?>"><?php echo get_od_image($od['od_id'], $gs['simg1'], 60, 60); ?></a></td>
						<td class="vat tal">
							<a href="<?php echo $href; ?>"><?php echo get_text($gs['gname']); ?></a>
							<p class="padt3 fc_999">Order number : <?php echo $od['od_id']; ?> / Quantity : <?php echo display_qty($od['sum_qty']); ?> / Quantity : <?php echo display_price($od['baesong_price']); ?></p>
							<?php if($od['dan'] == 5) { ?>
							<p class="padt3"><a href="<?php echo TB_SHOP_URL; ?>/orderreview.php?gs_id=<?php echo $od['gs_id']; ?>&od_id=<?php echo $od['od_id']; ?>" onclick="win_open(this, 'winorderreview', '650', '530','yes');return false;" class="btn_ssmall bx-white">Preparation of post-purchase period</a></p>
							<?php } ?>
						</td>
					</tr>
					</table>
				</div>
			</td>
			<td class="tar"><?php echo display_price($od['use_price']); ?></td>
			<td class="tac">
				<p><?php echo $gw_status[$od['dan']]; ?></p>
				<?php if($dlcomp[0] && $od['delivery_no']) { ?>
				<p class="padt3 fc_90"><?php echo $dlcomp[0]; ?><br><?php echo $od['delivery_no']; ?></p>
				<?php } ?>
				<?php if($dlcomp[1] && $od['delivery_no']) { ?>
				<p class="padt3"><?php echo get_delivery_inquiry($od['delivery'], $od['delivery_no'], 'btn_ssmall'); ?></p>
				<?php } ?>
			</td>
		</tr>
		<?php }
		}
		if($i==0)
			echo '<tr><td colspan="4" class="empty_list">have no data.</td></tr>';
		?>
		</tbody>
		</table>
	</div>

	<?php
	echo get_paging($config['write_pages'], $page, $total_page, $_SERVER['SCRIPT_NAME'].'?page=');
	?>
</div>
