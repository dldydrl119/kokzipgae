 <?
include_once "f_Saju.php";

$sigi_baeyeul=",자,축,인,묘,진,사,오,미,신,유,술,해,야자";
$sigi_baeyeul=explode(",", $sigi_baeyeul);

If($solunar == 2){ //'음력을
	$solunar =  1;
}elseIf($solunar == 1){
	$solunar =  2;
}

If($sex == "남"){
	$sex_2 = "1";
}else{
	$sex_2 = "2";
}

$SoloSaju=b_saju_Click($sex_2, $solunar , $request_year, $request_month, $request_day,  $request_hour ,$request_min,"");//'사주 호출
//$SoloSaju=b_saju_Click($sex_2, $solunar , $request_year, $request_month, $request_day,  $request_hour ,$request_min,"");//'사주 호출

//echo $SoloSaju[0] ." _ ".$SoloSaju[1] ." _ ".$SoloSaju[2] ." _ ".$SoloSaju[3] ." _ ".$SoloSaju[4];

$moks = $SoloSaju[1];

$sSajuArr = explode("|", $SoloSaju[0]);

/*$yeargan = $my_year_h;	//'년간
$yeargi = $my_year_e;	//'년지
$monthgan = $my_month_h;	//'월간
$monthgi = $my_month_e;	//'월지

$daygan = $my_day_h;	//'일간
$daygi = $my_day_e;	//'일지
$timegan = $my_hour_h;	//'일간
$timegi = $my_hour_e;	//'일지
*/
$yeargan = $sSajuArr[0];	//'년간
$yeargi = $sSajuArr[1];	//'년지
$monthgan = $sSajuArr[2];	//'월간
$monthgi = $sSajuArr[3];	//'월지

$daygan = $sSajuArr[4];	//'일간
$daygi = $sSajuArr[5];	//'일지
$timegan = $sSajuArr[6];	//'일간
$timegi = $sSajuArr[7];	//'일지


//'response.write re_yukchin($monthgi,10,$daygan)

$dae1gan	=$sSajuArr[8];
$dae1gi		=$sSajuArr[9];
$dae2gan	=$sSajuArr[10];
$dae2gi		=$sSajuArr[11];
$dae3gan	=$sSajuArr[12];
$dae3gi		=$sSajuArr[13];
$dae4gan	=$sSajuArr[14];
$dae4gi		=$sSajuArr[15];
$dae5gan	=$sSajuArr[16];
$dae5gi		=$sSajuArr[17];
$dae6gan	=$sSajuArr[18];
$dae6gi		=$sSajuArr[19];
$dae7gan	=$sSajuArr[20];
$dae7gi		=$sSajuArr[21];
$dae8gan	=$sSajuArr[22];
$dae8gi		=$sSajuArr[23];

$yYongs = explode("|", $SoloSaju[2]);

$Xyeargan=XcodeGan($yeargan);
$Xmonthgan=XcodeGan($monthgan);
$Xdaygan=XcodeGan($daygan);
$Xtimegan=XcodeGan($timegan);


$Xyeargi=XcodeGi($yeargi);
$Xmonthgi=XcodeGi($monthgi);
$Xdaygi=XcodeGi($daygi);
$Xtimegi=XcodeGi($timegi);

$ilgi_baeyeul= $Xdaygi - 1;
$ilgan_baeyeul = $Xdaygan - 1;

$sigi=$sigi_baeyeul[$Xtimegi];

If($Xyeargan ==1 || $Xyeargan ==2){
$Xyeargan_oh="1";
}elseIf($Xyeargan==3 || $Xyeargan==4){
$Xyeargan_oh="2";
}elseIf($Xyeargan==5 || $Xyeargan==6){
$Xyeargan_oh="3";
}elseIf($Xyeargan==7 || $Xyeargan==8){ 
$Xyeargan_oh="4";
}else{ 
$Xyeargan_oh="5";
}

If($Xyeargi==1 || $Xyeargi==12){
$Xyeargi_oh="5";
}elseIf($Xyeargi==2 || $Xyeargi==5){
$Xyeargi_oh="3";
}elseIf($Xyeargi==3 || $Xyeargi==4){
$Xyeargi_oh="1";
}elseIf($Xyeargi==6 || $Xyeargi==7){
$Xyeargi_oh="2";
}elseIf($Xyeargi==9 || $Xyeargi==10){
$Xyeargi_oh="4";
}else{ 
$Xyeargi_oh="3";
}


If($Xmonthgan==1 || $Xmonthgan==2){
$Xmonthgan_oh="1";
}elseIf($Xmonthgan==3 || $Xmonthgan==4){
$Xmonthgan_oh="2";
}elseIf($Xmonthgan==5 || $Xmonthgan==6){
$Xmonthgan_oh="3";
}elseIf($Xmonthgan==7 || $Xmonthgan==8){
$Xmonthgan_oh="4";
}else{ 
$Xmonthgan_oh="5";
}

If($Xmonthgi==1 || $Xmonthgi==12){
$Xmonthgi_oh="5";
}elseIf($Xmonthgi==2 || $Xmonthgi==5){
$Xmonthgi_oh="3";
}elseIf($Xmonthgi==3 || $Xmonthgi==4){
$Xmonthgi_oh="1";
}elseIf($Xmonthgi==6 || $Xmonthgi==7){
$Xmonthgi_oh="2";
}elseIf($Xmonthgi==9 || $Xmonthgi==10){
$Xmonthgi_oh="4";
}else{ 
$Xmonthgi_oh="3";
}



If($Xdaygan==1 || $Xdaygan==2){
$Xdaygan_oh="1";
}elseIf($Xdaygan==3 || $Xdaygan==4){
$Xdaygan_oh="2";
}elseIf($Xdaygan==5 || $Xdaygan==6){
$Xdaygan_oh="3";
}elseIf($Xdaygan==7 || $Xdaygan==8){
$Xdaygan_oh="4";
}else{ 
$Xdaygan_oh="5";
}


If($Xdaygi==1 || $Xdaygi==12){
$Xdaygi_oh="5";
}elseIf($Xdaygi==2 || $Xdaygi==5){
$Xdaygi_oh="3";
}elseIf($Xdaygi==3 || $Xdaygi==4){ 
$Xdaygi_oh="1";
}elseif($Xdaygi==6 || $Xdaygi==7){
$Xdaygi_oh="2";
}elseif($Xdaygi==9 || $Xdaygi==10){
$Xdaygi_oh="4";
}else{ 
$Xdaygi_oh="3";
}


$ilgan = $daygan;

if($ilgan==$chungan[0] || $ilgan==$chungan[5]){

    if($sigi=="자"){	
	$Xtimegan_oh="1"; $Xtimegi_oh="5";
    }elseif($sigi=="축"){ 
	$Xtimegan_oh="1"; $Xtimegi_oh="3";
    }elseif($sigi=="인"){
	$Xtimegan_oh="2"; $Xtimegi_oh="1";
    }elseif($sigi=="묘"){ 
	$Xtimegan_oh="2"; $Xtimegi_oh="1";
    }elseif($sigi=="진"){ 
	$Xtimegan_oh="3"; $Xtimegi_oh="3";
    }elseif($sigi=="사"){ 
	$Xtimegan_oh="3"; $Xtimegi_oh="2";
    }elseif($sigi=="오"){ 
	$Xtimegan_oh="4"; $Xtimegi_oh="2";
    }elseif($sigi=="미"){ 
	$Xtimegan_oh="4"; $Xtimegi_oh="3";
    }elseif($sigi=="신"){ 
	$Xtimegan_oh="5"; $Xtimegi_oh="4";
    }elseif($sigi=="유"){ 
	$Xtimegan_oh="5"; $Xtimegi_oh="4";
    }elseif($sigi=="술"){ 
	$Xtimegan_oh="1"; $Xtimegi_oh="3";
    }elseif($sigi=="해"){
	$Xtimegan_oh="1"; $Xtimegi_oh="5";
    }else{	 
	$Xtimegan_oh="2"; $Xtimegi_oh="5";
	}

}elseif($ilgan==$chungan[1] || $ilgan==$chungan[6]){

    if($sigi=="자"){
	$Xtimegan_oh="2"; $Xtimegi_oh="5";
    }elseIf($sigi=="축"){ 
	$Xtimegan_oh="2"; $Xtimegi_oh="3";
    }elseIf($sigi=="인"){ 
	$Xtimegan_oh="3"; $Xtimegi_oh="1";
    }elseIf($sigi=="묘"){  
	$Xtimegan_oh="3"; $Xtimegi_oh="1";
    }elseIf($sigi=="진"){  
	$Xtimegan_oh="4"; $Xtimegi_oh="3";
    }elseIf($sigi=="사"){  
	$Xtimegan_oh="4"; $Xtimegi_oh="2";
    }elseIf($sigi=="오"){  
	$Xtimegan_oh="5"; $Xtimegi_oh="2";
    }elseIf($sigi=="미"){ 
	$Xtimegan_oh="5"; $Xtimegi_oh="3";
    }elseIf($sigi=="신"){  
	$Xtimegan_oh="1"; $Xtimegi_oh="4";
    }elseIf($sigi=="유"){ 
	$Xtimegan_oh="1"; $Xtimegi_oh="4";
    }elseIf($sigi=="술"){  
	$Xtimegan_oh="2"; $Xtimegi_oh="3";
    }elseIf($sigi=="해"){  
	$Xtimegan_oh="2"; $Xtimegi_oh="5";
    }else{					    
	$Xtimegan_oh="3"; $Xtimegi_oh="5";
	}

}elseif($ilgan==$chungan[2] || $ilgan==$chungan[7]){

    If($sigi=="자"){ 
	$Xtimegan_oh="3"; $Xtimegi_oh="5";
    }elseif($sigi=="축"){
	$Xtimegan_oh="3"; $Xtimegi_oh="3";
    }elseif($sigi=="인"){ 
	$Xtimegan_oh="4"; $Xtimegi_oh="1";
    }elseif($sigi=="묘"){ 
	$Xtimegan_oh="4"; $Xtimegi_oh="1";
    }elseif($sigi=="진"){ 
	$Xtimegan_oh="5"; $Xtimegi_oh="3";
    }elseif($sigi=="사"){ 
	$Xtimegan_oh="5"; $Xtimegi_oh="2";
    }elseif($sigi=="오"){ 
	$Xtimegan_oh="1"; $Xtimegi_oh="2";
    }elseif($sigi=="미"){
	$Xtimegan_oh="1"; $Xtimegi_oh="3";
    }elseif($sigi=="신"){ 
	$Xtimegan_oh="2"; $Xtimegi_oh="4";
    }elseif($sigi=="유"){ 
	$Xtimegan_oh="2"; $Xtimegi_oh="4";
    }elseif($sigi=="술"){
	$Xtimegan_oh="3"; $Xtimegi_oh="3";
    }elseif($sigi=="해"){
	$Xtimegan_oh="3"; $Xtimegi_oh="5";
    }else{					   
	$Xtimegan_oh="4"; $Xtimegi_oh="5";
	}

}elseif($ilgan==$chungan[3] || $ilgan==$chungan[8]){

    If($sigi=="자"){  
	$Xtimegan_oh="4"; $Xtimegi_oh="5";
    }elseif($sigi=="축"){  
	$Xtimegan_oh="4"; $Xtimegi_oh="3";
    }elseif($sigi=="인"){  
	$Xtimegan_oh="5"; $Xtimegi_oh="1";
    }elseif($sigi=="묘"){  
	$Xtimegan_oh="5"; $Xtimegi_oh="1";
    }elseif($sigi=="진"){  
	$Xtimegan_oh="1"; $Xtimegi_oh="3";
    }elseif($sigi=="사"){  
	$Xtimegan_oh="1"; $Xtimegi_oh="2";
    }elseif($sigi=="오"){  
	$Xtimegan_oh="2"; $Xtimegi_oh="2";
    }elseif($sigi=="미"){  
	$Xtimegan_oh="2"; $Xtimegi_oh="3";
    }elseif($sigi=="신"){  
	$Xtimegan_oh="3"; $Xtimegi_oh="4";
    }elseif($sigi=="유"){  
	$Xtimegan_oh="3"; $Xtimegi_oh="4";
    }elseif($sigi=="술"){  
	$Xtimegan_oh="4"; $Xtimegi_oh="3";
    }elseif($sigi=="해" ){ 
	$Xtimegan_oh="4"; $Xtimegi_oh="5";
    }else{  
	$Xtimegan_oh="5"; $Xtimegi_oh="5";
	}

}else{

    If($sigi=="자"){ 
	$Xtimegan_oh="5"; $Xtimegi_oh="5";
    }elseif($sigi=="축" ){ 
	$Xtimegan_oh="5"; $Xtimegi_oh="3";
    }elseif($sigi=="인" ){ 
	$Xtimegan_oh="1"; $Xtimegi_oh="1";
    }elseif($sigi=="묘" ){
	$Xtimegan_oh="1"; $Xtimegi_oh="1";
    }elseif($sigi=="진" ){ 
	$Xtimegan_oh="2"; $Xtimegi_oh="3";
    }elseif($sigi=="사" ){ 
	$Xtimegan_oh="2"; $Xtimegi_oh="2";
    }elseif($sigi=="오" ){ 
	$Xtimegan_oh="3"; $Xtimegi_oh="2";
    }elseif($sigi=="미" ){
	$Xtimegan_oh="3"; $Xtimegi_oh="3";
    }elseif($sigi=="신" ){ 
	$Xtimegan_oh="4"; $Xtimegi_oh="4";
    }elseif($sigi=="유" ){ 
	$Xtimegan_oh="4"; $Xtimegi_oh="4";
    }elseif($sigi=="술" ){ 
	$Xtimegan_oh="5"; $Xtimegi_oh="3";
    }elseif($sigi=="해" ){
	$Xtimegan_oh="5"; $Xtimegi_oh="5";
    }else{  
	$Xtimegan_oh="1"; $Xtimegi_oh="5";
	}

}


$hansin = explode("-", $yYongs[0]);
$hansin = $hansin[0];

$goosin = explode("-", $yYongs[0]);
$goosin = $goosin[1];

$keesin = explode("-", $yYongs[0]);
$keesin = $keesin[2];

$heesin = explode("-", $yYongs[0]);
$heesin = $heesin[3];

$yongsin = explode("-", $yYongs[0]);
$yongsin = $yongsin[4];

$han_code = explode("-", $yYongs[1]);
$han_code = $han_code[0];

$goo_code = explode("-", $yYongs[1]);
$goo_code = $goo_code[1];

$kee_code = explode("-", $yYongs[1]);
$kee_code = $kee_code[2];

$hee_code = explode("-", $yYongs[1]);
$hee_code = $hee_code[3];

$yong_code = explode("-", $yYongs[1]);
$yong_code = $yong_code[4];


$yong_to_sibsin=$yYongs[2];

$yong_chungan=$yYongs[3];
$woon12_daygi = $yYongs[4];

$gongmang = gongmangF($daygan.$daygi);

  
  
If($solunar == 1){		//'음력일때

$byear=$buf[3];
$bmonth=$buf[4];
$bday= $buf[5];

}else{
	$bb=str_Replace("년","|", $SoloSaju[4]);
	$bb=str_Replace("월","|", $bb);
	$bb=str_Replace("일","|", $bb);
	$bb=str_Replace("시","|", $bb);
	$bb=str_Replace("분","|", $bb);
	$bb=str_Replace("초","|", $bb);
	
	$bbArr = explode("|", $bb);
	$byear=$bbArr[0];
	$bmonth=$bbArr[1];
	$bday=$bbArr[2];
}
?>