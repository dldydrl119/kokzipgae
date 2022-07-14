<SCRIPT LANGUAGE="JavaScript">
<!--
signform.ggggbb.value='2'

function cbmass(a)
{
		if (a==1){
		if (signform.sex[0].checked==true){signform.your_sex[1].checked=true}else{signform.your_sex[0].checked=true}
		}
		else
		{if (signform.your_sex[0].checked==true){signform.sex[1].checked=true}else{signform.sex[0].checked=true}}


}

//-->
</SCRIPT>
<table width="431" cellpadding="0" cellspacing="0">
<tr>
<tD>
<table cellpadding="0" cellspacing="0">
<tR>
<tD width="107" height="27" align="center" style="background-image:url('/images/input_img/inputTBG.gif'); background-repeat:no-repeat;"><b>이 름</b></tD>
</tr>
<tR>
<tD height="4"></tD>
</tr>
<tR>
<tD width="107" height="27" align="center" style="background-image:url('/images/input_img/inputTBG.gif'); background-repeat:no-repeat;"><b>생년월일시</b></tD>
</tr>
<tR>
<tD height="4"></tD>
</tr>
<tR>
<tD width="107" height="27" align="center" style="background-image:url('/images/input_img/inputTBG.gif'); background-repeat:no-repeat;"><b>양력/음력</b></tD>
</tr>
<tR>
<tD height="4"></tD>
</tr>
<tR>
<tD width="107" height="27" align="center" style="background-image:url('/images/input_img/inputTBG.gif'); background-repeat:no-repeat;"><b>평달/윤달</b></tD>
</tr>
</table>
</td>
<td>
<table cellpadding="0" cellspacing="0" bgcolor="#F9F9F9" style="padding-left:1px;">
<tR>
<td width="320" height="27" style="border-bottom: 1px solid #f0f0f0;"><input type="text"  name="your_user_name"  maxlength="12" size="12">&nbsp;&nbsp;&nbsp;<input type="radio"  name="your_sex" value="남" onclick="cbmass(2)">남자 <input type="radio" name="your_sex" value="여" checked onclick="cbmass(2)">여자</td>
</tr>
<tR>
<tD height="4"></tD>
</tr>
<tR>
<td width="320" height="27">
<select name=your_year class="inputb">
<SCRIPT LANGUAGE="JavaScript">
<!--
		var date = new Date();
		with(date)
		{
			var Cuyy = getFullYear();
			var Cumm= getMonth()+1;
			var Cudd = getDate();
			var Cuhh = getHours();
			var Cumi = getMinutes();
		}
		for(n=Cuyy-70; n<=Cuyy; n++){
					s	= "";
					if(n==Cuyy)	s = " selected";
					document.write("<option value=" + n + s + ">" + n);
				}
//-->
</SCRIPT>
</select>&nbsp;년
<select name=your_month class="inputb">
		<script language="JavaScript">
		for(n=1; n<=12; n++){
			s	= "";
			dn=n;if(dn<10){dn="0"+dn}
			if(n==Cumm)	s = " selected";
			document.write("<option value=" + dn + s + ">" + n);
		}
		</script>
						</select>&nbsp;월
						<select name=your_day class="inputb">
		<script language="JavaScript">
		for(n=1; n<=31; n++){
			s	= "";
			dn=n;if(dn<10){dn="0"+dn}
			if(n==Cudd)	s = " selected";
			document.write("<option value=" + dn + s + ">" + n);
		}
		</script>
						</select>&nbsp;일
						<select name=your_hour class="inputb">
	                   <option value="0" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;모름</option>
	                   <option value="01"> 子 (23:30 ~ 01:29)</option>
                        <option value="02"  > 丑 (01:30 ~ 03:29)</option>
                        <option value="04"  > 寅 (03:30 ~ 05:29)</option>
                        <option value="06"  > 卯 (05:30 ~ 07:29)</option>
                        <option value="08"  > 辰 (07:30 ~ 09:29)</option>
                        <option value="10"  > 巳 (09:30 ~ 11:29)</option>
                        <option value="12"  > 午 (11:30 ~ 13:29)</option>
                        <option value="14"  > 未 (13:30 ~ 15:29)</option>
                        <option value="16"  > 申 (15:30 ~ 17:29)</option>
                        <option value="18" > 酉 (17:30 ~ 19:29)</option>
                        <option value="20" > 戌 (19:30 ~ 21:29)</option>
                        <option value="22" > 亥 (21:30 ~ 23:29)</option>
         </select>
<input type=hidden name="your_min" value='00'>
						</td>
					</tr>
					<tR>
						<tD height="4"></tD>
					</tr>
					<tR>
						<td width="320" height="27"><input type="radio"  name="your_solunar" value="solar" checked>양력 <input type="radio" name="your_solunar" value="lunar">음력</td>
					</tr>
					<tR>
						<tD height="4"></tD>
					</tr>
					<tR>
						<td width="320" height="27"><input type="radio"  name="your_youn" value="0" checked>평달 <input type="radio"  name="your_youn" value="1">윤달</td>
					</tR>
				</tablE>
				</tD>
			</tr>
		</table>


<?
	if($birthday)
	{
		$userday = explode("-",$birthday);
?>
<script>
	f = document.signform;
	m_gender = "<?=$gender?>";
	if(m_gender==1) f.your_sex[1].checked = true;
	if(m_gender==2) f.your_sex[0].checked = true;
</script>
<?
	}
?>
