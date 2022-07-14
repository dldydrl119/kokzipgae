<?
if($choice4 == ""){ 
?>
<br>
<table width=510 align=center bgcolor=CCCCCC border=0 cellspacing=0 cellpadding=0>
  <tr><td bgcolor=f8f8f8 align=center><img src="/images/subinfo_img/jum1_subinfo.jpg"></td></tr>
</table>
<?}?>

<center>
<form name='signform' method='post' action='/UNSE_DATA/unse/jum/jum_1.php'>
<input type='hidden' name='url' value='<?=$url?>'>
<input type='hidden' name='cate' value='<?=$cate?>'>
<input type='hidden' name='sel' value='<?=$sel?>'>
<?
if($mm == ""){$display_mm = $current_umyear;}Else{$display_mm = substr($mm,0,4);}
?>	      
	      <select name=mm>
<?
		for($i=$mm_begin-10; $i < $mm_begin; $i++){
			if($i == $display_mm){$s = "selected";}Else{$s = "";}
		      echo "<option value ='".$i.$be_current_daehan."' ".$s.">".$be_current_daehan." 대운 ".$i." 년</option>";
		} 

		for($i=$mm_begin; $i < $mm_last+1; $i++){
			if($i == $display_mm){$s = "selected";}Else{$s = "";}  
		      echo "<option value ='".$icurrent_daehan."' ".$s.">".$current_daehan." 대운 ".$i." 년</option>";
		} 

		for($i=$mm_last+1; $i < $mm_last+11; $i++){
			if($i == $display_mm){$s = "selected";}Else{$s = "";}
		      echo "<option value ='".$i.$af_current_daehan."' ".$s.">".$af_current_daehan." 대운 ".$i." 년</option>";
		} 
?>
	</select>

<?
If($numbering == ""){$numbering = "0";}

$numbering = $numbering + 1;

If($numbering > 3){
	$javascriptS1 = "alert('3회까지 이용이 가능합니다.');";
}Else{
	$javascriptS1 = "send(signform)";
}
?>

<input type=hidden name=solunar value="<?=$solunar?>">
<input type=hidden name=youn value="<?=$youn?>">
<input type=hidden name=year value="<?=$request_year?>">
<input type=hidden name=month value="<?=$request_month?>">
<input type=hidden name=day value="<?=$request_day?>">
<input type=hidden name=hour value="<?=$request_hour?>">
<input type=hidden name=min value="<?=$request_min?>">
<input type=hidden name=sex value="<?=$sex?>">
<input type=hidden name=my_year_h value="<?=$my_year_h?>">
<input type=hidden name=my_year_e value="<?=$my_year_e?>">
<input type=hidden name=lunar_month value="<?=$lunar_month?>">
<input type=hidden name=lunar_day value="<?=$lunar_day?>">

<input type="hidden" name="numbering" value="<?=$numbering?>">

<input type=button value='확인' onclick="<?=$javascriptS1?>" onfocus='this.blur()' ><!-- &nbsp&nbsp&nbsp<input type=button value=다시 onclick="document.signform.reset()" onfocus=this.blur() > -->
</form></center>
<table align="center" border=0 cellspacing=1 cellpadding=0 bgcolor=000000>
  <tr> 
   <!----------------------------------------------------------사궁 ----->   
    
    <td width=<?=$width?> height=<?=$height?> bgcolor=<?=$bgcolor_04?>>
       <table border=0 width=100% height=100% background=img/sa_21C_back.gif >
         <tr>
	   <td align=right colspan=4><?=$ary04?>
	   </td>
         </tr>
         <tr>
	   <td align=right colspan=4><?=$jigong_my_04_disp.$jigup_my_04_disp.$yeungsung_my_04_disp.$whasung_my_04_disp.$gyungryang_my_04_disp.$tara_my_04_disp.$cheanma_my_04_disp.$nokjon_my_04_disp.$mungok_my_04_disp.$munchang_my_04_disp.$upil_my_04_disp.$jabo_my_04_disp.$cheangue_my_04_disp.$cheanwol_my_04_disp.$taeum_my_04_disp.$tamrang_my_04_disp.$geamun_my_04_disp.$cheansang_my_04_disp.$cheanryang_my_04_disp.$chilsal_my_04_disp.$pagun_my_04_disp.$yeamjung_my_04_disp.$chendong_my_04_disp.$mugok_my_04_disp.$taeyang_my_04_disp.$chengi_my_04_disp.$cheanbu_my_04_disp.$jami_my_04_disp?>
	   </td>
         </tr>
         <tr>
	   <td align=center>
	   <?=$baksa_04_disp.$jangsung_04_disp.$taese_04_disp?>
	   </td>
	   <td align=center>
	   	<?=$daehan_04?>
	   <br>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=명&choice2=巳&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$myung_04_disp?></a>
	   <?=$sin_04_disp?>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=궁&choice2=巳&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$gung_04_disp?></a>
	   </td>
	   <td align=center>
	   <?=$age_04_disp?><br><?=$unsung_04_disp?>
	   </td>
	   <td align=center>
	   <?=$gabja_04_disp?>
	   </td>
         </tr>
	 <tr>
	  <td align=center colspan=4>
       <?=$dae04_disp.$you04_disp.$dugun_04_disp?>
	  </td>
         </tr>
	</table> 
    </td>
    
<!----------------------------------------------------------오궁 ----->    
    
    <td width=<?=$width?> height=<?=$height?>  bgcolor=<?=$bgcolor_05?>>
       <table border=0 width=100% height=100% background=img/o_21C_back.gif>
         <tr>
	   <td align=right colspan=4><?=$ary05?>
	   </td>
         </tr>
         <tr>
	   <td align=right colspan=4><?=$jigong_my_05_disp.$jigup_my_05_disp.$yeungsung_my_05_disp.$whasung_my_05_disp.$gyungryang_my_05_disp.$tara_my_05_disp.$cheanma_my_05_disp.$nokjon_my_05_disp.$mungok_my_05_disp.$munchang_my_05_disp.$upil_my_05_disp.$jabo_my_05_disp.$cheangue_my_05_disp.$cheanwol_my_05_disp.$taeum_my_05_disp.$tamrang_my_05_disp.$geamun_my_05_disp.$cheansang_my_05_disp.$cheanryang_my_05_disp.$chilsal_my_05_disp.$pagun_my_05_disp.$yeamjung_my_05_disp.$chendong_my_05_disp.$mugok_my_05_disp.$taeyang_my_05_disp.$chengi_my_05_disp.$cheanbu_my_05_disp.$jami_my_05_disp?>
	   </td>
         </tr>
         <tr>
	   <td align=center>
	   <?=$baksa_05_disp.$jangsung_05_disp.$taese_05_disp?>
	   </td>
	   <td align=center>
	   	<?=$daehan_05?>
	   <br>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=명&choice2=午&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$myung_05_disp?></a>
	   <?=$sin_05_disp?>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=궁&choice2=午&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$gung_05_disp?></a>
	   </td>
	   <td align=center>
	   <?=$age_05_disp?><br><?=$unsung_05_disp?>
	   </td>
	   <td align=center>
	   	<?=$gabja_05_disp?>
	   </td>
         </tr>
	 <tr>
	  <td align=center colspan=4>
           	<?=$dae05_disp.$you05_disp.$dugun_05_disp?>
	  </td>
         </tr>
	</table> 
    </td>

<!----------------------------------------------------------미궁 ----->

    <td width=<?=$width?> height=<?=$height?>  bgcolor=<?=$bgcolor_06?>>
       <table border=0 width=100% height=100% background=img/mi_21C_back.gif>
           <tr>
	   <td align=right colspan=4><?=$ary06?>
	   </td>
         </tr>
         <tr>
	   <td align=right colspan=4><?=$jigong_my_06_disp.$jigup_my_06_disp.$yeungsung_my_06_disp.$whasung_my_06_disp.$gyungryang_my_06_disp.$tara_my_06_disp.$cheanma_my_06_disp.$nokjon_my_06_disp.$mungok_my_06_disp.$munchang_my_06_disp.$upil_my_06_disp.$jabo_my_06_disp.$cheangue_my_06_disp.$cheanwol_my_06_disp.$taeum_my_06_disp.$tamrang_my_06_disp.$geamun_my_06_disp.$cheansang_my_06_disp.$cheanryang_my_06_disp.$chilsal_my_06_disp.$pagun_my_06_disp.$yeamjung_my_06_disp.$chendong_my_06_disp.$mugok_my_06_disp.$taeyang_my_06_disp.$chengi_my_06_disp.$cheanbu_my_06_disp.$jami_my_06_disp?></td>
         </tr>
         <tr>
	   <td align=center>
	   <?=$baksa_06_disp.$jangsung_06_disp.$taese_06_disp?>
	   </td>
	   <td align=center>
	   	<?=$daehan_06?>
	   <br>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=명&choice2=未&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$myung_06_disp?></a>
	   <?=$sin_06_disp?>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=궁&choice2=未&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$gung_06_disp?></a>
	   </td>
	   <td align=center>
	   <?=$age_06_disp?><br><?=$unsung_06_disp?>
	   </td>
	   <td align=center>
	   	<?=$gabja_06_disp?>
	   </td>
         </tr>
	 <tr>
	  <td align=center colspan=4>
           	<?=$dae06_disp.$you06_disp.$dugun_06_disp?>
	  </td>
         </tr>
	</table> 
    
    </td>

<!----------------------------------------------------------신궁 ----->

    <td width=<?=$width?> height=<?=$height?> bgcolor=<?=$bgcolor_07?>>
       <table border=0 width=100% height=100% background=img/sin_21C_back.gif >
             <tr>
	   <td align=right colspan=4><?=$ary07?>
	   </td>
         </tr>
         <tr>
	   <td align=right colspan=4><?=$jigong_my_07_disp.$jigup_my_07_disp.$yeungsung_my_07_disp.$whasung_my_07_disp.$gyungryang_my_07_disp.$tara_my_07_disp.$cheanma_my_07_disp.$nokjon_my_07_disp.$mungok_my_07_disp.$munchang_my_07_disp.$upil_my_07_disp.$jabo_my_07_disp.$cheangue_my_07_disp.$cheanwol_my_07_disp.$taeum_my_07_disp.$tamrang_my_07_disp.$geamun_my_07_disp.$cheansang_my_07_disp.$cheanryang_my_07_disp.$chilsal_my_07_disp.$pagun_my_07_disp.$yeamjung_my_07_disp.$chendong_my_07_disp.$mugok_my_07_disp.$taeyang_my_07_disp.$chengi_my_07_disp.$cheanbu_my_07_disp.$jami_my_07_disp?></td>
         </tr>
         <tr>
	   <td align=center>
	   <?=$baksa_07_disp.$jangsung_07_disp.$taese_07_disp?>
	   </td>
	   <td align=center>
	   	<?=$daehan_07?>
	   <br>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=명&choice2=申&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$myung_07_disp?></a>
	   <?=$sin_07_disp?>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=궁&choice2=申&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$gung_07_disp?></a>
	   </td>
	   <td align=center>
	   <?=$age_07_disp?><br><?=$unsung_07_disp?>
	   </td>
	   <td align=center>
	   	<?=$gabja_07_disp?>
	   </td>
         </tr>
	 <tr>
	  <td align=center colspan=4>
           	<?=$dae07_disp.$you07_disp.$dugun_07_disp?>
	  </td>
         </tr>
	</table> 
    
    </td>
  </tr>
  <tr> 

<!----------------------------------------------------------진궁 ----->    
    <td width=<?=$width?> height=<?=$height?> bgcolor=<?=$bgcolor_03?>>
       <table border=0 width=100% height=100% background=img/jin_21C_back.gif>
              <tr>
	   <td align=right colspan=4><?=$ary03?>
	   </td>
         </tr>
         <tr>
	   <td align=right colspan=4><?=$jigong_my_03_disp.$jigup_my_03_disp.$yeungsung_my_03_disp.$whasung_my_03_disp.$gyungryang_my_03_disp.$tara_my_03_disp.$cheanma_my_03_disp.$nokjon_my_03_disp.$mungok_my_03_disp.$munchang_my_03_disp.$upil_my_03_disp.$jabo_my_03_disp.$cheangue_my_03_disp.$cheanwol_my_03_disp.$taeum_my_03_disp.$tamrang_my_03_disp.$geamun_my_03_disp.$cheansang_my_03_disp.$cheanryang_my_03_disp.$chilsal_my_03_disp.$pagun_my_03_disp.$yeamjung_my_03_disp.$chendong_my_03_disp.$mugok_my_03_disp.$taeyang_my_03_disp.$chengi_my_03_disp.$cheanbu_my_03_disp.$jami_my_03_disp?></td>
         </tr>
         <tr>
	   <td align=center>
	   <?=$baksa_03_disp.$jangsung_03_disp.$taese_03_disp?>
	   </td>
	   <td align=center>
	   	<?=$daehan_03?>
	   <br>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=명&choice2=辰&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$myung_03_disp?></a>
	   <?=$sin_03_disp?>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=궁&choice2=辰&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$gung_03_disp?></a>
	   </td>
	   <td align=center>
	   <?=$age_03_disp?><br><?=$unsung_03_disp?>
	   </td>
	   <td align=center>
	   	<?=$gabja_03_disp?>
	   </td>
         </tr>
	 <tr>
	  <td align=center colspan=4>
           	<?=$dae03_disp.$you03_disp.$dugun_03_disp?>
	  </td>
         </tr>
	</table> 
    </td>

<!----------------------------------------------------------안쪽박스 ----->
    
    <td colspan=2 rowspan=2 align=center valign=middle  background=/images/result_img/jum_img/jami_img/<?=$img_back?> >
          <br><b><font color="white">음력 <?=$lunar_year?>(<?=$my_year_h?><?=$my_year_e?>)<?=$y?> <?=$lunar_month?><?=$m?> <?=$lunar_day?><?=$d?> <?=$my_hour_e?><?=$h?> <?=$sex?><?=$s?> <br>年齡 : <?=$current_age?><br>命局 : <?=$myung_guk?><br>命主 : <?=$myung_ju?><br>身主 : <?=$sin_ju?><br>現在大運 : <?=$current_daehan?> 大運</b>
    </td>

<!----------------------------------------------------------유궁 ----->

    <td width=<?=$width?> height=<?=$height?> bgcolor=<?=$bgcolor_08?>>
       <table border=0 width=100% height=100% background=img/u_21C_back.gif >
                <tr>
	   <td align=right colspan=4><?=$ary08?>
	   </td>
         </tr>
         <tr>
	   <td align=right colspan=4><?=$jigong_my_08_disp.$jigup_my_08_disp.$yeungsung_my_08_disp.$whasung_my_08_disp.$gyungryang_my_08_disp.$tara_my_08_disp.$cheanma_my_08_disp.$nokjon_my_08_disp.$mungok_my_08_disp.$munchang_my_08_disp.$upil_my_08_disp.$jabo_my_08_disp.$cheangue_my_08_disp.$cheanwol_my_08_disp.$taeum_my_08_disp.$tamrang_my_08_disp.$geamun_my_08_disp.$cheansang_my_08_disp.$cheanryang_my_08_disp.$chilsal_my_08_disp.$pagun_my_08_disp.$yeamjung_my_08_disp.$chendong_my_08_disp.$mugok_my_08_disp.$taeyang_my_08_disp.$chengi_my_08_disp.$cheanbu_my_08_disp.$jami_my_08_disp?></td>
         </tr>

         <tr>
	   <td align=center>
	   <?=$baksa_08_disp.$jangsung_08_disp.$taese_08_disp?>
	   </td>
	   <td align=center>
	   	<?=$daehan_08?>
	   <br>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=명&choice2=酉&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$myung_08_disp?></a>
	   <?=$sin_08_disp?>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=궁&choice2=酉&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$gung_08_disp?></a>
	   </td>
	   <td align=center>
	   <?=$age_08_disp?><br><?=$unsung_08_disp?>
	   </td>
	   <td align=center>
	   	<?=$gabja_08_disp?>
	   </td>
         </tr>
	 <tr>
	  <td align=center colspan=4>
           	<?=$dae08_disp.$you08_disp.$dugun_08_disp?>
	  </td>
         </tr>
	</table> 
    
    </td>
  </tr>
  <tr> 

<!----------------------------------------------------------묘궁 ----->

    <td width=<?=$width?> height=<?=$height?> bgcolor=<?=$bgcolor_02?>>
       <table border=0 width=100% height=100% background=img/myo_21C_back.gif>
              <tr>
	   <td align=right colspan=4><?=$ary02?>
	   </td>
         </tr>
         <tr>
	   <td align=right colspan=4><?=$jigong_my_02_disp.$jigup_my_02_disp.$yeungsung_my_02_disp.$whasung_my_02_disp.$gyungryang_my_02_disp.$tara_my_02_disp.$cheanma_my_02_disp.$nokjon_my_02_disp.$mungok_my_02_disp.$munchang_my_02_disp.$upil_my_02_disp.$jabo_my_02_disp.$cheangue_my_02_disp.$cheanwol_my_02_disp.$taeum_my_02_disp.$tamrang_my_02_disp.$geamun_my_02_disp.$cheansang_my_02_disp.$cheanryang_my_02_disp.$chilsal_my_02_disp.$pagun_my_02_disp.$yeamjung_my_02_disp.$chendong_my_02_disp.$mugok_my_02_disp.$taeyang_my_02_disp.$chengi_my_02_disp.$cheanbu_my_02_disp.$jami_my_02_disp?></td>
         </tr>


         <tr>
	   <td align=center>
	   <?=$baksa_02_disp.$jangsung_02_disp.$taese_02_disp?>
	   </td>
	   <td align=center>
	   	<?=$daehan_02?>
	   <br>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=명&choice2=卯&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$myung_02_disp?></a>
	   <?=$sin_02_disp?>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=궁&choice2=卯&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$gung_02_disp?></a>
	   </td>
	   <td align=center>
	   <?=$age_02_disp?><br><?=$unsung_02_disp?>
	   </td>
	   <td align=center>
	   	<?=$gabja_02_disp?>
	   </td>
         </tr>
	 <tr>
	  <td align=center colspan=4>
           	<?=$dae02_disp.$you02_disp.$dugun_02_disp?>
	  </td>
         </tr>
	</table> 
    
    </td>

<!----------------------------------------------------------술궁 ----->

    <td width=<?=$width?> height=<?=$height?> bgcolor=<?=$bgcolor_09?>>
       <table border=0 width=100% height=100% background=img/sul_21C_back.gif >
           <tr>
	   <td align=right colspan=4><?=$ary09?>
	   </td>
         </tr>
         <tr>
	   <td align=right colspan=4><?=$jigong_my_09_disp.$jigup_my_09_disp.$yeungsung_my_09_disp.$whasung_my_09_disp.$gyungryang_my_09_disp.$tara_my_09_disp.$cheanma_my_09_disp.$nokjon_my_09_disp.$mungok_my_09_disp.$munchang_my_09_disp.$upil_my_09_disp.$jabo_my_09_disp.$cheangue_my_09_disp.$cheanwol_my_09_disp.$taeum_my_09_disp.$tamrang_my_09_disp.$geamun_my_09_disp.$cheansang_my_09_disp.$cheanryang_my_09_disp.$chilsal_my_09_disp.$pagun_my_09_disp.$yeamjung_my_09_disp.$chendong_my_09_disp.$mugok_my_09_disp.$taeyang_my_09_disp.$chengi_my_09_disp.$cheanbu_my_09_disp.$jami_my_09_disp?></td>
         </tr>
         <tr>
	   <td align=center>
	   <?=$baksa_09_disp.$jangsung_09_disp.$taese_09_disp?>
	   </td>
	   <td align=center>
	   	<?=$daehan_09?>
	   <br>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=명&choice2=戌&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$myung_09_disp?></a>
	   <?=$sin_09_disp?>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=궁&choice2=戌&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$gung_09_disp?></a>
	   </td>
	   <td align=center>
	   <?=$age_09_disp?><br><?=$unsung_09_disp?>
	   </td>
	   <td align=center>
	   	<?=$gabja_09_disp?>
	   </td>
         </tr>
	 <tr>
	  <td align=center colspan=4>
           	<?=$dae09_disp.$you09_disp.$dugun_09_disp?>
	  </td>
         </tr>
	</table> 
    </td>
  </tr>
  <tr> 

<!----------------------------------------------------------인궁 ----->

    <td width=<?=$width?> height=<?=$height?> bgcolor=<?=$bgcolor_01?>>
       <table border=0 width=100% height=100% background=img/in_21C_back.gif >
           <tr>
	   <td align=right colspan=4><?=$ary01?>
	   </td>
         </tr>
         <tr>
	   <td align=right colspan=4><?=$jigong_my_01_disp.$jigup_my_01_disp.$yeungsung_my_01_disp.$whasung_my_01_disp.$gyungryang_my_01_disp.$tara_my_01_disp.$cheanma_my_01_disp.$nokjon_my_01_disp.$mungok_my_01_disp.$munchang_my_01_disp.$upil_my_01_disp.$jabo_my_01_disp.$cheangue_my_01_disp.$cheanwol_my_01_disp.$taeum_my_01_disp.$tamrang_my_01_disp.$geamun_my_01_disp.$cheansang_my_01_disp.$cheanryang_my_01_disp.$chilsal_my_01_disp.$pagun_my_01_disp.$yeamjung_my_01_disp.$chendong_my_01_disp.$mugok_my_01_disp.$taeyang_my_01_disp.$chengi_my_01_disp.$cheanbu_my_01_disp.$jami_my_01_disp?></td>
         </tr>
         <tr>
	   <td align=center>
	   <?=$baksa_01_disp.$jangsung_01_disp.$taese_01_disp?>
	   </td>
	   <td align=center>
	   	<?=$daehan_01?>
	   <br>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=명&choice2=寅&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$myung_01_disp?></a>
	   <?=$sin_01_disp?>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=궁&choice2=寅&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$gung_01_disp?></a>
	   </td>
	   <td align=center>
	   <?=$age_01_disp?><br><?=$unsung_01_disp?>
	   </td>
	   <td align=center>
	   	<?=$gabja_01_disp?>
	   </td>
         </tr>
	 <tr>
	  <td align=center colspan=4>
           	<?=$dae01_disp.$you01_disp.$dugun_01_disp?>
	  </td>
         </tr>
	</table> 
    </td>

<!----------------------------------------------------------축궁 ----->

    <td width=<?=$width?> height=<?=$height?> bgcolor=<?=$bgcolor_12?>>
       <table border=0 width=100% height=100% background=img/chuk_21C_back.gif >
           <tr>
	   <td align=right colspan=4><?=$ary12?>
	   </td>
         </tr>
         <tr>
	   <td align=right colspan=4><?=$jigong_my_12_disp.$jigup_my_12_disp.$yeungsung_my_12_disp.$whasung_my_12_disp.$gyungryang_my_12_disp.$tara_my_12_disp.$cheanma_my_12_disp.$nokjon_my_12_disp.$mungok_my_12_disp.$munchang_my_12_disp.$upil_my_12_disp.$jabo_my_12_disp.$cheangue_my_12_disp.$cheanwol_my_12_disp.$taeum_my_12_disp.$tamrang_my_12_disp.$geamun_my_12_disp.$cheansang_my_12_disp.$cheanryang_my_12_disp.$chilsal_my_12_disp.$pagun_my_12_disp.$yeamjung_my_12_disp.$chendong_my_12_disp.$mugok_my_12_disp.$taeyang_my_12_disp.$chengi_my_12_disp.$cheanbu_my_12_disp.$jami_my_12_disp?></td>
         </tr>
         <tr>
	   <td align=center>
	   <?=$baksa_12_disp.$jangsung_12_disp.$taese_12_disp?>
	   </td>
	   <td align=center>
	   	<?=$daehan_12?>
	   <br>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=명&choice2=丑&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$myung_12_disp?></a>
	   <?=$sin_12_disp?>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=궁&choice2=丑&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$gung_12_disp?></a>
	   </td>
	   <td align=center>
	   <?=$age_12_disp?><br><?=$unsung_12_disp?>
	   </td>
	   <td align=center>
	   	<?=$gabja_12_disp?>
	   </td>
         </tr>
	 <tr>
	  <td align=center colspan=4>
           	<?=$dae12_disp.you12_disp.$dugun_12_disp?>
	  </td>
         </tr>
	</table> 
    </td>

<!----------------------------------------------------------자궁 ----->

    <td width=<?=$width?> height=<?=$height?> bgcolor=<?=$bgcolor_11?>>
       <table border=0 width=100% height=100% background=img/ja_21C_back.gif >
             <tr>
	   <td align=right colspan=4><?=$ary11?>
	   </td>
         </tr>
         <tr>
	   <td align=right colspan=4><?=$jigong_my_11_disp.$jigup_my_11_disp.$yeungsung_my_11_disp.$whasung_my_11_disp.$gyungryang_my_11_disp.$tara_my_11_disp.$cheanma_my_11_disp.$nokjon_my_11_disp.$mungok_my_11_disp.$munchang_my_11_disp.$upil_my_11_disp.$jabo_my_11_disp.$cheangue_my_11_disp.$cheanwol_my_11_disp.$taeum_my_11_disp.$tamrang_my_11_disp.$geamun_my_11_disp.$cheansang_my_11_disp.$cheanryang_my_11_disp.$chilsal_my_11_disp.$pagun_my_11_disp.$yeamjung_my_11_disp.$chendong_my_11_disp.$mugok_my_11_disp.$taeyang_my_11_disp.$chengi_my_11_disp.$cheanbu_my_11_disp.$jami_my_11_disp?></td>
         </tr>
         <tr>
	   <td align=center>
	   <?=$baksa_11_disp.$jangsung_11_disp.$taese_11_disp?>
	   </td>
	   <td align=center>
	   	<?=$daehan_11?>
	   <br>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=명&choice2=子&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$myung_11_disp?></a>
	   <?=$sin_11_disp?>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=궁&choice2=子&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$gung_11_disp?></a>
	   </td>
	   <td align=center>
	   <?=$age_11_disp?><br><?=$unsung_11_disp?>
	   </td>
	   <td align=center>
	   	<?=$gabja_11_disp?>
	   </td>
         </tr>
	 <tr>
	  <td align=center colspan=4>
           	<?=$dae11_disp.$you11_disp.$dugun_11_disp?>
	  </td>
         </tr>
	</table> 
    </td>

<!----------------------------------------------------------해궁 ----->

    <td width=<?=$width?> height=<?=$height?> bgcolor=<?=$bgcolor_10?>>
       <table border=0 width=100% height=100% background=img/hae_21C_back.gif >
          <tr>
	   <td align=right colspan=4><?=$ary10?>
	   </td>
         </tr>
         <tr>
	   <td align=right colspan=4><?=$jigong_my_10_disp.$jigup_my_10_disp.$yeungsung_my_10_disp.$whasung_my_10_disp.$gyungryang_my_10_disp.$tara_my_10_disp.$cheanma_my_10_disp.$nokjon_my_10_disp.$mungok_my_10_disp.$munchang_my_10_disp.$upil_my_10_disp.$jabo_my_10_disp.$cheangue_my_10_disp.$cheanwol_my_10_disp.$taeum_my_10_disp.$tamrang_my_10_disp.$geamun_my_10_disp.$cheansang_my_10_disp.$cheanryang_my_10_disp.$chilsal_my_10_disp.$pagun_my_10_disp.$yeamjung_my_10_disp.$chendong_my_10_disp.$mugok_my_10_disp.$taeyang_my_10_disp.$chengi_my_10_disp.$cheanbu_my_10_disp.$jami_my_10_disp?></td>
         </tr>
         <tr>
	   <td align=center>
	   <?=$baksa_10_disp.$jangsung_10_disp.$taese_10_disp?>
	   </td>
	   <td align=center>
	   	<?=$daehan_10?>
	   <br>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=명&choice2=亥&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$myung_10_disp?></a>
	   <?=$sin_10_disp?>
	   <a href="/UNSE_DATA/unse/jum/jum_1.php?url=<?=$url?>&sel=<?=$sel?>&cate=<?=$cate?>&choice1=궁&choice2=亥&solunar=<?=$solunar?>&youn=<?=$youn?>&year=<?=$request_year?>&month=<?=$request_month?>&day=<?=$request_day?>&hour=<?=$request_hour?>&min=<?=$request_min?>&sex=<?=$sex?>&my_year_h=<?=$my_year_h?>&my_year_e=<?=$my_year_e?>&lunar_month=<?=$lunar_month?>&lunar_day=<?=$lunar_day?>"><?=$gung_10_disp?></a>
	   </td>
	   <td align=center>
	   <?=$age_10_disp?><br><?=$unsung_10_disp?>
	   </td>
	   <td align=center>
	   	<?=$gabja_10_disp?>
	   </td>
         </tr>
	 <tr>
	  <td align=center colspan=4>
           	<?=$dae10_disp.$you10_disp.$dugun_10_disp?>
	  </td>
         </tr>
	</table> 
    </td>
 
  </tr>
</table>