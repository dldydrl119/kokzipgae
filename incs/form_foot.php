<SCRIPT LANGUAGE="JavaScript">

var openerWindow = '';

function requestPay(mode,money,con,sel,urlinfo)
{
		switch (urlinfo)
		{
			case "saju" :
			case "manse" :
				if (document.signform.user_name.value == "") {
					alert('이름을 입력하세요!');
					document.signform.user_name.focus();
					return;
				}

				break;
			case "jum" :
				switch (sel){
					case "1" :
					case "3" :
					case "4" :
					case "5" :
						if (document.signform.user_name.value == "") {
							alert('이름을 입력하세요!');
							document.signform.user_name.focus();
							return;
						}
						break;
				}

				break;
			case "name" :
				switch (sel){
					case "6" :
						if (document.signform.name_1.value == '0') {
						 alert("성을 선택하세요!");
						 document.signform.name12_1.focus();
						 return;
						}
						break;
					case "7" :
						if (document.signform.msung.value == "") {
							alert("본인의 성을 선택하세요!");
							document.signform.msung.focus();
							return;
						}

						if (document.signform.ysung.value == "") {
							alert("상대방의 성을 선택하세요!");
							document.signform.ysung.focus();
							return;
						}
						break;
				}

				break;

			case "gunghap" :
				switch (sel){
					case "1" :
					case "6" :
						if (document.signform.user_name.value == "") {
							alert('이름을 입력하세요!');
							document.signform.user_name.focus();
							return;
						}
						if (document.signform.your_user_name.value == "") {
							alert('상대방의 이름을 입력하세요!');
							document.signform.your_user_name.focus();
							return;
						}
						break;
					case "3" :
					case "4" :
					case "5" :
						if (document.signform.user_name.value == "") {
							alert('이름을 입력하세요!');
							document.signform.user_name.focus();
							return;
						}
						break;
				}

				break;

			case "lotto" :
				if (document.signform.user_name.value == "") {
					alert('이름을 입력하세요!');
					document.signform.user_name.focus();
					return;
				}
				break;

			case "yukim" :
				if (document.signform.user_name.value == "") {
					alert('이름을 입력하세요!');
					document.signform.user_name.focus();
					return;
				}
				break;

			case "selectDay" :
				if (document.signform.user_name.value == "") {
					alert('이름을 입력하세요!');
					document.signform.user_name.focus();
					return;
				}

				if (sel == "1")
				{
					if (document.signform.your_user_name.value == "") {
						alert('상대방의 이름을 입력하세요!');
						document.signform.your_user_name.focus();
						return;
					}
				}
				break;
		}

	if(confirm("정확히 기재하셨나요?") == true){

		window.open("/blank.html",'result_var','width=420, height=600, scrollbars=yes')

		if (urlinfo == "gunghap" && (sel == "4" || sel == "5" || sel == "6"))
		{
			gogo.location.href = "/paymode/pay.php?mode="+mode+"&con="+con+"&money="+money;
		}else{
			gogo.location.href = "/paymode/pay.php?mode="+mode+"&con="+con+"&money="+money;
		}
	}
}

function F_check19(mode_var, con_var, money_var){
	window.open("/incs/check19.php?mode="+mode_var+"&con="+con_var+"&money="+money_var, "check19", "width=570,height=300,left=100,top=100");
}

function F_pay_process(mode_var, con_var, money_var){
			var frm = document.getElementById("signform");
		//	var obj = document.getElementById("paymode");

			var width_var;
			var height_var;

			switch(mode_var){
				case "hand" : 
					width_var = "500";
					height_var = "600";
					break;
				case "ars" :
					width_var = "420";
					height_var = "405";
					break;
				case "member" :
					width_var = "420";
					height_var = "405";
					break;
			}
			c="/paymode/pay.php?mode="+mode_var+"&con="+con_var+"&money="+money_var
			gogo.location=(c)


}

</SCRIPT>
<iframe src="" name="gogo" width=0 height=0 style="display: none;"></iframe>
<input name="fsize" type="hidden" value="dosan">
<!-- 
---------------------------------------------------------------------------------------------------------------------------------------
▣ 제작처 : Interlife
▣ 제작자 : 김재열
▣ 주의사항 : 아래 코드를 수정하시거나 다른 파일로 옮기실 경우 사이트내 에러가 발생하실 수 있습니다.
---------------------------------------------------------------------------------------------------------------------------------------
-->
<?
$url_info = $_SERVER['REQUEST_URI'];

$url_info_split = explode("/", $url_info);

if($url_info_split[1] == "forms"){
	$size= filesize("..//incs/form_foot.php");

	$textarea = $_SERVER['SERVER_NAME']."이부분을 수정하실경우 불이익이 발생할 수 있음을 알려드립니다.";
?>
	<SCRIPT LANGUAGE='JavaScript'>
	<!--
	function F_result(){
		var frm = document.getElementById('signform');

		frm.action = "https://<?=$_SERVER['SERVER_NAME']?>/x2_write.php"; 
	// 	frm.action = "/UNSE_DATA/access.php"; 
		frm.target = 'result_var'; 
		frm.method = 'post'; 

		frm.submit();
	}
	//-->
	</SCRIPT>

<?
	$textarea = $_SERVER['SERVER_NAME']."이부분을 수정하실경우 불이익이 발생할 수 있음을 알려드립니다.";
}else{
	echo "잘못된 접근입니다. 02-784-7242  로 연락주시기 바랍니다."; exit;
} 
?>
<!-- 
---------------------------------------------------------------------------------------------------------------------------------------
-->


<map name="top_1">
  <area shape="rect" coords="423,3,517,27" href="/process/leave.php" onfocus="blur()">
  <area shape="rect" coords="526,5,644,29" href="/counlist.php" onfocus="blur()">
  <area shape="rect" coords="656,3,713,28" href="/mboard/mboard.php?mode=free" onfocus="blur()">
  <area shape="rect" coords="726,2,775,27" href="/mboard/mboard.php?mode=1_on" onFocus="blur()">
  <area shape="rect" coords="785,4,843,25" href="javascript:bookmark();" onfocus="blur()">
  <area shape="rect" coords="845,2,930,25" href="#A"  onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.gilun.com');" onfocus="blur()">
</map>

<map name="top_2">
  <area shape="rect" coords="19,4,257,68" href="/main.php" onfocus="blur();">
  <area shape="rect" coords="276,11,362,57" href="/incs/sub.php?urlinfo=saju" onfocus="blur();">
  <area shape="rect" coords="374,10,450,60" href="/incs/sub.php?urlinfo=gunghap" onfocus="blur();">
  <area shape="rect" coords="468,10,549,55" href="/incs/sub.php?urlinfo=name" onfocus="blur();">
  <area shape="rect" coords="562,5,623,56" href="/incs/sub.php?urlinfo=jum" onfocus="blur();">
  <area shape="rect" coords="639,3,688,66" href="/forms/comm_forms.php?urlinfo=selectDay&sel=1" onfocus="blur();">
  <area shape="rect" coords="696,8,755,58" href="/forms/comm_forms.php?urlinfo=faceface&sel=1" onfocus="blur();">
  <area shape="rect" coords="762,7,848,60" href="/forms/comm_forms.php?urlinfo=lotto&sel=1" onfocus="blur();">
  <area shape="rect" coords="851,10,936,60" href="/incs/sub.php?urlinfo=theme" onfocus="blur();">
</map>