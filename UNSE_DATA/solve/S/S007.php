<?

$a = $Xyeargan;
$b = $Tmonth;

	$sv = 14 - $a;
	
	if($sv > 12){$sv = $sv - 12;}

	$tempArr = "11-12-1-6-7-2-4-5-8-9-3-10";
	$tempArr = split("-", $tempArr);

	$vvv[0] = ($sv+$b)-1;
	$kk = $vvv[0];

	if($kk >=12){$kk = $kk % 12;}

	$vvv[0] = $kk;
	$vvv[1] = $tempArr[$kk];


$dang12 = $vvv[0];

$split_var = explode("|", F_dang4_6_db("S007", $dang12));

$Tb_S007 = $split_var[0]."<BR>";
$Tb_S007_numerical = $split_var[1];
?>