<?
$signdate = date("Ymd");

$sql = "SELECT * FROM mansedata WHERE no = '$signdate'";
if (!$sql) {

error("QUERY_ERROR");
}

$query = mysql_query($sql);
$all = mysql_affected_rows();


if (!$all) {
error("QUERY_ERROR");
}

		for ($i = 0 ; $i<$all; $i++) {
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$today_h = stripslashes($row[day_h]);
			$today_e = stripslashes($row[day_e]);
         		}

if ($today_h == 'A') {$today_h = '甲';}
if ($today_h == 'B') {$today_h = '乙';}
if ($today_h == 'C') {$today_h = '丙';}
if ($today_h == 'D') {$today_h = '丁';}
if ($today_h == 'E') {$today_h = '戊';}
if ($today_h == 'F') {$today_h = '己';}
if ($today_h == 'G') {$today_h = '庚';}
if ($today_h == 'H') {$today_h = '辛';}
if ($today_h == 'I') {$today_h = '壬';}
if ($today_h == 'J') {$today_h = '癸';}

if ($today_e == '11') {$today_e = '子';}
if ($today_e == '12') {$today_e = '丑';}
if ($today_e == '01') {$today_e = '寅';}
if ($today_e == '02') {$today_e = '卯';}
if ($today_e == '03') {$today_e = '辰';}
if ($today_e == '04') {$today_e = '巳';}
if ($today_e == '05') {$today_e = '午';}
if ($today_e == '06') {$today_e = '未';}
if ($today_e == '07') {$today_e = '申';}
if ($today_e == '08') {$today_e = '酉';}
if ($today_e == '09') {$today_e = '戌';}
if ($today_e == '10') {$today_e = '亥';}

############################# 계산 ##################################################################
$t_01 = $my_day_h.$my_day_e ;
$t_02 = $today_h.$today_e ;


//echo "$t_01 $t_02";

$gabja_01 = array('','
甲子','乙丑','丙寅','丁卯','戊辰','己巳','庚午','辛未','壬申','癸酉','甲戌','乙亥','丙子','丁丑','戊寅','己卯','庚辰','辛巳','壬午','癸未','甲申','乙酉','丙戌','丁亥','戊子','己丑','庚寅','辛卯','壬辰','癸巳','甲午','乙未','丙申','丁酉','戊戌','己亥','庚子','辛丑','壬寅','癸卯','甲辰','乙巳','丙午','丁未','戊申','己酉','庚戌','辛亥','壬子','癸丑','甲寅','乙卯','丙辰','丁巳','戊午','己未','庚申','辛酉','壬戌','癸亥');

$gabja_02 = array('','
甲子','甲戌','甲申','甲午','甲辰','甲寅','乙丑','乙亥','乙酉','乙未','乙巳','乙卯','丙寅','丙子','丙戌','丙申','丙午','丙辰','丁卯','丁丑','丁亥','丁酉','丁未','丁巳','戊辰','戊寅','戊子','戊戌','戊申','戊午','己巳','己卯','己丑','己亥','己酉','己未','庚午','庚辰','庚寅','庚子','庚戌','庚申','辛未','辛巳','辛卯','辛丑','辛亥','辛酉','壬申','壬午','壬辰','壬寅','壬子','壬戌','癸酉','癸未','癸巳','癸卯','癸丑','癸亥');


for ($i=1;$i<61;$i++) {
 if ($gabja_01[$i] == $t_01) {$temp_i = $i;}
}

for ($j=1;$j<61;$j++) {
 if ($gabja_02[$j] == $t_02) {$temp_j = $j;}
}


$temp_tot = ($temp_i) * ($temp_j);

$temp_tot = $temp_tot + date("d",time());

//echo "$temp_i / $temp_j = $temp_tot";

$nam = ceil($temp_tot % 180);#######사업,금전,총운
$nam2 = ceil(($temp_tot + 135) % 180);#######애정
$nam3 = ceil(($temp_tot + 45) % 180);#######소원
$nam4 = ceil(($temp_tot + 90) % 180);#######방향


//echo "$nam//$nam2//$nam3//$nam4";

//EXIT;
####################

//$data_array = array('SS01','SS02','SS03','SS04','SS05','SS06','SS07','SS08','SS09','SS10','SS11','SS12','SS13','SS14','SS15','SJ01','SJ02','SJ03','SJ04','SJ05','SJ06','SJ07','SJ08','SJ09','SJ10','SJ11','SJ12','SJ13','SJ14','SJ15','SH01','SH02','SH03','SH04','SH05','SH06','SH07','SH08','SH09','SH10','SH11','SH12','SH13','SH14','SH15','JSS01','JSS02','JSS03','JSS04','JSS05','JSS06','JSS07','JSS08','JSS09','JSS10','JSS11','JSS12','JSS13','JSS14','JSS15','JSJ01','JSJ02','JSJ03','JSJ04','JSJ05','JSJ06','JSJ07','JSJ08','JSJ09','JSJ10','JSJ11','JSJ12','JSJ13','JSJ14','JSJ15','JSH01','JSH02','JSH03','JSH04','JSH05','JSH06','JSH07','JSH08','JSH09','JSH10','JSH11','JSH12','JSH13','JSH14','JSH15','JJS01','JJS02','JJS03','JJS04','JJS05','JJS06','JJS07','JJS08','JJS09','JJS10','JJS11','JJS12','JJS13','JJS14','JJS15','JJJ01','JJJ02','JJJ03','JJJ04','JJJ05','JJJ06','JJJ07','JJJ08','JJJ09','JJJ10','JJJ11','JJJ12','JJJ13','JJJ14','JJJ15','JJH01','JJH02','JJH03','JJH04','JJH05','JJH06','JJH07','JJH08','JJH09','JJH10','JJH11','JJH12','JJH13','JJH14','JJH15','HS01','HS02','HS03','HS04','HS05','HS06','HS07','HS08','HS09','HS10','HS11','HS12','HS13','HS14','HS15','HJ01','HJ02','HJ03','HJ04','HJ05','HJ06','HJ07','HJ08','HJ09','HJ10','HJ11','HJ12','HJ13','HJ14','HJ15','HH01','HH02','HH03','HH04','HH05','HH06','HH07','HH08','HH09','HH10','HH11','HH12','HH13','HH14','HH15');

$data_array = "SS01,SS02,SS03,SS04,SS05,SS06,SS07,SS08,SS09,SS10,SS11,SS12,SS13,SS14,SS15,SJ01,SJ02,SJ03,SJ04,SJ05,SJ06,SJ07,SJ08,SJ09,SJ10,SJ11,SJ12,SJ13,SJ14,SJ15,SH01,SH02,SH03,SH04,SH05,SH06,SH07,SH08,SH09,SH10,SH11,SH12,SH13,SH14,SH15,JSS01,JSS02,JSS03,JSS04,JSS05,JSS06,JSS07,JSS08,JSS09,JSS10,JSS11,JSS12,JSS13,JSS14,JSS15,JSJ01,JSJ02,JSJ03,JSJ04,JSJ05,JSJ06,JSJ07,JSJ08,JSJ09,JSJ10,JSJ11,JSJ12,JSJ13,JSJ14,JSJ15,JSH01,JSH02,JSH03,JSH04,JSH05,JSH06,JSH07,JSH08,JSH09,JSH10,JSH11,JSH12,JSH13,JSH14,JSH15,JJS01,JJS02,JJS03,JJS04,JJS05,JJS06,JJS07,JJS08,JJS09,JJS10,JJS11,JJS12,JJS13,JJS14,JJS15,JJJ01,JJJ02,JJJ03,JJJ04,JJJ05,JJJ06,JJJ07,JJJ08,JJJ09,JJJ10,JJJ11,JJJ12,JJJ13,JJJ14,JJJ15,JJH01,JJH02,JJH03,JJH04,JJH05,JJH06,JJH07,JJH08,JJH09,JJH10,JJH11,JJH12,JJH13,JJH14,JJH15,HS01,HS02,HS03,HS04,HS05,HS06,HS07,HS08,HS09,HS10,HS11,HS12,HS13,HS14,HS15,HJ01,HJ02,HJ03,HJ04,HJ05,HJ06,HJ07,HJ08,HJ09,HJ10,HJ11,HJ12,HJ13,HJ14,HJ15,HH01,HH02,HH03,HH04,HH05,HH06,HH07,HH08,HH09,HH10,HH11,HH12,HH13,HH14,HH15";

$data_array = explode(",", $data_array);
?>