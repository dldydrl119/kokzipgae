<?include "../../db_connect/db_connect.php";?>
<?include "../../common/function.php";?>
<?include "../../common/requestBuffer.php";?>
<?include "../../solve/sajujowha.php";?>
<?include "../../solve/saju_made.php";?>
<?include "../../solve/12sinsal.php";?>
<?include "../../solve/12unsung.php";?>
<?include "../../solve/sinyaksingang.php";?>
<?
$UNSE_TITLE = "이사택일";
$title_var = "<a href='#1'><font color='#FFFFFF'><b>이사택일</b></font></a>";
$puritime_data = "Y";
$o_manse_data = "Y";
$manse_data = "Y";
$ohang_data = "Y";
$yukhyo_data = "Y";
?>
<?include "../../common/include_top_c2.php";?>
<!-- 운세결과물 출력 시작 -->

						<table width="515" align="Center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
							<tR><td align="center"><A name="#1"><img src="/UNSE_DATA/images/c2_img/MB_img/83.jpg" width="505" height="144"></td></tr>
							<?S_SB_img("S112", $solution_var)?>
							<tr><td style="<?=$fontcolor;?>"><?include "../../solve/S/S112.php";?></td></tr>
							<?=$include_bottom_Top_B2;?>
						</table>
<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>