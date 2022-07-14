<?

$sql = "SELECT * FROM toC_yongsin_01 WHERE title = '".$my_day_h . $my_month_e."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$osin1 = stripslashes($row[yo1]);
			$osin2 = stripslashes($row[he1]);
			$osin3 = stripslashes($row[gi1]);
			$osin4 = stripslashes($row[gu1]);
			$osin5 = stripslashes($row[ha1]);
}


$my_yongsin = $osin1; 
$my_heesin = $osin2;
$my_geesin = $osin3;
$my_gusin = $osin4;
$my_hansin = $osin5;

//$oheng_array = array(substr($my_yongsin,0,2),substr($my_heesin,0,2),substr($my_geesin,0,2),substr($my_gusin,0,2),substr($my_hansin,0,2));
$oheng_array = array($my_yongsin,$my_heesin,$my_geesin,$my_gusin,$my_hansin);
$sin_array = array('<font color=blue>용신</font>','<font color=blue>희신</font>','<font color=CC0000>기신</font>','<font color=CC0000>구신</font>','<font color=CC0000>한신</font>');

if (($my_year_h == '甲') || ($my_year_h == '乙')) {$year_search = '木';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $year_search) {$temp_i = $i;}
}

$my_year_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_year_h == '丙') || ($my_year_h == '丁')) {$year_search = '火';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $year_search) {$temp_i = $i;}
}

$my_year_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_year_h == '戊') || ($my_year_h == '己')) {$year_search = '土';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $year_search) {$temp_i = $i;}
}

$my_year_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_year_h == '庚') || ($my_year_h == '辛')) {$year_search = '金';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $year_search) {$temp_i = $i;}
}

$my_year_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_year_h == '壬') || ($my_year_h == '癸')) {$year_search = '水';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $year_search) {$temp_i = $i;}
}

$my_year_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////
if (($my_month_h == '甲') || ($my_month_h == '乙')) {$month_search = '木';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $month_search) {$temp_i = $i;}
}

$my_month_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_month_h == '丙') || ($my_month_h == '丁')) {$month_search = '火';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $month_search) {$temp_i = $i;}
}

$my_month_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_month_h == '戊') || ($my_month_h == '己')) {$month_search = '土';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $month_search) {$temp_i = $i;}
}

$my_month_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_month_h == '庚') || ($my_month_h == '辛')) {$month_search = '金';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $month_search) {$temp_i = $i;}
}

$my_month_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_month_h == '壬') || ($my_month_h == '癸')) {$month_search = '水';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $month_search) {$temp_i = $i;}
}

$my_month_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////
if (($my_day_h == '甲') || ($my_day_h == '乙')) {$day_search = '木';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $day_search) {$temp_i = $i;}
}

$my_day_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_day_h == '丙') || ($my_day_h == '丁')) {$day_search = '火';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $day_search) {$temp_i = $i;}
}

$my_day_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_day_h == '戊') || ($my_day_h == '己')) {$day_search = '土';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $day_search) {$temp_i = $i;}
}

$my_day_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_day_h == '庚') || ($my_day_h == '辛')) {$day_search = '金';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $day_search) {$temp_i = $i;}
}

$my_day_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_day_h == '壬') || ($my_day_h == '癸')) {$day_search = '水';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $day_search) {$temp_i = $i;}
}

$my_day_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////
if (($my_hour_h == '甲') || ($my_hour_h == '乙')) {$hour_search = '木';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $hour_search) {$temp_i = $i;}
}

$my_hour_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_hour_h == '丙') || ($my_hour_h == '丁')) {$hour_search = '火';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $hour_search) {$temp_i = $i;}
}

$my_hour_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_hour_h == '戊') || ($my_hour_h == '己')) {$hour_search = '土';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $hour_search) {$temp_i = $i;}
}

$my_hour_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_hour_h == '庚') || ($my_hour_h == '辛')) {$hour_search = '金';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $hour_search) {$temp_i = $i;}
}

$my_hour_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_hour_h == '壬') || ($my_hour_h == '癸')) {$hour_search = '水';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $hour_search) {$temp_i = $i;}
}

$my_hour_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
if (($my_year_e == '寅') || ($my_year_e == '卯')) {$year_search_e = '木';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $year_search_e) {$temp_i = $i;}
}

$my_year_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_year_e == '巳') || ($my_year_e == '午')) {$year_search_e = '火';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $year_search_e) {$temp_i = $i;}
}

$my_year_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_year_e == '申') || ($my_year_e == '酉')) {$year_search_e = '金';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $year_search_e) {$temp_i = $i;}
}

$my_year_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_year_e == '亥') || ($my_year_e == '子')) {$year_search_e = '水';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $year_search_e) {$temp_i = $i;}
}

$my_year_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_year_e == '辰') || ($my_year_e == '戌') || ($my_year_e == '丑') || ($my_year_e == '未')) {$year_search_e = '土';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $year_search_e) {$temp_i = $i;}
}

$my_year_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
if (($my_month_e == '寅') || ($my_month_e == '卯')) {$month_search_e = '木';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $month_search_e) {$temp_i = $i;}
}

$my_month_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_month_e == '巳') || ($my_month_e == '午')) {$month_search_e = '火';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $month_search_e) {$temp_i = $i;}
}

$my_month_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_month_e == '申') || ($my_month_e == '酉')) {$month_search_e = '金';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $month_search_e) {$temp_i = $i;}
}

$my_month_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_month_e == '亥') || ($my_month_e == '子')) {$month_search_e = '水';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $month_search_e) {$temp_i = $i;}
}

$my_month_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_month_e == '辰') || ($my_month_e == '戌') || ($my_month_e == '丑') || ($my_month_e == '未')) {$month_search_e = '土';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $month_search_e) {$temp_i = $i;}
}

$my_month_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
if (($my_day_e == '寅') || ($my_day_e == '卯')) {$day_search_e = '木';}
if (($my_day_e == '巳') || ($my_day_e == '午')) {$day_search_e = '火';}
if (($my_day_e == '申') || ($my_day_e == '酉')) {$day_search_e = '金';}
if (($my_day_e == '亥') || ($my_day_e == '子')) {$day_search_e = '水';}
if (($my_day_e == '辰') || ($my_day_e == '戌') || ($my_day_e == '丑') || ($my_day_e == '未')) {$day_search_e = '土';}
for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $day_search_e) {$temp_i = $i;}
}
$my_day_eee = $sin_array[$temp_i];

//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
if (($my_hour_e == '寅') || ($my_hour_e == '卯')) {$hour_search_e = '木';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $hour_search_e) {$temp_i = $i;}
}

$my_hour_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_hour_e == '巳') || ($my_hour_e == '午')) {$hour_search_e = '火';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $hour_search_e) {$temp_i = $i;}
}

$my_hour_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_hour_e == '申') || ($my_hour_e == '酉')) {$hour_search_e = '金';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $hour_search_e) {$temp_i = $i;}
}

$my_hour_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_hour_e == '亥') || ($my_hour_e == '子')) {$hour_search_e = '水';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $hour_search_e) {$temp_i = $i;}
}

$my_hour_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_hour_e == '辰') || ($my_hour_e == '戌') || ($my_hour_e == '丑') || ($my_hour_e == '未')) {$hour_search_e = '土';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $hour_search_e) {$temp_i = $i;}
}

$my_hour_eee = $sin_array[$temp_i];

$my_yongsin = $osin1; 
$my_heesin = $osin2;
$my_geesin = $osin3;
$my_gusin = $osin4;
$my_hansin = $osin5;

$oheng_array = array(substr($my_yongsin,0,2),substr($my_heesin,0,2),substr($my_geesin,0,2),substr($my_gusin,0,2),substr($my_hansin,0,2));
$sin_array = array('<font color=blue>용신</font>','<font color=blue>희신</font>','<font color=CC0000>기신</font>','<font color=CC0000>구신</font>','<font color=CC0000>한신</font>');

///////////////////////////////////////////////////////////////////////////
if (($my_year_h == '甲') || ($my_year_h == '乙')) {$year_search = '木';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $year_search) {$temp_i = $i;}
}

$my_year_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_year_h == '丙') || ($my_year_h == '丁')) {$year_search = '火';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $year_search) {$temp_i = $i;}
}

$my_year_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_year_h == '戊') || ($my_year_h == '己')) {$year_search = '土';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $year_search) {$temp_i = $i;}
}

$my_year_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_year_h == '庚') || ($my_year_h == '辛')) {$year_search = '金';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $year_search) {$temp_i = $i;}
}

$my_year_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_year_h == '壬') || ($my_year_h == '癸')) {$year_search = '水';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $year_search) {$temp_i = $i;}
}

$my_year_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////
if (($my_month_h == '甲') || ($my_month_h == '乙')) {$month_search = '木';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $month_search) {$temp_i = $i;}
}

$my_month_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_month_h == '丙') || ($my_month_h == '丁')) {$month_search = '火';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $month_search) {$temp_i = $i;}
}

$my_month_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_month_h == '戊') || ($my_month_h == '己')) {$month_search = '土';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $month_search) {$temp_i = $i;}
}

$my_month_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_month_h == '庚') || ($my_month_h == '辛')) {$month_search = '金';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $month_search) {$temp_i = $i;}
}

$my_month_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_month_h == '壬') || ($my_month_h == '癸')) {$month_search = '水';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $month_search) {$temp_i = $i;}
}

$my_month_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////
if (($my_day_h == '甲') || ($my_day_h == '乙')) {$day_search = '木';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $day_search) {$temp_i = $i;}
}

$my_day_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_day_h == '丙') || ($my_day_h == '丁')) {$day_search = '火';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $day_search) {$temp_i = $i;}
}

$my_day_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_day_h == '戊') || ($my_day_h == '己')) {$day_search = '土';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $day_search) {$temp_i = $i;}
}

$my_day_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_day_h == '庚') || ($my_day_h == '辛')) {$day_search = '金';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $day_search) {$temp_i = $i;}
}

$my_day_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_day_h == '壬') || ($my_day_h == '癸')) {$day_search = '水';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $day_search) {$temp_i = $i;}
}

$my_day_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////
if (($my_hour_h == '甲') || ($my_hour_h == '乙')) {$hour_search = '木';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $hour_search) {$temp_i = $i;}
}

$my_hour_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_hour_h == '丙') || ($my_hour_h == '丁')) {$hour_search = '火';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $hour_search) {$temp_i = $i;}
}

$my_hour_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_hour_h == '戊') || ($my_hour_h == '己')) {$hour_search = '土';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $hour_search) {$temp_i = $i;}
}

$my_hour_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_hour_h == '庚') || ($my_hour_h == '辛')) {$hour_search = '金';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $hour_search) {$temp_i = $i;}
}

$my_hour_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_hour_h == '壬') || ($my_hour_h == '癸')) {$hour_search = '水';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $hour_search) {$temp_i = $i;}
}

$my_hour_hhh = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
if (($my_year_e == '寅') || ($my_year_e == '卯')) {$year_search_e = '木';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $year_search_e) {$temp_i = $i;}
}

$my_year_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_year_e == '巳') || ($my_year_e == '午')) {$year_search_e = '火';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $year_search_e) {$temp_i = $i;}
}

$my_year_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_year_e == '申') || ($my_year_e == '酉')) {$year_search_e = '金';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $year_search_e) {$temp_i = $i;}
}

$my_year_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_year_e == '亥') || ($my_year_e == '子')) {$year_search_e = '水';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $year_search_e) {$temp_i = $i;}
}

$my_year_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_year_e == '辰') || ($my_year_e == '戌') || ($my_year_e == '丑') || ($my_year_e == '未')) {$year_search_e = '土';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $year_search_e) {$temp_i = $i;}
}

$my_year_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
if (($my_month_e == '寅') || ($my_month_e == '卯')) {$month_search_e = '木';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $month_search_e) {$temp_i = $i;}
}

$my_month_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_month_e == '巳') || ($my_month_e == '午')) {$month_search_e = '火';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $month_search_e) {$temp_i = $i;}
}

$my_month_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_month_e == '申') || ($my_month_e == '酉')) {$month_search_e = '金';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $month_search_e) {$temp_i = $i;}
}

$my_month_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_month_e == '亥') || ($my_month_e == '子')) {$month_search_e = '水';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $month_search_e) {$temp_i = $i;}
}

$my_month_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_month_e == '辰') || ($my_month_e == '戌') || ($my_month_e == '丑') || ($my_month_e == '未')) {$month_search_e = '土';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $month_search_e) {$temp_i = $i;}
}

$my_month_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////


/*if (($my_day_e == '寅') || ($my_day_e == '卯')) {$day_search_e = '木';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $day_search_e) {$temp_i = $i;}
}

$my_day_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_day_e == '巳') || ($my_day_e == '午')) {$day_search_e = '火';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $day_search_e) {$temp_i = $i;}
}

$my_day_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_day_e == '申') || ($my_day_e == '酉')) {$day_search_e = '金';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $day_search_e) {$temp_i = $i;}
}

$my_day_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_day_e == '亥') || ($my_day_e == '子')) {$day_search_e = '水';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $day_search_e) {$temp_i = $i;}
}

$my_day_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_day_e == '辰') || ($my_day_e == '戌') || ($my_day_e == '丑') || ($my_day_e == '未')) {$day_search_e = '土';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $day_search_e) {$temp_i = $i;}
}

$my_day_eee = $sin_array[$temp_i];
*/
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
if (($my_hour_e == '寅') || ($my_hour_e == '卯')) {$hour_search_e = '木';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $hour_search_e) {$temp_i = $i;}
}

$my_hour_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_hour_e == '巳') || ($my_hour_e == '午')) {$hour_search_e = '火';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $hour_search_e) {$temp_i = $i;}
}

$my_hour_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_hour_e == '申') || ($my_hour_e == '酉')) {$hour_search_e = '金';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $hour_search_e) {$temp_i = $i;}
}

$my_hour_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_hour_e == '亥') || ($my_hour_e == '子')) {$hour_search_e = '水';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $hour_search_e) {$temp_i = $i;}
}

$my_hour_eee = $sin_array[$temp_i];
//////////////////////////////////////////////////////////////////////////
if (($my_hour_e == '辰') || ($my_hour_e == '戌') || ($my_hour_e == '丑') || ($my_hour_e == '未')) {$hour_search_e = '土';}

for ($i=0;$i<5;$i++) {
 if ($oheng_array[$i] == $hour_search_e) {$temp_i = $i;}
}

$my_hour_eee = $sin_array[$temp_i];

include "hyungchung.php";

##################################################형충파해
if (($samhap_title) || ($ganhap_title_1) || ($ganhap_title_2) || ($ganhap_title_3) || ($ganhap_title_4) || ($ganhap_title_5)) {
          $disp_hap = "<font color=blue><b>[합]</b></font> : $samhap_title $ganhap_title_1 $ganhap_title_2 $ganhap_title_3 $ganhap_title_4 $ganhap_title_5 &nbsp; &nbsp;";
}

if (($samhyung_title) || ($jahyung_title_j) || ($jahyung_title_o) || ($jahyung_title_u) || ($jahyung_title_h)) {
          $disp_hyung = "<font color=red><b>[형]</b></font> : $samhyung_title $jahyung_title_j $jahyung_title_o $jahyung_title_u $jahyung_title_h &nbsp; &nbsp;";
}

if (($chungsal_title_1) || ($chungsal_title_2 ) || ($chungsal_title_3 ) || ($chungsal_title_4 ) || ($chungsal_title_5 ) || ($chungsal_title_6)) {
          $disp_chung = "<font color=red><b>[충]</b></font> : $chungsal_title_1 $chungsal_title_2 $chungsal_title_3 $chungsal_title_4 $chungsal_title_5 $chungsal_title_6 &nbsp; &nbsp;";
}

if (($pasal_title_1) || ( $pasal_title_2) || ( $pasal_title_3 ) || ($pasal_title_4 ) || ($pasal_title_5 ) || ($pasal_title_6)) {
          $disp_pa = "<font color=red><b>[파]</b></font> : $pasal_title_1 $pasal_title_2 $pasal_title_3 $pasal_title_4 $pasal_title_5 $pasal_title_6 &nbsp; &nbsp;";
}

if (($haesal_title_1) || ( $haesal_title_2) || ($haesal_title_3) || ( $haesal_title_4) || ( $haesal_title_5 ) || ($haesal_title_6)) {
          $disp_hae = "<font color=red><b>[해]</b></font> : $haesal_title_1 $haesal_title_2 $haesal_title_3 $haesal_title_4 $haesal_title_5 $haesal_title_6";
}

#####################################################



$disp_hap = str_Replace("<br>", "", $disp_hap);
$disp_hyung = str_Replace("<br>", "", $disp_hyung);
$disp_chung = str_Replace("<br>", "", $disp_chung);
$disp_pa = str_Replace("<br>", "", $disp_pa);
$disp_hae = str_Replace("<br>", "", $disp_hae);
?>

<tR><td>
<table cellpadding="0" cellspacing="0"><tR><td height="15"></td></tR></table>
<TABLE width=512 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align="center">
       <TR bgcolor=f8f8f8><TD align=center>용신</TD><TD align=center>희신</TD><TD align=center>기신</TD><TD align=center>구신</TD><TD align=center>한신</TD></TR>
       <TR bgcolor=FFFFFF><TD align=center><?=$my_yongsin;?></TD><TD align=center><?=$my_heesin;?></TD><TD align=center><?=$my_geesin;?></TD><TD align=center><?=$my_gusin;?></TD><TD align=center><?=$my_hansin;?></TD></TR>
</TABLE>


<table width="512" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<tD height="13"></tD>
	</tR>
	<tR>
		<tD height="23" align="center" <?If($all_var != 0){?>bgcolor="black"<?}?> style="padding:2px;"><?=$disp_hap;?><?=$disp_hyung;?><?=$disp_chung;?><?=$disp_pa;?><?=$disp_hae;?></tD>
	</tR>
</tablE>
<?

$h_array[1] = $sin_hour_h;
$h_array[2] = $sin_day_h;
$h_array[3] = $sin_month_h;
$h_array[4] = $sin_year_h;
$h_array[5] = $sin_hour_e;
$h_array[6] = $sin_day_e;
$h_array[7] = $sin_month_e;
$h_array[8] = $sin_year_e;

?>
</td></tR>