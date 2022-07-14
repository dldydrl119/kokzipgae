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
	
	
         var count_face_style37 = 0;
        
	for(i=0; i < 8; i++)
        {
                if(signform.face_style37[i].checked == true)
                {
                        count_face_style37 += 1;
                }
        }

        if (count_face_style37 == 0 ) 
        {
                alert('턱의 모양을 선택하세요!');
		return;
         }
		     
      signform.submit();
      }
//-->
</SCRIPT>
		<form name=signform method=post action="faceface_12.php" style="display : inline;">

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
		<input type=hidden name=face_style31 value=<?=$face_style31?>>
		<input type=hidden name=face_style32 value=<?=$face_style32?>>
		<input type=hidden name=face_style33 value=<?=$face_style33?>>
		<input type=hidden name=face_style34 value=<?=$face_style34?>>
		<input type=hidden name=face_style35 value=<?=$face_style35?>>
		<input type=hidden name=face_style36 value=<?=$face_style36?>>

		<input type="hidden" name="url" value="<?=$url?>">
		<input type="hidden" name="urltemp" value="<?=$urltemp?>">


<table width = "490" align="Center" border=0 cellspacing=0 cellpadding=0>
  <tr>
   <td align=center>

     
      
<?If($sex == "남"){?>  

       
      <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>턱의 모양을 선택하세요.</td>
       </tr>       
     
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_tukM1_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_tukM2_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_tukM3_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center><input type='radio'  name='face_style37' value='턱모양적당'>턱의 모양이 둥글고 적당</td>
	 <td align=center><input type='radio'  name='face_style37' value='턱모양뾰족'>턱의 모양이 뾰족하다</td>
	 <td align=center><input type='radio'  name='face_style37' value='턱모양각형'>턱의 모양이 각이졌다</td>
      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_tukM4_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_tukM5_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_tukM6_m.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center><input type='radio'  name='face_style37' value='턱이짧다'>턱의 모양이 짧다</td>
	 <td align=center><input type='radio'  name='face_style37' value='턱이길다'>턱의 모양이 길다</td>
	 <td align=center><input type='radio'  name='face_style37' value='턱이주걱턱'>턱의 모양이 주걱턱이다</td>
      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_tukM7_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_tukM8_m.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center><input type='radio'  name='face_style37' value='턱이오목턱'>턱의 중앙이 오목하다</td>
	 <td align=center><input type='radio'  name='face_style37' value='턱이두겹'>턱의 모양이 두겹이다</td>
	 <td align=center>&nbsp;</td>
      </tr>

     </table>      
       
<?}else{?>


      <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=3>턱의 모양을 선택하세요.</td>
       </tr>       
     
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_tukM1_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_tukM2_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_tukM3_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center><input type='radio'  name='face_style37' value='턱모양적당'>턱의 모양이 둥글고 적당</td>
	 <td align=center><input type='radio'  name='face_style37' value='턱모양뾰족'>턱의 모양이 뾰족하다</td>
	 <td align=center><input type='radio'  name='face_style37' value='턱모양각형'>턱의 모양이 각이졌다</td>
      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_tukM4_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_tukM5_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_tukM6_w.gif></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center><input type='radio'  name='face_style37' value='턱이짧다'>턱의 모양이 짧다</td>
	 <td align=center><input type='radio'  name='face_style37' value='턱이길다'>턱의 모양이 길다</td>
	 <td align=center><input type='radio'  name='face_style37' value='턱이주걱턱'>턱의 모양이 주걱턱이다</td>
      </tr>
       <tr bgcolor=FFFFFF>
         <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_tukM7_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_face_tukM8_w.gif></td>
	 <td align=center><img src=/UNSE_DATA/images/T063_img/21C_hidden.gif ></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center><input type='radio'  name='face_style37' value='턱이오목턱'>턱의 중앙이 오목하다</td>
	 <td align=center><input type='radio'  name='face_style37' value='턱이두겹'>턱의 모양이 두겹이다</td>
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