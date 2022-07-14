
<?
$sql ="select DB_data from S026 where DB_express = '". $yong_to_sibsin ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S026 = stripslashes($row[DB_data]);
}

?> 