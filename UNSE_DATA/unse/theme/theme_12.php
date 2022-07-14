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
$UNSE_TITLE = "사업운총평";
$title_var = "<a href='#0'><font color='#FFFFFF'><b>사업운총평</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;";
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

<tR><td align='center'><A name='#0'><img src='/UNSE_DATA/images/c2_img/MB_img/74.jpg'></td></tr>

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


<?S_SB_img("S024", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S024.php";?>
<?S_CI_img(substr("S024",0, 1), intval(str_Replace(substr("S024",0, 1), "", "S024")).".jpg")?>
<?=$Tb_S024?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S058", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S058.php";?>
<?S_CI_img(substr("S058",0, 1), intval(str_Replace(substr("S058",0, 1), "", "S058")).".jpg")?>
<?=$Tb_S058?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S116", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S116.php";?>
<?S_CI_img(substr("S116",0, 1), intval(str_Replace(substr("S116",0, 1), "", "S116")).".jpg")?>
<?=$Tb_S116?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S117", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S117.php";?>
<?S_CI_img(substr("S117",0, 1), intval(str_Replace(substr("S117",0, 1), "", "S117")).".jpg")?>
<?=$Tb_S117?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S118", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S118.php";?>
<?S_CI_img(substr("S118",0, 1), intval(str_Replace(substr("S118",0, 1), "", "S118")).".jpg")?>
<?=$Tb_S118?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S014", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S014.php";?>
<?S_CI_img(substr("S014",0, 1), intval(str_Replace(substr("S014",0, 1), "", "S014")).".jpg")?>
<?=$Tb_S014?>
<br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S014_numerical, "현재나의운 분석")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
</table>

<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>