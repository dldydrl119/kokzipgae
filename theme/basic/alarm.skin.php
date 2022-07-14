<?php
if(!defined('_TUBEWEB_')) exit;
?>
<!-- alarm Area Start -->
<div id="alarm" class="pb_12">
	<div class="sub_title04">
	  <div class="container1">
		<!-- 모바일 히스토리 뒤로가기 버튼 -->
		<div id="history_back">
		  <button onclick="history.back()"><img src="<?php echo TB_IMG_URL; ?>/hi_back_ico.png" alt="history_back"></button>
		</div><!-- 모바일 히스토리 뒤로가기 버튼 -->
		<h2><span>알림</span></h2>
	  </div>
	</div>

	<div class="list_box">
	  <div class="container1">
		<ul>
		<?php
		$i=0;
		if(is_array($list) == true){
			for($i=0;$i<count($list);$i++){
		?>
		  <li>
			<div class="ico_box"><img src="<?php echo TB_IMG_URL; ?>/alarm_ico.png" alt="alarm_ico"></div>
			<dl>
			  <dt><?=$list[$i]["subject"]?></dt>
			  <dd><?=$list[$i]["wdate"]?></dd>
			</dl>
		  </li>
		<?php
			}
		}

		if($i == 0) echo "<li><div class=\"ico_box\"><img src=\"".TB_IMG_URL."/alarm_ico.png\" alt=\"alarm_ico\"></div><dl><dt>등록된 데이터가 없습니다.</dt></dl></li>";
		?>
		</ul>
	  </div>
	</div>
	<div class="text_deco">최근 30일 이내 알림만 제공합니다.</div>
</div><!-- alarm Area End -->