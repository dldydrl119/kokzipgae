<?
$sql = "select day_e from mansedata where no = '".date('Ymd')."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$day_e = stripslashes($row[day_e]);
}

$unmyung = $my_hour_e_org + $day_e;

If($my_hour_e_org == date("t")){
	$unmyung = 1;
} 

$sql = "Select DB_data from S121 where DB_express = '".$unmyung."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S121 = stripslashes($row[DB_data]);
}
?>