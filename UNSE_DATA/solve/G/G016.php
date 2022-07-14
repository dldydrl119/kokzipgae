<?

$sql ="select DB_data, DB_numerical from G016 where DB_express = '". $woon12_daygi ."-". $y12woonsung ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();


for ($i = 0 ; $i<$all; $i++) {
       mysql_data_seek($query,$i);
       $row = mysql_fetch_array($query);
       $Tb_G016 = stripslashes($row[DB_data]);
       $Tb_G016_numerical = stripslashes($row[DB_numerical]);
}


?>