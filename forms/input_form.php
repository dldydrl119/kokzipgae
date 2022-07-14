		<table width="100%" cellpadding="0" cellspacing="0" class="">
			<tr>
				<tD><input type="hidden" name="ggggbb" value="1">
					<table cellpadding="0" cellspacing="0">
						<?
						if ($urlinfo == "name") {
						?>
			</tR>
			<tD width="107" height="27" align="center"  style="background-image:url('/images/input_img/inputTBG.gif'); background-repeat:no-repeat;"><b>성 별</b></tD>
			</tR>
		<? } else { ?>
			<tR>
				<tD width="90" height="27" align="center" class="unse_title_name"><b>이 름</b></tD>
			</tr>
		<? } ?>
		<tR>
			<tD height="25"></tD>
		</tr>
		<tR>
			<tD width="107" height="27" align="center" class="unse_title_name"><b>생년월일</b></tD>
		</tr>
		<tR>
			<tD height="25"></tD>
		</tr>
		<tR>
			<tD width="107" height="27" align="center" class="unse_title_name"><b>태어난 시간</b></tD>
		</tr>
		<tR>
			<tD height="25"></tD>
		</tr>
		<tR>
			<!-- <tD width="107" height="27" align="center" style="border-bottom: 1px solid #f0f0f0; background-repeat:no-repeat;"><b>평달/윤달</b></tD> -->
		</tr>
		</table>
		</td>
		<tD width="4"></tD>
		<td>
			<table cellpadding="0" cellspacing="0" bgcolor="#FFF" style="padding-left:1px;">
				<?
				if ($urlinfo == "name") {
				?>
					<tR>
						<td height="27" style="border-bottom: 1px solid #f0f0f0;"><input type="radio" name="sex" value="남" checked>남자 <input type="radio" name="sex" value="여">여자</td>
					</tr>
				<? } else { ?>
					<tR>
						<td height="27" style="border-bottom: 1px solid #f0f0f0; background: #fff;"><input class="inputb unse_user_name" type="text" name="user_name" value="" placeholder="성함을 입력해주세요"  no-repeat 95% 50%; onfocus="this.placeholder=''" onblur="this.placeholder='성함을 입력해주세요'" maxlength="12" size="12"></td>
						<td width="250" height="27">
							<div class="unse_box1">
								<input class="unse_button" type="radio" name="sex" value="남" checked onclick="chpart()">남자<input class="unse_button" type="radio" name="sex" value="여" onclick="chpart()">여자
							</div>
						</td>
					</tr>
				<? } ?>
				<tR>
					<tD height="25"></tD>
				</tr>
				<tR>
					<td height="27" style="border-bottom: 1px solid #f0f0f0; background: #fff; " class="unse_birth">
						<div class="unse_box">
							<select style="width: 50%;" name=year class="inputb unse_select">
								<SCRIPT LANGUAGE="JavaScript">
									var date = new Date();
									with(date) {
										var Cuyy = getFullYear();
										var Cumm = getMonth() + 1;
										var Cudd = getDate();
										var Cuhh = getHours();
										var Cumi = getMinutes();
									}

									for (n = Cuyy - 70; n <= Cuyy; n++) {
										s = "";
										if (n == Cuyy) s = " selected";
										document.write("<option value=" + n + s + ">" + n + "년");
									}
									
								</SCRIPT>

							</select>

							<span>
								<select name=month class="inputb unse_select">
									<script language="JavaScript">
										for (n = 1; n <= 12; n++) {
											s = "";
											dn = n;
											if (dn < 10) {
												dn = "0" + dn
											}
											if (n == Cumm) s = " selected";
											document.write("<option value=" + dn + s + ">" + n + "월");
										}
									</script>

								</select>
							</span>
						</div>
					</td>

					<td class="unse_birth unse_birth_right">
						<div class="unse_box1">
							<select name=day class="inputb unse_select" style="width: 80%;">
								<script language="JavaScript">
									for (n = 1; n <= 31; n++) {
										s = "";
										dn = n;
										if (dn < 10) {
											dn = "0" + dn
										}
										if (n == Cudd) s = " selected";
										document.write("<option value=" + dn + s + ">" + n + "일");
									}
								</script>
							</select>
						</div>
					</td>

					<input type=hidden name="min" value='00'>
		</td>
		</tr>
		<tR>
			<tD height="25"></tD>
		</tr>
		<tR>
			<td height="27" style="border-bottom: 1px solid #f0f0f0; background: #fff; " class="unse_birth">
				<div class="unse_box" style="width: 91%;">
					<select name="hour" class="inputb unse_select" style="width: 100%; text-align-last: auto; -ms-text-aling-last:auto; color:#797979!important; font-family:sans-serif;">
						<option value="0" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;모름</option>
						<option value="01"> 子 (23:30 ~ 01:29)</option>
						<option value="02"> 丑 (01:30 ~ 03:29)</option>
						<option value="04"> 寅 (03:30 ~ 05:29)</option>
						<option value="06"> 卯 (05:30 ~ 07:29)</option>
						<option value="08"> 辰 (07:30 ~ 09:29)</option>
						<option value="10"> 巳 (09:30 ~ 11:29)</option>
						<option value="12"> 午 (11:30 ~ 13:29)</option>
						<option value="14"> 未 (13:30 ~ 15:29)</option>
						<option value="16"> 申 (15:30 ~ 17:29)</option>
						<option value="18"> 酉 (17:30 ~ 19:29)</option>
						<option value="20"> 戌 (19:30 ~ 21:29)</option>
						<option value="22"> 亥 (21:30 ~ 23:29)</option>
					</select>
				</div>
			</td>

			<td width="320" style="border-bottom: 1px solid #f0f0f0; background: #fff;" class="unse_birth_right">
				<div class="unse_box1">
					<input type="radio" name="solunar" value="solar" checked>양력 <input type="radio" name="solunar" value="lunar">음력
				</div>
			</td>
		</tr>
		<tR>
			<tD height="25"></tD>
		</tr>
		<tR>
			<!-- <td width="320" height="27" style="border-bottom: 1px solid #f0f0f0; background: #fff;"><input type="radio" name="youn" value="0" checked>평달 <input type="radio" name="youn" value="1">윤달</td> -->
		</tR>
		</tablE>
		</tD>
		</tr>
		</table>


		<?
		$MyStrPar = explode("|", $_COOKIE[mystring]);
		$gender 	= $MyStrPar[0];
		$birthday	= $MyStrPar[1];
		$solunar	= $MyStrPar[2];
		$yoon			= $MyStrPar[3];
		if ($birthday) {
			$userday = explode("-", $birthday);
		?>

			<script>
				f = document.signform;
				m_gender = "<?= $gender ?>";
				if (m_gender == 1) f.sex[0].checked = true;
				if (m_gender == 2) f.sex[1].checked = true;
				f.year.value = "<?= $userday[0] ?>";
				f.month.value = "<?= $userday[1] ?>";
				f.day.value = "<?= $userday[2] ?>";
				f.hour.value = "<?= $userday[3] ?>";
				f.min.value = "<?= $userday[4] ?>";
				solunar = "<?= $solunar ?>";
				if (solunar == 1) f.solunar[0].checked = true;
				if (solunar == 2) f.solunar[1].checked = true;
				yoon = "<?= $yoon ?>";
				if (yoon == 1) f.youn[0].checked = true;
				if (yoon == 2) f.youn[1].checked = true;
			</script>
		<?
		}
		?>




		<SCRIPT LANGUAGE="JavaScript">
			<!--
			function chpart() {
				if (signform.ggggbb.value != '1') {
					cbmass(1)
				}
			}
			//
			-->
		</SCRIPT>