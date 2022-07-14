 <?

	$sql = "select * from manse_data where neun='".date('Y')."' and weul='2'";
	$query = mysql_query($sql);
	$all = mysql_affected_rows();

	for ($i = 0 ; $i<$all; $i++) {
		   mysql_data_seek($query,$i);
		   $row = mysql_fetch_array($query);
		   $weul = stripslashes($row[weul]);

		   $tomontht = stripslashes($row[weul]);
		   $todayt = stripslashes($row[julipil]);
		   $totimet = stripslashes($row[julipsi]);
		   $tomint = stripslashes($row[julipbun]);
	}


if($tomonth == $tomontht){
	if($today==$todayt){
		if($totime==$totimet){
			if($tomin>=$tomint){
				$tosixty_cha=$toyear-1900;
				$tosixty_num=$tosixty_cha+36;
			}else{
				$tosixty_cha=$toyear-1900;
				$tosixty_num=$tosixty_cha+35;
			}
		}else{
			if($totime>$totimet){
				$tosixty_cha=$toyear-1900;
				$tosixty_num=$tosixty_cha+36;
			}else{				
				$tosixty_cha=$toyear-1900;
				$tosixty_num=$tosixty_cha+35;                 
			}
		}
	}else{ 
		if($today>$todayt){
			$tosixty_cha=$toyear-1900;
			$tosixty_num=$tosixty_cha+36;
		}else{
			$tosixty_cha=$toyear-1900;
			$tosixty_num=$tosixty_cha+35;
		}
	}
}else{
    if($tomonth > $tomontht){
    $tosixty_cha=$toyear-1900;
    $tosixty_num=$tosixty_cha+36;
    }else{
    $tosixty_cha=$toyear-1900;
    $tosixty_num=$tosixty_cha+35;
    }
}

$tosixty_BY = $tosixty_num % 60;
$toXsixty_num = $tosixty_num;
$toyearju = $sixty[$tosixty_BY];// '//년주를 60갑자로...
$toyeargan = (($tosixty_num % 10)+1);//  '// 년간 숫자코드
$toyeargi = (($tosixty_num % 12)+1);//   '// 년지 숫자코드


	$sql = "select * from manse_data where neun='".$toyear."' and weul='".$tomonth."'";
	$query = mysql_query($sql);
	$all = mysql_affected_rows();

	for ($i = 0 ; $i<$all; $i++) {
		   mysql_data_seek($query,$i);
		   $row = mysql_fetch_array($query);

		   $weul = stripslashes($row[weul]);
		   $todayt = stripslashes($row[julipil]);
		   $totimet = stripslashes($row[julipsi]);
		   $tomint = stripslashes($row[julipbun]);
		   $julipilgan = stripslashes($row[julipilgan]);
	}

if($today==$todayt){	
		if($totime==$totimet){
			if($tomin>=$tomint){
				$tosixty_cha=$toyear-1900;
				$tosixty_num=($tosixty_cha*12)+12+$tomonth;
			}else{
				$tosixty_cha=$toyear-1900;
				$tosixty_num=($tosixty_cha*12)+11+$tomonth;
			}
		}else{
			if($totime>$totimet){
				$tosixty_cha=$toyear-1900;
				$tosixty_num=($tosixty_cha*12)+12+$tomonth;
			}else{                    
				$tosixty_cha=$toyear-1900;
				$tosixty_num=($tosixty_cha*12)+11+$tomonth;
			}
		}      
}else{       
		if($today>$todayt){          
			$tosixty_cha=$toyear-1900;
			$tosixty_num=($tosixty_cha*12)+12+$tomonth;           
		}else{            
			$tosixty_cha=$toyear-1900;
			$tosixty_num=($tosixty_cha*12)+11+$tomonth;
		}
}

$tosixty_num = $tosixty_num % 60;
$toweulju			=	$sixty[$tosixty_BY];
$tomonthgan		=	(($tosixty_num % 10)+1); // 월간 숫자코드
$tomonthgi		=	(($tosixty_num % 12)+1);   // 월지 숫자코드

$weulju = $toweulju;

//일주 작성

if($today ==  $weul){
	$todaygan=$tomint;
	$todaygi=$julipilgan;
}elseif($today>$weul){
	$today_cha=$today- $weul;
	$todaygan=$tomint+$today_cha;
	$todaygi=$julipilgan+$today_cha;
}else{
	$today_cha=$weul-$today;
	$todaygan=($tomint+10)-$today_cha;
	$todaygi=($julipilgan+12)-$today_cha;
}

$todaygan=($todaygan % 10);	//'  // 일간 숫자코드
if($todaygan==0){$todaygan =10;}
$todaygi= $todaygi % 12;   // 일지 숫자코드
if($todaygi==0){$todaygi=12;}



function DateAdd ($interval, $number, $date) { 
$date_time_array = getdate($date); 
$hours = $date_time_array["hours"]; 
$minutes = $date_time_array["minutes"]; 
$seconds = $date_time_array["seconds"]; 
$month = $date_time_array["mon"]; 
$day = $date_time_array["mday"]; 
$year = $date_time_array["year"]; 

//mktime()함수를 이용해서 unix timestamp반환합니다. 

 $timestamp = mktime($hours ,$minutes, $seconds, $month, $day, $year); 
 return $timestamp; 
}

//$yoil	= date("w", mktime());
	$yoil = date("w", time());
//'// 오늘의 요일 번호 일요일 0번, 화요일 2번
	if($yoil == 1){	
	$soday = date("Y-m-d");

	$yoil0 = date("d", DateAdd("d", "0", $soday));
	$yoil1 = date("d", DateAdd("d", "1", $soday));
	$yoil2 = date("d", DateAdd("d", "2", $soday));
	$yoil3 = date("d", DateAdd("d", "3", $soday));
	$yoil4 = date("d", DateAdd("d", "4", $soday));
	$yoil5 = date("d", DateAdd("d", "5", $soday));
	$yoil6 = date("d", DateAdd("d", "6", $soday));

	$sun=date("Y-m-d");
	$sunY=date("Y");
	$sunM=date("m");
	$sunD=date("d");

	}else{
	$soday = date("d", DateAdd("d", 8-$yoil, $soday));

	$yoil0 = date("d", DateAdd("d", -7, $soday));
	$yoil1 = date("d", DateAdd("d", -6, $soday));
	$yoil2 = date("d", DateAdd("d", -5, $soday));
	$yoil3 = date("d", DateAdd("d", -4, $soday));
	$yoil4 = date("d", DateAdd("d", -3, $soday));
	$yoil5 = date("d", DateAdd("d", -2, $soday));
	$yoil6 = date("d", DateAdd("d", -1, $soday));

	$gap = 7- $yoil;

	$sun=date("d", DateAdd("d", $gap, date("Y-m-d")));

	$sunY=date("Y", $sun);
	$sunM=date("m", $sun);
	$sunD=date("d", $sun);
	}


if($yoil0 < 10){$yoil0 = "0".$yoil0;}
if($yoil1 < 10){$yoil1 = "0".$yoil1;}
if($yoil2 < 10){$yoil2 = "0".$yoil2;}
if($yoil3 < 10){$yoil3 = "0".$yoil3;}
if($yoil4 < 10){$yoil4 = "0".$yoil4;}
if($yoil5 < 10){$yoil5 = "0".$yoil5;}
if($yoil6 < 10){$yoil6 = "0".$yoil6;}
if($sunM < 10){$sunM = "0".$sunM;}
if($sunD < 10){$sunD = "0".$sunD;}


	$sql = "select * from manse_data where neun='".$sunY."' and weul='".$sunM."'";
	$query = mysql_query($sql);
	$all = mysql_affected_rows();

	for ($i = 0 ; $i<$all; $i++) {
		   mysql_data_seek($query,$i);
		   $row = mysql_fetch_array($query);

		   $weul = stripslashes($row[weul]);
		   $todayt = stripslashes($row[julipil]);
		   $totimet = stripslashes($row[julipsi]);
		   $tomint = stripslashes($row[julipbun]);
		   $julipilgan = stripslashes($row[julipilgan]);
		   
	}


$sun_day =$yoil0*1;

if($sun_day==$weul){
	$sun_daygan=$tomint;
	$sun_daygi=$julipilgan;
}elseif($sun_day>$weul){
	$sun_day_cha=$sun_day-$weul;
	$sun_daygan=$tomint+$sun_day_cha;
	$sun_daygi=$julipilgan+$sun_day_cha;
}else{
	$sun_day_cha=$weul-$sun_day;
	$sun_daygan=(($tomint+10)-$sun_day_cha);
	$sun_daygi=(($julipilgan+12)-$sun_day_cha);
}


//'각요일 별 일간 일지

$sun_daygan=($sun_daygan % 10);
if($sun_daygan==0){$sun_daygan=10;}
$sun_daygi=($sun_daygi % 12);
if($sun_daygi==0){$sun_daygi=12;}

$mon_daygan=(($sun_daygan+1) % 10);
if($mon_daygan==0){$mon_daygan=10;}
$mon_daygi=(($sun_daygi+1) % 12);
if($mon_daygi==0){$mon_daygi=12;}

$tue_daygan=(($mon_daygan+1) % 10);
if($tue_daygan==0){$tue_daygan=10;}
$tue_daygi=(($mon_daygi+1) % 12);
if($tue_daygi==0){$tue_daygi=12;}

$wed_daygan=(( $tue_daygan+1) % 10);
if($wed_daygan==0){$wed_daygan=10;}
$wed_daygi=(($tue_daygi+1) % 12);
if($wed_daygi==0){$wed_daygi=12;}

$thu_daygan=(($wed_daygan+1) % 10);
if($thu_daygan==0){$thu_daygan=10;}
$thu_daygi=(($wed_daygi+1) % 12);
if($thu_daygi==0){$thu_daygi=12;}

$fri_daygan=(($thu_daygan+1) % 10);
if($fri_daygan==0){$fri_daygan=10;}
$fri_daygi=(($thu_daygi+1) % 12);
if($fri_daygi==0){$fri_daygi=12;}

$sat_daygan=(($fri_daygan+1) % 10);
if($sat_daygan==0){$sat_daygan=10;}
$sat_daygi=(($fri_daygi+1) % 12);
if($sat_daygi==0){$sat_daygi=12;}



?>