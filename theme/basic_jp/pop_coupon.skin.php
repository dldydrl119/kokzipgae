<?php
if(!defined('_TUBEWEB_')) exit;
?>

<div class="new_win">
    <h1 id="win_title"><?php echo $tb['title']; ?></h1>

	<div class="win_desc marb10">
		<p class="bx-danger">
			* この商品購買時,使用できる割引クーポンです。 ダウンロードした後,注文の時にご使用ください。!<br>
			* 発行されたクーポンは <b>[マイページ > クーポン管理]</b> で確認できます。
		</p>
	</div>
		
	<div class="tbl_head01 tbl_wrap bt_nolne">
		<table>
		<colgroup>
			<col class="w80">
			<col>
			<col class="w70">
		</colgroup>
		<tbody>
		<tr>
			<td class="tac"><?php echo get_it_image($gs['index_no'], $gs['simg1'], 60, 60); ?></td>
			<td class="td_name"><?php echo get_text($gs['gname']); ?></td>
			<td class="tac"><?php echo get_price($gs['index_no'])?></td>
		</tr>
		</tbody>
		</table>
	</div>	

	<div class="win_desc mart20">
		<p class="pg_cnt">
			<em>全体 <?php echo number_format($total_count); ?>個 </em> 照会
		</p>
	</div>

	<div class="tbl_head01 tbl_wrap">
		<table>
		<colgroup>
			<col>
			<col class="w90">
		</colgroup>
		<thead>
		<tr>
			<th scope="col">割引クーポン名</th>
			<th scope="col">クーポン受取り</th>
		</tr>
		</thead>
		<tbody>
		<?php
		for($i=0; $row=sql_fetch_array($result); $i++) {
			$cp_id = $row['cp_id'];

			$str  = "";
			$str .= "<div>&#183; <strong>".get_text($row['cp_subject'])."</strong></div>";
			if($row['cp_explan'])
				$str .= "<div class='part5 fc_197'>&#183; ".get_text($row['cp_explan'])."</div>";

			// 同時使用の有無
			$str .= "<div class='part5 fc_eb7'>&#183; ";
			if(!$row['cp_dups']) {
				$str .= /'同一の注文件に他のクーポンと同時使用可能';
			} else {
				$str .= /'同一の注文件に他のクーポンと同時使用不可(このクーポンのみ使用可能)';
			}
			$str .= "</div>";

			// クーポン発行期間
			$str .= "<div class='part5'>&#183; ダウンロード期間 : ";
			if($row['cp_type'] != '3') {
				if($row['cp_pub_sdate'] == '9999999999') $cp_pub_sdate = '';
				else $cp_pub_sdate = $row['cp_pub_sdate'];

				if($row['cp_pub_edate'] == '9999999999') $cp_pub_edate = '';
				else $cp_pub_edate = $row['cp_pub_edate'];

				if($row['cp_pub_sdate'] == '9999999999' && $row['cp_pub_edate'] == '9999999999')
					$str .= "制限なし";
				else
					$str .= $cp_pub_sdate." ~ ".$cp_pub_edate;

				// クーポン発行の曜日
				if($row['cp_type'] == '1') {
					$str .= "&nbsp;-&nbsp;毎週 (".$row['cp_week_day'].")";
				}
			} else {
				$str .= "誕生日 (".$row['cp_pub_sday']."日前 ~ ".$row['cp_pub_eday']."일 이후까지)";
			}
			$str .= "</div>";


			// クーポン有効期間
			$str .= "<div class='part5'>&#183; クーポン有効期間 : ";
			if(!$row['cp_inv_type']) {
				// 日付
				if($row['cp_inv_sdate'] == '9999999999') $cp_inv_sdate = '';
				else $cp_inv_sdate = $row['cp_inv_sdate'];

				if($row['cp_inv_edate'] == '9999999999') $cp_inv_edate = '';
				else $cp_inv_edate = $row['cp_inv_edate'];

				if($row['cp_inv_sdate'] == '9999999999' && $row['cp_inv_edate'] == '9999999999')
					$str .= /'制限なし';
				else
					$str .= $cp_inv_sdate . " ~ " . $cp_inv_edate ;

				// 時間帯
				$str .= "&nbsp;(時間帯 : ";
				if($row['cp_inv_shour1'] == '99') $cp_inv_shour1 = '';
				else $cp_inv_shour1 = $row['cp_inv_shour1'] . "市から";

				if($row['cp_inv_shour2'] == '99') $cp_inv_shour2 = '';
				else $cp_inv_shour2 = $row['cp_inv_shour2'] . "市まで";

				if($row['cp_inv_shour1'] == '99' && $row['cp_inv_shour2'] == '99') $str .= /'制限なし';
				else $str .= $cp_inv_shour1 . " ~ " . $cp_inv_shour2 ;
				$str .= ")";
			} else {
				$cp_inv_day = date("Y-m-d",strtotime("+{$row[cp_inv_day]} days",time()));
				$str .= /'ダウンロード完了後 ' . $row['cp_inv_day']. /'日刊使用可能, 満了日('.$cp_inv_day.')';
			}
			$str .= "</div>";

			// 恵沢
			$str .= "<div class='part5'>&#183; ";
			if(!$row['cp_sale_type']) {
				if($row['cp_sale_amt_max'] > 0)
					$cp_sale_amt_max = "&nbsp;(最大 ".display_price($row['cp_sale_amt_max'])."割引)";
				else
					$cp_sale_amt_max = "";

				$str .= $row['cp_sale_percent']. '% 割引' . $cp_sale_amt_max;
			} else {
				$str .= display_price($row['cp_sale_amt']). /' 割引';
			}
			$str .= "</div>";

			// 最大金額
			if($row['cp_low_amt'] > 0) {
				$str .= "<div class='part5'>&#183; ".display_price($row['cp_low_amt'])." 異常購入時</div>";
			}

			// 使用可能対象
			$str .= "<div class='part5'>&#183; ".$gw_usepart[$row['cp_use_part']]."</div>";

			$s_upd = "<a href=\"javascript:post_update('".TB_SHOP_URL."/pop_coupon_update.php', '$cp_id');\" class=\"btn_small red\">ダウンロード</a>";

			$bg = 'list'.($i%2);
		?>
		<tr class="<?php echo $bg; ?>">
			<td><?php echo $str; ?></td>
			<td class="tac"><?php echo $s_upd; ?></td>
		</tr>
		<?php
		}
		if($i==0)
			echo '<tr><td colspan="2" class="empty_list">資料がありません。.</td></tr>';
		?>
		</tbody>
		</table>
	</div>

	<?php
	echo get_paging($config['write_pages'], $page, $total_page, $_SERVER['SCRIPT_NAME'].'?page=');
	?>

    <div class="win_btn">
		<a href="javascript:window.close();" class="btn_lsmall bx-white">ウィンドウを閉じる</a>
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
<input type="hidden" name="cp_id" value="">
</form>
