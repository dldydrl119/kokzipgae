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
$UNSE_TITLE = "질병건강운";
$title_var = "<a href='#0'><font color='#FFFFFF'><b>질병건강운</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='#1'><font color=#FFFFFF><b>건강운</b></font></a>";
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

<tR><td align='center'><A name='#0'><img src='/UNSE_DATA/images/c2_img/MB_img/56.jpg'></td></tr>

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


<?S_SB_img("T056", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/T/T056.php";?>
<?S_CI_img(substr("T056",0, 1), intval(str_Replace(substr("T056",0, 1), "", "T056")).".jpg")?>
<?=$Tb_T056?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("T057", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/T/T057.php";?>
<?S_CI_img(substr("T057",0, 1), intval(str_Replace(substr("T057",0, 1), "", "T057")).".jpg")?>
<?=$Tb_T057?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("T058", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/T/T058.php";?>
<?S_CI_img(substr("T058",0, 1), intval(str_Replace(substr("T058",0, 1), "", "T058")).".jpg")?>
<?=$Tb_T058?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S083", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S083.php";?>
<?S_CI_img(substr("S083",0, 1), intval(str_Replace(substr("S083",0, 1), "", "S083")).".jpg")?>
<?=$Tb_S083?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("J004", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/J/J004.php";?>
<?S_CI_img(substr("J004",0, 1), intval(str_Replace(substr("J004",0, 1), "", "J004")).".jpg")?>
<?=$Tb_J004?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S021", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S021.php";?>
<?S_CI_img(substr("S021",0, 1), intval(str_Replace(substr("S021",0, 1), "", "S021")).".jpg")?>
<?=$Tb_S021?>
<br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S021_numerical, "수명운")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
</table>

<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>