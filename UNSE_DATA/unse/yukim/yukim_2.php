<?include "../../db_connect/db_connect.php";?>
<?include "../../common/function.php";?>
<?include "../../common/requestBuffer.php";?>
<?
$UNSE_TITLE = "지두법(길흉속지법)";
$title_var = "<a href='#1'><font color='#FFFFFF'><b>지두법(길흉속지법)</b></font></a>";
$puritime_data = "Y";
$o_manse_data = "N";
$manse_data = "N";
$ohang_data = "N";
$yukhyo_data = "N";

$what = $_REQUEST["what"];
?>
<?include "../../common/include_top_c2.php";?>
<!-- 운세결과물 출력 시작 -->

<?include "../../solve/J/J052.php";?>
						<table width="515" align="Center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
							<tR><td align="center"><A name="#1"><img src="/UNSE_DATA/images/c2_img/MB_img/81.jpg" width="505" height="144"></td></tr>
							<?S_SB_img("J052", $solution_var)?>
							<tr>
								<td style="<?=$fontcolor;?>"><BR>
								<TABLE width=505  border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align="center">
									<TR><TD bgcolor=C4E693>
									▣ 지두법은 육임에서 번거로운 사과 삼전을 조식하지 않더라도 간단히 천기를 알수있는 대단히 유용한 육임의 비법이다.<BR>
									▣ 문점하는 시각위에 그 달의 하늘의 기운인 월장을 가시하고 순행시켰을때 辰下地支(진하지지) 를 보고 예측하는 학문이다.<BR>
									▣ 간단 명료하고 정확하게 프로그램 해 놓았으니 어떤 사안에 대해 빠른 길흉을 알고 싶다면 이 속지법을 아용하시면 큰 효과를 보실수 있다.
									</TD></TR>
								</TABLE>  
								</td>
							</tr>
							<tR>
								<tD><BR>
								<table  width=505 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align=center>
								  <tr><td colspan=4 bgcolor=CBDBF7 align=center><font color=red><?=$what?></font><br><font color=CC0000><b>[</b></font>음력<font color=CC0000><b>]</b></font> <?=$lyear?> <?=$lmonth?> <?=$lday?> (<?=$umyear?> <?=$special_youn_disp?> <?=$ummonth?> <?=$umday?> <?=$jeol?>)</td></tr>
								  <tr>
										<td width=120 bgcolor=FFFFFF>일진: <font color=blue><?=$lday_h?><?=$lday_e?></font></td>
									<td width=120 bgcolor=FFFFFF>월장: <font color=blue><?=$woljang?></font></td>
									<td width=120 bgcolor=FFFFFF>점시: <font color=blue><?=$jumc?><?=$si?></font></td>
										<td width=120 bgcolor=FFFFFF>공망: <font color=blue><font color=blue><?=$gongmang_01?><?=$gongmang_02?></font></td> 
								  </tr>
								  </table>
								<br>
								<table border=0 cellspacing=1 cellpadding=1 bgcolor=FFFFFF align=center>
								<tr><td><img src=/images/result_img/yukim_img/jidu.gif></td></tr>
								<tr><td height=1 bgcolor=000000></td></tr>
								</table>
								<table align=center border=0 cellspacing=1 cellpadding=1 bgcolor=FFFFFF> 
								 <tr>
									  <td width=40 align=center><font color=green>천반</font></td>
									  <td width=40 align=center><img src=/images/mansei_img/C_<?=$a11?>.gif></td>
									  <td width=40 align=center><img src=/images/mansei_img/C_<?=$a12?>.gif></td>
									  <td width=40 align=center><img src=/images/mansei_img/C_<?=$a01?>.gif></td>
									  <td width=40 align=center><img src=/images/mansei_img/C_<?=$a02?>.gif></td>
									  <td width=40 align=center><img src=/images/mansei_img/C_<?=$a03?>.gif></td>
									  <td width=40 align=center><img src=/images/mansei_img/C_<?=$a04?>.gif></td>
									  <td width=40 align=center><img src=/images/mansei_img/C_<?=$a05?>.gif></td>
									  <td width=40 align=center><img src=/images/mansei_img/C_<?=$a06?>.gif></td>
									  <td width=40 align=center><img src=/images/mansei_img/C_<?=$a07?>.gif></td>
									  <td width=40 align=center><img src=/images/mansei_img/C_<?=$a08?>.gif></td>
									  <td width=40 align=center><img src=/images/mansei_img/C_<?=$a09?>.gif></td>
									  <td width=40 align=center><img src=/images/mansei_img/C_<?=$a10?>.gif></td>
								 </tr>
								<tr><td height=1 bgcolor=000000 colspan=13></td></tr>
								  <tr>
									  <td width=40 align=center><font color=green>지반</font></td>
									  <td align=center><img src=/images/mansei_img/C_11.gif></td>
									  <td align=center><img src=/images/mansei_img/C_12.gif></td>
									  <td align=center><img src=/images/mansei_img/C_01.gif></td>
									  <td align=center><img src=/images/mansei_img/C_02.gif></td>
									  <td align=center><img src=/images/mansei_img/C_03_black.gif></td>
									  <td align=center><img src=/images/mansei_img/C_04.gif></td>
									  <td align=center><img src=/images/mansei_img/C_05.gif></td>
									  <td align=center><img src=/images/mansei_img/C_06.gif></td>
									  <td align=center><img src=/images/mansei_img/C_07.gif></td>
									  <td align=center><img src=/images/mansei_img/C_08.gif></td>
									  <td align=center><img src=/images/mansei_img/C_09.gif></td>
									  <td align=center><img src=/images/mansei_img/C_10.gif></td>
								 </tr>
								</table><BR>
								</td>
							</tR>
							<tr><td style="<?=$fontcolor;?>"><?S_CI_img("J", "38.jpg")?><?=$Tb_J052?></td></tr>
							<?=$include_bottom_Top_B2;?>
						</table>
<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>