<?
$request_date = $_REQUEST["date"];
$dae = $_REQUEST["dae"];
$wolgi = $_REQUEST["wolgi"];
$indong = $_REQUEST["indong"];
$gachui = $_REQUEST["gachui"];
$sum_to_jeol = $_REQUEST["sum_to_jeol"];
$haeil = $_REQUEST["haeil"];
$selected_year = $_REQUEST["selected_year"];
$selected_month = $_REQUEST["selected_month"];
$color = $_REQUEST["color"];
$sum_day_he = $_REQUEST["sum_day_he"];
$whangdo = $_REQUEST["whangdo"];
$senggi = $_REQUEST["senggi"];
$bokduk = $_REQUEST["bokduk"];
$cheneu = $_REQUEST["cheneu"];
$sipak = $_REQUEST["sipak"];
$chenduk = $_REQUEST["chenduk"];
$wolduk = $_REQUEST["wolduk"];
$chendukhap = $_REQUEST["chendukhap"];
$woldukhap = $_REQUEST["woldukhap"];
$seng = $_REQUEST["seng"];
$chen = $_REQUEST["chen"];
$chensal = $_REQUEST["chensal"];
$pamasal = $_REQUEST["pamasal"];
$susasal = $_REQUEST["susasal"];
$mangrasal = $_REQUEST["mangrasal"];
$chenjeoksal = $_REQUEST["chenjeoksal"];
$gochosal = $_REQUEST["gochosal"];
$gueguesal = $_REQUEST["gueguesal"];
$wangmangsal = $_REQUEST["wangmangsal"];
$sipaksal = $_REQUEST["sipaksal"];
$wolapsal = $_REQUEST["wolapsal"];
$wolsal = $_REQUEST["wolsal"];
$hwangsasal = $_REQUEST["hwangsasal"];
$hongsasal = $_REQUEST["hongsasal"];
$chengang = $_REQUEST["chengang"];
$hague = $_REQUEST["hague"];
$jipa = $_REQUEST["jipa"];
$namang = $_REQUEST["namang"];
$myelmol = $_REQUEST["myelmol"];
$jungsang = $_REQUEST["jungsang"];
$chengu = $_REQUEST["chengu"];
$chuk = $_REQUEST["chuk"];

if($senggi != ""){$senggi_ox = "<b><font color=red>O</font></b>";}else{$senggi_ox = "<b><font color=blue>X</font></b>";}
if($bokduk != ""){$bokduk_ox = "<b><font color=red>O</font></b>";}else{$bokduk_ox = "<b><font color=blue>X</font></b>";}
if($cheneu != ""){$cheneu_ox = "<b><font color=red>O</font></b>";}else{$cheneu_ox = "<b><font color=blue>X</font></b>";}

if($wolgi != ""){$wolgi_ox = "<b><font color=red>O</font></b>";}else{$wolgi_ox = "<b><font color=blue>X</font></b>";}
if($indong != ""){$indong_ox = "<b><font color=red>O</font></b>";}else{$indong_ox = "<b><font color=blue>X</font></b>";}
if($gachui != ""){$gachui_ox = "<b><font color=red>O</font></b>";}else{$gachui_ox = "<b><font color=blue>X</font></b>";}
if($sum_to_jeol != ""){$jeolhu_ox = "<b><font color=red>O</font></b>";}else{$jeolhu_ox = "<b><font color=blue>X</font></b>";}
if($haeil != ""){$haeil_ox = "<b><font color=red>O</font></b>";}else{$haeil_ox = "<b><font color=blue>X</font></b>";}

if($chuk != ""){$chuk_ox = "<b><font color=red>O</font></b>";}else{$chuk_ox = "<b><font color=blue>X</font></b>";}

if($sipak != ""){$sipak_ox = "<b><font color=red>O</font></b>";}else{$sipak_ox = "<b><font color=blue>X</font></b>";}

if($whangdo == "청룡황도"){$whangdo_ox_1 = "<b><font color=red>O</font></b>";}else{$whangdo_ox_1 = "<b><font color=blue>X</font></b>";}
if($whangdo == "명당황도"){$whangdo_ox_2 = "<b><font color=red>O</font></b>";}else{$whangdo_ox_2 = "<b><font color=blue>X</font></b>";}
if($whangdo == "금궤황도"){$whangdo_ox_3 = "<b><font color=red>O</font></b>";}else{$whangdo_ox_3 = "<b><font color=blue>X</font></b>";}
if($whangdo == "천덕황도"){$whangdo_ox_4 = "<b><font color=red>O</font></b>";}else{$whangdo_ox_4 = "<b><font color=blue>X</font></b>";}
if($whangdo == "옥당황도"){$whangdo_ox_5 = "<b><font color=red>O</font></b>";}else{$whangdo_ox_5 = "<b><font color=blue>X</font></b>";}
if($whangdo == "사명황도"){$whangdo_ox_6 = "<b><font color=red>O</font></b>";}else{$whangdo_ox_6 = "<b><font color=blue>X</font></b>";}
     
if($dae == "대리월"){$dae_title_ox_1 = "<b><font color=red>O</font></b>";}else{$dae_title_ox_1 = "<b><font color=blue>X</font></b>";}
if($dae == "방모씨"){$dae_title_ox_2 = "<b><font color=red>O</font></b>";}else{$dae_title_ox_2 = "<b><font color=blue>X</font></b>";}
if($dae == "방옹고"){$dae_title_ox_3 = "<b><font color=red>O</font></b>";}else{$dae_title_ox_3 = "<b><font color=blue>X</font></b>";}
if($dae == "방녀부모"){$dae_title_ox_4 = "<b><font color=red>O</font></b>";}else{$dae_title_ox_4 = "<b><font color=blue>X</font></b>";}
if($dae == "방부주"){$dae_title_ox_5 = "<b><font color=red>O</font></b>";}else{$dae_title_ox_5 = "<b><font color=blue>X</font></b>";}
if($dae == "방녀신"){$dae_title_ox_6 = "<b><font color=red>O</font></b>";}else{$dae_title_ox_6 = "<b><font color=blue>X</font></b>";}



if($chenduk != ""){$chenduk_ox = "<b><font color=red>O</font></b>";}else{$chenduk_ox = "<b><font color=blue>X</font></b>";}
if($wolduk != ""){$wolduk_ox = "<b><font color=red>O</font></b>";}else{$wolduk_ox = "<b><font color=blue>X</font></b>";}
if($chendukhap != ""){$chendukhap_ox = "<b><font color=red>O</font></b>";}else{$chendukhap_ox = "<b><font color=blue>X</font></b>";}
if($woldukhap != ""){$woldukhap_ox = "<b><font color=red>O</font></b>";}else{$woldukhap_ox = "<b><font color=blue>X</font></b>";}
if($seng != ""){$seng_ox = "<b><font color=red>O</font></b>";}else{$seng_ox = "<b><font color=blue>X</font></b>";}
if($chen != ""){$chen_ox = "<b><font color=red>O</font></b>";}else{$chen_ox = "<b><font color=blue>X</font></b>";}

if($chengang != ""){$chengang_ox = "<b><font color=red>O</font></b>";}else{$chengang_ox = "<b><font color=blue>X</font></b>";}
if($hague != ""){$hague_ox = "<b><font color=red>O</font></b>";}else{$hague_ox = "<b><font color=blue>X</font></b>";}
if($jipa != ""){$jipa_ox = "<b><font color=red>O</font></b>";}else{$jipa_ox = "<b><font color=blue>X</font></b>";}
if($namang != ""){$namang_ox = "<b><font color=red>O</font></b>";}else{$namang_ox = "<b><font color=blue>X</font></b>";}
if($myelmol != ""){$myelmol_ox = "<b><font color=red>O</font></b>";}else{$myelmol_ox = "<b><font color=blue>X</font></b>";}
if($jungsang != ""){$jungsang_ox = "<b><font color=red>O</font></b>";}else{$jungsang_ox = "<b><font color=blue>X</font></b>";}
if($chengu != ""){$chengu_ox = "<b><font color=red>O</font></b>";}else{$chengu_ox = "<b><font color=blue>X</font></b>";}


if($chensal != ""){$chensal_ox = "<b><font color=red>O</font></b>";}else{$chensal_ox = "<b><font color=blue>X</font></b>";}
if($pamasal != ""){$pamasal_ox = "<b><font color=red>O</font></b>";}else{$pamasal_ox = "<b><font color=blue>X</font></b>";}
if($susasal != ""){$susasal_ox = "<b><font color=red>O</font></b>";}else{$susasal_ox = "<b><font color=blue>X</font></b>";}
if($mangrasal != ""){$mangrasal_ox = "<b><font color=red>O</font></b>";}else{$mangrasal_ox = "<b><font color=blue>X</font></b>";}
if($chenjeoksal != ""){$chenjeoksal_ox = "<b><font color=red>O</font></b>";}else{$chenjeoksal_ox = "<b><font color=blue>X</font></b>";}
if($gochosal != ""){$gochosal_ox = "<b><font color=red>O</font></b>";}else{$gochosal_ox = "<b><font color=blue>X</font></b>";}
if($gueguesal != ""){$gueguesal_ox = "<b><font color=red>O</font></b>";}else{$gueguesal_ox = "<b><font color=blue>X</font></b>";}
if($wangmangsal != ""){$wangmangsal_ox = "<b><font color=red>O</font></b>";}else{$wangmangsal_ox = "<b><font color=blue>X</font></b>";}
if($sipaksal != ""){$sipaksal_ox = "<b><font color=red>O</font></b>";}else{$sipaksal_ox = "<b><font color=blue>X</font></b>";}
if($wolapsal != ""){$wolapsal_ox = "<b><font color=red>O</font></b>";}else{$wolapsal_ox = "<b><font color=blue>X</font></b>";}
if($wolsal != ""){$wolsal_ox = "<b><font color=red>O</font></b>";}else{$wolsal_ox = "<b><font color=blue>X</font></b>";}
if($hwangsasal != ""){$hwangsasal_ox = "<b><font color=red>O</font></b>";}else{$hwangsasal_ox = "<b><font color=blue>X</font></b>";}
if($hongsasal != ""){$hongsasal_ox = "<b><font color=red>O</font></b>";}else{$hongsasal_ox = "<b><font color=blue>X</font></b>";}
?>


<HTML>
<title>정통 택일</title>
<link rel=StyleSheet href='/UNSE_DATA/style.css' type='text/css'>
<BODY bgcolor=FFFFFF>
<table width=470 border=0 align=center><tr><td align=center>

<table width=470 border=0 cellspacing=1 cellpadding=3 bgcolor=CCCCCC align='center'>
<tr bgcolor=c2c5b6><td align=center><b>택일 상세보기 <?=$selected_year;?> 년 <?=$selected_month;?> 월 <?=$request_date;?> 일</b>
<br> <font color=CC0000>(유무를  O,X 로 표기하였습니다. 아래의 상황을 종합적으로 판단하여 택일을 합니다.)</font>

</td></tr>
</table>

<br>
<table width=470 border=0 cellspacing=1 cellpadding=2 bgcolor=CCCCCC align='center'>
<tr bgcolor=bfd5ff>
<td align=left><b>삼갑순법(三甲旬法)</b> : <br>아래의 일진이 푸른색으로 표시되어 있으면 생갑순,사갑순,병갑순중  생갑순에 해당되는 길일로 봅니다. 검은색은 사갑순이나 병갑순에 해당되는 날이라는 뜻입니다.</td>
</tr>
<tr bgcolor=f8f8f8>
<td align=center>
<font color=$color><?=$sum_day_he;?></font>
</td></tr>
</table>
<br>
<table width=470 border=0 cellspacing=1 cellpadding=2 bgcolor=CCCCCC align='center'>
<tr bgcolor=bfd5ff>
<td align=left><b>생기법(生氣法)</b> : <br> 생기, 복덕, 천의중 한가지가 있으면 길일로 봅니다. 생기가 넘치고 복과 덕이 있으며 하늘의 도움이 있다는 뜻입니다. X 표시는 없다는 뜻이고 O 표시는 있다는 뜻입니다.</td>
</tr>
<tr bgcolor=f8f8f8>
<td align=center>
생기(<?=$senggi_ox;?>) &nbsp;&nbsp;&nbsp;&nbsp;복덕(<?=$bokduk_ox;?>) &nbsp;&nbsp;&nbsp;&nbsp;천의(<?=$cheneu_ox;?>)
</td></tr>
</table>

<br>

<table width=470 border=0 cellspacing=1 cellpadding=2 bgcolor=CCCCCC align='center'>
<tr bgcolor=bfd5ff>
<td align=left><b>황흑도법(黃黑道法)</b> : <br>육황도중 하나가 있으면 길일로 봅니다. 황도가 없다면 흑도의 날이니 흉한 날이라고 보면 됩니다. X 표시는 없다는 뜻이고 O 표시는 있다는 뜻입니다.</td>
</tr>
<tr bgcolor=f8f8f8>
<td align=center>
청룡황도(<?=$whangdo_ox_1;?>) &nbsp;명당황도(<?=$whangdo_ox_2;?>) &nbsp;금궤황도(<?=$whangdo_ox_3;?>) &nbsp;천덕황도(<?=$whangdo_ox_4;?>) &nbsp;옥당황도(<?=$whangdo_ox_5;?>) &nbsp;사명황도(<?=$whangdo_ox_6;?>)
</td></tr>
</table>

<br>

<table width=470 border=0 cellspacing=1 cellpadding=2 bgcolor=CCCCCC align='center'>
<tr bgcolor=bfd5ff>
<td align=left><b>월가길신(月家吉神)</b> : <br>길신이 많으면 흉신을 제압 할 수 있으니 만사를 도모하는데 길한 날이라는 뜻입니다. X 표시는 없다는 뜻이고 O 표시는 있다는 뜻입니다.</td>
</tr>
<tr bgcolor=f8f8f8>
<td align=center>
천덕(<?=$chenduk_ox;?>) &nbsp;월덕(<?=$wolduk_ox;?>) &nbsp;천덕합(<?=$chendukhap_ox;?>) &nbsp;월덕합(<?=$woldukhap_ox;?>) &nbsp;생기(<?=$seng_ox;?>) &nbsp;천의(<?=$chen_ox;?>)
</td></tr>
</table>

<br>


<table width=470 border=0 cellspacing=1 cellpadding=2 bgcolor=CCCCCC align='center'>
<tr bgcolor=bfd5ff>
<td align=left><b>축월음양불장길일</b> : <br>月을 상대로 일진과 맞추어 보는데 이 날은 각살(各殺)이 자멸되므로 길일 이라는 뜻입니다.  X 표시는 그 날에 해당 안된다는 뜻이고 O 표시는 해당된다는 뜻입니다.</td>
</tr>
<tr bgcolor=f8f8f8>
<td align=center>
축월음양불장길일(<?=$chuk_ox;?>)
</td></tr>
</table>

<br>
<table width=470 border=0 cellspacing=1 cellpadding=2 bgcolor=CCCCCC align='center'>
<tr bgcolor=e2a9a9>
<td align=left><b>월가흉신(月家凶神)</b> : <br>혼사나 이사를 할 때 이들 흉신이 있으면 이 날을 사용하지 않음것이  좋다는 뜻입니다.  X 표시는 그러한 흉신이 없다는 뜻이고 O 표시는 있다는 뜻입니다.</td>
</tr>
<tr bgcolor=f8f8f8>
<td align=center>

천강(<?=$chengang_ox;?>) &nbsp;하괴(<?=$hague_ox;?>) &nbsp;지파(<?=$jipa_ox;?>) &nbsp;나망(<?=$namang_ox;?>) &nbsp;멸몰(<?=$myelmol_ox;?>) &nbsp;중상(<?=$jungsang_ox;?>) &nbsp;천구(<?=$chengu_ox;?>)

</td></tr>
</table>


<br>

<table width=470 border=0 cellspacing=1 cellpadding=2 bgcolor=CCCCCC align='center'>
<tr bgcolor=e2a9a9>
<td align=left><b>혼기일(婚忌日)</b> : <br>
혼사에는 이 날을 쓰면 대체로 좋지 않다는 뜻입니다. X 표시는 그러한 흉한 날이 있다는 뜻이고 O 표시는 없다는 뜻입니다.




</td>
</tr>
<tr bgcolor=f8f8f8>
<td align=center>

월기일(<?=$wolgi_ox;?>) &nbsp;인동일(<?=$indong_ox;?>) &nbsp;가취대흉일(<?=$gachui_ox;?>) &nbsp;二十四節候日(<?=$jeolhu_ox;?>) &nbsp;亥日(<?=$haeil_ox;?>)

</td></tr>
</table>


<br>

<table width=470 border=0 cellspacing=1 cellpadding=2 bgcolor=CCCCCC align='center'>
<tr bgcolor=e2a9a9>
<td align=left><b>십악대패일(十惡大敗日)</b> : <br>그해 그달 그날의 일진으로 보아 무슨일이든 하면 대패한다는 뜻입니다. X 표시는 그러한 날에 해당이 안된다는 뜻이고 O 표시는 그러한 날에 해당 된다는 뜻입니다.
</td>
</tr>
<tr bgcolor=f8f8f8>
<td align=center>
십악대패일(<?=$sipak_ox;?>)
</td></tr>
</table>

<br>

<table width=470 border=0 cellspacing=1 cellpadding=2 bgcolor=CCCCCC align='center'>
<tr bgcolor=c2c5b6>
<td align=left><b>월해(月解)</b> : <br>여자의 사주를 보아 길흉을 판단하는데 대리월에 해당이 되면(O표가 되어 있으면) 길한 날이라고 봅니다. 방모씨나 방옹고에 해당하는 날은(O표가 되어 있으면) 상황에 따라 무해하나 방부주나 방녀신이 있는 날은(O표가 되어 있으면) 그 날을 피하는 것이 길합니다. 아래의 월해 설명을 참조하십시요.</td>
</tr>
<tr bgcolor=f8f8f8>
<td align=center> 
대리월(<?=$dae_title_ox_1;?>) &nbsp;방모씨(<?=$dae_title_ox_2;?>) &nbsp;방옹고(<?=$dae_title_ox_3;?>) &nbsp;방녀부모(<?=$dae_title_ox_4;?>) &nbsp;방부주(<?=$dae_title_ox_5;?>) &nbsp;방녀신(<?=$dae_title_ox_6;?>)
</td></tr>
<tr><td>

<b>월해설명</b><br>
<br>
<b>대리월</b>: 만사가 길하고 재물이 불어나며 부귀공명을 누린다. <br>
<b>방모씨</b>: 중매한 사람의 맏아들이나  남편이 해로운 달이다. 연애결혼이라면 평운이다. <br>
<b>방옹고</b>: 시부모에게 해로운 달이다. 시부모가 계시지 않는다면 관계가 없다 . <br>
<b>방녀부모</b>: 친정부모에게 해로운 달이다. 역시 친정부모가 없다면 무관하다.<br> 
<b>방부주</b>: 신랑에게 매우 흉한 달이다. <br>
<b>방녀신</b>: 신부의 신상에 병이 생기거나 일찍 죽는다.<br>

</table>

<br>



<table width=470 border=0 cellspacing=1 cellpadding=2 bgcolor=CCCCCC align='center'>
<tr bgcolor=e2a9a9>
<td align=left colspan=3><b>십삼신살(十三神殺)</b> : <br>신살이 많으면 많을수록 복이 떨어진다고  보며 혼인이나 이사일에는 피하는 것이 길합니다. X 표시는 그러한 신살이 없다는 뜻이고 O 표시는 그러한 신살이 있다는 뜻입니다.
</td>
</tr>

<tr bgcolor=f8f8f8>
<td align=center>천&nbsp;&nbsp;&nbsp;살(<?=$chensal_ox;?>)</td>
<td align=center>피마살(<?=$pamasal_ox;?>)</td>
<td align=center>홍사살(<?=$hongsasal_ox;?>)</td>
</tr>

<tr bgcolor=f8f8f8>
<td align=center>수사살(<?=$susasal_ox;?>)</td>
<td align=center>망라살(<?=$mangrasal_ox;?>)</td>
<td align=center>천적살(<?=$chenjeoksal_ox;?>)</td>
</tr>

<tr bgcolor=f8f8f8>
<td align=center>고초살(<?=$gochosal_ox;?>)</td>
<td align=center>귀기살(<?=$gueguesal_ox;?>)</td>
<td align=center>왕망살(<?=$wangmangsal_ox;?>)</td>
</tr>

<tr bgcolor=f8f8f8>
<td align=center>십악살(<?=$sipaksal_ox;?>)</td>
<td align=center>월압살(<?=$wolapsal_ox;?>)</td>
<td align=center>월&nbsp;&nbsp;&nbsp;살(<?=$wolsal_ox;?>)</td>
</tr>

<tr bgcolor=f8f8f8>
<td align=center>황사살(<?=$hwangsasal_ox;?>)</td>
<td align=center></td>
<td align=center></td>
</tr>

</table>


<br>

<a href=javascript:window.close();>창 닫 기</a>

</td>
</tr>
</table>

<br>

</body>
</html>