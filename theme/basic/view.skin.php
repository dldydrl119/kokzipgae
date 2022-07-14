<?php
if (!defined('_TUBEWEB_')) exit;


?>
<?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_TUBEWEB_')) exit; // 개별 페이지 접근 불가


$begin_time = get_microtime();

if (!isset($tb['title'])) {
  $tb['title'] = get_head_title('head_title', $pt_id);
  $tb_head_title = $tb['title'];
} else {
  $tb_head_title = $tb['title']; // 상태바에 표시될 제목
  $tb_head_title .= " | " . get_head_title('head_title', $pt_id);
}

// 현재 접속자
// 게시판 제목에 ' 포함되면 오류 발생
$tb['lo_location'] = addslashes($tb['title']);
if (!$tb['lo_location'])
  $tb['lo_location'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
$tb['lo_url'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
if (strstr($tb['lo_url'], '/' . TB_ADMIN_DIR . '/') || is_admin()) $tb['lo_url'] = '';





/*
// 만료된 페이지로 사용하시는 경우
header("Cache-Control: no-cache"); // HTTP/1.1
header("Expires: 0"); // rfc2616 - Section 14.21
header("Pragma: no-cache"); // HTTP/1.0
*/
?>
<!doctype html>
<html lang="ko">

<head>
  <meta charset="utf-8">
  <meta http-equiv="imagetoolbar" content="no">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 테스트로 넣어봅니다. -->
  <?php
  include_once(TB_LIB_PATH . '/seometa.lib.php');

  if ($config['add_meta'])
    echo $config['add_meta'] . PHP_EOL;
  ?>
  <title><?php echo $tb_head_title; ?></title>
  <link rel="stylesheet" href="<?php echo TB_CSS_URL; ?>/default.css?ver=<?php echo TB_CSS_VER; ?>">
  <link rel="stylesheet" href="<?php echo TB_THEME_URL; ?>/style.css?ver=<?php echo TB_CSS_VER; ?>">
  <?php if ($ico = display_logo_url('favicon_ico')) { // 파비콘 
  ?>
    <link rel="shortcut icon" href="<?php echo $ico; ?>" type="image/x-icon">
  <?php } ?>
  <!-- Font Noto Sans -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <script>
    var tb_url = "<?php echo TB_URL; ?>";
    var tb_bbs_url = "<?php echo TB_BBS_URL; ?>";
    var tb_shop_url = "<?php echo TB_SHOP_URL; ?>";
    var tb_mobile_url = "<?php echo TB_MURL; ?>";
    var tb_mobile_bbs_url = "<?php echo TB_MBBS_URL; ?>";
    var tb_mobile_shop_url = "<?php echo TB_MSHOP_URL; ?>";
    var tb_is_member = "<?php echo $is_member; ?>";
    var tb_is_mobile = "<?php echo TB_IS_MOBILE; ?>";
    var tb_cookie_domain = "<?php echo TB_COOKIE_DOMAIN; ?>";
  </script>
  <script src="<?php echo TB_JS_URL; ?>/jquery-1.8.3.min.js"></script>
  <script src="<?php echo TB_JS_URL; ?>/jquery-ui-1.10.3.custom.js"></script>
  <script src="<?php echo TB_JS_URL; ?>/common.js?ver=<?php echo TB_JS_VER; ?>"></script>
  <script src="<?php echo TB_JS_URL; ?>/slick.js"></script>
  <?php if ($config['mouseblock_yes']) { // 마우스 우클릭 방지 
  ?>
    <script>
      $(document).ready(function() {
        $(document).bind("contextmenu", function(e) {
          return false;
        });
      });
      $(document).bind('selectstart', function() {
        return false;
      });
      $(document).bind('dragstart', function() {
        return false;
      });
    </script>
  <?php } ?>
  <?php
  if ($config['head_script']) { // head 내부태그
    echo $config['head_script'] . PHP_EOL;
  }

  $at    =  sql_fetch("select count(*) as re_cnt , if(isnull(round(sum(score)/count(*),1)), '0',  round(sum(score)/count(*),1)) as score from shop_goods_review where  gs_id= '" . $row['index_no'] . "'");

  $goods_list[$i]  =  $row;


  $goods_list[$i]["re_cnt"]            =  $at["re_cnt"];
  ?>


</head>
<body<?php echo isset($tb['body_script']) ? $tb['body_script'] : ''; ?>>



  <?php
  if (!defined('_TUBEWEB_')) exit;

  if (defined('_INDEX_')) { // index에서만 실행
    include_once(TB_LIB_PATH . '/popup.inc.php'); // 팝업레이어
  }


  if (is_mobile() == true) {
    $filed  =  "mobile_logo";
  } else {
    $filed  =  "basic_logo";
  }

  $row = sql_fetch("select $filed from shop_logo where mb_id='$pt_id'");

  if (!$row[$filed] && $pt_id != 'admin') {
    $row = sql_fetch("select $filed from shop_logo where mb_id='admin'");
  }

  $file  =  TB_DATA_URL . '/banner/' . $row[$filed];


  $sql = " select SUM(IF(io_type = 1, (io_price * ct_qty), ((io_price + ct_price) * ct_qty))) as price,
  SUM(IF(io_type = 1, (io_price * ct_qty), ((io_price + ct_supply_price) * ct_qty))) as supply_price,
SUM(IF(io_type = 1, (0),(ct_point * ct_qty))) as point,
SUM(IF(io_type = 1, (0),(ct_qty))) as qty,
SUM(io_price * ct_qty) as opt_price
from shop_cart
where gs_id = '$row[gs_id]'
and ct_direct = '$set_cart_id'
and ct_select = '0'";
  $sum = sql_fetch($sql);

  $supply_price = $sum['supply_price'];


  ?>
  <script>
    $(document).ready(function() {
      $(".icon_box>a:first-of-type").click(function() {
        $("#pop").fadeIn();
        $("#pop").addClass("black");
      });
      $("#pop>article").click(function() {
        $(this).parent().fadeOut();
      });
    });
  </script>
  <!-- Header Area Start -->
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MPFD645" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header>
    <div class="gnb">
      <div class="container">

        <ul>
          <?php
          $counseling_type  =  trim($_POST['counseling_type']);
          $tnb = array();

          if ($is_admin)
            $tnb[] = '<li><a href="' . $is_admin . '" target="_blank">관리자</a></li>';
          if ($member['id']) {
            $tnb[] = '<li><a href="' . TB_BBS_URL . '/logout.php">로그아웃</a></li>';
            $tnb[] = '<li><a href="' . TB_SHOP_URL . '/orderinquiry.php">마이페이지</a></li>';
          } else {
            $tnb[] = '<li><a href="' . TB_BBS_URL . '/login.php?url=' . $urlencode . '" id="login">로그인</a></li>';
            $tnb[] = '<li><a href="' . TB_BBS_URL . '/register_intro.php" id="join">회원가입</a></li>';
          }

          $tnb_str = implode(PHP_EOL, $tnb);
          echo $tnb_str;
          ?>
        </ul>
      </div>
    </div>
    <div class="hd">
      <div class="container">
        <div class="logo">
          <h1><a href="/index.php#main_category" class="ir_w" style="background:url('<?= $file ?>') no-repeat 50% 50% / cover;">콕집게</a></h1>
          <h1><a href="/index.php#main_category" class="ir_m" style="background:url('/img/main_prev1.png') no-repeat 50% 50%; width:8%; background-size:24px; float:left; height:26px; margin-bottom:10px;">콕집게</a></h1>
        </div>
        <form name="fsearch" id="fsearch" method="post" action="/" autocomplete="off">
          <input type="hidden" name="hash_token" value="<?php echo TB_HASH_TOKEN; ?>">
          <input type="text" name="ss_tx" class="sch_stx" maxlength="20" placeholder="제 사주팔자를 알고싶어요." value="<?= $_REQUEST["ss_tx"] ?>">
          <button type="submit"><img src="<?php echo TB_IMG_URL; ?>/search_ico.png" alt="search_icon"></button>
        </form>
        <ul>
          <?php
          $tnb = array();
          $tnb[] = '<li><a href="/index.php#main_category"><img src="' . TB_IMG_URL . '/hd_ico1.png" alt="ico1"><p>콕집게</p></a></li>';
          $tnb[] = '<li><a href="' . TB_SHOP_URL . '/wish.php"><img src="' . TB_IMG_URL . '/hd_ico2.png" alt="ico2"><p>찜주머니</p></a></li>';
          $tnb[] = '<li><a href="' . TB_SHOP_URL . '/orderinquiry.php"><img src="' . TB_IMG_URL . '/hd_ico3.png" alt="ico3"><p>마이메뉴</p></a></li>';
          $tnb_str = implode(PHP_EOL, $tnb);
          echo $tnb_str;
          ?>
        </ul>
      </div>
    </div>
    <div class="m_alarm_ico">
      <a class="share_bt"><img src="<?php echo TB_IMG_URL; ?>/m_share_ico.png" alt="quick_ico"></a>
    </div>
    <div class="m_quick_left_top">
      <a href="javascript:itemlistwish('<?php echo $index_no; ?>');" class="m_bokzzim"><img src="<?php echo TB_IMG_URL; ?>/<? if ($wish_cnt["cnt"] == 0) {
                                                                                                                              echo "hd_ico22.png";
                                                                                                                            } else {
                                                                                                                              echo "m_call_dibs_ico.png";
                                                                                                                            } ?>" alt="ico2"><img src="https://dldydrl112.cafe24.com:443/img/hd_ico22.png" alt="ico2" style="display: none;"></a>
    </div>
    <div class="m_alarm_ico_sin">
      <a class="tel_btn" href="<?php echo TB_BBS_URL; ?>/report_write.php"><img src="<?php echo TB_IMG_URL; ?>/warning.png" style="width: 29px;" alt="ico1"></a>
    </div>
  </header><!-- Header Area End -->









  <script src="<?php echo TB_JS_URL; ?>/shop.js"></script>

  <form name="fbuyform" method="post">
    <input type="hidden" name="gs_id[]" value="<?php echo $index_no; ?>">
    <input type="hidden" id="it_price" value="<?php echo get_sale_price($index_no); ?>">
    <input type="hidden" name="ca_id" value="<?php echo $ca['gcate']; ?>">
    <input type="hidden" name="sw_direct">

    <div id="view_page" style="background-color: white;">

      <!-- View_info Area Start -->
      <div class="view_info">
        <div class="container">


          <!-- Icon_box Area Start -->
          <div class="icon_box">
            <a class="tel_btn" href="javascript:phone_box"><img src="<?php echo TB_IMG_URL; ?>/warning.png" style="width: 33px;" alt="ico1"></a>
            <a class="share_bt"><img src="<?php echo TB_IMG_URL; ?>/share_ico.png" alt="ico1"></a>
            <a href="javascript:itemlistwish('<?php echo $index_no; ?>');" class="bokzzim"><img src="<?php echo TB_IMG_URL; ?>/<? if ($wish_cnt["cnt"] == 0) {
                                                                                                                                  echo "hd_ico2.png";
                                                                                                                                } else {
                                                                                                                                  echo "call_dibs_ico.png";
                                                                                                                                } ?>" alt="ico2"></a>
          </div><!-- Icon_box Area End -->
          <style>
            .web1 {
              display: none;
            }

            .mobile1 {
              display: block;
            }

            @media (max-width:450px) {
              .web1 {
                display: block;
              }

              .mobile1 {
                display: none;
              }
            }

            #text {
              text-align: center;
              font-weight: bold;
              margin-top: 40px;
            }

            #img {
              margin: 0 0 10px;
              width: 15%;
            }

            #button {
              width: 100%;
            }

            #pop {
              position: fixed;
              z-index: 1;
              top: 0;
              width: 100%;
              height: 100%;
              display: none;
              left: 0px;
            }

            #pop>article {
              width: 50%;
              position: relative;
              z-index: 2;
              background: white;
              box-shadow: 3px 3px 5px black;
              margin: 12% 0 0 25%;
              cursor: pointer;
              text-align: center;
            }

            .black {
              background: rgba(0, 0, 0, 0.6);
              display: none;
            }

            .info_call {
              width: 100%;
              line-height: 36px;
              color: black;
              border: 1px solid #b22323;
              font-size: 1.4vw;
            }

            .infoDetail {
              width: 100%;
              padding: 54px 0;
              border: 1px solid #b22323;
              font-size: 20px;
              line-height: 40px;
            }

            .infobutton {
              width: 100%;
              background-color: #b22323;
              color: #fff;
              border: none;
              line-height: 70px;
              cursor: pointer;
            }

            .infoimg {
              width: 20%;
              border-radius: 100px;
            }

            @media (max-width: 767px) {

              #get_main .fill .middle {
                width: 100%;
                height: 100%;
                position: absolute;
                top: 32%;
              }

              #get_main .manual .manual_area .manual_contents .panel-group .panel-body br {
                display: none;
              }

              #get_main .get_area1 {
                display: inline;
              }

              #get_main .get_area_m {
                display: none;
              }
            }
          </style>


          <!-- 팝업 -->
          <div id="pop">
            <article>
              <div class="info_call">상담신고</div>
              <div class="infoDetail">
                <div style="height: 30px;"></div>
                <p>상담에 문제가 있거나 현재 상담을 신고하시려면</p>
                <p><strong>[ 신고하기 ]</strong>를 눌러주세요.</p><br>
                <p>생각이 많아지는 순간. 콕집게</p>
              </div>
              <button class="infobutton" type="button" onclick="location.href='<?php echo TB_BBS_URL; ?>/report_write.php' ">신고하기</button>
            </article>
          </div> 



          <!-- Share_box Area Start -->
          <div class="share_box">
            <div class="box4">
              <h4>공유하기</h4>
              <div class="mobile">
                <ul>
                  <li><?= get_sns_share_link('kakao', $sns_url, $sns_title, TB_IMG_URL . '/kakao_ico.png'); ?></li>
                  <li><?= get_sns_share_link('naverline', $sns_url, $sns_title, TB_IMG_URL . '/line_ico.png'); ?></li>
                  <li><?= get_sns_share_link('naverband', $sns_url, $sns_title, TB_IMG_URL . '/band_ico.png'); ?></li>
                  <li><?= get_sns_share_link('facebook', $sns_url, $sns_title, TB_IMG_URL . '/facebook_ico.png'); ?></li>
                  <li>
                    <?php if (stristr($_SERVER['HTTP_USER_AGENT'], 'ipad') || stristr($_SERVER['HTTP_USER_AGENT'], 'iphone')) { ?>
                      <a href="sms:&body=<?= $sns_url ?>"><img src="<?php echo TB_IMG_URL; ?>/sms_ico.png" alt="ico6">
                        <p>SMS</p>
                      </a>
                    <?php } else { ?>
                      <a href="sms:?body=<?= $sns_url ?>"><img src="<?php echo TB_IMG_URL; ?>/sms_ico.png" alt="ico6">
                        <p>SMS</p>
                      </a>
                    <?php } ?>
                  </li>
                </ul>
              </div>
              <div class="pc">
                <div class="url_copy">
                  <input type="text" name="url" value="http://<?= $_SERVER["HTTP_HOST"]; ?><?= $_SERVER["REQUEST_URI"]; ?>">
                  <button type="button" onclick="copy('http://<?= $_SERVER["HTTP_HOST"]; ?><?= $_SERVER["REQUEST_URI"]; ?>');">주소복사</button>
                </div>
              </div>
              <button class="close_bt" type="button">취소</button>
            </div>
          </div><!-- Share_box Area End -->

          <!-- 
        <div class="share_box">
          <ul>
            <li>
              <a href="">
                <img src="<?php echo TB_IMG_URL; ?>/kakao_ico.png" alt="ico1">
                <p>카카오톡</p>
              </a>
			  <?= get_sns_share_link('kakaostory', $sns_url, $sns_title, TB_IMG_URL . '/kakao_story_ico.png'); ?>
            </li>
            <li>
			  <?= get_sns_share_link('naverline', $sns_url, $sns_title, TB_IMG_URL . '/line_ico.png'); ?>
			  <?= get_sns_share_link('naverband', $sns_url, $sns_title, TB_IMG_URL . '/band_ico.png'); ?>
            </li>
            <li>
			  <?= get_sns_share_link('facebook', $sns_url, $sns_title, TB_IMG_URL . '/facebook_ico.png'); ?>
              <a href="">
                <img src="<?php echo TB_IMG_URL; ?>/sms_ico.png" alt="ico6">
                <p>SMS</p>
              </a>
            </li>
            <li>
              <a href="">
                <img src="<?php echo TB_IMG_URL; ?>/url_ico.png" alt="ico7">
                <p>URL복사</p>
              </a>
              <a href="">
                <img src="<?php echo TB_IMG_URL; ?>/see_more_ico.png" alt="ico8">
                <p>더보기</p>
              </a>
            </li>
          </ul>
          <button type="button">취소</button>
        </div> -->


          <!-- Box Area Start -->
          <div class="box" id="TOP">

            <!-- Left_box -->
            <div class="left_box">
              <div class="video_box">
                <?php echo get_it_goods_image($index_no, $gs['simg1'], $default['de_item_medium_wpx'], $default['de_item_medium_hpx']); ?>
                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/YDzv0GC1SfI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe> -->
              </div>
            </div>


            <div class="middle_box">
              <div class="middle_box2">
                <div class="box_top">
                  <img src="/img/back/durumari.png">
                </div>
                <div class="text">
                  <div class="sangname"><?php echo $tc['name']; ?> <p style="color: #7b7b7b; display: inline;">|</p>
                    <!-- <?= counseling_sticker($goods_list[$i]["counseling_type"], 'mo') ?> -->
                    <?php echo $gs['brand_nm'] ?>
                  </div>
                  <div class="explan"><?php echo $gs["explan"]; ?></div>

                </div>
              </div>
            </div>








            <!-- Right_box -->
            <div class="right_box">

              <div class="right_box2">

                <div class="box_top">
                  <div class="subject">
                    <div class="explan_sang"><?php echo $tc["explan"]; ?></div>
                    <div class="sangname"><?php echo $tc['name']; ?> <p style="color: #7b7b7b; display: inline;">|</p>
                      <!-- <?= counseling_sticker($goods_list[$i]["counseling_type"], 'mo') ?> -->
                      <?php echo $gs['brand_nm'] ?>
                    </div>
                    <div class="gname"><?php echo $gs['gname']; ?> <p style="color: #000; display: inline;">|</p> <?php echo $gs['brand_nm'] ?></div>
                    <div class="sang_ka">
                      <div class="sang_ka_1"></div>
                    </div>
                    <div class="point">
                      <span class="point_img">
                        <?php
                        for ($j = 1; $j <= 5; $j++) {
                          if ($j <= $star_score) {
                            echo "<img src=\"" . TB_IMG_URL . "/review_point.png\" alt=\"review_point\">";
                          } else {
                            echo "<img src=\"" . TB_IMG_URL . "/review_point_no.png\" alt=\"review_point\">";
                          }
                        }
                        $sum = $star_score
                        ?>
                      </span><span>(<?= $star_score ?>.0)</span>
                    </div>
                    <!--<?php if (is_admin()) { ?><a href="<?php echo TB_ADMIN_URL; ?>/goods.php?code=form&w=u&gs_id=<?php echo $index_no; ?>" target="_blank" class="btn_small red">수정</a><?php } ?>-->
                  </div><!-- Icon_box Area End -->
                </div>
                <div class="line"></div>
                <div class="w_right_body">
                  <?php if ($tc["counseling"]) { ?>
                    <div class="w_right">
                      <dl>

                        <dt>주요 상담분야</dt>

                        <dd><?= $tc["counseling"] ?></dd>
                        <!-- <div class="pricesang_w"> <span id="sit_tot_price"> <?php echo get_price($index_no); ?></span></div> -->
                      </dl>
                    </div>
                    <div class="w_right">
                      <dl>

                        <dt>상담시간</dt>

                        <!-- <dd><?= $tc["counseling"] ?></dd> -->
                        <!-- <div class="pricesang_w"> <span id="sit_tot_price"> <?php echo get_price($index_no); ?></span></div> -->
                      </dl>
                    </div>
                  <?php } ?>
                </div>
                <!-- Mobile point -->
                <div class="m_point">
                  <div class="sang_ka">
                    <div class="sang_ka_1">평점</div>
                  </div>
                  <span class="point_img">
                    <?php
                    for ($j = 1; $j <= 5; $j++) {
                      if ($j <= $star_score) {
                        echo "<img src=\"" . TB_IMG_URL . "/review_point.png\" alt=\"review_point\">";
                      } else {
                        echo "<img src=\"" . TB_IMG_URL . "/review_point_no.png\" alt=\"review_point\">";
                      }
                    }
                    $sum = $star_score
                    ?>
                  </span>
                  <span style="margin: 0 5px; vertical-align: text-top;"><?= number_format($sum, 1); ?><dt class="m_point_kate"><u><a href="#Comments" style="margin: 15px 0; font-family: 'nanumsquareL'; font-size: 15px; color: #868686;">상담후기></a></u></dt></span>
                  <div class="sang_sub">
                    <div class="sang_ka">
                      <div class="sang_ka_1" style="display: none;">
                        <!-- 상담 -->
                      </div>
                    </div><span class="point_img">
                      <div class="time" style="font-size:14px">
                        <!-- <?php echo $gs['brand_nm'] ?> -->
                      </div>
                  </div>
                  <div class="sang_sub" style="display: flex; align-items: center;">
                    <div class="sang_ka">
                      <div class="sang_ka_1">상품</div>
                    </div>
                    <div class="option-box">
                      <ul id="option_set_added">
                        <li class="amount sit_opt_list vi_txt_li">
                          <input type="hidden" name="io_type[<?php echo $index_no; ?>][]" value="0">
                          <input type="hidden" name="io_id[<?php echo $index_no; ?>][]" value="">
                          <input type="hidden" name="io_value[<?php echo $index_no; ?>][]" value="<?php echo $gs['gname']; ?>">
                          <input type="hidden" class="io_price" value="0">
                          <input type="hidden" class="io_stock" value="<?php echo $gs['stock_qty']; ?>">
                          <span class="option-name sit_opt_subj">수량</span>
                          <span class="option-con">
                            <span class="calculator">
                              <a href="javascript:void(0)" class="calc-min" data="minus">-</a>
                              <input type="number" name="ct_qty[<?php echo $index_no; ?>][]" value="<?php echo $odr_min; ?>" class="sale-cnt inp_opt">
                              <a href="javascript:void(0)" class="calc-plus" data="plus">+</a>
                            </span>
                          </span>
                        </li>
                        <script>
                          $(function() {
                            price_calculate();
                          });
                        </script>
                        <!-- 선택 옵션 S -->
                        <?php if ($option_item || $supply_item) { ?>
                          <li>
                            <?php if ($option_item) { ?>
                              <div>
                                <span class="option-name">옵션</span>
                                <?php echo $option_item; ?>
                              </div>
                            <?php } ?>
                            <?php if ($supply_item) { ?>
                              <div>
                                <span class="option-name">주기</span>
                                <?php echo $supply_item; ?>
                              </div>
                            <?php } ?>
                          </li>
                        <?php } ?>
                      </ul>
                      <!-- <div class="good-job-bro">
                    <div class="good-job-sis">
															<p><span style="margin-right:45px;">옵션</span><span class="right"> <?php echo $ct[""]; ?></span></p>
														</div>
														<div class="good-job-sis">
															<p><span style="margin-right:18px;">결제 주기</span><span class="right"><?= date("Y-m-d"); ?></span></p>
														</div>
                    <div class="good-job-sis">
                      <p><span style="margin-right:18px">결제 가격</span><span class="right"><?php echo $it_price; ?></span></p>
                    </div>
                  </div> -->
                    </div>
                  </div>
                </div>


                <!-- Mobile point -->
                <div class="pricesang_m"> <span class="sit_tot_price" id="sit_tot_price"><?php echo $sum['io_price']; ?> </span>
                </div>
                <div class="box_bottom">
                  <dl class="mb">
                    <dt>
                      <!-- <?= $tc["counseling_time"] ?> 
                    <!-- <span id="sit_tot_price"><?php echo get_price($index_no); ?></span> 
                    <!-- <!-- 선택된 옵션 시작 {  -->
                      <div id="option_set_list" style="display:none;">
                        <?php if (!$option_item) { ?>

                          <ul id="option_set_added">
                            <li class="sit_opt_list vi_txt_li">
                              <dl>
                                <input type="hidden" name="io_type[<?php echo $index_no; ?>][]" value="0">
                                <input type="hidden" name="io_id[<?php echo $index_no; ?>][]" value="">
                                <input type="hidden" name="io_value[<?php echo $index_no; ?>][]" value="<?php echo $gs['gname']; ?>">
                                <input type="hidden" class="io_price" value="0">
                                <input type="hidden" class="io_stock" value="<?php echo $gs['stock_qty']; ?>">
                                <dt>
                                  <span class="sit_opt_subj">수량</span>
                                  <span class="sit_opt_prc"></span>
                                </dt>
                                <dd class="li_ea">
                                  <span>
                                    <button type="button" class="defbtn_minus">감소</button><input type="text" name="ct_qty[<?php echo $index_no; ?>][]" value="<?php echo $odr_min; ?>" class="inp_opt" title="수량설정" size="2"><button type="button" class="defbtn_plus">증가</button>
                                  </span>
                                  <span class="marl7">(재고수량 : <?php echo $gs['stock_mod'] ? display_qty($gs['stock_qty']) : '무제한'; ?>)</span>
                                </dd>
                              </dl>
                            </li>
                          </ul>
                          <script>
                            $(function() {
                              price_calculate();
                            });
                          </script>
                        <?php } ?>
                      </div>
                      <!-- } 선택된 옵션 끝
 -->
                    </dt>
                    <?php if ($gs['keywords']) { ?>
                      <!--<dd><?= $gs['keywords'] ?></dd>
                  <?php } ?>
                </dl>

                <?php if ($tc["counseling"]) { ?>
                  <div class="w_right">
                    <dl>
 
                      <dt>주요상담분야</dt>

                      <dd><?= $tc["counseling"] ?></dd>
                      <div class="pricesang_w"> <span id="sit_tot_price"> <?php echo get_price($index_no); ?></span></div>
                    </dl>
                  </div>
                <?php } ?>

                <div class="point"><img src="<?php echo TB_IMG_URL; ?>/view_point_ico.png" alt="point"><span><?= $star_score ?></span></div>   -->


                </div>
              </div>







              <div class="point_sang"><img src="<?php echo TB_IMG_URL; ?>/view_point_ico.png" alt="point"><span><?= $star_score ?></span></div>


              <!-- <div style="height: 30px;"></div> -->
              <?php echo get_buy_button_unit($script_msg, $index_no, 'buy'); ?>
            </div>
            <!-- 
             <div class="mobile_bt">
              <?php echo get_buy_button_unit($script_msg, $index_no, 'buy'); ?>
            </div> -->

          </div><!-- Box Area End -->


        </div>

      </div><!-- View_info Area End -->


      <!-- content  Area Start -->
      <div class="content">
        <div class="container">
          <div class="content1">
            <!-- <script>
              function SirenFunction(idMyDiv) {
                var objDiv = document.getElementById(idMyDiv);
                if (objDiv.style.display == "none") {
                  objDiv.style.display = "block";
                } else {
                  objDiv.style.display = "none";
                }
              }
            </script>

            <style>
              .sir_singo_msg {
                color: #934545;
                margin-bottom: 30px
              }

              .sir_singo_msg button {
                cursor: pointer;
                font-family: Arial, '돋움', Dotum;
                border: none;
                padding: 0;
                background: #fff;
                outline: 0
              }

              .sir_singo_msg .blind_view {
                font-size: 1.14em;
                font-weight: bold;
                color: #ff4343;
                margin-top: -3px;
                text-decoration: underline
              }

              .singo_view {
                display: none;
              }
            </style>

            <div class="con_inner">
              <div class="sir_singo_msg">
                신고가 접수되어 자동으로 블라인드 된 글입니다.<br>
                원글을 보시려면 <a href="#" onclick="SirenFunction('SirenDiv'); return false;" class="blind_view">여기를</a> 클릭하세요
              </div>
              <div class="singo_view" id="SirenDiv">
                내용보기
              </div>
            </div> -->

            <?php if ($tc["teacher_history"]) {

              $teacher_history  =  explode("\n", $tc["teacher_history"]);
            ?>
              <div class="sub_title">선생님 이력</div>
              <ul>
                <?php for ($i = 0; $i < count($teacher_history); $i++) { ?>
                  <li><?= $teacher_history[$i]; ?></li>
                <?php } ?>
              </ul>
          </div>
        <?php } ?>
        <div class="content2">
          <div class="sub_title">안내사항</div>
          <div class="text_box">
            <img src="<?php echo TB_IMG_URL; ?>/guide_ico.png" alt="guide_ico">
            <p>
              <span>해당상품 고지된 내용 외 추가적인 상담을 원하실 경우<br class="mb"> 상품을 추가적으로 구매 부탁드립니다.</span><br>
              <span>평균 상담 시간 이후 선생님께서 상담을 종료 할 수 있습니다.</span>
            </p>
          </div>
        </div>
        </div>
      </div>
      <!-- content  Area End -->



      <!-- <div class="event_line" style="border: 1px solid #ededed; margin-top:0px;">카카오채널 추가 시 <p style=" display:inline; font-weight: bold; "><a href="https://kokzipgae.com/bbs/content.php?co_id=8" style="color:#b22323;">10,000원 쿠폰 증정 >></a></p>
      </div> -->

      <div class="event_line" style="border: 1px solid #ededed; margin-bottom:25px;">포인트 충전 시 <p style=" display:inline; font-weight: bold;"><a href="https://kokzipgae.com/bbs/content.php?co_id=5" style="color:#b22323;">추가포인트 증정 >></a></p>
      </div>


      <!--       
      <div class="view_info">
        <div class="box1">
          <div class="left_box">
            <div class="video_box">
              <?php echo get_it_goods_image($index_no, $gs['simg4'], $default['de_item_medium_wpx'], $default['de_item_medium_hpx']); ?>
            </div>
          </div>
        </div>
      </div> -->


      <!-- PC Detail_page Area Start -->
      <div class="detail_page pc">
        <div class="container">
          <div class="text_box">
            <?php echo conv_content($gs['memo'], 1); ?>
          </div>
        </div>
      </div><!-- Detail_page Area End -->

      <!-- Mobile Detail_page Area Start -->
      <div class="detail_page mob">
        <div class="container" style="padding:0px;">
          <div class="text_box">
            <?php echo conv_content($gs['m_memo'], 1); ?>
          </div>
        </div>
      </div><!-- Detail_page Area End -->


      <!-- Review Area Start -->
      <div class="review" id="Comments">
        <div class="container3">

          <div class="title">
            <h3>상담후기 | <span>평점 : <?= $star_score ?></span></h3>
          </div>
          <div class="text_deco">실제로 콕집게를 이용하신 회원분들의 후기입니다.</div>
          <!-- Review_box Area Start -->

          <div class="review_box">
            <input type="hidden" name="review_page" value="1">
            <ul class="review-box-area">
              <?php
              $mem_upl_dir    =  TB_DATA_URL . "/member";
              for ($i = 0; $row = sql_fetch_array($review_result); $i++) {

                $mb  =  get_member($row["mb_id"], "name, nickname, mem_img, mem_img_type");

              ?>
                <!-- Review_body Area Start -->
                <li class="review_body">
                  <!-- Review_subject Area Start -->
                  <div class="review_subject">
                    <div class="user_box">
                      <div class="user_img">

                        <?php if ($mb["mem_img"]) { ?>
                          <?php if ($mb['mem_img_type'] == "S") { ?>
                            <img src="<?php echo $mb['mem_img'] ?>" alt="img">
                          <?php } else { ?>
                            <img src="<?php echo $mem_upl_dir; ?>/<?= $mb['mem_img'] ?>" alt="img">
                          <?php } ?>
                        <?php } else { ?>
                          <img src="<?php echo TB_IMG_URL; ?>/no_img.png" alt="img">
                        <?php } ?>
                      </div>
                      <div class="user_info">
                        <?php if ($row["mb_nickname"] != "") { ?>
                          <div class="user_name"><?= $row["mb_nickname"] ?></div>
                        <?php } else { ?>
                          <div class="user_name"><?= $mb["nickname"] ?></div>
                        <?php } ?>
                        <dl>
                          <dt>
                            <span class="point_img">
                              <?php
                              for ($j = 1; $j <= 5; $j++) {

                                if ($j <= $row["score"]) {
                                  echo "<img src=\"" . TB_IMG_URL . "/review_point.png\" alt=\"review_point\">";
                                } else {
                                  echo "<img src=\"" . TB_IMG_URL . "/review_point_no.png\" alt=\"review_point\">";
                                }
                              }
                              ?>
                            </span>
                            <div class="m_point_img">
                              <img src="<?php echo TB_IMG_URL; ?>/m_review_point.png" alt="ico">
                            </div>
                            <p class="point"><?= $row["score"] ?>.0</p>
                          </dt>
                          <!-- <dd class="date"><?= str_replace("-", ". ", substr($row["reg_time"], 0, 10)) ?></dd> -->
                        </dl>
                      </div>
                    </div>
                    <div class="text_box">
                      <p><?= nl2br(get_text($row["memo"])) ?></p>
                    </div>
                  </div><!-- Review_subject Area End -->
                  <!-- Review_content Area Start -->
                  <?php if ($row["answer"]) { ?>
                    <div class="review_content">
                      <div class="user_img">
                        <?php if ($tc["mem_img"]) { ?>
                          <img src="<?php echo $mem_upl_dir; ?>/<?= $tc["mem_img"] ?>" alt="user_img">
                        <?php } else { ?>
                          <img src="<?php echo TB_IMG_URL; ?>/no_img.png" alt="img">
                        <?php } ?>
                      </div>
                      <div class="comment">
                        <div class="user_name"><?= $tc["name"] ?></div>
                        <p><?= nl2br(get_text($row["answer"])) ?></p>
                      </div>
                    </div><!-- Review_content Area End -->
                  <?php } ?>
                </li><!-- Review_body Area End -->
              <?php
              }
              ?>
            </ul>
            <!--review-box-area End -->
            <?php if ($total_page > 1) { ?>
              <div class="more_btn"><button type="button"><span>리뷰 더보기</span></button></div>
            <?php } ?>

          </div><!-- Review_box Area End -->

        </div>
      </div><!-- Review Area End -->

    </div>
  </form>
  <script>
    $(function() {

      /* 리뷰 더보기 */
      $('.review_box .more_btn').click(function() {
        var total_page = parseInt(<?= $total_page ?>);
        var page = parseInt($("input[name=review_page]").val()) + 1;
        var gs_id = $("input[name='gs_id[]']").val();

        $.ajax({
          type: "POST",
          data: "index_no=" + gs_id + "&page=" + page,
          url: tb_shop_url + "/view.php",
          success: function(data) {

            if (data) {
              var arr_data = data.split("<ul class=\"review-box-area\">");

              if (arr_data[1]) {

                var arr_content = arr_data[1].split("<div class=\"more_btn\"><button type=\"button\"><span>리뷰 더보기</span></button></div>");

                //console.log(arr_content);

                $(".review_box .review-box-area").append(arr_content[0]);
                $("input[name=review_page]").val(page);

              }



              if (total_page == page) {
                $('.review_box .more_btn').hide();
              }
            }
          }

        });

      });
    });

    // 상품보관
    function item_wish(f) {
      f.action = "./wishupdate.php";
      f.submit();
    }

    function fsubmit_check(f) {
      // 판매가격이 0 보다 작다면
      if (document.getElementById("it_price").value < 0) {
        alert("전화로 문의해 주시면 감사하겠습니다.");
        return false;
      }

      if ($(".sit_opt_list").size() < 1) {
        alert("주문옵션을 선택해주시기 바랍니다.");
        return false;
      }

      var val, io_type, result = true;
      var sum_qty = 0;
      var min_qty = parseInt('<?php echo $odr_min; ?>');
      var max_qty = parseInt('<?php echo $odr_max; ?>');
      var $el_type = $("input[name^=io_type]");

      $("input[name^=ct_qty]").each(function(index) {
        val = $(this).val();

        if (val.length < 1) {
          alert("수량을 입력해 주십시오.");
          result = false;
          return false;
        }

        if (val.replace(/[0-9]/g, "").length > 0) {
          alert("수량은 숫자로 입력해 주십시오.");
          result = false;
          return false;
        }

        if (parseInt(val.replace(/[^0-9]/g, "")) < 1) {
          alert("수량은 1이상 입력해 주십시오.");
          result = false;
          return false;
        }

        io_type = $el_type.eq(index).val();
        if (io_type == "0")
          sum_qty += parseInt(val);
      });

      if (!result) {
        return false;
      }

      if (min_qty > 0 && sum_qty < min_qty) {
        alert("주문옵션 개수 총합 " + number_format(String(min_qty)) + "개 이상 주문해 주세요.");
        return false;
      }

      if (max_qty > 0 && sum_qty > max_qty) {
        alert("주문옵션 개수 총합 " + number_format(String(max_qty)) + "개 이하로 주문해 주세요.");
        return false;
      }

      return true;
    }

    // 바로구매, 장바구니 폼 전송
    function fbuyform_submit(sw_direct) {



      var f = document.fbuyform;
      f.sw_direct.value = sw_direct;

      if (sw_direct == "cart") {
        f.sw_direct.value = 0;
      } else { // 바로구매
        f.sw_direct.value = 1;
      }



      if ($("#it_option_1").length >= 1) {
        if ($("#it_option_1").val() == "") {
          alert("주문옵션을 선택해주시기 바랍니다.");
          return;
        }
      }

      if ($("#it_option_2").length >= 1) {
        if ($("#it_option_2").val() == "") {
          alert("추가옵션을 선택해주시기 바랍니다.");
          return;
        }
      }

      if ($(".sit_opt_list").length < 1) {
        alert("주문옵션을 선택해주시기 바랍니다.");
        return;
      }


      var val, io_type, result = true;
      var sum_qty = 0;
      var min_qty = parseInt('<?php echo $odr_min; ?>');
      var max_qty = parseInt('<?php echo $odr_max; ?>');
      var $el_type = $("input[name^=io_type]");

      $("input[name^=ct_qty]").each(function(index) {
        val = $(this).val();

        if (val.length < 1) {
          alert("수량을 입력해 주세요.");
          result = false;
          return;
        }

        if (val.replace(/[0-9]/g, "").length > 0) {
          alert("수량은 숫자로 입력해 주세요.");
          result = false;
          return;
        }

        if (parseInt(val.replace(/[^0-9]/g, "")) < 1) {
          alert("수량은 1이상 입력해 주세요.");
          result = false;
          return;
        }

        io_type = $el_type.eq(index).val();
        if (io_type == "0")
          sum_qty += parseInt(val);
      });

      if (!result) {
        return;
      }

      if (min_qty > 0 && sum_qty < min_qty) {
        alert("주문옵션 개수 총합 " + number_format(String(min_qty)) + "개 이상 주문해 주세요.");
        return;
      }

      if (max_qty > 0 && sum_qty > max_qty) {
        alert("주문옵션 개수 총합 " + number_format(String(max_qty)) + "개 이하로 주문해 주세요.");
        return;
      }

      f.action = "./cartupdate.php";
      f.submit();
    }
  </script>



  <div id="anc_header"><a href="#anc_hd"><span></span></a></div>



  <script src="<?php echo TB_ADMIN_URL; ?>/js/admin.js?ver=<?php echo TB_JS_VER; ?>"></script>

  <script src="<?php echo TB_JS_URL; ?>/wrest.js"></script>


  <!-- M_Quick_menu Area Start -->
  <!-- <div id="m_quick_menu">
    <div class="container" style="padding: 0;">
      <div class="m_icon_box">
      <div>
        <a href="javascript:itemlistwish('<?php echo $index_no; ?>');" class="m_bokzzim"><img src="<?php echo TB_IMG_URL; ?>/<? if ($wish_cnt["cnt"] == 0) {
                                                                                                                                echo "hd_ico2.png";
                                                                                                                              } else {
                                                                                                                                echo "m_call_dibs_ico.png";
                                                                                                                              } ?>" alt="ico2"></a></div>
      
      <div style="height: 62px;
    line-height: 62px;
    border-radius: 6px;
    font-size: 31px;
    padding-top: 2px;
    display: inline-block;
    text-align: center;
    width: 80%;
    background-color: #b22323;
    color: #fff;
    font-family: 'GmarketSansBold',sans-serif;
    margin: 5px;
    float: right;">
        <?php echo get_buy_button_unit($script_msg, $index_no, 'buy'); ?></div>
    </div>

    <!-- <ul>
			<li><a href="/index.php" <?php if ($_SERVER["PHP_SELF"] == "index.php") echo "class=on"; ?>><img src="/img/m_quick_ico1.png"><p>콕집게</p></a></li>
			<li><a href="<?= TB_SHOP_URL ?>/wish.php" <?php if ($_SERVER["PHP_SELF"] == "/shop/wish.php") echo "class=on"; ?>><img src="<?php echo TB_IMG_URL; ?>/m_quick_ico2.png" alt="ico2"><p>찜주머니</p></a></li>
			<li><a href="<?= TB_BBS_URL ?>/m_page_list.php" <?php if ($_SERVER["PHP_SELF"] == "/bbs/m_page_list.php" || $_SERVER["PHP_SELF"] == "/shop/orderinquiry.php" || $_SERVER["PHP_SELF"] == "/shop/point.php" || $_SERVER["PHP_SELF"] == "/shop/coupon.php" || $_SERVER["PHP_SELF"] == "/bbs/qna_list.php" || $_SERVER["PHP_SELF"] == "/bbs/faq.php" || $_SERVER["PHP_SELF"] == "/bbs/provision.php"  || $_SERVER["PHP_SELF"] == "/bbs/policy.php") echo "class=on"; ?>><img src="<?php echo TB_IMG_URL; ?>/m_quick_ico3.png" alt="ico3"><p>마이메뉴</p></a></li>
		</ul> -->
  <!-- </div> 
  </div>
  </div> -->

  <div id="m_quick_menu">
    <!-- <div style="display: block; position: fixed;left: 85%;width: 50px;  top: 79%;"> <a href="#TOP"><img src="/img/btn/topbu.png"></a></div> -->
    <div class="container" style="padding: 0;">
      <div class="m_icon_box">
        <!-- <div class="m_quick_left">
          <a href="javascript:itemlistwish('<?php echo $index_no; ?>');" class="m_bokzzim"><img src="<?php echo TB_IMG_URL; ?>/<? if ($wish_cnt["cnt"] == 0) {
                                                                                                                                  echo "hd_ico22.png";
                                                                                                                                } else {
                                                                                                                                  echo "m_call_dibs_ico.png";
                                                                                                                                } ?>" alt="ico2"><img src="https://dldydrl112.cafe24.com:443/img/hd_ico22.png" alt="ico2"></a>
        </div> -->
        <div class="m_quick_right">
          <?php echo get_buy_button_unit($script_msg, $index_no, 'buy'); ?>
          <div style="height: 20px;"></div>
        </div>
      </div>


      <!-- <ul>
			<li><a href="/index.php" ><img src="/img/m_quick_ico1.png"><p>콕집게</p></a></li>
			<li><a href="https://dldydrl112.cafe24.com:443/shop/wish.php" ><img src="https://dldydrl112.cafe24.com:443/img/m_quick_ico2.png" alt="ico2"><p>찜주머니</p></a></li>
			<li><a href="https://dldydrl112.cafe24.com:443/bbs/m_page_list.php" ><img src="https://dldydrl112.cafe24.com:443/img/m_quick_ico3.png" alt="ico3"><p>마이메뉴</p></a></li>
		</ul> -->
    </div>
  </div>
  <!-- M_Quick_menu Area End -->


  <!-- Footer Area Start -->
  <footer class="trigger">
    <!-- Quick_menu Area Start -->
    <div id="quick_menu" class="sticky fixed">
      <div class="icon">
        <a href="<?php echo TB_BBS_URL; ?>/alarm.php"><img src="<?php echo TB_IMG_URL; ?>/quick_ico.png" alt="quick_ico"></a>
      </div>
    </div><!-- Quick_menu Area End -->
    <div class="container">
      <div class="f_logo">
        <!-- <?php echo display_logo(); ?> -->
        <a href="/"><img src="<?php echo TB_IMG_URL; ?>/f_logo.png" alt="f_logo"></a>
      </div>
      <div class="f_info pc">
        <ul>
          <li><a href="<?php echo TB_BBS_URL; ?>/policy1.php" onclick="window.open(this.href, 'popup', 'scrollbars,width=700,height=500');return false;">개인정보처리방침</a></li>
          <li><a href="<?php echo TB_BBS_URL; ?>/provision1.php" onclick="window.open(this.href, 'popup', 'scrollbars,width=700,height=500');return false;">이용약관</a></li>
          <!-- <li><a href="<?php echo TB_BBS_URL; ?>/content.php?co_id=1">회사소개</a></li> -->
        </ul>
        <p>상호명 : <?php echo $config['company_name']; ?> | 대표 : <?php echo $config['company_owner']; ?> | 주소 : <?php echo $config['company_addr']; ?> | 통신판매업신고번호 : 2021-서울서초-0581호</p>
        <p>문의메일 : <?php echo $super['email']; ?> | 사업자등록번호 : <?php echo $config['company_saupja_no']; ?> | 유선번호 : <?php echo $config['company_tel']; ?></p>
        <p>Copyright © 2021 (주)에스비제이 </p>
      </div>

      <div class="f_info mb">
        <ul>
          <li><a href="<?php echo TB_BBS_URL; ?>/policy1.php" onclick="window.open(this.href, 'popup', 'scrollbars,width=700,height=500');return false;">개인정보처리방침</a></li>
          <li><a href="<?php echo TB_BBS_URL; ?>/provision1.php" onclick="window.open(this.href, 'popup', 'scrollbars,width=700,height=500');return false;">이용약관</a></li>
        </ul>
        <p>상호명 : <?php echo $config['company_name']; ?></p>
        <p>대표 : <?php echo $config['company_owner']; ?></p>
        <p>주소 : <?php echo $config['company_addr']; ?></p>
        <p>문의메일 : <?php echo $super['email']; ?></p>
        <p>사업자등록번호 : <?php echo $config['company_saupja_no']; ?></p>
        <p>유선번호 : <?php echo $config['company_tel']; ?></p>
        <p>통신판매업신고번호 : 2021-서울서초-0581호</p>
        <p>Copyright © 2021 (주)에스비제이 </p>
      </div>

    </div>
  </footer><!-- Footer Area Start -->
  <!-- My JS -->
  <script src="<?php echo TB_JS_URL; ?>/main.js?ver=<?php echo TB_JS_VER; ?>"></script>
  </body>

</html>