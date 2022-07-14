<?
If($puritime_data == "N"){
	$your_user_name = "고객";
	$your_umyang_text = "";
}Else{ 
	$your_user_name = $your_user_name;
	$your_umyang_text = "<font color='#3E3E3E'>양력&nbsp;".$your_date_str."&nbsp;".$your_time_str."&nbsp;&nbsp;/&nbsp;&nbsp;음력&nbsp;".$your_um_date_str."&nbsp;".$your_time_str ."</font>";
}

include "../../solve/12sinsal_your.php";
include "../../solve/12unsung_your.php";
include "../../solve/sipsin_your.php";
?>

<br>
				<table width="596" height="30" cellpadding="0" cellspacing="0" border="0">
					<tr><tD width="596" height="1" bgcolor="#CCCCCC" colspan="5"></td></tr>
					<tr>
						<td width="1" bgcolor="#CCCCCC"></td>
						<td width="100" height="28" align="Center" bgcolor="#F8F8F8"><b><font color="#3E3E3E"><?=$your_user_name?></font> 님</b></td>
						<td width="1" bgcolor="#CCCCCC"></td>
						<td width="493" height="28" style="padding-left:12px;"><?=$your_umyang_text?></td>
						<td width="1" bgcolor="#CCCCCC"></td>
					</tr>
					<tr><tD width="596" height="1" bgcolor="#CCCCCC" colspan="5"></td></tr>
				</table>	
                                               
                                                <br>

						<table width=596 border=0 cellspacing=1 cellpadding=3 align=center bgcolor=CCCCCC>
						
						<tr align=center> 
							<td bgcolor=ffbbbb width=93>사주</td>
							<td bgcolor=eecccc width=117>시주</td>
							<td bgcolor=eecccc width=117>일주</td>
							<td bgcolor=eecccc width=117>월주</td>
							<td bgcolor=eecccc width=117>년주</td>
							
						</tr>

						<tr align=center> 
							<td bgcolor=eecccc>천간</td>
							
							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$your_hour_hh?></td><td bgcolor=dddddd width="51"><?=$your_oheng_hour_h?></td></tr>
							    <tr align=center><td bgcolor=dddddd width="51"><?=$your_sin_hour_h?></td></tr>
							  </table>
							</td>

							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$your_day_hh?></td><td bgcolor=dddddd width="51"><?=$your_oheng_day_h?></td></tr>
							    <tr align=center><td bgcolor=dddddd width="51">일원</td></tr>
							  </table>
							</td>
							
							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$your_month_hh?></td><td bgcolor=dddddd width="51"><?=$your_oheng_month_h?></td></tr>
							    <tr align=center><td bgcolor=dddddd width="51"><?=$your_sin_month_h?></td></tr>
							  </table>
							</td>

							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$your_year_hh?></td><td bgcolor=dddddd width="51"><?=$your_oheng_year_h?></td></tr>
							    <tr align=center><td bgcolor=dddddd width="51"><?=$your_sin_year_h?></td></tr>
							  </table>
							</td>
							
						</tr>
						
						<tr align=center> 
							
							<td bgcolor=eecccc>지지</td>
							
							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$your_hour_ee?></td><td bgcolor=dddddd width="51"><?=$your_oheng_hour_e?></td></tr>
							    <tr align=center><td bgcolor=dddddd width="51"><?=$your_sin_hour_e?></td></tr>
							  </table>
							</td>

							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$your_day_ee?></td><td bgcolor=dddddd width="51"><?=$your_oheng_day_e?></td></tr>
							    <tr align=center><td bgcolor=dddddd width="51"><?=$your_sin_day_e?></td></tr>
							  </table>
							</td>
							
							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$your_month_ee?></td><td bgcolor=dddddd width="51"><?=$your_oheng_month_e?></td></tr>
							    <tr align=center><td bgcolor=dddddd width="51"><?=$your_sin_month_e?></td></tr>
							  </table>
							</td>

							<td bgcolor=FFFFFF>
							  <table width=100% border=0 cellspacing=0 cellpadding=0>
							    <tr align=center><td rowspan=2><?=$your_year_ee?></td><td bgcolor=dddddd width="51"><?=$your_oheng_year_e?></td></tr>
							    <tr align=center><td bgcolor=dddddd width="51"><?=$your_sin_year_e?></td></tr>
							  </table>
							</td>
							
						</tr>
						
						<tr align=center> 
							<td bgcolor=eecccc>지장간</td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_jijanggan_hour1?>&nbsp;<?=$your_jijanggan_hour2?>&nbsp;<?=$your_jijanggan_hour3?></font></td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_jijanggan_day1?>&nbsp;<?=$your_jijanggan_day2?>&nbsp;<?=$your_jijanggan_day3?></font></td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_jijanggan_month1?>&nbsp;<?=$your_jijanggan_month2?>&nbsp;<?=$your_jijanggan_month3?></font></td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_jijanggan_year1?>&nbsp;<?=$your_jijanggan_year2?>&nbsp;<?=$your_jijanggan_year3?></font></td>
							
						</tr>
						
						<tr align=center> 
							<td bgcolor=eecccc>십이운성</td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_star_hour?></font></td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_star_day?></font></td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_star_month?></font></td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_star_year?></font></td>
							
						</tr>
						
						<tr align=center> 
							<td bgcolor=eecccc>십이신살</td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_sal_hour?></font></td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_sal_day?></font></td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_sal_month?></font></td>
							<td bgcolor=FFFFFF><font color=666666><?=$your_sal_year?></font></td>
							
						</tr>
						
						</table>