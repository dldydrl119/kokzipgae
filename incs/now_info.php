<?
$km = array();
$kd = array();
$kh = array();
$km = array();

//===========================================월
for($i = 1; $i < 13; $i++){
	if(strlen($i) == 1){
		$istr = "0".$i;
	}else{
		$istr = $i;
	}
	
	$km[$i] = $istr;
}

//===========================================일
for ($i=1; $i<32;$i++) {
	if(strlen($i) == 1){
		$istr = "0".$i;
	}else{
		$istr = $i;
	}
	
	$kd[$i] = $istr;
}

//===========================================시
for ($i=1; $i<25;$i++) {	
	if(strlen($i) == 1){
		$istr = "0".$i;
	}else{
		$istr = $i;
	}
	
	$kh[$i] = $istr;
}

//===========================================분
for ($i=1; $i<61;$i++) {	
	if(strlen($i) == 1){
		$istr = "0".$i;
	}else{
		$istr = $i;
	}
	
	$kmi[$i] = $istr;
}
?>