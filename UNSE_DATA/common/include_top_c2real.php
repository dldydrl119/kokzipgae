<html>

<head>
	<title></title>
</head>

<link rel="stylesheet" href="/theme/basic/style.css">
<link rel=StyleSheet href='/UNSE_DATA/style.css' type='text/css'>
<SCRIPT LANGUAGE="JavaScript">
	<!--
	function setPng24(obj) {
		obj.width = obj.height = 1;
		obj.className = obj.className.replace(/\bpng24\b/i, '');
		obj.style.filter =
			"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + obj.src + "',sizingMethod='image');"
		obj.src = '';
		return '';
	}
	//
	-->
</SCRIPT>
<SCRIPT LANGUAGE="JavaScript" Src="/js/write.js"></SCRIPT>

<body topmargin="0" leftmargin="0" style="overflow-x:hidden;display: grid; justify-items: center;">
	<header style="border-bottom: 1px solid #f3f3f3;">
		<div class="unse_tophd">
			<div class="container">
				<div class="back">
					<a href="javascript:history.back()" class="unse_hd"></a>
				</div>
			</div>

		</div>


	</header>



	<div>


		<map name="Top">
			<area shape="rect" coords="446,1,485,25" href="#top" onfocus="blur()">
		</map>

		<table cellpadding="0" cellspacing="0">
			<tr>
				<td>
					<!-- 맨 위 상단 이상한 줄 <img src="/UNSE_DATA/images/c2_img/result_top.jpg"> -->
				</td>
			</tr>
			<tr>
				<td style="background-image:url('/UNSE_DATA/images/c2_img/result_middle.jpg'); padding:60px 0;">
					<table align="Center" cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td height="2"></td>
						</tr>
						<tr>
							<tD>
								<div id="div_day_bg" style="position:absolute; z-index:1;">
									<div id="div_big" style="position:absolute; z-index:2; width:400px; height:28px; top:3px; left:15px;">
										<table cellpadding="0" cellspacing="0">
											<tR>
												<td style="padding-top:7px;">
													<font color="#FFFFFF" style="font-family:Dotum;"><b>사주 정보</b></font>&nbsp;&nbsp;
												</td>

											</tr>
											<tR>
												<td style="padding-top:7px;">&nbsp;<font color="#FFFFFF" style="font-family:Dotum;">&nbsp;<b><?= $UNSE_TITLE ?></b></font>
												</td>
											</tR>
											<tr>
												<tD align="center">
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
														$umyang_text = "<font color='#3E3E3E'>양력&nbsp;" . $my_date_str . "&nbsp;" . $my_time_str . "&nbsp;&nbsp;/&nbsp;&nbsp;음력&nbsp;" . $my_um_date_str . "&nbsp;" . $my_time_str . "</font>";
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

													$puri_time = "<font color='#3E3E3E'>" . $now_year . "년 " . $now_month . "월 " . $now_day . "일 (" . $now_yoil . ") / " . $now_day_part . " " . $now_hour . ":" . $now_min . "</font>"
													?>
													<table width="596" height="30" cellpadding="0" cellspacing="0" border="0">
														<? if ($puritime_data1 != "N") { ?>
															<tr>
																<tD width="596" height="1" bgcolor="#CCCCCC" colspan="5"></td>
															</tr>
															<tr>
																<td width="1" bgcolor="#CCCCCC"></td>
																<td width="100" height="28" align="Center" bgcolor="#F8F8F8"><b>
																		<font color="#3E3E3E"><?= $user_name ?></font> 님
																	</b></td>
																<td width="1" bgcolor="#CCCCCC"></td>
																<td width="493" height="28" style="padding-left:12px;">[&nbsp;<?= $sex ?>자&nbsp;]&nbsp;<?= $umyang_text ?></td>
																<td width="1" bgcolor="#CCCCCC"></td>
															</tr>
														<? } ?>
														<? if ($puritime_data3 != "N") { ?>
															<tr>
																<tD width="596" height="1" bgcolor="#CCCCCC" colspan="5"></td>
															</tr>
															<tr>
																<td width="1" bgcolor="#CCCCCC"></td>
																<td width="100" height="28" align="Center" bgcolor="#F8F8F8">
																	<font color="#3E3E3E">풀이시간</font>
																</td>
																<td width="1" bgcolor="#CCCCCC"></td>
																<td width="493" height="28" style="padding-left:12px;"><?= $puri_time ?></td>
																<td width="1" bgcolor="#CCCCCC"></td>
															</tr>
															<tr>
																<tD width="596" height="1" bgcolor="#CCCCCC" colspan="5"></td>
															</tr>
														<? } ?>
														<? if ($puritime_data4 != "N") { ?>
															<tr>
																<td width="1" bgcolor="#CCCCCC"></td>
																<td width="100" height="28" align="Center" bgcolor="#F8F8F8">
																	<font color="#3E3E3E">상세년도</font>
																</td>
																<td width="1" bgcolor="#CCCCCC"></td>
																<td width="493" height="28" style="padding-left:12px;">
																	<font color='#3E3E3E'>단기 <?= date("Y") + 2333 ?> 년 / 불기 <?= date("Y") + 544 ?> 년</font>
																</td>
																<td width="1" bgcolor="#CCCCCC"></td>
															</tr>
															<tr>
																<tD width="596" height="1" bgcolor="#CCCCCC" colspan="5"></td>
															</tr>
														<? } ?>
													</table>
													<!-- 사용자 / 양력 / 음력 정보 출력 끝 -->
													<img src="/UNSE_DATA/images/nolink.png" height="12"><BR>
													<!-- 만세력 출력 시작 -->
													<?
													if ($o_manse_data != "N") {
														include "../../common/manse_c2.php";

														if ($your_check == "Y") {
															include "../../common/manse_c2_your.php";
														}
													}
													?>
													<!-- 만세력 출력 끝 -->
												</td>
											</tr>
										</table>
									</div>
									<!-- <? if ($print_check != "N") { ?><div id="div_big" style="position:absolute; z-index:2; width:84px; height:20px; top:10px; left:499px;"><a href="#인쇄" onclick="print();"><img src="/UNSE_DATA/images/btn_img/btn_print.gif" border="0"></a></div><? } ?> -->
								</div>
								<center>
									<div style="width: 100%; height: 300px; background-color:#b1b1b1; ;"></div>
									<!-- <img src="/UNSE_DATA/images/c2_img/background_img_1_1.jpg"> -->
								</center>
							</td>
						</tR>
						<tr>
							<td height="10"></td>
						</tr>

						<tr>
							<td height="17"></td>
						</tr>
						<tR>
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
								if ($ohang_data != "N") {
									include "../../solve/ohang.php";
								}
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