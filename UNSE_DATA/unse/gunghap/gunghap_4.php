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
$UNSE_TITLE = "그이의 러브스타일 보기";
$title_var = "<a href='#0'><font color='#FFFFFF'><b>그이의 러브스타일 보기</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='#1'><font color=#FFFFFF><b>연애운분석</b></font></a>";
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

<tR><td align='center'><A name='#0'><img src='/UNSE_DATA/images/c2_img/MB_img/32.jpg'></td></tr>

<!-- #S_S046_sol.php# -->
<!-- #S_S047_sol.php# -->

<!-- #S_S129_sol.php# -->

<!-- #S_S131_sol.php# -->
<!-- #S_S132_sol.php# -->
<!-- #S_S128_sol.php# -->

<!-- #S_S087_S092_sol.php# -->

<!-- #S_S094_S101_sol.php# -->

<?include "../../solve/S_S103_S110_sol.php";?>

<!-- #S_S136_S141_sol.php# -->

<!-- #S_J017_J030_sol.php# -->

<!-- #S_N008_N014_sol_Rand.php# -->

<!-- #S_N008_N014_sol.php# -->

<!-- #S_G030_G034_sol.php# -->


<?S_SB_img("Y003", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/Y/Y003.php";?>
<?S_CI_img(substr("Y003",0, 1), intval(str_Replace(substr("Y003",0, 1), "", "Y003")).".jpg")?>
<?=$Tb_Y003?>
<br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_Y003_numerical, "그이의 러브스타일")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("Y001", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/Y/Y001.php";?>
<?S_CI_img(substr("Y001",0, 1), intval(str_Replace(substr("Y001",0, 1), "", "Y001")).".jpg")?>
<?=$Tb_Y001?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("G003", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/G/G003.php";?>
<?S_CI_img(substr("G003",0, 1), intval(str_Replace(substr("G003",0, 1), "", "G003")).".jpg")?>
<?=$Tb_G003?>
<br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_G003_numerical, "연인의 바람끼")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("J006", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/J/J006.php";?>
<?S_CI_img(substr("J006",0, 1), intval(str_Replace(substr("J006",0, 1), "", "J006")).".jpg")?>
<?=$Tb_J006?>
</td></tr><?=$include_bottom_Top_C2?>
<tR><td align=center><A name="#1"><img src="/UNSE_DATA/images/c2_img/List_img/L58.jpg"></td></tr>
<?S_SB_img("S106", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S106.php";?>
<?S_CI_img(substr("S106",0, 1), intval(str_Replace(substr("S106",0, 1), "", "S106")).".jpg")?>
<?=$Tb_S106?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("T010", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/T/T010.php";?>
<?S_CI_img(substr("T010",0, 1), intval(str_Replace(substr("T010",0, 1), "", "T010")).".jpg")?>
<?=$Tb_T010?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S081", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S081.php";?>
<?S_CI_img(substr("S081",0, 1), intval(str_Replace(substr("S081",0, 1), "", "S081")).".jpg")?>
<?=$Tb_S081?>
</td></tr><?=$include_bottom_Top_C2?>
</table>

<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>