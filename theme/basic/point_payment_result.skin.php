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



	
<div class="settle_inicis" style="display:none;">
<?php
	if(is_mobile()){
		require_once(TB_MSHOP_PATH.'/settle_point_inicis.inc.php');
		require_once(TB_MSHOP_PATH.'/inicis/orderform.1.php')	;
	}else{
		require_once(TB_SHOP_PATH.'/settle_point_inicis.inc.php');
		require_once(TB_SHOP_PATH.'/inicis/orderform.1.php')	;
	}
?>
</div>
<div class="settle_kakopay" style="display:none;">
<?php
	require_once(TB_SHOP_PATH.'/settle_kakaopay.inc.php');
	require_once(TB_SHOP_PATH.'/kakaopay/orderform.1.php');
?>
</div>

<!-- Mypage Area Start -->
<div id="mypage" class="pd_12">
  <!-- Mem_info Area Start -->
  <? include_once(TB_THEME_PATH.'/aside_mem_info.skin.php'); ?>
  <!-- Mem_info Area End -->

  <!-- My_box Area Start -->
	<div class="my_box">
	<div class="container1">
	  <!-- Left_box Area Start -->
	  <? include_once(TB_THEME_PATH.'/aside_my.skin.php');?>
	  <!-- Left_box Area End -->
	  <!-- Right_box Area Start -->
	  <div class="right_box">
		<!-- Content_box Area Start -->
			<div class="content_box">
              <!-- Sub_title01 Area Start -->
              <div class="sub_title01"><h3>포인트 충전 결제하기</h3></div><!-- Sub_title01 Area End -->
              <div id="point_pay">
                
                <!-- Sub_title06 Area Start -->
                <div class="sub_title06 tit1">
                  <div class="container2">
                    <div class="ico_box"><img src="<?php echo TB_IMG_URL; ?>/pay_ico1.png" alt="ico1"></div>
                    <h4>상품을 확인해주세요.</h4>
                  </div>
                </div><!-- Sub_title06 Area End -->

                <!-- List_box Area Start -->
                <div class="list_box1">
                  <div class="container2">
                    <ul>
                      <li>
                        <dl>
                          <dt><img src="<?php echo TB_IMG_URL; ?>/product_pay_ico1.png" alt="ico1">결제 금액</dt>
                          <dd><?=number_format(get_session("payment_price"))?>원</dd>
                        </dl>
                      </li>
                      <li>
                        <dl>
                          <dt><img src="<?php echo TB_IMG_URL; ?>/product_pay_ico2.png" alt="ico2">추가</dt>
                          <dd>+<?=number_format(get_session("payment_point")-get_session("payment_price"))?>원</dd>
                        </dl>
                      </li>
                      <li>
                        <dl>
                          <dt><img src="<?php echo TB_IMG_URL; ?>/product_pay_ico1.png" alt="ico1">충전 포인트</dt>
                          <dd><?=number_format(get_session("payment_point"))?>원</dd>
                        </dl>
                      </li>
                    </ul>
                  </div>
                </div><!-- List_box Area End -->

                <!-- Sub_title06 Area Start -->
                <div class="sub_title06 tit3">
                  <div class="container2">
                    <div class="ico_box"><img src="<?php echo TB_IMG_URL; ?>/pay_ico3.png" alt="ico3"></div>
                    <h4>결제수단을 선택해주세요.</h4>
                  </div>
                </div><!-- Sub_title06 Area End -->

					<form class="list_box2" name="forderform" id="forderform" method="post" action="<?php echo $order_action_url; ?>"  autocomplete="off" >	
					<div class="settle_inicis">
					<?php	
						if(is_mobile()){
							require_once(TB_MSHOP_PATH.'/inicis/orderform.2.php');
						}else{
							require_once(TB_SHOP_PATH.'/inicis/orderform.2.php');						
						}
					?>
					</div>
					<div class="settle_kakopay">
					<?php
						require_once(TB_SHOP_PATH.'/kakaopay/orderform.2.php');
						require_once(TB_SHOP_PATH.'/kakaopay/orderform.3.php');
					?>
					</div>
					<div class="container2">
						<ul>
							<?php
							$escrow_title = "";
							if($default['de_escrow_use']) {
								$escrow_title = "에스크로 ";
							}

							if($is_kakaopay_use) {
								echo ' <li class="hi_dn"><label for="kakao_pay" ><input type="radio" name="paymethod" id="kakao_pay" class="screen-hidden"  value="KAKAOPAY" ><span>카카오페이</span></label></li>'.PHP_EOL;
							}

							if($default['de_card_use']) {
								echo '<li><label for="paymethod_card"><input type="radio" name="paymethod" id="paymethod_card" class="screen-hidden" value="신용카드" ><span>신용/체크카드</span></label></li>'.PHP_EOL;
							}

							if($default['de_hp_use']) {
								echo '<li><label for="paymethod_hp"><input type="radio" name="paymethod" id="paymethod_hp" class="screen-hidden" value="휴대폰" ><span>휴대폰</span></label></li>'.PHP_EOL;
							}

							if($default['de_iche_use']) {
								echo '<li><label for="paymethod_iche"><input type="radio" name="paymethod" id="paymethod_iche" class="screen-hidden" value="계좌이체" ><span>'.$escrow_title.'계좌이체</span></label></li>'.PHP_EOL;
							}


							// PG 간편결제
							if($default['de_easy_pay_use']) {
								switch($default['de_pg_service']) {
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

								echo '<li><label for="paymethod_easy_pay" class="'.$pg_easy_pay_name.'"><input type="radio" name="paymethod" id="paymethod_easy_pay" class="screen-hidden" value="간편결제" ><span>'.$pg_easy_pay_name.'</span></label></li>'.PHP_EOL;
							}
							?>
						  <li>
							<?php	if(is_mobile()){	?>
							  <input type="button" value="다음" onclick="pay_approval();">   
							<?php	}else{	?>
							  <input type="button" value="다음" onclick="fbuyform_submit(document.forderform);">   
							<?php	}	?>
						  </li>
						</ul>
				  </div>
				  </form>
              </div>
            </div><!-- Content_box Area End -->
		  </div><!-- Right_box Area End -->
		</div>
	</div><!-- My_box Area End -->
</div><!-- Mypage Area End -->
<script>

	var form_action_url = "<?php echo $order_action_url; ?>";

	/* 결제방법에 따른 처리 후 결제등록요청 실행 */
	function pay_approval(){

		var f = document.sm_form;
		var pf = document.forderform;


		var paymethod_check = false;

		for(var i=0; i<pf.elements.length; i++){
			if(pf.elements[i].name == "paymethod" && pf.elements[i].checked==true){
				paymethod_check = true;
			}
		}

		if(!paymethod_check) {
			alert("결제방법을 선택하세요.");
			return;
		}


		//결제방법에 따른 데이터 처리 
		$.ajax({
			type: "POST",
			data: "paymethod="+getRadioVal(pf.paymethod),
			url: tb_shop_url+"/ajax.orderdataload.php",
			success: function(data) {

				if(data == "N"){
					alert("결제에 실패하였습니다.\n다시 시도해주세요.");
					return;
				}else{
				
					if(getRadioVal(pf.paymethod) == "KAKAOPAY"){

						$(".settle_inicis").remove();
					
					}else if(getRadioVal(pf.paymethod) == "신용카드"){

						$(".settle_kakopay").remove();

						// 금액체크
						if(!payment_check(pf))
							return false;

						var paymethod = "";
						var width = 330;
						var height = 480;
						var xpos = (screen.width - width) / 2;
						var ypos = (screen.width - height) / 2;
						var position = "top=" + ypos + ",left=" + xpos;
						var features = position + ", width=320, height=440";
						var p_reserved = f.DEF_RESERVED.value;
						f.P_RESERVED.value = p_reserved;

						pf.od_settle_case.value	=	getRadioVal(pf.paymethod);
					

						switch(pf.od_settle_case.value) {
							case "계좌이체":
								paymethod = "bank";
								break;
							case "가상계좌":
								paymethod = "vbank";
								break;
							case "휴대폰":
								paymethod = "mobile";
								break;
							case "신용카드":
								paymethod = "wcard";
								f.P_RESERVED.value = f.P_RESERVED.value.replace("&useescrow=Y", "");
								break;
							case "간편결제":
								paymethod = "wcard";
								f.P_RESERVED.value = p_reserved+"&d_kpay=Y&d_kpay_app=Y";
								break;
							case "삼성페이":
								paymethod = "wcard";
								f.P_RESERVED.value = f.P_RESERVED.value.replace("&useescrow=Y", "")+"&d_samsungpay=Y";
								//f.DEF_RESERVED.value = f.DEF_RESERVED.value.replace("&useescrow=Y", "");
								f.P_SKIP_TERMS.value = "Y"; //약관을 skip 해야 제대로 실행됨
								break;
						}
						f.P_AMT.value = f.good_mny.value;
						f.P_UNAME.value = pf.od_name.value;
						f.P_MOBILE.value = pf.od_hp.value;
						f.P_EMAIL.value = pf.od_email.value;
						<?php if($default['de_tax_flag_use']) { ?>
						f.P_TAX.value = pf.comm_vat_mny.value;
						f.P_TAXFREE = pf.comm_free_mny.value;
						<?php } ?>

						f.P_RETURN_URL.value = "<?php echo $return_url.$od_id; ?>";
						f.action = "https://mobile.inicis.com/smart/" + paymethod + "/";
	
					
						f.submit();
						return;
					}
				
				}
			}
		});

	}


	function fbuyform_submit(f){

		var paymethod_check = false;

		for(var i=0; i<f.elements.length; i++){
			if(f.elements[i].name == "paymethod" && f.elements[i].checked==true){
				paymethod_check = true;
			}
		}

		if(!paymethod_check) {
			alert("결제방법을 선택하세요.");
			return;
		}

		//결제방법에 따른 데이터 처리 
		$.ajax({
			type: "POST",
			data: "paymethod="+getRadioVal(f.paymethod),
			url: tb_shop_url+"/ajax.orderdataload.php",
			success: function(data) {
				if(data == "N"){
					alert("결제에 실패하였습니다.\n다시 시도해주세요.");
					return;
				}else{

					if(getRadioVal(f.paymethod) == "KAKAOPAY"){

						$(".settle_inicis").remove();


					
					}else if(getRadioVal(f.paymethod) == "신용카드"){

						$(".settle_kakopay").remove();

						if( f.action != form_action_url ){
							f.action = form_action_url;
							f.removeAttribute("target");
							f.removeAttribute("accept-charset");
						}

						f.gopaymethod.value = "Card";
						f.acceptmethod.value = f.acceptmethod.value.replace(":useescrow", "");

					    f.price.value       = f.good_mny.value;
						<?php if($default['de_tax_flag_use']) { ?>
						f.tax.value         = f.comm_vat_mny.value;
						f.taxfree.value     = f.comm_free_mny.value;
						<?php } ?>
						f.buyername.value   = f.od_name.value;
						f.buyeremail.value  = f.od_email.value;
						f.buyertel.value    = f.od_hp.value ? f.od_hp.value : f.od_tel.value;
						f.recvname.value    = f.od_b_name.value;
						f.recvtel.value     = f.od_b_hp.value ? f.od_b_hp.value : f.od_b_tel.value;
						f.recvpostnum.value = f.od_b_zip.value;
						f.recvaddr.value    = f.od_b_addr1.value + " " +f.od_b_addr2.value;

						if(!make_signature(f))
							return;

						paybtn(f);
					}
				}
			}
		});	
	}

	// 결제체크
	function payment_check(f)
	{
		var tot_price = parseInt(f.good_mny.value);

		if(f.od_settle_case.value == '계좌이체') {
			if(tot_price < 150) {
				alert("계좌이체는 150원 이상 결제가 가능합니다.");
				return false;
			}
		}

		if(f.od_settle_case.value == '신용카드') {
			if(tot_price < 1000) {
				alert("신용카드는 1000원 이상 결제가 가능합니다.");
				return false;
			}
		}

		if(f.od_settle_case.value == '휴대폰') {
			if(tot_price < 350) {
				alert("휴대폰은 350원 이상 결제가 가능합니다.");
				return false;
			}
		}

		return true;
	}

</script>