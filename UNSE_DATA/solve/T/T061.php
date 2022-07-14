<?

//Tb_T061= rs("DB_data") &"<BR><br>"& rs("DB_data_1")


If($my_day_h == ""){$my_day_h = "甲";}

$sql = "select DB_data, DB_data_1 from T061 where DB_express like '%".$my_day_h."%'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_T061aa = stripslashes($row[DB_data]);
	$Tb_T061bb = stripslashes($row[DB_data_1]);
}

$Tb_T061 = $Tb_T061aa."<br><br>".$Tb_T061bb;

?> 