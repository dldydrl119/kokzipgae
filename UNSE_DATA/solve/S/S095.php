<?
switch($my_day_h_org){
	Case "A" :  $cnt_var = 1; break;
	Case "B" :  $cnt_var = 2; break;
	Case "C" :  $cnt_var = 3; break;
	Case "D" :  $cnt_var = 4; break;
	Case "E" :  $cnt_var = 5; break;
	Case "F" :  $cnt_var = 6; break;
	Case "G" :  $cnt_var = 7; break;
	Case "H" :  $cnt_var = 8; break;
	Case "I" :  $cnt_var = 9; break;
}

switch($temp_03){
	Case "A" :  $cnt_var2 = 1; break;
	Case "B" :  $cnt_var2 = 2; break;
	Case "C" :  $cnt_var2 = 3; break;
	Case "D" :  $cnt_var2 = 4; break;
	Case "E" :  $cnt_var2 = 5; break;
	Case "F" :  $cnt_var2 = 6; break;
	Case "G" :  $cnt_var2 = 7; break;
	Case "H" :  $cnt_var2 = 8; break;
	Case "I" :  $cnt_var2 = 9; break;
}

$total_var = ($cnt_var * $cnt_var2) % 25;

If($total_var == 0){$total_var = 1;}

$sql ="SELECT DB_data FROM S095 WHERE DB_num = '". $total_var."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S095 = stripslashes($row[DB_data]);
}
?>