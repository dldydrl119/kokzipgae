<?
$serial = F_ohengSearch($my_day_e_org);

$sql = "select DB_data from T035 where DB_express = '".$serial."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_T035 = stripslashes($row[DB_data]);
}

$Tb_T035 =  str_replace(chr(10), "<BR>",$Tb_T035);
?>