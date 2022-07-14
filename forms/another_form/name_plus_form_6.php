
				<table width=430 border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>

					<input type=hidden name=name_1 value='<?=$name_1?>'>
					<input type=hidden name=name_2 value='<?=$name_2?>'>
					<input type=hidden name=name_3 value='<?=$name_3?>'>
					<input type=hidden name=name_4 value='<?=$name_4?>'>
					<input type=hidden name=name_5 value='<?=$name_5?>'>

					<input type=hidden name=hangul_1 value='<?=$hangul1?>'>
					<input type=hidden name=hangul_2 value='<?=$hangul2?>'>
					<input type=hidden name=hangul_3 value='<?=$hangul3?>'>
					<input type=hidden name=hangul_4 value='<?=$hangul4?>'>
					<input type=hidden name=hangul_5 value='<?=$hangul5?>'>
					
					<input type=hidden name=showInputFN2 value='<?=$showInputFN2?>'>
					<input type=hidden name=showInputNN2 value='<?=$showInputNN2?>'>
					<input type=hidden name=showInputNN3 value='<?=$showInputNN3?>'>
					<tr>
						<td width="455" height="123" style="background-image:url('/UNSE_DATA/images/name_img/input_bg3.jpg');background-repeat:no-repeat;">
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td width="62"></tD>
								<?S_input_BOX("1")?>
								<td width="5"></tD>
<?If($showInputFN2 == "1"){?><?S_input_BOX("2")?><?}?>
							</tr>
						</table>
						</tD>
					</tR>
				</table>