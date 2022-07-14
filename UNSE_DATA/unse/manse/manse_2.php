<?include "../../db_connect/db_connect.php";?>
<?include "../../common/function.php";?>
<?include "../../common/requestBuffer.php";?>
<?include "../../solve/sajujowha.php";?>
<?include "../../solve/saju_made.php";?>
<?
$UNSE_TITLE = "음양력변환";
$title_var = "<a href='#1'><font color='#FFFFFF'><b>음양력변환</b></font></a>";
$puritime_data = "Y";
$o_manse_data = "Y";
$manse_data = "Y";
$ohang_data = "N";
$yukhyo_data = "N";


?>
<?include "../../common/include_top_c2.php";?>
<!-- 운세결과물 출력 시작 -->

						<table width="515" align="Center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
							<?S_SB_img("F027", $solution_var)?>
							<tr>
								<td style="<?=$fontcolor;?>"><BR>
<!-- ============================================================================================= -->
<?
if(($solunar == "lunar") && ($youn == "1")){$youn_disp = "윤";}

if($sex == "남"){
	$my_sex_title = "<img src=/images/jijangan_img/sex_man.gif>";
}Else{	
	$my_sex_title = "<img src=/images/jijangan_img/sex_women.gif>";
}

$yd = "<img src=/images/jijangan_img/yd.gif>";
$md = "<img src=/images/jijangan_img/md.gif>";
$dd = "<img src=/images/jijangan_img/dd.gif>";
$hd = "<img src=/images/jijangan_img/hd.gif>";
$born = "<img src=/images/jijangan_img/born.gif>";
?>
				<table border=0 cellspacing=1 cellpadding=15 bgcolor=AAAAAA align=center>
					<tr>
						<td bgcolor=f8f8f8 align=center>양력 <font color=blue><?=$solar_year?></font> 년 <font color=blue><?=$solar_month?></font> 월 <font color=blue><?=$solar_day?></font> 일 <font color=blue><?=$request_hour?></font> 시 <font color=blue><?=$request_min?></font> 분생</td>
					</tr>
					<tr>
						<td bgcolor=f8f8f8 align=center>음력 <font color=blue><?=$lunar_year?></font> 년 <font color=blue><?=$youn_disp?></font> <font color=blue><?=$lunar_month?></font> 월 <font color=blue><?=$lunar_day?></font> 일 <font color=blue><?=$request_hour?></font> 시 <font color=blue><?=$request_min?></font> 분생</td>
					</tr>
				</table>
<!-- ============================================================================================= -->
								</td>
							</tr>
							<?=$include_bottom_Top_c2;?>
						</table>
<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>