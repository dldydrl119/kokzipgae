 <?
function umyang_check($state){
	extract($GLOBALS);

	//echo "/$solunar/";

	if($state == "my"){
		$tot = $year.$month.$day;
		$youn_temp = $youn;
	}else{
		$tot = $your_year.$your_month.$your_day;
		$youn_temp = $your_youn;
	}
	
	switch ($solunar){
		case "lunar" :
			$sql = "SELECT * FROM mansedata WHERE umdate like  '$tot' and youn like  '$youn_temp'";

			 if (!$sql) {
			   error("QUERY_ERROR");
			}

			$query = mysql_query($sql);
			$all = mysql_affected_rows();

			if (!$all) {
			 error("UMDATE_ERROR");
			 exit;
			}else{
				for ($i = 0 ; $i<$all; $i++){
					mysql_data_seek($query,$i);
					$row = mysql_fetch_array($query);
					$no = stripslashes($row[no]);
					$umdate = stripslashes($row[umdate]);
				}
				
				if($state == "my"){
					$solar_year = substr($no,0,4);
					$solar_month = substr($no,4,2);
					$solar_day = substr($no,6,2);

					$lunar_year = substr($umdate,0,4);
					$lunar_month = substr($umdate,4,2);
					$lunar_day = substr($umdate,6,2);

					$umyang_check = $solar_year."-".$solar_month."-".$solar_day."-".$lunar_year."-".$lunar_month."-".$lunar_day;

					return $umyang_check;
				}else{
					$your_solar_year = substr($no,0,4);
					$your_solar_month = substr($no,4,2);
					$your_solar_day = substr($no,6,2);

					$your_lunar_year = substr($umdate,0,4);
					$your_lunar_month = substr($umdate,4,2);
					$your_lunar_day = substr($umdate,6,2);

					$umyang_check =  $your_solar_year."-".$your_solar_month."-".$your_solar_day."-".$your_lunar_year."-".$your_lunar_month."-".$your_lunar_day;

					return $umyang_check;
				}
			}

		case "solar" :
			$sql = "SELECT * FROM mansedata WHERE no like '$tot'";

			if (!$sql) {
			   error("QUERY_ERROR");
			}

			$query = mysql_query($sql);
			$all = mysql_affected_rows();

			if (!$all) {
			 error("YANGDATE_ERROR");
			 exit;
			}else{ 
				for ($i = 0 ; $i<$all; $i++){
					mysql_data_seek($query,$i);
					$row = mysql_fetch_array($query);
					$no = stripslashes($row[no]);
					$umdate = stripslashes($row[umdate]);
				}
				
				if($state == "my"){
					$solar_year = substr($no,0,4);
					$solar_month = substr($no,4,2);
					$solar_day = substr($no,6,2);   
					
					$lunar_year = substr($umdate,0,4);
					$lunar_month = substr($umdate,4,2);
					$lunar_day = substr($umdate,6,2);

					$umyang_check = $solar_year."-".$solar_month."-".$solar_day."-".$lunar_year."-".$lunar_month."-".$lunar_day;

					return $umyang_check;
				}else{			
					$your_solar_year = substr($no,0,4);
					$your_solar_month = substr($no,4,2);
					$your_solar_day = substr($no,6,2);   

					$your_lunar_year = substr($umdate,0,4);
					$your_lunar_month = substr($umdate,4,2);
					$your_lunar_day = substr($umdate,6,2);

					$umyang_check = $your_solar_year."-".$your_solar_month."-".$your_solar_day."-".$your_lunar_year."-".$your_lunar_month."-".$your_lunar_day;

					return $umyang_check;
				}
			}
	}
}
?>