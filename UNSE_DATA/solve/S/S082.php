<?
$sql ="select DB_data from S082 where DB_express = '". F_gabza_str($my_day_h) ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S082 = stripslashes($row[DB_data]);
}
?>
