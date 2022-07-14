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
<SCRIPT LANGUAGE="JavaScript">
<!--
function checkInput(signform) {
	
	var count_face_style1 = 0;
        
	for(i=0; i < 9; i++)
        {
                if(signform.face_style1[i].checked == true)
                {
                        count_face_style1 += 1;
                }
        }

        if (count_face_style1 == 0 ) 
        {
                alert('얼굴 형태를 선택하세요!');
		return;
         }
		     
      signform.submit();
}
//-->
</SCRIPT>
		<form name=signform method=post action="faceface_2.php" style="display : inline;">

		<input type="hidden" name="cate" value="<?=$cate?>">
		<input type="hidden" name="sel" value="<?=$sel?>">
		<input type=hidden name=sex value="<?=$sex?>">

		<input type="hidden" name="url" value="<?=$url?>">
		<input type="hidden" name="urltemp" value="<?=$urltemp?>">

			
<table width="490" align="Center" border=0 cellspacing=0 cellpadding=0>
  <tr>
   <td align=center>
      <table width="490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>얼굴 형태를 선택하세요.</td>
       </tr> 
			<?If($sex == "남"){?>  
				   <tr bgcolor=FFFFFF>
					 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_all_gab_m.gif></td>
				 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_all_sin_m.gif></td>
				 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_all_jun_m.gif></td>
				  </tr>
				  <tr bgcolor=f8f8f8>
				 <td align=center><input type='radio'  name='face_style1' value='갑자형'>갑자형(甲子形)</td>
					 <td align=center><input type='radio'  name='face_style1' value='신자형'>신자형(申子形)</td>
					 <td align=center><input type='radio'  name='face_style1' value='전자형'>전자형(田子形)</td>
				  </tr>
				   <tr bgcolor=FFFFFF>
				 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_all_O_m.gif></td>
				 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_all_u_m.gif></td>
				 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_all_j4_m.gif></td>
				  </tr>
				  <tr bgcolor=f8f8f8>
				 <td align=center><input type='radio'  name='face_style1' value='원자형'>원자형(圓子形)</td>
					 <td align=center><input type='radio'  name='face_style1' value='유자형'>유자형(由子形)</td>
					 <td align=center><input type='radio'  name='face_style1' value='목자형'>목자형(目子形)</td>
				  </tr>
				   <tr bgcolor=FFFFFF>
					 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_all_y3_m.gif></td>
				 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_all_wang_m.gif></td>
				 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_all_3_m.gif></td>
				  </tr>
				  <tr bgcolor=f8f8f8>
					 <td align=center><input type='radio'  name='face_style1' value='역삼각형'>역삼각형(逆三角形)</td>
					 <td align=center><input type='radio'  name='face_style1' value='왕자형'>왕자형(王子形)</td>
					 <td align=center><input type='radio'  name='face_style1' value='삼각형'>삼각형(三角形)</td>
				  </tr>
			<?}else{?>

				   <tr bgcolor=FFFFFF>
					 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_all_O_w.gif></td>
				 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_all_jun_w.gif></td>
				 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_all_ta_w.gif></td>
				  </tr>
				  <tr bgcolor=f8f8f8>
				 <td align=center><input type='radio'  name='face_style1' value='원자형'>원자형(圓子形)</td>
					 <td align=center><input type='radio'  name='face_style1' value='전자형'>전자형(田子形)</td>
					 <td align=center><input type='radio'  name='face_style1' value='타원형'>타원형(楕圓形)</td>
				  </tr>
				   <tr bgcolor=FFFFFF>
				 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_all_j4_w.gif></td>
				 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_all_u_w.gif></td>
					 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_all_sin_w.gif></td>
				  </tr>
				  <tr bgcolor=f8f8f8>
				 <td align=center><input type='radio'  name='face_style1' value='목자형'>목자형(目子形)</td>
					 <td align=center><input type='radio'  name='face_style1' value='유자형'>유자형(由子形)</td>
					 <td align=center><input type='radio'  name='face_style1' value='신자형'>신자형(申子形)</td>
				  </tr>
				   <tr bgcolor=FFFFFF>
				 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_all_3_w.gif></td>
				 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_all_y3_w.gif></td>
					 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_all_wang_w.gif></td>
				  </tr>
				  <tr bgcolor=f8f8f8>
				 <td align=center><input type='radio'  name='face_style1' value='삼각형'>삼각형(三角形)</td>
					 <td align=center><input type='radio'  name='face_style1' value='역삼각형'>역삼각형(逆三角形)</td>
					 <td align=center><input type='radio'  name='face_style1' value='왕자형'>왕자형(王子形)</td>
				  </tr>
			<?}?>
		</table>
		</td>
	</tr>
			<tR>
				<tD align="center" style="padding:4px;"><BR><a href="javascript:checkInput(signform);"><img src="/images/board_img/result_next.jpg" border="0"></a></tD>
			</tr>
</table>

<!-- =============================================================== -->

		</form>
<!-- 운세결과물 출력 종료 -->
<?include "../../common/include_bottom_c2.php";?>