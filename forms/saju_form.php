<? include_once "../incs/comm_form.php";

?>
<html>
 
<heaD>
	<title></title>
</head>
<SCRIPT LANGUAGE="JavaScript">
	function initsize() {
		try {
			//self.resizeTo(document.body.scrollWidth, document.body.scrollHeight);
		} catch (e) {};
	}
	//
</SCRIPT>
<SCRIPT LANGUAGE="JavaScript" Src="/incs/javaEmbed/write.js"></SCRIPT>
<link rel=StyleSheet href='/style.css' type='text/css'>

<body topmargin="0" leftmargin="0" onload="initsize();">
	<table cellpadding="0" cellspacing="0" border="0" height=100% width="100%">
		<tR>



			<form name="signform" id="signform" method=post style="display : inline;" onsubmit="return false">
				<input type="hidden" name="urlinfo" value="<?= $urlinfo; ?>">
				<input type="hidden" name="cate" value="<?= $urlinfo; ?>">
				<input type="hidden" name="sel" value="<?= $sel; ?>">
				<?
				// include "../forms/unse_info.php"; 
				?>

				<!-- =============================================================== -->


				<div id="InPut">
					<table cellpadding="0" cellspacing="0">
						<tR>
							<tD style="padding-left:1px;"><img src="/images/background1.png" style="width: 100%;"></tD>
						</tR>
						<tR>
							<td>
								<p class="unse_title">사주 정보 입력</p>
							</td>
							<!-- <tD height="10"><img src="/images/underbar.jpg"></tD> -->
						</tR>
						<tR>
							<tD height="9"></tD>
						</tr>
						<tr>
							<!-- <tD align="center"><img src="/images/input_img/bottom_top.gif"></tD> -->
						</tR>
						<tR>
							<!-- background-image:url('/images/input_img/bottom_bg.gif'); -->
							<tD align="center" style=" background-repeat:repeat-y; background-position:center 0px;">
								<?
								if ($urlinfo == "gunghap") {
									gung();
								} elseif ($urlinfo == "name") {
									if ($sel == "7") {
									} else {
										include_once "../forms/input_form.php";
									}
								} elseif ($urlinfo == "jum") {
									jum();
								} elseif ($urlinfo == "faceface") {
									faceface();
								} elseif ($urlinfo == "theme") {
									theme();
								} elseif ($urlinfo == "free") {
									free();
								} elseif ($urlinfo == "yukim") {
									yukim();
								} else {
									include_once "../forms/input_form.php";
								}

								if ($urlinfo == "lotto") {
									lotto();
								}
								if ($urlinfo == "selectDay" && $sel == "1") {
									include_once "../forms/input_form_your.php";
								} elseif ($urlinfo == "selectDay" && $sel == "3") {
									include "../forms/another_form/selectday.php";
								}


								?></tD>
						</tR>

						<?
						if ($urlinfo == "name") {
						?>
							<tr>
								<td style="background-image:url('/images/input_img/bottom_bg.gif'); background-repeat:repeat-y; background-position:center 0px;">
									<BR>
									<? name2() ?>
								</td>
							</tr>
						<?
						}
						?>
						<tR>
							<tD height="55" align="center" valign=top>
								<!-- <img align=center src="/images/input_img/bottom_bottom.gif"> -->
								<br><br>
								<? include "../incs/button.php"; ?>
							</tD>
						</tr>
						<?
						// include "../incs/iyong.php";  
						?>


					</table>

				</div>

				<div id="resultIMG" align="center"></div>
				<div id="result" align="center"></div>
				<!-- =============================================================== -->

			</form>
		</tR>
	</table>

	<? include "../incs/form_foot.php"; ?>

	<?
	function lotto()
	{
		global $sel; ?>

		<? include "../forms/another_form/selectday.php"; ?>


		<?
	}

	function gung()
	{
		global $sel;
		if ($sel == 2) {
			include "../forms/another_form/gunghap_plus_form_2.php";
			include "../forms/input_form.php";
			include "../forms/input_form_your.php";
		} else {
			include "../forms/input_form.php";
			if ($sel == 1 || $sel == 6  || $sel == 13 || $sel == 14 || $sel == 16) {
				echo ("<br>");
				include "../forms/input_form_your.php";
			}
		}
	}

	function name2()
	{
		global $sel;
		global $showInputFN2;
		global $showInputNN2;
		global $showInputNN3;
		global $name_1;
		global $name_2;
		global $name_3;
		global $name_4;
		global $name_5;
		global $hangul1;
		global $hangul2;
		global $hangul3;
		global $hangul4;
		global $hangul5;
		if ($sel == "6") {
			include "../forms/another_form/name_plus_form_6.php";
		} elseif ($sel == "7") {
			include "../forms/another_form/name_plus_form_7.php";
		} else {
			if ($sel == "1") {
				$showInputFN2 = "0";
				$showInputNN2 = "0";
				$showInputNN3 = "0";
			}
			if ($sel == "2") {
				$showInputFN2 = "0";
				$showInputNN2 = "1";
				$showInputNN3 = "0";
			}
			if ($sel == "3") {
				$showInputFN2 = "0";
				$showInputNN2 = "1";
				$showInputNN3 = "1";
			}
			if ($sel == "4") {
				$showInputFN2 = "1";
				$showInputNN2 = "0";
				$showInputNN3 = "0";
			}
			if ($sel == "5") {
				$showInputFN2 = "1";
				$showInputNN2 = "1";
				$showInputNN3 = "0";
			}
		?>
			<table width=430 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>

				<input type=hidden name=name_1 value='<?= $name_1 ?>'>
				<input type=hidden name=name_2 value='<?= $name_2 ?>'>
				<input type=hidden name=name_3 value='<?= $name_3 ?>'>
				<input type=hidden name=name_4 value='<?= $name_4 ?>'>
				<input type=hidden name=name_5 value='<?= $name_5 ?>'>

				<input type=hidden name=hangul_1 value='<?= $hangul1 ?>'>
				<input type=hidden name=hangul_2 value='<?= $hangul2 ?>'>
				<input type=hidden name=hangul_3 value='<?= $hangul3 ?>'>
				<input type=hidden name=hangul_4 value='<?= $hangul4 ?>'>
				<input type=hidden name=hangul_5 value='<?= $hangul5 ?>'>

				<input type=hidden name=showInputFN2 value='<?= $showInputFN2 ?>'>
				<input type=hidden name=showInputNN2 value='<?= $showInputNN2 ?>'>
				<input type=hidden name=showInputNN3 value='<?= $showInputNN3 ?>'>
				<tr>
					<td width="455" height="245" style="background-image:url('/UNSE_DATA/images/name_img/input_bg.jpg');background-repeat:no-repeat;">
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td width="62"></tD>
								<? S_input_BOX("1") ?>
								<td width="5"></tD>
								<? if ($showInputFN2 == "1") { ?><? S_input_BOX("2") ?><? } ?>
							</tr>
							<tR>
								<td height="15" colspan="6"></td>
							</tR>
							<tr>
								<td width="62"></tD>
								<? S_input_BOX("3") ?>
								<td width="5"></tD>
								<? if ($showInputNN2 == "1") { ?><? S_input_BOX("4") ?><? } ?>
								<td width="5"></tD>
								<? if ($showInputNN3 == "1") { ?><? S_input_BOX("5") ?><? } ?>
							</tr>
						</table>
					</tD> 
				</tR>
			</table>

			<br>
		<?
		}
	}


	function jum()
	{
		global $sel;
		if ($sel == "2" || $sel == "16") {
			include "../forms/another_form/jum_plus_form_2.php";
		} elseif ($sel == "4") { ?>
			<OBJECT codeBase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0 height=200 width=500 classid=clsid:D27CDB6E-AE6D-11cf-96B8-444553540000>
				<PARAM NAME="movie" VALUE="/swf/magic.swf">
				<PARAM NAME="quality" VALUE="high">
				<PARAM NAME="wmode" VALUE="transparent">
				<embed src="/swf/magic.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="500" height="200"></embed>
			</OBJECT>
			<BR><BR>
		<? include "../forms/input_form.php";
		} elseif ($sel == "6") {
			include "../forms/another_form/jum_plus_form_6.php";
		} elseif ($sel == "12" || $sel == "13" || $sel == "14") {
			include "../forms/another_form/jum_plus_form_1234.php";
		} else {
			include "../forms/input_form.php";
		}
	}

	function yukim()
	{
		global $sel;
		if ($sel == "1") { ?>
			<TABLE width=430 border=0 cellspacing=0 cellpadding=3 align=center bgcolor=FFFFFF>
				<TR>
					<TD bgcolor=FFFFFF align=left valign=top width=120>
						<input type=radio name=what value='01' checked> 사업사<br>
						<input type=radio name=what value='02'> 취직사<br>
						<input type=radio name=what value='03'> 이혼사 <br>
						<input type=radio name=what value='04'> 가출사<br>
						<input type=radio name=what value='05'> 질병사
					</TD>
					<TD bgcolor=FFFFFF align=left valign=top width=120>
						<input type=radio name=what value='06'> 구재사<br>
						<input type=radio name=what value='07'> 주식투자사<br>
						<input type=radio name=what value='08'> 시험선거사<br>
						<input type=radio name=what value='09'> 임신사<br>
						<input type=radio name=what value='10'> 대인관계사
					</TD>
					<TD bgcolor=FFFFFF align=left valign=top width=120>
						<input type=radio name=what value='11'> 도난실물사<br>
						<input type=radio name=what value='12'> 길흉예측사<br>
						<input type=radio name=what value='13'> 소송승패사<br>
						<input type=radio name=what value='14'> 매매사<br>
						<input type=radio name=what value='15'> 가택이동사<br>
					</TD>
					<TD bgcolor=FFFFFF align=left valign=top width=120>
						<input type=radio name=what value='16'> 혼인사
					</TD>
				</TR>
			</TABLE>
		<? } else { ?>
			<TABLE width=430 border=0 cellspacing=1 cellpadding=5 align=center bgcolor=CCCCCC>
				<tr>
					<td colspan=3 align=center bgcolor=FFE69D>
						<font color=blue>아래에서 점사를 선택하세요...</font>
					</td>
				</tr>
				<TR>
					<TD bgcolor=FFF9E7 align=left valign=top width=120>
						<input type=radio name=what value='계획사' checked> 계획사<br>
						<input type=radio name=what value='구재,구물사'> 구재,구물사<br>
						<input type=radio name=what value='매매사'> 매매사 <br>
						<input type=radio name=what value='태아성별사'> 태아성별사<br>
						<input type=radio name=what value='승부(필승좌법)'> 승부(필승좌법) <br>
						<input type=radio name=what value='기타'> 기타
					</TD>
					<TD bgcolor=FFFFFF align=left valign=top width=120>
						<input type=radio name=what value='질병사'> 질병사 <br>
						<input type=radio name=what value='내방여부사'> 내방여부사<br>
						<input type=radio name=what value='방문부재사'> 방문부재사<br>
						<input type=radio name=what value='여행,레저길흉사'> 여행,레저길흉사<br>
						<input type=radio name=what value='진위파악사'> 진위파악사
					</TD>
					<TD bgcolor=FFF9E7 align=left valign=top width=120>
						<input type=radio name=what value='미로탈출사'> 미로탈출사<br>
						<input type=radio name=what value='길흉예측사'> 길흉예측사 <br>
						<input type=radio name=what value='도난실물사'> 도난실물사<br>
						<input type=radio name=what value='위탁성부사'> 위탁성부사<br>
						<input type=radio name=what value='도망,피신사'> 도망,피신사
					</TD>
					</TD>
				</TR>
			</TABLE>
		<?
		}

		echo ("<BR>");
		include "../forms/input_form.php";
	}


	function faceface()
	{
		global $sel;
		?>
		<table width=490 border=0 cellspacing=1 cellpadding=5 align=center>
			<tr>
				<td align=center><img src=/images/result_img/faceface_img/man.gif></td>
				<td align=center><img src=/images/result_img/faceface_img/women.gif></td>
			</tr>
			<tr>
				<td align=center><input type=radio name=sex value='남자'> 남자</td>
				<td align=center><input type=radio name=sex value='여자'> 여자</td>
			</tr>
		</table>
		<? }


	function theme()
	{
		global $sel;
		if ($sel == 3) { ?>

			<input type="hidden" name="a0" value="<?= rand(1, 2) ?>">
			<input type="hidden" name="a1" value="<?= rand(1, 2) ?>">
			<input type="hidden" name="a2" value="<?= rand(1, 2) ?>">
			<input type="hidden" name="a3" value="<?= rand(1, 2) ?>">
			<br>

			<img src="/images/input_img/gif.gif" onclick="this.src='/images/input_img/'+signform.a0.value+'.gif'" style="cursor:hand">&nbsp;&nbsp;
			<img src="/images/input_img/gif.gif" onclick="this.src='/images/input_img/'+signform.a1.value+'.gif'" style="cursor:hand">&nbsp;&nbsp;
			<img src="/images/input_img/gif.gif" onclick="this.src='/images/input_img/'+signform.a2.value+'.gif'" style="cursor:hand">&nbsp;&nbsp;
			<img src="/images/input_img/gif.gif" onclick="this.src='/images/input_img/'+signform.a3.value+'.gif'" style="cursor:hand">&nbsp;&nbsp;<br><br>
		<?;
		} elseif ($sel == 7 or $sel == 2) {
			$intSuja = rand(1, 21);
			$suho = rand(1, 8);
		?>
			<INPUT TYPE="hidden" name="intSuja" value="<?= $intSuja ?>">
			<INPUT TYPE="hidden" name="suho" value="<?= $suho ?>">
			<FONT COLOR="#FF6600" style="font-size:11">타롯은 처음한번이 정확하답니다.소원을 적은후 카드를 클릭해서 결과를 보세요.</FONT>
		<? include "../forms/another_form/taro.php";
		} else {
			include "../forms/input_form.php";
		}
	}

	function free()
	{
		global $sel;
		echo ('<input type="hidden" name="nextresult" value="1">');
		if ($sel <> "13" && $sel <> "14" && $sel <> "6") {
			include "../forms/input_form.php";
		}   //해몽
		if ($sel == "6") {
			include "../forms/another_form/free_plus_form_2.php";
		} //형액형궁합
		if ($sel == "3") {
			include "../forms/another_form/free_plus_form_3.php";
		} //혈액운세
		if ($sel == "4") {
			include "../forms/another_form/free_plus_form_4.php";
		} //민증운세
		if ($sel == "5") {
			include "../forms/another_form/free_plus_form_5.php";
		} //행운번호
		if ($sel == "13") {
		?><TABLE cellspacing=0 cellpadding=0 border=0>
				<TR bgcolor=#330000 style="padding-top:2;padding-left:5;color:white;padding-right:5;padding-bottom:1">
					<TD><input type="radio" checked>
					<td>꿈해몽 &nbsp;&nbsp;&nbsp;
					<td><input type="radio" onclick="location='?sel=14&urlinfo=free'">
					<td>태몽&nbsp;</TD>
				</TR>
			</TABLE><br><?;;
						echo '검색할 <b>꿈해몽</b> 단어 검색 : <input  class="inputb" type="text" name="dream_name" value="' . $dream_name . '" onkeyup="if(event.keyCode==13){buttonfree()}"><input type="hidden" name="dream_type" value="해몽"  >';
					}
					if ($sel == "14") {
						?><TABLE cellspacing=0 cellpadding=0 border=0>
				<TR bgcolor=#330000 style="padding-top:2;padding-left:5;color:white;padding-right:5;padding-bottom:1">
					<TD><input type="radio" onclick="location='?sel=13&urlinfo=free'">
					<td>꿈해몽 &nbsp;&nbsp;&nbsp;
					<td><input type="radio" checked>
					<td>태몽&nbsp;</TD>
				</TR>
			</TABLE><br>
		<?;
						echo '검색할 <B>태몽</B> 단어 검색 : <input   class="inputb" ttype="text" name="dream_name" value="' . $dream_name . '"  onkeyup="if(event.keyCode==13){buttonfree();};"><input type="hidden" name="dream_type" value="태몽">';
					}
				}


				function S_input_BOX($i_var)
				{
					global $sel;
		?>
		<tD width="124" height="105" style="background-image:url('/UNSE_DATA/images/name_img/input_bg2.jpg'); background-repeat:no-repeat;">
			<div id="div_day_bg" style="position:absolute; z-index:1;">
				<div id="div_big" style="position:absolute; z-index:3; width:23px; height:61px; top:-41px; left:41px;"><input type="input" name="what_<?= $i_var ?>" size="6" style="width:77px; height:19px; border:0px solid; font-size:12px; color:#7D7D7D;" readonly></div>
				<div id="div_big" style="position:absolute; z-index:3; width:23px; height:61px; top:-44px; left:7px;"><input type="input" name="hangul_o_<?= $i_var ?>" size="1" maxlength="1" style="width:22px; height:21px;"></div>
				<div id="div_big" style="position:absolute; z-index:3; width:23px; height:61px; top:-13px; left:51px;"><input type="input" name="hanja_<?= $i_var ?>" size="1" maxlength="1" style="width:56px; height:56px; border:0px solid; font-size:50px; color:082D44;" readonly></div>
				<div id="div_big" style="position:absolute; z-index:3; width:23px; height:61px; top:-14px; left:6px;"><a href="javascript:searchHan('name_<?= $i_var ?>')"><img src="/UNSE_DATA/images/name_img/btn_change.jpg" border="0"></a></div>
			</div>
		</td>
	<? } ?>

	<SCRIPT LANGUAGE="JavaScript">
		function searchHan(ref) {

			var frm = document.getElementById("signform");

			switch (ref) {
				case "name_1":
					var ref_var = frm.hangul_o_1;
					break;
				case "name_2":
					var ref_var = frm.hangul_o_2;
					break;
				case "name_3":
					var ref_var = frm.hangul_o_3;
					break;
				case "name_4":
					var ref_var = frm.hangul_o_4;
					break;
				case "name_5":
					var ref_var = frm.hangul_o_5;
					break;
			}

			if (!ref_var.value || (ref_var.value < "가") || (ref_var.value > "힣")) {
				alert('한글성명자를 입력하신 후에 확인하세요!');
				ref_var.focus();
				return;
			} else {
				refurl = "/forms/another_form/search_han.php?refcon=" + ref_var.value + "&refname=" + ref;
				var window_left = (screen.width - 640) / 2;
				var window_top = (screen.height - 480) / 2;
				window.open(refurl, "checkhangulWin", 'width=329,height=311,status=no,scrollbars=no, top=' + window_top + ',left=' + window_left + '');
			}
		}
		//
	</SCRIPT>

	<map name="top_1">
		<area shape="rect" coords="423,3,517,27" href="/process/join.php?urlinfo=join&sel=1" onfocus="blur()">
		<area shape="rect" coords="526,5,644,29" href="/counlist.php" onfocus="blur()">
		<area shape="rect" coords="656,3,713,28" href="/mboard/mboard.php?mode=free" onfocus="blur()">
		<area shape="rect" coords="726,2,775,27" href="javascript:taltoi()" onfocus="blur()">
		<area shape="rect" coords="785,4,843,25" href="javascript:bookmark();" onfocus="blur()">
		<area shape="rect" coords="845,2,930,25" href="#A" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.gilun.com');" onfocus="blur()">
	</map>

	<map name="top_2">
		<area shape="rect" coords="19,4,257,68" href="/main.php" onfocus="blur();">
		<area shape="rect" coords="276,11,362,57" href="/incs/sub.php?urlinfo=saju" onfocus="blur();">
		<area shape="rect" coords="374,10,450,60" href="/incs/sub.php?urlinfo=gunghap" onfocus="blur();">
		<area shape="rect" coords="468,10,549,55" href="/incs/sub.php?urlinfo=name" onfocus="blur();">
		<area shape="rect" coords="562,5,623,56" href="/incs/sub.php?urlinfo=jum" onfocus="blur();">
		<area shape="rect" coords="639,3,688,66" href="/forms/comm_forms.php?urlinfo=selectDay&sel=1" onfocus="blur();">
		<area shape="rect" coords="696,8,755,58" href="/forms/comm_forms.php?urlinfo=faceface&sel=1" onfocus="blur();">
		<area shape="rect" coords="762,7,848,60" href="/forms/comm_forms.php?urlinfo=lotto&sel=1" onfocus="blur();">
		<area shape="rect" coords="851,10,936,60" href="/incs/sub.php?urlinfo=theme" onfocus="blur();">
	</map>

