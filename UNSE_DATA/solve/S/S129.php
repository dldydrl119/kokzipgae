<?

$sql ="SELECT DB_data FROM S129 WHERE DB_express = '05". $total_to_03 ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S129 = stripslashes($row[DB_data]);
}

?> 