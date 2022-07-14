
<script language="javascript" src="http://www.84yo84yo.com/incs/javaEmbed/write.js"></script>
<textarea id="sound" style="display:none;">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="156" height="19">
<param name="movie" value="/swf/music.swf">
<param name=quality value=high>
</object>
</textarea>

<table width="954" cellpadding="0" cellspacing="0" align="right" border="0">
<div id="div_day_bg" style="position:absolute; z-index:1;">
<div id="div_big" style="position:relative; z-index:3; width:469px; height:22px; top:8px; left:30px;"><img src="/images/login_img/login_info.jpg" border="0"></div>
</div>

<tr>
<td colspan="4" height="7"></td>
</tr>
<?if($_COOKIE['userid'] == "")
	{
		if(!$_GET[PreURL]) $_GET[PreURL] = base64_encode($_SERVER[REQUEST_URI]);
?>

<script>
function formcheck()
{
	f = document.index;
	if(f.userid.value=="")
	{
		alert("아이디를 입력하세요.");
		f.userid.focus();
		return;
	}
	if(f.pw.value=="")
	{
		alert("비밀번호를 입력하세요.");
		f.pw.focus();
		return;
	}
	f.submit();
}
</script>
<form name="index" method="post" action="/process/login.php" style="display : inline;">
<input type="hidden" name="PreURL" value="<?=$_GET[PreURL]?>">
<tr>
<td width="530"></td>
<td width="110" style="font-size:11px; padding-top:1px;">ID <input type="input" name="userid" style="width:78px; height:18px;font-size:12px; font-family: 돋움 ; border:1px solid; border-color: #C2C2C2;;color:#101010;" maxlength="15"></td>
<td width="110" style="font-size:11px; padding-top:1px;">PW <input type="password" name="pw" style="width:78px; height:18px;font-size:12px; font-family: 돋움 ; border:1px solid; border-color: #C2C2C2;;color:#101010;" maxlength="15" OnKeyDown="if(event.keyCode==13){index.submit();}"></td>
<td>

<table cellpadding="0" cellspacing="0" align="right">
<tr>
<td style="padding-top:2px;"><A href="javascript:formcheck();"><img src="/images/login_img/login.gif" border="0"></a></td>
<td width="16"></td>
<td style="padding-top:2px;"><a href="javascript:void(top.location.href='/process/join.php?urlinfo=join&sel=1');"><img src="/images/login_img/join.gif" border="0"></a></td>
<td width="8"></td>
<td style="padding-top:2px;"><A href="javascript:void(window.open('/process/findpw.php', 'find', 'width=335, height=283'));"><img src="/images/login_img/findpw.gif" border="0"></a></td>
<td width="28"></td>
</tr>
</table>

</td>
</tr>
</form>
<?}elseif($_COOKIE['admin'] == "1"){?>
<tr>
<td width="535"></td>
<td width="210" style="padding-left:80px;padding-top:3px;">▶ 관리자 님 한해 소원 성취하세요~</td>
<td>

<table cellpadding="0" cellspacing="0" align="right">
<tr>
<td style="padding-top:2px;"><A href="/process/login.php?mode=logout"><img src="/images/login_img/logout.gif" border="0"></a></td>
<td width="16"></td>
<td style="padding-top:2px;"><a href="javascript:void(top.location.href='/admin/admin.php');"><img src="/images/login_img/admin.gif" border="0"></a></td>
<td width="28"></td>
</tr>
</table>

</td>
</tr>
<?}else{?>

<tr>
<td width="750" align="right" style="padding:0 0 0 47">▶ <?=$_COOKIE['username'];?> 님 소원성취하세요~ &nbsp;<font color="#FB5301"> <b>(<?=$_COOKIE['usenum'];?> 회)</b></font>&nbsp;&nbsp;</td>
<td>

<table cellpadding="0" cellspacing="0" align="right">
<tr>
<td style="padding-top:2px;"><A href="/process/login.php?mode=logout"><img src="/images/login_img/logout.gif" border="0"></a>&nbsp;</td>
<td width="8"></td>
<td style="padding-top:2px;"><a href="/process/modify.php"><img src="/images/login_img/modify.gif" border="0"></a>&nbsp;</td>
<td width="8"></td>
<!--td style="padding-top:2px;"><a href="/process/pluspay.php?urlinfo=join&sel=3"><img src="/images/login_img/pluspay.gif" border="0"></a>&nbsp;</td-->
<td width="28"></td>
</tr>
</table>

</td>
</tr>
<?}?>
<tr>
<td height="8" colspan="4"></td>
</tr>

</table>
