﻿<?php
if(!defined('_TUBEWEB_')) exit;

include_once(TB_THEME_PATH.'/aside_cs.skin.php');
?>

<div id="con_lf">
	<h2 class="pg_tit">
		<span><?php echo $tb['title']; ?></span>
		<p class="pg_nav">HOME<i>&gt;</i>Customer Service<i>&gt;</i><?php echo $tb['title']; ?></p>
	</h2>

	<div class="tar marb5">
		<a href="<?php echo TB_BBS_URL; ?>/qna_write.php" class="btn_small wset">Consultation</a>
	</div>

	<div class="tbl_head02 tbl_wrap">
		<table>
		<colgroup>
			<col class="w50">
			<col class="w100">
			<col>
			<col class="w100">
			<col class="w100">
			<col class="w80">
		</colgroup>
		<thead>
		<tr>
			<th scope="col">Number</th>
			<th scope="col">Classification</th>
			<th scope="col">Title</th>
			<th scope="col">Writer</th>
			<th scope="col">day</th>
			<th scope="col">State</th>
		</tr>
		</thead>
		<tbody>
		<?php
		for($i=0; $row=sql_fetch_array($result); $i++) {
			$bg = 'list'.($i%2);
		?>
		<tr class="<?php echo $bg; ?>">
			<td class="tac"><?php echo $num--; ?></td>
			<td class="tac"><?php echo $row['catename']; ?></td>
			<td><a href="<?php echo TB_BBS_URL; ?>/qna_read.php?index_no=<?php echo $row['index_no']; ?>"><?php echo cut_str($row['subject'],60); ?></a></td>
			<td><?php echo $row['mb_id']; ?></td>
			<td class="tac"><?php echo substr($row['wdate'],0,10); ?></td>
			<td class="tac">
				<?php if($row['result_yes']) { ?>
				<a href="javascript:js_qna('<?php echo $i; ?>');" class="fc_197 tu">View Answers</a>
				<?php } else { ?>
				waiting for an answer
				<?php } ?>
			</td>
		</tr>
		<tr id="sod_qa_con_<?php echo $i; ?>" class="sod_qa_con" style="display:none;">
			<td class="tal" colspan="6">
				<?php echo nl2br($row['reply']); ?>
			</td>
		</tr>
		<?php
		}
		if($i==0)
			echo '<tr><td colspan="6" class="empty_list">have no history.</td></tr>';
		?>
		</tbody>
		</table>
	</div>

	<?php
	echo get_paging($config['write_pages'], $page, $total_page, $_SERVER['SCRIPT_NAME'].'?page=');
	?>
</div>

<script>
function js_qna(id){
	var $con = $("#sod_qa_con_"+id);
	if($con.is(":visible")) {
		$con.hide();
	} else {
		$(".sod_qa_con:visible").hide();
		$con.show();
	}
}
</script>
