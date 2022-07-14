<?
$signdate = date("Ymd");

$sql = "SELECT * FROM mansedata WHERE no = '$signdate'";
if (!$sql) {
   error("QUERY_ERROR");
}

$query = mysql_query($sql);
$all = mysql_affected_rows();

if (!$all) {
  error("QUERY_ERROR");
}

		for ($i = 0 ; $i<$all; $i++) {
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$year_h = stripslashes($row[year_h]);
         		}
$temp_03 = $year_h; 
if ($temp_03==""){$temp_03 = 'B';}


?>

