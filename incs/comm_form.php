<?
$urlinfo = $_REQUEST["urlinfo"];
$sel = $_REQUEST["sel"];

if($urlinfo == ""){
	$urlinfo = explode("/", $PHP_SELF);
}

include_once "../incs/function.php";

$v_strFname = "../data/moneyDATA.dat";

// include_once "../incs/info.php";
// include_once "../incs/now_info.php";

$arr_adminInfo = f_Arr_readAdmin($v_strFname);

$moneyINFO = explode("|", $arr_adminInfo[$moneyNUM]);
$conINFO = explode("|", $arr_adminInfo[$moneyNUM+12]);

$menuNAME_split = explode("|", $menuNAME);
$menuURL_split = explode("|", $menuURL);

$moneyINFO_split = $moneyINFO[$sel-1];
$conINFO_split = preg_replace("//", "", $conINFO[$sel-1]);

// 임시 추가한 코드
// \n 을 제거
$conINFO_split = preg_replace("/\n/", "", $conINFO_split);
?>