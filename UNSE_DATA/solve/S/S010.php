<?


$P=$my_day_e_org;

if($P==0){$P=12;}

$Tb_S010_split = explode("|", F_woonday("S010", $P, $Xyeargi));

$Tb_S010 = $Tb_S010_split[0];
$Tb_S010_numerical = $Tb_S010_split[1];

?>