<?
$my_year_he = $my_year_h_org.$my_year_e_org;
$your_year_he = $your_year_h_org.$your_year_e_org;

if(($my_year_he == "A11") || ($my_year_he == "B12") || ($my_year_he == "I07") || ($my_year_he == "J08") || ($my_year_he == "G03") || ($my_year_he == "H04") || ($my_year_he == "A05") || ($my_year_he == "B06") || ($my_year_he == "I01") || ($my_year_he == "J02") || ($my_year_he == "G09") || ($my_year_he == "H10")){
	$my_mokwha = "금";
}

if(($my_year_he == "C01") || ($my_year_he == "D02") || ($my_year_he == "A09") || ($my_year_he == "B10") || ($my_year_he == "E11") || ($my_year_he == "F12") || ($my_year_he == "C07") || ($my_year_he == "D08") || ($my_year_he == "A03") || ($my_year_he == "B04") || ($my_year_he == "E05") || ($my_year_he == "F06")){
	$my_mokwha = "화";
}

if(($my_year_he == "E03") || ($my_year_he == "F04") || ($my_year_he == "I05") || ($my_year_he == "J06") || ($my_year_he == "G01") || ($my_year_he == "H02") || ($my_year_he == "E09") || ($my_year_he == "F10") || ($my_year_he == "I11") || ($my_year_he == "J12") || ($my_year_he == "G07") || ($my_year_he == "H08")){
	$my_mokwha = "목";
}

if(($my_year_he == "G05") || ($my_year_he == "H06") || ($my_year_he == "E01") || ($my_year_he == "F02") || ($my_year_he == "C09") || ($my_year_he == "D10") || ($my_year_he == "G11") || ($my_year_he == "H12") || ($my_year_he == "E07") || ($my_year_he == "F08") || ($my_year_he == "C03") || ($my_year_he == "D04")){
	$my_mokwha = "토";
}

if(($my_year_he == "C11") || ($my_year_he == "D12") || ($my_year_he == "A07") || ($my_year_he == "B08") || ($my_year_he == "I03") || ($my_year_he == "J04") || ($my_year_he == "C05") || ($my_year_he == "D06") || ($my_year_he == "A01") || ($my_year_he == "B02") || ($my_year_he == "I09") || ($my_year_he == "J10")){
	$my_mokwha = "수";
}


if(($your_year_he == "A11") || ($your_year_he == "B12") || ($your_year_he == "I07") || ($your_year_he == "J08") || ($your_year_he == "G03") || ($your_year_he == "H04") || ($your_year_he == "A05") || ($your_year_he == "B06") || ($your_year_he == "I01") || ($your_year_he == "J02") || ($your_year_he == "G09") || ($your_year_he == "H10")){
	$your_mokwha = "금";
}

if(($your_year_he == "C01") || ($your_year_he == "D02") || ($your_year_he == "A09") || ($your_year_he == "B10") || ($your_year_he == "E11") || ($your_year_he == "F12") || ($your_year_he == "C07") || ($your_year_he == "D08") || ($your_year_he == "A03") || ($your_year_he == "B04") || ($your_year_he == "E05") || ($your_year_he == "F06")){
	$your_mokwha = "화";
}

if(($your_year_he == "E03") || ($your_year_he == "F04") || ($your_year_he == "I05") || ($your_year_he == "J06") || ($your_year_he == "G01") || ($your_year_he == "H02") || ($your_year_he == "E09") || ($your_year_he == "F10") || ($your_year_he == "I11") || ($your_year_he == "J12") || ($your_year_he == "G07") || ($your_year_he == "H08")){
	$your_mokwha = "목";
}

if(($your_year_he == "G05") || ($your_year_he == "H06") || ($your_year_he == "E01") || ($your_year_he == "F02") || ($your_year_he == "C09") || ($your_year_he == "D10") || ($your_year_he == "G11") || ($your_year_he == "H12") || ($your_year_he == "E07") || ($your_year_he == "F08") || ($your_year_he == "C03") || ($your_year_he == "D04")){
	$your_mokwha = "토";
}

if(($your_year_he == "C11") || ($your_year_he == "D12") || ($your_year_he == "A07") || ($your_year_he == "B08") || ($your_year_he == "I03") || ($your_year_he == "J04") || ($your_year_he == "C05") || ($your_year_he == "D06") || ($your_year_he == "A01") || ($your_year_he == "B02") || ($your_year_he == "I09") || ($your_year_he == "J10")){
	$your_mokwha = "수";
}

switch($my_mokwha){
	Case "목" : $my_mokwha = 1; break;
	Case "화" : $my_mokwha = 2; break;
	Case "토" : $my_mokwha = 3; break;
	Case "금" : $my_mokwha = 4; break;
	Case "수" : $my_mokwha = 5; break;
}

switch($your_mokwha){
	Case "목" : $your_mokwha = 1; break;
	Case "화" : $your_mokwha = 2; break;
	Case "토" : $your_mokwha = 3; break;
	Case "금" : $your_mokwha = 4; break;
	Case "수" : $your_mokwha = 5; break;
}

if($sex == "남"){
	$result = $my_mokwha * $your_mokwha;
}Else{
	$result = $your_mokwha * $my_mokwha;    
}

If($result == 0){$result = 25;}

$sql = "SELECT DB_data FROM G022 WHERE DB_num = '".$result."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();


for ($i = 0 ; $i<$all; $i++) {
       mysql_data_seek($query,$i);
       $row = mysql_fetch_array($query);
       $Tb_G022 = stripslashes($row[DB_data]);
}

$Tb_G022 = str_replace("<FONT color=#0099ff>", "", $Tb_G022);
$Tb_G022 = str_replace("<FONT color=#0099ff>", "", $Tb_G022);
$Tb_G022 = str_replace("<U>", "", $Tb_G022);
$Tb_G022 = str_replace("<UL>", "", $Tb_G022);
$Tb_G022 = str_replace("</UL>", "", $Tb_G022);
$Tb_G022 = str_replace("<STRONG>", "", $Tb_G022);
$Tb_G022 = str_replace("<FONT color=#ff6600>", "", $Tb_G022);

$Tb_G022_split = explode(".", $Tb_G022);

for($i=0;$i<sizeof($Tb_G022_split);$i++){
	If($i == 0){
		$Tb_G022 = $Tb_G022_split[0];
	}Else{
		$Tb_G022 = $Tb_G022."<BR><BR>".$Tb_G022_split[$i];
	}
}
?>