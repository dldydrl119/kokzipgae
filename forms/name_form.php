<?include_once "../incs/comm_form.php";?>
<html>
<heaD>
<title></title>
</head>
<SCRIPT LANGUAGE="JavaScript">
<!--
function initsize() {
	try {
		//self.resizeTo(document.body.scrollWidth, document.body.scrollHeight);
	} catch(e) {};
}

function checkInput(signform) {
	signform.submit();      
}

function searchHan(ref) {
	var frm = document.getElementById("signform");

	switch(ref){
		case "name_1" :
			var ref_var = frm.name_1;
			break;
		case "name_2" :
			var ref_var = frm.name_2;
			break;
		case "name_3" :
			var ref_var = frm.name_3;
			break;
		case "name_4" :
			var ref_var = frm.name_4;
			break;
		case "name_5" :
			var ref_var = frm.name_5;
			break;
	 }

      if(!ref_var.value || (ref_var.value<"가") || (ref_var.value>"힣")) {
         alert('한글성명자를 입력하신 후에 확인하세요!');
         ref_var.focus();
         return;
      } else {
         refurl = "/forms/another_form/search_han.php?refcon="+ref_var.value+"&refname="+ref;

         var window_left = (screen.width-640)/2;
         var window_top = (screen.height-480)/2;
         window.open(refurl,"checkhangulWin",'width=500,height=400,status=no,scrollbars=yes, top=' + window_top + ',left=' + window_left + '');
      }
}
//-->
</SCRIPT>
<SCRIPT LANGUAGE="JavaScript"Src="/incs/javaEmbed/write.js"></SCRIPT>
<link rel=StyleSheet href='/style.css' type='text/css'>
<body topmargin="0" leftmargin="0" onload="initsize();">
<table cellpadding="0" cellspacing="0">
	<tR>
		<tD width="613" valign="top" align="center" bgcolor="#FFFFFF">

		<form name="signform" id="signform" method=post style="display : inline;">

		<input type="hidden" name="urlinfo" value="<?=$urlinfo;?>">
		<input type="hidden" name="sel" value="<?=$sel;?>">

		<?include "../forms/unse_info.php";?>

<!-- =============================================================== -->
<div id="InPut">
		<table cellpadding="0" cellspacing="0">
			<?if($sel != "6" && $sel != "7"){?>
			<tR>
				<tD><img src="/images/input_img/contentTITLE/dot.gif" align="absmiddle"><img src="/images/space.gif" width="10"><img src="/images/input_img/barbirth.jpg" border="0"></tD>
			</tR>	
			<tR>
				<tD height="9"></tD>
			</tr>
			<?}?>
			<tr>
				<tD align="center"><img src="/images/input_img/bottom_top.gif"></tD>
			</tR>
			<tR>
				<tD align="center" style="background-image:url('/images/input_img/bottom_bg.gif'); background-repeat:repeat-y; background-position:center 0px;">
				<?
				switch($sel){
					case "6" :
						include "../forms/another_form/name_plus_form_6.php";
						break;
					case "7" :
						include "../forms/another_form/name_plus_form_7.php";
						break;
					default : 
						switch($sel){
							case "1" :
								$showInputFN2 = "0";

								$showInputNN2 = "0";
								$showInputNN3 = "0";

								break;
							case "2" :
								$showInputFN2 = "0";

								$showInputNN2 = "1";
								$showInputNN3 = "0";

								break;
							case "3" :
								$showInputFN2 = "0";

								$showInputNN2 = "1";
								$showInputNN3 = "1";

								break;
							case "4" :
								$showInputFN2 = "1";

								$showInputNN2 = "0";
								$showInputNN3 = "0";

								break;
							case "5" :
								$showInputFN2 = "1";

								$showInputNN2 = "1";
								$showInputNN3 = "0";

								break;
						}
				?>
				<table width=430 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
					<tr bgcolor=f8f8f8>
						<td align=center width=90>구분</td>
						<td align=center>성1</td>
<?if($showInputFN2 == "1"){?><td align=center>성2</td><?}?>
						<td align=center>이름1</td>
<?if($showInputNN2 == "1"){?><td align=center>이름2</td><?}?>
<?if($showInputNN3 == "1"){?><td align=center>이름3</td><?}?>
					</tr>							
					<tr>
						<td bgcolor=f8f8f8 align=center>한자변환</td>
						<td bgcolor=FFFFFF align=center><input type=text  name=name_1 value="<?=$name22_1;?>" maxlength=1 size=2>&nbsp;&nbsp;<input type=button value=한자 onclick="javascript:searchHan('name_1')" onfocus=this.blur();></td>
<?if($showInputFN2 == "1"){?><td bgcolor=FFFFFF align=center><input type=text  name=name_2 value="<?=$name22_2;?>" maxlength=1 size=2>&nbsp;&nbsp;<input type=button value=한자 onclick="javascript:searchHan('name_2')" onfocus=this.blur();></td><?}?>
						<td  bgcolor=FFFFFF align=center><input type=text  name=name_3 value="<?=$name22_3;?>" maxlength=1 size=2>&nbsp;&nbsp;<input type=button value=한자 onclick="javascript:searchHan('name_3')" onfocus=this.blur();></td>
<?if($showInputNN2 == "1"){?><td  bgcolor=FFFFFF align=center><input type=text  name=name_4 value="<?=$name22_4;?>" maxlength=1 size=2>&nbsp;&nbsp;<input type=button value=한자 onclick="javascript:searchHan('name_4')" onfocus=this.blur();></td><?}?>
<?if($showInputNN3 == "1"){?><td  bgcolor=FFFFFF align=center><input type=text  name=name_5 value="<?=$name22_4;?>" maxlength=1 size=2>&nbsp;&nbsp;<input type=button value=한자 onclick="javascript:searchHan('name_5')" onfocus=this.blur();></td><?}?>
					</tr>

					<input type=hidden name=hangul_1 value='<?=$hangul1;?>'>
					<input type=hidden name=hangul_2 value='<?=$hangul2;?>'>
					<input type=hidden name=hangul_3 value='<?=$hangul3;?>'>
					<input type=hidden name=hangul_4 value='<?=$hangul4;?>'>
					<input type=hidden name=hangul_5 value='<?=$hangul5;?>'>
					
					<input type=hidden name=showInputFN2 value='<?=$showInputFN2;?>'>
					<input type=hidden name=showInputNN2 value='<?=$showInputNN2;?>'>
					<input type=hidden name=showInputNN3 value='<?=$showInputNN3;?>'>
				</table>

				<br>
				<?
				}

				if($sel != "7"){
					include "../forms/input_form.php";
				}
				?>
				</tD>
			</tR>
			<tr>
				<tD align="center"><img src="/images/input_img/bottom_bottom.gif"></tD>
			</tR>
			<tR>
				<tD align="center" style="padding:4px;">
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
