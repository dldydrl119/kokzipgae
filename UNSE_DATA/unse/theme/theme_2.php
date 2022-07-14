<?include "../../db_connect/db_connect.php";?>
<?include "../../common/function.php";?>

<!-- #yourCheck# -->

<?include "../../common/requestBuffer.php";?>

<?
$user_name = "";
$sex = "";
$youn = 1;
$my_solnuar = "";
$request_year = date("");
$request_month = date("");
$request_day = date("");
$request_hour = date("");
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
$UNSE_TITLE = "타로점성술";
$title_var = "<a href='#0'><font color='#FFFFFF'><b>타로점성술</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='#1'><font color=#FFFFFF><b>행운</b></font></a>";
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

<tR><td align='center'><A name='#0'><img src='/UNSE_DATA/images/c2_img/MB_img/64.jpg'></td></tr>

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


<?S_SB_img("T043", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/T/T043.php";?>
<?=$Tb_T043?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("S040", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S040.php";?>
<?S_CI_img(substr("S040",0, 1), intval(str_Replace(substr("S040",0, 1), "", "S040")).".jpg")?>
<?=$Tb_S040?>
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
<?S_SB_img("S058", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/S/S058.php";?>
<?S_CI_img(substr("S058",0, 1), intval(str_Replace(substr("S058",0, 1), "", "S058")).".jpg")?>
<?=$Tb_S058?>
</td></tr><?=$include_bottom_Top_C2?>
<?S_SB_img("F019", $solution_var);?><tr><td style="<?=$fontcolor?>">
<?include "../../solve/F/F019.php";?>
<?S_CI_img(substr("F019",0, 1), intval(str_Replace(substr("F019",0, 1), "", "F019")).".jpg")?>
<?=$Tb_F019?>
</td></tr><?=$include_bottom_Top_C2?>
</table>

<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>