<?
global $PHP_SELF;

function error($a)
{}

$thisfilename = basename(__FILE__);
$temp_filename = realpath(__FILE__);

if(!$temp_filename){$temp_filename = __FILE__;}

$osdir = preg_replace("/$thisfilename/", "", $temp_filename);
$virdir = preg_replace("/$thisfilename/", "", $PHP_SELF);

$osdir = preg_replace("/incs/", "", $osdir);

unset($temp_filename);
//******************************************************************
//	함수명	:	f_Arr_readAdmin 
//	인수		:	
//	리턴		:	
//	설명		:	파일 불러오기
//******************************************************************
function f_Arr_readAdmin($selectstrFname){	
        if(!file_exists($selectstrFname)) return "";      // 파일 없으면 리턴
	$fd = fopen($selectstrFname, "r");                // 파일을 열고
	$allText = fread($fd, filesize($selectstrFname)); // 파일을 읽고
	fclose($fd);                                      // 파일을 닫고
	$f_Arr_readAdmin = explode("^", $allText);        // 처리하고
	return $f_Arr_readAdmin;                          // 리턴
}
//******************************************************************
//	함수명	:	s_setInfo 
//	인수		:	
//	리턴		:	
//	설명		:	파일 저장
//******************************************************************
function s_setInfo($selectstrFname, $str, $num){
        if(!file_exists($selectstrFname)) return "";
	$fd = fopen($selectstrFname, "r");
	$allText = fread($fd, filesize($selectstrFname));
	fclose($fd);

	$f_Arr_readAdmin = explode("^", $allText);

	$allstr = "";

	for($i=0;$i<sizeof($f_Arr_readAdmin);$i++){
		if($i == "0"){
			if($i == $num){
					$allstr = $str;
			}else{
				$allstr = $f_Arr_readAdmin[$i];
			}
		}else{
			if($i == $num){
					$allstr = $allstr."^".$str;
			}else{
				$allstr = $allstr."^".$f_Arr_readAdmin[$i];
			}
		}
	}

	$fw=fopen($selectstrFname,"w+");
	fwrite($fw, $allstr);
	fclose($fw);

	return $s_setInfo;
} 
//******************************************************************
//	함수명	:	F_sigi_code_change 
//	인수		:	
//	리턴		:	
//	설명		:	십이지 한글 상수 변환
//******************************************************************
function F_sigi_code_change($sigi_var){
	$sigi_code_var = "1";
	if($sigi_var=="子"||$sigi_var=="갑"||$sigi_var=="甲"||$sigi_var=="자"){		$sigi_code_var = "1";}
	if($sigi_var=="丑"||$sigi_var=="을"||$sigi_var=="乙"||$sigi_var=="축"){		$sigi_code_var = "2";}
	if($sigi_var=="寅"||$sigi_var=="병"||$sigi_var=="丙"||$sigi_var=="인"){		$sigi_code_var = "3";}
	if($sigi_var=="卯"||$sigi_var=="정"||$sigi_var=="丁"||$sigi_var=="묘"){		$sigi_code_var = "4";}
	if($sigi_var=="辰"||$sigi_var=="戊"||$sigi_var=="무"||$sigi_var=="진"){		$sigi_code_var = "5";}
	if($sigi_var=="巳"||$sigi_var=="己"||$sigi_var=="기"||$sigi_var=="사"){		$sigi_code_var = "6";}
	if($sigi_var=="午"||$sigi_var=="庚"||$sigi_var=="경"||$sigi_var=="오"){		$sigi_code_var = "7";}
	if($sigi_var=="未"||$sigi_var=="辛"||$sigi_var=="신"||$sigi_var=="미"){		$sigi_code_var = "8";}
	if($sigi_var=="申"||$sigi_var=="壬"||$sigi_var=="임"||$sigi_var=="신"){		$sigi_code_var = "9";}
	if($sigi_var=="酉"||$sigi_var=="계"||$sigi_var=="癸"||$sigi_var=="유"){		$sigi_code_var = "10";}
	if($sigi_var=="戌"||$sigi_var=="술"){	$sigi_code_var = "11";}
	if($sigi_var=="亥"||$sigi_var=="해"){	$sigi_code_var = "12";}

	return $sigi_code_var;
}
//******************************************************************
//	함수명	:	F_right 
//	인수		:	
//	리턴		:	
//	설명		:	
//******************************************************************
function F_right($a,$b){
	$c=strlen($a);
	$e=$c-$b;
	//$d=substr($a,$e,$c-$e);

	//$d=iconv_substr($a,1,2,"UTF-8");
	$d=iconv_substr($a,$e/4,$b/2,"UTF-8");

	return $d;
}

//******************************************************************
//	함수명	:	F_re_yukchin 
//	인수		:	
//	리턴		:	
//	설명		:	
//**
Function F_re_yukchin($a,$b,$ilgan){
	$chungan = "甲,乙,丙,丁,戊,己,庚,辛,壬,癸";
	$chungan = explode(",", $chungan);
	$gigi = "子,丑,寅,卯,辰,巳,午,未,申,酉,戌,亥";
	$gigi = explode(",", $gigi);

	$kiEum5 = "양목-음목-양화-음화-양토-음토-양금-음금-양수-음수";
	$kiEum5 = explode("-", $kiEum5);
	switch($ilgan){
		case "甲" : $ss = "0"; break;
		case "乙" : $ss = "1"; break;
		case "丙" : $ss = "2"; break;
		case "丁" : $ss = "3"; break;
		case "戊" : $ss = "4"; break;
		case "己" : $ss = "5"; break;
		case "庚" : $ss = "6"; break;
		case "辛" : $ss = "7"; break;
		case "壬" : $ss = "8"; break;
		case "癸" : $ss = "9"; break;
	}

	$kijun_5 = $kiEum5[$ss];

	if($b == 10){
		$tenEum5="양목-음목-양화-음화-양토-음토-양금-음금-양수-음수";
		$tenEum5=explode("-", $tenEum5);

		switch($ilgan){
			case "甲" : $ss = "0"; break;
			case "乙" : $ss = "1"; break;
			case "丙" : $ss = "2"; break;
			case "丁" : $ss = "3"; break;
			case "戊" : $ss = "4"; break;
			case "己" : $ss = "5"; break;
			case "庚" : $ss = "6"; break;
			case "辛" : $ss = "7"; break;
			case "壬" : $ss = "8"; break;
			case "癸" : $ss = "9"; break;
		}
		
		$bikyo = $tenEum5[$ss];
	}Else{
		$tenEum5="음수-음토-양목-음목-양토-양화-음화-음토-양금-음금-양토-양수";
		$tenEum5=explode("-", $tenEum5);

		switch($a){
			case "子" : $ss = "0"; break;
			case "丑" : $ss = "1"; break;
			case "寅" : $ss = "2"; break;
			case "卯" : $ss = "3"; break;
			case "辰" : $ss = "4"; break;
			case "巳" : $ss = "5"; break;
			case "午" : $ss = "6"; break;
			case "未" : $ss = "7"; break;
			case "申" : $ss = "8"; break;
			case "酉" : $ss = "9"; break;
			case "戌" : $ss = "10"; break;
			case "亥" : $ss = "11"; break;
		}
		
		$bikyo = $tenEum5[$ss];
	}

	$kijun_O = F_right($kijun_5,2);
	$kijun_E = iconv_substr($kijun_5,0,1);
	$bikyo_O = F_right($bikyo,2);
	$bikyo_E = iconv_substr($bikyo,0,1);

	$lifeassi="목생화-화생토-토생금-금생수-수생목";
	$lifekill="목극토-토극수-수극화-화극금-금극목";

	$ch_1 = strpos($lifeassi, $kijun_O."생".$bikyo_O);
	$ch_2 = strpos($lifekill, $kijun_O."극".$bikyo_O);


	$ch_3 = strpos($lifeassi, $bikyo_O."생".$kijun_O);
	$ch_4 = strpos($lifekill, $bikyo_O."극".$kijun_O);

	if($kijun_5 == $bikyo){$re_yukchin="비견(比肩)";}

	if($kijun_O== $bikyo_O && $kijun_E != $bikyo_E){$re_yukchin="겁재(劫財)";}

	if($kijun_O !=  $bikyo_O){
		if($ch_1 != 0 && $kijun_E == $bikyo_E){
			$re_yukchin="식신(食神)";
		}elseif ($ch_1 != 0 && $kijun_E != $bikyo_E){
			$re_yukchin="상관(傷官)";
		}elseif ($ch_2 != 0 && $kijun_E == $bikyo_E){
			$re_yukchin="편재(偏財)";
		}elseif ($ch_2 != 0 && $kijun_E != $bikyo_E){
			$re_yukchin="정재(正財)";
		}elseif ($ch_3 != 0 && $kijun_E == $bikyo_E){
			$re_yukchin="편인(偏印)";
		}elseif ($ch_3 != 0 && $kijun_E != $bikyo_E){
			$re_yukchin="정인(正印)";
		}elseif ($ch_4 != 0 && $kijun_E == $bikyo_E){
			$re_yukchin="편관(偏官)";
		}elseif ($ch_4 != 0 && $kijun_E != $bikyo_E){
			$re_yukchin="정관(正官)";
		}else{
			$re_yukchin="정관(正官)";
		}
	}
//echo $re_yukchin;
	return $re_yukchin;
}
//*/
//*************************************************************************
//	함수명	:	F_mb_sibsin
//	인수		:	
//	리턴		:	
//	설명		:	
//*************************************************************************
Function F_mb_sibsin($mb_sibsin_var){
	switch($mb_sibsin_var){
		case "比肩" : $mb_sibsin="01"; break;
		case "劫財" : $mb_sibsin="02"; break;
		case "食神" : $mb_sibsin="03"; break;
		case "傷官" : $mb_sibsin="04"; break;
		case "偏財" : $mb_sibsin="05"; break;
		case "正財" : $mb_sibsin="06"; break;
		case "偏官" : $mb_sibsin="07"; break;
		case "正官" : $mb_sibsin="08"; break;
		case "偏印" : $mb_sibsin="09"; break;
		case "正印" : $mb_sibsin="10"; break;
	}

	return $mb_sibsin;
}
//*************************************************************************
//	함수명	:	F_time_str
//	인수		:	
//	리턴		:	
//	설명		:	
//*************************************************************************
Function F_time_str($hour_var, $min_var){
	switch($hour_var){
		case "23" :
			if($min_var > 30){$time_str = "子時";}else{$time_str = "亥時";}
			break;
		case "24" :
		case "00" :
			$time_str = "모름";
			break;
		case "01" :
			if($min_var > 30){$time_str = "丑時";}else{$time_str = "子時";}
			break;
		case "02" :
			$time_str = "丑時";
			break;
		case "03" :
			if($min_var > 30){$time_str = "寅時";}else{$time_str = "丑時";}
			break;
		case "04" :
			$time_str = "寅時";
			break;
		case "05" :
			if($min_var > 30){$time_str = "卯時";}else{$time_str = "寅時";}
			break;
		case "06" :
			$time_str = "卯時";
			break;
		case "07" :
			if($min_var > 30){$time_str = "辰時";}else{$time_str = "卯時";}
			break;
		case "08" :
			$time_str = "辰時";
			break;
		case "09" :
			if($min_var > 30){$time_str = "巳時";}else{$time_str = "辰時";}
			break;
		case "10" :
			$time_str = "巳時";
			break;
		case "11" :
			if($min_var > 30){$time_str = "午時";}else{$time_str = "巳時";}
			break;
		case "12" :
			$time_str = "午時";
			break;
		case "13" :
			if($min_var > 30){$time_str = "未時";}else{$time_str = "午時";}
			break;
		case "14" :
			$time_str = "未時";
			break;
		case "15" :
			if($min_var > 30){$time_str = "申時";}else{$time_str = "未時";}
			break;
		case "16" :
			$time_str = "申時";
			break;
		case "17" :
			if($min_var > 30){$time_str = "酉時";}else{$time_str = "申時";}
			break;
		case "18" :
			$time_str = "酉時";
			break;
		case "19" :
			if($min_var > 30){$time_str = "戌時";}else{$time_str = "酉時";}
			break;
		case "20" :
			$time_str = "戌時";
			break;
		case "21" :
			if($min_var > 30){$time_str = "亥時";}else{$time_str = "戌時";}
			break;
		case "22" :
			$time_str = "亥時";
			break;
		default : 
			$time_str = "모름";
	}
/*
	If($hour_var == "23" && $min_var > 30 || $hour_var = "01" && $min_var < 31){
		$time_str = "子時";
	}ElseIf($hour_var == "01" && $min_var > 30 || $hour_var == "03" && $min_var < 31){ 
		$time_str = "丑時";
	}ElseIf($hour_var == "03" && $min_var > 30 || $hour_var == "05" && $min_var < 31){
		$time_str = "寅時";
	}ElseIf($hour_var == "05" && $min_var > 30 || $hour_var == "07" && $min_var < 31){
		$time_str = "卯時";
	}ElseIf($hour_var == "07" && $min_var > 30 || $hour_var == "09" && $min_var < 31){
		$time_str = "辰時";
	}ElseIf($hour_var == "09" && $min_var > 30 || $hour_var == "11" && $min_var < 31){
		$time_str = "巳時";
	}ElseIf($hour_var == "11" && $min_var > 30 || $hour_var == "13" && $min_var < 31){
		$time_str = "午時";
	}ElseIf($hour_var == "13" && $min_var > 30 || $hour_var == "15" && $min_var < 31){
		$time_str = "未時";
	}ElseIf($hour_var == "15" && $min_var > 30 || $hour_var == "17" && $min_var < 31){
		$time_str = "申時";
	}ElseIf($hour_var == "17" && $min_var > 30 || $hour_var == "19" && $min_var < 31){
		$time_str = "酉時";
	}ElseIf($hour_var == "19" && $min_var > 30 || $hour_var == "21" && $min_var < 31){
		$time_str = "戌時";
	}ElseIf($hour_var == "21" && $min_var > 30 || $hour_var == "23" && $min_var < 31){
		$time_str = "亥時";
	}Else{ 
		$time_str = "모름";
	}
*/
	return $time_str;
}
//*************************************************************************
//	함수명	:	F_umyang_check
//	인수		:	
//	리턴		:	
//	설명		:	
//*************************************************************************
function F_umyang_check($date_var, $solnuar_var, $youn_temp_var){
	extract($GLOBALS);

	$select_var = "";
	$where_var = "";

	If($solnuar_var == "solar" || $solnuar_var == "2"){
		$select_var = "umdate";
		$where_var = "no like '".$date_var."'";
	}Else{
		$select_var = "no";
		$where_var = "umdate like '".$date_var."' and youn like  '".$youn_temp_var."'";
	}

	$query = mysql_query("SELECT ".$select_var." as result_var FROM mansedata WHERE ".$where_var);

	$all = mysql_affected_rows();

	for ($i = 0 ; $i<$all; $i++){
		mysql_data_seek($query,$i);
		$row = mysql_fetch_array($query);
		$result_var = stripslashes($row[result_var]);
	}

	If($solnuar_var == "solar" || $solnuar_var == "2"){
		$L_lunar_year = substr($result_var,0,4);
		$L_lunar_month = substr($result_var,4,2);
		$L_lunar_day = substr($result_var,6,2);

		$result_lunar_var = $L_lunar_year."-".$L_lunar_month."-".$L_lunar_day;
	}Else{
		$L_solar_year = substr($result_var,0,4);
		$L_solar_month = substr($result_var,4,2);
		$L_solar_day = substr($result_var,6,2);

		$result_lunar_var = $L_solar_year."-".$L_solar_month."-".$L_solar_day;
	}

	return $result_lunar_var;
} 
//*************************************************************************
//	함수명	:	F_gabza_str
//	인수		:	
//	리턴		:	
//	설명		:	
//*************************************************************************
Function F_gabza_str($str_var){
	switch($str_var){
		Case "甲" : $no = 1; break;
		Case "乙" : $no = 2; break;
		Case "丙" : $no = 3; break;
		Case "丁" : $no = 4; break;
		Case "戊" : $no = 5; break;
		Case "己" : $no = 6; break;
		Case "庚" : $no = 7; break;
		Case "辛" : $no = 8; break;
		Case "壬" : $no = 9; break;
		Case "癸" : $no = 10; break;
	} 

	return $no;
}
//*************************************************************************
//	함수명	:	F_DDI_str
//	인수		:	
//	리턴		:	
//	설명		:	
//*************************************************************************
Function F_DDI_str($str_var){
	switch($str_var){
		Case "寅" : $no = 1; break;
		Case "卯" : $no = 2; break;
		Case "辰" : $no = 3; break;
		Case "巳" : $no = 4; break;
		Case "午" : $no = 5; break;
		Case "未" : $no = 6; break;
		Case "申" : $no = 7; break;
		Case "酉" : $no = 8; break;
		Case "戌" : $no = 9; break;
		Case "亥" : $no = 10; break;
		Case "子" : $no = 11; break;
		Case "丑" : $no = 12; break;
	}
	
	return $no;
}
//*************************************************************************
//	함수명	:	F_DDI
//	인수		:	
//	리턴		:	
//	설명		:	
//*************************************************************************
Function F_DDI($str){
	switch($str){
		Case "1" : $result_var = "쥐"; break;
		Case "2" : $result_var = "소"; break;
		Case "3" : $result_var = "호랑이"; break;
		Case "4" : $result_var = "토끼"; break;
		Case "5" : $result_var = "용"; break;
		Case "6" : $result_var = "뱀"; break;
		Case "7" : $result_var = "말"; break;
		Case "8" : $result_var = "양"; break;
		Case "9" : $result_var = "원숭이"; break;
		Case "10" : $result_var = "닭"; break;
		Case "11" : $result_var = "개"; break;
		Case "12" : $result_var = "돼지"; break;
	}

	return result_var;
}
//*************************************************************************
//	함수명	:	F_namedata
//	인수		:	
//	리턴		:	
//	설명		:	
//*************************************************************************
function F_namedata($sel, $namevar, $hangulvar){
	$sql = "SELECT * FROM namedata WHERE hanjawin =  '".$namevar."' and hangul = '".$hangulvar."'";
	$query = mysql_query($sql);
	$all = mysql_affected_rows();

	for ($i = 0 ; $i<$all; $i++) {
		   mysql_data_seek($query,$i);
		   $row = mysql_fetch_array($query);
		   $no = stripslashes($row[no]);
		   $hanjano = stripslashes($row[hanjano]);
		   $hanja = stripslashes($row[hanjawin]);
		   $hangul = stripslashes($row[hangul]);
		   $what = stripslashes($row[what]);
		   $mokwha = stripslashes($row[mokwha]);
		   $bulcomment = stripslashes($row[bulcomment]);
		   $mokwha11 = stripslashes($row[mokwha11]);
	}

	return $no."$".$hanjano."$".$hanja."$".$hangul."$".$what."$".$mokwha."$".$bulcomment."$".$mokwha11;
} 
//*************************************************************************
//	함수명	:	S_CI_img
//	인수		:	
//	리턴		:	
//	설명		:	
//*************************************************************************
function S_CI_img($img_T, $num_var){
	global $num_var2;

	$num_var2++;
?>
<table width='210' height='160' cellpadding='0' cellspacing='0' align='left' id='table_id<?=$num_var2?>'>
	<tr>
		<Td valign='top'><img src='/UNSE_DATA/images/ci_img/<?=$img_T?>_img/<?=$num_var?>' align='left' onerror="document.all.table_id<?=$num_var2?>.style.width='0'; document.all.table_id<?=$num_var2?>.style.height='0'; this.src=''"></tD>
	</tr>
</table><IMG height=5 src='/UNSE_DATA/images/nolink.png'><BR>
<?
} 
//*************************************************************************
//	함수명	:	S_SB_img
//	인수		:	
//	리턴		:	kok
//	설명		:	
//*************************************************************************
function S_SB_img($img_T, $solution_var){
	echo "<tR><td align='center'><IMG height='8' src='/UNSE_DATA/images/nolink.png'><BR><img src='/UNSE_DATA/images/D_img/SB_img/".$img_T.".jpg'></td></tr>";
} 
//*************************************************************************
//	함수명	:	F_yoil
//	인수		:	
//	리턴		:	
//	설명		:	
//*************************************************************************
Function F_yoil($num_var){
	switch($num_var){
		Case "0" : $yoil_info = "일"; break;
		Case "1" : $yoil_info = "월"; break;
		Case "2" : $yoil_info = "화"; break;
		Case "3" : $yoil_info = "수"; break;
		Case "4" : $yoil_info = "목"; break;
		Case "5" : $yoil_info = "금"; break;
		Case "6" : $yoil_info = "토"; break;
	} 

	return $yoil_info;
} 
//*************************************************************************
//	함수명	:	S_epos
//	인수		:	
//	리턴		:	
//	설명		:	
//*************************************************************************
function S_epos($my_day_e, $daeun_check){
	if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($daeun_check == "寅")){$daeun_sal = "겁살";}
	if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($daeun_check == "卯")){$daeun_sal = "재살";}
	if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($daeun_check == "辰")){$daeun_sal = "천살";}
	if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($daeun_check == "巳")){$daeun_sal = "지살";}
	if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($daeun_check == "午")){$daeun_sal = "도화";}
	if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($daeun_check == "未")){$daeun_sal = "월살";}
	if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($daeun_check == "申")){$daeun_sal = "망신";}
	if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($daeun_check == "酉")){$daeun_sal = "장성";}
	if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($daeun_check == "戌")){$daeun_sal = "반안";}
	if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($daeun_check == "亥")){$daeun_sal = "역마";}
	if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($daeun_check == "子")){$daeun_sal = "육해";}
	if((($my_day_e == "巳") || ($my_day_e == "酉") ||  ($my_day_e == "丑")) && ($daeun_check == "丑")){$daeun_sal = "화개";}
	if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($daeun_check == "寅")){$daeun_sal = "역마";}
	if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($daeun_check == "卯")){$daeun_sal = "육해";}
	if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($daeun_check == "辰")){$daeun_sal = "화개";}
	if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($daeun_check == "巳")){$daeun_sal = "겁살";}
	if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($daeun_check == "午")){$daeun_sal = "재살";}
	if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($daeun_check == "未")){$daeun_sal = "천살";}
	if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($daeun_check == "申")){$daeun_sal = "지살";}
	if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($daeun_check == "酉")){$daeun_sal = "도화";}
	if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($daeun_check == "戌")){$daeun_sal = "월살";}
	if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($daeun_check == "亥")){$daeun_sal = "망신";}
	if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($daeun_check == "子")){$daeun_sal = "장성";}
	if((($my_day_e == "申") || ($my_day_e == "子") ||  ($my_day_e == "辰")) && ($daeun_check == "丑")){$daeun_sal = "반안";}
	if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($daeun_check == "寅")){$daeun_sal = "망신";}
	if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($daeun_check == "卯")){$daeun_sal = "장성";}
	if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($daeun_check == "辰")){$daeun_sal = "반안";}
	if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($daeun_check == "巳")){$daeun_sal = "역마";}
	if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($daeun_check == "午")){$daeun_sal = "육해";}
	if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($daeun_check == "未")){$daeun_sal = "화개";}
	if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($daeun_check == "申")){$daeun_sal = "겁살";}
	if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($daeun_check == "酉")){$daeun_sal = "재살";}
	if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($daeun_check == "戌")){$daeun_sal = "천살";}
	if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($daeun_check == "亥")){$daeun_sal = "지살";}
	if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($daeun_check == "子")){$daeun_sal = "도화";}
	if((($my_day_e == "亥") || ($my_day_e == "卯") ||  ($my_day_e == "未")) && ($daeun_check == "丑")){$daeun_sal = "월살";}
	if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($daeun_check == "寅")){$daeun_sal = "지살";}
	if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($daeun_check == "卯")){$daeun_sal = "도화";}
	if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($daeun_check == "辰")){$daeun_sal = "월살";}
	if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($daeun_check == "巳")){$daeun_sal = "망신";}
	if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($daeun_check == "午")){$daeun_sal = "장성";}
	if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($daeun_check == "未")){$daeun_sal = "반안";}
	if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($daeun_check == "申")){$daeun_sal = "역마";}
	if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($daeun_check == "酉")){$daeun_sal = "육해";}
	if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($daeun_check == "戌")){$daeun_sal = "화개";}
	if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($daeun_check == "亥")){$daeun_sal = "겁살";}
	if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($daeun_check == "子")){$daeun_sal = "재살";}
	if((($my_day_e == "寅") || ($my_day_e == "午") ||  ($my_day_e == "戌")) && ($daeun_check == "丑")){$daeun_sal = "천살";}

	$sql = "SELECT DB_data FROM S122 WHERE DB_express like  '$daeun_sal'";
	$query = mysql_query($sql);
	$all = mysql_affected_rows();

	for ($i = 0 ; $i<$all; $i++) {
		   mysql_data_seek($query,$i);
		   $row = mysql_fetch_array($query);
		   $data = stripslashes($row[DB_data]);
	}

	echo $data;
}
//*************************************************************************
//	함수명	:	S_epos2
//	인수		:	
//	리턴		:	
//	설명		:	
//*************************************************************************
function S_epos2($td_dae_m_sipsin, $td_sipsin_m_h, $td_sipsin_m_e){
	$sql = "SELECT DB_data FROM S124 WHERE DB_express = '".$td_dae_m_sipsin."' and DB_express_1 = '".$td_sipsin_m_h."'";
	$query = mysql_query($sql);
	$all = mysql_affected_rows();

	for ($i = 0 ; $i<$all; $i++) {
		   mysql_data_seek($query,$i);
		   $row = mysql_fetch_array($query);
		   $data_1 = str_replace("<BR>", "", stripslashes($row[DB_data]));
	}

	$sql = "SELECT DB_data FROM S124 WHERE DB_express = '".$td_dae_m_sipsin."' and DB_express_1 = '".$td_sipsin_m_e."'";
	$query = mysql_query($sql);
	$all = mysql_affected_rows();

	for ($i = 0 ; $i<$all; $i++) {
		   mysql_data_seek($query,$i);
		   $row = mysql_fetch_array($query);
		   $data_2 = str_replace("<BR>", "", stripslashes($row[DB_data]));
	}
	
	$data_all = $data_1.$data_2;

	$split_var = explode(".", $data_all);

	for($i=0; $i < sizeof($split_var) - 1; $i++){
		echo $split_var[$i].".<br><br>";
	}
}
//*************************************************************************
//	함수명	:	S_graph
//	인수		:	
//	리턴		:	
//	설명		:	
//*************************************************************************
function S_graph($Tb_numerical_var, $Tb_numerical_name){
	switch($Tb_numerical_var){
		Case "3" : $width = "132"; break;
		Case "4" : $width = "177"; break;
		Case "5" : $width = "223"; break;
		Case "6" : $width = "267"; break;
		Case "7" : $width = "313"; break;
		Case "8" : $width = "357"; break;
		Case "9" : $width = "403"; break;
		default : $width=rand(100,200);
		
	} 
?>
								<div id="div_day_bg" style="position:absolute; z-index:1;">
									<div id="div_big" style="position:absolute; z-index:3; top:35px; left:4px; height:100px;">
									<table cellpadding="0" cellspacing="0">
										<tr>
											<td><img src="/UNSE_DATA/images/graph_img/graph_top_left.jpg"></tD>
											<td bgcolor="#7D7D7D" style="padding-top:2px;">&nbsp;&nbsp;<font color="#FFFFFF"><b><?=$Tb_numerical_name?></b></font>&nbsp;&nbsp;</td>
											<td><img src="/UNSE_DATA/images/graph_img/graph_top_right.jpg"></tD>
										</tr>
									</table>
									</div>
									<div id="div_big" style="position:absolute; z-index:3; top:111px; left:29px; height:100px;"><img src="/UNSE_DATA/images/graph_img/graph_e.jpg" width="<?=$width?>" height="18"></div>
								</div>
								<BR><BR><BR><BR><BR><center><img src="/UNSE_DATA/images/graph_img/graph_bg_1.jpg"><BR><BR></center>
<?
} 

//'*************************************************************************
//'	함수명	:	F_towoonsung
//'	인수		:	
//'	리턴		:	
//'	설명		:	
//'*************************************************************************
function F_towoonsung($b){
	$gan_0="02-03-04-05-06-07-08-09-10-11-12-01";
	$gan_1="07-06-05-04-03-02-01-12-11-10-09-08";
	$gan_2="11-12-01-02-03-04-05-06-07-08-09-12";
	$gan_3="10-09-08-07-06-05-04-03-02-01-12-11";
	$gan_4="11-12-01-02-03-04-05-06-07-08-09-10";
	$gan_5="10-09-08-07-06-05-04-03-02-01-12-11";
	$gan_6="08-09-10-11-12-01-02-03-04-05-06-07";
	$gan_7="01-12-11-10-09-08-07-06-05-04-03-02";
	$gan_8="05-06-07-08-09-10-11-12-01-02-03-04";
	$gan_9="04-03-02-01-12-11-10-09-08-07-06-05";



	$PO[0][0]=$gan_0;
	$PO[1][0]=$gan_1;
	$PO[2][0]=$gan_2;
	$PO[3][0]=$gan_3;
	$PO[4][0]=$gan_4;
	$PO[5][0]=$gan_5;
	$PO[6][0]=$gan_6;
	$PO[7][0]=$gan_7;
	$PO[8][0]=$gan_8;
	$PO[9][0]=$gan_9;

	$cc = $todaygan-1;

	$temp= $PO[$cc][0];
	$temp = split("-",$temp);

	return $temp[$b-1];
}

//'*************************************************************************
//'
//'	함수명	:	F_woonsung 
//'	인수		:	b, daygan
//'	리턴		:	
//'	설명		:	지지에 대한 코드를 뽑는다.1-12까지
//'
//'*************************************************************************
Function F_woonsung($b,$daygan){
	$Agan="甲-乙-丙-丁-戊-己-庚-辛-壬-癸";
	$Agan=explode("-", $Agan);

	$Azi="子-丑-寅-卯-辰-巳-午-未-申-酉-戌-亥";
	$Azi=explode("-",$Azi);

	$gan_0="02-03-04-05-06-07-08-09-10-11-12-01";
	$gan_1="07-06-05-04-03-02-01-12-11-10-09-08";
	$gan_2="11-12-01-02-03-04-05-06-07-08-09-10";
	$gan_3="10-09-08-07-06-05-04-03-02-01-12-11";
	$gan_4="11-12-01-02-03-04-05-06-07-08-09-10";
	$gan_5="10-09-08-07-06-05-04-03-02-01-12-11";
	$gan_6="08-09-10-11-12-01-02-03-04-05-06-07";
	$gan_7="01-12-11-10-09-08-07-06-05-04-03-02";
	$gan_8="05-06-07-08-09-10-11-12-01-02-03-04";
	$gan_9="04-03-02-01-12-11-10-09-08-07-06-05";

	$PO[0][0]=$gan_0;
	$PO[1][0]=$gan_1;
	$PO[2][0]=$gan_2;
	$PO[3][0]=$gan_3;
	$PO[4][0]=$gan_4;
	$PO[5][0]=$gan_5;
	$PO[6][0]=$gan_6;
	$PO[7][0]=$gan_7;
	$PO[8][0]=$gan_8;
	$PO[9][0]=$gan_9;

	for($i = 0; $i <= sizeof($Agan); $i++){
		if($Agan[$i] == $daygan){
			for($j = 0; $j <= sizeof($Azi); $j++){
				if($Azi[$j] == $b){	
					$tempA =  explode("-", $PO[$i][0]);
					return  $tempA[$j];
					break;
				}
			}
		}
	}
}
//'*************************************************************************
//'	함수명	:	F_woonday
//'	인수		:	
//'	리턴		:	
//'	설명		:	
//'*************************************************************************
Function F_woonday($mm,$Q, $Xyeargi){

	switch($mm){
		Case "S008" : $mod_var = 10; break;
		default : $mod_var = 12;
	}

	$Q = ($Q + $Xyeargi) % $mod_var;
	If($Q == 0){$Q = 1;}

	$sql = "SELECT DB_data, DB_numerical FROM ".$mm." WHERE DB_num = '".$Q."'";

	$query = mysql_query($sql);
	$all = mysql_affected_rows();

	for ($i = 0 ; $i<$all; $i++) {
		mysql_data_seek($query,$i);
		$row = mysql_fetch_array($query);
		$DB_data = stripslashes($row[DB_data]);
		$DB_numerical = stripslashes($row[DB_numerical]);

	}

	$tempResult = $DB_data."|".$DB_numerical;

	return $tempResult;
}

//'******************************************************************
//'	함수명	:	S_dang11_12 
//'	인수		:	
//'	리턴		:	
//'	설명		:	S001.asp
//'******************************************************************
Function S_dang11_12($a,$b){
	$sv = 14 - $a;
	
	if($sv > 12){$sv = $sv - 12;}

	$tempArr = "11-12-1-6-7-2-4-5-8-9-3-10";
	$tempArr = split("-", $tempArr);

	$vvv[0] = ($sv+$b)-1;
	$kk = $vvv[0];

	if($kk >=12){$kk = $kk % 12;}

	$vvv[0] = $kk;
	$vvv[1] = $tempArr[$kk];
}
//'******************************************************************
//'	함수명	:	S_dang4_6 
//'	인수		:	
//'	리턴		:	
//'	설명		:	
//'******************************************************************
Function S_dang4_6($a, $b){
	$sv = 14 - $a;

	if($sv > 12){$sv = $sv - 12;}

	$vv[0] = ($sv+$b)-1;
	$vv[1] = (($sv+$b)-1) + 6;
	$vv[2] = ($sv+$b)-1;
	$vv[3] = (($sv+$b)-1) + 6;

	for($i = 0; $i >= 3; $I++){
		if($vv[$i] > 12){$vv[$i] = $vv[$i] - 12;}
	}
}
//'******************************************************************
//'	함수명	:	F_dang4_6_db 
//'	인수		:	
//'	리턴		:	
//'	설명		:	S001.asp
//'******************************************************************
Function F_dang4_6_db($a, $b){
	If($b > 12){
		$b = $b % 12;

		If($b == 0){
			$b = $b +1;
		}
	}
	
	if($b == 0){$b= 1;}

	$sql = "Select DB_data, DB_numerical from ".$a." where DB_express = '".$b."'";

	$query = mysql_query($sql);
	$all = mysql_affected_rows();

	for ($i = 0 ; $i<$all; $i++) {
		mysql_data_seek($query,$i);
		$row = mysql_fetch_array($query);
		$temp = stripslashes($row[DB_data]);
		$temp2 = stripslashes($row[DB_numerical]);
	}

	$temp_var = str_replace(chr(10), "<BR>", $temp);
	$temp2_var = $temp2;

	return $temp_var."|".$temp2_var;
}
//'*************************************************************************
//'	함수명	:	F_Oheng
//'	인수		:	
//'	리턴		:	
//'	설명		:	
//*************************************************************************
Function F_Oheng($str_var){
	switch($str_var){
		Case "甲" :
		case "寅" : 
			$Oheng_var = "+목";
			break;
		Case "乙" :
		case "卯" : 
			$Oheng_var = "-목" ;
			break;
		Case "丙" :
		case "巳" : 
			$Oheng_var = "+화";
			break;
		Case "丁" :
		case "午" : 
			$Oheng_var = "-화";
			break;
		Case "戊" :
		case "辰" :
		case "戌" : 
			$Oheng_var = "+토";
			break;
		Case "己" :
		case "未" :
		case "丑" : 
			$Oheng_var = "-토";
			break;
		Case "庚" :
		case "申" : 
			$Oheng_var = "+금";
			break;
		Case "辛" :
		case "酉" : 
			$Oheng_var = "-금";
			break;
		Case "壬" :
		case "亥" : 
			$Oheng_var = "+수";
			break;
		Case "癸" :
		case "子" : 
			$Oheng_var = "-수";
			break;
	}

	return $Oheng_var;
}

/*'*************************************************************************
'	함수명	:	F_ohengSearch
'	인수		:	
'	리턴		:	
'	설명		:	
'*************************************************************************/
Function F_ohengSearch($strVar){
	switch($strVar){
		Case "03" :
		case "04" : $resultVar = 1; break;
		Case "06" :
		case "07" : $resultVar = 2; break;
		Case "05" :
		case "11" :
		case "08" :
		case "02" : $resultVar = 3; break;
		Case "09" :
		case "10" : $resultVar = 4; break;
		Case "12" :
		case "01" : $resultVar = 5; break;
	} 

	return $resultVar;
}

/*'*************************************************************************
'	함수명		:	F_Juyeok_trigram
'	인수		:	
'	리턴		:	
'	설명		:	간지를 8괘로 변환
'*************************************************************************/
Function F_Juyeok_trigram($modeVar, $strVar, $secondJiVar){
	switch($modeVar){
		Case "Gan" :
			
			if($strVar.$secondJiVar=="갑인"||$strVar.$secondJiVar=="갑오"||$strVar.$secondJiVar=="갑술"||$strVar.$secondJiVar=="병신"||$strVar.$secondJiVar=="병자"||$strVar.$secondJiVar=="병진"||$strVar.$secondJiVar=="무해"||$strVar.$secondJiVar=="무묘"||$strVar.$secondJiVar=="무미"||$strVar.$secondJiVar=="경사"||$strVar.$secondJiVar=="임인"||$strVar.$secondJiVar=="경유"||$strVar.$secondJiVar=="경축"||$strVar.$secondJiVar=="임오"||$strVar.$secondJiVar=="임술"){
				$trigramVar = "건";
			}

			if($strVar.$secondJiVar=="을인"||$strVar.$secondJiVar=="을오"||$strVar.$secondJiVar=="을술"||$strVar.$secondJiVar=="정신"||$strVar.$secondJiVar=="기묘"||$strVar.$secondJiVar=="정진"||$strVar.$secondJiVar=="기해"||$strVar.$secondJiVar=="정자"||$strVar.$secondJiVar=="기미"||$strVar.$secondJiVar=="신사"||$strVar.$secondJiVar=="계오"||$strVar.$secondJiVar=="계인"||$strVar.$secondJiVar=="신유"||$strVar.$secondJiVar=="신축"||$strVar.$secondJiVar=="계술"){
				$trigramVar = "태";
			}

			if($strVar.$secondJiVar=="갑사"||$strVar.$secondJiVar=="갑유"||$strVar.$secondJiVar=="갑축"||$strVar.$secondJiVar=="병인"||$strVar.$secondJiVar=="병오"||$strVar.$secondJiVar=="병술"||$strVar.$secondJiVar=="무신"||$strVar.$secondJiVar=="무자"||$strVar.$secondJiVar=="무진"||$strVar.$secondJiVar=="경해"||$strVar.$secondJiVar=="경묘"||$strVar.$secondJiVar=="경미"||$strVar.$secondJiVar=="임사"||$strVar.$secondJiVar=="임유"||$strVar.$secondJiVar=="임축"){
				$trigramVar = "이";
			}

			if($strVar.$secondJiVar=="을사"||$strVar.$secondJiVar=="을유"||$strVar.$secondJiVar=="을축"||$strVar.$secondJiVar=="정오"||$strVar.$secondJiVar=="정인"||$strVar.$secondJiVar=="정술"||$strVar.$secondJiVar=="기신"||$strVar.$secondJiVar=="기자"||$strVar.$secondJiVar=="기진"||$strVar.$secondJiVar=="신해"||$strVar.$secondJiVar=="신묘"||$strVar.$secondJiVar=="신미"||$strVar.$secondJiVar=="계사"||$strVar.$secondJiVar=="계유"||$strVar.$secondJiVar=="계축"){
				$trigramVar = "진";
			}

			if($strVar.$secondJiVar=="갑해"||$strVar.$secondJiVar=="갑묘"||$strVar.$secondJiVar=="갑미"||$strVar.$secondJiVar=="병사"||$strVar.$secondJiVar=="병유"||$strVar.$secondJiVar=="병축"||$strVar.$secondJiVar=="경신"||$strVar.$secondJiVar=="무인"||$strVar.$secondJiVar=="무오"||$strVar.$secondJiVar=="경자"||$strVar.$secondJiVar=="무술"||$strVar.$secondJiVar=="임해"||$strVar.$secondJiVar=="임묘"||$strVar.$secondJiVar=="임미"||$strVar.$secondJiVar=="경진"){
				$trigramVar = "손"; 
			}

			if($strVar.$secondJiVar=="을해"||$strVar.$secondJiVar=="을묘"||$strVar.$secondJiVar=="정사"||$strVar.$secondJiVar=="을미"||$strVar.$secondJiVar=="정유"||$strVar.$secondJiVar=="정축"||$strVar.$secondJiVar=="기인"||$strVar.$secondJiVar=="기오"||$strVar.$secondJiVar=="기술"||$strVar.$secondJiVar=="신신"||$strVar.$secondJiVar=="계해"||$strVar.$secondJiVar=="신진"||$strVar.$secondJiVar=="신자"||$strVar.$secondJiVar=="계묘"||$strVar.$secondJiVar=="계미"){
				$trigramVar = "감";
			}

			if($strVar.$secondJiVar=="갑신"||$strVar.$secondJiVar=="갑자"||$strVar.$secondJiVar=="갑진"||$strVar.$secondJiVar=="병해"||$strVar.$secondJiVar=="병묘"||$strVar.$secondJiVar=="임신"||$strVar.$secondJiVar=="무축"||$strVar.$secondJiVar=="무사"||$strVar.$secondJiVar=="병미"||$strVar.$secondJiVar=="경술"||$strVar.$secondJiVar=="경오"||$strVar.$secondJiVar=="경인"||$strVar.$secondJiVar=="무유"||$strVar.$secondJiVar=="임진"||$strVar.$secondJiVar=="임자"){
				$trigramVar = "간";
			}

			if($strVar.$secondJiVar=="을신"||$strVar.$secondJiVar=="을자"||$strVar.$secondJiVar=="을진"||$strVar.$secondJiVar=="정해"||$strVar.$secondJiVar=="정묘"||$strVar.$secondJiVar=="기사"||$strVar.$secondJiVar=="정미"||$strVar.$secondJiVar=="기유"||$strVar.$secondJiVar=="신오"||$strVar.$secondJiVar=="신술"||$strVar.$secondJiVar=="신인"||$strVar.$secondJiVar=="계신"||$strVar.$secondJiVar=="기축"||$strVar.$secondJiVar=="계진"||$strVar.$secondJiVar=="계자"){
				$trigramVar = "곤";
			}


			
			break;
		Case "Ji" : 

			if($strVar.$secondJiVar=="자인"||$strVar.$secondJiVar=="자오"||$strVar.$secondJiVar=="자술"||$strVar.$secondJiVar=="묘신"||$strVar.$secondJiVar=="묘자"||$strVar.$secondJiVar=="묘진"||$strVar.$secondJiVar=="진사"||$strVar.$secondJiVar=="미묘"||$strVar.$secondJiVar=="진유"||$strVar.$secondJiVar=="미미"||$strVar.$secondJiVar=="해자"||$strVar.$secondJiVar=="진축"||$strVar.$secondJiVar=="미해"||$strVar.$secondJiVar=="신인"||$strVar.$secondJiVar=="신오"||$strVar.$secondJiVar=="신술"||$strVar.$secondJiVar=="해신"||$strVar.$secondJiVar=="해진"){
				$trigramVar = "건";
			}
			if($strVar.$secondJiVar=="축인"||$strVar.$secondJiVar=="축오"||$strVar.$secondJiVar=="인신"||$strVar.$secondJiVar=="축술"||$strVar.$secondJiVar=="사유"||$strVar.$secondJiVar=="인자"||$strVar.$secondJiVar=="인진"||$strVar.$secondJiVar=="오해"||$strVar.$secondJiVar=="오미"||$strVar.$secondJiVar=="사사"||$strVar.$secondJiVar=="술신"||$strVar.$secondJiVar=="유술"||$strVar.$secondJiVar=="오묘"||$strVar.$secondJiVar=="유오"||$strVar.$secondJiVar=="유인"||$strVar.$secondJiVar=="술진"||$strVar.$secondJiVar=="술자"||$strVar.$secondJiVar=="사축"){
				$trigramVar = "태";
			}
			if($strVar.$secondJiVar=="축신"||$strVar.$secondJiVar=="축자"||$strVar.$secondJiVar=="축진"||$strVar.$secondJiVar=="인인"||$strVar.$secondJiVar=="인오"||$strVar.$secondJiVar=="인술"||$strVar.$secondJiVar=="사해"||$strVar.$secondJiVar=="사묘"||$strVar.$secondJiVar=="사미"||$strVar.$secondJiVar=="유진"||$strVar.$secondJiVar=="오사"||$strVar.$secondJiVar=="오축"||$strVar.$secondJiVar=="오유"||$strVar.$secondJiVar=="유신"||$strVar.$secondJiVar=="유자"||$strVar.$secondJiVar=="술인"||$strVar.$secondJiVar=="술술"||$strVar.$secondJiVar=="술오"){
				$trigramVar = "이";
			}
			if($strVar.$secondJiVar=="자신"||$strVar.$secondJiVar=="자자"||$strVar.$secondJiVar=="자진"||$strVar.$secondJiVar=="해술"||$strVar.$secondJiVar=="묘인"||$strVar.$secondJiVar=="묘술"||$strVar.$secondJiVar=="진해"||$strVar.$secondJiVar=="진묘"||$strVar.$secondJiVar=="미유"||$strVar.$secondJiVar=="신진"||$strVar.$secondJiVar=="진미"||$strVar.$secondJiVar=="미축"||$strVar.$secondJiVar=="신자"||$strVar.$secondJiVar=="해인"||$strVar.$secondJiVar=="미사"||$strVar.$secondJiVar=="묘오"||$strVar.$secondJiVar=="신신"||$strVar.$secondJiVar=="해오"){
				$trigramVar = "진";
			}
			if($strVar.$secondJiVar=="자사"||$strVar.$secondJiVar=="자유"||$strVar.$secondJiVar=="해미"||$strVar.$secondJiVar=="자축"||$strVar.$secondJiVar=="묘해"||$strVar.$secondJiVar=="묘묘"||$strVar.$secondJiVar=="묘미"||$strVar.$secondJiVar=="진인"||$strVar.$secondJiVar=="진오"||$strVar.$secondJiVar=="진술"||$strVar.$secondJiVar=="미신"||$strVar.$secondJiVar=="미자"||$strVar.$secondJiVar=="미진"||$strVar.$secondJiVar=="신사"||$strVar.$secondJiVar=="신유"||$strVar.$secondJiVar=="신축"||$strVar.$secondJiVar=="해해"||$strVar.$secondJiVar=="해묘"){
				$trigramVar = "손";
			}
			if($strVar.$secondJiVar=="축사"||$strVar.$secondJiVar=="축유"||$strVar.$secondJiVar=="축축"||$strVar.$secondJiVar=="인해"||$strVar.$secondJiVar=="인묘"||$strVar.$secondJiVar=="사인"||$strVar.$secondJiVar=="인미"||$strVar.$secondJiVar=="사오"||$strVar.$secondJiVar=="사술"||$strVar.$secondJiVar=="오신"||$strVar.$secondJiVar=="오자"||$strVar.$secondJiVar=="오진"||$strVar.$secondJiVar=="술해"||$strVar.$secondJiVar=="유축"||$strVar.$secondJiVar=="유유"||$strVar.$secondJiVar=="유사"||$strVar.$secondJiVar=="술미"||$strVar.$secondJiVar=="술묘"){
				$trigramVar = "감";
			}

			if($strVar.$secondJiVar=="축해"||$strVar.$secondJiVar=="축묘"||$strVar.$secondJiVar=="축미"||$strVar.$secondJiVar=="인사"||$strVar.$secondJiVar=="인유"||$strVar.$secondJiVar=="인축"||$strVar.$secondJiVar=="사신"||$strVar.$secondJiVar=="사자"||$strVar.$secondJiVar=="사진"||$strVar.$secondJiVar=="오인"||$strVar.$secondJiVar=="오오"||$strVar.$secondJiVar=="오술"||$strVar.$secondJiVar=="유해"||$strVar.$secondJiVar=="유묘"||$strVar.$secondJiVar=="유미"||$strVar.$secondJiVar=="술사"||$strVar.$secondJiVar=="술축"||$strVar.$secondJiVar=="술유"){
				$trigramVar = "간";
			}

			if($strVar.$secondJiVar=="자해"||$strVar.$secondJiVar=="자묘"||$strVar.$secondJiVar=="자미"||$strVar.$secondJiVar=="묘사"||$strVar.$secondJiVar=="묘유"||$strVar.$secondJiVar=="묘축"||$strVar.$secondJiVar=="진신"||$strVar.$secondJiVar=="진자"||$strVar.$secondJiVar=="진진"||$strVar.$secondJiVar=="미인"||$strVar.$secondJiVar=="미오"||$strVar.$secondJiVar=="미술"||$strVar.$secondJiVar=="신해"||$strVar.$secondJiVar=="신묘"||$strVar.$secondJiVar=="신미"||$strVar.$secondJiVar=="해사"||$strVar.$secondJiVar=="해축"||$strVar.$secondJiVar=="해유"){
				$trigramVar = "곤";
			}
			
			break;
	} 

	return $trigramVar;
}


  Function DateDiffs ($interval, $date1,$date2) {

     // 두 날짜간 시간간격을 초로 얻을 수 있습니다.
     // bcdiv()는 오른쪽의 인자로 왼쪽의 인자를 나누어준          반환합니다.

     $timedifference = $date2 - $date1;

     switch ($interval) {
         case "w": 
         $retval = $timedifference/604800; 
         break; 

         case "d": 
         $retval = $timedifference / 86400; 
         break; 

         case "h": 
         $retval = $timedifference/3600; 
         break; 

         case "n": 
         $retval = $timedifference/60; 
         break; 

         case "s": 
         $retval = $timedifference; 
         break; 
       } 
         return $retval;
  }




?>