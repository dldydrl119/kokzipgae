<?php
$cp    =  get_cp_precompose($member["id"]);
$upl_dir  =  TB_DATA_URL . "/member";
?>

<div id="mypage_list" class="pd_12">

  <!-- Mem_info Area Start -->
  <div class="mem_info">
    <div class="container1">
      <!-- <div class="img_box">
          <?php if ($member['mem_img']) { ?>
            <?php if ($member['mem_img_type'] == "S") { ?>
              <img src="<?php echo $member['mem_img'] ?>" alt="img">
            <?php } else { ?>
              <img src="<?php echo $upl_dir; ?>/<?= $member['mem_img'] ?>" alt="img">
            <?php } ?>
          <?php } else { ?>
            <span class="mem_no_img"><img src="<?php echo TB_IMG_URL; ?>/no_img.jpg" alt="img"></span>
          <?php } ?>
        </div> -->
      <dl class="info">
        <!-- <div class="ico_box"><img src="https://kokzipgae.com:443/img/my_sns_ico1.png" alt=""></div> -->
        <div class="name"><?= $member['nickname'] ?>님</div>
        <!-- <div class="system"><a href="<?php echo TB_SHOP_URL; ?>/mypage_write.php"><img src="<?php echo TB_IMG_URL; ?>/my_system1.png" alt="ico"></a></div> -->
      </dl>
      <dl class="info1">
        <div class="name">보유 포인트 : <?php echo display_point($member['point']); ?></div>
      </dl>
      <!-- <div class="btn_box">
          <a href="<?php echo TB_SHOP_URL; ?>/point_payment.php">포인트 충전하기</a>
        </div> -->
    </div>
  </div>
  <!-- Mem_info Area End -->

  <!-- My_box Area Start -->
  <div class="my_box">
    <div class="container1">
      <!-- Left_box Area Start -->
      <div class="list_box">
        <!-- Top Area Start -->
        <div class="top">
          <!-- (<span><?php echo display_point($member['point']); ?></span>) 내 포인트 수 -->
          <ul>
            <li><a href="<?php echo TB_SHOP_URL; ?>/mypage_write.php">
                <p>내정보 관리</p><img src="<?php echo TB_IMG_URL; ?>/my_list_arrow_right.png" alt="arrow">
              </a></li>
            <li><a href="<?php echo TB_SHOP_URL; ?>/orderinquiry.php">
                <p>상담 내역</p><img src="<?php echo TB_IMG_URL; ?>/my_list_arrow_right.png" alt="arrow">
              </a></li>
            <li><a href="<?php echo TB_SHOP_URL; ?>/point.php">
                <p>포인트 · 결제 내역</p><img src="<?php echo TB_IMG_URL; ?>/my_list_arrow_right.png" alt="arrow">
              </a></li>
            <li><a href="<?php echo TB_SHOP_URL; ?>/coupon.php">
                <p>쿠폰(<span><?php echo $cp[3]; ?></span>장)</p><img src="<?php echo TB_IMG_URL; ?>/my_list_arrow_right.png" alt="arrow">
              </a></li>
          </ul>
        </div>
        <!-- Bottom Area Start -->
        <div class="bottom">
          <ul>
            <li><a href="<?php echo TB_BBS_URL; ?>/qna_list.php">
                <p>1 : 1 문의하기</p><img src="<?php echo TB_IMG_URL; ?>/my_list_arrow_right.png" alt="arrow">
              </a></li>
            <li><a href="<?php echo TB_BBS_URL; ?>/faq.php?faqcate=1">
                <p>FAQ</p><img src="<?php echo TB_IMG_URL; ?>/my_list_arrow_right.png" alt="arrow">
              </a></li>
            <li><a href="<?php echo TB_BBS_URL; ?>/provision.php">
                <p>이용약관</p><img src="<?php echo TB_IMG_URL; ?>/my_list_arrow_right.png" alt="arrow">
              </a></li>
            <li><a href="<?php echo TB_BBS_URL; ?>/policy.php">
                <p>개인정보 취급방침</p><img src="<?php echo TB_IMG_URL; ?>/my_list_arrow_right.png" alt="arrow">
              </a></li>
          </ul>
        </div>

        <!-- Text_box Area Start -->
        <div class="text_box">
          <h4>고객센터</h4>
          <p><?php echo $config['company_hours']; ?> <?php echo $config['company_lunch']; ?></p>
          <p><?php echo $config['company_close']; ?></p>
        </div>
      </div><!-- Left_box Area End -->

    </div>
  </div><!-- My_box Area End -->
</div>