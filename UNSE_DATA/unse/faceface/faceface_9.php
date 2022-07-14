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
	
	
        var count_face_style26 = 0;
        
	for(i=0; i < 3; i++)
        {
                if(signform.face_style26[i].checked == true)
                {
                        count_face_style26 += 1;
                }
        }

        if (count_face_style26 == 0 ) 
        {
                alert('인중의 넓이를 선택하세요!');
		return;
         }

        var count_face_style27 = 0;
        
	for(i=0; i < 3; i++)
        {
                if(signform.face_style27[i].checked == true)
                {
                        count_face_style27 += 1;
                }
        }

        if (count_face_style27 == 0 ) 
        {
                alert('인중의 길이를 선택하세요!');
		return;
         }

        var count_face_style28 = 0;
        
	for(i=0; i < 3; i++)
        {
                if(signform.face_style28[i].checked == true)
                {
                        count_face_style28 += 1;
                }
        }

        if (count_face_style28 == 0 ) 
        {
                alert('인중의 형태를 선택하세요!');
		return;
         }

        var count_face_style29 = 0;
        
	for(i=0; i < 3; i++)
        {
                if(signform.face_style29[i].checked == true)
                {
                        count_face_style29 += 1;
                }
        }

        if (count_face_style29 == 0 ) 
        {
                alert('코와 입 사이의 넓이를 선택하세요!');
		return;
         }

        var count_face_style30 = 0;
        
	for(i=0; i < 4; i++)
        {
                if(signform.face_style30[i].checked == true)
                {
                        count_face_style30 += 1;
                }
        }

        if (count_face_style30 == 0 ) 
        {
                alert('인중의 모습을 선택하세요!');
		return;
         }

		     
      signform.submit();
      }
//-->
</SCRIPT>
		<form name=signform method=post action="faceface_10.php" style="display : inline;">

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

		<input type="hidden" name="url" value="<?=$url?>">
		<input type="hidden" name="urltemp" value="<?=$urltemp?>">
<table width = "490" align="Center" border=0 cellspacing=0 cellpadding=0>
  <tr>
   <td align=center>
    
      
<?If($sex == "남"){?>       
      <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>인중의 넓이를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center><input type='radio'  name='face_style26' value='인중넓이적당'>인중의 폭이 적당</td>
	 <td align=center><input type='radio'  name='face_style26' value='인중넓이넓다'>인중이 폭이 넓다</td>
	 <td align=center><input type='radio'  name='face_style26' value='인중넓이좁다'>인중이 폭이 좁다</td>

      </tr>
     </table>      
       
   <br>

      <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>인중의 길이를 선택하세요.</td>
       </tr>          
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM4_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM5_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM6_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style27' value='인중길이적당'>인중의 길이가 적당</td>
         <td align=center><input type='radio'  name='face_style27' value='인중길이길다'>인중이 길이가 길다</td>
         <td align=center><input type='radio'  name='face_style27' value='인중길이짧다'>인중이 길이가 짧다</td>
      </tr>
     </table> 

   <br>

      <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>인중의 형태를 선택하세요.</td>
       </tr>          
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM7_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM8_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM9_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style28' value='인중아래위가적당'>인중의 상하부가 적당하다</td>
         <td align=center><input type='radio'  name='face_style28' value='인중상부넓다'>인중이 상부가 넓다</td>
         <td align=center><input type='radio'  name='face_style28' value='인중하부넓다'>인중이 하부가 넓다</td>
      </tr>
     </table> 

   <br>

      <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>코와 입사이의 넓이를 선택하세요.</td>
       </tr>          
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM10_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM11_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM12_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center><input type='radio'  name='face_style29' value='코와입사이적당'>코와 입 사이의 넓이 적당</td>
	 <td align=center><input type='radio'  name='face_style29' value='코와입사이넓다'>코와 입 사이가 넓다</td>
         <td align=center><input type='radio'  name='face_style29' value='코와입사이좁다'>코와 입 사이가 좁다</td>
         
      </tr>
     </table> 

   <br>

      <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>인중의 모습을 선택하세요.</td>
       </tr>          
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM13_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM14_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM15_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style30' value='인중모습이보통'>인중의 모습이 보통이다</td>
	 <td align=center><input type='radio'  name='face_style30' value='인중에가로주름'>인중에 가로로 주름이 있다</td>
         <td align=center><input type='radio'  name='face_style30' value='인중에점흉터'>인중에 점이나 흠집이 있다</td>
         
      </tr>

       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM16_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style30' value='인중이희미함'>인중이 없거나 희미하다</td>
         <td align=center>&nbsp;</td>
         <td align=center>&nbsp;</td>
      </tr>
     </table> 

<?}else{?>
       <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>인중의 넓이를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center><input type='radio'  name='face_style26' value='인중넓이적당'>인중의 폭이 적당</td>
	 <td align=center><input type='radio'  name='face_style26' value='인중넓이넓다'>인중이 폭이 넓다</td>
	 <td align=center><input type='radio'  name='face_style26' value='인중넓이좁다'>인중이 폭이 좁다</td>

      </tr>
     </table>      
       
   <br>

      <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>인중의 길이를 선택하세요.</td>
       </tr>          
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM4_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM5_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM6_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style27' value='인중길이적당'>인중의 길이가 적당</td>
         <td align=center><input type='radio'  name='face_style27' value='인중길이길다'>인중이 길이가 길다</td>
         <td align=center><input type='radio'  name='face_style27' value='인중길이짧다'>인중이 길이가 짧다</td>
      </tr>
     </table> 

   <br>

      <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>인중의 형태를 선택하세요.</td>
       </tr>          
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM7_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM8_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM9_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style28' value='인중아래위가적당'>인중의 상하부가 적당하다</td>
         <td align=center><input type='radio'  name='face_style28' value='인중상부넓다'>인중이 상부가 넓다</td>
         <td align=center><input type='radio'  name='face_style28' value='인중하부넓다'>인중이 하부가 넓다</td>
      </tr>
     </table> 

   <br>

      <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>코와 입사이의 넓이를 선택하세요.</td>
       </tr>          
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM10_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM11_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM12_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center><input type='radio'  name='face_style29' value='코와입사이적당'>코와 입 사이의 넓이 적당</td>
	 <td align=center><input type='radio'  name='face_style29' value='코와입사이넓다'>코와 입 사이가 넓다</td>
         <td align=center><input type='radio'  name='face_style29' value='코와입사이좁다'>코와 입 사이가 좁다</td>
         
      </tr>
     </table> 

   <br>

      <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>인중의 모습을 선택하세요.</td>
       </tr>          
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM13_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM14_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM15_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style30' value='인중모습이보통'>인중의 모습이 보통이다</td>
	 <td align=center><input type='radio'  name='face_style30' value='인중에가로주름'>인중에 가로로 주름이 있다</td>
         <td align=center><input type='radio'  name='face_style30' value='인중에점흉터'>인중에 점이나 흠집이 있다</td>
         
      </tr>

       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_injungM16_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style30' value='인중이희미함'>인중이 없거나 희미하다</td>
         <td align=center>&nbsp;</td>
         <td align=center>&nbsp;</td>
      </tr>
     </table>   

<?}?>
</td></tr>
			<tR>
				<tD align="center" style="padding:4px;"><BR><a href="javascript:checkInput(signform);"><img src="/images/board_img/result_next.jpg" border="0"></a></tD>
			</tr></table>

	
<!-- =============================================================== -->
		</form>
<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>