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
<SCRIPT LANGUAGE="JavaScript" Src="/incs/javaEmbed/write.js"></SCRIPT>
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
				<?include "../forms/input_form.php";?>

				<BR>

				<TABLE width=430 border=0 cellspacing=1 cellpadding=3 bgcolor=CCCCCC>
					<TR>
						<TD width="90" bgcolor=f8f8f8 align=center>예상구매일시</TD>
						<TD bgcolor=cceecc align=center>
						<select name=cyear>
						<?
						for ($i=1930; $i<2011;$i++) {
							echo ("<option value ='".$i."'>".$i."</option>");
						}
						?>
						</select>&nbsp;년
						<select name=cmonth>
						<?
						for ($i=1; $i<13;$i++) {
							echo ("<option value ='".$km[$i]."'>".$i."</option>");
						}
						?>
						</select>&nbsp;월
						<select name=cday>
						<?
						for ($i=1; $i<32;$i++) {
							echo ("<option value ='".$kd[$i]."'>".$i."</option>");
						}
						?>
						</select>&nbsp;일
						<select name=chour>
						<?
						for ($i=1; $i<25;$i++) {
							echo ("<option value ='".$kh[$i]."'> ".$i." 시</option>");
						}
						?>
						</select>
						<select name=cmin>
						<?
						for ($i=1; $i<61;$i++) {
							echo ("<option value ='".$kmi[$i]."'> ".$i." 분</option>");
						}
						?>
						</select></TD>
					</TR>
				</table>

				</tD>
			</tR>
			<tr>
				<tD align="center"><img src="/images/input_img/bottom_bottom.gif"></tD>
			</tR>
			<tR>
				<tD height="55" align="center" style="padding:4px;">
				<?
				if($_COOKIE['usenum'] != 0 || $_COOKIE['admin'] == "1"){

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
