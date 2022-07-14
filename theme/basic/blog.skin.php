<?php
if (!defined('_TUBEWEB_')) exit;
?>

<h2 class="pg_tit">
	<span><?php echo $tb['title']; ?></span>
	<p class="pg_nav">HOME<i>&gt;</i><?php echo $tb['title']; ?></p>
</h2>
<div style="margin: 0 10%;">
<div style="height: 70px;"></div>
<?php
echo get_view_thumbnail(conv_content($co["co_blog"], 1, 0), 1000);
?>

<div id="bo_ser">
	<ul>
		<li><a href="<?php echo TB_BBS_URL; ?>/board.php">[목록으로]</a></li>
		<!-- <li><a href="board_modify.php?idx=<?php echo $board['idx']; ?>">[수정]</a></li> -->
		<!-- <li><a href="board_delete.php?idx=<?php echo $board['idx']; ?>">[삭제]</a></li> -->
	</ul>
</div>
</div>
