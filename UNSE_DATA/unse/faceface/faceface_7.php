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
	
	
        var count_face_style24 = 0;
        
	for(i=0; i < 5; i++)
        {
                if(signform.face_style24[i].checked == true)
                {
                        count_face_style24 += 1;
                }
        }

        if (count_face_style24 == 0 ) 
        {
                alert('광대뼈의 모양을 선택하세요!');
		return;
         }

		     
      signform.submit();
      }
//-->
</SCRIPT>
		<form name=signform method=post action="faceface_8.php" style="display : inline;">

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

		<input type="hidden" name="url" value="<?=$url?>">
		<input type="hidden" name="urltemp" value="<?=$urltemp?>">


<table width="490" align="Center" border=0 cellspacing=0 cellpadding=0>
  <tr>
   <td align=center>

     
      
<?If($sex == "남"){?>  

       
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>관골의 형태를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_guangM1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_guangM2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_guangM3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style24' value='광대뼈적당'>광대뼈가 적당하다</td>
	 <td align=center><input type='radio'  name='face_style24' value='광대뼈앞으로돌출'>광대뼈가 앞으로 돌출</td>
	 <td align=center><input type='radio'  name='face_style24' value='광대뼈옆으로돌출'>광대뼈가 옆으로 돌출</td>

      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_guangM4_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_guangM5_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style24' value='광대뼈앞옆돌출'>광대뼈가 앞옆으로 돌출</td>
         <td align=center><input type='radio'  name='face_style24' value='광대뼈함몰'>광대뼈가 함몰 되었다</td>
	 <td align=center>&nbsp;</td>
      </tr>

     </table> 
<?}else{?>

    
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>관골의 형태를 선택하세요.</td>
       </tr>       
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_guangM1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_guangM2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_guangM3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style24' value='광대뼈적당'>광대뼈가 적당하다</td>
	 <td align=center><input type='radio'  name='face_style24' value='광대뼈앞으로돌출'>광대뼈가 앞으로 돌출</td>
	 <td align=center><input type='radio'  name='face_style24' value='광대뼈옆으로돌출'>광대뼈가 옆으로 돌출</td>

      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_guangM4_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_guangM5_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
      </tr>
      <tr bgcolor=f8f8f8>
	 <td align=center><input type='radio'  name='face_style24' value='광대뼈앞옆돌출'>광대뼈가 앞옆으로 돌출</td>
         <td align=center><input type='radio'  name='face_style24' value='광대뼈함몰'>광대뼈가 함몰 되었다</td>
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