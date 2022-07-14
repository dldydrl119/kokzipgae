
<?
####################################################################
####################################################################  사주조화 계산
#################################### 4기둥을 세운다 ####################################################################
			$my_ymd_jeolip = $solar_year.$solar_month.$solar_day;

			$result = mysql_query("SELECT * FROM mansedata WHERE no = '$my_ymd_jeolip'");
			$row = mysql_fetch_array($result);
			$my_number = $row[number];
			$my_day_h = $row[day_h];
			$my_day_e = $row[day_e];
			$my_jeolip = $row[jeolip];
			$selected_month = substr($my_ymd_jeolip,4,2);  		//2월5일근방에서 입춘이 발생함으로// 
			If($my_jeolip == ""){$my_jeolip = 0;}

		//	if ((strlen($my_jeolip) == 4) && ($selected_month == '02') && ($my_jeolip > $request_hour.$request_min))
		//	      {$my_number = $my_number - 1;}                         //입춘전이면 만세력에서 넘버를 하나 앞으로

		if ((strlen($my_jeolip) == 4)){				  
			if ((Int)$my_jeolip > (Int)$request_hour.$request_min){ 
				$my_number = $my_number - 1;
			}

			if ((Int)$my_jeolip < (Int)$request_hour.$request_min){ 
				$my_number = $my_number + 1;
			} 
		}


#########################################

			$result = mysql_query("SELECT * FROM mansedata WHERE number = '$my_number'");
			$row = mysql_fetch_array($result);
			$my_year_h = $row[year_h];
			$my_year_e = $row[year_e];
			$my_month_h = $row[month_h];
			$my_month_e = $row[month_e];



####################################################

			if ($my_year_h == 'A') {$my_year_h = '甲';$my_year_h_org = 'A';$my_year_hh = '<img src=/images/jijangan_img/gan_01.gif>';$my_oheng_year_h = '<font family=굴림 color=#f48e8e><b style="font-family:굴림;">木 . 목</b></font>';}
			if ($my_year_h == 'B') {$my_year_h = '乙';$my_year_h_org = 'B';$my_year_hh = '<img src=/images/jijangan_img/gan_02.gif>';$my_oheng_year_h = '<font family=굴림 color=#858de0><b style="font-family:굴림;">木 . 목</b></font>';}
			if ($my_year_h == 'C') {$my_year_h = '丙';$my_year_h_org = 'C';$my_year_hh = '<img src=/images/jijangan_img/gan_03.gif>';$my_oheng_year_h = '<font family=굴림 color=#f48e8e><b style="font-family:굴림;">火 . 화</b></font>';}
			if ($my_year_h == 'D') {$my_year_h = '丁';$my_year_h_org = 'D';$my_year_hh = '<img src=/images/jijangan_img/gan_04.gif>';$my_oheng_year_h = '<font family=굴림 color=#858de0><b style="font-family:굴림;">火 . 화</b></font>';}
			if ($my_year_h == 'E') {$my_year_h = '戊';$my_year_h_org = 'E';$my_year_hh = '<img src=/images/jijangan_img/gan_05.gif>';$my_oheng_year_h = '<font family=굴림 color=#f48e8e><b style="font-family:굴림;">土 . 토</b></font>';}
			if ($my_year_h == 'F') {$my_year_h = '己';$my_year_h_org = 'F';$my_year_hh = '<img src=/images/jijangan_img/gan_06.gif>';$my_oheng_year_h = '<font family=굴림 color=#858de0><b style="font-family:굴림;">土 . 토</b></font>';}
			if ($my_year_h == 'G') {$my_year_h = '庚';$my_year_h_org = 'G';$my_year_hh = '<img src=/images/jijangan_img/gan_07.gif>';$my_oheng_year_h = '<font family=굴림 color=#f48e8e><b style="font-family:굴림;">金 . 금</b></font>';}
			if ($my_year_h == 'H') {$my_year_h = '辛';$my_year_h_org = 'H';$my_year_hh = '<img src=/images/jijangan_img/gan_08.gif>';$my_oheng_year_h = '<font family=굴림 color=#858de0><b style="font-family:굴림;">金 . 금</b></font>';}
			if ($my_year_h == 'I') {$my_year_h = '壬';$my_year_h_org = 'I';$my_year_hh = '<img src=/images/jijangan_img/gan_09.gif>';$my_oheng_year_h = '<font family=굴림 color=#f48e8e><b style="font-family:굴림;">水 . 수</b></font>';}
			if ($my_year_h == 'J') {$my_year_h = '癸';$my_year_h_org = 'J';$my_year_hh = '<img src=/images/jijangan_img/gan_10.gif>';$my_oheng_year_h = '<font family=굴림 color=#858de0><b style="font-family:굴림;">水 . 수</b></font>';}

		

			if ($my_month_h == 'A') {$my_month_h = '甲';$my_month_h_org = 'A';$my_month_hh = '<img src=/images/jijangan_img/gan_01.gif>';$my_oheng_month_h = '<font family=굴림 color=#f48e8e><b style="font-family:굴림;">木 . 목</b></font>';}
			if ($my_month_h == 'B') {$my_month_h = '乙';$my_month_h_org = 'B';$my_month_hh = '<img src=/images/jijangan_img/gan_02.gif>';$my_oheng_month_h = '<font family=굴림 color=#858de0><b style="font-family:굴림;">木 . 목</b></font>';}
			if ($my_month_h == 'C') {$my_month_h = '丙';$my_month_h_org = 'C';$my_month_hh = '<img src=/images/jijangan_img/gan_03.gif>';$my_oheng_month_h = '<font family=굴림 color=#f48e8e><b style="font-family:굴림;">火 . 화</b></font>';}
			if ($my_month_h == 'D') {$my_month_h = '丁';$my_month_h_org = 'D';$my_month_hh = '<img src=/images/jijangan_img/gan_04.gif>';$my_oheng_month_h = '<font family=굴림 color=#858de0><b style="font-family:굴림;">火 . 화</b></font>';}
			if ($my_month_h == 'E') {$my_month_h = '戊';$my_month_h_org = 'E';$my_month_hh = '<img src=/images/jijangan_img/gan_05.gif>';$my_oheng_month_h = '<font family=굴림 color=#f48e8e><b style="font-family:굴림;">土 . 토</b></font>';}
			if ($my_month_h == 'F') {$my_month_h = '己';$my_month_h_org = 'F';$my_month_hh = '<img src=/images/jijangan_img/gan_06.gif>';$my_oheng_month_h = '<font family=굴림 color=#858de0><b  style="font-family:굴림;">土 . 토</b></font>';}
			if ($my_month_h == 'G') {$my_month_h = '庚';$my_month_h_org = 'G';$my_month_hh = '<img src=/images/jijangan_img/gan_07.gif>';$my_oheng_month_h = '<font family=굴림 color=#f48e8e><b  style="font-family:굴림;">金 . 금</b></font>';}
			if ($my_month_h == 'H') {$my_month_h = '辛';$my_month_h_org = 'H';$my_month_hh = '<img src=/images/jijangan_img/gan_08.gif>';$my_oheng_month_h = '<font family=굴림 color=#858de0><b  style="font-family:굴림;">金 . 금</b></font>';}
			if ($my_month_h == 'I') {$my_month_h = '壬';$my_month_h_org = 'I';$my_month_hh = '<img src=/images/jijangan_img/gan_09.gif>';$my_oheng_month_h = '<font family=굴림 color=#f48e8e><b  style="font-family:굴림;">水 . 수</b></font>';}
			if ($my_month_h == 'J') {$my_month_h = '癸';$my_month_h_org = 'J';$my_month_hh = '<img src=/images/jijangan_img/gan_10.gif>';$my_oheng_month_h = '<font family=굴림 color=#858de0><b  style="font-family:굴림;">水 . 수</b></font>';}

########자시를 기준으로 일간지가 다음날로 바뀜######################################
			$member_hour_min = $request_hour.$request_min;

			If($member_hour_min == ""){$member_hour_min = $request_hour.$request_min;}
			If($member_hour_min == "0000"){$member_hour_min = "2400";}

			$member_hour_min = (Int)$member_hour_min;

			if ($member_hour_min < 30){$my_hour_check = '子'; $my_hour_check_1 = '수정';  }

			if (($my_day_h == 'C') && ($my_hour_check_1 == '수정')) {$my_day_h = '乙';$my_day_h_org = 'B';$my_day_hh = '<img src=/images/jijangan_img/gan_02.gif>';$my_oheng_day_h = '<font color=#858de0><b style="font-family:굴림;">木 . 목</b></font>';}
			if (($my_day_h == 'D') && ($my_hour_check_1 == '수정'))  {$my_day_h = '丙';$my_day_h_org = 'C';$my_day_hh = '<img src=/images/jijangan_img/gan_03.gif>';$my_oheng_day_h = '<font color=#f48e8e><b style="font-family:굴림;">火 . 화</b></font>';}
			if (($my_day_h == 'E') && ($my_hour_check_1 == '수정'))  {$my_day_h = '丁';$my_day_h_org = 'D';$my_day_hh = '<img src=/images/jijangan_img/gan_04.gif>';$my_oheng_day_h = '<font color=#858de0><b style="font-family:굴림;">火 . 화</b></font>';}
			if (($my_day_h == 'F') && ($my_hour_check_1 == '수정'))  {$my_day_h = '戊';$my_day_h_org = 'E';$my_day_hh = '<img src=/images/jijangan_img/gan_05.gif>';$my_oheng_day_h = '<font color=#f48e8e><b style="font-family:굴림;">土 . 토</b></font>';}
			if (($my_day_h == 'G') && ($my_hour_check_1 == '수정'))  {$my_day_h = '己';$my_day_h_org = 'F';$my_day_hh = '<img src=/images/jijangan_img/gan_06.gif>';$my_oheng_day_h = '<font color=#858de0><b style="font-family:굴림;">土 . 토</b></font>';}
			if (($my_day_h == 'H') && ($my_hour_check_1 == '수정'))  {$my_day_h = '庚';$my_day_h_org = 'G';$my_day_hh = '<img src=/images/jijangan_img/gan_07.gif>';$my_oheng_day_h = '<font color=#f48e8e><b style="font-family:굴림;">金 . 금</b></font>';}
			if (($my_day_h == 'I') && ($my_hour_check_1 == '수정'))  {$my_day_h = '辛';$my_day_h_org = 'H';$my_day_hh = '<img src=/images/jijangan_img/gan_08.gif>';$my_oheng_day_h = '<font color=#858de0><b style="font-family:굴림;">金 . 금</b></font>';}
			if (($my_day_h == 'J') && ($my_hour_check_1 == '수정'))  {$my_day_h = '壬';$my_day_h_org = 'I';$my_day_hh = '<img src=/images/jijangan_img/gan_09.gif>';$my_oheng_day_h = '<font color=#f48e8e><b style="font-family:굴림;">水 . 수</b></font>';}
			if (($my_day_h == 'A') && ($my_hour_check_1 == '수정'))  {$my_day_h = '癸';$my_day_h_org = 'J';$my_day_hh = '<img src=/images/jijangan_img/gan_10.gif>';$my_oheng_day_h = '<font color=#858de0><b style="font-family:굴림;">水 . 수</b></font>';}
			if (($my_day_h == 'B') && ($my_hour_check_1 == '수정'))  {$my_day_h = '甲';$my_day_h_org = 'A';$my_day_hh = '<img src=/images/jijangan_img/gan_01.gif>';$my_oheng_day_h = '<font color=#f48e8e><b style="font-family:굴림;">木 . 목</b></font>';}

			if ($member_hour_min >= 2330){$my_hour_check = '子';}

			//echo "$member_hour_min/$my_day_e/$my_hour_check_1";


			if (($my_day_h == 'A') && ($my_hour_check_1 == '')) {$my_day_h = '甲';$my_day_h_org = 'A';$my_day_hh = '<img src=/images/jijangan_img/gan_01.gif>';$my_oheng_day_h = '<font color=#f48e8e><b style="font-family:굴림;">木 . 목</b></font>';}
			if (($my_day_h == 'B') && ($my_hour_check_1 == ''))  {$my_day_h = '乙';$my_day_h_org = 'B';$my_day_hh = '<img src=/images/jijangan_img/gan_02.gif>';$my_oheng_day_h = '<font color=#858de0><b style="font-family:굴림;">木 . 목</b></font>';}
			if (($my_day_h == 'C') && ($my_hour_check_1 == ''))  {$my_day_h = '丙';$my_day_h_org = 'C';$my_day_hh = '<img src=/images/jijangan_img/gan_03.gif>';$my_oheng_day_h = '<font color=#f48e8e><b style="font-family:굴림;">火 . 화</b></font>';}
			if (($my_day_h == 'D') && ($my_hour_check_1 == ''))  {$my_day_h = '丁';$my_day_h_org = 'D';$my_day_hh = '<img src=/images/jijangan_img/gan_04.gif>';$my_oheng_day_h = '<font color=#858de0><b style="font-family:굴림;">火 . 화</b></font>';}
			if (($my_day_h == 'E') && ($my_hour_check_1 == ''))  {$my_day_h = '戊';$my_day_h_org = 'E';$my_day_hh = '<img src=/images/jijangan_img/gan_05.gif>';$my_oheng_day_h = '<font color=#f48e8e><b style="font-family:굴림;">土 . 토</b></font>';}
			if (($my_day_h == 'F') && ($my_hour_check_1 == ''))  {$my_day_h = '己';$my_day_h_org = 'F';$my_day_hh = '<img src=/images/jijangan_img/gan_06.gif>';$my_oheng_day_h = '<font color=#858de0><b style="font-family:굴림;">土 . 토</b></font>';}
			if (($my_day_h == 'G') && ($my_hour_check_1 == ''))  {$my_day_h = '庚';$my_day_h_org = 'G';$my_day_hh = '<img src=/images/jijangan_img/gan_07.gif>';$my_oheng_day_h = '<font color=#f48e8e><b style="font-family:굴림;">金 . 금</b></font>';}
			if (($my_day_h == 'H') && ($my_hour_check_1 == ''))  {$my_day_h = '辛';$my_day_h_org = 'H';$my_day_hh = '<img src=/images/jijangan_img/gan_08.gif>';$my_oheng_day_h = '<font color=#858de0><b style="font-family:굴림;">金 . 금</b></font>';}
			if (($my_day_h == 'I') && ($my_hour_check_1 == ''))  {$my_day_h = '壬';$my_day_h_org = 'I';$my_day_hh = '<img src=/images/jijangan_img/gan_09.gif>';$my_oheng_day_h = '<font color=#f48e8e><b style="font-family:굴림;">水 . 수</b></font>';}
			if (($my_day_h == 'J') && ($my_hour_check_1 == ''))  {$my_day_h = '癸';$my_day_h_org = 'J';$my_day_hh = '<img src=/images/jijangan_img/gan_10.gif>';$my_oheng_day_h = '<font color=#858de0><b style="font-family:굴림;">水 . 수</b></font>';}





############################################################################################

			if ($my_year_e == '01') {$my_year_e = '寅';$my_year_e_org = '01';$my_year_ee = '<img src=/images/jijangan_img/ji_01.gif>';$my_oheng_year_e = '<font color=#f48e8e><b style="font-family:굴림;">木 . 목</b></font>';$jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_year10 = '무';$jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$jijanggan_year20 = '병';$jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$jijanggan_year30 = '갑';}
			if ($my_year_e == '02') {$my_year_e = '卯';$my_year_e_org = '02';$my_year_ee = '<img src=/images/jijangan_img/ji_02.gif>';$my_oheng_year_e = '<font color=#858de0><b style="font-family:굴림;">木 . 목</b></font>';$jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$jijanggan_year10 = '갑';$jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$jijanggan_year20 = '';$jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$jijanggan_year30 = '을';}
			if ($my_year_e == '03') {$my_year_e = '辰';$my_year_e_org = '03';$my_year_ee = '<img src=/images/jijangan_img/ji_03.gif>';$my_oheng_year_e = '<font color=#f48e8e><b style="font-family:굴림;">土 . 토</b></font>';$jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$jijanggan_year10 = '을';$jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$jijanggan_year20 = '계';$jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_year30 = '무';}
			if ($my_year_e == '04') {$my_year_e = '巳';$my_year_e_org = '04';$my_year_ee = '<img src=/images/jijangan_img/ji_04.gif>';$my_oheng_year_e = '<font color=#f48e8e><b style="font-family:굴림;">火 . 화</b></font>';$jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_year10 = '무';$jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$jijanggan_year20 = '경';$jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$jijanggan_year30 = '병';}
			if ($my_year_e == '05') {$my_year_e = '午';$my_year_e_org = '05';$my_year_ee = '<img src=/images/jijangan_img/ji_05.gif>';$my_oheng_year_e = '<font color=#858de0><b style="font-family:굴림;">火 . 화</b></font>';$jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$jijanggan_year10 = '병';$jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_06.gif>';$jijanggan_year20 = '기';$jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$jijanggan_year30 = '정';}
			if ($my_year_e == '06') {$my_year_e = '未';$my_year_e_org = '06';$my_year_ee = '<img src=/images/jijangan_img/ji_06.gif>';$my_oheng_year_e = '<font color=#858de0><b style="font-family:굴림;">土 . 토</b></font>';$jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$jijanggan_year10 = '정';$jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$jijanggan_year20 = '을';$jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_06.gif>';$jijanggan_year30 = '기';}
			if ($my_year_e == '07') {$my_year_e = '申';$my_year_e_org = '07';$my_year_ee = '<img src=/images/jijangan_img/ji_07.gif>';$my_oheng_year_e = '<font color=#f48e8e><b style="font-family:굴림;">金 . 금</b></font>';$jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_year10 = '무';$jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$jijanggan_year20 = '임';$jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$jijanggan_year30 = '경';}
			if ($my_year_e == '08') {$my_year_e = '酉';$my_year_e_org = '08';$my_year_ee = '<img src=/images/jijangan_img/ji_08.gif>';$my_oheng_year_e = '<font color=#858de0><b style="font-family:굴림;">金 . 금</b></font>';$jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$jijanggan_year10 = '경';$jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$jijanggan_year20 = '';$jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$jijanggan_year30 = '신';}
			if ($my_year_e == '09') {$my_year_e = '戌';$my_year_e_org = '09';$my_year_ee = '<img src=/images/jijangan_img/ji_09.gif>';$my_oheng_year_e = '<font color=#f48e8e><b style="font-family:굴림;">土 . 토</b></font>';$jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$jijanggan_year10 = '신';$jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$jijanggan_year20 = '정';$jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_year30 = '무';}
			if ($my_year_e == '10') {$my_year_e = '亥';$my_year_e_org = '10';$my_year_ee = '<img src=/images/jijangan_img/ji_10.gif>';$my_oheng_year_e = '<font color=#f48e8e><b style="font-family:굴림;">水 . 수</b></font>';$jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_year10 = '무';$jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$jijanggan_year20 = '갑';$jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$jijanggan_year30 = '임';}
			if ($my_year_e == '11') {$my_year_e = '子';$my_year_e_org = '11';$my_year_ee = '<img src=/images/jijangan_img/ji_11.gif>';$my_oheng_year_e = '<font color=#858de0><b style="font-family:굴림;">水 . 수</b></font>';$jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$jijanggan_year10 = '임';$jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$jijanggan_year20 = '';$jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$jijanggan_year30 = '계';}
			if ($my_year_e == '12') {$my_year_e = '丑';$my_year_e_org = '12';$my_year_ee = '<img src=/images/jijangan_img/ji_12.gif>';$my_oheng_year_e = '<font color=#858de0><b style="font-family:굴림;">土 . 토</b></font>';$jijanggan_year1 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$jijanggan_year10 = '계';$jijanggan_year2 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$jijanggan_year20 = '신';$jijanggan_year3 = '<img src=/images/jijangan_img/jijanggan_06.gif>';$jijanggan_year30 = '기';}

			if ($my_month_e == '01') {$my_month_e = '寅';$my_month_e_org = '01';$my_month_ee = '<img src=/images/jijangan_img/ji_01.gif>';$my_oheng_month_e = '<font color=#f48e8e><b style="font-family:굴림;">木 . 목</b></font>';$jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_month10 = '무';$jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$jijanggan_month20 = '병';$jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$jijanggan_month30 = '갑';}
			if ($my_month_e == '02') {$my_month_e = '卯';$my_month_e_org = '02';$my_month_ee = '<img src=/images/jijangan_img/ji_02.gif>';$my_oheng_month_e = '<font color=#858de0><b style="font-family:굴림;">木 . 목</b></font>';$jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$jijanggan_month10 = '갑';$jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$jijanggan_month20 = '';$jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$jijanggan_month30 = '을';}
			if ($my_month_e == '03') {$my_month_e = '辰';$my_month_e_org = '03';$my_month_ee = '<img src=/images/jijangan_img/ji_03.gif>';$my_oheng_month_e = '<font color=#f48e8e><b style="font-family:굴림;">土 . 토</b></font>';$jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$jijanggan_month10 = '을';$jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$jijanggan_month20 = '계';$jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_month30 = '무';}
			if ($my_month_e == '04') {$my_month_e = '巳';$my_month_e_org = '04';$my_month_ee = '<img src=/images/jijangan_img/ji_04.gif>';$my_oheng_month_e = '<font color=#f48e8e><b style="font-family:굴림;">火 . 화</b></font>';$jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_month10 = '무';$jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$jijanggan_month20 = '경';$jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$jijanggan_month30 = '병';}
			if ($my_month_e == '05') {$my_month_e = '午';$my_month_e_org = '05';$my_month_ee = '<img src=/images/jijangan_img/ji_05.gif>';$my_oheng_month_e = '<font color=#858de0><b style="font-family:굴림;">火 . 화</b></font>';$jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$jijanggan_month10 = '병';$jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_06.gif>';$jijanggan_month20 = '기';$jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$jijanggan_month30 = '정';}
			if ($my_month_e == '06') {$my_month_e = '未';$my_month_e_org = '06';$my_month_ee = '<img src=/images/jijangan_img/ji_06.gif>';$my_oheng_month_e = '<font color=#858de0><b style="font-family:굴림;">土 . 토</b></font>';$jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$jijanggan_month10 = '정';$jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$jijanggan_month20 = '을';$jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_06.gif>';$jijanggan_month30 = '기';}
			if ($my_month_e == '07') {$my_month_e = '申';$my_month_e_org = '07';$my_month_ee = '<img src=/images/jijangan_img/ji_07.gif>';$my_oheng_month_e = '<font color=#f48e8e><b style="font-family:굴림;">金 . 금</b></font>';$jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_month10 = '무';$jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$jijanggan_month20 = '임';$jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$jijanggan_month30 = '경';}
			if ($my_month_e == '08') {$my_month_e = '酉';$my_month_e_org = '08';$my_month_ee = '<img src=/images/jijangan_img/ji_08.gif>';$my_oheng_month_e = '<font color=#858de0><b style="font-family:굴림;">金 . 금</b></font>';$jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$jijanggan_month10 = '경';$jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$jijanggan_month20 = '';$jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$jijanggan_month30 = '신';}
			if ($my_month_e == '09') {$my_month_e = '戌';$my_month_e_org = '09';$my_month_ee = '<img src=/images/jijangan_img/ji_09.gif>';$my_oheng_month_e = '<font color=#f48e8e><b style="font-family:굴림;">土 . 토</b></font>';$jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$jijanggan_month10 = '신';$jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$jijanggan_month20 = '정';$jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_month30 = '무';}
			if ($my_month_e == '10') {$my_month_e = '亥';$my_month_e_org = '10';$my_month_ee = '<img src=/images/jijangan_img/ji_10.gif>';$my_oheng_month_e = '<font color=#f48e8e><b style="font-family:굴림;">水 . 수</b></font>';$jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_month10 = '무';$jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$jijanggan_month20 = '갑';$jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$jijanggan_month30 = '임';}
			if ($my_month_e == '11') {$my_month_e = '子';$my_month_e_org = '11';$my_month_ee = '<img src=/images/jijangan_img/ji_11.gif>';$my_oheng_month_e = '<font color=#858de0><b style="font-family:굴림;">水 . 수</b></font>';$jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$jijanggan_month10 = '임';$jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$jijanggan_month20 = '';$jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$jijanggan_month30 = '계';}
			if ($my_month_e == '12') {$my_month_e = '丑';$my_month_e_org = '12';$my_month_ee = '<img src=/images/jijangan_img/ji_12.gif>';$my_oheng_month_e = '<font color=#858de0><b style="font-family:굴림;">土 . 토</b></font>';$jijanggan_month1 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$jijanggan_month10 = '계';$jijanggan_month2 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$jijanggan_month20 = '신';$jijanggan_month3 = '<img src=/images/jijangan_img/jijanggan_06.gif>';$jijanggan_month30 = '기';}

########자시를 기준으로 일간지가 다음날로 바뀜######################################

			if (($my_day_e == '01') && ($my_hour_check_1 == ''))  {$my_day_e = '寅';$my_day_e_org = '01';$my_day_ee = '<img src=/images/jijangan_img/ji_01.gif>';$my_oheng_day_e = '<font color=#f48e8e><b style="font-family:굴림;">木 . 목</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_day10 = '무';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$jijanggan_day20 = '병';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$jijanggan_day30 = '갑';}
			if (($my_day_e == '02') && ($my_hour_check_1 == ''))  {$my_day_e = '卯';$my_day_e_org = '02';$my_day_ee = '<img src=/images/jijangan_img/ji_02.gif>';$my_oheng_day_e = '<font color=#858de0><b style="font-family:굴림;">木 . 목</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$jijanggan_day10 = '갑';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$jijanggan_day20 = '';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$jijanggan_day30 = '을';}
			if (($my_day_e == '03') && ($my_hour_check_1 == ''))  {$my_day_e = '辰';$my_day_e_org = '03';$my_day_ee = '<img src=/images/jijangan_img/ji_03.gif>';$my_oheng_day_e = '<font color=#f48e8e><b style="font-family:굴림;">土 . 토</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$jijanggan_day10 = '을';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$jijanggan_day20 = '계';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_day30 = '무';}
			if (($my_day_e == '04') && ($my_hour_check_1 == ''))  {$my_day_e = '巳';$my_day_e_org = '04';$my_day_ee = '<img src=/images/jijangan_img/ji_04.gif>';$my_oheng_day_e = '<font color=#f48e8e><b style="font-family:굴림;">火 . 화</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_day10 = '무';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$jijanggan_day20 = '경';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$jijanggan_day30 = '병';}
			if (($my_day_e == '05') && ($my_hour_check_1 == ''))  {$my_day_e = '午';$my_day_e_org = '05';$my_day_ee = '<img src=/images/jijangan_img/ji_05.gif>';$my_oheng_day_e = '<font color=#858de0><b style="font-family:굴림;">火 . 화</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$jijanggan_day10 = '병';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_06.gif>';$jijanggan_day20 = '기';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$jijanggan_day30 = '정';}
			if (($my_day_e == '06') && ($my_hour_check_1 == ''))  {$my_day_e = '未';$my_day_e_org = '06';$my_day_ee = '<img src=/images/jijangan_img/ji_06.gif>';$my_oheng_day_e = '<font color=#858de0><b style="font-family:굴림;">土 . 토</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$jijanggan_day10 = '정';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$jijanggan_day20 = '을';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_06.gif>';$jijanggan_day30 = '기';}
			if (($my_day_e == '07') && ($my_hour_check_1 == ''))  {$my_day_e = '申';$my_day_e_org = '07';$my_day_ee = '<img src=/images/jijangan_img/ji_07.gif>';$my_oheng_day_e = '<font color=#f48e8e><b style="font-family:굴림;">金 . 금</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_day10 = '무';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$jijanggan_day20 = '임';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$jijanggan_day30 = '경';}
			if (($my_day_e == '08') && ($my_hour_check_1 == ''))  {$my_day_e = '酉';$my_day_e_org = '08';$my_day_ee = '<img src=/images/jijangan_img/ji_08.gif>';$my_oheng_day_e = '<font color=#858de0><b style="font-family:굴림;">金 . 금</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$jijanggan_day10 = '경';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$jijanggan_day20 = '';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$jijanggan_day30 = '신';}
			if (($my_day_e == '09') && ($my_hour_check_1 == ''))  {$my_day_e = '戌';$my_day_e_org = '09';$my_day_ee = '<img src=/images/jijangan_img/ji_09.gif>';$my_oheng_day_e = '<font color=#f48e8e><b style="font-family:굴림;">土 . 토</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$jijanggan_day10 = '신';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$jijanggan_day20 = '정';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_day30 = '무';}
			if (($my_day_e == '10') && ($my_hour_check_1 == ''))  {$my_day_e = '亥';$my_day_e_org = '10';$my_day_ee = '<img src=/images/jijangan_img/ji_10.gif>';$my_oheng_day_e = '<font color=#f48e8e><b style="font-family:굴림;">水 . 수</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_day10 = '무';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$jijanggan_day20 = '갑';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$jijanggan_day30 = '임';}
			if (($my_day_e == '11') && ($my_hour_check_1 == ''))  {$my_day_e = '子';$my_day_e_org = '11';$my_day_ee = '<img src=/images/jijangan_img/ji_11.gif>';$my_oheng_day_e = '<font color=#858de0><b style="font-family:굴림;">水 . 수</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$jijanggan_day10 = '임';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$jijanggan_day20 = '';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$jijanggan_day30 = '계';}
			if (($my_day_e == '12') && ($my_hour_check_1 == ''))  {$my_day_e = '丑';$my_day_e_org = '12';$my_day_ee = '<img src=/images/jijangan_img/ji_12.gif>';$my_oheng_day_e = '<font color=#858de0><b style="font-family:굴림;">土 . 토</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$jijanggan_day10 = '계';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$jijanggan_day20 = '신';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_06.gif>';$jijanggan_day30 = '기';}


			if (($my_day_e == '03') && ($my_hour_check_1 == '수정'))  {$my_day_e = '卯';$my_day_e_org = '02';$my_day_ee = '<img src=/images/jijangan_img/ji_02.gif>';$my_oheng_day_e = '<font color=#858de0><b style="font-family:굴림;">木 . 목</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$jijanggan_day10 = '갑';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$jijanggan_day20 = '';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$jijanggan_day30 = '을';}
			if (($my_day_e == '04') && ($my_hour_check_1 == '수정'))  {$my_day_e = '辰';$my_day_e_org = '03';$my_day_ee = '<img src=/images/jijangan_img/ji_03.gif>';$my_oheng_day_e = '<font color=#f48e8e><b style="font-family:굴림;">土 . 토</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$jijanggan_day10 = '을';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$jijanggan_day20 = '계';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_day30 = '무';}
			if (($my_day_e == '05') && ($my_hour_check_1 == '수정'))  {$my_day_e = '巳';$my_day_e_org = '04';$my_day_ee = '<img src=/images/jijangan_img/ji_04.gif>';$my_oheng_day_e = '<font color=#f48e8e><b style="font-family:굴림;">火 . 화</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_day10 = '무';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$jijanggan_day20 = '경';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$jijanggan_day30 = '병';}
			if (($my_day_e == '06') && ($my_hour_check_1 == '수정'))  {$my_day_e = '午';$my_day_e_org = '05';$my_day_ee = '<img src=/images/jijangan_img/ji_05.gif>';$my_oheng_day_e = '<font color=#858de0><b style="font-family:굴림;">火 . 화</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$jijanggan_day10 = '병';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_06.gif>';$jijanggan_day20 = '기';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$jijanggan_day30 = '정';}
			if (($my_day_e == '07') && ($my_hour_check_1 == '수정'))  {$my_day_e = '未';$my_day_e_org = '06';$my_day_ee = '<img src=/images/jijangan_img/ji_06.gif>';$my_oheng_day_e = '<font color=#858de0><b style="font-family:굴림;">土 . 토</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$jijanggan_day10 = '정';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$jijanggan_day20 = '을';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_06.gif>';$jijanggan_day30 = '기';}
			if (($my_day_e == '08') && ($my_hour_check_1 == '수정'))  {$my_day_e = '申';$my_day_e_org = '07';$my_day_ee = '<img src=/images/jijangan_img/ji_07.gif>';$my_oheng_day_e = '<font color=#f48e8e><b style="font-family:굴림;">金 . 금</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_day10 = '무';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$jijanggan_day20 = '임';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$jijanggan_day30 = '경';}
			if (($my_day_e == '09') && ($my_hour_check_1 == '수정'))  {$my_day_e = '酉';$my_day_e_org = '08';$my_day_ee = '<img src=/images/jijangan_img/ji_08.gif>';$my_oheng_day_e = '<font color=#858de0><b style="font-family:굴림;">金 . 금</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$jijanggan_day10 = '경';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$jijanggan_day20 = '';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$jijanggan_day30 = '신';}
			if (($my_day_e == '10') && ($my_hour_check_1 == '수정'))  {$my_day_e = '戌';$my_day_e_org = '09';$my_day_ee = '<img src=/images/jijangan_img/ji_09.gif>';$my_oheng_day_e = '<font color=#f48e8e><b style="font-family:굴림;">土 . 토</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$jijanggan_day10 = '신';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$jijanggan_day20 = '정';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_day30 = '무';}
			if (($my_day_e == '11') && ($my_hour_check_1 == '수정'))  {$my_day_e = '亥';$my_day_e_org = '10';$my_day_ee = '<img src=/images/jijangan_img/ji_10.gif>';$my_oheng_day_e = '<font color=#f48e8e><b style="font-family:굴림;">水 . 수</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_day10 = '무';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$jijanggan_day20 = '갑';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$jijanggan_day30 = '임';}
			if (($my_day_e == '12') && ($my_hour_check_1 == '수정'))  {$my_day_e = '子';$my_day_e_org = '11';$my_day_ee = '<img src=/images/jijangan_img/ji_11.gif>';$my_oheng_day_e = '<font color=#858de0><b style="font-family:굴림;">水 . 수</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$jijanggan_day10 = '임';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$jijanggan_day20 = '';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$jijanggan_day30 = '계';}
			if (($my_day_e == '01') && ($my_hour_check_1 == '수정'))  {$my_day_e = '丑';$my_day_e_org = '12';$my_day_ee = '<img src=/images/jijangan_img/ji_12.gif>';$my_oheng_day_e = '<font color=#858de0><b style="font-family:굴림;">土 . 토</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$jijanggan_day10 = '계';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$jijanggan_day20 = '신';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_06.gif>';$jijanggan_day30 = '기';}
			if (($my_day_e == '02') && ($my_hour_check_1 == '수정'))  {$my_day_e = '寅';$my_day_e_org = '01';$my_day_ee = '<img src=/images/jijangan_img/ji_01.gif>';$my_oheng_day_e = '<font color=#f48e8e><b style="font-family:굴림;">木 . 목</b></font>';$jijanggan_day1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_day10 = '무';$jijanggan_day2 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$jijanggan_day20 = '병';$jijanggan_day3 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$jijanggan_day30 = '갑';}


#############################################################################################


			$member_hour_min = $request_hour.$request_min;

			If($member_hour_min == ""){$member_hour_min = $request_hour.$request_min;}

			$member_hour_min = (int)$member_hour_min;

			//if($member_hour_min == 0){$member_hour_min = 500;}


If((Int)$my_jeolip != 0){
	$member_hour_min = (Int)$member_hour_min;// + 200;
}Else{
	$member_hour_min = (Int)$member_hour_min;
} 


			if ($member_hour_min < 30){$my_hour_e = '子';$my_hour_e_org = '11';$my_hour_ee = '<img src=/images/jijangan_img/ji_11.gif>'; $s = '0'; $kk = 'check'; $my_oheng_hour_e = '<font color=#858de0><b style="font-family:굴림;">水 . 수</b></font>';$jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$jijanggan_hour10 = '임';$jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$jijanggan_hour20 = '';$jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$jijanggan_hour30 = '계';}
			if (($member_hour_min > 29)&&($member_hour_min < 130)){$my_hour_e = '子';$my_hour_e_org = '11';$my_hour_ee = '<img src=/images/jijangan_img/ji_11.gif>'; $s = '0';$my_oheng_hour_e = '<font color=#858de0><b style="font-family:굴림;">水 . 수</b></font>';$jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$jijanggan_hour10 = '임';$jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$jijanggan_hour20 = '';$jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$jijanggan_hour30 = '계';}


			if ($member_hour_min >= 2330){$my_hour_e = '子';$my_hour_e_org = '11';$my_hour_ee = '<img src=/images/jijangan_img/ji_11.gif>'; $s = '0';$kk = 'check';$my_oheng_hour_e = '<font color=#858de0><b style="font-family:굴림;">水 . 수</b></font>';$jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$jijanggan_hour10 = '임';$jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$jijanggan_hour20 = '';$jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$jijanggan_hour30 = '계';}

			if (($member_hour_min >=130) && ($member_hour_min < 330)) {$my_hour_e = '丑';$my_hour_e_org = '12';$my_hour_ee = '<img src=/images/jijangan_img/ji_12.gif>'; $s = '1';$my_oheng_hour_e = '<font color=#858de0><b style="font-family:굴림;">土 . 토</b></font>';$jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$jijanggan_hour10 = '계';$jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$jijanggan_hour20 = '신';$jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_06.gif>';$jijanggan_hour30 = '기';}
                        if (($member_hour_min >=330) && ($member_hour_min < 530)) {$my_hour_e = '寅';$my_hour_e_org = '01';$my_hour_ee = '<img src=/images/jijangan_img/ji_01.gif>'; $s = '2';$my_oheng_hour_e = '<font color=#f48e8e><b style="font-family:굴림;">木 .  목</b></font>';$jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_hour10 = '무';$jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$jijanggan_hour20 = '병';$jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$jijanggan_hour30 = '갑';}
                        if (($member_hour_min >=530) && ($member_hour_min < 730)) {$my_hour_e = '卯';$my_hour_e_org = '02';$my_hour_ee = '<img src=/images/jijangan_img/ji_02.gif>'; $s = '3';$my_oheng_hour_e = '<font color=#858de0><b style="font-family:굴림;">木 .  목</b></font>';$jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$jijanggan_hour10 = '갑';$jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$jijanggan_hour20 = '';$jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$jijanggan_hour30 = '을';}
                        if (($member_hour_min >=730) && ($member_hour_min < 930)) {$my_hour_e = '辰';$my_hour_e_org = '03';$my_hour_ee = '<img src=/images/jijangan_img/ji_03.gif>';$s = '4';$my_oheng_hour_e = '<font color=#f48e8e><b style="font-family:굴림;">土 . 토</b></font>';$jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$jijanggan_hour10 = '을';$jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_10.gif>';$jijanggan_hour20 = '계';$jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_hour30 = '무';}
                        if (($member_hour_min > 930) && ($member_hour_min < 1130)) {$my_hour_e = '巳';$my_hour_e_org = '04';$my_hour_ee = '<img src=/images/jijangan_img/ji_04.gif>';$s = '5';$my_oheng_hour_e = '<font color=#f48e8e><b style="font-family:굴림;">火 . 화</b></font>';$jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_hour10 = '무';$jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$jijanggan_hour20 = '경';$jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$jijanggan_hour30 = '병';}
                        if (($member_hour_min >=1130) && ($member_hour_min < 1330)) {$my_hour_e = '午';$my_hour_e_org = '05';$my_hour_ee = '<img src=/images/jijangan_img/ji_05.gif>'; $s = '6';$my_oheng_hour_e = '<font color=#858de0><b style="font-family:굴림;">火 . 화</b></font>';$jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_03.gif>';$jijanggan_hour10 = '병';$jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_06.gif>';$jijanggan_hour20 = '기';$jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$jijanggan_hour30 = '정';}
                        if (($member_hour_min >=1330) && ($member_hour_min < 1530)) {$my_hour_e = '未';$my_hour_e_org = '06';$my_hour_ee = '<img src=/images/jijangan_img/ji_06.gif>';$s = '7';$my_oheng_hour_e = '<font color=#858de0><b style="font-family:굴림;">土 . 토</b></font>';$jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$jijanggan_hour10 = '정';$jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_02.gif>';$jijanggan_hour20 = '을';$jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_06.gif>';$jijanggan_hour30 = '기';}
                        if (($member_hour_min >=1530) && ($member_hour_min < 1730)) {$my_hour_e = '申';$my_hour_e_org = '07';$my_hour_ee = '<img src=/images/jijangan_img/ji_07.gif>';$s = '8';$my_oheng_hour_e = '<font color=#f48e8e><b style="font-family:굴림;">金 . 금</b></font>';$jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_hour10 = '무';$jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$jijanggan_hour20 = '임';$jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$jijanggan_hour30 = '경';}
                        if (($member_hour_min >=1730) && ($member_hour_min < 1930)) {$my_hour_e = '酉';$my_hour_e_org = '08';$my_hour_ee = '<img src=/images/jijangan_img/ji_08.gif>';$s = '9';$my_oheng_hour_e = '<font color=#858de0><b style="font-family:굴림;">金 . 금</b></font>';$jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_07.gif>';$jijanggan_hour10 = '경';$jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_00.gif>';$jijanggan_hour20 = '';$jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$jijanggan_hour30 = '신';}
                        if (($member_hour_min >=1930) && ($member_hour_min < 2130)) {$my_hour_e = '戌';$my_hour_e_org = '09';$my_hour_ee = '<img src=/images/jijangan_img/ji_09.gif>'; $s = '10';$my_oheng_hour_e = '<font color=#f48e8e><b style="font-family:굴림;">土 . 토</b></font>';$jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_08.gif>';$jijanggan_hour10 = '신';$jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_04.gif>';$jijanggan_hour20 = '정';$jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_hour30 = '무';}
                        if (($member_hour_min >=2130) && ($member_hour_min < 2330)) {$my_hour_e = '亥';$my_hour_e_org = '10';$my_hour_ee = '<img src=/images/jijangan_img/ji_10.gif>'; $s = '11';$my_oheng_hour_e = '<font color=#f48e8e><b style="font-family:굴림;">水 . 수</b></font>';$jijanggan_hour1 = '<img src=/images/jijangan_img/jijanggan_05.gif>';$jijanggan_hour10 = '무';$jijanggan_hour2 = '<img src=/images/jijangan_img/jijanggan_01.gif>';$jijanggan_hour20 = '갑';$jijanggan_hour3 = '<img src=/images/jijangan_img/jijanggan_09.gif>';$jijanggan_hour30 = '임';}


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

If((Int)$my_jeolip != 0){ 
	//$kk = "check"; 
	//$s = $s - 2; 

	//If($s <= 0){$s = 12 + $s;}
}Else{ 
	$kk = ""; 
	$s = $s;
} 

if ($kk=='check') {
		       if (($my_day_h == '甲') || ($my_day_h == '己')) {$my_hour_h = $bb[$s];$my_hour_hh = $bbbb[$s];}
		       if (($my_day_h == '乙') || ($my_day_h == '庚')) {$my_hour_h = $cc[$s];$my_hour_hh = $cccc[$s];}
		       if (($my_day_h == '丙') || ($my_day_h == '辛')) {$my_hour_h = $dd[$s];$my_hour_hh = $dddd[$s];}
		       if (($my_day_h == '丁') || ($my_day_h == '壬')) {$my_hour_h = $ee[$s];$my_hour_hh = $eeee[$s];}
		       if (($my_day_h == '戊') || ($my_day_h == '癸')) {$my_hour_h = $aa[$s];$my_hour_hh = $aaaa[$s];}
}
else{
		       if (($my_day_h == '甲') || ($my_day_h == '己')) {$my_hour_h = $aa[$s];$my_hour_hh = $aaaa[$s];}
		       if (($my_day_h == '乙') || ($my_day_h == '庚')) {$my_hour_h = $bb[$s];$my_hour_hh = $bbbb[$s];}
		       if (($my_day_h == '丙') || ($my_day_h == '辛')) {$my_hour_h = $cc[$s];$my_hour_hh = $cccc[$s];}
		       if (($my_day_h == '丁') || ($my_day_h == '壬')) {$my_hour_h = $dd[$s];$my_hour_hh = $dddd[$s];}
		       if (($my_day_h == '戊') || ($my_day_h == '癸')) {$my_hour_h = $ee[$s];$my_hour_hh = $eeee[$s];}
}

if ($my_hour_h == '甲') {$my_hour_h_org = 'A';$my_oheng_hour_h = '<font color=#f48e8e><b style="font-family:굴림;">木 .  목</b></font>';}
if ($my_hour_h == '乙') {$my_hour_h_org = 'B';$my_oheng_hour_h = '<font color=#858de0><b style="font-family:굴림;">木 .  목</b></font>';}
if ($my_hour_h == '丙') {$my_hour_h_org = 'C';$my_oheng_hour_h = '<font color=#f48e8e><b style="font-family:굴림;">火 . 화</b></font>';}
if ($my_hour_h == '丁') {$my_hour_h_org = 'D';$my_oheng_hour_h = '<font color=#858de0><b style="font-family:굴림;">火 . 화</b></font>';}
if ($my_hour_h == '戊') {$my_hour_h_org = 'E';$my_oheng_hour_h = '<font color=#f48e8e><b style="font-family:굴림;">土 . 토</b></font>';}
if ($my_hour_h == '己') {$my_hour_h_org = 'F';$my_oheng_hour_h = '<font color=#858de0><b style="font-family:굴림;">土 . 토</b></font>';}
if ($my_hour_h == '庚') {$my_hour_h_org = 'G';$my_oheng_hour_h = '<font color=#f48e8e><b style="font-family:굴림;">金 . 금</b></font>';}
if ($my_hour_h == '辛') {$my_hour_h_org = 'H';$my_oheng_hour_h = '<font color=#858de0><b style="font-family:굴림;">金 . 금</b></font>';}
if ($my_hour_h == '壬') {$my_hour_h_org = 'I';$my_oheng_hour_h = '<font color=#f48e8e><b style="font-family:굴림;">水 . 수</b></font>';}
if ($my_hour_h == '癸') {$my_hour_h_org = 'J';$my_oheng_hour_h = '<font color=#858de0><b style="font-family:굴림;">水 . 수</b></font>';}



#################################### 4기둥을 세움 끝 ####################################################################


if($monthgi==""){$monthgi=$my_month_e_org;}
if($daygan==""){$daygan=$my_day_e_org;}

?>

