
<script language="javascript">
<!--
function bookmark()
{
	window.external.AddFavorite('http://<?=$_SERVER['HTTP_HOST']?>', '운세사이트')
}
function taltoi()
{
	open('/workboarddla/memquit.asp?ref=<?=$_SERVER['HTTP_HOST']?>','tal','width=500,height=400')
}
//-->
</script>

<table cellpadding="0" cellspacing="0" align="center" width="954" height="148" style="background-image:url('/images/foot.jpg');background-repeat: no-repeat">
<tr>
<td height="46"></td>
</tr>
<tr>
<td style="padding-left:190px;"><font color="#878787"><?=$enterInfo_split[0];?></font></td>
</tr>
<tr>
<td style="padding-left:190px;"><font color="#878787"><?=$enterInfo_split[1];?></font></td>
</tr>
<tr>
<td style="padding-left:190px;"><font color="#878787"><?=$enterInfo_split[2];?></font></td>
</tr>
<tr>
<td height="14"></td>
</tr>
<tr>
<td style="padding-left:190px;">&nbsp;
<img src="/error_check/img/error_hadan.jpg" border="0" usemap="#error_hadan">
<map name="error_hadan">
<area shape="rect" coords="66,0,175,18" href="javascript:taltoi('0')" onfocus="blur()">
<area shape="rect" coords="537,19,686,35" href="javascript:taltoi('1')" onfocus="blur()">
</map>
</td>
</tr>
<tr>
<td height="10"></td>
</tr>
</table>

<script>
	function taltoi(site_qna_var){open('/error_check/error_check.asp?urltemp=php&ref=<?=$_SERVER["HTTP_HOST"]?>&site_qna_var='+site_qna_var,'tal','width=500,height=400')}

</script>
<script language="javascript">
<!--
if (navigator.appName != "Microsoft Internet Explorer")
{
	alert('<?=$_SERVER["SERVER_NAME"];?>에서는 현재 Explorer 버전 7.0까지 지원되고 있습니다.\n\n기타 브라우져 ( Firefox, Safari, Opera 등 ) 에서는 사이트 이용에 제한이 있을 수 있습니다.\n\n정상적인 사이트 이용을 위해 Explorer 을 권장합니다.\n\n감사합니다.');
}
//-->
</script>

