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
$request_hour = date("t");
$request_min = date("2");
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
$UNSE_TITLE = "신통방통 동전점";
$title_var = "<a href='#0'><font color='#FFFFFF'><b>신통방통 동전점</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='#1'><font color=#FFFFFF><b>방위운</b></font></a>";
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

<tR><td align='center'><A name='#0'><img src='/UNSE_DATA/images/c2_img/MB_img/65.jpg'></td></tr>

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


<?S_SB_img("T048", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/T/T048.php";?>
<?S_CI_img(substr("T048",0, 1), intval(str_Replace(substr("T048",0, 1), "", "T048")).".jpg")?>
<?=$Tb_T048?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S040", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S040.php";?>
<?S_CI_img(substr("S040",0, 1), intval(str_Replace(substr("S040",0, 1), "", "S040")).".jpg")?>
<?=$Tb_S040?>
</td></tr><?=$include_bottom_Top_C2?>
<tR><td align=center><A name="#1"><img src="/UNSE_DATA/images/c2_img/List_img/L20.jpg"></td></tr>
<?S_SB_img("J047", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/J/J047.php";?>
<?S_CI_img(substr("J047",0, 1), intval(str_Replace(substr("J047",0, 1), "", "J047")).".jpg")?>
<?=$Tb_J047?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("J048", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/J/J048.php";?>
<?S_CI_img(substr("J048",0, 1), intval(str_Replace(substr("J048",0, 1), "", "J048")).".jpg")?>
<?=$Tb_J048?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("F019", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/F/F019.php";?>
<?S_CI_img(substr("F019",0, 1), intval(str_Replace(substr("F019",0, 1), "", "F019")).".jpg")?>
<?=$Tb_F019?>
</td></tr><?=$include_bottom_Top_C2?>
</table>

<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>