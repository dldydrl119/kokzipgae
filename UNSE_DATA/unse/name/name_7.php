<?include "../../db_connect/db_connect.php";?>
<?include "../../common/function.php";?>
<?
$UNSE_TITLE = "성씨추명학";
$title_var = "<a href='#1'><font color='#FFFFFF'><b>연인부부운</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='#2'><font color='#FFFFFF'><b>친구사교운</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='#3'><font color='#FFFFFF'><b>사업합작운</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='#4'><font color='#FFFFFF'><b>직장상사운</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='#5'><font color='#FFFFFF'><b>직장부하운</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='#6'><font color='#FFFFFF'><b>고부운</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='#7'><font color='#FFFFFF'><b>승부대결운</b></font></a>";
$o_manse_data = "N";
$manse_data = "N";
$ohang_data = "N";
$yukhyo_data = "N";

$url = $_REQUEST["url"];
$msung = $_REQUEST["msung"];
$ysung = $_REQUEST["ysung"];

$sql = "SELECT * FROM surioheng WHERE hanja = '$msung'";
echo 			$nonono;

if (!$sql) {
   error("QUERY_ERROR");
   exit;
}

$query = mysql_query($sql);
$all = mysql_affected_rows();

if (!$all) {
error("INVALID_HNAME_m");
}

		for ($i = 0 ; $i<$all; $i++)
		{
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$my_hangul = stripslashes($row[hangul]);
			$my_hanja = stripslashes($row[hanja]);
			$my_su = stripslashes($row[su]);			    
			$my_bal = stripslashes($row[bal]);			
			$nonono = stripslashes($row[no]);		
			
		 }
echo 			$nonono;



$sql = "SELECT * FROM surioheng WHERE hanja = '$ysung'";
if (!$sql) {
   error("QUERY_ERROR");
   exit;
}

$query = mysql_query($sql);
$all = mysql_affected_rows();

if (!$all) {
error("INVALID_HNAME_y");
}

		for ($i = 0 ; $i<$all; $i++)
		{
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$your_hangul = stripslashes($row[hangul]);
			$your_hanja = stripslashes($row[hanja]);
			$your_su = stripslashes($row[su]);			    
			$your_bal = stripslashes($row[bal]);			    
		 }

if ($my_su == $your_su) { $suri = d0;}
if (($my_su == '목') && ($your_su == '화')) { $suri = x1;}
if (($my_su == '목') && ($your_su == '토')) { $suri = x2;}
if (($my_su == '목') && ($your_su == '금')) { $suri = y2;}
if (($my_su == '목') && ($your_su == '수')) { $suri = y1;}

if (($my_su == '화') && ($your_su == '토')) { $suri = x1;}
if (($my_su == '화') && ($your_su == '금')) { $suri = x2;}
if (($my_su == '화') && ($your_su == '수')) { $suri = y2;}
if (($my_su == '화') && ($your_su == '목')) { $suri = y1;}

if (($my_su == '토') && ($your_su == '금')) { $suri = x1;}
if (($my_su == '토') && ($your_su == '수')) { $suri = x2;}
if (($my_su == '토') && ($your_su == '목')) { $suri = y2;}
if (($my_su == '토') && ($your_su == '화')) { $suri = y1;}

if (($my_su == '금') && ($your_su == '수')) { $suri = x1;}
if (($my_su == '금') && ($your_su == '목')) { $suri = x2;}
if (($my_su == '금') && ($your_su == '화')) { $suri = y2;}
if (($my_su == '금') && ($your_su == '토')) { $suri = y1;}

if (($my_su == '수') && ($your_su == '목')) { $suri = x1;}
if (($my_su == '수') && ($your_su == '화')) { $suri = x2;}
if (($my_su == '수') && ($your_su == '토')) { $suri = y2;}
if (($my_su == '수') && ($your_su == '금')) { $suri = y1;}

if ($my_bal == $your_bal) { $balum = d0;}
if (($my_bal == '목') && ($your_bal == '화')) { $balum = x1;}
if (($my_bal == '목') && ($your_bal == '토')) { $balum = x2;}
if (($my_bal == '목') && ($your_bal == '금')) { $balum = y2;}
if (($my_bal == '목') && ($your_bal == '수')) { $balum = y1;}

if (($my_bal == '화') && ($your_bal == '토')) { $balum = x1;}
if (($my_bal == '화') && ($your_bal == '금')) { $balum = x2;}
if (($my_bal == '화') && ($your_bal == '수')) { $balum = y2;}
if (($my_bal == '화') && ($your_bal == '목')) { $balum = y1;}

if (($my_bal == '토') && ($your_bal == '금')) { $balum = x1;}
if (($my_bal == '토') && ($your_bal == '수')) { $balum = x2;}
if (($my_bal == '토') && ($your_bal == '목')) { $balum = y2;}
if (($my_bal == '토') && ($your_bal == '화')) { $balum = y1;}

if (($my_bal == '금') && ($your_bal == '수')) { $balum = x1;}
if (($my_bal == '금') && ($your_bal == '목')) { $balum = x2;}
if (($my_bal == '금') && ($your_bal == '화')) { $balum = y2;}
if (($my_bal == '금') && ($your_bal == '토')) { $balum = y1;}

if (($my_bal == '수') && ($your_bal == '목')) { $balum = x1;}
if (($my_bal == '수') && ($your_bal == '화')) { $balum = x2;}
if (($my_bal == '수') && ($your_bal == '토')) { $balum = y2;}
if (($my_bal == '수') && ($your_bal == '금')) { $balum = y1;}

$tot = $suri.$balum;

if ($tot == y1y1) {$number_var = '01';}
if ($tot == y1d0) {$number_var = '02';}
if ($tot == d0y1) {$number_var = '03';}
if ($tot == x1x1) {$number_var = '04';}
if ($tot == d0x1) {$number_var = '05';}
if ($tot == x1d0) {$number_var = '06';}
if ($tot == y1x1) {$number_var = '07';}
if ($tot == d0d0) {$number_var = '08';}
if ($tot == x1x2) {$number_var = '09';}
if ($tot == d0x2) {$number_var = '10';}

if ($tot == y2y1) {$number_var = '11';}
if ($tot == y2d0) {$number_var = '12';}
if ($tot == y1y2) {$number_var = '13';}
if ($tot == d0y2) {$number_var = '14';}
if ($tot == x2x1) {$number_var = '15';}
if ($tot == x2d0) {$number_var = '16';}
if ($tot == y2x1) {$number_var = '17';}
if ($tot == y1x2) {$number_var = '18';}
if ($tot == y2y2) {$number_var = '19';}
if ($tot == x2x2) {$number_var = '20';}

if ($tot == x2y1) {$number_var = '21';}
if ($tot == x2y2) {$number_var = '22';}
if ($tot == y2x2) {$number_var = '23';}
if ($tot == x1y1) {$number_var = '24';}
if ($tot == x1y2) {$number_var = '25';}
?>
<?include "../../common/include_top_c2.php";?>
<!-- 운세결과물 출력 시작 -->
<?include "../../solve/N/N008.php";?>
<?include "../../solve/N/N009.php";?>
<?include "../../solve/N/N010.php";?>
<?include "../../solve/N/N011.php";?>
<?include "../../solve/N/N012.php";?>
<?include "../../solve/N/N013.php";?>
<?include "../../solve/N/N014.php";?>
						<table width="515" align="Center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
							<tR><td align="center"><A name="#1"><img src="/UNSE_DATA/images/c2_img/MB_img/28.jpg" width="505" height="144"></td></tr>
							<tR><td align="Center">
<table width=400 border=0 cellspacing=0 cellpadding=5 align='center'>
  <tr>
    <td width="200"  align="right" ><font color=red>본인</font>의 성씨&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=CC0000><b>|</b></font></td>
    <td width="200"  align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size=5><?=$msung?></font>&nbsp;(<?=$my_hangul?>)</td>
  </tr> 
 <tr><td height=1 bgcolor=CC0000 colspan=2></td></tr>
  <tr>
    <td width="200"  align="right" ><font color=red>상대방</font>의 성씨&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=CC0000><b>|</b></font></td>
    <td width="200"  align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size=5><?=$ysung?></font>&nbsp;(<?=$your_hangul?>)</td>
  </tr>
</table>					</td></tr>
							<?S_SB_img("N008", $solution_var)?>
							<tr><td style="<?=$fontcolor;?>"><?=$Tb_N008?></td></tr>
<!-- ============================================================================= -->
							<tR><td><?S_graph($Tb_N008_numerical, "연인부부운")?></tD></tr>
<!-- ============================================================================= -->
							<?=$include_bottom_Top_C2;?>
							<?S_SB_img("N009", $solution_var)?>
							<tr><td style="<?=$fontcolor;?>"><?=$Tb_N009?></td></tr>
<!-- ============================================================================= -->
							<tR><td><?S_graph($Tb_N009_numerical, "친구사교운")?></tD></tr>
<!-- ============================================================================= -->
							<?=$include_bottom_Top_C2;?>
							<?S_SB_img("N010", $solution_var)?>
							<tr><td style="<?=$fontcolor;?>"><?=$Tb_N010?></td></tr>
<!-- ============================================================================= -->
							<tR><td><?S_graph($Tb_N010_numerical, "사업합작운")?></tD></tr>
<!-- ============================================================================= -->
							<?=$include_bottom_Top_C2;?>
							<?S_SB_img("N011", $solution_var)?>
							<tr><td style="<?=$fontcolor;?>"><?=$Tb_N011?></td></tr>
<!-- ============================================================================= -->
							<tR><td><?S_graph($Tb_N011_numerical, "직장상사운")?></tD></tr>
<!-- ============================================================================= -->
							<?=$include_bottom_Top_C2;?>
							<?S_SB_img("N012", $solution_var)?>
							<tr><td style="<?=$fontcolor;?>"><?=$Tb_N012?></td></tr>
<!-- ============================================================================= -->
							<tR><td><?S_graph($Tb_N012_numerical, "직장부하운")?></tD></tr>
<!-- ============================================================================= -->
							<?=$include_bottom_Top_C2;?>
							<?S_SB_img("N013", $solution_var)?>
							<tr><td style="<?=$fontcolor;?>"><?=$Tb_N013?></td></tr>
<!-- ============================================================================= -->
							<tR><td><?S_graph($Tb_N013_numerical, "고부운")?></tD></tr>
<!-- ============================================================================= -->
							<?=$include_bottom_Top_C2;?>
							<?S_SB_img("N014", $solution_var)?>
							<tr><td style="<?=$fontcolor;?>"><?=$Tb_N014?></td></tr>
<!-- ============================================================================= -->
							<tR><td><?S_graph($Tb_N014_numerical, "승부대결운")?></tD></tr>
<!-- ============================================================================= -->
							<?=$include_bottom_Top_C2;?>
						</table>
<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>