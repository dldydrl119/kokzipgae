<?
switch($toyeargi){
	case 1 : $toyeargi_oh="5" ; $toyeargi_EY = 2; break;
	case 2 : $toyeargi_oh="3" ; $toyeargi_EY = 1; break;
	case 3 : $toyeargi_oh="1" ; $toyeargi_EY = 1; break;
	case 4 : $toyeargi_oh="1" ; $toyeargi_EY = 1; break;
	case 5 : $toyeargi_oh="3" ; $toyeargi_EY = 2; break;
	case 6 : $toyeargi_oh="2" ; $toyeargi_EY = 2; break;
	case 7 : $toyeargi_oh="2" ; $toyeargi_EY = 2; break;
	case 8 : $toyeargi_oh="3" ; $toyeargi_EY = 1; break;
	case 9 : $toyeargi_oh="4" ; $toyeargi_EY = 1; break;
	case 10 : $toyeargi_oh="4" ; $toyeargi_EY = 2; break;
	case 11 : $toyeargi_oh="3" ; $toyeargi_EY = 1; break;
	default : $toyeargi_oh="5" ; $toyeargi_EY = 2; break;
}


if($Xdaygan%2==1)
	{	$toYC_sibsin="02";
		if($Xdaygan==$toyeargan){$toYC_sibsin="01";}
		if(($Xdaygan+1) %10==$toyeargan){$toYC_sibsin="02";}
		if(($Xdaygan+2) %10==$toyeargan){$toYC_sibsin="03";}
		if(($Xdaygan+3) %10==$toyeargan){$toYC_sibsin="04";}
		if(($Xdaygan+4) %10==$toyeargan){$toYC_sibsin="05";}
		if(($Xdaygan+5) %10==$toyeargan){$toYC_sibsin="06";}
		if(($Xdaygan+6) %10==$toyeargan){$toYC_sibsin="07";}
		if(($Xdaygan+7) %10==$toyeargan){$toYC_sibsin="08";}
		if(($Xdaygan+8) %10==$toyeargan){$toYC_sibsin="09";}

	}
else
	{

		$toYC_sibsin="02";
		if($Xdaygan==$toyeargan){$toYC_sibsin="01";}
		if(($Xdaygan+1) %10==$toyeargan){$toYC_sibsin="04";}
		if(($Xdaygan+2) %10==$toyeargan){$toYC_sibsin="03";}
		if(($Xdaygan+3) %10==$toyeargan){$toYC_sibsin="06";}
		if(($Xdaygan+4) %10==$toyeargan){$toYC_sibsin="05";}
		if(($Xdaygan+5) %10==$toyeargan){$toYC_sibsin="08";}
		if(($Xdaygan+6) %10==$toyeargan){$toYC_sibsin="07";}
		if(($Xdaygan+7) %10==$toyeargan){$toYC_sibsin="10";}
		if(($Xdaygan+8) %10==$toyeargan){$toYC_sibsin="09";}

	}


		$toyeargan_oh="5";


	if($toyeargan==1 || $toyeargan==2){$toyeargan_oh="1";}
	if($toyeargan==3 || $toyeargan==4){$toyeargan_oh="2";}
	if($toyeargan==5 || $toyeargan==6){$toyeargan_oh="3";}
	if($toyeargan==7 || $toyeargan==8){$toyeargan_oh="4";}


	$woon_y = "03";	

if($toyeargan_oh==1){
	if($yong_code==1||$hee_code==1){$woon_y = "01";}
	if($kee_code==1||$goo_code==1){$woon_y = "02";}
}
if($toyeargan_oh==2){
	if($yong_code==2||$hee_code==2){$woon_y = "01";}
	if($kee_code==2||$goo_code==2){$woon_y = "02";}
}
if($toyeargan_oh==3){
	if($yong_code==3||$hee_code==3){$woon_y = "01";}
	if($kee_code==3||$goo_code==3){$woon_y = "02";}
}
if($toyeargan_oh==4){
	if($yong_code==4||$hee_code==4){$woon_y = "01";}
	if($kee_code==4||$goo_code==4){$woon_y = "02";}
}
if($toyeargan_oh==5){
	if($yong_code==5||$hee_code==5){$woon_y = "01";}
	if($kee_code==5||$goo_code==5){$woon_y = "02";}
}




if($toyeargi_oh==$Xdaygan_oh){$toYG_sibsin = "02";if($Xdaygan % 2 ==0 && $toyeargi_EY==2){$toYG_sibsin = "01";}}
if($toyeargi_oh==($Xdaygan_oh+1)%5){$toYG_sibsin = "04";if($Xdaygan % 2 ==0 && $toyeargi_EY==2){$toYG_sibsin = "03";}}
if($toyeargi_oh==($Xdaygan_oh+2)%5){$toYG_sibsin = "06";if($Xdaygan % 2 ==0 && $toyeargi_EY==2){$toYG_sibsin = "05";}}
if($toyeargi_oh==($Xdaygan_oh+3)%5){$toYG_sibsin = "08";if($Xdaygan % 2 ==0 && $toyeargi_EY==2){$toYG_sibsin = "07";}}
if($toyeargi_oh==($Xdaygan_oh+4)%5){$toYG_sibsin = "10";if($Xdaygan % 2 ==0 && $toyeargi_EY==2){$toYG_sibsin = "09";}}



	$woon_z = "03";	

if($toyeargi_oh==1){
	if($yong_code==1||$hee_code==1){$woon_z = "01";}
	if($kee_code==1||$goo_code==1){$woon_z = "02";}
}
if($toyeargi_oh==2){
	if($yong_code==2||$hee_code==2){$woon_z = "01";}
	if($kee_code==2||$goo_code==2){$woon_z = "02";}
}
if($toyeargi_oh==3){
	if($yong_code==3||$hee_code==3){$woon_z = "01";}
	if($kee_code==3||$goo_code==3){$woon_z = "02";}
}
if($toyeargi_oh==4){
	if($yong_code==4||$hee_code==4){$woon_z = "01";}
	if($kee_code==4||$goo_code==4){$woon_z = "02";}
}
if($toyeargi_oh==5){
	if($yong_code==5||$hee_code==5){$woon_z = "01";}
	if($kee_code==5||$goo_code==5){$woon_z = "02";}
}

if($toYC_sibsin==""){$toYC_sibsin="0".rand(1,3);}
if($toYG_sibsin==""){$toYG_sibsin="0".rand(1,3);}

$sql = "select DB_data from S013 where DB_express = '". $toYC_sibsin ."-". $woon_y ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S013aa = stripslashes($row[DB_data]);
}

$sql = "select DB_data, DB_numerical from S013 where DB_express = '". $toYG_sibsin ."-". $woon_z ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S013bb = stripslashes($row[DB_data]);
	$Tb_S013_numerical = stripslashes($row[DB_numerical]);
}


$Tb_S013=$Tb_S013aa.$Tb_S013bb;





?> 