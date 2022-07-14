<?php
if(!defined("_TUBEWEB_")) exit; // 個別ページアクセス不可
?>

<div class="m_bo_bg">
	<div class="title"><?php echo $qa['subject']; ?></div>
	<div class="wr_name">
		<?php echo $qa['mb_id']; ?><span class="wr_day"><?php echo substr($qa['wdate'],0,10); ?></span>
	</div>
	<div class="wr_txt">
		<?php echo nl2br($qa['memo']); ?>
	</div>

	<?php if($qa['result_yes']) { ?>
	<div class="qna_reply">
		<p class="date"><span class="ic_tit">答弁</span> <?php echo substr($qa['result_date'],0,10); ?></p>
		<p><?php echo nl2br($qa['reply']); ?></p>
	</div>
	<?php } ?>

	<div class="btn_confirm">
		<a href="<?php echo TB_MBBS_URL; ?>/qna_write.php" class="btn_medium">相談お問い合わせ</a>		
		<a href="<?php echo TB_MBBS_URL; ?>/qna_modify.php?index_no=<?php echo $index_no; ?>" class="btn_medium bx-white">修整</a>
		<a href="<?php echo TB_MBBS_URL; ?>/qna_list.php" class="btn_medium bx-white">目録</a>
		<a href="javascript:del('<?php echo TB_MBBS_URL; ?>/qna_read.php?index_no=<?php echo $index_no; ?>&mode=d');" class="btn_medium bx-white">削除</a>
	</div>
</div>

<script>
function del(url) {
	answer = confirm(/'削除します?');
	if(answer==true) { 
		location.href = url; 
	}
}
</script>
