<?

$toyear = date("Y");
$tomonth = date("M");
$today = date("d"); 
$totime = date("H");
$tomin = date("i");

if($request_month == "12" && $request_day > 23 || $request_month == "01" && $request_day < 21){
	$star_name = "염소자리";	 
	$serial_no= 12;
}elseif($request_month == "01" && $request_day > 20 || $request_month == "02" && $request_day < 20){
	$star_name = "물병자리";	 
	$serial_no=1;
}elseif($request_month == "02" && $request_day > 19 || $request_month == "03" && $request_day < 21){
	$star_name = "물고기자리"	; 
	$serial_no=2;
}elseif($request_month == "03" && $request_day > 20 || $request_month == "04" && $request_day < 21){
	$star_name = "양자리";	 
	$serial_no=3;
}elseif($request_month == "04" && $request_day > 20 || $request_month == "05" && $request_day < 22){
	$star_name = "황소자리";	 
	$serial_no=4;
}elseif($request_month == "05" && $request_day > 21 || $request_month == "06" && $request_day < 22){
	$star_name = "쌍둥이자리"	; 
	$serial_no=5;
}elseif($request_month == "06" && $request_day > 21 || $request_month == "07" && $request_day < 24){
	$star_name = "게자리";	 
	$serial_no=6;
}elseif($request_month == "07" && $request_day > 23 || $request_month == "08" && $request_day < 24){
	$star_name = "사자자리";	 
	$serial_no=7;
}elseif($request_month == "08" && $request_day > 23 || $request_month == "09" && $request_day < 24){
	$star_name = "처녀자리";	 
	$serial_no=8;
}elseif($request_month == "09" && $request_day > 23 || $request_month == "10" && $request_day < 24){
	$star_name = "천칭자리";	
	$serial_no=9;
}elseif($request_month == "10" && $request_day > 23 || $request_month == "11" && $request_day < 23){
	$star_name = "전갈자리"; 
	$serial_no=10;
}else{
	$star_name = "사수자리";	 
	$serial_no=11;
}

?>

<?include_once "f_Saju.php";?>
<?include_once "saju.php";?>