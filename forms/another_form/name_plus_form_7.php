<?
include_once "../incs/function.php"; // FileRead 함수를 위해 추가
?>
<table width=430 height=86 border=0 cellspacing=1 cellpadding=5 align=center bgcolor=FFFFFF>
	<tr>
		<td  bgcolor=FFFFFF align=center background=/common/21C_table_bg.gif> 
		<table width=400 border=0 cellspacing=0 cellpadding=5 align='center'>
			<tr>
				<td width="200"  align="right" ><font color=red>본인</font>의 성씨&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=CC0000><b>|</b></font></td>
				<td width="200"  align="left"><select name="msung"><?

//include "../data/sungchu_option.dat";
echo FileRead("../data/sungchu_option.dat"); // 이 함수는 확장자 .dat .txt 파일만 출력

?></select></td>
			</tr> 
				<tr>
				<td height=1 bgcolor=CC0000 colspan=2></td>
			</tr>
			<tr>
				<td width="200"  align="right" ><font color=red>상대방</font>의 성씨&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=CC0000><b>|</b></font></td>
				<td width="200"  align="left"><select name="ysung"><?

//include "../data/sungchu_option.dat";
echo FileRead("../data/sungchu_option.dat"); // 이 함수는 확장자 .dat .txt 파일만 출력

?></select></td>
			</tr>
		</table>
		</td>
	</tr>
</table> 

<input type="hidden" name="nextresult" value="1">