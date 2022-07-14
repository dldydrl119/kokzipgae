<?

/*switch($my_day_e){
	Case "寅" : 
	case "卯" : $serial = 2; break;
	Case "巳" : 
	case "午" : $serial = 3; break;
	Case "申" : 
	case "酉" : $serial = 6; break;
	Case "子" : 
	case "亥" : $serial = 7; break;
	Case "辰" : $serial = 1; break;
	Case "未" : $serial = 4; break;
	Case "戌" : $serial = 5; break;
	Case "丑" : $serial = 8; break;
}*/


$serial = 8;
if($my_day_e=="寅"||$my_day_e=="卯"){$serial = 2;}
if($my_day_e=="巳"||$my_day_e=="午"){$serial = 3;}
if($my_day_e=="申"||$my_day_e=="酉"){$serial = 6;}
if($my_day_e=="子"||$my_day_e=="亥"){$serial = 7;}
if($my_day_e=="辰"){$serial = 1;}
if($my_day_e=="未"){ $serial = 4;}
if($my_day_e=="戌"){$serial = 5;}
if($my_day_e=="丑"){$serial = 8;}

$serial = $serial + 1;
If ($serial > 8 ) {$serial = 1;}


$sql = "SELECT DB_data FROM J048 WHERE DB_num = '".$serial."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_J048 = stripslashes($row[DB_data]);
}


$Tb_J048 = str_replace("◐", "▣", $Tb_J048);
?>