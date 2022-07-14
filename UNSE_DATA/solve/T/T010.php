<?
switch($my_year_e_org){
	Case "01" :
	case "03" :
	case "05" : $werewf1 = 1; break;
	Case "06" :
	case "07" :
	case "11" : $werewf1 = 2; break;
	Case "02" :
	case "04" :
	case "09" : $werewf1 = 3; break;
	default : $werewf1 = 4; break;
} 

$serial = $my_year_e_org * $werewf1;

$sql = "Select DB_data from T010 where DB_express = '".$serial."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_T010 = stripslashes($row[DB_data]);
}

$Tb_T010= str_replace(chr(10),"<BR>", $Tb_T010);
?>