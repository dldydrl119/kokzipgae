<?include_once "../incs/comm_form.php";?>
<html>
<heaD>
<title></title>
</head>
<SCRIPT LANGUAGE="JavaScript">
<!--
function checkInput(signform) {
	if (!document.signform.user_name.value) {
		alert('이름을 입력하세요!');
		document.signform.user_name.focus();
		return;
	}
	signform.submit();
}

function initsize() {
	try {
		//self.resizeTo(document.body.scrollWidth, document.body.scrollHeight);
	} catch(e) {};
}
//-->
</SCRIPT>
<SCRIPT LANGUAGE="JavaScript"Src="/incs/javaEmbed/write.js"></SCRIPT>
<link rel=StyleSheet href='/style.css' type='text/css'>
<body topmargin="0" leftmargin="0" onload="initsize();">
<table cellpadding="0" cellspacing="0">
	<tR>
		<tD width="613" valign="top" align="center" bgcolor="#FFFFFF">

		<form name="signform" id="signform" method=post>

		<input type="hidden" name="urlinfo" value="<?=$urlinfo;?>">
		<input type="hidden" name="sel" value="<?=$sel;?>">

		<?include "../forms/unse_info.php";?>

<!-- =============================================================== -->
<div id="InPut">
		<table cellpadding="0" cellspacing="0">
			<tR>
				<tD><img src="/images/input_img/contentTITLE/dot.gif" align="absmiddle"><img src="/images/space.gif" width="10"><img src="/images/input_img/barbirth.jpg" border="0"></tD>
			</tR>	
			<tR>
				<tD height="9"></tD>
			</tr>
			<tr>
				<tD align="center"><img src="/images/input_img/bottom_top.gif"></tD>
			</tR>
			<tR>
				<tD align="center" style="background-image:url('/images/input_img/bottom_bg.gif'); background-repeat:repeat-y; background-position:center 0px;">
				<?if($sel == "1"){?>
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
				<?}else{?>
				<TABLE width=430 border=0 cellspacing=1 cellpadding=5 align=center bgcolor=CCCCCC>	                
					<tr>
						<td colspan=3 align=center bgcolor=FFE69D><font color=blue>아래에서 점사를 선택하세요...</font></td>
					</tr>				
					<TR>
						<TD bgcolor=FFF9E7 align=left valign=top width=120>
						<input type=radio name=what value='계획사' checked> 계획사<br>
						<input type=radio name=what value='구재,구물사'> 구재,구물사<br>
						<input type=radio name=what value='매매사'> 매매사 <br>
						<input type=radio name=what value='태아성별사'> 태아성별사<br>
						<input type=radio name=what value='승부(필승좌법)'> 승부(필승좌법)	<br>
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

				echo "<br>";

				include "../forms/input_form.php";
				?>
				</tD>
			</tR>
			<tr>
				<tD align="center"><img src="/images/input_img/bottom_bottom.gif"></tD>
			</tR>
			<tR>
				<tD height="55" align="center" style="padding:4px;">
				<?
				if($_COOKIE['usenum'] != 0 || $request_mode == "free" || $_COOKIE['admin'] == "1"){
					
					if($moneyINFO_split == "free"){$request_mode = "free";}else{$request_mode = "member";}
					If($_COOKIE['admin'] == "1"){$request_mode = "free";}
				?>
				<a href="#" onClick="requestPay('<?=$request_mode;?>','<?=$moneyINFO_split;?>','<?=$conINFO_split;?>','<?=$sel;?>','<?=$urlinfo;?>');return false"><img src="/images/input_img/resultbutton.gif" border="0"></a>
				<?}else{?>
				<a href="#" onClick="requestPay('hand','<?=$moneyINFO_split;?>','<?=$conINFO_split;?>','<?=$sel;?>','<?=$urlinfo;?>');return false"><img src="/images/input_img/handbutton.gif" border="0"></a>&nbsp;&nbsp;
				<a href="#" onClick="requestPay('ars','<?=$moneyINFO_split;?>','<?=$conINFO_split;?>','<?=$sel;?>','<?=$urlinfo;?>');return false"><img src="/images/input_img/arsbutton.gif" border="0"></a>&nbsp;&nbsp;
				<a href="#" onClick="requestPay('card','<?=$moneyINFO_split;?>','<?=$conINFO_split;?>','<?=$sel;?>','<?=$urlinfo;?>');return false"><img src="/images/input_img/card_btn.jpg" border="0"></a>&nbsp;&nbsp;
				<a href="/process/join.php?urlinfo=join&sel=1"><img src="/images/input_img/joinbutton.gif" border="0"></a>
				<?}?>
				</tD>
			</tr>
			<?include "../incs/iyong.php";?>
		</table>
</div>
<div id="resultIMG" align="center"></div>
<div id="result" align="center"></div>
<!-- =============================================================== -->

		</form>
		</tD>
	</tR>
</table>
</body>
</html>
<?include "../incs/form_foot.php";?>
