<script language=Javascript>
<!--
// document.domain='<?=$_SERVER['HTTP_HOST'];?>';
	var barcount = 0;
	
	baron = new Image;
	baron = "/images/result_img/jum_img/juyek_img/img/bar1.gif";

	baron_noyang = new Image;
	baron_noyang = "/images/result_img/jum_img/juyek_img/img/bar1_noyang.gif";

	baroff = new Image;
	baroff = "/images/result_img/jum_img/juyek_img/img/bar0.gif";

	baroff_noum = new Image;
	baroff_noum = "/images/result_img/jum_img/juyek_img/img/bar0_noum.gif";

	stickani = new Image;
	stickani = "/images/result_img/jum_img/juyek_img/img/stickani.gif";
	
	stickstop = new Image;
	stickstop = "/images/result_img/jum_img/juyek_img/img/stickstop.gif";

	stickend = new Image;
	//stickend = "/images/result_img/jum_img/juyek_img/img/stickrs.gif";
	stickend = "/images/subinfo_img/jum6_subinfo.jpg";

function clickstick(){

	if (barcount == 6) {
	  stickrs();
	} else {
	  document.stick.src = stickani;
	  JSCTimeOutID = window.setTimeout('stickrs()',1000);
	  JSCTimeOutID = window.setTimeout('off_stick()',1000);
	}
}

function off_stick(){
	if (barcount == 6) {
	  //document.stick.src = stickend;
	  var show1 = document.getElementById("show1");
	  var show2 = document.getElementById("show2");
//	  var show3 = document.getElementById("show3");

	  show1.style.display = "none";
	  show2.style.display = "";
//	  show3.style.display = "";
	} else {
	  document.stick.src = stickstop;
	}
}

function stickrs(){

	var stickrnd1 = parseInt(Math.random()*2);
	var stickrnd2 = parseInt(Math.random()*2);
	var stickrnd3 = parseInt(Math.random()*2);
	var stickvalue1 = 0;
	var stickvalue2 = 0;
	var stickvalue3 = 0;

	barcount = barcount + 1;

	if (barcount > 6) {
	  //document.signform.submit();
	}

	if (stickrnd1 >= 1) {
	stickvalue1 = 1; 
	}
	else { 
	stickvalue1 = 0;
	}
	if (stickrnd2 >= 1) {
	stickvalue2 = 1;
	} else {
	stickvalue2 = 0;
	}
	if (stickrnd3 >= 1) {
	stickvalue3 = 1; }
	else { stickvalue3 = 0; }

	var stickvalue = stickvalue1 + stickvalue2 + stickvalue3;


	if (barcount == 1) {
		if (stickvalue == 1) {
			document.bar1.src = baron;
			document.signform.intstick1.value = 1;
		} else if (stickvalue == 2) {
			document.bar1.src = baroff;
			document.signform.intstick1.value = 2;
		} else if (stickvalue == 3) {
			document.bar1.src = baron_noyang;
			document.signform.intstick1.value = 3;
		} else if (stickvalue == 0) {
			document.bar1.src = baroff_noum;
			document.signform.intstick1.value = 0;
		}


	} else if (barcount == 2) {
		if (stickvalue == 1) {
			document.bar2.src = baron;
			document.signform.intstick2.value = 1;
		} else if (stickvalue == 2) {
			document.bar2.src = baroff;
			document.signform.intstick2.value = 2;
		} else if (stickvalue == 3) {
			document.bar2.src = baron_noyang;
			document.signform.intstick2.value = 3;
		} else if (stickvalue == 0) {
			document.bar2.src = baroff_noum;
			document.signform.intstick2.value = 0;
		}
	} else if (barcount == 3) {
		if (stickvalue == 1) {
			document.bar3.src = baron;
			document.signform.intstick3.value = 1;
		} else if (stickvalue == 2) {
			document.bar3.src = baroff;
			document.signform.intstick3.value = 2;
		} else if (stickvalue == 3) {
			document.bar3.src = baron_noyang;
			document.signform.intstick3.value = 3;
		} else if (stickvalue == 0) {
			document.bar3.src = baroff_noum;
			document.signform.intstick3.value = 0;
		}
	} else if (barcount == 4) {
		if (stickvalue == 1) {
			document.bar4.src = baron;
			document.signform.intstick4.value = 1;
		} else if (stickvalue == 2) {
			document.bar4.src = baroff;
			document.signform.intstick4.value = 2;
		} else if (stickvalue == 3) {
			document.bar4.src = baron_noyang;
			document.signform.intstick4.value = 3;
		} else if (stickvalue == 0) {
			document.bar4.src = baroff_noum;
			document.signform.intstick4.value = 0;
		}
	} else if (barcount == 5) {
		if (stickvalue == 1) {
			document.bar5.src = baron;
			document.signform.intstick5.value = 1;
		} else if (stickvalue == 2) {
			document.bar5.src = baroff;
			document.signform.intstick5.value = 2;
		} else if (stickvalue == 3) {
			document.bar5.src = baron_noyang;
			document.signform.intstick5.value = 3;
		} else if (stickvalue == 0) {
			document.bar5.src = baroff_noum;
			document.signform.intstick5.value = 0;
		}
	} else if (barcount == 6) {
		if (stickvalue == 1) {
			document.bar6.src = baron;
			document.signform.intstick6.value = 1;
		} else if (stickvalue == 2) {
			document.bar6.src = baroff;
			document.signform.intstick6.value = 2;
		} else if (stickvalue == 3) {
			document.bar6.src = baron_noyang;
			document.signform.intstick6.value = 3;
		} else if (stickvalue == 0) {
			document.bar6.src = baroff_noum;
			document.signform.intstick6.value = 0;
		}
}	
	return;
}
//-->
</script>

<table border=0 cellpadding=3 cellspacing=0 align=center>
	<tr>
		<td align=center>			
		<form name="signform" method="post">
		<input type=hidden name=intstick1 value=''>
		<input type=hidden name=intstick2 value=''>
		<input type=hidden name=intstick3 value=''>
		<input type=hidden name=intstick4 value=''>
		<input type=hidden name=intstick5 value=''>
		<input type=hidden name=intstick6 value=''>   

		<input type="hidden" name="urlinfo" value="<?=$urlinfo;?>">
		<input type="hidden" name="sel" value="<?=$sel;?>">
		<input type="hidden" name="nextresult" value="1">       

				<table width="380" cellpadding="0" cellspacing="0">
				<tr>
					<td height="25" bgcolor=f8f8f8 align=center><input type=radio name=jumsa value=출행>출행점</tD> 
					<td bgcolor=f8f8f8 align=center><input type=radio name=jumsa value=대인>대인점</tD> 
					<td bgcolor=f8f8f8 align=center><input type=radio name=jumsa value=실물>실물점 </tD> 
					<td bgcolor=f8f8f8 align=center><input type=radio name=jumsa value=가출>가출점</tD> 
					<td bgcolor=f8f8f8 align=center><input type=radio name=jumsa value=구직>구직점
				</tR>
				<tr>
					<td height="25" bgcolor=f8f8f8 align=center><input type=radio name=jumsa value=소송>소송점</tD> 
					<td bgcolor=f8f8f8 align=center><input type=radio name=jumsa value=질병>질병점</tD> 
					<td bgcolor=f8f8f8 align=center><input type=radio name=jumsa value=잉태>임신점</tD> 
					<td bgcolor=f8f8f8 align=center><input type=radio name=jumsa value=매매>매매점</tD> 
					<td bgcolor=f8f8f8 align=center><input type=radio name=jumsa value=이사>이사점</tD>  
					</td>
				</tr>
				</table>
		</form>	 
		</td>
	</tr>
</table>

<div id="show1" name="show1">
<table width=490 cellspacing=1 cellpadding=5 border=0 align=center>
	<tr>
		<td align=center><font color=blue>경건한 마음으로 아래의 주역 아이콘을 천천히 6 번 클릭하세요 !</font><br><br><a href="javascript:clickstick()" onfocus=this.blur();><img src=/images/result_img/jum_img/juyek_img/img/stickstop.gif border=0 name="stick"></a><br><br></td>
	</tr>
</table>
</div>

<div id="show2" name="show2" style="display:none;">
<table width=490 cellspacing=1 cellpadding=5 border=0 align=center>
	<tr>
		<td align=center><img src="/images/subinfo_img/jum6_subinfo.jpg"></td>
	</tr>
	<tr>
		<tD height="20"></tD>
	</tR>
</table>
</div>

<table width=400 border=0 cellpadding=5 cellspacing=1 bgcolor=CCCCCC align=center>
	<tr bgcolor=f8f8f8 align=center>
		<td align=center bgcolor=FFFFFF>	
		<table width=60 cellpadding=1 cellspacing=0 border=0 align=center>
			<tr>
				<td align=center><font color=red>原卦</font></td>
			</tr>
			<tr>
				<td bgcolor=#f8f8f8>
				<table cellpadding=2 cellspacing=0 border=0>
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/bar2.gif  name="bar6"></td></tr>
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/bar2.gif  name="bar5"></td></tr>
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/bar2.gif  name="bar4"></td></tr>
					<tr><td bgcolor=f8f8f8><img src=/img/dum.gif width=1 height=4></td></tr>
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/bar2.gif  name="bar3"></td></tr>
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/bar2.gif  name="bar2"></td></tr>
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/bar2.gif  name="bar1"></td></tr>
				</table>
				</td>
			</tr>
		</table>
		</td>
	</tr>
</table>
