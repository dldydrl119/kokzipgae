<?
include "../one/one.php";

$urlinfo = "free";
$selstr = "08";

$ment[1]="세 리듬이 모두 불안정한 상태인 극히 위험한 날.<br>조용히 휴식을 취하며 마음을 편하게 갖는 것이 좋다.<br>판단이나 사건 개입에 극도의 주의가 필요하다.";
$ment[2]="신체리듬과 감성리듬이 위험일이다.<br>높은 지성리듬에 냉정한 판단력을 기대하나 사고 발생 가능성이 높은 날이다.<br>극도로 신중을 기하라.";
$ment[3]="신체리듬과 감성리듬이 위험일이며 지성리듬도 저조하다.<br>둔하고 저조한 상태에 빠져 있는 이 날은 특별한 주의를 통해 말썽을 피하라.<br>역시 사고 나기 쉬운 날이다.";
$ment[4]="신체리듬과 지성리듬이 위험일이다.<br>높은 감성리듬에 기대해야 하나 사고 가능성이 높은 날이다.";
$ment[5]="육체적으로 불안정하고 몹시 지쳐있는 신체리듬 위험일이다.<br>감성리듬과 지성리듬이 높으므로 약간 보완되겠으나<br>사고의 위험이 많은 날이다.";
$ment[6]="신체리듬이 위험일이므로 육체적으로는 지쳐있고 불안정하지만 감성리듬은 고조기이다.<br>높은 감성리듬이 당신의 신체리듬에 도움을 줄 것이다.<br>낮은 지성리듬을 극복하고 적응하는 현명함도 있어야 한다.<br>사고 위험이 높은 날이다.";
$ment[7]="신체리듬과 지성리듬이 위험일이며 감성리듬도 저조하여 사는 것이 힘들고 지겹다.<br>사고율이 높은 날이다.";
$ment[8]="오로지 기대할데는 지성리듬뿐!<br>신체리듬이 불안정하므로 끝장난 기분이 들 것이고 감성적으로는 우울하다.<br>조심해야 할 날이다.";
$ment[9]="감성,지성리듬이 모두 저조하여 위험한 신체리듬을 더욱 악화시킨다.<br>사고를 조심해라.";
$ment[10]="신체적으로 힘이 넘치는 것처럼 느껴지지만 감성리듬과 지성리듬이 위험일이므로 의기소침해질 것이다.<br>행동하기 전에 다시 생각하고 사고를 조심해야 할 날이다.";
$ment[11]="높은 신체리듬과 지성리듬으로 행동과 생각이 풍부하지만 감정을 조심하라<br>감성리듬이 위험일이지 않은가!<br>무기력감에 빠질 위험이 있고 사고 가능성이 있는 날이다.";
$ment[12]="육체적으로는 활력이 넘치나 감성리듬이 위험일이고 지성리듬은 저조하므로<br>말썽이나 함정에 빠지지 않도록 한 번 더 생각하고 행하라.<br>사고가 나기 쉬운 날이다.";
$ment[13]="신체적으로 활기차고 감성적으로 신나는 날이다.<br>지성리듬이 위험일이므로 당신의 생각을 주의깊게 더듬어 보아야 하는 날이다.";
$ment[14]="바로 당신의 날이다.<br>세 개의 리듬이 모두 고조기!<br>이 절호의 기회를 최대로 활용하라.";
$ment[15]="활기차게 기분이 생동하는 날이다.<br>지성리듬이 저조기에 있으니 모든 일에 사려깊게만 행동하면 목표하는 바를 달성할 수 있다.";
$ment[16]="육체적으로 일을 하기에 적합하다.<br>그렇지만 지성리듬이 위험하므로 정신집중을 요하는 일은 피하라.<br>감성리듬이 낮고 지성리듬이 위험일이므로 사고 가능성이 있다.";
$ment[17]="신체리듬이 높으니 가급적 육체적 활동에 전념해라.<br>또한 지성리듬도 높으므로 어떤 결정을 내리는데 알맞는 날이다.<br>나쁜 감성리듬에 말려들지 않도록 감정과 정서를 안정시키고 대인관계에 임하라.";
$ment[18]="결코 경솔하게 행동해서는 안되는 날이다.<br>신체상태는 활력에 넘치고 있으나 감정을 주의해야 한다.<br>지성리듬 또한 저조하므로 모든 결정에 있어서 돌다리도 두드려 보고 건너라.";
$ment[19]="감성리듬과 지성리듬 위험상태이고 신체리듬마저 저조하여 온갖 불상사가 일어날 수 있는 날이다.<br>만사에 신중을 기하고 자중하라.";
$ment[20]="신체리듬은 저조하고 감성리듬은 위험일이다.<br>오로지 기대되는 것은 당신의 높은 지성리듬뿐이다.<br>사고에 조심하라.";
$ment[21]="가급적 만사를 편하게 생각하라.<br>세 리듬이 모두 나쁘므로 성급한 결정은 피하고 많은 휴식을 취하라.<br>육체적으로는 무기력하고 감성리듬이 위험하여 영감이 떠오르지 않는 날이다.";
$ment[22]="신체리듬이 저조기이고 지성리듬이 위험일이지만 높은 감성리듬을 잘 이용하면<br>그런대로 좋은 날이 될 수 있다.<br>사고를 조심하라.";
$ment[23]="육체적으로는 피로를 느끼는 날이지만 감성리듬과 지성리듬이 높으므로<br>모든 것을 극복할 수 있을 것이다.<br>육체적 활동보다는 지적인 활동에 전념하라.";
$ment[24]="감성리듬의 이점을 최대한으로 활용해라.<br>창조적인 일에 전념하면 가장 좋겠다.<br>육체적으로 피로하고 지성적으로는 저조한 날이다.";
$ment[25]="당신의 모든 것을 재점검할 날이다.<br>신체적,감성적으로 침체되고 지성적으로 위험하다.<br>생동감이 없고 적극성도 결여된 날이므로 만사에 조심하라.";
$ment[26]="몸이 무겁고 기분이 우울한 날이지만 높은 지성리듬이 당신을 도와줄 것이다.<br>정다운 친구를 만나거나 음악감상을 하거나 무엇이든 즐거운 일을 통해서 이 날을 잘 넘겨야 한다.<br>기분 전환이 필요한 날이다.";
$ment[27]="좋은 날을 기다리며 휴식을 취해라.<br>신체,감성,지성의 세 리듬이 모두 저조기라는데 대해 그렇게 불안해할 필요는 없다.";
###########################################################################################################################################

$to_year = date("Y");
$to_month = date("m");
$to_day =  date("d");

if (($birth_year < 1900) || ($birth_year > 2200)) {$birth_year = 1900;}
if (($birth_year == "") || ($birth_year == 0)){$birth_year = 1900;}
if (($birth_month == "") || ($birth_month == 0)) {$birth_month = 01;}
if (($birth_day == "") || ($birth_day == 0)) {$birth_day = 01;}

if (((strlen($birth_month)) == 1) && ($birth_month < 10)) {$birth_month = "0".$birth_month;}
if (((strlen($birth_day)) == 1) && ($birth_day < 10)) {$birth_day = "0".$birth_day;}

if (($see_year < 1900) || ($see_year > 2200)) {$see_year = $to_year;}
if (($see_year == "") || ($see_year == 0)){$see_year = $to_year;}
if (($see_month == "") || ($see_month == 0)) {$see_month = $to_month;}
if (($see_day == "") || ($see_day == 0)) {$see_day = $to_day;}

if (((strlen($see_month)) == 1) && ($see_month < 10)) {$see_month = "0".$see_month;}
if (((strlen($see_day)) == 1) && ($see_day < 10)) {$see_day = "0".$see_day;}

$from = $birth_year.$birth_month.$birth_day; 
$see = $see_year.$see_month.$see_day; 
$to = $to_year.$to_month.$to_day; 

###############################################################################################
$result = mysql_query("SELECT * FROM LunarToSolar WHERE solar_date = '$from'");

$rows = mysql_num_rows($result);

$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++)
{
	mysql_data_seek($result,$i);
	$row = mysql_fetch_array($result);
	$num = stripslashes($row[num]);
}

$from_num = $num;

###############################################################################################
$result = mysql_query("SELECT * FROM LunarToSolar WHERE solar_date = '$see'");

$rows = mysql_num_rows($result);

$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++)
{
	mysql_data_seek($result,$i);
	$row = mysql_fetch_array($result);
	$num = stripslashes($row[num]);
}

$see_num = $num;

###############################################################################################

$result = mysql_query("SELECT * FROM LunarToSolar WHERE solar_date = '$to'");

$rows = mysql_num_rows($result);

$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++)
{
	mysql_data_seek($result,$i);
	$row = mysql_fetch_array($result);
	$num = stripslashes($row[num]);
}

$to_num = $num;

###############################################################################################

$TotalSeeDay = ($see_num - $from_num ); 
$TotalLifeDay = ($to_num - $from_num ); 

$p_today=$TotalSeeDay%23;
$e_today=$TotalSeeDay%28;
$m_today=$TotalSeeDay%33;

$p_yesday=($TotalSeeDay-1)%23;
$e_yesday=($TotalSeeDay-1)%28;
$m_yesday=($TotalSeeDay-1)%33;

$p_tomo=($TotalSeeDay+1)%23;
$e_tomo=($TotalSeeDay+1)%28;
$m_tomo=($TotalSeeDay+1)%33;

#######################################################################################################

if ($state == 'find') {
	$findday=0;
	$CHK="startLoop";
	$TempDay=intval($TotalSeeDay);
	
	switch ($p_find)
	{
		case "저조기":
			$p_find="<font color=#547d94><b>저조기</b></font>";
			$GETpCHK=300;
			break;
		case "고조기":
			$p_find="<font color=blue><b>고조기</b></font>";
			$GETpCHK=200;
			break;
		case "위험일":
			$p_find="<font color=red><b>위험일</b></font>";
			$GETpCHK=100;
			break;
	}
	
	switch ($e_find)
	{
		case "저조기":
			$e_find="<font color=#547d94><b>저조기</b></font>";
			$GETeCHK=30;
			break;
		case "고조기":
			$e_find="<font color=blue><b>고조기</b></font>";
			$GETeCHK=20;
			break;
		case "위험일":
			$e_find="<font color=red><b>위험일</b></font>";
			$GETeCHK=10;
			break;
	} 
	
	switch ($m_find)
	{
		case "저조기":
			$m_find="<font color=#547d94><b>저조기</b></font>";
			$GETmCHK=3;
			break;
		case "고조기":
			$m_find="<font color=blue><b>고조기</b></font>";
			$GETmCHK=2;
			break;
		case "위험일":
			$m_find="<font color=red><b>위험일</b></font>";
			$GETmCHK=1;
			break;
	} 

	$GETCHK=intval($GETpCHK)+intval($GETeCHK)+intval($GETmCHK);
	
	do
	{
		$findday=$findday+1;
		$TempDay=intval($TempDay)+1;
		$p_todayy=$TempDay%23;
		$e_todayy=$TempDay%28;
		$m_todayy=$TempDay%33;

		switch ($GETCHK)
		{
			case 111:
				if (($p_todayy==0 || $p_todayy==12) && ($e_todayy==0 || $e_todayy==14) && ($m_todayy==0 || $m_todayy==17)){$CHK="stopLoop";} 
				break;
			case 112:
				if (($p_todayy==0 || $p_todayy==12) && ($e_todayy==0 || $e_todayy==14) && $m_todayy>=1 && $m_todayy<=16){$CHK="stopLoop";} 
				break;
			case 113:
				if (($p_todayy==0 || $p_todayy==12) && ($e_todayy==0 || $e_todayy==14) && $m_todayy>=18 && $m_todayy<=32){$CHK="stopLoop";} 
				break;
			case 121:
				if (($p_todayy==0 || $p_todayy==12) && $e_todayy>=1 && $e_todayy<=13 && ($m_todayy==0 || $m_todayy==17)){$CHK="stopLoop";} 
				break;
			case 122:
				if (($p_todayy==0 || $p_todayy==12) && $e_todayy>=1 && $e_todayy<=13 && $m_todayy>=1 && $m_todayy<=16){$CHK="stopLoop";} 
				break;
			case 123:
				if (($p_todayy==0 || $p_todayy==12) && $e_todayy>=1 && $e_todayy<=13 && $m_todayy>=18 && $m_todayy<=32){$CHK="stopLoop";} 
				break;
			case 131:
				if (($p_todayy==0 || $p_todayy==12) && $e_todayy>=18 && $e_todayy<=32 && ($m_todayy==0 || $m_todayy==17)){$CHK="stopLoop";} 
				break;
			case 132:
				if (($p_todayy==0 || $p_todayy==12) && $e_todayy>=18 && $e_todayy<=32 && $m_todayy>=1 && $m_todayy<=16){$CHK="stopLoop";} 
				break;
			case 133:
				if (($p_todayy==0 || $p_todayy==12) && $e_todayy>=18 && $e_todayy<=32 && $m_todayy>=18 && $m_todayy<=32){$CHK="stopLoop";} 
				break;
			case 211:
				if ($p_todayy>=1 && $p_todayy<=11 && ($e_todayy==0 || $e_todayy==14) && ($m_todayy==0 || $m_todayy==17)){$CHK="stopLoop";} 
				break;
			case 212:
				if ($p_todayy>=1 && $p_todayy<=11 && ($e_todayy==0 || $e_todayy==14) && $m_todayy>=1 && $m_todayy<=16){$CHK="stopLoop";} 
				break;
			case 213:
				if ($p_todayy>=1 && $p_todayy<=22 && ($e_todayy==0 || $e_todayy==14) && $m_todayy>=18 && $m_todayy<=32){$CHK="stopLoop";} 
				break;
			case 221:
				if ($p_todayy>=1 && $p_todayy<=11 && $e_todayy>=1 && $e_todayy<=13 && ($m_todayy==0 || $m_todayy==17)){$CHK="stopLoop";} 
				break;
			case 222:
				if ($p_todayy>=1 && $p_todayy<=11 && $e_todayy>=1 && $e_todayy<=13 && $m_todayy>=1 && $m_todayy<=16){$CHK="stopLoop";} 
				break;
			case 223:
				if ($p_todayy>=1 && $p_todayy<=11 && $e_todayy>=1 && $e_todayy<=13 && $m_todayy>=18 && $m_todayy<=32){$CHK="stopLoop";} 
				break;
			case 231:
				if ($p_todayy>=1 && $p_todayy<=11 && $e_todayy>=15 && $e_todayy<=27 && ($m_todayy==0 || $m_todayy==17)){$CHK="stopLoop";} 
				break;
			case 232:
				if ($p_todayy>=1 && $p_todayy<=11 && $e_todayy>=15 && $e_todayy<=27 && $m_todayy>=1 && $m_todayy<=16){$CHK="stopLoop";} 
				break;
			case 233:
				if ($p_todayy>=1 && $p_todayy<=11 && $e_todayy>=15 && $e_todayy<=27 && $m_todayy>=18 && $m_todayy<=32){$CHK="stopLoop";} 
				break;      
			case 311:
				if ($p_todayy>=13 && $p_todayy<=22 && ($e_todayy==0 || $e_todayy==14) && ($m_todayy==0 || $m_todayy==17)){$CHK="stopLoop";} 
				break;
			case 312:
				if ($p_todayy>=13 && $p_todayy<=22 && ($e_todayy==0 || $e_todayy==14) && $m_todayy>=1 && $m_todayy<=16){$CHK="stopLoop";} 
				break;
			case 313:
				if ($p_todayy>=13 && $p_todayy<=22 && ($e_todayy==0 || $e_todayy==14) && $m_todayy>=18 && $m_todayy<=32){$CHK="stopLoop";} 
				break;
			case 321:
				if ($p_todayy>=13 && $p_todayy<=22 && $e_todayy>=1 && $e_todayy<=13 && ($m_todayy==0 || $m_todayy==17)){$CHK="stopLoop";} 
				break;
			case 322:
				if ($p_todayy>=13 && $p_todayy<=22 && $e_todayy>=1 && $e_todayy<=13 && $m_todayy>=1 && $m_todayy<=16){$CHK="stopLoop";} 
				break;
			case 323:
				if ($p_todayy>=13 && $p_todayy<=22 && $e_todayy>=1 && $e_todayy<=13 && $m_todayy>=18 && $m_todayy<=32){$CHK="stopLoop";} 
				break;
			case 331:
				if ($p_todayy>=13 && $p_todayy<=22 && $e_todayy>=15 && $e_todayy<=27 && ($m_todayy==0 || $m_todayy==17)){$CHK="stopLoop";} 
				break;
			case 332:
				if ($p_todayy>=13 && $p_todayy<=22 && $e_todayy>=15 && $e_todayy<=27 && $m_todayy>=1 && $m_todayy<=16){$CHK="stopLoop";} 
				break;
			case 333:
				if ($p_todayy>=13 && $p_todayy<=22 && $e_todayy>=15 && $e_todayy<=27 && $m_todayy>=18 && $m_todayy<=32){$CHK="stopLoop";} 
				break;
		} 
	}
  
	while ($CHK != "stopLoop") ;
	{
		$TotalSeeDay = $TempDay;

		$SeeDay = date('Ymd',mktime(0,0,0,$see_month,$see_day+$findday,$see_year)); 
		$see_year = substr($SeeDay,0,4);
		$see_month = substr($SeeDay,4,2);
		$see_day = substr($SeeDay,6,2);
		//echo "$TotalSeeDay = $TempDay   $CHK / $SeeDay/ ,$see_year,$see_month,$see_day";
	}
}

######################################################################################################################

switch ($p_today)
{
	case 0:		case 12:
		$p_mark="<font color=red><b>위험일</b></font>";
		$biocheck[1]=100;
		break;
	case 1:case 2:case 3:case 4:case 5:case 6:case 7:case 8:case 9:case 10:case 11:
		$p_mark="<font color=blue><b>고조기</b></font>";
		$biocheck[1]=200;
		break;
	case 13:case 14:case 15:case 16:case 17:case 18:case 19:case 20:case 21:case 22:
		$p_mark="<font color=#547d94><b>저조기</b></font>";
		$biocheck[1]=300;
		break;
} 

switch ($e_today)
{
	case 0:case 14:
		$e_mark="<font color=red><b>위험일</b></font>";
		$biocheck[3]=10;
		break;
	case 1:case 2:case 3:case 4:case 5:case 6:case 7:case 8:case 9:case 10:case 11:case 12:case 13:
		$e_mark="<font color=blue><b>고조기</b></font>";
		$biocheck[3]=20;
		break;
	case 15:case 16:case 17:case 18:case 19:case 20:case 21:case 22:case 23:case 24:case 25:case 26:case 27:
		$e_mark="<font color=#547d94><b>저조기</b></font>";
		$biocheck[3]=30;
		break;
} 

switch ($m_today)
{
	case 0:case 17:
		$m_mark="<font color=red><b>위험일</b></font>";
		$biocheck[2]=1;
		break;
	case 1:case 2:case 3:case 4:case 5:case 6:case 7:case 8:case 9:case 10:case 11:case 12:case 13:case 14:case 15:case 16:
		$m_mark="<font color=blue><b>고조기</b></font>";
		$biocheck[2]=2;
		break;
	case 18:case 19:case 20:case 21:case 22:case 23:case 24:case 25:case 26:case 27:case 28:case 29:case 30:case 31:case 32:
		$m_mark="<font color=#547d94><b>저조기</b></font>";
		$biocheck[2]=3;
		break;
}

$check=$biocheck[1]+$biocheck[2]+$biocheck[3];

if ($state == 'find') {
	if ($p_find == '<font color=red><b>위험일</b></font>') {$biocheck[1] = 100;}
	if ($p_find == '<font color=blue><b>고조기</b></font>') {$biocheck[1] = 200;}
	if ($p_find == '<font color=#547d94><b>저조기</b></font>') {$biocheck[1] = 300;}

	if ($e_find == '<font color=red><b>위험일</b></font>') {$biocheck[3] = 10;}
	if ($e_find == '<font color=blue><b>고조기</b></font>') {$biocheck[3] = 20;}
	if ($e_find == '<font color=#547d94><b>저조기</b></font>') {$biocheck[3] = 30;}

	if ($m_find == '<font color=red><b>위험일</b></font>') {$biocheck[2] = 1;}
	if ($m_find == '<font color=blue><b>고조기</b></font>') {$biocheck[2] = 2;}
	if ($m_find == '<font color=#547d94><b>저조기</b></font>') {$biocheck[3] = 3;}

	$check=$biocheck[1]+$biocheck[2]+$biocheck[3];
}

switch ($check)
{
	case 111:	$bioment=$ment[1];	break;
	case 112:	$bioment=$ment[2];	break;
	case 113:	$bioment=$ment[3];	break;
	case 121:	$bioment=$ment[4];	break;
	case 122:	$bioment=$ment[5];	break;
	case 123:	$bioment=$ment[6];	break;
	case 131:	$bioment=$ment[7];	break;
	case 132:	$bioment=$ment[8];	break;
	case 133:	$bioment=$ment[9];	break;
	case 211:	$bioment=$ment[10];	break;
	case 212:	$bioment=$ment[11];	break;
	case 213:	$bioment=$ment[12];	break;
	case 221:	$bioment=$ment[13];	break;
	case 222:	$bioment=$ment[14];	break;
	case 223:	$bioment=$ment[15];	break;
	case 231:	$bioment=$ment[16];	break;	
	case 232:	$bioment=$ment[17];	break;
	case 233:	$bioment=$ment[18];	break;
	case 311:	$bioment=$ment[19];	break;
	case 312:	$bioment=$ment[20];	break;
	case 313:	$bioment=$ment[21];	break;
	case 321:	$bioment=$ment[22];	break;
	case 322:	$bioment=$ment[23];	break;
	case 323:	$bioment=$ment[24];	break;
	case 331:	$bioment=$ment[25];	break;	
	case 332:	$bioment=$ment[26];	break;
	case 333:	$bioment=$ment[27];	break;
} 

########################################################################################################################
$pi=3.1415926535897932384626433832795;

$p_today=Sin(($TotalSeeDay/23)*2*$pi)*100; //오늘
$e_today=Sin(($TotalSeeDay/28)*2*$pi)*100;
$m_today=Sin(($TotalSeeDay/33)*2*$pi)*100;

$p_yesday=Sin((($TotalSeeDay-1)/23)*2*$pi)*100; //어제
$e_yesday=Sin((($TotalSeeDay-1)/28)*2*$pi)*100;
$m_yesday=Sin((($TotalSeeDay-1)/33)*2*$pi)*100;

$p_tomo=Sin((($TotalSeeDay+1)/23)*2*$pi)*100; //내일
$e_tomo=Sin((($TotalSeeDay+1)/28)*2*$pi)*100;
$m_tomo=Sin((($TotalSeeDay+1)/33)*2*$pi)*100;


if($p_today>0){
	$p_today="<font color=blue>▲&nbsp;".intval($p_today)."</font>";
}else{
	if($p_today<0){
		$p_today=str_replace("-","<font color=red>▼&nbsp;",number_format($p_today))."</font>";
	}else{
		$p_today="<font color=#9933FF>&nbsp;".intval($p_today)."</font>";
	}
}

if ($e_today>0){
	$e_today="<font color=blue>▲&nbsp;".intval($e_today)."</font>";
}else{
	if ($e_today<0){
		$e_today=str_replace("-","<font color=red>▼&nbsp;",number_format($e_today))."</font>";
	}else{
		$e_today="<font color=#9933FF>&nbsp;".intval($e_today)."</font>";
	}
}

if ($m_today>0){
	$m_today="<font color=blue>▲&nbsp;".intval($m_today)."</font>";
}else{
	if ($m_today<0){
		$m_today=str_replace("-","<font color=red>▼&nbsp;",number_format($m_today))."</font>";
	}else{
		$m_today="<font color=#9933FF>&nbsp;".intval($m_today)."</font>";
	}
}

###########
if ($p_yesday>0){
	$p_yesday="<font color=blue>▲&nbsp;".intval($p_yesday)."</font>";
}else{
	if ($p_yesday<0){
		$p_yesday=str_replace("-","<font color=red>▼&nbsp;",number_format($p_yesday))."</font>";
	}else{
		$p_yesday="<font color=#9933FF>&nbsp;".intval($p_yesday)."</font>";
	}
}

if ($e_yesday>0){
	$e_yesday="<font color=blue>▲&nbsp;".intval($e_yesday)."</font>";
}else{
	if ($e_yesday<0){
		$e_yesday=str_replace("-","<font color=red>▼&nbsp;",number_format($e_yesday))."</font>";
	}else{
		$e_yesday="<font color=#9933FF>&nbsp;".intval($e_yesday)."</font>";
	}
}

if ($m_yesday>0){
	$m_yesday="<font color=blue>▲&nbsp;".intval($m_yesday)."</font>";
}else{
	if ($m_yesday<0) {
		$m_yesday=str_replace("-","<font color=red>▼&nbsp;",number_format($m_yesday))."</font>";
	}else{
		$m_yesday="<font color=#9933FF>&nbsp;".intval($m_yesday)."</font>";
	}
}

#############

if ($p_tomo>0){
	$p_tomo="<font color=blue>▲&nbsp;".intval($p_tomo)."</font>";
}else{
	if ($p_tomo<0){
		$p_tomo=str_replace("-","<font color=red>▼&nbsp;",number_format($p_tomo))."</font>";
	}else{
		$p_tomo="<font color=#9933FF>&nbsp;".intval($p_tomo)."</font>";
	}
}


if ($e_tomo>0){
	$e_tomo="<font color=blue>▲&nbsp;".intval($e_tomo)."</font>";
}else{
	if ($e_tomo<0){
		$e_tomo=str_replace("-","<font color=red>▼&nbsp;",number_format($e_tomo))."</font>";
	}else{
		$e_tomo="<font color=#9933FF>&nbsp;".intval($e_tomo)."</font>";
	}
}

if ($m_tomo>0){
	$m_tomo="<font color=blue>▲&nbsp;".intval($m_tomo)."</font>";
}else{
	if ($m_tomo<0){
		$m_tomo=str_replace("-","<font color=red>▼&nbsp;",number_format($m_tomo))."</font>";
	}else{
		$m_tomo="<font color=#9933FF>&nbsp;".intval($m_tomo)."</font>";
	}
}

#########################################################################################################################

switch ($see_month){
	case 1:case 3:case 5:case 7:case 8:case 10:case 12:
		$end_day=31;
		break;
	case 2:
		if (($see_year / 4) == 0 && ($see_year / 200) != 0){
			$end_day=29;
		}else{
			$end_day=28;
		} 
		break;
		
	case 4:case 6:case 9:case 11:
		$end_day=30;
		break;
} 
?>
</head>
<script language=javascript>
<!--
function EndDay(A_Y,A_M){//월별 말일 check하는 함수
	if ((A_M==1)||(A_M==3)||(A_M==5)||(A_M==7)||(A_M==8)||(A_M==10)||(A_M==12))
		return 31;
	else
		if(A_M==2) {
			if ((A_Y%4==0) && ((A_Y/4)%200!=0))
				return 29;
			else
				return 28;
		}
		else
			return 30;
}
function prev(see_month,see_monthPrev,see_year) {
	A_Y=document.frmBio.see_year.value;
	A_MP=see_monthPrev;
	end_dayP=EndDay(A_Y,A_MP);
	A_M=see_month;
	end_day=EndDay(A_Y,A_M);
	if (end_dayP <= end_day) {
		if (document.frmBio.see_day.value>=end_dayP)
			document.frmBio.see_day.value=end_dayP;
	}	
	document.frmBio.see_month.value = A_MP;
	document.frmBio.see_year.value = see_year;
	document.frmBio.submit();
}

function next(see_month,see_monthNext,see_year) {
	A_Y=document.frmBio.see_year.value;
	A_MN=see_monthNext;
	end_dayN=EndDay(A_Y,A_MN);
	A_M=see_month;
	end_day=EndDay(A_Y,A_M);
	if (end_dayN <= end_day) {
		if (document.frmBio.see_day.value>=end_dayN)
			document.frmBio.see_day.value=end_dayN;
	}
	document.frmBio.see_month.value = A_MN;
	document.frmBio.see_year.value = see_year;
	document.frmBio.submit();
}

function initsize() {
	try {
		//self.resizeTo(document.body.scrollWidth, document.body.scrollHeight);
	} catch(e) {};
}
//-->
</SCRIPT>
<script language=javascript src="/js/newbio.js"></script>
<SCRIPT LANGUAGE="JavaScript" Src="/incs/javaEmbed/write.js"></SCRIPT>
<link rel=StyleSheet href='/style.css' type='text/css'>
<BODY leftMargin='0' topMargin='0' marginwidth='0' marginheight='0' onload="initsize();">
<table width="767" cellpadding="0" cellspacing="0">
	<tR>
		<tD width="7"></tD>
		<tD width="601" valign="top" align="center">

		<?include "../incs/loginbox.php";?>

		<form name="signform" id="signform" method=post style="display : inline;">

		<input type="hidden" name="urlinfo" value="<?=$urlinfo;?>">
		<input type="hidden" name="sel" value="<?=$sel;?>">

		<?include "../forms/unse_info.php";?>

		<table width=510>
			<tr>
				<td align=center>
				<br>
				<form name=frmBio2 method=post action="<? echo "$PHP_SELF"; ?>">
				<input type=hidden name=state value=find>
				<input type=hidden name=birth_year>
				<input type=hidden name=birth_month>
				<input type=hidden name=birth_day>
				<input type=hidden name=see_year>
				<input type=hidden name=see_month>
				<input type=hidden name=see_day>
				<input type=hidden name=p_find>
				<input type=hidden name=e_find>
				<input type=hidden name=m_find>
				</form>
				<?if ($state == 'find') { $p_mark = $p_find; $e_mark = $e_find; $m_mark = $m_find;}?>
				<div align=center>
				<table width=510 border=1 cellspacing=0 cellpadding=5 bordercolorlight=999966 bordercolordark=FFFFFF align='center'>
					<tr bgcolor=c2c5b6>   
						<td align=center><b>바이오리듬</b></td>
					</tr>
				</table>
				<br>
				<form name=frmBio method=post action="<? echo "$PHP_SELF"; ?>" >
				<TABLE width=550  border=1 cellspacing=0 cellpadding=1 bordercolorlight=999966 bordercolordark=FFFFFF align='center'>
					<TR>
						<TD  width=275 valign=top>
						<TABLE border=0 cellPadding=5 cellSpacing=0 width=275>
							<TR align=left >
								<TD colSpan=2 bgcolor=c8c8aa ><b>생년월일과 조회하실 날짜를 입력하세요.</b></TD>
							</TR>	
							<TR>
								<TD colSpan=2>
								<TABLE border=0 cellPadding=0 cellSpacing=1 width="100%">
									<TR>
										<TD align=middle >생년월일</TD>
										<TD align=left colSpan=2><B><input type=text name=birth_year value=<? echo "$birth_year"; ?> size=4 maxlength=4 OnKeyUp='check1();'>년 <input type=text name=birth_month value=<? echo "$birth_month"; ?> size=2 maxlength=2 OnKeyUp='check2();'>월 <input type=text name=birth_day value=<? echo "$birth_day"; ?> size=2 maxlength=2 OnKeyUp='check3();'>일</B></TD>
									</TR>
									<TR>
										<TD align=middle >조회날짜</TD>
										<TD align=left ><B><input type=text name=see_year value=<? echo "$see_year"; ?> size=4 maxlength=4 OnKeyUp='check4();'>년 <input type=text name=see_month value=<? echo "$see_month"; ?> size=2 maxlength=2 OnKeyUp='check5();'>월 <input type=text name=see_day value=<? echo "$see_day"; ?> size=2 maxlength=2>일</b></TD>
										<TD align=right ><input type=button name=seeBio value='조회' onClick='sendBio();'></TD>
									</TR>
								</TABLE>
								</TD>
							</TR>	
							<TR>
								<TD colspan=2 align=right  width=250><font color=red> 월별로 보기 </font>&nbsp;&nbsp;
								<input type=button name=prevmonth value="저번달" onClick='prev(<? echo intval($see_month); ?>,<? if ($see_month=='01') {$see_month='13'; $see_year=($see_year)-1; } echo intval($see_month)-1; ?>,<? echo intval($see_year); ?>);'>
								 <input type=button name=nextmonth value="다음달" onClick='next(<?  if ($see_month=='13') {$see_month='01'; $see_year=($see_year)+1; }  echo intval($see_month); ?>,<? if ($see_month=='12') {$see_month='0'; $see_year=($see_year)+1; } echo intval($see_month)+1; ?>,<? echo intval($see_year); ?>);'></TD>
							</TR>
						</TABLE>
						</TD>
						<TD width=275>
						<TABLE border=0 cellPadding=5 cellSpacing=0 width=275>
							<TR>
								<TD bgcolor=c8c8aa><b>날짜별 리듬을 찾으세요?</b></TD>
							</TR>
							<TR>
								<TD>
								<TABLE border=0 cellPadding=0 cellSpacing=0 >
									<TR>
										<TD align=middle vAlign=top>신체리듬</TD>
										<TD align=middle vAlign=top>감성리듬</TD>
										<TD align=middle vAlign=top>지성리듬</TD>
										<TD>&nbsp;</TD>
									</TR>
									<TR>
										<TD align=middle vAlign=bottom>&nbsp; 
										<select name=p_find>										
										<option name = p_find value="위험일" <?if ((empty($HTTP_GET_VARS["p_find"]) ? $HTTP_POST_VARS["p_find"] : $HTTP_GET_VARS["p_find"])=="위험일"){echo "selected";} ?>>위험일
										<option name = p_find value="고조기" <?if ((empty($HTTP_GET_VARS["p_find"]) ? $HTTP_POST_VARS["p_find"] : $HTTP_GET_VARS["p_find"])=="고조기"){echo "selected";} ?>>고조기
										<option name = p_find value="저조기" <?if ((empty($HTTP_GET_VARS["p_find"]) ? $HTTP_POST_VARS["p_find"] : $HTTP_GET_VARS["p_find"])=="저조기"){echo "selected";} ?>>저조기
										</select>  
										</td>
										<TD align=middle vAlign=bottom>&nbsp; 
										<select name=e_find>
										<option name = e_find value="위험일" <?if ((empty($HTTP_GET_VARS["e_find"]) ? $HTTP_POST_VARS["e_find"] : $HTTP_GET_VARS["e_find"])=="위험일"){echo "selected";} ?>>위험일
										<option name = e_find value="고조기" <?if ((empty($HTTP_GET_VARS["e_find"]) ? $HTTP_POST_VARS["e_find"] : $HTTP_GET_VARS["e_find"])=="고조기"){echo "selected";} ?>>고조기
										<option name = e_find value="저조기" <?if ((empty($HTTP_GET_VARS["e_find"]) ? $HTTP_POST_VARS["e_find"] : $HTTP_GET_VARS["e_find"])=="저조기"){echo "selected";} ?>>저조기
										</select>
										</td>
										<TD align=middle vAlign=bottom>&nbsp; 
										<select name=m_find>
										<option name = m_find value="위험일" <?if ((empty($HTTP_GET_VARS["m_find"]) ? $HTTP_POST_VARS["m_find"] : $HTTP_GET_VARS["m_find"])=="위험일"){echo "selected";} ?>>위험일
										<option name = m_find value="고조기" <?if ((empty($HTTP_GET_VARS["m_find"]) ? $HTTP_POST_VARS["m_find"] : $HTTP_GET_VARS["m_find"])=="고조기"){echo "selected";} ?>>고조기
										<option name = m_find value="저조기" <?if ((empty($HTTP_GET_VARS["m_find"]) ? $HTTP_POST_VARS["m_find"] : $HTTP_GET_VARS["m_find"])=="저조기"){echo "selected";} ?>>저조기
										</select>
										</TD>
										<TD>&nbsp;&nbsp;<input type=button name=send value='검색' onClick='sendBio2();'></TD>
									</TR>
								</TABLE>
								<BR>
								<center>▶ 검색결과일 : <font color=red><? echo "$see_year"; ?></font>년 <font color=red><? echo "$see_month"; ?></font>월 <font color=red><? echo "$see_day"; ?></font>일 </center>
								</TD>
							</TR>
						</TABLE>
						</FORM>
						</TD>
					</TR>
					<TR>
						<TD colSpan=2 align=center>
						<br>
						<?
						echo"<B><FONT color=navy>바이오리듬</FONT> (오늘까지 : <font color=blue>$TotalLifeDay</font> 일, 조회일까지 : <font color=blue>$TotalSeeDay</font> 일)</B>";
						?>	
						<br>
						<TABLE border=1 cellspacing=0 cellpadding=1 bordercolorlight=999966 bordercolordark=FFFFFF align='center'>
							<TR>
								<TD bgColor=#cccccc>
								<TABLE border=0 cellPadding=3 cellSpacing=1 width="100%">
									<TR bgColor=000000>
										<TD bgColor=000000 colSpan=5><IMG height=0  src="img/space.gif" width=1></TD>
										<TD width=330><IMG height=0 src="img/space.gif" width=1></TD>
									</TR>
									<TR>
										<TD align=middle bgColor=#fffbec ><B>구분</B></TD>
										<TD align=middle bgColor=#fffbec ><B>어제</B></TD>
										<TD align=middle bgColor=#fff8cd ><B>오늘</B></TD>
										<TD align=middle bgColor=#fffbec ><B>내일</B></TD>
										<TD align=middle bgColor=#fffbec width=73><B>비고</B></TD>
										<TD align=left rowSpan=4 vAlign=top width=360><IMG height=11 src="/images/bio_img/icon02.gif" width=11> <FONT  color=darkred size=3><B>해석</B></FONT> <BR>: <FONT color=#000000 size=3><? echo"$bioment "; ?></FONT></TD>
									</TR>
									<TR >
										<TD align=middle bgColor=#f2f2f2 ><FONT color=#8c0e26><B>신체</B></FONT></TD>
										<TD align=middle  bgColor=#f2f2f2 ><? echo"$p_yesday"; ?></TD>
										<TD align=middle bgColor=#fff8cd ><? echo"$p_today"; ?></TD>
										<TD align=middle   bgColor=#f2f2f2><? echo"$p_tomo"; ?></TD>
										<TD align=middle  width=73  bgColor=#f2f2f2><? echo"$p_mark"; ?></TD>
									</TR>
									<TR >
										<TD align=middle bgColor=#f2f2f2 ><B><FONT  color=#0e1e8c>감성</FONT></B></TD>
										<TD align=middle  bgColor=#f2f2f2 ><? echo"$e_yesday"; ?></TD>
										<TD align=middle bgColor=#fff8cd ><? echo"$e_today"; ?></TD>
										<TD align=middle  bgColor=#f2f2f2 ><? echo"$e_tomo"; ?></TD>
										<TD align=middle  width=73 bgColor=#f2f2f2><? echo"$e_mark"; ?></TD>
									</TR>
									<TR >
										<TD align=middle bgColor=#f2f2f2 ><FONT color=#438c0e><B>지성</B></FONT></TD>
										<TD align=middle  bgColor=#f2f2f2 ><? echo"$m_yesday"; ?></TD>
										<TD align=middle bgColor=#fff8cd ><? echo"$m_today"; ?></TD>
										<TD align=middle  bgColor=#f2f2f2 ><? echo"$m_tomo"; ?></TD>
										<TD align=middle  width=73 bgColor=#f2f2f2><? echo"$m_mark"; ?></TD>
									</TR>
								</TABLE>
								</TD>
							</TR>
						</TABLE>
						</TD>
					</TR>
				</TABLE>
				<BR>
				<DIV>
				</td>
			</tr>
			<tr>
				<td>
				<TABLE  border=0 width=510 cellspacing=0 cellpadding=1 bordercolorlight=999966 bordercolordark=FFFFFF align='center'>
				<TR>
				<TD WIDTH=120 >
				<TABLE align=center border=0 cellPadding=0 cellSpacing=0 >
				<TR>
				<TD align=middle><IMG height=12  src="/images/bio_img/bio_ri_01.gif" width=62>
				<BR>(<? echo "$p_today"; ?>&nbsp;<? echo "$p_mark"; ?>)
				</TD></TR></TABLE>
				<BR>     <BR>     <BR>     <BR>     <BR>     <BR><BR>     <BR><BR>     <BR>
				<TABLE align=center border=0 cellPadding=0 cellSpacing=0 >
				<TR>
				<TD align=middle ><IMG height=12  src="/images/bio_img/bio_ri_02.gif" width=62>
				<BR>(<? echo "$e_today"; ?>&nbsp;<? echo "$e_mark"; ?>)
				</TD></TR></TABLE>
				<BR>     <BR>     <BR>     <BR>     <BR>     <BR><BR>     <BR><BR>     <BR>
				<TABLE align=center border=0 cellPadding=0 cellSpacing=0 >
				<TR>
				<TD align=middle ><IMG height=12 src="/images/bio_img/bio_ri_03.gif" width=62> 
						  <BR>(<? echo "$m_today"; ?>&nbsp;<? echo "$m_mark"; ?>)
						  </TD></TR></TABLE>
						  
						  
						  
						  
					  </TD>

					<TD colSpan=3>
					  <TABLE  border=0 cellPadding=0 cellSpacing=0>
							  <TR>
								 <TD>
							<TABLE align=center border=0 cellPadding=0 cellSpacing=1  >
							  <TR>





				<? 
				 
						  for ($i=1; $i<=intval($end_day); $i=$i+1)
								  {
									$j=$i-intval($see_day);
									$physic[$i]=intval(Sin((($TotalSeeDay+$j)/23)*2*$pi)*100);

								  } 

								  for ($i=1; $i<=intval($end_day); $i=$i+1)
								  {
									$j=$i-intval($see_day);
									$emotion[$i]=intval(Sin((($TotalSeeDay+$j)/28)*2*$pi)*100);

								  } 

								  for ($i=1; $i<=intval($end_day); $i=$i+1)
								  {
									$j=$i-intval($see_day);
									$mental[$i]=intval(Sin((($TotalSeeDay+$j)/33)*2*$pi)*100);

								  } 

					  
						  
						  
						  for ($i=1; $i<=intval($end_day); $i=$i+1)
								  {
									echo "<td valign=bottom bgcolor=navy width=16><center>";
									echo "<a href=modujobio.php3?birth_year=".$birth_year."&birth_month=".$birth_month."&birth_day=".$birth_day."&see_year=".$see_year."&see_month=".$see_month."&see_day=".$i."><font size=2>".$i."</font></a></center></td>";

								  } 

								  echo "</tr>	<tr>";
								  
						  for ($i=1; $i<=intval($end_day); $i=$i+1)
								  {
									if ($i==intval($see_day))
									{

									  echo "<td valign=bottom bgcolor=gold>";
									}
									  else
									{

									  echo "<td valign=bottom bgcolor=c8c8aa >";
									} 

									if ($physic[$i]>0)
									{

									   $img_physic[$i] = $physic[$i];
							   $img_physic[$i] = $img_physic[$i] * 0.5;

									  echo "<center><font size=-1>".intval($physic[$i])."</center><img src=/images/bio_img/red.gif border=0 width=10 height=".$img_physic[$i]."></td>";
									}
									  else
									{

									  echo "<img src=/images/bio_img/white.gif border=0 width=10 height=1></td>";
									} 


								  } 

								  echo "</tr>	<tr>";
								  
						  for ($i=1; $i<=intval($end_day); $i=$i+1)
								  {
									if ($i==intval($see_day))
									{

									  echo "<td valign=top bgcolor=gold>";
									}
									  else
									{

									  echo "<td valign=top bgcolor=c8c8aa>";
									} 

									if ($physic[$i]<0)
									{

									   $img_physic[$i] = $physic[$i];
							   $img_physic[$i] = $img_physic[$i] * 0.5;

							  
							  
							  echo "<img src=/images/bio_img/red.gif border=0 width=10 height=".Abs($img_physic[$i])."><br><center><font size=-1>".intval(Abs($physic[$i]))."</font></center></td>";
									}
									  else
									{

									  echo "<img src=/images/bio_img/white.gif border=0 width=10 height=1></td>";
									} 


								  } 

								  echo "</tr></table><br></td></tr><tr  align=center><td><table  border=0 cellpadding=0 cellspacing=1><tr>";
								  
						  for ($i=1; $i<=intval($end_day); $i=$i+1)
								  {
									echo "<td valign=bottom bgcolor=navy width=16><center>";
									echo "<a href=modujobio.php3?birth_year=".$birth_year."&birth_month=".$birth_month."&birth_day=".$birth_day."&see_year=".$see_year."&see_month=".$see_month."&see_day=".$i."><font size=2>".$i."</font></a></center></td>";

								  } 

								  echo "</tr><tr>";
								  for ($i=1; $i<=intval($end_day); $i=$i+1)
								  {
									if ($i==intval($see_day))
									{

									  echo "<td valign=bottom bgcolor=gold>";
									}
									  else
									{

									  echo "<td valign=bottom bgcolor=c8c8aa>";
									} 

									if ($emotion[$i]>0)
									{
									   $img_emotion[$i] = $emotion[$i];
							   $img_emotion[$i] = $img_emotion[$i] * 0.5;

									  echo "<center><font size=-1>".intval($emotion[$i])."</font></center><img src=/images/bio_img/blue.gif border=0 width=10 height=".$img_emotion[$i]."></td>";
									}
									  else
									{

									  echo "<img src=/images/bio_img/white.gif border=0 width=10 height=1></td>";
									} 


								  } 

								  echo "</tr><tr>";
								  
						  for ($i=1; $i<=intval($end_day); $i=$i+1)
								  {
									if ($i==intval($see_day))
									{

									  echo "<td valign=top bgcolor=gold>";
									}
									  else
									{

									  echo "<td valign=top bgcolor=c8c8aa>";
									} 

									if ($emotion[$i]<0)
									{
									   $img_emotion[$i] = $emotion[$i];
							   $img_emotion[$i] = $img_emotion[$i] * 0.5;
									  echo "<img src=/images/bio_img/blue.gif border=0 width=10 height=".Abs($img_emotion[$i])."><br><center><font size=-1>".intval(Abs($emotion[$i]))."</font></center></td>";
									}
									  else
									{

									  echo "<img src=/images/bio_img/white.gif border=0 width=10 height=1></td>";
									} 


								  } 

								  echo "</tr></table><br></td></tr><tr  align=center><td><table  border=0 cellpadding=0 cellspacing=1><tr>";
								  
						  for ($i=1; $i<=intval($end_day); $i=$i+1)
								  {
									echo "<td valign=bottom bgcolor=navy width=16><center>";
									echo "<a href=modujobio.php3?birth_year=".$birth_year."&birth_month=".$birth_month."&birth_day=".$birth_day."&see_year=".$see_year."&see_month=".$see_month."&see_day=".$i."><font size=2>".$i."</font></a></center></td>";

								  } 

								  echo "</tr><tr>";
								  
						  for ($i=1; $i<=intval($end_day); $i=$i+1)
								  {
									if ($i==intval($see_day))
									{

									  echo "<td valign=bottom bgcolor=gold>";
									}
									  else
									{

									  echo "<td valign=bottom bgcolor=c8c8aa>";
									} 

									if ($mental[$i]>0)
									{
									   $img_mental[$i] = $mental[$i];
							   $img_mental[$i] = $img_mental[$i] * 0.5;
									  echo "<center><font size=-1>".intval(Abs($mental[$i]))."</font></center><img src=/images/bio_img/green.gif border=0 width=10 height=".$img_mental[$i]."></td>";
									}
									  else
									{

									  echo "<img src=/images/bio_img/white.gif border=0 width=10 height=1></td>";
									} 


								  } 

								  echo "</tr><tr>";
								  
						  for ($i=1; $i<=intval($end_day); $i=$i+1)
								  {
									if ($i==intval($see_day))
									{

									  echo "<td valign=top bgcolor=gold>";
									}
									  else
									{

									  echo "<td valign=top bgcolor=c8c8aa>";
									} 

									if ($mental[$i]<0)
									{
									   $img_mental[$i] = $mental[$i];
							   $img_mental[$i] = $img_mental[$i] * 0.5;
									  echo "<img src=/images/bio_img/green.gif border=0 width=10 height=".Abs($img_mental[$i])."><br><center><font size=-1>".intval(Abs($mental[$i]))."</font></center></td>";
									}
									  else
									{

									  echo "<img src=/images/bio_img/white.gif border=0 width=10 height=1></td>";
									} 


								  } 

								  echo "</tr></table></td></tr></table></td>";
								  echo "</tr></table></div><p><br></p></table>       ";

				?>
						  
						  </TD>
				   
				</form>
		</tD>
	</tR>
</table>
<?
########## 데이터베이스 연결을 해제한다. ##########
DbConnect();
?>
</BODY>
</HTML>
<?include "../incs/form_foot.php";?>