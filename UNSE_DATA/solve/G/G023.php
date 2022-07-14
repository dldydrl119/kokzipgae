
<?

$my_year_he = $my_year_h_org.$my_year_e_org;
$your_year_he = $your_year_h_org.$your_year_e_org;

if (($my_year_he == "A11") || ($my_year_he == "B12") || ($my_year_he == "I07") || ($my_year_he == "J08") || ($my_year_he == "G03") || ($my_year_he == "H04") || ($my_year_he == "A05") || ($my_year_he == "B06") || ($my_year_he == "I01") || ($my_year_he == "J02") || ($my_year_he == "G09") || ($my_year_he == "H10")) {
     $my_mokwha = "금";
}
if (($my_year_he == "C01") || ($my_year_he == "D02") || ($my_year_he == "A09") || ($my_year_he == "B10") || ($my_year_he == "E11") || ($my_year_he == "F12") || ($my_year_he == "C07") || ($my_year_he == "D08") || ($my_year_he == "A03") || ($my_year_he == "B04") || ($my_year_he == "E05") || ($my_year_he == "F06")) {
     $my_mokwha = "화";
}
if (($my_year_he == "E03") || ($my_year_he == "F04") || ($my_year_he == "I05") || ($my_year_he == "J06") || ($my_year_he == "G01") || ($my_year_he == "H02") || ($my_year_he == "E09") || ($my_year_he == "F10") || ($my_year_he == "I11") || ($my_year_he == "J12") || ($my_year_he == "G07") || ($my_year_he == "H08")) {
     $my_mokwha = "목";
}
if (($my_year_he == "G05") || ($my_year_he == "H06") || ($my_year_he == "E01") || ($my_year_he == "F02") || ($my_year_he == "C09") || ($my_year_he == "D10") || ($my_year_he == "G11") || ($my_year_he == "H12") || ($my_year_he == "E07") || ($my_year_he == "F08") || ($my_year_he == "C03") || ($my_year_he == "D04")) {
     $my_mokwha = "토";
}
if (($my_year_he == "C11") || ($my_year_he == "D12") || ($my_year_he == "A07") || ($my_year_he == "B08") || ($my_year_he == "I03") || ($my_year_he == "J04") || ($my_year_he == "C05") || ($my_year_he == "D06") || ($my_year_he == "A01") || ($my_year_he == "B02") || ($my_year_he == "I09") || ($my_year_he == "J10")) {
     $my_mokwha = "수";
}
#######################
if (($your_year_he == "A11") || ($your_year_he == "B12") || ($your_year_he == "I07") || ($your_year_he == "J08") || ($your_year_he == "G03") || ($your_year_he == "H04") || ($your_year_he == "A05") || ($your_year_he == "B06") || ($your_year_he == "I01") || ($your_year_he == "J02") || ($your_year_he == "G09") || ($your_year_he == "H10")) {
     $your_mokwha = "금";
}
if (($your_year_he == "C01") || ($your_year_he == "D02") || ($your_year_he == "A09") || ($your_year_he == "B10") || ($your_year_he == "E11") || ($your_year_he == "F12") || ($your_year_he == "C07") || ($your_year_he == "D08") || ($your_year_he == "A03") || ($your_year_he == "B04") || ($your_year_he == "E05") || ($your_year_he == "F06")) {
     $your_mokwha = "화";
}
if (($your_year_he == "E03") || ($your_year_he == "F04") || ($your_year_he == "I05") || ($your_year_he == "J06") || ($your_year_he == "G01") || ($your_year_he == "H02") || ($your_year_he == "E09") || ($your_year_he == "F10") || ($your_year_he == "I11") || ($your_year_he == "J12") || ($your_year_he == "G07") || ($your_year_he == "H08")) {
     $your_mokwha = "목";
}
if (($your_year_he == "G05") || ($your_year_he == "H06") || ($your_year_he == "E01") || ($your_year_he == "F02") || ($your_year_he == "C09") || ($your_year_he == "D10") || ($your_year_he == "G11") || ($your_year_he == "H12") || ($your_year_he == "E07") || ($your_year_he == "F08") || ($your_year_he == "C03") || ($your_year_he == "D04")) {
     $your_mokwha = "토";
}
if (($your_year_he == "C11") || ($your_year_he == "D12") || ($your_year_he == "A07") || ($your_year_he == "B08") || ($your_year_he == "I03") || ($your_year_he == "J04") || ($your_year_he == "C05") || ($your_year_he == "D06") || ($your_year_he == "A01") || ($your_year_he == "B02") || ($your_year_he == "I09") || ($your_year_he == "J10")) {
     $your_mokwha = "수";
}
##############################
//echo "$my_year_he/$your_year_he/$my_mokwha/$your_mokwha";


if ($sex == "남") {
             $result = $my_mokwha.$your_mokwha;
   }else{
             $result = $your_mokwha.$my_mokwha;		    
}		    


$sql = "SELECT DB_data FROM G023 WHERE DB_express = '".$result."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();


for ($i = 0 ; $i<$all; $i++) {
       mysql_data_seek($query,$i);
       $row = mysql_fetch_array($query);
       $Tb_G023 = stripslashes($row[DB_data]);
}
?>

