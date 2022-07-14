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

<?if($sel != "2" && $sel != "6"){?>
		<form name="signform" id="signform" method=post>

		<input type="hidden" name="urlinfo" value="<?=$urlinfo;?>">
		<input type="hidden" name="sel" value="<?=$sel;?>">
<?}?>	

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
					case "2" :
						include "another_form/jum_plus_form_2.php";
						break;
					case "6" :
						include "another_form/jum_plus_form_6.php";
						break;
				}

				if($sel != "2" && $sel != "6"){
					include "input_form.php";
				}
				?>
				</tD>
			</tR>
			<tr>
				<tD align="center"><img src="/images/input_img/bottom_bottom.gif"></tD>
			</tR>
			<?if($sel != "2" && $sel != "6"){?>
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
				<a href="/process/join.php?urlinfo=join&sel=1"><img src="/images/input_img/joinbutton.gif" border="0"></a>
				<?}?>
				</tD>
			</tr>
			<?}else{?>
			<tR>
				<tD height="55" align="center" style="padding:4px;">
<div id="show3" name="show3" style="display:none;">
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
</div>
				</tD>
			</tr>
			<?}?>
			<?include "../incs/iyong.php";?>
		</table>
</div>
<div id="resultIMG" align="center"></div>
<div id="result" align="center"></div>
<!-- =============================================================== -->

<?if($sel != "2" && $sel != "6"){?>
		</form>
<?}?>	
		</tD>
	</tR>
</table>
</body>
</html>
<?include "../incs/form_foot.php";?>
