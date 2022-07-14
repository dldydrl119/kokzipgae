
<?


$sql ="SELECT DB_data FROM S092 WHERE DB_express = '". $data_array[$nam] ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S092 = stripslashes($row[DB_data]);
}


?>


