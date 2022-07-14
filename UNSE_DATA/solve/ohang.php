 <?
  $ffoss = $osdir;

  //If(sizeof(explode("UNSE_DATA", $ffoss))<1){

  if (($samhap_title != "") || ($ganhap_title_1 != "") || ($ganhap_title_2 != "") || ($ganhap_title_3 != "") || ($ganhap_title_4 != "") || ($ganhap_title_5 != "")) {
    $disp_hap = "<font color=blue><b>[합]</b></font> : " . $samhap_title . " " . $ganhap_title_1 . " " . $ganhap_title_2 . " " . $ganhap_title_3 . " " . $ganhap_title_4 . " " . $ganhap_title_5;
  }

  if (($samhyung_title != "") || ($jahyung_title_j != "") || ($jahyung_title_o != "") || ($jahyung_title_u != "") || ($jahyung_title_h != "")) {
    $disp_hyung = "<font color=red><b>[형]</b></font> : " . $samhyung_title . " " . $jahyung_title_j . " " . $jahyung_title_o . " " . $jahyung_title_u . " " . $jahyung_title_h;
  }

  if (($chungsal_title_1 != "") || ($chungsal_title_2 != "") || ($chungsal_title_3 != "") || ($chungsal_title_4 != "") || ($chungsal_title_5 != "") || ($chungsal_title_6 != "")) {
    $disp_chung = "<font color=red><b>[충]</b></font> : " . $chungsal_title_1 . " " . $chungsal_title_2 . " " . $chungsal_title_3 . " " . $chungsal_title_4 . " " . $chungsal_title_5 . " " . $chungsal_title_6;
  }

  if (($pasal_title_1 != "") || ($pasal_title_2 != "") || ($pasal_title_3 != "") || ($pasal_title_4 != "") || ($pasal_title_5 != "") || ($pasal_title_6 != "")) {
    $disp_pa = "<font color=red><b>[파]</b></font> : " . $pasal_title_1 . " " . $pasal_title_2 . " " . $pasal_title_3 . " " . $pasal_title_4 . " " . $pasal_title_5 . " " . $pasal_title_6;
  }

  if (($haesal_title_1 != "") || ($haesal_title_2 != "") || ($haesal_title_3 != "") || ($haesal_title_4 != "") || ($haesal_title_5 != "") || ($haesal_title_6 != "")) {
    $disp_hae = "<font color=red><b>[해]</b></font> : " . $haesal_title_1 . " " . $haesal_title_2 . " " . $haesal_title_3 . " " . $haesal_title_4 . " " . $haesal_title_5 . " " . $haesal_title_6;
  }


  if (($my_day_h == "甲") || ($my_day_h == "乙")) {
    $disp_content = $content_mok;
    $disp_content2 = $content_mok2;
  }
  if (($my_day_h == "丙") || ($my_day_h == "丁")) {
    $disp_content = $content_wha;
    $disp_content2 = $content_wha2;
  }
  if (($my_day_h == "戊") || ($my_day_h == "己")) {
    $disp_content = $content_to;
    $disp_content2 = $content_to2;
  }
  if (($my_day_h == "庚") || ($my_day_h == "辛")) {
    $disp_content = $content_gum;
    $disp_content2 = $content_gum2;
  }
  if (($my_day_h == "壬") || ($my_day_h == "癸")) {
    $disp_content = $content_su;
    $disp_content2 = $content_su2;
  }

  if ($disp_hap != "" || $disp_hyung != "" || $disp_chung != "" || $disp_pa != "" || $disp_hae != "") {
  ?>
   <table border=0 cellspacing=1 cellpadding=5 bgcolor=DDDDDD align='center'>
     <tr>
       <td ALIGN=LEFT>
         <?= $disp_hap ?>
         <?= $disp_hyung ?>
         <?= $disp_chung ?>
         <?= $disp_pa ?>
         <?= $disp_hae ?>
       </td>
     </tr>
   </table>
 <? } ?>

 <SCRIPT LANGUAGE="JavaScript">
   function F_showtext(mode) {

     var InP = document.getElementById("divMenu2");
     if (mode == "1") {
       InP.style.display = "";
     } else {
       InP.style.display = "none";
     }
   }
 </SCRIPT>

 <!-- <table  border=0 cellspacing=0 cellpadding=0  align='center'>
	<tr>
		<td align=left height=40 valign=bottom>
		<div style="position:absolute;  width:132px; height:72px; z-index:0">
			<div style="position:absolute; left:-46px; top:-30px; width:517px; height:257px; z-index:-11" >
			<TABLE cellspacing=0 cellpadding=0 border="0">
				<TR>
					<TD colspan=3><img src="/UNSE_DATA/images/ohang_img/linel_01.gif"></TD>
				</TR>
				<TR>
					<TD><img src="/UNSE_DATA/images/ohang_img/linel_02.gif"></TD>
					<TD width=650 valign=bottom align=center><img src="/images/spacer.gif" width=300 height=50 border=0  onmouseover="F_showtext('1')"></td>
					<TD><img src="/UNSE_DATA/images/ohang_img/linel_04.gif"></TD>
				</TR>
				<TR>
					<TD colspan=3><img src="/UNSE_DATA/images/ohang_img/linel_05.gif"></TD>
				</TR>
			</TABLE>
			</div>
		</div>
		</td>
	</tr>
</table> -->

 <div style=' z-index: 5'>
   <div id="divMenu2" name="divMenu2" style='position:absolute; left:50; top:80%;z-index: 0 ;display:none'>
     <table cellpadding="0" cellspacing="0" border="1">
       <tr>
         <tD bgcolor="#F9EFC1" onmousedown="F_showtext('0')">
           <div style='width:100%; height:350px;background-color:#F9EFC1;border:0px; font-size:10pt; padding:5px;z-index: 10;overflow: auto'>
             <pre><strong>오행의 상징적의미</strong> 
             
<p style="color: #2e2e2e; font-family:굴림;">목(木) : 나무는 곧고 굳은 것으로써 자라남, 성장, 의욕, 
         힘, 만물이 자라나는 봄을 뜻한다. 
         또한 색으로는 청색, 맛으로는 신 것을 뜻함

화(火) : 불은 타오르고 위로 치솟아 오르는 것으로써 분산, 
         전쟁, 폐허, 온도, 계절, 애정을 뜻한다. 또한 
         색으로는 적색, 맛으로는 쓴 것을 뜻함

토(土) : 흙은 심고 거두며 일하고 쉬는 것으로써 모든 
         만물의 중용, 안식, 치부, 재물을 뜻한다. 
         또한 색으로는 황색, 맛으로는 단 것을 뜻함

금(金) : 쇠는 바꾸고 변형시켜 따르게 하는 것으로써 병기, 
         토대, 인덕, 주춧돌을 뜻한다. 
         또한 색으로는 백색, 맛으로는 매운 것을 뜻함

수(水) : 물은 적시고 내려가는 것으로써 교합, 대물림을 
         뜻한다.또한 색으로는 흑색, 맛으로는 짠것을 뜻함</p>



<strong style="font-family:굴림;">특정 五行이 많을 때</strong>

<p style="color: #2e2e2e; font-family:굴림;">木多則 (3개 이상) - 女子氣運(여자, 성장, 의욕) 하고자 
                    하는 일은 많으나 현실에 맞지 않으므로 
                    정신질환이 따른다. 발전적인 의욕과 
                    용감성에 여자가 따른다.

火多則 (3개 이상) - 身病多有 (애정, 온도, 계절, 폐허, 생성) 
                    열기는 열의로 정열을 태우니 과열(過熱)이 
                    우환이 되어 화근이 병을 유발.

土多則 (3개 이상) - 財金旺盛(물상[物想], 기본, 토대, 중앙, 
                    분열),  3개이면 천복성(天福星)

金多則 (3개 이상) - 人物特殊(반석, 기초, 인불, 강직) 인간 
                    유대 관계 원만, 과하면 까다롭고 권모술수
                    에 능함

水多則 (3개 이상) - 可知淫亂(음란, Sex, 번성), 수다스럽고 
                    혁명적 (변혁, 변동을 잘한다) Sex 와 연관</p>



<strong style="font-family:굴림;">특정 五行이 적을때</strong>

<p style="color: #2e2e2e; font-family:굴림;">木이 없을 때 - 의식주의 어려움이 있다. 발전적인 의욕이 미약, 
               타인의 지배하에서 헤어나질 못함. 뚜렷한 목적이 
               없다.

火가 없을 때 - 男女 多結合, 애정 결함으로 부부 사이가 길게 
               연속되지 못하고 자식에게도 냉정하고 대인 관계도 
               길게 인연을 맺지 못함. 이혼율이 많다.
               화목한 가정을 못 이룸.

土가 없을 때 - 住宅의 어려움. 자신의 토대가 되어있지 않으며, 
               더부살이할 팔자, 열심히 돈을 모아도 자신의 것이 
               못된다.

金이 없을 때 - 인간 관계가 어려움. 인덕이 없고, 인간 유대가 
               잘 안됨. 기초가 빈곤하여 매사일 완성되지 못함. 
               사기 잘 당함 (방어능력 부족)

水가 없을 때 - 고향과 부부의 이별, 정서 부족, 갈등 번민 속에서 
               고지식. 융통성이 없다. 변동운 미약, 원 고향에 
               오래 머물지 못함. 물을 찾아 헤맴.</p></pre>
           </div>
         </tD>
       </tR>
     </tablE>
   </div>
 </div>

 <?
  $mok_power_ww = $mok_power_w * 4;
  $wha_power_ww = $wha_power_w * 4;
  $to_power_ww = $to_power_w * 4;
  $gum_power_ww = $gum_power_w * 4;
  $suu_power_ww = $suu_power_w * 4;
  ?>
 <TABLE style="width: 100%;" border=0 cellspacing=0>
   <TR>

     <TD>
       <div id="unse_ohang">
         <table border=0 cellspacing=0 cellpadding=5>
           <tr>
             <td>
               <div class="my_ohang">나의 오행 분석</div>
             </td>
             <!-- <td align=left>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* 선천적 오행은 <?= $my_oheng_day_h ?> 입니다.<br></td> -->
           </tr>
         </table>


         <div class="ohang">
           <div class="container_box">
             <table class="ohang_line" cellpadding='5' cellspacing='0' border=0>
               <tr>
                 <td>
                   <div class="img_ohang">
                     <table cellspacing='1' cellpadding='0' align='left'>
                       <tr>
                         <img src="/images/ohang/mok.png">
                         <td class="bar" bgcolor='#95cea4' width='<?= $mok_power_ww ?>'></td>
                       </tr>
                     </table>
                   </div>
                 </td>
               </tr>
               <tr>
                 <td>
                   <div class="img_ohang">
                     <table cellspacing='1' cellpadding='0' align='left'>
                       <tr>
                         <img src="/images/ohang/wha.png">
                         <td class="bar" bgcolor='#f58787' width='<?= $wha_power_ww ?>'></td>
                       </tr>
                     </table>
                   </div>
                 </td>
               </tr>
               <tr>
                 <td>
                   <div class="img_ohang">
                     <table cellspacing='1' cellpadding='0' align='left'>
                       <tr>
                         <img src="/images/ohang/to.png">
                         <td class="bar" bgcolor='#ba6f42' width='<?= $to_power_ww ?>'></td>
                       </tr>
                     </table>
                   </div>
                 </td>
               </tr>
               <tr>
                 <td>
                   <div class="img_ohang">
                     <table cellspacing='1' cellpadding='0' align='left'>
                       <tr>
                         <img src="/images/ohang/gum.png">
                         <td class="bar" bgcolor='#ffdf79' width='<?= $gum_power_ww ?>'></td>
                       </tr>
                     </table>
                   </div>
                 </td>
               </tr>
               <tr>
                 <td>
                   <div class="img_ohang">
                     <table cellspacing='1' cellpadding='0' align='left'>
                       <tr>
                         <img src="/images/ohang/suu.png">
                         <td class="bar" bgcolor='#9ba1da' width='<?= $suu_power_ww ?>'></td>
                       </tr>
                     </table>
                   </div>
                 </td>
               </tr>


             </table>
           </div>
         </div>
       </div>
       <table style="text-align: center; width: 100%; padding:10px 0;" border=0 cellspacing=0 cellpadding=5>
         <tr>
           <td>
             <font color="#FD4902"><br>오행의 의미해석을 보시려면 <b><a href="javascript:void(0);" onmouseup="F_showtext('1') ">
                   <font color="#FD4902">[이곳]
                 </a></b> 을 눌러주세요.</font>
           </td>
         </tr>
       </table>

     </TD>
   </TR>
 </TABLE>
 <!-- <TABLE cellspacing=0 cellpadding=0 width=500>
<TR>
	<TD width=500 height=20></TD>
</TR>
</TABLE> -->



 <?
  //}
  ?>