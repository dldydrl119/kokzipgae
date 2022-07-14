<?
############ 본인<의 수리오행과 발음오행을 레코드에서 가져온다#############
$sql = "SELECT * FROM surioheng WHERE hanja like '$msung'";


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
		 }



########## 입력한 상대방성의  수리오행과 발음오행을 레코드에서 가져온다 ##########
$sql = "SELECT * FROM surioheng WHERE hanja like '$ysung'";
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

####################################################################

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

if ($tot == y1y1) {$number = '01';}
if ($tot == y1d0) {$number = '02';}
if ($tot == d0y1) {$number = '03';}
if ($tot == x1x1) {$number = '04';}
if ($tot == d0x1) {$number = '05';}
if ($tot == x1d0) {$number = '06';}
if ($tot == y1x1) {$number = '07';}
if ($tot == d0d0) {$number = '08';}
if ($tot == x1x2) {$number = '09';}
if ($tot == d0x2) {$number = '10';}

if ($tot == y2y1) {$number = '11';}
if ($tot == y2d0) {$number = '12';}
if ($tot == y1y2) {$number = '13';}
if ($tot == d0y2) {$number = '14';}
if ($tot == x2x1) {$number = '15';}
if ($tot == x2d0) {$number = '16';}
if ($tot == y2x1) {$number = '17';}
if ($tot == y1x2) {$number = '18';}
if ($tot == y2y2) {$number = '19';}
if ($tot == x2x2) {$number = '20';}

if ($tot == x2y1) {$number = '21';}
if ($tot == x2y2) {$number = '22';}
if ($tot == y2x2) {$number = '23';}
if ($tot == x1y1) {$number = '24';}
if ($tot == x1y2) {$number = '25';}


if ($number_var==""){$number_var=$number;}
?>

<tr>
<td>
<table width=400 height="100" border=0 cellspacing=0 cellpadding=5 align='center'>
  <tr>
    <td width="200"  align="right" ><font color=red>본인</font>의 성씨&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=CC0000><b>|</b></font></td>
    <td width="200"  align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size=5><?=$msung?></font>&nbsp;(<?=$my_hangul?>)</td>
  </tr> 
 <tr><td height=1 bgcolor=CC0000 colspan=2></td></tr>
  <tr>
    <td width="200"  align="right" ><font color=red>상대방</font>의 성씨&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=CC0000><b>|</b></font></td>
    <td width="200"  align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size=5><?=$ysung?></font>&nbsp;(<?=$your_hangul?>)</td>
  </tr>
</table>	
</td>
</tR>