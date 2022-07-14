<?
$today_month = $request_month;
$today_day = $request_day;

If(strlen($today_month) == 1){$today_month = "0".$today_month;}
If(strlen($today_day) == 1){$today_day = "0".$today_day;}

$current_ymd1 = $today_month.$today_day;
//$current_ymd = "2013$current_ymd1";

If (Date("Y-m-d") > date(date("Y")."-09-01")) {
	$current_ymd = (date("Y")+1).$current_ymd1;
} else {
	$current_ymd = date("Y").$current_ymd1;
}

$sql = "SELECT * FROM mansedata WHERE no = '$current_ymd'";

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
			$current_umdate = stripslashes($row[umdate]);
			
			}



if ($lunar_year.$lunar_month.$lunar_day > $current_umdate) { error("OVERDAY_ERROR");
exit;
}
$sql = "SELECT * FROM mansedata WHERE umdate = '$current_umdate'";
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
			$year_h = stripslashes($row[year_h]);
			$year_e = stripslashes($row[year_e]);
			}
if ($year_h == 'A') {$this_year_h = '甲';}
if ($year_h == 'B') {$this_year_h = '乙';}
if ($year_h == 'C') {$this_year_h = '丙';}
if ($year_h == 'D') {$this_year_h = '丁';}
if ($year_h == 'E') {$this_year_h = '戊';}
if ($year_h == 'F') {$this_year_h = '己';}
if ($year_h == 'G') {$this_year_h = '庚';}
if ($year_h == 'H') {$this_year_h = '辛';}
if ($year_h == 'I') {$this_year_h = '壬';}
if ($year_h == 'J') {$this_year_h = '癸';}
if ($year_e == '11') {$this_year_e = '子';}
if ($year_e == '12') {$this_year_e = '丑';}
if ($year_e == '01') {$this_year_e = '寅';}
if ($year_e == '02') {$this_year_e = '卯';}
if ($year_e == '03') {$this_year_e = '辰';}
if ($year_e == '04') {$this_year_e = '巳';}
if ($year_e == '05') {$this_year_e = '午';}
if ($year_e == '06') {$this_year_e = '未';}
if ($year_e == '07') {$this_year_e = '申';}
if ($year_e == '08') {$this_year_e = '酉';}
if ($year_e == '09') {$this_year_e = '戌';}
if ($year_e == '10') {$this_year_e = '亥';}

$yean = '年';
$this_year_he = $this_year_h.$this_year_e.$yean;

$um_year = substr($current_umdate,0,4);
$um_month = substr($current_umdate,4,2);
$um_day = substr($current_umdate,6,2);

if ($um_day == '30'){$um_day = $um_day - 1;}

$see_umdate = $um_year.$lunar_month.$um_day;

$sql = "SELECT * FROM mansedata WHERE umdate = '$see_umdate'";
if (!$sql) {
   error("QUERY_ERROR");
}

$query = mysql_query($sql);

$row = mysql_fetch_array($query);

if (!$row) {
  error("QUERY_ERROR");
}

$month_h = stripslashes($row[month_h]);
$month_e = stripslashes($row[month_e]);


if ($month_h == 'A') {$this_month_h = '甲';}
if ($month_h == 'B') {$this_month_h = '乙';}
if ($month_h == 'C') {$this_month_h = '丙';}
if ($month_h == 'D') {$this_month_h = '丁';}
if ($month_h == 'E') {$this_month_h = '戊';}
if ($month_h == 'F') {$this_month_h = '己';}
if ($month_h == 'G') {$this_month_h = '庚';}
if ($month_h == 'H') {$this_month_h = '辛';}
if ($month_h == 'I') {$this_month_h = '壬';}
if ($month_h == 'J') {$this_month_h = '癸';}
if ($month_e == '11') {$this_month_e = '子';}
if ($month_e == '12') {$this_month_e = '丑';}
if ($month_e == '01') {$this_month_e = '寅';}
if ($month_e == '02') {$this_month_e = '卯';}
if ($month_e == '03') {$this_month_e = '辰';}
if ($month_e == '04') {$this_month_e = '巳';}
if ($month_e == '05') {$this_month_e = '午';}
if ($month_e == '06') {$this_month_e = '未';}
if ($month_e == '07') {$this_month_e = '申';}
if ($month_e == '08') {$this_month_e = '酉';}
if ($month_e == '09') {$this_month_e = '戌';}
if ($month_e == '10') {$this_month_e = '亥';}

$see01_umdate = $um_year.$lunar_month.$lunar_day;

$sql = "SELECT * FROM mansedata WHERE umdate = '$see01_umdate'";
if (!$sql) {
   error("QUERY_ERROR");
}

$query = mysql_query($sql);
$row = mysql_fetch_array($query);

if (!$row) {$kk = '1';                     //////$all 이 없다는 것은 생일이 음으로30 인데 올해에는 그달이 적은달이라 29빡에 없는경우 이때는 다음날을 적용해야함
              }else{$day_h = stripslashes($row[day_h]);
	               $day_e = stripslashes($row[day_e]);
		       }


if ($kk == '1') {$see01_umdate_kk = $um_year.$lunar_month.$request_day-1;
                     $sql = "SELECT * FROM mansedata WHERE umdate = '$see01_umdate_kk'";
                     if (!$sql) {
                                     error("QUERY_ERROR");
                                  }

                      $query = mysql_query($sql);
                      $row = mysql_fetch_array($query);
                      $day_h_k = stripslashes($row[day_h]);
	              $day_e_k = stripslashes($row[day_e]);

}



if ($day_h == 'A') {$this_day_h = '甲';}
if ($day_h == 'B') {$this_day_h = '乙';}
if ($day_h == 'C') {$this_day_h = '丙';}
if ($day_h == 'D') {$this_day_h = '丁';}
if ($day_h == 'E') {$this_day_h = '戊';}
if ($day_h == 'F') {$this_day_h = '己';}
if ($day_h == 'G') {$this_day_h = '庚';}
if ($day_h == 'H') {$this_day_h = '辛';}
if ($day_h == 'I') {$this_day_h = '壬';}
if ($day_h == 'J') {$this_day_h = '癸';}

if ($day_e == '11') {$this_day_e = '子';}
if ($day_e == '12') {$this_day_e = '丑';}
if ($day_e == '01') {$this_day_e = '寅';}
if ($day_e == '02') {$this_day_e = '卯';}
if ($day_e == '03') {$this_day_e = '辰';}
if ($day_e == '04') {$this_day_e = '巳';}
if ($day_e == '05') {$this_day_e = '午';}
if ($day_e == '06') {$this_day_e = '未';}
if ($day_e == '07') {$this_day_e = '申';}
if ($day_e == '08') {$this_day_e = '酉';}
if ($day_e == '09') {$this_day_e = '戌';}
if ($day_e == '10') {$this_day_e = '亥';}

if ($day_h_k == 'J') {$this_day_h = '甲';}
if ($day_h_k == 'A') {$this_day_h = '乙';}
if ($day_h_k == 'B') {$this_day_h = '丙';}
if ($day_h_k == 'C') {$this_day_h = '丁';}
if ($day_h_k == 'D') {$this_day_h = '戊';}
if ($day_h_k == 'E') {$this_day_h = '己';}
if ($day_h_k == 'F') {$this_day_h = '庚';}
if ($day_h_k == 'G') {$this_day_h = '辛';}
if ($day_h_k == 'H') {$this_day_h = '壬';}
if ($day_h_k == 'I') {$this_day_h = '癸';}

if ($day_e_k == '10') {$this_day_e = '子';}
if ($day_e_k == '11') {$this_day_e = '丑';}
if ($day_e_k == '12') {$this_day_e = '寅';}
if ($day_e_k == '01') {$this_day_e = '卯';}
if ($day_e_k == '02') {$this_day_e = '辰';}
if ($day_e_k == '03') {$this_day_e = '巳';}
if ($day_e_k == '04') {$this_day_e = '午';}
if ($day_e_k == '05') {$this_day_e = '未';}
if ($day_e_k == '06') {$this_day_e = '申';}
if ($day_e_k == '07') {$this_day_e = '酉';}
if ($day_e_k == '08') {$this_day_e = '戌';}
if ($day_e_k == '09') {$this_day_e = '亥';}

$result_year = $this_year_h.$this_year_e;          ////       년 결과
$result_month = $this_month_h.$this_month_e;  ////      월 결과 
$result_day = $this_day_h.$this_day_e;              //// 일 결과

$sql = "SELECT * FROM tojung_gabja WHERE gabja = '$result_year'";
if (!$sql) {
   error("QUERY_ERROR");
}

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$year_su = stripslashes($row[tae]);
}

########################
$sql = "SELECT * FROM tojung_gabja WHERE gabja = '$result_month'";
if (!$sql) {
   error("QUERY_ERROR");
}

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$month_su = stripslashes($row[wol]);
}

###########################
$sql = "SELECT * FROM tojung_gabja WHERE gabja = '$result_day'";
if (!$sql) {
   error("QUERY_ERROR");
}

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$day_su = stripslashes($row[il]);
}

$age = $um_year - $lunar_year + 1;

###################################################태어난 달의 올해의 달이 큰달이면 30 적은달이면 29 를 산출하는과정#####
$day_temp = 30;
$um_y_m_d = $um_year.$lunar_month.$day_temp; 


$result = mysql_query("SELECT * FROM mansedata WHERE umdate = '$um_y_m_d'");

if (!$result) {
   error("QUERY_ERROR");
   exit;
}

$rows = mysql_num_rows($result);

if (!$rows) { 
           $dae_so = 29;
}else{
           $dae_so = 30;
}


#########상괘추출
$cut_01 = ($age + $year_su)%8;
if ($cut_01 == 0) {$cut_01 = 8;}
#########중괘추출
$cut_02 = ($dae_so + $month_su)%6;
if ($cut_02 == 0) {$cut_02 = 6;}
#########하괘추출
$cut_03 = ($lunar_day + $day_su)%3;
if ($cut_03 == 0) {$cut_03 = 3;}

$cut_tot = $cut_01.$cut_02.$cut_03;
?>

