<table cellpadding="0" cellspacing="0" border="0" bgcolor="#FFFFFF" height=100% width=100%  valign=top >
<TR>
	<TD><img src="/images/right_img/right1.jpg"></TD>
</TR>
<TR>
	<TD  style="width:100%; height:100%; filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/right_img/right2.jpg', sizingMethod='scale')" valign="top">
	<TABLE cellpadding="0" cellspacing="0" border="0" width=100% valign="top">
	<TR>
		<TD><img src="/images/spacer.gif" width=15 height=0></TD><td></td>
	</TR>
	

	<tr><td>&nbsp;</td>
	
	<td>
<!--  -->
<div  style="position:absolute; z-index:15;">
<table cellpadding="0" cellspacing="0" width=100% height=100%>
<?if ($yeoe==1){$tal=17 ;}Else{ $tal=sizeof($menuNAME_split);}

Function leftlist($tal,$color){
If ($color=="#FFFFFF") { $pl=0;$pt=0;$dot="squre_dot2";} Else{ $pl=1;$pt=0;$dot="spacer";}

	global $menuNAME_split,$menuURL_split;
			For ($i = 0 ;$i<$tal;$i++){

				If (left($menuNAME_split[$i], 4) == "-br-"){
					
			?>
			<tR align=left>
				<tD style="padding:0px; padding-left:<?=12+$pl?>px;padding-top:<?=$pt?>" width=200%>&nbsp;&nbsp;<font color="<?=$color?>"><?=replace($menuNAME_split[$i], "-br-", "");?></font></tD>
			</tR>
			<?
				}Else{
					if ($urlinfo == "magic" || $urlinfo == "puungsu" || $urlinfo == "online" ){ $targetVar = "target='subiframe'";}
			?>
			<tR>
				<tD height="4"></tD>
			</tr>
			<tR align=left>
				<tD style="padding-left:<?=10+$pl?>;padding-top:<?=$pt?>"  width=100%><img src="/images/<?=$dot?>.gif" align="absmiddle" width=3><img src="/images/space.gif" width="7" align="absmiddle"><A href="<?=$menuURL_split[$i]?>" <?=$targetVar?>><font color="<?=$color?>"><?=$menuNAME_split[$i]?></FONT></a></tD>
			</tR>
			<?
			}
			}
}

leftlist($tal,"#FFFFFF");
?>

</table>
</div>
<img src="/images/spacer.gif" height=1><br>
<table cellpadding="0" cellspacing="0" width=100%>
<?leftlist($tal,"#330066");?>

</table>
<!--  -->
	</td></tr>

<?If ($yeoe==1){ $dbh=3;} Else{ $dbh="100%";}?>

<tr><td height=<?=$dbh?>></td></tr>



	<TR>
		<TD height=20><br><br><br><img src="/images/spacer.gif" width=0 height=25><br>
		
		
		
		</TD>
	</TR>
	</TABLE>
	
</TR>

<TR>
	<TD><div><img src="/images/right_img/right3.jpg"></div><br><br></TD>
</TR>
</TABLE>
