<?
#####################################################################################################################신약신강 구하기
if ((($my_month_e == '寅') || ($my_month_e == '卯') || ($my_month_e == '辰')) && ($my_year_e == '辰')) {$mok_power = $mok_power + 0.7; $to_power = $to_power + 0.3;}
if ((($my_month_e == '巳') || ($my_month_e == '午') || ($my_month_e == '未')) && ($my_year_e == '辰')) {$mok_power = $mok_power + 0.5; $to_power = $to_power + 0.5;}
if ((($my_month_e == '申') || ($my_month_e == '酉') || ($my_month_e == '戌')) && ($my_year_e == '辰')) {$mok_power = $mok_power + 0.3; $to_power = $to_power + 0.7;}
if ((($my_month_e == '亥') || ($my_month_e == '子') || ($my_month_e == '丑')) && ($my_year_e == '辰')) {$mok_power = $mok_power + 0.5; $to_power = $to_power + 0.5;}

if ((($my_month_e == '寅') || ($my_month_e == '卯') || ($my_month_e == '辰')) && ($my_year_e == '未')) {$wha_power = $wha_power + 0.5; $to_power = $to_power + 0.5;}
if ((($my_month_e == '巳') || ($my_month_e == '午') || ($my_month_e == '未')) && ($my_year_e == '未')) {$wha_power = $wha_power + 0.7; $to_power = $to_power + 0.3;}
if ((($my_month_e == '申') || ($my_month_e == '酉') || ($my_month_e == '戌')) && ($my_year_e == '未')) {$wha_power = $wha_power + 0.5; $to_power = $to_power + 0.5;}
if ((($my_month_e == '亥') || ($my_month_e == '子') || ($my_month_e == '丑')) && ($my_year_e == '未')) {$wha_power = $wha_power + 0.3; $to_power = $to_power + 0.7;}

if ((($my_month_e == '寅') || ($my_month_e == '卯') || ($my_month_e == '辰')) && ($my_year_e == '戌')) {$gum_power = $gum_power + 0.3; $to_power = $to_power + 0.7;}
if ((($my_month_e == '巳') || ($my_month_e == '午') || ($my_month_e == '未')) && ($my_year_e == '戌')) {$gum_power = $gum_power + 0.5; $to_power = $to_power + 0.5;}
if ((($my_month_e == '申') || ($my_month_e == '酉') || ($my_month_e == '戌')) && ($my_year_e == '戌')) {$gum_power = $gum_power + 0.7; $to_power = $to_power + 0.3;}
if ((($my_month_e == '亥') || ($my_month_e == '子') || ($my_month_e == '丑')) && ($my_year_e == '戌')) {$gum_power = $gum_power + 0.5; $to_power = $to_power + 0.5;}

if ((($my_month_e == '寅') || ($my_month_e == '卯') || ($my_month_e == '辰')) && ($my_year_e == '丑')) {$suu_power = $suu_power + 0.5; $to_power = $to_power + 0.5;}
if ((($my_month_e == '巳') || ($my_month_e == '午') || ($my_month_e == '未')) && ($my_year_e == '丑')) {$suu_power = $suu_power + 0.3; $to_power = $to_power + 0.7;}
if ((($my_month_e == '申') || ($my_month_e == '酉') || ($my_month_e == '戌')) && ($my_year_e == '丑')) {$suu_power = $suu_power + 0.5; $to_power = $to_power + 0.5;}
if ((($my_month_e == '亥') || ($my_month_e == '子') || ($my_month_e == '丑')) && ($my_year_e == '丑')) {$suu_power = $suu_power + 0.7; $to_power = $to_power + 0.3;}
################################
if ($my_month_e == '辰') {$mok_power = $mok_power + 0.84; $to_power = $to_power + 0.36;}
if ($my_month_e == '未') {$wha_power = $wha_power + 0.84; $to_power = $to_power + 0.36;}
if ($my_month_e == '戌') {$gum_power = $gum_power + 0.84; $to_power = $to_power + 0.36;}
if ($my_month_e == '丑') {$suu_power = $suu_power + 0.84; $to_power = $to_power + 0.36;}
if ($my_month_e == '子') {$suu_power = $suu_power + 1.2;}
if ($my_month_e == '寅') {$mok_power = $mok_power + 1.2;}
if ($my_month_e == '卯') {$mok_power = $mok_power + 1.2;}
if ($my_month_e == '巳') {$wha_power = $wha_power + 1.2;}
if ($my_month_e == '午') {$wha_power = $wha_power + 1.2;}
if ($my_month_e == '申') {$gum_power = $gum_power + 1.2;}
if ($my_month_e == '酉') {$gum_power = $gum_power + 1.2;}
if ($my_month_e == '亥') {$suu_power = $suu_power + 1.2;}
################################
if ((($my_month_e == '寅') || ($my_month_e == '卯') || ($my_month_e == '辰')) && ($my_day_e == '辰')) {$mok_power = $mok_power + 0.7; $to_power = $to_power + 0.3;}
if ((($my_month_e == '巳') || ($my_month_e == '午') || ($my_month_e == '未')) && ($my_day_e == '辰')) {$mok_power = $mok_power + 0.5; $to_power = $to_power + 0.5;}
if ((($my_month_e == '申') || ($my_month_e == '酉') || ($my_month_e == '戌')) && ($my_day_e == '辰')) {$mok_power = $mok_power + 0.3; $to_power = $to_power + 0.7;}
if ((($my_month_e == '亥') || ($my_month_e == '子') || ($my_month_e == '丑')) && ($my_day_e == '辰')) {$mok_power = $mok_power + 0.5; $to_power = $to_power + 0.5;}

if ((($my_month_e == '寅') || ($my_month_e == '卯') || ($my_month_e == '辰')) && ($my_day_e == '未')) {$wha_power = $wha_power + 0.5; $to_power = $to_power + 0.5;}
if ((($my_month_e == '巳') || ($my_month_e == '午') || ($my_month_e == '未')) && ($my_day_e == '未')) {$wha_power = $wha_power + 0.7; $to_power = $to_power + 0.3;}
if ((($my_month_e == '申') || ($my_month_e == '酉') || ($my_month_e == '戌')) && ($my_day_e == '未')) {$wha_power = $wha_power + 0.5; $to_power = $to_power + 0.5;}
if ((($my_month_e == '亥') || ($my_month_e == '子') || ($my_month_e == '丑')) && ($my_day_e == '未')) {$wha_power = $wha_power + 0.3; $to_power = $to_power + 0.7;}

if ((($my_month_e == '寅') || ($my_month_e == '卯') || ($my_month_e == '辰')) && ($my_day_e == '戌')) {$gum_power = $gum_power + 0.3; $to_power = $to_power + 0.7;}
if ((($my_month_e == '巳') || ($my_month_e == '午') || ($my_month_e == '未')) && ($my_day_e == '戌')) {$gum_power = $gum_power + 0.5; $to_power = $to_power + 0.5;}
if ((($my_month_e == '申') || ($my_month_e == '酉') || ($my_month_e == '戌')) && ($my_day_e == '戌')) {$gum_power = $gum_power + 0.7; $to_power = $to_power + 0.3;}
if ((($my_month_e == '亥') || ($my_month_e == '子') || ($my_month_e == '丑')) && ($my_day_e == '戌')) {$gum_power = $gum_power + 0.5; $to_power = $to_power + 0.5;}

if ((($my_month_e == '寅') || ($my_month_e == '卯') || ($my_month_e == '辰')) && ($my_day_e == '丑')) {$suu_power = $suu_power + 0.5; $to_power = $to_power + 0.5;}
if ((($my_month_e == '巳') || ($my_month_e == '午') || ($my_month_e == '未')) && ($my_day_e == '丑')) {$suu_power = $suu_power + 0.3; $to_power = $to_power + 0.7;}
if ((($my_month_e == '申') || ($my_month_e == '酉') || ($my_month_e == '戌')) && ($my_day_e == '丑')) {$suu_power = $suu_power + 0.5; $to_power = $to_power + 0.5;}
if ((($my_month_e == '亥') || ($my_month_e == '子') || ($my_month_e == '丑')) && ($my_day_e == '丑')) {$suu_power = $suu_power + 0.7; $to_power = $to_power + 0.3;}
#############################
if ((($my_month_e == '寅') || ($my_month_e == '卯') || ($my_month_e == '辰')) && ($my_hour_e == '辰')) {$mok_power = $mok_power + 0.7; $to_power = $to_power + 0.3;}
if ((($my_month_e == '巳') || ($my_month_e == '午') || ($my_month_e == '未')) && ($my_hour_e == '辰')) {$mok_power = $mok_power + 0.5; $to_power = $to_power + 0.5;}
if ((($my_month_e == '申') || ($my_month_e == '酉') || ($my_month_e == '戌')) && ($my_hour_e == '辰')) {$mok_power = $mok_power + 0.3; $to_power = $to_power + 0.7;}
if ((($my_month_e == '亥') || ($my_month_e == '子') || ($my_month_e == '丑')) && ($my_hour_e == '辰')) {$mok_power = $mok_power + 0.5; $to_power = $to_power + 0.5;}

if ((($my_month_e == '寅') || ($my_month_e == '卯') || ($my_month_e == '辰')) && ($my_hour_e == '未')) {$wha_power = $wha_power + 0.5; $to_power = $to_power + 0.5;}
if ((($my_month_e == '巳') || ($my_month_e == '午') || ($my_month_e == '未')) && ($my_hour_e == '未')) {$wha_power = $wha_power + 0.7; $to_power = $to_power + 0.3;}
if ((($my_month_e == '申') || ($my_month_e == '酉') || ($my_month_e == '戌')) && ($my_hour_e == '未')) {$wha_power = $wha_power + 0.5; $to_power = $to_power + 0.5;}
if ((($my_month_e == '亥') || ($my_month_e == '子') || ($my_month_e == '丑')) && ($my_hour_e == '未')) {$wha_power = $wha_power + 0.3; $to_power = $to_power + 0.7;}

if ((($my_month_e == '寅') || ($my_month_e == '卯') || ($my_month_e == '辰')) && ($my_hour_e == '戌')) {$gum_power = $gum_power + 0.3; $to_power = $to_power + 0.7;}
if ((($my_month_e == '巳') || ($my_month_e == '午') || ($my_month_e == '未')) && ($my_hour_e == '戌')) {$gum_power = $gum_power + 0.5; $to_power = $to_power + 0.5;}
if ((($my_month_e == '申') || ($my_month_e == '酉') || ($my_month_e == '戌')) && ($my_hour_e == '戌')) {$gum_power = $gum_power + 0.7; $to_power = $to_power + 0.3;}
if ((($my_month_e == '亥') || ($my_month_e == '子') || ($my_month_e == '丑')) && ($my_hour_e == '戌')) {$gum_power = $gum_power + 0.5; $to_power = $to_power + 0.5;}

if ((($my_month_e == '寅') || ($my_month_e == '卯') || ($my_month_e == '辰')) && ($my_hour_e == '丑')) {$suu_power = $suu_power + 0.5; $to_power = $to_power + 0.5;}
if ((($my_month_e == '巳') || ($my_month_e == '午') || ($my_month_e == '未')) && ($my_hour_e == '丑')) {$suu_power = $suu_power + 0.3; $to_power = $to_power + 0.7;}
if ((($my_month_e == '申') || ($my_month_e == '酉') || ($my_month_e == '戌')) && ($my_hour_e == '丑')) {$suu_power = $suu_power + 0.5; $to_power = $to_power + 0.5;}
if ((($my_month_e == '亥') || ($my_month_e == '子') || ($my_month_e == '丑')) && ($my_hour_e == '丑')) {$suu_power = $suu_power + 0.7; $to_power = $to_power + 0.3;}
#############################
if ($my_year_e == '子') {$suu_power = $suu_power + 1;}
if ($my_year_e == '寅') {$mok_power = $mok_power + 1;}
if ($my_year_e == '卯') {$mok_power = $mok_power + 1;}
if ($my_year_e == '巳') {$wha_power = $wha_power + 1;}
if ($my_year_e == '午') {$wha_power = $wha_power + 1;}
if ($my_year_e == '申') {$gum_power = $gum_power + 1;}
if ($my_year_e == '酉') {$gum_power = $gum_power + 1;}
if ($my_year_e == '亥') {$suu_power = $suu_power + 1;}

if ($my_day_e == '子') {$suu_power = $suu_power + 1;}
if ($my_day_e == '寅') {$mok_power = $mok_power + 1;}
if ($my_day_e == '卯') {$mok_power = $mok_power + 1;}
if ($my_day_e == '巳') {$wha_power = $wha_power + 1;}
if ($my_day_e == '午') {$wha_power = $wha_power + 1;}
if ($my_day_e == '申') {$gum_power = $gum_power + 1;}
if ($my_day_e == '酉') {$gum_power = $gum_power + 1;}
if ($my_day_e == '亥') {$suu_power = $suu_power + 1;}

if ($my_hour_e == '子') {$suu_power = $suu_power + 1;}
if ($my_hour_e == '寅') {$mok_power = $mok_power + 1;}
if ($my_hour_e == '卯') {$mok_power = $mok_power + 1;}
if ($my_hour_e == '巳') {$wha_power = $wha_power + 1;}
if ($my_hour_e == '午') {$wha_power = $wha_power + 1;}
if ($my_hour_e == '申') {$gum_power = $gum_power + 1;}
if ($my_hour_e == '酉') {$gum_power = $gum_power + 1;}
if ($my_hour_e == '亥') {$suu_power = $suu_power + 1;}
#####################################################################다음은 천간...
if ($my_year_h == '甲') {$mok_power = $mok_power + 0.2;}
if ($my_year_h == '乙') {$mok_power = $mok_power + 0.2;}
if ($my_year_h == '丙') {$wha_power = $wha_power + 0.2;}
if ($my_year_h == '丁') {$wha_power = $wha_power + 0.2;}
if ($my_year_h == '戊') {$to_power = $to_power + 0.2;}
if ($my_year_h == '己') {$to_power = $to_power + 0.2;}
if ($my_year_h == '庚') {$gum_power = $gum_power + 0.2;}
if ($my_year_h == '辛') {$gum_power = $gum_power + 0.2;}
if ($my_year_h == '壬') {$suu_power = $suu_power + 0.2;}
if ($my_year_h == '癸') {$suu_power = $suu_power + 0.2;}

if ($my_month_h == '甲') {$mok_power = $mok_power + 0.2;}
if ($my_month_h == '乙') {$mok_power = $mok_power + 0.2;}
if ($my_month_h == '丙') {$wha_power = $wha_power + 0.2;}
if ($my_month_h == '丁') {$wha_power = $wha_power + 0.2;}
if ($my_month_h == '戊') {$to_power = $to_power + 0.2;}
if ($my_month_h == '己') {$to_power = $to_power + 0.2;}
if ($my_month_h == '庚') {$gum_power = $gum_power + 0.2;}
if ($my_month_h == '辛') {$gum_power = $gum_power + 0.2;}
if ($my_month_h == '壬') {$suu_power = $suu_power + 0.2;}
if ($my_month_h == '癸') {$suu_power = $suu_power + 0.2;}

if ($my_hour_h == '甲') {$mok_power = $mok_power + 0.2;}
if ($my_hour_h == '乙') {$mok_power = $mok_power + 0.2;}
if ($my_hour_h == '丙') {$wha_power = $wha_power + 0.2;}
if ($my_hour_h == '丁') {$wha_power = $wha_power + 0.2;}
if ($my_hour_h == '戊') {$to_power = $to_power + 0.2;}
if ($my_hour_h == '己') {$to_power = $to_power + 0.2;}
if ($my_hour_h == '庚') {$gum_power = $gum_power + 0.2;}
if ($my_hour_h == '辛') {$gum_power = $gum_power + 0.2;}
if ($my_hour_h == '壬') {$suu_power = $suu_power + 0.2;}
if ($my_hour_h == '癸') {$suu_power = $suu_power + 0.2;}

################################
if ($mok_power == '') {$mok_power = 0;}
if ($wha_power == '') {$wha_power = 0;}
if ($to_power == '') {$to_power = 0;}
if ($gum_power == '') {$gum_power = 0;}
if ($suu_power == '') {$suu_power = 0;}

###############막대바에 사용(오행과급)
$mok_power_w = $mok_power * 30;
$wha_power_w = $wha_power * 30;
$to_power_w = $to_power * 30;
$gum_power_w = $gum_power * 30;
$suu_power_w = $suu_power * 30;

######################강약판별(이방식은 다음에 연구하기로 함)
if (($my_day_h == '甲') || ($my_day_h == '乙')) {$tot_power = $mok_power + $suu_power;}
if (($my_day_h == '丙') || ($my_day_h == '丁')) {$tot_power = $wha_power + $mok_power;}
if (($my_day_h == '戊') || ($my_day_h == '己')) {$tot_power = $to_power + $wha_power;}
if (($my_day_h == '庚') || ($my_day_h == '辛')) {$tot_power = $gum_power + $to_power;}
if (($my_day_h == '壬') || ($my_day_h == '癸')) {$tot_power = $suu_power + $gum_power;}

if ($tot_power > 1.2) {$tot_power_title = '身强';}else{$tot_power_title = '身弱';}

?>
