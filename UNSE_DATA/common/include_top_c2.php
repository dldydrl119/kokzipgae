<html>

<head lang="ko">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
	<title></title>
</head>

<link rel="stylesheet" href="/theme/basic/style.css">
<link rel=StyleSheet href='/UNSE_DATA/style.css' type='text/css'>

<SCRIPT LANGUAGE="JavaScript" Src="/js/write.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript">
	function setPng24(obj) {
		obj.width = obj.height = 1;
		obj.className = obj.className.replace(/\bpng24\b/i, '');
		obj.style.filter =
			"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + obj.src + "',sizingMethod='image');"
		obj.src = '';
		return '';
	}
	//
</SCRIPT>

<!-- Google Tag Manager -->
<script>
	(function(w, d, s, l, i) {
		w[l] = w[l] || [];
		w[l].push({
			'gtm.start': new Date().getTime(),
			event: 'gtm.js'
		});
		var f = d.getElementsByTagName(s)[0],
			j = d.createElement(s),
			dl = l != 'dataLayer' ? '&l=' + l : '';
		j.async = true;
		j.src =
			'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
		f.parentNode.insertBefore(j, f);
	})(window, document, 'script', 'dataLayer', 'GTM-MPFD645');
</script>



<!-- End Google Tag Manager -->

<body topmargin="0" leftmargin="0" style="overflow-x:hidden; width: 100%; margin: 0 auto;">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MPFD645" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<header style="border-bottom: 1px solid #f3f3f3;">
		<div class="unse_tophd">
			<div class="container">
				<div class="back">
					<a href="https://kokzipgae.com" class="unse_hd"></a>
				</div>
			</div>

		</div>


	</header>
	<div id="unse_mypage_list">
		<div class="mem_info">
			<div class="container1">
				<dl class="info">
					<div class="name">
						<font color="#000" style="font-family:Dotum;"><b>사주 정보</b></font>&nbsp;&nbsp;
					</div>
				</dl>
				<div>
					<!-- 사용자 / 양력 / 음력 정보 출력 시작 -->
					<?
					if ($puritime_data != "Y") {

						if ($_COOKIE['username']) {
							$user_name = $_COOKIE['username'];
						} else {
							$user_name = "고객";
						}


						$umyang_text = "";
					} else {
						$user_name = $user_name;
						$umyang_text = "<font color='#000'>" . $my_date_str . "&nbsp;(양)&nbsp;" . $my_time_str . "&nbsp;&nbsp;|&nbsp;&nbsp;" . $my_um_date_str . "&nbsp;(음)&nbsp;" . $my_time_str . "</font>";
					}

					$now_year = date("Y");
					$now_month = date("m");
					$now_day = date("d");
					$now_yoil = F_yoil(date("w"));
					$now_day_part = date("a");
					switch ($now_day_part) {
						case "am":
							$now_day_part = "오전";
						case "pm":
							$now_day_part = "오후";
					}
					$now_hour = date("h");
					$now_min = date("i");

					if (strlen($now_month) == 1) {
						$now_month = "0" . $now_month;
					}
					if (strlen($now_day) == 1) {
						$now_day = "0" . $now_day;
					}
					if ($now_hour > 12) {
						$now_hour = $now_hour - 12;
					}
					if (strlen($now_hour) == 1) {
						$now_hour = "0" . $now_hour;
					}
					if (strlen($now_min) == 1) {
						$now_min = "0" . $now_min;
					}
					// " . $now_year . "년 " . $now_month . "월 " . $now_day . "일 (" . $now_yoil . ") / 
					$puri_time = "<font color='#000'>" . $now_day_part . "  " . $now_hour . ":" . $now_min . "</font>"
					?>
					<dl class="info1">
					
						<dl class="info1_1">
							<div><span style="font-size: 16px; font-weight: bold;"><?= $user_name ?> <span style="font-size: 12px;">(<?= $sex ?>)</span></span></div><br>
							<div><?= $umyang_text ?></div><br>
							<div><?= $puri_time ?></div><br>
						</dl>
						
					</dl>
					<div class="name1">
							<td><?= $user_name ?>님의 선천적 오행은 <?= $my_oheng_day_h?>입니다.<br></td><br>
						</div>
				</div>
			</div>
		</div>
	</div>

	<div id="unse_content">
		<div class="container">
			<div class="content1">
				<?
				if ($o_manse_data != "N") {
					include "../../common/manse_c2.php";

					if ($your_check == "Y") {
						include "../../common/manse_c2_your.php";
					}
				}
				?>
			</div>
		</div>
	</div>
	<tr>
		<tD align="center">
			<?
			if ($ohang_data != "N") {
				include "../../solve/ohang.php";
			}
			?>
		</tD>
	</tR>



	<!-- <tR>
		<td>
			<?
			if ($top_var == "") {
				$top_var = "31";
			} else {
				$top_var = $top_var;
			}
			?>
			<div id="div_day_bg" style="position:absolute; z-index:1;">
				<div id="div_big" style="position:absolute; z-index:2; width:37px; height:44px; top:-10px; left:10px;"><img src="/UNSE_DATA/images/icon_img/B2_icon_F_2.png" class="png24"></div>
				<div id="div_big" style="position:absolute; z-index:2; width:500px; height:44px; top:<?= $top_var; ?>px; left:125px;">
					<font color="#7F7F7E"><?= $title_var ?></font>
				</div>
			</div>
			<center><img src="/UNSE_DATA/images/c2_img/background_img_1_2.jpg"></center>
		</tD>
	</tR>
	<tr>
		<td height="13"></td>
	</tr>
	<tr>
		<tD align="center">
			<?
			// if ($ohang_data != "N") {
			// 	include "../../solve/ohang.php";
			// }
			?>
		</tD>
	</tR>
	<tR>
		<td height="19"></tD>
	</tr>
	<tr>
		<td style="padding-left:3px;"><img src="/UNSE_DATA/images/c2_img/result_top_2.jpg"></td>
	</tR>
	<tr>
		<tD style="background-image:url('/UNSE_DATA/images/c2_img/result_middle_2.jpg'); background-repeat:repeat-y; background-position:center 0px;"><img src="/UNSE_DATA/images/nolink.png" height="22"><BR>
			<table width="546" align="Center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
				<tR>
					<td height="22"></td>
				</tr>
				<tR>
					<td>
						</div>
 -->