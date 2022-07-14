 <?


$Teumyang	=	"2";
$Tsex		=	"1";
$Tyear	=	$curYear;//'request.Form("Myear")       
$Tmonth	=	$curMonth;//'request.Form("Mmonth")     
$Tday		=	"1";
$Ttime		=	date("H");	//hour(now);//'request.Form("Mtime")        
$Tmin		=	date("i");//minute(now);//'request.Form("Mmin")

if($Teumyang == ""){exit;}


$last_dayA="31,28,31,30,31,30,31,31,30,31,30,31";
$last_dayA=explode(",", $last_dayA);
$last_dayB="31,29,31,30,31,30,31,31,30,31,30,31";
$last_dayB=explode(",", $last_dayB);

$$last_AB=$Tyear % 4;

$sixty="甲子,乙丑,丙寅,丁卯,戊辰,己巳,庚午,辛未,壬申,癸酉,甲戌,乙亥,丙子,丁丑,戊寅,己卯,庚辰,辛巳,壬午,癸未,甲申,乙酉,丙戌,丁亥,戊子,己丑,庚寅,辛卯,壬辰,癸巳,甲午,乙未,丙申,丁酉,戊戌,己亥,庚子,辛丑,壬寅,癸卯,甲辰,乙巳,丙午,丁未,戊申,己酉,庚戌,辛亥,壬子,癸丑,甲寅,乙卯,丙辰,丁巳,戊午,己未,庚申,辛酉,壬戌,癸亥";

$sixty=explode(",", $sixty);

$sixty_han="갑자,을축,병인,정묘,무진,기사,경오,신미,임신,계유,갑술,을해,병자,정축,무인,기묘,경진,신사,임오,계미,갑신,을유,병술,정해,무자,기축,경인,신묘,임진,계사,갑오,을미,병신,정유,무술,기해,경자,신축,임인,계묘,갑진,을사,병오,정미,무신,기유,경술,신해,임자,계축,갑인,을묘,병진,정사,무오,기미,경신,신유,임술,계해";
$sixty_han=explode(",", $sixty_han);

$chungan="甲,乙,丙,丁,戊,己,庚,辛,壬,癸";
$chungan=explode(",", $chungan);

$gigi="子,丑,寅,卯,辰,巳,午,未,申,酉,戌,亥";
$gigi=explode(",", $gigi);

function mkSaju(){

$Teumyang = int($Teumyang);


$$byear=$Tyear;
$$bmonth=$Tmonth;
$$bday=$Tday;



if($$bday<=9){
$$bday="0".$$bday;
}else{
$$bday=$$bday;
}


if($$bmonth<=9){
$$bmonth="0".$$bmonth;
}else{
$$bmonth=$$bmonth;
}

$$btime=$Ttime;
$bmin=$Tmin;

$Thapsan=$$byear.$$bmonth.$$bday.$$btime.$bmin;




if($$last_AB==0){
$$last_day_su=$last_dayB[$$bmonth-1];
}else{
$$last_day_su=$last_dayA[$$bmonth-1];
}

$dktime1="1954,03,21,00,00";
$dktime2="1961,08,10,00,00";

$dktime1=explode(",", $dktime1);
$dktime2=explode(",", $dktime2);

$dktimeA=$dktime1[0].$dktime1[1].$dktime1[2].$dktime1[3].$dktime1[4];
$dktimeB=$dktime2[0].$dktime2[1].$dktime2[2].$dktime2[3].$dktime2[4];


if($Thapsan>= $dktimeA && $Thapsan<= $dktimeB){
    
    $dmin=$bmin+30;
    if($dmin>=60){        
        $dmin=$dmin-60;
        $dtime=$$btime+1;

        if($dtime>=24){            
            $dtime=$dtime-24;
            $dday=$$bday+1;

            if($dday>$$last_day_su){    
			
                $dday=$dday-$$last_day_su;
                $dmonth=$$bmonth+1;

                    if($dmonth>12){
                        $dmonth=$dmonth-12;
                        $dyear=$$byear+1;
					}
            }            
        }
	}
} 



$$shapsan=$$byear.$$bmonth.$$bday.$$btime.$bmin;

$sumtime1="1948,06,01,00,00";
$sumtime1=explode(",", $sumtime1);

$sumtime2="1948,09,23,00,00";
$sumtime2=explode(",", $sumtime2);

$sumtime3="1949,04,04,00,00";
$sumtime3=explode(",", $sumtime3);

$sumtime4="1949,10,01,00,00";
$sumtime4=explode(",", $sumtime4);

$sumtime5="1950,04,02,00,00";
$sumtime5=explode(",", $sumtime5);

$sumtime6="1950,09,11,00,00";
$sumtime6=explode(",", $sumtime6);

$sumtime7="1956,05,21,00,00";
$sumtime7=explode(",", $sumtime7);

$sumtime8="1956,09,30,00,00";
$sumtime8=explode(",", $sumtime8);

$sumtime9="1959,05,03,00,00";
$sumtime9=explode(",", $sumtime9);

$sumtime10="1959,09,20,00,00";
$sumtime10=explode(",", $sumtime10);

$sumtime11="1987,05,10,02,00";
$sumtime11=explode(",", $sumtime11);

$sumtime12="1987,10,11,03,00";
$sumtime12=explode(",", $sumtime12);

$sumtime13="1988,05,08,02,00";
$sumtime13=explode(",", $sumtime13);

$sumtime14="1988,10,09,03,00";
$sumtime14=explode(",", $sumtime14);



$sumtime1A=$sumtime1[0].$sumtime1[1].$sumtime1[2].$sumtime1[3].$sumtime1[4];
$sumtime1B=$sumtime2[0].$sumtime2[1].$sumtime2[2].$sumtime2[3].$sumtime2[4];
$sumtime2A=$sumtime3[0].$sumtime3[1].$sumtime3[2].$sumtime3[3].$sumtime3[4];
$sumtime2B=$sumtime4[0].$sumtime4[1].$sumtime4[2].$sumtime4[3].$sumtime4[4];
$sumtime3A=$sumtime5[0].$sumtime5[1].$sumtime5[2].$sumtime5[3].$sumtime5[4];
$sumtime3B=$sumtime6[0].$sumtime6[1].$sumtime6[2].$sumtime6[3].$sumtime6[4];
$sumtime4A=$sumtime7[0].$sumtime7[1].$sumtime7[2].$sumtime7[3].$sumtime7[4];
$sumtime4B=$sumtime8[0].$sumtime8[1].$sumtime8[2].$sumtime8[3].$sumtime8[4];
$sumtime5A=$sumtime9[0].$sumtime9[1].$sumtime9[2].$sumtime9[3].$sumtime9[4];
$sumtime5B=$sumtime10[0].$sumtime10[1].$sumtime10[2].$sumtime10[3].$sumtime10[4];
$sumtime6A=$sumtime11[0].$sumtime11[1].$sumtime11[2].$sumtime11[3].$sumtime11[4];
$sumtime6B=$sumtime12[0].$sumtime12[1].$sumtime12[2].$sumtime12[3].$sumtime12[4];
$sumtime7A=$sumtime13[0].$sumtime13[1].$sumtime13[2].$sumtime13[3].$sumtime13[4];
$sumtime7B=$sumtime14[0].$sumtime14[1].$sumtime14[2].$sumtime14[3].$sumtime14[4];


if($shapsan>= $sumtime1A && $shapsan<= $sumtime1B){
    
    if($btime== 0){
        
        if($bday==1){
            
            $Cmonth=$bmonth-1;
            $last_AB=$byear % 4;

            if($last_AB==0){               
                $last_day_su= $last_dayB($Cmonth-1);
            }else{			
                $last_day_su=$last_dayA($Cmonth-1);
				$Cday=($bday-1)+$last_day_su;
				$Ctime=($btime+24)-1;
			}
        }else{
			$Cday=$bday-1;
			$Ctime=($btime+24)-1;
			$Cmonth=$bmonth*1;
		}

    }else{
		$Ctime=$btime-1;
		$Cday=$bday*1;
		$Cmonth=$bmonth*1;
	}

}elseif($shapsan>=$sumtime2A && $shapsan<=$sumtime2B){

    if($btime == 0){       
        if($bday==1){           
            $Cmonth=$bmonth-1;
            $last_AB=$byear % 4;
            if($last_AB==0){
                $last_day_su=$last_dayB($Cmonth-1);
            }else{			
				$last_day_su=$last_dayA($Cmonth-1);        
				$Cday=($bday-1)+$last_day_su;
				$Ctime=($btime+24)-1;
            }
        }else{		
			$Cday=$bday-1;
			$Ctime=($btime+24)-1;
			$Cmonth=$bmonth*1;
        }
    }else{
		$Ctime=$btime-1;
		$Cday=$bday*1;
		$Cmonth=$bmonth*1;
	}

}elseif($shapsan>=$sumtime3A && $shapsan<= $sumtime3B){

    if($btime==0){

        if($bday==1){
			$Cmonth=$bmonth-1;
			$last_AB=$byear % 4;

            if($last_AB== 0){
				$last_day_su=$last_dayB($Cmonth-1);
            }else{
				$last_day_su=$last_dayA($Cmonth-1);
				$Cday=($bday-1)+$last_day_su;
				$Ctime=($btime+24)-1;
			}
        }else{		
			$Cday=$bday-1;
			$Ctime=($btime+24)-1;
			$Cmonth=$bmonth*1;     
		}
    }else{
		$Ctime=$btime-1;
		$Cday=$bday*1;
		$Cmonth=$bmonth*1;
	}

}elseif($shapsan>= $sumtime4A && $shapsan<= $sumtime4B){

    if($btime==0){

        if($bday==1){

			$Cmonth=$bmonth-1;
			$last_AB=$byear % 4;

            if($last_AB==0){
                $last_day_su=$last_dayB($Cmonth-1);
            }else{
			
				$last_day_su=$last_dayA($Cmonth-1);
				$Cday=($bday-1)+$last_day_su;
				$Ctime=($btime+24)-1;
			}
        }else{
			$Cday=$bday-1;
			$Ctime=($btime+24)-1;
			$Cmonth=$bmonth*1;
		}
    }else{
        $Ctime=$btime-1;
        $Cday=$bday*1;
        $Cmonth=$bmonth*1  ;      
	}

}elseif($shapsan>= $sumtime5A && $shapsan<= $sumtime5B){

    if($btime==0){

        if($bday==1){

		$Cmonth=($bmonth-1);
		$last_AB=$byear % 4;
            if($last_AB==0){

			$last_day_su=$last_dayB($Cmonth-1);

            }else{

			$last_day_su=$last_dayA($Cmonth-1);
			$Cday=($bday-1)+$last_day_su;
			$Ctime=($btime+24)-1;
            }
        }else{

			$Cday=$bday-1;
			$Ctime=($btime+24)-1;			
			$Cmonth=$bmonth*1;

		}
    }else{
		$Ctime=$btime-1;
		$Cday=$bday*1;
		$Cmonth=$bmonth*1;
	}

}elseif($shapsan>= $sumtime6A &&  $shapsan<= $sumtime6B){

    if($btime==0){

        if($bday==1){

			$Cmonth=$bmonth-1;
			$last_AB=$byear % 4;

            if($last_AB==0){
				$last_day_su=$last_dayB($Cmonth-1);
            }else{			
			$last_day_su=$last_dayA($Cmonth-1);
			$Cday=($bday-1)+$last_day_su;
			$Ctime=($btime+24)-1;
            }

        }else{
			$Cday=$bday-1;
			$Ctime=($btime+24)-1;
			$Cmonth=$bmonth*1;    
		}

    }else{
			$Ctime=$btime-1;
			$Cday=$bday*1;
			$Cmonth=$bmonth*1;
	}

}elseif($shapsan>=$sumtime7A && $shapsan<=$sumtime7B){

    if($btime=0){

        if($bday=1){

		$Cmonth=($bmonth-1);
		$last_AB=$byear % 4;

            if($last_AB =0){
			$last_day_su=$last_dayB($Cmonth-1);
            }else{	
			$last_day_su=$last_dayA($Cmonth-1);
			$Cday=($bday-1)+$last_day_su;
			$Ctime=($btime+24)-1;
			}

        }else{		
			$Cday=$bday-1;
			$Ctime=($btime+24)-1;
			$Cmonth=$bmonth*1;        
        }

    }else{	
		$Ctime=$btime-1;
		$Cday=$bday*1;
		$Cmonth=$bmonth*1;
    }

}else{
		$Cmonth=$bmonth*1;
		$Cday=$bday*1;
		$Ctime=$btime*1;
}


if($Ctime<=9){
$Ctime="0".$Ctime;
}else{
$Ctime=$Ctime;
}

if($Cday<=9){
$Cday="0".$Cday;
}else{
$Cday=$Cday;
}


if($Cmonth<=9){
$Cmonth="0".$Cmonth;
}else{
$Cmonth=$Cmonth;
}

$bmonth=$Cmonth;
$bday=$Cday;
$btime=$Ctime;


	$sql = "select * from manse_data where neun='".$byear."' and weul='2'";
	$query = mysql_query($sql);
	$all = mysql_affected_rows();

	for ($i = 0 ; $i<$all; $i++) {
		   mysql_data_seek($query,$i);
		   $row = mysql_fetch_array($query);

		   $weul = stripslashes($row[weul]);
		   $julipil = stripslashes($row[julipil]);
		   $julipsi = stripslashes($row[julipsi]);
		   $julipbun = stripslashes($row[julipbun]);
	}


$bmonth = int($bmonth);
if($bmonth==$weul){

	if($bday== $julipil){
		if($btime==$julipsi){
                    if($bmin>=$julipbun){
                    $sixty_cha=$byear-1900;
                    $sixty_num=$sixty_cha+36;
                    }else{
                    $sixty_cha=$byear-1900;
                    $sixty_num=$sixty_cha+35;
					}
		}else{
                    if($btime>$julipsi){
                    $sixty_cha=$byear-1900;
                    $sixty_num=$sixty_cha+36;
					}else{
                    $sixty_cha=$byear-1900;
                    $sixty_num=$sixty_cha+35;
					}
		}
    }else{
            if($bday>$julipil){

            $sixty_cha=$byear-1900;
            $sixty_num=$sixty_cha+36;
            
            }else{
            
            $sixty_cha=$byear-1900;
            $sixty_num=$sixty_cha+35;
            }
	}
}else{
    if($bmonth>$weul){
    $sixty_cha=$byear-1900;
    $sixty_num=$sixty_cha+36;
    }else{
    $sixty_cha=$byear-1900;
    $sixty_num=$sixty_cha+35;
	}
}

$sixty_num=$sixty_num;



$sixty_baeyeul=$sixty_num % 60;
$Xsixty_num=$sixty_num;
$yearju=$sixty[$sixty_baeyeul]; //년주를 60갑자로...
$yearseed=$sixty_baeyeul;


	$sql = "select * from manse_data where neun='".$byear."' and weul='".$bmonth."'";
	$query = mysql_query($sql);
	$all = mysql_affected_rows();

	for ($i = 0 ; $i<$all; $i++) {
		   mysql_data_seek($query,$i);
		   $row = mysql_fetch_array($query);

		   $weul = stripslashes($row[weul]);
		   $julipil = stripslashes($row[julipil]);
		   $julipsi = stripslashes($row[julipsi]);
		   $julipbun = stripslashes($row[julipbun]);
		   $julipilgan = stripslashes($row[julipilgan]);
		   $julipilji = stripslashes($row[julipilji]);
		   
	}

if($bday == $julipil){

	if($btime== $julipsi){

		if($bmin>=$julipbun){        
			$sixty_cha=$byear-1900;
			$sixty_num=($sixty_cha*12)+12+$bmonth;

		}else{
			$sixty_cha=$byear-1900;
			$sixty_num=($sixty_cha*12)+11+$bmonth;            
		}
	}else{
		if($btime>$julipsi){		
			$sixty_cha=$byear-1900;
			$sixty_num=($sixty_cha*12)+12+$bmonth;	

		}else{		
			$sixty_cha=$byear-1900;
			$sixty_num=($sixty_cha*12)+11+$bmonth;
		}
	}

}else{
	if(int($bday)>int($julipil)){
	$sixty_cha=$byear-1900;
	$sixty_num=($sixty_cha*12)+12+$bmonth;

	}else{
	$sixty_cha=$byear-1900;
	$sixty_num=($sixty_cha*12)+11+$bmonth;
	}
}


$sixty_baeyeul=$sixty_num % 60;
$XMsixty_num=$sixty_num;
$weulju=$sixty[$sixty_baeyeul];
$weulseed=$sixty_baeyeul;



$ilgan_num=($bday-$julipil)-1;
$ilgan_ocha=$ilgan_num + $julipilgan;
    if($ilgan_ocha<10){
        $ilgan_baeyeul=$ilgan_ocha;
    }else{
	$ilgan_baeyeul=($ilgan_num + $julipilgan)  % 10;
	}

	if($ilgan_baeyeul<0){
		$ilgan_baeyeul=$ilgan_baeyeul+10;
	}

$ilgan=$chungan[$ilgan_baeyeul];


$ilgi_ocha=$ilgan_num +  $julipilji;
    if($ilgi_ocha<12){
        $ilgi_baeyeul=$ilgi_ocha;

    }else{
	$ilgi_baeyeul=($ilgan_num +  $julipilji) % 12;
	}


	if($ilgi_baeyeul<0){
		$ilgi_baeyeul=$ilgi_baeyeul+12;
	}

$ilgi=$gigi[$ilgi_baeyeul];


if($Teumyang==2){

	if($bmin<30){

		if($btime=="00" || $btime==0){

			if($ilgan_baeyeul==0){
				$ilgan=$chungan[10];
			}else{
				$ilgan=$chungan[$ilgan_baeyeul-1];			
			}

			if($ilgi_baeyeul==0){
				$ilgi=$gigi[12];
			}else{
				$ilgi=$gigi[$ilgi_baeyeul-1];
			}
			
		}else{
		
			$ilgan=$chungan[$ilgan_baeyeul];
			$ilgi=$gigi[$ilgi_baeyeul];
        
		}
	}else{
		$ilgan=$chungan[$ilgan_baeyeul];
		$ilgi=$gigi[$ilgi_baeyeul];
	}
}


$ilju = $ilgan.$ilgi;
for($i == 0 ; $i < sizeof($sixty); $i++){
	if($ilju == $sixty[$i]){
		$iljuseed = $i;
		break;
	}
}



$hwansan=$btime*60;
$hwansan2=$hwansan+$bmin;

$sigi_baeyeul="자,축,인,묘,진,사,오,미,신,유,술,해,야자";
$sigi_baeyeul=explode(",", $sigi_baeyeul);
$hwansan2=30;

if($hwansan2>=0 && $hwansan2<30){
$sigi=$sigi_baeyeul[12];
}elseif($hwansan2>=30 && $hwansan2<90){
$sigi=$sigi_baeyeul[0];
}elseif($hwansan2>=90 && $hwansan2<210){
$sigi=$sigi_baeyeul[1];
}elseif($hwansan2>=120 && $hwansan2<330){
$sigi=$sigi_baeyeul[2];
}elseif($hwansan2>=330 && $hwansan2<450){
$sigi=$sigi_baeyeul[3];
}elseif($hwansan2>=450 && $hwansan2<570){
$sigi=$sigi_baeyeul[4];
}elseif($hwansan2>=570 && $hwansan2<690){
$sigi=$sigi_baeyeul[5];
}elseif($hwansan2>=690 && $hwansan2<810){
$sigi=$sigi_baeyeul[6];
}elseif($hwansan2>=810 && $hwansan2<930){
$sigi=$sigi_baeyeul[7];
}elseif($hwansan2>=930 && $hwansan2<1050){
$sigi=$sigi_baeyeul[8];
}elseif($hwansan2>=1050 && $hwansan2<1170){
$sigi=$sigi_baeyeul[9];
}elseif($hwansan2>=1170 && $hwansan2<1290){
$sigi=$sigi_baeyeul[10];
}elseif($hwansan2>=1290 && $hwansan2<1410){
$sigi=$sigi_baeyeul[11];
}elseif($hwansan2>=1410 && $hwansan2<=1439){
$sigi=$sigi_baeyeul[12];
}else{
echo  "시간을 다시 입력해 주십시요.";
}




if($ilgan==$chungan[0] || $ilgan==$chungan[5]){

    if($sigi=="자"){	
	$siju=$sixty[0]; $Xtimegan_oh="1"; $Xtimegi_oh="5";
    }elseif($sigi=="축"){ 
	$siju=$sixty[1]; $Xtimegan_oh="1"; $Xtimegi_oh="3";
    }elseif($sigi=="인"){
	$siju=$sixty[2]; $Xtimegan_oh="2"; $Xtimegi_oh="1";
    }elseif($sigi=="묘"){ 
	$siju=$sixty[3]; $Xtimegan_oh="2"; $Xtimegi_oh="1";
    }elseif($sigi=="진"){ 
	$siju=$sixty[4]; $Xtimegan_oh="3"; $Xtimegi_oh="3";
    }elseif($sigi=="사"){ 
	$siju=$sixty[5]; $Xtimegan_oh="3"; $Xtimegi_oh="2";
    }elseif($sigi=="오"){ 
	$siju=$sixty[6]; $Xtimegan_oh="4"; $Xtimegi_oh="2";
    }elseif($sigi=="미"){ 
	$siju=$sixty[7]; $Xtimegan_oh="4"; $Xtimegi_oh="3";
    }elseif($sigi=="신"){ 
	$siju=$sixty[8]; $Xtimegan_oh="5"; $Xtimegi_oh="4";
    }elseif($sigi=="유"){ 
	$siju=$sixty[9]; $Xtimegan_oh="5"; $Xtimegi_oh="4";
    }elseif($sigi=="술"){ 
	$siju=$sixty[10]; $Xtimegan_oh="1"; $Xtimegi_oh="3";
    }elseif($sigi=="해"){
	$siju=$sixty[11]; $Xtimegan_oh="1"; $Xtimegi_oh="5";
    }else{	 
	$siju=$sixty[12]; $Xtimegan_oh="2"; $Xtimegi_oh="5" ;
	}

}elseif($ilgan==$chungan[1] || $ilgan==$chungan[6]){

    if($sigi=="자"){
	$siju=$sixty[12]; $Xtimegan_oh="2"; $Xtimegi_oh="5";
    }elseif($sigi="축"){ 
	$siju=$sixty[13]; $Xtimegan_oh="2"; $Xtimegi_oh="3";
    }elseif($sigi="인"){ 
	$siju=$sixty[14]; $Xtimegan_oh="3"; $Xtimegi_oh="1";
    }elseif($sigi="묘"){  
	$siju=$sixty[15]; $Xtimegan_oh="3"; $Xtimegi_oh="1";
    }elseif($sigi="진"){  
	$siju=$sixty[16]; $Xtimegan_oh="4"; $Xtimegi_oh="3";
    }elseif($sigi="사"){  
	$siju=$sixty[17]; $Xtimegan_oh="4"; $Xtimegi_oh="2";
    }elseif($sigi="오"){  
	$siju=$sixty[18]; $Xtimegan_oh="5"; $Xtimegi_oh="2";
    }elseif($sigi="미"){ 
	$siju=$sixty[19]; $Xtimegan_oh="5"; $Xtimegi_oh="3";
    }elseif($sigi="신"){  
	$siju=$sixty[20]; $Xtimegan_oh="1"; $Xtimegi_oh="4";
    }elseif($sigi="유"){ 
	$siju=$sixty[21]; $Xtimegan_oh="1"; $Xtimegi_oh="4";
    }elseif($sigi="술"){  
	$siju=$sixty[22]; $Xtimegan_oh="2"; $Xtimegi_oh="3";
    }elseif($sigi="해"){  
	$siju=$sixty[23]; $Xtimegan_oh="2"; $Xtimegi_oh="5";
    }else{					    
	$siju=$sixty[24]; $Xtimegan_oh="3"; $Xtimegi_oh="5";
	}

}elseif($ilgan==$chungan[2] || $ilgan==$chungan[7]){

    if($sigi=="자"){ 
	$siju=$sixty[24]; $Xtimegan_oh="3"; $Xtimegi_oh="5";
    }elseif($sigi=="축"){
	$siju=$sixty[25]; $Xtimegan_oh="3"; $Xtimegi_oh="3";
    }elseif($sigi=="인"){ 
	$siju=$sixty[26]; $Xtimegan_oh="4"; $Xtimegi_oh="1";
    }elseif($sigi=="묘"){ 
	$siju=$sixty[27]; $Xtimegan_oh="4"; $Xtimegi_oh="1";
    }elseif($sigi=="진"){ 
	$siju=$sixty[28]; $Xtimegan_oh="5"; $Xtimegi_oh="3";
    }elseif($sigi=="사"){ 
	$siju=$sixty[29]; $Xtimegan_oh="5"; $Xtimegi_oh="2";
    }elseif($sigi=="오"){ 
	$siju=$sixty[30]; $Xtimegan_oh="1"; $Xtimegi_oh="2";
    }elseif($sigi=="미"){
	$siju=$sixty[31]; $Xtimegan_oh="1"; $Xtimegi_oh="3";
    }elseif($sigi=="신"){ 
	$siju=$sixty[32]; $Xtimegan_oh="2"; $Xtimegi_oh="4";
    }elseif($sigi=="유"){ 
	$siju=$sixty[33]; $Xtimegan_oh="2"; $Xtimegi_oh="4";
    }elseif($sigi=="술"){
	$siju=$sixty[34]; $Xtimegan_oh="3"; $Xtimegi_oh="3";
    }elseif($sigi=="해"){
	$siju=$sixty[35]; $Xtimegan_oh="3"; $Xtimegi_oh="5";
    }else{					   
	$siju=$sixty[36]; $Xtimegan_oh="4"; $Xtimegi_oh="5";
	}

}elseif($ilgan==$chungan[3] || $ilgan==$chungan[8]){

    if($sigi=="자"){  
	$siju=$sixty[36]; $Xtimegan_oh="4"; $Xtimegi_oh="5";
    }elseif($sigi=="축"){  
	$siju=$sixty[37]; $Xtimegan_oh="4"; $Xtimegi_oh="3";
    }elseif($sigi=="인"){  
	$siju=$sixty[38]; $Xtimegan_oh="5"; $Xtimegi_oh="1";
    }elseif($sigi=="묘"){  
	$siju=$sixty[39]; $Xtimegan_oh="5"; $Xtimegi_oh="1";
    }elseif($sigi=="진"){  
	$siju=$sixty[40]; $Xtimegan_oh="1"; $Xtimegi_oh="3";
    }elseif($sigi=="사"){  
	$siju=$sixty[41]; $Xtimegan_oh="1"; $Xtimegi_oh="2";
    }elseif($sigi=="오"){  
	$siju=$sixty[42]; $Xtimegan_oh="2"; $Xtimegi_oh="2";
    }elseif($sigi=="미"){  
	$siju=$sixty[43]; $Xtimegan_oh="2"; $Xtimegi_oh="3";
    }elseif($sigi=="신"){  
	$siju=$sixty[44]; $Xtimegan_oh="3"; $Xtimegi_oh="4";
    }elseif($sigi=="유"){  
	$siju=$sixty[45]; $Xtimegan_oh="3"; $Xtimegi_oh="4";
    }elseif($sigi=="술"){  
	$siju=$sixty[46]; $Xtimegan_oh="4"; $Xtimegi_oh="3";
    }elseif($sigi=="해" ){ 
	$siju=$sixty[47]; $Xtimegan_oh="4"; $Xtimegi_oh="5";
    }else{  
	$siju=$sixty[48]; $Xtimegan_oh="5"; $Xtimegi_oh="5";
	}

}else{

    if($sigi=="자"){ 
	$siju=$sixty[48]; $Xtimegan_oh="5"; $Xtimegi_oh="5";
    }elseif($sigi=="축" ){ 
	$siju=$sixty[49]; $Xtimegan_oh="5"; $Xtimegi_oh="3";
    }elseif($sigi=="인" ){ 
	$siju=$sixty[50]; $Xtimegan_oh="1"; $Xtimegi_oh="1";
    }elseif($sigi=="묘" ){
	$siju=$sixty[51]; $Xtimegan_oh="1"; $Xtimegi_oh="1";
    }elseif($sigi=="진" ){ 
	$siju=$sixty[52]; $Xtimegan_oh="2"; $Xtimegi_oh="3";
    }elseif($sigi=="사" ){ 
	$siju=$sixty[53]; $Xtimegan_oh="2"; $Xtimegi_oh="2";
    }elseif($sigi=="오" ){ 
	$siju=$sixty[54]; $Xtimegan_oh="3"; $Xtimegi_oh="2";
    }elseif($sigi=="미" ){
	$siju=$sixty[55]; $Xtimegan_oh="3"; $Xtimegi_oh="3";
    }elseif($sigi=="신" ){ 
	$siju=$sixty[56]; $Xtimegan_oh="4"; $Xtimegi_oh="4";
    }elseif($sigi=="유" ){ 
	$siju=$sixty[57]; $Xtimegan_oh="4"; $Xtimegi_oh="4";
    }elseif($sigi=="술" ){ 
	$siju=$sixty[58]; $Xtimegan_oh="5"; $Xtimegi_oh="3";
    }elseif($sigi=="해" ){
	$siju=$sixty[59]; $Xtimegan_oh="5"; $Xtimegi_oh="5";
    }else{
	$siju=$sixty[0]; $Xtimegan_oh="1"; $Xtimegi_oh="5";
	}
}



for($i = 0; $i <= sizeof($sixty); $i++){
	if($siju == $sixty[$i]){
		$sijuseed = $i;
		break;
	}
}

$sdf=$bmonth;
$mkSaju = $yearju."-".$yearseed."-".$weulju."-".$weulseed."-".$ilju."-".$iljuseed."-".$siju."-".$sijuseed;

	return $mkSaju;
}


//'음력 변환기




	$sql = "select julipil from manse_data where neun='".$Tyear."' and weul='".$Tmonth."'";
	$query = mysql_query($sql);
	$all = mysql_affected_rows();

	for ($i = 0 ; $i<$all; $i++) {
		   mysql_data_seek($query,$i);
		   $row = mysql_fetch_array($query);

		   $jul = stripslashes($row[julipil]);
	}


?>