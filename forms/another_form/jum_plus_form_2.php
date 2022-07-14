<script language=Javascript>
<!--
//document.domain='<?=$_SERVER['HTTP_HOST'];?>';
	var barcount = 0;
	
	baron = new Image;
	baron = "/images/result_img/jum_img/juyek_img/img/bar1.gif";
	baronz = new Image;
	baronz = "/images/result_img/jum_img/juyek_img/img/bar1.gif";
	baronzz = new Image;
	baronzz = "/images/result_img/jum_img/juyek_img/img/bar1.gif";


	baroff = new Image;
	baroff = "/images/result_img/jum_img/juyek_img/img/bar0.gif";
	baroffz = new Image;
	baroffz = "/images/result_img/jum_img/juyek_img/img/bar0.gif";
	baroffzz = new Image;
	baroffzz = "/images/result_img/jum_img/juyek_img/img/bar0.gif";



	stickani = new Image;
	stickani = "/images/result_img/jum_img/juyek_img/img/stickani.gif";
	
	stickstop = new Image;
	stickstop = "/images/result_img/jum_img/juyek_img/img/stickstop.gif";


	stickend = new Image;
	//stickend = "/images/result_img/jum_img/juyek_img/img/stickrs.gif";
	stickend = "/images/subinfo_img/jum2_subinfo.jpg";

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

	var stickrnd1z = parseInt(Math.random()*2);
	var stickrnd2z = parseInt(Math.random()*2);
	var stickrnd3z = parseInt(Math.random()*2);
	var stickvalue1z = 0;
	var stickvalue2z = 0;
	var stickvalue3z = 0;

	var stickrnd1zz = parseInt(Math.random()*2);
	var stickrnd2zz = parseInt(Math.random()*2);
	var stickrnd3zz = parseInt(Math.random()*2);
	var stickvalue1zz = 0;
	var stickvalue2zz = 0;
	var stickvalue3zz = 0;
	
	
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


	if (stickrnd1z >= 1) {
	stickvalue1z = 1; 
	}
	else { 
	stickvalue1z = 0;
	}
	if (stickrnd2z >= 1) {
	stickvalue2z = 1;
	} else {
	stickvalue2z = 0;
	}
	if (stickrnd3z >= 1) {
	stickvalue3z = 1; }
	else { stickvalue3z = 0; }

	var stickvaluez = stickvalue1z + stickvalue2z + stickvalue3z;

	if (stickrnd1zz >= 1) {
	stickvalue1zz = 1; 
	}
	else { 
	stickvalue1zz = 0;
	}
	if (stickrnd2zz >= 1) {
	stickvalue2zz = 1;
	} else {
	stickvalue2zz = 0;
	}
	if (stickrnd3zz >= 1) {
	stickvalue3zz = 1; }
	else { stickvalue3zz = 0; }

	var stickvaluezz = stickvalue1zz + stickvalue2zz + stickvalue3zz;


	if (barcount == 1) {
		if (stickvalue > 1) {
			document.bar1.src = baron;
			document.signform.intstick1.value = 1;
		} else {
			document.bar1.src = baroff;
			document.signform.intstick1.value = 0;
		}
	} else if (barcount == 2) {
		if (stickvalue > 1) {
			document.bar2.src = baron;
			document.signform.intstick2.value = 1;
		} else {
			document.bar2.src = baroff;
			document.signform.intstick2.value = 0;
		}
	} else if (barcount == 3) {
		if (stickvalue > 1) {
			document.bar3.src = baron;
			document.signform.intstick3.value = 1;
		} else {
			document.bar3.src = baroff;
			document.signform.intstick3.value = 0;
		}
	} else if (barcount == 4) {
		if (stickvalue > 1) {
			document.bar4.src = baron;
			document.signform.intstick4.value = 1;
		} else {
			document.bar4.src = baroff;
			document.signform.intstick4.value = 0;
		}
	} else if (barcount == 5) {
		if (stickvalue > 1) {
			document.bar5.src = baron;
			document.signform.intstick5.value = 1;
		} else {
			document.bar5.src = baroff;
			document.signform.intstick5.value = 0;
		}
	} else if (barcount == 6) {
		if (stickvalue > 1) {
			document.bar6.src = baron;
			document.signform.intstick6.value = 1;
		} else {
			document.bar6.src = baroff;
			document.signform.intstick6.value = 0;
		}
	}





	if (barcount == 1) {
		if (stickvaluez > 1) {
			document.bar1z.src = baronz;
			document.signform.intstick1z.value = 1;
		} else {
			document.bar1z.src = baroffz;
			document.signform.intstick1z.value = 0;
		}
	} else if (barcount == 2) {
		if (stickvaluez > 1) {
			document.bar2z.src = baronz;
			document.signform.intstick2z.value = 1;
		} else {
			document.bar2z.src = baroffz;
			document.signform.intstick2z.value = 0;
		}
	} else if (barcount == 3) {
		if (stickvaluez > 1) {
			document.bar3z.src = baronz;
			document.signform.intstick3z.value = 1;
		} else {
			document.bar3z.src = baroffz;
			document.signform.intstick3z.value = 0;
		}
	} else if (barcount == 4) {
		if (stickvaluez > 1) {
			document.bar4z.src = baronz;
			document.signform.intstick4z.value = 1;
		} else {
			document.bar4z.src = baroffz;
			document.signform.intstick4z.value = 0;
		}
	} else if (barcount == 5) {
		if (stickvaluez > 1) {
			document.bar5z.src = baronz;
			document.signform.intstick5z.value = 1;
		} else {
			document.bar5z.src = baroffz;
			document.signform.intstick5z.value = 0;
		}
	} else if (barcount == 6) {
		if (stickvaluez > 1) {
			document.bar6z.src = baronz;
			document.signform.intstick6z.value = 1;
		} else {
			document.bar6z.src = baroffz;
			document.signform.intstick6z.value = 0;
		}
	}

	
	

	if (barcount == 1) {
		if (stickvaluezz > 1) {
			document.bar1zz.src = baronzz;
			document.signform.intstick1zz.value = 1;
		} else {
			document.bar1zz.src = baroffzz;
			document.signform.intstick1zz.value = 0;
		}
	} else if (barcount == 2) {
		if (stickvaluezz > 1) {
			document.bar2zz.src = baronzz;
			document.signform.intstick2zz.value = 1;
		} else {
			document.bar2zz.src = baroffzz;
			document.signform.intstick2zz.value = 0;
		}
	} else if (barcount == 3) {
		if (stickvaluezz > 1) {
			document.bar3zz.src = baronzz;
			document.signform.intstick3zz.value = 1;
		} else {
			document.bar3zz.src = baroffzz;
			document.signform.intstick3zz.value = 0;
		}
	} else if (barcount == 4) {
		if (stickvaluezz > 1) {
			document.bar4zz.src = baronzz;
			document.signform.intstick4zz.value = 1;
		} else {
			document.bar4zz.src = baroffzz;
			document.signform.intstick4zz.value = 0;
		}
	} else if (barcount == 5) {
		if (stickvaluezz > 1) {
			document.bar5zz.src = baronzz;
			document.signform.intstick5zz.value = 1;
		} else {
			document.bar5zz.src = baroffzz;
			document.signform.intstick5zz.value = 0;
		}
	} else if (barcount == 6) {
		if (stickvaluezz > 1) {
			document.bar6zz.src = baronzz;
			document.signform.intstick6zz.value = 1;
		} else {
			document.bar6zz.src = baroffzz;
			document.signform.intstick6zz.value = 0;
		}
	}

	
	return;
}



//-->
</script>
<?$rd = rand(1,6);?>
<table border=0 cellpadding=3 cellspacing=0>
	<tr>
		<td>
		<form name="signform" method="post">	

		<input type=hidden name=intstick1 value=0>
		<input type=hidden name=intstick2 value=0>
		<input type=hidden name=intstick3 value=0>
		<input type=hidden name=intstick4 value=0>
		<input type=hidden name=intstick5 value=0>
		<input type=hidden name=intstick6 value=0>
		
		<input type=hidden name=intstick1z value=0>
		<input type=hidden name=intstick2z value=0>
		<input type=hidden name=intstick3z value=0>
		<input type=hidden name=intstick4z value=0>
		<input type=hidden name=intstick5z value=0>
		<input type=hidden name=intstick6z value=0>
		
		<input type=hidden name=intstick1zz value=0>
		<input type=hidden name=intstick2zz value=0>
		<input type=hidden name=intstick3zz value=0>
		<input type=hidden name=intstick4zz value=0>
		<input type=hidden name=intstick5zz value=0>
		<input type=hidden name=intstick6zz value=0>

		<input type=hidden name=rd value=<?=$rd;?>>

		<input type="hidden" name="urlinfo" value="<?=$urlinfo;?>">
		<input type="hidden" name="sel" value="<?=$sel;?>">
		<input type="hidden" name="nextresult" value="1">

		</form>	  
		</td>
	</tr>
</table>

<div id="show1" name="show1">
<table width=490 cellspacing=1 cellpadding=5 border=0 align=center>
	<tr>
		<td align=center>경건한 마음으로 아래의 주역 아이콘을 천천히 6 번 클릭하세요 !<br><br><a href="javascript:clickstick()" onfocus=this.blur();><img src=/images/result_img/jum_img/juyek_img/img/stickstop.gif border=0 name="stick"></a><br><br></td>
	</tr>
</table>
</div>

<div id="show2" name="show2" style="display:none;">
<table width=490 cellspacing=1 cellpadding=5 border=0 align=center>
	<tr>
		<tD height="10"></tD>
	</tR>
	<tr>
		<td align=center><img src="/images/subinfo_img/jum2_subinfo.jpg"></td>
	</tr>
	<tr>
		<tD height="20"></tD>
	</tR>
</table>
</div>
<div id="show3"  style="display:none;">></div>

<table width=400 border=0 cellpadding=5 cellspacing=1 bgcolor=CCCCCC align=center>
	<tr bgcolor=f8f8f8 align=center>
		<td align=center bgcolor=FFFFFF>
		<table width=60 cellpadding=1 cellspacing=0 border=0 align=center>
			<tr>
				<td align=center><font color=red>先天卦</font></td>
			</tr>
			<tr>
			<td bgcolor=#f8f8f8>
				<table cellpadding=2 cellspacing=0 border=0>
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/bar2.gif  name="bar6zz"></td></tr>
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/bar2.gif  name="bar5zz"></td></tr>
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/bar2.gif  name="bar4zz"></td></tr>
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/dum.gif width=1 height=4></td></tr>
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/bar2.gif  name="bar3zz"></td></tr>
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/bar2.gif  name="bar2zz"></td></tr>
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/bar2.gif  name="bar1zz"></td></tr>
				</table>
				</td>	
			</tr>
			<tr>
				<td align=center>과거의 운</td>
			</tr>
		</table>
		</td>
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
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/dum.gif width=1 height=4></td></tr>
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/bar2.gif  name="bar3"></td></tr>
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/bar2.gif  name="bar2"></td></tr>
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/bar2.gif  name="bar1"></td></tr>
				</table>
				</td>
			</tr>
			<tr>
				<td align=center>현재의 운</td>
			</tr>
		</table>
		</td>
		<td align=center bgcolor=FFFFFF>
		<table width=60 cellpadding=1 cellspacing=0 border=0 align=center>	
			<tr>
				<td align=center><font color=red>之卦</font></td>
			</tr>
			<tr>
				<td bgcolor=#f8f8f8>
				<table cellpadding=2 cellspacing=0 border=0>
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/bar2.gif  name="bar6z"></td></tr>
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/bar2.gif  name="bar5z"></td></tr>
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/bar2.gif  name="bar4z"></td></tr>
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/dum.gif width=1 height=4></td></tr>
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/bar2.gif  name="bar3z"></td></tr>
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/bar2.gif  name="bar2z"></td></tr>
					<tr><td bgcolor=f8f8f8><img src=/images/result_img/jum_img/juyek_img/img/bar2.gif  name="bar1z"></td></tr>
				</table>
				</td>
			</tr>
			<tr>
				<td align=center>미래의 운</td>
			</tr>
		</table>
		</td>
	</tr>
</table>
