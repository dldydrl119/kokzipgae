 
<?

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
			
			if ($c_year_h == 'A') {$cc_year_h = $c_year_h; $c_year_h = '甲';$c_year_h_img = '<img src=mansei_img/21C_A.gif>';$c_oheng_year_h = '<font color=red><b>+</b></font> 목';}
			if ($c_year_h == 'B') {$cc_year_h = $c_year_h; $c_year_h = '乙';$c_year_h_img = '<img src=mansei_img/21C_B.gif>';$c_oheng_year_h = '<font color=blue><b>-</b></font> 목';}
			if ($c_year_h == 'C') {$cc_year_h = $c_year_h; $c_year_h = '丙';$c_year_h_img = '<img src=mansei_img/21C_C.gif>';$c_oheng_year_h = '<font color=red><b>+</b></font> 화';}
			if ($c_year_h == 'D') {$cc_year_h = $c_year_h; $c_year_h = '丁';$c_year_h_img = '<img src=mansei_img/21C_D.gif>';$c_oheng_year_h = '<font color=blue><b>-</b></font> 화';}
			if ($c_year_h == 'E') {$cc_year_h = $c_year_h; $c_year_h = '戊';$c_year_h_img = '<img src=mansei_img/21C_E.gif>';$c_oheng_year_h = '<font color=red><b>+</b></font> 토';}
			if ($c_year_h == 'F') {$cc_year_h = $c_year_h; $c_year_h = '己';$c_year_h_img = '<img src=mansei_img/21C_F.gif>';$c_oheng_year_h = '<font color=blue><b>-</b></font> 토';}
			if ($c_year_h == 'G') {$cc_year_h = $c_year_h; $c_year_h = '庚';$c_year_h_img = '<img src=mansei_img/21C_G.gif>';$c_oheng_year_h = '<font color=red><b>+</b></font> 금';}
			if ($c_year_h == 'H') {$cc_year_h = $c_year_h; $c_year_h = '辛';$c_year_h_img = '<img src=mansei_img/21C_H.gif>';$c_oheng_year_h = '<font color=blue><b>-</b></font> 금';}
			if ($c_year_h == 'I') {$cc_year_h = $c_year_h; $c_year_h = '壬';$c_year_h_img = '<img src=mansei_img/21C_I.gif>';$c_oheng_year_h = '<font color=red><b>+</b></font> 수';}
			if ($c_year_h == 'J') {$cc_year_h = $c_year_h; $c_year_h = '癸';$c_year_h_img = '<img src=mansei_img/21C_J.gif>';$c_oheng_year_h = '<font color=blue><b>-</b></font> 수';}
			
			if ($c_month_h == 'A') {$cc_month_h = $c_month_h; $c_month_h = '甲';$c_month_h_img = '<img src=mansei_img/21C_A.gif>';$c_oheng_month_h = '<font color=red><b>+</b></font> 목';}
			if ($c_month_h == 'B') {$cc_month_h = $c_month_h; $c_month_h = '乙';$c_month_h_img = '<img src=mansei_img/21C_B.gif>';$c_oheng_month_h = '<font color=blue><b>-</b></font> 목';}
			if ($c_month_h == 'C') {$cc_month_h = $c_month_h; $c_month_h = '丙';$c_month_h_img = '<img src=mansei_img/21C_C.gif>';$c_oheng_month_h = '<font color=red><b>+</b></font> 화';}
			if ($c_month_h == 'D') {$cc_month_h = $c_month_h; $c_month_h = '丁';$c_month_h_img = '<img src=mansei_img/21C_D.gif>';$c_oheng_month_h = '<font color=blue><b>-</b></font> 화';}
			if ($c_month_h == 'E') {$cc_month_h = $c_month_h; $c_month_h = '戊';$c_month_h_img = '<img src=mansei_img/21C_E.gif>';$c_oheng_month_h = '<font color=red><b>+</b></font> 토';}
			if ($c_month_h == 'F') {$cc_month_h = $c_month_h; $c_month_h = '己';$c_month_h_img = '<img src=mansei_img/21C_F.gif>';$c_oheng_month_h = '<font color=blue><b>-</b></font> 토';}
			if ($c_month_h == 'G') {$cc_month_h = $c_month_h; $c_month_h = '庚';$c_month_h_img = '<img src=mansei_img/21C_G.gif>';$c_oheng_month_h = '<font color=red><b>+</b></font> 금';}
			if ($c_month_h == 'H') {$cc_month_h = $c_month_h; $c_month_h = '辛';$c_month_h_img = '<img src=mansei_img/21C_H.gif>';$c_oheng_month_h = '<font color=blue><b>-</b></font> 금';}
			if ($c_month_h == 'I') {$cc_month_h = $c_month_h; $c_month_h = '壬';$c_month_h_img = '<img src=mansei_img/21C_I.gif>';$c_oheng_month_h = '<font color=red><b>+</b></font> 수';}
			if ($c_month_h == 'J') {$cc_month_h = $c_month_h; $c_month_h = '癸';$c_month_h_img = '<img src=mansei_img/21C_J.gif>';$c_oheng_month_h = '<font color=blue><b>-</b></font> 수';}
                        
########자시를 기준으로 일간지가 다음날로 바뀜######################################
			$member_hour_min = $chour.$cmin;
			
			if ($member_hour_min < '0131'){$c_hour_check = '子'; }
			if ($member_hour_min >= '2331'){$c_hour_check = '子'; }
			



			if (($c_day_h == 'A') && ($c_hour_check == '')) {$cc_day_h = $c_day_h; $c_day_h = '甲';$c_day_h_img = '<img src=mansei_img/21C_A.gif>';$c_oheng_day_h = '<font color=red><b>+</b></font> 목';}
			if (($c_day_h == 'B') && ($c_hour_check == ''))  {$cc_day_h = $c_day_h; $c_day_h = '乙';$c_day_h_img = '<img src=mansei_img/21C_B.gif>';$c_oheng_day_h = '<font color=blue><b>-</b></font> 목';}
			if (($c_day_h == 'C') && ($c_hour_check == ''))  {$cc_day_h = $c_day_h; $c_day_h = '丙';$c_day_h_img = '<img src=mansei_img/21C_C.gif>';$c_oheng_day_h = '<font color=red><b>+</b></font> 화';}
			if (($c_day_h == 'D') && ($c_hour_check == ''))  {$cc_day_h = $c_day_h; $c_day_h = '丁';$c_day_h_img = '<img src=mansei_img/21C_D.gif>';$c_oheng_day_h = '<font color=blue><b>-</b></font> 화';}
			if (($c_day_h == 'E') && ($c_hour_check == ''))  {$cc_day_h = $c_day_h; $c_day_h = '戊';$c_day_h_img = '<img src=mansei_img/21C_E.gif>';$c_oheng_day_h = '<font color=red><b>+</b></font> 토';}
			if (($c_day_h == 'F') && ($c_hour_check == ''))  {$cc_day_h = $c_day_h; $c_day_h = '己';$c_day_h_img = '<img src=mansei_img/21C_F.gif>';$c_oheng_day_h = '<font color=blue><b>-</b></font> 토';}
			if (($c_day_h == 'G') && ($c_hour_check == ''))  {$cc_day_h = $c_day_h; $c_day_h = '庚';$c_day_h_img = '<img src=mansei_img/21C_G.gif>';$c_oheng_day_h = '<font color=red><b>+</b></font> 금';}
			if (($c_day_h == 'H') && ($c_hour_check == ''))  {$cc_day_h = $c_day_h; $c_day_h = '辛';$c_day_h_img = '<img src=mansei_img/21C_H.gif>';$c_oheng_day_h = '<font color=blue><b>-</b></font> 금';}
			if (($c_day_h == 'I') && ($c_hour_check == ''))  {$cc_day_h = $c_day_h; $c_day_h = '壬';$c_day_h_img = '<img src=mansei_img/21C_I.gif>';$c_oheng_day_h = '<font color=red><b>+</b></font> 수';}
			if (($c_day_h == 'J') && ($c_hour_check == ''))  {$cc_day_h = $c_day_h; $c_day_h = '癸';$c_day_h_img = '<img src=mansei_img/21C_J.gif>';$c_oheng_day_h = '<font color=blue><b>-</b></font> 수';}


			if (($c_day_h == 'A') && ($c_hour_check == '子')) {$cc_day_h = 'B'; $c_day_h = '乙';$c_day_h_img = '<img src=mansei_img/21C_B.gif>';$c_oheng_day_h = '<font color=blue><b>-</b></font> 목';}
			if (($c_day_h == 'B') && ($c_hour_check == '子'))  {$cc_day_h = 'C';$c_day_h = '丙';$c_day_h_img = '<img src=mansei_img/21C_C.gif>';$c_oheng_day_h = '<font color=red><b>+</b></font> 화';}
			if (($c_day_h == 'C') && ($c_hour_check == '子'))  {$cc_day_h = 'D';$c_day_h = '丁';$c_day_h_img = '<img src=mansei_img/21C_D.gif>';$c_oheng_day_h = '<font color=blue><b>-</b></font> 화';}
			if (($c_day_h == 'D') && ($c_hour_check == '子'))  {$cc_day_h = 'E';$c_day_h = '戊';$c_day_h_img = '<img src=mansei_img/21C_E.gif>';$c_oheng_day_h = '<font color=red><b>+</b></font> 토';}
			if (($c_day_h == 'E') && ($c_hour_check == '子'))  {$cc_day_h = 'F';$c_day_h = '己';$c_day_h_img = '<img src=mansei_img/21C_F.gif>';$c_oheng_day_h = '<font color=blue><b>-</b></font> 토';}
			if (($c_day_h == 'F') && ($c_hour_check == '子'))  {$cc_day_h = 'G';$c_day_h = '庚';$c_day_h_img = '<img src=mansei_img/21C_G.gif>';$c_oheng_day_h = '<font color=red><b>+</b></font> 금';}
			if (($c_day_h == 'G') && ($c_hour_check == '子'))  {$cc_day_h = 'H';$c_day_h = '辛';$c_day_h_img = '<img src=mansei_img/21C_H.gif>';$c_oheng_day_h = '<font color=blue><b>-</b></font> 금';}
			if (($c_day_h == 'H') && ($c_hour_check == '子'))  {$cc_day_h = 'I';$c_day_h = '壬';$c_day_h_img = '<img src=mansei_img/21C_I.gif>';$c_oheng_day_h = '<font color=red><b>+</b></font> 수';}
			if (($c_day_h == 'I') && ($c_hour_check == '子'))  {$cc_day_h = 'J';$c_day_h = '癸';$c_day_h_img = '<img src=mansei_img/21C_J.gif>';$c_oheng_day_h = '<font color=blue><b>-</b></font> 수';}
			if (($c_day_h == 'J') && ($c_hour_check == '子'))  {$cc_day_h = 'A';$c_day_h = '甲';$c_day_h_img = '<img src=mansei_img/21C_A.gif>';$c_oheng_day_h = '<font color=red><b>+</b></font> 목';}



############################################################################################

			if ($c_year_e == '01') {$cc_year_e = $c_year_e;$c_year_e = '寅';$c_year_e_img = '<img src=mansei_img/21C_01.gif>';$c_oheng_year_e = '<font color=red><b>+</b></font> 목';}
			if ($c_year_e == '02') {$cc_year_e = $c_year_e;$c_year_e = '卯';$c_year_e_img = '<img src=mansei_img/21C_02.gif>';$c_oheng_year_e = '<font color=blue><b>-</b></font> 목';}
			if ($c_year_e == '03') {$cc_year_e = $c_year_e;$c_year_e = '辰';$c_year_e_img = '<img src=mansei_img/21C_03.gif>';$c_oheng_year_e = '<font color=red><b>+</b></font> 토';}
			if ($c_year_e == '04') {$cc_year_e = $c_year_e;$c_year_e = '巳';$c_year_e_img = '<img src=mansei_img/21C_04.gif>';$c_oheng_year_e = '<font color=red><b>+</b></font> 화';}
			if ($c_year_e == '05') {$cc_year_e = $c_year_e;$c_year_e = '午';$c_year_e_img = '<img src=mansei_img/21C_05.gif>';$c_oheng_year_e = '<font color=blue><b>-</b></font> 화';}
			if ($c_year_e == '06') {$cc_year_e = $c_year_e;$c_year_e = '未';$c_year_e_img = '<img src=mansei_img/21C_06.gif>';$c_oheng_year_e = '<font color=blue><b>-</b></font> 토';}
			if ($c_year_e == '07') {$cc_year_e = $c_year_e;$c_year_e = '申';$c_year_e_img = '<img src=mansei_img/21C_07.gif>';$c_oheng_year_e = '<font color=red><b>+</b></font> 금';}
			if ($c_year_e == '08') {$cc_year_e = $c_year_e;$c_year_e = '酉';$c_year_e_img = '<img src=mansei_img/21C_08.gif>';$c_oheng_year_e = '<font color=blue><b>-</b></font> 금';}
			if ($c_year_e == '09') {$cc_year_e = $c_year_e;$c_year_e = '戌';$c_year_e_img = '<img src=mansei_img/21C_09.gif>';$c_oheng_year_e = '<font color=red><b>+</b></font> 토';}
			if ($c_year_e == '10') {$cc_year_e = $c_year_e;$c_year_e = '亥';$c_year_e_img = '<img src=mansei_img/21C_10.gif>';$c_oheng_year_e = '<font color=red><b>+</b></font> 수';}
			if ($c_year_e == '11') {$cc_year_e = $c_year_e;$c_year_e = '子';$c_year_e_img = '<img src=mansei_img/21C_11.gif>';$c_oheng_year_e = '<font color=blue><b>-</b></font> 수';}
			if ($c_year_e == '12') {$cc_year_e = $c_year_e;$c_year_e = '丑';$c_year_e_img = '<img src=mansei_img/21C_12.gif>';$c_oheng_year_e = '<font color=blue><b>-</b></font> 토';}

			if ($c_month_e == '01') {$cc_month_e = $c_month_e;$c_month_e = '寅';$c_month_e_img = '<img src=mansei_img/21C_01.gif>';$c_oheng_month_e = '<font color=red><b>+</b></font> 목';}
			if ($c_month_e == '02') {$cc_month_e = $c_month_e;$c_month_e = '卯';$c_month_e_img = '<img src=mansei_img/21C_02.gif>';$c_oheng_month_e = '<font color=blue><b>-</b></font> 목';}
			if ($c_month_e == '03') {$cc_month_e = $c_month_e;$c_month_e = '辰';$c_month_e_img = '<img src=mansei_img/21C_03.gif>';$c_oheng_month_e = '<font color=red><b>+</b></font> 토';}
			if ($c_month_e == '04') {$cc_month_e = $c_month_e;$c_month_e = '巳';$c_month_e_img = '<img src=mansei_img/21C_04.gif>';$c_oheng_month_e = '<font color=red><b>+</b></font> 화';}
			if ($c_month_e == '05') {$cc_month_e = $c_month_e;$c_month_e = '午';$c_month_e_img = '<img src=mansei_img/21C_05.gif>';$c_oheng_month_e = '<font color=blue><b>-</b></font> 화';}
			if ($c_month_e == '06') {$cc_month_e = $c_month_e;$c_month_e = '未';$c_month_e_img = '<img src=mansei_img/21C_06.gif>';$c_oheng_month_e = '<font color=blue><b>-</b></font> 토';}
			if ($c_month_e == '07') {$cc_month_e = $c_month_e;$c_month_e = '申';$c_month_e_img = '<img src=mansei_img/21C_07.gif>';$c_oheng_month_e = '<font color=red><b>+</b></font> 금';}
			if ($c_month_e == '08') {$cc_month_e = $c_month_e;$c_month_e = '酉';$c_month_e_img = '<img src=mansei_img/21C_08.gif>';$c_oheng_month_e = '<font color=blue><b>-</b></font> 금';}
			if ($c_month_e == '09') {$cc_month_e = $c_month_e;$c_month_e = '戌';$c_month_e_img = '<img src=mansei_img/21C_09.gif>';$c_oheng_month_e = '<font color=red><b>+</b></font> 토';}
			if ($c_month_e == '10') {$cc_month_e = $c_month_e;$c_month_e = '亥';$c_month_e_img = '<img src=mansei_img/21C_10.gif>';$c_oheng_month_e = '<font color=red><b>+</b></font> 수';}
			if ($c_month_e == '11') {$cc_month_e = $c_month_e;$c_month_e = '子';$c_month_e_img = '<img src=mansei_img/21C_11.gif>';$c_oheng_month_e = '<font color=blue><b>-</b></font> 수';}
			if ($c_month_e == '12') {$cc_month_e = $c_month_e;$c_month_e = '丑';$c_month_e_img = '<img src=mansei_img/21C_12.gif>';$c_oheng_month_e = '<font color=blue><b>-</b></font> 토';}

########자시를 기준으로 일간지가 다음날로 바뀜######################################

			if (($c_day_e == '01') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '寅';$c_day_e_img = '<img src=mansei_img/21C_01.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 목';}
			if (($c_day_e == '02') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '卯';$c_day_e_img = '<img src=mansei_img/21C_02.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 목';}
			if (($c_day_e == '03') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '辰';$c_day_e_img = '<img src=mansei_img/21C_03.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 토';}
			if (($c_day_e == '04') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '巳';$c_day_e_img = '<img src=mansei_img/21C_04.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 화';}
			if (($c_day_e == '05') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '午';$c_day_e_img = '<img src=mansei_img/21C_05.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 화';}
			if (($c_day_e == '06') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '未';$c_day_e_img = '<img src=mansei_img/21C_06.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 토';}
			if (($c_day_e == '07') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '申';$c_day_e_img = '<img src=mansei_img/21C_07.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 금';}
			if (($c_day_e == '08') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '酉';$c_day_e_img = '<img src=mansei_img/21C_08.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 금';}
			if (($c_day_e == '09') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '戌';$c_day_e_img = '<img src=mansei_img/21C_09.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 토';}
			if (($c_day_e == '10') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '亥';$c_day_e_img = '<img src=mansei_img/21C_10.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 수';}
			if (($c_day_e == '11') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '子';$c_day_e_img = '<img src=mansei_img/21C_11.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 수';}
			if (($c_day_e == '12') && ($c_hour_check == ''))  {$cc_day_e = $c_day_e;$c_day_e = '丑';$c_day_e_img = '<img src=mansei_img/21C_12.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 토';}
			
			if (($c_day_e == '01') && ($c_hour_check == '子'))  {$cc_day_e = '02';$c_day_e = '卯';$c_day_e_img = '<img src=mansei_img/21C_02.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 목';}
			if (($c_day_e == '02') && ($c_hour_check == '子'))  {$cc_day_e = '03';$c_day_e = '辰';$c_day_e_img = '<img src=mansei_img/21C_03.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 토';}
			if (($c_day_e == '03') && ($c_hour_check == '子'))  {$cc_day_e = '04';$c_day_e = '巳';$c_day_e_img = '<img src=mansei_img/21C_04.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 화';}
			if (($c_day_e == '04') && ($c_hour_check == '子'))  {$cc_day_e = '05';$c_day_e = '午';$c_day_e_img = '<img src=mansei_img/21C_05.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 화';}
			if (($c_day_e == '05') && ($c_hour_check == '子'))  {$cc_day_e = '06';$c_day_e = '未';$c_day_e_img = '<img src=mansei_img/21C_06.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 토';}
			if (($c_day_e == '06') && ($c_hour_check == '子'))  {$cc_day_e = '07';$c_day_e = '申';$c_day_e_img = '<img src=mansei_img/21C_07.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 금';}
			if (($c_day_e == '07') && ($c_hour_check == '子'))  {$cc_day_e = '08';$c_day_e = '酉';$c_day_e_img = '<img src=mansei_img/21C_08.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 금';}
			if (($c_day_e == '08') && ($c_hour_check == '子'))  {$cc_day_e = '09';$c_day_e = '戌';$c_day_e_img = '<img src=mansei_img/21C_09.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 토';}
			if (($c_day_e == '09') && ($c_hour_check == '子'))  {$cc_day_e = '10';$c_day_e = '亥';$c_day_e_img = '<img src=mansei_img/21C_10.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 수';}
			if (($c_day_e == '10') && ($c_hour_check == '子'))  {$cc_day_e = '11';$c_day_e = '子';$c_day_e_img = '<img src=mansei_img/21C_11.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 수';}
			if (($c_day_e == '11') && ($c_hour_check == '子'))  {$cc_day_e = '12';$c_day_e = '丑';$c_day_e_img = '<img src=mansei_img/21C_12.gif>';$c_oheng_day_e = '<font color=blue><b>-</b></font> 토';}
			if (($c_day_e == '12') && ($c_hour_check == '子'))  {$cc_day_e = '01';$c_day_e = '寅';$c_day_e_img = '<img src=mansei_img/21C_01.gif>';$c_oheng_day_e = '<font color=red><b>+</b></font> 목';}


#############################################################################################
			
			
			$member_hour_min = $chour.$cmin;
			
			if ($member_hour_min < '0131'){$c_hour_e = '子';$cc_hour_e = '11';$c_hour_e_img = '<img src=mansei_img/21C_11.gif>'; $s = '0';$c_oheng_hour_e = '<font color=blue><b>-</b></font> 수';}
			if ($member_hour_min >= '2331'){$c_hour_e = '子';$cc_hour_e = '11';$c_hour_e_img = '<img src=mansei_img/21C_11.gif>'; $s = '0';$c_oheng_hour_e = '<font color=blue><b>-</b></font> 수';}

			if (($member_hour_min >='0131') && ($member_hour_min < '0331')) {$cc_hour_e = '12';$c_hour_e = '丑';$c_hour_e_img = '<img src=mansei_img/21C_12.gif>'; $s = '1';$c_oheng_hour_e = '<font color=blue><b>-</b></font> 토';}
                        if (($member_hour_min >='0331') && ($member_hour_min < '0531')) {$cc_hour_e = '01';$c_hour_e = '寅';$c_hour_e_img = '<img src=mansei_img/21C_01.gif>'; $s = '2';$c_oheng_hour_e = '<font color=red><b>+</b></font> 목';}
                        if (($member_hour_min >='0531') && ($member_hour_min < '0731')) {$cc_hour_e = '02';$c_hour_e = '卯';$c_hour_e_img = '<img src=mansei_img/21C_02.gif>'; $s = '3';$c_oheng_hour_e = '<font color=blue><b>-</b></font> 목';}
                        if (($member_hour_min >='0731') && ($member_hour_min < '0931')) {$cc_hour_e = '03';$c_hour_e = '辰';$c_hour_e_img = '<img src=mansei_img/21C_03.gif>'; $s = '4';$c_oheng_hour_e = '<font color=red><b>+</b></font> 토';}
                        if (($member_hour_min >='0931') && ($member_hour_min < '1131')) {$cc_hour_e = '04';$c_hour_e = '巳';$c_hour_e_img = '<img src=mansei_img/21C_04.gif>'; $s = '5';$c_oheng_hour_e = '<font color=red><b>+</b></font> 화';}
                        if (($member_hour_min >='1131') && ($member_hour_min < '1331')) {$cc_hour_e = '05';$c_hour_e = '午';$c_hour_e_img = '<img src=mansei_img/21C_05.gif>'; $s = '6';$c_oheng_hour_e = '<font color=blue><b>-</b></font> 화';}
                        if (($member_hour_min >='1331') && ($member_hour_min < '1531')) {$cc_hour_e = '06';$c_hour_e = '未';$c_hour_e_img = '<img src=mansei_img/21C_06.gif>'; $s = '7';$c_oheng_hour_e = '<font color=blue><b>-</b></font> 토';}
                        if (($member_hour_min >='1531') && ($member_hour_min < '1731')) {$cc_hour_e = '07';$c_hour_e = '申';$c_hour_e_img = '<img src=mansei_img/21C_07.gif>'; $s = '8';$c_oheng_hour_e = '<font color=red><b>+</b></font> 금';}
                        if (($member_hour_min >='1731') && ($member_hour_min < '1931')) {$cc_hour_e = '08';$c_hour_e = '酉';$c_hour_e_img = '<img src=mansei_img/21C_08.gif>'; $s = '9';$c_oheng_hour_e = '<font color=blue><b>-</b></font> 금';}
                        if (($member_hour_min >='1931') && ($member_hour_min < '2131')) {$cc_hour_e = '09';$c_hour_e = '戌';$c_hour_e_img = '<img src=mansei_img/21C_09.gif>'; $s = '10';$c_oheng_hour_e = '<font color=red><b>+</b></font> 토';}
                        if (($member_hour_min >='2131') && ($member_hour_min < '2331')) {$cc_hour_e = '10';$c_hour_e = '亥';$c_hour_e_img = '<img src=mansei_img/21C_10.gif>'; $s = '11';$c_oheng_hour_e = '<font color=red><b>+</b></font> 수';}








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


                                      if ($c_hour_h == '甲') {$cc_hour_h = 'A';$c_hour_h_img = '<img src=mansei_img/21C_A.gif>'; $c_oheng_hour_h = '<font color=red><b>+</b></font> 목';}
                                      if ($c_hour_h == '乙') {$cc_hour_h = 'B';$c_hour_h_img = '<img src=mansei_img21C_/B.gif>'; $c_oheng_hour_h = '<font color=blue><b>-</b></font> 목';}
                                      if ($c_hour_h == '丙') {$cc_hour_h = 'C';$c_hour_h_img = '<img src=mansei_img/21C_C.gif>'; $c_oheng_hour_h = '<font color=red><b>+</b></font> 화';}
                                      if ($c_hour_h == '丁') {$cc_hour_h = 'D';$c_hour_h_img = '<img src=mansei_img/21C_D.gif>'; $c_oheng_hour_h = '<font color=blue><b>-</b></font> 화';}
                                      if ($c_hour_h == '戊') {$cc_hour_h = 'E';$c_hour_h_img = '<img src=mansei_img/21C_E.gif>'; $c_oheng_hour_h = '<font color=red><b>+</b></font> 토';}
                                      if ($c_hour_h == '己') {$cc_hour_h = 'F';$c_hour_h_img = '<img src=mansei_img/21C_F.gif>'; $c_oheng_hour_h = '<font color=blue><b>-</b></font> 토';}
                                      if ($c_hour_h == '庚') {$cc_hour_h = 'G';$c_hour_h_img = '<img src=mansei_img/21C_G.gif>'; $c_oheng_hour_h = '<font color=red><b>+</b></font> 금';}
                                      if ($c_hour_h == '辛') {$cc_hour_h = 'H';$c_hour_h_img = '<img src=mansei_img/21C_H.gif>'; $c_oheng_hour_h = '<font color=blue><b>-</b></font> 금';}
                                      if ($c_hour_h == '壬') {$cc_hour_h = 'I';$c_hour_h_img = '<img src=mansei_img/21C_I.gif>'; $c_oheng_hour_h = '<font color=red><b>+</b></font> 수';}
                                      if ($c_hour_h == '癸') {$cc_hour_h = 'J';$c_hour_h_img = '<img src=mansei_img/21C_J.gif>'; $c_oheng_hour_h = '<font color=blue><b>-</b></font> 수';}







#################################### 4기둥을 세움 끝 ####################################################################




?>