﻿<?php
if(!defined("_TUBEWEB_")) exit; // No access to individual pages
?>

<h2 class="pop_title">
	<?php echo $tb['title']; ?>
	<a href="javascript:window.close();" class="btn_small bx-white">close Window</a>
</h2>

<div id="sit_coupon">
	<table class="tbl_cp">
	<colgroup>
		<col width="60px">
		<col>
	</colgroup>
	<tbody>
	<tr>
		<td class="scope" colspan='2'>
			This is a discount coupon you can use when purchasing this product.<br>
			Download and use when ordering!<br>
			You can check the issued coupon on My Page.
		</td>
	</tr>
	<tr>
		<td class="image"><?php echo get_it_image($gs['index_no'], $gs['simg1'], 60, 60); ?></td>
		<td class="gname">
			<?php echo get_text($gs['gname']); ?>
			<p class="bold mart5"><?php echo mobile_price($gs['index_no']); ?></p>
		</td>
	</tr>
	</tbody>
	</table>

	<?php
	if(!$total_count) {
		echo "<p class=\"empty_list\">There are no coupons available.</p>";
	} else {
	?>
		<table class="tbl_cp mart10">
		<tbody>
		<?php
		for($i=0; $row=sql_fetch_array($result); $i++) {
			$cp_id = $row['cp_id'];

			$str  = "";
			$str .= "<div>&#183; <strong>".get_text($row['cp_subject'])."</strong></div>";

			// Coupon issue period
			$str .= "<div class='padt5'>&#183;download period : ";
			if($row['cp_type'] != '3') {
				if($row['cp_pub_sdate'] == '9999999999') $cp_pub_sdate = '';
				else $cp_pub_sdate = $row['cp_pub_sdate'];

				if($row['cp_pub_edate'] == '9999999999') $cp_pub_edate = '';
				else $cp_pub_edate = $row['cp_pub_edate'];

				if($row['cp_pub_sdate'] == '9999999999' && $row['cp_pub_edate'] == '9999999999')
					$str .= "Unlimited";
				else
					$str .= $cp_pub_sdate." ~ ".$cp_pub_edate;

				// Coupon Issue Day
				if($row['cp_type'] == '1') {
					$str .= "&nbsp;-&nbsp;Every week (".$row['cp_week_day'].")";
				}
			} else {
				$str .= "birthday (".$row['cp_pub_sday']."a day ago ~ ".$row['cp_pub_eday']."until after a day)";
			}
			$str .= "</div>";

			// Benefit
			$str .= "<div class='padt5'>&#183; ";
			if(!$row['cp_sale_type']) {
				if($row['cp_sale_amt_max'] > 0)
					$cp_sale_amt_max = "&nbsp;(Maximum ".display_price($row['cp_sale_amt_max'])."discount to)";
				else
					$cp_sale_amt_max = "";

				$str .= $row['cp_sale_percent']. '% Sale' . $cp_sale_amt_max;
			} else {
				$str .= display_price($row['cp_sale_amt']). ' Sale';
			}
			$str .= "</div>";

			// 
Maximum amount
			if($row['cp_low_amt'] > 0) {
				$str .= "<div class='padt5'>&#183; ".display_price($row['cp_low_amt'])." Above purchase</div>";
			}

			// Available target
			$str .= "<div class='padt5'>&#183; ".$gw_usepart[$row['cp_use_part']]."</div>";

			$s_upd = "<button type=\"button\" onclick=\"post_update('".TB_MSHOP_URL."/pop_coupon_update.php', '$cp_id');\" class=\"btn_small\">Download current coupon</button>";
		?>
		<tr>
			<td class="cbtn">
				<?php echo $str; ?>
				<p class="padt10"><?php echo $s_upd; ?></p>
			</td>
		</tr>
		<?php } ?>
		</tbody>
		</table>		
	<?php 
	}
	?>

	<?php echo get_paging($config['mobile_pages'], $page, $total_page, $_SERVER['SCRIPT_NAME'].'?gs_id='.$gs_id.'&page='); ?>

	<div class="btn_confirm">
		<button type="button" onclick="window.close();" class="btn_medium bx-white">close Window</button>
	</div>
</div>

<script>
function post_update(action_url, val) {
	var f = document.fpost;
	f.cp_id.value = val;
	f.action = action_url;
	f.submit();
}
</script>

<form name="fpost" method="post">
<input type="hidden" name="gs_id" value="<?php echo $gs_id; ?>">
<input type="hidden" name="page"  value="<?php echo $page; ?>">
<input type="hidden" name="token" value="<?php echo $token; ?>">
<input type="hidden" name="cp_id">
</form>
