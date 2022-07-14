<?
If($Tsex == 1){
	$choie_data = "DB_data_m";
}Else{
	$choie_data = "DB_data_w";
}

$sql = "select ".$choie_data." as result_var, DB_numerical from T023 where DB_express = '".$serial_no."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_T023 = stripslashes($row[result_var]);
	$Tb_T023_numerical = stripslashes($row[DB_numerical]);
}

$Tb_T023= str_replace(chr(10), "<BR>", $Tb_T023);
?>