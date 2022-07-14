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
	
	
        var count_face_style2 = 0;
        
	for(i=0; i < 5; i++)
        {
                if(signform.face_style2[i].checked == true)
                {
                        count_face_style2 += 1;
                }
        }

        if (count_face_style2 == 0 ) 
        {
                alert('이마의 모양을 선택하세요!');
		return;
         }

        var count_face_style3 = 0;
        
	for(i=0; i < 3; i++)
        {
                if(signform.face_style3[i].checked == true)
                {
                        count_face_style3 += 1;
                }
        }

        if (count_face_style3 == 0 ) 
        {
                alert('이마의 폭을 선택하세요!');
		return;
         }

        var count_face_style4 = 0;
        
	for(i=0; i < 6; i++)
        {
                if(signform.face_style4[i].checked == true)
                {
                        count_face_style4 += 1;
                }
        }

        if (count_face_style4 == 0 ) 
        {
                alert('이마의 주름살을 선택하세요!');
		return;
         }
		     
      signform.submit();
      }
//-->
</SCRIPT>
		<form name=signform method=post action="faceface_3.php" style="display : inline;">

		<input type="hidden" name="cate" value="<?=$cate?>">
		<input type="hidden" name="sel" value="<?=$sel?>">
		<input type=hidden name=sex value=<?=$sex?>>
		<input type=hidden name=face_style1 value=<?=$face_style1?>>


		<input type="hidden" name="url" value="<?=$url?>">
		<input type="hidden" name="urltemp" value="<?=$urltemp?>">
<table width="490" align="Center" border=0 cellspacing=0 cellpadding=0>
  <tr>
   <td align=center>

     
      
<?If($sex == "남"){?>  

       
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>이마의 모양을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_ima1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_ima2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_ima3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style2' value='이마M자형'>이마 M자형</td>
         <td align=center><input type='radio'  name='face_style2' value='이마둥근형'>이마 둥근형</td>
         <td align=center><input type='radio'  name='face_style2' value='이마네모형'>이마 네모형</td>
      </tr>

       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_ima4_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_ima5_m.gif></td>
         <td align=center><img src=/UNSE_DATA/images/T063_img/hidden.gif width=150 height=160></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style2' value='이마발애형'>이마 발애형</td>
         <td align=center><input type='radio'  name='face_style2' value='이마참자형'>이마 참자형</td>
         <td align=center>&nbsp;</td>
      </tr>
     </table> 
<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>이마의 폭을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_imaW1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_imaW2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_imaW3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style3' value='이마폭적당'>이마 폭 적당</td>
         <td align=center><input type='radio'  name='face_style3' value='이마폭넓음'>이마 폭 넓음</td>
         <td align=center><input type='radio'  name='face_style3' value='이마폭좁음'>이마 폭 좁음</td>
      </tr>
     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>이마의 주름살을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_imaJ1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_imaJ2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_imaJ3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style4' value='이마주름살한개'>이마 주름살 한개</td>
         <td align=center><input type='radio'  name='face_style4' value='이마주름살복잡'>이마 주름살 복잡</td>
         <td align=center><input type='radio'  name='face_style4' value='이마주름살세개'>이마 주름살 세개</td>
      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_imaJ4_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_imaJ5_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_imaJ6_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style4' value='이마주름살기러기'>이마 주름살 기러기형</td>
         <td align=center><input type='radio'  name='face_style4' value='이마주름살활형'>이마 주름살 활형</td>
         <td align=center><input type='radio'  name='face_style4' value='이마주름살현침'>이마 주름살 현침문형</td>
      </tr>

     </table> 

<?}else{?>

      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>이마의 모양을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_ima1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_ima2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_ima3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style2' value='이마M자형'>이마 M자형</td>
         <td align=center><input type='radio'  name='face_style2' value='이마둥근형'>이마 둥근형</td>
         <td align=center><input type='radio'  name='face_style2' value='이마네모형'>이마 네모형</td>
      </tr>

       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_ima4_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_ima5_w.gif></td>
         <td align=center><img src=/UNSE_DATA/images/T063_img/hidden.gif width=180 height=200></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style2' value='이마발애형'>이마 발애형</td>
         <td align=center><input type='radio'  name='face_style2' value='이마참자형'>이마 참자형</td>
         <td align=center>&nbsp;</td>
      </tr>
     </table>     
<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>이마의 폭을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_imaW1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_imaW2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_imaW3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style3' value='이마폭적당'>이마 폭 적당</td>
         <td align=center><input type='radio'  name='face_style3' value='이마폭넓음'>이마 폭 넓음</td>
         <td align=center><input type='radio'  name='face_style3' value='이마폭좁음'>이마 폭 좁음</td>
      </tr>
     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>이마의 주름살을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_imaJ1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_imaJ2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_imaJ3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style4' value='이마주름살한개'>이마 주름살 한개</td>
         <td align=center><input type='radio'  name='face_style4' value='이마주름살복잡'>이마 주름살 복잡</td>
         <td align=center><input type='radio'  name='face_style4' value='이마주름살세개'>이마 주름살 세개</td>
      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_imaJ4_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_imaJ5_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_imaJ6_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style4' value='이마주름살기러기'>이마 주름살 기러기형</td>
         <td align=center><input type='radio'  name='face_style4' value='이마주름살활형'>이마 주름살 활형</td>
         <td align=center><input type='radio'  name='face_style4' value='이마주름살현침'>이마 주름살 현침문형</td>
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