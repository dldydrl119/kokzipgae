
<?


$sql ="SELECT DB_data FROM S088 WHERE DB_express = '".$data_array[$nam2]."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S088 = stripslashes($row[DB_data]);
}
?>


