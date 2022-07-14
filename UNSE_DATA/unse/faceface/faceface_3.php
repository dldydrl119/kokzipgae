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
	
	
        var count_face_style5 = 0;
        
	for(i=0; i < 6; i++)
        {
                if(signform.face_style5[i].checked == true)
                {
                        count_face_style5 += 1;
                }
        }

        if (count_face_style5 == 0 ) 
        {
                alert('눈썹의 모양을 선택하세요!');
		return;
         }

        var count_face_style6 = 0;
        
	for(i=0; i < 3; i++)
        {
                if(signform.face_style6[i].checked == true)
                {
                        count_face_style6 += 1;
                }
        }

        if (count_face_style6 == 0 ) 
        {
                alert('눈썹의 길이를 선택하세요!');
		return;
         }

        var count_face_style7 = 0;
        
	for(i=0; i < 4; i++)
        {
                if(signform.face_style7[i].checked == true)
                {
                        count_face_style7 += 1;
                }
        }

        if (count_face_style7 == 0 ) 
        {
                alert('눈썹 털의 상태를 선택하세요!');
		return;
         }
   
        var count_face_style7_1 = 0;
        
	for(i=0; i < 3; i++)
        {
                if(signform.face_style7_1[i].checked == true)
                {
                        count_face_style7_1 += 1;
                }
        }

        if (count_face_style7_1 == 0 ) 
        {
                alert('눈썹 사이의 넓이를 선택하세요!');
		return;
         }

        var count_face_style7_2 = 0;
        
	for(i=0; i < 5; i++)
        {
                if(signform.face_style7_2[i].checked == true)
                {
                        count_face_style7_2 += 1;
                }
        }

        if (count_face_style7_2 == 0 ) 
        {
                alert('눈썹 사이의 주름살을 선택하세요!');
		return;
         }
		     
      signform.submit();
      }
//-->
</SCRIPT>
		<form name=signform method=post action="faceface_4.php" style="display : inline;">

		<input type="hidden" name="cate" value="<?=$cate?>">
		<input type="hidden" name="sel" value="<?=$sel?>">
		<input type=hidden name=sex value=<?=$sex?>>
		<input type=hidden name=face_style1 value=<?=$face_style1?>>
		<input type=hidden name=face_style2 value=<?=$face_style2?>>
		<input type=hidden name=face_style3 value=<?=$face_style3?>>
		<input type=hidden name=face_style4 value=<?=$face_style4?>>

		<input type="hidden" name="url" value="<?=$url?>">
		<input type="hidden" name="urltemp" value="<?=$urltemp?>">


<table width="490" align="Center" border=0 cellspacing=0 cellpadding=0>
  <tr>
   <td align=center>

     
      
<?If($sex == "남"){?>  

       
       <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>눈썹의 모양을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeS1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeS2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeS3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style5' value='눈썹반달형'>눈썹 반달형</td>
         <td align=center><input type='radio'  name='face_style5' value='눈썹산형'>눈썹 산형</td>
         <td align=center><input type='radio'  name='face_style5' value='눈썹끝이솟은형'>눈썹 끝이 치솟은 형</td>
      </tr>

       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeS4_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeS5_m.gif></td>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeS6_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style5' value='눈썹끝이처진형'>눈썹  끝이 처진 형</td>
         <td align=center><input type='radio'  name='face_style5' value='눈썹일자형'>눈썹 일자형</td>
         <td align=center><input type='radio'  name='face_style5' value='눈썹팔자형'>눈썹 팔자형</td>
      </tr>
     </table> 
<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>눈썹의 길이를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeL1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeL2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeL3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style6' value='눈썹길이적당'>눈썹 길이 적당</td>
         <td align=center><input type='radio'  name='face_style6' value='눈썹길이길음'>눈썹 길이 길다</td>
         <td align=center><input type='radio'  name='face_style6' value='눈썹길이짧음'>눈썹 길이 짧다</td>
      </tr>
     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>눈썹 털의 상태를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeT1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeT2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeT3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style7' value='눈썹털적당'>눈썹 털 적당</td>
         <td align=center><input type='radio'  name='face_style7' value='눈썹털많음'>눈썹 털 많음</td>
         <td align=center><input type='radio'  name='face_style7' value='눈썹털적음'>눈썹 털 적음</td>
      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeT4_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style7' value='눈썹털끊김'>눈썹 털 끊김</td>
         <td align=center>&nbsp;</td>
         <td align=center>&nbsp;</td>
      </tr>

     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>눈썹 사이의 넓이를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeM1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeM2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeM3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style7_1' value='미간사이넓음'>미간 넓음</td>
         <td align=center><input type='radio'  name='face_style7_1' value='미간사이좁음'>미간 좁음</td>
         <td align=center><input type='radio'  name='face_style7_1' value='미간사이적당'>미간 적당</td>
      </tr>

     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>눈썹 사이의 주름살을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeMJ1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeMJ2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeMJ3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style7_2' value='미간주름살한개'>미간 주름살 한개</td>
         <td align=center><input type='radio'  name='face_style7_2' value='미간주름살두개'>미간 주름살 두개</td>
         <td align=center><input type='radio'  name='face_style7_2' value='미간주름살세개'>미간 주름살 세개</td>
      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeMJ4_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeMJ5_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style7_2' value='미간주름살십자'>미간 주름살 십자형</td>
         <td align=center><input type='radio'  name='face_style7_2' value='미간주름살없음'>미간 주름살 없음</td>
         <td align=center>&nbsp;</td>
      </tr>

     </table> 

<?}else{?>

      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>눈썹의 모양을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeS1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeS2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeS3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style5' value='눈썹반갈형'>눈썹 반달형</td>
         <td align=center><input type='radio'  name='face_style5' value='눈썹산형'>눈썹 산형</td>
         <td align=center><input type='radio'  name='face_style5' value='눈썹끝이솟은형'>눈썹 끝이 치솟은 형</td>
      </tr>

       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeS4_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeS5_w.gif></td>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeS6_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style5' value='눈썹끝이처진형'>눈썹  끝이 처진 형</td>
         <td align=center><input type='radio'  name='face_style5' value='눈썹일자형'>눈썹 일자형</td>
         <td align=center><input type='radio'  name='face_style5' value='눈썹팔자형'>눈썹 팔자형</td>
      </tr>
     </table> 
<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>눈썹의 길이를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeL1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeL2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeL3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style6' value='눈썹길이적당'>눈썹 길이 적당</td>
         <td align=center><input type='radio'  name='face_style6' value='눈썹길이길음'>눈썹 길이 길다</td>
         <td align=center><input type='radio'  name='face_style6' value='눈썹길이짧음'>눈썹 길이 짧다</td>
      </tr>
     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>눈썹 털의 상태를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeT1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeT2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeT3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style7' value='눈썹털적당'>눈썹 털 적당</td>
         <td align=center><input type='radio'  name='face_style7' value='눈썹털많음'>눈썹 털 많음</td>
         <td align=center><input type='radio'  name='face_style7' value='눈썹털적음'>눈썹 털 적음</td>
      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeT4_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style7' value='눈썹털끊김'>눈썹 털 끊김</td>
         <td align=center>&nbsp;</td>
         <td align=center>&nbsp;</td>
      </tr>

     </table> 
<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>눈썹 사이의 넓이를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeM1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeM2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeM3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style7_1' value='미간사이넓음'>미간 넓음</td>
         <td align=center><input type='radio'  name='face_style7_1' value='미간사이좁음'>미간 좁음</td>
         <td align=center><input type='radio'  name='face_style7_1' value='미간사이적당'>미간 적당</td>
      </tr>

     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>눈썹 사이의 주름살을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeMJ1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeMJ2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeMJ3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style7_2' value='미간주름살한개'>미간 주름살 한개</td>
         <td align=center><input type='radio'  name='face_style7_2' value='미간주름살두개'>미간 주름살 두개</td>
         <td align=center><input type='radio'  name='face_style7_2' value='미간주름살세개'>미간 주름살 세개</td>
      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeMJ4_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_eyeMJ5_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style7_2' value='미간주름살십자'>미간 주름살 십자형</td>
         <td align=center><input type='radio'  name='face_style7_2' value='미간주름살없음'>미간 주름살 없음</td>
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