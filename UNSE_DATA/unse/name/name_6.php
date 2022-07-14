<?include "../../db_connect/db_connect.php";?>
<?include "../../common/function.php";?>
<?include "../../common/requestBuffer.php";?>
<?include "../../solve/sajujowha.php";?>
<?include "../../solve/saju_made.php";?>
<?include "../../solve/sinyaksingang.php";?>
<?

$UNSE_TITLE = "셀프용신작명";
$title_var = "<a href='#1'><font color='#FFFFFF'><b>셀프용신작명</b></font></a>";
$puritime_data = "Y";
$o_manse_data = "N";
$manse_data = "N";
$ohang_data = "N";
$yukhyo_data = "N";
$print_check = "N";
$user_name = "고객";

$action_var = "/UNSE_DATA/unse/name/name_6-2.php";
?>
<?include "../../common/include_top_c2.php";?>

<!-- 운세결과물 출력 시작 -->
						<table width="515" align="Center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
							<tR><td align="center"><A name="#1"><img src="/UNSE_DATA/images/c2_img/MB_img/27.jpg" width="505" height="144"></td></tr>
							<?S_SB_img("N001", $solution_var)?>
							<tr>
								<td style="<?=$fontcolor;?>"><?include "../../solve/N/N001_1.php";?></td>
							</tr>
							<?=$include_bottom_Top_C2;?>
						</table>
<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>