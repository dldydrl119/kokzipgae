<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<title>운세 정보창</title>
</head>
<SCRIPT LANGUAGE="JavaScript"Src="/js/write.js"></SCRIPT>
<body topmargin="0" leftmargin="0">
<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
<center>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="100" height="100">
  <param name="movie" value="/UNSE_DATA/Loading.swf">
  <param name="wmode" value="transparent">
  <param name="quality" value="high">
  <param name="menu" value="false">
  <param name="Scale" value="ExactFit">
 </object>
 </center>
<?
$sel = $_REQUEST["sel"];
$solution_var = $_REQUEST["solution_var"];
$url = $_REQUEST["url"];

If($url == ""){$url = $_REQUEST["HOST"];}

$ref_var = $_REQUEST["ref_var"];
$fsize = $_REQUEST["fsize"];
$fip = $_REQUEST["fip"];
$urltemp = $_REQUEST["urltemp"];

$cate = $_REQUEST["urlinfo"];

if ($cate==""){$cate = $_REQUEST["cate"];;};

$nextresult = $_REQUEST["nextresult"];

$user_name = $_REQUEST["user_name"];
$your_user_name = $_REQUEST["your_user_name"];

$solunar = $_REQUEST["solunar"];

$my_solnuar = $solunar;

$request_year = $_REQUEST["request_year"];
$request_month = $_REQUEST["request_month"];
$request_day = $_REQUEST["request_day"];
$request_hour = $_REQUEST["request_hour"];
$request_min = $_REQUEST["request_min"];
$youn = $_REQUEST["youn"];

$your_year = $_REQUEST["your_year"];
$your_month = $_REQUEST["your_month"];
$your_day = $_REQUEST["your_day"];
$your_hour = $_REQUEST["your_hour"];
$your_min = $_REQUEST["your_min"];
$your_youn = $_REQUEST["your_youn"];

$your_solunar = $_REQUEST["your_solunar"];

$sex = $_REQUEST["sex"];
$blood = $_REQUEST["blood"];

$bloodm = $_REQUEST["bloodm"];
$bloodw = $_REQUEST["bloodw"];

$sasangm = $_REQUEST["sasangm"];
$sasangw = $_REQUEST["sasangw"];

$jumsa = $_REQUEST["jumsa"];
$tele = $_REQUEST["tele"];

$msung = $_REQUEST["msung"]; 
$ysung = $_REQUEST["ysung"]; 



$cyear = $_REQUEST["cyear"];
$cmonth = $_REQUEST["cmonth"];
$cday = $_REQUEST["cday"];
$chour = $_REQUEST["chour"];
$cmin = $_REQUEST["cmin"];

If($request_hour == "00"){$request_hour = "00";}
If($request_min == "00"){$request_min = "00";}
If($your_hour == "00"){$your_hour = "00";}
If($your_min == "00"){$your_min = "00";}
if($request_hour == ""){$request_hour = "00";}
if($request_min == ""){$request_min = "00";}
if ($cate=="" && ($sel=="2"||$sel=="6"||$sel=="16" )){$cate="jum";}


$UNSE_INFO = "/UNSE_DATA/unse/".$cate."/".$cate."_".$sel.".php";

?>
<form name="move_form" action="<?=$UNSE_INFO;?>" method="post">
<input type="hidden" name="cate" value="<?=$cate;?>">
<input type="hidden" name="sel" value="<?=$sel;?>">
<input type="hidden" name="url" value="<?=$url;?>">
<input type="hidden" name="ref_var" value="<?=$ref_var;?>">

<input type="hidden" name="user_name" value="<?=$user_name;?>">
<input type="hidden" name="your_user_name" value="<?=$your_user_name;?>">
<input type="hidden" name="solunar" value="<?=$solunar;?>">
<input type="hidden" name="my_solnuar" value="<?=$my_solnuar;?>">
<input type="hidden" name="youn" value="<?=$youn;?>">
<input type="hidden" name="sex" value="<?=$sex;?>">

<input type="hidden" name="your_year" value="<?=$your_year;?>">
<input type="hidden" name="your_month" value="<?=$your_month;?>">
<input type="hidden" name="your_day" value="<?=$your_day;?>">
<input type="hidden" name="your_hour" value="<?=$your_hour;?>">
<input type="hidden" name="your_min" value="<?=$your_min;?>">
<input type="hidden" name="your_youn" value="<?=$your_youn;?>">
<input type="hidden" name="your_solunar" value="<?=$your_solunar;?>">
<input type="hidden" name="request_year" value="<?=$request_year;?>">
<input type="hidden" name="request_month" value="<?=$request_month;?>">
<input type="hidden" name="request_day" value="<?=$request_day;?>">

<input type="hidden" name="request_hour" value="<?=$request_hour;?>">
<input type="hidden" name="request_min" value="<?=$request_min;?>">

<input type="hidden" name="serial" value="<?=$serial;?>">

<input type="hidden" name="blood" value="<?=$blood;?>">
<input type="hidden" name="bloodm" value="<?=$bloodm;?>">
<input type="hidden" name="bloodw" value="<?=$bloodw;?>">

<input type="hidden" name="tele" value="<?=$tele;?>">

<input type="hidden" name="jumin1" value="<?=$jumin1;?>">
<input type="hidden" name="jumin2" value="<?=$jumin2;?>">

<input type="hidden" name="selectday" value="<?=$selectday;?>">
<input type="hidden" name="name1" value="<?=$name1;?>">
<input type="hidden" name="name" value="<?=$name;?>">

<input type="hidden" name="sasangm" value="<?=$sasangm;?>">
<input type="hidden" name="sasangw" value="<?=$sasangw;?>">

<input type="hidden" name="name12_1" value="<?=$_REQUEST["name_1"];?>">
<input type="hidden" name="msung" value="<?=$_REQUEST["msung"];?>">
<input type="hidden" name="ysung" value="<?=$_REQUEST["ysung"];?>">
<input type="hidden" name="name_1" value="<?=$_REQUEST["name_1"];?>">
<input type="hidden" name="name_2" value="<?=$_REQUEST["name_2"];?>">
<input type="hidden" name="name_3" value="<?=$_REQUEST["name_3"];?>">
<input type="hidden" name="name_4" value="<?=$_REQUEST["name_4"];?>">
<input type="hidden" name="name_5" value="<?=$_REQUEST["name_5"];?>">
<input type="hidden" name="hangul_1" value="<?=$_REQUEST["hangul_1"];?>">
<input type="hidden" name="hangul_2" value="<?=$_REQUEST["hangul_2"];?>">
<input type="hidden" name="hangul_3" value="<?=$_REQUEST["hangul_3"];?>">
<input type="hidden" name="hangul_4" value="<?=$_REQUEST["hangul_4"];?>">
<input type="hidden" name="hangul_5" value="<?=$_REQUEST["hangul_5"];?>">
<input type="hidden" name="showInputFN2" value="<?=$_REQUEST["showInputFN2"];?>">
<input type="hidden" name="showInputNN2" value="<?=$_REQUEST["showInputNN2"];?>">
<input type="hidden" name="showInputNN3" value="<?=$_REQUEST["showInputNN3"];?>">

<input type="hidden" name="intstick1" value="<?=$_REQUEST["intstick1"];?>">
<input type="hidden" name="intstick2" value="<?=$_REQUEST["intstick2"];?>">
<input type="hidden" name="intstick3" value="<?=$_REQUEST["intstick3"];?>">
<input type="hidden" name="intstick4" value="<?=$_REQUEST["intstick4"];?>">
<input type="hidden" name="intstick5" value="<?=$_REQUEST["intstick5"];?>">
<input type="hidden" name="intstick6" value="<?=$_REQUEST["intstick6"];?>">

<input type="hidden" name="intstick1z" value="<?=$_REQUEST["intstick1z"];?>">
<input type="hidden" name="intstick2z" value="<?=$_REQUEST["intstick2z"];?>">
<input type="hidden" name="intstick3z" value="<?=$_REQUEST["intstick3z"];?>">
<input type="hidden" name="intstick4z" value="<?=$_REQUEST["intstick4z"];?>">
<input type="hidden" name="intstick5z" value="<?=$_REQUEST["intstick5z"];?>">
<input type="hidden" name="intstick6z" value="<?=$_REQUEST["intstick6z"];?>">

<input type="hidden" name="intstick1zz" value="<?=$_REQUEST["intstick1zz"];?>">
<input type="hidden" name="intstick2zz" value="<?=$_REQUEST["intstick2zz"];?>">
<input type="hidden" name="intstick3zz" value="<?=$_REQUEST["intstick3zz"];?>">
<input type="hidden" name="intstick4zz" value="<?=$_REQUEST["intstick4zz"];?>">
<input type="hidden" name="intstick5zz" value="<?=$_REQUEST["intstick5zz"];?>">
<input type="hidden" name="intstick6zz" value="<?=$_REQUEST["intstick6zz"];?>">

<input type="hidden" name="jumsa" value="<?=$_REQUEST["jumsa"];?>">
<input type="hidden" name="what" value="<?=$_REQUEST["what"];?>">

<input type="hidden" name="rd" value="<?=$_REQUEST["rd"];?>">
<input type="hidden" name="dream_type" value="<?=$_REQUEST["dream_type"];?>">
<input type="hidden" name="dream_name" value="<?=$_REQUEST["dream_name"];?>">

<input type="hidden" name="dsearch" value="<?=$_REQUEST["dsearch"];?>">

<input type="hidden" name="radio_1" value="<?=$_REQUEST["radio_1"];?>">
<input type="hidden" name="radio_2" value="<?=$_REQUEST["radio_2"];?>">
<input type="hidden" name="radio_3" value="<?=$_REQUEST["radio_3"];?>">
<input type="hidden" name="radio_4" value="<?=$_REQUEST["radio_4"];?>">
<input type="hidden" name="radio_5" value="<?=$_REQUEST["radio_5"];?>">
<input type="hidden" name="radio_6" value="<?=$_REQUEST["radio_6"];?>">
<input type="hidden" name="radio_7" value="<?=$_REQUEST["radio_7"];?>">
<input type="hidden" name="radio_8" value="<?=$_REQUEST["radio_8"];?>">
<input type="hidden" name="radio_9" value="<?=$_REQUEST["radio_9"];?>">
<input type="hidden" name="radio_10" value="<?=$_REQUEST["radio_10"];?>">
<input type="hidden" name="radio_11" value="<?=$_REQUEST["radio_11"];?>">
<input type="hidden" name="radio_12" value="<?=$_REQUEST["radio_12"];?>">
<input type="hidden" name="radio_13" value="<?=$_REQUEST["radio_13"];?>">
<input type="hidden" name="radio_14" value="<?=$_REQUEST["radio_14"];?>">
<input type="hidden" name="radio_15" value="<?=$_REQUEST["radio_15"];?>">
<input type="hidden" name="radio_16" value="<?=$_REQUEST["radio_16"];?>">
<input type="hidden" name="radio_17" value="<?=$_REQUEST["radio_17"];?>">
<input type="hidden" name="radio_18" value="<?=$_REQUEST["radio_18"];?>">
<input type="hidden" name="radio_19" value="<?=$_REQUEST["radio_19"];?>">
<input type="hidden" name="radio_20" value="<?=$_REQUEST["radio_20"];?>">
<input type="hidden" name="radio_21" value="<?=$_REQUEST["radio_21"];?>">
<input type="hidden" name="radio_22" value="<?=$_REQUEST["radio_22"];?>">
<input type="hidden" name="radio_23" value="<?=$_REQUEST["radio_23"];?>">
<input type="hidden" name="radio_24" value="<?=$_REQUEST["radio_24"];?>">
<input type="hidden" name="radio_25" value="<?=$_REQUEST["radio_25"];?>">
<input type="hidden" name="radio_26" value="<?=$_REQUEST["radio_26"];?>">
<input type="hidden" name="radio_27" value="<?=$_REQUEST["radio_27"];?>">
<input type="hidden" name="radio_28" value="<?=$_REQUEST["radio_28"];?>">
<input type="hidden" name="radio_29" value="<?=$_REQUEST["radio_29"];?>">
<input type="hidden" name="radio_30" value="<?=$_REQUEST["radio_30"];?>">
<input type="hidden" name="radio_31" value="<?=$_REQUEST["radio_31"];?>">
<input type="hidden" name="radio_32" value="<?=$_REQUEST["radio_32"];?>">
<input type="hidden" name="radio_33" value="<?=$_REQUEST["radio_33"];?>">
<input type="hidden" name="radio_34" value="<?=$_REQUEST["radio_34"];?>">
<input type="hidden" name="radio_35" value="<?=$_REQUEST["radio_35"];?>">
<input type="hidden" name="radio_36" value="<?=$_REQUEST["radio_36"];?>">
<input type="hidden" name="radio_37" value="<?=$_REQUEST["radio_37"];?>">
<input type="hidden" name="radio_38" value="<?=$_REQUEST["radio_38"];?>">
<input type="hidden" name="radio_39" value="<?=$_REQUEST["radio_39"];?>">
<input type="hidden" name="radio_40" value="<?=$_REQUEST["radio_40"];?>">
<input type="hidden" name="radio_41" value="<?=$_REQUEST["radio_41"];?>">
<input type="hidden" name="radio_42" value="<?=$_REQUEST["radio_42"];?>">
<input type="hidden" name="radio_43" value="<?=$_REQUEST["radio_43"];?>">
<input type="hidden" name="radio_44" value="<?=$_REQUEST["radio_44"];?>">
<input type="hidden" name="radio_45" value="<?=$_REQUEST["radio_45"];?>">
<input type="hidden" name="radio_46" value="<?=$_REQUEST["radio_46"];?>">
<input type="hidden" name="radio_47" value="<?=$_REQUEST["radio_47"];?>">
<input type="hidden" name="radio_48" value="<?=$_REQUEST["radio_48"];?>">
<input type="hidden" name="radio_49" value="<?=$_REQUEST["radio_49"];?>">
<input type="hidden" name="radio_50" value="<?=$_REQUEST["radio_50"];?>">
<input type="hidden" name="radio_51" value="<?=$_REQUEST["radio_51"];?>">
<input type="hidden" name="radio_52" value="<?=$_REQUEST["radio_52"];?>">
<input type="hidden" name="radio_53" value="<?=$_REQUEST["radio_53"];?>">

<input type="hidden" name="a0" value="<?=$_REQUEST["a0"];?>">
<input type="hidden" name="a1" value="<?=$_REQUEST["a1"];?>">
<input type="hidden" name="a2" value="<?=$_REQUEST["a2"];?>">
<input type="hidden" name="a3" value="<?=$_REQUEST["a3"];?>">

<input type="hidden" name="MtYear" value="<?=$MtYear;?>">
<input type="hidden" name="MtMonth" value="<?=$MtMonth;?>">
<input type="hidden" name="MtDay" value="<?=$MtDay;?>">

<input type="hidden" name="cyear" value="<?=$cyear;?>">
<input type="hidden" name="cmonth" value="<?=$cmonth;?>">
<input type="hidden" name="cday" value="<?=$cday;?>">
<input type="hidden" name="chour" value="<?=$chour;?>">
<input type="hidden" name="cmin" value="<?=$cmin;?>">

</form>
<SCRIPT LANGUAGE="JavaScript">
<!--
setTimeout("document.move_form.submit()",500);
window.focus();
//-->
</SCRIPT>
</body>
</html>