<?include "../../db_connect/db_connect.php";?>
<?include "../../common/function.php";?>

<!-- #yourCheck# -->

<!-- 폼값 확인 -->
<?include "../../common/requestBuffer.php";?>

<!-- #autoMyBuffer# -->
<!-- #autoYourBuffer# -->
<!-- 사주명식 -->
<!-- 별자리인데 붎필요 -->
<?include "../../solve/setting_var.php";?> 
<!-- 천간 지지 -->
<?include "../../solve/sajujowha.php";?>
<!-- 사주 조화  -->
<?include "../../solve/saju_made.php";?>
<!-- 별 영향없음 -->
<?include "../../solve/saju_date.php";?>
<!-- 별 영향 없음 -->
<?include "../../solve/saju_made_mate.php";?>

<!-- #sajujowha_your.php# -->
<!-- 신살 -->
<?include "../../solve/12sinsal.php";?>
 <!-- 모르겠음 -->
<?include "../../solve/12unsung.php";?>
<!-- 기운 그래프 -->
<?include "../../solve/sinyaksingang.php";?>
<!-- 십신 -->
<?include "../../solve/sipsin.php";?>
<?include "../../solve/daeun_sipsin.php";?>

<!-- #Janimal.php# -->
<!-- #Nanimal.php# -->


<?
$UNSE_TITLE = "콕집게 오늘의 운세";
$title_var = "<a href='#0'><font color='#FFFFFF'><b>자평명리학ㅇㅇ 오늘의 운세</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;";
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
<!-- 상위 기본값 인클루드 -->
<?include "../../common/include_top_c2.php";?>

<!-- 운세결과물 출력 시작 -->

<table width="400" align="Center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">

<tR><td align='center'><A name='#0'><img src='/UNSE_DATA/images/c2_img/MB_img/10.jpg'></td></tr>

<!-- #S_S046_sol.php# -->
<!-- #S_S047_sol.php# -->

<!-- #S_S129_sol.php# -->

<!-- #S_S131_sol.php# -->
<!-- #S_S132_sol.php# -->
<!-- #S_S128_sol.php# -->



<!-- #S_S094_S101_sol.php# -->

<!-- #S_S103_S110_sol.php# -->

<!-- #S_S136_S141_sol.php# -->

<!-- #S_J017_J030_sol.php# -->

<!-- #S_N008_N014_sol_Rand.php# -->

<!-- #S_N008_N014_sol.php# -->

<!-- #S_G030_G034_sol.php# -->

<!-- 무슨운세알려주는칸 -->
<?S_SB_img("S087", $solution_var);?><tr><td style="<?=$fontcolor?>">
<!-- 이미지 -->
<?
// S_CI_img(substr("S087",0, 1), intval(str_Replace(substr("S087",0, 1), "", "S087")).".jpg")
?>
<!-- 텍스트 -->
오늘의 운세는<br><?include "../../solve/S_S087_S092_sol.php";?>
<?include "../../solve/S/S087.php";?>
<?=$Tb_S087?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S088", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S088.php";?>
<?S_CI_img(substr("S088",0, 1), intval(str_Replace(substr("S088",0, 1), "", "S088")).".jpg")?>
<?=$Tb_S088?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S089", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S089.php";?>
<?S_CI_img(substr("S089",0, 1), intval(str_Replace(substr("S089",0, 1), "", "S089")).".jpg")?>
<?=$Tb_S089?>
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
<?S_SB_img("S092", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S092.php";?>
<?S_CI_img(substr("S092",0, 1), intval(str_Replace(substr("S092",0, 1), "", "S092")).".jpg")?>
<?=$Tb_S092?>
</td></tr><?=$include_bottom_Top_C2?>
</table>

<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>