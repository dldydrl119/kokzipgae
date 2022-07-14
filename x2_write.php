 <html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<title><?="운세데이터"?></title>
</head>

<body topmargin="0" leftmargin="0">
<?
$paymode = $_REQUEST["paymode"];
$user_name= $_REQUEST["user_name"];
$money = $_REQUEST["money"];
$con = $_REQUEST["con"];
$sel = $_REQUEST["sel"];

$cate=$_REQUEST["urlinfo"];
if($cate==""){$cate="jum";}

If($money == "" && $sel != ""){
?>
<iframe width='640' height='600' name='ifrm_var' frameborder='0' scrolling='yes'></iframe>
<?
}
?>

<FORM METHOD=POST ACTION='/UNSE_DATA/access.php'  name='rfrmm'>

<input type="hidden" name="url" value="<?=$_REQUEST["url"]?>">
<input type="hidden" name="fip" value="<?=$_REQUEST["fip"]?>">
<input type="hidden" name="fsize" value="<?=$_REQUEST["fsize"]?>">
<input type="hidden" name="ref" value="<?=$_REQUEST["ref"]?>">
<input type="hidden" name="solution_var" value="C2">
<input type="hidden" name="urltemp" value="<?=$_REQUEST["urltemp"]?>">

<input type="hidden" name="cate" value="<?=$cate?>">
<input type="hidden" name="sel" value="<?=$_REQUEST["sel"]?>">
<input type="hidden" name="nextresult" value="<?=$_REQUEST["nextresult"]?>">
<input type="hidden" name="user_name" value="<?=$_REQUEST["user_name"]?>">
<input type="hidden" name="your_user_name" value="<?=$_REQUEST["your_user_name"]?>">
<input type="hidden" name="solunar" value="<?=$_REQUEST["solunar"]?>">
<input type="hidden" name="request_year" value="<?=$_REQUEST["year"]?>">
<input type="hidden" name="request_month" value="<?=$_REQUEST["month"]?>">
<input type="hidden" name="request_day" value="<?=$_REQUEST["day"]?>">
<input type="hidden" name="request_hour" value="<?=$_REQUEST["hour"]?>">
<input type="hidden" name="request_min" value="<?=$_REQUEST["min"]?>">
<input type="hidden" name="youn" value="<?=$_REQUEST["youn"]?>">
<input type="hidden" name="your_year" value="<?=$_REQUEST["your_year"]?>">
<input type="hidden" name="your_month" value="<?=$_REQUEST["your_month"]?>">
<input type="hidden" name="your_day" value="<?=$_REQUEST["your_day"]?>">
<input type="hidden" name="your_hour" value="<?=$_REQUEST["your_hour"]?>">
<input type="hidden" name="your_min" value="<?=$_REQUEST["your_min"]?>">
<input type="hidden" name="your_youn" value="<?=$_REQUEST["your_youn"]?>">
<input type="hidden" name="your_solunar" value="<?=$_REQUEST["your_solunar"]?>">
<input type="hidden" name="sex" value="<?=$_REQUEST["sex"]?>">

<input type="hidden" name="name12_1" value="<?=$_REQUEST["name12_1"]?>">
<input type="hidden" name="msung" value="<?=$_REQUEST["msung"]?>">
<input type="hidden" name="ysung" value="<?=$_REQUEST["ysung"]?>">
<input type="hidden" name="name_1" value="<?=$_REQUEST["name_1"]?>">
<input type="hidden" name="name_2" value="<?=$_REQUEST["name_2"]?>">
<input type="hidden" name="name_3" value="<?=$_REQUEST["name_3"]?>">
<input type="hidden" name="name_4" value="<?=$_REQUEST["name_4"]?>">
<input type="hidden" name="name_5" value="<?=$_REQUEST["name_5"]?>">
<input type="hidden" name="hangul_1" value="<?=$_REQUEST["hangul_1"]?>">
<input type="hidden" name="hangul_2" value="<?=$_REQUEST["hangul_2"]?>">
<input type="hidden" name="hangul_3" value="<?=$_REQUEST["hangul_3"]?>">
<input type="hidden" name="hangul_4" value="<?=$_REQUEST["hangul_4"]?>">
<input type="hidden" name="hangul_5" value="<?=$_REQUEST["hangul_5"]?>">
<input type="hidden" name="showInputFN2" value="<?=$_REQUEST["showInputFN2"]?>">
<input type="hidden" name="showInputNN2" value="<?=$_REQUEST["showInputNN2"]?>">
<input type="hidden" name="showInputNN3" value="<?=$_REQUEST["showInputNN3"]?>">

<input type="hidden" name="sasangm" value="<?=$_REQUEST["sasangm"]?>">
<input type="hidden" name="sasangw" value="<?=$_REQUEST["sasangw"]?>">

<input type="hidden" name="intstick1" value="<?=$_REQUEST["intstick1"]?>">
<input type="hidden" name="intstick2" value="<?=$_REQUEST["intstick2"]?>">
<input type="hidden" name="intstick3" value="<?=$_REQUEST["intstick3"]?>">
<input type="hidden" name="intstick4" value="<?=$_REQUEST["intstick4"]?>">
<input type="hidden" name="intstick5" value="<?=$_REQUEST["intstick5"]?>">
<input type="hidden" name="intstick6" value="<?=$_REQUEST["intstick6"]?>">

<input type="hidden" name="intstick1z" value="<?=$_REQUEST["intstick1z"]?>">
<input type="hidden" name="intstick2z" value="<?=$_REQUEST["intstick2z"]?>">
<input type="hidden" name="intstick3z" value="<?=$_REQUEST["intstick3z"]?>">
<input type="hidden" name="intstick4z" value="<?=$_REQUEST["intstick4z"]?>">
<input type="hidden" name="intstick5z" value="<?=$_REQUEST["intstick5z"]?>">
<input type="hidden" name="intstick6z" value="<?=$_REQUEST["intstick6z"]?>">

<input type="hidden" name="intstick1zz" value="<?=$_REQUEST["intstick1zz"]?>">
<input type="hidden" name="intstick2zz" value="<?=$_REQUEST["intstick2zz"]?>">
<input type="hidden" name="intstick3zz" value="<?=$_REQUEST["intstick3zz"]?>">
<input type="hidden" name="intstick4zz" value="<?=$_REQUEST["intstick4zz"]?>">
<input type="hidden" name="intstick5zz" value="<?=$_REQUEST["intstick5zz"]?>">
<input type="hidden" name="intstick6zz" value="<?=$_REQUEST["intstick6zz"]?>">

<input type="hidden" name="jumsa" value="<?=$_REQUEST["jumsa"]?>">
<input type="hidden" name="what" value="<?=$_REQUEST["what"]?>">

<input type="hidden" name="rd" value="<?=$_REQUEST["rd"]?>">

<input type="hidden" name="tele" value="<?=$_REQUEST["tele"]?>">

<input type="hidden" name="blood" value="<?=$_REQUEST["blood"]?>">
<input type="hidden" name="bloodm" value="<?=$_REQUEST["bloodm"]?>">
<input type="hidden" name="bloodw" value="<?=$_REQUEST["bloodw"]?>">

<input type="hidden" name="dream_type" value="<?=$_REQUEST["dream_type"]?>">
<input type="hidden" name="dream_name" value="<?=$_REQUEST["dream_name"]?>">

<input type="hidden" name="cyear" value="<?=$_REQUEST["cyear"]?>">
<input type="hidden" name="cmonth" value="<?=$_REQUEST["cmonth"]?>">
<input type="hidden" name="cday" value="<?=$_REQUEST["cday"]?>">

<input type="hidden" name="con" value="<?=$con?>">

<input type="hidden" name="search_year" value="<?=$_REQUEST["search_year"]?>">

<input type="hidden" name="name1" value="<?=$_REQUEST["dream_name"]?>">
<input type="hidden" name="a" value="<?=$_REQUEST["a0"]?>">
<input type="hidden" name="b" value="<?=$_REQUEST["a1"]?>">
<input type="hidden" name="c" value="<?=$_REQUEST["a2"]?>">
<input type="hidden" name="d" value="<?=$_REQUEST["a3"]?>">
<input type="hidden" name="a0" value="<?=$_REQUEST["a0"]?>">
<input type="hidden" name="a1" value="<?=$_REQUEST["a1"]?>">
<input type="hidden" name="a2" value="<?=$_REQUEST["a2"]?>">
<input type="hidden" name="a3" value="<?=$_REQUEST["a3"]?>">

</FORM>
<SCRIPT>document.all.rfrmm.submit()</script>
<SCRIPT LANGUAGE="JavaScript">
<!--
document.onkeydown = function() {
if (event.keyCode == 122 || event.keyCode == 116) {
event.keyCode = 505;
  }
if 
((event.ctrlKey) || (event.shiftKey))
{event.keyCode = 505; }

if (event.keyCode == 505) { 
return false;
  }
}




 function timerSet() {
  _timerOpen = setInterval("window.focus();", 2000);
 }

window.focus()
//-->
</SCRIPT>



</body>
</html>