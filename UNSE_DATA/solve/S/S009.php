<?


$todaygan_oh="5";
if($todaygan==1||$todaygan==2){$todaygan_oh="1";}
if($todaygan==3||$todaygan==4){$todaygan_oh="2";}
if($todaygan==5||$todaygan==6){$todaygan_oh="3";}
if($todaygan==7||$todaygan==8){$todaygan_oh="4";}


$p = $yong_code;

$p = 1;

$Tb_S009_split = explode("|", F_woonday("S009", $p.$todaygan_oh, $Xyeargi));


$Tb_S009_numerical = $Tb_S009_spli[1];

$Tb_S009 = $Tb_S009_split[0]

?>