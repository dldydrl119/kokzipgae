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
	
	
         var count_face_style14 = 0;
        
	for(i=0; i < 3; i++)
        {
                if(signform.face_style14[i].checked == true)
                {
                        count_face_style14 += 1;
                }
        }

        if (count_face_style14 == 0 ) 
        {
                alert('귀의 출발점 위치를 선택하세요!');
		return;
         }

        var count_face_style15 = 0;
        
	for(i=0; i < 3; i++)
        {
                if(signform.face_style15[i].checked == true)
                {
                        count_face_style15 += 1;
                }
        }

        if (count_face_style15 == 0 ) 
        {
                alert('귀바퀴의 크기를 선택하세요!');
		return;
         }

        var count_face_style16 = 0;
        
	for(i=0; i < 3; i++)
        {
                if(signform.face_style16[i].checked == true)
                {
                        count_face_style16 += 1;
                }
        }

        if (count_face_style16 == 0 ) 
        {
                alert('귓볼의 모양을 선택하세요!');
		return;
         }
   
        var count_face_style17 = 0;
        
	for(i=0; i < 4; i++)
        {
                if(signform.face_style17[i].checked == true)
                {
                        count_face_style17 += 1;
                }
        }

        if (count_face_style17 == 0 ) 
        {
                alert('귀의 모양을 선택하세요!');
		return;
         }
   
		     
      signform.submit();
      }
//-->
</SCRIPT>
		<form name=signform method=post action="faceface_6.php" style="display : inline;">

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

		<input type="hidden" name="url" value="<?=$url?>">
		<input type="hidden" name="urltemp" value="<?=$urltemp?>">


<table width="490" align="Center" border=0 cellspacing=0 cellpadding=0>
  <tr>
   <td align=center>

     
      
<?If($sex == "남"){?>  

       
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>귀의 출발점 위치를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earH1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earH2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earH3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style14' value='귀출발눈썹'>귀의 출발점이 눈썹 부터</td>
         <td align=center><input type='radio'  name='face_style14' value='귀출발눈썹눈꼬리중간'>귀의 출발점이 눈썹, 눈꼬리 중간</td>
         <td align=center><input type='radio'  name='face_style14' value='귀출발눈꼬리'>귀의 출발점이 눈꼬리 부터</td>
      </tr>
     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>귀바퀴의 크기를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earS1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earS2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earS3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style15' value='귀바퀴적당'>귀바퀴의 크기가 적당</td>
         <td align=center><input type='radio'  name='face_style15' value='귀바퀴크다'>귀바퀴의 크기가 크다</td>
         <td align=center><input type='radio'  name='face_style15' value='귀바퀴적다'>귀바퀴의 크기가 적다</td>
      </tr>
     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>귓볼의 모양을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earD1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earD2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earD3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style16' value='귓볼살집적당'>귓볼의 살이 적당</td>
	 <td align=center><input type='radio'  name='face_style16' value='귓볼살집많다'>귓볼의 살이 많다</td>
         <td align=center><input type='radio'  name='face_style16' value='귓볼살집적다'>귓볼의 살이 적다</td>
      </tr>

     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>귀의 모양을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earG1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earG2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earG3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style17' value='귀모양둥글다'>귀 모양이 둥글다</td>
	 <td align=center><input type='radio'  name='face_style17' value='귀모양오똑섬'>귀 모양이 오똑 섰다</td>
         <td align=center><input type='radio'  name='face_style17' value='귀모양옆으로누움'>귀 모양이 옆으로 누웠다</td>
      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earG4_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style17' value='귀모양길다'>귀 모양이 길다</td>
         <td align=center>&nbsp;</td>
         <td align=center>&nbsp;</td>
      </tr>

     </table> 
<?}else{?>

      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>귀의 출발점 위치를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earH1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earH2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earH3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style14' value='귀출발눈썹'>귀의 출발점이 눈썹 부터</td>
         <td align=center><input type='radio'  name='face_style14' value='귀출발눈썹눈꼬리중간'>귀의 출발점이 눈썹, 눈꼬리 중간</td>
         <td align=center><input type='radio'  name='face_style14' value='귀출발눈꼬리'>귀의 출발점이 눈꼬리 부터</td>
      </tr>
     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>귀바퀴의 크기를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earS1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earS2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earS3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style15' value='귀바퀴적당'>귀바퀴의 크기가 적당</td>
         <td align=center><input type='radio'  name='face_style15' value='귀바퀴크다'>귀바퀴의 크기가 크다</td>
         <td align=center><input type='radio'  name='face_style15' value='귀바퀴적다'>귀바퀴의 크기가 적다</td>
      </tr>
     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>귓볼의 모양을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earD1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earD2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earD3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style16' value='귓볼살집적당'>귓볼의 살이 적당</td>
	 <td align=center><input type='radio'  name='face_style16' value='귓볼살집많다'>귓볼의 살이 많다</td>
         <td align=center><input type='radio'  name='face_style16' value='귓볼살집적다'>귓볼의 살이 적다</td>
      </tr>

     </table> 

<br>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>귀의 모양을 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earG1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earG2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earG3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style17' value='귀모양둥글다'>귀 모양이 둥글다</td>
	 <td align=center><input type='radio'  name='face_style17' value='귀모양오똑섬'>귀 모양이 오똑 섰다</td>
         <td align=center><input type='radio'  name='face_style17' value='귀모양옆으로누움'>귀 모양이 옆으로 누웠다</td>
      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_earG4_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style17' value='귀모양길다'>귀 모양이 길다</td>
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