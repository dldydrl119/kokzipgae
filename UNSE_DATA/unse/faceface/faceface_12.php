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
		 signform.submit();
      }
//-->
</SCRIPT>
		<form name=signform method=post action="faceface_13.php" style="display : inline;">

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
		<input type=hidden name=face_style37 value=<?=$face_style37?>>

		<input type="hidden" name="url" value="<?=$url?>">
		<input type="hidden" name="urltemp" value="<?=$urltemp?>">


<table width = "490" align="Center" border=0 cellspacing=0 cellpadding=0>
  <tr>
   <td align=center>

     
      
<?If($sex == "남"){?>  

       
       <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=6>남성</td>
       </tr>       
      <tr bgcolor=f8f8f8>
         <td align=center>얼굴형태</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>이마의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>이마의 폭</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>이마의 주름살</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>눈썹의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>눈썹의 길이</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>눈썹 털의 상태</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>눈썹 사이의 넓이</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>눈썹 사이의 주름살</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>눈의 크기</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>눈의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>눈동자의 위치</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>눈꼬리 주변의 주름살</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>눈꼬리의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>윗눈꺼풀의 두께</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>귀의 출발점</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>귀바퀴의 크기</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>귓볼의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>귀의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>코의 길이</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>콧대의 높이</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>콧등의 형태</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>콧망울의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>콧구멍의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>준두 부위의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>관골의 형태</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>법령의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>인중의 넓이</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>인중의 길이</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>인중의 형태</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>코와 입사이의 넓이</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>인중의 모습</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>입술의 크기</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>윗입술의 두께</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>입술의 형태</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>입술 끝의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>옆으로 본 입의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>아랫입술의 주름</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>턱의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>

     </table>


<?}else{?>


      <table width = "490" border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
       <tr bgcolor=ddccdd>
         <td align=center colspan=6>여성</td>
       </tr>       
      <tr bgcolor=f8f8f8>
         <td align=center>얼굴형태</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>이마의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>이마의 폭</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>이마의 주름살</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>눈썹의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>눈썹의 길이</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>눈썹 털의 상태</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>눈썹 사이의 넓이</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>눈썹 사이의 주름살</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>눈의 크기</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>눈의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>눈동자의 위치</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>눈꼬리 주변의 주름살</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>눈꼬리의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>눈꺼풀의 두께</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>귀의 출발점</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>귀바퀴의 크기</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>귓볼의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>귀의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>코의 길이</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>콧대의 높이</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>콧등의 형태</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>콧망울의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>콧구멍의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>준두 부위의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>관골의 형태</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>법령의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>인중의 넓이</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>인중의 길이</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>인중의 형태</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>코와 입사이의 넓이</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>인중의 모습</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>입술의 크기</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>윗입술의 두께</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>입술의 형태</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>입술 끝의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
      </tr>
      <tr bgcolor=f8f8f8>
         <td align=center>옆으로 본 입의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>아랫입술의 주름</td><td><input type='checkbox'  checked name='check' value='check'></td>
         <td align=center>턱의 모양</td><td><input type='checkbox'  checked name='check' value='check'></td>
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