<?include "../../db_connect/db_connect.php";?>
<?include "../../common/function.php";?>
<?include "../../common/requestBuffer.php";?>
<?
$UNSE_TITLE = "육임정단";
$title_var = "<a href='#1'><font color='#FFFFFF'><b>육임정단</b></font></a>";
$puritime_data = "Y";
$o_manse_data = "N";
$manse_data = "N";
$ohang_data = "N";
$yukhyo_data = "N";

$what = $_REQUEST["what"];
?>
<?include "../../common/include_top_c2.php";?>
<!-- 운세결과물 출력 시작 -->

<?include "../../solve/J/J045.php";?>
						<table width="515" align="Center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
							<tR><td align="center"><A name="#1"><img src="/UNSE_DATA/images/c2_img/MB_img/80.jpg" width="505" height="144"></td></tr>
							<?S_SB_img("J045", $solution_var)?>
							<tR>
								<td style="<?=$fontcolor;?>" align="center"><BR>						
<font color=CC0000><b>[</b></font>음력<font color=CC0000><b>]</b></font><?=$lyear?> <?=$lmonth?> <?=$lday?>(<?=$umyear?> <?=$special_youn_disp?> <?=$ummonth?> <?=$umday?> <?=$jeol?>)

<br>오늘의 일진(日辰) : <font color=blue><?=$lday?></font>
<br>오늘의 월장(月將) : <font color=blue><?=$woljang?></font><BR><BR>
								</td>
							</tD>
							<tR>
								<tD>								
<table border=0 cellspacing=1 cellpadding=5 bgcolor=cccccc align=center> 
 <tr bgcolor=ffffff>
      <td>천반</td>
      <td><?=$chenban_11_img?></td>
      <td><?=$chenban_12_img?></td>
      <td><?=$chenban_01_img?></td>
      <td><?=$chenban_02_img?></td>
      <td><?=$chenban_03_img?></td>
      <td><?=$chenban_04_img?></td>
      <td><?=$chenban_05_img?></td>
      <td><?=$chenban_06_img?></td>
      <td><?=$chenban_07_img?></td>
      <td><?=$chenban_08_img?></td>
      <td><?=$chenban_09_img?></td>
      <td><?=$chenban_10_img?></td>
 </tr>					   
 <tr bgcolor=ffffff>
      <td>지반</td>
      <td><img src=/images/jijangan_img/ji_11.gif></td>
      <td><img src=/images/jijangan_img/ji_12.gif></td>
      <td><img src=/images/jijangan_img/ji_01.gif></td>
      <td><img src=/images/jijangan_img/ji_02.gif></td>
      <td><img src=/images/jijangan_img/ji_03.gif></td>
      <td><img src=/images/jijangan_img/ji_04.gif></td>
      <td><img src=/images/jijangan_img/ji_05.gif></td>
      <td><img src=/images/jijangan_img/ji_06.gif></td>
      <td><img src=/images/jijangan_img/ji_07.gif></td>
      <td><img src=/images/jijangan_img/ji_08.gif></td>
      <td><img src=/images/jijangan_img/ji_09.gif></td>
      <td><img src=/images/jijangan_img/ji_10.gif></td>
 </tr>
</table><BR>
								</td>
							</tR>
							<tr><td style="<?=$fontcolor;?>"><?S_CI_img("J", "31.jpg")?><?=$Tb_J045;?></td></tr>
							<?=$include_bottom_Top_B2;?>
						</table>
<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>