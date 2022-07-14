<br>
<?
if($urlinfo=="lotto"){$vall="예상구매 일시";}else{{$vall="특정일 선택";}};
?>


				<TABLE width=430 border=0 cellspacing=1 cellpadding=3 bgcolor=CCCCCC>
					<TR>
						<TD width="100" bgcolor=f8f8f8 align=center><?=$vall?></TD>
						<TD bgcolor=cceecc align=left>
								<select name="MtYear"class="inputb"onchange="babo()">
<?
	$year 	= ceil(date("Y"));
	$month 	= ceil(date("m"));
	$day 		= ceil(date("d"));
	$hour 	= ceil(date("H"));
	$mins 	= ceil(date("i"));
?>
		<script language="JavaScript">

Cuyy=<?=$year?>;
Cumm=<?=$month?>;
Cudd=<?=$day?>;

		for(n=Cuyy; n<=Cuyy+1; n++){
			s	= "";
			if(n==Cuyy){	s = " selected";}
			document.write("<option value=" + n + s + ">" + n);
		}
		</script>
		</select>年
<div style="position:absolute">
<input type="hidden" name="MtMonth" value="<?=$month?>">
<input type="hidden" name="MtDay" value="<?=$day?>">

</div>
<div style="position:absolute" id="mnm1">
		<select name="MtMonth1"class="inputb" onchange="babo()">
		<script language="JavaScript">
		for(n=Cumm; n<=12; n++){
			s	= "";
			if(n==Cumm)	s = " selected";
			document.write("<option value=" + n + s + ">" + n);
		}
		</script>		
		</select>月</div>

<div style="position:absolute;display:none" id="mnm2">
		<select name="MtMonth2"class="inputb"onchange="babo()">
		<script language="JavaScript">
		for(n=1; n<=12; n++){
			s	= "";

			document.write("<option value=" + n + s + ">" + n);
		}
		</script>		
		</select>月</div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;	&nbsp;
		
<SCRIPT LANGUAGE="JavaScript">
<!--
function babo()
{
if (signform.MtYear.value=='<?=$year?>'){document.all.mnm1.style.display='';document.all.mnm2.style.display='none';signform.MtMonth.value=signform.MtMonth1.value;eej=1}
															 else{document.all.mnm1.style.display='none';document.all.mnm2.style.display='';signform.MtMonth.value=signform.MtMonth2.value;eej=2}

if (signform.MtMonth.value=='<?=$month?>'&&eej==1){document.all.dnd1.style.display='';document.all.dnd2.style.display='none';signform.MtDay.value=signform.MtDay1.value}
															                 else{document.all.dnd1.style.display='none';document.all.dnd2.style.display='';signform.MtDay.value=signform.MtDay2.value}

}
//-->
</SCRIPT>


<div style="position:absolute" id="dnd1">
		<select name="MtDay1"class="inputb"onchange="babo()">
		<script language="JavaScript">
		for(n=Cudd; n<=31; n++){
			s	= "";
			if(n==Cudd)	s = " selected";
			document.write("<option value=" + n + s + ">" + n);
		}
		</script>		
		</select>日</div>

<div style="position:absolute;display:none" id="dnd2">
		<select name="MtDay2"class="inputb"onchange="babo()">
		<script language="JavaScript">
		for(n=1; n<=31; n++){
			s	= "";

			document.write("<option value=" + n + s + ">" + n);
		}
		</script>		
		</select>日</div>
		
						</select>
						</TD>
					</TR>
				</table>
