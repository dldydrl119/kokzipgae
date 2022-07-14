<?
$urlinfo = "free";
$sel = "7";

if($urlinfo == ""){
	$urlinfo = explode("/", $PHP_SELF);
}

include_once "../incs/function.php";

$v_strFname = "../data/etcDATA.dat";

include_once "../incs/info.php";
include_once "../incs/now_info.php";

$arr_adminInfo = f_Arr_readAdmin($v_strFname);

$menuNAME_split = explode("|", $menuNAME);
$menuURL_split = explode("|", $menuURL);

$caseNum = "19";
?>
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
//-->
</SCRIPT>
<SCRIPT LANGUAGE="JavaScript"Src="/incs/javaEmbed/write.js"></SCRIPT>
<link rel=StyleSheet href='/style.css' type='text/css'>
<body topmargin="0" leftmargin="0" onload="initsize();">

<table cellpadding="0" cellspacing="0" border="0" align="center">
	<tR>	
		<td colspan="3"><img src="/images/top_1.jpg" border="0" usemap="#top_1"><BR><img src="/images/top_2.jpg" border="0" usemap="#top_2"></tD>
	</tR>
	<tR>
		<Td valign="top">
		<table cellpadding="0" cellspacing="0">
			<tR>
				<tD width="613" valign="top" align="center" bgcolor="#FFFFFF">
				<form name="signform" id="signform" method=post>

				<input type="hidden" name="urlinfo" value="<?=$urlinfo;?>">
				<input type="hidden" name="sel" value="1">
				<input type="hidden" name="nextresult" value="1">

				<?include "../forms/unse_info.php";?>
		<div id="InPut" align="center"></div>
		<div id="resultIMG" align="center"></div>
		<div id="result" align="center"></div>
		<!-- =============================================================== -->

				</form>
				</tD>
				<tD valign="top" bgcolor="#EBEBEB"><?include "../incs/left.php";?><BR><img src="/images/right_bottom.jpg" border="0"></tD>
			</tR>
		</table>
		</td>
	</tR>
	<tR>
		<Td colspan="3"><?include "../incs/foot.php";?></tD>
	</tr>
</table>
</body>
</html>
<?include "../incs/form_foot.php";?>
<SCRIPT LANGUAGE="JavaScript">
<!--
F_result2()
//-->
</SCRIPT>
