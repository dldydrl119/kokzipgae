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
$UNSE_TITLE = "주역신수비결";
$title_var = "<a href='#0'><font color='#FFFFFF'><b>주역신수비결</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='#1'><font color=#FFFFFF><b>재물운</b></font></a>";
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

<tR><td align='center'><A name='#0'><img src='/UNSE_DATA/images/c2_img/MB_img/49.jpg'></td></tr>

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


<?S_SB_img("J049", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/J/J049.php";?>
<?=$Tb_J049?>
</td></tr><?=$include_bottom_Top_C2?>
<tR><td align=center><A name="#1"><img src="/UNSE_DATA/images/c2_img/List_img/L1.jpg"></td></tr>
<?S_SB_img("S027", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S027.php";?>
<?S_CI_img(substr("S027",0, 1), intval(str_Replace(substr("S027",0, 1), "", "S027")).".jpg")?>
<?=$Tb_S027?>
<br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S027_numerical, "타고난재물운")?></tD></tr></table>
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
<?S_SB_img("S042", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S042.php";?>
<?S_CI_img(substr("S042",0, 1), intval(str_Replace(substr("S042",0, 1), "", "S042")).".jpg")?>
<?=$Tb_S042?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S082", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S082.php";?>
<?S_CI_img(substr("S082",0, 1), intval(str_Replace(substr("S082",0, 1), "", "S082")).".jpg")?>
<?=$Tb_S082?>
</td></tr><?=$include_bottom_Top_C2?>
</table>

<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>