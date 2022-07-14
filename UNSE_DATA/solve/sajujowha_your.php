
<?

####################################################################   
####################################################################  사주조화 계산
#################################### 4기둥을 세운다 ####################################################################

			$your_ymd_jeolip = $your_solar_year.$your_solar_month.$your_solar_day;

			$result = mysql_query("SELECT * FROM mansedata WHERE no = '$your_ymd_jeolip'");                        
			$row = mysql_fetch_array($result);
			$your_number = $row[number];
			$your_day_h = $row[day_h];
			$your_day_e = $row[day_e];
			$your_jeolip = $row[jeolip];
			
	                
			if($your_jeolip == ""){$your_jeolip = "0";}
			if($your_jeolip == ""){$your_jeolip = "0";}   
			if($request_hour == ""){$request_hour = "0";}
			if($request_min == ""){$request_min = "0";}
			
			$selected_month = substr($your_ymd_jeolip,4,2);  		//2월5일근방에서 입춘이 발생함으로//
			
			
			
			//if ((strlen($your_jeolip) == '4') && ($selected_month == '02') && ($my_jeolip > $hour.$min))
			//      {$your_number = $your_number - 1;}                         //입춘전이면 만세력에서 넘버를 하나 앞으로
				  
			if ((Int)$your_jeolip > (Int)$your_hour.$your_min){ 
				$your_number = $your_number - 1;
			}

			if ((Int)$your_jeolip < (Int)$your_hour.$your_min){ 
				$your_number = $your_number + 1;
			} 


#########################################

			$result = mysql_query("SELECT * FROM mansedata WHERE number = '$your_number'");                        
			$row = mysql_fetch_array($result);
			$your_year_h = $row[year_h];
			$your_year_e = $row[year_e];
			$your_month_h = $row[month_h];
			$your_month_e = $row[month_e];

####################################################
			
			if ($your_year_h == 'A') {$your_year_h = '甲';$your_year_h_org = 'A';$your_year_hh = '<img src=/images/jijangan_img/gan_01.gif>';$your_oheng_year_h = '<font color=red><b>+</b></font>목';}
			if ($your_year_h == 'B') {$your_year_h = '乙';$your_year_h_org = 'B';$your_year_hh = '<img src=/images/jijangan_img/gan_02.gif>';$your_oheng_year_h = '<font color=blue><b>-</b></font>목';}
			if ($your_year_h == 'C') {$your_year_h = '丙';$your_year_h_org = 'C';$your_year_hh = '<img src=/images/jijangan_img/gan_03.gif>';$your_oheng_year_h = '<font color=red><b>+</b></font>화';}
			if ($your_year_h == 'D') {$your_year_h = '丁';$your_year_h_org = 'D';$your_year_hh = '<img src=/images/jijangan_img/gan_04.gif>';$your_oheng_year_h = '<font color=blue><b>-</b></font>화';}
			if ($your_year_h == 'E') {$your_year_h = '戊';$your_year_h_org = 'E';$your_year_hh = '<img src=/images/jijangan_img/gan_05.gif>';$your_oheng_year_h = '<font color=red><b>+</b></font>토';}
			if ($your_year_h == 'F') {$your_year_h = '己';$your_year_h_org = 'F';$your_year_hh = '<img src=/images/jijangan_img/gan_06.gif>';$your_oheng_year_h = '<font color=blue><b>-</b></font>토';}
			if ($your_year_h == 'G') {$your_year_h = '庚';$your_year_h_org = 'G';$your_year_hh = '<img src=/images/jijangan_img/gan_07.gif>';$your_oheng_year_h = '<font color=red><b>+</b></font>금';}
			if ($your_year_h == 'H') {$your_year_h = '辛';$your_year_h_org = 'H';$your_year_hh = '<img src=/images/jijangan_img/gan_08.gif>';$your_oheng_year_h = '<font color=blue><b>-</b></font>금';}
			if ($your_year_h == 'I') {$your_year_h = '壬';$your_year_h_org = 'I';$your_year_hh = '<img src=/images/jijangan_img/gan_09.gif>';$your_oheng_year_h = '<font color=red><b>+</b></font>수';}
			if ($your_year_h == 'J') {$your_year_h = '癸';$your_year_h_org = 'J';$your_year_hh = '<img src=/images/jijangan_img/gan_10.gif>';$your_oheng_year_h = '<font color=blue><b>-</b></font>수';}
			
			if ($your_month_h == 'A') {$your_month_h = '甲';$your_month_h_org = 'A';$your_month_hh = '<img src=/images/jijangan_img/gan_01.gif>';$your_oheng_month_h = '<font color=red><b>+</b></font>목';}
			if ($your_month_h == 'B') {$your_month_h = '乙';$your_month_h_org = 'B';$your_month_hh = '<img src=/images/jijangan_img/gan_02.gif>';$your_oheng_month_h = '<font color=blue><b>-</b></font>목';}
			if ($your_month_h == 'C') {$your_month_h = '丙';$your_month_h_org = 'C';$your_month_hh = '<img src=/images/jijangan_img/gan_03.gif>';$your_oheng_month_h = '<font color=red><b>+</b></font>화';}
			if ($your_month_h == 'D') {$your_month_h = '丁';$your_month_h_org = 'D';$your_month_hh = '<img src=/images/jijangan_img/gan_04.gif>';$your_oheng_month_h = '<font color=blue><b>-</b></font>화';}
			if ($your_month_h == 'E') {$your_month_h = '戊';$your_month_h_org = 'E';$your_month_hh = '<img src=/images/jijangan_img/gan_05.gif>';$your_oheng_month_h = '<font color=red><b>+</b></font>토';}
			if ($your_month_h == 'F') {$your_month_h = '己';$your_month_h_org = 'F';$your_month_hh = '<img src=/images/jijangan_img/gan_06.gif>';$your_oheng_month_h = '<font color=blue><b>-</b></font>토';}
			if ($your_month_h == 'G') {$your_month_h = '庚';$your_month_h_org = 'G';$your_month_hh = '<img src=/images/jijangan_img/gan_07.gif>';$your_oheng_month_h = '<font color=red><b>+</b></font>금';}
			if ($your_month_h == 'H') {$your_month_h = '辛';$your_month_h_org = 'H';$your_month_hh = '<img src=/images/jijangan_img/gan_08.gif>';$your_oheng_month_h = '<font color=blue><b>-</b></font>금';}
			if ($your_month_h == 'I') {$your_month_h = '壬';$your_month_h_org = 'I';$your_month_hh = '<img src=/images/jijangan_img/gan_09.gif>';$your_oheng_month_h = '<font color=red><b>+</b></font>수';}
			if ($your_month_h == 'J') {$your_month_h = '癸';$your_month_h_org = 'J';$your_month_hh = '<img src=/images/jijangan_img/gan_10.gif>';$your_oheng_month_h = '<font color=blue><b>-</b></font>수';}
                        
########자시를 기준으로 일간지가 다음날로 바뀜######################################
			$member_hour_min_your = $your_hour.$your_min;


			If($member_hour_min_your == ""){$member_hour_min_your = $your_hour.$your_min;}
			If($member_hour_min_your == "0000"){$member_hour_min_your = "2400";}
			$member_hour_min_your = (int)$member_hour_min_your;
			
			if ($member_hour_min_your < 30){$your_hour_check = '子';$your_hour_check_1 = '수정';  }
			
			if (($your_day_h == 'C') && ($your_hour_check_1 == '수정')) {$your_day_h = '乙';$your_day_h_org = 'B';$your_day_hh = '<img src=/images/jijangan_img/gan_02.gif>';$your_oheng_day_h = '<font color=blue><b>-</b></font>목';}
			if (($your_day_h == 'D') && ($your_hour_check_1 == '수정'))  {$your_day_h = '丙';$your_day_h_org = 'C';$your_day_hh = '<img src=/images/jijangan_img/gan_03.gif>';$your_oheng_day_h = '<font color=red><b>+</b></font>화';}
			if (($your_day_h == 'E') && ($your_hour_check_1 == '수정'))  {$your_day_h = '丁';$your_day_h_org = 'D';$your_day_hh = '<img src=/images/jijangan_img/gan_04.gif>';$your_oheng_day_h = '<font color=blue><b>-</b></font>화';}
			if (($your_day_h == 'F') && ($your_hour_check_1 == '수정'))  {$your_day_h = '戊';$your_day_h_org = 'E';$your_day_hh = '<img src=/images/jijangan_img/gan_05.gif>';$your_oheng_day_h = '<font color=red><b>+</b></font>토';}
			if (($your_day_h == 'G') && ($your_hour_check_1 == '수정'))  {$your_day_h = '己';$your_day_h_org = 'F';$your_day_hh = '<img src=/images/jijangan_img/gan_06.gif>';$your_oheng_day_h = '<font color=blue><b>-</b></font>토';}
			if (($your_day_h == 'H') && ($your_hour_check_1 == '수정'))  {$your_day_h = '庚';$your_day_h_org = 'G';$your_day_hh = '<img src=/images/jijangan_img/gan_07.gif>';$your_oheng_day_h = '<font color=red><b>+</b></font>금';}
			if (($your_day_h == 'I') && ($your_hour_check_1 == '수정'))  {$your_day_h = '辛';$your_day_h_org = 'H';$your_day_hh = '<img src=/images/jijangan_img/gan_08.gif>';$your_oheng_day_h = '<font color=blue><b>-</b></font>금';}
			if (($your_day_h == 'J') && ($your_hour_check_1 == '수정'))  {$your_day_h = '壬';$your_day_h_org = 'I';$your_day_hh = '<img src=/images/jijangan_img/gan_09.gif>';$your_oheng_day_h = '<font color=red><b>+</b></font>수';}
			if (($your_day_h == 'A') && ($your_hour_check_1 == '수정'))  {$your_day_h = '癸';$your_day_h_org = 'J';$your_day_hh = '<img src=/images/jijangan_img/gan_10.gif>';$your_oheng_day_h = '<font color=blue><b>-</b></font>수';}
			if (($your_day_h == 'B') && ($your_hour_check_1 == '수정'))  {$your_day_h = '甲';$your_day_h_org = 'A';$your_day_hh = '<img src=/images/jijangan_img/gan_01.gif>';$your_oheng_day_h = '<font color=red><b>+</b></font>목';}

			
			
			
			if ($member_hour_min_your >= 2330){$your_hour_check = '子';}
			
If($member_hour_min_your == 100){
			if (($your_day_h == 'J') && ($your_hour_check_1 == '')) {$your_day_h = '甲';$your_day_h_org = 'A';$your_day_hh = '<img src=/images/jijangan_img/gan_01.gif>';$your_oheng_day_h = '<font color=red><b>+</b></font>목';}
			if (($your_day_h == 'A') && ($your_hour_check_1 == ''))  {$your_day_h = '乙';$your_day_h_org = 'B';$your_day_hh = '<img src=/images/jijangan_img/gan_02.gif>';$your_oheng_day_h = '<font color=blue><b>-</b></font>목';}
			if (($your_day_h == 'B') && ($your_hour_check_1 == ''))  {$your_day_h = '丙';$your_day_h_org = 'C';$your_day_hh = '<img src=/images/jijangan_img/gan_03.gif>';$your_oheng_day_h = '<font color=red><b>+</b></font>화';}
			if (($your_day_h == 'C') && ($your_hour_check_1 == ''))  {$your_day_h = '丁';$your_day_h_org = 'D';$your_day_hh = '<img src=/images/jijangan_img/gan_04.gif>';$your_oheng_day_h = '<font color=blue><b>-</b></font>화';}
			if (($your_day_h == 'D') && ($your_hour_check_1 == ''))  {$your_day_h = '戊';$your_day_h_org = 'E';$your_day_hh = '<img src=/images/jijangan_img/gan_05.gif>';$your_oheng_day_h = '<font color=red><b>+</b></font>토';}
			if (($your_day_h == 'E') && ($your_hour_check_1 == ''))  {$your_day_h = '己';$your_day_h_org = 'F';$your_day_hh = '<img src=/images/jijangan_img/gan_06.gif>';$your_oheng_day_h = '<font color=blue><b>-</b></font>토';}
			if (($your_day_h == 'F') && ($your_hour_check_1 == ''))  {$your_day_h = '庚';$your_day_h_org = 'G';$your_day_hh = '<img src=/images/jijangan_img/gan_07.gif>';$your_oheng_day_h = '<font color=red><b>+</b></font>금';}
			if (($your_day_h == 'G') && ($your_hour_check_1 == ''))  {$your_day_h = '辛';$your_day_h_org = 'H';$your_day_hh = '<img src=/images/jijangan_img/gan_08.gif>';$your_oheng_day_h = '<font color=blue><b>-</b></font>금';}
			if (($your_day_h == 'H') && ($your_hour_check_1 == ''))  {$your_day_h = '壬';$your_day_h_org = 'I';$your_day_hh = '<img src=/images/jijangan_img/gan_09.gif>';$your_oheng_day_h = '<font color=red><b>+</b></font>수';}
			if (($your_day_h == 'I') && ($your_hour_check_1 == ''))  {$your_day_h = '癸';$your_day_h_org = 'J';$your_day_hh = '<img src=/images/jijangan_img/gan_10.gif>';$your_oheng_day_h = '<font color=blue><b>-</b></font>수';}
}else{
			if (($your_day_h == 'A') && ($your_hour_check_1 == '')) {$your_day_h = '甲';$your_day_h_org = 'A';$your_day_hh = '<img src=/images/jijangan_img/gan_01.gif>';$your_oheng_day_h = '<font color=red><b>+</b></font>목';}
			if (($your_day_h == 'B') && ($your_hour_check_1 == ''))  {$your_day_h = '乙';$your_day_h_org = 'B';$your_day_hh = '<img src=/images/jijangan_img/gan_02.gif>';$your_oheng_day_h = '<font color=blue><b>-</b></font>목';}
			if (($your_day_h == 'C') && ($your_hour_check_1 == ''))  {$your_day_h = '丙';$your_day_h_org = 'C';$your_day_hh = '<img src=/images/jijangan_img/gan_03.gif>';$your_oheng_day_h = '<font color=red><b>+</b></font>화';}
			if (($your_day_h == 'D') && ($your_hour_check_1 == ''))  {$your_day_h = '丁';$your_day_h_org = 'D';$your_day_hh = '<img src=/images/jijangan_img/gan_04.gif>';$your_oheng_day_h = '<font color=blue><b>-</b></font>화';}
			if (($your_day_h == 'E') && ($your_hour_check_1 == ''))  {$your_day_h = '戊';$your_day_h_org = 'E';$your_day_hh = '<img src=/images/jijangan_img/gan_05.gif>';$your_oheng_day_h = '<font color=red><b>+</b></font>토';}
			if (($your_day_h == 'F') && ($your_hour_check_1 == ''))  {$your_day_h = '己';$your_day_h_org = 'F';$your_day_hh = '<img src=/images/jijangan_img/gan_06.gif>';$your_oheng_day_h = '<font color=blue><b>-</b></font>토';}
			if (($your_day_h == 'G') && ($your_hour_check_1 == ''))  {$your_day_h = '庚';$your_day_h_org = 'G';$your_day_hh = '<img src=/images/jijangan_img/gan_07.gif>';$your_oheng_day_h = '<font color=red><b>+</b></font>금';}
			if (($your_day_h == 'H') && ($your_hour_check_1 == ''))  {$your_day_h = '辛';$your_day_h_org = 'H';$your_day_hh = '<img src=/images/jijangan_img/gan_08.gif>';$your_oheng_day_h = '<font color=blue><b>-</b></font>금';}
			if (($your_day_h == 'I') && ($your_hour_check_1 == ''))  {$your_day_h = '壬';$your_day_h_org = 'I';$your_day_hh = '<img src=/images/jijangan_img/gan_09.gif>';$your_oheng_day_h = '<font color=red><b>+</b></font>수';}
			if (($your_day_h == 'J') && ($your_hour_check_1 == ''))  {$your_day_h = '癸';$your_day_h_org = 'J';$your_day_hh = '<img src=/images/jijangan_img/gan_10.gif>';$your_oheng_day_h = '<font color=blue><b>-</b></font>수';}
}



############################################################################################

			if ($your_year_e == '01') {$your_year_e = '寅';$your_year_e_org = '01';$your_year_ee = '<img src=/images/jijangan_img/ji_01.gif>';$your_oheng_year_e = '<font color=red><b>+</b></font>목';$your_jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$your_jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$your_jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_01.gif>';}
			if ($your_year_e == '02') {$your_year_e = '卯';$your_year_e_org = '02';$your_year_ee = '<img src=/images/jijangan_img/ji_02.gif>';$your_oheng_year_e = '<font color=blue><b>-</b></font>목';$your_jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$your_jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$your_jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_02.gif>';}
			if ($your_year_e == '03') {$your_year_e = '辰';$your_year_e_org = '03';$your_year_ee = '<img src=/images/jijangan_img/ji_03.gif>';$your_oheng_year_e = '<font color=red><b>+</b></font>토';$your_jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$your_jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$your_jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_05.gif>';}
			if ($your_year_e == '04') {$your_year_e = '巳';$your_year_e_org = '04';$your_year_ee = '<img src=/images/jijangan_img/ji_04.gif>';$your_oheng_year_e = '<font color=red><b>+</b></font>화';$your_jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$your_jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$your_jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_03.gif>';}
			if ($your_year_e == '05') {$your_year_e = '午';$your_year_e_org = '05';$your_year_ee = '<img src=/images/jijangan_img/ji_05.gif>';$your_oheng_year_e = '<font color=blue><b>-</b></font>화';$your_jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$your_jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_06.gif>';$your_jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_04.gif>';}
			if ($your_year_e == '06') {$your_year_e = '未';$your_year_e_org = '06';$your_year_ee = '<img src=/images/jijangan_img/ji_06.gif>';$your_oheng_year_e = '<font color=blue><b>-</b></font>토';$your_jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$your_jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$your_jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_06.gif>';}
			if ($your_year_e == '07') {$your_year_e = '申';$your_year_e_org = '07';$your_year_ee = '<img src=/images/jijangan_img/ji_07.gif>';$your_oheng_year_e = '<font color=red><b>+</b></font>금';$your_jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$your_jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$your_jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_07.gif>';}
			if ($your_year_e == '08') {$your_year_e = '酉';$your_year_e_org = '08';$your_year_ee = '<img src=/images/jijangan_img/ji_08.gif>';$your_oheng_year_e = '<font color=blue><b>-</b></font>금';$your_jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$your_jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$your_jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_08.gif>';}
			if ($your_year_e == '09') {$your_year_e = '戌';$your_year_e_org = '09';$your_year_ee = '<img src=/images/jijangan_img/ji_09.gif>';$your_oheng_year_e = '<font color=red><b>+</b></font>토';$your_jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$your_jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$your_jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_05.gif>';}
			if ($your_year_e == '10') {$your_year_e = '亥';$your_year_e_org = '10';$your_year_ee = '<img src=/images/jijangan_img/ji_10.gif>';$your_oheng_year_e = '<font color=red><b>+</b></font>수';$your_jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$your_jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$your_jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_09.gif>';}
			if ($your_year_e == '11') {$your_year_e = '子';$your_year_e_org = '11';$your_year_ee = '<img src=/images/jijangan_img/ji_11.gif>';$your_oheng_year_e = '<font color=blue><b>-</b></font>수';$your_jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$your_jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$your_jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_10.gif>';}
			if ($your_year_e == '12') {$your_year_e = '丑';$your_year_e_org = '12';$your_year_ee = '<img src=/images/jijangan_img/ji_12.gif>';$your_oheng_year_e = '<font color=blue><b>-</b></font>토';$your_jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$your_jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$your_jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_06.gif>';}

			if ($your_month_e == '01') {$your_month_e = '寅';$your_month_e_org = '01';$your_month_ee = '<img src=/images/jijangan_img/ji_01.gif>';$your_oheng_month_e = '<font color=red><b>+</b></font>목';$your_jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$your_jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$your_jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_01.gif>';}
			if ($your_month_e == '02') {$your_month_e = '卯';$your_month_e_org = '02';$your_month_ee = '<img src=/images/jijangan_img/ji_02.gif>';$your_oheng_month_e = '<font color=blue><b>-</b></font>목';$your_jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$your_jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$your_jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_02.gif>';}
			if ($your_month_e == '03') {$your_month_e = '辰';$your_month_e_org = '03';$your_month_ee = '<img src=/images/jijangan_img/ji_03.gif>';$your_oheng_month_e = '<font color=red><b>+</b></font>토';$your_jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$your_jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$your_jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_05.gif>';}
			if ($your_month_e == '04') {$your_month_e = '巳';$your_month_e_org = '04';$your_month_ee = '<img src=/images/jijangan_img/ji_04.gif>';$your_oheng_month_e = '<font color=red><b>+</b></font>화';$your_jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$your_jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$your_jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_03.gif>';}
			if ($your_month_e == '05') {$your_month_e = '午';$your_month_e_org = '05';$your_month_ee = '<img src=/images/jijangan_img/ji_05.gif>';$your_oheng_month_e = '<font color=blue><b>-</b></font>화';$your_jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$your_jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_06.gif>';$your_jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_04.gif>';}
			if ($your_month_e == '06') {$your_month_e = '未';$your_month_e_org = '06';$your_month_ee = '<img src=/images/jijangan_img/ji_06.gif>';$your_oheng_month_e = '<font color=blue><b>-</b></font>토';$your_jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$your_jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$your_jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_06.gif>';}
			if ($your_month_e == '07') {$your_month_e = '申';$your_month_e_org = '07';$your_month_ee = '<img src=/images/jijangan_img/ji_07.gif>';$your_oheng_month_e = '<font color=red><b>+</b></font>금';$your_jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$your_jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$your_jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_07.gif>';}
			if ($your_month_e == '08') {$your_month_e = '酉';$your_month_e_org = '08';$your_month_ee = '<img src=/images/jijangan_img/ji_08.gif>';$your_oheng_month_e = '<font color=blue><b>-</b></font>금';$your_jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$your_jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$your_jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_08.gif>';}
			if ($your_month_e == '09') {$your_month_e = '戌';$your_month_e_org = '09';$your_month_ee = '<img src=/images/jijangan_img/ji_09.gif>';$your_oheng_month_e = '<font color=red><b>+</b></font>토';$your_jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$your_jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$your_jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_05.gif>';}
			if ($your_month_e == '10') {$your_month_e = '亥';$your_month_e_org = '10';$your_month_ee = '<img src=/images/jijangan_img/ji_10.gif>';$your_oheng_month_e = '<font color=red><b>+</b></font>수';$your_jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$your_jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$your_jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_09.gif>';}
			if ($your_month_e == '11') {$your_month_e = '子';$your_month_e_org = '11';$your_month_ee = '<img src=/images/jijangan_img/ji_11.gif>';$your_oheng_month_e = '<font color=blue><b>-</b></font>수';$your_jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$your_jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$your_jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_10.gif>';}
			if ($your_month_e == '12') {$your_month_e = '丑';$your_month_e_org = '12';$your_month_ee = '<img src=/images/jijangan_img/ji_12.gif>';$your_oheng_month_e = '<font color=blue><b>-</b></font>토';$your_jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$your_jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$your_jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_06.gif>';}

########자시를 기준으로 일간지가 다음날로 바뀜######################################

			if (($your_day_e == '01') && ($your_hour_check_1 == ''))  {$your_day_e = '寅';$your_day_e_org = '01';$your_day_ee = '<img src=/images/jijangan_img/ji_01.gif>';$your_oheng_day_e = '<font color=red><b>+</b></font>목';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_01.gif>';}
			if (($your_day_e == '02') && ($your_hour_check_1 == ''))  {$your_day_e = '卯';$your_day_e_org = '02';$your_day_ee = '<img src=/images/jijangan_img/ji_02.gif>';$your_oheng_day_e = '<font color=blue><b>-</b></font>목';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_02.gif>';}
			if (($your_day_e == '03') && ($your_hour_check_1 == ''))  {$your_day_e = '辰';$your_day_e_org = '03';$your_day_ee = '<img src=/images/jijangan_img/ji_03.gif>';$your_oheng_day_e = '<font color=red><b>+</b></font>토';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_05.gif>';}
			if (($your_day_e == '04') && ($your_hour_check_1 == ''))  {$your_day_e = '巳';$your_day_e_org = '04';$your_day_ee = '<img src=/images/jijangan_img/ji_04.gif>';$your_oheng_day_e = '<font color=red><b>+</b></font>화';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_03.gif>';}
			if (($your_day_e == '05') && ($your_hour_check_1 == ''))  {$your_day_e = '午';$your_day_e_org = '05';$your_day_ee = '<img src=/images/jijangan_img/ji_05.gif>';$your_oheng_day_e = '<font color=blue><b>-</b></font>화';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_06.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_04.gif>';}
			if (($your_day_e == '06') && ($your_hour_check_1 == ''))  {$your_day_e = '未';$your_day_e_org = '06';$your_day_ee = '<img src=/images/jijangan_img/ji_06.gif>';$your_oheng_day_e = '<font color=blue><b>-</b></font>토';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_06.gif>';}
			if (($your_day_e == '07') && ($your_hour_check_1 == ''))  {$your_day_e = '申';$your_day_e_org = '07';$your_day_ee = '<img src=/images/jijangan_img/ji_07.gif>';$your_oheng_day_e = '<font color=red><b>+</b></font>금';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_07.gif>';}
			if (($your_day_e == '08') && ($your_hour_check_1 == ''))  {$your_day_e = '酉';$your_day_e_org = '08';$your_day_ee = '<img src=/images/jijangan_img/ji_08.gif>';$your_oheng_day_e = '<font color=blue><b>-</b></font>금';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_08.gif>';}
			if (($your_day_e == '09') && ($your_hour_check_1 == ''))  {$your_day_e = '戌';$your_day_e_org = '09';$your_day_ee = '<img src=/images/jijangan_img/ji_09.gif>';$your_oheng_day_e = '<font color=red><b>+</b></font>토';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_05.gif>';}
			if (($your_day_e == '10') && ($your_hour_check_1 == ''))  {$your_day_e = '亥';$your_day_e_org = '10';$your_day_ee = '<img src=/images/jijangan_img/ji_10.gif>';$your_oheng_day_e = '<font color=red><b>+</b></font>수';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_09.gif>';}
			if (($your_day_e == '11') && ($your_hour_check_1 == ''))  {$your_day_e = '子';$your_day_e_org = '11';$your_day_ee = '<img src=/images/jijangan_img/ji_11.gif>';$your_oheng_day_e = '<font color=blue><b>-</b></font>수';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_10.gif>';}
			if (($your_day_e == '12') && ($your_hour_check_1 == ''))  {$your_day_e = '丑';$your_day_e_org = '12';$your_day_ee = '<img src=/images/jijangan_img/ji_12.gif>';$your_oheng_day_e = '<font color=blue><b>-</b></font>토';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_06.gif>';}
			
			if (($your_day_e == '03') && ($your_hour_check_1 == '수정'))  {$your_day_e = '卯';$your_day_e_org = '02';$your_day_ee = '<img src=/images/jijangan_img/ji_02.gif>';$your_oheng_day_e = '<font color=blue><b>-</b></font>목';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_02.gif>';}
			if (($your_day_e == '04') && ($your_hour_check_1 == '수정'))  {$your_day_e = '辰';$your_day_e_org = '03';$your_day_ee = '<img src=/images/jijangan_img/ji_03.gif>';$your_oheng_day_e = '<font color=red><b>+</b></font>토';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_05.gif>';}
			if (($your_day_e == '05') && ($your_hour_check_1 == '수정'))  {$your_day_e = '巳';$your_day_e_org = '04';$your_day_ee = '<img src=/images/jijangan_img/ji_04.gif>';$your_oheng_day_e = '<font color=red><b>+</b></font>화';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_03.gif>';}
			if (($your_day_e == '06') && ($your_hour_check_1 == '수정'))  {$your_day_e = '午';$your_day_e_org = '05';$your_day_ee = '<img src=/images/jijangan_img/ji_05.gif>';$your_oheng_day_e = '<font color=blue><b>-</b></font>화';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_06.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_04.gif>';}
			if (($your_day_e == '07') && ($your_hour_check_1 == '수정'))  {$your_day_e = '未';$your_day_e_org = '06';$your_day_ee = '<img src=/images/jijangan_img/ji_06.gif>';$your_oheng_day_e = '<font color=blue><b>-</b></font>토';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_06.gif>';}
			if (($your_day_e == '08') && ($your_hour_check_1 == '수정'))  {$your_day_e = '申';$your_day_e_org = '07';$your_day_ee = '<img src=/images/jijangan_img/ji_07.gif>';$your_oheng_day_e = '<font color=red><b>+</b></font>금';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_07.gif>';}
			if (($your_day_e == '09') && ($your_hour_check_1 == '수정'))  {$your_day_e = '酉';$your_day_e_org = '08';$your_day_ee = '<img src=/images/jijangan_img/ji_08.gif>';$your_oheng_day_e = '<font color=blue><b>-</b></font>금';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_08.gif>';}
			if (($your_day_e == '10') && ($your_hour_check_1 == '수정'))  {$your_day_e = '戌';$your_day_e_org = '09';$your_day_ee = '<img src=/images/jijangan_img/ji_09.gif>';$your_oheng_day_e = '<font color=red><b>+</b></font>토';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_05.gif>';}
			if (($your_day_e == '11') && ($your_hour_check_1 == '수정'))  {$your_day_e = '亥';$your_day_e_org = '10';$your_day_ee = '<img src=/images/jijangan_img/ji_10.gif>';$your_oheng_day_e = '<font color=red><b>+</b></font>수';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_09.gif>';}
			if (($your_day_e == '12') && ($your_hour_check_1 == '수정'))  {$your_day_e = '子';$your_day_e_org = '11';$your_day_ee = '<img src=/images/jijangan_img/ji_11.gif>';$your_oheng_day_e = '<font color=blue><b>-</b></font>수';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_10.gif>';}
			if (($your_day_e == '01') && ($your_hour_check_1 == '수정'))  {$your_day_e = '丑';$your_day_e_org = '12';$your_day_ee = '<img src=/images/jijangan_img/ji_12.gif>';$your_oheng_day_e = '<font color=blue><b>-</b></font>토';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_06.gif>';}
			if (($your_day_e == '02') && ($your_hour_check_1 == '수정'))  {$your_day_e = '寅';$your_day_e_org = '01';$your_day_ee = '<img src=/images/jijangan_img/ji_01.gif>';$your_oheng_day_e = '<font color=red><b>+</b></font>목';$your_jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$your_jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$your_jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_01.gif>';}


#############################################################################################
			
			
			$member_hour_min_your = $your_hour.$your_min;
			
			$member_hour_min_your = (int)$member_hour_min_your;

		//	if($member_hour_min_your == 0){$member_hour_min_your = 500;}
			

If((Int)$your_jeolip != 0){
	$member_hour_min_your = (Int)$member_hour_min_your;// + 200;
}Else{
	$member_hour_min_your = (Int)$member_hour_min_your;
} 

			if ($member_hour_min_your < 30){$your_hour_e = '子';$your_hour_e_org = '11';$your_hour_ee = '<img src=/images/jijangan_img/ji_11.gif>'; $s = '0';$kk = 'check_your'; $your_oheng_hour_e = '<font color=blue><b>-</b></font>수';$your_jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$your_jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$your_jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_10.gif>';}
			if (($member_hour_min_your > 29)&&($member_hour_min_your < 130)){$your_hour_e = '子';$your_hour_e_org = '11';$your_hour_ee = '<img src=/images/jijangan_img/ji_11.gif>'; $s = '0';$your_oheng_hour_e = '<font color=blue><b>-</b></font>수';$jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$jijanggan_hour10 = '임';$jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$jijanggan_hour20 = '';$jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$jijanggan_hour30 = '계';}
			
			
			
			if ($member_hour_min_your >= 2330){$your_hour_e = '子';$your_hour_e_org = '11';$your_hour_ee = '<img src=/images/jijangan_img/ji_11.gif>'; $s = '0';$kk = 'check_your';$your_oheng_hour_e = '<font color=blue><b>-</b></font>수';$your_jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$your_jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$your_jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_10.gif>';}

			if (($member_hour_min_your >=130) && ($member_hour_min_your < 330)) {$your_hour_e = '丑';$your_hour_e_org = '12';$your_hour_ee = '<img src=/images/jijangan_img/ji_12.gif>'; $s = '1';$your_oheng_hour_e = '<font color=blue><b>-</b></font>토';$your_jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$your_jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$your_jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_06.gif>';}
                        if (($member_hour_min_your >=330) && ($member_hour_min_your < 530)) {$your_hour_e = '寅';$your_hour_e_org = '01';$your_hour_ee = '<img src=/images/jijangan_img/ji_01.gif>'; $s = '2';$your_oheng_hour_e = '<font color=red><b>+</b></font>목';$your_jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$your_jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$your_jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_01.gif>';}
                        if (($member_hour_min_your >=530) && ($member_hour_min_your < 730)) {$your_hour_e = '卯';$your_hour_e_org = '02';$your_hour_ee = '<img src=/images/jijangan_img/ji_02.gif>'; $s = '3';$your_oheng_hour_e = '<font color=blue><b>-</b></font>목';$your_jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$your_jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$your_jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_02.gif>';}
                        if (($member_hour_min_your >=730) && ($member_hour_min_your < 930)) {$your_hour_e = '辰';$your_hour_e_org = '03';$your_hour_ee = '<img src=/images/jijangan_img/ji_03.gif>';$s = '4';$your_oheng_hour_e = '<font color=red><b>+</b></font>토';$your_jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$your_jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$your_jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_05.gif>';}
                        if (($member_hour_min_your >= 930) && ($member_hour_min_your < 1130)) {$your_hour_e = '巳';$your_hour_e_org = '04';$your_hour_ee = '<img src=/images/jijangan_img/ji_04.gif>';$s = '5';$your_oheng_hour_e = '<font color=red><b>+</b></font>화';$your_jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$your_jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$your_jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_03.gif>';}
                        if (($member_hour_min_your >=1130) && ($member_hour_min_your < 1330)) {$your_hour_e = '午';$your_hour_e_org = '05';$your_hour_ee = '<img src=/images/jijangan_img/ji_05.gif>'; $s = '6';$your_oheng_hour_e = '<font color=blue><b>-</b></font>화';$your_jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$your_jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_06.gif>';$your_jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_04.gif>';}
                        if (($member_hour_min_your >=1330) && ($member_hour_min_your < 1530)) {$your_hour_e = '未';$your_hour_e_org = '06';$your_hour_ee = '<img src=/images/jijangan_img/ji_06.gif>';$s = '7';$your_oheng_hour_e = '<font color=blue><b>-</b></font>토';$your_jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$your_jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$your_jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_06.gif>';}
                        if (($member_hour_min_your >=1530) && ($member_hour_min_your < 1730)) {$your_hour_e = '申';$your_hour_e_org = '07';$your_hour_ee = '<img src=/images/jijangan_img/ji_07.gif>';$s = '8';$your_oheng_hour_e = '<font color=red><b>+</b></font>금';$your_jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$your_jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$your_jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_07.gif>';}
                        if (($member_hour_min_your >=1730) && ($member_hour_min_your < 1930)) {$your_hour_e = '酉';$your_hour_e_org = '08';$your_hour_ee = '<img src=/images/jijangan_img/ji_08.gif>';$s = '9';$your_oheng_hour_e = '<font color=blue><b>-</b></font>금';$your_jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$your_jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$your_jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_08.gif>';}
                        if (($member_hour_min_your >=1930) && ($member_hour_min_your < 2130)) {$your_hour_e = '戌';$your_hour_e_org = '09';$your_hour_ee = '<img src=/images/jijangan_img/ji_09.gif>'; $s = '10';$your_oheng_hour_e = '<font color=red><b>+</b></font>토';$your_jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$your_jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$your_jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_09.gif>';}
                        if (($member_hour_min_your >=2130) && ($member_hour_min_your < 2330)) {$your_hour_e = '亥';$your_hour_e_org = '10';$your_hour_ee = '<img src=/images/jijangan_img/ji_10.gif>'; $s = '11';$your_oheng_hour_e = '<font color=red><b>+</b></font>수';$your_jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$your_jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$your_jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_06.gif>';}



                       $aa = array('甲','乙','丙','丁','戊','己','庚','辛','壬','癸','甲','乙');  #일간이 甲일이나 己일이면 甲子시로 시작한다.
                       $bb = array('丙','丁','戊','己','庚','辛','壬','癸','甲','乙','丙','丁');  #乙庚일 丙子
                       $cc = array('戊','己','庚','辛','壬','癸','甲','乙','丙','丁','戊','己');  #丙辛일 戊子
                       $dd = array('庚','辛','壬','癸','甲','乙','丙','丁','戊','己','庚','辛');  #丁壬일 庚子
                       $ee = array('壬','癸','甲','乙','丙','丁','戊','己','庚','辛','壬','癸');  #戊癸일 壬子
                       
                       $aaaa = array('<img src=/images/jijangan_img/gan_01.gif>','<img src=/images/jijangan_img/gan_02.gif>','<img src=/images/jijangan_img/gan_03.gif>','<img src=/images/jijangan_img/gan_04.gif>','<img src=/images/jijangan_img/gan_05.gif>','<img src=/images/jijangan_img/gan_06.gif>','<img src=/images/jijangan_img/gan_07.gif>','<img src=/images/jijangan_img/gan_08.gif>','<img src=/images/jijangan_img/gan_09.gif>','<img src=/images/jijangan_img/gan_10.gif>','<img src=/images/jijangan_img/gan_01.gif>','<img src=/images/jijangan_img/gan_02.gif>');  #일간이 갑일이나 기일이면 갑子시로 시작한다.
                       $bbbb = array('<img src=/images/jijangan_img/gan_03.gif>','<img src=/images/jijangan_img/gan_04.gif>','<img src=/images/jijangan_img/gan_05.gif>','<img src=/images/jijangan_img/gan_06.gif>','<img src=/images/jijangan_img/gan_07.gif>','<img src=/images/jijangan_img/gan_08.gif>','<img src=/images/jijangan_img/gan_09.gif>','<img src=/images/jijangan_img/gan_10.gif>','<img src=/images/jijangan_img/gan_01.gif>','<img src=/images/jijangan_img/gan_02.gif>','<img src=/images/jijangan_img/gan_03.gif>','<img src=/images/jijangan_img/gan_04.gif>');  #을경일 병子
                       $cccc = array('<img src=/images/jijangan_img/gan_05.gif>','<img src=/images/jijangan_img/gan_06.gif>','<img src=/images/jijangan_img/gan_07.gif>','<img src=/images/jijangan_img/gan_08.gif>','<img src=/images/jijangan_img/gan_09.gif>','<img src=/images/jijangan_img/gan_10.gif>','<img src=/images/jijangan_img/gan_01.gif>','<img src=/images/jijangan_img/gan_02.gif>','<img src=/images/jijangan_img/gan_03.gif>','<img src=/images/jijangan_img/gan_04.gif>','<img src=/images/jijangan_img/gan_05.gif>','<img src=/images/jijangan_img/gan_06.gif>');  #병신일 무子
                       $dddd = array('<img src=/images/jijangan_img/gan_07.gif>','<img src=/images/jijangan_img/gan_08.gif>','<img src=/images/jijangan_img/gan_09.gif>','<img src=/images/jijangan_img/gan_10.gif>','<img src=/images/jijangan_img/gan_01.gif>','<img src=/images/jijangan_img/gan_02.gif>','<img src=/images/jijangan_img/gan_03.gif>','<img src=/images/jijangan_img/gan_04.gif>','<img src=/images/jijangan_img/gan_05.gif>','<img src=/images/jijangan_img/gan_06.gif>','<img src=/images/jijangan_img/gan_07.gif>','<img src=/images/jijangan_img/gan_08.gif>');  #정임일 경子
                       $eeee = array('<img src=/images/jijangan_img/gan_09.gif>','<img src=/images/jijangan_img/gan_10.gif>','<img src=/images/jijangan_img/gan_01.gif>','<img src=/images/jijangan_img/gan_02.gif>','<img src=/images/jijangan_img/gan_03.gif>','<img src=/images/jijangan_img/gan_04.gif>','<img src=/images/jijangan_img/gan_05.gif>','<img src=/images/jijangan_img/gan_06.gif>','<img src=/images/jijangan_img/gan_07.gif>','<img src=/images/jijangan_img/gan_08.gif>','<img src=/images/jijangan_img/gan_09.gif>','<img src=/images/jijangan_img/gan_10.gif>');  #무계일 임子


If((Int)$your_jeolip != 0){ 
	$kk = "check_your"; 
	$s = $s - 2; 

	If($s <= 0){$s = 12 + $s;}
}Else{ 
	$kk = ""; 
	$s = $s;
} 
		      
if ($kk=='check_your') {		       
		       
		       if (($your_day_h == '甲') || ($your_day_h == '己')) {$your_hour_h = $bb[$s];$your_hour_hh = $bbbb[$s];}
		       if (($your_day_h == '乙') || ($your_day_h == '庚')) {$your_hour_h = $cc[$s];$your_hour_hh = $cccc[$s];}
		       if (($your_day_h == '丙') || ($your_day_h == '辛')) {$your_hour_h = $dd[$s];$your_hour_hh = $dddd[$s];}
		       if (($your_day_h == '丁') || ($your_day_h == '壬')) {$your_hour_h = $ee[$s];$your_hour_hh = $eeee[$s];}
		       if (($your_day_h == '戊') || ($your_day_h == '癸')) {$your_hour_h = $aa[$s];$your_hour_hh = $aaaa[$s];}		       
		       
}
else{		       
		       
		       
		       
		       if (($your_day_h == '甲') || ($your_day_h == '己')) {$your_hour_h = $aa[$s];$your_hour_hh = $aaaa[$s];}
		       if (($your_day_h == '乙') || ($your_day_h == '庚')) {$your_hour_h = $bb[$s];$your_hour_hh = $bbbb[$s];}
		       if (($your_day_h == '丙') || ($your_day_h == '辛')) {$your_hour_h = $cc[$s];$your_hour_hh = $cccc[$s];}
		       if (($your_day_h == '丁') || ($your_day_h == '壬')) {$your_hour_h = $dd[$s];$your_hour_hh = $dddd[$s];}
		       if (($your_day_h == '戊') || ($your_day_h == '癸')) {$your_hour_h = $ee[$s];$your_hour_hh = $eeee[$s];}
}


if ($your_hour_h == '甲') {$your_hour_h_org = 'A';$your_oheng_hour_h = '<font color=red><b>+</b></font>목';}
if ($your_hour_h == '乙') {$your_hour_h_org = 'B';$your_oheng_hour_h = '<font color=blue><b>-</b></font>목';}
if ($your_hour_h == '丙') {$your_hour_h_org = 'C';$your_oheng_hour_h = '<font color=red><b>+</b></font>화';}
if ($your_hour_h == '丁') {$your_hour_h_org = 'D';$your_oheng_hour_h = '<font color=blue><b>-</b></font>화';}
if ($your_hour_h == '戊') {$your_hour_h_org = 'E';$your_oheng_hour_h = '<font color=red><b>+</b></font>토';}
if ($your_hour_h == '己') {$your_hour_h_org = 'F';$your_oheng_hour_h = '<font color=blue><b>-</b></font>토';}
if ($your_hour_h == '庚') {$your_hour_h_org = 'G';$your_oheng_hour_h = '<font color=red><b>+</b></font>금';}
if ($your_hour_h == '辛') {$your_hour_h_org = 'H';$your_oheng_hour_h = '<font color=blue><b>-</b></font>금';}
if ($your_hour_h == '壬') {$your_hour_h_org = 'I';$your_oheng_hour_h = '<font color=red><b>+</b></font>수';}
if ($your_hour_h == '癸') {$your_hour_h_org = 'J';$your_oheng_hour_h = '<font color=blue><b>-</b></font>수';}


#################################### 4기둥을 세움 끝 ####################################################################




?>