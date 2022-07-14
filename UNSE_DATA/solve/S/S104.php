
<?


$sql = "SELECT DB_data FROM S104 WHERE DB_express = '". $cut_tot ."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S104 = stripslashes($row[DB_data]);
}
 
?>