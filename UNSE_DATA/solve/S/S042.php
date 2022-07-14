<? 

$signdate_month=date("m");
$signdate_Day=date("d");
$signdate_Hour=date("H");
$signdate_Minute=date("i");

if(strlen($signdate_month)==1){$signdate_month = "0". $signdate_month;}
if(strlen($signdate_Day)==1){$signdate_Day = "0". $signdate_Day;}
if(strlen($signdate_Hour)==1){$signdate_Hour = "0". $signdate_Hour;}
if(strlen($signdate_Minute)==1){$signdate_Minute = "0". $signdate_Minute;}

$signdate=date("Y").$signdate_month.$signdate_Day.$signdate_Hour.$signdate_Minute;

$current_hour_search = substr($signdate,8,4);
$current_hour_e="01";
if ($current_hour_search<0131 || $current_hour_search >= 2331){$current_hour_e="11";$s="0";}
if ($current_hour_search>=0131 && $current_hour_search < 0331){$current_hour_e="12";$s="1";}
if ($current_hour_search>=0331 && $current_hour_search < 0531){$current_hour_e="01";$s="2";}
if ($current_hour_search>=0531 && $current_hour_search < 0731){$current_hour_e="02";$s="3";}
if ($current_hour_search>=0731 && $current_hour_search < 0931){$current_hour_e="03";$s="4";}
if ($current_hour_search>=0931 && $current_hour_search < 1131){$current_hour_e="04";$s="5";}
if ($current_hour_search>=1131 && $current_hour_search < 1331){$current_hour_e="05";$s="6";}
if ($current_hour_search>=1331 && $current_hour_search < 1531){$current_hour_e="06";$s="7";}
if ($current_hour_search>=1531 && $current_hour_search < 1731){$current_hour_e="07";$s="8";}
if ($current_hour_search>=1731 && $current_hour_search < 1931){$current_hour_e="08";$s="9";}
if ($current_hour_search>=1931 && $current_hour_search < 2131){$current_hour_e="09";$s="10";}
if ($current_hour_search>=2131 && $current_hour_search < 2331){$current_hour_e="10";$s="11";}

$mdh="01";
if ($my_day_h_org=="A"){$mdh="01";}
if ($my_day_h_org=="B"){$mdh="02";}
if ($my_day_h_org=="C"){$mdh="03";}
if ($my_day_h_org=="D"){$mdh="04";}
if ($my_day_h_org=="E"){$mdh="05";}
if ($my_day_h_org=="F"){$mdh="06";}
if ($my_day_h_org=="G"){$mdh="07";}
if ($my_day_h_org=="H"){$mdh="08";}
if ($my_day_h_org=="I"){$mdh="09";}
if ($my_day_h_org=="J"){$mdh="10";}

$sql ="SELECT DB_data FROM S042 WHERE DB_express = '". $mdh . $current_hour_e ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();


for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S042 = stripslashes($row[DB_data]);
}


?>