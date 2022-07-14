
<?

$sql = "select DB_data_1, DB_data_2, DB_data_3, DB_data_4, DB_data_5, DB_data_6, DB_data_7, DB_data_8, DB_data_9, DB_data_10, DB_data_11, DB_data_12 from S101 where DB_express = '".$my_day_h_org.$temp_03."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$dbneyong[1] = stripslashes($row[DB_data_1]);
	$dbneyong[2] = stripslashes($row[DB_data_2]);
	$dbneyong[3] = stripslashes($row[DB_data_3]);
	$dbneyong[4] = stripslashes($row[DB_data_4]);
	$dbneyong[5] = stripslashes($row[DB_data_5]);
	$dbneyong[6] = stripslashes($row[DB_data_6]);
	$dbneyong[7] = stripslashes($row[DB_data_7]);
	$dbneyong[8] = stripslashes($row[DB_data_8]);
	$dbneyong[9] = stripslashes($row[DB_data_9]);
	$dbneyong[10] = stripslashes($row[DB_data_10]);
	$dbneyong[11] = stripslashes($row[DB_data_11]);
	$dbneyong[12] = stripslashes($row[DB_data_12]);
}

// s089 => 월
?>



<table cellpadding="0" cellspacing="0">
<?for ($i = 1 ; $i<13; $i++) { ?>
	<tR> 
		<tD style="<?=$fontcolor?>"><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src='/UNSE_DATA/images/c2_img/month_img/<?=$i?>.jpg' align='left'></tD></tr></table><IMG height=5 src='/images/nolink.png'><BR><?=$dbneyong[$i]?></tD>
	<?if($i < 13){?><tR><tD align="center"><img src="/UNSE_DATA/images/c2_img/line_C2.jpg"></td></tR><?}?>
	</tR>
<?}?>
</table>

 