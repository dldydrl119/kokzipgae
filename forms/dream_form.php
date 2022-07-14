<?
$urlinfo = $_REQUEST["urlinfo"];
$sel = $_REQUEST["sel"];

if($urlinfo == ""){
	$urlinfo = explode("/", $PHP_SELF);
}

include_once "../incs/function.php";
include_once "../incs/info.php";
include_once "../incs/now_info.php";

$menuNAME_split = explode("|", $menuNAME);
$menuURL_split = explode("|", $menuURL);

$dream_type = $_REQUEST["dream_type"];
$dream_name = $_REQUEST["dream_name"];
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
<table cellpadding="0" cellspacing="0">
	<tR>
		<tD width="613" valign="top" align="center" bgcolor="#FFFFFF">

		<form name="signform" id="signform" method=post style="display : inline;">

		<input type="hidden" name="urlinfo" value="<?=$urlinfo;?>">
		<input type="hidden" name="url" value="<?=$_SERVER["SERVER_NAME"];?>">
		<input type="hidden" name="urltemp" value="php">
		<input type="hidden" name="sel" value="<?=$sel;?>">
		<input type="hidden" name="dream_type" value="<?=$dream_type;?>">
		<input type="hidden" name="dream_name" value="<?=$dream_name;?>">
		<input type="hidden" name="nextresult" value="1">

		<?include "../forms/unse_info.php";?>
<div id="InPut" align="center"></div>
<div id="result" align="center"></div>
<div id="resultIMG" align="center"></div>
<!-- =============================================================== -->

		</form>
		</tD>
	</tR>
</table>
</body>
</html>
<?include "../incs/form_foot.php";?>
<SCRIPT LANGUAGE="JavaScript">
<!--
F_result2()
//-->
</SCRIPT>
