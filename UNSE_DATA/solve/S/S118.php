

<?

$sql = "SELECT DB_data FROM S118 WHERE DB_express = '". $serial_no * 1 ."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S118 = stripslashes($row[DB_data]);
}
?> 