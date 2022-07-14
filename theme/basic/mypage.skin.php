<?php
if(!defined('_TUBEWEB_')) exit;
?>
  <!-- Mypage Area Start -->
  <div id="mypage" class="pd_12">

      <!-- Mem_info Area Start -->
 	  <? include_once(TB_THEME_PATH.'/aside_mem_info.skin.php'); ?>
      <!-- Mem_info Area End -->

      <!-- My_box Area Start -->
      <div class="my_box">
        <div class="container1">
	 	  <? include_once(TB_THEME_PATH.'/aside_my.skin.php'); ?>
          <!-- Right_box Area Start -->
          <div class="right_box">
            <!-- Content_box Area Start -->
            <div class="content_box">
              <!-- Sub_title01 Area Start -->
              <div class="sub_title01"><h3>마이페이지</h3></div><!-- Sub_title01 Area End -->
              <div id="my_info">
                <div class="box">
                  <dl class="list_1">
                    <dt>
							<?php if($member['mem_img']){ ?>
								<img src="<?php echo $upl_dir; ?>/<?=$member['mem_img']?>" alt="img">
							<?php }else{ ?>
								<span class="mem_no_img"><img src="<?php echo TB_IMG_URL; ?>/no_img.jpg" alt="img"></span>
							<?php } ?>
					</dt>
                    <dd><?=$member['nickname']?></dd>
                  </dl>
                  <dl class="list_2">
                    <dt>이름:</dt>
                    <dd><?=$member['name']?></dd>
                  </dl>
                  <dl class="list_3">
                    <dt>이메일</dt>
                    <dd>
                      <!-- <span class="sns"><img src="<?php echo TB_IMG_URL; ?>/my_sns_ico1.png" alt=""></span> -->
                      <span class="e_mail"><?=$member['id']?></span>
                    </dd>
                  </dl>
                </div>
              </div>
            </div><!-- Content_box Area End -->
          </div><!-- Right_box Area End -->

        </div>
      </div><!-- My_box Area End -->

  </div><!-- Mypage Area End -->
