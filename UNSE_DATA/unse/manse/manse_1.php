<?include "../../db_connect/db_connect.php";?>
<?include "../../common/function.php";?>
<?include "../../common/requestBuffer.php";?>
<?include "../../solve/sajujowha.php";?>
<?include "../../solve/saju_made.php";?>
<?
$UNSE_TITLE = "사주명식";
$title_var = "<a href='#1'><font color='#FFFFFF'><b>사주명식</b></font></a>";
$puritime_data = "Y";
$o_manse_data = "Y";
$manse_data = "Y";
$ohang_data = "N";
$yukhyo_data = "N";
?>
<?include "../../common/include_top_c2.php";?>
<!-- 운세결과물 출력 시작 -->

						<table width="515" align="Center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
							<?S_SB_img("F029", $solution_var)?>
							<tr><td style="<?=$fontcolor;?>"><?include "../../solve/F/F029.php";?></td></tr>
							<?=$include_bottom_Top_c2;?>
						</table>
<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>