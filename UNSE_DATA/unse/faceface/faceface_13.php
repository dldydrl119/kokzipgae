<?include "../../db_connect/db_connect.php";?>
<?include "../../common/function.php";?>
<?include "../../common/requestBuffer_faceface.php";?>
<?
$UNSE_TITLE = "관상보기";
$title_var = "<a href='#1'><font color='#FFFFFF'><b>관상보기</b></font></a>";
$o_manse_data = "N";
$manse_data = "N";
$ohang_data = "N";
$yukhyo_data = "N";
$print_check = "Y";

$puritime_data = "N";
$puritime_data1 = "N";
$puritime_data2 = "N";
$puritime_data3 = "Y";
$puritime_data4 = "N";
?>
<?include "../../common/include_top_c2.php";?>
<!-- 운세결과물 출력 시작 -->

<?include "../../etc/T063_data.php";?>
 <TABLE width=512 align="Center" border=0 cellspacing=1 cellpadding=5 bgcolor=FFFFFF>
							<tR><td align="center"><A name="#1"><img src="/UNSE_DATA/images/c2_img/MB_img/78.jpg" width="505" height="144"></td></tr>
							<?S_SB_img("T063", $solution_var)?>
       <TR><TD bgcolor=FFFFFF><?=$data_1?></TD></TR>
       <TR><TD bgcolor=FFFFFF><?=$data_2?></TD></TR>
       <TR><TD bgcolor=FFFFFF><?=$data_3?></TD></TR>
       <TR><TD bgcolor=FFFFFF><?=$data_4_1?><br><?=$data_4_2?><br><?=$data_4_3?><br><?=$data_4_4?><br><?=$data_4_5?></TD></TR>
       <TR><TD bgcolor=FFFFFF><?=$data_5_1?> <?=$data_5_2?></TD></TR>
       <TR><TD bgcolor=FFFFFF><?=$data_8?></TD></TR>
       <TR><TD bgcolor=FFFFFF><?=$data_7?></TD></TR>
       <TR><TD bgcolor=FFFFFF><?=$data_9?></TD></TR>
       <TR><TD bgcolor=FFFFFF><?=$data_10?> <?=$data_10_1?></TD></TR>
       <TR><TD bgcolor=FFFFFF><?=$data_12?></TD></TR>
       <TR><TD bgcolor=FFFFFF><?=$data_6_1?><br><?=$data_6_2?></TD></TR>
       <TR><TD bgcolor=FFFFFF><?=$data_11?></TD></TR>
							<?=$include_bottom_Top_c2;?>
 </table>
<!-- =============================================================== -->

<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>