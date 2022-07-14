<?

$cyear = $_REQUEST["cyear"];
$cmonth = $_REQUEST["cmonth"];
$cday = $_REQUEST["cday"];
$chour = $_REQUEST["chour"];
$cmin = $_REQUEST["cmin"];

if($cyear == ''){$cyear = date('Y');}
if($cmonth == ''){$cmonth = date('m');}
if($cday == ''){$cday = date('d');}
if($chour == ''){$chour = date('h');}
if($cmin == ''){$cmin = date('m');}

if(strlen($cmonth) == 1){$cmonth = "0".$cmonth;}
if(strlen($cday) == 1){$cday = "0".$cday;}
if(strlen($chour) == 1){$chour = "0".$chour;}
if(strlen($cmin) == 1){$cmin = "0".$cmin;}

#####################################로또 spare
$lottoNum = array('39','44','33','16','38','4','35','1','43','10','42','23','41','34','36','12','15','40','25','45','37','30','20','17','3','19','2','27','32','21','22','18','7','29','11','24','9','13','8','14','28','26','6','5','31');
#####################################간지 60 갑자
$gabja = array('A11','B12','C01','D02','E03','F04','G05','H06','I07','J08','A09','B10','C11','D12','E01','F02','G03','H04','I05','J06','A07','B08','C09',
'D10','E11','F12','G01','H02','I03','J04','A05','B06','C07','D08','E09','F10','G11','H12','I01','J02','A03','B04','C05','D06','E07','F08','G09','H10','I11',
'J12','A01','B02','C03','D04','E05','F06','G07','H08','I09','J10');
#####################################년수
$year_su = array('197','953','877','357','345','544','327','602','242','87','939','869','16','520','743','680','253','550','60','932','236','178','980','2','883','
116','69','384','413','797','403','365','683','222','616','727','201','392','932','739','143','263','247','440','992','410','40','881','801','
364','784','425','781','992','627','696','276','280','646','368');
#####################################월수
$month_su = array('806','601','120','492','721','669','476','999','520','102','841','933','252','
780','992','983','725','840','661','61','456','73','43','238','286','51','173','518','711','274','46','32','526','94','659','945','227','438','181','
977','908','559','926','793','735','894','695','68','162','115','779','949','272','372','191','368','518','79','260','649');
#######################################일수
$day_su = array('257','725','908','61','
955','64','111','371','134','964','941','632','41','311','653','857','59','477','968','608','962','166','954','383','240','817','398','695','808','
107','973','346','789','233','252','145','22','758','353','168','195','79','332','78','680','830','933','111','725','191','367','688','83','339','
169','499','42','944','994','114');
#######################################시수
$hour_su = array('810','503','273','903','537','735','760','959','23','334','182','258','686','476','854','148','12','587','170','
185','195','301','818','188','137','797','762','927','89','684','284','957','771','803','50','515','839','23','876','558','674','646','443','776','
708','110','598','937','923','256','535','524','515','911','550','415','838','906','827','326');
########################################행년수
$heng_year_su = array('49','335','134','180','327','460','334','545','
270','215','872','811','709','949','189','310','830','511','535','885','693','436','752','708','336','369','764','12','810','720','474','800','
342','745','497','335','844','462','515','550','428','829','744','226','312','729','148','92','367','623','612','324','748','678','320','179','
115','140','79','330');
########################################행월수
$heng_month_su = array('122','130','503','989','785','516','177','199','433','532','644','819','631','19','120','710','670','991','592','984','
167','995','747','573','839','378','500','980','212','51','891','375','145','239','866','282','787','645','66','60','146','926','509','720','46','
400','112','895','466','834','337','637','431','801','85','457','543','990','365','401');
#########################################행일수
$heng_day_su = array('785','896','699','582','535','243','56','590','338','
444','768','943','771','373','986','386','440','207','616','86','852','542','881','800','61','420','617','813','373','209','694','472','531','
317','460','758','74','569','425','857','280','496','713','427','436','832','401','861','957','490','933','103','906','903','250','48','923','
698','713','643','381');
#######################################행시수
$heng_hour_su = array('684','217','886','336','944','423','309','408','582','713','9','678','900','1','112','692','941','351','676','216','
473','593','73','479','310','196','529','795','631','734','955','998','832','986','661','64','462','89','687','27','87','514','932','881','
443','635','268','758','429','781','709','303','511','897','392','155','924','921','712','573');

//echo "$chour/$cmin";

#########나이 산출
$my_age = date(Y)-$solar_year+1;
#########################

//echo "$cyear/$cmonth/$cday/$chour/$cmin";

$ctotal = $cyear+$cmonth+$cday+$chour+$cmin;



####################################################################   
####################################################################  사주조화 계산
#################################### 4기둥을 세운다 ####################################################################

                        
			
			//echo "$cyear.$cmonth.$cday";
			
			
			$c_ymd_jeolip = $cyear.$cmonth.$cday;

			$result = mysql_query("SELECT * FROM mansedata WHERE no = '$c_ymd_jeolip'");                        
			$row = mysql_fetch_array($result);
			$c_number = $row[number];
			$c_day_h = $row[day_h];
			$c_day_e = $row[day_e];
			$c_jeolip = $row[jeolip];

			
			
			$selected_month = substr($c_ymd_jeolip,4,2);  		//2월5일근방에서 입춘이 발생함으로//
			
			
			
			if ((strlen($c_jeolip) == '4') && ($selected_month == '02') && ($c_jeolip > $chour.$cmin))
			      {$c_number = $c_number - 1;}                         //입춘전이면 만세력에서 넘버를 하나 앞으로

#########################################
//echo "$c_number";

			$result = mysql_query("SELECT * FROM mansedata WHERE number = '$c_number'");                        
			$row = mysql_fetch_array($result);
			$c_year_h = $row[year_h];
			$c_year_e = $row[year_e];
			$c_month_h = $row[month_h];
			$c_month_e = $row[month_e];

####################################################
			
			if ($c_year_h == 'A') {$cc_year_h = $c_year_h; $c_year_h = '甲';$c_year_h_img = '<img src=/images/mansei_img/C_A.gif>';$c_oheng_year_h = '<font color=red><b>+</b></font> 목';}
			if ($c_year_h == 'B') {$cc_year_h = $c_year_h; $c_year_h = '乙';$c_year_h_img = '<img src=/images/mansei_img/C_B.gif>';$c_oheng_year_h = '<font color=blue><b>-</b></font> 목';}
			if ($c_year_h == 'C') {$cc_year_h = $c_year_h; $c_year_h = '丙';$c_year_h_img = '<img src=/images/mansei_img/C_C.gif>';$c_oheng_year_h = '<font color=red><b>+</b></font> 화';}
			if ($c_year_h == 'D') {$cc_year_h = $c_year_h; $c_year_h = '丁';$c_year_h_img = '<img src=/images/mansei_img/C_D.gif>';$c_oheng_year_h = '<font color=blue><b>-</b></font> 화';}
			if ($c_year_h == 'E') {$cc_year_h = $c_year_h; $c_year_h = '戊';$c_year_h_img = '<img src=/images/mansei_img/C_E.gif>';$c_oheng_year_h = '<font color=red><b>+</b></font> 토';}
			if ($c_year_h == 'F') {$cc_year_h = $c_year_h; $c_year_h = '己';$c_year_h_img = '<img src=/images/mansei_img/C_F.gif>';$c_oheng_year_h = '<font color=blue><b>-</b></font> 토';}
			if ($c_year_h == 'G') {$cc_year_h = $c_year_h; $c_year_h = '庚';$c_year_h_img = '<img src=/images/mansei_img/C_G.gif>';$c_oheng_year_h = '<font color=red><b>+</b></font> 금';}
			if ($c_year_h == 'H') {$cc_year_h = $c_year_h; $c_year_h = '辛';$c_year_h_img = '<img src=/images/mansei_img/C_H.gif>';$c_oheng_year_h = '<font color=blue><b>-</b></font> 금';}
			if ($c_year_h == 'I') {$cc_year_h = $c_year_h; $c_year_h = '壬';$c_year_h_img = '<img src=/images/mansei_img/C_I.gif>';$c_oheng_year_h = '<font color=red><b>+</b></font> 수';}
			if ($c_year_h == 'J') {$cc_year_h = $c_year_h; $c_year_h = '癸';$c_year_h_img = '<img src=/images/mansei_img/C_J.gif>';$c_oheng_year_h = '<font color=blue><b>-</b></font> 수';}
			
			if ($c_month_h == 'A') {$cc_month_h = $c_month_h; $c_month_h = '甲';$c_month_h_img = '<img src=/images/mansei_img/C_A.gif>';$c_oheng_month_h = '<font color=red><b>+</b></font> 목';}
			if ($c_month_h == 'B') {$cc_month_h = $c_month_h; $c_month_h = '乙';$c_month_h_img = '<img src=/images/mansei_img/C_B.gif>';$c_oheng_month_h = '<font color=blue><b>-</b></font> 목';}
			if ($c_month_h == 'C') {$cc_month_h = $c_month_h; $c_month_h = '丙';$c_month_h_img = '<img src=/images/mansei_img/C_C.gif>';$c_oheng_month_h = '<font color=red><b>+</b></font> 화';}
			if ($c_month_h == 'D') {$cc_month_h = $c_month_h; $c_month_h = '丁';$c_month_h_img = '<img src=/images/mansei_img/C_D.gif>';$c_oheng_month_h = '<font color=blue><b>-</b></font> 화';}
			if ($c_month_h == 'E') {$cc_month_h = $c_month_h; $c_month_h = '戊';$c_month_h_img = '<img src=/images/mansei_img/C_E.gif>';$c_oheng_month_h = '<font color=red><b>+</b></font> 토';}
			if ($c_month_h == 'F') {$cc_month_h = $c_month_h; $c_month_h = '己';$c_month_h_img = '<img src=/images/mansei_img/C_F.gif>';$c_oheng_month_h = '<font color=blue><b>-</b></font> 토';}
			if ($c_month_h == 'G') {$cc_month_h = $c_month_h; $c_month_h = '庚';$c_month_h_img = '<img src=/images/mansei_img/C_G.gif>';$c_oheng_month_h = '<font color=red><b>+</b></font> 금';}
			if ($c_month_h == 'H') {$cc_month_h = $c_month_h; $c_month_h = '辛';$c_month_h_img = '<img src=/images/mansei_img/C_H.gif>';$c_oheng_month_h = '<font color=blue><b>-</b></font> 금';}
			if ($c_month_h == 'I') {$cc_month_h = $c_month_h; $c_month_h = '壬';$c_month_h_img = '<img src=/images/mansei_img/C_I.gif>';$c_oheng_month_h = '<font color=red><b>+</b></font> 수';}
			if ($c_month_h == 'J') {$cc_month_h = $c_month_h; $c_month_h = '癸';$c_month_h_img = '<img src=/images/mansei_img/C_J.gif>';$c_oheng_month_h = '<font color=blue><b>-</b></font> 수';}
                        
########자시를 기준으로 일간지가 다음날로 바뀜######################################
			$member_hour_min = $chour.$cmin;
			
			if ($member_hour_min < '0131'){$c_hour_check = '子'; }
			if ($member_hour_min >= '2331'){$c_hour_check = '子'; }
			



			if (($c_day_h == 'A') && ($c_hour_check == '')) {$cc_day_h = $c_day_h; $c_day_h = '甲';$c_day_h_img = '<img src=/images/mansei_img/C_A.gif>';$c_oheng_day_h = '<font color=red><b>+</b></font> 목';}
			if (($c_day_h == 'B') && ($c_hour_check == ''))  {$cc_day_h = $c_day_h; $c_day_h = '乙';$c_day_h_img = '<img src=/images/mansei_img/C_B.gif>';$c_oheng_day_h = '<font color=blue><b>-</b></font> 목';}
			if (($c_day_h == 'C') && ($c_hour_check == ''))  {$cc_day_h = $c_day_h; $c_day_h = '丙';$c_day_h_img = '<img src=/images/mansei_img/C_C.gif>';$c_oheng_day_h = '<font color=red><b>+</b></font> 화';}
			if (($c_day_h == 'D') && ($c_hour_check == ''))  {$cc_day_h = $c_day_h; $c_day_h = '丁';$c_day_h_img = '<img src=/images/mansei_img/C_D.gif>';$c_oheng_day_h = '<font color=blue><b>-</b></font> 화';}
			if (($c_day_h == 'E') && ($c_hour_check == ''))  {$cc_day_h = $c_day_h; $c_day_h = '戊';$c_day_h_img = '<img src=/images/mansei_img/C_E.gif>';$c_oheng_day_h = '<font color=red><b>+</b></font> 토';}
			if (($c_day_h == 'F') && ($c_hour_check == ''))  {$cc_day_h = $c_day_h; $c_day_h = '己';$c_day_h_img = '<img src=/images/mansei_img/C_F.gif>';$c_oheng_day_h = '<font color=blue><b>-</b></font> 토';}
			if (($c_day_h == 'G') && ($c_hour_check == ''))  {$cc_day_h = $c_day_h; $c_day_h = '庚';$c_day_h_img = '<img src=/images/mansei_img/C_G.gif>';$c_oheng_day_h = '<font color=red><b>+</b></font> 금';}
			if (($c_day_h == 'H') && ($c_hour_check == ''))  {$cc_day_h = $c_day_h; $c_day_h = '辛';$c_day_h_img = '<img src=/images/mansei_img/C_H.gif>';$c_oheng_day_h = '<font color=blue><b>-</b></font> 금';}
			if (($c_day_h == 'I') && ($c_hour_check == ''))  {$cc_day_h = $c_day_h; $c_day_h = '壬';$c_day_h_img = '<img src=/images/mansei_img/C_I.gif>';$c_oheng_day_h = '<font color=red><b>+</b></font> 수';}
			if (($c_day_h == 'J') && ($c_hour_check == ''))  {$cc_day_h = $c_day_h; $c_day_h = '癸';$c_day_h_img = '<img src=/images/mansei_img/C_J.gif>';$c_oheng_day_h = '<font color=blue><b>-</b></font> 수';}


			if (($c_day_h == 'A') && ($c_hour_check == '子')) {$cc_day_h = 'B'; $c_day_h = '乙';$c_day_h_img = '<img src=/images/mansei_img/C_B.gif>';$c_oheng_day_h = '<font color=blue><b>-</b></font> 목';}
			if (($c_day_h == 'B') && ($c_hour_check == '子'))  {$cc_day_h = 'C';$c_day_h = '丙';$c_day_h_img = '<img src=/images/mansei_img/C_C.gif>';$c_oheng_day_h = '<font color=red><b>+</b></font> 화';}
			if (($c_day_h == 'C') && ($c_hour_check == '子'))  {$cc_day_h = 'D';$c_day_h = '丁';$c_day_h_img = '<img src=/images/mansei_img/C_D.gif>';$c_oheng_day_h = '<font color=blue><b>-</b></font> 화';}
			if (($c_day_h == 'D') && ($c_hour_check == '子'))  {$cc_day_h = 'E';$c_day_h = '戊';$c_day_h_img = '<img src=/images/mansei_img/C_E.gif>';$c_oheng_day_h = '<font color=red><b>+</b></font> 토';}
			if (($c_day_h == 'E') && ($c_hour_check == '子'))  {$cc_day_h = 'F';$c_day_h = '己';$c_day_h_img = '<img src=/images/mansei_img/C_F.gif>';$c_oheng_day_h = '<font color=blue><b>-</b></font> 토';}
			if (($c_day_h == 'F') && ($c_hour_check == '子'))  {$cc_day_h = 'G';$c_day_h = '庚';$c_day_h_img = '<img src=/images/mansei_img/C_G.gif>';$c_oheng_day_h = '<font color=red><b>+</b></font> 금';}
			if (($c_day_h == 'G') && ($c_hour_check == '子'))  {$cc_day_h = 'H';$c_day_h = '辛';$c_day_h_img = '<img src=/images/mansei_img/C_H.gif>';$c_oheng_day_h = '<font color=blue><b>-</b></font> 금';}
			if (($c_day_h == 'H') && ($c_hour_check == '子'))  {$cc_day_h = 'I';$c_day_h = '壬';$c_day_h_img = '<img src=/images/mansei_img/C_I.gif>';$c_oheng_day_h = '<font color=red><b>+</b></font> 수';}
			if (($c_day_h == 'I') && ($c_hour_check == '子'))  {$cc_day_h = 'J';$c_day_h = '癸';$c_day_h_img = '<img src=/images/mansei_img/C_J.gif>';$c_oheng_day_h = '<font color=blue><b>-</b></font> 수';}
			if (($c_day_h == 'J') && ($c_hour_check == '子'))  {$cc_day_h = 'A';$c_day_h = '甲';$c_day_h_img = '<img src=/images/mansei_img/C_A.gif>';$c_oheng_day_h = '<font color=red><b>+</b></font> 목';}


############################################################################################

			if ($c_year_e == '01') {$cc_year_e = $c_year_e;$c_year_e = '寅';$c_year_e_img = '<img src=/images/mansei_img/C_01.gif>';$c_oheng_year_e = '<font color=red><b>+</b></font> 목';}
			if ($c_year_e == '02') {$cc_year_e = $c_year_e;$c_year_e = '卯';$c_year_e_img = '<img src=/images/mansei_img/C_02.gif>';$c_oheng_year_e = '<font color=blue><b>-</b></font> 목';}
			if ($c_year_e == '03') {$cc_year_e = $c_year_e;$c_year_e = '辰';$c_year_e_img = '<img src=/images/mansei_img/C_03.gif>';$c_oheng_year_e = '<font color=red><b>+</b></font> 토';}
			if ($c_year_e == '04') {$cc_year_e = $c_year_e;$c_year_e = '巳';$c_year_e_img = '<img src=/images/mansei_img/C_04.gif>';$c_oheng_year_e = '<font color=red><b>+</b></font> 화';}
			if ($c_year_e == '05') {$cc_year_e = $c_year_e;$c_year_e = '午';$c_year_e_img = '<img src=/images/mansei_img/C_05.gif>';$c_oheng_year_e = '<font color=blue><b>-</b></font> 화';}
			if ($c_year_e == '06') {$cc_year_e = $c_year_e;$c_year_e = '未';$c_year_e_img = '<img src=/images/mansei_img/C_06.gif>';$c_oheng_year_e = '<font color=blue><b>-</b></font> 토';}
			if ($c_year_e == '07') {$cc_year_e = $c_year_e;$c_year_e = '申';$c_year_e_img = '<img src=/images/mansei_img/C_07.gif>';$c_oheng_year_e = '<font color=red><b>+</b></font> 금';}
			if ($c_year_e == '08') {$cc_year_e = $c_year_e;$c_year_e = '酉';$c_year_e_img = '<img src=/images/mansei_img/C_08.gif>';$c_oheng_year_e = '<font color=blue><b>-</b></font> 금';}
			if ($c_year_e == '09') {$cc_year_e = $c_year_e;$c_year_e = '戌';$c_year_e_img = '<img src=/images/mansei_img/C_09.gif>';$c_oheng_year_e = '<font color=red><b>+</b></font> 토';}
			if ($c_year_e == '10') {$cc_year_e = $c_year_e;$c_year_e = '亥';$c_year_e_img = '<img src=/images/mansei_img/C_10.gif>';$c_oheng_year_e = '<font color=red><b>+</b></font> 수';}
			if ($c_year_e == '11') {$cc_year_e = $c_year_e;$c_year_e = '子';$c_year_e_img = '<img src=/images/mansei_img/C_11.gif>';$c_oheng_year_e = '<font color=blue><b>-</b></font> 수';}
			if ($c_year_e == '12') {$cc_year_e = $c_year_e;$c_year_e = '丑';$c_year_e_img = '<img src=/images/mansei_img/C_12.gif>';$c_oheng_year_e = '<font color=blue><b>-</b></font> 토';}

			if ($c_month_e == '01') {$cc_month_e = $c_month_e;$c_month_e = '寅';$c_month_e_img = '<img src=/images/mansei_img/C_01.gif>';$c_oheng_month_e = '<font color=red><b>+</b></font> 목';}
			if ($c_month_e == '02') {$cc_month_e = $c_month_e;$c_month_e = '卯';$c_month_e_img = '<img src=/images/mansei_img/C_02.gif>';$c_oheng_month_e = '<font color=blue><b>-</b></font> 목';}
			if ($c_month_e == '03') {$cc_month_e = $c_month_e;$c_month_e = '辰';$c_month_e_img = '<img src=/images/mansei_img/C_03.gif>';$c_oheng_month_e = '<font color=red><b>+</b></font> 토';}
			if ($c_month_e == '04') {$cc_month_e = $c_month_e;$c_month_e = '巳';$c_month_e_img = '<img src=/images/mansei_img/C_04.gif>';$c_oheng_month_e = '<font color=red><b>+</b></font> 화';}
			if ($c_month_e == '05') {$cc_month_e = $c_month_e;$c_month_e = '午';$c_month_e_img = '<img src=/images/mansei_img/C_05.gif>';$c_oheng_month_e = '<font color=blue><b>-</b></font> 화';}
			if ($c_month_e == '06') {$cc_month_e = $c_month_e;$c_month_e = '未';$c_month_e_img = '<img src=/images/mansei_img/C_06.gif>';$c_oheng_month_e = '<font color=blue><b>-</b></font> 토';}
			if ($c_month_e == '07') {$cc_month_e = $c_month_e;$c_month_e = '申';$c_month_e_img = '<img src=/images/mansei_img/C_07.gif>';$c_oheng_month_e = '<font color=red><b>+</b></font> 금';}
			if ($c_month_e == '08') {$cc_month_e = $c_month_e;$c_month_e = '酉';$c_month_e_img = '<img src=/images/mansei_img/C_08.gif>';$c_oheng_month_e = '<font color=blue><b>-</b></font> 금';}
			if ($c_month_e == '09') {$cc_month_e = $c_month_e;$c_month_e = '戌';$c_month_e_img = '<img src=/images/mansei_img/C_09.gif>';$c_oheng_month_e = '<font color=red><b>+</b></font> 토';}
			if ($c_month_e == '10') {$cc_month_e = $c_month_e;$c_month_e = '亥';$c_month_e_img = '<img src=/images/mansei_img/C_10.gif>';$c_oheng_month_e = '<font color=red><b>+</b></font> 수';}
			if ($c_month_e == '11') {$cc_month_e = $c_month_e;$c_month_e = '子';$c_month_e_img = '<img src=/images/mansei_img/C_11.gif>';$c_oheng_month_e = '<font color=blue><b>-</b></font> 수';}
			if ($c_month_e == '12') {$cc_month_e = $c_month_e;$c_month_e = '丑';$c_month_e_img = '<img src=/images/mansei_img/C_12.gif>';$c_oheng_month_e = '<font color=blue><b>-</b></font> 토';}

########자시를 기준으로 일간지가 다음날로 바뀜######################################

			if (($c_day_e == '01') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '寅';$c_day_e_img = '<img src=/images/mansei_img/C_01.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 목';}
			if (($c_day_e == '02') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '卯';$c_day_e_img = '<img src=/images/mansei_img/C_02.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 목';}
			if (($c_day_e == '03') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '辰';$c_day_e_img = '<img src=/images/mansei_img/C_03.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 토';}
			if (($c_day_e == '04') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '巳';$c_day_e_img = '<img src=/images/mansei_img/C_04.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 화';}
			if (($c_day_e == '05') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '午';$c_day_e_img = '<img src=/images/mansei_img/C_05.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 화';}
			if (($c_day_e == '06') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '未';$c_day_e_img = '<img src=/images/mansei_img/C_06.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 토';}
			if (($c_day_e == '07') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '申';$c_day_e_img = '<img src=/images/mansei_img/C_07.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 금';}
			if (($c_day_e == '08') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '酉';$c_day_e_img = '<img src=/images/mansei_img/C_08.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 금';}
			if (($c_day_e == '09') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '戌';$c_day_e_img = '<img src=/images/mansei_img/C_09.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 토';}
			if (($c_day_e == '10') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '亥';$c_day_e_img = '<img src=/images/mansei_img/C_10.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 수';}
			if (($c_day_e == '11') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '子';$c_day_e_img = '<img src=/images/mansei_img/C_11.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 수';}
			if (($c_day_e == '12') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '丑';$c_day_e_img = '<img src=/images/mansei_img/C_12.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 토';}
			
			if (($c_day_e == '01') && ($c_hour_check == '子'))  {$cc_day_e = '02';$c_day_e = '卯';$c_day_e_img = '<img src=/images/mansei_img/C_02.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 목';}
			if (($c_day_e == '02') && ($c_hour_check == '子'))  {$cc_day_e = '03';$c_day_e = '辰';$c_day_e_img = '<img src=/images/mansei_img/C_03.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 토';}
			if (($c_day_e == '03') && ($c_hour_check == '子'))  {$cc_day_e = '04';$c_day_e = '巳';$c_day_e_img = '<img src=/images/mansei_img/C_04.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 화';}
			if (($c_day_e == '04') && ($c_hour_check == '子'))  {$cc_day_e = '05';$c_day_e = '午';$c_day_e_img = '<img src=/images/mansei_img/C_05.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 화';}
			if (($c_day_e == '05') && ($c_hour_check == '子'))  {$cc_day_e = '06';$c_day_e = '未';$c_day_e_img = '<img src=/images/mansei_img/C_06.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 토';}
			if (($c_day_e == '06') && ($c_hour_check == '子'))  {$cc_day_e = '07';$c_day_e = '申';$c_day_e_img = '<img src=/images/mansei_img/C_07.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 금';}
			if (($c_day_e == '07') && ($c_hour_check == '子'))  {$cc_day_e = '08';$c_day_e = '酉';$c_day_e_img = '<img src=/images/mansei_img/C_08.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 금';}
			if (($c_day_e == '08') && ($c_hour_check == '子'))  {$cc_day_e = '09';$c_day_e = '戌';$c_day_e_img = '<img src=/images/mansei_img/C_09.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 토';}
			if (($c_day_e == '09') && ($c_hour_check == '子'))  {$cc_day_e = '10';$c_day_e = '亥';$c_day_e_img = '<img src=/images/mansei_img/C_10.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 수';}
			if (($c_day_e == '10') && ($c_hour_check == '子'))  {$cc_day_e = '11';$c_day_e = '子';$c_day_e_img = '<img src=/images/mansei_img/C_11.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 수';}
			if (($c_day_e == '11') && ($c_hour_check == '子'))  {$cc_day_e = '12';$c_day_e = '丑';$c_day_e_img = '<img src=/images/mansei_img/C_12.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 토';}
			if (($c_day_e == '12') && ($c_hour_check == '子'))  {$cc_day_e = '01';$c_day_e = '寅';$c_day_e_img = '<img src=/images/mansei_img/C_01.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 목';}


#############################################################################################
			
			
			$member_hour_min = $chour.$cmin;
			
			if ($member_hour_min < '0131'){$c_hour_e = '子';$cc_hour_e = '11';$c_hour_e_img = '<img src=/images/mansei_img/C_11.gif>'; $s = '0';$c_oheng_hour_e = '<font color=blue><b>-</b></font> 수';}
			if ($member_hour_min >= '2331'){$c_hour_e = '子';$cc_hour_e = '11';$c_hour_e_img = '<img src=/images/mansei_img/C_11.gif>'; $s = '0';$c_oheng_hour_e = '<font color=blue><b>-</b></font> 수';}

			if (($member_hour_min >='0131') && ($member_hour_min < '0331')) {$cc_hour_e = '12';$c_hour_e = '丑';$c_hour_e_img = '<img src=/images/mansei_img/C_12.gif>'; $s = '1';$c_oheng_hour_e = '<font color=blue><b>-</b></font> 토';}
                        if (($member_hour_min >='0331') && ($member_hour_min < '0531')) {$cc_hour_e = '01';$c_hour_e = '寅';$c_hour_e_img = '<img src=/images/mansei_img/C_01.gif>'; $s = '2';$c_oheng_hour_e = '<font color=red><b>+</b></font> 목';}
                        if (($member_hour_min >='0531') && ($member_hour_min < '0731')) {$cc_hour_e = '02';$c_hour_e = '卯';$c_hour_e_img = '<img src=/images/mansei_img/C_02.gif>'; $s = '3';$c_oheng_hour_e = '<font color=blue><b>-</b></font> 목';}
                        if (($member_hour_min >='0731') && ($member_hour_min < '0931')) {$cc_hour_e = '03';$c_hour_e = '辰';$c_hour_e_img = '<img src=/images/mansei_img/C_03.gif>'; $s = '4';$c_oheng_hour_e = '<font color=red><b>+</b></font> 토';}
                        if (($member_hour_min >='0931') && ($member_hour_min < '1131')) {$cc_hour_e = '04';$c_hour_e = '巳';$c_hour_e_img = '<img src=/images/mansei_img/C_04.gif>'; $s = '5';$c_oheng_hour_e = '<font color=red><b>+</b></font> 화';}
                        if (($member_hour_min >='1131') && ($member_hour_min < '1331')) {$cc_hour_e = '05';$c_hour_e = '午';$c_hour_e_img = '<img src=/images/mansei_img/C_05.gif>'; $s = '6';$c_oheng_hour_e = '<font color=blue><b>-</b></font> 화';}
                        if (($member_hour_min >='1331') && ($member_hour_min < '1531')) {$cc_hour_e = '06';$c_hour_e = '未';$c_hour_e_img = '<img src=/images/mansei_img/C_06.gif>'; $s = '7';$c_oheng_hour_e = '<font color=blue><b>-</b></font> 토';}
                        if (($member_hour_min >='1531') && ($member_hour_min < '1731')) {$cc_hour_e = '07';$c_hour_e = '申';$c_hour_e_img = '<img src=/images/mansei_img/C_07.gif>'; $s = '8';$c_oheng_hour_e = '<font color=red><b>+</b></font> 금';}
                        if (($member_hour_min >='1731') && ($member_hour_min < '1931')) {$cc_hour_e = '08';$c_hour_e = '酉';$c_hour_e_img = '<img src=/images/mansei_img/C_08.gif>'; $s = '9';$c_oheng_hour_e = '<font color=blue><b>-</b></font> 금';}
                        if (($member_hour_min >='1931') && ($member_hour_min < '2131')) {$cc_hour_e = '09';$c_hour_e = '戌';$c_hour_e_img = '<img src=/images/mansei_img/C_09.gif>'; $s = '10';$c_oheng_hour_e = '<font color=red><b>+</b></font> 토';}
                        if (($member_hour_min >='2131') && ($member_hour_min < '2331')) {$cc_hour_e = '10';$c_hour_e = '亥';$c_hour_e_img = '<img src=/images/mansei_img/C_10.gif>'; $s = '11';$c_oheng_hour_e = '<font color=red><b>+</b></font> 수';}





                       $aa = array('甲','乙','丙','丁','戊','己','庚','辛','壬','癸','甲','乙');  #일간이 甲일이나 己일이면 甲子시로 시작한다.
                       $bb = array('丙','丁','戊','己','庚','辛','壬','癸','甲','乙','丙','丁');  #乙庚일 丙子
                       $cc = array('戊','己','庚','辛','壬','癸','甲','乙','丙','丁','戊','己');  #丙辛일 戊子
                       $dd = array('庚','辛','壬','癸','甲','乙','丙','丁','戊','己','庚','辛');  #丁壬일 庚子
                       $ee = array('壬','癸','甲','乙','丙','丁','戊','己','庚','辛','壬','癸');  #戊癸일 壬子
                       

		       if (($c_day_h == '甲') || ($c_day_h == '己')) {$c_hour_h = $aa[$s];}
		       if (($c_day_h == '乙') || ($c_day_h == '庚')) {$c_hour_h = $bb[$s];}
		       if (($c_day_h == '丙') || ($c_day_h == '辛')) {$c_hour_h = $cc[$s];}
		       if (($c_day_h == '丁') || ($c_day_h == '壬')) {$c_hour_h = $dd[$s];}
		       if (($c_day_h == '戊') || ($c_day_h == '癸')) {$c_hour_h = $ee[$s];}




                                      if ($c_hour_h == '甲') {$cc_hour_h = 'A';$c_hour_h_img = '<img src=/images/mansei_img/C_A.gif>'; $c_oheng_hour_h = '<font color=red><b>+</b></font> 목';}
                                      if ($c_hour_h == '乙') {$cc_hour_h = 'B';$c_hour_h_img = '<img src=mansei_img21C_/B.gif>'; $c_oheng_hour_h = '<font color=blue><b>-</b></font> 목';}
                                      if ($c_hour_h == '丙') {$cc_hour_h = 'C';$c_hour_h_img = '<img src=/images/mansei_img/C_C.gif>'; $c_oheng_hour_h = '<font color=red><b>+</b></font> 화';}
                                      if ($c_hour_h == '丁') {$cc_hour_h = 'D';$c_hour_h_img = '<img src=/images/mansei_img/C_D.gif>'; $c_oheng_hour_h = '<font color=blue><b>-</b></font> 화';}
                                      if ($c_hour_h == '戊') {$cc_hour_h = 'E';$c_hour_h_img = '<img src=/images/mansei_img/C_E.gif>'; $c_oheng_hour_h = '<font color=red><b>+</b></font> 토';}
                                      if ($c_hour_h == '己') {$cc_hour_h = 'F';$c_hour_h_img = '<img src=/images/mansei_img/C_F.gif>'; $c_oheng_hour_h = '<font color=blue><b>-</b></font> 토';}
                                      if ($c_hour_h == '庚') {$cc_hour_h = 'G';$c_hour_h_img = '<img src=/images/mansei_img/C_G.gif>'; $c_oheng_hour_h = '<font color=red><b>+</b></font> 금';}
                                      if ($c_hour_h == '辛') {$cc_hour_h = 'H';$c_hour_h_img = '<img src=/images/mansei_img/C_H.gif>'; $c_oheng_hour_h = '<font color=blue><b>-</b></font> 금';}
                                      if ($c_hour_h == '壬') {$cc_hour_h = 'I';$c_hour_h_img = '<img src=/images/mansei_img/C_I.gif>'; $c_oheng_hour_h = '<font color=red><b>+</b></font> 수';}
                                      if ($c_hour_h == '癸') {$cc_hour_h = 'J';$c_hour_h_img = '<img src=/images/mansei_img/C_J.gif>'; $c_oheng_hour_h = '<font color=blue><b>-</b></font> 수';}







#################################### 4기둥을 세움 끝 ####################################################################







##########################################################배열에서 찾기
$year_search = $my_year_h_org.$my_year_e_org;
$month_search = $my_month_h_org.$my_month_e_org;
$day_search = $my_day_h_org.$my_day_e_org;
$hour_search = $my_hour_h_org.$my_hour_e_org;


//echo "[[$year_search $month_search $day_search $hour_search]]";

############################################년수
for ($i=0;$i<60;$i++) {
 if ($gabja[$i] == $year_search) {$temp_i = $i;}
}

$year_su_result = $year_su[$temp_i];
$heng_year_su_result = $heng_year_su[$temp_i];

//echo "$year_su_result/$temp_i/$year_search<br>";
//echo "$heng_year_su_result<br>";

############################################월수

for ($i=0;$i<60;$i++) {
 if ($gabja[$i] == $month_search) {$temp_i = $i;}
}

$month_su_result = $month_su[$temp_i];
$heng_month_su_result = $heng_month_su[$temp_i];

//echo "$month_su_result/$temp_i/$month_search<br>";
//echo "$heng_month_su_result<br>";

############################################일수

for ($i=0;$i<60;$i++) {
 if ($gabja[$i] == $day_search) {$temp_i = $i;}
}

$day_su_result = $day_su[$temp_i];
$heng_day_su_result = $heng_day_su[$temp_i];

//echo "$day_su_result/$temp_i/$day_search<br>";
//echo "$heng_day_su_result<br>";

############################################시수

for ($i=0;$i<60;$i++) {
 if ($gabja[$i] == $hour_search) {$temp_i = $i;}
}

$hour_su_result = $hour_su[$temp_i];
$heng_hour_su_result = $heng_hour_su[$temp_i];

//echo "$hour_su_result/$temp_i/$hour_search<br>";
//echo "$heng_hour_su_result<br>";



$saju_tot = $year_su_result + $month_su_result + $day_su_result + $hour_su_result;

//echo "$saju_tot<br>";
######################################################현재시간에 의한 계산


$signdate =date("YmdHi");
$no_current = substr($signdate,0,8);
$current_hour_search = substr($signdate,8,4);

//echo "$signdate<br>";
//echo "$no_current<br>";
//echo "$current_hour_search<br>";

###############################
$sql = "SELECT * FROM mansedata WHERE no like  '$no_current'";



if (!$sql) {
   error("QUERY_ERROR");
}

$query = mysql_query($sql);
$all = mysql_affected_rows();

if (!$all) {
 echo("ERROR");
 exit;
}else{  

		for ($i = 0 ; $i<$all; $i++)
		{
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			//$no = stripslashes($row[no]);
			$current_year_h = stripslashes($row[year_h]);
			$current_year_e = stripslashes($row[year_e]);
			$current_month_h = stripslashes($row[month_h]);
			$current_month_e = stripslashes($row[month_e]);
			$current_day_h = stripslashes($row[day_h]);
			$current_day_e = stripslashes($row[day_e]);
	 
		 }

}

##########################현재의 시간으로 시간지 세우는 과정#####################################
		
			
			if ($current_hour_search < '0131'){$current_hour_e = '11'; $s = '0';}
			if ($current_hour_search >= '2331'){$current_hour_e = '11'; $s = '0';}

			if (($current_hour_search >='0131') && ($current_hour_search < '0331')) {$current_hour_e = '12'; $s = '1';}
                        if (($current_hour_search >='0331') && ($current_hour_search < '0531')) {$current_hour_e = '01'; $s = '2';}
                        if (($current_hour_search >='0531') && ($current_hour_search < '0731')) {$current_hour_e = '02'; $s = '3';}
                        if (($current_hour_search >='0731') && ($current_hour_search < '0931')) {$current_hour_e = '03'; $s = '4';}
                        if (($current_hour_search >='0931') && ($current_hour_search < '1131')) {$current_hour_e = '04'; $s = '5';}
                        if (($current_hour_search >='1131') && ($current_hour_search < '1331')) {$current_hour_e = '05'; $s = '6';}
                        if (($current_hour_search >='1331') && ($current_hour_search < '1531')) {$current_hour_e = '06'; $s = '7';}
                        if (($current_hour_search >='1531') && ($current_hour_search < '1731')) {$current_hour_e = '07'; $s = '8';}
                        if (($current_hour_search >='1731') && ($current_hour_search < '1931')) {$current_hour_e = '08'; $s = '9';}
                        if (($current_hour_search >='1931') && ($current_hour_search < '2131')) {$current_hour_e = '09'; $s = '10';}
                        if (($current_hour_search >='2131') && ($current_hour_search < '2331')) {$current_hour_e = '10'; $s = '11';}

                                             

		       if (($current_day_h == 'A') || ($current_day_h == 'F')) {$current_hour_h = $aa[$s];}
		       if (($current_day_h == 'B') || ($current_day_h == 'G')) {$current_hour_h = $bb[$s];}
		       if (($current_day_h == 'C') || ($current_day_h == 'H')) {$current_hour_h = $cc[$s];}
		       if (($current_day_h == 'D') || ($current_day_h == 'I')) {$current_hour_h = $dd[$s];}
		       if (($current_day_h == 'E') || ($current_day_h == 'J')) {$current_hour_h = $ee[$s];}

//echo "$current_hour_h $current_hour_e<br>";

####################
##########################################################현재의 시점으로 배열에서 찾기
$current_year_search = $current_year_h.$current_year_e;
$current_month_search = $current_month_h.$current_month_e;
$current_day_search = $current_day_h.$current_day_e;
$current_hour_search = $current_hour_h.$current_hour_e;
############################################년수
for ($i=0;$i<60;$i++) {
 if ($gabja[$i] == $current_year_search) {$temp_i = $i;}
}

$current_year_su_result = $year_su[$temp_i];
$heng_current_year_su_result = $heng_year_su[$temp_i];

//echo "$current_year_su_result<br>";
//echo "$heng_current_year_su_result<br>";

############################################월수

for ($i=0;$i<60;$i++) {
 if ($gabja[$i] == $current_month_search) {$temp_i = $i;}
}

$current_month_su_result = $month_su[$temp_i];
$heng_current_month_su_result = $heng_month_su[$temp_i];

//echo "$current_month_su_result<br>";
//echo "$heng_current_month_su_result<br>";

############################################일수

for ($i=0;$i<60;$i++) {
 if ($gabja[$i] == $current_day_search) {$temp_i = $i;}
}

$current_day_su_result = $day_su[$temp_i];
$heng_current_day_su_result = $heng_day_su[$temp_i];

//echo "$current_day_su_result<br>";
//echo "$heng_current_day_su_result<br>";

############################################시수

for ($i=0;$i<60;$i++) {
 if ($gabja[$i] == $current_hour_search) {$temp_i = $i;}
}

$current_hour_su_result = $hour_su[$temp_i];
$heng_current_hour_su_result = $heng_hour_su[$temp_i];

//echo "$current_hour_su_result<br>";
//echo "$heng_current_hour_su_result<br>";

##############################################
$current_tot = $current_year_su_result + $current_month_su_result + $current_day_su_result + $current_hour_su_result;
$heng_current_tot = $heng_current_year_su_result + $heng_current_month_su_result + $heng_current_day_su_result + $heng_current_hour_su_result;
if ($sex == '여') {$current_tot = $current_tot + 60; $heng_current_tot = $heng_current_tot + 60;}

##############################################

		
/*
if ($ggum == 'a') {$ggum_no = '10';}
if ($ggum == 'b') {$ggum_no = '1';}
if ($ggum == 'c') {$ggum_no = '3';}
if ($ggum == 'd') {$ggum_no = '6';}

if ($ggum == 'e') {$ggum_no = '7';}
if ($ggum == 'f') {$ggum_no = '6';}
if ($ggum == 'g') {$ggum_no = '9';}
if ($ggum == 'h') {$ggum_no = '14';}

if ($ggum == 'i') {$ggum_no = '15';}
if ($ggum == 'j') {$ggum_no = '6';}
if ($ggum == 'k') {$ggum_no = '13';}
if ($ggum == 'l') {$ggum_no = '0';}
*/
#####################################첫숫자 산출
$result_01 = ($my_age + $year_su_result + $saju_tot + $current_tot + $ctotal)%45;
if ($result_01 == '0') {$result_01 = '45';}


//echo "$result_01<br>";

#####################################두째숫자 산출
$result_02 = ($my_age + $month_su_result + $saju_tot + $current_tot + $ctotal)%45;
if ($result_02 == '0') {$result_02 = '45';}

///////////////////////////////////
if ($result_01 == $result_02) {

//$lottoNum = range(1,45);
//shuffle($lottoNum);

for($i=0;$i<=45;$i++){ 
       if ($result_01 <> $lottoNum[$i]){
         break;
          } 
       } 
$result_02 = $lottoNum[$i];
} 
//////////////////////////////////

//echo "$result_02<br>";



#####################################세째숫자 산출
$result_03 = ($my_age + $day_su_result + $saju_tot + $current_tot + $ctotal)%45;
if ($result_03 == '0') {$result_03 = '45';}

/////////////////////////////////
if (($result_01 == $result_03)||
    ($result_02 == $result_03)) {

//$lottoNum = range(1,45);
//shuffle($lottoNum);

for($i=0;$i<=45;$i++){ 
       if (($result_01 <> $lottoNum[$i])&&($result_02 <> $lottoNum[$i])){
         break;
          } 
       } 
$result_03 = $lottoNum[$i];
} 
////////////////////////////////

//echo "$result_03<br>";

#####################################네째숫자 산출
$result_04 = ($my_age + $hour_su_result + $saju_tot + $current_tot + $ctotal)%45;
if ($result_04 == '0') {$result_04 = '45';}

/////////////////////////////////
if (($result_01 == $result_04)||
    ($result_02 == $result_04)||
    ($result_03 == $result_04)){

//$lottoNum = range(1,45);
//shuffle($lottoNum);

for($i=0;$i<=45;$i++){ 
       if (($result_01 <> $lottoNum[$i])&&
           ($result_02 <> $lottoNum[$i])&&
	   ($result_03 <> $lottoNum[$i])){
         break;
          } 
       } 
$result_04 = $lottoNum[$i];
} 
////////////////////////////////

//echo "$result_04<br>";

###############################################

#####################################다섯째숫자 산출
$result_05 = ($my_age + $saju_tot +  $ggum_no+ $current_tot + $ctotal)%45;
if ($result_05 == '0') {$result_05 = '45';}

/////////////////////////////////
if (($result_01 == $result_05)||
    ($result_02 == $result_05)||
    ($result_03 == $result_05)||
    ($result_04 == $result_05)){

//$lottoNum = range(1,45);
//shuffle($lottoNum);

for($i=0;$i<=45;$i++){ 
       if (($result_01 <> $lottoNum[$i])&&
           ($result_02 <> $lottoNum[$i])&&
	   ($result_03 <> $lottoNum[$i])&&
	   ($result_04 <> $lottoNum[$i])){
         break;
          } 
       } 
$result_05 = $lottoNum[$i];
} 
////////////////////////////////

//echo "$result_05<br>";

###############################################

#####################################여섯째숫자 산출
$result_06 = ($my_age + $saju_tot+ $current_tot + $ctotal)%45;
if ($result_06 == '0') {$result_06 = '45';}

/////////////////////////////////
if (($result_01 == $result_06)||
    ($result_02 == $result_06)||
    ($result_03 == $result_06)||
    ($result_04 == $result_06)||
    ($result_05 == $result_06)){

//$lottoNum = range(1,45);
//shuffle($lottoNum);

for($i=0;$i<=45;$i++){ 
       if (($result_01 <> $lottoNum[$i])&&
           ($result_02 <> $lottoNum[$i])&&
	   ($result_03 <> $lottoNum[$i])&&
	   ($result_04 <> $lottoNum[$i])&&
	   ($result_05 <> $lottoNum[$i])){
         break;
          } 
       } 
$result_06 = $lottoNum[$i];
} 
////////////////////////////////

//echo "$result_06<br>";

###############################################

#####################################7째숫자 산출
$result_07 = ($my_age + $current_day_su_result + $current_tot + $ctotal)%45;
if ($result_07 == '0') {$result_07 = '45';}

/////////////////////////////////
if (($result_01 == $result_07)||
    ($result_02 == $result_07)||
    ($result_03 == $result_07)||
    ($result_04 == $result_07)||
    ($result_05 == $result_07)||
    ($result_06 == $result_07)){

//$lottoNum = range(1,45);
//shuffle($lottoNum);

for($i=0;$i<=45;$i++){ 
       if (($result_01 <> $lottoNum[$i])&&
           ($result_02 <> $lottoNum[$i])&&
	   ($result_03 <> $lottoNum[$i])&&
	   ($result_04 <> $lottoNum[$i])&&
	   ($result_05 <> $lottoNum[$i])&&
	   ($result_06 <> $lottoNum[$i])){
         break;
          } 
       } 
$result_07 = $lottoNum[$i];
} 
////////////////////////////////

//echo "$result_07<br>";

###############################################

#####################################8째숫자 산출
$result_08 = ($my_age + $current_hour_su_result + $current_tot + $ctotal)%45;
if ($result_08 == '0') {$result_08 = '45';}

/////////////////////////////////
if (($result_01 == $result_08)||
    ($result_02 == $result_08)||
    ($result_03 == $result_08)||
    ($result_04 == $result_08)||
    ($result_05 == $result_08)||
    ($result_06 == $result_08)||
    ($result_07 == $result_08)){

//$lottoNum = range(1,45);
//shuffle($lottoNum);

for($i=0;$i<=45;$i++){ 
       if (($result_01 <> $lottoNum[$i])&&
           ($result_02 <> $lottoNum[$i])&&
	   ($result_03 <> $lottoNum[$i])&&
	   ($result_04 <> $lottoNum[$i])&&
	   ($result_05 <> $lottoNum[$i])&&
	   ($result_06 <> $lottoNum[$i])&&
	   ($result_07 <> $lottoNum[$i])){
         break;
          } 
       } 
$result_08 = $lottoNum[$i];
} 
////////////////////////////////

//echo "$result_08<br>";

###############################################

#####################################9째숫자 산출
$result_09 = ($my_age + $current_year_su_result + $heng_current_tot + $ctotal)%45;
if ($result_09 == '0') {$result_09 = '45';}

/////////////////////////////////
if (($result_01 == $result_09)||
    ($result_02 == $result_09)||
    ($result_03 == $result_09)||
    ($result_04 == $result_09)||
    ($result_05 == $result_09)||
    ($result_06 == $result_09)||
    ($result_07 == $result_09)||
    ($result_08 == $result_09)){

//$lottoNum = range(1,45);
//shuffle($lottoNum);

for($i=0;$i<=45;$i++){ 
       if (($result_01 <> $lottoNum[$i])&&
           ($result_02 <> $lottoNum[$i])&&
	   ($result_03 <> $lottoNum[$i])&&
	   ($result_04 <> $lottoNum[$i])&&
	   ($result_05 <> $lottoNum[$i])&&
	   ($result_06 <> $lottoNum[$i])&&
	   ($result_07 <> $lottoNum[$i])&&
	   ($result_08 <> $lottoNum[$i])){
         break;
          } 
       } 
$result_09 = $lottoNum[$i];
} 
////////////////////////////////

//echo "$result_09<br>";

###############################################

#####################################10째숫자 산출
$result_10 = ($my_age + $current_month_su_result + $heng_current_tot + $ctotal)%45;
if ($result_10 == '0') {$result_10 = '45';}

/////////////////////////////////
if (($result_01 == $result_10)||
    ($result_02 == $result_10)||
    ($result_03 == $result_10)||
    ($result_04 == $result_10)||
    ($result_05 == $result_10)||
    ($result_06 == $result_10)||
    ($result_07 == $result_10)||
    ($result_08 == $result_10)||
    ($result_09 == $result_10)){

//$lottoNum = range(1,45);
//shuffle($lottoNum);

for($i=0;$i<=45;$i++){ 
       if (($result_01 <> $lottoNum[$i])&&
           ($result_02 <> $lottoNum[$i])&&
	   ($result_03 <> $lottoNum[$i])&&
	   ($result_04 <> $lottoNum[$i])&&
	   ($result_05 <> $lottoNum[$i])&&
	   ($result_06 <> $lottoNum[$i])&&
	   ($result_07 <> $lottoNum[$i])&&
	   ($result_08 <> $lottoNum[$i])&&
	   ($result_09 <> $lottoNum[$i])){
         break;
          } 
       } 
$result_10 = $lottoNum[$i];
} 
////////////////////////////////

//echo "$result_10<br>";

###############################################

#####################################11째숫자 산출
$result_11 = ($my_age + $current_day_su_result + $heng_current_tot + $ctotal)%45;
if ($result_11 == '0') {$result_11 = '45';}

/////////////////////////////////
if (($result_01 == $result_11)||
    ($result_02 == $result_11)||
    ($result_03 == $result_11)||
    ($result_04 == $result_11)||
    ($result_05 == $result_11)||
    ($result_06 == $result_11)||
    ($result_07 == $result_11)||
    ($result_08 == $result_11)||
    ($result_09 == $result_11)||
    ($result_10 == $result_11)){

//$lottoNum = range(1,45);
//shuffle($lottoNum);

for($i=0;$i<=45;$i++){ 
       if (($result_01 <> $lottoNum[$i])&&
           ($result_02 <> $lottoNum[$i])&&
	   ($result_03 <> $lottoNum[$i])&&
	   ($result_04 <> $lottoNum[$i])&&
	   ($result_05 <> $lottoNum[$i])&&
	   ($result_06 <> $lottoNum[$i])&&
	   ($result_07 <> $lottoNum[$i])&&
	   ($result_08 <> $lottoNum[$i])&&
	   ($result_09 <> $lottoNum[$i])&&
	   ($result_10 <> $lottoNum[$i])){
         break;
          } 
       } 
$result_11 = $lottoNum[$i];
} 
////////////////////////////////

//echo "$result_11<br>";

###############################################

#####################################12째숫자 산출
$result_12 = ($my_age + $current_hour_su_result + $heng_current_tot + $ctotal)%45;
if ($result_12 == '0') {$result_12 = '45';}

/////////////////////////////////
if (($result_01 == $result_12)||
    ($result_02 == $result_12)||
    ($result_03 == $result_12)||
    ($result_04 == $result_12)||
    ($result_05 == $result_12)||
    ($result_06 == $result_12)||
    ($result_07 == $result_12)||
    ($result_08 == $result_12)||
    ($result_09 == $result_12)||
    ($result_10 == $result_12)||
    ($result_11 == $result_12)){

//$lottoNum = range(1,45);
//shuffle($lottoNum);

for($i=0;$i<=45;$i++){ 
       if (($result_01 <> $lottoNum[$i])&&
           ($result_02 <> $lottoNum[$i])&&
	   ($result_03 <> $lottoNum[$i])&&
	   ($result_04 <> $lottoNum[$i])&&
	   ($result_05 <> $lottoNum[$i])&&
	   ($result_06 <> $lottoNum[$i])&&
	   ($result_07 <> $lottoNum[$i])&&
	   ($result_08 <> $lottoNum[$i])&&
	   ($result_09 <> $lottoNum[$i])&&
	   ($result_10 <> $lottoNum[$i])&&
	   ($result_11 <> $lottoNum[$i])){
         break;
          } 
       } 
$result_12 = $lottoNum[$i];
} 
////////////////////////////////
#######################################################################주역
$juyek_data = array('111111','000000','010001','100010','010111','111010','000010','010000','110111','111011','000111','111000','111101','101111','000100','001000','011001','100110','000011','110000','
101001','100101','100000','000001','111001','100111','100001','011110','010010','101101','011100','001110','111100','001111','101000','000101','110101','101011','010100','
001010','100011','110001','011111','111110','011000','000110','011010','010110','011101','101110','001001','100100','110100','001011','001101','101100','110110','
011011','110010','010011','110011','001100','010101','101010');

$juyek_title = array('건위천','곤위지','수뢰준','산수몽','수천수','천수송','지수사','수지비','풍천소축','천택리','지천태','천지비','천화동인','화천대유','지산겸','뇌지예','택뢰수','산풍고','
지택림','풍지관','화뢰서합','산화비','산지박','지뢰복','천뢰무망','산천대축','산뢰이','택풍대과','감위수','이위화','택산함','뇌풍항','천산돈','뇌천대장','화지진','
지화명이','풍화가인','화택규','수산건','뇌수해','산택손','풍뢰익','택천쾌','천풍구','택지췌','지풍승','택수곤','수풍정','택화혁','화풍정','진위뢰','간위산','풍산점','
뇌택귀매','뇌화풍','화산려','손위풍','태위택','풍수환','수택절','풍택중부','뇌산소과','수화기제','화수미제');

$juyek = ($saju_tot)%64;
if ($juyek == '0') {$juyek = '64';}


$temp_i = $juyek;

$ju_data = $juyek_data[$temp_i];
$ju_title = $juyek_title[$temp_i];


$org_g0 = "<td bgcolor=000000 width=38 height=7></td><td width=4></td><td bgcolor=000000 width=38></td>";
$org_g1 = "<td colspan=3 bgcolor=000000 width=80 height=7></td>";

//echo "$temp_i/$ju_data/$ju_title";

if (substr($ju_data,1,1) == '0') {$g1 = $org_g0;}else{$g1 = $org_g1;}
if (substr($ju_data,2,1) == '0') {$g2 = $org_g0;}else{$g2 = $org_g1;}
if (substr($ju_data,3,1) == '0') {$g3 = $org_g0;}else{$g3 = $org_g1;}
if (substr($ju_data,4,1) == '0') {$g4 = $org_g0;}else{$g4 = $org_g1;}
if (substr($ju_data,5,1) == '0') {$g5 = $org_g0;}else{$g5 = $org_g1;}
if (substr($ju_data,6,1) == '0') {$g6 = $org_g0;}else{$g6 = $org_g1;}

###############################################




if ($my_day_h_org == 'A') { $mdh = '01';}
if ($my_day_h_org == 'B') { $mdh = '02';}
if ($my_day_h_org == 'C') { $mdh = '03';}
if ($my_day_h_org == 'D') { $mdh = '04';}
if ($my_day_h_org == 'E') { $mdh = '05';}
if ($my_day_h_org == 'F') { $mdh = '06';}
if ($my_day_h_org == 'G') { $mdh = '07';}
if ($my_day_h_org == 'H') { $mdh = '08';}
if ($my_day_h_org == 'I') { $mdh = '09';}
if ($my_day_h_org == 'J') { $mdh = '10';}





$tot = $mdh.$current_hour_e;


			$result = mysql_query("SELECT * FROM S042  WHERE DB_express = '$tot'");                        
			$row = mysql_fetch_array($result);
			$data = $row[DB_data];

			
//echo "$data";
?>


<SCRIPT LANGUAGE="JavaScript">
<!--
function selectChange(data){
	var form = document.selectNum;
	var selectCount = 0;
	for(var i = 0; i < form.select_num_array.length; i++) {
		if(form.select_num_array[i].checked == true) {
			selectCount++;
		}
	}	
	if(selectCount > 10){  
		alert("번호는 10개까지 선택하실 수 있습니다.");
		form.select_num_array[data].checked = false;
		return false;
	}
	return true;	
}

function goCombine(){
	var selectNum = "";
	var form = document.selectNum;
	var selectCount = 0;
	for(var i = 0; i < form.select_num_array.length; i++){
		if(form.select_num_array[i].checked == true){
			selectCount++;
			if(selectNum == ""){
				selectNum = form.select_num_array[i].value;
			}else{
				selectNum += ',' + form.select_num_array[i].value;
			}
		}
	}	
	if(selectCount < 7 || selectCount > 10){  
		alert('번호를 7개에서 10개까지 선택하세요.'); 
	}else{
		form.action='?';
		form.select_num.value=selectNum;
		form.select_count.value=selectCount;
		var confirm00 = '선택하신 ' + selectCount + '개의 숫자로 숫자조합을 하시기 바랍니다\r\n\r\n'+selectNum; 
		if(confirm(confirm00) == true){
			form.submit();
		}else{
			alert('다른 숫자를 선택하여 주십시요.');
		}
	}		
}
//-->
</SCRIPT>
<link rel=StyleSheet href='/style.css' type='text/css'>
<table cellpadding="0" cellspacing="0" align="Center">
<?







//echo "$my_day_h";
##############################################################################################십신산출
if (($my_day_h == '甲') && ($c_year_h == '甲')) {$c_sin_year_h = '比肩';}
if (($my_day_h == '甲') && ($c_month_h == '甲')) {$c_sin_month_h = '比肩';}
if (($my_day_h == '甲') && ($c_day_h == '甲')) {$c_sin_day_h = '比肩';}
if (($my_day_h == '甲') && ($c_hour_h == '甲')) {$c_sin_hour_h = '比肩';}
if (($my_day_h == '甲') && ($c_year_e == '寅')) {$c_sin_year_e = '比肩';}
if (($my_day_h == '甲') && ($c_month_e == '寅')) {$c_sin_month_e = '比肩';}
if (($my_day_h == '甲') && ($c_day_e == '寅')) {$c_sin_day_e = '比肩';}
if (($my_day_h == '甲') && ($c_hour_e == '寅')) {$c_sin_hour_e = '比肩';}

if (($my_day_h == '乙') && ($c_year_h == '乙')) {$c_sin_year_h = '比肩';}
if (($my_day_h == '乙') && ($c_month_h == '乙')) {$c_sin_month_h = '比肩';}
if (($my_day_h == '乙') && ($c_day_h == '乙')) {$c_sin_day_h = '比肩';}
if (($my_day_h == '乙') && ($c_hour_h == '乙')) {$c_sin_hour_h = '比肩';}
if (($my_day_h == '乙') && ($c_year_e == '卯')) {$c_sin_year_e = '比肩';}
if (($my_day_h == '乙') && ($c_month_e == '卯')) {$c_sin_month_e = '比肩';}
if (($my_day_h == '乙') && ($c_day_e == '卯')) {$c_sin_day_e = '比肩';}
if (($my_day_h == '乙') && ($c_hour_e == '卯')) {$c_sin_hour_e = '比肩';}

if (($my_day_h == '丙') && ($c_year_h == '丙')) {$c_sin_year_h = '比肩';}
if (($my_day_h == '丙') && ($c_month_h == '丙')) {$c_sin_month_h = '比肩';}
if (($my_day_h == '丙') && ($c_day_h == '丙')) {$c_sin_day_h = '比肩';}
if (($my_day_h == '丙') && ($c_hour_h == '丙')) {$c_sin_hour_h = '比肩';}
if (($my_day_h == '丙') && ($c_year_e == '巳')) {$c_sin_year_e = '比肩';}
if (($my_day_h == '丙') && ($c_month_e == '巳')) {$c_sin_month_e = '比肩';}
if (($my_day_h == '丙') && ($c_day_e == '巳')) {$c_sin_day_e = '比肩';}
if (($my_day_h == '丙') && ($c_hour_e == '巳')) {$c_sin_hour_e = '比肩';}

if (($my_day_h == '丁') && ($c_year_h == '丁')) {$c_sin_year_h = '比肩';}
if (($my_day_h == '丁') && ($c_month_h == '丁')) {$c_sin_month_h = '比肩';}
if (($my_day_h == '丁') && ($c_day_h == '丁')) {$c_sin_day_h = '比肩';}
if (($my_day_h == '丁') && ($c_hour_h == '丁')) {$c_sin_hour_h = '比肩';}
if (($my_day_h == '丁') && ($c_year_e == '午')) {$c_sin_year_e = '比肩';}
if (($my_day_h == '丁') && ($c_month_e == '午')) {$c_sin_month_e = '比肩';}
if (($my_day_h == '丁') && ($c_day_e == '午')) {$c_sin_day_e = '比肩';}
if (($my_day_h == '丁') && ($c_hour_e == '午')) {$c_sin_hour_e = '比肩';}

if (($my_day_h == '戊') && ($c_year_h == '戊')) {$c_sin_year_h = '比肩';}
if (($my_day_h == '戊') && ($c_month_h == '戊')) {$c_sin_month_h = '比肩';}
if (($my_day_h == '戊') && ($c_day_h == '戊')) {$c_sin_day_h = '比肩';}
if (($my_day_h == '戊') && ($c_hour_h == '戊')) {$c_sin_hour_h = '比肩';}
if (($my_day_h == '戊') && ($c_year_e == '辰')) {$c_sin_year_e = '比肩';}
if (($my_day_h == '戊') && ($c_month_e == '辰')) {$c_sin_month_e = '比肩';}
if (($my_day_h == '戊') && ($c_day_e == '辰')) {$c_sin_day_e = '比肩';}
if (($my_day_h == '戊') && ($c_hour_e == '辰')) {$c_sin_hour_e = '比肩';}
if (($my_day_h == '戊') && ($c_year_e == '戌')) {$c_sin_year_e = '比肩';}
if (($my_day_h == '戊') && ($c_month_e == '戌')) {$c_sin_month_e = '比肩';}
if (($my_day_h == '戊') && ($c_day_e == '戌')) {$c_sin_day_e = '比肩';}
if (($my_day_h == '戊') && ($c_hour_e == '戌')) {$c_sin_hour_e = '比肩';}

if (($my_day_h == '己') && ($c_year_h == '己')) {$c_sin_year_h = '比肩';}
if (($my_day_h == '己') && ($c_month_h == '己')) {$c_sin_month_h = '比肩';}
if (($my_day_h == '己') && ($c_day_h == '己')) {$c_sin_day_h = '比肩';}
if (($my_day_h == '己') && ($c_hour_h == '己')) {$c_sin_hour_h = '比肩';}
if (($my_day_h == '己') && ($c_year_e == '丑')) {$c_sin_year_e = '比肩';}
if (($my_day_h == '己') && ($c_month_e == '丑')) {$c_sin_month_e = '比肩';}
if (($my_day_h == '己') && ($c_day_e == '丑')) {$c_sin_day_e = '比肩';}
if (($my_day_h == '己') && ($c_hour_e == '丑')) {$c_sin_hour_e = '比肩';}
if (($my_day_h == '己') && ($c_year_e == '未')) {$c_sin_year_e = '比肩';}
if (($my_day_h == '己') && ($c_month_e == '未')) {$c_sin_month_e = '比肩';}
if (($my_day_h == '己') && ($c_day_e == '未')) {$c_sin_day_e = '比肩';}
if (($my_day_h == '己') && ($c_hour_e == '未')) {$c_sin_hour_e = '比肩';}

if (($my_day_h == '庚') && ($c_year_h == '庚')) {$c_sin_year_h = '比肩';}
if (($my_day_h == '庚') && ($c_month_h == '庚')) {$c_sin_month_h = '比肩';}
if (($my_day_h == '庚') && ($c_day_h == '庚')) {$c_sin_day_h = '比肩';}
if (($my_day_h == '庚') && ($c_hour_h == '庚')) {$c_sin_hour_h = '比肩';}
if (($my_day_h == '庚') && ($c_year_e == '申')) {$c_sin_year_e = '比肩';}
if (($my_day_h == '庚') && ($c_month_e == '申')) {$c_sin_month_e = '比肩';}
if (($my_day_h == '庚') && ($c_day_e == '申')) {$c_sin_day_e = '比肩';}
if (($my_day_h == '庚') && ($c_hour_e == '申')) {$c_sin_hour_e = '比肩';}

if (($my_day_h == '辛') && ($c_year_h == '辛')) {$c_sin_year_h = '比肩';}
if (($my_day_h == '辛') && ($c_month_h == '辛')) {$c_sin_month_h = '比肩';}
if (($my_day_h == '辛') && ($c_day_h == '辛')) {$c_sin_day_h = '比肩';}
if (($my_day_h == '辛') && ($c_hour_h == '辛')) {$c_sin_hour_h = '比肩';}
if (($my_day_h == '辛') && ($c_year_e == '酉')) {$c_sin_year_e = '比肩';}
if (($my_day_h == '辛') && ($c_month_e == '酉')) {$c_sin_month_e = '比肩';}
if (($my_day_h == '辛') && ($c_day_e == '酉')) {$c_sin_day_e = '比肩';}
if (($my_day_h == '辛') && ($c_hour_e == '酉')) {$c_sin_hour_e = '比肩';}

if (($my_day_h == '壬') && ($c_year_h == '壬')) {$c_sin_year_h = '比肩';}
if (($my_day_h == '壬') && ($c_month_h == '壬')) {$c_sin_month_h = '比肩';}
if (($my_day_h == '壬') && ($c_day_h == '壬')) {$c_sin_day_h = '比肩';}
if (($my_day_h == '壬') && ($c_hour_h == '壬')) {$c_sin_hour_h = '比肩';}
if (($my_day_h == '壬') && ($c_year_e == '亥')) {$c_sin_year_e = '比肩';}
if (($my_day_h == '壬') && ($c_month_e == '亥')) {$c_sin_month_e = '比肩';}
if (($my_day_h == '壬') && ($c_day_e == '亥')) {$c_sin_day_e = '比肩';}
if (($my_day_h == '壬') && ($c_hour_e == '亥')) {$c_sin_hour_e = '比肩';}

if (($my_day_h == '癸') && ($c_year_h == '癸')) {$c_sin_year_h = '比肩';}
if (($my_day_h == '癸') && ($c_month_h == '癸')) {$c_sin_month_h = '比肩';}
if (($my_day_h == '癸') && ($c_day_h == '癸')) {$c_sin_day_h = '比肩';}
if (($my_day_h == '癸') && ($c_hour_h == '癸')) {$c_sin_hour_h = '比肩';}
if (($my_day_h == '癸') && ($c_year_e == '子')) {$c_sin_year_e = '比肩';}
if (($my_day_h == '癸') && ($c_month_e == '子')) {$c_sin_month_e = '比肩';}
if (($my_day_h == '癸') && ($c_day_e == '子')) {$c_sin_day_e = '比肩';}
if (($my_day_h == '癸') && ($c_hour_e == '子')) {$c_sin_hour_e = '比肩';}

######################################################################

if (($my_day_h == '甲') && ($c_year_h == '乙')) {$c_sin_year_h = '劫財';}
if (($my_day_h == '甲') && ($c_month_h == '乙')) {$c_sin_month_h = '劫財';}
if (($my_day_h == '甲') && ($c_day_h == '乙')) {$c_sin_day_h = '劫財';}
if (($my_day_h == '甲') && ($c_hour_h == '乙')) {$c_sin_hour_h = '劫財';}
if (($my_day_h == '甲') && ($c_year_e == '卯')) {$c_sin_year_e = '劫財';}
if (($my_day_h == '甲') && ($c_month_e == '卯')) {$c_sin_month_e = '劫財';}
if (($my_day_h == '甲') && ($c_day_e == '卯')) {$c_sin_day_e = '劫財';}
if (($my_day_h == '甲') && ($c_hour_e == '卯')) {$c_sin_hour_e = '劫財';}

if (($my_day_h == '乙') && ($c_year_h == '甲')) {$c_sin_year_h = '劫財';}
if (($my_day_h == '乙') && ($c_month_h == '甲')) {$c_sin_month_h = '劫財';}
if (($my_day_h == '乙') && ($c_day_h == '甲')) {$c_sin_day_h = '劫財';}
if (($my_day_h == '乙') && ($c_hour_h == '甲')) {$c_sin_hour_h = '劫財';}
if (($my_day_h == '乙') && ($c_year_e == '寅')) {$c_sin_year_e = '劫財';}
if (($my_day_h == '乙') && ($c_month_e == '寅')) {$c_sin_month_e = '劫財';}
if (($my_day_h == '乙') && ($c_day_e == '寅')) {$c_sin_day_e = '劫財';}
if (($my_day_h == '乙') && ($c_hour_e == '寅')) {$c_sin_hour_e = '劫財';}

if (($my_day_h == '丙') && ($c_year_h == '丁')) {$c_sin_year_h = '劫財';}
if (($my_day_h == '丙') && ($c_month_h == '丁')) {$c_sin_month_h = '劫財';}
if (($my_day_h == '丙') && ($c_day_h == '丁')) {$c_sin_day_h = '劫財';}
if (($my_day_h == '丙') && ($c_hour_h == '丁')) {$c_sin_hour_h = '劫財';}
if (($my_day_h == '丙') && ($c_year_e == '午')) {$c_sin_year_e = '劫財';}
if (($my_day_h == '丙') && ($c_month_e == '午')) {$c_sin_month_e = '劫財';}
if (($my_day_h == '丙') && ($c_day_e == '午')) {$c_sin_day_e = '劫財';}
if (($my_day_h == '丙') && ($c_hour_e == '午')) {$c_sin_hour_e = '劫財';}

if (($my_day_h == '丁') && ($c_year_h == '丙')) {$c_sin_year_h = '劫財';}
if (($my_day_h == '丁') && ($c_month_h == '丙')) {$c_sin_month_h = '劫財';}
if (($my_day_h == '丁') && ($c_day_h == '丙')) {$c_sin_day_h = '劫財';}
if (($my_day_h == '丁') && ($c_hour_h == '丙')) {$c_sin_hour_h = '劫財';}
if (($my_day_h == '丁') && ($c_year_e == '巳')) {$c_sin_year_e = '劫財';}
if (($my_day_h == '丁') && ($c_month_e == '巳')) {$c_sin_month_e = '劫財';}
if (($my_day_h == '丁') && ($c_day_e == '巳')) {$c_sin_day_e = '劫財';}
if (($my_day_h == '丁') && ($c_hour_e == '巳')) {$c_sin_hour_e = '劫財';}

if (($my_day_h == '戊') && ($c_year_h == '己')) {$c_sin_year_h = '劫財';}
if (($my_day_h == '戊') && ($c_month_h == '己')) {$c_sin_month_h = '劫財';}
if (($my_day_h == '戊') && ($c_day_h == '己')) {$c_sin_day_h = '劫財';}
if (($my_day_h == '戊') && ($c_hour_h == '己')) {$c_sin_hour_h = '劫財';}
if (($my_day_h == '戊') && ($c_year_e == '丑')) {$c_sin_year_e = '劫財';}
if (($my_day_h == '戊') && ($c_month_e == '丑')) {$c_sin_month_e = '劫財';}
if (($my_day_h == '戊') && ($c_day_e == '丑')) {$c_sin_day_e = '劫財';}
if (($my_day_h == '戊') && ($c_hour_e == '丑')) {$c_sin_hour_e = '劫財';}
if (($my_day_h == '戊') && ($c_year_e == '未')) {$c_sin_year_e = '劫財';}
if (($my_day_h == '戊') && ($c_month_e == '未')) {$c_sin_month_e = '劫財';}
if (($my_day_h == '戊') && ($c_day_e == '未')) {$c_sin_day_e = '劫財';}
if (($my_day_h == '戊') && ($c_hour_e == '未')) {$c_sin_hour_e = '劫財';}

if (($my_day_h == '己') && ($c_year_h == '戊')) {$c_sin_year_h = '劫財';}
if (($my_day_h == '己') && ($c_month_h == '戊')) {$c_sin_month_h = '劫財';}
if (($my_day_h == '己') && ($c_day_h == '戊')) {$c_sin_day_h = '劫財';}
if (($my_day_h == '己') && ($c_hour_h == '戊')) {$c_sin_hour_h = '劫財';}
if (($my_day_h == '己') && ($c_year_e == '辰')) {$c_sin_year_e = '劫財';}
if (($my_day_h == '己') && ($c_month_e == '辰')) {$c_sin_month_e = '劫財';}
if (($my_day_h == '己') && ($c_day_e == '辰')) {$c_sin_day_e = '劫財';}
if (($my_day_h == '己') && ($c_hour_e == '辰')) {$c_sin_hour_e = '劫財';}
if (($my_day_h == '己') && ($c_year_e == '戌')) {$c_sin_year_e = '劫財';}
if (($my_day_h == '己') && ($c_month_e == '戌')) {$c_sin_month_e = '劫財';}
if (($my_day_h == '己') && ($c_day_e == '戌')) {$c_sin_day_e = '劫財';}
if (($my_day_h == '己') && ($c_hour_e == '戌')) {$c_sin_hour_e = '劫財';}

if (($my_day_h == '庚') && ($c_year_h == '辛')) {$c_sin_year_h = '劫財';}
if (($my_day_h == '庚') && ($c_month_h == '辛')) {$c_sin_month_h = '劫財';}
if (($my_day_h == '庚') && ($c_day_h == '辛')) {$c_sin_day_h = '劫財';}
if (($my_day_h == '庚') && ($c_hour_h == '辛')) {$c_sin_hour_h = '劫財';}
if (($my_day_h == '庚') && ($c_year_e == '酉')) {$c_sin_year_e = '劫財';}
if (($my_day_h == '庚') && ($c_month_e == '酉')) {$c_sin_month_e = '劫財';}
if (($my_day_h == '庚') && ($c_day_e == '酉')) {$c_sin_day_e = '劫財';}
if (($my_day_h == '庚') && ($c_hour_e == '酉')) {$c_sin_hour_e = '劫財';}

if (($my_day_h == '辛') && ($c_year_h == '庚')) {$c_sin_year_h = '劫財';}
if (($my_day_h == '辛') && ($c_month_h == '庚')) {$c_sin_month_h = '劫財';}
if (($my_day_h == '辛') && ($c_day_h == '庚')) {$c_sin_day_h = '劫財';}
if (($my_day_h == '辛') && ($c_hour_h == '庚')) {$c_sin_hour_h = '劫財';}
if (($my_day_h == '辛') && ($c_year_e == '申')) {$c_sin_year_e = '劫財';}
if (($my_day_h == '辛') && ($c_month_e == '申')) {$c_sin_month_e = '劫財';}
if (($my_day_h == '辛') && ($c_day_e == '申')) {$c_sin_day_e = '劫財';}
if (($my_day_h == '辛') && ($c_hour_e == '申')) {$c_sin_hour_e = '劫財';}

if (($my_day_h == '壬') && ($c_year_h == '癸')) {$c_sin_year_h = '劫財';}
if (($my_day_h == '壬') && ($c_month_h == '癸')) {$c_sin_month_h = '劫財';}
if (($my_day_h == '壬') && ($c_day_h == '癸')) {$c_sin_day_h = '劫財';}
if (($my_day_h == '壬') && ($c_hour_h == '癸')) {$c_sin_hour_h = '劫財';}
if (($my_day_h == '壬') && ($c_year_e == '子')) {$c_sin_year_e = '劫財';}
if (($my_day_h == '壬') && ($c_month_e == '子')) {$c_sin_month_e = '劫財';}
if (($my_day_h == '壬') && ($c_day_e == '子')) {$c_sin_day_e = '劫財';}
if (($my_day_h == '壬') && ($c_hour_e == '子')) {$c_sin_hour_e = '劫財';}

if (($my_day_h == '癸') && ($c_year_h == '壬')) {$c_sin_year_h = '劫財';}
if (($my_day_h == '癸') && ($c_month_h == '壬')) {$c_sin_month_h = '劫財';}
if (($my_day_h == '癸') && ($c_day_h == '壬')) {$c_sin_day_h = '劫財';}
if (($my_day_h == '癸') && ($c_hour_h == '壬')) {$c_sin_hour_h = '劫財';}
if (($my_day_h == '癸') && ($c_year_e == '亥')) {$c_sin_year_e = '劫財';}
if (($my_day_h == '癸') && ($c_month_e == '亥')) {$c_sin_month_e = '劫財';}
if (($my_day_h == '癸') && ($c_day_e == '亥')) {$c_sin_day_e = '劫財';}
if (($my_day_h == '癸') && ($c_hour_e == '亥')) {$c_sin_hour_e = '劫財';}

######################################################################


if (($my_day_h == '甲') && ($c_year_h == '丙')) {$c_sin_year_h = '食神';}
if (($my_day_h == '甲') && ($c_month_h == '丙')) {$c_sin_month_h = '食神';}
if (($my_day_h == '甲') && ($c_day_h == '丙')) {$c_sin_day_h = '食神';}
if (($my_day_h == '甲') && ($c_hour_h == '丙')) {$c_sin_hour_h = '食神';}
if (($my_day_h == '甲') && ($c_year_e == '巳')) {$c_sin_year_e = '食神';}
if (($my_day_h == '甲') && ($c_month_e == '巳')) {$c_sin_month_e = '食神';}
if (($my_day_h == '甲') && ($c_day_e == '巳')) {$c_sin_day_e = '食神';}
if (($my_day_h == '甲') && ($c_hour_e == '巳')) {$c_sin_hour_e = '食神';}

if (($my_day_h == '乙') && ($c_year_h == '丁')) {$c_sin_year_h = '食神';}
if (($my_day_h == '乙') && ($c_month_h == '丁')) {$c_sin_month_h = '食神';}
if (($my_day_h == '乙') && ($c_day_h == '丁')) {$c_sin_day_h = '食神';}
if (($my_day_h == '乙') && ($c_hour_h == '丁')) {$c_sin_hour_h = '食神';}
if (($my_day_h == '乙') && ($c_year_e == '午')) {$c_sin_year_e = '食神';}
if (($my_day_h == '乙') && ($c_month_e == '午')) {$c_sin_month_e = '食神';}
if (($my_day_h == '乙') && ($c_day_e == '午')) {$c_sin_day_e = '食神';}
if (($my_day_h == '乙') && ($c_hour_e == '午')) {$c_sin_hour_e = '食神';}

if (($my_day_h == '丙') && ($c_year_h == '戊')) {$c_sin_year_h = '食神';}
if (($my_day_h == '丙') && ($c_month_h == '戊')) {$c_sin_month_h = '食神';}
if (($my_day_h == '丙') && ($c_day_h == '戊')) {$c_sin_day_h = '食神';}
if (($my_day_h == '丙') && ($c_hour_h == '戊')) {$c_sin_hour_h = '食神';}
if (($my_day_h == '丙') && ($c_year_e == '辰')) {$c_sin_year_e = '食神';}
if (($my_day_h == '丙') && ($c_month_e == '辰')) {$c_sin_month_e = '食神';}
if (($my_day_h == '丙') && ($c_day_e == '辰')) {$c_sin_day_e = '食神';}
if (($my_day_h == '丙') && ($c_hour_e == '辰')) {$c_sin_hour_e = '食神';}
if (($my_day_h == '丙') && ($c_year_e == '戌')) {$c_sin_year_e = '食神';}
if (($my_day_h == '丙') && ($c_month_e == '戌')) {$c_sin_month_e = '食神';}
if (($my_day_h == '丙') && ($c_day_e == '戌')) {$c_sin_day_e = '食神';}
if (($my_day_h == '丙') && ($c_hour_e == '戌')) {$c_sin_hour_e = '食神';}

if (($my_day_h == '丁') && ($c_year_h == '己')) {$c_sin_year_h = '食神';}
if (($my_day_h == '丁') && ($c_month_h == '己')) {$c_sin_month_h = '食神';}
if (($my_day_h == '丁') && ($c_day_h == '己')) {$c_sin_day_h = '食神';}
if (($my_day_h == '丁') && ($c_hour_h == '己')) {$c_sin_hour_h = '食神';}
if (($my_day_h == '丁') && ($c_year_e == '丑')) {$c_sin_year_e = '食神';}
if (($my_day_h == '丁') && ($c_month_e == '丑')) {$c_sin_month_e = '食神';}
if (($my_day_h == '丁') && ($c_day_e == '丑')) {$c_sin_day_e = '食神';}
if (($my_day_h == '丁') && ($c_hour_e == '丑')) {$c_sin_hour_e = '食神';}
if (($my_day_h == '丁') && ($c_year_e == '未')) {$c_sin_year_e = '食神';}
if (($my_day_h == '丁') && ($c_month_e == '未')) {$c_sin_month_e = '食神';}
if (($my_day_h == '丁') && ($c_day_e == '未')) {$c_sin_day_e = '食神';}
if (($my_day_h == '丁') && ($c_hour_e == '未')) {$c_sin_hour_e = '食神';}


if (($my_day_h == '戊') && ($c_year_h == '庚')) {$c_sin_year_h = '食神';}
if (($my_day_h == '戊') && ($c_month_h == '庚')) {$c_sin_month_h = '食神';}
if (($my_day_h == '戊') && ($c_day_h == '庚')) {$c_sin_day_h = '食神';}
if (($my_day_h == '戊') && ($c_hour_h == '庚')) {$c_sin_hour_h = '食神';}
if (($my_day_h == '戊') && ($c_year_e == '申')) {$c_sin_year_e = '食神';}
if (($my_day_h == '戊') && ($c_month_e == '申')) {$c_sin_month_e = '食神';}
if (($my_day_h == '戊') && ($c_day_e == '申')) {$c_sin_day_e = '食神';}
if (($my_day_h == '戊') && ($c_hour_e == '申')) {$c_sin_hour_e = '食神';}

if (($my_day_h == '己') && ($c_year_h == '辛')) {$c_sin_year_h = '食神';}
if (($my_day_h == '己') && ($c_month_h == '辛')) {$c_sin_month_h = '食神';}
if (($my_day_h == '己') && ($c_day_h == '辛')) {$c_sin_day_h = '食神';}
if (($my_day_h == '己') && ($c_hour_h == '辛')) {$c_sin_hour_h = '食神';}
if (($my_day_h == '己') && ($c_year_e == '酉')) {$c_sin_year_e = '食神';}
if (($my_day_h == '己') && ($c_month_e == '酉')) {$c_sin_month_e = '食神';}
if (($my_day_h == '己') && ($c_day_e == '酉')) {$c_sin_day_e = '食神';}
if (($my_day_h == '己') && ($c_hour_e == '酉')) {$c_sin_hour_e = '食神';}

if (($my_day_h == '庚') && ($c_year_h == '壬')) {$c_sin_year_h = '食神';}
if (($my_day_h == '庚') && ($c_month_h == '壬')) {$c_sin_month_h = '食神';}
if (($my_day_h == '庚') && ($c_day_h == '壬')) {$c_sin_day_h = '食神';}
if (($my_day_h == '庚') && ($c_hour_h == '壬')) {$c_sin_hour_h = '食神';}
if (($my_day_h == '庚') && ($c_year_e == '亥')) {$c_sin_year_e = '食神';}
if (($my_day_h == '庚') && ($c_month_e == '亥')) {$c_sin_month_e = '食神';}
if (($my_day_h == '庚') && ($c_day_e == '亥')) {$c_sin_day_e = '食神';}
if (($my_day_h == '庚') && ($c_hour_e == '亥')) {$c_sin_hour_e = '食神';}

if (($my_day_h == '辛') && ($c_year_h == '癸')) {$c_sin_year_h = '食神';}
if (($my_day_h == '辛') && ($c_month_h == '癸')) {$c_sin_month_h = '食神';}
if (($my_day_h == '辛') && ($c_day_h == '癸')) {$c_sin_day_h = '食神';}
if (($my_day_h == '辛') && ($c_hour_h == '癸')) {$c_sin_hour_h = '食神';}
if (($my_day_h == '辛') && ($c_year_e == '子')) {$c_sin_year_e = '食神';}
if (($my_day_h == '辛') && ($c_month_e == '子')) {$c_sin_month_e = '食神';}
if (($my_day_h == '辛') && ($c_day_e == '子')) {$c_sin_day_e = '食神';}
if (($my_day_h == '辛') && ($c_hour_e == '子')) {$c_sin_hour_e = '食神';}

if (($my_day_h == '壬') && ($c_year_h == '甲')) {$c_sin_year_h = '食神';}
if (($my_day_h == '壬') && ($c_month_h == '甲')) {$c_sin_month_h = '食神';}
if (($my_day_h == '壬') && ($c_day_h == '甲')) {$c_sin_day_h = '食神';}
if (($my_day_h == '壬') && ($c_hour_h == '甲')) {$c_sin_hour_h = '食神';}
if (($my_day_h == '壬') && ($c_year_e == '寅')) {$c_sin_year_e = '食神';}
if (($my_day_h == '壬') && ($c_month_e == '寅')) {$c_sin_month_e = '食神';}
if (($my_day_h == '壬') && ($c_day_e == '寅')) {$c_sin_day_e = '食神';}
if (($my_day_h == '壬') && ($c_hour_e == '寅')) {$c_sin_hour_e = '食神';}

if (($my_day_h == '癸') && ($c_year_h == '乙')) {$c_sin_year_h = '食神';}
if (($my_day_h == '癸') && ($c_month_h == '乙')) {$c_sin_month_h = '食神';}
if (($my_day_h == '癸') && ($c_day_h == '乙')) {$c_sin_day_h = '食神';}
if (($my_day_h == '癸') && ($c_hour_h == '乙')) {$c_sin_hour_h = '食神';}
if (($my_day_h == '癸') && ($c_year_e == '卯')) {$c_sin_year_e = '食神';}
if (($my_day_h == '癸') && ($c_month_e == '卯')) {$c_sin_month_e = '食神';}
if (($my_day_h == '癸') && ($c_day_e == '卯')) {$c_sin_day_e = '食神';}
if (($my_day_h == '癸') && ($c_hour_e == '卯')) {$c_sin_hour_e = '食神';}

######################################################################


if (($my_day_h == '甲') && ($c_year_h == '丁')) {$c_sin_year_h = '傷官';}
if (($my_day_h == '甲') && ($c_month_h == '丁')) {$c_sin_month_h = '傷官';}
if (($my_day_h == '甲') && ($c_day_h == '丁')) {$c_sin_day_h = '傷官';}
if (($my_day_h == '甲') && ($c_hour_h == '丁')) {$c_sin_hour_h = '傷官';}
if (($my_day_h == '甲') && ($c_year_e == '午')) {$c_sin_year_e = '傷官';}
if (($my_day_h == '甲') && ($c_month_e == '午')) {$c_sin_month_e = '傷官';}
if (($my_day_h == '甲') && ($c_day_e == '午')) {$c_sin_day_e = '傷官';}
if (($my_day_h == '甲') && ($c_hour_e == '午')) {$c_sin_hour_e = '傷官';}

if (($my_day_h == '乙') && ($c_year_h == '丙')) {$c_sin_year_h = '傷官';}
if (($my_day_h == '乙') && ($c_month_h == '丙')) {$c_sin_month_h = '傷官';}
if (($my_day_h == '乙') && ($c_day_h == '丙')) {$c_sin_day_h = '傷官';}
if (($my_day_h == '乙') && ($c_hour_h == '丙')) {$c_sin_hour_h = '傷官';}
if (($my_day_h == '乙') && ($c_year_e == '巳')) {$c_sin_year_e = '傷官';}
if (($my_day_h == '乙') && ($c_month_e == '巳')) {$c_sin_month_e = '傷官';}
if (($my_day_h == '乙') && ($c_day_e == '巳')) {$c_sin_day_e = '傷官';}
if (($my_day_h == '乙') && ($c_hour_e == '巳')) {$c_sin_hour_e = '傷官';}

if (($my_day_h == '丙') && ($c_year_h == '己')) {$c_sin_year_h = '傷官';}
if (($my_day_h == '丙') && ($c_month_h == '己')) {$c_sin_month_h = '傷官';}
if (($my_day_h == '丙') && ($c_day_h == '己')) {$c_sin_day_h = '傷官';}
if (($my_day_h == '丙') && ($c_hour_h == '己')) {$c_sin_hour_h = '傷官';}
if (($my_day_h == '丙') && ($c_year_e == '丑')) {$c_sin_year_e = '傷官';}
if (($my_day_h == '丙') && ($c_month_e == '丑')) {$c_sin_month_e = '傷官';}
if (($my_day_h == '丙') && ($c_day_e == '丑')) {$c_sin_day_e = '傷官';}
if (($my_day_h == '丙') && ($c_hour_e == '丑')) {$c_sin_hour_e = '傷官';}
if (($my_day_h == '丙') && ($c_year_e == '未')) {$c_sin_year_e = '傷官';}
if (($my_day_h == '丙') && ($c_month_e == '未')) {$c_sin_month_e = '傷官';}
if (($my_day_h == '丙') && ($c_day_e == '未')) {$c_sin_day_e = '傷官';}
if (($my_day_h == '丙') && ($c_hour_e == '未')) {$c_sin_hour_e = '傷官';}

if (($my_day_h == '丁') && ($c_year_h == '戊')) {$c_sin_year_h = '傷官';}
if (($my_day_h == '丁') && ($c_month_h == '戊')) {$c_sin_month_h = '傷官';}
if (($my_day_h == '丁') && ($c_day_h == '戊')) {$c_sin_day_h = '傷官';}
if (($my_day_h == '丁') && ($c_hour_h == '戊')) {$c_sin_hour_h = '傷官';}
if (($my_day_h == '丁') && ($c_year_e == '辰')) {$c_sin_year_e = '傷官';}
if (($my_day_h == '丁') && ($c_month_e == '辰')) {$c_sin_month_e = '傷官';}
if (($my_day_h == '丁') && ($c_day_e == '辰')) {$c_sin_day_e = '傷官';}
if (($my_day_h == '丁') && ($c_hour_e == '辰')) {$c_sin_hour_e = '傷官';}
if (($my_day_h == '丁') && ($c_year_e == '戌')) {$c_sin_year_e = '傷官';}
if (($my_day_h == '丁') && ($c_month_e == '戌')) {$c_sin_month_e = '傷官';}
if (($my_day_h == '丁') && ($c_day_e == '戌')) {$c_sin_day_e = '傷官';}
if (($my_day_h == '丁') && ($c_hour_e == '戌')) {$c_sin_hour_e = '傷官';}


if (($my_day_h == '戊') && ($c_year_h == '辛')) {$c_sin_year_h = '傷官';}
if (($my_day_h == '戊') && ($c_month_h == '辛')) {$c_sin_month_h = '傷官';}
if (($my_day_h == '戊') && ($c_day_h == '辛')) {$c_sin_day_h = '傷官';}
if (($my_day_h == '戊') && ($c_hour_h == '辛')) {$c_sin_hour_h = '傷官';}
if (($my_day_h == '戊') && ($c_year_e == '酉')) {$c_sin_year_e = '傷官';}
if (($my_day_h == '戊') && ($c_month_e == '酉')) {$c_sin_month_e = '傷官';}
if (($my_day_h == '戊') && ($c_day_e == '酉')) {$c_sin_day_e = '傷官';}
if (($my_day_h == '戊') && ($c_hour_e == '酉')) {$c_sin_hour_e = '傷官';}

if (($my_day_h == '己') && ($c_year_h == '庚')) {$c_sin_year_h = '傷官';}
if (($my_day_h == '己') && ($c_month_h == '庚')) {$c_sin_month_h = '傷官';}
if (($my_day_h == '己') && ($c_day_h == '庚')) {$c_sin_day_h = '傷官';}
if (($my_day_h == '己') && ($c_hour_h == '庚')) {$c_sin_hour_h = '傷官';}
if (($my_day_h == '己') && ($c_year_e == '申')) {$c_sin_year_e = '傷官';}
if (($my_day_h == '己') && ($c_month_e == '申')) {$c_sin_month_e = '傷官';}
if (($my_day_h == '己') && ($c_day_e == '申')) {$c_sin_day_e = '傷官';}
if (($my_day_h == '己') && ($c_hour_e == '申')) {$c_sin_hour_e = '傷官';}

if (($my_day_h == '庚') && ($c_year_h == '癸')) {$c_sin_year_h = '傷官';}
if (($my_day_h == '庚') && ($c_month_h == '癸')) {$c_sin_month_h = '傷官';}
if (($my_day_h == '庚') && ($c_day_h == '癸')) {$c_sin_day_h = '傷官';}
if (($my_day_h == '庚') && ($c_hour_h == '癸')) {$c_sin_hour_h = '傷官';}
if (($my_day_h == '庚') && ($c_year_e == '子')) {$c_sin_year_e = '傷官';}
if (($my_day_h == '庚') && ($c_month_e == '子')) {$c_sin_month_e = '傷官';}
if (($my_day_h == '庚') && ($c_day_e == '子')) {$c_sin_day_e = '傷官';}
if (($my_day_h == '庚') && ($c_hour_e == '子')) {$c_sin_hour_e = '傷官';}

if (($my_day_h == '辛') && ($c_year_h == '壬')) {$c_sin_year_h = '傷官';}
if (($my_day_h == '辛') && ($c_month_h == '壬')) {$c_sin_month_h = '傷官';}
if (($my_day_h == '辛') && ($c_day_h == '壬')) {$c_sin_day_h = '傷官';}
if (($my_day_h == '辛') && ($c_hour_h == '壬')) {$c_sin_hour_h = '傷官';}
if (($my_day_h == '辛') && ($c_year_e == '亥')) {$c_sin_year_e = '傷官';}
if (($my_day_h == '辛') && ($c_month_e == '亥')) {$c_sin_month_e = '傷官';}
if (($my_day_h == '辛') && ($c_day_e == '亥')) {$c_sin_day_e = '傷官';}
if (($my_day_h == '辛') && ($c_hour_e == '亥')) {$c_sin_hour_e = '傷官';}

if (($my_day_h == '壬') && ($c_year_h == '乙')) {$c_sin_year_h = '傷官';}
if (($my_day_h == '壬') && ($c_month_h == '乙')) {$c_sin_month_h = '傷官';}
if (($my_day_h == '壬') && ($c_day_h == '乙')) {$c_sin_day_h = '傷官';}
if (($my_day_h == '壬') && ($c_hour_h == '乙')) {$c_sin_hour_h = '傷官';}
if (($my_day_h == '壬') && ($c_year_e == '卯')) {$c_sin_year_e = '傷官';}
if (($my_day_h == '壬') && ($c_month_e == '卯')) {$c_sin_month_e = '傷官';}
if (($my_day_h == '壬') && ($c_day_e == '卯')) {$c_sin_day_e = '傷官';}
if (($my_day_h == '壬') && ($c_hour_e == '卯')) {$c_sin_hour_e = '傷官';}

if (($my_day_h == '癸') && ($c_year_h == '甲')) {$c_sin_year_h = '傷官';}
if (($my_day_h == '癸') && ($c_month_h == '甲')) {$c_sin_month_h = '傷官';}
if (($my_day_h == '癸') && ($c_day_h == '甲')) {$c_sin_day_h = '傷官';}
if (($my_day_h == '癸') && ($c_hour_h == '甲')) {$c_sin_hour_h = '傷官';}
if (($my_day_h == '癸') && ($c_year_e == '寅')) {$c_sin_year_e = '傷官';}
if (($my_day_h == '癸') && ($c_month_e == '寅')) {$c_sin_month_e = '傷官';}
if (($my_day_h == '癸') && ($c_day_e == '寅')) {$c_sin_day_e = '傷官';}
if (($my_day_h == '癸') && ($c_hour_e == '寅')) {$c_sin_hour_e = '傷官';}

######################################################################

if (($my_day_h == '甲') && ($c_year_h == '戊')) {$c_sin_year_h = '偏財';}
if (($my_day_h == '甲') && ($c_month_h == '戊')) {$c_sin_month_h = '偏財';}
if (($my_day_h == '甲') && ($c_day_h == '戊')) {$c_sin_day_h = '偏財';}
if (($my_day_h == '甲') && ($c_hour_h == '戊')) {$c_sin_hour_h = '偏財';}
if (($my_day_h == '甲') && ($c_year_e == '辰')) {$c_sin_year_e = '偏財';}
if (($my_day_h == '甲') && ($c_month_e == '辰')) {$c_sin_month_e = '偏財';}
if (($my_day_h == '甲') && ($c_day_e == '辰')) {$c_sin_day_e = '偏財';}
if (($my_day_h == '甲') && ($c_hour_e == '辰')) {$c_sin_hour_e = '偏財';}
if (($my_day_h == '甲') && ($c_year_e == '戌')) {$c_sin_year_e = '偏財';}
if (($my_day_h == '甲') && ($c_month_e == '戌')) {$c_sin_month_e = '偏財';}
if (($my_day_h == '甲') && ($c_day_e == '戌')) {$c_sin_day_e = '偏財';}
if (($my_day_h == '甲') && ($c_hour_e == '戌')) {$c_sin_hour_e = '偏財';}

if (($my_day_h == '乙') && ($c_year_h == '己')) {$c_sin_year_h = '偏財';}
if (($my_day_h == '乙') && ($c_month_h == '己')) {$c_sin_month_h = '偏財';}
if (($my_day_h == '乙') && ($c_day_h == '己')) {$c_sin_day_h = '偏財';}
if (($my_day_h == '乙') && ($c_hour_h == '己')) {$c_sin_hour_h = '偏財';}
if (($my_day_h == '乙') && ($c_year_e == '丑')) {$c_sin_year_e = '偏財';}
if (($my_day_h == '乙') && ($c_month_e == '丑')) {$c_sin_month_e = '偏財';}
if (($my_day_h == '乙') && ($c_day_e == '丑')) {$c_sin_day_e = '偏財';}
if (($my_day_h == '乙') && ($c_hour_e == '丑')) {$c_sin_hour_e = '偏財';}
if (($my_day_h == '乙') && ($c_year_e == '未')) {$c_sin_year_e = '偏財';}
if (($my_day_h == '乙') && ($c_month_e == '未')) {$c_sin_month_e = '偏財';}
if (($my_day_h == '乙') && ($c_day_e == '未')) {$c_sin_day_e = '偏財';}
if (($my_day_h == '乙') && ($c_hour_e == '未')) {$c_sin_hour_e = '偏財';}

if (($my_day_h == '丙') && ($c_year_h == '庚')) {$c_sin_year_h = '偏財';}
if (($my_day_h == '丙') && ($c_month_h == '庚')) {$c_sin_month_h = '偏財';}
if (($my_day_h == '丙') && ($c_day_h == '庚')) {$c_sin_day_h = '偏財';}
if (($my_day_h == '丙') && ($c_hour_h == '庚')) {$c_sin_hour_h = '偏財';}
if (($my_day_h == '丙') && ($c_year_e == '申')) {$c_sin_year_e = '偏財';}
if (($my_day_h == '丙') && ($c_month_e == '申')) {$c_sin_month_e = '偏財';}
if (($my_day_h == '丙') && ($c_day_e == '申')) {$c_sin_day_e = '偏財';}
if (($my_day_h == '丙') && ($c_hour_e == '申')) {$c_sin_hour_e = '偏財';}

if (($my_day_h == '丁') && ($c_year_h == '辛')) {$c_sin_year_h = '偏財';}
if (($my_day_h == '丁') && ($c_month_h == '辛')) {$c_sin_month_h = '偏財';}
if (($my_day_h == '丁') && ($c_day_h == '辛')) {$c_sin_day_h = '偏財';}
if (($my_day_h == '丁') && ($c_hour_h == '辛')) {$c_sin_hour_h = '偏財';}
if (($my_day_h == '丁') && ($c_year_e == '酉')) {$c_sin_year_e = '偏財';}
if (($my_day_h == '丁') && ($c_month_e == '酉')) {$c_sin_month_e = '偏財';}
if (($my_day_h == '丁') && ($c_day_e == '酉')) {$c_sin_day_e = '偏財';}
if (($my_day_h == '丁') && ($c_hour_e == '酉')) {$c_sin_hour_e = '偏財';}


if (($my_day_h == '戊') && ($c_year_h == '壬')) {$c_sin_year_h = '偏財';}
if (($my_day_h == '戊') && ($c_month_h == '壬')) {$c_sin_month_h = '偏財';}
if (($my_day_h == '戊') && ($c_day_h == '壬')) {$c_sin_day_h = '偏財';}
if (($my_day_h == '戊') && ($c_hour_h == '壬')) {$c_sin_hour_h = '偏財';}
if (($my_day_h == '戊') && ($c_year_e == '亥')) {$c_sin_year_e = '偏財';}
if (($my_day_h == '戊') && ($c_month_e == '亥')) {$c_sin_month_e = '偏財';}
if (($my_day_h == '戊') && ($c_day_e == '亥')) {$c_sin_day_e = '偏財';}
if (($my_day_h == '戊') && ($c_hour_e == '亥')) {$c_sin_hour_e = '偏財';}

if (($my_day_h == '己') && ($c_year_h == '癸')) {$c_sin_year_h = '偏財';}
if (($my_day_h == '己') && ($c_month_h == '癸')) {$c_sin_month_h = '偏財';}
if (($my_day_h == '己') && ($c_day_h == '癸')) {$c_sin_day_h = '偏財';}
if (($my_day_h == '己') && ($c_hour_h == '癸')) {$c_sin_hour_h = '偏財';}
if (($my_day_h == '己') && ($c_year_e == '子')) {$c_sin_year_e = '偏財';}
if (($my_day_h == '己') && ($c_month_e == '子')) {$c_sin_month_e = '偏財';}
if (($my_day_h == '己') && ($c_day_e == '子')) {$c_sin_day_e = '偏財';}
if (($my_day_h == '己') && ($c_hour_e == '子')) {$c_sin_hour_e = '偏財';}

if (($my_day_h == '庚') && ($c_year_h == '甲')) {$c_sin_year_h = '偏財';}
if (($my_day_h == '庚') && ($c_month_h == '甲')) {$c_sin_month_h = '偏財';}
if (($my_day_h == '庚') && ($c_day_h == '甲')) {$c_sin_day_h = '偏財';}
if (($my_day_h == '庚') && ($c_hour_h == '甲')) {$c_sin_hour_h = '偏財';}
if (($my_day_h == '庚') && ($c_year_e == '寅')) {$c_sin_year_e = '偏財';}
if (($my_day_h == '庚') && ($c_month_e == '寅')) {$c_sin_month_e = '偏財';}
if (($my_day_h == '庚') && ($c_day_e == '寅')) {$c_sin_day_e = '偏財';}
if (($my_day_h == '庚') && ($c_hour_e == '寅')) {$c_sin_hour_e = '偏財';}

if (($my_day_h == '辛') && ($c_year_h == '乙')) {$c_sin_year_h = '偏財';}
if (($my_day_h == '辛') && ($c_month_h == '乙')) {$c_sin_month_h = '偏財';}
if (($my_day_h == '辛') && ($c_day_h == '乙')) {$c_sin_day_h = '偏財';}
if (($my_day_h == '辛') && ($c_hour_h == '乙')) {$c_sin_hour_h = '偏財';}
if (($my_day_h == '辛') && ($c_year_e == '卯')) {$c_sin_year_e = '偏財';}
if (($my_day_h == '辛') && ($c_month_e == '卯')) {$c_sin_month_e = '偏財';}
if (($my_day_h == '辛') && ($c_day_e == '卯')) {$c_sin_day_e = '偏財';}
if (($my_day_h == '辛') && ($c_hour_e == '卯')) {$c_sin_hour_e = '偏財';}

if (($my_day_h == '壬') && ($c_year_h == '丙')) {$c_sin_year_h = '偏財';}
if (($my_day_h == '壬') && ($c_month_h == '丙')) {$c_sin_month_h = '偏財';}
if (($my_day_h == '壬') && ($c_day_h == '丙')) {$c_sin_day_h = '偏財';}
if (($my_day_h == '壬') && ($c_hour_h == '丙')) {$c_sin_hour_h = '偏財';}
if (($my_day_h == '壬') && ($c_year_e == '巳')) {$c_sin_year_e = '偏財';}
if (($my_day_h == '壬') && ($c_month_e == '巳')) {$c_sin_month_e = '偏財';}
if (($my_day_h == '壬') && ($c_day_e == '巳')) {$c_sin_day_e = '偏財';}
if (($my_day_h == '壬') && ($c_hour_e == '巳')) {$c_sin_hour_e = '偏財';}

if (($my_day_h == '癸') && ($c_year_h == '丁')) {$c_sin_year_h = '偏財';}
if (($my_day_h == '癸') && ($c_month_h == '丁')) {$c_sin_month_h = '偏財';}
if (($my_day_h == '癸') && ($c_day_h == '丁')) {$c_sin_day_h = '偏財';}
if (($my_day_h == '癸') && ($c_hour_h == '丁')) {$c_sin_hour_h = '偏財';}
if (($my_day_h == '癸') && ($c_year_e == '午')) {$c_sin_year_e = '偏財';}
if (($my_day_h == '癸') && ($c_month_e == '午')) {$c_sin_month_e = '偏財';}
if (($my_day_h == '癸') && ($c_day_e == '午')) {$c_sin_day_e = '偏財';}
if (($my_day_h == '癸') && ($c_hour_e == '午')) {$c_sin_hour_e = '偏財';}

######################################################################



if (($my_day_h == '甲') && ($c_year_h == '己')) {$c_sin_year_h = '正財';}
if (($my_day_h == '甲') && ($c_month_h == '己')) {$c_sin_month_h = '正財';}
if (($my_day_h == '甲') && ($c_day_h == '己')) {$c_sin_day_h = '正財';}
if (($my_day_h == '甲') && ($c_hour_h == '己')) {$c_sin_hour_h = '正財';}
if (($my_day_h == '甲') && ($c_year_e == '丑')) {$c_sin_year_e = '正財';}
if (($my_day_h == '甲') && ($c_month_e == '丑')) {$c_sin_month_e = '正財';}
if (($my_day_h == '甲') && ($c_day_e == '丑')) {$c_sin_day_e = '正財';}
if (($my_day_h == '甲') && ($c_hour_e == '丑')) {$c_sin_hour_e = '正財';}
if (($my_day_h == '甲') && ($c_year_e == '未')) {$c_sin_year_e = '正財';}
if (($my_day_h == '甲') && ($c_month_e == '未')) {$c_sin_month_e = '正財';}
if (($my_day_h == '甲') && ($c_day_e == '未')) {$c_sin_day_e = '正財';}
if (($my_day_h == '甲') && ($c_hour_e == '未')) {$c_sin_hour_e = '正財';}

if (($my_day_h == '乙') && ($c_year_h == '戊')) {$c_sin_year_h = '正財';}
if (($my_day_h == '乙') && ($c_month_h == '戊')) {$c_sin_month_h = '正財';}
if (($my_day_h == '乙') && ($c_day_h == '戊')) {$c_sin_day_h = '正財';}
if (($my_day_h == '乙') && ($c_hour_h == '戊')) {$c_sin_hour_h = '正財';}
if (($my_day_h == '乙') && ($c_year_e == '辰')) {$c_sin_year_e = '正財';}
if (($my_day_h == '乙') && ($c_month_e == '辰')) {$c_sin_month_e = '正財';}
if (($my_day_h == '乙') && ($c_day_e == '辰')) {$c_sin_day_e = '正財';}
if (($my_day_h == '乙') && ($c_hour_e == '辰')) {$c_sin_hour_e = '正財';}
if (($my_day_h == '乙') && ($c_year_e == '戌')) {$c_sin_year_e = '正財';}
if (($my_day_h == '乙') && ($c_month_e == '戌')) {$c_sin_month_e = '正財';}
if (($my_day_h == '乙') && ($c_day_e == '戌')) {$c_sin_day_e = '正財';}
if (($my_day_h == '乙') && ($c_hour_e == '戌')) {$c_sin_hour_e = '正財';}

if (($my_day_h == '丙') && ($c_year_h == '辛')) {$c_sin_year_h = '正財';}
if (($my_day_h == '丙') && ($c_month_h == '辛')) {$c_sin_month_h = '正財';}
if (($my_day_h == '丙') && ($c_day_h == '辛')) {$c_sin_day_h = '正財';}
if (($my_day_h == '丙') && ($c_hour_h == '辛')) {$c_sin_hour_h = '正財';}
if (($my_day_h == '丙') && ($c_year_e == '酉')) {$c_sin_year_e = '正財';}
if (($my_day_h == '丙') && ($c_month_e == '酉')) {$c_sin_month_e = '正財';}
if (($my_day_h == '丙') && ($c_day_e == '酉')) {$c_sin_day_e = '正財';}
if (($my_day_h == '丙') && ($c_hour_e == '酉')) {$c_sin_hour_e = '正財';}

if (($my_day_h == '丁') && ($c_year_h == '庚')) {$c_sin_year_h = '正財';}
if (($my_day_h == '丁') && ($c_month_h == '庚')) {$c_sin_month_h = '正財';}
if (($my_day_h == '丁') && ($c_day_h == '庚')) {$c_sin_day_h = '正財';}
if (($my_day_h == '丁') && ($c_hour_h == '庚')) {$c_sin_hour_h = '正財';}
if (($my_day_h == '丁') && ($c_year_e == '申')) {$c_sin_year_e = '正財';}
if (($my_day_h == '丁') && ($c_month_e == '申')) {$c_sin_month_e = '正財';}
if (($my_day_h == '丁') && ($c_day_e == '申')) {$c_sin_day_e = '正財';}
if (($my_day_h == '丁') && ($c_hour_e == '申')) {$c_sin_hour_e = '正財';}


if (($my_day_h == '戊') && ($c_year_h == '癸')) {$c_sin_year_h = '正財';}
if (($my_day_h == '戊') && ($c_month_h == '癸')) {$c_sin_month_h = '正財';}
if (($my_day_h == '戊') && ($c_day_h == '癸')) {$c_sin_day_h = '正財';}
if (($my_day_h == '戊') && ($c_hour_h == '癸')) {$c_sin_hour_h = '正財';}
if (($my_day_h == '戊') && ($c_year_e == '子')) {$c_sin_year_e = '正財';}
if (($my_day_h == '戊') && ($c_month_e == '子')) {$c_sin_month_e = '正財';}
if (($my_day_h == '戊') && ($c_day_e == '子')) {$c_sin_day_e = '正財';}
if (($my_day_h == '戊') && ($c_hour_e == '子')) {$c_sin_hour_e = '正財';}

if (($my_day_h == '己') && ($c_year_h == '壬')) {$c_sin_year_h = '正財';}
if (($my_day_h == '己') && ($c_month_h == '壬')) {$c_sin_month_h = '正財';}
if (($my_day_h == '己') && ($c_day_h == '壬')) {$c_sin_day_h = '正財';}
if (($my_day_h == '己') && ($c_hour_h == '壬')) {$c_sin_hour_h = '正財';}
if (($my_day_h == '己') && ($c_year_e == '亥')) {$c_sin_year_e = '正財';}
if (($my_day_h == '己') && ($c_month_e == '亥')) {$c_sin_month_e = '正財';}
if (($my_day_h == '己') && ($c_day_e == '亥')) {$c_sin_day_e = '正財';}
if (($my_day_h == '己') && ($c_hour_e == '亥')) {$c_sin_hour_e = '正財';}

if (($my_day_h == '庚') && ($c_year_h == '乙')) {$c_sin_year_h = '正財';}
if (($my_day_h == '庚') && ($c_month_h == '乙')) {$c_sin_month_h = '正財';}
if (($my_day_h == '庚') && ($c_day_h == '乙')) {$c_sin_day_h = '正財';}
if (($my_day_h == '庚') && ($c_hour_h == '乙')) {$c_sin_hour_h = '正財';}
if (($my_day_h == '庚') && ($c_year_e == '卯')) {$c_sin_year_e = '正財';}
if (($my_day_h == '庚') && ($c_month_e == '卯')) {$c_sin_month_e = '正財';}
if (($my_day_h == '庚') && ($c_day_e == '卯')) {$c_sin_day_e = '正財';}
if (($my_day_h == '庚') && ($c_hour_e == '卯')) {$c_sin_hour_e = '正財';}

if (($my_day_h == '辛') && ($c_year_h == '甲')) {$c_sin_year_h = '正財';}
if (($my_day_h == '辛') && ($c_month_h == '甲')) {$c_sin_month_h = '正財';}
if (($my_day_h == '辛') && ($c_day_h == '甲')) {$c_sin_day_h = '正財';}
if (($my_day_h == '辛') && ($c_hour_h == '甲')) {$c_sin_hour_h = '正財';}
if (($my_day_h == '辛') && ($c_year_e == '寅')) {$c_sin_year_e = '正財';}
if (($my_day_h == '辛') && ($c_month_e == '寅')) {$c_sin_month_e = '正財';}
if (($my_day_h == '辛') && ($c_day_e == '寅')) {$c_sin_day_e = '正財';}
if (($my_day_h == '辛') && ($c_hour_e == '寅')) {$c_sin_hour_e = '正財';}

if (($my_day_h == '壬') && ($c_year_h == '丁')) {$c_sin_year_h = '正財';}
if (($my_day_h == '壬') && ($c_month_h == '丁')) {$c_sin_month_h = '正財';}
if (($my_day_h == '壬') && ($c_day_h == '丁')) {$c_sin_day_h = '正財';}
if (($my_day_h == '壬') && ($c_hour_h == '丁')) {$c_sin_hour_h = '正財';}
if (($my_day_h == '壬') && ($c_year_e == '午')) {$c_sin_year_e = '正財';}
if (($my_day_h == '壬') && ($c_month_e == '午')) {$c_sin_month_e = '正財';}
if (($my_day_h == '壬') && ($c_day_e == '午')) {$c_sin_day_e = '正財';}
if (($my_day_h == '壬') && ($c_hour_e == '午')) {$c_sin_hour_e = '正財';}

if (($my_day_h == '癸') && ($c_year_h == '丙')) {$c_sin_year_h = '正財';}
if (($my_day_h == '癸') && ($c_month_h == '丙')) {$c_sin_month_h = '正財';}
if (($my_day_h == '癸') && ($c_day_h == '丙')) {$c_sin_day_h = '正財';}
if (($my_day_h == '癸') && ($c_hour_h == '丙')) {$c_sin_hour_h = '正財';}
if (($my_day_h == '癸') && ($c_year_e == '巳')) {$c_sin_year_e = '正財';}
if (($my_day_h == '癸') && ($c_month_e == '巳')) {$c_sin_month_e = '正財';}
if (($my_day_h == '癸') && ($c_day_e == '巳')) {$c_sin_day_e = '正財';}
if (($my_day_h == '癸') && ($c_hour_e == '巳')) {$c_sin_hour_e = '正財';}

######################################################################


if (($my_day_h == '甲') && ($c_year_h == '庚')) {$c_sin_year_h = '偏官';}
if (($my_day_h == '甲') && ($c_month_h == '庚')) {$c_sin_month_h = '偏官';}
if (($my_day_h == '甲') && ($c_day_h == '庚')) {$c_sin_day_h = '偏官';}
if (($my_day_h == '甲') && ($c_hour_h == '庚')) {$c_sin_hour_h = '偏官';}
if (($my_day_h == '甲') && ($c_year_e == '申')) {$c_sin_year_e = '偏官';}
if (($my_day_h == '甲') && ($c_month_e == '申')) {$c_sin_month_e = '偏官';}
if (($my_day_h == '甲') && ($c_day_e == '申')) {$c_sin_day_e = '偏官';}
if (($my_day_h == '甲') && ($c_hour_e == '申')) {$c_sin_hour_e = '偏官';}

if (($my_day_h == '乙') && ($c_year_h == '辛')) {$c_sin_year_h = '偏官';}
if (($my_day_h == '乙') && ($c_month_h == '辛')) {$c_sin_month_h = '偏官';}
if (($my_day_h == '乙') && ($c_day_h == '辛')) {$c_sin_day_h = '偏官';}
if (($my_day_h == '乙') && ($c_hour_h == '辛')) {$c_sin_hour_h = '偏官';}
if (($my_day_h == '乙') && ($c_year_e == '酉')) {$c_sin_year_e = '偏官';}
if (($my_day_h == '乙') && ($c_month_e == '酉')) {$c_sin_month_e = '偏官';}
if (($my_day_h == '乙') && ($c_day_e == '酉')) {$c_sin_day_e = '偏官';}
if (($my_day_h == '乙') && ($c_hour_e == '酉')) {$c_sin_hour_e = '偏官';}

if (($my_day_h == '丙') && ($c_year_h == '壬')) {$c_sin_year_h = '偏官';}
if (($my_day_h == '丙') && ($c_month_h == '壬')) {$c_sin_month_h = '偏官';}
if (($my_day_h == '丙') && ($c_day_h == '壬')) {$c_sin_day_h = '偏官';}
if (($my_day_h == '丙') && ($c_hour_h == '壬')) {$c_sin_hour_h = '偏官';}
if (($my_day_h == '丙') && ($c_year_e == '亥')) {$c_sin_year_e = '偏官';}
if (($my_day_h == '丙') && ($c_month_e == '亥')) {$c_sin_month_e = '偏官';}
if (($my_day_h == '丙') && ($c_day_e == '亥')) {$c_sin_day_e = '偏官';}
if (($my_day_h == '丙') && ($c_hour_e == '亥')) {$c_sin_hour_e = '偏官';}

if (($my_day_h == '丁') && ($c_year_h == '癸')) {$c_sin_year_h = '偏官';}
if (($my_day_h == '丁') && ($c_month_h == '癸')) {$c_sin_month_h = '偏官';}
if (($my_day_h == '丁') && ($c_day_h == '癸')) {$c_sin_day_h = '偏官';}
if (($my_day_h == '丁') && ($c_hour_h == '癸')) {$c_sin_hour_h = '偏官';}
if (($my_day_h == '丁') && ($c_year_e == '子')) {$c_sin_year_e = '偏官';}
if (($my_day_h == '丁') && ($c_month_e == '子')) {$c_sin_month_e = '偏官';}
if (($my_day_h == '丁') && ($c_day_e == '子')) {$c_sin_day_e = '偏官';}
if (($my_day_h == '丁') && ($c_hour_e == '子')) {$c_sin_hour_e = '偏官';}


if (($my_day_h == '戊') && ($c_year_h == '甲')) {$c_sin_year_h = '偏官';}
if (($my_day_h == '戊') && ($c_month_h == '甲')) {$c_sin_month_h = '偏官';}
if (($my_day_h == '戊') && ($c_day_h == '甲')) {$c_sin_day_h = '偏官';}
if (($my_day_h == '戊') && ($c_hour_h == '甲')) {$c_sin_hour_h = '偏官';}
if (($my_day_h == '戊') && ($c_year_e == '寅')) {$c_sin_year_e = '偏官';}
if (($my_day_h == '戊') && ($c_month_e == '寅')) {$c_sin_month_e = '偏官';}
if (($my_day_h == '戊') && ($c_day_e == '寅')) {$c_sin_day_e = '偏官';}
if (($my_day_h == '戊') && ($c_hour_e == '寅')) {$c_sin_hour_e = '偏官';}

if (($my_day_h == '己') && ($c_year_h == '乙')) {$c_sin_year_h = '偏官';}
if (($my_day_h == '己') && ($c_month_h == '乙')) {$c_sin_month_h = '偏官';}
if (($my_day_h == '己') && ($c_day_h == '乙')) {$c_sin_day_h = '偏官';}
if (($my_day_h == '己') && ($c_hour_h == '乙')) {$c_sin_hour_h = '偏官';}
if (($my_day_h == '己') && ($c_year_e == '卯')) {$c_sin_year_e = '偏官';}
if (($my_day_h == '己') && ($c_month_e == '卯')) {$c_sin_month_e = '偏官';}
if (($my_day_h == '己') && ($c_day_e == '卯')) {$c_sin_day_e = '偏官';}
if (($my_day_h == '己') && ($c_hour_e == '卯')) {$c_sin_hour_e = '偏官';}

if (($my_day_h == '庚') && ($c_year_h == '丙')) {$c_sin_year_h = '偏官';}
if (($my_day_h == '庚') && ($c_month_h == '丙')) {$c_sin_month_h = '偏官';}
if (($my_day_h == '庚') && ($c_day_h == '丙')) {$c_sin_day_h = '偏官';}
if (($my_day_h == '庚') && ($c_hour_h == '丙')) {$c_sin_hour_h = '偏官';}
if (($my_day_h == '庚') && ($c_year_e == '巳')) {$c_sin_year_e = '偏官';}
if (($my_day_h == '庚') && ($c_month_e == '巳')) {$c_sin_month_e = '偏官';}
if (($my_day_h == '庚') && ($c_day_e == '巳')) {$c_sin_day_e = '偏官';}
if (($my_day_h == '庚') && ($c_hour_e == '巳')) {$c_sin_hour_e = '偏官';}

if (($my_day_h == '辛') && ($c_year_h == '丁')) {$c_sin_year_h = '偏官';}
if (($my_day_h == '辛') && ($c_month_h == '丁')) {$c_sin_month_h = '偏官';}
if (($my_day_h == '辛') && ($c_day_h == '丁')) {$c_sin_day_h = '偏官';}
if (($my_day_h == '辛') && ($c_hour_h == '丁')) {$c_sin_hour_h = '偏官';}
if (($my_day_h == '辛') && ($c_year_e == '午')) {$c_sin_year_e = '偏官';}
if (($my_day_h == '辛') && ($c_month_e == '午')) {$c_sin_month_e = '偏官';}
if (($my_day_h == '辛') && ($c_day_e == '午')) {$c_sin_day_e = '偏官';}
if (($my_day_h == '辛') && ($c_hour_e == '午')) {$c_sin_hour_e = '偏官';}

if (($my_day_h == '壬') && ($c_year_h == '戊')) {$c_sin_year_h = '偏官';}
if (($my_day_h == '壬') && ($c_month_h == '戊')) {$c_sin_month_h = '偏官';}
if (($my_day_h == '壬') && ($c_day_h == '戊')) {$c_sin_day_h = '偏官';}
if (($my_day_h == '壬') && ($c_hour_h == '戊')) {$c_sin_hour_h = '偏官';}
if (($my_day_h == '壬') && ($c_year_e == '辰')) {$c_sin_year_e = '偏官';}
if (($my_day_h == '壬') && ($c_month_e == '辰')) {$c_sin_month_e = '偏官';}
if (($my_day_h == '壬') && ($c_day_e == '辰')) {$c_sin_day_e = '偏官';}
if (($my_day_h == '壬') && ($c_hour_e == '辰')) {$c_sin_hour_e = '偏官';}
if (($my_day_h == '壬') && ($c_year_e == '戌')) {$c_sin_year_e = '偏官';}
if (($my_day_h == '壬') && ($c_month_e == '戌')) {$c_sin_month_e = '偏官';}
if (($my_day_h == '壬') && ($c_day_e == '戌')) {$c_sin_day_e = '偏官';}
if (($my_day_h == '壬') && ($c_hour_e == '戌')) {$c_sin_hour_e = '偏官';}


if (($my_day_h == '癸') && ($c_year_h == '己')) {$c_sin_year_h = '偏官';}
if (($my_day_h == '癸') && ($c_month_h == '己')) {$c_sin_month_h = '偏官';}
if (($my_day_h == '癸') && ($c_day_h == '己')) {$c_sin_day_h = '偏官';}
if (($my_day_h == '癸') && ($c_hour_h == '己')) {$c_sin_hour_h = '偏官';}
if (($my_day_h == '癸') && ($c_year_e == '丑')) {$c_sin_year_e = '偏官';}
if (($my_day_h == '癸') && ($c_month_e == '丑')) {$c_sin_month_e = '偏官';}
if (($my_day_h == '癸') && ($c_day_e == '丑')) {$c_sin_day_e = '偏官';}
if (($my_day_h == '癸') && ($c_hour_e == '丑')) {$c_sin_hour_e = '偏官';}
if (($my_day_h == '癸') && ($c_year_e == '未')) {$c_sin_year_e = '偏官';}
if (($my_day_h == '癸') && ($c_month_e == '未')) {$c_sin_month_e = '偏官';}
if (($my_day_h == '癸') && ($c_day_e == '未')) {$c_sin_day_e = '偏官';}
if (($my_day_h == '癸') && ($c_hour_e == '未')) {$c_sin_hour_e = '偏官';}

######################################################################



if (($my_day_h == '甲') && ($c_year_h == '辛')) {$c_sin_year_h = '正官';}
if (($my_day_h == '甲') && ($c_month_h == '辛')) {$c_sin_month_h = '正官';}
if (($my_day_h == '甲') && ($c_day_h == '辛')) {$c_sin_day_h = '正官';}
if (($my_day_h == '甲') && ($c_hour_h == '辛')) {$c_sin_hour_h = '正官';}
if (($my_day_h == '甲') && ($c_year_e == '酉')) {$c_sin_year_e = '正官';}
if (($my_day_h == '甲') && ($c_month_e == '酉')) {$c_sin_month_e = '正官';}
if (($my_day_h == '甲') && ($c_day_e == '酉')) {$c_sin_day_e = '正官';}
if (($my_day_h == '甲') && ($c_hour_e == '酉')) {$c_sin_hour_e = '正官';}

if (($my_day_h == '乙') && ($c_year_h == '庚')) {$c_sin_year_h = '正官';}
if (($my_day_h == '乙') && ($c_month_h == '庚')) {$c_sin_month_h = '正官';}
if (($my_day_h == '乙') && ($c_day_h == '庚')) {$c_sin_day_h = '正官';}
if (($my_day_h == '乙') && ($c_hour_h == '庚')) {$c_sin_hour_h = '正官';}
if (($my_day_h == '乙') && ($c_year_e == '申')) {$c_sin_year_e = '正官';}
if (($my_day_h == '乙') && ($c_month_e == '申')) {$c_sin_month_e = '正官';}
if (($my_day_h == '乙') && ($c_day_e == '申')) {$c_sin_day_e = '正官';}
if (($my_day_h == '乙') && ($c_hour_e == '申')) {$c_sin_hour_e = '正官';}

if (($my_day_h == '丙') && ($c_year_h == '癸')) {$c_sin_year_h = '正官';}
if (($my_day_h == '丙') && ($c_month_h == '癸')) {$c_sin_month_h = '正官';}
if (($my_day_h == '丙') && ($c_day_h == '癸')) {$c_sin_day_h = '正官';}
if (($my_day_h == '丙') && ($c_hour_h == '癸')) {$c_sin_hour_h = '正官';}
if (($my_day_h == '丙') && ($c_year_e == '子')) {$c_sin_year_e = '正官';}
if (($my_day_h == '丙') && ($c_month_e == '子')) {$c_sin_month_e = '正官';}
if (($my_day_h == '丙') && ($c_day_e == '子')) {$c_sin_day_e = '正官';}
if (($my_day_h == '丙') && ($c_hour_e == '子')) {$c_sin_hour_e = '正官';}

if (($my_day_h == '丁') && ($c_year_h == '壬')) {$c_sin_year_h = '正官';}
if (($my_day_h == '丁') && ($c_month_h == '壬')) {$c_sin_month_h = '正官';}
if (($my_day_h == '丁') && ($c_day_h == '壬')) {$c_sin_day_h = '正官';}
if (($my_day_h == '丁') && ($c_hour_h == '壬')) {$c_sin_hour_h = '正官';}
if (($my_day_h == '丁') && ($c_year_e == '亥')) {$c_sin_year_e = '正官';}
if (($my_day_h == '丁') && ($c_month_e == '亥')) {$c_sin_month_e = '正官';}
if (($my_day_h == '丁') && ($c_day_e == '亥')) {$c_sin_day_e = '正官';}
if (($my_day_h == '丁') && ($c_hour_e == '亥')) {$c_sin_hour_e = '正官';}


if (($my_day_h == '戊') && ($c_year_h == '乙')) {$c_sin_year_h = '正官';}
if (($my_day_h == '戊') && ($c_month_h == '乙')) {$c_sin_month_h = '正官';}
if (($my_day_h == '戊') && ($c_day_h == '乙')) {$c_sin_day_h = '正官';}
if (($my_day_h == '戊') && ($c_hour_h == '乙')) {$c_sin_hour_h = '正官';}
if (($my_day_h == '戊') && ($c_year_e == '卯')) {$c_sin_year_e = '正官';}
if (($my_day_h == '戊') && ($c_month_e == '卯')) {$c_sin_month_e = '正官';}
if (($my_day_h == '戊') && ($c_day_e == '卯')) {$c_sin_day_e = '正官';}
if (($my_day_h == '戊') && ($c_hour_e == '卯')) {$c_sin_hour_e = '正官';}

if (($my_day_h == '己') && ($c_year_h == '甲')) {$c_sin_year_h = '正官';}
if (($my_day_h == '己') && ($c_month_h == '甲')) {$c_sin_month_h = '正官';}
if (($my_day_h == '己') && ($c_day_h == '甲')) {$c_sin_day_h = '正官';}
if (($my_day_h == '己') && ($c_hour_h == '甲')) {$c_sin_hour_h = '正官';}
if (($my_day_h == '己') && ($c_year_e == '寅')) {$c_sin_year_e = '正官';}
if (($my_day_h == '己') && ($c_month_e == '寅')) {$c_sin_month_e = '正官';}
if (($my_day_h == '己') && ($c_day_e == '寅')) {$c_sin_day_e = '正官';}
if (($my_day_h == '己') && ($c_hour_e == '寅')) {$c_sin_hour_e = '正官';}

if (($my_day_h == '庚') && ($c_year_h == '丁')) {$c_sin_year_h = '正官';}
if (($my_day_h == '庚') && ($c_month_h == '丁')) {$c_sin_month_h = '正官';}
if (($my_day_h == '庚') && ($c_day_h == '丁')) {$c_sin_day_h = '正官';}
if (($my_day_h == '庚') && ($c_hour_h == '丁')) {$c_sin_hour_h = '正官';}
if (($my_day_h == '庚') && ($c_year_e == '午')) {$c_sin_year_e = '正官';}
if (($my_day_h == '庚') && ($c_month_e == '午')) {$c_sin_month_e = '正官';}
if (($my_day_h == '庚') && ($c_day_e == '午')) {$c_sin_day_e = '正官';}
if (($my_day_h == '庚') && ($c_hour_e == '午')) {$c_sin_hour_e = '正官';}

if (($my_day_h == '辛') && ($c_year_h == '丙')) {$c_sin_year_h = '正官';}
if (($my_day_h == '辛') && ($c_month_h == '丙')) {$c_sin_month_h = '正官';}
if (($my_day_h == '辛') && ($c_day_h == '丙')) {$c_sin_day_h = '正官';}
if (($my_day_h == '辛') && ($c_hour_h == '丙')) {$c_sin_hour_h = '正官';}
if (($my_day_h == '辛') && ($c_year_e == '巳')) {$c_sin_year_e = '正官';}
if (($my_day_h == '辛') && ($c_month_e == '巳')) {$c_sin_month_e = '正官';}
if (($my_day_h == '辛') && ($c_day_e == '巳')) {$c_sin_day_e = '正官';}
if (($my_day_h == '辛') && ($c_hour_e == '巳')) {$c_sin_hour_e = '正官';}

if (($my_day_h == '壬') && ($c_year_h == '己')) {$c_sin_year_h = '正官';}
if (($my_day_h == '壬') && ($c_month_h == '己')) {$c_sin_month_h = '正官';}
if (($my_day_h == '壬') && ($c_day_h == '己')) {$c_sin_day_h = '正官';}
if (($my_day_h == '壬') && ($c_hour_h == '己')) {$c_sin_hour_h = '正官';}
if (($my_day_h == '壬') && ($c_year_e == '丑')) {$c_sin_year_e = '正官';}
if (($my_day_h == '壬') && ($c_month_e == '丑')) {$c_sin_month_e = '正官';}
if (($my_day_h == '壬') && ($c_day_e == '丑')) {$c_sin_day_e = '正官';}
if (($my_day_h == '壬') && ($c_hour_e == '丑')) {$c_sin_hour_e = '正官';}
if (($my_day_h == '壬') && ($c_year_e == '未')) {$c_sin_year_e = '正官';}
if (($my_day_h == '壬') && ($c_month_e == '未')) {$c_sin_month_e = '正官';}
if (($my_day_h == '壬') && ($c_day_e == '未')) {$c_sin_day_e = '正官';}
if (($my_day_h == '壬') && ($c_hour_e == '未')) {$c_sin_hour_e = '正官';}


if (($my_day_h == '癸') && ($c_year_h == '戊')) {$c_sin_year_h = '正官';}
if (($my_day_h == '癸') && ($c_month_h == '戊')) {$c_sin_month_h = '正官';}
if (($my_day_h == '癸') && ($c_day_h == '戊')) {$c_sin_day_h = '正官';}
if (($my_day_h == '癸') && ($c_hour_h == '戊')) {$c_sin_hour_h = '正官';}
if (($my_day_h == '癸') && ($c_year_e == '辰')) {$c_sin_year_e = '正官';}
if (($my_day_h == '癸') && ($c_month_e == '辰')) {$c_sin_month_e = '正官';}
if (($my_day_h == '癸') && ($c_day_e == '辰')) {$c_sin_day_e = '正官';}
if (($my_day_h == '癸') && ($c_hour_e == '辰')) {$c_sin_hour_e = '正官';}
if (($my_day_h == '癸') && ($c_year_e == '戌')) {$c_sin_year_e = '正官';}
if (($my_day_h == '癸') && ($c_month_e == '戌')) {$c_sin_month_e = '正官';}
if (($my_day_h == '癸') && ($c_day_e == '戌')) {$c_sin_day_e = '正官';}
if (($my_day_h == '癸') && ($c_hour_e == '戌')) {$c_sin_hour_e = '正官';}

######################################################################




if (($my_day_h == '甲') && ($c_year_h == '壬')) {$c_sin_year_h = '偏印';}
if (($my_day_h == '甲') && ($c_month_h == '壬')) {$c_sin_month_h = '偏印';}
if (($my_day_h == '甲') && ($c_day_h == '壬')) {$c_sin_day_h = '偏印';}
if (($my_day_h == '甲') && ($c_hour_h == '壬')) {$c_sin_hour_h = '偏印';}
if (($my_day_h == '甲') && ($c_year_e == '亥')) {$c_sin_year_e = '偏印';}
if (($my_day_h == '甲') && ($c_month_e == '亥')) {$c_sin_month_e = '偏印';}
if (($my_day_h == '甲') && ($c_day_e == '亥')) {$c_sin_day_e = '偏印';}
if (($my_day_h == '甲') && ($c_hour_e == '亥')) {$c_sin_hour_e = '偏印';}

if (($my_day_h == '乙') && ($c_year_h == '癸')) {$c_sin_year_h = '偏印';}
if (($my_day_h == '乙') && ($c_month_h == '癸')) {$c_sin_month_h = '偏印';}
if (($my_day_h == '乙') && ($c_day_h == '癸')) {$c_sin_day_h = '偏印';}
if (($my_day_h == '乙') && ($c_hour_h == '癸')) {$c_sin_hour_h = '偏印';}
if (($my_day_h == '乙') && ($c_year_e == '子')) {$c_sin_year_e = '偏印';}
if (($my_day_h == '乙') && ($c_month_e == '子')) {$c_sin_month_e = '偏印';}
if (($my_day_h == '乙') && ($c_day_e == '子')) {$c_sin_day_e = '偏印';}
if (($my_day_h == '乙') && ($c_hour_e == '子')) {$c_sin_hour_e = '偏印';}

if (($my_day_h == '丙') && ($c_year_h == '甲')) {$c_sin_year_h = '偏印';}
if (($my_day_h == '丙') && ($c_month_h == '甲')) {$c_sin_month_h = '偏印';}
if (($my_day_h == '丙') && ($c_day_h == '甲')) {$c_sin_day_h = '偏印';}
if (($my_day_h == '丙') && ($c_hour_h == '甲')) {$c_sin_hour_h = '偏印';}
if (($my_day_h == '丙') && ($c_year_e == '寅')) {$c_sin_year_e = '偏印';}
if (($my_day_h == '丙') && ($c_month_e == '寅')) {$c_sin_month_e = '偏印';}
if (($my_day_h == '丙') && ($c_day_e == '寅')) {$c_sin_day_e = '偏印';}
if (($my_day_h == '丙') && ($c_hour_e == '寅')) {$c_sin_hour_e = '偏印';}

if (($my_day_h == '丁') && ($c_year_h == '乙')) {$c_sin_year_h = '偏印';}
if (($my_day_h == '丁') && ($c_month_h == '乙')) {$c_sin_month_h = '偏印';}
if (($my_day_h == '丁') && ($c_day_h == '乙')) {$c_sin_day_h = '偏印';}
if (($my_day_h == '丁') && ($c_hour_h == '乙')) {$c_sin_hour_h = '偏印';}
if (($my_day_h == '丁') && ($c_year_e == '卯')) {$c_sin_year_e = '偏印';}
if (($my_day_h == '丁') && ($c_month_e == '卯')) {$c_sin_month_e = '偏印';}
if (($my_day_h == '丁') && ($c_day_e == '卯')) {$c_sin_day_e = '偏印';}
if (($my_day_h == '丁') && ($c_hour_e == '卯')) {$c_sin_hour_e = '偏印';}


if (($my_day_h == '戊') && ($c_year_h == '丙')) {$c_sin_year_h = '偏印';}
if (($my_day_h == '戊') && ($c_month_h == '丙')) {$c_sin_month_h = '偏印';}
if (($my_day_h == '戊') && ($c_day_h == '丙')) {$c_sin_day_h = '偏印';}
if (($my_day_h == '戊') && ($c_hour_h == '丙')) {$c_sin_hour_h = '偏印';}
if (($my_day_h == '戊') && ($c_year_e == '巳')) {$c_sin_year_e = '偏印';}
if (($my_day_h == '戊') && ($c_month_e == '巳')) {$c_sin_month_e = '偏印';}
if (($my_day_h == '戊') && ($c_day_e == '巳')) {$c_sin_day_e = '偏印';}
if (($my_day_h == '戊') && ($c_hour_e == '巳')) {$c_sin_hour_e = '偏印';}

if (($my_day_h == '己') && ($c_year_h == '丁')) {$c_sin_year_h = '偏印';}
if (($my_day_h == '己') && ($c_month_h == '丁')) {$c_sin_month_h = '偏印';}
if (($my_day_h == '己') && ($c_day_h == '丁')) {$c_sin_day_h = '偏印';}
if (($my_day_h == '己') && ($c_hour_h == '丁')) {$c_sin_hour_h = '偏印';}
if (($my_day_h == '己') && ($c_year_e == '午')) {$c_sin_year_e = '偏印';}
if (($my_day_h == '己') && ($c_month_e == '午')) {$c_sin_month_e = '偏印';}
if (($my_day_h == '己') && ($c_day_e == '午')) {$c_sin_day_e = '偏印';}
if (($my_day_h == '己') && ($c_hour_e == '午')) {$c_sin_hour_e = '偏印';}

if (($my_day_h == '庚') && ($c_year_h == '戊')) {$c_sin_year_h = '偏印';}
if (($my_day_h == '庚') && ($c_month_h == '戊')) {$c_sin_month_h = '偏印';}
if (($my_day_h == '庚') && ($c_day_h == '戊')) {$c_sin_day_h = '偏印';}
if (($my_day_h == '庚') && ($c_hour_h == '戊')) {$c_sin_hour_h = '偏印';}
if (($my_day_h == '庚') && ($c_year_e == '辰')) {$c_sin_year_e = '偏印';}
if (($my_day_h == '庚') && ($c_month_e == '辰')) {$c_sin_month_e = '偏印';}
if (($my_day_h == '庚') && ($c_day_e == '辰')) {$c_sin_day_e = '偏印';}
if (($my_day_h == '庚') && ($c_hour_e == '辰')) {$c_sin_hour_e = '偏印';}
if (($my_day_h == '庚') && ($c_year_e == '戌')) {$c_sin_year_e = '偏印';}
if (($my_day_h == '庚') && ($c_month_e == '戌')) {$c_sin_month_e = '偏印';}
if (($my_day_h == '庚') && ($c_day_e == '戌')) {$c_sin_day_e = '偏印';}
if (($my_day_h == '庚') && ($c_hour_e == '戌')) {$c_sin_hour_e = '偏印';}

if (($my_day_h == '辛') && ($c_year_h == '己')) {$c_sin_year_h = '偏印';}
if (($my_day_h == '辛') && ($c_month_h == '己')) {$c_sin_month_h = '偏印';}
if (($my_day_h == '辛') && ($c_day_h == '己')) {$c_sin_day_h = '偏印';}
if (($my_day_h == '辛') && ($c_hour_h == '己')) {$c_sin_hour_h = '偏印';}
if (($my_day_h == '辛') && ($c_year_e == '丑')) {$c_sin_year_e = '偏印';}
if (($my_day_h == '辛') && ($c_month_e == '丑')) {$c_sin_month_e = '偏印';}
if (($my_day_h == '辛') && ($c_day_e == '丑')) {$c_sin_day_e = '偏印';}
if (($my_day_h == '辛') && ($c_hour_e == '丑')) {$c_sin_hour_e = '偏印';}
if (($my_day_h == '辛') && ($c_year_e == '未')) {$c_sin_year_e = '偏印';}
if (($my_day_h == '辛') && ($c_month_e == '未')) {$c_sin_month_e = '偏印';}
if (($my_day_h == '辛') && ($c_day_e == '未')) {$c_sin_day_e = '偏印';}
if (($my_day_h == '辛') && ($c_hour_e == '未')) {$c_sin_hour_e = '偏印';}

if (($my_day_h == '壬') && ($c_year_h == '庚')) {$c_sin_year_h = '偏印';}
if (($my_day_h == '壬') && ($c_month_h == '庚')) {$c_sin_month_h = '偏印';}
if (($my_day_h == '壬') && ($c_day_h == '庚')) {$c_sin_day_h = '偏印';}
if (($my_day_h == '壬') && ($c_hour_h == '庚')) {$c_sin_hour_h = '偏印';}
if (($my_day_h == '壬') && ($c_year_e == '申')) {$c_sin_year_e = '偏印';}
if (($my_day_h == '壬') && ($c_month_e == '申')) {$c_sin_month_e = '偏印';}
if (($my_day_h == '壬') && ($c_day_e == '申')) {$c_sin_day_e = '偏印';}
if (($my_day_h == '壬') && ($c_hour_e == '申')) {$c_sin_hour_e = '偏印';}


if (($my_day_h == '癸') && ($c_year_h == '辛')) {$c_sin_year_h = '偏印';}
if (($my_day_h == '癸') && ($c_month_h == '辛')) {$c_sin_month_h = '偏印';}
if (($my_day_h == '癸') && ($c_day_h == '辛')) {$c_sin_day_h = '偏印';}
if (($my_day_h == '癸') && ($c_hour_h == '辛')) {$c_sin_hour_h = '偏印';}
if (($my_day_h == '癸') && ($c_year_e == '酉')) {$c_sin_year_e = '偏印';}
if (($my_day_h == '癸') && ($c_month_e == '酉')) {$c_sin_month_e = '偏印';}
if (($my_day_h == '癸') && ($c_day_e == '酉')) {$c_sin_day_e = '偏印';}
if (($my_day_h == '癸') && ($c_hour_e == '酉')) {$c_sin_hour_e = '偏印';}

######################################################################



if (($my_day_h == '甲') && ($c_year_h == '癸')) {$c_sin_year_h = '正印';}
if (($my_day_h == '甲') && ($c_month_h == '癸')) {$c_sin_month_h = '正印';}
if (($my_day_h == '甲') && ($c_day_h == '癸')) {$c_sin_day_h = '正印';}
if (($my_day_h == '甲') && ($c_hour_h == '癸')) {$c_sin_hour_h = '正印';}
if (($my_day_h == '甲') && ($c_year_e == '子')) {$c_sin_year_e = '正印';}
if (($my_day_h == '甲') && ($c_month_e == '子')) {$c_sin_month_e = '正印';}
if (($my_day_h == '甲') && ($c_day_e == '子')) {$c_sin_day_e = '正印';}
if (($my_day_h == '甲') && ($c_hour_e == '子')) {$c_sin_hour_e = '正印';}

if (($my_day_h == '乙') && ($c_year_h == '壬')) {$c_sin_year_h = '正印';}
if (($my_day_h == '乙') && ($c_month_h == '壬')) {$c_sin_month_h = '正印';}
if (($my_day_h == '乙') && ($c_day_h == '壬')) {$c_sin_day_h = '正印';}
if (($my_day_h == '乙') && ($c_hour_h == '壬')) {$c_sin_hour_h = '正印';}
if (($my_day_h == '乙') && ($c_year_e == '亥')) {$c_sin_year_e = '正印';}
if (($my_day_h == '乙') && ($c_month_e == '亥')) {$c_sin_month_e = '正印';}
if (($my_day_h == '乙') && ($c_day_e == '亥')) {$c_sin_day_e = '正印';}
if (($my_day_h == '乙') && ($c_hour_e == '亥')) {$c_sin_hour_e = '正印';}

if (($my_day_h == '丙') && ($c_year_h == '乙')) {$c_sin_year_h = '正印';}
if (($my_day_h == '丙') && ($c_month_h == '乙')) {$c_sin_month_h = '正印';}
if (($my_day_h == '丙') && ($c_day_h == '乙')) {$c_sin_day_h = '正印';}
if (($my_day_h == '丙') && ($c_hour_h == '乙')) {$c_sin_hour_h = '正印';}
if (($my_day_h == '丙') && ($c_year_e == '卯')) {$c_sin_year_e = '正印';}
if (($my_day_h == '丙') && ($c_month_e == '卯')) {$c_sin_month_e = '正印';}
if (($my_day_h == '丙') && ($c_day_e == '卯')) {$c_sin_day_e = '正印';}
if (($my_day_h == '丙') && ($c_hour_e == '卯')) {$c_sin_hour_e = '正印';}

if (($my_day_h == '丁') && ($c_year_h == '甲')) {$c_sin_year_h = '正印';}
if (($my_day_h == '丁') && ($c_month_h == '甲')) {$c_sin_month_h = '正印';}
if (($my_day_h == '丁') && ($c_day_h == '甲')) {$c_sin_day_h = '正印';}
if (($my_day_h == '丁') && ($c_hour_h == '甲')) {$c_sin_hour_h = '正印';}
if (($my_day_h == '丁') && ($c_year_e == '寅')) {$c_sin_year_e = '正印';}
if (($my_day_h == '丁') && ($c_month_e == '寅')) {$c_sin_month_e = '正印';}
if (($my_day_h == '丁') && ($c_day_e == '寅')) {$c_sin_day_e = '正印';}
if (($my_day_h == '丁') && ($c_hour_e == '寅')) {$c_sin_hour_e = '正印';}


if (($my_day_h == '戊') && ($c_year_h == '丁')) {$c_sin_year_h = '正印';}
if (($my_day_h == '戊') && ($c_month_h == '丁')) {$c_sin_month_h = '正印';}
if (($my_day_h == '戊') && ($c_day_h == '丁')) {$c_sin_day_h = '正印';}
if (($my_day_h == '戊') && ($c_hour_h == '丁')) {$c_sin_hour_h = '正印';}
if (($my_day_h == '戊') && ($c_year_e == '午')) {$c_sin_year_e = '正印';}
if (($my_day_h == '戊') && ($c_month_e == '午')) {$c_sin_month_e = '正印';}
if (($my_day_h == '戊') && ($c_day_e == '午')) {$c_sin_day_e = '正印';}
if (($my_day_h == '戊') && ($c_hour_e == '午')) {$c_sin_hour_e = '正印';}

if (($my_day_h == '己') && ($c_year_h == '丙')) {$c_sin_year_h = '正印';}
if (($my_day_h == '己') && ($c_month_h == '丙')) {$c_sin_month_h = '正印';}
if (($my_day_h == '己') && ($c_day_h == '丙')) {$c_sin_day_h = '正印';}
if (($my_day_h == '己') && ($c_hour_h == '丙')) {$c_sin_hour_h = '正印';}
if (($my_day_h == '己') && ($c_year_e == '巳')) {$c_sin_year_e = '正印';}
if (($my_day_h == '己') && ($c_month_e == '巳')) {$c_sin_month_e = '正印';}
if (($my_day_h == '己') && ($c_day_e == '巳')) {$c_sin_day_e = '正印';}
if (($my_day_h == '己') && ($c_hour_e == '巳')) {$c_sin_hour_e = '正印';}

if (($my_day_h == '庚') && ($c_year_h == '己')) {$c_sin_year_h = '正印';}
if (($my_day_h == '庚') && ($c_month_h == '己')) {$c_sin_month_h = '正印';}
if (($my_day_h == '庚') && ($c_day_h == '己')) {$c_sin_day_h = '正印';}
if (($my_day_h == '庚') && ($c_hour_h == '己')) {$c_sin_hour_h = '正印';}
if (($my_day_h == '庚') && ($c_year_e == '丑')) {$c_sin_year_e = '正印';}
if (($my_day_h == '庚') && ($c_month_e == '丑')) {$c_sin_month_e = '正印';}
if (($my_day_h == '庚') && ($c_day_e == '丑')) {$c_sin_day_e = '正印';}
if (($my_day_h == '庚') && ($c_hour_e == '丑')) {$c_sin_hour_e = '正印';}
if (($my_day_h == '庚') && ($c_year_e == '未')) {$c_sin_year_e = '正印';}
if (($my_day_h == '庚') && ($c_month_e == '未')) {$c_sin_month_e = '正印';}
if (($my_day_h == '庚') && ($c_day_e == '未')) {$c_sin_day_e = '正印';}
if (($my_day_h == '庚') && ($c_hour_e == '未')) {$c_sin_hour_e = '正印';}

if (($my_day_h == '辛') && ($c_year_h == '戊')) {$c_sin_year_h = '正印';}
if (($my_day_h == '辛') && ($c_month_h == '戊')) {$c_sin_month_h = '正印';}
if (($my_day_h == '辛') && ($c_day_h == '戊')) {$c_sin_day_h = '正印';}
if (($my_day_h == '辛') && ($c_hour_h == '戊')) {$c_sin_hour_h = '正印';}
if (($my_day_h == '辛') && ($c_year_e == '辰')) {$c_sin_year_e = '正印';}
if (($my_day_h == '辛') && ($c_month_e == '辰')) {$c_sin_month_e = '正印';}
if (($my_day_h == '辛') && ($c_day_e == '辰')) {$c_sin_day_e = '正印';}
if (($my_day_h == '辛') && ($c_hour_e == '辰')) {$c_sin_hour_e = '正印';}
if (($my_day_h == '辛') && ($c_year_e == '戌')) {$c_sin_year_e = '正印';}
if (($my_day_h == '辛') && ($c_month_e == '戌')) {$c_sin_month_e = '正印';}
if (($my_day_h == '辛') && ($c_day_e == '戌')) {$c_sin_day_e = '正印';}
if (($my_day_h == '辛') && ($c_hour_e == '戌')) {$c_sin_hour_e = '正印';}

if (($my_day_h == '壬') && ($c_year_h == '辛')) {$c_sin_year_h = '正印';}
if (($my_day_h == '壬') && ($c_month_h == '辛')) {$c_sin_month_h = '正印';}
if (($my_day_h == '壬') && ($c_day_h == '辛')) {$c_sin_day_h = '正印';}
if (($my_day_h == '壬') && ($c_hour_h == '辛')) {$c_sin_hour_h = '正印';}
if (($my_day_h == '壬') && ($c_year_e == '酉')) {$c_sin_year_e = '正印';}
if (($my_day_h == '壬') && ($c_month_e == '酉')) {$c_sin_month_e = '正印';}
if (($my_day_h == '壬') && ($c_day_e == '酉')) {$c_sin_day_e = '正印';}
if (($my_day_h == '壬') && ($c_hour_e == '酉')) {$c_sin_hour_e = '正印';}


if (($my_day_h == '癸') && ($c_year_h == '庚')) {$c_sin_year_h = '正印';}
if (($my_day_h == '癸') && ($c_month_h == '庚')) {$c_sin_month_h = '正印';}
if (($my_day_h == '癸') && ($c_day_h == '庚')) {$c_sin_day_h = '正印';}
if (($my_day_h == '癸') && ($c_hour_h == '庚')) {$c_sin_hour_h = '正印';}
if (($my_day_h == '癸') && ($c_year_e == '申')) {$c_sin_year_e = '正印';}
if (($my_day_h == '癸') && ($c_month_e == '申')) {$c_sin_month_e = '正印';}
if (($my_day_h == '癸') && ($c_day_e == '申')) {$c_sin_day_e = '正印';}
if (($my_day_h == '癸') && ($c_hour_e == '申')) {$c_sin_hour_e = '正印';}

#########################################################################




?>		
<BR>
<table width=510 border=0 cellspacing=0 cellpadding=0 bgcolor=FFFFFF align=center>

 <tr><td align=center><font color=blue>현재의 괘상</font></td><td align=center><font color=blue>추첨일의 기운</font></td></tr>
  
  
  <tr>

    <td align=center>

           <table width=100 border=0 cellspacing=1 cellpadding=3 bgcolor=CCCCCC align=center>
               <tr bgcolor=f8f8f8><td align=center><?=$ju_title;?></td></tr>
               <tr><td align=center>
                      <table border=0 cellspacing=1 cellpadding=0 width=80>
                        <tr><td><table><tr><?=$g1;?></tr></table></td></tr>
                        <tr><td><table><tr><?=$g2;?></tr></table></td></tr>
			<tr><td><table><tr><?=$g3;?></tr></table></td></tr>
                        <tr><td height=6></td></tr>
                        <tr><td><table><tr><?=$g4;?></tr></table></td></tr>
                        <tr><td><table><tr><?=$g5;?></tr></table></td></tr>
                        <tr><td><table><tr><?=$g6;?></tr></table></td></tr>
                      </table>
                  </td>	
              </tr>
           </table>

   </td>	
   <td>

						<table width=370 border=0 cellspacing=1 cellpadding=3 align=center bgcolor=CCCCCC>
						
						<tr align=center> 
							<td bgcolor=C8C8C8 width=70>사주</td>
							<td bgcolor=F8F8F8 width=110>시주</td>
							<td bgcolor=F8F8F8 width=110>일주</td>
							<td bgcolor=F8F8F8 width=110>월주</td>
							<td bgcolor=F8F8F8 width=110>년주</td>
							
						</tr>

						<tr align=center> 
							<td bgcolor=F8F8F8>천간</td>
							
							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$c_hour_h_img;?></td><td bgcolor=dddddd><?=$c_oheng_hour_h;?></td></tr>
							    <tr align=center><td bgcolor=dddddd><?=$c_sin_hour_h;?></td></tr>
							  </table>
							</td>

							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$c_day_h_img;?></td><td bgcolor=dddddd><?=$c_oheng_day_h;?></td></tr>
							    <tr align=center><td bgcolor=dddddd><?=$c_sin_day_h;?></td></tr>
							  </table>
							</td>
							
							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$c_month_h_img;?></td><td bgcolor=dddddd><?=$c_oheng_month_h;?></td></tr>
							    <tr align=center><td bgcolor=dddddd><?=$c_sin_month_h;?></td></tr>
							  </table>
							</td>

							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$c_year_h_img;?></td><td bgcolor=dddddd><?=$c_oheng_year_h;?></td></tr>
							    <tr align=center><td bgcolor=dddddd><?=$c_sin_year_h;?></td></tr>
							  </table>
							</td>
							
						</tr>
						
						<tr align=center> 
							<td bgcolor=F8F8F8>지지</td>
							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$c_hour_e_img;?></td><td bgcolor=dddddd><?=$c_oheng_hour_e;?></td></tr>
							    <tr align=center><td bgcolor=dddddd><?=$c_sin_hour_e;?></td></tr>
							  </table>
							</td>

							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$c_day_e_img;?></td><td bgcolor=dddddd><?=$c_oheng_day_e;?></td></tr>
							    <tr align=center><td bgcolor=dddddd><?=$c_sin_day_e;?></td></tr>
							  </table>
							</td>
							
							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$c_month_e_img;?></td><td bgcolor=dddddd><?=$c_oheng_month_e;?></td></tr>
							    <tr align=center><td bgcolor=dddddd><?=$c_sin_month_e;?></td></tr>
							  </table>
							</td>

							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$c_year_e_img;?></td><td bgcolor=dddddd><?=$c_oheng_year_e;?></td></tr>
							    <tr align=center><td bgcolor=dddddd><?=$c_sin_year_e;?></td></tr>
							  </table>
							</td>
							
						</tr>
						
						
						</table>
   </td>
 </tr>
</table>

<br>


<form name="selectNum" method="post" > 



<table width='510'  border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
<tr bgcolor=f8f8f8>   
<td align=center><b>1</b></td>
<td align=center><b>2</b></td>
<td align=center><b>3</b></td>
<td align=center><b>4</b></td>
<td align=center><b>5</b></td>
<td align=center><b>6</b></td>
</tr>
<tr bgcolor=FFFFFF>   
<td align="center"><img src="/images/result_img/lotto_img/<?=$result_01;?>.gif"></td>
<td align="center"><img src="/images/result_img/lotto_img/<?=$result_02;?>.gif"></td>
<td align="center"><img src="/images/result_img/lotto_img/<?=$result_03;?>.gif"></td>
<td align="center"><img src="/images/result_img/lotto_img/<?=$result_04;?>.gif"></td>
<td align="center"><img src="/images/result_img/lotto_img/<?=$result_05;?>.gif"></td>
<td align="center"><img src="/images/result_img/lotto_img/<?=$result_06;?>.gif"></td>
</tr>
<tr bgcolor=f8f8f8>   
<td height="10" align="center"><input type="checkbox" name="select_num_array" value="<?=$result_01?>" onClick='javascript:return selectChange(0);' checked></td>
<td height="10" align="center"><input type="checkbox" name="select_num_array" value="<?=$result_02?>" onClick='javascript:return selectChange(1);' checked></td>
<td height="10" align="center"><input type="checkbox" name="select_num_array" value="<?=$result_03?>" onClick='javascript:return selectChange(2);'  checked></td>
<td height="10" align="center"><input type="checkbox" name="select_num_array" value="<?=$result_04?>" onClick='javascript:return selectChange(3);'  checked></td>
<td height="10" align="center"><input type="checkbox" name="select_num_array" value="<?=$result_05?>" onClick='javascript:return selectChange(4);'  checked></td>
<td height="10" align="center"><input type="checkbox" name="select_num_array" value="<?=$result_06?>" onClick='javascript:return selectChange(5);'  checked></td>
</tr>
<tr bgcolor=f8f8f8>   
<td align=center><b>7</b></td>
<td align=center><b>8</b></td>
<td align=center><b>9</b></td>
<td align=center><b>10</b></td>
<td align=center><b>11</b></td>
<td align=center><b>12</b></td>
</tr>
<tr bgcolor=FFFFFF>   
<td align="center"><img src="/images/result_img/lotto_img/<?=$result_07;?>.gif"></td>
<td align="center"><img src="/images/result_img/lotto_img/<?=$result_08;?>.gif"></td>
<td align="center"><img src="/images/result_img/lotto_img/<?=$result_09;?>.gif"></td>
<td align="center"><img src="/images/result_img/lotto_img/<?=$result_10;?>.gif"></td>
<td align="center"><img src="/images/result_img/lotto_img/<?=$result_11;?>.gif"></td>
<td align="center"><img src="/images/result_img/lotto_img/<?=$result_12;?>.gif"></td>
</tr>
<tr bgcolor=f8f8f8>   
<td  height="10" align="center"><input type="checkbox" name="select_num_array" value="<?=$result_07?>" onClick='javascript:return selectChange(6);' ></td>
<td  height="10" align="center"><input type="checkbox" name="select_num_array" value="<?=$result_08?>" onClick='javascript:return selectChange(7);' ></td>
<td  height="10" align="center"><input type="checkbox" name="select_num_array" value="<?=$result_09?>" onClick='javascript:return selectChange(8);' ></td>
<td  height="10" align="center"><input type="checkbox" name="select_num_array" value="<?=$result_10?>" onClick='javascript:return selectChange(9);' ></td>
<td  height="10" align="center"><input type="checkbox" name="select_num_array" value="<?=$result_11?>" onClick='javascript:return selectChange(10);' ></td>
<td  height="10" align="center"><input type="checkbox" name="select_num_array" value="<?=$result_12?>" onClick='javascript:return selectChange(11);' ></td>
</tr>
</table>

<table width='510'  border=0 cellspacing=0 cellpadding=5 bgcolor=FFFFFF align='center'>
<tr bgcolor=FFFFFF>   
<td align=center><input type=button value='           숫자 조합하기           ' onclick='javascript:goCombine();'></td></tr>
</table>

<br><br>

<input type="hidden" name="select_count">
<input type="hidden" name="select_num">

<input type="hidden" name="lotto_var" value="Y">
<input type="hidden" name="cate" value="<?=$cate?>">
<input type="hidden" name="sel" value="<?=$sel?>">
<input type="hidden" name="nextresult" value="1">
<input type="hidden" name="url" value="<?=$url?>">
<input type="hidden" name="urltemp" value="<?=$urltemp?>">

<input type="hidden" name="user_name" value="<?=$user_name?>">
<input type="hidden" name="your_user_name" value="<?=$your_user_name?>">
<input type="hidden" name="solunar" value="<?=$solunar?>">
<input type="hidden" name="my_solnuar" value="<?=$my_solnuar?>">
<input type="hidden" name="youn" value="<?=$youn?>">
<input type="hidden" name="sex" value="<?=$sex?>">
<input type="hidden" name="your_year" value="<?=$your_year?>">
<input type="hidden" name="your_month" value="<?=$your_month?>">
<input type="hidden" name="your_day" value="<?=$your_day?>">
<input type="hidden" name="your_hour" value="<?=$your_hour?>">
<input type="hidden" name="your_min" value="<?=$your_min?>">
<input type="hidden" name="your_youn" value="<?=$your_youn?>">
<input type="hidden" name="your_solunar" value="<?=$your_solunar?>">
<input type="hidden" name="request_year" value="<?=$request_year?>">
<input type="hidden" name="request_month" value="<?=$request_month?>">
<input type="hidden" name="request_day" value="<?=$request_day?>">
<input type="hidden" name="request_hour" value="<?=$request_hour?>">
<input type="hidden" name="request_min" value="<?=$request_min?>">
</form>