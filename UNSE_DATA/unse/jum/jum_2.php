<?include "../../db_connect/db_connect.php";?>
<?include "../../common/function.php";?>

<!-- #yourCheck# -->

<?include "../../common/requestBuffer.php";?>

<?
$user_name = "";
$sex = "";
$youn = 1;
$my_solnuar = "";
$request_year = date("Y");
$request_month = date("m");
$request_day = date("d");
$request_hour = date("H");
$request_min = date("i");
If(strlen($request_month) == 1){$request_month = "0".$request_month;}
If(strlen($request_day) == 1){$request_day = "0".$request_day;}
If(strlen($request_hour) == 1){$request_hour = "0".$request_hour;}
If(strlen($request_min) == 1){$request_min = "0".$request_min;}
$date_var2 = F_umyang_check($request_year.$request_month.$request_day, $my_solnuar, $youn);
If($my_solnuar == ""){
	$my_date = $request_year."-".$request_month."-".$request_day;
	$my_um_date = $date_var2;
}Else{
	$my_date = $date_var2;
	$my_um_date = $request_year."-".$request_month."-".$request_day;
} 
$my_date_str = $my_date;
$my_um_date_str = $my_um_date;
$my_date_split = explode("-", $my_date);
$my_um_date_split = explode("-", $my_um_date);
$solar_year = $my_date_split[0];
$solar_month = $my_date_split[1];
$solar_day = $my_date_split[2];
$lunar_year = $my_um_date_split[0];
$lunar_month = $my_um_date_split[1];
$lunar_day = $my_um_date_split[2];
?>
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
$UNSE_TITLE = "주역점";
$title_var = "<a href='#0'><font color='#FFFFFF'><b>주역점</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;";
$o_manse_data = "N";
$manse_data = "N";
$ohang_data = "N";
$yukhyo_data = "N";
$week_data = "N";
$puritime_data = "N";
$puritime_data1 = "N";
$puritime_data2 = "N";
$puritime_data3 = "Y";
$puritime_data4 = "N";
?>

<?include "../../common/include_top_c2.php";?>

<!-- 운세결과물 출력 시작 -->

<table width="515" align="Center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">

<tR><td align='center'><A name='#0'><img src='/UNSE_DATA/images/c2_img/MB_img/48.jpg'></td></tr>

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

<tr><td height='15'></td></tr>
<?include "../../solve/J/J033.php";?>
<?S_CI_img(substr("J033",0, 1), intval(str_Replace(substr("J033",0, 1), "", "J033")).".jpg")?>
<?=$Tb_J033?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S008", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S008.php";?>
<?S_CI_img(substr("S008",0, 1), intval(str_Replace(substr("S008",0, 1), "", "S008")).".jpg")?>
<?=$Tb_S008?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S007", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S007.php";?>
<?S_CI_img(substr("S007",0, 1), intval(str_Replace(substr("S007",0, 1), "", "S007")).".jpg")?>
<?=$Tb_S007?>
<br><Br><br>
<table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S007_numerical, "현재의 길흉사")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S006", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S006.php";?>
<?S_CI_img(substr("S006",0, 1), intval(str_Replace(substr("S006",0, 1), "", "S006")).".jpg")?>
<?=$Tb_S006?>
<br><Br><br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S006_numerical, "현재의 이성연애운")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S005", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S005.php";?>
<?S_CI_img(substr("S005",0, 1), intval(str_Replace(substr("S005",0, 1), "", "S005")).".jpg")?>
<?=$Tb_S005?>
<br><Br><br><Br><br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S005_numerical, "현재의 금전재물운")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S002", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S002.php";?>
<?S_CI_img(substr("S002",0, 1), intval(str_Replace(substr("S002",0, 1), "", "S002")).".jpg")?>
<?=$Tb_S002?>
<br><Br><br><Br><table cellpadding='0' cellspacing='0'><tr><td><?S_graph($Tb_S002_numerical, "현재의운")?></tD></tr></table>
</td></tr><?=$include_bottom_Top_C2?>
</table>

<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>