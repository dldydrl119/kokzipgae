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
$UNSE_TITLE = "인생풀이";
$title_var = "<a href='#0'><font color='#FFFFFF'><b>인생풀이</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='#1'><font color=#FFFFFF><b>길흉</b></font></a>";
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

<tR><td align='center'><A name='#0'><img src='/UNSE_DATA/images/c2_img/MB_img/4.jpg'></td></tr>

<?include "../../solve/S_S046_sol.php";?>
<?include "../../solve/S_S047_sol.php";?>

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


<?S_SB_img("S063", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S063.php";?>
<?S_CI_img(substr("S063",0, 1), intval(str_Replace(substr("S063",0, 1), "", "S063")).".jpg")?>
<?=$Tb_S063?>
<br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S063_numerical, "총평")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S045", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S045.php";?>
<?S_CI_img(substr("S045",0, 1), intval(str_Replace(substr("S045",0, 1), "", "S045")).".jpg")?>
<?=$Tb_S045?>
<br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S045_numerical, "초년운")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S046", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S046.php";?>
<?S_CI_img(substr("S046",0, 1), intval(str_Replace(substr("S046",0, 1), "", "S046")).".jpg")?>
<?=$Tb_S046?>
<br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S046_numerical, "중년운")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S047", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S047.php";?>
<?S_CI_img(substr("S047",0, 1), intval(str_Replace(substr("S047",0, 1), "", "S047")).".jpg")?>
<?=$Tb_S047?>
<br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S047_numerical, "말년운")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S048", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S048.php";?>
<?S_CI_img(substr("S048",0, 1), intval(str_Replace(substr("S048",0, 1), "", "S048")).".jpg")?>
<?=$Tb_S048?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S049", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S049.php";?>
<?S_CI_img(substr("S049",0, 1), intval(str_Replace(substr("S049",0, 1), "", "S049")).".jpg")?>
<?=$Tb_S049?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S050", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S050.php";?>
<?S_CI_img(substr("S050",0, 1), intval(str_Replace(substr("S050",0, 1), "", "S050")).".jpg")?>
<?=$Tb_S050?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S051", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S051.php";?>
<?S_CI_img(substr("S051",0, 1), intval(str_Replace(substr("S051",0, 1), "", "S051")).".jpg")?>
<?=$Tb_S051?>
<br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S051_numerical, "건강운")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S052", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S052.php";?>
<?S_CI_img(substr("S052",0, 1), intval(str_Replace(substr("S052",0, 1), "", "S052")).".jpg")?>
<?=$Tb_S052?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S053", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S053.php";?>
<?S_CI_img(substr("S053",0, 1), intval(str_Replace(substr("S053",0, 1), "", "S053")).".jpg")?>
<?=$Tb_S053?>
<br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S053_numerical, "연애운")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S054", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S054.php";?>
<?S_CI_img(substr("S054",0, 1), intval(str_Replace(substr("S054",0, 1), "", "S054")).".jpg")?>
<?=$Tb_S054?>
<br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S054_numerical, "섹스운")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S055", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S055.php";?>
<?S_CI_img(substr("S055",0, 1), intval(str_Replace(substr("S055",0, 1), "", "S055")).".jpg")?>
<?=$Tb_S055?>
<br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S055_numerical, "궁합")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S056", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S056.php";?>
<?S_CI_img(substr("S056",0, 1), intval(str_Replace(substr("S056",0, 1), "", "S056")).".jpg")?>
<?=$Tb_S056?>
<br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S056_numerical, "부부궁")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S057", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S057.php";?>
<?S_CI_img(substr("S057",0, 1), intval(str_Replace(substr("S057",0, 1), "", "S057")).".jpg")?>
<?=$Tb_S057?>
<br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S057_numerical, "금전운")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S058", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S058.php";?>
<?S_CI_img(substr("S058",0, 1), intval(str_Replace(substr("S058",0, 1), "", "S058")).".jpg")?>
<?=$Tb_S058?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S059", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S059.php";?>
<?S_CI_img(substr("S059",0, 1), intval(str_Replace(substr("S059",0, 1), "", "S059")).".jpg")?>
<?=$Tb_S059?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S060", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S060.php";?>
<?S_CI_img(substr("S060",0, 1), intval(str_Replace(substr("S060",0, 1), "", "S060")).".jpg")?>
<?=$Tb_S060?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S061", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S061.php";?>
<?S_CI_img(substr("S061",0, 1), intval(str_Replace(substr("S061",0, 1), "", "S061")).".jpg")?>
<?=$Tb_S061?>
<br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S061_numerical, "천생연분")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
<tR><td align=center><A name="#1"><img src="/UNSE_DATA/images/c2_img/List_img/L9.jpg"></td></tr>
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