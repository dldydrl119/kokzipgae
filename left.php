<html>
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
</head>
<SCRIPT LANGUAGE="JavaScript">
// <!--
function F_show_list(div_name, div_mode){
	var div_var= document.getElementById(div_name);
	var div_mode_var= document.getElementById(div_mode);

	if (div_mode_var.value == "no")
	{
		div_var.style.display = '';
		div_mode_var.value = "yes";
	}else{
		div_var.style.display = 'none';
		div_mode_var.value = "no";
	}
}
//-->
</SCRIPT>
<link rel=StyleSheet href='/style.css' type='text/css'>
<body topmargin="0" leftmargin="0" style="background-image:url('/images/l_bg.jpg');" bgcolor="#000000" class="mainscollvar">

<table cellpadding="0" cellspacing="0">
	<tR><tD style="padding-top:10px; padding-left:20px;"><img src="/images/left_img/ttt.jpg"></td></tr>
	<tr><tD height="10"></tD></tr>
</table>

<?
include "left_saju.php";
include "left_gunghap.php";
include "left_theme.php";
include "left_free.php";
?>

</body>
</html>