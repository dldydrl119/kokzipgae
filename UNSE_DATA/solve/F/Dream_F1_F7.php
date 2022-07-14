<body leftmargin=0 topmargin=5>
<table align="centeR" cellpadding="0" cellspacing="0">
	<tR>
		<tD>	
		<form name="db" method="post" action="" style="display : inline;" >	
		<font color="#878787">
		<input type="hidden" name="dream_type" value="일반" checked><!-- 무료꿈해몽 -->
		<input type="text" name="name1" value="<?=$_REQUEST["name1"]?>" style="width:98px;height:20px;font-size:12;color:#003300" onclick="if(this.value=='<?=$_REQUEST["name1"]?>'){this.select()}">
        <input type="submit" name="dreamButton" value="검색" style="font-size:11" onclick="db.submit();">
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

<SCRIPT LANGUAGE="JavaScript">
<!--
//db.action=parent.location
//-->
</SCRIPT>