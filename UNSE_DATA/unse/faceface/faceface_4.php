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
	
	
        var count_face_style8 = 0;
        
	for(i=0; i < 3; i++)
        {
                if(signform.face_style8[i].checked == true)
                {
                        count_face_style8 += 1;
                }
        }

        if (count_face_style8 == 0 ) 
        {
                alert('눈의 크기를 선택하세요!');
		return;
         }

        var count_face_style9 = 0;
        
	for(i=0; i < 3; i++)
        {
                if(signform.face_style9[i].checked == true)
                {
                        count_face_style9 += 1;
                }
        }

        if (count_face_style9 == 0 ) 
        {
                alert('눈의 모양을 선택하세요!');
		return;
         }

        var count_face_style10 = 0;
        
	for(i=0; i < 4; i++)
        {
                if(signform.face_style10[i].checked == true)
                {
                        count_face_style10 += 1;
                }
        }

        if (count_face_style10 == 0 ) 
        {
                alert('눈동자의 위치를 선택하세요!');
		return;
         }
   
        var count_face_style11 = 0;
        
	for(i=0; i < 4; i++)
        {
                if(signform.face_style11[i].checked == true)
                {
                        count_face_style11 += 1;
                }
        }

        if (count_face_style11 == 0 ) 
        {
                alert('눈꼬리 주변의 주름을 선택하세요!');
		return;
         }

	var count_face_style12 = 0;
        
	for(i=0; i < 3; i++)
        {
                if(signform.face_style12[i].checked == true)
                {
                        count_face_style12 += 1;
                }
        }

        if (count_face_style12 == 0 ) 
        {
                alert('눈꼬리의 모양을 선택하세요!');
		return;
         }

	var count_face_style13 = 0;
        
	for(i=0; i < 4; i++)
        {
                if(signform.face_style13[i].checked == true)
                {
                        count_face_style13 += 1;
                }
        }

        if (count_face_style13 == 0 ) 
        {
                alert('눈꺼풀의 두께를 선택하세요!');
		return;
         }
   
   
		     
      signform.submit();
      }
//-->
</SCRIPT>
		<form name=signform method=post action="faceface_5.php" style="display : inline;">

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

		<input type="hidden" name="url" value="<?=$url?>">
		<input type="hidden" name="urltemp" value="<?=$urltemp?>">

<table width="490" align="Center" border=0 cellspacing=0 cellpadding=0>
  <tr>
   <td align=center>   
      
<?If($sex == "남"){?>  

       
       <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>눈의 크기를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeS1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeS2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeS3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style8' value='눈크기적당'>눈 크기 적당</td>
         <td align=center><input type='radio'  name='face_style8' value='눈크기크다'>눈 크기 크다</td>
         <td align=center><input type='radio'  name='face_style8' value='눈크기적다'>눈 크기 적다</td>
      </tr>
     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>눈의 모양을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeH1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeH2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeH3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style9' value='눈모양튀어나옴'>눈 모양 튀어나옴</td>
         <td align=center><input type='radio'  name='face_style9' value='눈모양움푹꺼짐'>눈 모양 움푹꺼짐</td>
         <td align=center><input type='radio'  name='face_style9' value='눈모양적당'>눈 모양 적당</td>
      </tr>
     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>눈동자의 위치를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeD1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeD2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeD3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style10' value='눈동자위치적당'>눈동자 위치 적당</td>
	 <td align=center><input type='radio'  name='face_style10' value='하부삼백안'>눈동자가 위로 치우침</td>
         <td align=center><input type='radio'  name='face_style10' value='상부삼백안'>눈동자가 아래로 치우침</td>
      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeD4_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style10' value='사백안'>눈동자 주위 사방에 흰자위</td>
         <td align=center>&nbsp;</td>
         <td align=center>&nbsp;</td>
      </tr>

     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>눈꼬리 주변의 주름살을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeG1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeG2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeG3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style11' value='눈꼬리주름한개'>눈꼬리 주변에 주름 한개</td>
	 <td align=center><input type='radio'  name='face_style11' value='눈꼬리주름두개'>눈꼬리 주변에 주름 두개</td>
         <td align=center><input type='radio'  name='face_style11' value='눈꼬리주름많음'>눈꼬리 주변에 주름 많음</td>
      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeG4_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style11' value='눈꼬리주름없음'>눈꼬리 주변에 주름 없음</td>
         <td align=center>&nbsp;</td>
         <td align=center>&nbsp;</td>
      </tr>

     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>눈꼬리의 모양을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeGG1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeGG2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeGG3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style12' value='눈꼬리적당'>눈꼬리 적당</td>
	 <td align=center><input type='radio'  name='face_style12' value='눈꼬리올라감'>눈꼬리가 올라감</td>
         <td align=center><input type='radio'  name='face_style12' value='눈꼬리내려감'>눈꼬리가 내려감</td>
      </tr>
     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>눈꺼풀의 두께를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeN1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeN2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeN3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style13' value='눈꺼풀적당'>눈꺼풀 두께 적당</td>
	 <td align=center><input type='radio'  name='face_style13' value='윗눈꺼풀두꺼움'>윗 눈꺼풀 두꺼움</td>
         <td align=center><input type='radio'  name='face_style13' value='아래눈꺼풀두꺼움'>아래 눈꺼풀 두꺼움</td>
      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeN4_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style13' value='위아래다두꺼움'>위 아래 다 두꺼움</td>
         <td align=center>&nbsp;</td>
         <td align=center>&nbsp;</td>
      </tr>

     </table> 

<?}else{?>

    
     <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>눈의 크기를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeS1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeS2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeS3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style8' value='눈크기적당'>눈 크기 적당</td>
         <td align=center><input type='radio'  name='face_style8' value='눈크기크다'>눈 크기 크다</td>
         <td align=center><input type='radio'  name='face_style8' value='눈크기적다'>눈 크기 적다</td>
      </tr>
     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>눈의 모양을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeH1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeH2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeH3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style9' value='눈모양튀어나옴'>눈 모양 튀어나옴</td>
         <td align=center><input type='radio'  name='face_style9' value='눈모양움푹꺼짐'>눈 모양 움푹꺼짐</td>
         <td align=center><input type='radio'  name='face_style9' value='눈모양적당'>눈 모양 적당</td>
      </tr>
     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>눈동자의 위치를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeD1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeD2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeD3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style10' value='눈동자위치적당'>눈동자 위치 적당</td>
	 <td align=center><input type='radio'  name='face_style10' value='하부삼백안'>눈동자가 위로 치우침</td>
         <td align=center><input type='radio'  name='face_style10' value='상부삼백안'>눈동자가 아래로 치우침</td>
      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeD4_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style10' value='사백안'>눈동자 주위 사방에 흰자위</td>
         <td align=center>&nbsp;</td>
         <td align=center>&nbsp;</td>
      </tr>

     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>눈꼬리 주변의 주름살을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeG1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeG2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeG3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style11' value='눈꼬리주름한개'>눈꼬리 주변에 주름 한개</td>
	 <td align=center><input type='radio'  name='face_style11' value='눈꼬리주름두개'>눈꼬리 주변에 주름 두개</td>
         <td align=center><input type='radio'  name='face_style11' value='눈꼬리주름많음'>눈꼬리 주변에 주름 많음</td>
      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeG4_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style11' value='눈꼬리주름없음'>눈꼬리 주변에 주름 없음</td>
         <td align=center>&nbsp;</td>
         <td align=center>&nbsp;</td>
      </tr>

     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>눈꼬리의 모양을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeGG1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeGG2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeGG3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style12' value='눈꼬리적당'>눈꼬리 적당</td>
	 <td align=center><input type='radio'  name='face_style12' value='눈꼬리올라감'>눈꼬리가 올라감</td>
         <td align=center><input type='radio'  name='face_style12' value='눈꼬리내려감'>눈꼬리가 내려감</td>
      </tr>
     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>눈꺼풀의 두께를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeN1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeN2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeN3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style13' value='눈꺼풀적당'>눈꺼풀 두께 적당</td>
	 <td align=center><input type='radio'  name='face_style13' value='윗눈꺼풀두꺼움'>윗 눈꺼풀 두꺼움</td>
         <td align=center><input type='radio'  name='face_style13' value='아래눈꺼풀두꺼움'>아래 눈꺼풀 두꺼움</td>
      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_0eyeN4_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style13' value='위아래다두꺼움'>위 아래 다 두꺼움</td>
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