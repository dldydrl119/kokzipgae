<?include "../../db_connect/db_connect.php";?>
<?include "../../common/function.php";?>
<?
$UNSE_TITLE = "꿈해몽 / 태몽";
$title_var = "<a href='#1'><font color='#FFFFFF'><b>꿈해몽 / 태몽</b></font></a>";
$puritime_data = "N";
$o_manse_data = "N";
$manse_data = "N";
$ohang_data = "N";
$yukhyo_data = "N";
$puritime_data = "N";
$puritime_data1 = "N";
$puritime_data2 = "N";
$puritime_data3 = "Y";
$puritime_data4 = "N";

$url = $_REQUEST["url"];
$urltemp = $_REQUEST["urltemp"];
$dream_type = $_REQUEST["dream_type"];
$dream_name = $_REQUEST["dream_name"];
?>
<?include "../../common/include_top_c2.php";?>
<!-- 운세결과물 출력 시작 -->

						<table width="515" align="Center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
							<?S_SB_img("F007", $solution_var)?>
							<tr>
								<td style="<?=$fontcolor;?>"><BR>
<!-- ============================================================================================= -->
<SCRIPT LANGUAGE="JavaScript">
<!--
function F_signformdream2_check(){
	if(document.signformdream2.dream_name.value == ""){
		alert('검색하실 단어를 입력하세요');
		return;
	}
	
	signformdream2.submit();
}

function F_page_num(page_num){
	var page = document.getElementById("page");

	page.value = page_num;

	signformdream2.submit();
}

function F_show(div_var, show_var){
	var div_show = document.getElementById(div_var);

	if (show_var == "1")
	{
		div_show.style.display = "";
	}else{
		div_show.style.display = "none";
	}
}
//-->
</SCRIPT>
<table align="centeR" cellpadding="0" cellspacing="0">
	<tR>
		<tD>	
		<form name="signformdream2" method="post" action="/UNSE_DATA/unse/free/free_14.php" style="display : inline;">				
		<font color="#878787">
		<input type="radio" name="dream_type" value="태몽" checked>무료태몽</font>
		<input type="text" name="dream_name" value="<?=$dream_name?>" style="width:98px;height:20px;">
		<input type="button" name="dreamButton" value="검색" onclick="F_signformdream2_check()">
		<input type="hidden" name="urlinfo" value="dream">
		<input type="hidden" name="sel" value="<?=$sel?>">
		<input type="hidden" name="url" value="<?=$url?>">
		<input type="hidden" name="urltemp" value="<?=$urltemp?>">
		<input type="hidden" name="nextresult" value="1">
		<input type="hidden" name="page">
		</form>
		</tD>
	</tR>
</table>
<BR><?include "../../solve/F/F007.php";?>
<!-- ============================================================================================= -->
								</td>
							</tr>
							<?=$include_bottom_Top_c2;?>
						</table>
<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>