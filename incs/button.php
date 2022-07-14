<div id="InPutx">
				<?
$moneyINFO_split= str_replace(Chr(10), "", $moneyINFO_split);
$conINFO_split= str_replace(Chr(10), "", $conINFO_split);



$request_mode="free"					;

				?>
<script>
function buttonfree(){requestPay('<?=$request_mode?>','<?=$moneyINFO_split?>','<?=$conINFO_split?>','<?=$sel?>','<?=$urlinfo?>');}
</script>

				<a  href="javascript:requestPay('<?=$request_mode?>','<?=$moneyINFO_split?>','<?=$conINFO_split?>','<?=$sel?>','<?=$urlinfo?>');"><div id="kokunse" class="unse_result">운세보기</div></a>
				
</div>
<SCRIPT LANGUAGE="JavaScript">
ct=0
</SCRIPT>
<div id="result" align="center" style='display:none;'>
<div style="position:absolute"><div style="position:absolute;left:0;top:-200"><TABLE width=420 height=200 ><TR><TD></TD></TR></TABLE></div></div>
<table cellpadding="0" cellspacing="0"><tr><td height="2"></td></tr><tr><td><img src="/UNSE_DATA/images/D_img/unse_re.jpg" border="0" usemap="#unse_re"></td></tr><tr><td height="25"></td></tr></table><map name="unse_re"><area shape="rect" coords="326,45,460,71" href="#다시보기" onclick="ct=ct+1;if(ct>3){alert(' - 다시보기 서비스 \n\n총 3회를 모두 이용하셨습니다.')}else{alert(' - 다시보기 서비스 \n\n총 3회 중 '+ct+'회를 이용하셨습니다.');window.open('', 'result_var', 'width=640, height=600');F_result()}" onfocus="blur()"></map></div>