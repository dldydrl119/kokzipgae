<?include "../../db_connect/db_connect.php";?>
<?include "../../common/function.php";?>
<?include "../../common/requestBuffer.php";?>
<?include "../../solve/sajujowha.php";?>
<?include "../../solve/saju_made.php";?>
<?include "../../solve/sinyaksingang.php";?>
<?include "../../solve/12sinsal.php";?>
<?include "../../solve/12unsung.php";?>
<?
$UNSE_TITLE = "자동이름풀이";
$title_var = "<a href='#1'><font color='#FFFFFF'><b>초년운</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='#2'><font color='#FFFFFF'><b>장년운</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='#3'><font color='#FFFFFF'><b>중년운</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='#4'><font color='#FFFFFF'><b>말년운</b></font></a>";
$puritime_data = "Y";
$o_manse_data = "Y";
$manse_data = "Y";
$ohang_data = "N";
$yukhyo_data = "N";
?>
<?include "../../common/include_top_c2.php";?>
<?include "../../solve/S_N002_N005_sol.php";?>
<?include "../../solve/N/N002.php";?>
<?include "../../solve/N/N003.php";?>
<?include "../../solve/N/N004.php";?>
<?include "../../solve/N/N005.php";?>
<?include "../../solve/N/N015.php";?>
<?
$totaljumsu = $ohengjumsu + $chojumsu + $jangjumsu + $jungjumsu + $maljumsu + $sajujumsu;

if ((530 <= $totaljumsu) && ($totaljumsu <= 600)){$color1 = "red";}
if ((430 <= $totaljumsu) && ($totaljumsu <= 529)){$color2 = "red";}
if ((300 <= $totaljumsu) && ($totaljumsu <= 429)){$color3 = "red";}
if ((200 <= $totaljumsu) && ($totaljumsu <= 299)){$color4 = "red";}
if ((100 <= $totaljumsu) && ($totaljumsu <= 199)){$color5 = "red";}
if ((0 <= $totaljumsu) && ($totaljumsu <= 99)){$color6 = "red";}
?>
<!-- 운세결과물 출력 시작 -->
						<table width="515" align="Center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
							<tR><td align="center"><A name="#1"><img src="/UNSE_DATA/images/c2_img/MB_img/22.jpg" width="505" height="144"></td></tr>
							<tr>
								<td style="<?=$fontcolor;?>"><?include "../../solve/N/N006.php";?></td>
							</tr>
							<?=$include_bottom_Top_C2;?>
							<?S_SB_img("N015", $solution_var)?>
							<tr><td style="<?=$fontcolor;?>"><?=$Tb_N015?></td></tr>
<!-- ============================================================================= -->
							<tR><td><?S_graph($Tb_N015_numerical, "나의 오행")?></tD></tr>
<!-- ============================================================================= -->
							<?=$include_bottom_Top_C2;?>
							<?S_SB_img("N002", $solution_var)?>
							<tr><td style="<?=$fontcolor;?>"><?=$Tb_N002?></td></tr>
							<?=$include_bottom_Top_C2;?>
							<?S_SB_img("N003", $solution_var)?>
							<tr><td style="<?=$fontcolor;?>"><?=$Tb_N003?></td></tr>
							<?=$include_bottom_Top_C2;?>
							<?S_SB_img("N004", $solution_var)?>
							<tr><td style="<?=$fontcolor;?>"><?=$Tb_N004?></td></tr>
							<?=$include_bottom_Top_C2;?>
							<?S_SB_img("N005", $solution_var)?>
							<tr><td style="<?=$fontcolor;?>"><?=$Tb_N005?></td></tr>
							<?=$include_bottom_Top_C2;?>
						</table>
<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>