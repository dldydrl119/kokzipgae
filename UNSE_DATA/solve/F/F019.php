<?

if ($sex == '여') {$gh = 'DB_express_1';}else{$gh = 'DB_express';}

$tot_i=0;

if($tele=="" || $tele<1000){$tele=rand(1111,9999);}

$tele=$tele."";

for($i=0;$i<4;$i++){
	$iii[$i] = substr($tele,$i,1)*1;

	$iii_disp[$i] = "<img src=/images/result_img/free_img/$iii[$i].gif>" ;

	$tot_i = $tot_i+$iii[$i];
}

$hap_01 = $iii[0] + $iii[1];
$hap_02 = $iii[1] + $iii[2];
$hap_03 = $iii[2] + $iii[3];





if ($hap_01 != 0) {
	
	

	$sql = "select * from F019 where DB_num='".$hap_01."'";
	$query = mysql_query($sql);
	$all = mysql_affected_rows();
	for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$gh1 = stripslashes($row[$gh]);
	$title1 = stripslashes($row[DB_title]);
	$content1 = stripslashes($row[DB_data]);}


	if ($gh1 == '吉') {$color1 = 'blue';$mark1 = '◎';}
	if ($gh1 == '凶') {$color1 = 'red';$mark1 = 'X';}
	if ($gh1 == '半吉半凶') {$color1 = 'green';$mark1 = '△';}
}

if ($hap_02 != '0') {

	$sql = "select * from F019 where DB_num='".$hap_02."'";
	$query = mysql_query($sql);
	$all = mysql_affected_rows();
	for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$gh2 = stripslashes($row[$gh]);
	$title2 = stripslashes($row[DB_title]);
	$content2 = stripslashes($row[DB_data]);}


	if ($gh2 == '吉') {$color2 = 'blue';$mark2 = '◎';}
	if ($gh2 == '凶') {$color2 = 'red';$mark2 = 'X';}
	if ($gh2 == '半吉半凶') {$color2 = 'green';$mark2 = '△';}
}

if ($hap_03 != '0') {

	$sql = "select * from F019 where DB_num='".$hap_03."'";
	$query = mysql_query($sql);
	$all = mysql_affected_rows();
	for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$gh3 = stripslashes($row[$gh]);
	$title3 = stripslashes($row[DB_title]);
	$content3 = stripslashes($row[DB_data]);}

	if ($gh3 == '吉') {$color3 = 'blue';$mark3 = '◎';}
	if ($gh3 == '凶') {$color3 = 'red';$mark3 = 'X';}
	if ($gh3 == '半吉半凶') {$color3 = 'green';$mark3 = '△';}
}



	$sql = "select * from F019 where DB_num='".$tot_i."'";
	$query = mysql_query($sql);
	$all = mysql_affected_rows();
	for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$gh0 = stripslashes($row[$gh]);
	$title0 = stripslashes($row[DB_title]);
	$content0 = stripslashes($row[DB_data]);}


if ($gh0 == '吉') {$color0 = 'blue';$mark0 = '◎';}
if ($gh0 == '凶') {$color0 = 'red';$mark0 = 'X';}
if ($gh0 == '半吉半凶') {$color0 = 'green';$mark0 = '△';}
?>

<?if ($hap_01 =! '0') {?>    
<table width=510 align="center" border=0 bgcolor=CCCCCC cellspacing=1 cellpadding=5>
  <tr bgcolor=f8f8f8><td align=center width=100>수리 <font color=<?=$color1?>><?=$gh1?></font></td><td align=center width=100><?= $iii[0] + $iii[1]?></td><td align=center width=300><?=$title1?></td></tr>
  <tr bgcolor=ffffff><td colspan=3><ul><?=str_replace("<BR>", "", $content1);?></td></tr>
</table>
<br>
<?
}
     
if ($hap_02 =! '0') {
?>  
<table width=510 align="center" border=0 bgcolor=CCCCCC cellspacing=1 cellpadding=5>
  <tr bgcolor=f8f8f8><td align=center width=100>수리 <font color=<?=$color2?>><?=$gh2?></font></td><td align=center width=100><?= $iii[1] + $iii[2]?></td><td align=center width=300><?=$title2?></td></tr>
  <tr bgcolor=ffffff><td colspan=3><ul><?=str_replace("<BR>", "", $content2)?></td></tr>
</table>
<br>
<?
}
     
if ($hap_03 =! '0') {
?>    
<table width=510 align="center" border=0 bgcolor=CCCCCC cellspacing=1 cellpadding=5>
  <tr bgcolor=f8f8f8><td align=center width=100>수리 <font color=<?=$color3?>><?=$gh3?></font></td><td align=center width=100><?= $iii[2] + $iii[3]?></td><td align=center width=300><?=$title3?></td></tr>
  <tr bgcolor=ffffff><td colspan=3><ul><?=str_replace("<BR>", "", $content3);?></td></tr>
</table>
<br>
<?}?>

<table width=510 align="center" border=0 bgcolor=CCCCCC cellspacing=1 cellpadding=5>
  <tr bgcolor=f8f8f8><td align=center width=100>수리 <font color=<?=$color0?>><?=$gh0?></font></td><td align=center width=100><?=$tot_i?></td><td align=center width=300><?=$title0?></td></tr>
  <tr bgcolor=ffffff><td colspan=3><ul><?=str_replace("<BR>", "", $content0);?></td></tr>
</table>