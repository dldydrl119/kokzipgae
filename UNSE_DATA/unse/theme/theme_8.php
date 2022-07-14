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
$UNSE_TITLE = "나의별자리사랑";
$title_var = "<a href='#0'><font color='#FFFFFF'><b>나의별자리사랑</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;";
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

<tR><td align='center'><A name='#0'><img src='/UNSE_DATA/images/c2_img/MB_img/70.jpg'></td></tr>

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

<?include "../../solve/S_G030_G034_sol.php";?>


<?S_SB_img("G019", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/G/G019.php";?>
<?S_CI_img(substr("G019",0, 1), intval(str_Replace(substr("G019",0, 1), "", "G019")).".jpg")?>
<?=$Tb_G019?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("G032", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/G/G032.php";?>
<?S_CI_img(substr("G032",0, 1), intval(str_Replace(substr("G032",0, 1), "", "G032")).".jpg")?>
<?=$Tb_G032?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("G033", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/G/G033.php";?>
<?=$Tb_G033?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("G034", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/G/G034.php";?>
<?S_CI_img(substr("G034",0, 1), intval(str_Replace(substr("G034",0, 1), "", "G034")).".jpg")?>
<?=$Tb_G034?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("G024", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/G/G024.php";?>
<?S_CI_img(substr("G024",0, 1), intval(str_Replace(substr("G024",0, 1), "", "G024")).".jpg")?>
<?=$Tb_G024?>
</td></tr><?=$include_bottom_Top_C2?>
</table>

<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>