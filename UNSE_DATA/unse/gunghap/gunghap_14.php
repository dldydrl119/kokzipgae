<?include "../../db_connect/db_connect.php";?>
<?include "../../common/function.php";?>

<?$your_check = "Y"?>

<?include "../../common/requestBuffer.php";?>

<!-- #autoMyBuffer# -->
<!-- #autoYourBuffer# -->

<?include "../../solve/setting_var.php";?>
<?include "../../solve/sajujowha.php";?>
<?include "../../solve/saju_made.php";?>
<?include "../../solve/saju_date.php";?>
<?include "../../solve/saju_made_mate.php";?>

<?include "../../solve/sajujowha_your.php";?>

<?include "../../solve/12sinsal.php";?>
<?include "../../solve/12unsung.php";?>
<?include "../../solve/sinyaksingang.php";?>
<?include "../../solve/sipsin.php";?>
<?include "../../solve/daeun_sipsin.php";?>

<!-- #Janimal.php# -->
<!-- #Nanimal.php# -->


<?
$UNSE_TITLE = "겉궁합";
$title_var = "<a href='#0'><font color='#FFFFFF'><b>겉궁합</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='#1'><font color=#FFFFFF><b>사랑분석</b></font></a>";
$o_manse_data = "Y";
$manse_data = "Y";
$ohang_data = "Y";
$yukhyo_data = "Y";
$week_data = "N";
$puritime_data = "Y";
$puritime_data1 = "Y";
$puritime_data2 = "Y";
$puritime_data3 = "Y";
$puritime_data4 = "Y";
?>

<?include "../../common/include_top_c2.php";?>

<!-- 운세결과물 출력 시작 -->

<table width="515" align="Center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">

<tR><td align='center'><A name='#0'><img src='/UNSE_DATA/images/c2_img/MB_img/42.jpg'></td></tr>

<!-- #S_S046_sol.php# -->
<!-- #S_S047_sol.php# -->

<!-- #S_S129_sol.php# -->

<!-- #S_S131_sol.php# -->
<!-- #S_S132_sol.php# -->
<!-- #S_S128_sol.php# -->

<!-- #S_S087_S092_sol.php# -->

<!-- #S_S094_S101_sol.php# -->

<!-- #S_S103_S110_sol.php# -->

<!-- #S_S136_S141_sol.php# -->

<!-- #S_J017_J030_sol.php# -->

<!-- #S_N008_N014_sol_Rand.php# -->

<!-- #S_N008_N014_sol.php# -->

<!-- #S_G030_G034_sol.php# -->


<?S_SB_img("G023", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/G/G023.php";?>
<?S_CI_img(substr("G023",0, 1), intval(str_Replace(substr("G023",0, 1), "", "G023")).".jpg")?>
<?=$Tb_G023?>
</td></tr><?=$include_bottom_Top_C2?>
<tR><td align=center><A name="#1"><img src="/UNSE_DATA/images/c2_img/List_img/L52.jpg"></td></tr>
<?S_SB_img("S061", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S061.php";?>
<?S_CI_img(substr("S061",0, 1), intval(str_Replace(substr("S061",0, 1), "", "S061")).".jpg")?>
<?=$Tb_S061?>
<br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S061_numerical, "천생연분")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("Y001", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/Y/Y001.php";?>
<?S_CI_img(substr("Y001",0, 1), intval(str_Replace(substr("Y001",0, 1), "", "Y001")).".jpg")?>
<?=$Tb_Y001?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S006", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S006.php";?>
<?S_CI_img(substr("S006",0, 1), intval(str_Replace(substr("S006",0, 1), "", "S006")).".jpg")?>
<?=$Tb_S006?>
</td></tr><tr><Td><br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S006_numerical, "현재의 이성연애운")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
</table>

<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>