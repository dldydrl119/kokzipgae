<?
//header('P3P: CP="NOI CURa ADMa DEVa TAIa OUR DELa BUS IND PHY ONL UNI COM NAV INT DEM PRE"');

include_once "../one/one.php";

$mode = $_REQUEST["mode"];
$money = $_REQUEST["money"];
$con = $_REQUEST["con"];

switch($mode){
	case "member" :
		$mm_how = ($_COOKIE['usenum'])*1 - 1;

		if($_COOKIE["username"] !="doll611dddddd") {
			if($mm_how < 0){
				$javascriptS = "alert('사용가능한 횟수가 없습니다.');opener.location.href='/process/pluspay.php?urlinfo=join&sel=3';";
			}else{
				$sql = "update ".$tbname." set m_how = ".$mm_how." where m_userID = '".$_COOKIE['userid']."'";
				mysql_query($sql);

				$javascriptS = "parent.F_result();";
			}
			SetCookie("usenum",$mm_how, 0, "/",".gilun.com");
		}
		break;
	case "free" :
		$javascriptS = "parent.F_result();";

		break;
	default :
		$javascriptS = "window.open('/x2_write.php?paymode=".$mode."&money=".$money."&fsize=ars&con=".$con."','result_var','width=640, height=600, scrollbars=no');";

		break;
}


echo "<script>".$javascriptS."</script>\n";

//pay_mode=x2_write
?>
