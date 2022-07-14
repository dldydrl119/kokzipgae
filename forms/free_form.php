<?
$urlinfo = $_REQUEST["urlinfo"];
$sel = $_REQUEST["sel"];

if($urlinfo == ""){
	$urlinfo = explode("/", $PHP_SELF);
}

include_once "../incs/function.php";

$v_strFname = "../data/moneyDATA.dat";

include_once "../incs/info.php";
include_once "../incs/now_info.php";

$arr_adminInfo = f_Arr_readAdmin($v_strFname);

$moneyINFO = explode("|", $arr_adminInfo[$moneyNUM]);
$conINFO = explode("|", $arr_adminInfo[$moneyNUM+9]);

$menuNAME_split = explode("|", $menuNAME);
$menuURL_split = explode("|", $menuURL);

$moneyINFO_split = $moneyINFO[$sel-1];
$conINFO_split = preg_replace("/ /", "", $conINFO[$sel-1]);


$caseNum = "19";
?>
<html>
<heaD>
<title></title>
</head>
<SCRIPT LANGUAGE="JavaScript">
// <!--
// function checkInput(sel) {
// 	if (sel != "2" && sel != "5")
// 	{
// 		if (document.signform.user_name.value == "") {
// 			alert('이름을 입력하세요!');
// 			document.signform.user_name.focus();
// 			return;
// 		}
// 	}

// 	switch (sel)
// 	{
// 		case "4" :
// 			if (document.signform.jumin1.value.length != 6){
// 				alert('올바른 주민등록번호를 입력해주세요.');
// 				document.signform.jumin1.focus();
// 				return;
// 			}else if (document.signform.jumin2.value.length != 7){
// 				alert('올바른 주민등록번호를 입력해주세요.');
// 				document.signform.jumin2.focus();
// 				return;
// 			}else{
// 				var str_jumin1 = document.signform.jumin1.value;
// 				var str_jumin2 = document.signform.jumin2.value;
// 				var digit=0

// 				for (var i=0;i<str_jumin1.length;i++){
// 					var str_dig=str_jumin1.substring(i,i+1);
					
// 					if (str_dig<'0' || str_dig>'9'){
// 						digit=digit+1 
// 					}
// 				}

// 				if ((str_jumin1 == '') || ( digit != 0 )){
// 					alert('잘못된 주민등록번호입니다. 다시 확인하시고 입력해 주세요.');
// 					document.signform.jumin1.focus();
// 					return; 
// 				}

// 				var digit1=0
				
// 				for (var i=0;i<str_jumin2.length;i++){
// 					var str_dig1=str_jumin2.substring(i,i+1);
					
// 					if (str_dig1<'0' || str_dig1>'9'){ 
// 						digit1=digit1+1 
// 					}
// 				}
				
// 				if ((str_jumin2 == '') || ( digit1 != 0 )){
// 					alert('잘못된 주민등록번호입니다. 다시 확인하시고 입력해 주세요.');
// 					document.signform.jumin2.focus();
// 					return; 
// 				}

// 				if (str_jumin1.substring(2,3) > 1){
// 					 alert('잘못된 주민등록번호입니다. 다시 확인하시고 입력해 주세요.');
// 					document.signform.jumin1.focus();
// 					return; 
// 				}

// 				if (str_jumin1.substring(4,5) > 3){
// 					 alert('잘못된 주민등록번호입니다. 다시 확인하시고 입력해 주세요.');
// 					 document.signform.jumin1.focus();
// 					 return; 
// 				} 

// 				if (str_jumin2.substring(0,1) > 4 || str_jumin2.substring(0,1) == 0){
// 					alert('잘못된 주민등록번호입니다. 다시 확인하시고 입력해 주세요.');
// 					document.signform.jumin2.focus();
// 					return; 
// 				}

// 				var a1=str_jumin1.substring(0,1)
// 				var a2=str_jumin1.substring(1,2)
// 				var a3=str_jumin1.substring(2,3)
// 				var a4=str_jumin1.substring(3,4)
// 				var a5=str_jumin1.substring(4,5)
// 				var a6=str_jumin1.substring(5,6)

// 				var check_digit=a1*2+a2*3+a3*4+a4*5+a5*6+a6*7

// 				var b1=str_jumin2.substring(0,1)
// 				var b2=str_jumin2.substring(1,2)
// 				var b3=str_jumin2.substring(2,3)
// 				var b4=str_jumin2.substring(3,4)
// 				var b5=str_jumin2.substring(4,5)
// 				var b6=str_jumin2.substring(5,6)
// 				var b7=str_jumin2.substring(6,7)

// 				var check_digit=check_digit+b1*8+b2*9+b3*2+b4*3+b5*4+b6*5 

// 				check_digit = check_digit%11
// 				check_digit = 11 - check_digit
// 				check_digit = check_digit%10

// 				if (check_digit != b7){
// 					alert('잘못된 주민등록번호입니다. 다시 확인하시고 입력해 주세요.');
// 					document.signform.jumin2.focus();
// 					return; 
// 				}
		 
// 			}
// 			break; 

// 		case "5" :
// 			if (document.signform.tele.value.length != 4){
// 				alert('행운 번호 4자리를 입력하세요.');
// 				document.signform.tele.focus();
// 				return;
// 			}
			
// 			var str_tele = document.signform.tele.value;
			
// 			var a1=str_tele.substring(0,1)
// 			var a2=str_tele.substring(1,2)
// 			var a3=str_tele.substring(2,3)
// 			var a4=str_tele.substring(3,4)
			
// 			if ((a1 < '0') || (a1 >'9')) {
// 				alert('행운번호를 숫자로 입력하세요.');
// 				document.signform.tele.focus();
// 				return;
// 			}
			
// 			if ((a2 < '0') || (a2 > '9')) {
// 				alert('행운번호를 숫자로 입력하세요.');
// 				document.signform.tele.focus();
// 				return;
// 			}
			
// 			if ((a3 < '0') || (a3 > '9')) {
// 				alert('행운번호를 숫자로 입력하세요.');
// 				document.signform.tele.focus();
// 				return;
// 			}

// 			if ((a4 < '0') || (a4 > '9')) {
// 				alert('행운번호를 숫자로 입력하세요.');
// 				document.signform.tele.focus();
// 				return;
// 			}
			
// 			var check_digit=a1+a2+a3+a4
			
// 			if (check_digit == 0){
// 				alert('잘못된 행운번호입니다. 다시 확인하시고 입력해 주세요.');
// 				document.signform.tele.focus();
// 				return; 
// 			}
// 			break; 
// 	}
		
// 	F_result()
// }

// function initsize() {
// 	try {
// 		//self.resizeTo(document.body.scrollWidth, document.body.scrollHeight);
// 	} catch(e) {};
// }
// -->
</SCRIPT>
<SCRIPT LANGUAGE="JavaScript"Src="/incs/javaEmbed/write.js"></SCRIPT>
<link rel=StyleSheet href='/style.css' type='text/css'>
<body topmargin="0" leftmargin="0" onload="initsize();">
<table width="789" cellpadding="0" cellspacing="0">
	<tR>
		<tD width="609" valign="top" align="center">

		<form name="signform" id="signform" method=post>

		<input type="hidden" name="urlinfo" value="<?=$urlinfo;?>">
		<input type="hidden" name="sel" value="<?=$sel;?>">

		<?include "../forms/unse_info.php";?>

<!-- =============================================================== -->
<div id="InPut">
		<table cellpadding="0" cellspacing="0">
			<tR>
				<tD style="padding-left:10px;"><img src="/images/input_img/contentTITLE/dot.gif" align="absmiddle"><img src="/images/space.gif" width="10"><img src="/images/input_img/barbirth.jpg" border="0"></tD>
			</tR>	
			<tR>
				<tD height="9"></tD>
			</tr>
			<tr>
				<tD align="center"><img src="/images/input_img/bottom_top.gif"></tD>
			</tR>
			<tR>
				<tD align="center" style="background-image:url('/images/input_img/bottom_bg.gif'); background-repeat:repeat-y; background-position:center 0px;">
				<?
				if($sel != "2" && $sel != "5"){include "../forms/input_form.php";echo "<br>";}

				switch($sel){
					case "2" :
						include "another_form/free_plus_form_2.php";

						break;
					case "3" :
						include "another_form/free_plus_form_3.php";

						break;
					case "4" :
						include "another_form/free_plus_form_4.php";

						break;
					case "5" :
						include "another_form/free_plus_form_5.php";

						break;
				}

				if($inputshow == "1"){}
				?>
				</tD>
			</tR>
			<tr>
				<tD align="center"><img src="/images/input_img/bottom_bottom.gif"></tD>
			</tR>
			<tR>
				<tD height="55" align="center" style="padding:10px;"><a href="javascript:checkInput(<?=$sel;?>);"><img src="/images/input_img/resultbutton.gif" border="0"></a></tD>
			</tr>
			<?include "../incs/iyong.php";?>
		</table>
</div>
<div id="resultIMG" align="center"></div>
<div id="result" align="center"></div>
<!-- =============================================================== -->

		</form>
	</tR>
</table>
</body>
</html>
<?include "../incs/form_foot.php";?>
