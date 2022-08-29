<?
$dbHost = '';
$dbUser = '';
$dbPass = '';
$dbName = '';


/// db 관련 함수 -- 시작
$gloDbCon;
function DbClose()
{
//	global $gloDbCon;
//	if(!$gloDbCon) return;
//	mysql_close($gloDbCon);
//	$gloDbCon = 0;
}
function DbConnect()
{
	global $gloDbCon,$dbHost,$dbUser,$dbPass,$dbName;
	if($gloDbCon) return;
	$gloDbCon = @mysql_connect($dbHost,$dbUser,$dbPass);
	if(!$gloDbCon) { echo('db connect error!');exit; };
	if(!@mysql_select_db($dbName)) { echo('db select error!'); DbClose(); exit; };
}
/// db 관련 함수 -- 끝

DbConnect(); // db 연결, 여러 번 호출해도 1번만 연결함.


$fontcolor = "color:#666666; text-align:center; ";

$include_bottom_Top_C2 = "<tR><td style='padding-top:15px; padding-bottom:15px;' align='center'><img src='/UNSE_DATA/images/btn_img/btn_B2_up_arraw.jpg' border='0' usemap='#Top'></td></tr>";

?>
