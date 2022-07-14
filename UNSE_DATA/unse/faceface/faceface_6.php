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
	
	
        var count_face_style18 = 0;
        
	for(i=0; i < 3; i++)
        {
                if(signform.face_style18[i].checked == true)
                {
                        count_face_style18 += 1;
                }
        }

        if (count_face_style18 == 0 ) 
        {
                alert('코의 길이를 선택하세요!');
		return;
         }

        var count_face_style19 = 0;
        
	for(i=0; i < 3; i++)
        {
                if(signform.face_style19[i].checked == true)
                {
                        count_face_style19 += 1;
                }
        }

        if (count_face_style19 == 0 ) 
        {
                alert('콧대의 높이를 선택하세요!');
		return;
         }

        var count_face_style20 = 0;
        
	for(i=0; i < 6; i++)
        {
                if(signform.face_style20[i].checked == true)
                {
                        count_face_style20 += 1;
                }
        }

        if (count_face_style20 == 0 ) 
        {
                alert('콧등의 형태를 선택하세요!');
		return;
         }
   
        var count_face_style21 = 0;
        
	for(i=0; i < 3; i++)
        {
                if(signform.face_style21[i].checked == true)
                {
                        count_face_style21 += 1;
                }
        }

        if (count_face_style21 == 0 ) 
        {
                alert('콧망울의 모양을 선택하세요!');
		return;
         }

        var count_face_style22 = 0;
        
	for(i=0; i < 5; i++)
        {
                if(signform.face_style22[i].checked == true)
                {
                        count_face_style22 += 1;
                }
        }

        if (count_face_style22 == 0 ) 
        {
                alert('콧구멍의 모양을 선택하세요!');
		return;
         }
  
        var count_face_style23 = 0;
        
	for(i=0; i < 5; i++)
        {
                if(signform.face_style23[i].checked == true)
                {
                        count_face_style23 += 1;
                }
        }

        if (count_face_style23 == 0 ) 
        {
                alert('준두부위의 모양을 선택하세요!');
		return;
         }
		     
      signform.submit();
      }
//-->
</SCRIPT>
		<form name=signform method=post action="faceface_7.php" style="display : inline;">

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

		<input type="hidden" name="url" value="<?=$url?>">
		<input type="hidden" name="urltemp" value="<?=$urltemp?>">

<table width="490" align="Center" border=0 cellspacing=0 cellpadding=0>
  <tr>
   <td align=center>

     
      
<?If($sex == "남"){?>  

       
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>코의 길이를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseL1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseL2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseL3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style18' value='코길이적당'>코의 길이가 적당</td>
         <td align=center><input type='radio'  name='face_style18' value='코길이길다'>코의 길이가 길다</td>
         <td align=center><input type='radio'  name='face_style18' value='코길이짧다'>코의 길이가 짧다</td>
      </tr>
     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>콧대의 높이를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseH1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseH2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseH3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style19' value='콧대높이적당'>콧대의 높이가 적당</td>
         <td align=center><input type='radio'  name='face_style19' value='콧대높이높다'>콧대의 높이가 높다</td>
         <td align=center><input type='radio'  name='face_style19' value='콧대높이낮다'>콧대의 높이가 낮다</td>
      </tr>
     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>콧등의 형태를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseM1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseM2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseM3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style20' value='콧등이적당'>콧등이 적당하다</td>
	 <td align=center><input type='radio'  name='face_style20' value='콧등이층계'>콧등이 층계가 져 있다</td>
	 <td align=center><input type='radio'  name='face_style20' value='콧등중간이높다'>콧등 중간이 높이 솟았다</td>

      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseM4_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseM5_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseM6_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style20' value='콧등이우로휨'>콧등이 오른쪽으로 휘어있다</td>
         <td align=center><input type='radio'  name='face_style20' value='콧등이좌로휨'>콧등이 왼쪽으로 휘어있다</td>
	 <td align=center><input type='radio'  name='face_style20' value='매부리코'>매부리코</td>
      </tr>

     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>콧망울의 모양을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseO1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseO2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseO3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style21' value='콧망울적당'>콧망울이 적당하다</td>
	 <td align=center><input type='radio'  name='face_style21' value='콧망울살찜'>콧망울의 살집이 좋다</td>
         <td align=center><input type='radio'  name='face_style21' value='콧망울여윔'>콧망울의 실집이 여위었다</td>
      </tr>

     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>콧구멍의 모양을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseG1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseG2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseG3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style22' value='콧구멍적당'>콧구멍의 모습이 적당하다</td>
	 <td align=center><input type='radio'  name='face_style22' value='콧구멍크다'>콧구멍이 크다</td>
         <td align=center><input type='radio'  name='face_style22' value='콧구멍적다'>콧구멍이 적다</td>
      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseG4_m.gif></td>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseG5_m.gif></td>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center><input type='radio'  name='face_style22' value='들창코'>콧구멍이 들려있다(들창코)</td>
         <td align=center><input type='radio'  name='face_style22' value='좌우콧구멍다름'>좌우 콧구멍의 크기가 다르다</td>
         <td align=center>&nbsp;</td>
      </tr>

     </table> 

<br>

      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>준두부위의 모양을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseJ1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseJ2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseJ3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style23' value='코끝부분보통'>코끝 부분이 보통이다</td>
	 <td align=center><input type='radio'  name='face_style23' value='코끝부분주름'>코끝 부분에 주름이 많다</td>
         <td align=center><input type='radio'  name='face_style23' value='코끝부분붉음'>코끝 부분이 붉은색이 돈다</td>
      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseJ4_m.gif></td>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseJ5_m.gif></td>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center><input type='radio'  name='face_style23' value='코끝부분점'>코끝 부분에 점이 많다</td>
         <td align=center><input type='radio'  name='face_style23' value='콧마루주름'>콧마루에 주름이 많다</td>
         <td align=center>&nbsp;</td>
      </tr>

     </table> 

<?}else{?>

    
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>코의 길이를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseL1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseL2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseL3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style18' value='코길이적당'>코의 길이가 적당</td>
         <td align=center><input type='radio'  name='face_style18' value='코길이길다'>코의 길이가 길다</td>
         <td align=center><input type='radio'  name='face_style18' value='코길이짧다'>코의 길이가 짧다</td>
      </tr>
     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>콧대의 높이를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseH1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseH2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseH3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style19' value='콧대높이적당'>콧대의 높이가 적당</td>
         <td align=center><input type='radio'  name='face_style19' value='콧대높이높다'>콧대의 높이가 높다</td>
         <td align=center><input type='radio'  name='face_style19' value='콧대높이낮다'>콧대의 높이가 낮다</td>
      </tr>
     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>콧등의 형태를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseM1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseM2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseM3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style20' value='콧등이적당'>콧등이 적당하다</td>
	 <td align=center><input type='radio'  name='face_style20' value='콧등이층계'>콧등이 층계가 져 있다</td>
	 <td align=center><input type='radio'  name='face_style20' value='콧등중간이높다'>콧등 중간이 높이 솟았다</td>

      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseM4_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseM5_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseM6_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style20' value='콧등이우로휨'>콧등이 오른쪽으로 휘어있다</td>
         <td align=center><input type='radio'  name='face_style20' value='콧등이좌로휨'>콧등이 왼쪽으로 휘어있다</td>
	 <td align=center><input type='radio'  name='face_style20' value='매부리코'>매부리코</td>
      </tr>

     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>콧망울의 모양을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseO1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseO2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseO3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style21' value='콧망울적당'>콧망울이 적당하다</td>
	 <td align=center><input type='radio'  name='face_style21' value='콧망울살찜'>콧망울의 살집이 좋다</td>
         <td align=center><input type='radio'  name='face_style21' value='콧망울여윔'>콧망울의 실집이 여위었다</td>
      </tr>

     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>콧구멍의 모양을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseG1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseG2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseG3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style22' value='콧구멍적당'>콧구멍의 모습이 적당하다</td>
	 <td align=center><input type='radio'  name='face_style22' value='콧구멍크다'>콧구멍이 크다</td>
         <td align=center><input type='radio'  name='face_style22' value='콧구멍적다'>콧구멍이 적다</td>
      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseG4_w.gif></td>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseG5_w.gif></td>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center><input type='radio'  name='face_style22' value='들창코'>콧구멍이 들려있다(들창코)</td>
         <td align=center><input type='radio'  name='face_style22' value='좌우콧구멍다름'>좌우 콧구멍의 크기가 다르다</td>
         <td align=center>&nbsp;</td>
      </tr>

     </table> 

<br>

      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>준두부위의 모양을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseJ1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseJ2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseJ3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style23' value='코끝부분보통'>코끝 부분이 보통이다</td>
	 <td align=center><input type='radio'  name='face_style23' value='코끝부분주름'>코끝 부분에 주름이 많다</td>
         <td align=center><input type='radio'  name='face_style23' value='코끝부분붉음'>코끝 부분이 붉은색이 돈다</td>
      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseJ4_w.gif></td>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_noseJ5_w.gif></td>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center><input type='radio'  name='face_style23' value='코끝부분점'>코끝 부분에 점이 많다</td>
         <td align=center><input type='radio'  name='face_style23' value='콧마루주름'>콧마루에 주름이 많다</td>
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