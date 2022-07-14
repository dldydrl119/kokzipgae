<?
/*$dbHost = '211.233.14.88';
$dbUser = 'ntmunse';
$dbPass = 'ntmunse7042217';
$dbName = 'ntmUnse';
$tbname = 'member';*/

$dbHost = '211.47.74.10';
$dbUser = 'kokzipgaedev';
$dbPass = 'a123456789!';
$dbName = 'dbkokzipgaedev';
$tbname = 'b2_member';


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
	$gloDbCon = mysql_connect($dbHost,$dbUser,$dbPass);
	if(!$gloDbCon) { echo('db connect error!');exit; };
	if(!mysql_select_db($dbName)) { echo('db select error!'); DbClose(); exit; };
}
/// db 관련 함수 -- 끝

DbConnect(); // db 연결, 여러 번 호출해도 1번만 연결함.
?>