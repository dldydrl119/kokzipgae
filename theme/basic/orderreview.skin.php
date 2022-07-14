<?php
if(!defined('_TUBEWEB_')) exit;
$gs	=	unserialize($od['od_goods']);
?>
<!-- Mypage Area Start --> 

<div id="mypage" class="pd_12">

  <!-- Mem_info Area Start -->
  <? include_once(TB_THEME_PATH.'/aside_mem_info.skin.php'); ?>
  <!-- Mem_info Area End -->

  <!-- My_box Area Start -->
  <div class="my_box">
	<div class="container1">
	  <!-- Left_box Area Start -->
	  <? include_once(TB_THEME_PATH.'/aside_my.skin.php'); ?>
	  <!-- Right_box Area Start -->
	  <div class="right_box">
		<!-- Content_box Area Start -->
          <div class="content_box">
            <!-- Sub_title01 Area Start -->
            <div class="sub_title01">
              <!-- 모바일 히스토리 뒤로가기 버튼 -->
              <div id="history_back" style="display: none;">
                <button onclick="history.back()"><img src="<?php echo TB_IMG_URL; ?>/hi_back_ico.png" alt="history_back"></button>
              </div><!-- 모바일 히스토리 뒤로가기 버튼 -->
              <div style="font-size:25px; width:100%;"><strong>[ <?=$gs["gname"]?> ]</strong> </div><br>
              <h3 style=" width:100%;">리뷰작성</h3>
             
            </div><!-- Sub_title01 Area End -->
            
			<form name="forderreview" method="post" action="<?php echo $form_action_url; ?>" onsubmit="return forderreview_submit(this);">
			<input type="hidden" name="gs_id" value="<?php echo $gs_id; ?>">
			<input type="hidden" name="od_id" value="<?php echo $od_id; ?>">
			<input type="hidden" name="seller_id" value="<?php echo $gs['mb_id']; ?>">
			<input type="hidden" name="score" value="5">
			<input type="hidden" name="token" value="<?php echo $token; ?>">
            <div id="review_write">
              <div class="point_box">
                <img src="<?php echo TB_IMG_URL; ?>/review_point.png" class="review_score" alt="re_point">
                <img src="<?php echo TB_IMG_URL; ?>/review_point.png" class="review_score" alt="re_point">
                <img src="<?php echo TB_IMG_URL; ?>/review_point.png" class="review_score" alt="re_point">
                <img src="<?php echo TB_IMG_URL; ?>/review_point.png" class="review_score" alt="re_point">
                <img src="<?php echo TB_IMG_URL; ?>/review_point.png" class="review_score" alt="re_point">
              </div>
              <div class="text_box">
                <div class="subject"><h4>제목</h4><input type="text" name="title"></div>
                <div class="text">
                  <textarea name="memo" placeholder="이용후기를 입력해 주세요."></textarea>
                </div>
              </div>
              <div class="btn_box">
                <a onclick="history.back()" class="back_bt">뒤로가기</a>
				<input type="submit" class="write_bt" value="리뷰작성">
              </div>
            </div>
			</form>
          </div><!-- Content_box Area End -->
	  </div><!-- Right_box Area End -->
	</div>
  </div><!-- My_box Area End -->
</div><!-- Mypage Area End -->
<script>

$(function(){

  /* 별점 선택 */
  $('.point_box .review_score').click(function(){

		var review_score	=	parseInt($(this).index());
		
		for(var i=0;i<5;i++){

			if(i <= review_score){
				$('.point_box .review_score:eq('+i+')').attr("src","<?php echo TB_IMG_URL; ?>/review_point.png");
			}else{
				$('.point_box .review_score:eq('+i+')').attr("src","<?php echo TB_IMG_URL; ?>/review_point_no.png");
			}
		}

		$("input[name=score]").val((review_score+1));
	
  });

});

function forderreview_submit(f) {

	if(!f.title.value) {
		alert('제목을 입력하세요.');
		f.title.focus();
		return false;
	}

	if(!f.memo.value) {
		alert('내용을 입력하세요.');
		f.memo.focus();
		return false;
	}

	if(confirm("등록 하시겠습니까?") == false)
		return false;

    return true;
}
</script>