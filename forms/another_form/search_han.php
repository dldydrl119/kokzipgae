<?
$refcon =  $_REQUEST["refcon"];
$refname = $_REQUEST["refname"];
?>
<html>
<head>
<title>한자변환</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
</head>
<SCRIPT LANGUAGE="JavaScript">
function finish(hanja,hangul,refname,what) {
	switch(refname){
		case "name_1" :
			window.opener.document.signform.name_1.value=hanja;
			window.opener.document.signform.hangul_1.value=hangul;
			window.opener.document.signform.what_1.value=what;
			window.opener.document.signform.hanja_1.value=hanja;
			break;
		case "name_2" :
			window.opener.document.signform.name_2.value=hanja;
			window.opener.document.signform.hangul_2.value=hangul;
			window.opener.document.signform.what_2.value=what;
			window.opener.document.signform.hanja_2.value=hanja;
			break;
		case "name_3" :
			window.opener.document.signform.name_3.value=hanja;
			window.opener.document.signform.hangul_3.value=hangul;
			window.opener.document.signform.what_3.value=what;
			window.opener.document.signform.hanja_3.value=hanja;
			break;
		case "name_4" :
			window.opener.document.signform.name_4.value=hanja;
			window.opener.document.signform.hangul_4.value=hangul;
			window.opener.document.signform.what_4.value=what;
			window.opener.document.signform.hanja_4.value=hanja;
			break;
		case "name_5" :
			window.opener.document.signform.name_5.value=hanja;
			window.opener.document.signform.hangul_5.value=hangul;
			window.opener.document.signform.what_5.value=what;
			window.opener.document.signform.hanja_5.value=hanja;
			break;
	}

self.close();
}
</SCRIPT>
<style>
.mainscollvar{
 scrollbar-face-color:#FFFFFF;			/* 스크롤 바 바닥, 얼굴, 안색 */ 
 scrollbar-3dlight-color:#D4D0C8;			/* 왼 쪽 바깥 테, 빛, 밝음 */ 
 scrollbar-highlight-color:#D4D0C8;		/* 왼 쪽 안쪽 테, 가장 밝은 부분 */ 
 scrollbar-shadow-color:#D4D0C8;		/* 오른쪽 안쪽 테, 그림자 */ 
 scrollbar-darkshadow-color:#D4D0C8;	/* 오른쪽 바깥 테, 어두운그림자 */ 
 scrollbar-track-color:#DDDDDD;			/* 바 닥, 통로, 진로 */ 
 scrollbar-arrow-color:#7F7F7F;			/* 삼 각 형, 화살모양 */
 }
</style>
<link rel=StyleSheet href='/style.css' type='text/css'>
<body bgcolor=ffffff topmargin="0" leftmargin="0">            
<div id="div_day_bg" style="position:absolute; z-index:2; top:17px; left:213px;"><input type="text" value="<?=$refcon?>" style="width:22px; height:22px; padding:4px;  border:1px solid #999999;"></div>
<div name="search_han" style="position:absolute; width:297px; height:165px; z-index:1; overflow-y:auto; top:120px; left:18px;" class="mainscollvar">
<table width="271" height="165" cellpadding="0" cellspacing="0">
	<tR>
		<td bgcolor="#CCCCCC" height="1" colspan="9"></tD>
	</tr>
<?
########## 데이터베이스에 연결한다.#########
include_once "../../one/one.php";
include_once "../../UNSE_DATA/common/function.php";
########## 입력한 한글과 동일한 한글이 존재하는지 확인한다. ##########

$sungOption_var = F_right($refname, 1);

If($sungOption_var == "1"){$plus_sql = " and sungOption = 'Y' ";}

$sql = "SELECT * FROM namedata WHERE hanjawin <> '' and hangul =  '$refcon' and newold = 0 ".$plus_sql." order by newold,hanjano";

$query = mysql_query($sql);
$all = mysql_affected_rows();

	###########################################################
	if (!$all) {
		echo "<font color=red size=2><b>한자가 없는 글자입니다.</b></b>";
	}else{

			for ($i = 0 ; $i<$all; $i++)
			{
				mysql_data_seek($query,$i);
				$row = mysql_fetch_array($query);
				$hanja = stripslashes($row[hanjawin]);
				$hangul = stripslashes($row[hangul]);
				$what = stripslashes($row[what]);
	?>
	<tr>
		<td width="1" bgcolor="#CCCCCC"></tD>
		<tD width="63" height="40" align="center"><font color="082D44" style="font-size:25px;"><?=$hanja;?></td>
		<td width="1" bgcolor="#CCCCCC"></tD>
		<tD width="112" height="40" align="center"><?=$what;?></td>
		<td width="1" bgcolor="#CCCCCC"></tD>
		<tD width="38" height="40" align="center"><?=$hangul;?></td>
		<td width="1" bgcolor="#CCCCCC"></tD>
		<td align="center"><input type="radio" name="check<?=$i?>" onclick="finish('<?=$hanja;?>','<?=$hangul;?>','<?=$refname;?>','<?=$what?>')"></td>
		<td width="1" bgcolor="#CCCCCC"></tD>
	</tr>
	<tR>
		<td bgcolor="#CCCCCC" height="1" colspan="9"></tD>
	</tr>
<?
		}
}
?>
</table>
</div>
<img src="/UNSE_DATA/images/search_han/hanja_search_bg.jpg">
</body>
</html>