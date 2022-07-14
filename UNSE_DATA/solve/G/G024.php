<?

if($sex == "남"){ 
	$my_sex = "남";
	$your_sex = "여";

	$choie_data_1 = "DB_data_m";
	$choie_data_2 = "DB_data_w";
}Else{
	$my_sex = "여";
	$your_sex = "남";

	$choie_data_1 = "DB_data_w";
	$choie_data_2 = "DB_data_m";
}

Function F_DDI_str22($str_var){
	switch($str_var){
		Case "子" : $no = 1; break;
		Case "丑" : $no = 2; break;
		Case "寅" : $no = 3; break;
		Case "卯" : $no = 4; break;
		Case "辰" : $no = 5; break;
		Case "巳" : $no = 6; break;
		Case "午" : $no = 7; break;
		Case "未" : $no = 8; break;
		Case "申" : $no = 9; break;
		Case "酉" : $no = 10; break;
		Case "戌" : $no = 11; break;
		Case "亥" : $no = 12; break;
	}
	
	return $no;
}

If($my_sex == "남"){
	$DB_express_var1 = "DB_express";
	$DB_express_var2 = "DB_express_1";
}Else{
	$DB_express_var1 = "DB_express_1";
	$DB_express_var2 = "DB_express";
} 

If($my_day_e == $your_day_e){
	switch($your_day_e){
		Case "子" : $your_day_e = "亥"; break;
		Case "丑" : $your_day_e = "子"; break;
		Case "寅" : $your_day_e = "丑"; break;
		Case "卯" : $your_day_e = "寅"; break;
		Case "辰" : $your_day_e = "卯"; break;
		Case "巳" : $your_day_e = "辰"; break;
		Case "午" : $your_day_e = "巳"; break;
		Case "未" : $your_day_e = "午"; break;
		Case "申" : $your_day_e = "未"; break;
		Case "酉" : $your_day_e = "申"; break;
		Case "戌" : $your_day_e = "酉"; break;
		Case "亥" : $your_day_e = "戌"; break;
		default : $your_day_e = "亥"; break;
	} 
} 

$sql = "SELECT ".$choie_data_1." as result_var FROM G024 WHERE ".$DB_express_var1." = '".$my_day_e.$my_sex."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();


for ($i = 0 ; $i<$all; $i++) {
       mysql_data_seek($query,$i);
       $row = mysql_fetch_array($query);
       $Tb_G024_1 = stripslashes($row[result_var]);
}

$sql = "SELECT ".$choie_data_2." as result_var FROM G024 WHERE ".$DB_express_var2." = '".$your_day_e.$your_sex."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();


for ($i = 0 ; $i<$all; $i++) {
       mysql_data_seek($query,$i);
       $row = mysql_fetch_array($query);
       $Tb_G024_2 = stripslashes($row[result_var]);
}

if($sex == "남"){ 
	$Tb_G024 = $Tb_G024_1."<BR><BR>".$Tb_G024_2;
}Else{
	$Tb_G024 = $Tb_G024_2."<BR><BR>".$Tb_G024_1;
}
?>
