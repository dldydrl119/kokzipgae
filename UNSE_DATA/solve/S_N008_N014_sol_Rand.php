<?
$random_sung22 = rand(0, 262);

$random_sung = "김$왕$목$음$갈$상$호$당$승$견$낭$창$장$순$강$권$손$노$주$원$변$소$명$구$제$은$진$계$온$범$간$노$강$종$석$근$한$이$곡$조$황$양$하$나$채$두$노$설$기$탁$편$사$피$장$하$화$팽$우$모$풍$아$포$윤$송$배$유$임$빈$천$염$선$방$진$용$부$형$경$전$단$공$반$방$묵$기$장$판$장$안$백$창$정$전$방$변$주$반$채$빈$강$천$궁$방$마$원$내$초$사$서$독$선$남$임$연$황$제$강$개$견$교$내$뇌$누$단$구$단$담$돈$돈$두$미$범$봉$부$비$매$사$사$삼$서$섭$성$소$송$수$수$이$순$순$순$애$야$양$여$연$영$영$한$예$옥$옹$옹$요$운$운$유$자$저$홍$제$종$준$초$초$추$춘$탄$편$호$허$환$후$후$곽$류$신$공$유$추$마$금$모$봉$가$지$호$시$국$조$양$대$국$만$군$박$신$전$남$차$성$지$현$도$연$육$국$흥$태$감$좌$민$승$위$영$묘$채$필$최$오$고$심$양$구$진$강$신$표$인$어$경$복$동$여$시$진$도$평$도$이$해$점$정$서$길$문$유$우$엄$함$석$위$맹$여$정";
$random_sung_split = explode("$", $random_sung);

$msung = substr($random_sung_split, $random_sung22, 2);

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