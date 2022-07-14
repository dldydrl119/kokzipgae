<?
$StrVar1111 = str_replace("<font color=blue>", "", $my_oheng_day_h);
$StrVar1111 = str_replace("<font color=red>", "", $StrVar1111);
$StrVar1111 = str_replace("<b>-</b>", "", $StrVar1111);
$StrVar1111 = str_replace("<b>+</b>", "", $StrVar1111);
$StrVar1111 = str_replace("</font>", "", $StrVar1111);

switch($StrVar1111){
	Case "목" : $serial = 1; break;
	Case "화" : $serial = 2; break;
	Case "토" : $serial = 3; break;
	Case "금" : $serial = 4; break;
	Case "수" : $serial = 5; break;
	default : $serial = 1; break;
}

If ($serial == 0) {$serial = 1;}

$sql = "select DB_data from T028 where DB_num = '".$serial."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_T028 = stripslashes($row[DB_data]);
}

$Tb_T028 =  str_replace("◐","▣", $Tb_T028);
?>