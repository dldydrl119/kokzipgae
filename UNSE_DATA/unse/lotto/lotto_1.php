<?include "../../db_connect/db_connect.php";?>
<?include "../../common/function.php";?>
<?include "../../common/requestBuffer.php";?>
<?include "../../solve/sajujowha.php";?>
<?include "../../solve/saju_made.php";?>
<?include "../../solve/sajujowha2.php";?>
<?include "../../solve/sinyaksingang.php";?>
<?include "../../solve/sipsin_c.php";?>
<?
$UNSE_TITLE = "로또번호운세";
$title_var = "<a href='#1'><font color='#FFFFFF'><b>로또번호운세</b></font></a>";
$puritime_data = "Y";
$o_manse_data = "N";
$manse_data = "N";
$ohang_data = "N";
$yukhyo_data = "N";

?>
<?include "../../common/include_top_c2.php";?>
<!-- 운세결과물 출력 시작 -->

<?include "../../solve/S/S042.php";?>
						<table width="515" align="Center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
							<tR><td align="center"><A name="#1"><img src="/UNSE_DATA/images/c2_img/MB_img/79.jpg" width="505" height="144"></td></tr>
							<?
							If($_REQUEST["lotto_var"] == ""){ 
							?>
							<tr>
								<td align="Center"><?include "../../etc/lotto_number.php";?></tD>
							</tR>
							<?S_SB_img("S042", $solution_var)?>
							<tr><td style="<?=$fontcolor;?>"><?S_CI_img("S", "42.jpg")?><?=$Tb_S042?></td></tr>
							<?=$include_bottom_Top_B2;?>
							<?}Else{?>
							<tr>
								<td align="Center"><?include "../../etc/lotto_number2.php";?></tD>
							</tR>
							<?}?>
						</table>
<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>