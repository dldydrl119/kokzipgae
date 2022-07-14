<?


$F_namedata1 = F_namedata($sel, $name_1, $hangul_1);		//성 1
$F_namedata2 = F_namedata($sel, $name_2, $hangul_2);		//성 2
$F_namedata3 = F_namedata($sel, $name_3, $hangul_3);		//성 3
$F_namedata4 = F_namedata($sel, $name_4, $hangul_4);		//성 4
$F_namedata5 = F_namedata($sel, $name_5, $hangul_5);		//성 5

switch($sel){
	case "1" :
		$F_namedata1_split = explode("$", $F_namedata1);
		$F_namedata3_split = explode("$", $F_namedata3);

		$hanjano1 = $F_namedata1_split[1];
		$hanja1 = $F_namedata1_split[2];
		$hangul1 = $F_namedata1_split[3];
		$what1 = $F_namedata1_split[4];
		$mokwha1 = $F_namedata1_split[5];

		$hanjano2 = $F_namedata3_split[1];
		$hanja2 = $F_namedata3_split[2];
		$hangul2 = $F_namedata3_split[3];
		$what2 = $F_namedata3_split[4];
		$mokwha2 = $F_namedata3_split[5];
		$bulcomment2 = $F_namedata3_split[6];

		$mokwha11 = $F_namedata3_split[7];

		break;
	case "2" :
		$F_namedata1_split = explode("$", $F_namedata1);
		$F_namedata3_split = explode("$", $F_namedata3);
		$F_namedata4_split = explode("$", $F_namedata4);

		$hanjano1 = $F_namedata1_split[1];
		$hanja1 = $F_namedata1_split[2];
		$hangul1 = $F_namedata1_split[3];
		$what1 = $F_namedata1_split[4];
		$mokwha1 = $F_namedata1_split[5];

		$hanjano2 = $F_namedata3_split[1];
		$hanja2 = $F_namedata3_split[2];
		$hangul2 = $F_namedata3_split[3];
		$what2 = $F_namedata3_split[4];
		$mokwha2 = $F_namedata3_split[5];
		$bulcomment2 = $F_namedata3_split[6];

		$hanjano3 = $F_namedata4_split[1];
		$hanja3 = $F_namedata4_split[2];
		$hangul3 = $F_namedata4_split[3];
		$what3 = $F_namedata4_split[4];
		$mokwha3 = $F_namedata4_split[5];
		$bulcomment3 = $F_namedata4_split[6];

		break;
	case "3" :
		$F_namedata1_split = explode("$", $F_namedata1);
		$F_namedata3_split = explode("$", $F_namedata3);
		$F_namedata4_split = explode("$", $F_namedata4);
		$F_namedata5_split = explode("$", $F_namedata5);

		$hanjano1 = $F_namedata1_split[1];
		$hanja1 = $F_namedata1_split[2];
		$hangul1 = $F_namedata1_split[3];
		$what1 = $F_namedata1_split[4];
		$mokwha1 = $F_namedata1_split[5];

		$hanjano2 = $F_namedata3_split[1];
		$hanja2 = $F_namedata3_split[2];
		$hangul2 = $F_namedata3_split[3];
		$what2 = $F_namedata3_split[4];
		$mokwha2 = $F_namedata3_split[5];
		$bulcomment2 = $F_namedata3_split[6];

		$hanjano3 = $F_namedata4_split[1];
		$hanja3 = $F_namedata4_split[2];
		$hangul3 = $F_namedata4_split[3];
		$what3 = $F_namedata4_split[4];
		$mokwha3 = $F_namedata4_split[5];
		$bulcomment3 = $F_namedata4_split[6];

		$hanjano4 = $F_namedata5_split[1];
		$hanja4 = $F_namedata5_split[2];
		$hangul4 = $F_namedata5_split[3];
		$what4 = $F_namedata5_split[4];
		$mokwha4 = $F_namedata5_split[5];
		$bulcomment4 = $F_namedata5_split[6];

		break;
	case "4" :
		$F_namedata1_split = explode("$", $F_namedata1);
		$F_namedata2_split = explode("$", $F_namedata2);
		$F_namedata3_split = explode("$", $F_namedata3);

		$hanjano1 = $F_namedata1_split[1];
		$hanja1 = $F_namedata1_split[2];
		$hangul1 = $F_namedata1_split[3];
		$what1 = $F_namedata1_split[4];
		$mokwha1 = $F_namedata1_split[5];

		$hanjano2 = $F_namedata2_split[1];
		$hanja2 = $F_namedata2_split[2];
		$hangul2 = $F_namedata2_split[3];
		$what2 = $F_namedata2_split[4];
		$mokwha2 = $$F_namedata2_split[5];

		$hanjano3 = $F_namedata3_split[1];
		$hanja3 = $F_namedata3_split[2];
		$hangul3 = $F_namedata3_split[3];
		$what3 = $F_namedata3_split[4];
		$mokwha3 = $F_namedata3_split[5];
		$bulcomment3 = $F_namedata3_split[6];

		break;
	case "5" :
		$F_namedata1_split = explode("$", $F_namedata1);
		$F_namedata2_split = explode("$", $F_namedata2);
		$F_namedata3_split = explode("$", $F_namedata3);
		$F_namedata4_split = explode("$", $F_namedata4);

		$hanjano1 = $F_namedata1_split[1];
		$hanja1 = $F_namedata1_split[2];
		$hangul1 = $F_namedata1_split[3];
		$what1 = $F_namedata1_split[4];
		$mokwha1 = $F_namedata1_split[5];

		$hanjano2 = $F_namedata2_split[1];
		$hanja2 = $F_namedata2_split[2];
		$hangul2 = $F_namedata2_split[3];
		$what2 = $F_namedata2_split[4];
		$mokwha2 = $F_namedata2_split[5];

		$hanjano3 = $F_namedata3_split[1];
		$hanja3 = $F_namedata3_split[2];
		$hangul3 = $F_namedata3_split[3];
		$what3 = $F_namedata3_split[4];
		$mokwha3 = $F_namedata3_split[5];
		$bulcomment3 = $F_namedata3_split[6];

		$hanjano4 = $F_namedata4_split[1];
		$hanja4 = $F_namedata4_split[2];
		$hangul4 = $F_namedata4_split[3];
		$what4 = $F_namedata4_split[4];
		$mokwha4 = $F_namedata4_split[5];
		$bulcomment4 = $F_namedata4_split[6];

		break;
}

//echo $hanja1."-".$hanja2."-".$hanja3."-".$hanja4."-".$hanja5;
####################################################################
if ($mokwha1 == "1"){$mokwha1 = "木";}
if ($mokwha1 == "2"){$mokwha1 = "火";}
if ($mokwha1 == "3"){$mokwha1 = "土";}
if ($mokwha1 == "4"){$mokwha1 = "金";}
if ($mokwha1 == "5"){$mokwha1 = "水";}

if ($mokwha2 == "1"){$mokwha2 = "木";}
if ($mokwha2 == "2"){$mokwha2 = "火";}
if ($mokwha2 == "3"){$mokwha2 = "土";}
if ($mokwha2 == "4"){$mokwha2 = "金";}
if ($mokwha2 == "5"){$mokwha2 = "水";}

if ($mokwha3 == "1"){$mokwha3 = "木";}
if ($mokwha3 == "2"){$mokwha3 = "火";}
if ($mokwha3 == "3"){$mokwha3 = "土";}
if ($mokwha3 == "4"){$mokwha3 = "金";}
if ($mokwha3 == "5"){$mokwha3 = "水";}

if ($mokwha4 == "1"){$mokwha4 = "木";}
if ($mokwha4 == "2"){$mokwha4 = "火";}
if ($mokwha4 == "3"){$mokwha4 = "土";}
if ($mokwha4 == "4"){$mokwha4 = "金";}
if ($mokwha4 == "5"){$mokwha4 = "水";}

$hanjasunghapw = $hanjano1 + $hanjano2;

if (($my_month_e == '寅')||($my_month_e == '卯')||($my_month_e == '辰')) {$jinyong = '金'; $banyong = '土'; $xuse_1 = '木';}
if (($my_month_e == '巳')||($my_month_e == '午')||($my_month_e == '未')) {$jinyong = '水'; $banyong = '金'; $xuse_1 = '火';}
if (($my_month_e == '申')||($my_month_e == '酉')||($my_month_e == '戌')) {$jinyong = '木'; $banyong = '水'; $xuse_1 = '金';$xuse_2 = '火';}
if (($my_month_e == '亥')||($my_month_e == '子')||($my_month_e == '丑')) {$jinyong = '火'; $banyong = '木'; $xuse_1 = '水';}

#인격,지격,총격을 계산 #####################
$in_guek = $hanjano1 + $hanjano2 + $hanjano3;
$je_guek = $hanjano3 + $hanjano4;
$chong_guek = $hanjano1 + $hanjano2 + $hanjano3 + $hanjano4;

if ($in_guek > 10) { $in_guek_su = $in_guek%10; }else{ $in_guek_su = $in_guek; }
if ($je_guek > 10) { $je_guek_su = $je_guek%10; }else{ $je_guek_su = $je_guek; }
if ($chong_guek > 10) { $chong_guek_su = $chong_guek%10; }else{ $chong_guek_su = $chong_guek; }

if (($in_guek_su == 1) || ($in_guek_su == 2)) {$in_guek_oheng = '木';}
if (($in_guek_su == 3) || ($in_guek_su == 4)) {$in_guek_oheng = '火';}
if (($in_guek_su == 5) || ($in_guek_su == 6)) {$in_guek_oheng = '土';}
if (($in_guek_su == 7) || ($in_guek_su == 8)) {$in_guek_oheng = '金';}
if (($in_guek_su == 9) || ($in_guek_su == 10)) {$in_guek_oheng = '水';}

if (($je_guek_su == 1) || ($je_guek_su == 2)) {$je_guek_oheng = '木';}
if (($je_guek_su == 3) || ($je_guek_su == 4)) {$je_guek_oheng = '火';}
if (($je_guek_su == 5) || ($je_guek_su == 6)) {$je_guek_oheng = '土';}
if (($je_guek_su == 7) || ($je_guek_su == 8)) {$je_guek_oheng = '金';}
if (($je_guek_su == 9) || ($je_guek_su == 10)) {$je_guek_oheng = '水';}

if (($chong_guek_su == 1) || ($chong_guek_su == 2)) {$chong_guek_oheng = '木';}
if (($chong_guek_su == 3) || ($chong_guek_su == 4)) {$chong_guek_oheng = '火';}
if (($chong_guek_su == 5) || ($chong_guek_su == 6)) {$chong_guek_oheng = '土';}
if (($chong_guek_su == 7) || ($chong_guek_su == 8)) {$chong_guek_oheng = '金';}
if (($chong_guek_su == 9) || ($chong_guek_su == 10)) {$chong_guek_oheng = '水';}

$guek_oheng = array($in_guek_oheng, $je_guek_oheng, $chong_guek_oheng); 

$jinyong_result = 0;
$banyong_result = 0;
$xuse_1_result = 0;
$xuse_2_result = 0;

for ($i = 1; $i < sizeOf($guek_oheng);$i++) { 
   if ($jinyong == $guek_oheng[$i]) {$jinyong_result++;}
   if ($banyong == $guek_oheng[$i]) {$banyong_result++;}
   if ($xuse_1 == $guek_oheng[$i]) {$xuse_1_result++;}
   if ($xuse_2 == $guek_oheng[$i]) {$xuse_2_result++;}
} 

$xuse_tot_result = $xuse_1_result + $xuse_2_result;

if ($jinyong_result == 3){$sajujumsu = 95; $sajutitle = "最上格";}
if (($jinyong_result == 2) && ($banyong_result == 1)){$sajujumsu = 95; $sajutitle = "最上格";}
if (($jinyong_result == 1) && ($banyong_result == 2)){$sajujumsu = 95; $sajutitle = "最上格";}
if ($banyong_result == 3){$sajujumsu = 90; $sajutitle = "上格";}
if (($jinyong_result == 2) && ($banyong_result == 0)){$sajujumsu = 90; $sajutitle = "上格";}
if (($jinyong_result == 0) && ($banyong_result == 2)){$sajujumsu = 90; $sajutitle = "上格";}
if (($jinyong_result == 1) && ($banyong_result == 1) && ($xuse_tot_result == 0)){$sajujumsu = 85; $sajutitle = "上格";}
if (($jinyong_result == 1) && ($banyong_result == 1) && ($xuse_tot_result == 1)){$sajujumsu = 80; $sajutitle = "上格";}
if (($jinyong_result == 1) && ($banyong_result == 0) && ($xuse_tot_result == 0)){$sajujumsu = 75; $sajutitle = "中格";}
if (($jinyong_result == 2) && ($banyong_result == 0) && ($xuse_tot_result == 1)){$sajujumsu = 70; $sajutitle = "中格";}
if (($jinyong_result == 0) && ($banyong_result == 2) && ($xuse_tot_result == 1)){$sajujumsu = 65; $sajutitle = "中格";}
if (($jinyong_result == 0) && ($banyong_result == 1) && ($xuse_tot_result == 0)){$sajujumsu = 60; $sajutitle = "中格";}
if (($jinyong_result == 0) && ($banyong_result == 0) && ($xuse_tot_result == 0)){$sajujumsu = 55; $sajutitle = "下格";}
if (($jinyong_result == 1) && ($banyong_result == 0) && ($xuse_tot_result == 1)){$sajujumsu = 50; $sajutitle = "下格";}
if (($jinyong_result == 0) && ($banyong_result == 1) && ($xuse_tot_result == 1)){$sajujumsu = 45; $sajutitle = "下格";}
if (($jinyong_result == 0) && ($banyong_result == 0) && ($xuse_tot_result == 1)){$sajujumsu = 30; $sajutitle = "不調化";}
if (($jinyong_result == 1) && ($banyong_result == 0) && ($xuse_tot_result == 2)){$sajujumsu = 25; $sajutitle = "不調化";}
if (($jinyong_result == 0) && ($banyong_result == 1) && ($xuse_tot_result == 2)){$sajujumsu = 20; $sajutitle = "不調化";}
if (($jinyong_result == 0) && ($banyong_result == 0) && ($xuse_tot_result == 2)){$sajujumsu = 10; $sajutitle = "不調化";}

############### 불용문자 ########용자나 난자등은 한자로 2개가 검색됨에따른 조처#######
$bulno = '0';

if ($bulcomment2) {$bulno++;}
if ($bulcomment3) {$bulno++;}
if ($bulcomment4) {$bulno++;}

###########################내용계산    끝########################################

$user_name = $hangul22_1.$hangul22_2.$hangul22_3.$hangul22_4;
?>