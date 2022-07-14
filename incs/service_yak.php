<?
$urlinfo = "index";
$sel = $_REQUEST["sel"];
$mode = $_REQUEST["mode"];

if($urlinfo == ""){
	$urlinfo = explode("/", $PHP_SELF);
}

include_once "../incs/function.php"; // FileRead 함수를 위해 추가

include_once "../incs/info.php";
include_once "../incs/now_info.php";

$menuNAME_split = explode("|", $menuNAME);
$menuURL_split = explode("|", $menuURL);

switch(mode){
	case "service" :
		$title = "서비스약관";
		$data = "serviceDATA.txt";
		break;
	case "private" :
		$title = "개인정보보호정책";
		$data = "privateDATA.txt";
		break;
}
?>
<html>
<heaD>
<title></title>
</head>
<SCRIPT LANGUAGE="JavaScript">
<!--
function initsize() {
	try {
		self.resizeTo(document.body.scrollWidth, document.body.scrollHeight);
	} catch(e) {};
}
//-->
</SCRIPT>
<link rel=StyleSheet href='/style.css' type='text/css'>
<body topmargin="0" leftmargin="0" onload="initsize();">
<table width="767" cellpadding="0" cellspacing="0">
	<tR>
		<tD width="5"></tD>
		<tD width="584" valign="top">
		<table cellpadding="0" cellspacing="0">
			<tR>
				<td colspan="2" style="padding-left:10px;" class="mtd"><img src="/images/input_img/contentTITLE/dot.gif" align="absmiddle">&nbsp;<font size="4"><B><?=$title;?></b></font></td>
			</tR>
			<tR>
				<TD height="3" colspan="2"></tD>
			</tR>
			<tr>
				<td align="Center" style="padding-left:1px;"><img src="/images/sub_img/etc_bg_top.gif"></tD>
			</tR>
			<tr>
				<TD style="background-image:url('/images/sub_img/etc_bg_middle.gif');background-repeat:repeat-y;background-position:center 0px;">
				<TABLE align="center"cellpadding="0" cellspacing="0" border="0">
					<tr>
						<tD width="170" valign="top" align="center" style="padding-top:10px;"><img src="/images/service_yak.jpg"></tD>
						<tD width="414" style="padding-top:20px;"><pre><?if($mode == "service"){?><?
//include "../data/serviceDATA.txt";
echo FileRead("../data/serviceDATA.txt"); // 이 함수는 확장자 .dat .txt 파일만 출력

?><?}else{?><?

//include "../data/privateDATA.txt";
echo FileRead("../data/privateDATA.txt"); // 이 함수는 확장자 .dat .txt 파일만 출력

?><?}?></pre></tD>
					</tR>
				</table>
				</tD>
			</tR>
			<tR>
				<tD align="Center" style="padding-left:1px;"><img src="/images/sub_img/etc_bg_bottom.gif"></tD>
			</tR>
		</table>
		</tD>
		<tD width="151" valign="top"><?include "../incs/right.php";?></tD>
		<tD width="5"></tD>
	</tR>
</table>
</body>
</html>
