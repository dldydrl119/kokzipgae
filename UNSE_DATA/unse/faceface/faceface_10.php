<?include "../../db_connect/db_connect.php";?>
<?include "../../common/function.php";?>
<?include "../../common/requestBuffer_faceface.php";?>
<?
$UNSE_TITLE = "관상보기";
$title_var = "<a href='#1'><font color='#FFFFFF'><b>관상보기</b></font></a>";
$o_manse_data = "N";
$manse_data = "N";
$ohang_data = "N";
$yukhyo_data = "N";
$print_check = "N";
$puritime_data = "N";
$puritime_data1 = "N";
$puritime_data2 = "N";
$puritime_data3 = "Y";
$puritime_data4 = "N";

?>
<?include "../../common/include_top_c2.php";?>
<!-- 운세결과물 출력 시작 -->
<script language='javascript'>
<!--
      function checkInput(signform) {
	
	
        var count_face_style31 = 0;
        
	for(i=0; i < 3; i++)
        {
                if(signform.face_style31[i].checked == true)
                {
                        count_face_style31 += 1;
                }
        }

        if (count_face_style31 == 0 ) 
        {
                alert('입술의 크기를 선택하세요!');
		return;
         }

        var count_face_style32 = 0;
        
	for(i=0; i < 3; i++)
        {
                if(signform.face_style32[i].checked == true)
                {
                        count_face_style32 += 1;
                }
        }

        if (count_face_style32 == 0 ) 
        {
                alert('윗입술의 두께를 선택하세요!');
		return;
         }

        var count_face_style33 = 0;
        
	for(i=0; i < 5; i++)
        {
                if(signform.face_style33[i].checked == true)
                {
                        count_face_style33 += 1;
                }
        }

        if (count_face_style33 == 0 ) 
        {
                alert('입술의 형태를 선택하세요!');
		return;
         }

        var count_face_style34 = 0;
        
	for(i=0; i < 3; i++)
        {
                if(signform.face_style34[i].checked == true)
                {
                        count_face_style34 += 1;
                }
        }

        if (count_face_style34 == 0 ) 
        {
                alert('입술 끝의 모양을 선택하세요!');
		return;
         }


      var count_face_style36 = 0;
        
	for(i=0; i < 3; i++)
        {
                if(signform.face_style36[i].checked == true)
                {
                        count_face_style36 += 1;
                }
        }

        if (count_face_style36 == 0 ) 
        {
                alert('아랫입술의 주름을 선택하세요!');
		return;
         }  

		     
      signform.submit();
      }
//-->
</SCRIPT>
		<form name=signform method=post action="faceface_11.php" style="display : inline;">

		<input type="hidden" name="cate" value="<?=$cate?>">
		<input type="hidden" name="sel" value="<?=$sel?>">
		<input type=hidden name=sex value=<?=$sex?>>
		<input type=hidden name=face_style1 value=<?=$face_style1?>>
		<input type=hidden name=face_style2 value=<?=$face_style2?>>
		<input type=hidden name=face_style3 value=<?=$face_style3?>>
		<input type=hidden name=face_style4 value=<?=$face_style4?>>
		<input type=hidden name=face_style5 value=<?=$face_style5?>>
		<input type=hidden name=face_style6 value=<?=$face_style6?>>
		<input type=hidden name=face_style7 value=<?=$face_style7?>>
		<input type=hidden name=face_style7_1 value=<?=$face_style7_1?>>
		<input type=hidden name=face_style7_2 value=<?=$face_style7_2?>>
		<input type=hidden name=face_style8 value=<?=$face_style8?>>
		<input type=hidden name=face_style9 value=<?=$face_style9?>>
		<input type=hidden name=face_style10 value=<?=$face_style10?>>
		<input type=hidden name=face_style11 value=<?=$face_style11?>>
		<input type=hidden name=face_style12 value=<?=$face_style12?>>
		<input type=hidden name=face_style13 value=<?=$face_style13?>>
		<input type=hidden name=face_style14 value=<?=$face_style14?>>
		<input type=hidden name=face_style15 value=<?=$face_style15?>>
		<input type=hidden name=face_style16 value=<?=$face_style16?>>
		<input type=hidden name=face_style17 value=<?=$face_style17?>>
		<input type=hidden name=face_style18 value=<?=$face_style18?>>
		<input type=hidden name=face_style19 value=<?=$face_style19?>>
		<input type=hidden name=face_style20 value=<?=$face_style20?>>
		<input type=hidden name=face_style21 value=<?=$face_style21?>>
		<input type=hidden name=face_style22 value=<?=$face_style22?>>
		<input type=hidden name=face_style23 value=<?=$face_style23?>>
		<input type=hidden name=face_style24 value=<?=$face_style24?>>
		<input type=hidden name=face_style25 value=<?=$face_style25?>>
		<input type=hidden name=face_style26 value=<?=$face_style26?>>
		<input type=hidden name=face_style27 value=<?=$face_style27?>>
		<input type=hidden name=face_style28 value=<?=$face_style28?>>
		<input type=hidden name=face_style29 value=<?=$face_style29?>>
		<input type=hidden name=face_style30 value=<?=$face_style30?>>

		<input type="hidden" name="url" value="<?=$url?>">
		<input type="hidden" name="urltemp" value="<?=$urltemp?>">


<table width = "490" align="Center" border=0 cellspacing=0 cellpadding=0>
  <tr>
   <td align=center>

     
      
<?If($sex == "남"){?>  

       
      <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>입술의 크기를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM3_m.gif></td>
      </tr>
     <tr bgcolor=f8f8f8>
         <td align=center><input type='radio'  name='face_style31' value='입술크기적당'>입술의 크기가 적당하다</td>
	 <td align=center><input type='radio'  name='face_style31' value='입술크기크다'>입술의 크기가 크다</td>
	 <td align=center><input type='radio'  name='face_style31' value='입술크기적다'>입술의 크기가 적다</td>

      </tr>
     </table>      
       
   <br>

      <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>윗입술의 두께를 선택하세요.</td>
       </tr>          
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM4_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM5_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM6_m.gif></td>
      </tr>
     <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style32' value='윗입술두께적당'>윗입술의 두께가 적당</td>
         <td align=center><input type='radio'  name='face_style32' value='윗입술두께두껍다'>윗입술이 두께가 두껍다</td>
         <td align=center><input type='radio'  name='face_style32' value='윗입술두께엷다'>윗입술이 두께가 엷다</td>
      </tr>
     </table> 

   <br>

      <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>입술의 형태를 선택하세요.</td>
       </tr>          
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM7_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM8_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM9_m.gif></td>
      </tr>
     <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style33' value='입의튀어나옴이적당'>입의 튀어나옴이 적당하다</td>
         <td align=center><input type='radio'  name='face_style33' value='윗입술이앞으로돌출'>윗입술이 앞으로 돌출</td>
         <td align=center><input type='radio'  name='face_style33' value='아랫입술이앞으로돌출'>아랫입술이 앞으로 돌출</td>
      </tr>
        
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM14_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM13_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
      </tr>
     <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style33' value='입이앞으로튀어나옴'>입이 앞으로 튀어나왔다</td>
         <td align=center><input type='radio'  name='face_style33' value='입이안으로들어갔다'>입이 안으로 들어갔다</td>
	 <td align=center>&nbsp;</td>
      </tr>
     </table> 
     
   <br>

      <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>입술 끝의 모양을 선택하세요.</td>
       </tr>          
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM10_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM11_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM12_m.gif></td>
      </tr>
     <tr bgcolor=f8f8f8>
         <td align=center><input type='radio'  name='face_style34' value='입술끝이적당'>입술 끝이 적당하다</td>
	 <td align=center><input type='radio'  name='face_style34' value='입술끝이내려감'>입술 끝이 내려갔다</td>
         <td align=center><input type='radio'  name='face_style34' value='입술끝이올라감'>입술 끝이 올라갔다</td>
         
      </tr>
     </table> 



   <br>

      <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>아랫입술의 주름을 선택하세요.</td>
       </tr>          
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM16_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM17_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM18_m.gif></td>
      </tr>
     <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style36' value='아랫입술의주름적당'>아랫입술의 주름 적당</td>
	 <td align=center><input type='radio'  name='face_style36' value='아랫입술의주름많음'>아랫입술의 주름 많음</td>
         <td align=center><input type='radio'  name='face_style36' value='아랫입술의주름없음'>아랫입술의 주름 없음</td>
      </tr>
     </table> 
<?}else{?>


      <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>입술의 크기를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM3_w.gif></td>
      </tr>
     <tr bgcolor=f8f8f8>
         <td align=center><input type='radio'  name='face_style31' value='입술크기적당'>입술의 크기가 적당하다</td>
	 <td align=center><input type='radio'  name='face_style31' value='입술크기크다'>입술의 크기가 크다</td>
	 <td align=center><input type='radio'  name='face_style31' value='입술크기적다'>입술의 크기가 적다</td>

      </tr>
     </table>      
       
   <br>

      <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>윗입술의 두께를 선택하세요.</td>
       </tr>          
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM4_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM5_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM6_w.gif></td>
      </tr>
     <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style32' value='윗입술두께적당'>윗입술의 두께가 적당</td>
         <td align=center><input type='radio'  name='face_style32' value='윗입술두께두껍다'>윗입술이 두께가 두껍다</td>
         <td align=center><input type='radio'  name='face_style32' value='윗입술두께엷다'>윗입술이 두께가 엷다</td>
      </tr>
     </table> 

   <br>

      <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>입술의 형태를 선택하세요.</td>
       </tr>          
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM7_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM8_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM9_w.gif></td>
      </tr>
     <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style33' value='입의튀어나옴이적당'>입의 튀어나옴이 적당하다</td>
         <td align=center><input type='radio'  name='face_style33' value='윗입술이앞으로돌출'>윗입술이 앞으로 돌출</td>
         <td align=center><input type='radio'  name='face_style33' value='아랫입술이앞으로돌출'>아랫입술이 앞으로 돌출</td>
      </tr>
 
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM14_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM13_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
      </tr>
     <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style33' value='입이앞으로튀어나옴'>입이 앞으로 튀어나왔다</td>
         <td align=center><input type='radio'  name='face_style33' value='입이안으로들어갔다'>입이 안으로 들어갔다</td>
         <td align=center>&nbsp;</td>
      </tr>
     </table> 
   
   
   
   <br>

      <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>입술 끝의 모양을 선택하세요.</td>
       </tr>          
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM10_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM11_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM12_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center><input type='radio'  name='face_style34' value='입술끝이적당'>입술 끝이 적당하다</td>
	 <td align=center><input type='radio'  name='face_style34' value='입술끝이올라감'>입술 끝이 내려갔다</td>
         <td align=center><input type='radio'  name='face_style34' value='입술끝이내려감'>입술 끝이 올라갔다</td>
         
      </tr>
     </table> 

  

   <br>

      <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>아랫입술의 주름을 선택하세요.</td>
       </tr>          
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM16_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM17_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_lipM18_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style36' value='아랫입술의주름적당'>아랫입술의 주름 적당</td>
	 <td align=center><input type='radio'  name='face_style36' value='아랫입술의주름많음'>아랫입술의 주름 많음</td>
         <td align=center><input type='radio'  name='face_style36' value='아랫입술의주름없음'>아랫입술의 주름 없음</td>
      </tr>
     </table> 


<?}?>
</td></tr>
			<tR>
				<tD align="center" style="padding:4px;"><BR><a href="javascript:checkInput(signform);"><img src="/images/board_img/result_next.jpg" border="0"></a></tD>
			</tr>
	</table>

<!-- =============================================================== -->
		</form>
<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>