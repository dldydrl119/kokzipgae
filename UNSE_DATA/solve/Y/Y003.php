<?
if ($sex == '남') {$choie_data = "DB_data_m";}else{$choie_data = "DB_data_w";}

$sql = "SELECT ".$choie_data." as result_var, DB_numerical FROM Y003 WHERE DB_express like '".$my_day_e."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_Y003 = stripslashes($row[result_var]);
	$Tb_Y003_numerical = stripslashes($row[DB_numerical]);

}



?>