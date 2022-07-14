<?include "../../db_connect/db_connect.php";?>
<?include "../../common/function.php";?>

<!-- #yourCheck# -->

<?include "../../common/requestBuffer.php";?>

<!-- #autoMyBuffer# -->
<!-- #autoYourBuffer# -->

<?include "../../solve/setting_var.php";?>
<?include "../../solve/sajujowha.php";?>
<?include "../../solve/saju_made.php";?>
<?include "../../solve/saju_date.php";?>
<?include "../../solve/saju_made_mate.php";?>

<!-- #sajujowha_your.php# -->

<?include "../../solve/12sinsal.php";?>
<?include "../../solve/12unsung.php";?>
<?include "../../solve/sinyaksingang.php";?>
<?include "../../solve/sipsin.php";?>
<?include "../../solve/daeun_sipsin.php";?>

<!-- #Janimal.php# -->
<!-- #Nanimal.php# -->


<?
$UNSE_TITLE = "재물 모으는 법";
$title_var = "<a href='#0'><font color='#FFFFFF'><b>재물 모으는 법</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;";
$o_manse_data = "N";
$manse_data = "N";
$ohang_data = "N";
$yukhyo_data = "N";
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

<tR><td align='center'><A name='#0'><img src='/UNSE_DATA/images/c2_img/MB_img/75.jpg'></td></tr>

<!-- #S_S046_sol.php# -->
<!-- #S_S047_sol.php# -->

<!-- #S_S129_sol.php# -->

<!-- #S_S131_sol.php# -->
<!-- #S_S132_sol.php# -->
<!-- #S_S128_sol.php# -->

<?include "../../solve/S_S087_S092_sol.php";?>

<!-- #S_S094_S101_sol.php# -->

<!-- #S_S103_S110_sol.php# -->

<!-- #S_S136_S141_sol.php# -->

<!-- #S_J017_J030_sol.php# -->

<!-- #S_N008_N014_sol_Rand.php# -->

<!-- #S_N008_N014_sol.php# -->

<!-- #S_G030_G034_sol.php# -->


<?S_SB_img("S116", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S116.php";?>
<?S_CI_img(substr("S116",0, 1), intval(str_Replace(substr("S116",0, 1), "", "S116")).".jpg")?>
<?=$Tb_S116?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S014", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S014.php";?>
<?S_CI_img(substr("S014",0, 1), intval(str_Replace(substr("S014",0, 1), "", "S014")).".jpg")?>
<?=$Tb_S014?>
<br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S014_numerical, "현재나의운 분석")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S090", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S090.php";?>
<?S_CI_img(substr("S090",0, 1), intval(str_Replace(substr("S090",0, 1), "", "S090")).".jpg")?>
<?=$Tb_S090?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S091", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S091.php";?>
<?S_CI_img(substr("S091",0, 1), intval(str_Replace(substr("S091",0, 1), "", "S091")).".jpg")?>
<?=$Tb_S091?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S058", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S058.php";?>
<?S_CI_img(substr("S058",0, 1), intval(str_Replace(substr("S058",0, 1), "", "S058")).".jpg")?>
<?=$Tb_S058?>
</td></tr><?=$include_bottom_Top_C2?>
</table>

<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>