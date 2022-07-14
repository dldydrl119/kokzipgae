<?


If($solunar == 2){ //'음력을
	$solunar =  1;
}ElseIf($solunar == 1){
	$solunar =  2;
} 

$YSoloSaju=b_saju_Click($sex_2, $solunar , $request_year, $request_month, $request_day,  $request_hour ,$request_min,"");

$YsSajuArr = explode("|", $YSoloSaju[0]);

$Yyeargan = $YsSajuArr[0];	//'년간
$Yyeargi = $YsSajuArr[1];	//'년지
$Ymonthgan = $YsSajuArr[2];	//'월간
$Ymonthgi = $YsSajuArr[3];	//'월지

$Ydaygan = $YsSajuArr[4];	//'일간
$Ydaygi = $YsSajuArr[5];	//'일지
$Ytimegan = $YsSajuArr[6];	//'일간
$Ytimegi = $YsSajuArr[7];	//'일지

//-=------------------------------------------------------
//echo $Ytimegan."-".$Ydaygan."-".$Ymonthgan."-".$Yyeargan."<br>";
//echo $Ytimegi."-".$Ydaygi."-".$Ymonthgi."-".$Yyeargi;
//'response.write re_yukchin($monthgi,10,$daygan)


$Ydae1gan	=$YsSajuArr[8];
$Ydae1gi		=$YsSajuArr[9];
$Ydae2gan	=$YsSajuArr[10];
$Ydae2gi		=$YsSajuArr[11];
$Ydae3gan	=$YsSajuArr[12];
$Ydae3gi		=$YsSajuArr[13];
$Ydae4gan	=$YsSajuArr[14];
$Ydae4gi		=$YsSajuArr[15];
$Ydae5gan	=$YsSajuArr[16];
$Ydae5gi		=$YsSajuArr[17];
$Ydae6gan	=$YsSajuArr[18];
$Ydae6gi		=$YsSajuArr[19];
$Ydae7gan	=$YsSajuArr[20];
$Ydae7gi		=$YsSajuArr[21];
$Ydae8gan	=$YsSajuArr[22];
$Ydae8gi		=$YsSajuArr[23];


$YyYongs = explode("|",$YSoloSaju[2]);


$Yyeargan=XcodeGan($Yyeargan);
$Ymonthgan=XcodeGan($Ymonthgan);
$Ydaygan=XcodeGan($Ydaygan);
$Ytimegan=XcodeGan($Ytimegan);

$Yyeargi=XcodeGi($Yyeargi);
$Ymonthgi=XcodeGi($Ymonthgi);
$Ydaygi=XcodeGi($Ydaygi);
$Ytimegi=XcodeGi($Ytimegi);

$Yilgi_baeyeul= $Ydaygi - 1;
$Yilgan_baeyeul = $Ydaygan - 1;

$Ysigi=$sigi_baeyeul[$Ytimegi];



if($Yyeargan == 1 || $Yyeargan ==2){
$Yyeargan_oh="1";
}elseif($Yyeargan==3 || $Yyeargan==4){ 
$Yyeargan_oh="2";
}elseif($Yyeargan==5 || $Yyeargan==6){ 
$Yyeargan_oh="3";
}elseif($Yyeargan==7 || $Yyeargan==8){ 
$Yyeargan_oh="4";
}else{ 
$Yyeargan_oh="5";
}

if($Yyeargi==1 || $Yyeargi==12){
$Yyeargi_oh="5";
}elseif($Yyeargi==2 || $Yyeargi==5){
$Yyeargi_oh="3";
}elseif($Yyeargi==3 || $Yyeargi==4){
$Yyeargi_oh="1";
}elseif($Yyeargi==6 || $Yyeargi==7){
$Yyeargi_oh="2";
}elseif($Yyeargi==9 || $Yyeargi==10){
$Yyeargi_oh="4";
}else{
$Yyeargi_oh="3";
}


if($Ymonthgan==1 || $Ymonthgan==2){
$Ymonthgan_oh="1";
}elseif($Ymonthgan==3 || $Ymonthgan==4){
$Ymonthgan_oh="2";
}elseif($Ymonthgan==5 || $Ymonthgan==6){
$Ymonthgan_oh="3";
}elseif($Ymonthgan==7 || $Ymonthgan==8){
$Ymonthgan_oh="4";
}else{
$Ymonthgan="5";
}

if($Ymonthgi==1 || $Ymonthgi==12){
$Ymonthgi_oh="5";
}elseif($Ymonthgi==2 || $Ymonthgi==5){
$Ymonthgi_oh="3";
}elseif($Ymonthgi==3 || $Ymonthgi==4){
$Ymonthgi_oh="1";
}elseif($Ymonthgi==6 || $Ymonthgi==7){
$Ymonthgi_oh="2";
}elseif($Ymonthgi==9 || $Ymonthgi==10){
$Ymonthgi_oh="4";
}else{
$Ymonthgi_oh="3";
}

//'$Ydaygan_oh,$Ydaygi_oh

if($Ydaygan==1 || $Ydaygan==2){
$Ydaygan_oh="1";
}elseif($Ydaygan==3 || $Ydaygan==4){
$Ydaygan_oh="2";
}elseif($Ydaygan==5 || $Ydaygan==6){
$Ydaygan_oh="3";
}elseif($Ydaygan==7 || $Ydaygan==8){
$Ydaygan_oh="4";
}else{
$Ydaygan_oh="5";
}


if($Ydaygi==1 || $Ydaygi==12){
$Ydaygi_oh="5";
}elseif($Ydaygi==2 || $Ydaygi==5){
$Ydaygi_oh="3";
}elseif($Ydaygi==3 || $Ydaygi==4){ 
$Ydaygi_oh="1";
}elseif($Ydaygi==6 || $Ydaygi==7){
$Ydaygi_oh="2";
}elseif($Ydaygi==9 || $Ydaygi==10){
$Ydaygi_oh="4";
}else{
$Ydaygi_oh="3";
}


$Yilgan = $Ydaygan;


if($Yilgan==$chungan[0] || $Yilgan==$chungan[5]){

    if($Ysigi=="자"){	
	$Ytimegan_oh="1" ; $Ytimegi_oh="5";
    }elseif( $Ysigi=="축"){ 
	$Ytimegan_oh="1" ; $Ytimegi_oh="3";
    }elseif( $Ysigi=="인"){
	$Ytimegan_oh="2" ; $Ytimegi_oh="1";
    }elseif( $Ysigi=="묘"){ 
	$Ytimegan_oh="2" ; $Ytimegi_oh="1";
    }elseif( $Ysigi=="진"){ 
	$Ytimegan_oh="3" ; $Ytimegi_oh="3";
    }elseif( $Ysigi=="사"){ 
	$Ytimegan_oh="3" ; $Ytimegi_oh="2";
    }elseif( $Ysigi=="오"){ 
	$Ytimegan_oh="4" ; $Ytimegi_oh="2";
    }elseif( $Ysigi=="미"){ 
	$Ytimegan_oh="4" ; $Ytimegi_oh="3";
    }elseif( $Ysigi=="신"){ 
	$Ytimegan_oh="5" ; $Ytimegi_oh="4";
    }elseif( $Ysigi=="유"){ 
	$Ytimegan_oh="5" ; $Ytimegi_oh="4";
    }elseif( $Ysigi=="술"){ 
	$Ytimegan_oh="1" ; $Ytimegi_oh="3";
    }elseif( $Ysigi=="해"){
	$Ytimegan_oh="1" ; $Ytimegi_oh="5";
    }else{
	$Ytimegan_oh="2" ; $Ytimegi_oh="5"; 
	}

}elseif($ilgan==$chungan[1] || $ilgan=$chungan[6]){

    if($Ysigi=="자"){ 
	$Ytimegan_oh="2" ; $Ytimegi_oh="5";
    }elseif($Ysigi=="축"){ 
	$Ytimegan_oh="2" ; $Ytimegi_oh="3";
    }elseif($Ysigi=="인"){ 
	$Ytimegan_oh="3" ; $Ytimegi_oh="1";
    }elseif($Ysigi=="묘"){  
	$Ytimegan_oh="3" ; $Ytimegi_oh="1";
    }elseif($Ysigi=="진"){  
	$Ytimegan_oh="4" ; $Ytimegi_oh="3";
    }elseif($Ysigi=="사"){  
	$Ytimegan_oh="4" ; $Ytimegi_oh="2";
    }elseif($Ysigi=="오"){  
	$Ytimegan_oh="5" ; $Ytimegi_oh="2";
    }elseif($Ysigi=="미"){ 
	$Ytimegan_oh="5" ; $Ytimegi_oh="3";
    }elseif($Ysigi=="신"){  
	$Ytimegan_oh="1" ; $Ytimegi_oh="4";
    }elseif($Ysigi=="유"){ 
	$Ytimegan_oh="1" ; $Ytimegi_oh="4";
    }elseif($Ysigi=="술"){  
	$Ytimegan_oh="2" ; $Ytimegi_oh="3";
    }elseif($Ysigi=="해"){  
	$Ytimegan_oh="2" ; $Ytimegi_oh="5";
    }else{
	$Ytimegan_oh="3" ; $Ytimegi_oh="5";
	}

}elseif($ilgan==$chungan[2] || $ilgan==$chungan[7]){

    if($Ysigi=="자"){ 
	$Ytimegan_oh="3" ; $Ytimegi_oh="5";
    }elseif( $Ysigi=="축"){
	$Ytimegan_oh="3" ; $Ytimegi_oh="3";
    }elseif( $Ysigi=="인"){ 
	$Ytimegan_oh="4" ; $Ytimegi_oh="1";
    }elseif( $Ysigi=="묘"){ 
	$Ytimegan_oh="4" ; $Ytimegi_oh="1";
    }elseif( $Ysigi=="진"){ 
	$Ytimegan_oh="5" ; $Ytimegi_oh="3";
    }elseif( $Ysigi=="사"){ 
	$Ytimegan_oh="5" ; $Ytimegi_oh="2";
    }elseif( $Ysigi=="오"){ 
	$Ytimegan_oh="1" ; $Ytimegi_oh="2";
    }elseif( $Ysigi=="미"){
	$Ytimegan_oh="1" ; $Ytimegi_oh="3";
    }elseif( $Ysigi=="신"){ 
	$Ytimegan_oh="2" ; $Ytimegi_oh="4";
    }elseif( $Ysigi=="유"){ 
	$Ytimegan_oh="2" ; $Ytimegi_oh="4";
    }elseif( $Ysigi=="술"){
	$Ytimegan_oh="3" ; $Ytimegi_oh="3";
    }elseif( $Ysigi=="해"){
	$Ytimegan_oh="3" ; $Ytimegi_oh="5";
    }else{					   
	$Ytimegan_oh="4" ; $Ytimegi_oh="5";
	}

}elseif($ilgan==$chungan[3] || $ilgan==$chungan[8]){

    if($Ysigi=="자"){  
	$Ytimegan_oh="4" ; $Ytimegi_oh="5";
    }elseif( $Ysigi=="축"){  
	$Ytimegan_oh="4" ; $Ytimegi_oh="3";
    }elseif( $Ysigi=="인"){  
	$Ytimegan_oh="5" ; $Ytimegi_oh="1";
    }elseif( $Ysigi=="묘"){  
	$Ytimegan_oh="5" ; $Ytimegi_oh="1";
    }elseif( $Ysigi=="진"){  
	$Ytimegan_oh="1" ; $Ytimegi_oh="3";
    }elseif( $Ysigi=="사"){  
	$Ytimegan_oh="1" ; $Ytimegi_oh="2";
    }elseif( $Ysigi=="오"){  
	$Ytimegan_oh="2" ; $Ytimegi_oh="2";
    }elseif( $Ysigi=="미"){  
	$Ytimegan_oh="2" ; $Ytimegi_oh="3";
    }elseif( $Ysigi=="신"){  
	$Ytimegan_oh="3" ; $Ytimegi_oh="4";
    }elseif( $Ysigi=="유"){  
	$Ytimegan_oh="3" ; $Ytimegi_oh="4";
    }elseif( $Ysigi=="술"){  
	$Ytimegan_oh="4" ; $Ytimegi_oh="3";
    }elseif( $Ysigi=="해" ){ 
	$Ytimegan_oh="4" ; $Ytimegi_oh="5";
    }else{ 
	$Ytimegan_oh="5" ; $Ytimegi_oh="5";
	}

}else{

    if($Ysigi=="자"){ 
	$Ytimegan_oh="5" ; $Ytimegi_oh="5";
    }elseif( $Ysigi=="축" ){ 
	$Ytimegan_oh="5" ; $Ytimegi_oh="3";
    }elseif( $Ysigi=="인" ){ 
	$Ytimegan_oh="1" ; $Ytimegi_oh="1";
    }elseif( $Ysigi=="묘" ){
	$Ytimegan_oh="1" ; $Ytimegi_oh="1";
    }elseif( $Ysigi=="진" ){ 
	$Ytimegan_oh="2" ; $Ytimegi_oh="3";
    }elseif( $Ysigi=="사" ){ 
	$Ytimegan_oh="2" ; $Ytimegi_oh="2";
    }elseif( $Ysigi=="오" ){ 
	$Ytimegan_oh="3" ; $Ytimegi_oh="2";
    }elseif( $Ysigi=="미" ){
	$Ytimegan_oh="3" ; $Ytimegi_oh="3";
    }elseif( $Ysigi=="신" ){ 
	$Ytimegan_oh="4" ; $Ytimegi_oh="4";
    }elseif( $Ysigi=="유" ){ 
	$Ytimegan_oh="4" ; $Ytimegi_oh="4";
    }elseif( $Ysigi=="술" ){ 
	$Ytimegan_oh="5" ; $Ytimegi_oh="3";
    }elseif( $Ysigi=="해" ){
	$Ytimegan_oh="5" ; $Ytimegi_oh="5";
    }else{ 
	$Ytimegan_oh="1" ; $Ytimegi_oh="5";
	}

}

$Yhansin = explode("-", $YyYongs[0]);
$Yhansin = $Yhansin[0];

$Ygoosin = explode("-", $YyYongs[0]);
$Ygoosin = $Ygoosin[1];

$Ykeesin = explode("-", $YyYongs[0]);
$Ykeesin = $Ykeesin[2];

$Yheesin = explode("-", $YyYongs[0]);
$Yheesin = $Yheesin[3];

$yongsin = explode("-", $YyYongs[0]);
$yongsin = $yongsin[4];


$Yhan_code = explode("-", $YyYongs[1]);
$Yhan_code = $Yhan_code[0];

$Ygoo_code = explode("-", $YyYongs[1]);
$Ygoo_code = $Ygoo_code[1];

$Ykee_code = explode("-", $YyYongs[1]);
$Ykee_code = $Ykee_code[2];

$Yhee_code = explode("-", $YyYongs[1]);
$Yhee_code = $Yhee_code[3];

$Yyong_code = explode("-", $YyYongs[1]);
$Yyong_code = $Yyong_code[4];

$Yyong_to_sibsin=$YyYongs[2];

$Yyong_chungan=$yYongs[3];

$y12woonsung = $yYongs[4];



?>