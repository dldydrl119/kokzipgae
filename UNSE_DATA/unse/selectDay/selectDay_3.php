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
$UNSE_TITLE = "특정일운세";
$title_var = "<a href='#0'><font color='#FFFFFF'><b>특정일운세</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='#1'><font color=#FFFFFF><b>행운</b></font></a>";
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

<tR><td align='center'><A name='#0'><img src='/UNSE_DATA/images/c2_img/MB_img/84.jpg'></td></tr>

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


<?S_SB_img("S033", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S033.php";?>
<?S_CI_img(substr("S033",0, 1), intval(str_Replace(substr("S033",0, 1), "", "S033")).".jpg")?>
<?=$Tb_S033?>
</td></tr><?=$include_bottom_Top_C2?>
<tR><td align=center><A name="#1"><img src="/UNSE_DATA/images/c2_img/List_img/L19.jpg"></td></tr>
<?S_SB_img("T028", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/T/T028.php";?>
<?S_CI_img(substr("T028",0, 1), intval(str_Replace(substr("T028",0, 1), "", "T028")).".jpg")?>
<?=$Tb_T028?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S009", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S009.php";?>
<?S_CI_img(substr("S009",0, 1), intval(str_Replace(substr("S009",0, 1), "", "S009")).".jpg")?>
<?=$Tb_S009?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("J009", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/J/J009.php";?>
<?S_CI_img(substr("J009",0, 1), intval(str_Replace(substr("J009",0, 1), "", "J009")).".jpg")?>
<?=$Tb_J009?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S010", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S010.php";?>
<?S_CI_img(substr("S010",0, 1), intval(str_Replace(substr("S010",0, 1), "", "S010")).".jpg")?>
<?=$Tb_S010?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("T039", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/T/T039.php";?>
<?S_CI_img(substr("T039",0, 1), intval(str_Replace(substr("T039",0, 1), "", "T039")).".jpg")?>
<?=$Tb_T039?>
<br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_T039_numerical, "나에게맞는 숫자운")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
</table>

<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>