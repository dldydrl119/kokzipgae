<?
//@header("P3P : CP=\"ALL CURa ADMa DEVa TAIa OUR BUS IND PHY ONL UNI PUR FIN COM NAV INT DEM CNT STA POL HEA PRE LOC OTC\""); 
//@header('P3P: CP="NOI CURa ADMa DEVa TAIa OUR DELa BUS IND PHY ONL UNI COM NAV INT DEM PRE"');

include_once "../incs/comm_form.php";
?>
<html>
<heaD>
<title></title>
</head>
<SCRIPT LANGUAGE="JavaScript">
function checkInput(signform) {
	var count_sex = 0;
	
	for(i=0; i < 2; i++)
        {
                if(signform.sex[i].checked == true)
                {
                        count_sex += 1;
                }
        }

        if (count_sex == 0 ) 
        {
                alert('남,녀를 구분해 주세요!');
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
<body topmargin="0" leftmargin="0" onload="initsize();" style="background-color:transparent">
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
				<tD height="10"><img src="/images/underbar.jpg"></tD>
			</tR>
			<tR>
				<tD height="9"></tD>
			</tr>
			<tr>
				<tD align="center"><img src="/images/input_img/bottom_top.gif"></tD>
			</tR>
			<tR>
				<tD align="center" style="background-image:url('/images/input_img/bottom_bg.gif'); background-repeat:repeat-y; background-position:center 0px;">
				
				<table width=430 border=0 cellspacing=1 cellpadding=5 align=center>
				  <tr><td align=center><img src=/images/result_img/faceface_img/man.gif></td><td align=center><img src=/images/result_img/faceface_img/women.gif></td></tr>
				  <tr><td align=center><input type=radio name=sex value='남'> 남자</td><td align=center><input type=radio name=sex value='여'> 여자</td></tr>
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
				<?}?></tD>
			</tr>
			<?include "../incs/iyong.php";?>
		</table>
</div>
<div id="paymode" align="center"></div>
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
