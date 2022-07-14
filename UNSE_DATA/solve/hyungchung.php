
<?

########################################################################################형충파해  합 구하기

$br = '<br>';

######################################################################################################

$my_gan[0] = $my_year_h;
$my_gan[1] = $my_month_h;
$my_gan[2] = $my_day_h;
$my_gan[3] = $my_hour_h;

$my_jiji[0] = $my_year_e;
$my_jiji[1] = $my_month_e;
$my_jiji[2] = $my_day_e;
$my_jiji[3] = $my_hour_e;


for ($i=0;$i<4;$i++) { 
    if ($my_gan[$i] == '甲') {$my_gan_gap = $my_gan_gap + 1;}
    if ($my_gan[$i] == '乙') {$my_gan_eul = $my_gan_eul + 1;}
    if ($my_gan[$i] == '丙') {$my_gan_byung = $my_gan_byung + 1;}
    if ($my_gan[$i] == '丁') {$my_gan_jung = $my_gan_jung + 1;}
    if ($my_gan[$i] == '戊') {$my_gan_mu = $my_gan_mu + 1;}
    if ($my_gan[$i] == '己') {$my_gan_gee = $my_gan_gee + 1;}
    if ($my_gan[$i] == '庚') {$my_gan_gyung = $my_gan_gyung + 1;}
    if ($my_gan[$i] == '辛') {$my_gan_sin = $my_gan_sin + 1;}
    if ($my_gan[$i] == '壬') {$my_gan_im = $my_gan_im + 1;}
    if ($my_gan[$i] == '癸') {$my_gan_gea = $my_gan_gea + 1;}
}


for ($i=0;$i<4;$i++) { 
    if ($my_jiji[$i] == '寅') {$my_jiji_in = $my_jiji_in + 1; $chk01 = $i;}
    if ($my_jiji[$i] == '巳') {$my_jiji_sa = $my_jiji_sa + 1; $chk02 = $i;}
    if ($my_jiji[$i] == '申') {$my_jiji_sin = $my_jiji_sin + 1; $chk03 = $i;}
    if ($my_jiji[$i] == '丑') {$my_jiji_chuk = $my_jiji_chuk + 1; $chk04 = $i;}
    if ($my_jiji[$i] == '戌') {$my_jiji_sul = $my_jiji_sul + 1; $chk05 = $i;}
    if ($my_jiji[$i] == '未') {$my_jiji_mi = $my_jiji_mi + 1; $chk06 = $i;}
    if ($my_jiji[$i] == '子') {$my_jiji_ja = $my_jiji_ja + 1; $chk07 = $i;}
    if ($my_jiji[$i] == '卯') {$my_jiji_myo = $my_jiji_myo + 1; $chk08 = $i;}
    if ($my_jiji[$i] == '辰') {$my_jiji_jin = $my_jiji_jin + 1; $chk09 = $i;}
    if ($my_jiji[$i] == '午') {$my_jiji_o = $my_jiji_o + 1; $chk10 = $i;}
    if ($my_jiji[$i] == '酉') {$my_jiji_u = $my_jiji_u + 1; $chk11 = $i;}
    if ($my_jiji[$i] == '亥') {$my_jiji_hae = $my_jiji_hae + 1; $chk12 = $i;}
}



######################################################################################################삽합/육합
//亥卯未 寅午戌 巳酉丑 申子辰 == 삼합 
//甲己 乙庚 丙辛 丁壬 戊癸  == 천간합

if (($my_jiji_hae) && ($my_jiji_myo) && ($my_jiji_mi)) {$samhap_title = '삼합(亥卯未)';}
if (($my_jiji_in) && ($my_jiji_o) && ($my_jiji_sul)) {$samhap_title = '삼합(寅午戌)';}
if (($my_jiji_sin) && ($my_jiji_ja) && ($my_jiji_jin)) {$samhap_title = '삼합(申子辰)';}
if (($my_jiji_sa) && ($my_jiji_u) && ($my_jiji_chuk)) {$samhap_title = '삼합(巳酉丑)';}


if (($my_gan_gap) && ($my_gan_gee)) {$ganhap_title_1 = '갑기합(甲己)<br>';}
if (($my_gan_eul) && ($my_gan_gyung)) {$ganhap_title_2 = '을경합(乙庚)<br>';}
if (($my_gan_byung) && ($my_gan_sin)) {$ganhap_title_3 = '병신합(丙辛)<br>';}
if (($my_gan_jung) && ($my_gan_im)) {$ganhap_title_4 = '정임합(丁壬)<br>';}
if (($my_gan_mu) && ($my_gan_gea)) {$ganhap_title_5 = '무계합(戊癸)<br>';}

######################################################################################################삼형살 상형살 자형살
//寅巳申 丑戌未 == 삼형살 子卯=상형살


if (($my_jiji_in) && ($my_jiji_sa) && ($my_jiji_sin)) {$samhyung_title = '삼형살(寅巳申)';}
if (($my_jiji_in) && ($my_jiji_sa) && (!$my_jiji_sin)) {$samhyung_title = '육형살(寅巳)';}
if (($my_jiji_in) && (!$my_jiji_sa) && ($my_jiji_sin)) {$samhyung_title = '육형살(寅申)';}
if ((!$my_jiji_in) && ($my_jiji_sa) && ($my_jiji_sin)) {$samhyung_title = '육형살(巳申)';}

if (($my_jiji_chuk) && ($my_jiji_sul) && ($my_jiji_mi)) {$samhyung_title = '삼형살(丑戌未)';}
if (($my_jiji_chuk) && ($my_jiji_sul) && (!$my_jiji_mi)) {$samhyung_title = '육형살(丑戌)';}
if (($my_jiji_chuk) && (!$my_jiji_sul) && ($my_jiji_mi)) {$samhyung_title = '육형살(丑未)';}
if ((!$my_jiji_chuk) && ($my_jiji_sul) && ($my_jiji_mi)) {$samhyung_title = '육형살(戌未)' ;}

if (($my_jiji_ja) && ($my_jiji_myo)) {$samhyung_title = '상형살(相形殺)(子卯)';}

if ($my_jiji_jin > 1) {$jahyung_title_j = '자형살(辰辰)';}
if ($my_jiji_o > 1) {$jahyung_title_o = '자형살(午午)';}
if ($my_jiji_u > 1) {$jahyung_title_u = '자형살(酉酉)';}
if ($my_jiji_hae > 1) {$jahyung_title_h = '자형살(亥亥)';}

##########################################################################################################지충살

for ($i=0;$i<4;$i++) { 
    if ($my_jiji[$i] == '寅') {$my_jiji_chung_in = $my_jiji_chung_in + 1;}
    if ($my_jiji[$i] == '巳') {$my_jiji_chung_sa = $my_jiji_chung_sa + 1;}
    if ($my_jiji[$i] == '申') {$my_jiji_chung_sin = $my_jiji_chung_sin + 1;}
    if ($my_jiji[$i] == '丑') {$my_jiji_chung_chuk = $my_jiji_chung_chuk + 1;}
    if ($my_jiji[$i] == '戌') {$my_jiji_chung_sul = $my_jiji_chung_sul + 1;}
    if ($my_jiji[$i] == '未') {$my_jiji_chung_mi = $my_jiji_chung_mi + 1;}
    if ($my_jiji[$i] == '子') {$my_jiji_chung_ja = $my_jiji_chung_ja + 1;}
    if ($my_jiji[$i] == '卯') {$my_jiji_chung_myo = $my_jiji_chung_myo + 1;}
    if ($my_jiji[$i] == '辰') {$my_jiji_chung_jin = $my_jiji_chung_jin + 1;}
    if ($my_jiji[$i] == '午') {$my_jiji_chung_o = $my_jiji_chung_o + 1;}
    if ($my_jiji[$i] == '酉') {$my_jiji_chung_u = $my_jiji_chung_u + 1;}
    if ($my_jiji[$i] == '亥') {$my_jiji_chung_hae = $my_jiji_chung_hae + 1;}
}


if (($my_jiji_chung_ja) && ($my_jiji_chung_o)) {$chungsal_title_1 = '육충(子午)';}
if (($my_jiji_chung_chuk) && ($my_jiji_chung_mi)) {$chungsal_title_2 = '육충(丑未)';}
if (($my_jiji_chung_in) && ($my_jiji_chung_sin)) {$chungsal_title_3 = '육충(寅申)';}
if (($my_jiji_chung_myo) && ($my_jiji_chung_u)) {$chungsal_title_4 = '육충(卯酉)';}
if (($my_jiji_chung_jin) && ($my_jiji_chung_sul)) {$chungsal_title_5 = '육충(辰戌)';}
if (($my_jiji_chung_sa) && ($my_jiji_chung_hae)) {$chungsal_title_6 = '육충(巳亥)';}

##########################################################################################################六破殺(위 loop 사용)



if (($my_jiji_chung_ja) && ($my_jiji_chung_u)) {$pasal_title_1 = '육파(子酉)';}
if (($my_jiji_chung_chuk) && ($my_jiji_chung_jin)) {$pasal_title_2 = '육파(丑辰)';}
if (($my_jiji_chung_in) && ($my_jiji_chung_hae)) {$pasal_title_3 = '육파(寅亥)';}
if (($my_jiji_chung_myo) && ($my_jiji_chung_o)) {$pasal_title_4 = '육파(卯午)';}
if (($my_jiji_chung_mi) && ($my_jiji_chung_sul)) {$pasal_title_5 = '육파(未戌)';}
if (($my_jiji_chung_sa) && ($my_jiji_chung_sin)) {$pasal_title_6 = '육파(巳申)';}

##########################################################################################################六害殺(위 loop 사용)


if (($my_jiji_chung_ja) && ($my_jiji_chung_mi)) {$haesal_title_1 = '육해(子未)';}
if (($my_jiji_chung_chuk) && ($my_jiji_chung_o)) {$haesal_title_2 = '육해(丑午)<br>';}
if (($my_jiji_chung_in) && ($my_jiji_chung_sa)) {$haesal_title_3 = '육해(寅巳)';}
if (($my_jiji_chung_myo) && ($my_jiji_chung_jin)) {$haesal_title_4 = '육해(卯辰)';}
if (($my_jiji_chung_sin) && ($my_jiji_chung_hae)) {$haesal_title_5 = '육해(申亥)';}
if (($my_jiji_chung_u) && ($my_jiji_chung_sul)) {$haesal_title_6 = '육해(酉戌)';}

##########################################################################################################
##########################################################################################################
##########################################################################################################


?>
