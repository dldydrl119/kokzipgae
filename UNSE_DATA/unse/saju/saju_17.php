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
$UNSE_TITLE = "말년운";
$title_var = "<a href='#0'><font color='#FFFFFF'><b>말년운</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='#1'><font color=#FFFFFF><b>건강운</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='#2'><font color=#FFFFFF><b>길흉</b></font></a>";
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

<tR><td align='center'><A name='#0'><img src='/UNSE_DATA/images/c2_img/MB_img/17.jpg'></td></tr>

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


<?S_SB_img("S020", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S020.php";?>
<?S_CI_img(substr("S020",0, 1), intval(str_Replace(substr("S020",0, 1), "", "S020")).".jpg")?>
<?=$Tb_S020?>
</td></tr><tr><td><br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S020_numerical, "말년운")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
<tR><td align=center><A name="#1"><img src="/UNSE_DATA/images/c2_img/List_img/L8.jpg"></td></tr>
<?S_SB_img("S051", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S051.php";?>
<?S_CI_img(substr("S051",0, 1), intval(str_Replace(substr("S051",0, 1), "", "S051")).".jpg")?>
<?=$Tb_S051?>
<br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S051_numerical, "건강운")?></tD></tr></table>
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
</td></tr><tr><td><br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S021_numerical, "수명운")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
<tR><td align=center><A name="#2"><img src="/UNSE_DATA/images/c2_img/List_img/L9.jpg"></td></tr>
<?S_SB_img("S007", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S007.php";?>
<?S_CI_img(substr("S007",0, 1), intval(str_Replace(substr("S007",0, 1), "", "S007")).".jpg")?>
<?=$Tb_S007?>
</td></tr><tr><td><br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S007_numerical, "현재의 길흉사")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S008", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S008.php";?>
<?S_CI_img(substr("S008",0, 1), intval(str_Replace(substr("S008",0, 1), "", "S008")).".jpg")?>
<?=$Tb_S008?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S009", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S009.php";?>
<?S_CI_img(substr("S009",0, 1), intval(str_Replace(substr("S009",0, 1), "", "S009")).".jpg")?>
<?=$Tb_S009?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S010", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S010.php";?>
<?S_CI_img(substr("S010",0, 1), intval(str_Replace(substr("S010",0, 1), "", "S010")).".jpg")?>
<?=$Tb_S010?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("F011", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/F/F011.php";?>
<?S_CI_img(substr("F011",0, 1), intval(str_Replace(substr("F011",0, 1), "", "F011")).".jpg")?>
<?=$Tb_F011?>
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