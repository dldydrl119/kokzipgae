<SCRIPT LANGUAGE="JavaScript">
<!--
function OpenWin(ref) {
    window.open(ref,'','toolbar=no,resizable=yes,width=500,height=550,scrollbars=yes, screenX=200, screenY=250')
}
//-->
</SCRIPT>
<?
If($cate == ""){$cate = $_REQUEST["cate"];}else{$cate = $cate;}
If($sel == ""){$sel = $_REQUEST["sel"];}else{$sel = $sel;}
If($solution_var == ""){$solution_var = $_REQUEST["solution_var"];}else{$solution_var = $solution_var;}
If($youn == ""){$youn = $_REQUEST["youn"];}else{$youn = $youn;}
If($request_year == ""){$request_year = $_REQUEST["year"];}else{$request_year = $request_year;}
If($request_month == ""){$request_month = $_REQUEST["month"];}else{$request_month = $request_month;}
If($request_day == ""){$request_day = $_REQUEST["day"];}else{$request_day = $request_day;}
If($request_hour == ""){$request_hour = $_REQUEST["hour"];}else{$request_hour = $request_hour;}
If($request_min == ""){$request_min = $_REQUEST["min"];}else{$request_min = $request_min;}
If($my_year_h == ""){$my_year_h = $_REQUEST["my_year_h"];}else{$my_year_h = $my_year_h;}
If($my_year_e == ""){$my_year_e = $_REQUEST["my_year_e"];}else{$my_year_e = $my_year_e;}
If($lunar_month == ""){$lunar_month = $_REQUEST["lunar_month"];}else{$lunar_month = $lunar_month;}
If($lunar_day == ""){$lunar_day = $_REQUEST["lunar_day"];}else{$lunar_day = $lunar_day;}


$mm = $_REQUEST['mm'];

if($mm == ""){$mm = $year;}

$numbering = $_REQUEST["numbering"];
$choice1 = $_REQUEST["choice1"];
$choice2 = $_REQUEST["choice2"];

If($url==""){$url=$_REQUEST["url"];}

$my_umyear_h = $my_year_h;
$my_umyear_e = $my_year_e;
$my_ummonth = $lunar_month;
$my_umday = $lunar_day;

$y='년';$m='월';$d='일';$h='시';$s='명';

$current_ymd = date("Ymd");

$sql = "SELECT * FROM mansedata WHERE no like  '$current_ymd'";



$query = mysql_query($sql);
$all = mysql_affected_rows();


		for ($i = 0 ; $i<$all; $i++)
		{
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$yangdate = stripslashes($row[no]);
			$umdate = stripslashes($row[umdate]);
			$umyear_e = stripslashes($row[umyear_e]);
                 }
                $current_yangyear = substr($yangdate,0,4);
		$current_umyear = substr($umdate,0,4);




#####################################################################현재나이##########

$current_age = $current_umyear - $lunar_year + 1;

if ($umyear_e == '子') {
    $age_11_disp = $current_age;
    $age_12_disp = $current_age+1;
    $age_01_disp = $current_age+2;
    $age_02_disp = $current_age+3;
    $age_03_disp = $current_age+4;
    $age_04_disp = $current_age+5;
    $age_05_disp = $current_age+6;
    $age_06_disp = $current_age+7;
    $age_07_disp = $current_age+8;
    $age_08_disp = $current_age+9;
    $age_09_disp = $current_age+10;
    $age_10_disp = $current_age+11;
}

if ($umyear_e == '丑') {
    $age_12_disp = $current_age;
    $age_01_disp = $current_age+1;
    $age_02_disp = $current_age+2;
    $age_03_disp = $current_age+3;
    $age_04_disp = $current_age+4;
    $age_05_disp = $current_age+5;
    $age_06_disp = $current_age+6;
    $age_07_disp = $current_age+7;
    $age_08_disp = $current_age+8;
    $age_09_disp = $current_age+9;
    $age_10_disp = $current_age+10;
    $age_11_disp = $current_age+11;
}

if ($umyear_e == '寅') {
    $age_01_disp = $current_age;
    $age_02_disp = $current_age+1;
    $age_03_disp = $current_age+2;
    $age_04_disp = $current_age+3;
    $age_05_disp = $current_age+4;
    $age_06_disp = $current_age+5;
    $age_07_disp = $current_age+6;
    $age_08_disp = $current_age+7;
    $age_09_disp = $current_age+8;
    $age_10_disp = $current_age+9;
    $age_11_disp = $current_age+10;
    $age_12_disp = $current_age+11;
}

if ($umyear_e == '卯') {
    $age_02_disp = $current_age;
    $age_03_disp = $current_age+1;
    $age_04_disp = $current_age+2;
    $age_05_disp = $current_age+3;
    $age_06_disp = $current_age+4;
    $age_07_disp = $current_age+5;
    $age_08_disp = $current_age+6;
    $age_09_disp = $current_age+7;
    $age_10_disp = $current_age+8;
    $age_11_disp = $current_age+9;
    $age_12_disp = $current_age+10;
    $age_01_disp = $current_age+11;
}

if ($umyear_e == '辰') {
    $age_03_disp = $current_age;
    $age_04_disp = $current_age+1;
    $age_05_disp = $current_age+2;
    $age_06_disp = $current_age+3;
    $age_07_disp = $current_age+4;
    $age_08_disp = $current_age+5;
    $age_09_disp = $current_age+6;
    $age_10_disp = $current_age+7;
    $age_11_disp = $current_age+8;
    $age_12_disp = $current_age+9;
    $age_01_disp = $current_age+10;
    $age_02_disp = $current_age+11;
}

if ($umyear_e == '巳') {
    $age_04_disp = $current_age;
    $age_05_disp = $current_age+1;
    $age_06_disp = $current_age+2;
    $age_07_disp = $current_age+3;
    $age_08_disp = $current_age+4;
    $age_09_disp = $current_age+5;
    $age_10_disp = $current_age+6;
    $age_11_disp = $current_age+7;
    $age_12_disp = $current_age+8;
    $age_01_disp = $current_age+9;
    $age_02_disp = $current_age+10;
    $age_03_disp = $current_age+11;
}

if ($umyear_e == '午') {
    $age_05_disp = $current_age;
    $age_06_disp = $current_age+1;
    $age_07_disp = $current_age+2;
    $age_08_disp = $current_age+3;
    $age_09_disp = $current_age+4;
    $age_10_disp = $current_age+5;
    $age_11_disp = $current_age+6;
    $age_12_disp = $current_age+7;
    $age_01_disp = $current_age+8;
    $age_02_disp = $current_age+9;
    $age_03_disp = $current_age+10;
    $age_04_disp = $current_age+11;
}

if ($umyear_e == '未') {
    $age_06_disp = $current_age;
    $age_07_disp = $current_age+1;
    $age_08_disp = $current_age+2;
    $age_09_disp = $current_age+3;
    $age_10_disp = $current_age+4;
    $age_11_disp = $current_age+5;
    $age_12_disp = $current_age+6;
    $age_01_disp = $current_age+7;
    $age_02_disp = $current_age+8;
    $age_03_disp = $current_age+9;
    $age_04_disp = $current_age+10;
    $age_05_disp = $current_age+11;
}

if ($umyear_e == '申') {
    $age_07_disp = $current_age;
    $age_08_disp = $current_age+1;
    $age_09_disp = $current_age+2;
    $age_10_disp = $current_age+3;
    $age_11_disp = $current_age+4;
    $age_12_disp = $current_age+5;
    $age_01_disp = $current_age+6;
    $age_02_disp = $current_age+7;
    $age_03_disp = $current_age+8;
    $age_04_disp = $current_age+9;
    $age_05_disp = $current_age+10;
    $age_06_disp = $current_age+11;
}

if ($umyear_e == '酉') {
    $age_08_disp = $current_age;
    $age_09_disp = $current_age+1;
    $age_10_disp = $current_age+2;
    $age_11_disp = $current_age+3;
    $age_12_disp = $current_age+4;
    $age_01_disp = $current_age+5;
    $age_02_disp = $current_age+6;
    $age_03_disp = $current_age+7;
    $age_04_disp = $current_age+8;
    $age_05_disp = $current_age+9;
    $age_06_disp = $current_age+10;
    $age_07_disp = $current_age+11;
}

if ($umyear_e == '戌') {
    $age_09_disp = $current_age;
    $age_10_disp = $current_age+1;
    $age_11_disp = $current_age+2;
    $age_12_disp = $current_age+3;
    $age_01_disp = $current_age+4;
    $age_02_disp = $current_age+5;
    $age_03_disp = $current_age+6;
    $age_04_disp = $current_age+7;
    $age_05_disp = $current_age+8;
    $age_06_disp = $current_age+9;
    $age_07_disp = $current_age+10;
    $age_08_disp = $current_age+11;
}

if ($umyear_e == '亥') {
    $age_10_disp = $current_age;
    $age_11_disp = $current_age+1;
    $age_12_disp = $current_age+2;
    $age_01_disp = $current_age+3;
    $age_02_disp = $current_age+4;
    $age_03_disp = $current_age+5;
    $age_04_disp = $current_age+6;
    $age_05_disp = $current_age+7;
    $age_06_disp = $current_age+8;
    $age_07_disp = $current_age+9;
    $age_08_disp = $current_age+10;
    $age_09_disp = $current_age+11;
}


##########################################         명반의 가로세로 셀 넓이
$width = '127';
$height = '127';
$bgcolor_01='EEEEEE';
$bgcolor_02='EEEEEE';
$bgcolor_03='EEEEEE';
$bgcolor_04='EEEEEE';
$bgcolor_05='EEEEEE';
$bgcolor_06='EEEEEE';
$bgcolor_07='EEEEEE';
$bgcolor_08='EEEEEE';
$bgcolor_09='EEEEEE';
$bgcolor_10='EEEEEE';
$bgcolor_11='EEEEEE';
$bgcolor_12='EEEEEE';

###########################################각궁의 지지위에 천간을 붙임

if (($my_year_h == '甲') || ($my_year_h == '己')) {
$gabja_01 = '丙寅';
$gabja_02 = '丁卯';
$gabja_03 = '戊辰';
$gabja_04 = '己巳';
$gabja_05 = '庚午';
$gabja_06 = '辛未';
$gabja_07 = '壬申';
$gabja_08 = '癸酉';
$gabja_09 = '甲戌';
$gabja_10 = '乙亥';
$gabja_11 = '丙子';
$gabja_12 = '丁丑';

$gabja_01_disp = '<img src=/images/result_img/jum_img/hanja_img/0301.gif border=0 alt=병인대운>';
$gabja_02_disp = '<img src=/images/result_img/jum_img/hanja_img/0402.gif border=0 alt=정묘대운>';
$gabja_03_disp = '<img src=/images/result_img/jum_img/hanja_img/0503.gif border=0 alt=무진대운>';
$gabja_04_disp = '<img src=/images/result_img/jum_img/hanja_img/0604.gif border=0 alt=기사대운>';
$gabja_05_disp = '<img src=/images/result_img/jum_img/hanja_img/0705.gif border=0 alt=경오대운>';
$gabja_06_disp = '<img src=/images/result_img/jum_img/hanja_img/0806.gif border=0 alt=신미대운>';
$gabja_07_disp = '<img src=/images/result_img/jum_img/hanja_img/0907.gif border=0 alt=임신대운>';
$gabja_08_disp = '<img src=/images/result_img/jum_img/hanja_img/1008.gif border=0 alt=계유대운>';
$gabja_09_disp = '<img src=/images/result_img/jum_img/hanja_img/0109.gif border=0 alt=갑술대운>';
$gabja_10_disp = '<img src=/images/result_img/jum_img/hanja_img/0210.gif border=0 alt=을해대운>';
$gabja_11_disp = '<img src=/images/result_img/jum_img/hanja_img/0311.gif border=0 alt=병자대운>';
$gabja_12_disp = '<img src=/images/result_img/jum_img/hanja_img/0412.gif border=0 alt=정축대운>';

}

if (($my_year_h == '乙') || ($my_year_h == '庚')) {
$gabja_01 = '戊寅';
$gabja_02 = '己卯';
$gabja_03 = '庚辰';
$gabja_04 = '辛巳';
$gabja_05 = '壬午';
$gabja_06 = '癸未';
$gabja_07 = '甲申';
$gabja_08 = '乙酉';
$gabja_09 = '丙戌';
$gabja_10 = '丁亥';
$gabja_11 = '戊子';
$gabja_12 = '己丑';


$gabja_01_disp = '<img src=/images/result_img/jum_img/hanja_img/0501.gif border=0 alt=무인대운>';
$gabja_02_disp = '<img src=/images/result_img/jum_img/hanja_img/0602.gif border=0 alt=기묘대운>';
$gabja_03_disp = '<img src=/images/result_img/jum_img/hanja_img/0703.gif border=0 alt=경진대운>';
$gabja_04_disp = '<img src=/images/result_img/jum_img/hanja_img/0804.gif border=0 alt=신사대운>';
$gabja_05_disp = '<img src=/images/result_img/jum_img/hanja_img/0905.gif border=0 alt=임오대운>';
$gabja_06_disp = '<img src=/images/result_img/jum_img/hanja_img/1006.gif border=0 alt=계미대운>';
$gabja_07_disp = '<img src=/images/result_img/jum_img/hanja_img/0107.gif border=0 alt=갑신대운>';
$gabja_08_disp = '<img src=/images/result_img/jum_img/hanja_img/0208.gif border=0 alt=을유대운>';
$gabja_09_disp = '<img src=/images/result_img/jum_img/hanja_img/0309.gif border=0 alt=병술대운>';
$gabja_10_disp = '<img src=/images/result_img/jum_img/hanja_img/0410.gif border=0 alt=정해대운>';
$gabja_11_disp = '<img src=/images/result_img/jum_img/hanja_img/0511.gif border=0 alt=무자대운>';
$gabja_12_disp = '<img src=/images/result_img/jum_img/hanja_img/0612.gif border=0 alt=기축대운>';
}

if (($my_year_h == '丙') || ($my_year_h == '辛')) {
$gabja_01 = '庚寅';
$gabja_02 = '辛卯';
$gabja_03 = '壬辰';
$gabja_04 = '癸巳';
$gabja_05 = '甲午';
$gabja_06 = '乙未';
$gabja_07 = '丙申';
$gabja_08 = '丁酉';
$gabja_09 = '戊戌';
$gabja_10 = '己亥';
$gabja_11 = '庚子';
$gabja_12 = '辛丑';

$gabja_01_disp = '<img src=/images/result_img/jum_img/hanja_img/0701.gif border=0 alt=경인대운>';
$gabja_02_disp = '<img src=/images/result_img/jum_img/hanja_img/0802.gif border=0 alt=신묘대운>';
$gabja_03_disp = '<img src=/images/result_img/jum_img/hanja_img/0903.gif border=0 alt=임진대운>';
$gabja_04_disp = '<img src=/images/result_img/jum_img/hanja_img/1004.gif border=0 alt=계사대운>';
$gabja_05_disp = '<img src=/images/result_img/jum_img/hanja_img/0105.gif border=0 alt=갑오대운>';
$gabja_06_disp = '<img src=/images/result_img/jum_img/hanja_img/0206.gif border=0 alt=을미대운>';
$gabja_07_disp = '<img src=/images/result_img/jum_img/hanja_img/0307.gif border=0 alt=병신대운>';
$gabja_08_disp = '<img src=/images/result_img/jum_img/hanja_img/0408.gif border=0 alt=정유대운>';
$gabja_09_disp = '<img src=/images/result_img/jum_img/hanja_img/0509.gif border=0 alt=무술대운>';
$gabja_10_disp = '<img src=/images/result_img/jum_img/hanja_img/0610.gif border=0 alt=기해대운>';
$gabja_11_disp = '<img src=/images/result_img/jum_img/hanja_img/0711.gif border=0 alt=경자대운>';
$gabja_12_disp = '<img src=/images/result_img/jum_img/hanja_img/0812.gif border=0 alt=신축대운>';
}

if (($my_year_h == '丁') || ($my_year_h == '壬')) {
$gabja_01 = '壬寅';
$gabja_02 = '癸卯';
$gabja_03 = '甲辰';
$gabja_04 = '乙巳';
$gabja_05 = '丙午';
$gabja_06 = '丁未';
$gabja_07 = '戊申';
$gabja_08 = '己酉';
$gabja_09 = '庚戌';
$gabja_10 = '辛亥';
$gabja_11 = '壬子';
$gabja_12 = '癸丑';

$gabja_01_disp = '<img src=/images/result_img/jum_img/hanja_img/0901.gif border=0 alt=임인대운>';
$gabja_02_disp = '<img src=/images/result_img/jum_img/hanja_img/1002.gif border=0 alt=계묘대운>';
$gabja_03_disp = '<img src=/images/result_img/jum_img/hanja_img/0103.gif border=0 alt=갑진대운>';
$gabja_04_disp = '<img src=/images/result_img/jum_img/hanja_img/0204.gif border=0 alt=을사대운>';
$gabja_05_disp = '<img src=/images/result_img/jum_img/hanja_img/0305.gif border=0 alt=병오대운>';
$gabja_06_disp = '<img src=/images/result_img/jum_img/hanja_img/0406.gif border=0 alt=정미대운>';
$gabja_07_disp = '<img src=/images/result_img/jum_img/hanja_img/0507.gif border=0 alt=무신대운>';
$gabja_08_disp = '<img src=/images/result_img/jum_img/hanja_img/0608.gif border=0 alt=기유대운>';
$gabja_09_disp = '<img src=/images/result_img/jum_img/hanja_img/0709.gif border=0 alt=경술대운>';
$gabja_10_disp = '<img src=/images/result_img/jum_img/hanja_img/0810.gif border=0 alt=신해대운>';
$gabja_11_disp = '<img src=/images/result_img/jum_img/hanja_img/0911.gif border=0 alt=임자대운>';
$gabja_12_disp = '<img src=/images/result_img/jum_img/hanja_img/1012.gif border=0 alt=계축대운>';

}

if (($my_year_h == '戊') || ($my_year_h == '癸')) {
$gabja_01 = '甲寅';
$gabja_02 = '乙卯';
$gabja_03 = '丙辰';
$gabja_04 = '丁巳';
$gabja_05 = '戊午';
$gabja_06 = '己未';
$gabja_07 = '庚申';
$gabja_08 = '辛酉';
$gabja_09 = '壬戌';
$gabja_10 = '癸亥';
$gabja_11 = '甲子';
$gabja_12 = '乙丑';

$gabja_01_disp = '<img src=/images/result_img/jum_img/hanja_img/0101.gif border=0 alt=갑인대운>';
$gabja_02_disp = '<img src=/images/result_img/jum_img/hanja_img/0202.gif border=0 alt=을묘대운>';
$gabja_03_disp = '<img src=/images/result_img/jum_img/hanja_img/0303.gif border=0 alt=병진대운>';
$gabja_04_disp = '<img src=/images/result_img/jum_img/hanja_img/0404.gif border=0 alt=정사대운>';
$gabja_05_disp = '<img src=/images/result_img/jum_img/hanja_img/0505.gif border=0 alt=무오대운>';
$gabja_06_disp = '<img src=/images/result_img/jum_img/hanja_img/0606.gif border=0 alt=기미대운>';
$gabja_07_disp = '<img src=/images/result_img/jum_img/hanja_img/0707.gif border=0 alt=경신대운>';
$gabja_08_disp = '<img src=/images/result_img/jum_img/hanja_img/0808.gif border=0 alt=신유대운>';
$gabja_09_disp = '<img src=/images/result_img/jum_img/hanja_img/0909.gif border=0 alt=임술대운>';
$gabja_10_disp = '<img src=/images/result_img/jum_img/hanja_img/1010.gif border=0 alt=계해대운>';
$gabja_11_disp = '<img src=/images/result_img/jum_img/hanja_img/0111.gif border=0 alt=갑자대운>';
$gabja_12_disp = '<img src=/images/result_img/jum_img/hanja_img/0212.gif border=0 alt=을축대운>';
}

#####################################################################명신궁찾기

if ($my_hour_e == '子') {if ($my_ummonth == '01') {$myung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_01 = '명'; $sin_01_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_01 = '신';}
                                  if ($my_ummonth == '02') {$myung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_02 = '명'; $sin_02_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_02 = '신';}
				  if ($my_ummonth == '03') {$myung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_03 = '명'; $sin_03_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_03 = '신';}
				  if ($my_ummonth == '04') {$myung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_04 = '명'; $sin_04_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_04 = '신';}
				  if ($my_ummonth == '05') {$myung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_05 = '명'; $sin_05_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_05 = '신';}
				  if ($my_ummonth == '06') {$myung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_06 = '명'; $sin_06_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_06 = '신';}
				  if ($my_ummonth == '07') {$myung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_07 = '명'; $sin_07_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_07 = '신';}
				  if ($my_ummonth == '08') {$myung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_08 = '명'; $sin_08_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_08 = '신';}
				  if ($my_ummonth == '09') {$myung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_09 = '명'; $sin_09_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_09 = '신';}
				  if ($my_ummonth == '10') {$myung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_10 = '명'; $sin_10_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_10 = '신';}
				  if ($my_ummonth == '11') {$myung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_11 = '명'; $sin_11_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_11 = '신';}
				  if ($my_ummonth == '12') {$myung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_12 = '명'; $sin_12_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_12 = '신';} }

if ($my_hour_e == '丑') {if ($my_ummonth == '01') {$myung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_12 = '명'; $sin_02_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_02 = '신';}
                                  if ($my_ummonth == '02') {$myung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_01 = '명'; $sin_03_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_03 = '신';}
				  if ($my_ummonth == '03') {$myung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_02 = '명'; $sin_04_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_04 = '신';}
				  if ($my_ummonth == '04') {$myung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_03 = '명'; $sin_05_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_05 = '신';}
				  if ($my_ummonth == '05') {$myung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_04 = '명'; $sin_06_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_06 = '신';}
				  if ($my_ummonth == '06') {$myung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_05 = '명'; $sin_07_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_07 = '신';}
				  if ($my_ummonth == '07') {$myung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_06 = '명'; $sin_08_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_08 = '신';}
				  if ($my_ummonth == '08') {$myung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_07 = '명'; $sin_09_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_09 = '신';}
				  if ($my_ummonth == '09') {$myung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_08 = '명'; $sin_10_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_10 = '신';}
				  if ($my_ummonth == '10') {$myung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_09 = '명'; $sin_11_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_11 = '신';}
				  if ($my_ummonth == '11') {$myung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_10 = '명'; $sin_12_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_12 = '신';}
				  if ($my_ummonth == '12') {$myung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_11 = '명'; $sin_01_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_01 = '신';} }

if ($my_hour_e == '寅') {if ($my_ummonth == '01') {$myung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_11 = '명'; $sin_03_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_03 = '신';}
                                  if ($my_ummonth == '02') {$myung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_12 = '명'; $sin_04_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_04 = '신';}
				  if ($my_ummonth == '03') {$myung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_01 = '명'; $sin_05_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_05 = '신';}
				  if ($my_ummonth == '04') {$myung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_02 = '명'; $sin_06_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_06 = '신';}
				  if ($my_ummonth == '05') {$myung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_03 = '명'; $sin_07_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_07 = '신';}
				  if ($my_ummonth == '06') {$myung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_04 = '명'; $sin_08_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_08 = '신';}
				  if ($my_ummonth == '07') {$myung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_05 = '명'; $sin_09_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_09 = '신';}
				  if ($my_ummonth == '08') {$myung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_06 = '명'; $sin_10_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_10 = '신';}
				  if ($my_ummonth == '09') {$myung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_07 = '명'; $sin_11_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_11 = '신';}
				  if ($my_ummonth == '10') {$myung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_08 = '명'; $sin_12_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_12 = '신';}
				  if ($my_ummonth == '11') {$myung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_09 = '명'; $sin_01_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_01 = '신';}
				  if ($my_ummonth == '12') {$myung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_10 = '명'; $sin_02_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_02 = '신';} }

if ($my_hour_e == '卯') {if ($my_ummonth == '01') {$myung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_10 = '명'; $sin_04_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_04 = '신';}
                                  if ($my_ummonth == '02') {$myung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_11 = '명'; $sin_05_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_05 = '신';}
				  if ($my_ummonth == '03') {$myung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_12 = '명'; $sin_06_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_06 = '신';}
				  if ($my_ummonth == '04') {$myung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_01 = '명'; $sin_07_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_07 = '신';}
				  if ($my_ummonth == '05') {$myung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_02 = '명'; $sin_08_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_08 = '신';}
				  if ($my_ummonth == '06') {$myung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_03 = '명'; $sin_09_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_09 = '신';}
				  if ($my_ummonth == '07') {$myung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_04 = '명'; $sin_10_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_10 = '신';}
				  if ($my_ummonth == '08') {$myung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_05 = '명'; $sin_11_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_11 = '신';}
				  if ($my_ummonth == '09') {$myung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_06 = '명'; $sin_12_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_12 = '신';}
				  if ($my_ummonth == '10') {$myung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_07 = '명'; $sin_01_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_01 = '신';}
				  if ($my_ummonth == '11') {$myung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_08 = '명'; $sin_02_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_02 = '신';}
				  if ($my_ummonth == '12') {$myung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_09 = '명'; $sin_03_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_03 = '신';} }


if ($my_hour_e == '辰') {if ($my_ummonth == '01') {$myung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_09 = '명'; $sin_05_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_05 = '신';}
                                  if ($my_ummonth == '02') {$myung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_10 = '명'; $sin_06_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_06 = '신';}
				  if ($my_ummonth == '03') {$myung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_11 = '명'; $sin_07_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_07 = '신';}
				  if ($my_ummonth == '04') {$myung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_12 = '명'; $sin_08_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_08 = '신';}
				  if ($my_ummonth == '05') {$myung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_01 = '명'; $sin_09_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_09 = '신';}
				  if ($my_ummonth == '06') {$myung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_02 = '명'; $sin_10_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_10 = '신';}
				  if ($my_ummonth == '07') {$myung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_03 = '명'; $sin_11_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_11 = '신';}
				  if ($my_ummonth == '08') {$myung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_04 = '명'; $sin_12_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_12 = '신';}
				  if ($my_ummonth == '09') {$myung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_05 = '명'; $sin_01_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_01 = '신';}
				  if ($my_ummonth == '10') {$myung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_06 = '명'; $sin_02_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_02 = '신';}
				  if ($my_ummonth == '11') {$myung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_07 = '명'; $sin_03_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_03 = '신';}
				  if ($my_ummonth == '12') {$myung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_08 = '명'; $sin_04_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_04 = '신';} }

if ($my_hour_e == '巳') {if ($my_ummonth == '01') {$myung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_08 = '명'; $sin_06_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_06 = '신';}
                                  if ($my_ummonth == '02') {$myung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_09 = '명'; $sin_07_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_07 = '신';}
				  if ($my_ummonth == '03') {$myung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_10 = '명'; $sin_08_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_08 = '신';}
				  if ($my_ummonth == '04') {$myung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_11 = '명'; $sin_09_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_09 = '신';}
				  if ($my_ummonth == '05') {$myung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_12 = '명'; $sin_10_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_10 = '신';}
				  if ($my_ummonth == '06') {$myung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_01 = '명'; $sin_11_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_11 = '신';}
				  if ($my_ummonth == '07') {$myung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_02 = '명'; $sin_12_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_12 = '신';}
				  if ($my_ummonth == '08') {$myung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_03 = '명'; $sin_01_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_01 = '신';}
				  if ($my_ummonth == '09') {$myung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_04 = '명'; $sin_02_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_02 = '신';}
				  if ($my_ummonth == '10') {$myung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_05 = '명'; $sin_03_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_03 = '신';}
				  if ($my_ummonth == '11') {$myung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_06 = '명'; $sin_04_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_04 = '신';}
				  if ($my_ummonth == '12') {$myung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_07 = '명'; $sin_05_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_05 = '신';} }

if ($my_hour_e == '午') {if ($my_ummonth == '01') {$myung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_07 = '명'; $sin_07_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_07 = '신';}
                                  if ($my_ummonth == '02') {$myung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_08 = '명'; $sin_08_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_08 = '신';}
				  if ($my_ummonth == '03') {$myung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_09 = '명'; $sin_09_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_09 = '신';}
				  if ($my_ummonth == '04') {$myung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_10 = '명'; $sin_10_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_10 = '신';}
				  if ($my_ummonth == '05') {$myung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_11 = '명'; $sin_11_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_11 = '신';}
				  if ($my_ummonth == '06') {$myung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_12 = '명'; $sin_12_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_12 = '신';}
				  if ($my_ummonth == '07') {$myung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_01 = '명'; $sin_01_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_01 = '신';}
				  if ($my_ummonth == '08') {$myung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_02 = '명'; $sin_02_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_02 = '신';}
				  if ($my_ummonth == '09') {$myung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_03 = '명'; $sin_03_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_03 = '신';}
				  if ($my_ummonth == '10') {$myung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_04 = '명'; $sin_04_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_04 = '신';}
				  if ($my_ummonth == '11') {$myung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_05 = '명'; $sin_05_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_05 = '신';}
				  if ($my_ummonth == '12') {$myung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_06 = '명'; $sin_06_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_06 = '신';} }


if ($my_hour_e == '未') {if ($my_ummonth == '01') {$myung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_06 = '명'; $sin_08_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_08 = '신';}
                                  if ($my_ummonth == '02') {$myung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_07 = '명'; $sin_09_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_09 = '신';}
				  if ($my_ummonth == '03') {$myung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_08 = '명'; $sin_10_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_10 = '신';}
				  if ($my_ummonth == '04') {$myung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_09 = '명'; $sin_11_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_11 = '신';}
				  if ($my_ummonth == '05') {$myung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_10 = '명'; $sin_12_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_12 = '신';}
				  if ($my_ummonth == '06') {$myung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_11 = '명'; $sin_01_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_01 = '신';}
				  if ($my_ummonth == '07') {$myung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_12 = '명'; $sin_02_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_02 = '신';}
				  if ($my_ummonth == '08') {$myung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_01 = '명'; $sin_03_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_03 = '신';}
				  if ($my_ummonth == '09') {$myung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_02 = '명'; $sin_04_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_04 = '신';}
				  if ($my_ummonth == '10') {$myung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_03 = '명'; $sin_05_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_05 = '신';}
				  if ($my_ummonth == '11') {$myung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_04 = '명'; $sin_06_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_06 = '신';}
				  if ($my_ummonth == '12') {$myung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_05 = '명'; $sin_07_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_07 = '신';} }

if ($my_hour_e == '申') {if ($my_ummonth == '01') {$myung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_05 = '명'; $sin_09_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_09 = '신';}
                                  if ($my_ummonth == '02') {$myung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_06 = '명'; $sin_10_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_10 = '신';}
				  if ($my_ummonth == '03') {$myung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_07 = '명'; $sin_11_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_11 = '신';}
				  if ($my_ummonth == '04') {$myung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_08 = '명'; $sin_12_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_12 = '신';}
				  if ($my_ummonth == '05') {$myung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_09 = '명'; $sin_01_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_01 = '신';}
				  if ($my_ummonth == '06') {$myung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_10 = '명'; $sin_02_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_02 = '신';}
				  if ($my_ummonth == '07') {$myung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_11 = '명'; $sin_03_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_03 = '신';}
				  if ($my_ummonth == '08') {$myung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_12 = '명'; $sin_04_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_04 = '신';}
				  if ($my_ummonth == '09') {$myung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_01 = '명'; $sin_05_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_05 = '신';}
				  if ($my_ummonth == '10') {$myung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_02 = '명'; $sin_06_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_06 = '신';}
				  if ($my_ummonth == '11') {$myung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_03 = '명'; $sin_07_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_07 = '신';}
				  if ($my_ummonth == '12') {$myung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_04 = '명'; $sin_08_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_08 = '신';} }



if ($my_hour_e == '酉') {if ($my_ummonth == '01') {$myung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_04 = '명'; $sin_10_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_10 = '신';}
                                  if ($my_ummonth == '02') {$myung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_05 = '명'; $sin_11_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_11 = '신';}
				  if ($my_ummonth == '03') {$myung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_06 = '명'; $sin_12_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_12 = '신';}
				  if ($my_ummonth == '04') {$myung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_07 = '명'; $sin_01_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_01 = '신';}
				  if ($my_ummonth == '05') {$myung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_08 = '명'; $sin_02_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_02 = '신';}
				  if ($my_ummonth == '06') {$myung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_09 = '명'; $sin_03_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_03 = '신';}
				  if ($my_ummonth == '07') {$myung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_10 = '명'; $sin_04_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_04 = '신';}
				  if ($my_ummonth == '08') {$myung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_11 = '명'; $sin_05_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_05 = '신';}
				  if ($my_ummonth == '09') {$myung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_12 = '명'; $sin_06_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_06 = '신';}
				  if ($my_ummonth == '10') {$myung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_01 = '명'; $sin_07_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_07 = '신';}
				  if ($my_ummonth == '11') {$myung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_02 = '명'; $sin_08_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_08 = '신';}
				  if ($my_ummonth == '12') {$myung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_03 = '명'; $sin_09_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_09 = '신';} }


if ($my_hour_e == '戌') {if ($my_ummonth == '01') {$myung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_03 = '명'; $sin_11_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_11 = '신';}
                                  if ($my_ummonth == '02') {$myung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_04 = '명'; $sin_12_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_12 = '신';}
				  if ($my_ummonth == '03') {$myung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_05 = '명'; $sin_01_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_01 = '신';}
				  if ($my_ummonth == '04') {$myung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_06 = '명'; $sin_02_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_02 = '신';}
				  if ($my_ummonth == '05') {$myung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_07 = '명'; $sin_03_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_03 = '신';}
				  if ($my_ummonth == '06') {$myung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_08 = '명'; $sin_04_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_04 = '신';}
				  if ($my_ummonth == '07') {$myung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_09 = '명'; $sin_05_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_05 = '신';}
				  if ($my_ummonth == '08') {$myung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_10 = '명'; $sin_06_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_06 = '신';}
				  if ($my_ummonth == '09') {$myung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_11 = '명'; $sin_07_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_07 = '신';}
				  if ($my_ummonth == '10') {$myung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_12 = '명'; $sin_08_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_08 = '신';}
				  if ($my_ummonth == '11') {$myung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_01 = '명'; $sin_09_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_09 = '신';}
				  if ($my_ummonth == '12') {$myung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_02 = '명'; $sin_10_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_10 = '신';} }

if ($my_hour_e == '亥') {if ($my_ummonth == '01') {$myung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_02 = '명'; $sin_12_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_12 = '신';}
                                  if ($my_ummonth == '02') {$myung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_03 = '명'; $sin_01_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_01 = '신';}
				  if ($my_ummonth == '03') {$myung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_04 = '명'; $sin_02_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_02 = '신';}
				  if ($my_ummonth == '04') {$myung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_05 = '명'; $sin_03_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_03 = '신';}
				  if ($my_ummonth == '05') {$myung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_06 = '명'; $sin_04_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_04 = '신';}
				  if ($my_ummonth == '06') {$myung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_07 = '명'; $sin_05_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_05 = '신';}
				  if ($my_ummonth == '07') {$myung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_08 = '명'; $sin_06_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_06 = '신';}
				  if ($my_ummonth == '08') {$myung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_09 = '명'; $sin_07_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_07 = '신';}
				  if ($my_ummonth == '09') {$myung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_10 = '명'; $sin_08_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_08 = '신';}
				  if ($my_ummonth == '10') {$myung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_11 = '명'; $sin_09_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_09 = '신';}
				  if ($my_ummonth == '11') {$myung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_12 = '명'; $sin_10_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_10 = '신';}
				  if ($my_ummonth == '12') {$myung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/myung.gif border=0 alt=명>';$myung_01 = '명'; $sin_11_disp = '<img src=/images/result_img/jum_img/hanja_img/sin.gif border=0 alt=신>';$sin_11 = '신';} }


#######################################################################12궁 찾기

if ($myung_01) {$gung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_01.gif border=0 alt=부모궁>';$gung_02 = '父母';
                       $gung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_02.gif border=0 alt=복덕궁>';$gung_03 = '福德';
		       $gung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_03.gif border=0 alt=전택궁>';$gung_04 = '田宅';
		       $gung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_04.gif border=0 alt=관록궁>';$gung_05 = '官祿';
		       $gung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_05.gif border=0 alt=노복궁>';$gung_06 = '奴僕';
		       $gung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_06.gif border=0 alt=천이궁>';$gung_07 = '遷移';
		       $gung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_07.gif border=0 alt=질액궁>';$gung_08 = '疾厄';
		       $gung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_08.gif border=0 alt=재백궁>';$gung_09 = '財帛';
		       $gung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_09.gif border=0 alt=자녀궁>';$gung_10 = '子女';
		       $gung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_10.gif border=0 alt=부처궁>';$gung_11 = '夫妻';
		       $gung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_11.gif border=0 alt=형제궁>';$gung_12 = '兄弟';
                       }

if ($myung_02) {$gung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_01.gif border=0 alt=부모궁>';$gung_03 = '父母';
                       $gung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_02.gif border=0 alt=복덕궁>';$gung_04 = '福德';
		       $gung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_03.gif border=0 alt=전택궁>';$gung_05 = '田宅';
		       $gung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_04.gif border=0 alt=관록궁>';$gung_06 = '官祿';
		       $gung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_05.gif border=0 alt=노복궁>';$gung_07 = '奴僕';
		       $gung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_06.gif border=0 alt=천이궁>';$gung_08 = '遷移';
		       $gung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_07.gif border=0 alt=질액궁>';$gung_09 = '疾厄';
		       $gung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_08.gif border=0 alt=재백궁>';$gung_10 = '財帛';
		       $gung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_09.gif border=0 alt=자녀궁>';$gung_11 = '子女';
		       $gung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_10.gif border=0 alt=부처궁>';$gung_12 = '夫妻';
		       $gung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_11.gif border=0 alt=형제궁>';$gung_01 = '兄弟';
                       }
if ($myung_03) {$gung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_01.gif border=0 alt=부모궁>';$gung_04 = '父母';
                       $gung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_02.gif border=0 alt=복덕궁>';$gung_05 = '福德';
		       $gung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_03.gif border=0 alt=전택궁>';$gung_06 = '田宅';
		       $gung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_04.gif border=0 alt=관록궁>';$gung_07 = '官祿';
		       $gung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_05.gif border=0 alt=노복궁>';$gung_08 = '奴僕';
		       $gung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_06.gif border=0 alt=천이궁>';$gung_09 = '遷移';
		       $gung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_07.gif border=0 alt=질액궁>';$gung_10 = '疾厄';
		       $gung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_08.gif border=0 alt=재백궁>';$gung_11 = '財帛';
		       $gung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_09.gif border=0 alt=자녀궁>';$gung_12 = '子女';
		       $gung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_10.gif border=0 alt=부처궁>';$gung_01 = '夫妻';
		       $gung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_11.gif border=0 alt=형제궁>';$gung_02 = '兄弟';
                       }
if ($myung_04) {$gung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_01.gif border=0 alt=부모궁>';$gung_05 = '父母';
                       $gung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_02.gif border=0 alt=복덕궁>';$gung_06 = '福德';
		       $gung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_03.gif border=0 alt=전택궁>';$gung_07 = '田宅';
		       $gung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_04.gif border=0 alt=관록궁>';$gung_08 = '官祿';
		       $gung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_05.gif border=0 alt=노복궁>';$gung_09 = '奴僕';
		       $gung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_06.gif border=0 alt=천이궁>';$gung_10 = '遷移';
		       $gung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_07.gif border=0 alt=질액궁>';$gung_11 = '疾厄';
		       $gung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_08.gif border=0 alt=재백궁>';$gung_12 = '財帛';
		       $gung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_09.gif border=0 alt=자녀궁>';$gung_01 = '子女';
		       $gung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_10.gif border=0 alt=부처궁>';$gung_02 = '夫妻';
		       $gung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_11.gif border=0 alt=형제궁>';$gung_03 = '兄弟';
                       }
if ($myung_05) {$gung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_01.gif border=0 alt=부모궁>';$gung_06 = '父母';
                       $gung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_02.gif border=0 alt=복덕궁>';$gung_07 = '福德';
		       $gung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_03.gif border=0 alt=전택궁>';$gung_08 = '田宅';
		       $gung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_04.gif border=0 alt=관록궁>';$gung_09 = '官祿';
		       $gung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_05.gif border=0 alt=노복궁>';$gung_10 = '奴僕';
		       $gung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_06.gif border=0 alt=천이궁>';$gung_11 = '遷移';
		       $gung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_07.gif border=0 alt=질액궁>';$gung_12 = '疾厄';
		       $gung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_08.gif border=0 alt=재백궁>';$gung_01 = '財帛';
		       $gung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_09.gif border=0 alt=자녀궁>';$gung_02 = '子女';
		       $gung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_10.gif border=0 alt=부처궁>';$gung_03 = '夫妻';
		       $gung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_11.gif border=0 alt=형제궁>';$gung_04 = '兄弟';
                       }
if ($myung_06) {$gung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_01.gif border=0 alt=부모궁>';$gung_07 = '父母';
                       $gung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_02.gif border=0 alt=복덕궁>';$gung_08 = '福德';
		       $gung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_03.gif border=0 alt=전택궁>';$gung_09 = '田宅';
		       $gung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_04.gif border=0 alt=관록궁>';$gung_10 = '官祿';
		       $gung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_05.gif border=0 alt=노복궁>';$gung_11 = '奴僕';
		       $gung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_06.gif border=0 alt=천이궁>';$gung_12 = '遷移';
		       $gung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_07.gif border=0 alt=질액궁>';$gung_01 = '疾厄';
		       $gung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_08.gif border=0 alt=재백궁>';$gung_02 = '財帛';
		       $gung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_09.gif border=0 alt=자녀궁>';$gung_03 = '子女';
		       $gung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_10.gif border=0 alt=부처궁>';$gung_04 = '夫妻';
		       $gung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_11.gif border=0 alt=형제궁>';$gung_05 = '兄弟';
                       }
if ($myung_07) {$gung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_01.gif border=0 alt=부모궁>';$gung_08 = '父母';
                       $gung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_02.gif border=0 alt=복덕궁>';$gung_09 = '福德';
		       $gung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_03.gif border=0 alt=전택궁>';$gung_10 = '田宅';
		       $gung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_04.gif border=0 alt=관록궁>';$gung_11 = '官祿';
		       $gung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_05.gif border=0 alt=노복궁>';$gung_12 = '奴僕';
		       $gung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_06.gif border=0 alt=천이궁>';$gung_01 = '遷移';
		       $gung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_07.gif border=0 alt=질액궁>';$gung_02 = '疾厄';
		       $gung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_08.gif border=0 alt=재백궁>';$gung_03 = '財帛';
		       $gung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_09.gif border=0 alt=자녀궁>';$gung_04 = '子女';
		       $gung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_10.gif border=0 alt=부처궁>';$gung_05 = '夫妻';
		       $gung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_11.gif border=0 alt=형제궁>';$gung_06 = '兄弟';
                       }
if ($myung_08) {$gung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_01.gif border=0 alt=부모궁>';$gung_09 = '父母';
                       $gung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_02.gif border=0 alt=복덕궁>';$gung_10 = '福德';
		       $gung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_03.gif border=0 alt=전택궁>';$gung_11 = '田宅';
		       $gung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_04.gif border=0 alt=관록궁>';$gung_12 = '官祿';
		       $gung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_05.gif border=0 alt=노복궁>';$gung_01 = '奴僕';
		       $gung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_06.gif border=0 alt=천이궁>';$gung_02 = '遷移';
		       $gung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_07.gif border=0 alt=질액궁>';$gung_03 = '疾厄';
		       $gung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_08.gif border=0 alt=재백궁>';$gung_04 = '財帛';
		       $gung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_09.gif border=0 alt=자녀궁>';$gung_05 = '子女';
		       $gung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_10.gif border=0 alt=부처궁>';$gung_06 = '夫妻';
		       $gung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_11.gif border=0 alt=형제궁>';$gung_07 = '兄弟';
                       }
if ($myung_09) {$gung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_01.gif border=0 alt=부모궁>';$gung_10 = '父母';
                       $gung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_02.gif border=0 alt=복덕궁>';$gung_11 = '福德';
		       $gung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_03.gif border=0 alt=전택궁>';$gung_12 = '田宅';
		       $gung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_04.gif border=0 alt=관록궁>';$gung_01 = '官祿';
		       $gung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_05.gif border=0 alt=노복궁>';$gung_02 = '奴僕';
		       $gung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_06.gif border=0 alt=천이궁>';$gung_03 = '遷移';
		       $gung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_07.gif border=0 alt=질액궁>';$gung_04 = '疾厄';
		       $gung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_08.gif border=0 alt=재백궁>';$gung_05 = '財帛';
		       $gung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_09.gif border=0 alt=자녀궁>';$gung_06 = '子女';
		       $gung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_10.gif border=0 alt=부처궁>';$gung_07 = '夫妻';
		       $gung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_11.gif border=0 alt=형제궁>';$gung_08 = '兄弟';
                       }
if ($myung_10) {$gung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_01.gif border=0 alt=부모궁>';$gung_11 = '父母';
                       $gung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_02.gif border=0 alt=복덕궁>';$gung_12 = '福德';
		       $gung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_03.gif border=0 alt=전택궁>';$gung_01 = '田宅';
		       $gung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_04.gif border=0 alt=관록궁>';$gung_02 = '官祿';
		       $gung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_05.gif border=0 alt=노복궁>';$gung_03 = '奴僕';
		       $gung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_06.gif border=0 alt=천이궁>';$gung_04 = '遷移';
		       $gung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_07.gif border=0 alt=질액궁>';$gung_05 = '疾厄';
		       $gung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_08.gif border=0 alt=재백궁>';$gung_06 = '財帛';
		       $gung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_09.gif border=0 alt=자녀궁>';$gung_07 = '子女';
		       $gung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_10.gif border=0 alt=부처궁>';$gung_08 = '夫妻';
		       $gung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_11.gif border=0 alt=형제궁>';$gung_09 = '兄弟';
                       }
if ($myung_11) {$gung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_01.gif border=0 alt=부모궁>';$gung_12 = '父母';
                       $gung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_02.gif border=0 alt=복덕궁>';$gung_01 = '福德';
		       $gung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_03.gif border=0 alt=전택궁>';$gung_02 = '田宅';
		       $gung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_04.gif border=0 alt=관록궁>';$gung_03 = '官祿';
		       $gung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_05.gif border=0 alt=노복궁>';$gung_04 = '奴僕';
		       $gung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_06.gif border=0 alt=천이궁>';$gung_05 = '遷移';
		       $gung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_07.gif border=0 alt=질액궁>';$gung_06 = '疾厄';
		       $gung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_08.gif border=0 alt=재백궁>';$gung_07 = '財帛';
		       $gung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_09.gif border=0 alt=자녀궁>';$gung_08 = '子女';
		       $gung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_10.gif border=0 alt=부처궁>';$gung_09 = '夫妻';
		       $gung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_11.gif border=0 alt=형제궁>';$gung_10 = '兄弟';
                       }
if ($myung_12) {$gung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_01.gif border=0 alt=부모궁>';$gung_01 = '父母';
                       $gung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_02.gif border=0 alt=복덕궁>';$gung_02 = '福德';
		       $gung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_03.gif border=0 alt=전택궁>';$gung_03 = '田宅';
		       $gung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_04.gif border=0 alt=관록궁>';$gung_04 = '官祿';
		       $gung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_05.gif border=0 alt=노복궁>';$gung_05 = '奴僕';
		       $gung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_06.gif border=0 alt=천이궁>';$gung_06 = '遷移';
		       $gung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_07.gif border=0 alt=질액궁>';$gung_07 = '疾厄';
		       $gung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_08.gif border=0 alt=재백궁>';$gung_08 = '財帛';
		       $gung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_09.gif border=0 alt=자녀궁>';$gung_09 = '子女';
		       $gung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_10.gif border=0 alt=부처궁>';$gung_10 = '夫妻';
		       $gung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/gung_11.gif border=0 alt=형제궁>';$gung_11 = '兄弟';
                       }


#####################################################################납음오행
if ($myung_01) {
                      if ($gabja_01 == '丙寅') {$myung_guk = '火6局';}
		      if ($gabja_01 == '戊寅') {$myung_guk = '土5局';}
		      if ($gabja_01 == '庚寅') {$myung_guk = '木3局';}
		      if ($gabja_01 == '壬寅') {$myung_guk = '金4局';}
		      if ($gabja_01 == '甲寅') {$myung_guk = '水2局';}
		      }

if ($myung_02) {
                      if ($gabja_02 == '丁卯') {$myung_guk = '火6局';}
		      if ($gabja_02 == '己卯') {$myung_guk = '土5局';}
		      if ($gabja_02 == '辛卯') {$myung_guk = '木3局';}
		      if ($gabja_02 == '癸卯') {$myung_guk = '金4局';}
		      if ($gabja_02 == '乙卯') {$myung_guk = '水2局';}
		      }

if ($myung_03) {
                      if ($gabja_03 == '戊辰') {$myung_guk = '木3局';}
		      if ($gabja_03 == '庚辰') {$myung_guk = '金4局';}
		      if ($gabja_03 == '壬辰') {$myung_guk = '水2局';}
		      if ($gabja_03 == '甲辰') {$myung_guk = '火6局';}
		      if ($gabja_03 == '丙辰') {$myung_guk = '土5局';}
		      }

if ($myung_04) {
                      if ($gabja_04 == '己巳') {$myung_guk = '木3局';}
		      if ($gabja_04 == '辛巳') {$myung_guk = '金4局';}
		      if ($gabja_04 == '癸巳') {$myung_guk = '水2局';}
		      if ($gabja_04 == '乙巳') {$myung_guk = '火6局';}
		      if ($gabja_04 == '丁巳') {$myung_guk = '土5局';}
		      }

if ($myung_05) {
                      if ($gabja_05 == '庚午') {$myung_guk = '土5局';}
		      if ($gabja_05 == '壬午') {$myung_guk = '木3局';}
		      if ($gabja_05 == '甲午') {$myung_guk = '金4局';}
		      if ($gabja_05 == '丙午') {$myung_guk = '水2局';}
		      if ($gabja_05 == '戊午') {$myung_guk = '火6局';}
		      }

if ($myung_06) {
                      if ($gabja_06 == '辛未') {$myung_guk = '土5局';}
		      if ($gabja_06 == '癸未') {$myung_guk = '木3局';}
		      if ($gabja_06 == '乙未') {$myung_guk = '金4局';}
		      if ($gabja_06 == '丁未') {$myung_guk = '水2局';}
		      if ($gabja_06 == '己未') {$myung_guk = '火6局';}
		      }

if ($myung_07) {
                      if ($gabja_07 == '壬申') {$myung_guk = '金4局';}
		      if ($gabja_07 == '甲申') {$myung_guk = '水2局';}
		      if ($gabja_07 == '丙申') {$myung_guk = '火6局';}
		      if ($gabja_07 == '戊申') {$myung_guk = '土5局';}
		      if ($gabja_07 == '庚申') {$myung_guk = '木3局';}
		      }

if ($myung_08) {
                      if ($gabja_08 == '癸酉') {$myung_guk = '金4局';}
		      if ($gabja_08 == '乙酉') {$myung_guk = '水2局';}
		      if ($gabja_08 == '丁酉') {$myung_guk = '火6局';}
		      if ($gabja_08 == '己酉') {$myung_guk = '土5局';}
		      if ($gabja_08 == '辛酉') {$myung_guk = '木3局';}
		      }

if ($myung_09) {
                      if ($gabja_09 == '甲戌') {$myung_guk = '火6局';}
		      if ($gabja_09 == '丙戌') {$myung_guk = '土5局';}
		      if ($gabja_09 == '戊戌') {$myung_guk = '木3局';}
		      if ($gabja_09 == '庚戌') {$myung_guk = '金4局';}
		      if ($gabja_09 == '壬戌') {$myung_guk = '水2局';}
		      }

if ($myung_10) {
                      if ($gabja_10 == '乙亥') {$myung_guk = '火6局';}
		      if ($gabja_10 == '丁亥') {$myung_guk = '土5局';}
		      if ($gabja_10 == '己亥') {$myung_guk = '木3局';}
		      if ($gabja_10 == '辛亥') {$myung_guk = '金4局';}
		      if ($gabja_10 == '癸亥') {$myung_guk = '水2局';}
		      }

if ($myung_11) {
                      if ($gabja_11 == '甲子') {$myung_guk = '金4局';}
		      if ($gabja_11 == '丙子') {$myung_guk = '水2局';}
		      if ($gabja_11 == '戊子') {$myung_guk = '火6局';}
		      if ($gabja_11 == '庚子') {$myung_guk = '土5局';}
		      if ($gabja_11 == '壬子') {$myung_guk = '木3局';}
		      }

if ($myung_12) {
                      if ($gabja_12 == '乙丑') {$myung_guk = '金4局';}
		      if ($gabja_12 == '丁丑') {$myung_guk = '水2局';}
		      if ($gabja_12 == '己丑') {$myung_guk = '火6局';}
		      if ($gabja_12 == '辛丑') {$myung_guk = '土5局';}
		      if ($gabja_12 == '癸丑') {$myung_guk = '木3局';}
		      }

#########################################################################################자미성 찾기

if ($myung_guk == '土5局') {
                                       if ($my_umday == '01') {$jami_05_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_05 = '자미';}
				       if ($my_umday == '02') {$jami_10_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_10 = '자미';}
				       if ($my_umday == '03') {$jami_03_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_03 = '자미';}
				       if ($my_umday == '04') {$jami_12_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_12 = '자미';}
				       if ($my_umday == '05') {$jami_01_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_01 = '자미';}
				       if ($my_umday == '06') {$jami_06_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_06 = '자미';}
				       if ($my_umday == '07') {$jami_11_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_11 = '자미';}
				       if ($my_umday == '08') {$jami_04_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_04 = '자미';}
				       if ($my_umday == '09') {$jami_01_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_01 = '자미';}
                                       if ($my_umday == '10') {$jami_02_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_02 = '자미';}
				       if ($my_umday == '11') {$jami_07_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_07 = '자미';}
				       if ($my_umday == '12') {$jami_12_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_12 = '자미';}
				       if ($my_umday == '13') {$jami_05_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_05 = '자미';}
				       if ($my_umday == '14') {$jami_02_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_02 = '자미';}
				       if ($my_umday == '15') {$jami_03_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_03 = '자미';}
				       if ($my_umday == '16') {$jami_08_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_08 = '자미';}
				       if ($my_umday == '17') {$jami_01_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_01 = '자미';}
				       if ($my_umday == '18') {$jami_06_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_06 = '자미';}
				       if ($my_umday == '19') {$jami_03_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_03 = '자미';}
				       if ($my_umday == '20') {$jami_04_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_04 = '자미';}
				       if ($my_umday == '21') {$jami_09_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_09 = '자미';}
				       if ($my_umday == '22') {$jami_02_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_02 = '자미';}
				       if ($my_umday == '23') {$jami_07_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_07 = '자미';}
				       if ($my_umday == '24') {$jami_04_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_04 = '자미';}
				       if ($my_umday == '25') {$jami_05_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_05 = '자미';}
				       if ($my_umday == '26') {$jami_10_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_10 = '자미';}
				       if ($my_umday == '27') {$jami_03_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_03 = '자미';}
				       if ($my_umday == '28') {$jami_08_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_08 = '자미';}
				       if ($my_umday == '29') {$jami_05_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_05 = '자미';}
				       if ($my_umday == '30') {$jami_06_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_06 = '자미';}


                                      }

if ($myung_guk == '水2局') {
                                       if ($my_umday == '01') {$jami_12_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_12 = '자미';}
				       if ($my_umday == '02') {$jami_01_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_01 = '자미';}
				       if ($my_umday == '03') {$jami_01_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_01 = '자미';}
				       if ($my_umday == '04') {$jami_02_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_02 = '자미';}
				       if ($my_umday == '05') {$jami_02_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_02 = '자미';}
				       if ($my_umday == '06') {$jami_03_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_03 = '자미';}
				       if ($my_umday == '07') {$jami_03_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_03 = '자미';}
				       if ($my_umday == '08') {$jami_04_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_04 = '자미';}
				       if ($my_umday == '09') {$jami_04_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_04 = '자미';}
                                       if ($my_umday == '10') {$jami_05_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_05 = '자미';}
				       if ($my_umday == '11') {$jami_05_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_05 = '자미';}
				       if ($my_umday == '12') {$jami_06_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_06 = '자미';}
				       if ($my_umday == '13') {$jami_06_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_06 = '자미';}
				       if ($my_umday == '14') {$jami_07_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_07 = '자미';}
				       if ($my_umday == '15') {$jami_07_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_07 = '자미';}
				       if ($my_umday == '16') {$jami_08_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_08 = '자미';}
				       if ($my_umday == '17') {$jami_08_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_08 = '자미';}
				       if ($my_umday == '18') {$jami_09_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_09 = '자미';}
				       if ($my_umday == '19') {$jami_09_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_09 = '자미';}
				       if ($my_umday == '20') {$jami_10_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_10 = '자미';}
				       if ($my_umday == '21') {$jami_10_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_10 = '자미';}
				       if ($my_umday == '22') {$jami_11_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_11 = '자미';}
				       if ($my_umday == '23') {$jami_11_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_11 = '자미';}
				       if ($my_umday == '24') {$jami_12_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_12 = '자미';}
				       if ($my_umday == '25') {$jami_12_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_12 = '자미';}
				       if ($my_umday == '26') {$jami_01_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_01 = '자미';}
				       if ($my_umday == '27') {$jami_01_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_01 = '자미';}
				       if ($my_umday == '28') {$jami_02_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_02 = '자미';}
				       if ($my_umday == '29') {$jami_02_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_02 = '자미';}
				       if ($my_umday == '30') {$jami_03_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_03 = '자미';}


                                      }


if ($myung_guk == '木3局') {
                                       if ($my_umday == '01') {$jami_03_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_03 = '자미';}
				       if ($my_umday == '02') {$jami_12_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_12 = '자미';}
				       if ($my_umday == '03') {$jami_01_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_01 = '자미';}
				       if ($my_umday == '04') {$jami_04_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_04 = '자미';}
				       if ($my_umday == '05') {$jami_01_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_01 = '자미';}
				       if ($my_umday == '06') {$jami_02_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_02 = '자미';}
				       if ($my_umday == '07') {$jami_05_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_05 = '자미';}
				       if ($my_umday == '08') {$jami_02_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_02 = '자미';}
				       if ($my_umday == '09') {$jami_03_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_03 = '자미';}
                                       if ($my_umday == '10') {$jami_06_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_06 = '자미';}
				       if ($my_umday == '11') {$jami_03_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_03 = '자미';}
				       if ($my_umday == '12') {$jami_04_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_04 = '자미';}
				       if ($my_umday == '13') {$jami_07_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_07 = '자미';}
				       if ($my_umday == '14') {$jami_04_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_04 = '자미';}
				       if ($my_umday == '15') {$jami_05_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_05 = '자미';}
				       if ($my_umday == '16') {$jami_08_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_08 = '자미';}
				       if ($my_umday == '17') {$jami_05_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_05 = '자미';}
				       if ($my_umday == '18') {$jami_06_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_06 = '자미';}
				       if ($my_umday == '19') {$jami_09_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_09 = '자미';}
				       if ($my_umday == '20') {$jami_06_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_06 = '자미';}
				       if ($my_umday == '21') {$jami_07_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_07 = '자미';}
				       if ($my_umday == '22') {$jami_10_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_10 = '자미';}
				       if ($my_umday == '23') {$jami_07_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_07 = '자미';}
				       if ($my_umday == '24') {$jami_08_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_08 = '자미';}
				       if ($my_umday == '25') {$jami_11_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_11 = '자미';}
				       if ($my_umday == '26') {$jami_08_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_08 = '자미';}
				       if ($my_umday == '27') {$jami_09_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_09 = '자미';}
				       if ($my_umday == '28') {$jami_12_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_12 = '자미';}
				       if ($my_umday == '29') {$jami_09_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_09 = '자미';}
				       if ($my_umday == '30') {$jami_10_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_10 = '자미';}


                                      }

if ($myung_guk == '金4局') {
                                       if ($my_umday == '01') {$jami_10_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_10 = '자미';}
				       if ($my_umday == '02') {$jami_03_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_03 = '자미';}
				       if ($my_umday == '03') {$jami_12_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_12 = '자미';}
				       if ($my_umday == '04') {$jami_01_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_01 = '자미';}
				       if ($my_umday == '05') {$jami_11_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_11 = '자미';}
				       if ($my_umday == '06') {$jami_04_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_04 = '자미';}
				       if ($my_umday == '07') {$jami_01_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_01 = '자미';}
				       if ($my_umday == '08') {$jami_02_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_02 = '자미';}
				       if ($my_umday == '09') {$jami_12_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_12 = '자미';}
                                       if ($my_umday == '10') {$jami_05_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_05 = '자미';}
				       if ($my_umday == '11') {$jami_02_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_02 = '자미';}
				       if ($my_umday == '12') {$jami_03_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_03 = '자미';}
				       if ($my_umday == '13') {$jami_01_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_01 = '자미';}
				       if ($my_umday == '14') {$jami_06_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_06 = '자미';}
				       if ($my_umday == '15') {$jami_03_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_03 = '자미';}
				       if ($my_umday == '16') {$jami_04_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_04 = '자미';}
				       if ($my_umday == '17') {$jami_02_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_02 = '자미';}
				       if ($my_umday == '18') {$jami_07_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_07 = '자미';}
				       if ($my_umday == '19') {$jami_04_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_04 = '자미';}
				       if ($my_umday == '20') {$jami_05_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_05 = '자미';}
				       if ($my_umday == '21') {$jami_03_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_03 = '자미';}
				       if ($my_umday == '22') {$jami_08_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_08 = '자미';}
				       if ($my_umday == '23') {$jami_05_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_05 = '자미';}
				       if ($my_umday == '24') {$jami_06_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_06 = '자미';}
				       if ($my_umday == '25') {$jami_04_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_04 = '자미';}
				       if ($my_umday == '26') {$jami_09_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_09 = '자미';}
				       if ($my_umday == '27') {$jami_06_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_06 = '자미';}
				       if ($my_umday == '28') {$jami_07_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_07 = '자미';}
				       if ($my_umday == '29') {$jami_05_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_05 = '자미';}
				       if ($my_umday == '30') {$jami_10_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_10 = '자미';}


                                      }

if ($myung_guk == '火6局') {
                                       if ($my_umday == '01') {$jami_08_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_08 = '자미';}
				       if ($my_umday == '02') {$jami_05_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_05 = '자미';}
				       if ($my_umday == '03') {$jami_10_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_10 = '자미';}
				       if ($my_umday == '04') {$jami_03_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_03 = '자미';}
				       if ($my_umday == '05') {$jami_12_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_12 = '자미';}
				       if ($my_umday == '06') {$jami_01_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_01 = '자미';}
				       if ($my_umday == '07') {$jami_09_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_09 = '자미';}
				       if ($my_umday == '08') {$jami_06_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_06 = '자미';}
				       if ($my_umday == '09') {$jami_11_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_11 = '자미';}
                                       if ($my_umday == '10') {$jami_04_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_04 = '자미';}
				       if ($my_umday == '11') {$jami_01_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_01 = '자미';}
				       if ($my_umday == '12') {$jami_02_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_02 = '자미';}
				       if ($my_umday == '13') {$jami_10_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_10 = '자미';}
				       if ($my_umday == '14') {$jami_07_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_07 = '자미';}
				       if ($my_umday == '15') {$jami_12_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_12 = '자미';}
				       if ($my_umday == '16') {$jami_05_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_05 = '자미';}
				       if ($my_umday == '17') {$jami_02_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_02 = '자미';}
				       if ($my_umday == '18') {$jami_03_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_03 = '자미';}
				       if ($my_umday == '19') {$jami_11_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_11 = '자미';}
				       if ($my_umday == '20') {$jami_08_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_08 = '자미';}
				       if ($my_umday == '21') {$jami_01_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_01 = '자미';}
				       if ($my_umday == '22') {$jami_06_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_06 = '자미';}
				       if ($my_umday == '23') {$jami_03_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_03 = '자미';}
				       if ($my_umday == '24') {$jami_04_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_04 = '자미';}
				       if ($my_umday == '25') {$jami_12_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_12 = '자미';}
				       if ($my_umday == '26') {$jami_09_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_09 = '자미';}
				       if ($my_umday == '27') {$jami_02_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_02 = '자미';}
				       if ($my_umday == '28') {$jami_07_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_07 = '자미';}
				       if ($my_umday == '29') {$jami_04_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_04 = '자미';}
				       if ($my_umday == '30') {$jami_05_disp = '<img src=/images/result_img/jum_img/hanja_img/jami000.gif alt=자미 border=0>'; $jami_05 = '자미';}


                                      }
######################################################################################천부성찾기

if ($jami_01) {$cheanbu_01_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanbu.gif alt=천부 border=0>';$cheanbu_01 = '천부';}
if ($jami_02) {$cheanbu_12_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanbu.gif alt=천부 border=0>';$cheanbu_12 = '천부';}
if ($jami_03) {$cheanbu_11_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanbu.gif alt=천부 border=0>';$cheanbu_11 = '천부';}
if ($jami_04) {$cheanbu_10_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanbu.gif alt=천부 border=0>';$cheanbu_10 = '천부';}
if ($jami_05) {$cheanbu_09_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanbu.gif alt=천부 border=0>';$cheanbu_09 = '천부';}
if ($jami_06) {$cheanbu_08_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanbu.gif alt=천부 border=0>';$cheanbu_08 = '천부';}
if ($jami_07) {$cheanbu_07_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanbu.gif alt=천부 border=0>';$cheanbu_07 = '천부';}
if ($jami_08) {$cheanbu_06_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanbu.gif alt=천부 border=0>';$cheanbu_06 = '천부';}
if ($jami_09) {$cheanbu_05_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanbu.gif alt=천부 border=0>';$cheanbu_05 = '천부';}
if ($jami_10) {$cheanbu_04_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanbu.gif alt=천부 border=0>';$cheanbu_04 = '천부';}
if ($jami_11) {$cheanbu_03_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanbu.gif alt=천부 border=0>';$cheanbu_03 = '천부';}
if ($jami_12) {$cheanbu_02_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanbu.gif alt=천부 border=0>';$cheanbu_02 = '천부';}

########################################################################################나머지 자미성계 찾기
if ($jami_01) {$chengi_12_disp = '<img src=/images/result_img/jum_img/hanja_img/chengi000.gif alt=천기 border=0>';$chengi_12 = '천기';
                   $taeyang_10_disp = '<img src=/images/result_img/jum_img/hanja_img/taeyang000.gif alt=태양 border=0>';$taeyang_10 = '태양';
		   $mugok_09_disp = '<img src=/images/result_img/jum_img/hanja_img/mugok000.gif alt=무곡 border=0>';$mugok_09 = '무곡';
		   $chendong_08_disp = '<img src=/images/result_img/jum_img/hanja_img/chendong000.gif alt=천동 border=0>';$chendong_08 = '천동';
		   $yeamjung_05_disp = '<img src=/images/result_img/jum_img/hanja_img/yeamjung000.gif alt=염정 border=0>';$yeamjung_05 = '염정';
		   }

if ($jami_02) {$chengi_01_disp = '<img src=/images/result_img/jum_img/hanja_img/chengi000.gif alt=천기 border=0>';$chengi_01 = '천기';
                   $taeyang_11_disp = '<img src=/images/result_img/jum_img/hanja_img/taeyang000.gif alt=태양 border=0>';$taeyang_11 = '태양';
		   $mugok_10_disp = '<img src=/images/result_img/jum_img/hanja_img/mugok000.gif alt=무곡 border=0>';$mugok_10 = '무곡';
		   $chendong_09_disp = '<img src=/images/result_img/jum_img/hanja_img/chendong000.gif alt=천동 border=0>';$chendong_09 = '천동';
		   $yeamjung_06_disp = '<img src=/images/result_img/jum_img/hanja_img/yeamjung000.gif alt=염정 border=0>';$yeamjung_06 = '염정';
		   }

if ($jami_03) {$chengi_02_disp = '<img src=/images/result_img/jum_img/hanja_img/chengi000.gif alt=천기 border=0>';$chengi_02 = '천기';
                   $taeyang_12_disp = '<img src=/images/result_img/jum_img/hanja_img/taeyang000.gif alt=태양 border=0>';$taeyang_12 = '태양';
		   $mugok_11_disp = '<img src=/images/result_img/jum_img/hanja_img/mugok000.gif alt=무곡 border=0>';$mugok_11 = '무곡';
		   $chendong_10_disp = '<img src=/images/result_img/jum_img/hanja_img/chendong000.gif alt=천동 border=0>';$chendong_10 = '천동';
		   $yeamjung_07_disp = '<img src=/images/result_img/jum_img/hanja_img/yeamjung000.gif alt=염정 border=0>';$yeamjung_07 = '염정';
		   }

if ($jami_04) {$chengi_03_disp = '<img src=/images/result_img/jum_img/hanja_img/chengi000.gif alt=천기 border=0>';$chengi_03 = '천기';
                   $taeyang_01_disp = '<img src=/images/result_img/jum_img/hanja_img/taeyang000.gif alt=태양 border=0>';$taeyang_01 = '태양';
		   $mugok_12_disp = '<img src=/images/result_img/jum_img/hanja_img/mugok000.gif alt=무곡 border=0>';$mugok_12 = '무곡';
		   $chendong_11_disp = '<img src=/images/result_img/jum_img/hanja_img/chendong000.gif alt=천동 border=0>';$chendong_11 = '천동';
		   $yeamjung_08_disp = '<img src=/images/result_img/jum_img/hanja_img/yeamjung000.gif alt=염정 border=0>';$yeamjung_08 = '염정';
		   }

if ($jami_05) {$chengi_04_disp = '<img src=/images/result_img/jum_img/hanja_img/chengi000.gif alt=천기 border=0>';$chengi_04 = '천기';
                   $taeyang_02_disp = '<img src=/images/result_img/jum_img/hanja_img/taeyang000.gif alt=태양 border=0>';$taeyang_02 = '태양';
		   $mugok_01_disp = '<img src=/images/result_img/jum_img/hanja_img/mugok000.gif alt=무곡 border=0>';$mugok_01 = '무곡';
		   $chendong_12_disp = '<img src=/images/result_img/jum_img/hanja_img/chendong000.gif alt=천동 border=0>';$chendong_12 = '천동';
		   $yeamjung_09_disp = '<img src=/images/result_img/jum_img/hanja_img/yeamjung000.gif alt=염정 border=0>';$yeamjung_09 = '염정';
		   }

if ($jami_06) {$chengi_05_disp = '<img src=/images/result_img/jum_img/hanja_img/chengi000.gif alt=천기 border=0>';$chengi_05 = '천기';
                   $taeyang_03_disp = '<img src=/images/result_img/jum_img/hanja_img/taeyang000.gif alt=태양 border=0>';$taeyang_03 = '태양';
		   $mugok_02_disp = '<img src=/images/result_img/jum_img/hanja_img/mugok000.gif alt=무곡 border=0>';$mugok_02 = '무곡';
		   $chendong_01_disp = '<img src=/images/result_img/jum_img/hanja_img/chendong000.gif alt=천동 border=0>';$chendong_01 = '천동';
		   $yeamjung_10_disp = '<img src=/images/result_img/jum_img/hanja_img/yeamjung000.gif alt=염정 border=0>';$yeamjung_10 = '염정';
		   }


if ($jami_07) {$chengi_06_disp = '<img src=/images/result_img/jum_img/hanja_img/chengi000.gif alt=천기 border=0>';$chengi_06 = '천기';
                   $taeyang_04_disp = '<img src=/images/result_img/jum_img/hanja_img/taeyang000.gif alt=태양 border=0>';$taeyang_04 = '태양';
		   $mugok_03_disp = '<img src=/images/result_img/jum_img/hanja_img/mugok000.gif alt=무곡 border=0>';$mugok_03 = '무곡';
		   $chendong_02_disp = '<img src=/images/result_img/jum_img/hanja_img/chendong000.gif alt=천동 border=0>';$chendong_02 = '천동';
		   $yeamjung_11_disp = '<img src=/images/result_img/jum_img/hanja_img/yeamjung000.gif alt=염정 border=0>';$yeamjung_11 = '염정';
		   }


if ($jami_08) {$chengi_07_disp = '<img src=/images/result_img/jum_img/hanja_img/chengi000.gif alt=천기 border=0>';$chengi_07 = '천기';
                   $taeyang_05_disp = '<img src=/images/result_img/jum_img/hanja_img/taeyang000.gif alt=태양 border=0>';$taeyang_05 = '태양';
		   $mugok_04_disp = '<img src=/images/result_img/jum_img/hanja_img/mugok000.gif alt=무곡 border=0>';$mugok_04 = '무곡';
		   $chendong_03_disp = '<img src=/images/result_img/jum_img/hanja_img/chendong000.gif alt=천동 border=0>';$chendong_03 = '천동';
		   $yeamjung_12_disp = '<img src=/images/result_img/jum_img/hanja_img/yeamjung000.gif alt=염정 border=0>';$yeamjung_12 = '염정';
		   }

if ($jami_09) {$chengi_08_disp = '<img src=/images/result_img/jum_img/hanja_img/chengi000.gif alt=천기 border=0>';$chengi_08 = '천기';
                   $taeyang_06_disp = '<img src=/images/result_img/jum_img/hanja_img/taeyang000.gif alt=태양 border=0>';$taeyang_06 = '태양';
		   $mugok_05_disp = '<img src=/images/result_img/jum_img/hanja_img/mugok000.gif alt=무곡 border=0>';$mugok_05 = '무곡';
		   $chendong_04_disp = '<img src=/images/result_img/jum_img/hanja_img/chendong000.gif alt=천동 border=0>';$chendong_04 = '천동';
		   $yeamjung_01_disp = '<img src=/images/result_img/jum_img/hanja_img/yeamjung000.gif alt=염정 border=0>';$yeamjung_01 = '염정';
		   }

if ($jami_10) {$chengi_09_disp = '<img src=/images/result_img/jum_img/hanja_img/chengi000.gif alt=천기 border=0>';$chengi_09 = '천기';
                   $taeyang_07_disp = '<img src=/images/result_img/jum_img/hanja_img/taeyang000.gif alt=태양 border=0>';$taeyang_07 = '태양';
		   $mugok_06_disp = '<img src=/images/result_img/jum_img/hanja_img/mugok000.gif alt=무곡 border=0>';$mugok_06 = '무곡';
		   $chendong_05_disp = '<img src=/images/result_img/jum_img/hanja_img/chendong000.gif alt=천동 border=0>';$chendong_05 = '천동';
		   $yeamjung_02_disp = '<img src=/images/result_img/jum_img/hanja_img/yeamjung000.gif alt=염정 border=0>';$yeamjung_02 = '염정';
		   }

if ($jami_11) {$chengi_10_disp = '<img src=/images/result_img/jum_img/hanja_img/chengi000.gif alt=천기 border=0>';$chengi_10 = '천기';
                   $taeyang_08_disp = '<img src=/images/result_img/jum_img/hanja_img/taeyang000.gif alt=태양 border=0>';$taeyang_08 = '태양';
		   $mugok_07_disp = '<img src=/images/result_img/jum_img/hanja_img/mugok000.gif alt=무곡 border=0>';$mugok_07 = '무곡';
		   $chendong_06_disp = '<img src=/images/result_img/jum_img/hanja_img/chendong000.gif alt=천동 border=0>';$chendong_06 = '천동';
		   $yeamjung_03_disp = '<img src=/images/result_img/jum_img/hanja_img/yeamjung000.gif alt=염정 border=0>';$yeamjung_03 = '염정';
		   }


if ($jami_12) {$chengi_11_disp = '<img src=/images/result_img/jum_img/hanja_img/chengi000.gif alt=천기 border=0>';$chengi_11 = '천기';
                   $taeyang_09_disp = '<img src=/images/result_img/jum_img/hanja_img/taeyang000.gif alt=태양 border=0>';$taeyang_09 = '태양';
		   $mugok_08_disp = '<img src=/images/result_img/jum_img/hanja_img/mugok000.gif alt=무곡 border=0>';$mugok_08 = '무곡';
		   $chendong_07_disp = '<img src=/images/result_img/jum_img/hanja_img/chendong000.gif alt=천동 border=0>';$chendong_07 = '천동';
		   $yeamjung_04_disp = '<img src=/images/result_img/jum_img/hanja_img/yeamjung000.gif alt=염정 border=0>';$yeamjung_04 = '염정';
		   }
#################################################################################################
########################################################################################나머지 천부성계 찾기
if ($cheanbu_01) {$taeum_02_disp = '<img src=/images/result_img/jum_img/hanja_img/taeum000.gif alt=태음 border=0>';$taeum_02 = '태음';
                          $tamrang_03_disp = '<img src=/images/result_img/jum_img/hanja_img/tamrang000.gif alt=탐랑 border=0>';$tamrang_03 = '탐랑';
		          $geamun_04_disp = '<img src=/images/result_img/jum_img/hanja_img/geamun000.gif alt=거문 border=0>';$geamun_04 = '거문';
		          $cheansang_05_disp = '<img src=/images/result_img/jum_img/hanja_img/cheansang.gif alt=천상 border=0>';$cheansang_05 = '천상';
		          $cheanryang_06_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanryang000.gif alt=천량 border=0>';$cheanryang_06 = '천량';
			  $chilsal_07_disp = '<img src=/images/result_img/jum_img/hanja_img/chilsal.gif alt=칠살 border=0>';$chilsal_07 = '칠살';
			  $pagun_11_disp = '<img src=/images/result_img/jum_img/hanja_img/pagun000.gif alt=파군 border=0>';$pagun_11 = '파군';
		          }


if ($cheanbu_02) {$taeum_03_disp = '<img src=/images/result_img/jum_img/hanja_img/taeum000.gif alt=태음 border=0>';$taeum_03 = '태음';
                          $tamrang_04_disp = '<img src=/images/result_img/jum_img/hanja_img/tamrang000.gif alt=탐랑 border=0>';$tamrang_04 = '탐랑';
		          $geamun_05_disp = '<img src=/images/result_img/jum_img/hanja_img/geamun000.gif alt=거문 border=0>';$geamun_05 = '거문';
		          $cheansang_06_disp = '<img src=/images/result_img/jum_img/hanja_img/cheansang.gif alt=천상 border=0>';$cheansang_06 = '천상';
		          $cheanryang_07_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanryang000.gif alt=천량 border=0>';$cheanryang_07 = '천량';
			  $chilsal_08_disp = '<img src=/images/result_img/jum_img/hanja_img/chilsal.gif alt=칠살 border=0>';$chilsal_08 = '칠살';
			  $pagun_12_disp = '<img src=/images/result_img/jum_img/hanja_img/pagun000.gif alt=파군 border=0>';$pagun_12 = '파군';
		          }

if ($cheanbu_03) {$taeum_04_disp = '<img src=/images/result_img/jum_img/hanja_img/taeum000.gif alt=태음 border=0>';$taeum_04 = '태음';
                          $tamrang_05_disp = '<img src=/images/result_img/jum_img/hanja_img/tamrang000.gif alt=탐랑 border=0>';$tamrang_05 = '탐랑';
		          $geamun_06_disp = '<img src=/images/result_img/jum_img/hanja_img/geamun000.gif alt=거문 border=0>';$geamun_06 = '거문';
		          $cheansang_07_disp = '<img src=/images/result_img/jum_img/hanja_img/cheansang.gif alt=천상 border=0>';$cheansang_07 = '천상';
		          $cheanryang_08_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanryang000.gif alt=천량 border=0>';$cheanryang_08 = '천량';
			  $chilsal_09_disp = '<img src=/images/result_img/jum_img/hanja_img/chilsal.gif alt=칠살 border=0>';$chilsal_09 = '칠살';
			  $pagun_01_disp = '<img src=/images/result_img/jum_img/hanja_img/pagun000.gif alt=파군 border=0>';$pagun_01 = '파군';
		          }


if ($cheanbu_04) {$taeum_05_disp = '<img src=/images/result_img/jum_img/hanja_img/taeum000.gif alt=태음 border=0>';$taeum_05 = '태음';
                          $tamrang_06_disp = '<img src=/images/result_img/jum_img/hanja_img/tamrang000.gif alt=탐랑 border=0>';$tamrang_06 = '탐랑';
		          $geamun_07_disp = '<img src=/images/result_img/jum_img/hanja_img/geamun000.gif alt=거문 border=0>';$geamun_07 = '거문';
		          $cheansang_08_disp = '<img src=/images/result_img/jum_img/hanja_img/cheansang.gif alt=천상 border=0>';$cheansang_08 = '천상';
		          $cheanryang_09_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanryang000.gif alt=천량 border=0>';$cheanryang_09 = '천량';
			  $chilsal_10_disp = '<img src=/images/result_img/jum_img/hanja_img/chilsal.gif alt=칠살 border=0>';$chilsal_10 = '칠살';
			  $pagun_02_disp = '<img src=/images/result_img/jum_img/hanja_img/pagun000.gif alt=파군 border=0>';$pagun_02 = '파군';
		          }


if ($cheanbu_05) {$taeum_06_disp = '<img src=/images/result_img/jum_img/hanja_img/taeum000.gif alt=태음 border=0>';$taeum_06 = '태음';
                          $tamrang_07_disp = '<img src=/images/result_img/jum_img/hanja_img/tamrang000.gif alt=탐랑 border=0>';$tamrang_07 = '탐랑';
		          $geamun_08_disp = '<img src=/images/result_img/jum_img/hanja_img/geamun000.gif alt=거문 border=0>';$geamun_08 = '거문';
		          $cheansang_09_disp = '<img src=/images/result_img/jum_img/hanja_img/cheansang.gif alt=천상 border=0>';$cheansang_09 = '천상';
		          $cheanryang_10_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanryang000.gif alt=천량 border=0>';$cheanryang_10 = '천량';
			  $chilsal_11_disp = '<img src=/images/result_img/jum_img/hanja_img/chilsal.gif alt=칠살 border=0>';$chilsal_11 = '칠살';
			  $pagun_03_disp = '<img src=/images/result_img/jum_img/hanja_img/pagun000.gif alt=파군 border=0>';$pagun_03 = '파군';
		          }

if ($cheanbu_06) {$taeum_07_disp = '<img src=/images/result_img/jum_img/hanja_img/taeum000.gif alt=태음 border=0>';$taeum_07 = '태음';
                          $tamrang_08_disp = '<img src=/images/result_img/jum_img/hanja_img/tamrang000.gif alt=탐랑 border=0>';$tamrang_08 = '탐랑';
		          $geamun_09_disp = '<img src=/images/result_img/jum_img/hanja_img/geamun000.gif alt=거문 border=0>';$geamun_09 = '거문';
		          $cheansang_10_disp = '<img src=/images/result_img/jum_img/hanja_img/cheansang.gif alt=천상 border=0>';$cheansang_10 = '천상';
		          $cheanryang_11_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanryang000.gif alt=천량 border=0>';$cheanryang_11 = '천량';
			  $chilsal_12_disp = '<img src=/images/result_img/jum_img/hanja_img/chilsal.gif alt=칠살 border=0>';$chilsal_12 = '칠살';
			  $pagun_04_disp = '<img src=/images/result_img/jum_img/hanja_img/pagun000.gif alt=파군 border=0>';$pagun_04 = '파군';
		          }

if ($cheanbu_07) {$taeum_08_disp = '<img src=/images/result_img/jum_img/hanja_img/taeum000.gif alt=태음 border=0>';$taeum_08 = '태음';
                          $tamrang_09_disp = '<img src=/images/result_img/jum_img/hanja_img/tamrang000.gif alt=탐랑 border=0>';$tamrang_09 = '탐랑';
		          $geamun_10_disp = '<img src=/images/result_img/jum_img/hanja_img/geamun000.gif alt=거문 border=0>';$geamun_10 = '거문';
		          $cheansang_11_disp = '<img src=/images/result_img/jum_img/hanja_img/cheansang.gif alt=천상 border=0>';$cheansang_11 = '천상';
		          $cheanryang_12_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanryang000.gif alt=천량 border=0>';$cheanryang_12 = '천량';
			  $chilsal_01_disp = '<img src=/images/result_img/jum_img/hanja_img/chilsal.gif alt=칠살 border=0>';$chilsal_01 = '칠살';
			  $pagun_05_disp = '<img src=/images/result_img/jum_img/hanja_img/pagun000.gif alt=파군 border=0>';$pagun_05 = '파군';
		          }

if ($cheanbu_08) {$taeum_09_disp = '<img src=/images/result_img/jum_img/hanja_img/taeum000.gif alt=태음 border=0>';$taeum_09 = '태음';
                          $tamrang_10_disp = '<img src=/images/result_img/jum_img/hanja_img/tamrang000.gif alt=탐랑 border=0>';$tamrang_10 = '탐랑';
		          $geamun_11_disp = '<img src=/images/result_img/jum_img/hanja_img/geamun000.gif alt=거문 border=0>';$geamun_11 = '거문';
		          $cheansang_12_disp = '<img src=/images/result_img/jum_img/hanja_img/cheansang.gif alt=천상 border=0>';$cheansang_12 = '천상';
		          $cheanryang_01_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanryang000.gif alt=천량 border=0>';$cheanryang_01 = '천량';
			  $chilsal_02_disp = '<img src=/images/result_img/jum_img/hanja_img/chilsal.gif alt=칠살 border=0>';$chilsal_02 = '칠살';
			  $pagun_06_disp = '<img src=/images/result_img/jum_img/hanja_img/pagun000.gif alt=파군 border=0>';$pagun_06 = '파군';
		          }

if ($cheanbu_09) {$taeum_10_disp = '<img src=/images/result_img/jum_img/hanja_img/taeum000.gif alt=태음 border=0>';$taeum_10 = '태음';
                          $tamrang_11_disp = '<img src=/images/result_img/jum_img/hanja_img/tamrang000.gif alt=탐랑 border=0>';$tamrang_11 = '탐랑';
		          $geamun_12_disp = '<img src=/images/result_img/jum_img/hanja_img/geamun000.gif alt=거문 border=0>';$geamun_12 = '거문';
		          $cheansang_01_disp = '<img src=/images/result_img/jum_img/hanja_img/cheansang.gif alt=천상 border=0>';$cheansang_01 = '천상';
		          $cheanryang_02_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanryang000.gif alt=천량 border=0>';$cheanryang_02 = '천량';
			  $chilsal_03_disp = '<img src=/images/result_img/jum_img/hanja_img/chilsal.gif alt=칠살 border=0>';$chilsal_03 = '칠살';
			  $pagun_07_disp = '<img src=/images/result_img/jum_img/hanja_img/pagun000.gif alt=파군 border=0>';$pagun_07 = '파군';
		          }

if ($cheanbu_10) {$taeum_11_disp = '<img src=/images/result_img/jum_img/hanja_img/taeum000.gif alt=태음 border=0>';$taeum_11 = '태음';
                          $tamrang_12_disp = '<img src=/images/result_img/jum_img/hanja_img/tamrang000.gif alt=탐랑 border=0>';$tamrang_12 = '탐랑';
		          $geamun_01_disp = '<img src=/images/result_img/jum_img/hanja_img/geamun000.gif alt=거문 border=0>';$geamun_01 = '거문';
		          $cheansang_02_disp = '<img src=/images/result_img/jum_img/hanja_img/cheansang.gif alt=천상 border=0>';$cheansang_02 = '천상';
		          $cheanryang_03_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanryang000.gif alt=천량 border=0>';$cheanryang_03 = '천량';
			  $chilsal_04_disp = '<img src=/images/result_img/jum_img/hanja_img/chilsal.gif alt=칠살 border=0>';$chilsal_04 = '칠살';
			  $pagun_08_disp = '<img src=/images/result_img/jum_img/hanja_img/pagun000.gif alt=파군 border=0>';$pagun_08 = '파군';
		          }

if ($cheanbu_11) {$taeum_12_disp = '<img src=/images/result_img/jum_img/hanja_img/taeum000.gif alt=태음 border=0>';$taeum_12 = '태음';
                          $tamrang_01_disp = '<img src=/images/result_img/jum_img/hanja_img/tamrang000.gif alt=탐랑 border=0>';$tamrang_01 = '탐랑';
		          $geamun_02_disp = '<img src=/images/result_img/jum_img/hanja_img/geamun000.gif alt=거문 border=0>';$geamun_02 = '거문';
		          $cheansang_03_disp = '<img src=/images/result_img/jum_img/hanja_img/cheansang.gif alt=천상 border=0>';$cheansang_03 = '천상';
		          $cheanryang_04_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanryang000.gif alt=천량 border=0>';$cheanryang_04 = '천량';
			  $chilsal_05_disp = '<img src=/images/result_img/jum_img/hanja_img/chilsal.gif alt=칠살 border=0>';$chilsal_05 = '칠살';
			  $pagun_09_disp = '<img src=/images/result_img/jum_img/hanja_img/pagun000.gif alt=파군 border=0>';$pagun_09 = '파군';
		          }

if ($cheanbu_12) {$taeum_01_disp = '<img src=/images/result_img/jum_img/hanja_img/taeum000.gif alt=태음 border=0>';$taeum_01 = '태음';
                          $tamrang_02_disp = '<img src=/images/result_img/jum_img/hanja_img/tamrang000.gif alt=탐랑 border=0>';$tamrang_02 = '탐랑';
		          $geamun_03_disp = '<img src=/images/result_img/jum_img/hanja_img/geamun000.gif alt=거문 border=0>';$geamun_03 = '거문';
		          $cheansang_04_disp = '<img src=/images/result_img/jum_img/hanja_img/cheansang.gif alt=천상 border=0>';$cheansang_04 = '천상';
		          $cheanryang_05_disp = '<img src=/images/result_img/jum_img/hanja_img/cheanryang000.gif alt=천량 border=0>';$cheanryang_05 = '천량';
			  $chilsal_06_disp = '<img src=/images/result_img/jum_img/hanja_img/chilsal.gif alt=칠살 border=0>';$chilsal_06 = '칠살';
			  $pagun_10_disp = '<img src=/images/result_img/jum_img/hanja_img/pagun000.gif alt=파군 border=0>';$pagun_10 = '파군';
		          }

#########################################################################

########################################################################14정성묘왕리함
if ($jami_01) {$jami_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$jami_my_01 = '묘';}
if ($jami_02) {$jami_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$jami_my_02 = '왕';}
if ($jami_03) {$jami_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$jami_my_03 = '함';}
if ($jami_04) {$jami_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$jami_my_04 = '왕';}
if ($jami_05) {$jami_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$jami_my_05 = '묘';}
if ($jami_06) {$jami_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$jami_my_06 = '묘';}
if ($jami_07) {$jami_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$jami_my_07 = '왕';}
if ($jami_08) {$jami_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$jami_my_08 = '평';}
if ($jami_09) {$jami_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/han.gif alt=한 border=0>';$jami_my_09 = '한';}
if ($jami_10) {$jami_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$jami_my_10 = '왕';}
if ($jami_11) {$jami_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$jami_my_11 = '평';}
if ($jami_12) {$jami_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$jami_my_12 = '묘';}

if ($cheanbu_01) {$cheanbu_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$cheanbu_my_01 = '묘';}
if ($cheanbu_02) {$cheanbu_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$cheanbu_my_02 = '평';}
if ($cheanbu_03) {$cheanbu_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$cheanbu_my_03 = '묘';}
if ($cheanbu_04) {$cheanbu_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$cheanbu_my_04 = '평';}
if ($cheanbu_05) {$cheanbu_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$cheanbu_my_05 = '왕';}
if ($cheanbu_06) {$cheanbu_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$cheanbu_my_06 = '묘';}
if ($cheanbu_07) {$cheanbu_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$cheanbu_my_07 = '평';}
if ($cheanbu_08) {$cheanbu_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$cheanbu_my_08 = '함';}
if ($cheanbu_09) {$cheanbu_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$cheanbu_my_09 = '묘';}
if ($cheanbu_10) {$cheanbu_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$cheanbu_my_10 = '왕';}
if ($cheanbu_11) {$cheanbu_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$cheanbu_my_11 = '묘';}
if ($cheanbu_12) {$cheanbu_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$cheanbu_my_12 = '묘';}

if ($chengi_01) {$chengi_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$chengi_my_01 = '왕';}
if ($chengi_02) {$chengi_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$chengi_my_02 = '왕';}
if ($chengi_03) {$chengi_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$chengi_my_03 = '묘';}
if ($chengi_04) {$chengi_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$chengi_my_04 = '평';}
if ($chengi_05) {$chengi_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$chengi_my_05 = '묘';}
if ($chengi_06) {$chengi_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$chengi_my_06 = '함';}
if ($chengi_07) {$chengi_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$chengi_my_07 = '평';}
if ($chengi_08) {$chengi_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$chengi_my_08 = '왕';}
if ($chengi_09) {$chengi_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$chengi_my_09 = '묘';}
if ($chengi_10) {$chengi_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$chengi_my_10 = '평';}
if ($chengi_11) {$chengi_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$chengi_my_11 = '묘';}
if ($chengi_12) {$chengi_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$chengi_my_12 = '함';}


if ($taeyang_01) {$taeyang_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$taeyang_my_01 = '왕';}
if ($taeyang_02) {$taeyang_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$taeyang_my_02 = '묘';}
if ($taeyang_03) {$taeyang_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$taeyang_my_03 = '왕';}
if ($taeyang_04) {$taeyang_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$taeyang_my_04 = '왕';}
if ($taeyang_05) {$taeyang_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$taeyang_my_05 = '묘';}
if ($taeyang_06) {$taeyang_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$taeyang_my_06 = '평';}
if ($taeyang_07) {$taeyang_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/han.gif alt=한 border=0>';$taeyang_my_07 = '한';}
if ($taeyang_08) {$taeyang_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/han.gif alt=한 border=0>';$taeyang_my_08 = '한';}
if ($taeyang_09) {$taeyang_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$taeyang_my_09 = '함';}
if ($taeyang_10) {$taeyang_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$taeyang_my_10 = '함';}
if ($taeyang_11) {$taeyang_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$taeyang_my_11 = '함';}
if ($taeyang_12) {$taeyang_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$taeyang_my_12 = '함';}

if ($mugok_01) {$mugok_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/han.gif alt=한 border=0>';$mugok_my_01 = '한';}
if ($mugok_02) {$mugok_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$mugok_my_02 = '함';}
if ($mugok_03) {$mugok_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$mugok_my_03 = '묘';}
if ($mugok_04) {$mugok_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$mugok_my_04 = '평';}
if ($mugok_05) {$mugok_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$mugok_my_05 = '왕';}
if ($mugok_06) {$mugok_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$mugok_my_06 = '묘';}
if ($mugok_07) {$mugok_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$mugok_my_07 = '평';}
if ($mugok_08) {$mugok_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$mugok_my_08 = '왕';}
if ($mugok_09) {$mugok_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$mugok_my_09 = '묘';}
if ($mugok_10) {$mugok_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$mugok_my_10 = '평';}
if ($mugok_11) {$mugok_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$mugok_my_11 = '왕';}
if ($mugok_12) {$mugok_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$mugok_my_12 = '묘';}

if ($chendong_01) {$chendong_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/han.gif alt=한 border=0>';$chendong_my_01 = '한';}
if ($chendong_02) {$chendong_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$chendong_my_02 = '묘';}
if ($chendong_03) {$chendong_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$chendong_my_03 = '평';}
if ($chendong_04) {$chendong_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$chendong_my_04 = '묘';}
if ($chendong_05) {$chendong_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$chendong_my_05 = '함';}
if ($chendong_06) {$chendong_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$chendong_my_06 = '함';}
if ($chendong_07) {$chendong_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$chendong_my_07 = '왕';}
if ($chendong_08) {$chendong_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$chendong_my_08 = '평';}
if ($chendong_09) {$chendong_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$chendong_my_09 = '평';}
if ($chendong_10) {$chendong_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$chendong_my_10 = '묘';}
if ($chendong_11) {$chendong_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$chendong_my_11 = '왕';}
if ($chendong_12) {$chendong_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$chendong_my_12 = '함';}

if ($yeamjung_01) {$yeamjung_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$yeamjung_my_01 = '묘';}
if ($yeamjung_02) {$yeamjung_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/han.gif alt=한 border=0>';$yeamjung_my_02 = '한';}
if ($yeamjung_03) {$yeamjung_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$yeamjung_my_03 = '왕';}
if ($yeamjung_04) {$yeamjung_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$yeamjung_my_04 = '함';}
if ($yeamjung_05) {$yeamjung_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$yeamjung_my_05 = '평';}
if ($yeamjung_06) {$yeamjung_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$yeamjung_my_06 = '묘';}
if ($yeamjung_07) {$yeamjung_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$yeamjung_my_07 = '묘';}
if ($yeamjung_08) {$yeamjung_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$yeamjung_my_08 = '평';}
if ($yeamjung_09) {$yeamjung_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$yeamjung_my_09 = '왕';}
if ($yeamjung_10) {$yeamjung_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$yeamjung_my_10 = '함';}
if ($yeamjung_11) {$yeamjung_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$yeamjung_my_11 = '평';}
if ($yeamjung_12) {$yeamjung_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$yeamjung_my_12 = '왕';}

if ($pagun_01) {$pagun_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$pagun_my_01 = '함';}
if ($pagun_02) {$pagun_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$pagun_my_02 = '왕';}
if ($pagun_03) {$pagun_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$pagun_my_03 = '왕';}
if ($pagun_04) {$pagun_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/han.gif alt=한 border=0>';$pagun_my_04 = '한';}
if ($pagun_05) {$pagun_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$pagun_my_05 = '묘';}
if ($pagun_06) {$pagun_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$pagun_my_06 = '묘';}
if ($pagun_07) {$pagun_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$pagun_my_07 = '함';}
if ($pagun_08) {$pagun_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$pagun_my_08 = '함';}
if ($pagun_09) {$pagun_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$pagun_my_09 = '왕';}
if ($pagun_10) {$pagun_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$pagun_my_10 = '평';}
if ($pagun_11) {$pagun_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$pagun_my_11 = '묘';}
if ($pagun_12) {$pagun_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$pagun_my_12 = '왕';}

if ($chilsal_01) {$chilsal_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$chilsal_my_01 = '묘';}
if ($chilsal_02) {$chilsal_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$chilsal_my_02 = '함';}
if ($chilsal_03) {$chilsal_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$chilsal_my_03 = '왕';}
if ($chilsal_04) {$chilsal_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$chilsal_my_04 = '평';}
if ($chilsal_05) {$chilsal_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$chilsal_my_05 = '왕';}
if ($chilsal_06) {$chilsal_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$chilsal_my_06 = '왕';}
if ($chilsal_07) {$chilsal_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$chilsal_my_07 = '묘';}
if ($chilsal_08) {$chilsal_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/han.gif alt=한 border=0>';$chilsal_my_08 = '한';}
if ($chilsal_09) {$chilsal_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$chilsal_my_09 = '묘';}
if ($chilsal_10) {$chilsal_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$chilsal_my_10 = '평';}
if ($chilsal_11) {$chilsal_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$chilsal_my_11 = '왕';}
if ($chilsal_12) {$chilsal_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$chilsal_my_12 = '묘';}

if ($cheanryang_01) {$cheanryang_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$cheanryang_my_01 = '묘';}
if ($cheanryang_02) {$cheanryang_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$cheanryang_my_02 = '묘';}
if ($cheanryang_03) {$cheanryang_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$cheanryang_my_03 = '왕';}
if ($cheanryang_04) {$cheanryang_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$cheanryang_my_04 = '함';}
if ($cheanryang_05) {$cheanryang_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$cheanryang_my_05 = '묘';}
if ($cheanryang_06) {$cheanryang_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$cheanryang_my_06 = '왕';}
if ($cheanryang_07) {$cheanryang_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$cheanryang_my_07 = '함';}
if ($cheanryang_08) {$cheanryang_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/ji.gif alt=지 border=0>';$cheanryang_my_08 = '지';}
if ($cheanryang_09) {$cheanryang_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$cheanryang_my_09 = '왕';}
if ($cheanryang_10) {$cheanryang_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$cheanryang_my_10 = '함';}
if ($cheanryang_11) {$cheanryang_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$cheanryang_my_11 = '묘';}
if ($cheanryang_12) {$cheanryang_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$cheanryang_my_12 = '왕';}

if ($cheansang_01) {$cheansang_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$cheansang_my_01 = '묘';}
if ($cheansang_02) {$cheansang_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$cheansang_my_02 = '함';}
if ($cheansang_03) {$cheansang_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$cheansang_my_03 = '왕';}
if ($cheansang_04) {$cheansang_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$cheansang_my_04 = '평';}
if ($cheansang_05) {$cheansang_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$cheansang_my_05 = '왕';}
if ($cheansang_06) {$cheansang_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/han.gif alt=한 border=0>';$cheansang_my_06 = '한';}
if ($cheansang_07) {$cheansang_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$cheansang_my_07 = '묘';}
if ($cheansang_08) {$cheansang_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$cheansang_my_08 = '함';}
if ($cheansang_09) {$cheansang_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/han.gif alt=한 border=0>';$cheansang_my_09 = '한';}
if ($cheansang_10) {$cheansang_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$cheansang_my_10 = '평';}
if ($cheansang_11) {$cheansang_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$cheansang_my_11 = '묘';}
if ($cheansang_12) {$cheansang_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$cheansang_my_12 = '묘';}

if ($geamun_01) {$geamun_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$geamun_my_01 = '묘';}
if ($geamun_02) {$geamun_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$geamun_my_02 = '묘';}
if ($geamun_03) {$geamun_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$geamun_my_03 = '평';}
if ($geamun_04) {$geamun_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$geamun_my_04 = '평';}
if ($geamun_05) {$geamun_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$geamun_my_05 = '왕';}
if ($geamun_06) {$geamun_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$geamun_my_06 = '함';}
if ($geamun_07) {$geamun_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$geamun_my_07 = '묘';}
if ($geamun_08) {$geamun_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$geamun_my_08 = '묘';}
if ($geamun_09) {$geamun_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$geamun_my_09 = '왕';}
if ($geamun_10) {$geamun_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$geamun_my_10 = '왕';}
if ($geamun_11) {$geamun_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$geamun_my_11 = '왕';}
if ($geamun_12) {$geamun_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$geamun_my_12 = '왕';}

if ($tamrang_01) {$tamrang_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$tamrang_my_01 = '평';}
if ($tamrang_02) {$tamrang_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/ji.gif alt=지 border=0>';$tamrang_my_02 = '지';}
if ($tamrang_03) {$tamrang_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$tamrang_my_03 = '묘';}
if ($tamrang_04) {$tamrang_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$tamrang_my_04 = '함';}
if ($tamrang_05) {$tamrang_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$tamrang_my_05 = '왕';}
if ($tamrang_06) {$tamrang_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$tamrang_my_06 = '묘';}
if ($tamrang_07) {$tamrang_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$tamrang_my_07 = '평';}
if ($tamrang_08) {$tamrang_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$tamrang_my_08 = '평';}
if ($tamrang_09) {$tamrang_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$tamrang_my_09 = '묘';}
if ($tamrang_10) {$tamrang_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$tamrang_my_10 = '함';}
if ($tamrang_11) {$tamrang_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$tamrang_my_11 = '왕';}
if ($tamrang_12) {$tamrang_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$tamrang_my_12 = '묘';}

if ($taeum_01) {$taeum_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/han.gif alt=한 border=0>';$taeum_my_01 = '한';}
if ($taeum_02) {$taeum_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$taeum_my_02 = '함';}
if ($taeum_03) {$taeum_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/han.gif alt=한 border=0>';$taeum_my_03 = '한';}
if ($taeum_04) {$taeum_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$taeum_my_04 = '함';}
if ($taeum_05) {$taeum_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$taeum_my_05 = '함';}
if ($taeum_06) {$taeum_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$taeum_my_06 = '평';}
if ($taeum_07) {$taeum_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$taeum_my_07 = '평';}
if ($taeum_08) {$taeum_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$taeum_my_08 = '왕';}
if ($taeum_09) {$taeum_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$taeum_my_09 = '왕';}
if ($taeum_10) {$taeum_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$taeum_my_10 = '묘';}
if ($taeum_11) {$taeum_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$taeum_my_11 = '묘';}
if ($taeum_12) {$taeum_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$taeum_my_12 = '묘';}

##########################################보좌길성(천괴,천월,좌보,우필,문창,문곡,녹존,천마
if (($my_umyear_h == '甲')||($my_umyear_h == '戊')||($my_umyear_h == '庚')){$cheangue_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangue.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangue.gif alt=천괴 border=0></a>';$cheangue_12 = '천괴';$cheanwol_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanwol.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanwol.gif alt=천월 border=0></a>';$cheanwol_06 = '천월';}
if (($my_umyear_h == '乙')||($my_umyear_h == '己')){$cheangue_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangue.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangue.gif alt=천괴 border=0></a>';$cheangue_11 = '천괴';$cheanwol_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanwol.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanwol.gif alt=천월 border=0></a>';$cheanwol_07 = '천월';}
if (($my_umyear_h == '丙')||($my_umyear_h == '丁')){$cheangue_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangue.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangue.gif alt=천괴 border=0></a>';$cheangue_10 = '천괴';$cheanwol_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanwol.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanwol.gif alt=천월 border=0></a>';$cheanwol_08 = '천월';}
if ($my_umyear_h == '辛'){$cheangue_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangue.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangue.gif alt=천괴 border=0></a>';$cheangue_05 = '천괴';$cheanwol_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanwol.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanwol.gif alt=천월 border=0></a>';$cheanwol_01 = '천월';}
if (($my_umyear_h == '壬')||($my_umyear_h == '癸')){$cheangue_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangue.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangue.gif alt=천괴 border=0></a>';$cheangue_02 = '천괴';$cheanwol_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanwol.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanwol.gif alt=천월 border=0></a>';$cheanwol_04 = '천월';}


if ($my_ummonth == '01') {$jabo_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jabo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jabo000.gif alt=좌보 border=0></a>';$jabo_03 = '좌보';}
if ($my_ummonth == '02') {$jabo_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jabo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jabo000.gif alt=좌보 border=0></a>';$jabo_04 = '좌보';}
if ($my_ummonth == '03') {$jabo_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jabo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jabo000.gif alt=좌보 border=0></a>';$jabo_05 = '좌보';}
if ($my_ummonth == '04') {$jabo_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jabo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jabo000.gif alt=좌보 border=0></a>';$jabo_06 = '좌보';}
if ($my_ummonth == '05') {$jabo_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jabo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jabo000.gif alt=좌보 border=0></a>';$jabo_07 = '좌보';}
if ($my_ummonth == '06') {$jabo_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jabo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jabo000.gif alt=좌보 border=0></a>';$jabo_08 = '좌보';}
if ($my_ummonth == '07') {$jabo_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jabo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jabo000.gif alt=좌보 border=0></a>';$jabo_09 = '좌보';}
if ($my_ummonth == '08') {$jabo_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jabo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jabo000.gif alt=좌보 border=0></a>';$jabo_10 = '좌보';}
if ($my_ummonth == '09') {$jabo_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jabo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jabo000.gif alt=좌보 border=0></a>';$jabo_11 = '좌보';}
if ($my_ummonth == '10') {$jabo_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jabo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jabo000.gif alt=좌보 border=0></a>';$jabo_12 = '좌보';}
if ($my_ummonth == '11') {$jabo_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jabo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jabo000.gif alt=좌보 border=0></a>';$jabo_01 = '좌보';}
if ($my_ummonth == '12') {$jabo_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jabo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jabo000.gif alt=좌보 border=0></a>';$jabo_02 = '좌보';}

if ($my_ummonth == '01') {$upil_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_upil.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/upil000.gif alt=우필 border=0></a>';$upil_09 = '우필';}
if ($my_ummonth == '02') {$upil_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_upil.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/upil000.gif alt=우필 border=0></a>';$upil_08 = '우필';}
if ($my_ummonth == '03') {$upil_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_upil.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/upil000.gif alt=우필 border=0></a>';$upil_07 = '우필';}
if ($my_ummonth == '04') {$upil_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_upil.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/upil000.gif alt=우필 border=0></a>';$upil_06 = '우필';}
if ($my_ummonth == '05') {$upil_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_upil.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/upil000.gif alt=우필 border=0></a>';$upil_05 = '우필';}
if ($my_ummonth == '06') {$upil_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_upil.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/upil000.gif alt=우필 border=0></a>';$upil_04 = '우필';}
if ($my_ummonth == '07') {$upil_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_upil.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/upil000.gif alt=우필 border=0></a>';$upil_03 = '우필';}
if ($my_ummonth == '08') {$upil_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_upil.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/upil000.gif alt=우필 border=0></a>';$upil_02 = '우필';}
if ($my_ummonth == '09') {$upil_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_upil.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/upil000.gif alt=우필 border=0></a>';$upil_01 = '우필';}
if ($my_ummonth == '10') {$upil_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_upil.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/upil000.gif alt=우필 border=0></a>';$upil_12 = '우필';}
if ($my_ummonth == '11') {$upil_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_upil.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/upil000.gif alt=우필 border=0></a>';$upil_11 = '우필';}
if ($my_ummonth == '12') {$upil_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_upil.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/upil000.gif alt=우필 border=0></a>';$upil_10 = '우필';}

if ($my_hour_e == '子') {$munchang_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_munchang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/munchang000.gif alt=문창 border=0></a>';$munchang_09 = '문창';}
if ($my_hour_e == '丑') {$munchang_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_munchang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/munchang000.gif alt=문창 border=0></a>';$munchang_08 = '문창';}
if ($my_hour_e == '寅') {$munchang_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_munchang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/munchang000.gif alt=문창 border=0></a>';$munchang_07 = '문창';}
if ($my_hour_e == '卯') {$munchang_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_munchang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/munchang000.gif alt=문창 border=0></a>';$munchang_06 = '문창';}
if ($my_hour_e == '辰') {$munchang_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_munchang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/munchang000.gif alt=문창 border=0></a>';$munchang_05 = '문창';}
if ($my_hour_e == '巳') {$munchang_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_munchang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/munchang000.gif alt=문창 border=0></a>';$munchang_04 = '문창';}
if ($my_hour_e == '午') {$munchang_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_munchang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/munchang000.gif alt=문창 border=0></a>';$munchang_03 = '문창';}
if ($my_hour_e == '未') {$munchang_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_munchang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/munchang000.gif alt=문창 border=0></a>';$munchang_02 = '문창';}
if ($my_hour_e == '申') {$munchang_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_munchang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/munchang000.gif alt=문창 border=0></a>';$munchang_01 = '문창';}
if ($my_hour_e == '酉') {$munchang_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_munchang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/munchang000.gif alt=문창 border=0></a>';$munchang_12 = '문창';}
if ($my_hour_e == '戌') {$munchang_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_munchang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/munchang000.gif alt=문창 border=0></a>';$munchang_11 = '문창';}
if ($my_hour_e == '亥') {$munchang_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_munchang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/munchang000.gif alt=문창 border=0></a>';$munchang_10 = '문창';}

if ($my_hour_e == '子') {$mungok_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_mungok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/mungok000.gif alt=문곡 border=0></a>';$mungok_03 = '문곡';}
if ($my_hour_e == '丑') {$mungok_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_mungok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/mungok000.gif alt=문곡 border=0></a>';$mungok_04 = '문곡';}
if ($my_hour_e == '寅') {$mungok_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_mungok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/mungok000.gif alt=문곡 border=0></a>';$mungok_05 = '문곡';}
if ($my_hour_e == '卯') {$mungok_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_mungok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/mungok000.gif alt=문곡 border=0></a>';$mungok_06 = '문곡';}
if ($my_hour_e == '辰') {$mungok_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_mungok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/mungok000.gif alt=문곡 border=0></a>';$mungok_07 = '문곡';}
if ($my_hour_e == '巳') {$mungok_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_mungok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/mungok000.gif alt=문곡 border=0></a>';$mungok_08 = '문곡';}
if ($my_hour_e == '午') {$mungok_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_mungok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/mungok000.gif alt=문곡 border=0></a>';$mungok_09 = '문곡';}
if ($my_hour_e == '未') {$mungok_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_mungok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/mungok000.gif alt=문곡 border=0></a>';$mungok_10 = '문곡';}
if ($my_hour_e == '申') {$mungok_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_mungok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/mungok000.gif alt=문곡 border=0></a>';$mungok_11 = '문곡';}
if ($my_hour_e == '酉') {$mungok_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_mungok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/mungok000.gif alt=문곡 border=0></a>';$mungok_12 = '문곡';}
if ($my_hour_e == '戌') {$mungok_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_mungok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/mungok000.gif alt=문곡 border=0></a>';$mungok_01 = '문곡';}
if ($my_hour_e == '亥') {$mungok_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_mungok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/mungok000.gif alt=문곡 border=0></a>';$mungok_02 = '문곡';}

######경양 타라와 함께계산戊

if ($my_umyear_h == '甲'){$nokjon_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_nokjon.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/nokjon.gif alt=녹존 border=0></a>';$nokjon_01 = '녹존';$gyungryang_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_gyungryang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/gyungryang.gif alt=경양 border=0></a>';$gyungryang_02 = '경양';$tara_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_tara.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/tara.gif alt=타라 border=0></a>';$tara_12 = '타라';}
if ($my_umyear_h == '乙'){$nokjon_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_nokjon.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/nokjon.gif alt=녹존 border=0></a>';$nokjon_02 = '녹존';$gyungryang_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_gyungryang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/gyungryang.gif alt=경양 border=0></a>';$gyungryang_03 = '경양';$tara_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_tara.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/tara.gif alt=타라 border=0></a>';$tara_01 = '타라';}
if ($my_umyear_h == '庚'){$nokjon_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_nokjon.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/nokjon.gif alt=녹존 border=0></a>';$nokjon_07 = '녹존';$gyungryang_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_gyungryang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/gyungryang.gif alt=경양 border=0></a>';$gyungryang_08 = '경양';$tara_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_tara.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/tara.gif alt=타라 border=0></a>';$tara_06 = '타라';}
if ($my_umyear_h == '辛'){$nokjon_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_nokjon.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/nokjon.gif alt=녹존 border=0></a>';$nokjon_08 = '녹존';$gyungryang_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_gyungryang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/gyungryang.gif alt=경양 border=0></a>';$gyungryang_09 = '경양';$tara_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_tara.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/tara.gif alt=타라 border=0></a>';$tara_07 = '타라';}
if ($my_umyear_h == '壬'){$nokjon_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_nokjon.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/nokjon.gif alt=녹존 border=0></a>';$nokjon_10 = '녹존';$gyungryang_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_gyungryang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/gyungryang.gif alt=경양 border=0></a>';$gyungryang_11 = '경양';$tara_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_tara.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/tara.gif alt=타라 border=0></a>';$tara_09 = '타라';}
if ($my_umyear_h == '癸'){$nokjon_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_nokjon.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/nokjon.gif alt=녹존 border=0></a>';$nokjon_11 = '녹존';$gyungryang_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_gyungryang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/gyungryang.gif alt=경양 border=0></a>';$gyungryang_12 = '경양';$tara_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_tara.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/tara.gif alt=타라 border=0></a>';$tara_10 = '타라';}
if (($my_umyear_h == '丙')||($my_umyear_h == '戊')){$nokjon_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_nokjon.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/nokjon.gif alt=녹존 border=0></a>';$nokjon_04 = '녹존';$gyungryang_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_gyungryang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/gyungryang.gif alt=경양 border=0></a>';$gyungryang_05 = '경양';$tara_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_tara.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/tara.gif alt=타라 border=0></a>';$tara_03 = '타라';}
if (($my_umyear_h == '丁')||($my_umyear_h == '己')){$nokjon_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_nokjon.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/nokjon.gif alt=녹존 border=0></a>';$nokjon_05 = '녹존';$gyungryang_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_gyungryang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/gyungryang.gif alt=경양 border=0></a>';$gyungryang_06 = '경양';$tara_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_tara.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/tara.gif alt=타라 border=0></a>';$tara_04 = '타라';}

if (($my_umyear_e == '寅')||($my_umyear_e == '午')||($my_umyear_e == '戌')){$cheanma_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanma.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanma.gif alt=천마 border=0></a>';$cheanma_07 = '천마';}
if (($my_umyear_e == '申')||($my_umyear_e == '子')||($my_umyear_e == '辰')){$cheanma_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanma.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanma.gif alt=천마 border=0></a>';$cheanma_01 = '천마';}
if (($my_umyear_e == '巳')||($my_umyear_e == '酉')||($my_umyear_e == '丑')){$cheanma_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanma.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanma.gif alt=천마 border=0></a>';$cheanma_10 = '천마';}
if (($my_umyear_e == '亥')||($my_umyear_e == '卯')||($my_umyear_e == '未')){$cheanma_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanma.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanma.gif alt=천마 border=0></a>';$cheanma_04 = '천마';}

############################################################################천괴/천월/좌보/우필/문창/문곡/녹존/경양/타라/천마 의 묘왕리함
if ($cheangue_11) {$cheangue_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$cheangue_my_11 = '왕';}
if ($cheangue_12) {$cheangue_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$cheangue_my_12 = '왕';}
if ($cheangue_01) {$cheangue_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$cheangue_my_01 = '없';}
if ($cheangue_02) {$cheangue_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$cheangue_my_02 = '묘';}
if ($cheangue_03) {$cheangue_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$cheangue_my_03 = '없';}
if ($cheangue_04) {$cheangue_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$cheangue_my_04 = '없';}
if ($cheangue_05) {$cheangue_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$cheangue_my_05 = '묘';}
if ($cheangue_06) {$cheangue_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$cheangue_my_06 = '없';}
if ($cheangue_07) {$cheangue_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$cheangue_my_07 = '없';}
if ($cheangue_08) {$cheangue_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$cheangue_my_08 = '없';}
if ($cheangue_09) {$cheangue_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$cheangue_my_09 = '없';}
if ($cheangue_10) {$cheangue_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$cheangue_my_10 = '왕';}

if ($cheanwol_11) {$cheanwol_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$cheanwol_my_11 = '없';}
if ($cheanwol_12) {$cheanwol_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$cheanwol_my_12 = '없';}
if ($cheanwol_01) {$cheanwol_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$cheanwol_my_01 = '왕';}
if ($cheanwol_02) {$cheanwol_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$cheanwol_my_02 = '없';}
if ($cheanwol_03) {$cheanwol_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$cheanwol_my_03 = '없';}
if ($cheanwol_04) {$cheanwol_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$cheanwol_my_04 = '왕';}
if ($cheanwol_05) {$cheanwol_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$cheanwol_my_05 = '없';}
if ($cheanwol_06) {$cheanwol_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$cheanwol_my_06 = '왕';}
if ($cheanwol_07) {$cheanwol_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$cheanwol_my_07 = '묘';}
if ($cheanwol_08) {$cheanwol_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$cheanwol_my_08 = '묘';}
if ($cheanwol_09) {$cheanwol_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$cheanwol_my_09 = '없';}
if ($cheanwol_10) {$cheanwol_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$cheanwol_my_10 = '없';}

if ($jabo_11) {$jabo_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$jabo_my_11 = '왕';}
if ($jabo_12) {$jabo_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$jabo_my_12 = '묘';}
if ($jabo_01) {$jabo_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$jabo_my_01 = '묘';}
if ($jabo_02) {$jabo_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$jabo_my_02 = '함';}
if ($jabo_03) {$jabo_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$jabo_my_03 = '묘';}
if ($jabo_04) {$jabo_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$jabo_my_04 = '평';}
if ($jabo_05) {$jabo_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$jabo_my_05 = '왕';}
if ($jabo_06) {$jabo_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$jabo_my_06 = '묘';}
if ($jabo_07) {$jabo_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$jabo_my_07 = '평';}
if ($jabo_08) {$jabo_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$jabo_my_08 = '함';}
if ($jabo_09) {$jabo_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$jabo_my_09 = '묘';}
if ($jabo_10) {$jabo_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/han.gif alt=한 border=0>';$jabo_my_10 = '한';}

if ($upil_11) {$upil_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$upil_my_11 = '묘';}
if ($upil_12) {$upil_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$upil_my_12 = '묘';}
if ($upil_01) {$upil_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$upil_my_01 = '왕';}
if ($upil_02) {$upil_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$upil_my_02 = '함';}
if ($upil_03) {$upil_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$upil_my_03 = '묘';}
if ($upil_04) {$upil_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$upil_my_04 = '평';}
if ($upil_05) {$upil_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$upil_my_05 = '왕';}
if ($upil_06) {$upil_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$upil_my_06 = '묘';}
if ($upil_07) {$upil_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/han.gif alt=한 border=0>';$upil_my_07 = '한';}
if ($upil_08) {$upil_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$upil_my_08 = '함';}
if ($upil_09) {$upil_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$upil_my_09 = '묘';}
if ($upil_10) {$upil_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$upil_my_10 = '평';}

if ($munchang_11) {$munchang_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$munchang_my_11 = '왕';}
if ($munchang_12) {$munchang_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$munchang_my_12 = '묘';}
if ($munchang_01) {$munchang_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$munchang_my_01 = '함';}
if ($munchang_02) {$munchang_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$munchang_my_02 = '평';}
if ($munchang_03) {$munchang_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$munchang_my_03 = '왕';}
if ($munchang_04) {$munchang_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$munchang_my_04 = '묘';}
if ($munchang_05) {$munchang_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$munchang_my_05 = '함';}
if ($munchang_06) {$munchang_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$munchang_my_06 = '평';}
if ($munchang_07) {$munchang_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$munchang_my_07 = '왕';}
if ($munchang_08) {$munchang_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$munchang_my_08 = '묘';}
if ($munchang_09) {$munchang_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$munchang_my_09 = '함';}
if ($munchang_10) {$munchang_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$munchang_my_10 = '왕';}

if ($mungok_11) {$mungok_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$mungok_my_11 = '묘';}
if ($mungok_12) {$mungok_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$mungok_my_12 = '묘';}
if ($mungok_01) {$mungok_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$mungok_my_01 = '평';}
if ($mungok_02) {$mungok_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$mungok_my_02 = '왕';}
if ($mungok_03) {$mungok_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$mungok_my_03 = '묘';}
if ($mungok_04) {$mungok_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$mungok_my_04 = '묘';}
if ($mungok_05) {$mungok_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$mungok_my_05 = '함';}
if ($mungok_06) {$mungok_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$mungok_my_06 = '왕';}
if ($mungok_07) {$mungok_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$mungok_my_07 = '평';}
if ($mungok_08) {$mungok_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$mungok_my_08 = '묘';}
if ($mungok_09) {$mungok_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$mungok_my_09 = '함';}
if ($mungok_10) {$mungok_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$mungok_my_10 = '왕';}

if ($nokjon_11) {$nokjon_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$nokjon_my_11 = '왕';}
if ($nokjon_12) {$nokjon_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$nokjon_my_12 = '없';}
if ($nokjon_01) {$nokjon_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$nokjon_my_01 = '묘';}
if ($nokjon_02) {$nokjon_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$nokjon_my_02 = '왕';}
if ($nokjon_03) {$nokjon_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$nokjon_my_03 = '없';}
if ($nokjon_04) {$nokjon_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$nokjon_my_04 = '묘';}
if ($nokjon_05) {$nokjon_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$nokjon_my_05 = '왕';}
if ($nokjon_06) {$nokjon_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$nokjon_my_06 = '없';}
if ($nokjon_07) {$nokjon_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$nokjon_my_07 = '묘';}
if ($nokjon_08) {$nokjon_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$nokjon_my_08 = '왕';}
if ($nokjon_09) {$nokjon_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$nokjon_my_09 = '없';}
if ($nokjon_10) {$nokjon_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$nokjon_my_10 = '묘';}

if ($gyungryang_11) {$gyungryang_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$gyungryang_my_11 = '함';}
if ($gyungryang_12) {$gyungryang_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$gyungryang_my_12 = '묘';}
if ($gyungryang_01) {$gyungryang_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$gyungryang_my_01 = '없';}
if ($gyungryang_02) {$gyungryang_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$gyungryang_my_02 = '함';}
if ($gyungryang_03) {$gyungryang_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$gyungryang_my_03 = '묘';}
if ($gyungryang_04) {$gyungryang_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$gyungryang_my_04 = '없';}
if ($gyungryang_05) {$gyungryang_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$gyungryang_my_05 = '평';}
if ($gyungryang_06) {$gyungryang_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$gyungryang_my_06 = '묘';}
if ($gyungryang_07) {$gyungryang_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$gyungryang_my_07 = '없';}
if ($gyungryang_08) {$gyungryang_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$gyungryang_my_08 = '함';}
if ($gyungryang_09) {$gyungryang_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$gyungryang_my_09 = '묘';}
if ($gyungryang_10) {$gyungryang_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$gyungryang_my_10 = '없';}

if ($tara_11) {$tara_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$tara_my_11 = '없';}
if ($tara_12) {$tara_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$tara_my_12 = '묘';}
if ($tara_01) {$tara_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$tara_my_01 = '함';}
if ($tara_02) {$tara_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$tara_my_02 = '없';}
if ($tara_03) {$tara_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$tara_my_03 = '묘';}
if ($tara_04) {$tara_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$tara_my_04 = '함';}
if ($tara_05) {$tara_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$tara_my_05 = '없';}
if ($tara_06) {$tara_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$tara_my_06 = '묘';}
if ($tara_07) {$tara_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$tara_my_07 = '함';}
if ($tara_08) {$tara_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$tara_my_08 = '없';}
if ($tara_09) {$tara_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$tara_my_09 = '묘';}
if ($tara_10) {$tara_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$tara_my_10 = '함';}

if ($cheanma_11) {$cheanma_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$cheanma_my_11 = '없';}
if ($cheanma_12) {$cheanma_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$cheanma_my_12 = '없';}
if ($cheanma_01) {$cheanma_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$cheanma_my_01 = '왕';}
if ($cheanma_02) {$cheanma_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$cheanma_my_02 = '없';}
if ($cheanma_03) {$cheanma_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$cheanma_my_03 = '없';}
if ($cheanma_04) {$cheanma_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$cheanma_my_04 = '평';}
if ($cheanma_05) {$cheanma_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$cheanma_my_05 = '없';}
if ($cheanma_06) {$cheanma_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$cheanma_my_06 = '없';}
if ($cheanma_07) {$cheanma_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$cheanma_my_07 = '왕';}
if ($cheanma_08) {$cheanma_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$cheanma_my_08 = '없';}
if ($cheanma_09) {$cheanma_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/no.gif border=0>';$cheanma_my_09 = '없';}
if ($cheanma_10) {$cheanma_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$cheanma_my_10 = '평';}


##########################################살성(경양,타라,화성,영성,지공,지겁

if (($my_umyear_e == '寅')||($my_umyear_e == '午')||($my_umyear_e == '戌')){
             if ($my_hour_e == '子') {$whasung_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_12 = '화성';$yeungsung_02 = '영성';}
	     if ($my_hour_e == '丑') {$whasung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_01 = '화성';$yeungsung_03 = '영성';}
	     if ($my_hour_e == '寅') {$whasung_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_02 = '화성';$yeungsung_04 = '영성';}
	     if ($my_hour_e == '卯') {$whasung_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_03 = '화성';$yeungsung_05 = '영성';}
	     if ($my_hour_e == '辰') {$whasung_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_04 = '화성';$yeungsung_06 = '영성';}
	     if ($my_hour_e == '巳') {$whasung_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_05 = '화성';$yeungsung_07 = '영성';}
	     if ($my_hour_e == '午') {$whasung_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_06 = '화성';$yeungsung_08 = '영성';}
	     if ($my_hour_e == '未') {$whasung_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_07 = '화성';$yeungsung_09 = '영성';}
	     if ($my_hour_e == '申') {$whasung_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_08 = '화성';$yeungsung_10 = '영성';}
	     if ($my_hour_e == '酉') {$whasung_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_09 = '화성';$yeungsung_11 = '영성';}
	     if ($my_hour_e == '戌') {$whasung_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_10 = '화성';$yeungsung_12 = '영성';}
	     if ($my_hour_e == '亥') {$whasung_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_11 = '화성';$yeungsung_01 = '영성';}
	     }
if (($my_umyear_e == '申')||($my_umyear_e == '子')||($my_umyear_e == '辰')){
             if ($my_hour_e == '子') {$whasung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_01 = '화성';$yeungsung_09 = '영성';}
	     if ($my_hour_e == '丑') {$whasung_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_02 = '화성';$yeungsung_10 = '영성';}
	     if ($my_hour_e == '寅') {$whasung_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_03 = '화성';$yeungsung_11 = '영성';}
	     if ($my_hour_e == '卯') {$whasung_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_04 = '화성';$yeungsung_12 = '영성';}
	     if ($my_hour_e == '辰') {$whasung_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_05 = '화성';$yeungsung_01 = '영성';}
	     if ($my_hour_e == '巳') {$whasung_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_06 = '화성';$yeungsung_02 = '영성';}
	     if ($my_hour_e == '午') {$whasung_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_07 = '화성';$yeungsung_03 = '영성';}
	     if ($my_hour_e == '未') {$whasung_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_08 = '화성';$yeungsung_04 = '영성';}
	     if ($my_hour_e == '申') {$whasung_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_09 = '화성';$yeungsung_05 = '영성';}
	     if ($my_hour_e == '酉') {$whasung_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_10 = '화성';$yeungsung_06 = '영성';}
	     if ($my_hour_e == '戌') {$whasung_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_11 = '화성';$yeungsung_07 = '영성';}
	     if ($my_hour_e == '亥') {$whasung_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_12 = '화성';$yeungsung_08 = '영성';}
	     }
if (($my_umyear_e == '巳')||($my_umyear_e == '酉')||($my_umyear_e == '丑')){
             if ($my_hour_e == '子') {$whasung_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_02 = '화성';$yeungsung_09 = '영성';}
	     if ($my_hour_e == '丑') {$whasung_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_03 = '화성';$yeungsung_10 = '영성';}
	     if ($my_hour_e == '寅') {$whasung_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_04 = '화성';$yeungsung_11 = '영성';}
	     if ($my_hour_e == '卯') {$whasung_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_05 = '화성';$yeungsung_12 = '영성';}
	     if ($my_hour_e == '辰') {$whasung_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_06 = '화성';$yeungsung_01 = '영성';}
	     if ($my_hour_e == '巳') {$whasung_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_07 = '화성';$yeungsung_02 = '영성';}
	     if ($my_hour_e == '午') {$whasung_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_08 = '화성';$yeungsung_03 = '영성';}
	     if ($my_hour_e == '未') {$whasung_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_09 = '화성';$yeungsung_04 = '영성';}
	     if ($my_hour_e == '申') {$whasung_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_10 = '화성';$yeungsung_05 = '영성';}
	     if ($my_hour_e == '酉') {$whasung_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_11 = '화성';$yeungsung_06 = '영성';}
	     if ($my_hour_e == '戌') {$whasung_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_12 = '화성';$yeungsung_07 = '영성';}
	     if ($my_hour_e == '亥') {$whasung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_01 = '화성';$yeungsung_08 = '영성';}
	     }
if (($my_umyear_e == '亥')||($my_umyear_e == '卯')||($my_umyear_e == '未')){
             if ($my_hour_e == '子') {$whasung_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_08 = '화성';$yeungsung_09 = '영성';}
	     if ($my_hour_e == '丑') {$whasung_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_09 = '화성';$yeungsung_10 = '영성';}
	     if ($my_hour_e == '寅') {$whasung_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_10 = '화성';$yeungsung_11 = '영성';}
	     if ($my_hour_e == '卯') {$whasung_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_11 = '화성';$yeungsung_12 = '영성';}
	     if ($my_hour_e == '辰') {$whasung_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_12 = '화성';$yeungsung_01 = '영성';}
	     if ($my_hour_e == '巳') {$whasung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_01 = '화성';$yeungsung_02 = '영성';}
	     if ($my_hour_e == '午') {$whasung_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_02 = '화성';$yeungsung_03 = '영성';}
	     if ($my_hour_e == '未') {$whasung_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_03 = '화성';$yeungsung_04 = '영성';}
	     if ($my_hour_e == '申') {$whasung_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_04 = '화성';$yeungsung_05 = '영성';}
	     if ($my_hour_e == '酉') {$whasung_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_05 = '화성';$yeungsung_06 = '영성';}
	     if ($my_hour_e == '戌') {$whasung_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_06 = '화성';$yeungsung_07 = '영성';}
	     if ($my_hour_e == '亥') {$whasung_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_whasung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/whasung.gif alt=화성 border=0></a>';$yeungsung_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yeungsung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yeungsung.gif alt=영성 border=0></a>';$whasung_07 = '화성';$yeungsung_08 = '영성';}
	     }

if ($my_hour_e == '子') {$jigong_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigong.gif alt=지공 border=0></a>';$jigup_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigup.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigup.gif alt=지겁 border=0></a>';$jigong_10 = '지공';$jigup_10 = '지겁';}
if ($my_hour_e == '丑') {$jigong_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigong.gif alt=지공 border=0></a>';$jigup_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigup.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigup.gif alt=지겁 border=0></a>';$jigong_09 = '지공';$jigup_11 = '지겁';}
if ($my_hour_e == '寅') {$jigong_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigong.gif alt=지공 border=0></a>';$jigup_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigup.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigup.gif alt=지겁 border=0></a>';$jigong_08 = '지공';$jigup_12 = '지겁';}
if ($my_hour_e == '卯') {$jigong_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigong.gif alt=지공 border=0></a>';$jigup_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigup.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigup.gif alt=지겁 border=0></a>';$jigong_07 = '지공';$jigup_01 = '지겁';}
if ($my_hour_e == '辰') {$jigong_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigong.gif alt=지공 border=0></a>';$jigup_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigup.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigup.gif alt=지겁 border=0></a>';$jigong_06 = '지공';$jigup_02 = '지겁';}
if ($my_hour_e == '巳') {$jigong_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigong.gif alt=지공 border=0></a>';$jigup_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigup.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigup.gif alt=지겁 border=0></a>';$jigong_05 = '지공';$jigup_03 = '지겁';}
if ($my_hour_e == '午') {$jigong_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigong.gif alt=지공 border=0></a>';$jigup_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigup.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigup.gif alt=지겁 border=0></a>';$jigong_04 = '지공';$jigup_04 = '지겁';}
if ($my_hour_e == '未') {$jigong_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigong.gif alt=지공 border=0></a>';$jigup_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigup.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigup.gif alt=지겁 border=0></a>';$jigong_03 = '지공';$jigup_05 = '지겁';}
if ($my_hour_e == '申') {$jigong_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigong.gif alt=지공 border=0></a>';$jigup_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigup.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigup.gif alt=지겁 border=0></a>';$jigong_02 = '지공';$jigup_06 = '지겁';}
if ($my_hour_e == '酉') {$jigong_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigong.gif alt=지공 border=0></a>';$jigup_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigup.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigup.gif alt=지겁 border=0></a>';$jigong_01 = '지공';$jigup_07 = '지겁';}
if ($my_hour_e == '戌') {$jigong_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigong.gif alt=지공 border=0></a>';$jigup_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigup.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigup.gif alt=지겁 border=0></a>';$jigong_12 = '지공';$jigup_08 = '지겁';}
if ($my_hour_e == '亥') {$jigong_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigong.gif alt=지공 border=0></a>';$jigup_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jigup.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jigup.gif alt=지겁 border=0></a>';$jigong_11 = '지공';$jigup_09 = '지겁';}

################################################################################################화성영성지공지겁 의 묘왕리함


if ($whasung_11) {$whasung_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$whasung_my_11 = '평';}
if ($whasung_12) {$whasung_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$whasung_my_12 = '왕';}
if ($whasung_01) {$whasung_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$whasung_my_01 = '묘';}
if ($whasung_02) {$whasung_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$whasung_my_02 = '평';}
if ($whasung_03) {$whasung_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/han.gif alt=한 border=0>';$whasung_my_03 = '한';}
if ($whasung_04) {$whasung_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$whasung_my_04 = '왕';}
if ($whasung_05) {$whasung_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$whasung_my_05 = '묘';}
if ($whasung_06) {$whasung_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/han.gif alt=한 border=0>';$whasung_my_06 = '한';}
if ($whasung_07) {$whasung_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$whasung_my_07 = '함';}
if ($whasung_08) {$whasung_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$whasung_my_08 = '함';}
if ($whasung_09) {$whasung_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$whasung_my_09 = '묘';}
if ($whasung_10) {$whasung_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$whasung_my_10 = '평';}

if ($yeungsung_11) {$yeungsung_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$yeungsung_my_11 = '함';}
if ($yeungsung_12) {$yeungsung_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$yeungsung_my_12 = '함';}
if ($yeungsung_01) {$yeungsung_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$yeungsung_my_01 = '묘';}
if ($yeungsung_02) {$yeungsung_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$yeungsung_my_02 = '묘';}
if ($yeungsung_03) {$yeungsung_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$yeungsung_my_03 = '왕';}
if ($yeungsung_04) {$yeungsung_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$yeungsung_my_04 = '왕';}
if ($yeungsung_05) {$yeungsung_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$yeungsung_my_05 = '묘';}
if ($yeungsung_06) {$yeungsung_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$yeungsung_my_06 = '왕';}
if ($yeungsung_07) {$yeungsung_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$yeungsung_my_07 = '왕';}
if ($yeungsung_08) {$yeungsung_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$yeungsung_my_08 = '함';}
if ($yeungsung_09) {$yeungsung_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$yeungsung_my_09 = '묘';}
if ($yeungsung_10) {$yeungsung_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$yeungsung_my_10 = '묘';}

if ($jigong_11) {$jigong_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$jigong_my_11 = '평';}
if ($jigong_12) {$jigong_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$jigong_my_12 = '함';}
if ($jigong_01) {$jigong_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$jigong_my_01 = '함';}
if ($jigong_02) {$jigong_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$jigong_my_02 = '평';}
if ($jigong_03) {$jigong_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$jigong_my_03 = '함';}
if ($jigong_04) {$jigong_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$jigong_my_04 = '묘';}
if ($jigong_05) {$jigong_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$jigong_my_05 = '묘';}
if ($jigong_06) {$jigong_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$jigong_my_06 = '평';}
if ($jigong_07) {$jigong_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$jigong_my_07 = '묘';}
if ($jigong_08) {$jigong_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$jigong_my_08 = '묘';}
if ($jigong_09) {$jigong_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$jigong_my_09 = '함';}
if ($jigong_10) {$jigong_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$jigong_my_10 = '함';}

if ($jigup_11) {$jigup_my_11_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$jigup_my_11 = '함';}
if ($jigup_12) {$jigup_my_12_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$jigup_my_12 = '함';}
if ($jigup_01) {$jigup_my_01_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$jigup_my_01 = '평';}
if ($jigup_02) {$jigup_my_02_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$jigup_my_02 = '평';}
if ($jigup_03) {$jigup_my_03_disp = '<img src=/images/result_img/jum_img/hanja_img/ham.gif alt=함 border=0>';$jigup_my_03 = '함';}
if ($jigup_04) {$jigup_my_04_disp = '<img src=/images/result_img/jum_img/hanja_img/han.gif alt=한 border=0>';$jigup_my_04 = '한';}
if ($jigup_05) {$jigup_my_05_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$jigup_my_05 = '묘';}
if ($jigup_06) {$jigup_my_06_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$jigup_my_06 = '평';}
if ($jigup_07) {$jigup_my_07_disp = '<img src=/images/result_img/jum_img/hanja_img/myo.gif alt=묘 border=0>';$jigup_my_07 = '묘';}
if ($jigup_08) {$jigup_my_08_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$jigup_my_08 = '평';}
if ($jigup_09) {$jigup_my_09_disp = '<img src=/images/result_img/jum_img/hanja_img/peung.gif alt=평 border=0>';$jigup_my_09 = '평';}
if ($jigup_10) {$jigup_my_10_disp = '<img src=/images/result_img/jum_img/hanja_img/wang.gif alt=왕 border=0>';$jigup_my_10 = '왕';}



###############################################################################################선천사화(1=화록/2화권/3화과/4화기)


if ($my_umyear_h == '甲') {
                                     if ($yeamjung_01) {$s_yeamjung_01 = '1';}
				     if ($yeamjung_02) {$s_yeamjung_02 = '1';}
				     if ($yeamjung_03) {$s_yeamjung_03 = '1';}
				     if ($yeamjung_04) {$s_yeamjung_04 = '1';}
				     if ($yeamjung_05) {$s_yeamjung_05 = '1';}
				     if ($yeamjung_06) {$s_yeamjung_06 = '1';}
				     if ($yeamjung_07) {$s_yeamjung_07 = '1';}
				     if ($yeamjung_08) {$s_yeamjung_08 = '1';}
				     if ($yeamjung_09) {$s_yeamjung_09 = '1';}
				     if ($yeamjung_10) {$s_yeamjung_10 = '1';}
				     if ($yeamjung_11) {$s_yeamjung_11 = '1';}
				     if ($yeamjung_12) {$s_yeamjung_12 = '1';}

				     if ($pagun_01) {$s_pagun_01 = '2';}
				     if ($pagun_02) {$s_pagun_02 = '2';}
				     if ($pagun_03) {$s_pagun_03 = '2';}
				     if ($pagun_04) {$s_pagun_04 = '2';}
				     if ($pagun_05) {$s_pagun_05 = '2';}
				     if ($pagun_06) {$s_pagun_06 = '2';}
				     if ($pagun_07) {$s_pagun_07 = '2';}
				     if ($pagun_08) {$s_pagun_08 = '2';}
				     if ($pagun_09) {$s_pagun_09 = '2';}
				     if ($pagun_10) {$s_pagun_10 = '2';}
				     if ($pagun_11) {$s_pagun_11 = '2';}
				     if ($pagun_12) {$s_pagun_12 = '2';}

				     if ($mugok_01) {$s_mugok_01 = '3';}
				     if ($mugok_02) {$s_mugok_02 = '3';}
				     if ($mugok_03) {$s_mugok_03 = '3';}
				     if ($mugok_04) {$s_mugok_04 = '3';}
				     if ($mugok_05) {$s_mugok_05 = '3';}
				     if ($mugok_06) {$s_mugok_06 = '3';}
				     if ($mugok_07) {$s_mugok_07 = '3';}
				     if ($mugok_08) {$s_mugok_08 = '3';}
				     if ($mugok_09) {$s_mugok_09 = '3';}
				     if ($mugok_10) {$s_mugok_10 = '3';}
				     if ($mugok_11) {$s_mugok_11 = '3';}
				     if ($mugok_12) {$s_mugok_12 = '3';}

				     if ($taeyang_01) {$s_taeyang_01 = '4';}
				     if ($taeyang_02) {$s_taeyang_02 = '4';}
				     if ($taeyang_03) {$s_taeyang_03 = '4';}
				     if ($taeyang_04) {$s_taeyang_04 = '4';}
				     if ($taeyang_05) {$s_taeyang_05 = '4';}
				     if ($taeyang_06) {$s_taeyang_06 = '4';}
				     if ($taeyang_07) {$s_taeyang_07 = '4';}
				     if ($taeyang_08) {$s_taeyang_08 = '4';}
				     if ($taeyang_09) {$s_taeyang_09 = '4';}
				     if ($taeyang_10) {$s_taeyang_10 = '4';}
				     if ($taeyang_11) {$s_taeyang_11 = '4';}
				     if ($taeyang_12) {$s_taeyang_12 = '4';}

				     }



if ($my_umyear_h == '乙') {
                                     if ($chengi_01) {$s_chengi_01 = '1';}
				     if ($chengi_02) {$s_chengi_02 = '1';}
				     if ($chengi_03) {$s_chengi_03 = '1';}
				     if ($chengi_04) {$s_chengi_04 = '1';}
				     if ($chengi_05) {$s_chengi_05 = '1';}
				     if ($chengi_06) {$s_chengi_06 = '1';}
				     if ($chengi_07) {$s_chengi_07 = '1';}
				     if ($chengi_08) {$s_chengi_08 = '1';}
				     if ($chengi_09) {$s_chengi_09 = '1';}
				     if ($chengi_10) {$s_chengi_10 = '1';}
				     if ($chengi_11) {$s_chengi_11 = '1';}
				     if ($chengi_12) {$s_chengi_12 = '1';}

				     if ($cheanryang_01) {$s_cheanryang_01 = '2';}
				     if ($cheanryang_02) {$s_cheanryang_02 = '2';}
				     if ($cheanryang_03) {$s_cheanryang_03 = '2';}
				     if ($cheanryang_04) {$s_cheanryang_04 = '2';}
				     if ($cheanryang_05) {$s_cheanryang_05 = '2';}
				     if ($cheanryang_06) {$s_cheanryang_06 = '2';}
				     if ($cheanryang_07) {$s_cheanryang_07 = '2';}
				     if ($cheanryang_08) {$s_cheanryang_08 = '2';}
				     if ($cheanryang_09) {$s_cheanryang_09 = '2';}
				     if ($cheanryang_10) {$s_cheanryang_10 = '2';}
				     if ($cheanryang_11) {$s_cheanryang_11 = '2';}
				     if ($cheanryang_12) {$s_cheanryang_12 = '2';}

				     if ($jami_01) {$s_jami_01 = '3';}
				     if ($jami_02) {$s_jami_02 = '3';}
				     if ($jami_03) {$s_jami_03 = '3';}
				     if ($jami_04) {$s_jami_04 = '3';}
				     if ($jami_05) {$s_jami_05 = '3';}
				     if ($jami_06) {$s_jami_06 = '3';}
				     if ($jami_07) {$s_jami_07 = '3';}
				     if ($jami_08) {$s_jami_08 = '3';}
				     if ($jami_09) {$s_jami_09 = '3';}
				     if ($jami_10) {$s_jami_10 = '3';}
				     if ($jami_11) {$s_jami_11 = '3';}
				     if ($jami_12) {$s_jami_12 = '3';}

				     if ($taeum_01) {$s_taeum_01 = '4';}
				     if ($taeum_02) {$s_taeum_02 = '4';}
				     if ($taeum_03) {$s_taeum_03 = '4';}
				     if ($taeum_04) {$s_taeum_04 = '4';}
				     if ($taeum_05) {$s_taeum_05 = '4';}
				     if ($taeum_06) {$s_taeum_06 = '4';}
				     if ($taeum_07) {$s_taeum_07 = '4';}
				     if ($taeum_08) {$s_taeum_08 = '4';}
				     if ($taeum_09) {$s_taeum_09 = '4';}
				     if ($taeum_10) {$s_taeum_10 = '4';}
				     if ($taeum_11) {$s_taeum_11 = '4';}
				     if ($taeum_12) {$s_taeum_12 = '4';}

				     }


if ($my_umyear_h == '丙') {
                                     if ($chendong_01) {$s_chendong_01 = '1';}
				     if ($chendong_02) {$s_chendong_02 = '1';}
				     if ($chendong_03) {$s_chendong_03 = '1';}
				     if ($chendong_04) {$s_chendong_04 = '1';}
				     if ($chendong_05) {$s_chendong_05 = '1';}
				     if ($chendong_06) {$s_chendong_06 = '1';}
				     if ($chendong_07) {$s_chendong_07 = '1';}
				     if ($chendong_08) {$s_chendong_08 = '1';}
				     if ($chendong_09) {$s_chendong_09 = '1';}
				     if ($chendong_10) {$s_chendong_10 = '1';}
				     if ($chendong_11) {$s_chendong_11 = '1';}
				     if ($chendong_12) {$s_chendong_12 = '1';}

				     if ($chengi_01) {$s_chengi_01 = '2';}
				     if ($chengi_02) {$s_chengi_02 = '2';}
				     if ($chengi_03) {$s_chengi_03 = '2';}
				     if ($chengi_04) {$s_chengi_04 = '2';}
				     if ($chengi_05) {$s_chengi_05 = '2';}
				     if ($chengi_06) {$s_chengi_06 = '2';}
				     if ($chengi_07) {$s_chengi_07 = '2';}
				     if ($chengi_08) {$s_chengi_08 = '2';}
				     if ($chengi_09) {$s_chengi_09 = '2';}
				     if ($chengi_10) {$s_chengi_10 = '2';}
				     if ($chengi_11) {$s_chengi_11 = '2';}
				     if ($chengi_12) {$s_chengi_12 = '2';}

				     if ($munchang_01) {$s_munchang_01 = '3';}
				     if ($munchang_02) {$s_munchang_02 = '3';}
				     if ($munchang_03) {$s_munchang_03 = '3';}
				     if ($munchang_04) {$s_munchang_04 = '3';}
				     if ($munchang_05) {$s_munchang_05 = '3';}
				     if ($munchang_06) {$s_munchang_06 = '3';}
				     if ($munchang_07) {$s_munchang_07 = '3';}
				     if ($munchang_08) {$s_munchang_08 = '3';}
				     if ($munchang_09) {$s_munchang_09 = '3';}
				     if ($munchang_10) {$s_munchang_10 = '3';}
				     if ($munchang_11) {$s_munchang_11 = '3';}
				     if ($munchang_12) {$s_munchang_12 = '3';}

				     if ($yeamjung_01) {$s_yeamjung_01 = '4';}
				     if ($yeamjung_02) {$s_yeamjung_02 = '4';}
				     if ($yeamjung_03) {$s_yeamjung_03 = '4';}
				     if ($yeamjung_04) {$s_yeamjung_04 = '4';}
				     if ($yeamjung_05) {$s_yeamjung_05 = '4';}
				     if ($yeamjung_06) {$s_yeamjung_06 = '4';}
				     if ($yeamjung_07) {$s_yeamjung_07 = '4';}
				     if ($yeamjung_08) {$s_yeamjung_08 = '4';}
				     if ($yeamjung_09) {$s_yeamjung_09 = '4';}
				     if ($yeamjung_10) {$s_yeamjung_10 = '4';}
				     if ($yeamjung_11) {$s_yeamjung_11 = '4';}
				     if ($yeamjung_12) {$s_yeamjung_12 = '4';}

				     }


if ($my_umyear_h == '丁') {
                                     if ($taeum_01) {$s_taeum_01 = '1';}
				     if ($taeum_02) {$s_taeum_02 = '1';}
				     if ($taeum_03) {$s_taeum_03 = '1';}
				     if ($taeum_04) {$s_taeum_04 = '1';}
				     if ($taeum_05) {$s_taeum_05 = '1';}
				     if ($taeum_06) {$s_taeum_06 = '1';}
				     if ($taeum_07) {$s_taeum_07 = '1';}
				     if ($taeum_08) {$s_taeum_08 = '1';}
				     if ($taeum_09) {$s_taeum_09 = '1';}
				     if ($taeum_10) {$s_taeum_10 = '1';}
				     if ($taeum_11) {$s_taeum_11 = '1';}
				     if ($taeum_12) {$s_taeum_12 = '1';}

				     if ($chendong_01) {$s_chendong_01 = '2';}
				     if ($chendong_02) {$s_chendong_02 = '2';}
				     if ($chendong_03) {$s_chendong_03 = '2';}
				     if ($chendong_04) {$s_chendong_04 = '2';}
				     if ($chendong_05) {$s_chendong_05 = '2';}
				     if ($chendong_06) {$s_chendong_06 = '2';}
				     if ($chendong_07) {$s_chendong_07 = '2';}
				     if ($chendong_08) {$s_chendong_08 = '2';}
				     if ($chendong_09) {$s_chendong_09 = '2';}
				     if ($chendong_10) {$s_chendong_10 = '2';}
				     if ($chendong_11) {$s_chendong_11 = '2';}
				     if ($chendong_12) {$s_chendong_12 = '2';}

				     if ($chengi_01) {$s_chengi_01 = '3';}
				     if ($chengi_02) {$s_chengi_02 = '3';}
				     if ($chengi_03) {$s_chengi_03 = '3';}
				     if ($chengi_04) {$s_chengi_04 = '3';}
				     if ($chengi_05) {$s_chengi_05 = '3';}
				     if ($chengi_06) {$s_chengi_06 = '3';}
				     if ($chengi_07) {$s_chengi_07 = '3';}
				     if ($chengi_08) {$s_chengi_08 = '3';}
				     if ($chengi_09) {$s_chengi_09 = '3';}
				     if ($chengi_10) {$s_chengi_10 = '3';}
				     if ($chengi_11) {$s_chengi_11 = '3';}
				     if ($chengi_12) {$s_chengi_12 = '3';}

				     if ($geamun_01) {$s_geamun_01 = '4';}
				     if ($geamun_02) {$s_geamun_02 = '4';}
				     if ($geamun_03) {$s_geamun_03 = '4';}
				     if ($geamun_04) {$s_geamun_04 = '4';}
				     if ($geamun_05) {$s_geamun_05 = '4';}
				     if ($geamun_06) {$s_geamun_06 = '4';}
				     if ($geamun_07) {$s_geamun_07 = '4';}
				     if ($geamun_08) {$s_geamun_08 = '4';}
				     if ($geamun_09) {$s_geamun_09 = '4';}
				     if ($geamun_10) {$s_geamun_10 = '4';}
				     if ($geamun_11) {$s_geamun_11 = '4';}
				     if ($geamun_12) {$s_geamun_12 = '4';}

				     }


if ($my_umyear_h == '戊') {
                                     if ($tamrang_01) {$s_tamrang_01 = '1';}
				     if ($tamrang_02) {$s_tamrang_02 = '1';}
				     if ($tamrang_03) {$s_tamrang_03 = '1';}
				     if ($tamrang_04) {$s_tamrang_04 = '1';}
				     if ($tamrang_05) {$s_tamrang_05 = '1';}
				     if ($tamrang_06) {$s_tamrang_06 = '1';}
				     if ($tamrang_07) {$s_tamrang_07 = '1';}
				     if ($tamrang_08) {$s_tamrang_08 = '1';}
				     if ($tamrang_09) {$s_tamrang_09 = '1';}
				     if ($tamrang_10) {$s_tamrang_10 = '1';}
				     if ($tamrang_11) {$s_tamrang_11 = '1';}
				     if ($tamrang_12) {$s_tamrang_12 = '1';}

				     if ($taeum_01) {$s_taeum_01 = '2';}
				     if ($taeum_02) {$s_taeum_02 = '2';}
				     if ($taeum_03) {$s_taeum_03 = '2';}
				     if ($taeum_04) {$s_taeum_04 = '2';}
				     if ($taeum_05) {$s_taeum_05 = '2';}
				     if ($taeum_06) {$s_taeum_06 = '2';}
				     if ($taeum_07) {$s_taeum_07 = '2';}
				     if ($taeum_08) {$s_taeum_08 = '2';}
				     if ($taeum_09) {$s_taeum_09 = '2';}
				     if ($taeum_10) {$s_taeum_10 = '2';}
				     if ($taeum_11) {$s_taeum_11 = '2';}
				     if ($taeum_12) {$s_taeum_12 = '2';}

				     if ($upil_01) {$s_upil_01 = '3';}
				     if ($upil_02) {$s_upil_02 = '3';}
				     if ($upil_03) {$s_upil_03 = '3';}
				     if ($upil_04) {$s_upil_04 = '3';}
				     if ($upil_05) {$s_upil_05 = '3';}
				     if ($upil_06) {$s_upil_06 = '3';}
				     if ($upil_07) {$s_upil_07 = '3';}
				     if ($upil_08) {$s_upil_08 = '3';}
				     if ($upil_09) {$s_upil_09 = '3';}
				     if ($upil_10) {$s_upil_10 = '3';}
				     if ($upil_11) {$s_upil_11 = '3';}
				     if ($upil_12) {$s_upil_12 = '3';}

				     if ($chengi_01) {$s_chengi_01 = '4';}
				     if ($chengi_02) {$s_chengi_02 = '4';}
				     if ($chengi_03) {$s_chengi_03 = '4';}
				     if ($chengi_04) {$s_chengi_04 = '4';}
				     if ($chengi_05) {$s_chengi_05 = '4';}
				     if ($chengi_06) {$s_chengi_06 = '4';}
				     if ($chengi_07) {$s_chengi_07 = '4';}
				     if ($chengi_08) {$s_chengi_08 = '4';}
				     if ($chengi_09) {$s_chengi_09 = '4';}
				     if ($chengi_10) {$s_chengi_10 = '4';}
				     if ($chengi_11) {$s_chengi_11 = '4';}
				     if ($chengi_12) {$s_chengi_12 = '4';}




				     }


if ($my_umyear_h == '己') {
                                     if ($mugok_01) {$s_mugok_01 = '1';}
				     if ($mugok_02) {$s_mugok_02 = '1';}
				     if ($mugok_03) {$s_mugok_03 = '1';}
				     if ($mugok_04) {$s_mugok_04 = '1';}
				     if ($mugok_05) {$s_mugok_05 = '1';}
				     if ($mugok_06) {$s_mugok_06 = '1';}
				     if ($mugok_07) {$s_mugok_07 = '1';}
				     if ($mugok_08) {$s_mugok_08 = '1';}
				     if ($mugok_09) {$s_mugok_09 = '1';}
				     if ($mugok_10) {$s_mugok_10 = '1';}
				     if ($mugok_11) {$s_mugok_11 = '1';}
				     if ($mugok_12) {$s_mugok_12 = '1';}

				     if ($tamrang_01) {$s_tamrang_01 = '2';}
				     if ($tamrang_02) {$s_tamrang_02 = '2';}
				     if ($tamrang_03) {$s_tamrang_03 = '2';}
				     if ($tamrang_04) {$s_tamrang_04 = '2';}
				     if ($tamrang_05) {$s_tamrang_05 = '2';}
				     if ($tamrang_06) {$s_tamrang_06 = '2';}
				     if ($tamrang_07) {$s_tamrang_07 = '2';}
				     if ($tamrang_08) {$s_tamrang_08 = '2';}
				     if ($tamrang_09) {$s_tamrang_09 = '2';}
				     if ($tamrang_10) {$s_tamrang_10 = '2';}
				     if ($tamrang_11) {$s_tamrang_11 = '2';}
				     if ($tamrang_12) {$s_tamrang_12 = '2';}

				     if ($cheanryang_01) {$s_cheanryang_01 = '3';}
				     if ($cheanryang_02) {$s_cheanryang_02 = '3';}
				     if ($cheanryang_03) {$s_cheanryang_03 = '3';}
				     if ($cheanryang_04) {$s_cheanryang_04 = '3';}
				     if ($cheanryang_05) {$s_cheanryang_05 = '3';}
				     if ($cheanryang_06) {$s_cheanryang_06 = '3';}
				     if ($cheanryang_07) {$s_cheanryang_07 = '3';}
				     if ($cheanryang_08) {$s_cheanryang_08 = '3';}
				     if ($cheanryang_09) {$s_cheanryang_09 = '3';}
				     if ($cheanryang_10) {$s_cheanryang_10 = '3';}
				     if ($cheanryang_11) {$s_cheanryang_11 = '3';}
				     if ($cheanryang_12) {$s_cheanryang_12 = '3';}

				     if ($mungok_01) {$s_mungok_01 = '4';}
				     if ($mungok_02) {$s_mungok_02 = '4';}
				     if ($mungok_03) {$s_mungok_03 = '4';}
				     if ($mungok_04) {$s_mungok_04 = '4';}
				     if ($mungok_05) {$s_mungok_05 = '4';}
				     if ($mungok_06) {$s_mungok_06 = '4';}
				     if ($mungok_07) {$s_mungok_07 = '4';}
				     if ($mungok_08) {$s_mungok_08 = '4';}
				     if ($mungok_09) {$s_mungok_09 = '4';}
				     if ($mungok_10) {$s_mungok_10 = '4';}
				     if ($mungok_11) {$s_mungok_11 = '4';}
				     if ($mungok_12) {$s_mungok_12 = '4';}

				     }


if ($my_umyear_h == '庚') {
                                     if ($taeyang_01) {$s_taeyang_01 = '1';}
				     if ($taeyang_02) {$s_taeyang_02 = '1';}
				     if ($taeyang_03) {$s_taeyang_03 = '1';}
				     if ($taeyang_04) {$s_taeyang_04 = '1';}
				     if ($taeyang_05) {$s_taeyang_05 = '1';}
				     if ($taeyang_06) {$s_taeyang_06 = '1';}
				     if ($taeyang_07) {$s_taeyang_07 = '1';}
				     if ($taeyang_08) {$s_taeyang_08 = '1';}
				     if ($taeyang_09) {$s_taeyang_09 = '1';}
				     if ($taeyang_10) {$s_taeyang_10 = '1';}
				     if ($taeyang_11) {$s_taeyang_11 = '1';}
				     if ($taeyang_12) {$s_taeyang_12 = '1';}

				     if ($mugok_01) {$s_mugok_01 = '2';}
				     if ($mugok_02) {$s_mugok_02 = '2';}
				     if ($mugok_03) {$s_mugok_03 = '2';}
				     if ($mugok_04) {$s_mugok_04 = '2';}
				     if ($mugok_05) {$s_mugok_05 = '2';}
				     if ($mugok_06) {$s_mugok_06 = '2';}
				     if ($mugok_07) {$s_mugok_07 = '2';}
				     if ($mugok_08) {$s_mugok_08 = '2';}
				     if ($mugok_09) {$s_mugok_09 = '2';}
				     if ($mugok_10) {$s_mugok_10 = '2';}
				     if ($mugok_11) {$s_mugok_11 = '2';}
				     if ($mugok_12) {$s_mugok_12 = '2';}

				     if ($taeum_01) {$s_taeum_01 = '3';}
				     if ($taeum_02) {$s_taeum_02 = '3';}
				     if ($taeum_03) {$s_taeum_03 = '3';}
				     if ($taeum_04) {$s_taeum_04 = '3';}
				     if ($taeum_05) {$s_taeum_05 = '3';}
				     if ($taeum_06) {$s_taeum_06 = '3';}
				     if ($taeum_07) {$s_taeum_07 = '3';}
				     if ($taeum_08) {$s_taeum_08 = '3';}
				     if ($taeum_09) {$s_taeum_09 = '3';}
				     if ($taeum_10) {$s_taeum_10 = '3';}
				     if ($taeum_11) {$s_taeum_11 = '3';}
				     if ($taeum_12) {$s_taeum_12 = '3';}

				     if ($chendong_01) {$s_chendong_01 = '4';}
				     if ($chendong_02) {$s_chendong_02 = '4';}
				     if ($chendong_03) {$s_chendong_03 = '4';}
				     if ($chendong_04) {$s_chendong_04 = '4';}
				     if ($chendong_05) {$s_chendong_05 = '4';}
				     if ($chendong_06) {$s_chendong_06 = '4';}
				     if ($chendong_07) {$s_chendong_07 = '4';}
				     if ($chendong_08) {$s_chendong_08 = '4';}
				     if ($chendong_09) {$s_chendong_09 = '4';}
				     if ($chendong_10) {$s_chendong_10 = '4';}
				     if ($chendong_11) {$s_chendong_11 = '4';}
				     if ($chendong_12) {$s_chendong_12 = '4';}

				     }


if ($my_umyear_h == '辛') {
                                     if ($geamun_01) {$s_geamun_01 = '1';}
				     if ($geamun_02) {$s_geamun_02 = '1';}
				     if ($geamun_03) {$s_geamun_03 = '1';}
				     if ($geamun_04) {$s_geamun_04 = '1';}
				     if ($geamun_05) {$s_geamun_05 = '1';}
				     if ($geamun_06) {$s_geamun_06 = '1';}
				     if ($geamun_07) {$s_geamun_07 = '1';}
				     if ($geamun_08) {$s_geamun_08 = '1';}
				     if ($geamun_09) {$s_geamun_09 = '1';}
				     if ($geamun_10) {$s_geamun_10 = '1';}
				     if ($geamun_11) {$s_geamun_11 = '1';}
				     if ($geamun_12) {$s_geamun_12 = '1';}

				     if ($taeyang_01) {$s_taeyang_01 = '2';}
				     if ($taeyang_02) {$s_taeyang_02 = '2';}
				     if ($taeyang_03) {$s_taeyang_03 = '2';}
				     if ($taeyang_04) {$s_taeyang_04 = '2';}
				     if ($taeyang_05) {$s_taeyang_05 = '2';}
				     if ($taeyang_06) {$s_taeyang_06 = '2';}
				     if ($taeyang_07) {$s_taeyang_07 = '2';}
				     if ($taeyang_08) {$s_taeyang_08 = '2';}
				     if ($taeyang_09) {$s_taeyang_09 = '2';}
				     if ($taeyang_10) {$s_taeyang_10 = '2';}
				     if ($taeyang_11) {$s_taeyang_11 = '2';}
				     if ($taeyang_12) {$s_taeyang_12 = '2';}

				     if ($mungok_01) {$s_mungok_01 = '3';}
				     if ($mungok_02) {$s_mungok_02 = '3';}
				     if ($mungok_03) {$s_mungok_03 = '3';}
				     if ($mungok_04) {$s_mungok_04 = '3';}
				     if ($mungok_05) {$s_mungok_05 = '3';}
				     if ($mungok_06) {$s_mungok_06 = '3';}
				     if ($mungok_07) {$s_mungok_07 = '3';}
				     if ($mungok_08) {$s_mungok_08 = '3';}
				     if ($mungok_09) {$s_mungok_09 = '3';}
				     if ($mungok_10) {$s_mungok_10 = '3';}
				     if ($mungok_11) {$s_mungok_11 = '3';}
				     if ($mungok_12) {$s_mungok_12 = '3';}

				     if ($munchang_01) {$s_munchang_01 = '4';}
				     if ($munchang_02) {$s_munchang_02 = '4';}
				     if ($munchang_03) {$s_munchang_03 = '4';}
				     if ($munchang_04) {$s_munchang_04 = '4';}
				     if ($munchang_05) {$s_munchang_05 = '4';}
				     if ($munchang_06) {$s_munchang_06 = '4';}
				     if ($munchang_07) {$s_munchang_07 = '4';}
				     if ($munchang_08) {$s_munchang_08 = '4';}
				     if ($munchang_09) {$s_munchang_09 = '4';}
				     if ($munchang_10) {$s_munchang_10 = '4';}
				     if ($munchang_11) {$s_munchang_11 = '4';}
				     if ($munchang_12) {$s_munchang_12 = '4';}

				     }


if ($my_umyear_h == '壬') {
                                     if ($cheanryang_01) {$s_cheanryang_01 = '1';}
				     if ($cheanryang_02) {$s_cheanryang_02 = '1';}
				     if ($cheanryang_03) {$s_cheanryang_03 = '1';}
				     if ($cheanryang_04) {$s_cheanryang_04 = '1';}
				     if ($cheanryang_05) {$s_cheanryang_05 = '1';}
				     if ($cheanryang_06) {$s_cheanryang_06 = '1';}
				     if ($cheanryang_07) {$s_cheanryang_07 = '1';}
				     if ($cheanryang_08) {$s_cheanryang_08 = '1';}
				     if ($cheanryang_09) {$s_cheanryang_09 = '1';}
				     if ($cheanryang_10) {$s_cheanryang_10 = '1';}
				     if ($cheanryang_11) {$s_cheanryang_11 = '1';}
				     if ($cheanryang_12) {$s_cheanryang_12 = '1';}

				     if ($jami_01) {$s_jami_01 = '2';}
				     if ($jami_02) {$s_jami_02 = '2';}
				     if ($jami_03) {$s_jami_03 = '2';}
				     if ($jami_04) {$s_jami_04 = '2';}
				     if ($jami_05) {$s_jami_05 = '2';}
				     if ($jami_06) {$s_jami_06 = '2';}
				     if ($jami_07) {$s_jami_07 = '2';}
				     if ($jami_08) {$s_jami_08 = '2';}
				     if ($jami_09) {$s_jami_09 = '2';}
				     if ($jami_10) {$s_jami_10 = '2';}
				     if ($jami_11) {$s_jami_11 = '2';}
				     if ($jami_12) {$s_jami_12 = '2';}

				     if ($jabo_01) {$s_jabo_01 = '3';}
				     if ($jabo_02) {$s_jabo_02 = '3';}
				     if ($jabo_03) {$s_jabo_03 = '3';}
				     if ($jabo_04) {$s_jabo_04 = '3';}
				     if ($jabo_05) {$s_jabo_05 = '3';}
				     if ($jabo_06) {$s_jabo_06 = '3';}
				     if ($jabo_07) {$s_jabo_07 = '3';}
				     if ($jabo_08) {$s_jabo_08 = '3';}
				     if ($jabo_09) {$s_jabo_09 = '3';}
				     if ($jabo_10) {$s_jabo_10 = '3';}
				     if ($jabo_11) {$s_jabo_11 = '3';}
				     if ($jabo_12) {$s_jabo_12 = '3';}

				     if ($mugok_01) {$s_mugok_01 = '4';}
				     if ($mugok_02) {$s_mugok_02 = '4';}
				     if ($mugok_03) {$s_mugok_03 = '4';}
				     if ($mugok_04) {$s_mugok_04 = '4';}
				     if ($mugok_05) {$s_mugok_05 = '4';}
				     if ($mugok_06) {$s_mugok_06 = '4';}
				     if ($mugok_07) {$s_mugok_07 = '4';}
				     if ($mugok_08) {$s_mugok_08 = '4';}
				     if ($mugok_09) {$s_mugok_09 = '4';}
				     if ($mugok_10) {$s_mugok_10 = '4';}
				     if ($mugok_11) {$s_mugok_11 = '4';}
				     if ($mugok_12) {$s_mugok_12 = '4';}

				     }


if ($my_umyear_h == '癸') {
                                     if ($pagun_01) {$s_pagun_01 = '1';}
				     if ($pagun_02) {$s_pagun_02 = '1';}
				     if ($pagun_03) {$s_pagun_03 = '1';}
				     if ($pagun_04) {$s_pagun_04 = '1';}
				     if ($pagun_05) {$s_pagun_05 = '1';}
				     if ($pagun_06) {$s_pagun_06 = '1';}
				     if ($pagun_07) {$s_pagun_07 = '1';}
				     if ($pagun_08) {$s_pagun_08 = '1';}
				     if ($pagun_09) {$s_pagun_09 = '1';}
				     if ($pagun_10) {$s_pagun_10 = '1';}
				     if ($pagun_11) {$s_pagun_11 = '1';}
				     if ($pagun_12) {$s_pagun_12 = '1';}

				     if ($geamun_01) {$s_geamun_01 = '2';}
				     if ($geamun_02) {$s_geamun_02 = '2';}
				     if ($geamun_03) {$s_geamun_03 = '2';}
				     if ($geamun_04) {$s_geamun_04 = '2';}
				     if ($geamun_05) {$s_geamun_05 = '2';}
				     if ($geamun_06) {$s_geamun_06 = '2';}
				     if ($geamun_07) {$s_geamun_07 = '2';}
				     if ($geamun_08) {$s_geamun_08 = '2';}
				     if ($geamun_09) {$s_geamun_09 = '2';}
				     if ($geamun_10) {$s_geamun_10 = '2';}
				     if ($geamun_11) {$s_geamun_11 = '2';}
				     if ($geamun_12) {$s_geamun_12 = '2';}

				     if ($taeum_01) {$s_taeum_01 = '3';}
				     if ($taeum_02) {$s_taeum_02 = '3';}
				     if ($taeum_03) {$s_taeum_03 = '3';}
				     if ($taeum_04) {$s_taeum_04 = '3';}
				     if ($taeum_05) {$s_taeum_05 = '3';}
				     if ($taeum_06) {$s_taeum_06 = '3';}
				     if ($taeum_07) {$s_taeum_07 = '3';}
				     if ($taeum_08) {$s_taeum_08 = '3';}
				     if ($taeum_09) {$s_taeum_09 = '3';}
				     if ($taeum_10) {$s_taeum_10 = '3';}
				     if ($taeum_11) {$s_taeum_11 = '3';}
				     if ($taeum_12) {$s_taeum_12 = '3';}

				     if ($tamrang_01) {$s_tamrang_01 = '4';}
				     if ($tamrang_02) {$s_tamrang_02 = '4';}
				     if ($tamrang_03) {$s_tamrang_03 = '4';}
				     if ($tamrang_04) {$s_tamrang_04 = '4';}
				     if ($tamrang_05) {$s_tamrang_05 = '4';}
				     if ($tamrang_06) {$s_tamrang_06 = '4';}
				     if ($tamrang_07) {$s_tamrang_07 = '4';}
				     if ($tamrang_08) {$s_tamrang_08 = '4';}
				     if ($tamrang_09) {$s_tamrang_09 = '4';}
				     if ($tamrang_10) {$s_tamrang_10 = '4';}
				     if ($tamrang_11) {$s_tamrang_11 = '4';}
				     if ($tamrang_12) {$s_tamrang_12 = '4';}

				     }


#######################################################################################천형/천요/해신/연해/천월/음살/천무

if ($my_ummonth == '01') {$cheanhyung_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhyung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhyung.gif alt=천형 border=0></a>';$cheanhyung_08 = '천형';}
if ($my_ummonth == '02') {$cheanhyung_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhyung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhyung.gif alt=천형 border=0></a>';$cheanhyung_09 = '천형';}
if ($my_ummonth == '03') {$cheanhyung_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhyung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhyung.gif alt=천형 border=0></a>';$cheanhyung_10 = '천형';}
if ($my_ummonth == '04') {$cheanhyung_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhyung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhyung.gif alt=천형 border=0></a>';$cheanhyung_11 = '천형';}
if ($my_ummonth == '05') {$cheanhyung_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhyung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhyung.gif alt=천형 border=0></a>';$cheanhyung_12 = '천형';}
if ($my_ummonth == '06') {$cheanhyung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhyung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhyung.gif alt=천형 border=0></a>';$cheanhyung_01 = '천형';}
if ($my_ummonth == '07') {$cheanhyung_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhyung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhyung.gif alt=천형 border=0></a>';$cheanhyung_02 = '천형';}
if ($my_ummonth == '08') {$cheanhyung_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhyung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhyung.gif alt=천형 border=0></a>';$cheanhyung_03 = '천형';}
if ($my_ummonth == '09') {$cheanhyung_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhyung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhyung.gif alt=천형 border=0></a>';$cheanhyung_04 = '천형';}
if ($my_ummonth == '10') {$cheanhyung_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhyung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhyung.gif alt=천형 border=0></a>';$cheanhyung_05 = '천형';}
if ($my_ummonth == '11') {$cheanhyung_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhyung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhyung.gif alt=천형 border=0></a>';$cheanhyung_06 = '천형';}
if ($my_ummonth == '12') {$cheanhyung_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhyung.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhyung.gif alt=천형 border=0></a>';$cheanhyung_07 = '천형';}

if ($my_ummonth == '01') {$cheanyo_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanyo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanyo.gif alt=천요 border=0></a>';$cheanyo_12 = '천요';}
if ($my_ummonth == '02') {$cheanyo_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanyo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanyo.gif alt=천요 border=0></a>';$cheanyo_01 = '천요';}
if ($my_ummonth == '03') {$cheanyo_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanyo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanyo.gif alt=천요 border=0></a>';$cheanyo_02 = '천요';}
if ($my_ummonth == '04') {$cheanyo_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanyo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanyo.gif alt=천요 border=0></a>';$cheanyo_03 = '천요';}
if ($my_ummonth == '05') {$cheanyo_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanyo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanyo.gif alt=천요 border=0></a>';$cheanyo_04 = '천요';}
if ($my_ummonth == '06') {$cheanyo_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanyo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanyo.gif alt=천요 border=0></a>';$cheanyo_05 = '천요';}
if ($my_ummonth == '07') {$cheanyo_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanyo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanyo.gif alt=천요 border=0></a>';$cheanyo_06 = '천요';}
if ($my_ummonth == '08') {$cheanyo_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanyo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanyo.gif alt=천요 border=0></a>';$cheanyo_07 = '천요';}
if ($my_ummonth == '09') {$cheanyo_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanyo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanyo.gif alt=천요 border=0></a>';$cheanyo_08 = '천요';}
if ($my_ummonth == '10') {$cheanyo_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanyo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanyo.gif alt=천요 border=0></a>';$cheanyo_09 = '천요';}
if ($my_ummonth == '11') {$cheanyo_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanyo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanyo.gif alt=천요 border=0></a>';$cheanyo_10 = '천요';}
if ($my_ummonth == '12') {$cheanyo_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanyo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanyo.gif alt=천요 border=0></a>';$cheanyo_11 = '천요';}

if (($my_ummonth == '01')||($my_ummonth == '02')) {$haesin_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_haesin.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/haesin.gif alt=해신 border=0></a>';$haesin_07 = '해신';}
if (($my_ummonth == '03')||($my_ummonth == '04')) {$haesin_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_haesin.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/haesin.gif alt=해신 border=0></a>';$haesin_09 = '해신';}
if (($my_ummonth == '05')||($my_ummonth == '06')) {$haesin_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_haesin.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/haesin.gif alt=해신 border=0></a>';$haesin_11 = '해신';}
if (($my_ummonth == '07')||($my_ummonth == '08')) {$haesin_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_haesin.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/haesin.gif alt=해신 border=0></a>';$haesin_01 = '해신';}
if (($my_ummonth == '09')||($my_ummonth == '10')) {$haesin_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_haesin.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/haesin.gif alt=해신 border=0></a>';$haesin_03 = '해신';}
if (($my_ummonth == '11')||($my_ummonth == '12')) {$haesin_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_haesin.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/haesin.gif alt=해신 border=0></a>';$haesin_05 = '해신';}

#if ($my_umyear_e == '子'){$yeanhae_09_disp = '<img src=/images/result_img/jum_img/hanja_img/yeanhae.gif alt=연해 border=0>';$yeanhae_09 = '연해';}
#if ($my_umyear_e == '丑'){$yeanhae_08_disp = '<img src=/images/result_img/jum_img/hanja_img/yeanhae.gif alt=연해 border=0>';$yeanhae_08 = '연해';}
#if ($my_umyear_e == '寅'){$yeanhae_07_disp = '<img src=/images/result_img/jum_img/hanja_img/yeanhae.gif alt=연해 border=0>';$yeanhae_07 = '연해';}
#if ($my_umyear_e == '卯'){$yeanhae_06_disp = '<img src=/images/result_img/jum_img/hanja_img/yeanhae.gif alt=연해 border=0>';$yeanhae_06 = '연해';}
#if ($my_umyear_e == '辰'){$yeanhae_05_disp = '<img src=/images/result_img/jum_img/hanja_img/yeanhae.gif alt=연해 border=0>';$yeanhae_05 = '연해';}
#if ($my_umyear_e == '巳'){$yeanhae_04_disp = '<img src=/images/result_img/jum_img/hanja_img/yeanhae.gif alt=연해 border=0>';$yeanhae_04 = '연해';}
#if ($my_umyear_e == '午'){$yeanhae_03_disp = '<img src=/images/result_img/jum_img/hanja_img/yeanhae.gif alt=연해 border=0>';$yeanhae_03 = '연해';}
#if ($my_umyear_e == '未'){$yeanhae_02_disp = '<img src=/images/result_img/jum_img/hanja_img/yeanhae.gif alt=연해 border=0>';$yeanhae_02 = '연해';}
#if ($my_umyear_e == '申'){$yeanhae_01_disp = '<img src=/images/result_img/jum_img/hanja_img/yeanhae.gif alt=연해 border=0>';$yeanhae_01 = '연해';}
#if ($my_umyear_e == '酉'){$yeanhae_12_disp = '<img src=/images/result_img/jum_img/hanja_img/yeanhae.gif alt=연해 border=0>';$yeanhae_12 = '연해';}
#if ($my_umyear_e == '戌'){$yeanhae_11_disp = '<img src=/images/result_img/jum_img/hanja_img/yeanhae.gif alt=연해 border=0>';$yeanhae_11 = '연해';}
#if ($my_umyear_e == '亥'){$yeanhae_10_disp = '<img src=/images/result_img/jum_img/hanja_img/yeanhae.gif alt=연해 border=0>';$yeanhae_10 = '연해';}

if (($my_ummonth == '04')||($my_ummonth == '09')||($my_ummonth == '12')){$chenwol_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chenwol.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chenwol.gif alt=천월 border=0></a>';$chenwol_01 = '천월';}
if (($my_ummonth == '05')||($my_ummonth == '08')){$chenwol_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chenwol.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chenwol.gif alt=천월 border=0></a>';$chenwol_06 = '천월';}
if ($my_ummonth == '02'){$chenwol_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chenwol.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chenwol.gif alt=천월 border=0></a>';$chenwol_04 = '천월';}
if ($my_ummonth == '03'){$chenwol_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chenwol.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chenwol.gif alt=천월 border=0></a>';$chenwol_03 = '천월';}
if ($my_ummonth == '06'){$chenwol_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chenwol.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chenwol.gif alt=천월 border=0></a>';$chenwol_02 = '천월';}
if ($my_ummonth == '07'){$chenwol_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chenwol.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chenwol.gif alt=천월 border=0></a>';$chenwol_10 = '천월';}
if ($my_ummonth == '10'){$chenwol_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chenwol.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chenwol.gif alt=천월 border=0></a>';$chenwol_05 = '천월';}
if (($my_ummonth == '01')||($my_ummonth == '11')){$chenwol_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chenwol.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chenwol.gif alt=천월 border=0></a>';$chenwol_09 = '천월';}

if (($my_ummonth == '01')||($my_ummonth == '07')) {$eumsal_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eumsal.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eumsal.gif alt=음살 border=0></a>';$eumsal_01 = '음살';}
if (($my_ummonth == '02')||($my_ummonth == '08')) {$eumsal_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eumsal.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eumsal.gif alt=음살 border=0></a>';$eumsal_11 = '음살';}
if (($my_ummonth == '03')||($my_ummonth == '09')) {$eumsal_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eumsal.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eumsal.gif alt=음살 border=0></a>';$eumsal_09 = '음살';}
if (($my_ummonth == '04')||($my_ummonth == '10')) {$eumsal_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eumsal.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eumsal.gif alt=음살 border=0></a>';$eumsal_07 = '음살';}
if (($my_ummonth == '05')||($my_ummonth == '11')) {$eumsal_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eumsal.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eumsal.gif alt=음살 border=0></a>';$eumsal_05 = '음살';}
if (($my_ummonth == '06')||($my_ummonth == '12')) {$eumsal_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eumsal.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eumsal.gif alt=음살 border=0></a>';$eumsal_03 = '음살';}

if (($my_month_e == '01')||($my_month_e == '05')||($my_month_e == '09')){$cheanmu_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanmu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanmu.gif alt=천무 border=0></a>';$cheanmu_04 = '천무';}
if (($my_month_e == '07')||($my_month_e == '11')||($my_month_e == '03')){$cheanmu_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanmu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanmu.gif alt=천무 border=0></a>';$cheanmu_01 = '천무';}
if (($my_month_e == '04')||($my_month_e == '08')||($my_month_e == '12')){$cheanmu_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanmu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanmu.gif alt=천무 border=0></a>';$cheanmu_10 = '천무';}
if (($my_month_e == '10')||($my_month_e == '02')||($my_month_e == '06')){$cheanmu_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanmu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanmu.gif alt=천무 border=0></a>';$cheanmu_07 = '천무';}

#################################################################################################삼태, 팔좌, 은광,천귀
$my_umday_temp = $my_umday%12;

//echo "$my_umday_temp";

if ($munchang_01) {
    if ($my_umday_temp == '1') {$eunkwang_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_12 = '은광';}
    if ($my_umday_temp == '2') {$eunkwang_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_01 = '은광';}
    if ($my_umday_temp == '3') {$eunkwang_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_02 = '은광';}
    if ($my_umday_temp == '4') {$eunkwang_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_03 = '은광';}
    if ($my_umday_temp == '5') {$eunkwang_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_04 = '은광';}
    if ($my_umday_temp == '6') {$eunkwang_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_05 = '은광';}
    if ($my_umday_temp == '7') {$eunkwang_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_06 = '은광';}
    if ($my_umday_temp == '8') {$eunkwang_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_07 = '은광';}
    if ($my_umday_temp == '9') {$eunkwang_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_08 = '은광';}
    if ($my_umday_temp == '10') {$eunkwang_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_09 = '은광';}
    if ($my_umday_temp == '11') {$eunkwang_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_10 = '은광';}
    if ($my_umday_temp == '0') {$eunkwang_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_11 = '은광';}
    }

if ($munchang_02) {
    if ($my_umday_temp == '1') {$eunkwang_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_01 = '은광';}
    if ($my_umday_temp == '2') {$eunkwang_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_02 = '은광';}
    if ($my_umday_temp == '3') {$eunkwang_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_03 = '은광';}
    if ($my_umday_temp == '4') {$eunkwang_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_04 = '은광';}
    if ($my_umday_temp == '5') {$eunkwang_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_05 = '은광';}
    if ($my_umday_temp == '6') {$eunkwang_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_06 = '은광';}
    if ($my_umday_temp == '7') {$eunkwang_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_07 = '은광';}
    if ($my_umday_temp == '8') {$eunkwang_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_08 = '은광';}
    if ($my_umday_temp == '9') {$eunkwang_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_09 = '은광';}
    if ($my_umday_temp == '10') {$eunkwang_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_10 = '은광';}
    if ($my_umday_temp == '11') {$eunkwang_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_11 = '은광';}
    if ($my_umday_temp == '0') {$eunkwang_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_12 = '은광';}
    }

if ($munchang_03) {
    if ($my_umday_temp == '1') {$eunkwang_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_02 = '은광';}
    if ($my_umday_temp == '2') {$eunkwang_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_03 = '은광';}
    if ($my_umday_temp == '3') {$eunkwang_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_04 = '은광';}
    if ($my_umday_temp == '4') {$eunkwang_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_05 = '은광';}
    if ($my_umday_temp == '5') {$eunkwang_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_06 = '은광';}
    if ($my_umday_temp == '6') {$eunkwang_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_07 = '은광';}
    if ($my_umday_temp == '7') {$eunkwang_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_08 = '은광';}
    if ($my_umday_temp == '8') {$eunkwang_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_09 = '은광';}
    if ($my_umday_temp == '9') {$eunkwang_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_10 = '은광';}
    if ($my_umday_temp == '10') {$eunkwang_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_11 = '은광';}
    if ($my_umday_temp == '11') {$eunkwang_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_12 = '은광';}
    if ($my_umday_temp == '0') {$eunkwang_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_01 = '은광';}
    }

if ($munchang_04) {
    if ($my_umday_temp == '1') {$eunkwang_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_03 = '은광';}
    if ($my_umday_temp == '2') {$eunkwang_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_04 = '은광';}
    if ($my_umday_temp == '3') {$eunkwang_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_05 = '은광';}
    if ($my_umday_temp == '4') {$eunkwang_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_06 = '은광';}
    if ($my_umday_temp == '5') {$eunkwang_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_07 = '은광';}
    if ($my_umday_temp == '6') {$eunkwang_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_08 = '은광';}
    if ($my_umday_temp == '7') {$eunkwang_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_09 = '은광';}
    if ($my_umday_temp == '8') {$eunkwang_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_10 = '은광';}
    if ($my_umday_temp == '9') {$eunkwang_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_11 = '은광';}
    if ($my_umday_temp == '10') {$eunkwang_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_12 = '은광';}
    if ($my_umday_temp == '11') {$eunkwang_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_01 = '은광';}
    if ($my_umday_temp == '0') {$eunkwang_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_02 = '은광';}
    }

if ($munchang_05) {
    if ($my_umday_temp == '1') {$eunkwang_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_04 = '은광';}
    if ($my_umday_temp == '2') {$eunkwang_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_05 = '은광';}
    if ($my_umday_temp == '3') {$eunkwang_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_06 = '은광';}
    if ($my_umday_temp == '4') {$eunkwang_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_07 = '은광';}
    if ($my_umday_temp == '5') {$eunkwang_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_08 = '은광';}
    if ($my_umday_temp == '6') {$eunkwang_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_09 = '은광';}
    if ($my_umday_temp == '7') {$eunkwang_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_10 = '은광';}
    if ($my_umday_temp == '8') {$eunkwang_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_11 = '은광';}
    if ($my_umday_temp == '9') {$eunkwang_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_12 = '은광';}
    if ($my_umday_temp == '10') {$eunkwang_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_01 = '은광';}
    if ($my_umday_temp == '11') {$eunkwang_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_02 = '은광';}
    if ($my_umday_temp == '0') {$eunkwang_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_03 = '은광';}
    }

if ($munchang_06) {
    if ($my_umday_temp == '1') {$eunkwang_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_05 = '은광';}
    if ($my_umday_temp == '2') {$eunkwang_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_06 = '은광';}
    if ($my_umday_temp == '3') {$eunkwang_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_07 = '은광';}
    if ($my_umday_temp == '4') {$eunkwang_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_08 = '은광';}
    if ($my_umday_temp == '5') {$eunkwang_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_09 = '은광';}
    if ($my_umday_temp == '6') {$eunkwang_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_10 = '은광';}
    if ($my_umday_temp == '7') {$eunkwang_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_11 = '은광';}
    if ($my_umday_temp == '8') {$eunkwang_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_12 = '은광';}
    if ($my_umday_temp == '9') {$eunkwang_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_01 = '은광';}
    if ($my_umday_temp == '10') {$eunkwang_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_02 = '은광';}
    if ($my_umday_temp == '11') {$eunkwang_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_03 = '은광';}
    if ($my_umday_temp == '0') {$eunkwang_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_04 = '은광';}
    }

if ($munchang_07) {
    if ($my_umday_temp == '1') {$eunkwang_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_06 = '은광';}
    if ($my_umday_temp == '2') {$eunkwang_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_07 = '은광';}
    if ($my_umday_temp == '3') {$eunkwang_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_08 = '은광';}
    if ($my_umday_temp == '4') {$eunkwang_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_09 = '은광';}
    if ($my_umday_temp == '5') {$eunkwang_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_10 = '은광';}
    if ($my_umday_temp == '6') {$eunkwang_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_11 = '은광';}
    if ($my_umday_temp == '7') {$eunkwang_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_12 = '은광';}
    if ($my_umday_temp == '8') {$eunkwang_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_01 = '은광';}
    if ($my_umday_temp == '9') {$eunkwang_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_02 = '은광';}
    if ($my_umday_temp == '10') {$eunkwang_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_03 = '은광';}
    if ($my_umday_temp == '11') {$eunkwang_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_04 = '은광';}
    if ($my_umday_temp == '0') {$eunkwang_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_05 = '은광';}
    }

if ($munchang_08) {
    if ($my_umday_temp == '1') {$eunkwang_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_07 = '은광';}
    if ($my_umday_temp == '2') {$eunkwang_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_08 = '은광';}
    if ($my_umday_temp == '3') {$eunkwang_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_09 = '은광';}
    if ($my_umday_temp == '4') {$eunkwang_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_10 = '은광';}
    if ($my_umday_temp == '5') {$eunkwang_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_11 = '은광';}
    if ($my_umday_temp == '6') {$eunkwang_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_12 = '은광';}
    if ($my_umday_temp == '7') {$eunkwang_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_01 = '은광';}
    if ($my_umday_temp == '8') {$eunkwang_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_02 = '은광';}
    if ($my_umday_temp == '9') {$eunkwang_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_03 = '은광';}
    if ($my_umday_temp == '10') {$eunkwang_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_04 = '은광';}
    if ($my_umday_temp == '11') {$eunkwang_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_05 = '은광';}
    if ($my_umday_temp == '0') {$eunkwang_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_06 = '은광';}
    }

if ($munchang_09) {
    if ($my_umday_temp == '1') {$eunkwang_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_08 = '은광';}
    if ($my_umday_temp == '2') {$eunkwang_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_09 = '은광';}
    if ($my_umday_temp == '3') {$eunkwang_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_10 = '은광';}
    if ($my_umday_temp == '4') {$eunkwang_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_11 = '은광';}
    if ($my_umday_temp == '5') {$eunkwang_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_12 = '은광';}
    if ($my_umday_temp == '6') {$eunkwang_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_01 = '은광';}
    if ($my_umday_temp == '7') {$eunkwang_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_02 = '은광';}
    if ($my_umday_temp == '8') {$eunkwang_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_03 = '은광';}
    if ($my_umday_temp == '9') {$eunkwang_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_04 = '은광';}
    if ($my_umday_temp == '10') {$eunkwang_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_05 = '은광';}
    if ($my_umday_temp == '11') {$eunkwang_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_06 = '은광';}
    if ($my_umday_temp == '0') {$eunkwang_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_07 = '은광';}
    }

if ($munchang_10) {
    if ($my_umday_temp == '1') {$eunkwang_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_09 = '은광';}
    if ($my_umday_temp == '2') {$eunkwang_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_10 = '은광';}
    if ($my_umday_temp == '3') {$eunkwang_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_11 = '은광';}
    if ($my_umday_temp == '4') {$eunkwang_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_12 = '은광';}
    if ($my_umday_temp == '5') {$eunkwang_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_01 = '은광';}
    if ($my_umday_temp == '6') {$eunkwang_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_02 = '은광';}
    if ($my_umday_temp == '7') {$eunkwang_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_03 = '은광';}
    if ($my_umday_temp == '8') {$eunkwang_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_04 = '은광';}
    if ($my_umday_temp == '9') {$eunkwang_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_05 = '은광';}
    if ($my_umday_temp == '10') {$eunkwang_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_06 = '은광';}
    if ($my_umday_temp == '11') {$eunkwang_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_07 = '은광';}
    if ($my_umday_temp == '0') {$eunkwang_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_08 = '은광';}
    }

if ($munchang_11) {
    if ($my_umday_temp == '1') {$eunkwang_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_10 = '은광';}
    if ($my_umday_temp == '2') {$eunkwang_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_11 = '은광';}
    if ($my_umday_temp == '3') {$eunkwang_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_12 = '은광';}
    if ($my_umday_temp == '4') {$eunkwang_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_01 = '은광';}
    if ($my_umday_temp == '5') {$eunkwang_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_02 = '은광';}
    if ($my_umday_temp == '6') {$eunkwang_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_03 = '은광';}
    if ($my_umday_temp == '7') {$eunkwang_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_04 = '은광';}
    if ($my_umday_temp == '8') {$eunkwang_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_05 = '은광';}
    if ($my_umday_temp == '9') {$eunkwang_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_06 = '은광';}
    if ($my_umday_temp == '10') {$eunkwang_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_07 = '은광';}
    if ($my_umday_temp == '11') {$eunkwang_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_08 = '은광';}
    if ($my_umday_temp == '0') {$eunkwang_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_09 = '은광';}
    }

if ($munchang_12) {
    if ($my_umday_temp == '1') {$eunkwang_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_11 = '은광';}
    if ($my_umday_temp == '2') {$eunkwang_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_12 = '은광';}
    if ($my_umday_temp == '3') {$eunkwang_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_01 = '은광';}
    if ($my_umday_temp == '4') {$eunkwang_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_02 = '은광';}
    if ($my_umday_temp == '5') {$eunkwang_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_03 = '은광';}
    if ($my_umday_temp == '6') {$eunkwang_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_04 = '은광';}
    if ($my_umday_temp == '7') {$eunkwang_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_05 = '은광';}
    if ($my_umday_temp == '8') {$eunkwang_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_06 = '은광';}
    if ($my_umday_temp == '9') {$eunkwang_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_07 = '은광';}
    if ($my_umday_temp == '10') {$eunkwang_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_08 = '은광';}
    if ($my_umday_temp == '11') {$eunkwang_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_09 = '은광';}
    if ($my_umday_temp == '0') {$eunkwang_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_eunkwang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/eunkwang.gif alt=은광 border=0></a>';$eunkwang_10 = '은광';}
    }

##################################################################   천귀
if ($mungok_01) {
    if ($my_umday_temp == '1') {$cheungui_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_12 = '천귀';}
    if ($my_umday_temp == '2') {$cheungui_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_01 = '천귀';}
    if ($my_umday_temp == '3') {$cheungui_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_02 = '천귀';}
    if ($my_umday_temp == '4') {$cheungui_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_03 = '천귀';}
    if ($my_umday_temp == '5') {$cheungui_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_04 = '천귀';}
    if ($my_umday_temp == '6') {$cheungui_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_05 = '천귀';}
    if ($my_umday_temp == '7') {$cheungui_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_06 = '천귀';}
    if ($my_umday_temp == '8') {$cheungui_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_07 = '천귀';}
    if ($my_umday_temp == '9') {$cheungui_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_08 = '천귀';}
    if ($my_umday_temp == '10') {$cheungui_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_09 = '천귀';}
    if ($my_umday_temp == '11') {$cheungui_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_10 = '천귀';}
    if ($my_umday_temp == '0') {$cheungui_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_11 = '천귀';}
    }

if ($mungok_02) {
    if ($my_umday_temp == '1') {$cheungui_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_01 = '천귀';}
    if ($my_umday_temp == '2') {$cheungui_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_02 = '천귀';}
    if ($my_umday_temp == '3') {$cheungui_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_03 = '천귀';}
    if ($my_umday_temp == '4') {$cheungui_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_04 = '천귀';}
    if ($my_umday_temp == '5') {$cheungui_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_05 = '천귀';}
    if ($my_umday_temp == '6') {$cheungui_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_06 = '천귀';}
    if ($my_umday_temp == '7') {$cheungui_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_07 = '천귀';}
    if ($my_umday_temp == '8') {$cheungui_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_08 = '천귀';}
    if ($my_umday_temp == '9') {$cheungui_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_09 = '천귀';}
    if ($my_umday_temp == '10') {$cheungui_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_10 = '천귀';}
    if ($my_umday_temp == '11') {$cheungui_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_11 = '천귀';}
    if ($my_umday_temp == '0') {$cheungui_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_12 = '천귀';}
    }

if ($mungok_03) {
    if ($my_umday_temp == '1') {$cheungui_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_02 = '천귀';}
    if ($my_umday_temp == '2') {$cheungui_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_03 = '천귀';}
    if ($my_umday_temp == '3') {$cheungui_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_04 = '천귀';}
    if ($my_umday_temp == '4') {$cheungui_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_05 = '천귀';}
    if ($my_umday_temp == '5') {$cheungui_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_06 = '천귀';}
    if ($my_umday_temp == '6') {$cheungui_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_07 = '천귀';}
    if ($my_umday_temp == '7') {$cheungui_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_08 = '천귀';}
    if ($my_umday_temp == '8') {$cheungui_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_09 = '천귀';}
    if ($my_umday_temp == '9') {$cheungui_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_10 = '천귀';}
    if ($my_umday_temp == '10') {$cheungui_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_11 = '천귀';}
    if ($my_umday_temp == '11') {$cheungui_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_12 = '천귀';}
    if ($my_umday_temp == '0') {$cheungui_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_01 = '천귀';}
    }

if ($mungok_04) {
    if ($my_umday_temp == '1') {$cheungui_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_03 = '천귀';}
    if ($my_umday_temp == '2') {$cheungui_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_04 = '천귀';}
    if ($my_umday_temp == '3') {$cheungui_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_05 = '천귀';}
    if ($my_umday_temp == '4') {$cheungui_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_06 = '천귀';}
    if ($my_umday_temp == '5') {$cheungui_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_07 = '천귀';}
    if ($my_umday_temp == '6') {$cheungui_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_08 = '천귀';}
    if ($my_umday_temp == '7') {$cheungui_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_09 = '천귀';}
    if ($my_umday_temp == '8') {$cheungui_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_10 = '천귀';}
    if ($my_umday_temp == '9') {$cheungui_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_11 = '천귀';}
    if ($my_umday_temp == '10') {$cheungui_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_12 = '천귀';}
    if ($my_umday_temp == '11') {$cheungui_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_01 = '천귀';}
    if ($my_umday_temp == '0') {$cheungui_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_02 = '천귀';}
    }

if ($mungok_05) {
    if ($my_umday_temp == '1') {$cheungui_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_04 = '천귀';}
    if ($my_umday_temp == '2') {$cheungui_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_05 = '천귀';}
    if ($my_umday_temp == '3') {$cheungui_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_06 = '천귀';}
    if ($my_umday_temp == '4') {$cheungui_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_07 = '천귀';}
    if ($my_umday_temp == '5') {$cheungui_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_08 = '천귀';}
    if ($my_umday_temp == '6') {$cheungui_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_09 = '천귀';}
    if ($my_umday_temp == '7') {$cheungui_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_10 = '천귀';}
    if ($my_umday_temp == '8') {$cheungui_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_11 = '천귀';}
    if ($my_umday_temp == '9') {$cheungui_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_12 = '천귀';}
    if ($my_umday_temp == '10') {$cheungui_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_01 = '천귀';}
    if ($my_umday_temp == '11') {$cheungui_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_02 = '천귀';}
    if ($my_umday_temp == '0') {$cheungui_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_03 = '천귀';}
    }

if ($mungok_06) {
    if ($my_umday_temp == '1') {$cheungui_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_05 = '천귀';}
    if ($my_umday_temp == '2') {$cheungui_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_06 = '천귀';}
    if ($my_umday_temp == '3') {$cheungui_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_07 = '천귀';}
    if ($my_umday_temp == '4') {$cheungui_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_08 = '천귀';}
    if ($my_umday_temp == '5') {$cheungui_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_09 = '천귀';}
    if ($my_umday_temp == '6') {$cheungui_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_10 = '천귀';}
    if ($my_umday_temp == '7') {$cheungui_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_11 = '천귀';}
    if ($my_umday_temp == '8') {$cheungui_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_12 = '천귀';}
    if ($my_umday_temp == '9') {$cheungui_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_01 = '천귀';}
    if ($my_umday_temp == '10') {$cheungui_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_02 = '천귀';}
    if ($my_umday_temp == '11') {$cheungui_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_03 = '천귀';}
    if ($my_umday_temp == '0') {$cheungui_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_04 = '천귀';}
    }

if ($mungok_07) {
    if ($my_umday_temp == '1') {$cheungui_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_06 = '천귀';}
    if ($my_umday_temp == '2') {$cheungui_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_07 = '천귀';}
    if ($my_umday_temp == '3') {$cheungui_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_08 = '천귀';}
    if ($my_umday_temp == '4') {$cheungui_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_09 = '천귀';}
    if ($my_umday_temp == '5') {$cheungui_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_10 = '천귀';}
    if ($my_umday_temp == '6') {$cheungui_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_11 = '천귀';}
    if ($my_umday_temp == '7') {$cheungui_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_12 = '천귀';}
    if ($my_umday_temp == '8') {$cheungui_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_01 = '천귀';}
    if ($my_umday_temp == '9') {$cheungui_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_02 = '천귀';}
    if ($my_umday_temp == '10') {$cheungui_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_03 = '천귀';}
    if ($my_umday_temp == '11') {$cheungui_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_04 = '천귀';}
    if ($my_umday_temp == '0') {$cheungui_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_05 = '천귀';}
    }

if ($mungok_08) {
    if ($my_umday_temp == '1') {$cheungui_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_07 = '천귀';}
    if ($my_umday_temp == '2') {$cheungui_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_08 = '천귀';}
    if ($my_umday_temp == '3') {$cheungui_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_09 = '천귀';}
    if ($my_umday_temp == '4') {$cheungui_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_10 = '천귀';}
    if ($my_umday_temp == '5') {$cheungui_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_11 = '천귀';}
    if ($my_umday_temp == '6') {$cheungui_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_12 = '천귀';}
    if ($my_umday_temp == '7') {$cheungui_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_01 = '천귀';}
    if ($my_umday_temp == '8') {$cheungui_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_02 = '천귀';}
    if ($my_umday_temp == '9') {$cheungui_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_03 = '천귀';}
    if ($my_umday_temp == '10') {$cheungui_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_04 = '천귀';}
    if ($my_umday_temp == '11') {$cheungui_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_05 = '천귀';}
    if ($my_umday_temp == '0') {$cheungui_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_06 = '천귀';}
    }

if ($mungok_09) {
    if ($my_umday_temp == '1') {$cheungui_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_08 = '천귀';}
    if ($my_umday_temp == '2') {$cheungui_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_09 = '천귀';}
    if ($my_umday_temp == '3') {$cheungui_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_10 = '천귀';}
    if ($my_umday_temp == '4') {$cheungui_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_11 = '천귀';}
    if ($my_umday_temp == '5') {$cheungui_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_12 = '천귀';}
    if ($my_umday_temp == '6') {$cheungui_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_01 = '천귀';}
    if ($my_umday_temp == '7') {$cheungui_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_02 = '천귀';}
    if ($my_umday_temp == '8') {$cheungui_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_03 = '천귀';}
    if ($my_umday_temp == '9') {$cheungui_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_04 = '천귀';}
    if ($my_umday_temp == '10') {$cheungui_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_05 = '천귀';}
    if ($my_umday_temp == '11') {$cheungui_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_06 = '천귀';}
    if ($my_umday_temp == '0') {$cheungui_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_07 = '천귀';}
    }

if ($mungok_10) {
    if ($my_umday_temp == '1') {$cheungui_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_09 = '천귀';}
    if ($my_umday_temp == '2') {$cheungui_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_10 = '천귀';}
    if ($my_umday_temp == '3') {$cheungui_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_11 = '천귀';}
    if ($my_umday_temp == '4') {$cheungui_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_12 = '천귀';}
    if ($my_umday_temp == '5') {$cheungui_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_01 = '천귀';}
    if ($my_umday_temp == '6') {$cheungui_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_02 = '천귀';}
    if ($my_umday_temp == '7') {$cheungui_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_03 = '천귀';}
    if ($my_umday_temp == '8') {$cheungui_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_04 = '천귀';}
    if ($my_umday_temp == '9') {$cheungui_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_05 = '천귀';}
    if ($my_umday_temp == '10') {$cheungui_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_06 = '천귀';}
    if ($my_umday_temp == '11') {$cheungui_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_07 = '천귀';}
    if ($my_umday_temp == '0') {$cheungui_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_08 = '천귀';}
    }

if ($mungok_11) {
    if ($my_umday_temp == '1') {$cheungui_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_10 = '천귀';}
    if ($my_umday_temp == '2') {$cheungui_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_11 = '천귀';}
    if ($my_umday_temp == '3') {$cheungui_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_12 = '천귀';}
    if ($my_umday_temp == '4') {$cheungui_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_01 = '천귀';}
    if ($my_umday_temp == '5') {$cheungui_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_02 = '천귀';}
    if ($my_umday_temp == '6') {$cheungui_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_03 = '천귀';}
    if ($my_umday_temp == '7') {$cheungui_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_04 = '천귀';}
    if ($my_umday_temp == '8') {$cheungui_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_05 = '천귀';}
    if ($my_umday_temp == '9') {$cheungui_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_06 = '천귀';}
    if ($my_umday_temp == '10') {$cheungui_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_07 = '천귀';}
    if ($my_umday_temp == '11') {$cheungui_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_08 = '천귀';}
    if ($my_umday_temp == '0') {$cheungui_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_09 = '천귀';}
    }

if ($mungok_12) {
    if ($my_umday_temp == '1') {$cheungui_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_11 = '천귀';}
    if ($my_umday_temp == '2') {$cheungui_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_12 = '천귀';}
    if ($my_umday_temp == '3') {$cheungui_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_01 = '천귀';}
    if ($my_umday_temp == '4') {$cheungui_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_02 = '천귀';}
    if ($my_umday_temp == '5') {$cheungui_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_03 = '천귀';}
    if ($my_umday_temp == '6') {$cheungui_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_04 = '천귀';}
    if ($my_umday_temp == '7') {$cheungui_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_05 = '천귀';}
    if ($my_umday_temp == '8') {$cheungui_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_06 = '천귀';}
    if ($my_umday_temp == '9') {$cheungui_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_07 = '천귀';}
    if ($my_umday_temp == '10') {$cheungui_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_08 = '천귀';}
    if ($my_umday_temp == '11') {$cheungui_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_09 = '천귀';}
    if ($my_umday_temp == '0') {$cheungui_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheungui.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheungui.gif alt=천귀 border=0></a>';$cheungui_10 = '천귀';}
    }
#######################################################

##################################################################   삼태



if ($jabo_01) {
    if ($my_umday_temp == '1') {$samtae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_01 = '삼태';}
    if ($my_umday_temp == '2') {$samtae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_02 = '삼태';}
    if ($my_umday_temp == '3') {$samtae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_03 = '삼태';}
    if ($my_umday_temp == '4') {$samtae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_04 = '삼태';}
    if ($my_umday_temp == '5') {$samtae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_05 = '삼태';}
    if ($my_umday_temp == '6') {$samtae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_06 = '삼태';}
    if ($my_umday_temp == '7') {$samtae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_07 = '삼태';}
    if ($my_umday_temp == '8') {$samtae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_08 = '삼태';}
    if ($my_umday_temp == '9') {$samtae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_09 = '삼태';}
    if ($my_umday_temp == '10') {$samtae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_10 = '삼태';}
    if ($my_umday_temp == '11') {$samtae_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_11 = '삼태';}
    if ($my_umday_temp == '0') {$samtae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_12 = '삼태';}
    }

if ($jabo_02) {
    if ($my_umday_temp == '1') {$samtae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_02 = '삼태';}
    if ($my_umday_temp == '2') {$samtae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_03 = '삼태';}
    if ($my_umday_temp == '3') {$samtae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_04 = '삼태';}
    if ($my_umday_temp == '4') {$samtae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_05 = '삼태';}
    if ($my_umday_temp == '5') {$samtae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_06 = '삼태';}
    if ($my_umday_temp == '6') {$samtae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_07 = '삼태';}
    if ($my_umday_temp == '7') {$samtae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_08 = '삼태';}
    if ($my_umday_temp == '8') {$samtae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_09 = '삼태';}
    if ($my_umday_temp == '9') {$samtae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_10 = '삼태';}
    if ($my_umday_temp == '10') {$samtae_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_11 = '삼태';}
    if ($my_umday_temp == '11') {$samtae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_12 = '삼태';}
    if ($my_umday_temp == '0') {$samtae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_01 = '삼태';}
    }

if ($jabo_03) {
    if ($my_umday_temp == '1') {$samtae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_03 = '삼태';}
    if ($my_umday_temp == '2') {$samtae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_04 = '삼태';}
    if ($my_umday_temp == '3') {$samtae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_05 = '삼태';}
    if ($my_umday_temp == '4') {$samtae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_06 = '삼태';}
    if ($my_umday_temp == '5') {$samtae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_07 = '삼태';}
    if ($my_umday_temp == '6') {$samtae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_08 = '삼태';}
    if ($my_umday_temp == '7') {$samtae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_09 = '삼태';}
    if ($my_umday_temp == '8') {$samtae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_10 = '삼태';}
    if ($my_umday_temp == '9') {$samtae_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_11 = '삼태';}
    if ($my_umday_temp == '10') {$samtae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_12 = '삼태';}
    if ($my_umday_temp == '11') {$samtae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_01 = '삼태';}
    if ($my_umday_temp == '0') {$samtae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_02 = '삼태';}
    }

if ($jabo_04) {
    if ($my_umday_temp == '1') {$samtae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_04 = '삼태';}
    if ($my_umday_temp == '2') {$samtae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_05 = '삼태';}
    if ($my_umday_temp == '3') {$samtae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_06 = '삼태';}
    if ($my_umday_temp == '4') {$samtae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_07 = '삼태';}
    if ($my_umday_temp == '5') {$samtae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_08 = '삼태';}
    if ($my_umday_temp == '6') {$samtae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_09 = '삼태';}
    if ($my_umday_temp == '7') {$samtae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_10 = '삼태';}
    if ($my_umday_temp == '8') {$samtae_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_11 = '삼태';}
    if ($my_umday_temp == '9') {$samtae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_12 = '삼태';}
    if ($my_umday_temp == '10') {$samtae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_01 = '삼태';}
    if ($my_umday_temp == '11') {$samtae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_02 = '삼태';}
    if ($my_umday_temp == '0') {$samtae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_03 = '삼태';}
    }

if ($jabo_05) {
    if ($my_umday_temp == '1') {$samtae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_05 = '삼태';}
    if ($my_umday_temp == '2') {$samtae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_06 = '삼태';}
    if ($my_umday_temp == '3') {$samtae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_07 = '삼태';}
    if ($my_umday_temp == '4') {$samtae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_08 = '삼태';}
    if ($my_umday_temp == '5') {$samtae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_09 = '삼태';}
    if ($my_umday_temp == '6') {$samtae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_10 = '삼태';}
    if ($my_umday_temp == '7') {$samtae_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_11 = '삼태';}
    if ($my_umday_temp == '8') {$samtae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_12 = '삼태';}
    if ($my_umday_temp == '9') {$samtae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_01 = '삼태';}
    if ($my_umday_temp == '10') {$samtae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_02 = '삼태';}
    if ($my_umday_temp == '11') {$samtae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_03 = '삼태';}
    if ($my_umday_temp == '0') {$samtae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_04 = '삼태';}
    }

if ($jabo_06) {
    if ($my_umday_temp == '1') {$samtae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_06 = '삼태';}
    if ($my_umday_temp == '2') {$samtae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_07 = '삼태';}
    if ($my_umday_temp == '3') {$samtae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_08 = '삼태';}
    if ($my_umday_temp == '4') {$samtae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_09 = '삼태';}
    if ($my_umday_temp == '5') {$samtae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_10 = '삼태';}
    if ($my_umday_temp == '6') {$samtae_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_11 = '삼태';}
    if ($my_umday_temp == '7') {$samtae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_12 = '삼태';}
    if ($my_umday_temp == '8') {$samtae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_01 = '삼태';}
    if ($my_umday_temp == '9') {$samtae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_02 = '삼태';}
    if ($my_umday_temp == '10') {$samtae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_03 = '삼태';}
    if ($my_umday_temp == '11') {$samtae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_04 = '삼태';}
    if ($my_umday_temp == '0') {$samtae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_05 = '삼태';}
    }

if ($jabo_07) {
    if ($my_umday_temp == '1') {$samtae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_07 = '삼태';}
    if ($my_umday_temp == '2') {$samtae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_08 = '삼태';}
    if ($my_umday_temp == '3') {$samtae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_09 = '삼태';}
    if ($my_umday_temp == '4') {$samtae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_10 = '삼태';}
    if ($my_umday_temp == '5') {$samtae_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_11 = '삼태';}
    if ($my_umday_temp == '6') {$samtae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_12 = '삼태';}
    if ($my_umday_temp == '7') {$samtae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_01 = '삼태';}
    if ($my_umday_temp == '8') {$samtae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_02 = '삼태';}
    if ($my_umday_temp == '9') {$samtae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_03 = '삼태';}
    if ($my_umday_temp == '10') {$samtae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_04 = '삼태';}
    if ($my_umday_temp == '11') {$samtae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_05 = '삼태';}
    if ($my_umday_temp == '0') {$samtae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_06 = '삼태';}
    }

if ($jabo_08) {
    if ($my_umday_temp == '1') {$samtae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_08 = '삼태';}
    if ($my_umday_temp == '2') {$samtae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_09 = '삼태';}
    if ($my_umday_temp == '3') {$samtae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_10 = '삼태';}
    if ($my_umday_temp == '4') {$samtae_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_11 = '삼태';}
    if ($my_umday_temp == '5') {$samtae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_12 = '삼태';}
    if ($my_umday_temp == '6') {$samtae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_01 = '삼태';}
    if ($my_umday_temp == '7') {$samtae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_02 = '삼태';}
    if ($my_umday_temp == '8') {$samtae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_03 = '삼태';}
    if ($my_umday_temp == '9') {$samtae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_04 = '삼태';}
    if ($my_umday_temp == '10') {$samtae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_05 = '삼태';}
    if ($my_umday_temp == '11') {$samtae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_06 = '삼태';}
    if ($my_umday_temp == '0') {$samtae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_07 = '삼태';}
    }

if ($jabo_09) {
    if ($my_umday_temp == '1') {$samtae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_09 = '삼태';}
    if ($my_umday_temp == '2') {$samtae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_10 = '삼태';}
    if ($my_umday_temp == '3') {$samtae_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_11 = '삼태';}
    if ($my_umday_temp == '4') {$samtae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_12 = '삼태';}
    if ($my_umday_temp == '5') {$samtae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_01 = '삼태';}
    if ($my_umday_temp == '6') {$samtae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_02 = '삼태';}
    if ($my_umday_temp == '7') {$samtae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_03 = '삼태';}
    if ($my_umday_temp == '8') {$samtae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_04 = '삼태';}
    if ($my_umday_temp == '9') {$samtae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_05 = '삼태';}
    if ($my_umday_temp == '10') {$samtae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_06 = '삼태';}
    if ($my_umday_temp == '11') {$samtae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_07 = '삼태';}
    if ($my_umday_temp == '0') {$samtae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_08 = '삼태';}
    }

if ($jabo_10) {
    if ($my_umday_temp == '1') {$samtae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_10 = '삼태';}
    if ($my_umday_temp == '2') {$samtae_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_11 = '삼태';}
    if ($my_umday_temp == '3') {$samtae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_12 = '삼태';}
    if ($my_umday_temp == '4') {$samtae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_01 = '삼태';}
    if ($my_umday_temp == '5') {$samtae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_02 = '삼태';}
    if ($my_umday_temp == '6') {$samtae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_03 = '삼태';}
    if ($my_umday_temp == '7') {$samtae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_04 = '삼태';}
    if ($my_umday_temp == '8') {$samtae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_05 = '삼태';}
    if ($my_umday_temp == '9') {$samtae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_06 = '삼태';}
    if ($my_umday_temp == '10') {$samtae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_07 = '삼태';}
    if ($my_umday_temp == '11') {$samtae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_08 = '삼태';}
    if ($my_umday_temp == '0') {$samtae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_09 = '삼태';}
    }

if ($jabo_11) {
    if ($my_umday_temp == '1') {$samtae_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_11 = '삼태';}
    if ($my_umday_temp == '2') {$samtae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_12 = '삼태';}
    if ($my_umday_temp == '3') {$samtae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_01 = '삼태';}
    if ($my_umday_temp == '4') {$samtae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_02 = '삼태';}
    if ($my_umday_temp == '5') {$samtae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_03 = '삼태';}
    if ($my_umday_temp == '6') {$samtae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_04 = '삼태';}
    if ($my_umday_temp == '7') {$samtae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_05 = '삼태';}
    if ($my_umday_temp == '8') {$samtae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_06 = '삼태';}
    if ($my_umday_temp == '9') {$samtae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_07 = '삼태';}
    if ($my_umday_temp == '10') {$samtae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_08 = '삼태';}
    if ($my_umday_temp == '11') {$samtae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_09 = '삼태';}
    if ($my_umday_temp == '0') {$samtae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_10 = '삼태';}
    }

if ($jabo_12) {
    if ($my_umday_temp == '1') {$samtae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_12 = '삼태';}
    if ($my_umday_temp == '2') {$samtae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_01 = '삼태';}
    if ($my_umday_temp == '3') {$samtae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_02 = '삼태';}
    if ($my_umday_temp == '4') {$samtae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_03 = '삼태';}
    if ($my_umday_temp == '5') {$samtae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_04 = '삼태';}
    if ($my_umday_temp == '6') {$samtae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_05 = '삼태';}
    if ($my_umday_temp == '7') {$samtae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_06 = '삼태';}
    if ($my_umday_temp == '8') {$samtae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_07 = '삼태';}
    if ($my_umday_temp == '9') {$samtae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_08 = '삼태';}
    if ($my_umday_temp == '10') {$samtae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_09 = '삼태';}
    if ($my_umday_temp == '11') {$samtae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_10 = '삼태';}
    if ($my_umday_temp == '0') {$samtae_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_samtae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/samtae.gif alt=삼태 border=0></a>';$samtae_11 = '삼태';}
    }
#######################################################
##################################################################   팔좌
if ($upil_01) {
    if ($my_umday_temp == '1') {$paljoa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_01 = '팔좌';}
    if ($my_umday_temp == '2') {$paljoa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_12 = '팔좌';}
    if ($my_umday_temp == '3') {$paljoa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_11 = '팔좌';}
    if ($my_umday_temp == '4') {$paljoa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_10 = '팔좌';}
    if ($my_umday_temp == '5') {$paljoa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_09 = '팔좌';}
    if ($my_umday_temp == '6') {$paljoa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_08 = '팔좌';}
    if ($my_umday_temp == '7') {$paljoa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_07 = '팔좌';}
    if ($my_umday_temp == '8') {$paljoa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_06 = '팔좌';}
    if ($my_umday_temp == '9') {$paljoa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_05 = '팔좌';}
    if ($my_umday_temp == '10') {$paljoa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_04 = '팔좌';}
    if ($my_umday_temp == '11') {$paljoa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_03 = '팔좌';}
    if ($my_umday_temp == '0') {$paljoa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_02 = '팔좌';}
    }

if ($upil_02) {
    if ($my_umday_temp == '1') {$paljoa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_02 = '팔좌';}
    if ($my_umday_temp == '2') {$paljoa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_01 = '팔좌';}
    if ($my_umday_temp == '3') {$paljoa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_12 = '팔좌';}
    if ($my_umday_temp == '4') {$paljoa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_11 = '팔좌';}
    if ($my_umday_temp == '5') {$paljoa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_10 = '팔좌';}
    if ($my_umday_temp == '6') {$paljoa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_09 = '팔좌';}
    if ($my_umday_temp == '7') {$paljoa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_08 = '팔좌';}
    if ($my_umday_temp == '8') {$paljoa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_07 = '팔좌';}
    if ($my_umday_temp == '9') {$paljoa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_06 = '팔좌';}
    if ($my_umday_temp == '10') {$paljoa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_05 = '팔좌';}
    if ($my_umday_temp == '11') {$paljoa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_04 = '팔좌';}
    if ($my_umday_temp == '0') {$paljoa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_03 = '팔좌';}
    }

if ($upil_03) {
    if ($my_umday_temp == '1') {$paljoa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_03 = '팔좌';}
    if ($my_umday_temp == '2') {$paljoa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_02 = '팔좌';}
    if ($my_umday_temp == '3') {$paljoa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_01 = '팔좌';}
    if ($my_umday_temp == '4') {$paljoa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_12 = '팔좌';}
    if ($my_umday_temp == '5') {$paljoa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_11 = '팔좌';}
    if ($my_umday_temp == '6') {$paljoa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_10 = '팔좌';}
    if ($my_umday_temp == '7') {$paljoa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_09 = '팔좌';}
    if ($my_umday_temp == '8') {$paljoa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_08 = '팔좌';}
    if ($my_umday_temp == '9') {$paljoa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_07 = '팔좌';}
    if ($my_umday_temp == '10') {$paljoa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_06 = '팔좌';}
    if ($my_umday_temp == '11') {$paljoa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_05 = '팔좌';}
    if ($my_umday_temp == '0') {$paljoa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_04 = '팔좌';}
    }

if ($upil_04) {
    if ($my_umday_temp == '1') {$paljoa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_04 = '팔좌';}
    if ($my_umday_temp == '2') {$paljoa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_03 = '팔좌';}
    if ($my_umday_temp == '3') {$paljoa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_02 = '팔좌';}
    if ($my_umday_temp == '4') {$paljoa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_01 = '팔좌';}
    if ($my_umday_temp == '5') {$paljoa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_12 = '팔좌';}
    if ($my_umday_temp == '6') {$paljoa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_11 = '팔좌';}
    if ($my_umday_temp == '7') {$paljoa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_10 = '팔좌';}
    if ($my_umday_temp == '8') {$paljoa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_09 = '팔좌';}
    if ($my_umday_temp == '9') {$paljoa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_08 = '팔좌';}
    if ($my_umday_temp == '10') {$paljoa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_07 = '팔좌';}
    if ($my_umday_temp == '11') {$paljoa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_06 = '팔좌';}
    if ($my_umday_temp == '0') {$paljoa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_05 = '팔좌';}
    }

if ($upil_05) {
    if ($my_umday_temp == '1') {$paljoa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_05 = '팔좌';}
    if ($my_umday_temp == '2') {$paljoa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_04 = '팔좌';}
    if ($my_umday_temp == '3') {$paljoa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_03 = '팔좌';}
    if ($my_umday_temp == '4') {$paljoa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_02 = '팔좌';}
    if ($my_umday_temp == '5') {$paljoa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_01 = '팔좌';}
    if ($my_umday_temp == '6') {$paljoa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_12 = '팔좌';}
    if ($my_umday_temp == '7') {$paljoa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_11 = '팔좌';}
    if ($my_umday_temp == '8') {$paljoa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_10 = '팔좌';}
    if ($my_umday_temp == '9') {$paljoa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_09 = '팔좌';}
    if ($my_umday_temp == '10') {$paljoa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_08 = '팔좌';}
    if ($my_umday_temp == '11') {$paljoa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_07 = '팔좌';}
    if ($my_umday_temp == '0') {$paljoa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_06 = '팔좌';}
    }

if ($upil_06) {
    if ($my_umday_temp == '1') {$paljoa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_06 = '팔좌';}
    if ($my_umday_temp == '2') {$paljoa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_05 = '팔좌';}
    if ($my_umday_temp == '3') {$paljoa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_04 = '팔좌';}
    if ($my_umday_temp == '4') {$paljoa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_03 = '팔좌';}
    if ($my_umday_temp == '5') {$paljoa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_02 = '팔좌';}
    if ($my_umday_temp == '6') {$paljoa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_01 = '팔좌';}
    if ($my_umday_temp == '7') {$paljoa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_12 = '팔좌';}
    if ($my_umday_temp == '8') {$paljoa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_11 = '팔좌';}
    if ($my_umday_temp == '9') {$paljoa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_10 = '팔좌';}
    if ($my_umday_temp == '10') {$paljoa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_09 = '팔좌';}
    if ($my_umday_temp == '11') {$paljoa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_08 = '팔좌';}
    if ($my_umday_temp == '0') {$paljoa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_07 = '팔좌';}
    }

if ($upil_07) {
    if ($my_umday_temp == '1') {$paljoa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_07 = '팔좌';}
    if ($my_umday_temp == '2') {$paljoa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_06 = '팔좌';}
    if ($my_umday_temp == '3') {$paljoa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_05 = '팔좌';}
    if ($my_umday_temp == '4') {$paljoa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_04 = '팔좌';}
    if ($my_umday_temp == '5') {$paljoa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_03 = '팔좌';}
    if ($my_umday_temp == '6') {$paljoa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_02 = '팔좌';}
    if ($my_umday_temp == '7') {$paljoa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_01 = '팔좌';}
    if ($my_umday_temp == '8') {$paljoa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_12 = '팔좌';}
    if ($my_umday_temp == '9') {$paljoa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_11 = '팔좌';}
    if ($my_umday_temp == '10') {$paljoa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_10 = '팔좌';}
    if ($my_umday_temp == '11') {$paljoa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_09 = '팔좌';}
    if ($my_umday_temp == '0') {$paljoa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_08 = '팔좌';}
    }

if ($upil_08) {
    if ($my_umday_temp == '1') {$paljoa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_08 = '팔좌';}
    if ($my_umday_temp == '2') {$paljoa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_07 = '팔좌';}
    if ($my_umday_temp == '3') {$paljoa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_06 = '팔좌';}
    if ($my_umday_temp == '4') {$paljoa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_05 = '팔좌';}
    if ($my_umday_temp == '5') {$paljoa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_04 = '팔좌';}
    if ($my_umday_temp == '6') {$paljoa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_03 = '팔좌';}
    if ($my_umday_temp == '7') {$paljoa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_02 = '팔좌';}
    if ($my_umday_temp == '8') {$paljoa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_01 = '팔좌';}
    if ($my_umday_temp == '9') {$paljoa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_12 = '팔좌';}
    if ($my_umday_temp == '10') {$paljoa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_11 = '팔좌';}
    if ($my_umday_temp == '11') {$paljoa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_10 = '팔좌';}
    if ($my_umday_temp == '0') {$paljoa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_09 = '팔좌';}
    }

if ($upil_09) {
    if ($my_umday_temp == '1') {$paljoa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_09 = '팔좌';}
    if ($my_umday_temp == '2') {$paljoa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_08 = '팔좌';}
    if ($my_umday_temp == '3') {$paljoa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_07 = '팔좌';}
    if ($my_umday_temp == '4') {$paljoa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_06 = '팔좌';}
    if ($my_umday_temp == '5') {$paljoa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_05 = '팔좌';}
    if ($my_umday_temp == '6') {$paljoa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_04 = '팔좌';}
    if ($my_umday_temp == '7') {$paljoa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_03 = '팔좌';}
    if ($my_umday_temp == '8') {$paljoa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_02 = '팔좌';}
    if ($my_umday_temp == '9') {$paljoa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_01 = '팔좌';}
    if ($my_umday_temp == '10') {$paljoa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_12 = '팔좌';}
    if ($my_umday_temp == '11') {$paljoa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_11 = '팔좌';}
    if ($my_umday_temp == '0') {$paljoa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_10 = '팔좌';}
    }

if ($upil_10) {
    if ($my_umday_temp == '1') {$paljoa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_10 = '팔좌';}
    if ($my_umday_temp == '2') {$paljoa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_09 = '팔좌';}
    if ($my_umday_temp == '3') {$paljoa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_08 = '팔좌';}
    if ($my_umday_temp == '4') {$paljoa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_07 = '팔좌';}
    if ($my_umday_temp == '5') {$paljoa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_06 = '팔좌';}
    if ($my_umday_temp == '6') {$paljoa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_05 = '팔좌';}
    if ($my_umday_temp == '7') {$paljoa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_04 = '팔좌';}
    if ($my_umday_temp == '8') {$paljoa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_03 = '팔좌';}
    if ($my_umday_temp == '9') {$paljoa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_02 = '팔좌';}
    if ($my_umday_temp == '10') {$paljoa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_01 = '팔좌';}
    if ($my_umday_temp == '11') {$paljoa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_12 = '팔좌';}
    if ($my_umday_temp == '0') {$paljoa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_11 = '팔좌';}
    }

if ($upil_11) {
    if ($my_umday_temp == '1') {$paljoa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_11 = '팔좌';}
    if ($my_umday_temp == '2') {$paljoa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_10 = '팔좌';}
    if ($my_umday_temp == '3') {$paljoa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_09 = '팔좌';}
    if ($my_umday_temp == '4') {$paljoa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_08 = '팔좌';}
    if ($my_umday_temp == '5') {$paljoa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_07 = '팔좌';}
    if ($my_umday_temp == '6') {$paljoa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_06 = '팔좌';}
    if ($my_umday_temp == '7') {$paljoa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_05 = '팔좌';}
    if ($my_umday_temp == '8') {$paljoa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_04 = '팔좌';}
    if ($my_umday_temp == '9') {$paljoa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_03 = '팔좌';}
    if ($my_umday_temp == '10') {$paljoa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_02 = '팔좌';}
    if ($my_umday_temp == '11') {$paljoa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_01 = '팔좌';}
    if ($my_umday_temp == '0') {$paljoa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_12 = '팔좌';}
    }

if ($upil_12) {
    if ($my_umday_temp == '1') {$paljoa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_12 = '팔좌';}
    if ($my_umday_temp == '2') {$paljoa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_11 = '팔좌';}
    if ($my_umday_temp == '3') {$paljoa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_10 = '팔좌';}
    if ($my_umday_temp == '4') {$paljoa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_09 = '팔좌';}
    if ($my_umday_temp == '5') {$paljoa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_08 = '팔좌';}
    if ($my_umday_temp == '6') {$paljoa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_07 = '팔좌';}
    if ($my_umday_temp == '7') {$paljoa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_06 = '팔좌';}
    if ($my_umday_temp == '8') {$paljoa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_05 = '팔좌';}
    if ($my_umday_temp == '9') {$paljoa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_04 = '팔좌';}
    if ($my_umday_temp == '10') {$paljoa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_03 = '팔좌';}
    if ($my_umday_temp == '11') {$paljoa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_02 = '팔좌';}
    if ($my_umday_temp == '0') {$paljoa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_paljoa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/paljoa.gif alt=팔좌 border=0></a>';$paljoa_01 = '팔좌';}


}


//$cheungui
//$paljoa
//$samtae

#########################################################################cheanbok천복,cheanguan천관,jealgong절공,sungong순공
if ($my_umyear_h == '甲') {$cheanbok_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanbok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanbok.gif alt=천복 border=0></a>';$cheanbok_08 = '천복';}
if ($my_umyear_h == '乙') {$cheanbok_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanbok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanbok.gif alt=천복 border=0></a>';$cheanbok_07 = '천복';}
if ($my_umyear_h == '丙') {$cheanbok_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanbok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanbok.gif alt=천복 border=0></a>';$cheanbok_11 = '천복';}
if ($my_umyear_h == '丁') {$cheanbok_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanbok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanbok.gif alt=천복 border=0></a>';$cheanbok_10 = '천복';}
if ($my_umyear_h == '戊') {$cheanbok_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanbok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanbok.gif alt=천복 border=0></a>';$cheanbok_02 = '천복';}
if ($my_umyear_h == '己') {$cheanbok_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanbok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanbok.gif alt=천복 border=0></a>';$cheanbok_01 = '천복';}
if ($my_umyear_h == '庚') {$cheanbok_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanbok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanbok.gif alt=천복 border=0></a>';$cheanbok_05 = '천복';}
if ($my_umyear_h == '辛') {$cheanbok_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanbok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanbok.gif alt=천복 border=0></a>';$cheanbok_04 = '천복';}
if ($my_umyear_h == '壬') {$cheanbok_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanbok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanbok.gif alt=천복 border=0></a>';$cheanbok_05 = '천복';}
if ($my_umyear_h == '癸') {$cheanbok_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanbok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanbok.gif alt=천복 border=0></a>';$cheanbok_04 = '천복';}

if ($my_umyear_h == '甲') {$cheanguan_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanguan.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanguan.gif alt=천관 border=0></a>';$cheanguan_06 = '천관';}
if ($my_umyear_h == '乙') {$cheanguan_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanguan.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanguan.gif alt=천관 border=0></a>';$cheanguan_03 = '천관';}
if ($my_umyear_h == '丙') {$cheanguan_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanguan.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanguan.gif alt=천관 border=0></a>';$cheanguan_04 = '천관';}
if ($my_umyear_h == '丁') {$cheanguan_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanguan.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanguan.gif alt=천관 border=0></a>';$cheanguan_01 = '천관';}
if ($my_umyear_h == '戊') {$cheanguan_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanguan.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanguan.gif alt=천관 border=0></a>';$cheanguan_02 = '천관';}
if ($my_umyear_h == '己') {$cheanguan_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanguan.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanguan.gif alt=천관 border=0></a>';$cheanguan_08 = '천관';}
if ($my_umyear_h == '庚') {$cheanguan_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanguan.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanguan.gif alt=천관 border=0></a>';$cheanguan_10 = '천관';}
if ($my_umyear_h == '辛') {$cheanguan_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanguan.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanguan.gif alt=천관 border=0></a>';$cheanguan_08 = '천관';}
if ($my_umyear_h == '壬') {$cheanguan_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanguan.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanguan.gif alt=천관 border=0></a>';$cheanguan_09 = '천관';}
if ($my_umyear_h == '癸') {$cheanguan_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanguan.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanguan.gif alt=천관 border=0></a>';$cheanguan_05 = '천관';}

if ($my_umyear_h == '甲') {$jealgong_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jealgong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jealgong.gif alt=절공 border=0></a>';$jealgong_07 = '절공';}
if ($my_umyear_h == '乙') {$jealgong_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jealgong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jealgong.gif alt=절공 border=0></a>';$jealgong_05 = '절공';}
if ($my_umyear_h == '丙') {$jealgong_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jealgong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jealgong.gif alt=절공 border=0></a>';$jealgong_03 = '절공';}
if ($my_umyear_h == '丁') {$jealgong_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jealgong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jealgong.gif alt=절공 border=0></a>';$jealgong_02 = '절공';}
if ($my_umyear_h == '戊') {$jealgong_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jealgong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jealgong.gif alt=절공 border=0></a>';$jealgong_11 = '절공';}
if ($my_umyear_h == '己') {$jealgong_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jealgong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jealgong.gif alt=절공 border=0></a>';$jealgong_08 = '절공';}
if ($my_umyear_h == '庚') {$jealgong_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jealgong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jealgong.gif alt=절공 border=0></a>';$jealgong_05 = '절공';}
if ($my_umyear_h == '辛') {$jealgong_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jealgong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jealgong.gif alt=절공 border=0></a>';$jealgong_04 = '절공';}
if ($my_umyear_h == '壬') {$jealgong_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jealgong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jealgong.gif alt=절공 border=0></a>';$jealgong_01 = '절공';}
if ($my_umyear_h == '癸') {$jealgong_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jealgong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jealgong.gif alt=절공 border=0></a>';$jealgong_12 = '절공';}


$my_umyear_he = $my_umyear_h.$my_umyear_e;
//echo "$my_umyear_he";

if (($my_umyear_he == '甲子')||
($my_umyear_he == '丙寅')||
($my_umyear_he == '戊辰')||
($my_umyear_he == '庚午')||
($my_umyear_he == '壬申'))
{$sungong_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_sungong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/sungong.gif alt=순공 border=0></a>';$sungong_09 = '순공';}

if (($my_umyear_he == '乙丑')||
($my_umyear_he == '丁卯')||
($my_umyear_he == '己巳')||
($my_umyear_he == '辛未')||
($my_umyear_he == '癸酉'))
{$sungong_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_sungong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/sungong.gif alt=순공 border=0></a>';$sungong_10 = '순공';}

if (($my_umyear_he == '甲戌')||
($my_umyear_he == '丙子')||
($my_umyear_he == '戊寅')||
($my_umyear_he == '庚辰')||
($my_umyear_he == '壬午'))
{$sungong_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_sungong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/sungong.gif alt=순공 border=0></a>';$sungong_07 = '순공';}

if (($my_umyear_he == '乙亥')||
($my_umyear_he == '丁丑')||
($my_umyear_he == '己卯')||
($my_umyear_he == '辛巳')||
($my_umyear_he == '癸未'))
{$sungong_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_sungong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/sungong.gif alt=순공 border=0></a>';$sungong_08 = '순공';}

if (($my_umyear_he == '甲申')||
($my_umyear_he == '丙戌')||
($my_umyear_he == '戊子')||
($my_umyear_he == '庚寅')||
($my_umyear_he == '壬辰'))
{$sungong_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_sungong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/sungong.gif alt=순공 border=0></a>';$sungong_05 = '순공';}

if (($my_umyear_he == '乙酉')||
($my_umyear_he == '丁亥')||
($my_umyear_he == '己丑')||
($my_umyear_he == '辛卯')||
($my_umyear_he == '癸巳'))
{$sungong_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_sungong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/sungong.gif alt=순공 border=0></a>';$sungong_06 = '순공';}


if (($my_umyear_he == '甲午')||
($my_umyear_he == '丙申')||
($my_umyear_he == '戊戌')||
($my_umyear_he == '庚子')||
($my_umyear_he == '壬寅'))
{$sungong_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_sungong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/sungong.gif alt=순공 border=0></a>';$sungong_03 = '순공';}

if (
($my_umyear_he == '乙未')||
($my_umyear_he == '丁酉')||
($my_umyear_he == '己亥')||
($my_umyear_he == '辛丑')||
($my_umyear_he == '癸卯'))
{$sungong_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_sungong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/sungong.gif alt=순공 border=0></a>';$sungong_04 = '순공';}


if (($my_umyear_he == '甲辰')||
($my_umyear_he == '丙午')||
($my_umyear_he == '戊申')||
($my_umyear_he == '庚戌')||
($my_umyear_he == '壬子'))
{$sungong_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_sungong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/sungong.gif alt=순공 border=0></a>';$sungong_01 = '순공';}

if (($my_umyear_he == '乙巳')||
($my_umyear_he == '丁未')||
($my_umyear_he == '己酉')||
($my_umyear_he == '辛亥')||
($my_umyear_he == '癸丑'))
{$sungong_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_sungong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/sungong.gif alt=순공 border=0></a>';$sungong_02 = '순공';}


if (($my_umyear_he == '甲寅')||
($my_umyear_he == '丙辰')||
($my_umyear_he == '戊午')||
($my_umyear_he == '庚申')||
($my_umyear_he == '壬戌'))
{$sungong_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_sungong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/sungong.gif alt=순공 border=0></a>';$sungong_11 = '순공';}

if (($my_umyear_he == '乙卯')||
($my_umyear_he == '丁巳')||
($my_umyear_he == '己未')||
($my_umyear_he == '辛酉')||
($my_umyear_he == '癸亥'))
{$sungong_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_sungong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/sungong.gif alt=순공 border=0></a>';$sungong_12 = '순공';}

////////////////////////////////////////////////////천주
if ($my_umyear_h == '甲'){$cheanju_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanju.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanju.gif alt=천주 border=0></a>';$cheanju_04 = '천주';}
if ($my_umyear_h == '丁'){$cheanju_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanju.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanju.gif alt=천주 border=0></a>';$cheanju_04 = '천주';}
if ($my_umyear_h == '己'){$cheanju_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanju.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanju.gif alt=천주 border=0></a>';$cheanju_07 = '천주';}
if ($my_umyear_h == '癸'){$cheanju_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanju.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanju.gif alt=천주 border=0></a>';$cheanju_10 = '천주';}
if ($my_umyear_h == '乙'){$cheanju_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanju.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanju.gif alt=천주 border=0></a>';$cheanju_05 = '천주';}
if ($my_umyear_h == '戊'){$cheanju_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanju.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanju.gif alt=천주 border=0></a>';$cheanju_05 = '천주';}
if ($my_umyear_h == '辛'){$cheanju_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanju.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanju.gif alt=천주 border=0></a>';$cheanju_05 = '천주';}
if ($my_umyear_h == '庚'){$cheanju_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanju.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanju.gif alt=천주 border=0></a>';$cheanju_01 = '천주';}
if ($my_umyear_h == '丙'){$cheanju_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanju.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanju.gif alt=천주 border=0></a>';$cheanju_11 = '천주';}
if ($my_umyear_h == '壬'){$cheanju_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanju.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanju.gif alt=천주 border=0></a>';$cheanju_08 = '천주';}




###########################################################################hamji/guepsal/hwagae

if (($my_umyear_e == '寅')||($my_umyear_e == '午')||($my_umyear_e == '戌')){$hamji_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_hamji.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/hamji.gif alt=함지 border=0></a>';$hamji_02 = '함지';}
if (($my_umyear_e == '申')||($my_umyear_e == '子')||($my_umyear_e == '辰')){$hamji_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_hamji.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/hamji.gif alt=함지 border=0></a>';$hamji_08 = '함지';}
if (($my_umyear_e == '巳')||($my_umyear_e == '酉')||($my_umyear_e == '丑')){$hamji_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_hamji.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/hamji.gif alt=함지 border=0></a>';$hamji_05 = '함지';}
if (($my_umyear_e == '亥')||($my_umyear_e == '卯')||($my_umyear_e == '未')){$hamji_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_hamji.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/hamji.gif alt=함지 border=0></a>';$hamji_01 = '함지';}

if (($my_umyear_e == '寅')||($my_umyear_e == '午')||($my_umyear_e == '戌')){$guepsal_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_guepsal.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/guepsal.gif alt=겁살 border=0></a>';$guepsal_10 = '겁살';}
if (($my_umyear_e == '申')||($my_umyear_e == '子')||($my_umyear_e == '辰')){$guepsal_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_guepsal.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/guepsal.gif alt=겁살 border=0></a>';$guepsal_04 = '겁살';}
if (($my_umyear_e == '巳')||($my_umyear_e == '酉')||($my_umyear_e == '丑')){$guepsal_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_guepsal.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/guepsal.gif alt=겁살 border=0></a>';$guepsal_01 = '겁살';}
if (($my_umyear_e == '亥')||($my_umyear_e == '卯')||($my_umyear_e == '未')){$guepsal_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_guepsal.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/guepsal.gif alt=겁살 border=0></a>';$guepsal_07 = '겁살';}

if (($my_umyear_e == '寅')||($my_umyear_e == '午')||($my_umyear_e == '戌')){$hwagae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_hwagae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/hwagae.gif alt=화개 border=0></a>';$hwagae_09 = '화개';}
if (($my_umyear_e == '申')||($my_umyear_e == '子')||($my_umyear_e == '辰')){$hwagae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_hwagae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/hwagae.gif alt=화개 border=0></a>';$hwagae_03 = '화개';}
if (($my_umyear_e == '巳')||($my_umyear_e == '酉')||($my_umyear_e == '丑')){$hwagae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_hwagae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/hwagae.gif alt=화개 border=0></a>';$hwagae_12 = '화개';}
if (($my_umyear_e == '亥')||($my_umyear_e == '卯')||($my_umyear_e == '未')){$hwagae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_hwagae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/hwagae.gif alt=화개 border=0></a>';$hwagae_06 = '화개';}


#######################################################################gojin/guasuck

if (($my_umyear_e == '寅')||($my_umyear_e == '卯')||($my_umyear_e == '辰')){$gojin_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_gojin.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/gojin.gif alt=고진 border=0></a>';$gojin_04 = '고진';}
if (($my_umyear_e == '巳')||($my_umyear_e == '午')||($my_umyear_e == '未')){$gojin_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_gojin.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/gojin.gif alt=고진 border=0></a>';$gojin_07 = '고진';}
if (($my_umyear_e == '申')||($my_umyear_e == '酉')||($my_umyear_e == '戌')){$gojin_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_gojin.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/gojin.gif alt=고진 border=0></a>';$gojin_10 = '고진';}
if (($my_umyear_e == '亥')||($my_umyear_e == '子')||($my_umyear_e == '丑')){$gojin_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_gojin.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/gojin.gif alt=고진 border=0></a>';$gojin_01 = '고진';}

if (($my_umyear_e == '寅')||($my_umyear_e == '卯')||($my_umyear_e == '辰')){$guasuck_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_guasuck.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/guasuck.gif alt=과숙 border=0></a>';$guasuck_12 = '과숙';}
if (($my_umyear_e == '巳')||($my_umyear_e == '午')||($my_umyear_e == '未')){$guasuck_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_guasuck.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/guasuck.gif alt=과숙 border=0></a>';$guasuck_03 = '과숙';}
if (($my_umyear_e == '申')||($my_umyear_e == '酉')||($my_umyear_e == '戌')){$guasuck_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_guasuck.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/guasuck.gif alt=과숙 border=0></a>';$guasuck_06 = '과숙';}
if (($my_umyear_e == '亥')||($my_umyear_e == '子')||($my_umyear_e == '丑')){$guasuck_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_guasuck.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/guasuck.gif alt=과숙 border=0></a>';$guasuck_09 = '과숙';}

#####################################################################cheanhue/cheangok/hongran/cheanhee

if ($my_umyear_e == '子') {$cheanhue_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhue.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhue.gif alt=천허 border=0></a>';$cheanhue_05 = '천허';}
if ($my_umyear_e == '丑') {$cheanhue_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhue.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhue.gif alt=천허 border=0></a>';$cheanhue_06 = '천허';}
if ($my_umyear_e == '寅') {$cheanhue_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhue.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhue.gif alt=천허 border=0></a>';$cheanhue_07 = '천허';}
if ($my_umyear_e == '卯') {$cheanhue_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhue.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhue.gif alt=천허 border=0></a>';$cheanhue_08 = '천허';}
if ($my_umyear_e == '辰') {$cheanhue_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhue.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhue.gif alt=천허 border=0></a>';$cheanhue_09 = '천허';}
if ($my_umyear_e == '巳') {$cheanhue_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhue.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhue.gif alt=천허 border=0></a>';$cheanhue_10 = '천허';}
if ($my_umyear_e == '午') {$cheanhue_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhue.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhue.gif alt=천허 border=0></a>';$cheanhue_11 = '천허';}
if ($my_umyear_e == '未') {$cheanhue_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhue.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhue.gif alt=천허 border=0></a>';$cheanhue_12 = '천허';}
if ($my_umyear_e == '申') {$cheanhue_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhue.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhue.gif alt=천허 border=0></a>';$cheanhue_01 = '천허';}
if ($my_umyear_e == '酉') {$cheanhue_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhue.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhue.gif alt=천허 border=0></a>';$cheanhue_02 = '천허';}
if ($my_umyear_e == '戌') {$cheanhue_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhue.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhue.gif alt=천허 border=0></a>';$cheanhue_03 = '천허';}
if ($my_umyear_e == '亥') {$cheanhue_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhue.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhue.gif alt=천허 border=0></a>';$cheanhue_04 = '천허';}

if ($my_umyear_e == '子') {$cheangok_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangok.gif alt=천곡 border=0></a>';$cheangok_05 = '천곡';}
if ($my_umyear_e == '丑') {$cheangok_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangok.gif alt=천곡 border=0></a>';$cheangok_04 = '천곡';}
if ($my_umyear_e == '寅') {$cheangok_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangok.gif alt=천곡 border=0></a>';$cheangok_03 = '천곡';}
if ($my_umyear_e == '卯') {$cheangok_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangok.gif alt=천곡 border=0></a>';$cheangok_02 = '천곡';}
if ($my_umyear_e == '辰') {$cheangok_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangok.gif alt=천곡 border=0></a>';$cheangok_01 = '천곡';}
if ($my_umyear_e == '巳') {$cheangok_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangok.gif alt=천곡 border=0></a>';$cheangok_12 = '천곡';}
if ($my_umyear_e == '午') {$cheangok_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangok.gif alt=천곡 border=0></a>';$cheangok_11 = '천곡';}
if ($my_umyear_e == '未') {$cheangok_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangok.gif alt=천곡 border=0></a>';$cheangok_10 = '천곡';}
if ($my_umyear_e == '申') {$cheangok_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangok.gif alt=천곡 border=0></a>';$cheangok_09 = '천곡';}
if ($my_umyear_e == '酉') {$cheangok_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangok.gif alt=천곡 border=0></a>';$cheangok_08 = '천곡';}
if ($my_umyear_e == '戌') {$cheangok_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangok.gif alt=천곡 border=0></a>';$cheangok_07 = '천곡';}
if ($my_umyear_e == '亥') {$cheangok_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangok.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangok.gif alt=천곡 border=0></a>';$cheangok_06 = '천곡';}


if ($my_umyear_e == '子') {$hongran_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_hongran.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/hongran.gif alt=홍란 border=0></a>';$hongran_02 = '홍란';}
if ($my_umyear_e == '丑') {$hongran_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_hongran.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/hongran.gif alt=홍란 border=0></a>';$hongran_01 = '홍란';}
if ($my_umyear_e == '寅') {$hongran_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_hongran.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/hongran.gif alt=홍란 border=0></a>';$hongran_12 = '홍란';}
if ($my_umyear_e == '卯') {$hongran_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_hongran.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/hongran.gif alt=홍란 border=0></a>';$hongran_11 = '홍란';}
if ($my_umyear_e == '辰') {$hongran_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_hongran.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/hongran.gif alt=홍란 border=0></a>';$hongran_10 = '홍란';}
if ($my_umyear_e == '巳') {$hongran_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_hongran.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/hongran.gif alt=홍란 border=0></a>';$hongran_09 = '홍란';}
if ($my_umyear_e == '午') {$hongran_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_hongran.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/hongran.gif alt=홍란 border=0></a>';$hongran_08 = '홍란';}
if ($my_umyear_e == '未') {$hongran_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_hongran.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/hongran.gif alt=홍란 border=0></a>';$hongran_07 = '홍란';}
if ($my_umyear_e == '申') {$hongran_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_hongran.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/hongran.gif alt=홍란 border=0></a>';$hongran_06 = '홍란';}
if ($my_umyear_e == '酉') {$hongran_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_hongran.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/hongran.gif alt=홍란 border=0></a>';$hongran_05 = '홍란';}
if ($my_umyear_e == '戌') {$hongran_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_hongran.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/hongran.gif alt=홍란 border=0></a>';$hongran_04 = '홍란';}
if ($my_umyear_e == '亥') {$hongran_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_hongran.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/hongran.gif alt=홍란 border=0></a>';$hongran_03 = '홍란';}

if ($my_umyear_e == '子') {$cheanhee_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhee.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhee.gif alt=천희 border=0></a>';$cheanhee_08 = '천희';}
if ($my_umyear_e == '丑') {$cheanhee_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhee.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhee.gif alt=천희 border=0></a>';$cheanhee_07 = '천희';}
if ($my_umyear_e == '寅') {$cheanhee_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhee.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhee.gif alt=천희 border=0></a>';$cheanhee_06 = '천희';}
if ($my_umyear_e == '卯') {$cheanhee_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhee.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhee.gif alt=천희 border=0></a>';$cheanhee_05 = '천희';}
if ($my_umyear_e == '辰') {$cheanhee_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhee.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhee.gif alt=천희 border=0></a>';$cheanhee_04 = '천희';}
if ($my_umyear_e == '巳') {$cheanhee_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhee.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhee.gif alt=천희 border=0></a>';$cheanhee_03 = '천희';}
if ($my_umyear_e == '午') {$cheanhee_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhee.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhee.gif alt=천희 border=0></a>';$cheanhee_02 = '천희';}
if ($my_umyear_e == '未') {$cheanhee_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhee.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhee.gif alt=천희 border=0></a>';$cheanhee_01 = '천희';}
if ($my_umyear_e == '申') {$cheanhee_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhee.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhee.gif alt=천희 border=0></a>';$cheanhee_12 = '천희';}
if ($my_umyear_e == '酉') {$cheanhee_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhee.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhee.gif alt=천희 border=0></a>';$cheanhee_11 = '천희';}
if ($my_umyear_e == '戌') {$cheanhee_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhee.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhee.gif alt=천희 border=0></a>';$cheanhee_10 = '천희';}
if ($my_umyear_e == '亥') {$cheanhee_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanhee.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanhee.gif alt=천희 border=0></a>';$cheanhee_09 = '천희';}

##############################################################################yongji/bonggak/cheanjae/cheansu
if ($my_umyear_e == '子') {$yongji_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yongji.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yongji.gif alt=용지 border=0></a>';$yongji_03 = '용지';}
if ($my_umyear_e == '丑') {$yongji_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yongji.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yongji.gif alt=용지 border=0></a>';$yongji_04 = '용지';}
if ($my_umyear_e == '寅') {$yongji_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yongji.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yongji.gif alt=용지 border=0></a>';$yongji_05 = '용지';}
if ($my_umyear_e == '卯') {$yongji_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yongji.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yongji.gif alt=용지 border=0></a>';$yongji_06 = '용지';}
if ($my_umyear_e == '辰') {$yongji_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yongji.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yongji.gif alt=용지 border=0></a>';$yongji_07 = '용지';}
if ($my_umyear_e == '巳') {$yongji_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yongji.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yongji.gif alt=용지 border=0></a>';$yongji_08 = '용지';}
if ($my_umyear_e == '午') {$yongji_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yongji.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yongji.gif alt=용지 border=0></a>';$yongji_09 = '용지';}
if ($my_umyear_e == '未') {$yongji_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yongji.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yongji.gif alt=용지 border=0></a>';$yongji_10 = '용지';}
if ($my_umyear_e == '申') {$yongji_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yongji.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yongji.gif alt=용지 border=0></a>';$yongji_11 = '용지';}
if ($my_umyear_e == '酉') {$yongji_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yongji.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yongji.gif alt=용지 border=0></a>';$yongji_12 = '용지';}
if ($my_umyear_e == '戌') {$yongji_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yongji.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yongji.gif alt=용지 border=0></a>';$yongji_01 = '용지';}
if ($my_umyear_e == '亥') {$yongji_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_yongji.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/yongji.gif alt=용지 border=0></a>';$yongji_02 = '용지';}

if ($my_umyear_e == '子') {$bonggak_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggak.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggak.gif alt=봉각 border=0></a>';$bonggak_09 = '봉각';}
if ($my_umyear_e == '丑') {$bonggak_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggak.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggak.gif alt=봉각 border=0></a>';$bonggak_08 = '봉각';}
if ($my_umyear_e == '寅') {$bonggak_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggak.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggak.gif alt=봉각 border=0></a>';$bonggak_07 = '봉각';}
if ($my_umyear_e == '卯') {$bonggak_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggak.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggak.gif alt=봉각 border=0></a>';$bonggak_06 = '봉각';}
if ($my_umyear_e == '辰') {$bonggak_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggak.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggak.gif alt=봉각 border=0></a>';$bonggak_05 = '봉각';}
if ($my_umyear_e == '巳') {$bonggak_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggak.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggak.gif alt=봉각 border=0></a>';$bonggak_04 = '봉각';}
if ($my_umyear_e == '午') {$bonggak_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggak.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggak.gif alt=봉각 border=0></a>';$bonggak_03 = '봉각';}
if ($my_umyear_e == '未') {$bonggak_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggak.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggak.gif alt=봉각 border=0></a>';$bonggak_02 = '봉각';}
if ($my_umyear_e == '申') {$bonggak_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggak.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggak.gif alt=봉각 border=0></a>';$bonggak_01 = '봉각';}
if ($my_umyear_e == '酉') {$bonggak_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggak.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggak.gif alt=봉각 border=0></a>';$bonggak_12 = '봉각';}
if ($my_umyear_e == '戌') {$bonggak_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggak.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggak.gif alt=봉각 border=0></a>';$bonggak_11 = '봉각';}
if ($my_umyear_e == '亥') {$bonggak_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggak.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggak.gif alt=봉각 border=0></a>';$bonggak_10 = '봉각';}

if ($myung_01) {
      if ($my_umyear_e == '子') {$cheanjae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_01 = '천재';}
      if ($my_umyear_e == '丑') {$cheanjae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_02 = '천재';}
      if ($my_umyear_e == '寅') {$cheanjae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_03 = '천재';}
      if ($my_umyear_e == '卯') {$cheanjae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_04 = '천재';}
      if ($my_umyear_e == '辰') {$cheanjae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_05 = '천재';}
      if ($my_umyear_e == '巳') {$cheanjae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_06 = '천재';}
      if ($my_umyear_e == '午') {$cheanjae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_07 = '천재';}
      if ($my_umyear_e == '未') {$cheanjae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_08 = '천재';}
      if ($my_umyear_e == '申') {$cheanjae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_09 = '천재';}
      if ($my_umyear_e == '酉') {$cheanjae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_10 = '천재';}
      if ($my_umyear_e == '戌') {$cheanjae_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_11 = '천재';}
      if ($my_umyear_e == '亥') {$cheanjae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_12 = '천재';}
}
if ($myung_02) {
      if ($my_umyear_e == '子') {$cheanjae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_02 = '천재';}
      if ($my_umyear_e == '丑') {$cheanjae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_03 = '천재';}
      if ($my_umyear_e == '寅') {$cheanjae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_04 = '천재';}
      if ($my_umyear_e == '卯') {$cheanjae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_05 = '천재';}
      if ($my_umyear_e == '辰') {$cheanjae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_06 = '천재';}
      if ($my_umyear_e == '巳') {$cheanjae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_07 = '천재';}
      if ($my_umyear_e == '午') {$cheanjae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_08 = '천재';}
      if ($my_umyear_e == '未') {$cheanjae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_09 = '천재';}
      if ($my_umyear_e == '申') {$cheanjae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_10 = '천재';}
      if ($my_umyear_e == '酉') {$cheanjae_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_11 = '천재';}
      if ($my_umyear_e == '戌') {$cheanjae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_12 = '천재';}
      if ($my_umyear_e == '亥') {$cheanjae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_01 = '천재';}
}
if ($myung_03) {
      if ($my_umyear_e == '子') {$cheanjae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_03 = '천재';}
      if ($my_umyear_e == '丑') {$cheanjae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_04 = '천재';}
      if ($my_umyear_e == '寅') {$cheanjae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_05 = '천재';}
      if ($my_umyear_e == '卯') {$cheanjae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_06 = '천재';}
      if ($my_umyear_e == '辰') {$cheanjae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_07 = '천재';}
      if ($my_umyear_e == '巳') {$cheanjae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_08 = '천재';}
      if ($my_umyear_e == '午') {$cheanjae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_09 = '천재';}
      if ($my_umyear_e == '未') {$cheanjae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_10 = '천재';}
      if ($my_umyear_e == '申') {$cheanjae_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_11 = '천재';}
      if ($my_umyear_e == '酉') {$cheanjae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_12 = '천재';}
      if ($my_umyear_e == '戌') {$cheanjae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_01 = '천재';}
      if ($my_umyear_e == '亥') {$cheanjae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_02 = '천재';}
}
if ($myung_04) {
      if ($my_umyear_e == '子') {$cheanjae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_04 = '천재';}
      if ($my_umyear_e == '丑') {$cheanjae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_05 = '천재';}
      if ($my_umyear_e == '寅') {$cheanjae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_06 = '천재';}
      if ($my_umyear_e == '卯') {$cheanjae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_07 = '천재';}
      if ($my_umyear_e == '辰') {$cheanjae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_08 = '천재';}
      if ($my_umyear_e == '巳') {$cheanjae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_09 = '천재';}
      if ($my_umyear_e == '午') {$cheanjae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_10 = '천재';}
      if ($my_umyear_e == '未') {$cheanjae_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_11 = '천재';}
      if ($my_umyear_e == '申') {$cheanjae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_12 = '천재';}
      if ($my_umyear_e == '酉') {$cheanjae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_01 = '천재';}
      if ($my_umyear_e == '戌') {$cheanjae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_02 = '천재';}
      if ($my_umyear_e == '亥') {$cheanjae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_03 = '천재';}
}
if ($myung_05) {
      if ($my_umyear_e == '子') {$cheanjae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_05 = '천재';}
      if ($my_umyear_e == '丑') {$cheanjae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_06 = '천재';}
      if ($my_umyear_e == '寅') {$cheanjae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_07 = '천재';}
      if ($my_umyear_e == '卯') {$cheanjae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_08 = '천재';}
      if ($my_umyear_e == '辰') {$cheanjae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_09 = '천재';}
      if ($my_umyear_e == '巳') {$cheanjae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_10 = '천재';}
      if ($my_umyear_e == '午') {$cheanjae_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_11 = '천재';}
      if ($my_umyear_e == '未') {$cheanjae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_12 = '천재';}
      if ($my_umyear_e == '申') {$cheanjae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_01 = '천재';}
      if ($my_umyear_e == '酉') {$cheanjae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_02 = '천재';}
      if ($my_umyear_e == '戌') {$cheanjae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_03 = '천재';}
      if ($my_umyear_e == '亥') {$cheanjae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_04 = '천재';}
}
if ($myung_06) {
      if ($my_umyear_e == '子') {$cheanjae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_06 = '천재';}
      if ($my_umyear_e == '丑') {$cheanjae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_07 = '천재';}
      if ($my_umyear_e == '寅') {$cheanjae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_08 = '천재';}
      if ($my_umyear_e == '卯') {$cheanjae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_09 = '천재';}
      if ($my_umyear_e == '辰') {$cheanjae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_10 = '천재';}
      if ($my_umyear_e == '巳') {$cheanjae_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_11 = '천재';}
      if ($my_umyear_e == '午') {$cheanjae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_12 = '천재';}
      if ($my_umyear_e == '未') {$cheanjae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_01 = '천재';}
      if ($my_umyear_e == '申') {$cheanjae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_02 = '천재';}
      if ($my_umyear_e == '酉') {$cheanjae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_03 = '천재';}
      if ($my_umyear_e == '戌') {$cheanjae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_04 = '천재';}
      if ($my_umyear_e == '亥') {$cheanjae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_05 = '천재';}
}
if ($myung_07) {
      if ($my_umyear_e == '子') {$cheanjae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_07 = '천재';}
      if ($my_umyear_e == '丑') {$cheanjae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_08 = '천재';}
      if ($my_umyear_e == '寅') {$cheanjae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_09 = '천재';}
      if ($my_umyear_e == '卯') {$cheanjae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_10 = '천재';}
      if ($my_umyear_e == '辰') {$cheanjae_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_11 = '천재';}
      if ($my_umyear_e == '巳') {$cheanjae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_12 = '천재';}
      if ($my_umyear_e == '午') {$cheanjae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_01 = '천재';}
      if ($my_umyear_e == '未') {$cheanjae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_02 = '천재';}
      if ($my_umyear_e == '申') {$cheanjae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_03 = '천재';}
      if ($my_umyear_e == '酉') {$cheanjae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_04 = '천재';}
      if ($my_umyear_e == '戌') {$cheanjae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_05 = '천재';}
      if ($my_umyear_e == '亥') {$cheanjae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_06 = '천재';}
}
if ($myung_08) {
      if ($my_umyear_e == '子') {$cheanjae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_08 = '천재';}
      if ($my_umyear_e == '丑') {$cheanjae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_09 = '천재';}
      if ($my_umyear_e == '寅') {$cheanjae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_10 = '천재';}
      if ($my_umyear_e == '卯') {$cheanjae_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_11 = '천재';}
      if ($my_umyear_e == '辰') {$cheanjae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_12 = '천재';}
      if ($my_umyear_e == '巳') {$cheanjae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_01 = '천재';}
      if ($my_umyear_e == '午') {$cheanjae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_02 = '천재';}
      if ($my_umyear_e == '未') {$cheanjae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_03 = '천재';}
      if ($my_umyear_e == '申') {$cheanjae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_04 = '천재';}
      if ($my_umyear_e == '酉') {$cheanjae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_05 = '천재';}
      if ($my_umyear_e == '戌') {$cheanjae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_06 = '천재';}
      if ($my_umyear_e == '亥') {$cheanjae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_07 = '천재';}
}
if ($myung_09) {
      if ($my_umyear_e == '子') {$cheanjae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_09 = '천재';}
      if ($my_umyear_e == '丑') {$cheanjae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_10 = '천재';}
      if ($my_umyear_e == '寅') {$cheanjae_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_11 = '천재';}
      if ($my_umyear_e == '卯') {$cheanjae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_12 = '천재';}
      if ($my_umyear_e == '辰') {$cheanjae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_01 = '천재';}
      if ($my_umyear_e == '巳') {$cheanjae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_02 = '천재';}
      if ($my_umyear_e == '午') {$cheanjae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_03 = '천재';}
      if ($my_umyear_e == '未') {$cheanjae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_04 = '천재';}
      if ($my_umyear_e == '申') {$cheanjae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_05 = '천재';}
      if ($my_umyear_e == '酉') {$cheanjae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_06 = '천재';}
      if ($my_umyear_e == '戌') {$cheanjae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_07 = '천재';}
      if ($my_umyear_e == '亥') {$cheanjae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_08 = '천재';}
}
if ($myung_10) {
      if ($my_umyear_e == '子') {$cheanjae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_10 = '천재';}
      if ($my_umyear_e == '丑') {$cheanjae_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_11 = '천재';}
      if ($my_umyear_e == '寅') {$cheanjae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_12 = '천재';}
      if ($my_umyear_e == '卯') {$cheanjae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_01 = '천재';}
      if ($my_umyear_e == '辰') {$cheanjae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_02 = '천재';}
      if ($my_umyear_e == '巳') {$cheanjae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_03 = '천재';}
      if ($my_umyear_e == '午') {$cheanjae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_04 = '천재';}
      if ($my_umyear_e == '未') {$cheanjae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_05 = '천재';}
      if ($my_umyear_e == '申') {$cheanjae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_06 = '천재';}
      if ($my_umyear_e == '酉') {$cheanjae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_07 = '천재';}
      if ($my_umyear_e == '戌') {$cheanjae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_08 = '천재';}
      if ($my_umyear_e == '亥') {$cheanjae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_09 = '천재';}
}
if ($myung_11) {
      if ($my_umyear_e == '子') {$cheanjae_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_11 = '천재';}
      if ($my_umyear_e == '丑') {$cheanjae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_12 = '천재';}
      if ($my_umyear_e == '寅') {$cheanjae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_01 = '천재';}
      if ($my_umyear_e == '卯') {$cheanjae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_02 = '천재';}
      if ($my_umyear_e == '辰') {$cheanjae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_03 = '천재';}
      if ($my_umyear_e == '巳') {$cheanjae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_04 = '천재';}
      if ($my_umyear_e == '午') {$cheanjae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_05 = '천재';}
      if ($my_umyear_e == '未') {$cheanjae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_06 = '천재';}
      if ($my_umyear_e == '申') {$cheanjae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_07 = '천재';}
      if ($my_umyear_e == '酉') {$cheanjae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_08 = '천재';}
      if ($my_umyear_e == '戌') {$cheanjae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_09 = '천재';}
      if ($my_umyear_e == '亥') {$cheanjae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_10 = '천재';}
}
if ($myung_12) {
      if ($my_umyear_e == '子') {$cheanjae_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_12 = '천재';}
      if ($my_umyear_e == '丑') {$cheanjae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_01 = '천재';}
      if ($my_umyear_e == '寅') {$cheanjae_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_02 = '천재';}
      if ($my_umyear_e == '卯') {$cheanjae_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_03 = '천재';}
      if ($my_umyear_e == '辰') {$cheanjae_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_04 = '천재';}
      if ($my_umyear_e == '巳') {$cheanjae_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_05 = '천재';}
      if ($my_umyear_e == '午') {$cheanjae_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_06 = '천재';}
      if ($my_umyear_e == '未') {$cheanjae_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_07 = '천재';}
      if ($my_umyear_e == '申') {$cheanjae_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_08 = '천재';}
      if ($my_umyear_e == '酉') {$cheanjae_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_09 = '천재';}
      if ($my_umyear_e == '戌') {$cheanjae_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_10 = '천재';}
      if ($my_umyear_e == '亥') {$cheanjae_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanjae.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanjae.gif alt=천재 border=0></a>';$cheanjae_01 = '천재';}
}



if ($sin_01) {
      if ($my_umyear_e == '子') {$cheansu_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_01 = '천수';}
      if ($my_umyear_e == '丑') {$cheansu_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_02 = '천수';}
      if ($my_umyear_e == '寅') {$cheansu_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_03 = '천수';}
      if ($my_umyear_e == '卯') {$cheansu_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_04 = '천수';}
      if ($my_umyear_e == '辰') {$cheansu_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_05 = '천수';}
      if ($my_umyear_e == '巳') {$cheansu_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_06 = '천수';}
      if ($my_umyear_e == '午') {$cheansu_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_07 = '천수';}
      if ($my_umyear_e == '未') {$cheansu_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_08 = '천수';}
      if ($my_umyear_e == '申') {$cheansu_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_09 = '천수';}
      if ($my_umyear_e == '酉') {$cheansu_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_10 = '천수';}
      if ($my_umyear_e == '戌') {$cheansu_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_11 = '천수';}
      if ($my_umyear_e == '亥') {$cheansu_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_12 = '천수';}
}
if ($sin_02) {
      if ($my_umyear_e == '子') {$cheansu_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_02 = '천수';}
      if ($my_umyear_e == '丑') {$cheansu_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_03 = '천수';}
      if ($my_umyear_e == '寅') {$cheansu_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_04 = '천수';}
      if ($my_umyear_e == '卯') {$cheansu_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_05 = '천수';}
      if ($my_umyear_e == '辰') {$cheansu_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_06 = '천수';}
      if ($my_umyear_e == '巳') {$cheansu_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_07 = '천수';}
      if ($my_umyear_e == '午') {$cheansu_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_08 = '천수';}
      if ($my_umyear_e == '未') {$cheansu_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_09 = '천수';}
      if ($my_umyear_e == '申') {$cheansu_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_10 = '천수';}
      if ($my_umyear_e == '酉') {$cheansu_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_11 = '천수';}
      if ($my_umyear_e == '戌') {$cheansu_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_12 = '천수';}
      if ($my_umyear_e == '亥') {$cheansu_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_01 = '천수';}
}
if ($sin_03) {
      if ($my_umyear_e == '子') {$cheansu_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_03 = '천수';}
      if ($my_umyear_e == '丑') {$cheansu_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_04 = '천수';}
      if ($my_umyear_e == '寅') {$cheansu_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_05 = '천수';}
      if ($my_umyear_e == '卯') {$cheansu_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_06 = '천수';}
      if ($my_umyear_e == '辰') {$cheansu_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_07 = '천수';}
      if ($my_umyear_e == '巳') {$cheansu_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_08 = '천수';}
      if ($my_umyear_e == '午') {$cheansu_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_09 = '천수';}
      if ($my_umyear_e == '未') {$cheansu_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_10 = '천수';}
      if ($my_umyear_e == '申') {$cheansu_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_11 = '천수';}
      if ($my_umyear_e == '酉') {$cheansu_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_12 = '천수';}
      if ($my_umyear_e == '戌') {$cheansu_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_01 = '천수';}
      if ($my_umyear_e == '亥') {$cheansu_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_02 = '천수';}
}
if ($sin_04) {
      if ($my_umyear_e == '子') {$cheansu_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_04 = '천수';}
      if ($my_umyear_e == '丑') {$cheansu_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_05 = '천수';}
      if ($my_umyear_e == '寅') {$cheansu_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_06 = '천수';}
      if ($my_umyear_e == '卯') {$cheansu_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_07 = '천수';}
      if ($my_umyear_e == '辰') {$cheansu_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_08 = '천수';}
      if ($my_umyear_e == '巳') {$cheansu_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_09 = '천수';}
      if ($my_umyear_e == '午') {$cheansu_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_10 = '천수';}
      if ($my_umyear_e == '未') {$cheansu_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_11 = '천수';}
      if ($my_umyear_e == '申') {$cheansu_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_12 = '천수';}
      if ($my_umyear_e == '酉') {$cheansu_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_01 = '천수';}
      if ($my_umyear_e == '戌') {$cheansu_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_02 = '천수';}
      if ($my_umyear_e == '亥') {$cheansu_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_03 = '천수';}
}
if ($sin_05) {
      if ($my_umyear_e == '子') {$cheansu_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_05 = '천수';}
      if ($my_umyear_e == '丑') {$cheansu_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_06 = '천수';}
      if ($my_umyear_e == '寅') {$cheansu_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_07 = '천수';}
      if ($my_umyear_e == '卯') {$cheansu_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_08 = '천수';}
      if ($my_umyear_e == '辰') {$cheansu_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_09 = '천수';}
      if ($my_umyear_e == '巳') {$cheansu_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_10 = '천수';}
      if ($my_umyear_e == '午') {$cheansu_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_11 = '천수';}
      if ($my_umyear_e == '未') {$cheansu_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_12 = '천수';}
      if ($my_umyear_e == '申') {$cheansu_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_01 = '천수';}
      if ($my_umyear_e == '酉') {$cheansu_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_02 = '천수';}
      if ($my_umyear_e == '戌') {$cheansu_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_03 = '천수';}
      if ($my_umyear_e == '亥') {$cheansu_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_04 = '천수';}
}
if ($sin_06) {
      if ($my_umyear_e == '子') {$cheansu_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_06 = '천수';}
      if ($my_umyear_e == '丑') {$cheansu_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_07 = '천수';}
      if ($my_umyear_e == '寅') {$cheansu_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_08 = '천수';}
      if ($my_umyear_e == '卯') {$cheansu_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_09 = '천수';}
      if ($my_umyear_e == '辰') {$cheansu_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_10 = '천수';}
      if ($my_umyear_e == '巳') {$cheansu_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_11 = '천수';}
      if ($my_umyear_e == '午') {$cheansu_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_12 = '천수';}
      if ($my_umyear_e == '未') {$cheansu_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_01 = '천수';}
      if ($my_umyear_e == '申') {$cheansu_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_02 = '천수';}
      if ($my_umyear_e == '酉') {$cheansu_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_03 = '천수';}
      if ($my_umyear_e == '戌') {$cheansu_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_04 = '천수';}
      if ($my_umyear_e == '亥') {$cheansu_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_05 = '천수';}
}
if ($sin_07) {
      if ($my_umyear_e == '子') {$cheansu_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_07 = '천수';}
      if ($my_umyear_e == '丑') {$cheansu_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_08 = '천수';}
      if ($my_umyear_e == '寅') {$cheansu_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_09 = '천수';}
      if ($my_umyear_e == '卯') {$cheansu_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_10 = '천수';}
      if ($my_umyear_e == '辰') {$cheansu_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_11 = '천수';}
      if ($my_umyear_e == '巳') {$cheansu_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_12 = '천수';}
      if ($my_umyear_e == '午') {$cheansu_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_01 = '천수';}
      if ($my_umyear_e == '未') {$cheansu_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_02 = '천수';}
      if ($my_umyear_e == '申') {$cheansu_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_03 = '천수';}
      if ($my_umyear_e == '酉') {$cheansu_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_04 = '천수';}
      if ($my_umyear_e == '戌') {$cheansu_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_05 = '천수';}
      if ($my_umyear_e == '亥') {$cheansu_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_06 = '천수';}
}
if ($sin_08) {
      if ($my_umyear_e == '子') {$cheansu_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_08 = '천수';}
      if ($my_umyear_e == '丑') {$cheansu_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_09 = '천수';}
      if ($my_umyear_e == '寅') {$cheansu_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_10 = '천수';}
      if ($my_umyear_e == '卯') {$cheansu_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_11 = '천수';}
      if ($my_umyear_e == '辰') {$cheansu_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_12 = '천수';}
      if ($my_umyear_e == '巳') {$cheansu_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_01 = '천수';}
      if ($my_umyear_e == '午') {$cheansu_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_02 = '천수';}
      if ($my_umyear_e == '未') {$cheansu_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_03 = '천수';}
      if ($my_umyear_e == '申') {$cheansu_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_04 = '천수';}
      if ($my_umyear_e == '酉') {$cheansu_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_05 = '천수';}
      if ($my_umyear_e == '戌') {$cheansu_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_06 = '천수';}
      if ($my_umyear_e == '亥') {$cheansu_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_07 = '천수';}
}
if ($sin_09) {
      if ($my_umyear_e == '子') {$cheansu_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_09 = '천수';}
      if ($my_umyear_e == '丑') {$cheansu_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_10 = '천수';}
      if ($my_umyear_e == '寅') {$cheansu_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_11 = '천수';}
      if ($my_umyear_e == '卯') {$cheansu_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_12 = '천수';}
      if ($my_umyear_e == '辰') {$cheansu_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_01 = '천수';}
      if ($my_umyear_e == '巳') {$cheansu_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_02 = '천수';}
      if ($my_umyear_e == '午') {$cheansu_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_03 = '천수';}
      if ($my_umyear_e == '未') {$cheansu_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_04 = '천수';}
      if ($my_umyear_e == '申') {$cheansu_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_05 = '천수';}
      if ($my_umyear_e == '酉') {$cheansu_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_06 = '천수';}
      if ($my_umyear_e == '戌') {$cheansu_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_07 = '천수';}
      if ($my_umyear_e == '亥') {$cheansu_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_08 = '천수';}
}
if ($sin_10) {
      if ($my_umyear_e == '子') {$cheansu_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_10 = '천수';}
      if ($my_umyear_e == '丑') {$cheansu_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_11 = '천수';}
      if ($my_umyear_e == '寅') {$cheansu_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_12 = '천수';}
      if ($my_umyear_e == '卯') {$cheansu_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_01 = '천수';}
      if ($my_umyear_e == '辰') {$cheansu_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_02 = '천수';}
      if ($my_umyear_e == '巳') {$cheansu_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_03 = '천수';}
      if ($my_umyear_e == '午') {$cheansu_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_04 = '천수';}
      if ($my_umyear_e == '未') {$cheansu_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_05 = '천수';}
      if ($my_umyear_e == '申') {$cheansu_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_06 = '천수';}
      if ($my_umyear_e == '酉') {$cheansu_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_07 = '천수';}
      if ($my_umyear_e == '戌') {$cheansu_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_08 = '천수';}
      if ($my_umyear_e == '亥') {$cheansu_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_09 = '천수';}
}
if ($sin_11) {
      if ($my_umyear_e == '子') {$cheansu_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_11 = '천수';}
      if ($my_umyear_e == '丑') {$cheansu_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_12 = '천수';}
      if ($my_umyear_e == '寅') {$cheansu_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_01 = '천수';}
      if ($my_umyear_e == '卯') {$cheansu_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_02 = '천수';}
      if ($my_umyear_e == '辰') {$cheansu_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_03 = '천수';}
      if ($my_umyear_e == '巳') {$cheansu_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_04 = '천수';}
      if ($my_umyear_e == '午') {$cheansu_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_05 = '천수';}
      if ($my_umyear_e == '未') {$cheansu_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_06 = '천수';}
      if ($my_umyear_e == '申') {$cheansu_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_07 = '천수';}
      if ($my_umyear_e == '酉') {$cheansu_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_08 = '천수';}
      if ($my_umyear_e == '戌') {$cheansu_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_09 = '천수';}
      if ($my_umyear_e == '亥') {$cheansu_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_10 = '천수';}
}
if ($sin_12) {
      if ($my_umyear_e == '子') {$cheansu_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_12 = '천수';}
      if ($my_umyear_e == '丑') {$cheansu_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_01 = '천수';}
      if ($my_umyear_e == '寅') {$cheansu_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_02 = '천수';}
      if ($my_umyear_e == '卯') {$cheansu_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_03 = '천수';}
      if ($my_umyear_e == '辰') {$cheansu_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_04 = '천수';}
      if ($my_umyear_e == '巳') {$cheansu_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_05 = '천수';}
      if ($my_umyear_e == '午') {$cheansu_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_06 = '천수';}
      if ($my_umyear_e == '未') {$cheansu_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_07 = '천수';}
      if ($my_umyear_e == '申') {$cheansu_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_08 = '천수';}
      if ($my_umyear_e == '酉') {$cheansu_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_09 = '천수';}
      if ($my_umyear_e == '戌') {$cheansu_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_10 = '천수';}
      if ($my_umyear_e == '亥') {$cheansu_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheansu.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheansu.gif alt=천수 border=0></a>';$cheansu_01 = '천수';}
}

##############################################################################chensang/chensa


if ($gung_01 == '奴僕') {$chensang_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensang.gif alt=천상 border=0></a>';$chensang_01 = '천상';}
if ($gung_02 == '奴僕') {$chensang_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensang.gif alt=천상 border=0></a>';$chensang_02 = '천상';}
if ($gung_03 == '奴僕') {$chensang_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensang.gif alt=천상 border=0></a>';$chensang_03 = '천상';}
if ($gung_04 == '奴僕') {$chensang_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensang.gif alt=천상 border=0></a>';$chensang_04 = '천상';}
if ($gung_05 == '奴僕') {$chensang_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensang.gif alt=천상 border=0></a>';$chensang_05 = '천상';}
if ($gung_06 == '奴僕') {$chensang_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensang.gif alt=천상 border=0></a>';$chensang_06 = '천상';}
if ($gung_07 == '奴僕') {$chensang_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensang.gif alt=천상 border=0></a>';$chensang_07 = '천상';}
if ($gung_08 == '奴僕') {$chensang_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensang.gif alt=천상 border=0></a>';$chensang_08 = '천상';}
if ($gung_09 == '奴僕') {$chensang_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensang.gif alt=천상 border=0></a>';$chensang_09 = '천상';}
if ($gung_10 == '奴僕') {$chensang_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensang.gif alt=천상 border=0></a>';$chensang_10 = '천상';}
if ($gung_11 == '奴僕') {$chensang_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensang.gif alt=천상 border=0></a>';$chensang_11 = '천상';}
if ($gung_12 == '奴僕') {$chensang_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensang.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensang.gif alt=천상 border=0></a>';$chensang_12 = '천상';}

if ($gung_01 == '疾厄') {$chensa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensa.gif alt=천사 border=0></a>';$chensa_01 = '천사';}
if ($gung_02 == '疾厄') {$chensa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensa.gif alt=천사 border=0></a>';$chensa_02 = '천사';}
if ($gung_03 == '疾厄') {$chensa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensa.gif alt=천사 border=0></a>';$chensa_03 = '천사';}
if ($gung_04 == '疾厄') {$chensa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensa.gif alt=천사 border=0></a>';$chensa_04 = '천사';}
if ($gung_05 == '疾厄') {$chensa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensa.gif alt=천사 border=0></a>';$chensa_05 = '천사';}
if ($gung_06 == '疾厄') {$chensa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensa.gif alt=천사 border=0></a>';$chensa_06 = '천사';}
if ($gung_07 == '疾厄') {$chensa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensa.gif alt=천사 border=0></a>';$chensa_07 = '천사';}
if ($gung_08 == '疾厄') {$chensa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensa.gif alt=천사 border=0></a>';$chensa_08 = '천사';}
if ($gung_09 == '疾厄') {$chensa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensa.gif alt=천사 border=0></a>';$chensa_09 = '천사';}
if ($gung_10 == '疾厄') {$chensa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensa.gif alt=천사 border=0></a>';$chensa_10 = '천사';}
if ($gung_11 == '疾厄') {$chensa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensa.gif alt=천사 border=0></a>';$chensa_11 = '천사';}
if ($gung_12 == '疾厄') {$chensa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_chensa.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/chensa.gif alt=천사 border=0></a>';$chensa_12 = '천사';}


###########################################################################cheangong/daemo/pase/cheanduk/wolduk

if ($my_umyear_e == '子') {$cheangong_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangong.gif alt=천공 border=0></a>';$cheangong_12 = '천공';}
if ($my_umyear_e == '丑') {$cheangong_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangong.gif alt=천공 border=0></a>';$cheangong_01 = '천공';}
if ($my_umyear_e == '寅') {$cheangong_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangong.gif alt=천공 border=0></a>';$cheangong_02 = '천공';}
if ($my_umyear_e == '卯') {$cheangong_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangong.gif alt=천공 border=0></a>';$cheangong_03 = '천공';}
if ($my_umyear_e == '辰') {$cheangong_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangong.gif alt=천공 border=0></a>';$cheangong_04 = '천공';}
if ($my_umyear_e == '巳') {$cheangong_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangong.gif alt=천공 border=0></a>';$cheangong_05 = '천공';}
if ($my_umyear_e == '午') {$cheangong_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangong.gif alt=천공 border=0></a>';$cheangong_06 = '천공';}
if ($my_umyear_e == '未') {$cheangong_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangong.gif alt=천공 border=0></a>';$cheangong_07 = '천공';}
if ($my_umyear_e == '申') {$cheangong_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangong.gif alt=천공 border=0></a>';$cheangong_08 = '천공';}
if ($my_umyear_e == '酉') {$cheangong_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangong.gif alt=천공 border=0></a>';$cheangong_09 = '천공';}
if ($my_umyear_e == '戌') {$cheangong_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangong.gif alt=천공 border=0></a>';$cheangong_10 = '천공';}
if ($my_umyear_e == '亥') {$cheangong_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheangong.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheangong.gif alt=천공 border=0></a>';$cheangong_11 = '천공';}

if ($my_umyear_e == '子') {$daemo_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_daemo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/daemo.gif alt=대모 border=0></a>';$daemo_06 = '대모';}
if ($my_umyear_e == '丑') {$daemo_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_daemo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/daemo.gif alt=대모 border=0></a>';$daemo_05 = '대모';}
if ($my_umyear_e == '寅') {$daemo_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_daemo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/daemo.gif alt=대모 border=0></a>';$daemo_08 = '대모';}
if ($my_umyear_e == '卯') {$daemo_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_daemo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/daemo.gif alt=대모 border=0></a>';$daemo_07 = '대모';}
if ($my_umyear_e == '辰') {$daemo_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_daemo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/daemo.gif alt=대모 border=0></a>';$daemo_10 = '대모';}
if ($my_umyear_e == '巳') {$daemo_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_daemo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/daemo.gif alt=대모 border=0></a>';$daemo_09 = '대모';}
if ($my_umyear_e == '午') {$daemo_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_daemo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/daemo.gif alt=대모 border=0></a>';$daemo_12 = '대모';}
if ($my_umyear_e == '未') {$daemo_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_daemo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/daemo.gif alt=대모 border=0></a>';$daemo_11 = '대모';}
if ($my_umyear_e == '申') {$daemo_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_daemo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/daemo.gif alt=대모 border=0></a>';$daemo_02 = '대모';}
if ($my_umyear_e == '酉') {$daemo_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_daemo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/daemo.gif alt=대모 border=0></a>';$daemo_01 = '대모';}
if ($my_umyear_e == '戌') {$daemo_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_daemo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/daemo.gif alt=대모 border=0></a>';$daemo_04 = '대모';}
if ($my_umyear_e == '亥') {$daemo_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_daemo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/daemo.gif alt=대모 border=0></a>';$daemo_03 = '대모';}

if ($my_umyear_e == '子') {$pase_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_pase.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/pase.gif alt=파쇄 border=0></a>';$pase_04 = '파쇄';}
if ($my_umyear_e == '丑') {$pase_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_pase.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/pase.gif alt=파쇄 border=0></a>';$pase_12 = '파쇄';}
if ($my_umyear_e == '寅') {$pase_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_pase.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/pase.gif alt=파쇄 border=0></a>';$pase_08 = '파쇄';}
if ($my_umyear_e == '卯') {$pase_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_pase.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/pase.gif alt=파쇄 border=0></a>';$pase_04 = '파쇄';}
if ($my_umyear_e == '辰') {$pase_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_pase.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/pase.gif alt=파쇄 border=0></a>';$pase_12 = '파쇄';}
if ($my_umyear_e == '巳') {$pase_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_pase.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/pase.gif alt=파쇄 border=0></a>';$pase_08 = '파쇄';}
if ($my_umyear_e == '午') {$pase_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_pase.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/pase.gif alt=파쇄 border=0></a>';$pase_04 = '파쇄';}
if ($my_umyear_e == '未') {$pase_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_pase.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/pase.gif alt=파쇄 border=0></a>';$pase_12 = '파쇄';}
if ($my_umyear_e == '申') {$pase_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_pase.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/pase.gif alt=파쇄 border=0></a>';$pase_08 = '파쇄';}
if ($my_umyear_e == '酉') {$pase_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_pase.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/pase.gif alt=파쇄 border=0></a>';$pase_04 = '파쇄';}
if ($my_umyear_e == '戌') {$pase_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_pase.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/pase.gif alt=파쇄 border=0></a>';$pase_12 = '파쇄';}
if ($my_umyear_e == '亥') {$pase_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_pase.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/pase.gif alt=파쇄 border=0></a>';$pase_08 = '파쇄';}

if ($my_umyear_e == '子') {$cheanduk_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanduk.gif alt=천덕 border=0></a>';$cheanduk_08 = '천덕';}
if ($my_umyear_e == '丑') {$cheanduk_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanduk.gif alt=천덕 border=0></a>';$cheanduk_09 = '천덕';}
if ($my_umyear_e == '寅') {$cheanduk_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanduk.gif alt=천덕 border=0></a>';$cheanduk_10 = '천덕';}
if ($my_umyear_e == '卯') {$cheanduk_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanduk.gif alt=천덕 border=0></a>';$cheanduk_11 = '천덕';}
if ($my_umyear_e == '辰') {$cheanduk_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanduk.gif alt=천덕 border=0></a>';$cheanduk_12 = '천덕';}
if ($my_umyear_e == '巳') {$cheanduk_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanduk.gif alt=천덕 border=0></a>';$cheanduk_01 = '천덕';}
if ($my_umyear_e == '午') {$cheanduk_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanduk.gif alt=천덕 border=0></a>';$cheanduk_02 = '천덕';}
if ($my_umyear_e == '未') {$cheanduk_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanduk.gif alt=천덕 border=0></a>';$cheanduk_03 = '천덕';}
if ($my_umyear_e == '申') {$cheanduk_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanduk.gif alt=천덕 border=0></a>';$cheanduk_04 = '천덕';}
if ($my_umyear_e == '酉') {$cheanduk_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanduk.gif alt=천덕 border=0></a>';$cheanduk_05 = '천덕';}
if ($my_umyear_e == '戌') {$cheanduk_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanduk.gif alt=천덕 border=0></a>';$cheanduk_06 = '천덕';}
if ($my_umyear_e == '亥') {$cheanduk_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_cheanduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/cheanduk.gif alt=천덕 border=0></a>';$cheanduk_07 = '천덕';}

if ($my_umyear_e == '子') {$wolduk_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_wolduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/wolduk.gif alt=월덕 border=0></a>';$wolduk_04 = '월덕';}
if ($my_umyear_e == '丑') {$wolduk_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_wolduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/wolduk.gif alt=월덕 border=0></a>';$wolduk_05 = '월덕';}
if ($my_umyear_e == '寅') {$wolduk_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_wolduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/wolduk.gif alt=월덕 border=0></a>';$wolduk_06 = '월덕';}
if ($my_umyear_e == '卯') {$wolduk_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_wolduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/wolduk.gif alt=월덕 border=0></a>';$wolduk_07 = '월덕';}
if ($my_umyear_e == '辰') {$wolduk_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_wolduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/wolduk.gif alt=월덕 border=0></a>';$wolduk_08 = '월덕';}
if ($my_umyear_e == '巳') {$wolduk_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_wolduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/wolduk.gif alt=월덕 border=0></a>';$wolduk_09 = '월덕';}
if ($my_umyear_e == '午') {$wolduk_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_wolduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/wolduk.gif alt=월덕 border=0></a>';$wolduk_10 = '월덕';}
if ($my_umyear_e == '未') {$wolduk_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_wolduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/wolduk.gif alt=월덕 border=0></a>';$wolduk_11 = '월덕';}
if ($my_umyear_e == '申') {$wolduk_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_wolduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/wolduk.gif alt=월덕 border=0></a>';$wolduk_12 = '월덕';}
if ($my_umyear_e == '酉') {$wolduk_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_wolduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/wolduk.gif alt=월덕 border=0></a>';$wolduk_01 = '월덕';}
if ($my_umyear_e == '戌') {$wolduk_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_wolduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/wolduk.gif alt=월덕 border=0></a>';$wolduk_02 = '월덕';}
if ($my_umyear_e == '亥') {$wolduk_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_wolduk.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/wolduk.gif alt=월덕 border=0></a>';$wolduk_03 = '월덕';}


###############################################################태보, 봉고

if ($mungok_01) {$taebo_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taebo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taebo.gif alt=태보 border=0></a>';$taebo_03 = '태보';}
if ($mungok_02) {$taebo_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taebo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taebo.gif alt=태보 border=0></a>';$taebo_04 = '태보';}
if ($mungok_03) {$taebo_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taebo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taebo.gif alt=태보 border=0></a>';$taebo_05 = '태보';}
if ($mungok_04) {$taebo_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taebo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taebo.gif alt=태보 border=0></a>';$taebo_06 = '태보';}
if ($mungok_05) {$taebo_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taebo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taebo.gif alt=태보 border=0></a>';$taebo_07 = '태보';}
if ($mungok_06) {$taebo_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taebo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taebo.gif alt=태보 border=0></a>';$taebo_08 = '태보';}
if ($mungok_07) {$taebo_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taebo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taebo.gif alt=태보 border=0></a>';$taebo_09 = '태보';}
if ($mungok_08) {$taebo_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taebo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taebo.gif alt=태보 border=0></a>';$taebo_10 = '태보';}
if ($mungok_09) {$taebo_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taebo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taebo.gif alt=태보 border=0></a>';$taebo_11 = '태보';}
if ($mungok_10) {$taebo_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taebo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taebo.gif alt=태보 border=0></a>';$taebo_12 = '태보';}
if ($mungok_11) {$taebo_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taebo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taebo.gif alt=태보 border=0></a>';$taebo_01 = '태보';}
if ($mungok_12) {$taebo_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taebo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taebo.gif alt=태보 border=0></a>';$taebo_02 = '태보';}

if ($mungok_01) {$bonggo_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggo.gif alt=봉고 border=0></a>';$bonggo_11 = '봉고';}
if ($mungok_02) {$bonggo_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggo.gif alt=봉고 border=0></a>';$bonggo_12 = '봉고';}
if ($mungok_03) {$bonggo_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggo.gif alt=봉고 border=0></a>';$bonggo_01 = '봉고';}
if ($mungok_04) {$bonggo_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggo.gif alt=봉고 border=0></a>';$bonggo_02 = '봉고';}
if ($mungok_05) {$bonggo_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggo.gif alt=봉고 border=0></a>';$bonggo_03 = '봉고';}
if ($mungok_06) {$bonggo_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggo.gif alt=봉고 border=0></a>';$bonggo_04 = '봉고';}
if ($mungok_07) {$bonggo_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggo.gif alt=봉고 border=0></a>';$bonggo_05 = '봉고';}
if ($mungok_08) {$bonggo_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggo.gif alt=봉고 border=0></a>';$bonggo_06 = '봉고';}
if ($mungok_09) {$bonggo_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggo.gif alt=봉고 border=0></a>';$bonggo_07 = '봉고';}
if ($mungok_10) {$bonggo_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggo.gif alt=봉고 border=0></a>';$bonggo_08 = '봉고';}
if ($mungok_11) {$bonggo_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggo.gif alt=봉고 border=0></a>';$bonggo_09 = '봉고';}
if ($mungok_12) {$bonggo_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_bonggo.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/bonggo.gif alt=봉고 border=0></a>';$bonggo_10 = '봉고';}

############################################################홍염

#if ($my_umyear_h == '甲') {$hongyeam_05_disp = '<img src=/images/result_img/jum_img/hanja_img/hongyeam.gif alt=홍염 border=0>';$hongyeam_05 = '홍염';}
#if ($my_umyear_h == '乙') {$hongyeam_07_disp = '<img src=/images/result_img/jum_img/hanja_img/hongyeam.gif alt=홍염 border=0>';$hongyeam_07 = '홍염';}
#if ($my_umyear_h == '丙') {$hongyeam_01_disp = '<img src=/images/result_img/jum_img/hanja_img/hongyeam.gif alt=홍염 border=0>';$hongyeam_01 = '홍염';}
#if ($my_umyear_h == '丁') {$hongyeam_06_disp = '<img src=/images/result_img/jum_img/hanja_img/hongyeam.gif alt=홍염 border=0>';$hongyeam_06 = '홍염';}
#if ($my_umyear_h == '戊') {$hongyeam_03_disp = '<img src=/images/result_img/jum_img/hanja_img/hongyeam.gif alt=홍염 border=0>';$hongyeam_03 = '홍염';}
#if ($my_umyear_h == '己') {$hongyeam_03_disp = '<img src=/images/result_img/jum_img/hanja_img/hongyeam.gif alt=홍염 border=0>';$hongyeam_03 = '홍염';}
#if ($my_umyear_h == '庚') {$hongyeam_09_disp = '<img src=/images/result_img/jum_img/hanja_img/hongyeam.gif alt=홍염 border=0>';$hongyeam_09 = '홍염';}
#if ($my_umyear_h == '辛') {$hongyeam_08_disp = '<img src=/images/result_img/jum_img/hanja_img/hongyeam.gif alt=홍염 border=0>';$hongyeam_08 = '홍염';}
#if ($my_umyear_h == '壬') {$hongyeam_11_disp = '<img src=/images/result_img/jum_img/hanja_img/hongyeam.gif alt=홍염 border=0>';$hongyeam_11 = '홍염';}
#if ($my_umyear_h == '癸') {$hongyeam_07_disp = '<img src=/images/result_img/jum_img/hanja_img/hongyeam.gif alt=홍염 border=0>';$hongyeam_07 = '홍염';}


############################################################비렴

if ($my_umyear_e == '寅') {$biryeum_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_biryeum.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/biryeum.gif alt=비렴 border=0></a>';$biryeum_09 = '비렴';}
if ($my_umyear_e == '卯') {$biryeum_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_biryeum.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/biryeum.gif alt=비렴 border=0></a>';$biryeum_04 = '비렴';}
if ($my_umyear_e == '辰') {$biryeum_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_biryeum.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/biryeum.gif alt=비렴 border=0></a>';$biryeum_05 = '비렴';}
if ($my_umyear_e == '巳') {$biryeum_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_biryeum.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/biryeum.gif alt=비렴 border=0></a>';$biryeum_06 = '비렴';}
if ($my_umyear_e == '午') {$biryeum_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_biryeum.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/biryeum.gif alt=비렴 border=0></a>';$biryeum_01 = '비렴';}
if ($my_umyear_e == '未') {$biryeum_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_biryeum.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/biryeum.gif alt=비렴 border=0></a>';$biryeum_02 = '비렴';}
if ($my_umyear_e == '申') {$biryeum_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_biryeum.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/biryeum.gif alt=비렴 border=0></a>';$biryeum_03 = '비렴';}
if ($my_umyear_e == '酉') {$biryeum_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_biryeum.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/biryeum.gif alt=비렴 border=0></a>';$biryeum_10 = '비렴';}
if ($my_umyear_e == '戌') {$biryeum_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_biryeum.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/biryeum.gif alt=비렴 border=0></a>';$biryeum_11 = '비렴';}
if ($my_umyear_e == '亥') {$biryeum_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_biryeum.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/biryeum.gif alt=비렴 border=0></a>';$biryeum_12 = '비렴';}
if ($my_umyear_e == '子') {$biryeum_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_biryeum.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/biryeum.gif alt=비렴 border=0></a>';$biryeum_07 = '비렴';}
if ($my_umyear_e == '丑') {$biryeum_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_biryeum.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/biryeum.gif alt=비렴 border=0></a>';$biryeum_08 = '비렴';}




##################################################################생년태세12신
######## taese/

if ($my_umyear_e == '子') {
    $taese_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_01.gif alt=태세 border=0></a>';$taese_11 = '태세';
    $taese_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_02.gif alt=태양 border=0></a>';$taese_12 = '태양';
    $taese_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_03.gif alt=상문 border=0></a>';$taese_01 = '상문';
    $taese_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_04.gif alt=태음 border=0></a>';$taese_02 = '태음';
    $taese_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_05.gif alt=관부 border=0></a>';$taese_03 = '관부';
    $taese_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_06.gif alt=사부 border=0></a>';$taese_04 = '사부';
    $taese_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_07.gif alt=세파 border=0></a>';$taese_05 = '세파';
    $taese_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_08.gif alt=용덕 border=0></a>';$taese_06 = '용덕';
    $taese_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_09.gif alt=백호 border=0></a>';$taese_07 = '백호';
    $taese_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_10.gif alt=복덕 border=0></a>';$taese_08 = '복덕';
    $taese_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_11.gif alt=조객 border=0></a>';$taese_09 = '조객';
    $taese_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_12.gif alt=병부 border=0></a>';$taese_10 = '병부';
}

if ($my_umyear_e == '丑') {
    $taese_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_01.gif alt=태세 border=0></a>';$taese_12 = '태세';
    $taese_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_02.gif alt=태양 border=0></a>';$taese_01 = '태양';
    $taese_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_03.gif alt=상문 border=0></a>';$taese_02 = '상문';
    $taese_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_04.gif alt=태음 border=0></a>';$taese_03 = '태음';
    $taese_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_05.gif alt=관부 border=0></a>';$taese_04 = '관부';
    $taese_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_06.gif alt=사부 border=0></a>';$taese_05 = '사부';
    $taese_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_07.gif alt=세파 border=0></a>';$taese_06 = '세파';
    $taese_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_08.gif alt=용덕 border=0></a>';$taese_07 = '용덕';
    $taese_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_09.gif alt=백호 border=0></a>';$taese_08 = '백호';
    $taese_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_10.gif alt=복덕 border=0></a>';$taese_09 = '복덕';
    $taese_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_11.gif alt=조객 border=0></a>';$taese_10 = '조객';
    $taese_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_12.gif alt=병부 border=0></a>';$taese_11 = '병부';
}

if ($my_umyear_e == '寅') {
    $taese_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_01.gif alt=태세 border=0></a>';$taese_01 = '태세';
    $taese_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_02.gif alt=태양 border=0></a>';$taese_02 = '태양';
    $taese_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_03.gif alt=상문 border=0></a>';$taese_03 = '상문';
    $taese_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_04.gif alt=태음 border=0></a>';$taese_04 = '태음';
    $taese_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_05.gif alt=관부 border=0></a>';$taese_05 = '관부';
    $taese_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_06.gif alt=사부 border=0></a>';$taese_06 = '사부';
    $taese_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_07.gif alt=세파 border=0></a>';$taese_07 = '세파';
    $taese_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_08.gif alt=용덕 border=0></a>';$taese_08 = '용덕';
    $taese_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_09.gif alt=백호 border=0></a>';$taese_09 = '백호';
    $taese_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_10.gif alt=복덕 border=0></a>';$taese_10 = '복덕';
    $taese_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_11.gif alt=조객 border=0></a>';$taese_11 = '조객';
    $taese_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_12.gif alt=병부 border=0></a>';$taese_12 = '병부';
}

if ($my_umyear_e == '卯') {
    $taese_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_01.gif alt=태세 border=0></a>';$taese_02 = '태세';
    $taese_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_02.gif alt=태양 border=0></a>';$taese_03 = '태양';
    $taese_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_03.gif alt=상문 border=0></a>';$taese_04 = '상문';
    $taese_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_04.gif alt=태음 border=0></a>';$taese_05 = '태음';
    $taese_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_05.gif alt=관부 border=0></a>';$taese_06 = '관부';
    $taese_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_06.gif alt=사부 border=0></a>';$taese_07 = '사부';
    $taese_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_07.gif alt=세파 border=0></a>';$taese_08 = '세파';
    $taese_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_08.gif alt=용덕 border=0></a>';$taese_09 = '용덕';
    $taese_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_09.gif alt=백호 border=0></a>';$taese_10 = '백호';
    $taese_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_10.gif alt=복덕 border=0></a>';$taese_11 = '복덕';
    $taese_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_11.gif alt=조객 border=0></a>';$taese_12 = '조객';
    $taese_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_12.gif alt=병부 border=0></a>';$taese_01 = '병부';
}

if ($my_umyear_e == '辰') {
    $taese_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_01.gif alt=태세 border=0></a>';$taese_03 = '태세';
    $taese_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_02.gif alt=태양 border=0></a>';$taese_04 = '태양';
    $taese_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_03.gif alt=상문 border=0></a>';$taese_05 = '상문';
    $taese_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_04.gif alt=태음 border=0></a>';$taese_06 = '태음';
    $taese_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_05.gif alt=관부 border=0></a>';$taese_07 = '관부';
    $taese_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_06.gif alt=사부 border=0></a>';$taese_08 = '사부';
    $taese_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_07.gif alt=세파 border=0></a>';$taese_09 = '세파';
    $taese_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_08.gif alt=용덕 border=0></a>';$taese_10 = '용덕';
    $taese_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_09.gif alt=백호 border=0></a>';$taese_11 = '백호';
    $taese_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_10.gif alt=복덕 border=0></a>';$taese_12 = '복덕';
    $taese_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_11.gif alt=조객 border=0></a>';$taese_01 = '조객';
    $taese_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_12.gif alt=병부 border=0></a>';$taese_02 = '병부';
}

if ($my_umyear_e == '巳') {
    $taese_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_01.gif alt=태세 border=0></a>';$taese_04 = '태세';
    $taese_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_02.gif alt=태양 border=0></a>';$taese_05 = '태양';
    $taese_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_03.gif alt=상문 border=0></a>';$taese_06 = '상문';
    $taese_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_04.gif alt=태음 border=0></a>';$taese_07 = '태음';
    $taese_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_05.gif alt=관부 border=0></a>';$taese_08 = '관부';
    $taese_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_06.gif alt=사부 border=0></a>';$taese_09 = '사부';
    $taese_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_07.gif alt=세파 border=0></a>';$taese_10 = '세파';
    $taese_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_08.gif alt=용덕 border=0></a>';$taese_11 = '용덕';
    $taese_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_09.gif alt=백호 border=0></a>';$taese_12 = '백호';
    $taese_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_10.gif alt=복덕 border=0></a>';$taese_01 = '복덕';
    $taese_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_11.gif alt=조객 border=0></a>';$taese_02 = '조객';
    $taese_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_12.gif alt=병부 border=0></a>';$taese_03 = '병부';
}

if ($my_umyear_e == '午') {
    $taese_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_01.gif alt=태세 border=0></a>';$taese_05 = '태세';
    $taese_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_02.gif alt=태양 border=0></a>';$taese_06 = '태양';
    $taese_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_03.gif alt=상문 border=0></a>';$taese_07 = '상문';
    $taese_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_04.gif alt=태음 border=0></a>';$taese_08 = '태음';
    $taese_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_05.gif alt=관부 border=0></a>';$taese_09 = '관부';
    $taese_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_06.gif alt=사부 border=0></a>';$taese_10 = '사부';
    $taese_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_07.gif alt=세파 border=0></a>';$taese_11 = '세파';
    $taese_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_08.gif alt=용덕 border=0></a>';$taese_12 = '용덕';
    $taese_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_09.gif alt=백호 border=0></a>';$taese_01 = '백호';
    $taese_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_10.gif alt=복덕 border=0></a>';$taese_02 = '복덕';
    $taese_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_11.gif alt=조객 border=0></a>';$taese_03 = '조객';
    $taese_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_12.gif alt=병부 border=0></a>';$taese_04 = '병부';
}

if ($my_umyear_e == '未') {
    $taese_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_01.gif alt=태세 border=0></a>';$taese_06 = '태세';
    $taese_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_02.gif alt=태양 border=0></a>';$taese_07 = '태양';
    $taese_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_03.gif alt=상문 border=0></a>';$taese_08 = '상문';
    $taese_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_04.gif alt=태음 border=0></a>';$taese_09 = '태음';
    $taese_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_05.gif alt=관부 border=0></a>';$taese_10 = '관부';
    $taese_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_06.gif alt=사부 border=0></a>';$taese_11 = '사부';
    $taese_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_07.gif alt=세파 border=0></a>';$taese_12 = '세파';
    $taese_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_08.gif alt=용덕 border=0></a>';$taese_01 = '용덕';
    $taese_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_09.gif alt=백호 border=0></a>';$taese_02 = '백호';
    $taese_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_10.gif alt=복덕 border=0></a>';$taese_03 = '복덕';
    $taese_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_11.gif alt=조객 border=0></a>';$taese_04 = '조객';
    $taese_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_12.gif alt=병부 border=0></a>';$taese_05 = '병부';
}

if ($my_umyear_e == '申') {
    $taese_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_01.gif alt=태세 border=0></a>';$taese_07 = '태세';
    $taese_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_02.gif alt=태양 border=0></a>';$taese_08 = '태양';
    $taese_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_03.gif alt=상문 border=0></a>';$taese_09 = '상문';
    $taese_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_04.gif alt=태음 border=0></a>';$taese_10 = '태음';
    $taese_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_05.gif alt=관부 border=0></a>';$taese_11 = '관부';
    $taese_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_06.gif alt=사부 border=0></a>';$taese_12 = '사부';
    $taese_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_07.gif alt=세파 border=0></a>';$taese_01 = '세파';
    $taese_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_08.gif alt=용덕 border=0></a>';$taese_02 = '용덕';
    $taese_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_09.gif alt=백호 border=0></a>';$taese_03 = '백호';
    $taese_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_10.gif alt=복덕 border=0></a>';$taese_04 = '복덕';
    $taese_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_11.gif alt=조객 border=0></a>';$taese_05 = '조객';
    $taese_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_12.gif alt=병부 border=0></a>';$taese_06 = '병부';
}

if ($my_umyear_e == '酉') {
    $taese_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_01.gif alt=태세 border=0></a>';$taese_08 = '태세';
    $taese_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_02.gif alt=태양 border=0></a>';$taese_09 = '태양';
    $taese_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_03.gif alt=상문 border=0></a>';$taese_10 = '상문';
    $taese_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_04.gif alt=태음 border=0></a>';$taese_11 = '태음';
    $taese_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_05.gif alt=관부 border=0></a>';$taese_12 = '관부';
    $taese_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_06.gif alt=사부 border=0></a>';$taese_01 = '사부';
    $taese_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_07.gif alt=세파 border=0></a>';$taese_02 = '세파';
    $taese_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_08.gif alt=용덕 border=0></a>';$taese_03 = '용덕';
    $taese_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_09.gif alt=백호 border=0></a>';$taese_04 = '백호';
    $taese_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_10.gif alt=복덕 border=0></a>';$taese_05 = '복덕';
    $taese_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_11.gif alt=조객 border=0></a>';$taese_06 = '조객';
    $taese_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_12.gif alt=병부 border=0></a>';$taese_07 = '병부';
}

if ($my_umyear_e == '戌') {
    $taese_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_01.gif alt=태세 border=0></a>';$taese_09 = '태세';
    $taese_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_02.gif alt=태양 border=0></a>';$taese_10 = '태양';
    $taese_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_03.gif alt=상문 border=0></a>';$taese_11 = '상문';
    $taese_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_04.gif alt=태음 border=0></a>';$taese_12 = '태음';
    $taese_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_05.gif alt=관부 border=0></a>';$taese_01 = '관부';
    $taese_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_06.gif alt=사부 border=0></a>';$taese_02 = '사부';
    $taese_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_07.gif alt=세파 border=0></a>';$taese_03 = '세파';
    $taese_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_08.gif alt=용덕 border=0></a>';$taese_04 = '용덕';
    $taese_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_09.gif alt=백호 border=0></a>';$taese_05 = '백호';
    $taese_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_10.gif alt=복덕 border=0></a>';$taese_06 = '복덕';
    $taese_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_11.gif alt=조객 border=0></a>';$taese_07 = '조객';
    $taese_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_12.gif alt=병부 border=0></a>';$taese_08 = '병부';
}

if ($my_umyear_e == '亥') {
    $taese_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_01.gif alt=태세 border=0></a>';$taese_10 = '태세';
    $taese_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_02.gif alt=태양 border=0></a>';$taese_11 = '태양';
    $taese_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_03.gif alt=상문 border=0></a>';$taese_12 = '상문';
    $taese_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_04.gif alt=태음 border=0></a>';$taese_01 = '태음';
    $taese_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_05.gif alt=관부 border=0></a>';$taese_02 = '관부';
    $taese_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_06.gif alt=사부 border=0></a>';$taese_03 = '사부';
    $taese_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_07.gif alt=세파 border=0></a>';$taese_04 = '세파';
    $taese_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_08.gif alt=용덕 border=0></a>';$taese_05 = '용덕';
    $taese_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_09.gif alt=백호 border=0></a>';$taese_06 = '백호';
    $taese_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_10.gif alt=복덕 border=0></a>';$taese_07 = '복덕';
    $taese_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_11.gif alt=조객 border=0></a>';$taese_08 = '조객';
    $taese_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_taese_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/taese_12.gif alt=병부 border=0></a>';$taese_09 = '병부';
}

################################################################################장성십이신/jangsung
if (($my_umyear_e == '寅')||($my_umyear_e == '午')||($my_umyear_e == '戌')) {
    $jangsung_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_01.gif alt=장성 border=0></a>';$jangsung_05 = '장성';
    $jangsung_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_02.gif alt=반안 border=0></a>';$jangsung_06 = '반안';
    $jangsung_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_03.gif alt=세역 border=0></a>';$jangsung_07 = '세역';
    $jangsung_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_04.gif alt=식신 border=0></a>';$jangsung_08 = '식신';
    $jangsung_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_05.gif alt=화개 border=0></a>';$jangsung_09 = '화개';
    $jangsung_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_06.gif alt=겁살 border=0></a>';$jangsung_10 = '겁살';
    $jangsung_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_07.gif alt=재살 border=0></a>';$jangsung_11 = '재살';
    $jangsung_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_08.gif alt=천살 border=0></a>';$jangsung_12 = '천살';
    $jangsung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_09.gif alt=지배 border=0></a>';$jangsung_01 = '지배';
    $jangsung_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_10.gif alt=함지 border=0></a>';$jangsung_02 = '함지';
    $jangsung_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_11.gif alt=월살 border=0></a>';$jangsung_03 = '월살';
    $jangsung_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_12.gif alt=망신 border=0></a>';$jangsung_04 = '망신';
}

if (($my_umyear_e == '申')||($my_umyear_e == '子')||($my_umyear_e == '辰')) {
    $jangsung_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_01.gif alt=장성 border=0></a>';$jangsung_11 = '장성';
    $jangsung_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_02.gif alt=반안 border=0></a>';$jangsung_12 = '반안';
    $jangsung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_03.gif alt=세역 border=0></a>';$jangsung_01 = '세역';
    $jangsung_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_04.gif alt=식신 border=0></a>';$jangsung_02 = '식신';
    $jangsung_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_05.gif alt=화개 border=0></a>';$jangsung_03 = '화개';
    $jangsung_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_06.gif alt=겁살 border=0></a>';$jangsung_04 = '겁살';
    $jangsung_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_07.gif alt=재살 border=0></a>';$jangsung_05 = '재살';
    $jangsung_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_08.gif alt=천살 border=0></a>';$jangsung_06 = '천살';
    $jangsung_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_09.gif alt=지배 border=0></a>';$jangsung_07 = '지배';
    $jangsung_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_10.gif alt=함지 border=0></a>';$jangsung_08 = '함지';
    $jangsung_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_11.gif alt=월살 border=0></a>';$jangsung_09 = '월살';
    $jangsung_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_12.gif alt=망신 border=0></a>';$jangsung_10 = '망신';
}

if (($my_umyear_e == '巳')||($my_umyear_e == '酉')||($my_umyear_e == '丑')) {
    $jangsung_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_01.gif alt=장성 border=0></a>';$jangsung_08 = '장성';
    $jangsung_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_02.gif alt=반안 border=0></a>';$jangsung_09 = '반안';
    $jangsung_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_03.gif alt=세역 border=0></a>';$jangsung_10 = '세역';
    $jangsung_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_04.gif alt=식신 border=0></a>';$jangsung_11 = '식신';
    $jangsung_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_05.gif alt=화개 border=0></a>';$jangsung_12 = '화개';
    $jangsung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_06.gif alt=겁살 border=0></a>';$jangsung_01 = '겁살';
    $jangsung_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_07.gif alt=재살 border=0></a>';$jangsung_02 = '재살';
    $jangsung_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_08.gif alt=천살 border=0></a>';$jangsung_03 = '천살';
    $jangsung_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_09.gif alt=지배 border=0></a>';$jangsung_04 = '지배';
    $jangsung_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_10.gif alt=함지 border=0></a>';$jangsung_05 = '함지';
    $jangsung_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_11.gif alt=월살 border=0></a>';$jangsung_06 = '월살';
    $jangsung_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_12.gif alt=망신 border=0></a>';$jangsung_07 = '망신';
}

if (($my_umyear_e == '亥')||($my_umyear_e == '卯')||($my_umyear_e == '未')) {
    $jangsung_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_01.gif alt=장성 border=0></a>';$jangsung_02 = '장성';
    $jangsung_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_02.gif alt=반안 border=0></a>';$jangsung_03 = '반안';
    $jangsung_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_03.gif alt=세역 border=0></a>';$jangsung_04 = '세역';
    $jangsung_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_04.gif alt=식신 border=0></a>';$jangsung_05 = '식신';
    $jangsung_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_05.gif alt=화개 border=0></a>';$jangsung_06 = '화개';
    $jangsung_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_06.gif alt=겁살 border=0></a>';$jangsung_07 = '겁살';
    $jangsung_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_07.gif alt=재살 border=0></a>';$jangsung_08 = '재살';
    $jangsung_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_08.gif alt=천살 border=0></a>';$jangsung_09 = '천살';
    $jangsung_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_09.gif alt=지배 border=0></a>';$jangsung_10 = '지배';
    $jangsung_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_10.gif alt=함지 border=0></a>';$jangsung_11 = '함지';
    $jangsung_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_11.gif alt=월살 border=0></a>';$jangsung_12 = '월살';
    $jangsung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_jangsung_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/jangsung_12.gif alt=망신 border=0></a>';$jangsung_01 = '망신';
}


########################################################박사12신

if ($nokjon_01) {
    if (($yangum == '양남')||($yangum == '음녀')) {
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_01 = '박사';
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_02 = '역사';
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_03 = '청룡';
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_04 = '소모';
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_05 = '장군';
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_06 = '주서';
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_07 = '비렴';
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_08 = '희신';
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_09 = '병부';
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_10 = '대모';
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_11 = '복병';
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_12 = '관부';
    }else{
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_01 = '박사';
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_12 = '역사';
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_11 = '청룡';
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_10 = '소모';
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_09 = '장군';
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_08 = '주서';
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_07 = '비렴';
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_06 = '희신';
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_05 = '병부';
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_04 = '대모';
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_03 = '복병';
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_02 = '관부';
    }
}

if ($nokjon_02) {
    if (($yangum == '양남')||($yangum == '음녀')) {
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_02 = '박사';
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_03 = '역사';
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_04 = '청룡';
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_05 = '소모';
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_06 = '장군';
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_07 = '주서';
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_08 = '비렴';
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_09 = '희신';
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_10 = '병부';
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_11 = '대모';
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_12 = '복병';
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_01 = '관부';
    }else{
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_02 = '박사';
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_01 = '역사';
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_12 = '청룡';
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_11 = '소모';
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_10 = '장군';
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_09 = '주서';
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_08 = '비렴';
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_07 = '희신';
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_06 = '병부';
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_05 = '대모';
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_04 = '복병';
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_03 = '관부';
    }
}

if ($nokjon_03) {
    if (($yangum == '양남')||($yangum == '음녀')) {
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_03 = '박사';
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_04 = '역사';
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_05 = '청룡';
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_06 = '소모';
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_07 = '장군';
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_08 = '주서';
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_09 = '비렴';
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_10 = '희신';
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_11 = '병부';
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_12 = '대모';
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_01 = '복병';
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_02 = '관부';
    }else{
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_03 = '박사';
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_02 = '역사';
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_01 = '청룡';
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_12 = '소모';
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_11 = '장군';
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_10 = '주서';
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_09 = '비렴';
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_08 = '희신';
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_07 = '병부';
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_06 = '대모';
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_05 = '복병';
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_04 = '관부';
    }
}

if ($nokjon_04) {
    if (($yangum == '양남')||($yangum == '음녀')) {
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_04 = '박사';
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_05 = '역사';
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_06 = '청룡';
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_07 = '소모';
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_08 = '장군';
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_09 = '주서';
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_10 = '비렴';
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_11 = '희신';
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_12 = '병부';
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_01 = '대모';
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_02 = '복병';
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_03 = '관부';
    }else{
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_04 = '박사';
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_03 = '역사';
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_02 = '청룡';
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_01 = '소모';
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_12 = '장군';
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_11 = '주서';
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_10 = '비렴';
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_09 = '희신';
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_08 = '병부';
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_07 = '대모';
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_06 = '복병';
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_05 = '관부';
    }
}

if ($nokjon_05) {
    if (($yangum == '양남')||($yangum == '음녀')) {
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_05 = '박사';
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_06 = '역사';
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_07 = '청룡';
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_08 = '소모';
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_09 = '장군';
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_10 = '주서';
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_11 = '비렴';
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_12 = '희신';
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_01 = '병부';
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_02 = '대모';
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_03 = '복병';
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_04 = '관부';
    }else{
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_05 = '박사';
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_04 = '역사';
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_03 = '청룡';
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_02 = '소모';
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_01 = '장군';
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_12 = '주서';
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_11 = '비렴';
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_10 = '희신';
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_09 = '병부';
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_08 = '대모';
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_07 = '복병';
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_06 = '관부';
    }
}

if ($nokjon_06) {
    if (($yangum == '양남')||($yangum == '음녀')) {
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_06 = '박사';
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_07 = '역사';
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_08 = '청룡';
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_09 = '소모';
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_10 = '장군';
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_11 = '주서';
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_12 = '비렴';
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_01 = '희신';
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_02 = '병부';
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_03 = '대모';
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_04 = '복병';
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_05 = '관부';
    }else{
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_06 = '박사';
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_05 = '역사';
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_04 = '청룡';
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_03 = '소모';
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_02 = '장군';
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_01 = '주서';
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_12 = '비렴';
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_11 = '희신';
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_10 = '병부';
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_09 = '대모';
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_08 = '복병';
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_07 = '관부';
    }
}

if ($nokjon_07) {
    if (($yangum == '양남')||($yangum == '음녀')) {
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_07 = '박사';
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_08 = '역사';
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_09 = '청룡';
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_10 = '소모';
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_11 = '장군';
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_12 = '주서';
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_01 = '비렴';
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_02 = '희신';
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_03 = '병부';
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_04 = '대모';
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_05 = '복병';
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_06 = '관부';
    }else{
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_07 = '박사';
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_06 = '역사';
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_05 = '청룡';
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_04 = '소모';
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_03 = '장군';
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_02 = '주서';
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_01 = '비렴';
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_12 = '희신';
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_11 = '병부';
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_10 = '대모';
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_09 = '복병';
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_08 = '관부';
    }
}

if ($nokjon_08) {
    if (($yangum == '양남')||($yangum == '음녀')) {
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_08 = '박사';
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_09 = '역사';
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_10 = '청룡';
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_11 = '소모';
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_12 = '장군';
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_01 = '주서';
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_02 = '비렴';
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_03 = '희신';
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_04 = '병부';
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_05 = '대모';
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_06 = '복병';
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_07 = '관부';
    }else{
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_08 = '박사';
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_07 = '역사';
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_06 = '청룡';
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_05 = '소모';
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_04 = '장군';
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_03 = '주서';
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_02 = '비렴';
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_01 = '희신';
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_12 = '병부';
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_11 = '대모';
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_10 = '복병';
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_09 = '관부';
    }
}

if ($nokjon_09) {
    if (($yangum == '양남')||($yangum == '음녀')) {
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_09 = '박사';
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_10 = '역사';
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_11 = '청룡';
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_12 = '소모';
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_01 = '장군';
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_02 = '주서';
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_03 = '비렴';
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_04 = '희신';
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_05 = '병부';
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_06 = '대모';
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_07 = '복병';
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_08 = '관부';
    }else{
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_09 = '박사';
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_08 = '역사';
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_07 = '청룡';
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_06 = '소모';
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_05 = '장군';
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_04 = '주서';
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_03 = '비렴';
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_02 = '희신';
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_01 = '병부';
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_12 = '대모';
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_11 = '복병';
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_10 = '관부';
    }
}

if ($nokjon_10) {
    if (($yangum == '양남')||($yangum == '음녀')) {
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_10 = '박사';
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_11 = '역사';
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_12 = '청룡';
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_01 = '소모';
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_02 = '장군';
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_03 = '주서';
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_04 = '비렴';
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_05 = '희신';
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_06 = '병부';
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_07 = '대모';
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_08 = '복병';
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_09 = '관부';
    }else{
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_10 = '박사';
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_09 = '역사';
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_08 = '청룡';
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_07 = '소모';
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_06 = '장군';
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_05 = '주서';
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_04 = '비렴';
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_03 = '희신';
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_02 = '병부';
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_01 = '대모';
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_12 = '복병';
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_11 = '관부';
    }
}

if ($nokjon_11) {
    if (($yangum == '양남')||($yangum == '음녀')) {
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_11 = '박사';
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_12 = '역사';
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_01 = '청룡';
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_02 = '소모';
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_03 = '장군';
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_04 = '주서';
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_05 = '비렴';
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_06 = '희신';
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_07 = '병부';
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_08 = '대모';
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_09 = '복병';
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_10 = '관부';
    }else{
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_11 = '박사';
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_10 = '역사';
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_09 = '청룡';
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_08 = '소모';
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_07 = '장군';
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_06 = '주서';
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_05 = '비렴';
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_04 = '희신';
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_03 = '병부';
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_02 = '대모';
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_01 = '복병';
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_12 = '관부';
    }
}

if ($nokjon_12) {
    if (($yangum == '양남')||($yangum == '음녀')) {
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_12 = '박사';
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_01 = '역사';
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_02 = '청룡';
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_03 = '소모';
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_04 = '장군';
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_05 = '주서';
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_06 = '비렴';
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_07 = '희신';
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_08 = '병부';
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_09 = '대모';
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_10 = '복병';
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_11 = '관부';
    }else{
    $baksa_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_01.gif alt=박사 border=0></a>';$baksa_12 = '박사';
    $baksa_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_02.gif alt=역사 border=0></a>';$baksa_11 = '역사';
    $baksa_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_03.gif alt=청룡 border=0></a>';$baksa_10 = '청룡';
    $baksa_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_04.gif alt=소모 border=0></a>';$baksa_09 = '소모';
    $baksa_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_05.gif alt=장군 border=0></a>';$baksa_08 = '장군';
    $baksa_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_06.gif alt=주서 border=0></a>';$baksa_07 = '주서';
    $baksa_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_07.gif alt=비렴 border=0></a>';$baksa_06 = '비렴';
    $baksa_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_08.gif alt=희신 border=0></a>';$baksa_05 = '희신';
    $baksa_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_09.gif alt=병부 border=0></a>';$baksa_04 = '병부';
    $baksa_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_10.gif alt=대모 border=0></a>';$baksa_03 = '대모';
    $baksa_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_11.gif alt=복병 border=0></a>';$baksa_02 = '복병';
    $baksa_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_baksa_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/baksa_12.gif alt=관부 border=0></a>';$baksa_01 = '관부';
    }
}


#####################################################################################################
//$haesin_01$yeanhae_01$chenwol_01$eumsal_01$cheanmu_01
########################################################################삼방사정 그림
if (!$choice2) {
if ($myung_01) {$img_back = 'sambang_21C_01.gif';$bgcolor_01 = 'CCCCCC';$bgcolor_05 = 'CCCCCC';$bgcolor_07 = 'CCCCCC';$bgcolor_09 = 'CCCCCC';}
if ($myung_02) {$img_back = 'sambang_21C_02.gif';$bgcolor_02 = 'CCCCCC';$bgcolor_06 = 'CCCCCC';$bgcolor_08 = 'CCCCCC';$bgcolor_10 = 'CCCCCC';}

if ($myung_03) {$img_back = 'sambang_21C_03.gif';$bgcolor_03 = 'CCCCCC';$bgcolor_07 = 'CCCCCC';$bgcolor_09 = 'CCCCCC';$bgcolor_11 = 'CCCCCC';}

if ($myung_04) {$img_back = 'sambang_21C_04.gif';$bgcolor_04 = 'CCCCCC';$bgcolor_08 = 'CCCCCC';$bgcolor_10 = 'CCCCCC';$bgcolor_12 = 'CCCCCC';}
if ($myung_05) {$img_back = 'sambang_21C_05.gif';$bgcolor_05 = 'CCCCCC';$bgcolor_09 = 'CCCCCC';$bgcolor_11 = 'CCCCCC';$bgcolor_01 = 'CCCCCC';}
if ($myung_06) {$img_back = 'sambang_21C_06.gif';$bgcolor_06 = 'CCCCCC';$bgcolor_10 = 'CCCCCC';$bgcolor_12 = 'CCCCCC';$bgcolor_02 = 'CCCCCC';}
if ($myung_07) {$img_back = 'sambang_21C_07.gif';$bgcolor_07 = 'CCCCCC';$bgcolor_11 = 'CCCCCC';$bgcolor_01 = 'CCCCCC';$bgcolor_03 = 'CCCCCC';}
if ($myung_08) {$img_back = 'sambang_21C_08.gif';$bgcolor_08 = 'CCCCCC';$bgcolor_12 = 'CCCCCC';$bgcolor_02 = 'CCCCCC';$bgcolor_04 = 'CCCCCC';}
if ($myung_09) {$img_back = 'sambang_21C_09.gif';$bgcolor_09 = 'CCCCCC';$bgcolor_01 = 'CCCCCC';$bgcolor_03 = 'CCCCCC';$bgcolor_05 = 'CCCCCC';}
if ($myung_10) {$img_back = 'sambang_21C_10.gif';$bgcolor_10 = 'CCCCCC';$bgcolor_02 = 'CCCCCC';$bgcolor_04 = 'CCCCCC';$bgcolor_06 = 'CCCCCC';}
if ($myung_11) {$img_back = 'sambang_21C_11.gif';$bgcolor_11 = 'CCCCCC';$bgcolor_03 = 'CCCCCC';$bgcolor_05 = 'CCCCCC';$bgcolor_07 = 'CCCCCC';}
if ($myung_12) {$img_back = 'sambang_21C_12.gif';$bgcolor_12 = 'CCCCCC';$bgcolor_04 = 'CCCCCC';$bgcolor_06 = 'CCCCCC';$bgcolor_08 = 'CCCCCC';}
}


if ($choice2 == 寅) {$img_back = 'sambang_21C_01.gif';$bgcolor_01 = 'CCCCCC';$bgcolor_05 = 'CCCCCC';$bgcolor_07 = 'CCCCCC';$bgcolor_09 = 'CCCCCC';}
if ($choice2 == 卯) {$img_back = 'sambang_21C_02.gif';$bgcolor_02 = 'CCCCCC';$bgcolor_06 = 'CCCCCC';$bgcolor_08 = 'CCCCCC';$bgcolor_10 = 'CCCCCC';}
if ($choice2 == 辰) {$img_back = 'sambang_21C_03.gif';$bgcolor_03 = 'CCCCCC';$bgcolor_07 = 'CCCCCC';$bgcolor_09 = 'CCCCCC';$bgcolor_11 = 'CCCCCC';}
if ($choice2 == 巳) {$img_back = 'sambang_21C_04.gif';$bgcolor_04 = 'CCCCCC';$bgcolor_08 = 'CCCCCC';$bgcolor_10 = 'CCCCCC';$bgcolor_12 = 'CCCCCC';}
if ($choice2 == 午) {$img_back = 'sambang_21C_05.gif';$bgcolor_05 = 'CCCCCC';$bgcolor_09 = 'CCCCCC';$bgcolor_11 = 'CCCCCC';$bgcolor_01 = 'CCCCCC';}
if ($choice2 == 未) {$img_back = 'sambang_21C_06.gif';$bgcolor_06 = 'CCCCCC';$bgcolor_10 = 'CCCCCC';$bgcolor_12 = 'CCCCCC';$bgcolor_02 = 'CCCCCC';}
if ($choice2 == 申) {$img_back = 'sambang_21C_07.gif';$bgcolor_07 = 'CCCCCC';$bgcolor_11 = 'CCCCCC';$bgcolor_01 = 'CCCCCC';$bgcolor_03 = 'CCCCCC';}
if ($choice2 == 酉) {$img_back = 'sambang_21C_08.gif';$bgcolor_08 = 'CCCCCC';$bgcolor_12 = 'CCCCCC';$bgcolor_02 = 'CCCCCC';$bgcolor_04 = 'CCCCCC';}
if ($choice2 == 戌) {$img_back = 'sambang_21C_09.gif';$bgcolor_09 = 'CCCCCC';$bgcolor_01 = 'CCCCCC';$bgcolor_03 = 'CCCCCC';$bgcolor_05 = 'CCCCCC';}
if ($choice2 == 亥) {$img_back = 'sambang_21C_10.gif';$bgcolor_10 = 'CCCCCC';$bgcolor_02 = 'CCCCCC';$bgcolor_04 = 'CCCCCC';$bgcolor_06 = 'CCCCCC';}
if ($choice2 == 子) {$img_back = 'sambang_21C_11.gif';$bgcolor_11 = 'CCCCCC';$bgcolor_03 = 'CCCCCC';$bgcolor_05 = 'CCCCCC';$bgcolor_07 = 'CCCCCC';}
if ($choice2 == 丑) {$img_back = 'sambang_21C_12.gif';$bgcolor_12 = 'CCCCCC';$bgcolor_04 = 'CCCCCC';$bgcolor_06 = 'CCCCCC';$bgcolor_08 = 'CCCCCC';}



$choice4 = substr($mm,6,2);
//echo "////////$choice4";

if ($choice4 == 寅) {
$dae01 = '大命';
$dae02 = '大父';
$dae03 = '大福';
$dae04 = '大田';
$dae05 = '大官';
$dae06 = '大奴';
$dae07 = '大遷';
$dae08 = '大疾';
$dae09 = '大財';
$dae10 = '大子';
$dae11 = '大夫';
$dae12 = '大兄';

$dae01_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_myung.gif alt=대한명궁 border=0>';
$dae02_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_01.gif alt=대한부모궁 border=0>';
$dae03_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_02.gif alt=대한복덕궁 border=0>';
$dae04_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_03.gif alt=대한전택궁 border=0>';
$dae05_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_04.gif alt=대한관록궁 border=0>';
$dae06_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_05.gif alt=대한노복궁 border=0>';
$dae07_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_06.gif alt=대한천이궁 border=0>';
$dae08_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_07.gif alt=대한질액궁 border=0>';
$dae09_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_08.gif alt=대한재백궁 border=0>';
$dae10_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_09.gif alt=대한자녀궁 border=0>';
$dae11_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_10.gif alt=대한부처궁 border=0>';
$dae12_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_11.gif alt=대한형제궁 border=0>';
}
if ($choice4 == 卯) {
$dae02 = '大命';
$dae03 = '大父';
$dae04 = '大福';
$dae05 = '大田';
$dae06 = '大官';
$dae07 = '大奴';
$dae08 = '大遷';
$dae09 = '大疾';
$dae10 = '大財';
$dae11 = '大子';
$dae12 = '大夫';
$dae01 = '大兄';

$dae02_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_myung.gif alt=대한명궁 border=0>';
$dae03_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_01.gif alt=대한부모궁 border=0>';
$dae04_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_02.gif alt=대한복덕궁 border=0>';
$dae05_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_03.gif alt=대한전택궁 border=0>';
$dae06_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_04.gif alt=대한관록궁 border=0>';
$dae07_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_05.gif alt=대한노복궁 border=0>';
$dae08_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_06.gif alt=대한천이궁 border=0>';
$dae09_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_07.gif alt=대한질액궁 border=0>';
$dae10_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_08.gif alt=대한재백궁 border=0>';
$dae11_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_09.gif alt=대한자녀궁 border=0>';
$dae12_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_10.gif alt=대한부처궁 border=0>';
$dae01_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_11.gif alt=대한형제궁 border=0>';
}
if ($choice4 == 辰) {
$dae03 = '大命';
$dae04 = '大父';
$dae05 = '大福';
$dae06 = '大田';
$dae07 = '大官';
$dae08 = '大奴';
$dae09 = '大遷';
$dae10 = '大疾';
$dae11 = '大財';
$dae12 = '大子';
$dae01 = '大夫';
$dae02 = '大兄';

$dae03_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_myung.gif alt=대한명궁 border=0>';
$dae04_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_01.gif alt=대한부모궁 border=0>';
$dae05_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_02.gif alt=대한복덕궁 border=0>';
$dae06_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_03.gif alt=대한전택궁 border=0>';
$dae07_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_04.gif alt=대한관록궁 border=0>';
$dae08_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_05.gif alt=대한노복궁 border=0>';
$dae09_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_06.gif alt=대한천이궁 border=0>';
$dae10_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_07.gif alt=대한질액궁 border=0>';
$dae11_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_08.gif alt=대한재백궁 border=0>';
$dae12_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_09.gif alt=대한자녀궁 border=0>';
$dae01_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_10.gif alt=대한부처궁 border=0>';
$dae02_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_11.gif alt=대한형제궁 border=0>';
}
if ($choice4 == 巳) {
$dae04 = '大命';
$dae05 = '大父';
$dae06 = '大福';
$dae07 = '大田';
$dae08 = '大官';
$dae09 = '大奴';
$dae10 = '大遷';
$dae11 = '大疾';
$dae12 = '大財';
$dae01 = '大子';
$dae02 = '大夫';
$dae03 = '大兄';

$dae04_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_myung.gif alt=대한명궁 border=0>';
$dae05_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_01.gif alt=대한부모궁 border=0>';
$dae06_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_02.gif alt=대한복덕궁 border=0>';
$dae07_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_03.gif alt=대한전택궁 border=0>';
$dae08_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_04.gif alt=대한관록궁 border=0>';
$dae09_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_05.gif alt=대한노복궁 border=0>';
$dae10_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_06.gif alt=대한천이궁 border=0>';
$dae11_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_07.gif alt=대한질액궁 border=0>';
$dae12_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_08.gif alt=대한재백궁 border=0>';
$dae01_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_09.gif alt=대한자녀궁 border=0>';
$dae02_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_10.gif alt=대한부처궁 border=0>';
$dae03_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_11.gif alt=대한형제궁 border=0>';
}
if ($choice4 == 午) {
$dae05 = '大命';
$dae06 = '大父';
$dae07 = '大福';
$dae08 = '大田';
$dae09 = '大官';
$dae10 = '大奴';
$dae11 = '大遷';
$dae12 = '大疾';
$dae01 = '大財';
$dae02 = '大子';
$dae03 = '大夫';
$dae04 = '大兄';

$dae05_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_myung.gif alt=대한명궁 border=0>';
$dae06_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_01.gif alt=대한부모궁 border=0>';
$dae07_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_02.gif alt=대한복덕궁 border=0>';
$dae08_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_03.gif alt=대한전택궁 border=0>';
$dae09_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_04.gif alt=대한관록궁 border=0>';
$dae10_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_05.gif alt=대한노복궁 border=0>';
$dae11_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_06.gif alt=대한천이궁 border=0>';
$dae12_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_07.gif alt=대한질액궁 border=0>';
$dae01_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_08.gif alt=대한재백궁 border=0>';
$dae02_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_09.gif alt=대한자녀궁 border=0>';
$dae03_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_10.gif alt=대한부처궁 border=0>';
$dae04_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_11.gif alt=대한형제궁 border=0>';
}
if ($choice4 == 未) {
$dae06 = '大命';
$dae07 = '大父';
$dae08 = '大福';
$dae09 = '大田';
$dae10 = '大官';
$dae11 = '大奴';
$dae12 = '大遷';
$dae01 = '大疾';
$dae02 = '大財';
$dae03 = '大子';
$dae04 = '大夫';
$dae05 = '大兄';

$dae06_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_myung.gif alt=대한명궁 border=0>';
$dae07_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_01.gif alt=대한부모궁 border=0>';
$dae08_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_02.gif alt=대한복덕궁 border=0>';
$dae09_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_03.gif alt=대한전택궁 border=0>';
$dae10_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_04.gif alt=대한관록궁 border=0>';
$dae11_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_05.gif alt=대한노복궁 border=0>';
$dae12_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_06.gif alt=대한천이궁 border=0>';
$dae01_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_07.gif alt=대한질액궁 border=0>';
$dae02_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_08.gif alt=대한재백궁 border=0>';
$dae03_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_09.gif alt=대한자녀궁 border=0>';
$dae04_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_10.gif alt=대한부처궁 border=0>';
$dae05_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_11.gif alt=대한형제궁 border=0>';
}
if ($choice4 == 申) {
$dae07 = '大命';
$dae08 = '大父';
$dae09 = '大福';
$dae10 = '大田';
$dae11 = '大官';
$dae12 = '大奴';
$dae01 = '大遷';
$dae02 = '大疾';
$dae03 = '大財';
$dae04 = '大子';
$dae05 = '大夫';
$dae06 = '大兄';

$dae07_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_myung.gif alt=대한명궁 border=0>';
$dae08_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_01.gif alt=대한부모궁 border=0>';
$dae09_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_02.gif alt=대한복덕궁 border=0>';
$dae10_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_03.gif alt=대한전택궁 border=0>';
$dae11_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_04.gif alt=대한관록궁 border=0>';
$dae12_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_05.gif alt=대한노복궁 border=0>';
$dae01_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_06.gif alt=대한천이궁 border=0>';
$dae02_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_07.gif alt=대한질액궁 border=0>';
$dae03_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_08.gif alt=대한재백궁 border=0>';
$dae04_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_09.gif alt=대한자녀궁 border=0>';
$dae05_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_10.gif alt=대한부처궁 border=0>';
$dae06_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_11.gif alt=대한형제궁 border=0>';
}
if ($choice4 == 酉) {
$dae08 = '大命';
$dae09 = '大父';
$dae10 = '大福';
$dae11 = '大田';
$dae12 = '大官';
$dae01 = '大奴';
$dae02 = '大遷';
$dae03 = '大疾';
$dae04 = '大財';
$dae05 = '大子';
$dae06 = '大夫';
$dae07 = '大兄';

$dae08_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_myung.gif alt=대한명궁 border=0>';
$dae09_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_01.gif alt=대한부모궁 border=0>';
$dae10_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_02.gif alt=대한복덕궁 border=0>';
$dae11_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_03.gif alt=대한전택궁 border=0>';
$dae12_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_04.gif alt=대한관록궁 border=0>';
$dae01_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_05.gif alt=대한노복궁 border=0>';
$dae02_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_06.gif alt=대한천이궁 border=0>';
$dae03_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_07.gif alt=대한질액궁 border=0>';
$dae04_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_08.gif alt=대한재백궁 border=0>';
$dae05_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_09.gif alt=대한자녀궁 border=0>';
$dae06_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_10.gif alt=대한부처궁 border=0>';
$dae07_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_11.gif alt=대한형제궁 border=0>';
}
if ($choice4 == 戌) {
$dae09 = '大命';
$dae10 = '大父';
$dae11 = '大福';
$dae12 = '大田';
$dae01 = '大官';
$dae02 = '大奴';
$dae03 = '大遷';
$dae04 = '大疾';
$dae05 = '大財';
$dae06 = '大子';
$dae07 = '大夫';
$dae08 = '大兄';

$dae09_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_myung.gif alt=대한명궁 border=0>';
$dae10_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_01.gif alt=대한부모궁 border=0>';
$dae11_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_02.gif alt=대한복덕궁 border=0>';
$dae12_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_03.gif alt=대한전택궁 border=0>';
$dae01_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_04.gif alt=대한관록궁 border=0>';
$dae02_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_05.gif alt=대한노복궁 border=0>';
$dae03_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_06.gif alt=대한천이궁 border=0>';
$dae04_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_07.gif alt=대한질액궁 border=0>';
$dae05_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_08.gif alt=대한재백궁 border=0>';
$dae06_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_09.gif alt=대한자녀궁 border=0>';
$dae07_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_10.gif alt=대한부처궁 border=0>';
$dae08_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_11.gif alt=대한형제궁 border=0>';
}
if ($choice4 == 亥) {
$dae10 = '大命';
$dae11 = '大父';
$dae12 = '大福';
$dae01 = '大田';
$dae02 = '大官';
$dae03 = '大奴';
$dae04 = '大遷';
$dae05 = '大疾';
$dae06 = '大財';
$dae07 = '大子';
$dae08 = '大夫';
$dae09 = '大兄';

$dae10_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_myung.gif alt=대한명궁 border=0>';
$dae11_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_01.gif alt=대한부모궁 border=0>';
$dae12_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_02.gif alt=대한복덕궁 border=0>';
$dae01_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_03.gif alt=대한전택궁 border=0>';
$dae02_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_04.gif alt=대한관록궁 border=0>';
$dae03_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_05.gif alt=대한노복궁 border=0>';
$dae04_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_06.gif alt=대한천이궁 border=0>';
$dae05_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_07.gif alt=대한질액궁 border=0>';
$dae06_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_08.gif alt=대한재백궁 border=0>';
$dae07_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_09.gif alt=대한자녀궁 border=0>';
$dae08_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_10.gif alt=대한부처궁 border=0>';
$dae09_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_11.gif alt=대한형제궁 border=0>';
}
if ($choice4 == 子) {
$dae11 = '大命';
$dae12 = '大父';
$dae01 = '大福';
$dae02 = '大田';
$dae03 = '大官';
$dae04 = '大奴';
$dae05 = '大遷';
$dae06 = '大疾';
$dae07 = '大財';
$dae08 = '大子';
$dae09 = '大夫';
$dae10 = '大兄';

$dae11_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_myung.gif alt=대한명궁 border=0>';
$dae12_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_01.gif alt=대한부모궁 border=0>';
$dae01_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_02.gif alt=대한복덕궁 border=0>';
$dae02_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_03.gif alt=대한전택궁 border=0>';
$dae03_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_04.gif alt=대한관록궁 border=0>';
$dae04_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_05.gif alt=대한노복궁 border=0>';
$dae05_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_06.gif alt=대한천이궁 border=0>';
$dae06_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_07.gif alt=대한질액궁 border=0>';
$dae07_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_08.gif alt=대한재백궁 border=0>';
$dae08_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_09.gif alt=대한자녀궁 border=0>';
$dae09_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_10.gif alt=대한부처궁 border=0>';
$dae10_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_11.gif alt=대한형제궁 border=0>';
}
if ($choice4 == 丑) {
$dae12 = '大命';
$dae01 = '大父';
$dae02 = '大福';
$dae03 = '大田';
$dae04 = '大官';
$dae05 = '大奴';
$dae06 = '大遷';
$dae07 = '大疾';
$dae08 = '大財';
$dae09 = '大子';
$dae10 = '大夫';
$dae11 = '大兄';

$dae12_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_myung.gif alt=대한명궁 border=0>';
$dae01_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_01.gif alt=대한부모궁 border=0>';
$dae02_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_02.gif alt=대한복덕궁 border=0>';
$dae03_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_03.gif alt=대한전택궁 border=0>';
$dae04_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_04.gif alt=대한관록궁 border=0>';
$dae05_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_05.gif alt=대한노복궁 border=0>';
$dae06_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_06.gif alt=대한천이궁 border=0>';
$dae07_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_07.gif alt=대한질액궁 border=0>';
$dae08_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_08.gif alt=대한재백궁 border=0>';
$dae09_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_09.gif alt=대한자녀궁 border=0>';
$dae10_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_10.gif alt=대한부처궁 border=0>';
$dae11_disp = '<img src=/images/result_img/jum_img/hanja_img/dae_gung_11.gif alt=대한형제궁 border=0>';
}


##################################################################################################
#########################################십이운성베치

if (($sex == '남') && (($my_umyear_h == '甲')||($my_umyear_h == '丙')||($my_umyear_h == '戊')||($my_umyear_h == '庚')||($my_umyear_h == '壬')))
{$yangum = '양남';}

if (($sex == '남') && (($my_umyear_h == '乙')||($my_umyear_h == '丁')||($my_umyear_h == '己')||($my_umyear_h == '辛')||($my_umyear_h == '癸')))
{$yangum = '음남';}

if (($sex == '여') && (($my_umyear_h == '甲')||($my_umyear_h == '丙')||($my_umyear_h == '戊')||($my_umyear_h == '庚')||($my_umyear_h == '壬')))
{$yangum = '양녀';}

if (($sex == '여') && (($my_umyear_h == '乙')||($my_umyear_h == '丁')||($my_umyear_h == '己')||($my_umyear_h == '辛')||($my_umyear_h == '癸')))
{$yangum = '음녀';}





if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '火6局')) {
                                        $unsung_01 = '生';$unsung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_01.gif alt=장생 border=0></a>';
                                        $unsung_02 = '浴';$unsung_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_02.gif alt=목욕 border=0></a>';
					$unsung_03 = '帶';$unsung_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_03.gif alt=관대 border=0></a>';
					$unsung_04 = '冠';$unsung_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_04.gif alt=임관 border=0></a>';
					$unsung_05 = '旺';$unsung_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_05.gif alt=제왕 border=0></a>';
					$unsung_06 = '衰';$unsung_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_06.gif alt=쇠 border=0></a>';
					$unsung_07 = '病';$unsung_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_07.gif alt=병 border=0></a>';
					$unsung_08 = '死';$unsung_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_08.gif alt=사 border=0></a>';
					$unsung_09 = '墓';$unsung_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_09.gif alt=묘 border=0></a>';
					$unsung_10 = '絶';$unsung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_10.gif alt=절 border=0></a>';
					$unsung_11 = '胎';$unsung_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_11.gif alt=태 border=0></a>';
					$unsung_12 = '養';$unsung_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_12.gif alt=양 border=0>';}

if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '火6局')) {
                                        $unsung_01 = '生';$unsung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_01.gif alt=장생 border=0></a>';
                                        $unsung_12 = '浴';$unsung_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_02.gif alt=목욕 border=0></a>';
					$unsung_11 = '帶';$unsung_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_03.gif alt=관대 border=0></a>';
					$unsung_10 = '冠';$unsung_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_04.gif alt=임관 border=0></a>';
					$unsung_09 = '旺';$unsung_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_05.gif alt=제왕 border=0></a>';
					$unsung_08 = '衰';$unsung_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_06.gif alt=쇠 border=0></a>';
					$unsung_07 = '病';$unsung_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_07.gif alt=병 border=0></a>';
					$unsung_06 = '死';$unsung_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_08.gif alt=사 border=0></a>';
					$unsung_05 = '墓';$unsung_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_09.gif alt=묘 border=0></a>';
					$unsung_04 = '絶';$unsung_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_10.gif alt=절 border=0></a>';
					$unsung_03 = '胎';$unsung_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_11.gif alt=태 border=0></a>';
					$unsung_02 = '養';$unsung_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_12.gif alt=양 border=0>';}


if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '土5局')) {
                                        $unsung_07 = '生';$unsung_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_01.gif alt=장생 border=0></a>';
                                        $unsung_08 = '浴';$unsung_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_02.gif alt=목욕 border=0></a>';
					$unsung_09 = '帶';$unsung_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_03.gif alt=관대 border=0></a>';
					$unsung_10 = '冠';$unsung_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_04.gif alt=임관 border=0></a>';
					$unsung_11 = '旺';$unsung_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_05.gif alt=제왕 border=0></a>';
					$unsung_12 = '衰';$unsung_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_06.gif alt=쇠 border=0></a>';
					$unsung_01 = '病';$unsung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_07.gif alt=병 border=0></a>';
					$unsung_02 = '死';$unsung_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_08.gif alt=사 border=0></a>';
					$unsung_03 = '墓';$unsung_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_09.gif alt=묘 border=0></a>';
					$unsung_04 = '絶';$unsung_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_10.gif alt=절 border=0></a>';
					$unsung_05 = '胎';$unsung_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_11.gif alt=태 border=0></a>';
					$unsung_06 = '養';$unsung_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_12.gif alt=양 border=0>';}

if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '土5局')) {
                                        $unsung_07 = '生';$unsung_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_01.gif alt=장생 border=0></a>';
                                        $unsung_06 = '浴';$unsung_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_02.gif alt=목욕 border=0></a>';
					$unsung_05 = '帶';$unsung_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_03.gif alt=관대 border=0></a>';
					$unsung_04 = '冠';$unsung_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_04.gif alt=임관 border=0></a>';
					$unsung_03 = '旺';$unsung_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_05.gif alt=제왕 border=0></a>';
					$unsung_02 = '衰';$unsung_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_06.gif alt=쇠 border=0></a>';
					$unsung_01 = '病';$unsung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_07.gif alt=병 border=0></a>';
					$unsung_12 = '死';$unsung_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_08.gif alt=사 border=0></a>';
					$unsung_11 = '墓';$unsung_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_09.gif alt=묘 border=0></a>';
					$unsung_10 = '絶';$unsung_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_10.gif alt=절 border=0></a>';
					$unsung_09 = '胎';$unsung_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_11.gif alt=태 border=0></a>';
					$unsung_08 = '養';$unsung_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_12.gif alt=양 border=0>';}





if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '金4局')) {
                                        $unsung_04 = '生';$unsung_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_01.gif alt=장생 border=0></a>';
                                        $unsung_05 = '浴';$unsung_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_02.gif alt=목욕 border=0></a>';
					$unsung_06 = '帶';$unsung_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_03.gif alt=관대 border=0></a>';
					$unsung_07 = '冠';$unsung_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_04.gif alt=임관 border=0></a>';
					$unsung_08 = '旺';$unsung_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_05.gif alt=제왕 border=0></a>';
					$unsung_09 = '衰';$unsung_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_06.gif alt=쇠 border=0></a>';
					$unsung_10 = '病';$unsung_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_07.gif alt=병 border=0></a>';
					$unsung_11 = '死';$unsung_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_08.gif alt=사 border=0></a>';
					$unsung_12 = '墓';$unsung_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_09.gif alt=묘 border=0></a>';
					$unsung_01 = '絶';$unsung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_10.gif alt=절 border=0></a>';
					$unsung_02 = '胎';$unsung_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_11.gif alt=태 border=0></a>';
					$unsung_03 = '養';$unsung_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_12.gif alt=양 border=0>';}

if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '金4局')) {
                                        $unsung_04 = '生';$unsung_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_01.gif alt=장생 border=0></a>';
                                        $unsung_03 = '浴';$unsung_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_02.gif alt=목욕 border=0></a>';
					$unsung_02 = '帶';$unsung_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_03.gif alt=관대 border=0></a>';
					$unsung_01 = '冠';$unsung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_04.gif alt=임관 border=0></a>';
					$unsung_12 = '旺';$unsung_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_05.gif alt=제왕 border=0></a>';
					$unsung_11 = '衰';$unsung_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_06.gif alt=쇠 border=0></a>';
					$unsung_10 = '病';$unsung_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_07.gif alt=병 border=0></a>';
					$unsung_09 = '死';$unsung_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_08.gif alt=사 border=0></a>';
					$unsung_08 = '墓';$unsung_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_09.gif alt=묘 border=0></a>';
					$unsung_07 = '絶';$unsung_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_10.gif alt=절 border=0></a>';
					$unsung_06 = '胎';$unsung_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_11.gif alt=태 border=0></a>';
					$unsung_05 = '養';$unsung_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_12.gif alt=양 border=0>';}

if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '水2局')) {
                                        $unsung_07 = '生';$unsung_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_01.gif alt=장생 border=0></a>';
                                        $unsung_08 = '浴';$unsung_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_02.gif alt=목욕 border=0></a>';
					$unsung_09 = '帶';$unsung_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_03.gif alt=관대 border=0></a>';
					$unsung_10 = '冠';$unsung_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_04.gif alt=임관 border=0></a>';
					$unsung_11 = '旺';$unsung_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_05.gif alt=제왕 border=0></a>';
					$unsung_12 = '衰';$unsung_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_06.gif alt=쇠 border=0></a>';
					$unsung_01 = '病';$unsung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_07.gif alt=병 border=0></a>';
					$unsung_02 = '死';$unsung_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_08.gif alt=사 border=0></a>';
					$unsung_03 = '墓';$unsung_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_09.gif alt=묘 border=0></a>';
					$unsung_04 = '絶';$unsung_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_10.gif alt=절 border=0></a>';
					$unsung_05 = '胎';$unsung_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_11.gif alt=태 border=0></a>';
					$unsung_06 = '養';$unsung_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_12.gif alt=양 border=0>';}

if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '水2局')) {
                                        $unsung_07 = '生';$unsung_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_01.gif alt=장생 border=0></a>';
                                        $unsung_06 = '浴';$unsung_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_02.gif alt=목욕 border=0></a>';
					$unsung_05 = '帶';$unsung_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_03.gif alt=관대 border=0></a>';
					$unsung_04 = '冠';$unsung_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_04.gif alt=임관 border=0></a>';
					$unsung_03 = '旺';$unsung_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_05.gif alt=제왕 border=0></a>';
					$unsung_02 = '衰';$unsung_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_06.gif alt=쇠 border=0></a>';
					$unsung_01 = '病';$unsung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_07.gif alt=병 border=0></a>';
					$unsung_12 = '死';$unsung_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_08.gif alt=사 border=0></a>';
					$unsung_11 = '墓';$unsung_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_09.gif alt=묘 border=0></a>';
					$unsung_10 = '絶';$unsung_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_10.gif alt=절 border=0></a>';
					$unsung_09 = '胎';$unsung_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_11.gif alt=태 border=0></a>';
					$unsung_08 = '養';$unsung_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_12.gif alt=양 border=0>';}

if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '木3局')) {
                                        $unsung_10 = '生';$unsung_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_01.gif alt=장생 border=0></a>';
                                        $unsung_11 = '浴';$unsung_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_02.gif alt=목욕 border=0></a>';
					$unsung_12 = '帶';$unsung_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_03.gif alt=관대 border=0></a>';
					$unsung_01 = '冠';$unsung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_04.gif alt=임관 border=0></a>';
					$unsung_02 = '旺';$unsung_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_05.gif alt=제왕 border=0></a>';
					$unsung_03 = '衰';$unsung_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_06.gif alt=쇠 border=0></a>';
					$unsung_04 = '病';$unsung_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_07.gif alt=병 border=0></a>';
					$unsung_05 = '死';$unsung_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_08.gif alt=사 border=0></a>';
					$unsung_06 = '墓';$unsung_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_09.gif alt=묘 border=0></a>';
					$unsung_07 = '絶';$unsung_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_10.gif alt=절 border=0></a>';
					$unsung_08 = '胎';$unsung_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_11.gif alt=태 border=0></a>';
					$unsung_09 = '養';$unsung_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_12.gif alt=양 border=0>';}

if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '木3局')) {
                                        $unsung_10 = '生';$unsung_10_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_01.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_01.gif alt=장생 border=0></a>';
                                        $unsung_09 = '浴';$unsung_09_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_02.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_02.gif alt=목욕 border=0></a>';
					$unsung_08 = '帶';$unsung_08_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_03.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_03.gif alt=관대 border=0></a>';
					$unsung_07 = '冠';$unsung_07_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_04.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_04.gif alt=임관 border=0></a>';
					$unsung_06 = '旺';$unsung_06_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_05.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_05.gif alt=제왕 border=0></a>';
					$unsung_05 = '衰';$unsung_05_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_06.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_06.gif alt=쇠 border=0></a>';
					$unsung_04 = '病';$unsung_04_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_07.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_07.gif alt=병 border=0></a>';
					$unsung_03 = '死';$unsung_03_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_08.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_08.gif alt=사 border=0></a>';
					$unsung_02 = '墓';$unsung_02_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_09.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_09.gif alt=묘 border=0></a>';
					$unsung_01 = '絶';$unsung_01_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_10.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_10.gif alt=절 border=0></a>';
					$unsung_12 = '胎';$unsung_12_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_11.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_11.gif alt=태 border=0></a>';
					$unsung_11 = '養';$unsung_11_disp = '<a href=javascript:OpenWin(\'/UNSE_DATA/etc/J016_data/sung_unsung_12.php\') onfocus=this.blur();><img src=/images/result_img/jum_img/hanja_img/unsung_12.gif alt=양 border=0>';}

##############################################################################대한운 계산
if ($myung_01) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '火6局')) {$daehan_01 = '6~15';
			                                                                                                             $daehan_02 = '16~25';
																     $daehan_03 = '26~35';
			                                                                                                              $daehan_04 = '36~45';
																      $daehan_05 = '46~55';
																      $daehan_06 = '56~65';
																      $daehan_07 = '66~75';
																      $daehan_08 = '76~85';
																      $daehan_09 = '86~95';
																      $daehan_10 = '96~';
																      $daehan_11 = '';
																      $daehan_12 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '火6局')) {$daehan_01 = '6~15';
			                                                                                                             $daehan_12 = '16~25';
																     $daehan_11 = '26~35';
			                                                                                                              $daehan_10 = '36~45';
																      $daehan_09 = '46~55';
																      $daehan_08 = '56~65';
																      $daehan_07 = '66~75';
																      $daehan_06 = '76~85';
																      $daehan_05 = '86~95';
																      $daehan_04 = '96';
																      $daehan_03 = '';
																      $daehan_02 = '';
																      }
}

######################################
if ($myung_01) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '水2局')) {$daehan_01 = '2~11';
			                                                                                                             $daehan_02 = '12~21';
																     $daehan_03 = '22~31';
			                                                                                                              $daehan_04 = '32~41';
																      $daehan_05 = '42~51';
																      $daehan_06 = '52~61';
																      $daehan_07 = '62~71';
																      $daehan_08 = '72~81';
																      $daehan_09 = '82~91';
																      $daehan_10 = '92~';
																      $daehan_11 = '';
																      $daehan_12 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '水2局')) {$daehan_01 = '2~11';
			                                                                                                             $daehan_12 = '12~21';
																     $daehan_11 = '22~31';
			                                                                                                              $daehan_10 = '32~41';
																      $daehan_09 = '42~51';
																      $daehan_08 = '52~61';
																      $daehan_07 = '62~71';
																      $daehan_06 = '72~81';
																      $daehan_05 = '82~91';
																      $daehan_04 = '92~';
																      $daehan_03 = '';
																      $daehan_02 = '';
																      }
}

#########################################
if ($myung_01) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '土5局')) {$daehan_01 = '5~14';
			                                                                                                             $daehan_02 = '15~24';
																     $daehan_03 = '25~34';
			                                                                                                              $daehan_04 = '35~44';
																      $daehan_05 = '45~54';
																      $daehan_06 = '55~64';
																      $daehan_07 = '65~74';
																      $daehan_08 = '75~84';
																      $daehan_09 = '85~94';
																      $daehan_10 = '95~';
																      $daehan_11 = '';
																      $daehan_12 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '土5局')) {$daehan_01 = '5~14';
			                                                                                                             $daehan_12 = '15~24';
																     $daehan_11 = '25~34';
			                                                                                                              $daehan_10 = '35~44';
																      $daehan_09 = '45~54';
																      $daehan_08 = '55~64';
																      $daehan_07 = '65~74';
																      $daehan_06 = '75~84';
																      $daehan_05 = '85~94';
																      $daehan_04 = '95~';
																      $daehan_03 = '';
																      $daehan_02 = '';
																      }
}

##########################################
if ($myung_01) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '金4局')) {$daehan_01 = '4~13';
			                                                                                                             $daehan_02 = '14~23';
																     $daehan_03 = '24~33';
			                                                                                                              $daehan_04 = '34~43';
																      $daehan_05 = '44~53';
																      $daehan_06 = '54~63';
																      $daehan_07 = '64~73';
																      $daehan_08 = '74~83';
																      $daehan_09 = '84~93';
																      $daehan_10 = '94~';
																      $daehan_11 = '';
																      $daehan_12 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '金4局')) {$daehan_01 = '4~13';
			                                                                                                             $daehan_12 = '14~23';
																     $daehan_11 = '24~33';
			                                                                                                              $daehan_10 = '34~43';
																      $daehan_09 = '44~53';
																      $daehan_08 = '54~63';
																      $daehan_07 = '64~73';
																      $daehan_06 = '74~83';
																      $daehan_05 = '84~93';
																      $daehan_04 = '94~';
																      $daehan_03 = '';
																      $daehan_02 = '';
																      }
}

################################################
if ($myung_01) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '木3局')) {$daehan_01 = '3~12';
			                                                                                                             $daehan_02 = '13~22';
																     $daehan_03 = '23~32';
			                                                                                                              $daehan_04 = '33~42';
																      $daehan_05 = '43~52';
																      $daehan_06 = '53~62';
																      $daehan_07 = '63~72';
																      $daehan_08 = '73~82';
																      $daehan_09 = '83~92';
																      $daehan_10 = '93~';
																      $daehan_11 = '';
																      $daehan_12 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '木3局')) {$daehan_01 = '3~12';
			                                                                                                             $daehan_12 = '13~22';
																     $daehan_11 = '23~32';
			                                                                                                              $daehan_10 = '33~42';
																      $daehan_09 = '43~52';
																      $daehan_08 = '53~62';
																      $daehan_07 = '63~72';
																      $daehan_06 = '73~82';
																      $daehan_05 = '83~92';
																      $daehan_04 = '93~';
																      $daehan_03 = '';
																      $daehan_02 = '';
																      }
}

##########################################################################################################
if ($myung_02) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '火6局')) {$daehan_02 = '6~15';
			                                                                                                             $daehan_03 = '16~25';
																     $daehan_04 = '26~35';
			                                                                                                              $daehan_05 = '36~45';
																      $daehan_06 = '46~55';
																      $daehan_07 = '56~65';
																      $daehan_08 = '66~75';
																      $daehan_09 = '76~85';
																      $daehan_10 = '86~95';
																      $daehan_11 = '96~';
																      $daehan_12 = '';
																      $daehan_01 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '火6局')) {$daehan_02 = '6~15';
			                                                                                                             $daehan_01 = '16~25';
																     $daehan_12 = '26~35';
			                                                                                                              $daehan_11 = '36~45';
																      $daehan_10 = '46~55';
																      $daehan_09 = '56~65';
																      $daehan_08 = '66~75';
																      $daehan_07 = '76~85';
																      $daehan_06 = '86~95';
																      $daehan_05 = '96~';
																      $daehan_04 = '';
																      $daehan_03 = '';
																      }
}

######################################
if ($myung_02) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '水2局')) {$daehan_02 = '2~11';
			                                                                                                             $daehan_03 = '12~21';
																     $daehan_04 = '22~31';
			                                                                                                              $daehan_05 = '32~41';
																      $daehan_06 = '42~51';
																      $daehan_07 = '52~61';
																      $daehan_08 = '62~71';
																      $daehan_09 = '72~81';
																      $daehan_10 = '82~91';
																      $daehan_11 = '92~';
																      $daehan_12 = '';
																      $daehan_01 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '水2局')) {$daehan_02 = '2~11';
			                                                                                                             $daehan_01 = '12~21';
																     $daehan_12 = '22~31';
			                                                                                                              $daehan_11 = '32~41';
																      $daehan_10 = '42~51';
																      $daehan_09 = '52~61';
																      $daehan_08 = '62~71';
																      $daehan_07 = '72~81';
																      $daehan_06 = '82~91';
																      $daehan_05 = '92~';
																      $daehan_04 = '';
																      $daehan_03 = '';
																      }
}

#########################################
if ($myung_02) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '土5局')) {$daehan_02 = '5~14';
			                                                                                                             $daehan_03 = '15~24';
																     $daehan_04 = '25~34';
			                                                                                                              $daehan_05 = '35~44';
																      $daehan_06 = '45~54';
																      $daehan_07 = '55~64';
																      $daehan_08 = '65~74';
																      $daehan_09 = '75~84';
																      $daehan_10 = '85~94';
																      $daehan_11 = '95~';
																      $daehan_12 = '';
																      $daehan_01 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '土5局')) {$daehan_02 = '5~14';
			                                                                                                             $daehan_01 = '15~24';
																     $daehan_12 = '25~34';
			                                                                                                              $daehan_11 = '35~44';
																      $daehan_10 = '45~54';
																      $daehan_09 = '55~64';
																      $daehan_08 = '65~74';
																      $daehan_07 = '75~84';
																      $daehan_06 = '85~94';
																      $daehan_05 = '95~';
																      $daehan_04 = '';
																      $daehan_03 = '';
																      }
}

##########################################
if ($myung_02) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '金4局')) {$daehan_02 = '4~13';
			                                                                                                             $daehan_03 = '14~23';
																     $daehan_04 = '24~33';
			                                                                                                              $daehan_05 = '34~43';
																      $daehan_06 = '44~53';
																      $daehan_07 = '54~63';
																      $daehan_08 = '64~73';
																      $daehan_09 = '74~83';
																      $daehan_10 = '84~93';
																      $daehan_11 = '94~';
																      $daehan_12 = '';
																      $daehan_01 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '金4局')) {$daehan_02 = '4~13';
			                                                                                                             $daehan_01 = '14~23';
																     $daehan_12 = '24~33';
			                                                                                                              $daehan_11 = '34~43';
																      $daehan_10 = '44~53';
																      $daehan_09 = '54~63';
																      $daehan_08 = '64~73';
																      $daehan_07 = '74~83';
																      $daehan_06 = '84~93';
																      $daehan_05 = '94~';
																      $daehan_04 = '';
																      $daehan_03 = '';
																      }
}

################################################
if ($myung_02) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '木3局')) {$daehan_02 = '3~12';
			                                                                                                             $daehan_03 = '13~22';
																     $daehan_04 = '23~32';
			                                                                                                              $daehan_05 = '33~42';
																      $daehan_06 = '43~52';
																      $daehan_07 = '53~62';
																      $daehan_08 = '63~72';
																      $daehan_09 = '73~82';
																      $daehan_10 = '83~92';
																      $daehan_11 = '93~';
																      $daehan_12 = '';
																      $daehan_01 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '木3局')) {$daehan_02 = '3~12';
			                                                                                                             $daehan_01 = '13~22';
																     $daehan_12 = '23~32';
			                                                                                                              $daehan_11 = '33~42';
																      $daehan_10 = '43~52';
																      $daehan_09 = '53~62';
																      $daehan_08 = '63~72';
																      $daehan_07 = '73~82';
																      $daehan_06 = '83~92';
																      $daehan_05 = '93~';
																      $daehan_04 = '';
																      $daehan_03 = '';
																      }
}

##########################################################################################################

##########################################################################################################
if ($myung_03) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '火6局')) {$daehan_03 = '6~15';
			                                                                                                             $daehan_04 = '16~25';
																     $daehan_05 = '26~35';
			                                                                                                              $daehan_06 = '36~45';
																      $daehan_07 = '46~55';
																      $daehan_08 = '56~65';
																      $daehan_09 = '66~75';
																      $daehan_10 = '76~85';
																      $daehan_11 = '86~95';
																      $daehan_12 = '96~';
																      $daehan_01 = '';
																      $daehan_02 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '火6局')) {$daehan_03 = '6~15';
			                                                                                                             $daehan_02 = '16~25';
																     $daehan_01 = '26~35';
			                                                                                                              $daehan_12 = '36~45';
																      $daehan_11 = '46~55';
																      $daehan_10 = '56~65';
																      $daehan_09 = '66~75';
																      $daehan_08 = '76~85';
																      $daehan_07 = '86~95';
																      $daehan_06 = '96~';
																      $daehan_05 = '';
																      $daehan_04 = '';
																      }
}

######################################
if ($myung_03) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '水2局')) {$daehan_03 = '2~11';
			                                                                                                             $daehan_04 = '12~21';
																     $daehan_05 = '22~31';
			                                                                                                              $daehan_06 = '32~41';
																      $daehan_07 = '42~51';
																      $daehan_08 = '52~61';
																      $daehan_09 = '62~71';
																      $daehan_10 = '72~81';
																      $daehan_11 = '82~91';
																      $daehan_12 = '92~';
																      $daehan_01 = '';
																      $daehan_02 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '水2局')) {$daehan_03 = '2~11';
			                                                                                                             $daehan_02 = '12~21';
																     $daehan_01 = '22~31';
			                                                                                                              $daehan_12 = '32~41';
																      $daehan_11 = '42~51';
																      $daehan_10 = '52~61';
																      $daehan_09 = '62~71';
																      $daehan_08 = '72~81';
																      $daehan_07 = '82~91';
																      $daehan_06 = '92~';
																      $daehan_05 = '';
																      $daehan_04 = '';
																      }
}

#########################################
if ($myung_03) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '土5局')) {$daehan_03 = '5~14';
			                                                                                                             $daehan_04 = '15~24';
																     $daehan_05 = '25~34';
			                                                                                                              $daehan_06 = '35~44';
																      $daehan_07 = '45~54';
																      $daehan_08 = '55~64';
																      $daehan_09 = '65~74';
																      $daehan_10 = '75~84';
																      $daehan_11 = '85~94';
																      $daehan_12 = '95~';
																      $daehan_01 = '';
																      $daehan_02 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '土5局')) {$daehan_03 = '5~14';
			                                                                                                             $daehan_02 = '15~24';
																     $daehan_01 = '25~34';
			                                                                                                              $daehan_12 = '35~44';
																      $daehan_11 = '45~54';
																      $daehan_10 = '55~64';
																      $daehan_09 = '65~74';
																      $daehan_08 = '75~84';
																      $daehan_07 = '85~94';
																      $daehan_06 = '95~';
																      $daehan_05 = '';
																      $daehan_04 = '';

																      }
}

##########################################
if ($myung_03) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '金4局')) {$daehan_03 = '4~13';
			                                                                                                             $daehan_04 = '14~23';
																     $daehan_05 = '24~33';
			                                                                                                              $daehan_06 = '34~43';
																      $daehan_07 = '44~53';
																      $daehan_08 = '54~63';
																      $daehan_09 = '64~73';
																      $daehan_10 = '74~83';
																      $daehan_11 = '84~93';
																      $daehan_12 = '94~';
																      $daehan_01 = '';
																      $daehan_02 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '金4局')) {$daehan_03 = '4~13';
			                                                                                                             $daehan_02 = '14~23';
																     $daehan_01 = '24~33';
			                                                                                                              $daehan_12 = '34~43';
																      $daehan_11 = '44~53';
																      $daehan_10 = '54~63';
																      $daehan_09 = '64~73';
																      $daehan_08 = '74~83';
																      $daehan_07 = '84~93';
																      $daehan_06 = '94~';
																      $daehan_05 = '';
																      $daehan_04 = '';
																      }
}

################################################
if ($myung_03) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '木3局')) {$daehan_03 = '3~12';
			                                                                                                             $daehan_04 = '13~22';
																     $daehan_05 = '23~32';
			                                                                                                              $daehan_06 = '33~42';
																      $daehan_07 = '43~52';
																      $daehan_08 = '53~62';
																      $daehan_09 = '63~72';
																      $daehan_10 = '73~82';
																      $daehan_11 = '83~92';
																      $daehan_12 = '93~';
																      $daehan_01 = '';
																      $daehan_02 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '木3局')) {$daehan_03 = '3~12';
			                                                                                                             $daehan_02 = '13~22';
																     $daehan_01 = '23~32';
			                                                                                                              $daehan_12 = '33~42';
																      $daehan_11 = '43~52';
																      $daehan_10 = '53~62';
																      $daehan_09 = '63~72';
																      $daehan_08 = '73~82';
																      $daehan_07 = '83~92';
																      $daehan_06 = '93~';
																      $daehan_05 = '';
																      $daehan_04 = '';
																      }
}

##########################################################################################################

##########################################################################################################
if ($myung_04) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '火6局')) {$daehan_04 = '6~15';
			                                                                                                             $daehan_05 = '16~25';
																     $daehan_06 = '26~35';
			                                                                                                              $daehan_07 = '36~45';
																      $daehan_08 = '46~55';
																      $daehan_09 = '56~65';
																      $daehan_10 = '66~75';
																      $daehan_11 = '76~85';
																      $daehan_12 = '86~95';
																      $daehan_01 = '96~';
																      $daehan_02 = '';
																      $daehan_03 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '火6局')) {$daehan_04 = '6~15';
			                                                                                                             $daehan_03 = '16~25';
																     $daehan_02 = '26~35';
			                                                                                                              $daehan_01 = '36~45';
																      $daehan_12 = '46~55';
																      $daehan_11 = '56~65';
																      $daehan_10 = '66~75';
																      $daehan_09 = '76~85';
																      $daehan_08 = '86~95';
																      $daehan_07 = '96~';
																      $daehan_06 = '';
																      $daehan_05 = '';
																      }
}

######################################
if ($myung_04) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '水2局')) {$daehan_03 = '2~11';
			                                                                                                             $daehan_04 = '12~21';
																     $daehan_05 = '22~31';
			                                                                                                              $daehan_06 = '32~41';
																      $daehan_07 = '42~51';
																      $daehan_08 = '52~61';
																      $daehan_09 = '62~71';
																      $daehan_10 = '72~81';
																      $daehan_11 = '82~91';
																      $daehan_12 = '92~';
																      $daehan_01 = '';
																      $daehan_02 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '水2局')) {$daehan_03 = '2~11';
			                                                                                                             $daehan_02 = '12~21';
																     $daehan_01 = '22~31';
			                                                                                                              $daehan_12 = '32~41';
																      $daehan_11 = '42~51';
																      $daehan_10 = '52~61';
																      $daehan_09 = '62~71';
																      $daehan_08 = '72~81';
																      $daehan_07 = '82~91';
																      $daehan_06 = '92~';
																      $daehan_05 = '';
																      $daehan_04 = '';
																      }
}

#########################################
if ($myung_04) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '土5局')) {$daehan_03 = '5~14';
			                                                                                                             $daehan_04 = '15~24';
																     $daehan_05 = '25~34';
			                                                                                                              $daehan_06 = '35~44';
																      $daehan_07 = '45~54';
																      $daehan_08 = '55~64';
																      $daehan_09 = '65~74';
																      $daehan_10 = '75~84';
																      $daehan_11 = '85~94';
																      $daehan_12 = '95~';
																      $daehan_01 = '';
																      $daehan_02 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '土5局')) {$daehan_03 = '5~14';
			                                                                                                             $daehan_02 = '15~24';
																     $daehan_01 = '25~34';
			                                                                                                              $daehan_12 = '35~44';
																      $daehan_11 = '45~54';
																      $daehan_10 = '55~64';
																      $daehan_09 = '65~74';
																      $daehan_08 = '75~84';
																      $daehan_07 = '85~94';
																      $daehan_06 = '95~';
																      $daehan_05 = '';
																      $daehan_04 = '';
																      }
}

##########################################
if ($myung_04) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '金4局')) {$daehan_03 = '4~13';
			                                                                                                             $daehan_04 = '14~23';
																     $daehan_05 = '24~33';
			                                                                                                              $daehan_06 = '34~43';
																      $daehan_07 = '44~53';
																      $daehan_08 = '54~63';
																      $daehan_09 = '64~73';
																      $daehan_10 = '74~83';
																      $daehan_11 = '84~93';
																      $daehan_12 = '94~';
																      $daehan_01 = '';
																      $daehan_02 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '金4局')) {$daehan_03 = '4~13';
			                                                                                                             $daehan_02 = '14~23';
																     $daehan_01 = '24~33';
			                                                                                                              $daehan_12 = '34~43';
																      $daehan_11 = '44~53';
																      $daehan_10 = '54~63';
																      $daehan_09 = '64~73';
																      $daehan_08 = '74~83';
																      $daehan_07 = '84~93';
																      $daehan_06 = '94~';
																      $daehan_05 = '';
																      $daehan_04 = '';
																      }
}

################################################
if ($myung_04) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '木3局')) {$daehan_03 = '3~12';
			                                                                                                             $daehan_04 = '13~22';
																     $daehan_05 = '23~32';
			                                                                                                              $daehan_06 = '33~42';
																      $daehan_07 = '43~52';
																      $daehan_08 = '53~62';
																      $daehan_09 = '63~72';
																      $daehan_10 = '73~82';
																      $daehan_11 = '83~92';
																      $daehan_12 = '93~';
																      $daehan_01 = '';
																      $daehan_02 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '木3局')) {$daehan_03 = '3~12';
			                                                                                                             $daehan_02 = '13~22';
																     $daehan_01 = '23~32';
			                                                                                                              $daehan_12 = '33~42';
																      $daehan_11 = '43~52';
																      $daehan_10 = '53~62';
																      $daehan_09 = '63~72';
																      $daehan_08 = '73~82';
																      $daehan_07 = '83~92';
																      $daehan_06 = '93~';
																      $daehan_05 = '103~112';
																      $daehan_04 = '113~122';
																      }
}

##########################################################################################################

##########################################################################################################
if ($myung_05) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '火6局')) {$daehan_05 = '6~15';
			                                                                                                             $daehan_06 = '16~25';
																     $daehan_07 = '26~35';
			                                                                                                              $daehan_08 = '36~45';
																      $daehan_09 = '46~55';
																      $daehan_10 = '56~65';
																      $daehan_11 = '66~75';
																      $daehan_12 = '76~85';
																      $daehan_01 = '86~95';
																      $daehan_02 = '96~';
																      $daehan_03 = '';
																      $daehan_04 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '火6局')) {$daehan_05 = '6~15';
			                                                                                                             $daehan_04 = '16~25';
																     $daehan_03 = '26~35';
			                                                                                                              $daehan_02 = '36~45';
																      $daehan_01 = '46~55';
																      $daehan_12 = '56~65';
																      $daehan_11 = '66~75';
																      $daehan_10 = '76~85';
																      $daehan_09 = '86~95';
																      $daehan_08 = '96~';
																      $daehan_07 = '';
																      $daehan_06 = '';
																      }
}

######################################
if ($myung_05) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '水2局')) {$daehan_05 = '2~11';
			                                                                                                             $daehan_06 = '12~21';
																     $daehan_07 = '22~31';
			                                                                                                              $daehan_08 = '32~41';
																      $daehan_09 = '42~51';
																      $daehan_10 = '52~61';
																      $daehan_11 = '62~71';
																      $daehan_12 = '72~81';
																      $daehan_01 = '82~91';
																      $daehan_02 = '92~';
																      $daehan_03 = '';
																      $daehan_04 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '水2局')) {$daehan_05 = '2~11';
			                                                                                                             $daehan_04 = '12~21';
																     $daehan_03 = '22~31';
			                                                                                                              $daehan_02 = '32~41';
																      $daehan_01 = '42~51';
																      $daehan_12 = '52~61';
																      $daehan_11 = '62~71';
																      $daehan_10 = '72~81';
																      $daehan_09 = '82~91';
																      $daehan_08 = '92~';
																      $daehan_07 = '';
																      $daehan_06 = '';
																      }
}

#########################################
if ($myung_05) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '土5局')) {$daehan_05 = '5~14';
			                                                                                                             $daehan_06 = '15~24';
																     $daehan_07 = '25~34';
			                                                                                                              $daehan_08 = '35~44';
																      $daehan_09 = '45~54';
																      $daehan_10 = '55~64';
																      $daehan_11 = '65~74';
																      $daehan_12 = '75~84';
																      $daehan_01 = '85~94';
																      $daehan_02 = '95~';
																      $daehan_03 = '';
																      $daehan_04 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '土5局')) {$daehan_05 = '5~14';
			                                                                                                             $daehan_04 = '15~24';
																     $daehan_03 = '25~34';
			                                                                                                              $daehan_02 = '35~44';
																      $daehan_01 = '45~54';
																      $daehan_12 = '55~64';
																      $daehan_11 = '65~74';
																      $daehan_10 = '75~84';
																      $daehan_09 = '85~94';
																      $daehan_08 = '95~';
																      $daehan_07 = '';
																      $daehan_06 = '';
																      }
}

##########################################
if ($myung_05) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '金4局')) {$daehan_05 = '4~13';
			                                                                                                             $daehan_06 = '14~23';
																     $daehan_07 = '24~33';
			                                                                                                              $daehan_08 = '34~43';
																      $daehan_09 = '44~53';
																      $daehan_10 = '54~63';
																      $daehan_11 = '64~73';
																      $daehan_12 = '74~83';
																      $daehan_01 = '84~93';
																      $daehan_02 = '94~';
																      $daehan_03 = '';
																      $daehan_04 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '金4局')) {$daehan_05 = '4~13';
			                                                                                                             $daehan_04 = '14~23';
																     $daehan_03 = '24~33';
			                                                                                                              $daehan_02 = '34~43';
																      $daehan_01 = '44~53';
																      $daehan_12 = '54~63';
																      $daehan_11 = '64~73';
																      $daehan_10 = '74~83';
																      $daehan_09 = '84~93';
																      $daehan_08 = '94~';
																      $daehan_07 = '';
																      $daehan_07 = '';
																      }
}

################################################
if ($myung_05) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '木3局')) {$daehan_05 = '3~12';
			                                                                                                             $daehan_06 = '13~22';
																     $daehan_07 = '23~32';
			                                                                                                              $daehan_08 = '33~42';
																      $daehan_09 = '43~52';
																      $daehan_10 = '53~62';
																      $daehan_11 = '63~72';
																      $daehan_12 = '73~82';
																      $daehan_01 = '83~92';
																      $daehan_02 = '93~';
																      $daehan_03 = '';
																      $daehan_04 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '木3局')) {$daehan_05 = '3~12';
			                                                                                                             $daehan_04 = '13~22';
																     $daehan_03 = '23~32';
			                                                                                                              $daehan_02 = '33~42';
																      $daehan_01 = '43~52';
																      $daehan_12 = '53~62';
																      $daehan_11 = '63~72';
																      $daehan_10 = '73~82';
																      $daehan_09 = '83~92';
																      $daehan_08 = '93~';
																      $daehan_07 = '';
																      $daehan_06 = '';
																      }
}

##########################################################################################################

##########################################################################################################
if ($myung_06) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '火6局')) {$daehan_06 = '6~15';
			                                                                                                             $daehan_07 = '16~25';
																     $daehan_08 = '26~35';
			                                                                                                              $daehan_09 = '36~45';
																      $daehan_10 = '46~55';
																      $daehan_11 = '56~65';
																      $daehan_12 = '66~75';
																      $daehan_01 = '76~85';
																      $daehan_02 = '86~95';
																      $daehan_03 = '96~';
																      $daehan_04 = '';
																      $daehan_05 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '火6局')) {$daehan_06 = '6~15';
			                                                                                                             $daehan_05 = '16~25';
																     $daehan_04 = '26~35';
			                                                                                                              $daehan_03 = '36~45';
																      $daehan_02 = '46~55';
																      $daehan_01 = '56~65';
																      $daehan_12 = '66~75';
																      $daehan_11 = '76~85';
																      $daehan_10 = '86~95';
																      $daehan_09 = '96~';
																      $daehan_08 = '';
																      $daehan_07 = '';
																      }
}

######################################
if ($myung_06) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '水2局')) {$daehan_06 = '2~11';
			                                                                                                             $daehan_07 = '12~21';
																     $daehan_08 = '22~31';
			                                                                                                              $daehan_09 = '32~41';
																      $daehan_10 = '42~51';
																      $daehan_11 = '52~61';
																      $daehan_12 = '62~71';
																      $daehan_01 = '72~81';
																      $daehan_02 = '82~91';
																      $daehan_03 = '92~';
																      $daehan_04 = '';
																      $daehan_05 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '水2局')) {$daehan_06 = '2~11';
			                                                                                                             $daehan_05 = '12~21';
																     $daehan_04 = '22~31';
			                                                                                                              $daehan_03 = '32~41';
																      $daehan_02 = '42~51';
																      $daehan_01 = '52~61';
																      $daehan_12 = '62~71';
																      $daehan_11 = '72~81';
																      $daehan_10 = '82~91';
																      $daehan_09 = '92~';
																      $daehan_08 = '';
																      $daehan_07 = '';
																      }
}

#########################################
if ($myung_06) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '土5局')) {$daehan_06 = '5~14';
			                                                                                                             $daehan_07 = '15~24';
																     $daehan_08 = '25~34';
			                                                                                                              $daehan_09 = '35~44';
																      $daehan_10 = '45~54';
																      $daehan_11 = '55~64';
																      $daehan_12 = '65~74';
																      $daehan_01 = '75~84';
																      $daehan_02 = '85~94';
																      $daehan_03 = '95~';
																      $daehan_04 = '';
																      $daehan_05 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '土5局')) {$daehan_06 = '5~14';
			                                                                                                             $daehan_05 = '15~24';
																     $daehan_04 = '25~34';
			                                                                                                              $daehan_03 = '35~44';
																      $daehan_02 = '45~54';
																      $daehan_01 = '55~64';
																      $daehan_12 = '65~74';
																      $daehan_11 = '75~84';
																      $daehan_10 = '85~94';
																      $daehan_09 = '95~';
																      $daehan_08 = '';
																      $daehan_07 = '';
																      }
}

##########################################
if ($myung_06) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '金4局')) {$daehan_06 = '4~13';
			                                                                                                             $daehan_07 = '14~23';
																     $daehan_08 = '24~33';
			                                                                                                              $daehan_09 = '34~43';
																      $daehan_10 = '44~53';
																      $daehan_11 = '54~63';
																      $daehan_12 = '64~73';
																      $daehan_01 = '74~83';
																      $daehan_02 = '84~93';
																      $daehan_03 = '94~';
																      $daehan_04 = '';
																      $daehan_05 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '金4局')) {$daehan_06 = '4~13';
			                                                                                                             $daehan_05 = '14~23';
																     $daehan_04 = '24~33';
			                                                                                                              $daehan_03 = '34~43';
																      $daehan_02 = '44~53';
																      $daehan_01 = '54~63';
																      $daehan_12 = '64~73';
																      $daehan_11 = '74~83';
																      $daehan_10 = '84~93';
																      $daehan_09 = '94~';
																      $daehan_08 = '';
																      $daehan_07 = '';
																      }
}

################################################
if ($myung_06) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '木3局')) {$daehan_06 = '3~12';
			                                                                                                             $daehan_07 = '13~22';
																     $daehan_08 = '23~32';
			                                                                                                              $daehan_09 = '33~42';
																      $daehan_10 = '43~52';
																      $daehan_11 = '53~62';
																      $daehan_12 = '63~72';
																      $daehan_01 = '73~82';
																      $daehan_02 = '83~92';
																      $daehan_03 = '93~';
																      $daehan_04 = '';
																      $daehan_05 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '木3局')) {$daehan_06 = '3~12';
			                                                                                                             $daehan_05 = '13~22';
																     $daehan_04 = '23~32';
			                                                                                                              $daehan_03 = '33~42';
																      $daehan_02 = '43~52';
																      $daehan_01 = '53~62';
																      $daehan_12 = '63~72';
																      $daehan_11 = '73~82';
																      $daehan_10 = '83~92';
																      $daehan_09 = '93~';
																      $daehan_08 = '';
																      $daehan_07 = '';
																      }
}

##########################################################################################################

##########################################################################################################
if ($myung_07) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '火6局')) {$daehan_07 = '6~15';
			                                                                                                             $daehan_08 = '16~25';
																     $daehan_09 = '26~35';
			                                                                                                              $daehan_10 = '36~45';
																      $daehan_11 = '46~55';
																      $daehan_12 = '56~65';
																      $daehan_01 = '66~75';
																      $daehan_02 = '76~85';
																      $daehan_03 = '86~95';
																      $daehan_04 = '96~';
																      $daehan_05 = '';
																      $daehan_06 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '火6局')) {$daehan_07 = '6~15';
			                                                                                                             $daehan_06 = '16~25';
																     $daehan_05 = '26~35';
			                                                                                                              $daehan_04 = '36~45';
																      $daehan_03 = '46~55';
																      $daehan_02 = '56~65';
																      $daehan_01 = '66~75';
																      $daehan_12 = '76~85';
																      $daehan_11 = '86~95';
																      $daehan_10 = '96~';
																      $daehan_09 = '';
																      $daehan_08 = '';
																      }
}

######################################
if ($myung_07) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '水2局')) {$daehan_07 = '2~11';
			                                                                                                             $daehan_08 = '12~21';
																     $daehan_09 = '22~31';
			                                                                                                              $daehan_10 = '32~41';
																      $daehan_11 = '42~51';
																      $daehan_12 = '52~61';
																      $daehan_01 = '62~71';
																      $daehan_02 = '72~81';
																      $daehan_03 = '82~91';
																      $daehan_04 = '92~';
																      $daehan_05 = '';
																      $daehan_06 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '水2局')) {$daehan_07 = '2~11';
			                                                                                                             $daehan_06 = '12~21';
																     $daehan_05 = '22~31';
			                                                                                                              $daehan_04 = '32~41';
																      $daehan_03 = '42~51';
																      $daehan_02 = '52~61';
																      $daehan_01 = '62~71';
																      $daehan_12 = '72~81';
																      $daehan_11 = '82~91';
																      $daehan_10 = '92~';
																      $daehan_09 = '';
																      $daehan_08 = '';
																      }
}

#########################################
if ($myung_07) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '土5局')) {$daehan_07 = '5~14';
			                                                                                                             $daehan_08 = '15~24';
																     $daehan_09 = '25~34';
			                                                                                                              $daehan_10 = '35~44';
																      $daehan_11 = '45~54';
																      $daehan_12 = '55~64';
																      $daehan_01 = '65~74';
																      $daehan_02 = '75~84';
																      $daehan_03 = '85~94';
																      $daehan_04 = '95~';
																      $daehan_05 = '';
																      $daehan_06 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '土5局')) {$daehan_07 = '5~14';
			                                                                                                             $daehan_06 = '15~24';
																     $daehan_05 = '25~34';
			                                                                                                              $daehan_04 = '35~44';
																      $daehan_03 = '45~54';
																      $daehan_02 = '55~64';
																      $daehan_01 = '65~74';
																      $daehan_12 = '75~84';
																      $daehan_11 = '85~94';
																      $daehan_10 = '95~';
																      $daehan_09 = '';
																      $daehan_08 = '';
																      }
}

##########################################
if ($myung_07) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '金4局')) {$daehan_07 = '4~13';
			                                                                                                             $daehan_08 = '14~23';
																     $daehan_09 = '24~33';
			                                                                                                              $daehan_10 = '34~43';
																      $daehan_11 = '44~53';
																      $daehan_12 = '54~63';
																      $daehan_01 = '64~73';
																      $daehan_02 = '74~83';
																      $daehan_03 = '84~93';
																      $daehan_04 = '94~';
																      $daehan_05 = '';
																      $daehan_06 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '金4局')) {$daehan_07 = '4~13';
			                                                                                                             $daehan_06 = '14~23';
																     $daehan_05 = '24~33';
			                                                                                                              $daehan_04 = '34~43';
																      $daehan_03 = '44~53';
																      $daehan_02 = '54~63';
																      $daehan_01 = '64~73';
																      $daehan_12 = '74~83';
																      $daehan_11 = '84~93';
																      $daehan_10 = '94~';
																      $daehan_09 = '';
																      $daehan_08 = '';
																      }
}

################################################
if ($myung_07) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '木3局')) {$daehan_07 = '3~12';
			                                                                                                             $daehan_08 = '13~22';
																     $daehan_09 = '23~32';
			                                                                                                              $daehan_10 = '33~42';
																      $daehan_11 = '43~52';
																      $daehan_12 = '53~62';
																      $daehan_01 = '63~72';
																      $daehan_02 = '73~82';
																      $daehan_03 = '83~92';
																      $daehan_04 = '93~';
																      $daehan_05 = '';
																      $daehan_06 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '木3局')) {$daehan_07 = '3~12';
			                                                                                                             $daehan_06 = '13~22';
																     $daehan_05 = '23~32';
			                                                                                                              $daehan_04 = '33~42';
																      $daehan_03 = '43~52';
																      $daehan_02 = '53~62';
																      $daehan_01 = '63~72';
																      $daehan_12 = '73~82';
																      $daehan_11 = '83~92';
																      $daehan_10 = '93~';
																      $daehan_09 = '';
																      $daehan_08 = '';
																      }
}

##########################################################################################################

##########################################################################################################
if ($myung_08) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '火6局')) {$daehan_08 = '6~15';
			                                                                                                             $daehan_09 = '16~25';
																     $daehan_10 = '26~35';
			                                                                                                              $daehan_11 = '36~45';
																      $daehan_12 = '46~55';
																      $daehan_01 = '56~65';
																      $daehan_02 = '66~75';
																      $daehan_03 = '76~85';
																      $daehan_04 = '86~95';
																      $daehan_05 = '96~';
																      $daehan_06 = '';
																      $daehan_07 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '火6局')) {$daehan_08 = '6~15';
			                                                                                                             $daehan_07 = '16~25';
																     $daehan_06 = '26~35';
			                                                                                                              $daehan_05 = '36~45';
																      $daehan_04 = '46~55';
																      $daehan_03 = '56~65';
																      $daehan_02 = '66~75';
																      $daehan_01 = '76~85';
																      $daehan_12 = '86~95';
																      $daehan_11 = '96~';
																      $daehan_10 = '';
																      $daehan_09 = '';
																      }
}

######################################
if ($myung_08) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '水2局')) {$daehan_08 = '2~11';
			                                                                                                             $daehan_09 = '12~21';
																     $daehan_10 = '22~31';
			                                                                                                              $daehan_11 = '32~41';
																      $daehan_12 = '42~51';
																      $daehan_01 = '52~61';
																      $daehan_02 = '62~71';
																      $daehan_03 = '72~81';
																      $daehan_04 = '82~91';
																      $daehan_05 = '92~';
																      $daehan_06 = '';
																      $daehan_07 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '水2局')) {$daehan_08 = '2~11';
			                                                                                                             $daehan_07 = '12~21';
																     $daehan_06 = '22~31';
			                                                                                                              $daehan_05 = '32~41';
																      $daehan_04 = '42~51';
																      $daehan_03 = '52~61';
																      $daehan_02 = '62~71';
																      $daehan_01 = '72~81';
																      $daehan_12 = '82~91';
																      $daehan_11 = '92~';
																      $daehan_10 = '';
																      $daehan_09 = '';
																      }
}

#########################################
if ($myung_08) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '土5局')) {$daehan_08 = '5~14';
			                                                                                                             $daehan_09 = '15~24';
																     $daehan_10 = '25~34';
			                                                                                                              $daehan_11 = '35~44';
																      $daehan_12 = '45~54';
																      $daehan_01 = '55~64';
																      $daehan_02 = '65~74';
																      $daehan_03 = '75~84';
																      $daehan_04 = '85~94';
																      $daehan_05 = '95~';
																      $daehan_06 = '';
																      $daehan_07 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '土5局')) {$daehan_08 = '5~14';
			                                                                                                             $daehan_07 = '15~24';
																     $daehan_06 = '25~34';
			                                                                                                              $daehan_05 = '35~44';
																      $daehan_04 = '45~54';
																      $daehan_03 = '55~64';
																      $daehan_02 = '65~74';
																      $daehan_01 = '75~84';
																      $daehan_12 = '85~94';
																      $daehan_11 = '95~';
																      $daehan_10 = '';
																      $daehan_09 = '';
																      }
}

##########################################
if ($myung_08) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '金4局')) {$daehan_08 = '4~13';
			                                                                                                             $daehan_09 = '14~23';
																     $daehan_10 = '24~33';
			                                                                                                              $daehan_11 = '34~43';
																      $daehan_12 = '44~53';
																      $daehan_01 = '54~63';
																      $daehan_02 = '64~73';
																      $daehan_03 = '74~83';
																      $daehan_04 = '84~93';
																      $daehan_05 = '94~';
																      $daehan_06 = '';
																      $daehan_07 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '金4局')) {$daehan_08 = '4~13';
			                                                                                                             $daehan_07 = '14~23';
																     $daehan_06 = '24~33';
			                                                                                                              $daehan_05 = '34~43';
																      $daehan_04 = '44~53';
																      $daehan_03 = '54~63';
																      $daehan_02 = '64~73';
																      $daehan_01 = '74~83';
																      $daehan_12 = '84~93';
																      $daehan_11 = '94~';
																      $daehan_10 = '';
																      $daehan_09 = '';
																      }
}

################################################
if ($myung_08) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '木3局')) {$daehan_08 = '3~12';
			                                                                                                             $daehan_09 = '13~22';
																     $daehan_10 = '23~32';
			                                                                                                              $daehan_11 = '33~42';
																      $daehan_12 = '43~52';
																      $daehan_01 = '53~62';
																      $daehan_02 = '63~72';
																      $daehan_03 = '73~82';
																      $daehan_04 = '83~92';
																      $daehan_05 = '93~';
																      $daehan_06 = '';
																      $daehan_07 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '木3局')) {$daehan_08 = '3~12';
			                                                                                                             $daehan_07 = '13~22';
																     $daehan_06 = '23~32';
			                                                                                                              $daehan_05 = '33~42';
																      $daehan_04 = '43~52';
																      $daehan_03 = '53~62';
																      $daehan_02 = '63~72';
																      $daehan_01 = '73~82';
																      $daehan_12 = '83~92';
																      $daehan_11 = '93~';
																      $daehan_10 = '';
																      $daehan_09 = '';
																      }
}

##########################################################################################################

##########################################################################################################
if ($myung_09) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '火6局')) {$daehan_09 = '6~15';
			                                                                                                             $daehan_10 = '16~25';
																     $daehan_11 = '26~35';
			                                                                                                              $daehan_12 = '36~45';
																      $daehan_01 = '46~55';
																      $daehan_02 = '56~65';
																      $daehan_03 = '66~75';
																      $daehan_04 = '76~85';
																      $daehan_05 = '86~95';
																      $daehan_06 = '96~';
																      $daehan_07 = '';
																      $daehan_08 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '火6局')) {$daehan_09 = '6~15';
			                                                                                                             $daehan_08 = '16~25';
																     $daehan_07 = '26~35';
			                                                                                                              $daehan_06 = '36~45';
																      $daehan_05 = '46~55';
																      $daehan_04 = '56~65';
																      $daehan_03 = '66~75';
																      $daehan_02 = '76~85';
																      $daehan_01 = '86~95';
																      $daehan_12 = '96~';
																      $daehan_11 = '';
																      $daehan_10 = '';
																      }
}

######################################
if ($myung_09) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '水2局')) {$daehan_09 = '2~11';
			                                                                                                             $daehan_10 = '12~21';
																     $daehan_11 = '22~31';
			                                                                                                              $daehan_12 = '32~41';
																      $daehan_01 = '42~51';
																      $daehan_02 = '52~61';
																      $daehan_03 = '62~71';
																      $daehan_04 = '72~81';
																      $daehan_05 = '82~91';
																      $daehan_06 = '92~';
																      $daehan_07 = '';
																      $daehan_08 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '水2局')) {$daehan_09 = '2~11';
			                                                                                                             $daehan_08 = '12~21';
																     $daehan_07 = '22~31';
			                                                                                                              $daehan_06 = '32~41';
																      $daehan_05 = '42~51';
																      $daehan_04 = '52~61';
																      $daehan_03 = '62~71';
																      $daehan_02 = '72~81';
																      $daehan_01 = '82~91';
																      $daehan_12 = '92~';
																      $daehan_11 = '';
																      $daehan_10 = '';
																      }
}

#########################################
if ($myung_09) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '土5局')) {$daehan_09 = '5~14';
			                                                                                                             $daehan_10 = '15~24';
																     $daehan_11 = '25~34';
			                                                                                                              $daehan_12 = '35~44';
																      $daehan_01 = '45~54';
																      $daehan_02 = '55~64';
																      $daehan_03 = '65~74';
																      $daehan_04 = '75~84';
																      $daehan_05 = '85~94';
																      $daehan_06 = '95~';
																      $daehan_07 = '';
																      $daehan_08 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '土5局')) {$daehan_09 = '5~14';
			                                                                                                             $daehan_08 = '15~24';
																     $daehan_07 = '25~34';
			                                                                                                              $daehan_06 = '35~44';
																      $daehan_05 = '45~54';
																      $daehan_04 = '55~64';
																      $daehan_03 = '65~74';
																      $daehan_02 = '75~84';
																      $daehan_01 = '85~94';
																      $daehan_12 = '95~';
																      $daehan_11 = '';
																      $daehan_10 = '';
																      }
}

##########################################
if ($myung_09) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '金4局')) {$daehan_09 = '4~13';
			                                                                                                             $daehan_10 = '14~23';
																     $daehan_11 = '24~33';
			                                                                                                              $daehan_12 = '34~43';
																      $daehan_01 = '44~53';
																      $daehan_02 = '54~63';
																      $daehan_03 = '64~73';
																      $daehan_04 = '74~83';
																      $daehan_05 = '84~93';
																      $daehan_06 = '94~';
																      $daehan_07 = '';
																      $daehan_08 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '金4局')) {$daehan_09 = '4~13';
			                                                                                                             $daehan_08 = '14~23';
																     $daehan_07 = '24~33';
			                                                                                                              $daehan_06 = '34~43';
																      $daehan_05 = '44~53';
																      $daehan_04 = '54~63';
																      $daehan_03 = '64~73';
																      $daehan_02 = '74~83';
																      $daehan_01 = '84~93';
																      $daehan_12 = '94~';
																      $daehan_11 = '';
																      $daehan_10 = '';
																      }
}

################################################
if ($myung_09) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '木3局')) {$daehan_09 = '3~12';
			                                                                                                             $daehan_10 = '13~22';
																     $daehan_11 = '23~32';
			                                                                                                              $daehan_12 = '33~42';
																      $daehan_01 = '43~52';
																      $daehan_02 = '53~62';
																      $daehan_03 = '63~72';
																      $daehan_04 = '73~82';
																      $daehan_05 = '83~92';
																      $daehan_06 = '93~';
																      $daehan_07 = '';
																      $daehan_08 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '木3局')) {$daehan_09 = '3~12';
			                                                                                                             $daehan_08 = '13~22';
																     $daehan_07 = '23~32';
			                                                                                                              $daehan_06 = '33~42';
																      $daehan_05 = '43~52';
																      $daehan_04 = '53~62';
																      $daehan_03 = '63~72';
																      $daehan_02 = '73~82';
																      $daehan_01 = '83~92';
																      $daehan_12 = '93~';
																      $daehan_11 = '';
																      $daehan_10 = '';
																      }
}

##########################################################################################################

##########################################################################################################
if ($myung_10) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '火6局')) {$daehan_10 = '6~15';
			                                                                                                             $daehan_11 = '16~25';
																     $daehan_12 = '26~35';
			                                                                                                              $daehan_01 = '36~45';
																      $daehan_02 = '46~55';
																      $daehan_03 = '56~65';
																      $daehan_04 = '66~75';
																      $daehan_05 = '76~85';
																      $daehan_06 = '86~95';
																      $daehan_07 = '96~';
																      $daehan_08 = '';
																      $daehan_09 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '火6局')) {$daehan_10 = '6~15';
			                                                                                                             $daehan_09 = '16~25';
																     $daehan_08 = '26~35';
			                                                                                                              $daehan_07 = '36~45';
																      $daehan_06 = '46~55';
																      $daehan_05 = '56~65';
																      $daehan_04 = '66~75';
																      $daehan_03 = '76~85';
																      $daehan_02 = '86~95';
																      $daehan_01 = '96~';
																      $daehan_12 = '';
																      $daehan_11 = '';
																      }
}

######################################
if ($myung_10) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '水2局')) {$daehan_10 = '2~11';
			                                                                                                             $daehan_11 = '12~21';
																     $daehan_12 = '22~31';
			                                                                                                              $daehan_01 = '32~41';
																      $daehan_02 = '42~51';
																      $daehan_03 = '52~61';
																      $daehan_04 = '62~71';
																      $daehan_05 = '72~81';
																      $daehan_06 = '82~91';
																      $daehan_07 = '92~';
																      $daehan_08 = '';
																      $daehan_09 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '水2局')) {$daehan_10 = '2~11';
			                                                                                                             $daehan_09 = '12~21';
																     $daehan_08 = '22~31';
			                                                                                                              $daehan_07 = '32~41';
																      $daehan_06 = '42~51';
																      $daehan_05 = '52~61';
																      $daehan_04 = '62~71';
																      $daehan_03 = '72~81';
																      $daehan_02 = '82~91';
																      $daehan_01 = '92~';
																      $daehan_12 = '';
																      $daehan_11 = '';
																      }
}

#########################################
if ($myung_10) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '土5局')) {$daehan_10 = '5~14';
			                                                                                                             $daehan_11 = '15~24';
																     $daehan_12 = '25~34';
			                                                                                                              $daehan_01 = '35~44';
																      $daehan_02 = '45~54';
																      $daehan_03 = '55~64';
																      $daehan_04 = '65~74';
																      $daehan_05 = '75~84';
																      $daehan_06 = '85~94';
																      $daehan_07 = '95~';
																      $daehan_08 = '';
																      $daehan_09 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '土5局')) {$daehan_10 = '5~14';
			                                                                                                             $daehan_09 = '15~24';
																     $daehan_08 = '25~34';
			                                                                                                              $daehan_07 = '35~44';
																      $daehan_06 = '45~54';
																      $daehan_05 = '55~64';
																      $daehan_04 = '65~74';
																      $daehan_03 = '75~84';
																      $daehan_02 = '85~94';
																      $daehan_01 = '95~';
																      $daehan_12 = '';
																      $daehan_11 = '';
																      }
}

##########################################
if ($myung_10) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '金4局')) {$daehan_10 = '4~13';
			                                                                                                             $daehan_11 = '14~23';
																     $daehan_12 = '24~33';
			                                                                                                              $daehan_01 = '34~43';
																      $daehan_02 = '44~53';
																      $daehan_03 = '54~63';
																      $daehan_04 = '64~73';
																      $daehan_05 = '74~83';
																      $daehan_06 = '84~93';
																      $daehan_07 = '94~';
																      $daehan_08 = '';
																      $daehan_09 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '金4局')) {$daehan_10 = '4~13';
			                                                                                                             $daehan_09 = '14~23';
																     $daehan_08 = '24~33';
			                                                                                                              $daehan_07 = '34~43';
																      $daehan_06 = '44~53';
																      $daehan_05 = '54~63';
																      $daehan_04 = '64~73';
																      $daehan_03 = '74~83';
																      $daehan_02 = '84~93';
																      $daehan_01 = '94~';
																      $daehan_12 = '';
																      $daehan_11 = '';
																      }
}

################################################
if ($myung_10) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '木3局')) {$daehan_10 = '3~12';
			                                                                                                             $daehan_11 = '13~22';
																     $daehan_12 = '23~32';
			                                                                                                              $daehan_01 = '33~42';
																      $daehan_02 = '43~52';
																      $daehan_03 = '53~62';
																      $daehan_04 = '63~72';
																      $daehan_05 = '73~82';
																      $daehan_06 = '83~92';
																      $daehan_07 = '93~';
																      $daehan_08 = '';
																      $daehan_09 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '木3局')) {$daehan_10 = '3~12';
			                                                                                                             $daehan_09 = '13~22';
																     $daehan_08 = '23~32';
			                                                                                                              $daehan_07 = '33~42';
																      $daehan_06 = '43~52';
																      $daehan_05 = '53~62';
																      $daehan_04 = '63~72';
																      $daehan_03 = '73~82';
																      $daehan_02 = '83~92';
																      $daehan_01 = '93~';
																      $daehan_12 = '';
																      $daehan_11 = '';
																      }
}

##########################################################################################################

##########################################################################################################
if ($myung_11) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '火6局')) {$daehan_11 = '6~15';
			                                                                                                             $daehan_12 = '16~25';
																     $daehan_01 = '26~35';
			                                                                                                              $daehan_02 = '36~45';
																      $daehan_03 = '46~55';
																      $daehan_04 = '56~65';
																      $daehan_05 = '66~75';
																      $daehan_06 = '76~85';
																      $daehan_07 = '86~95';
																      $daehan_08 = '96~';
																      $daehan_09 = '';
																      $daehan_10 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '火6局')) {$daehan_11 = '6~15';
			                                                                                                             $daehan_10 = '16~25';
																     $daehan_09 = '26~35';
			                                                                                                              $daehan_08 = '36~45';
																      $daehan_07 = '46~55';
																      $daehan_06 = '56~65';
																      $daehan_05 = '66~75';
																      $daehan_04 = '76~85';
																      $daehan_03 = '86~95';
																      $daehan_02 = '96~';
																      $daehan_01 = '';
																      $daehan_12 = '';
																      }
}

######################################
if ($myung_11) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '水2局')) {$daehan_11 = '2~11';
			                                                                                                             $daehan_12 = '12~21';
																     $daehan_01 = '22~31';
			                                                                                                              $daehan_02 = '32~41';
																      $daehan_03 = '42~51';
																      $daehan_04 = '52~61';
																      $daehan_05 = '62~71';
																      $daehan_06 = '72~81';
																      $daehan_07 = '82~91';
																      $daehan_08 = '92~';
																      $daehan_09 = '';
																      $daehan_10 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '水2局')) {$daehan_11 = '2~11';
			                                                                                                             $daehan_10 = '12~21';
																     $daehan_09 = '22~31';
			                                                                                                              $daehan_08 = '32~41';
																      $daehan_07 = '42~51';
																      $daehan_06 = '52~61';
																      $daehan_05 = '62~71';
																      $daehan_04 = '72~81';
																      $daehan_03 = '82~91';
																      $daehan_02 = '92~';
																      $daehan_01 = '';
																      $daehan_12 = '';
																      }
}

#########################################
if ($myung_11) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '土5局')) {$daehan_11 = '5~14';
			                                                                                                             $daehan_12 = '15~24';
																     $daehan_01 = '25~34';
			                                                                                                              $daehan_02 = '35~44';
																      $daehan_03 = '45~54';
																      $daehan_04 = '55~64';
																      $daehan_05 = '65~74';
																      $daehan_06 = '75~84';
																      $daehan_07 = '85~94';
																      $daehan_08 = '95~';
																      $daehan_09 = '';
																      $daehan_10 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '土5局')) {$daehan_11 = '5~14';
			                                                                                                             $daehan_10 = '15~24';
																     $daehan_09 = '25~34';
			                                                                                                              $daehan_08 = '35~44';
																      $daehan_07 = '45~54';
																      $daehan_06 = '55~64';
																      $daehan_05 = '65~74';
																      $daehan_04 = '75~84';
																      $daehan_03 = '85~94';
																      $daehan_02 = '95~';
																      $daehan_01 = '';
																      $daehan_12 = '';
																      }
}

##########################################
if ($myung_11) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '金4局')) {$daehan_11 = '4~13';
			                                                                                                             $daehan_12 = '14~23';
																     $daehan_01 = '24~33';
			                                                                                                              $daehan_02 = '34~43';
																      $daehan_03 = '44~53';
																      $daehan_04 = '54~63';
																      $daehan_05 = '64~73';
																      $daehan_06 = '74~83';
																      $daehan_07 = '84~93';
																      $daehan_08 = '94~';
																      $daehan_09 = '';
																      $daehan_10 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '金4局')) {$daehan_11 = '4~13';
			                                                                                                             $daehan_10 = '14~23';
																     $daehan_09 = '24~33';
			                                                                                                              $daehan_08 = '34~43';
																      $daehan_07 = '44~53';
																      $daehan_06 = '54~63';
																      $daehan_05 = '64~73';
																      $daehan_04 = '74~83';
																      $daehan_03 = '84~93';
																      $daehan_02 = '94~';
																      $daehan_01 = '';
																      $daehan_12 = '';
																      }
}

################################################
if ($myung_11) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '木3局')) {$daehan_11 = '3~12';
			                                                                                                             $daehan_12 = '13~22';
																     $daehan_01 = '23~32';
			                                                                                                              $daehan_02 = '33~42';
																      $daehan_03 = '43~52';
																      $daehan_04 = '53~62';
																      $daehan_05 = '63~72';
																      $daehan_06 = '73~82';
																      $daehan_07 = '83~92';
																      $daehan_08 = '93~';
																      $daehan_09 = '';
																      $daehan_10 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '木3局')) {$daehan_11 = '3~12';
			                                                                                                             $daehan_10 = '13~22';
																     $daehan_09 = '23~32';
			                                                                                                              $daehan_08 = '33~42';
																      $daehan_07 = '43~52';
																      $daehan_06 = '53~62';
																      $daehan_05 = '63~72';
																      $daehan_04 = '73~82';
																      $daehan_03 = '83~92';
																      $daehan_02 = '93~';
																      $daehan_01 = '';
																      $daehan_12 = '';
																      }
}

##########################################################################################################

##########################################################################################################
if ($myung_12) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '火6局')) {$daehan_12 = '6~15';
			                                                                                                             $daehan_01 = '16~25';
																     $daehan_02 = '26~35';
			                                                                                                              $daehan_03 = '36~45';
																      $daehan_04 = '46~55';
																      $daehan_05 = '56~65';
																      $daehan_06 = '66~75';
																      $daehan_07 = '76~85';
																      $daehan_08 = '86~95';
																      $daehan_09 = '96~';
																      $daehan_10 = '';
																      $daehan_11 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '火6局')) {$daehan_12 = '6~15';
			                                                                                                             $daehan_11 = '16~25';
																     $daehan_10 = '26~35';
			                                                                                                              $daehan_09 = '36~45';
																      $daehan_08 = '46~55';
																      $daehan_07 = '56~65';
																      $daehan_06 = '66~75';
																      $daehan_05 = '76~85';
																      $daehan_04 = '86~95';
																      $daehan_03 = '96~';
																      $daehan_02 = '';
																      $daehan_01 = '';
																      }
}

######################################
if ($myung_12) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '水2局')) {$daehan_12 = '2~11';
			                                                                                                             $daehan_01 = '12~21';
																     $daehan_02 = '22~31';
			                                                                                                              $daehan_03 = '32~41';
																      $daehan_04 = '42~51';
																      $daehan_05 = '52~61';
																      $daehan_06 = '62~71';
																      $daehan_07 = '72~81';
																      $daehan_08 = '82~91';
																      $daehan_09 = '92~';
																      $daehan_10 = '';
																      $daehan_11 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '水2局')) {$daehan_12 = '2~11';
			                                                                                                             $daehan_11 = '12~21';
																     $daehan_10 = '22~31';
			                                                                                                              $daehan_09 = '32~41';
																      $daehan_08 = '42~51';
																      $daehan_07 = '52~61';
																      $daehan_06 = '62~71';
																      $daehan_05 = '72~81';
																      $daehan_04 = '82~91';
																      $daehan_03 = '92~';
																      $daehan_02 = '';
																      $daehan_01 = '';
																      }
}

#########################################
if ($myung_12) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '土5局')) {$daehan_12 = '5~14';
			                                                                                                             $daehan_01 = '15~24';
																     $daehan_02 = '25~34';
			                                                                                                              $daehan_03 = '35~44';
																      $daehan_04 = '45~54';
																      $daehan_05 = '55~64';
																      $daehan_06 = '65~74';
																      $daehan_07 = '75~84';
																      $daehan_08 = '85~94';
																      $daehan_09 = '95~';
																      $daehan_10 = '';
																      $daehan_11 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '土5局')) {$daehan_12 = '5~14';
			                                                                                                             $daehan_11 = '15~24';
																     $daehan_10 = '25~34';
			                                                                                                              $daehan_09 = '35~44';
																      $daehan_08 = '45~54';
																      $daehan_07 = '55~64';
																      $daehan_06 = '65~74';
																      $daehan_05 = '75~84';
																      $daehan_04 = '85~94';
																      $daehan_03 = '95~';
																      $daehan_02 = '';
																      $daehan_01 = '';
																      }
}

##########################################
if ($myung_12) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '金4局')) {$daehan_12 = '4~13';
			                                                                                                             $daehan_01 = '14~23';
																     $daehan_02 = '24~33';
			                                                                                                              $daehan_03 = '34~43';
																      $daehan_04 = '44~53';
																      $daehan_05 = '54~63';
																      $daehan_06 = '64~73';
																      $daehan_07 = '74~83';
																      $daehan_08 = '84~93';
																      $daehan_09 = '94~';
																      $daehan_10 = '';
																      $daehan_11 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '金4局')) {$daehan_12 = '4~13';
			                                                                                                             $daehan_11 = '14~23';
																     $daehan_10 = '24~33';
			                                                                                                              $daehan_09 = '34~43';
																      $daehan_08 = '44~53';
																      $daehan_07 = '54~63';
																      $daehan_06 = '64~73';
																      $daehan_05 = '74~83';
																      $daehan_04 = '84~93';
																      $daehan_03 = '94~';
																      $daehan_02 = '';
																      $daehan_01 = '';
																      }
}

################################################
if ($myung_12) {
                        if ((($yangum == '양남')||($yangum == '음녀')) && ($myung_guk == '木3局')) {$daehan_12 = '3~12';
			                                                                                                             $daehan_01 = '13~22';
																     $daehan_02 = '23~32';
			                                                                                                              $daehan_03 = '33~42';
																      $daehan_04 = '43~52';
																      $daehan_05 = '53~62';
																      $daehan_06 = '63~72';
																      $daehan_07 = '73~82';
																      $daehan_08 = '83~92';
																      $daehan_09 = '93~';
																      $daehan_10 = '';
																      $daehan_11 = '';
																      }

                        if ((($yangum == '음남')||($yangum == '양녀')) && ($myung_guk == '木3局')) {$daehan_12 = '3~12';
			                                                                                                             $daehan_11 = '13~22';
																     $daehan_10 = '23~32';
			                                                                                                              $daehan_09 = '33~42';
																      $daehan_08 = '43~52';
																      $daehan_07 = '53~62';
																      $daehan_06 = '63~72';
																      $daehan_05 = '73~82';
																      $daehan_04 = '83~92';
																      $daehan_03 = '93~';
																      $daehan_02 = '';
																      $daehan_01 = '';
																      }
}

##########################################################################################################현재의 대한운 계산



if ($daehan_01) {$result = explode("~",$daehan_01);
                        $first_number = $result[0];
                        $second_number = $result[1];
                        if (($first_number<=$current_age)&&($second_number>=$current_age)) {$current_daehan = $gabja_01;$c_first_no = $first_number;$c_second_no = $second_number;}
}
if ($daehan_02) {$result = explode("~",$daehan_02);
                        $first_number = $result[0];
                        $second_number = $result[1];
                        if (($first_number<=$current_age)&&($second_number>=$current_age)) {$current_daehan = $gabja_02;$c_first_no = $first_number;$c_second_no = $second_number;}
}
if ($daehan_03) {$result = explode("~",$daehan_03);
                        $first_number = $result[0];
                        $second_number = $result[1];
                        if (($first_number<=$current_age)&&($second_number>=$current_age)) {$current_daehan = $gabja_03;$c_first_no = $first_number;$c_second_no = $second_number;}
}
if ($daehan_04) {$result = explode("~",$daehan_04);
                        $first_number = $result[0];
                        $second_number = $result[1];
                        if (($first_number<=$current_age)&&($second_number>=$current_age)) {$current_daehan = $gabja_04;$c_first_no = $first_number;$c_second_no = $second_number;}
}
if ($daehan_05) {$result = explode("~",$daehan_05);
                        $first_number = $result[0];
                        $second_number = $result[1];
                        if (($first_number<=$current_age)&&($second_number>=$current_age)) {$current_daehan = $gabja_05;$c_first_no = $first_number;$c_second_no = $second_number;}
}
if ($daehan_06) {$result = explode("~",$daehan_06);
                        $first_number = $result[0];
                        $second_number = $result[1];
                        if (($first_number<=$current_age)&&($second_number>=$current_age)) {$current_daehan = $gabja_06;$c_first_no = $first_number;$c_second_no = $second_number;}
}
if ($daehan_07) {$result = explode("~",$daehan_07);
                        $first_number = $result[0];
                        $second_number = $result[1];
                        if (($first_number<=$current_age)&&($second_number>=$current_age)) {$current_daehan = $gabja_07;$c_first_no = $first_number;$c_second_no = $second_number;}
}
if ($daehan_08) {$result = explode("~",$daehan_08);
                        $first_number = $result[0];
                        $second_number = $result[1];
                        if (($first_number<=$current_age)&&($second_number>=$current_age)) {$current_daehan = $gabja_08;$c_first_no = $first_number;$c_second_no = $second_number;}
}
if ($daehan_09) {$result = explode("~",$daehan_09);
                        $first_number = $result[0];
                        $second_number = $result[1];
                        if (($first_number<=$current_age)&&($second_number>=$current_age)) {$current_daehan = $gabja_09;$c_first_no = $first_number;$c_second_no = $second_number;}
}
if ($daehan_10) {$result = explode("~",$daehan_10);
                        $first_number = $result[0];
                        $second_number = $result[1];
                        if (($first_number<=$current_age)&&($second_number>=$current_age)) {$current_daehan = $gabja_10;$c_first_no = $first_number;$c_second_no = $second_number;}
}
if ($daehan_11) {$result = explode("~",$daehan_11);
                        $first_number = $result[0];
                        $second_number = $result[1];
                        if (($first_number<=$current_age)&&($second_number>=$current_age)) {$current_daehan = $gabja_11;$c_first_no = $first_number;$c_second_no = $second_number;}
}

if ($daehan_12) {$result = explode("~",$daehan_12);
                        $first_number = $result[0];
                        $second_number = $result[1];
                        if (($first_number<=$current_age)&&($second_number>=$current_age)) {$current_daehan = $gabja_12;$c_first_no = $first_number;$c_second_no = $second_number;}
}




//echo "$current_daehan 대운";

#############################################################

if (($yangum == '양남')||($yangum == '음녀')) {

         if ($current_daehan == $gabja_11) {$be_current_daehan = $gabja_10; $af_current_daehan = $gabja_12;}
	 if ($current_daehan == $gabja_12) {$be_current_daehan = $gabja_11; $af_current_daehan = $gabja_01;}
	 if ($current_daehan == $gabja_01) {$be_current_daehan = $gabja_12; $af_current_daehan = $gabja_02;}
	 if ($current_daehan == $gabja_02) {$be_current_daehan = $gabja_01; $af_current_daehan = $gabja_03;}
	 if ($current_daehan == $gabja_03) {$be_current_daehan = $gabja_02; $af_current_daehan = $gabja_04;}
	 if ($current_daehan == $gabja_04) {$be_current_daehan = $gabja_03; $af_current_daehan = $gabja_05;}
	 if ($current_daehan == $gabja_05) {$be_current_daehan = $gabja_04; $af_current_daehan = $gabja_06;}
	 if ($current_daehan == $gabja_06) {$be_current_daehan = $gabja_05; $af_current_daehan = $gabja_07;}
	 if ($current_daehan == $gabja_07) {$be_current_daehan = $gabja_06; $af_current_daehan = $gabja_08;}
	 if ($current_daehan == $gabja_08) {$be_current_daehan = $gabja_07; $af_current_daehan = $gabja_09;}
	 if ($current_daehan == $gabja_09) {$be_current_daehan = $gabja_08; $af_current_daehan = $gabja_10;}
	 if ($current_daehan == $gabja_10) {$be_current_daehan = $gabja_09; $af_current_daehan = $gabja_11;}

}

#############################################################

if (($yangum == '음남')||($yangum == '양녀')) {

         if ($current_daehan == $gabja_11) {$be_current_daehan = $gabja_12; $af_current_daehan = $gabja_10;}
         if ($current_daehan == $gabja_12) {$be_current_daehan = $gabja_01; $af_current_daehan = $gabja_11;}
	 if ($current_daehan == $gabja_01) {$be_current_daehan = $gabja_02; $af_current_daehan = $gabja_12;}
	 if ($current_daehan == $gabja_02) {$be_current_daehan = $gabja_03; $af_current_daehan = $gabja_01;}
	 if ($current_daehan == $gabja_03) {$be_current_daehan = $gabja_04; $af_current_daehan = $gabja_02;}
	 if ($current_daehan == $gabja_04) {$be_current_daehan = $gabja_05; $af_current_daehan = $gabja_03;}
	 if ($current_daehan == $gabja_05) {$be_current_daehan = $gabja_06; $af_current_daehan = $gabja_04;}
	 if ($current_daehan == $gabja_06) {$be_current_daehan = $gabja_07; $af_current_daehan = $gabja_05;}
	 if ($current_daehan == $gabja_07) {$be_current_daehan = $gabja_08; $af_current_daehan = $gabja_06;}
	 if ($current_daehan == $gabja_08) {$be_current_daehan = $gabja_09; $af_current_daehan = $gabja_07;}
	 if ($current_daehan == $gabja_09) {$be_current_daehan = $gabja_10; $af_current_daehan = $gabja_08;}
	 if ($current_daehan == $gabja_10) {$be_current_daehan = $gabja_11; $af_current_daehan = $gabja_09;}

}
############################################################
//echo "$be_current_daehan / $af_current_daehan";

//echo "$mm/$umyear_e";

//echo "$c_first_no / $c_second_no";

$mm_01 = $current_age - $c_first_no;

$mm_02 = $c_second_no - $current_age;

//echo "$mm_01 / $mm_02 / $current_umyear";


$mm_begin = $current_umyear - $mm_01;
$mm_last = $current_umyear + $mm_02;

##########################################대한,의 보좌길성(천괴,천월,문창,문곡,녹존, 타라, 경양,천마,)

?>