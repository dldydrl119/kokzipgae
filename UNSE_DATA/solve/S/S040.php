<?
/*
switch(str_replace("","",$my_year_e)) {
	case "子" : $no = 1;
	case "丑" : $no = 2;
	case "寅" : $no = 3;
	case "卯" : $no = 4;
	case "辰" : $no = 5;
	case "巳" : $no = 6;
	case "午" : $no = 7;
	case "未" : $no = 8;
	case "申" : $no = 9;
	case "酉" : $no = 10;
	case "戌" : $no = 11;
	case '亥' : $no = 12;
}
*/
$no=0;
if ($my_year_e=="子"){$no=1;}
if ($my_year_e=="丑"){$no=2;}
if ($my_year_e=="寅"){$no=3;}
if ($my_year_e=="卯"){$no=4;}
if ($my_year_e=="辰"){$no=5;}
if ($my_year_e=="巳"){$no=6;}
if ($my_year_e=="午"){$no=7;}
if ($my_year_e=="未"){$no=8;}
if ($my_year_e=="申"){$no=9;}
if ($my_year_e=="酉"){$no=10;}
if ($my_year_e=="戌"){$no=11;}
if ($my_year_e=="亥"){$no=12;}

if($no==0){
	$no=$serial_no%12;
	if($no==0){$no==12;}
}

$sql ="select DB_data from S040 where DB_express = '".$no."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S040 = stripslashes($row[DB_data]);
}

$Tb_S040=str_replace("◐","▣", $Tb_S040);

?> 