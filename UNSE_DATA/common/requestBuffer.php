<?
$solution_var = $_REQUEST["solution_var"];
$cate = $_REQUEST["cate"];
$sel = $_REQUEST["sel"];
$url = $_REQUEST["url"];
$ref_var = $_REQUEST["ref_var"];
$urltemp = $_REQUEST["urltemp"];

$user_name = $_REQUEST["user_name"];
$sex = $_REQUEST["sex"];
$youn = $_REQUEST["youn"];

$solunar = $_REQUEST["solunar"];
//$my_solnuar = $_REQUEST["my_solnuar"];
$my_solnuar = $solunar;

$request_year = $_REQUEST["request_year"];
$request_month = $_REQUEST["request_month"];
$request_day = $_REQUEST["request_day"];
$request_hour = $_REQUEST["request_hour"];
$request_min = $_REQUEST["request_min"];

if($year==""){$year=$request_year;}
if($month==""){$month=$request_month;}

$blood = $_REQUEST["blood"];				//'혈액형정보
$tele = $_REQUEST["tele"];
$jumin1 = $_REQUEST["jumin1"];			//'주민번호 1
$jumin2 = $_REQUEST["jumin2"];			//'주민번호 2
$serial = $_REQUEST["serial"];

$bloodm = $_REQUEST["bloodm"];				//'혈액형정보
$bloodw = $_REQUEST["bloodw"];				//'혈액형정보

//'----------------------------------------------- 나의 음양력 정보 도출 시작
$date_var2 = F_umyang_check($request_year.$request_month.$request_day, $my_solnuar, $youn);

If($my_solnuar == "solar"){
	$my_date = $request_year."-".$request_month."-".$request_day;
	$my_um_date = $date_var2;
}Else{
	$my_date = $date_var2;
	$my_um_date = $request_year."-".$request_month."-".$request_day;
}

$my_date_str = $my_date;
$my_um_date_str = $my_um_date;

$my_date_split = explode("-", $my_date);
$my_um_date_split = explode("-", $my_um_date);

$solar_year = $my_date_split[0];
$solar_month = $my_date_split[1];
$solar_day = $my_date_split[2];

$lunar_year = $my_um_date_split[0];
$lunar_month = $my_um_date_split[1];
$lunar_day = $my_um_date_split[2];
//'----------------------------------------------- 나의 음양력 정보 도출 끝

$my_time_str = F_time_str($request_hour, $request_min);

If($your_check == "Y"){
	$your_user_name = $_REQUEST["your_user_name"];
	$your_youn = $_REQUEST["your_youn"];
	$your_solunar = $_REQUEST["your_solunar"];
	$your_year = $_REQUEST["your_year"];
	$your_month = $_REQUEST["your_month"];
	$your_day = $_REQUEST["your_day"];
	$your_hour = $_REQUEST["your_hour"];
	$your_min = $_REQUEST["your_min"];
}else{
	$your_user_name = "";
	$your_youn = $youn;
	$your_solunar = $my_solnuar;
	$your_year = $request_year;
	$your_month = $request_month;
	$your_day = $request_day;
	$your_hour = $request_hour;
	$your_min = $request_min;
}

//'----------------------------------------------- 상대방의 음양력 정보 도출 시작
	$your_date_var2 = F_umyang_check($your_year.$your_month.$your_day, $your_solunar, $your_youn);

	If($your_solunar == "solar"){
		$your_date = $your_year."-".$your_month."-".$your_day;
		$your_um_date = $your_date_var2;
	}Else{
		$your_date = $your_date_var2;
		$your_um_date = $your_year."-".$your_month."-".$your_day;
	}
	
	$your_date_str = $your_date;
	$your_um_date_str = $your_um_date;

	$your_date_split = explode("-", $your_date);
	$your_um_date_split = explode("-", $your_date);

	$your_solar_year = $your_date_split[0];
	$your_solar_month = $your_date_split[1];
	$your_solar_day = $your_date_split[2];

	$your_lunar_year = $your_um_date_split[0];
	$your_lunar_month = $your_um_date_split[1];
	$your_lunar_day = $your_um_date_split[2];
//'----------------------------------------------- 상대방의 음양력 정보 도출 끝

	$your_time_str = F_time_str($your_hour, $your_min);

//'==================================================================작명
$name12_1 = $_REQUEST["name12_1"];
$msung = $_REQUEST["msung"];
$ysung = $_REQUEST["ysung"];
$name_1 = $_REQUEST["name_1"];
$name_2 = $_REQUEST["name_2"];
$name_3 = $_REQUEST["name_3"];
$name_4 = $_REQUEST["name_4"];
$name_5 = $_REQUEST["name_5"];
$hangul_1 = $_REQUEST["hangul_1"];
$hangul_2 = $_REQUEST["hangul_2"];
$hangul_3 = $_REQUEST["hangul_3"];
$hangul_4 = $_REQUEST["hangul_4"];
$hangul_5 = $_REQUEST["hangul_5"];
$showInputFN2 = $_REQUEST["showInputFN2"];
$showInputNN2 = $_REQUEST["showInputNN2"];
$showInputNN3 = $_REQUEST["showInputNN3"];
//'==================================================================작명

$sasangm = $_REQUEST["sasangm"];
$sasangw = $_REQUEST["sasangw"];

$intstick1 = $_REQUEST["intstick1"];
$intstick2 = $_REQUEST["intstick2"];
$intstick3 = $_REQUEST["intstick3"];
$intstick4 = $_REQUEST["intstick4"];
$intstick5 = $_REQUEST["intstick5"];
$intstick6 = $_REQUEST["intstick6"];

$intstick1z = $_REQUEST["intstick1z"];
$intstick2z = $_REQUEST["intstick2z"];
$intstick3z = $_REQUEST["intstick3z"];
$intstick4z = $_REQUEST["intstick4z"];
$intstick5z = $_REQUEST["intstick5z"];
$intstick6z = $_REQUEST["intstick6z"];

$intstick1zz = $_REQUEST["intstick1zz"];
$intstick2zz = $_REQUEST["intstick2zz"];
$intstick3zz = $_REQUEST["intstick3zz"];
$intstick4zz = $_REQUEST["intstick4zz"];
$intstick5zz = $_REQUEST["intstick5zz"];
$intstick6zz = $_REQUEST["intstick6zz"];

$rd = $_REQUEST["rd"];

$dream_name = $_REQUEST["dream_name"];

?>