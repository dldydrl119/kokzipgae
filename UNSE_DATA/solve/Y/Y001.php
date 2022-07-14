<?
$sql = "SELECT DB_data FROM Y001 WHERE DB_express = '".$Xyeargi."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_Y001 = stripslashes($row[DB_data]);

}
?>