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

  ?>
  
  <!-- Header Area Start -->
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MPFD645" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header style="border-bottom: 1px solid #f3f3f3;">
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
          <h1><a href="javascript:history.back()" class="ir_m" style="background:url('/img/main_prev1.png') no-repeat 50% 50%; width:10%; background-size:24px; float:left; height:26px; margin-bottom:10px;">콕집게</a></h1>
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
    <!-- <div class="m_alarm_ico">
      <a class="share_bt"><img src="<?php echo TB_IMG_URL; ?>/m_share_ico.png" alt="quick_ico"></a>
    </div>
    <div class="m_quick_left_top">
      <a href="javascript:itemlistwish('<?php echo $index_no; ?>');" class="m_bokzzim"><img src="<?php echo TB_IMG_URL; ?>/<? if ($wish_cnt["cnt"] == 0) {
                                                                                                                              echo "hd_ico22.png";
                                                                                                                            } else {
                                                                                                                              echo "m_call_dibs_ico.png";
                                                                                                                            } ?>" alt="ico2"><img src="https://dldydrl112.cafe24.com:443/img/hd_ico22.png" alt="ico2" style="display: none;"></a>
    </div> -->
  </header><!-- Header Area End -->



<?php
require_once(TB_SHOP_PATH . '/settle_kakaopay.inc.php');
?>
<form name="buyform" id="buyform" method="post" action="<?php echo $order_action_url; ?>" onsubmit="return fbuyform_submit(this);" autocomplete="off">
	<div id="product_pay" class="pd_12">
		<!-- Sub_title06 Area Start -->
		<!-- <div class="sub_title06 tit1">
			<div class="container2">
				<div class="ico_box"><img src="<?php echo TB_IMG_URL; ?>/pay_ico1.png" alt="ico1"></div>
				<h4>상품을 확인해주세요.</h4>
			</div>
		</div> -->
		<!-- Sub_title06 Area End -->

		<!-- List_box Area Start -->
		<?php
		$tot_point = 0;
		$tot_sell_price = 0;
		$tot_opt_price = 0;
		$tot_sell_qty = 0;
		$tot_sell_amt = 0;
		$seller_id = array();

		$sql = " select *
			   from shop_cart
			  where index_no IN ({$ss_cart_id})
				and ct_select = '0'
			  group by gs_id
			  order by index_no ";
		$result = sql_query($sql);
		for ($i = 0; $row = sql_fetch_array($result); $i++) {

			$gs	=	get_goods($row['gs_id']);
			$tc	=	sql_fetch("select a.*, b.mem_img from shop_teacher a, shop_member b where a.mb_code = b.index_no and a.index_no = '" . $gs["tc_code"] . "'");

			// 합계금액 계산
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

			$it_name = stripslashes($gs['gname']);
			$it_options = print_item_options($row['gs_id'], $set_cart_id);
			if ($it_options) {
				$it_name .= '<div class="sod_opt">' . $it_options . '</div>';
			}

			if ($is_member) {
				$point = $sum['point'];
			}

			$supply_price = $sum['supply_price'];
			$sell_price = $sum['price'];
			$sell_opt_price = $sum['opt_price'];
			$sell_qty = $sum['qty'];
			$sell_amt = $sum['price'] - $sum['opt_price'];

			// 배송비
			if ($gs['use_aff'])
				$sr = get_partner($gs['mb_id']);
			else
				$sr = get_seller_cd($gs['mb_id']);

			$info = get_item_sendcost($sell_price);
			$item_sendcost[] = $info['pattern'];

			$seller_id[$i] = $gs['mb_id'];

			$href = TB_SHOP_URL . '/view.php?index_no=' . $row['gs_id'];



			
		?>
			<div class="oder_mobile">
				<div class="order_design">
					<div class="list_box1">
						<input type="hidden" name="gs_id[<?php echo $i; ?>]" value="<?php echo $row['gs_id']; ?>">
						<input type="hidden" name="gs_notax[<?php echo $i; ?>]" value="<?php echo $gs['notax']; ?>">
						<input type="hidden" name="gs_price[<?php echo $i; ?>]" value="<?php echo $sell_price; ?>">
						<input type="hidden" name="seller_id[<?php echo $i; ?>]" value="<?php echo $gs['mb_id']; ?>">
						<input type="hidden" name="supply_price[<?php echo $i; ?>]" value="<?php echo $supply_price; ?>">
						<input type="hidden" name="sum_point[<?php echo $i; ?>]" value="<?php echo $point; ?>">
						<input type="hidden" name="sum_qty[<?php echo $i; ?>]" value="<?php echo $sell_qty; ?>">
						<input type="hidden" name="cart_id[<?php echo $i; ?>]" value="<?php echo $row['od_no']; ?>">
						<div class="container2" style="display: none;">
							<div class="img_box">
								 <img src="<?php echo TB_DATA_URL; ?>/goods/<?= $gs["simg6"] ?>"> 
								<!-- <img src="/img/test/odertest.png"> -->
							</div>
						</div>
					</div>
				</div>
				<div class="order_design_right">
					<div class="list_box1">
						<input type="hidden" name="gs_id[<?php echo $i; ?>]" value="<?php echo $row['gs_id']; ?>">
						<input type="hidden" name="gs_notax[<?php echo $i; ?>]" value="<?php echo $gs['notax']; ?>">
						<input type="hidden" name="gs_price[<?php echo $i; ?>]" value="<?php echo $sell_price; ?>">
						<input type="hidden" name="seller_id[<?php echo $i; ?>]" value="<?php echo $gs['mb_id']; ?>">
						<input type="hidden" name="supply_price[<?php echo $i; ?>]" value="<?php echo $supply_price; ?>">
						<input type="hidden" name="sum_point[<?php echo $i; ?>]" value="<?php echo $point; ?>">
						<input type="hidden" name="sum_qty[<?php echo $i; ?>]" value="<?php echo $sell_qty; ?>">
						<input type="hidden" name="cart_id[<?php echo $i; ?>]" value="<?php echo $row['od_no']; ?>">
						<div class="container25">
							<ul>
								<li>
									<dl>
										<dt><img src="<?php echo TB_IMG_URL; ?>/product_pay_ico2.png" alt="ico2">상담사</dt>
										<dd class="ddking"><?= $tc["name"] ?>선생님</dd>
									</dl>
								</li>
								<li>
								<?php if ($it_options) { ?>
									<dl>
										<dt><img src="<?php echo TB_IMG_URL; ?>/product_pay_ico1.png" alt="ico1">상담 종류</dt>
										<dd><span class="s_name">상담 종류</span><span class="soname"> <?= $gs["brand_nm"] ?></span></dd>
									</dl>
									<?php } ?>
								</li>
								<!-- <li>
									<dl>
										<dt><img src="<?php echo TB_IMG_URL; ?>/product_pay_ico1.png" alt="ico1">상품</dt>
										<dd><span  class="s_name" style="margin-right: 22px;">상품</span><span class="soname"> <?= $gs["model"] ?></span></dd>
									</dl>
								</li> -->
								<li>
								<?php if ($it_options) { ?>
									<dl>
										<dt><img src="<?php echo TB_IMG_URL; ?>/product_pay_ico2.png" alt="ico2">결제금액</dt>
										<dd><span  class="s_name" style="margin-right: 23px;">가격</span><span class="soname"><?php echo $supply_price; ?> 원</span></dd>
										
									</dl>
									<?php } ?>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>



			<!-- List_box Area End -->
		<?php
			$tot_point += (int)$point;
			$tot_sell_price += (int)$sell_price;
			$tot_opt_price += (int)$sell_opt_price;
			$tot_sell_qty += (int)$sell_qty;
			$tot_sell_amt += (int)$sell_amt;
		}

		// 배송비 검사
		$send_cost = 0;
		$com_send_cost = 0;
		$sep_send_cost = 0;
		$max_send_cost = 0;

		$k = 0;
		$condition = array();
		foreach ($item_sendcost as $key) {
			list($userid, $bundle, $price) = explode('|', $key);
			$condition[$userid][$bundle][$k] = $price;
			$k++;
		}

		$com_array = array();
		$val_array = array();
		foreach ($condition as $key => $value) {
			if ($condition[$key]['묶음']) {
				$com_send_cost += array_sum($condition[$key]['묶음']); // 묶음배송 합산
				$max_send_cost += max($condition[$key]['묶음']); // 가장 큰 배송비 합산
				$com_array[] = max(array_keys($condition[$key]['묶음'])); // max key
				$val_array[] = max(array_values($condition[$key]['묶음'])); // max value
			}
			if ($condition[$key]['개별']) {
				$sep_send_cost += array_sum($condition[$key]['개별']); // 묶음배송불가 합산
				$com_array[] = array_keys($condition[$key]['개별']); // 모든 배열 key
				$val_array[] = array_values($condition[$key]['개별']); // 모든 배열 value
			}
		}

		$baesong_price = get_tune_sendcost($com_array, $val_array);

		$send_cost = $com_send_cost + $sep_send_cost; // 총 배송비합계
		$tot_send_cost = $max_send_cost + $sep_send_cost; // 최종배송비
		$tot_final_sum = $send_cost - $tot_send_cost; // 배송비할인
		$tot_price = $tot_sell_price + $tot_send_cost; // 결제예정금액
		?>
		<!-- Sub_title06 Area Start -->
		<!-- <div class="sub_title06 tit2">
			<div class="container2">
				<div class="ico_box"><img src="<?php echo TB_IMG_URL; ?>/pay_ico2.png" alt="ico2"></div>
				<h4>쿠폰 및 포인트</h4>
			</div>
		</div> -->
		<!-- Sub_title06 Area End -->

		<!-- Box Area Start -->
		<div class="box">
			<div class="container2">
				<input type="hidden" name="ss_cart_id" value="<?php echo $ss_cart_id; ?>">
				<input type="hidden" name="mb_point" value="<?php echo $member['point']; ?>">
				<input type="hidden" name="pt_id" value="<?php echo $mb_recommend; ?>">
				<input type="hidden" name="shop_id" value="<?php echo $pt_id; ?>">
				<input type="hidden" name="coupon_total" value="0">
				<input type="hidden" name="coupon_price" value="">
				<input type="hidden" name="coupon_lo_id" value="">
				<input type="hidden" name="coupon_cp_id" value="">
				<input type="hidden" name="baesong_price" value="<?php echo $baesong_price; ?>">
				<input type="hidden" name="baesong_price2" value="0">
				<input type="hidden" name="org_price" value="<?php echo $tot_price; ?>">
				<?php if (!$is_member || !$config['usepoint_yes']) { ?>
					<input type="hidden" name="use_point" value="0">
				<?php } ?>

				<input type="hidden" name="name" value="<?php echo $member['name']; ?>">
				<input type="hidden" name="telephone" value="<?php echo $member['telephone']; ?>">
				<input type="hidden" name="cellphone" value="<?php echo $member['cellphone']; ?>">
				<input type="hidden" name="zip" value="<?php echo $member['zip']; ?>">
				<input type="hidden" name="addr1" value="<?php echo $member['addr1']; ?>">
				<input type="hidden" name="addr2" value="<?php echo $member['addr2']; ?>">
				<input type="hidden" name="addr3" value="<?php echo $member['addr3']; ?>">
				<input type="hidden" name="addr_jibeon" value="<?php echo $member['addr_jibeon']; ?>">
				<input type="hidden" name="email" value="<?php echo $member['id']; ?>">
				<input type="hidden" name="tot_price" value="<?php echo number_format($tot_price); ?>" readonly>

				<!-- Coupon Area Start -->
				<?php
				if ($is_member && $config['coupon_yes']) { // 보유쿠폰
					$cp_count = get_cp_precompose($member['id']);
				?>
					<div class="coupon">
						<h5>쿠폰 (사용 가능 쿠폰 <?php echo $cp_count[3]; ?>장)</h5>
						<label for="coupon">
							<input type="text" name="coupon" id="dc_amt" readonly value="0">
							<button type="button">쿠폰사용</button>
						</label>
					</div><!-- Coupon Area End -->
				<?php } ?>

				<!-- point Area Start -->
				<div class="point">
					<h5>포인트</h5>
					<dl class="possession_point">
						<dt>보유 포인트</dt>
						<dd><span><?php echo display_point($member['point']); ?></span></dd>
					</dl>
					<dl class="use_point">
						<dt>사용 포인트:</dt>
						<dd>
							<input type="text" name="use_point" value="0" onkeyup="calculate_temp_point(this.value);this.value=number_format(this.value);">
							<button type="button" onclick="point_all_use();">전액사용</button>
						</dd>
					</dl>
				</div><!-- point Area End -->
				<?php

				if ($cp_count[3] > 0) {

					$is_possible = array();
					$cp_tmp = array();

					$query = get_cp_precompose($member['id']);
					$sql_common  = $query[0];
					$sql_search  = $query[1];
					$sql_order	 = $query[2];
					$total_count = $query[3];

					$cp_sql			=	" select * $sql_common $sql_search $sql_order ";
					$cp_result		=	sql_query($cp_sql);
					$cart_count	=	sql_num_rows($cp_result);

				?>
					<div class="coupon_box">
						<h6>쿠폰 할인적용</h6>
						<ul>
							<?php
							for ($i = 0; $row = sql_fetch_array($cp_result); $i++) {

								$lo_id = $row['lo_id'];

								$str = get_cp_contents();

								for ($j = 0; $j < $cart_count; $j++) {

									$is_coupon = false;
									$is_gubun = explode("|", $cp_tmp[$j]);

									switch ($row['cp_use_part']) {
										case '0': // 전체상품에 쿠폰사용 가능
											$is_coupon = true;
											break;
										case '1': // 일부 상품만 쿠폰사용 가능
											if ($row['cp_use_goods']) {
												$fields_cnt = get_substr_count($is_gubun[1], $row['cp_use_goods']);
												if ($fields_cnt)
													$is_coupon = true;
											}
											break;
										case '2': // 일부 카테고리만 쿠폰사용 가능
											if ($row['cp_use_category']) {
												$fields_cnt = get_substr_count($is_gubun[2], $row['cp_use_category']);
												if ($fields_cnt)
													$is_coupon = true;
											}
											break;
										case '3': // 일부 상품은 쿠폰사용 불가
											if ($row['cp_use_goods']) {
												$fields_cnt = get_substr_count($is_gubun[1], $row['cp_use_goods']);
												if (!$fields_cnt)
													$is_coupon = true;
											}
											break;
										case '4': // 일부 카테고리는 쿠폰사용 불가
											if ($row['cp_use_category']) {
												$fields_cnt = get_substr_count($is_gubun[2], $row['cp_use_category']);
												if (!$fields_cnt)
													$is_coupon = true;
											}
											break;
									}

									// 적용여부 && 가맹점상품제외 && 최대금액 <= 상품금액
									$seq = array();

									if ($is_coupon && !$is_gubun[3] && ($row['cp_low_amt'] <= (int)$is_gubun[0])) {
										// 할인해택 검사
										$amt =  get_cp_sale_amt((int)$is_gubun[0]);
										$seq[] = $is_gubun[1];
										$seq[] = $lo_id;
										$seq[] = $row['cp_id'];
										$seq[] = $row['cp_dups'];
										$seq[] = $amt[1];
										$seq[] = $amt[0];


										$is_possible[] = implode("|", $seq);
									}
								}


								if (!$row['cp_dups']) {
									$add_text	=	'(동일한 주문건에 중복할인 가능)';
								} else {
									$add_text	=	'(동일한 주문건에 중복할인 불가 - 1회만 사용가능)';
								}

								if ($row['cp_sale_type'] == '0') {
									if ($row['cp_sale_amt_max'] > 0)
										$cp_sale_amt_max = "&nbsp;(최대 " . display_price($row['cp_sale_amt_max']) . "까지 할인)";
									else
										$cp_sale_amt_max = "";

									$sale_amt_text	=	$row['cp_sale_percent'] . '% 할인 쿠폰' . $cp_sale_amt_max;
								} else {
									$sale_amt_text	=	display_price($row['cp_sale_amt']) . ' 할인 쿠폰';
								}

								// 쿠폰유효 기간
								$use_date_text	=	"";
								$use_date_text .= "사용기간 <span> ";
								if (!$row['cp_inv_type']) {
									// 날짜
									if ($row['cp_inv_sdate'] == '9999999999') $cp_inv_sdate = '';
									else $cp_inv_sdate = $row['cp_inv_sdate'];

									if ($row['cp_inv_edate'] == '9999999999') $cp_inv_edate = '';
									else $cp_inv_edate = $row['cp_inv_edate'];

									if ($row['cp_inv_sdate'] == '9999999999' && $row['cp_inv_sdate'] == '9999999999')
										$use_date_text .= '제한없음';
									else
										$use_date_text .= $cp_inv_sdate . " ~ " . $cp_inv_edate;

									// 시간대
									$use_date_text .= "&nbsp;(시간대 : ";
									if ($row['cp_inv_shour1'] == '99') $cp_inv_shour1 = '';
									else $cp_inv_shour1 = $row['cp_inv_shour1'] . "시부터";

									if ($row['cp_inv_shour2'] == '99') $cp_inv_shour2 = '';
									else $cp_inv_shour2 = $row['cp_inv_shour2'] . "시까지";

									if ($row['cp_inv_shour1'] == '99' && $row['cp_inv_shour1'] == '99')
										$use_date_text .= '제한없음';
									else
										$use_date_text .= $cp_inv_shour1 . " ~ " . $cp_inv_shour2;
									$use_date_text .= ")";
								} else {
									$cp_inv_day = date("Y-m-d", strtotime("+{$row[cp_inv_day]} days", strtotime($row['cp_wdate'])));
									$use_date_text .= '다운로드 완료 후 ' . $row['cp_inv_day'] . '일간 사용가능, 만료일(' . $cp_inv_day . ')';
								}

								$use_date_text .= "</span>";


							?>
								<li>
									<a href="javascript:applycoupon('<?php echo $row['cp_id']; ?>','<?php echo $row['cp_sale_amt']; ?>','<?php echo $row['lo_id']; ?>','<?php echo $row['cp_dups']; ?>','<?php echo $i; ?>');">
										<input type="hidden" name="gd_dc_amt_<?php echo $i; ?>">
										<input type="hidden" name="gd_cp_no_<?php echo $i; ?>">
										<input type="hidden" name="gd_cp_idx_<?php echo $i; ?>">
										<div class="subject"><?= $sale_amt_text ?></div>
										<div class="txt"><?php echo get_text($row['cp_subject']); ?> </div>
										<div class="date"><?= $add_text ?></div>
										<div class="date"><?= $use_date_text ?></div>
									</a>
								</li>
							<?php } ?>
						</ul>
						<div class="btn_box">
							<button type="button">쿠폰적용</button>
							<button class="close" type="button">취소</button>
						</div>
					</div>
				<?php  } ?>
			</div>
		</div><!-- Box Area End -->

		<!-- Sub_title06 Area Start -->
		<!-- <div class="sub_title06 tit3">
			<div class="container2">
				<div class="ico_box"><img src="<?php echo TB_IMG_URL; ?>/pay_ico3.png" alt="ico3"></div>
				<h4>결제 수단을 선택해 주세요.</h4>
			</div>
		</div> -->
		<!-- Sub_title06 Area End -->

		<div class="container2">
			<ul>
				<?php
				$escrow_title = "";
				if ($default['de_escrow_use']) {
					$escrow_title = "에스크로 ";
				}

				if ($is_kakaopay_use) {
					echo ' <li class="hi_dn"><label for="kakao_pay" ><input type="radio" name="paymethod" id="kakao_pay" class="screen-hidden"  value="KAKAOPAY" onclick="calculate_paymethod(this.value);"><span>카카오페이</span></label></li>' . PHP_EOL;
				}
				if ($default['de_bank_use']) {
					echo '<li><label for="paymethod_bank"><input type="radio" name="paymethod" id="paymethod_bank" class="screen-hidden" value="무통장" onclick="calculate_paymethod(this.value);"><span>무통장입금</span></label></li>' . PHP_EOL;
				}
				if ($default['de_card_use']) {
					echo '<li><label for="paymethod_card"><input type="radio" name="paymethod" id="paymethod_card" class="screen-hidden" value="신용카드" onclick="calculate_paymethod(this.value);"><span>신용/체크카드</span></label></li>' . PHP_EOL;
				}
				if ($default['de_hp_use']) {
					echo '<li><label for="paymethod_hp"><input type="radio" name="paymethod" id="paymethod_hp" class="screen-hidden" value="휴대폰" onclick="calculate_paymethod(this.value);"><span>휴대폰</span></label></li>' . PHP_EOL;
				}
				if ($default['de_iche_use']) {
					echo '<li><label for="paymethod_iche"><input type="radio" name="paymethod" id="paymethod_iche" class="screen-hidden" value="계좌이체" onclick="calculate_paymethod(this.value);"><span>' . $escrow_title . '계좌이체</span></label></li>' . PHP_EOL;
				}
				if ($default['de_vbank_use']) {
					echo '<li><label for="paymethod_vbank"><input type="radio" name="paymethod" id="paymethod_vbank" class="screen-hidden" value="가상계좌" onclick="calculate_paymethod(this.value);"><span>' . $escrow_title . '가상계좌</span></label></li>' . PHP_EOL;
				}
				if ($is_member && $config['usepoint_yes'] && ($tot_price <= $member['point'])) {
					echo '<li><label for="paymethod_point"><input type="radio" name="paymethod" id="paymethod_point" class="screen-hidden" value="포인트" onclick="calculate_paymethod(this.value);"><span>포인트결제</span></label></li>' . PHP_EOL;
				}

				// PG 간편결제
				if ($default['de_easy_pay_use']) {
					switch ($default['de_pg_service']) {
						case 'lg':
							$pg_easy_pay_name = 'PAYNOW';
							break;
						case 'inicis':
							$pg_easy_pay_name = 'KPAY';
							break;
						case 'kcp':
							$pg_easy_pay_name = 'PAYCO';
							break;
					}

					echo '<li><label for="paymethod_easy_pay" class="' . $pg_easy_pay_name . '"><input type="radio" name="paymethod" id="paymethod_easy_pay" class="screen-hidden" value="간편결제" onclick="calculate_paymethod(this.value);"><span>' . $pg_easy_pay_name . '</span></label></li>' . PHP_EOL;
				}
				?>
				<li>
					<input type="submit" value="다음">
				</li>
			</ul>
		</div>
	</div>
</form>

<script>
	$(function() {
		$("input[name=b_addr2]").focus(function() {
			var zip = $("input[name=b_zip]").val().replace(/[^0-9]/g, "");
			if (zip == "")
				return false;

			var code = String(zip);
			calculate_sendcost(code);
		});

		// 배송지선택
		$("input[name=ad_sel_addr]").on("click", function() {
			var addr = $(this).val();

			if (addr == "1") {
				gumae2baesong(true);
			} else if (addr == "2") {
				gumae2baesong(false);
			} else {
				win_open(tb_shop_url + '/orderaddress.php', 'win_address', 600, 600, 'yes');
			}
		});

		$("select[name=sel_memo]").change(function() {
			$("textarea[name=memo]").val($(this).val());
		});
	});

	// 사용된 쿠폰 번호, 쿠폰 할인액, 쿠폰 IDX	, 중복 적용 여부, idx
	function applycoupon(cp_no, gd_dc_amt, cp_idx, cp_dups, index_no) {

		var max_count = '<?php echo $cart_count; ?>';

		var f = document.buyform;
		var tot_price = f.tot_price.value;

		// 이미 적용된 쿠폰인지 검사
		tmp = f["gd_cp_no_" + index_no].value; // 사용된 쿠폰 번호

		if (tmp != "") {
			if (cp_no == tmp) {
				// 중복 적용 불가
				if (cp_dups == "1") {
					alert('해당 쿠폰은 중복할인이 되지 않습니다.');
					return;
				}
			}
		}

		// 쿠폰 적용 할인가를 상품별로 기록
		f["gd_dc_amt_" + index_no].value = gd_dc_amt;

		// 적용된 쿠폰 정보를 상품별로 저장
		f["gd_cp_no_" + index_no].value = cp_no;
		f["gd_cp_idx_" + index_no].value = cp_idx;

		// 전체 할인가 얻기
		var sum_dc_amt = 0;
		var tmp = 0;

		var tmp_dc_amt = '';
		var tmp_lo_id = '';
		var tmp_cp_id = '';
		var chk_dc_amt = '';
		var chk_lo_id = '';
		var chk_cp_id = '';
		var comma = '';


		for (i = 0; i < max_count; i++) {
			chk_dc_amt = eval("f.gd_dc_amt_" + i).value ? eval("f.gd_dc_amt_" + i).value : 0;
			chk_lo_id = eval("f.gd_cp_idx_" + i).value ? eval("f.gd_cp_idx_" + i).value : 0;
			chk_cp_id = eval("f.gd_cp_no_" + i).value ? eval("f.gd_cp_no_" + i).value : 0;

			tmp_dc_amt += comma + chk_dc_amt;
			tmp_lo_id += comma + chk_lo_id;
			tmp_cp_id += comma + chk_cp_id;
			comma = '|';

			if (f["gd_dc_amt_" + i].value == "") {
				tmp = 0;
			} else {
				tmp = parseInt(f["gd_dc_amt_" + i].value);
			}
			sum_dc_amt += tmp;
		}

		// 로그
		f.coupon_price.value = tmp_dc_amt;
		f.coupon_lo_id.value = tmp_lo_id;
		f.coupon_cp_id.value = tmp_cp_id;

		// 총 할인액
		f.coupon_total.value = sum_dc_amt;
		f.dc_amt.value = formatComma(sum_dc_amt);

		// 최종 결제금액
		f.tot_price.value = formatComma(parseInt(stripComma(tot_price)) - sum_dc_amt);

		$("#product_pay .coupon_box").hide();

	}

	// 도서/산간 배송비 검사
	function calculate_sendcost(code) {
		$.post(
			tb_shop_url + "/ordersendcost.php", {
				zipcode: code
			},
			function(data) {
				$("input[name=baesong_price2]").val(data);
				$("#send_cost2").text(number_format(String(data)));

				calculate_order_price();
			}
		);
	}

	//포인트 전액 사용
	function point_all_use() {

		var sell_price = parseInt($("input[name=org_price]").val()); // 합계금액
		var send_cost2 = parseInt($("input[name=baesong_price2]").val()); // 추가배송비
		var mb_coupon = parseInt($("input[name=coupon_total]").val()); // 쿠폰할인
		var mb_point = parseInt(<?= $member['point'] ?>); //포인트결제
		var tot_price = sell_price + send_cost2 - (mb_coupon);

		if (mb_point > tot_price) {
			$("input[name=use_point]").val(tot_price);
			calculate_temp_point(tot_price);
		} else {
			$("input[name=use_point]").val(mb_point);
			calculate_temp_point(mb_point);
		}
	}

	function calculate_order_price() {
		var sell_price = parseInt($("input[name=org_price]").val()); // 합계금액
		var send_cost2 = parseInt($("input[name=baesong_price2]").val()); // 추가배송비
		var mb_coupon = parseInt($("input[name=coupon_total]").val()); // 쿠폰할인
		var mb_point = parseInt($("input[name=use_point]").val().replace(/[^0-9]/g, "")); //포인트결제
		var tot_price = sell_price + send_cost2 - (mb_coupon + mb_point);

		$("input[name=tot_price]").val(number_format(String(tot_price)));
	}

	function fbuyform_submit(f) {

		errmsg = "";
		errfld = "";

		var min_point = parseInt("<?php echo $config['usepoint']; ?>");
		var temp_point = parseInt(no_comma(f.use_point.value));
		var sell_price = parseInt(f.org_price.value);
		var send_cost2 = parseInt(f.baesong_price2.value);
		var mb_coupon = parseInt(f.coupon_total.value);
		var mb_point = parseInt(f.mb_point.value);
		var tot_price = sell_price + send_cost2 - mb_coupon - temp_point;

		if (f.use_point.value == '') {
			alert('포인트사용 금액을 입력하세요. 사용을 원치 않을경우 0을 입력하세요.');
			f.use_point.value = 0;
			f.use_point.focus();
			return false;
		}

		if (temp_point > mb_point) {
			alert('포인트사용 금액은 현재 보유포인트 보다 클수 없습니다.');
			f.tot_price.value = number_format(String(tot_price));
			f.use_point.value = 0;
			f.use_point.focus();
			return false;
		}

		if (temp_point > 0 && (mb_point < min_point)) {
			alert('포인트사용 금액은 ' + number_format(String(min_point)) + '원 부터 사용가능 합니다.');
			f.tot_price.value = number_format(String(tot_price));
			f.use_point.value = 0;
			f.use_point.focus();
			return false;
		}

		var paymethod_check = false;
		for (var i = 0; i < f.elements.length; i++) {
			if (f.elements[i].name == "paymethod" && f.elements[i].checked == true) {
				paymethod_check = true;
			}
		}

		if (!paymethod_check) {
			alert("결제방법을 선택하세요.");
			return false;
		}

		if (typeof(f.od_pwd) != 'undefined') {
			clear_field(f.od_pwd);
			if ((f.od_pwd.value.length < 3) || (f.od_pwd.value.search(/([^A-Za-z0-9]+)/) != -1))
				error_field(f.od_pwd, "회원이 아니신 경우 주문서 조회시 필요한 비밀번호를 3자리 이상 입력해 주십시오.");
		}

		if (getRadioVal(f.paymethod) == '무통장') {
			check_field(f.bank, "입금계좌를 선택하세요");
			check_field(f.deposit_name, "입금자명을 입력하세요");
		}

		<?php if (!$config['company_type']) { ?>
			if (getRadioVal(f.paymethod) == '무통장' && getRadioVal(f.taxsave_yes) == 'Y') {
				check_field(f.tax_hp, "핸드폰번호를 입력하세요");
			}

			if (getRadioVal(f.paymethod) == '무통장' && getRadioVal(f.taxsave_yes) == 'S') {
				check_field(f.tax_saupja_no, "사업자번호를 입력하세요");
			}

			if (getRadioVal(f.paymethod) == '무통장' && getRadioVal(f.taxbill_yes) == 'Y') {
				check_field(f.company_saupja_no, "사업자번호를 입력하세요");
				check_field(f.company_name, "상호명을 입력하세요");
				check_field(f.company_owner, "대표자명을 입력하세요");
				check_field(f.company_addr, "사업장소재지를 입력하세요");
				check_field(f.company_item, "업태를 입력하세요");
				check_field(f.company_service, "종목을 입력하세요");
			}
		<?php } ?>

		if (errmsg) {
			alert(errmsg);
			errfld.focus();
			return false;
		}

		if (getRadioVal(f.paymethod) == '계좌이체') {
			if (tot_price < 150) {
				alert("계좌이체는 150원 이상 결제가 가능합니다.");
				return false;
			}
		}

		if (getRadioVal(f.paymethod) == '신용카드') {
			if (tot_price < 1000) {
				alert("신용카드는 1000원 이상 결제가 가능합니다.");
				return false;
			}
		}

		if (getRadioVal(f.paymethod) == '휴대폰') {
			if (tot_price < 350) {
				alert("휴대폰은 350원 이상 결제가 가능합니다.");
				return false;
			}
		}

		if (document.getElementById('agree')) {
			if (!document.getElementById('agree').checked) {
				alert("개인정보 수집 및 이용 내용을 읽고 이에 동의하셔야 합니다.");
				return false;
			}
		}

		if (!confirm("주문내역이 정확하며, 주문 하시겠습니까?"))
			return false;

		f.use_point.value = no_comma(f.use_point.value);
		f.tot_price.value = no_comma(f.tot_price.value);

		return true;
	}

	function calculate_temp_point(val) {
		var f = document.buyform;
		var temp_point = parseInt(no_comma(f.use_point.value));
		var sell_price = parseInt(f.org_price.value);
		var send_cost2 = parseInt(f.baesong_price2.value);
		var mb_coupon = parseInt(f.coupon_total.value);
		var tot_price = sell_price + send_cost2 - mb_coupon;


		if (val == '' || !checkNum(no_comma(val))) {
			alert('포인트 사용액은 숫자이어야 합니다.');
			f.tot_price.value = number_format(String(tot_price));
			f.use_point.value = 0;
			f.use_point.focus();
			return;
		} else {
			f.tot_price.value = number_format(String(tot_price - temp_point));
		}
	}

	function calculate_paymethod(type) {

		var min_point = parseInt("<?php echo $config['usepoint']; ?>");
		var sell_price = parseInt($("input[name=org_price]").val()); // 합계금액
		var send_cost2 = parseInt($("input[name=baesong_price2]").val()); // 추가배송비
		var mb_coupon = parseInt($("input[name=coupon_total]").val()); // 쿠폰할인
		var temp_point = parseInt(no_comma($("input[name=use_point]").val()));
		var mb_point = parseInt($("input[name=mb_point]").val()); // 보유포인트
		var tot_price = sell_price + send_cost2 - mb_coupon;

		// 포인트잔액이 부족한가?
		if (type == '포인트' && mb_point < tot_price) {
			alert('포인트 잔액이 부족합니다.');

			$("#paymethod_bank").attr("checked", true);
			$("#bank_section").show();
			$("input[name=use_point]").val(0);
			$("input[name=use_point]").attr("readonly", false);
			calculate_order_price();
			<?php if (!$config['company_type']) { ?>
				$("#tax_section").show();
			<?php } ?>

			return;

		} else {

			if (temp_point > tot_price) {
				alert('사용가능 포인트가 부족합니다.');
				$("input[name=use_point]").val(0);
				$("input[name=use_point]").focus();
				return;
			}

		}

		if (temp_point > mb_point) {
			alert('포인트사용 금액은 현재 보유포인트 보다 클수 없습니다.');
			$("input[name=use_point]").val(0);
			$("input[name=use_point]").focus();
			return;
		}


		if (temp_point > 0 && (mb_point < min_point)) {
			alert('포인트사용 금액은 ' + number_format(String(min_point)) + '원 부터 사용가능 합니다.');
			$("input[name=use_point]").val(0);
			$("input[name=use_point]").focus();
			return;
		}

		switch (type) {
			case '무통장':
				$("#bank_section").show();
				$("input[name=use_point]").val(0);
				$("input[name=use_point]").attr("readonly", false);
				calculate_order_price();
				<?php if (!$config['company_type']) { ?>
					$("#tax_section").show();
				<?php } ?>
				break;
			case '포인트':
				$("#bank_section").hide();
				$("input[name=use_point]").val(number_format(String(tot_price)));
				$("input[name=use_point]").attr("readonly", true);
				calculate_order_price();
				<?php if (!$config['company_type']) { ?>
					$("#tax_section").hide();
					$(".taxbill_fld").hide();
					$("#taxsave_3").attr("checked", true);
					$("#taxbill_2").attr("checked", true);
				<?php } ?>
				break;
			default: // 그외 결제수단
				$("#bank_section").hide();
				//$("input[name=use_point]").val(0);
				//$("input[name=use_point]").attr("readonly", false);
				calculate_order_price();
				<?php if (!$config['company_type']) { ?>
					$("#tax_section").hide();
					$(".taxbill_fld").hide();
					$("#taxsave_3").attr("checked", true);
					$("#taxbill_2").attr("checked", true);
				<?php } ?>
				break;
		}
	}

	function tax_bill(val) {
		switch (val) {
			case 1:
				$("#taxsave_fld_1").show();
				$("#taxsave_fld_2").hide();
				$(".taxbill_fld").hide();
				$("#taxbill_2").attr("checked", true);
				break;
			case 2:
				$("#taxsave_fld_1").hide();
				$("#taxsave_fld_2").show();
				$(".taxbill_fld").hide();
				$("#taxbill_2").attr("checked", true);
				break;
			case 3:
				$("#taxsave_fld_1").hide();
				$("#taxsave_fld_2").hide();
				break;
			case 4:
				$("#taxsave_fld_1").hide();
				$("#taxsave_fld_2").hide();
				$(".taxbill_fld").show();
				$("#taxsave_3").attr("checked", true);
				break;
			case 5:
				$(".taxbill_fld").hide();
				break;
		}
	}

	function coupon_cancel() {
		var f = document.buyform;
		var sell_price = parseInt(no_comma(f.tot_price.value)); // 최종 결제금액
		var mb_coupon = parseInt(f.coupon_total.value); // 쿠폰할인
		var tot_price = sell_price + mb_coupon;

		$("#dc_amt").val(0);
		$("#dc_cancel").hide();
		$("#dc_coupon").show();

		$("input[name=tot_price]").val(number_format(String(tot_price)));
		$("input[name=coupon_total]").val(0);
		$("input[name=coupon_price]").val("");
		$("input[name=coupon_lo_id]").val("");
		$("input[name=coupon_cp_id]").val("");
	}

	// 구매자 정보와 동일합니다.
	function gumae2baesong(checked) {
		var f = document.buyform;

		if (checked == true) {
			f.b_name.value = f.name.value;
			f.b_cellphone.value = f.cellphone.value;
			f.b_telephone.value = f.telephone.value;
			f.b_zip.value = f.zip.value;
			f.b_addr1.value = f.addr1.value;
			f.b_addr2.value = f.addr2.value;
			f.b_addr3.value = f.addr3.value;
			f.b_addr_jibeon.value = f.addr_jibeon.value;

			calculate_sendcost(String(f.b_zip.value));
		} else {
			f.b_name.value = '';
			f.b_cellphone.value = '';
			f.b_telephone.value = '';
			f.b_zip.value = '';
			f.b_addr1.value = '';
			f.b_addr2.value = '';
			f.b_addr3.value = '';
			f.b_addr_jibeon.value = '';

			calculate_sendcost('');
		}
	}

	//gumae2baesong(true);
</script>
<!-- } 주문서작성 끝 -->