﻿<?php
if(!defined("_TUBEWEB_")) exit; // No access to individual pages
?>

<div id="sod_review">
	<p id="sod_fin_no">
		<strong>total <?php echo number_format($total_count); ?>the number</strong>there is a late purchase of.
	</p>
	<?php
	if(!$total_count) {
		echo "<p class=\"empty_list\">There are no post-purchase reports.</p>";
	} else {
	?>
	<table>
	<colgroup>
		<col width="80px">
		<col>
	</colgroup>
	<tbody>
	<?php
	for($i=0; $row=sql_fetch_array($result); $i++) {
		$href = TB_MSHOP_URL.'/view.php?gs_id='.$row['gs_id'];
		$gs = get_goods($row['gs_id'], 'gname, simg1');
	?>
	<tr>
		<td class="image"><a href="<?php echo $href; ?>"><?php echo get_it_image($row['gs_id'], $gs['simg1'], 80, 80); ?></a></td>
		<td class="gname">
			<p><a href="<?php echo $href; ?>" target="_blank"><?php echo cut_str($gs['gname'], 55); ?></a></p>
			<p class="mart3 fc_999"><?php echo cut_str($row['memo'], 100); ?></p>
			<p class="mart5"><span class="fc_255"><?php echo $gw_star[$row['score']]; ?></span><span class="fc_999"> / <?php echo $row['writer_s']; ?> / <?php echo date("Y-m-d", $row['wdate']); ?></span></p>
		</td>
	</tr>
	<?php } ?>
	</tbody>
	</table>

	<?php
	echo get_paging($config['mobile_pages'], $page, $total_page, $_SERVER['SCRIPT_NAME'].'?page=');	
	?>
	<?php } ?>
</div>
