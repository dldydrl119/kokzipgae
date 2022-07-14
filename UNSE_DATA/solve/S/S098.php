<?
/*switch($my_day_h_org){
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
}*/

if ($my_day_h_org=="A"){$cnt_var = 1;}
if ($my_day_h_org=="B"){$cnt_var = 2;}
if ($my_day_h_org=="C"){$cnt_var = 3;}
if ($my_day_h_org=="D"){$cnt_var = 4;}
if ($my_day_h_org=="E"){$cnt_var = 5;}
if ($my_day_h_org=="F"){$cnt_var = 6;}
if ($my_day_h_org=="G"){$cnt_var = 7;}
if ($my_day_h_org=="H"){$cnt_var = 8;}
if ($my_day_h_org=="I"){$cnt_var = 9;}


if ($temp_03=="A"){$cnt_var2 = 1;}
if ($temp_03=="B"){$cnt_var2 = 2;}
if ($temp_03=="C"){$cnt_var2 = 3;}
if ($temp_03=="D"){$cnt_var2 = 4;}
if ($temp_03=="E"){$cnt_var2 = 5;}
if ($temp_03=="F"){$cnt_var2 = 6;}
if ($temp_03=="G"){$cnt_var2 = 7;}
if ($temp_03=="H"){$cnt_var2 = 8;}
if ($temp_03=="I"){$cnt_var2 = 9;}

$total_var = ($cnt_var * $cnt_var2) % 25;

If($total_var == 0){$total_var = 1;}

$sql = "select DB_data from S098 where DB_num = '". $total_var."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S098 = stripslashes($row[DB_data]);
}

?>

