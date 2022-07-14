 <? 
//Redim gDIV(CY_MAX - 1901, 24);		//' As Date '계산 24절기
//Redim mstLTBL(CY_NUM);		//' As String '음양력 변환 table
//Redim miDT(CY_NUM);		//' As Integer '음양력 계산에서 내부사용 변수
//Redim miLDAY(11);		//' As Integer
//Redim mgDIV_INTER(24);		//' As Date
//ReDim LDAY(11)

$Number = "Number";
$SipSung  = "SipSung";
$Div  = "Div";
$Div1  = "Div1";
$Div2  = "Div2";
$g_YukChin  = "g_YukChin";
$yukeui  = "yukeui";
$SamWon_name  = "SamWon_name";
$EumYang_name  = "EumYang_name";
$Han_sex  = "Han_sex";
$Ohaeng  = "Ohaeng";


////'*************************************************************************
//'
//'	함수명	:	init_gDIV_Load 
//'	인수		:	in_date as 데이트
//'	리턴		:	
//'	설명		:	true 일때 gDIV를 채운다.
//'
////'*************************************************************************


Function init_gDIV_Load($f_name , $load_from , $load_to){		// 'As Boolean
	$CY_MIN  = 1881;
	$CY_MAX  = 2050;

	$f_Begin_Flag = True;

	$fp = fopen("../../data/div24.dat", "r");
	$allText = fread($fp, filesize("../../data/div24.dat"));							// 파일을 읽고
	fclose($fp);                                      // 파일을 닫고

	$out = explode(chr(10), $allText);        // 처리하고

	for($i=0; $i < sizeof($out); $i++){
		$f_buf = $out[$i];

        $t_i = substr($f_buf, 0, 4);
        $t_j = substr($f_buf, 4, 3);
        $t_date = substr($f_buf, 7, strLen($f_buf) - 8);

        If($f_Begin_Flag == True){
            $load_from = $t_date;
        }

        $f_Begin_Flag = False;
        $load_to = $t_date;

        If($t_i <= $CY_MIN || $t_i >= $CY_MAX || $t_j <= 0 || $t_j >= 25){
            $init_gDIV_Load = False;

            return $init_gDIV_Load;
        }
		
        $gDIV[$t_i - 1901][$t_j]= $t_date;

	}

    $init_gDIV_Load = True;

	return $init_gDIV_Load;
}

//'*************************************************************************
//'
//'	함수명	:	f_Pre_Div24 
//'	인수		:	in_date as 데이트
//'	리턴		:	
//'	설명		:	이전 년 절기를 찾음ex)1혹 12월일때 적용
//'
//'*************************************************************************

Function f_Pre_Div24($in_date, $gDIV){		//' As Date
   
    $yyyy = date("Y", strtotime($in_date));

    If($gDIV[$yyyy - 1901][1] > $in_date){					//'만일 일자가 1월 6일보다 작으면
        $f_Pre_Div24 = $gDIV[($yyyy - 1) - 1901][24];			//'전년도 12월 제일 큰 절기를 반환한다.
        return $f_Pre_Div24;
	}
    $wol_cnt = 1;

    for($wol_cnt = 0; $wol_cnt < 25; $wol_cnt++){										//' Inner loop.
        If($gDIV[$yyyy - 1901][$wol_cnt] > $in_date){
            $wol_cnt = $wol_cnt - 1;
            $f_Pre_Div24 = $gDIV[$yyyy - 1901][$wol_cnt];
            return $f_Pre_Div24;
        }
        $wol_cnt = $wol_cnt + 1;
	}

    If($gDIV[$yyyy - 1901][24] < $in_date){						//' 만일 일자가 12월 24일보다 크면 금년 제일 큰 절기를 반환한다.
        $f_Pre_Div24 = $gDIV[$yyyy - 1901][24];					//'전년도 12월 제일 큰 절기를 반환한다.
        return $f_Pre_Div24;
    }

	echo $f_Pre_Div24;

	return f_Pre_Div24;
}

//'*************************************************************************
//'
//'	함수명	:	f_Next_Div24 
//'	인수		:	in_date as 데이트
//'	리턴		:	
//'	설명		:	다음 절기를 찾음
//'
//'*************************************************************************

Function f_Next_Div24($in_date, $gDIV){	// 'As Date
    $wh_yy = 0;
    $wh_cnt = fi_Pre_Div24($in_date, $gDIV);

    If($wh_cnt == 0){
        $f_Next_Div24 = $gDIV[date("Y", strtotime($in_date)) - 1901][1];

		return $f_Next_Div24;
    }Else{
        If($wh_cnt > 23){
            If($in_date > $gDIV[date("Y", strtotime($in_date)) - 1901][24]){					// '만약 24절기가 전년도 이면
                $f_Next_Div24 = $gDIV[(date("Y", strtotime($in_date)) + 1) - 1901][1];				//'다음해 절기로 표기함

				return $f_Next_Div24;
            }Else{
				$f_Next_Div24 = $gDIV[date("Y", strtotime($in_date)) - 1901][1];

				return $f_Next_Div24;
            }
        }Else{
            $f_Next_Div24 = $gDIV[date("Y", strtotime($in_date)) - 1901][$wh_cnt + 1];
			
			return $f_Next_Div24;
		}
	}
}

//'*************************************************************************
//'
//'	함수명	:	gp_Default_option -> Insa_설정
//'	인수		:	
//'	리턴		:	
//'	설명		:	p_Cal_Palja 함수의 기본값을 설정 한다.
//'
//'*************************************************************************

function gp_Default_option(){
	$gsLong = 127.5;
    $giYajaSi = 0;
    $giSummer = 0;
    $giKTime = 0;
    $gfDivCal = True;
    $gfDivLoad = False;
}
//'*************************************************************************
//'
//'	함수명	:	fi_Pre_Div24 
//'	인수		:	in_date as 데이트
//'	리턴		:	
//'	설명		:	이전 월 절기를 찾음ex)2월~11월
//'
//'*************************************************************************

Function fi_Pre_Div24($in_date, $gDIV){		//' As Integer
      $yyyy = date("Y", strtotime($in_date));

    If($gDIV[$yyyy - 1901][1] > $in_date){		// '만일 일자가 1월 6일보다 작으면
        $fi_Pre_Div24 = 24;
        return $fi_Pre_Div24;
    }
    
    $wol_cnt = 1;

	for($wol_cnt = 0; $wol_cnt < 25; $wol_cnt++){
        If($gDIV[$yyyy - 1901][$wol_cnt] > $in_date){
            $fi_Pre_Div24 = $wol_cnt - 1;
            return $fi_Pre_Div24;
		}
        $wol_cnt = $wol_cnt + 1;
	}

    If($gDIV[$yyyy - 1901][24] < $in_date){	//  ' 만일 일자가 12월 24일보다 크면 금년 제일 큰 절기를 반환한다.
        $fi_Pre_Div24 = 24;
		return $fi_Pre_Div24;
	}
}

//'*************************************************************************
//'
//'	함수명	:	fSS 
//'	인수		:	in_strNum 숫자 in_strtype 타입
//'	리턴		:	
//'	설명		:	f_SajuStr호출
//'
//'*************************************************************************

function fSS($in_N , $in_T){
    $fSS = f_SajuStr($in_N, $in_T);
    return $fSS;
}

//'*************************************************************************
//'
//'	함수명	:	f_SajuStr 
//'	인수		:	in_strNum 숫자 in_strtype 타입
//'	리턴		:	
//'	설명		:	숫자를 받아 타입(간,지,절기등등을 해당 한문으로 .리턴.)..
//'
//'*************************************************************************

Function f_SajuStr($in_strNum , $in_strtype){
	$Gan  = "Gan";
	$Ji  = "Ji";

   switch($in_strtype){
        Case $Gan :
            switch($in_strNum){
                Case 1: $f_SajuStr = "甲"; break;
                Case 2: $f_SajuStr = "乙"; break;
                Case 3: $f_SajuStr = "丙"; break;
                Case 4: $f_SajuStr = "丁"; break;
                Case 5: $f_SajuStr = "戊"; break;
                Case 6: $f_SajuStr = "己"; break;
                Case 7: $f_SajuStr = "庚"; break;
                Case 8: $f_SajuStr = "辛"; break;
                Case 9: $f_SajuStr = "壬"; break;
                Case 10: $f_SajuStr = "癸"; break;
                default: $f_SajuStr = "??"; break;
			};
			break;
        Case $Ji :
            switch($in_strNum){
                Case 1: $f_SajuStr = "子"; break;
                Case 2: $f_SajuStr = "丑"; break;
                Case 3: $f_SajuStr = "寅"; break;
                Case 4: $f_SajuStr = "卯"; break;
                Case 5: $f_SajuStr = "辰"; break;
                Case 6: $f_SajuStr = "巳"; break;
                Case 7: $f_SajuStr = "午"; break;
                Case 8: $f_SajuStr = "未"; break;
                Case 9: $f_SajuStr = "申"; break;
                Case 10: $f_SajuStr = "酉"; break;
                Case 11: $f_SajuStr = "戌"; break;
                Case 12: $f_SajuStr = "亥"; break;
                default: $f_SajuStr = "??"; break;
            };
			break;
        Case $Number :
            switch($in_strNum){ //'한자 숫자를 표현할 경우
                Case 0: $f_SajuStr = "00"; break;
                Case 1: $f_SajuStr = "一"; break;
                Case 2: $f_SajuStr = "二"; break;
                Case 3: $f_SajuStr = "三"; break;
                Case 4: $f_SajuStr = "四"; break;
                Case 5: $f_SajuStr = "五"; break;
                Case 6: $f_SajuStr = "六"; break;
                Case 7: $f_SajuStr = "七"; break;
                Case 8: $f_SajuStr = "八"; break;
                Case 9: $f_SajuStr = "九"; break;
                Case 10: $f_SajuStr = "十"; break;
                Case 100: $f_SajuStr = "百"; break;
                default: $f_SajuStr = "??"; break;
            };
			break;
        Case $SipSung : //'사주 십성을 표시할 경우
            switch($in_strNum){
                Case 1: $f_SajuStr = "比肩"; break;
                Case 2: $f_SajuStr = "劫財"; break;
                Case 3: $f_SajuStr = "食身"; break;
                Case 4: $f_SajuStr = "傷官"; break;
                Case 5: $f_SajuStr = "扁財"; break;
                Case 6: $f_SajuStr = "正財"; break;
                Case 7: $f_SajuStr = "扁官"; break;
                Case 8: $f_SajuStr = "正官"; break;
                Case 9: $f_SajuStr = "扁印"; break;
                Case 10: $f_SajuStr = "正印"; break;
                default: $f_SajuStr = "??"; break;
            };
			break;
        Case $g_YukChin : //'기문 육친인 경우
            switch($in_strNum){
                Case 0 : 
				case 1 : $f_SajuStr = "世"; break; //
                Case 2 : $f_SajuStr = "兄"; break; //
                Case 3 : 
				case 4 : $f_SajuStr = "孫"; break; //
                Case 5 : 
				case 6 : $f_SajuStr = "財"; break; //
                Case 7 : $f_SajuStr = "鬼"; break; //
                Case 8 : $f_SajuStr = "官"; break; //
                Case 9 : 
				case 10: $f_SajuStr = "父"; break; //
                default: $f_SajuStr = "??"; break; //
            };
			break;
        Case $Div1 : //' 절기인 경우
            switch($in_strNum){
                Case 1: $f_SajuStr = "小"; break; //
                Case 2: $f_SajuStr = "大"; break; //
                Case 3: $f_SajuStr = "立"; break; //
                Case 4: $f_SajuStr = "雨"; break; //
                Case 5: $f_SajuStr = "驚"; break; //
                Case 6: $f_SajuStr = "春"; break; //
                Case 7: $f_SajuStr = "淸"; break; //
                Case 8: $f_SajuStr = "穀"; break; //
                Case 9: $f_SajuStr = "立"; break; //
                Case 10: $f_SajuStr = "小"; break; //
                Case 11: $f_SajuStr = "芒"; break; //
                Case 12: $f_SajuStr = "夏"; break; //
                Case 13: $f_SajuStr = "小"; break; //
                Case 14: $f_SajuStr = "大"; break; //
                Case 15: $f_SajuStr = "立"; break; //
                Case 16: $f_SajuStr = "處"; break; //
                Case 17: $f_SajuStr = "白"; break; //
                Case 18: $f_SajuStr = "秋"; break; //
                Case 19: $f_SajuStr = "寒"; break; //
                Case 20: $f_SajuStr = "霜"; break; //
                Case 21: $f_SajuStr = "立"; break; //
                Case 22: $f_SajuStr = "小"; break; //
                Case 23: $f_SajuStr = "大"; break; //
                Case 24: $f_SajuStr = "冬"; break; //
                default: $f_SajuStr = "??"; break; //
            };
			break;
        Case $Div2 :		//' 절기인 경우
            switch($in_strNum){
                Case 1: $f_SajuStr = "寒"; break; //
                Case 2: $f_SajuStr = "寒"; break; //
                Case 3: $f_SajuStr = "春"; break; //
                Case 4: $f_SajuStr = "水"; break; //
                Case 5: $f_SajuStr = "蟄"; break; //
                Case 6: $f_SajuStr = "分"; break; //
                Case 7: $f_SajuStr = "明"; break; //
                Case 8: $f_SajuStr = "雨"; break; //
                Case 9: $f_SajuStr = "夏"; break; //
                Case 10: $f_SajuStr = "滿"; break; //
                Case 11: $f_SajuStr = "種"; break; //
                Case 12: $f_SajuStr = "至"; break; //
                Case 13: $f_SajuStr = "署"; break; //
                Case 14: $f_SajuStr = "署"; break; //
                Case 15: $f_SajuStr = "秋"; break; //
                Case 16: $f_SajuStr = "署"; break; //
                Case 17: $f_SajuStr = "露"; break; //
                Case 18: $f_SajuStr = "分"; break; //
                Case 19: $f_SajuStr = "露"; break; //
                Case 20: $f_SajuStr = "降"; break; //
                Case 21: $f_SajuStr = "冬"; break; //
                Case 22: $f_SajuStr = "雪"; break; //
                Case 23: $f_SajuStr = "雪"; break; //
                Case 24: $f_SajuStr = "至"; break; //
                default: $f_SajuStr = "??"; break; //
            };
			break;
        Case $Div :		//' 절기인 경우	
            switch($in_strNum){
                Case 1: $f_SajuStr = "小寒"; break; //
                Case 2: $f_SajuStr = "大寒"; break; //
                Case 3: $f_SajuStr = "立春"; break; //
                Case 4: $f_SajuStr = "雨水"; break; //
                Case 5: $f_SajuStr = "驚蟄"; break; //
                Case 6: $f_SajuStr = "春分"; break; //
                Case 7: $f_SajuStr = "淸明"; break; //
                Case 8: $f_SajuStr = "穀雨"; break; //
                Case 9: $f_SajuStr = "立夏"; break; //
                Case 10: $f_SajuStr ="小滿"; break; //
                Case 11: $f_SajuStr ="芒種"; break; //
                Case 12: $f_SajuStr ="夏至"; break; //
                Case 13: $f_SajuStr ="小署"; break; //
                Case 14: $f_SajuStr ="大署"; break; //
                Case 15: $f_SajuStr ="立秋"; break; //
                Case 16: $f_SajuStr ="處署"; break; //
                Case 17: $f_SajuStr ="白露"; break; //
                Case 18: $f_SajuStr ="秋分"; break; //
                Case 19: $f_SajuStr ="寒露"; break; //
                Case 20: $f_SajuStr ="霜降"; break; //
                Case 21: $f_SajuStr ="立冬"; break; //
                Case 22: $f_SajuStr ="小雪"; break; //
                Case 23: $f_SajuStr ="大雪"; break; //
                Case 24: $f_SajuStr ="冬至"; break; //
                default: $f_SajuStr ="??";	 break; //
            };
			break;
        Case $yukeui :
            switch($in_strNum){
                Case 1: $f_SajuStr = "戊"; break; //
                Case 2: $f_SajuStr = "己"; break; //
                Case 3: $f_SajuStr = "庚"; break; //
                Case 4: $f_SajuStr = "辛"; break; //
                Case 5: $f_SajuStr = "壬"; break; //
                Case 6: $f_SajuStr = "癸"; break; //
                Case 7: $f_SajuStr = "丁"; break; //
                Case 8: $f_SajuStr = "丙"; break; //
                Case 9: $f_SajuStr = "乙"; break; //
                default: $f_SajuStr = "??"; break; //
            };
			break;
        Case $EumYang_name :
            switch($in_strNum % 2){
                Case 1: $f_SajuStr = "陽"; break; //'홀수인 경우 양
                Case 0: $f_SajuStr = "陰"; break; //'짝수인 경우 음
                default: $f_SajuStr = "??";
            };
			break;
        Case $Han_sex :
            switch($in_strNum % 2){
                Case 1: $f_SajuStr = "乾"; break; //'홀수인 경우 양
                Case 0: $f_SajuStr = "坤"; break; //'짝수인 경우 음
                default: $f_SajuStr = "??";
            };
			break;
        Case $Ohaeng :
            switch($in_strNum){
                Case 1 : 
				case 2: $f_SajuStr = "木"; break; //'홀수인 경우 양
                Case 3 : 
				case  4: $f_SajuStr = "火"; break; //'짝수인 경우 음
                Case 5 : 
				case  6: $f_SajuStr = "土"; break; //'짝수인 경우 음
                Case 7 : 
				case  8: $f_SajuStr = "金"; break; // '짝수인 경우 음
                Case 9 : 
				case  10: $f_SajuStr = "水"; break; //'짝수인 경우 음
                default: $f_SajuStr = "??"; break; //
            };
			break;
        default: $f_SajuStr = "ER";
			break;
	};
    return $f_SajuStr;
}


//'*************************************************************************
//'
//'	함수명	:	GS_INIT_LTBL 
//'	인수		:	
//'	리턴		:	
//'	설명		:	suntolun.dat을 읽어 들여 배열에 채운다.
//'
//'*************************************************************************

function GS_INIT_LTBL(){

	$CY_NUM  = 169;

		$fd = fopen("../../data/suntolun.dat", "r");                // 파일을 열고
		$allText = fread($fd, filesize("../../data/suntolun.dat")); // 파일을 읽고
		fclose($fd);                                      // 파일을 닫고
		$ss = explode(Chr(10), $allText);        // 처리하고

		For($i = 0 ; $i <= 169; $i++){
			$t_str = substr($ss[$i], 5, 13);

			$LTBL[$i]=$t_str;
			$i = $i + 1;
			If($i > $CY_NUM){break;}
		}

}


//'*************************************************************************
//'
//'	함수명	:	GS_INIT_LDAY -> 월별 마지막날..
//'	인수		:	
//'	리턴		:	
//'	설명		:	윤달을 찾아서..배열의 값들 을 변화 시킨다.ex)$LDAY[1]=28
//'
//'*************************************************************************


Function GS_INIT_LDAY(){
    $LDAY[0] = 31;
    $LDAY[1] = 0;
    $LDAY[2] = 31;
    $LDAY[3] = 30;
    $LDAY[4] = 31;
    $LDAY[5] = 30;
    $LDAY[6] = 31;
    $LDAY[7] = 31;
    $LDAY[8] = 30;
    $LDAY[9] = 31;
    $LDAY[10] = 30;
    $LDAY[11] = 31;
}


/*'*************************************************************************
'
'	함수명	:	gf_Lun2Sun -> 음력을 양력으로
'	인수		:	GF_YEAR , GF_MONTH , GF_DAY
'	리턴		:	GF_YEAR."-".GF_MONTH."-".GF_DAY
'	설명		:	말그대로 음력을 양력으로
'
//'*************************************************************************/

Function gf_Lun2Sun($GF_YEAR , $GF_MONTH , $GF_DAY , $GF_WEEK ){
   
	$CY_NUM  = 169;

		$fd = fopen("../../data/suntolun.dat", "r");                // 파일을 열고
		$allText = fread($fd, filesize("../../data/suntolun.dat")); // 파일을 읽고
		fclose($fd);                                      // 파일을 닫고
		$ss = explode(Chr(10), $allText);        // 처리하고

		For($i = 0; $i <= sizeof($ss); $i++){
			$t_str = substr($ss[$i], 5, 13);

			$LTBL[$i]=$t_str;
			//$i = $i + 1;
			If($i > $CY_NUM){break;}
		}

    $LDAY[0] = 31;
    $LDAY[1] = 0;
    $LDAY[2] = 31;
    $LDAY[3] = 30;
    $LDAY[4] = 31;
    $LDAY[5] = 30;
    $LDAY[6] = 31;
    $LDAY[7] = 31;
    $LDAY[8] = 30;
    $LDAY[9] = 31;
    $LDAY[10] = 30;
    $LDAY[11] = 31;
    
    $M1 = -1;
    $TD = 0;
    
    If($GF_YEAR != 1881){
       $M1 = $GF_YEAR - 1882;
       For($I = 0; $I <= $M1; $I++){
			For($J = 1; $J <= 13; $J++){
              $TD = $TD + subStr($LTBL[$I], $J - 1, 1);
			}

		   If(subStr($LTBL[$I], 12, 1) == 0){
			  $TD = $TD + 336;
		   }Else{
			  $TD = $TD + 362;
		   }
       }
    }
    
    $M1 = $M1 + 1;
    $N2 = $GF_MONTH - 1;
    $M2 = -1;
    
    for($i = 0; $i < 9999; $i++){
       $M2 = $M2 + 1;

       If(subStr($LTBL[$M1], $M2, 1) > 2){
          $TD = $TD + 26 + subStr($LTBL[$M1], $M2, 1);
          $N2 = $N2 + 1;
       }Else{
          If($M2 == $N2){
             break;
		  }Else{
             $TD = $TD + 28 + subStr($LTBL[$M1], $M2, 1);
		  }
		}
	}
     
     $TD = $TD + $GF_DAY + 29;
     $M1 = 1880;
     
    for($i = 0; $i < 9999; $i++){
          $M1 = $M1 + 1;
          If($M1 % 400 == 0 || $M1 % 100 != 0 && $M1 % 4 == 0){
             $LEAP = 1;
          }Else{
             $LEAP = 0;
		  }
          
          If($LEAP){
             $M2 = 366;
          }Else{
             $M2 = 365;
          }

          If($TD < $M2){
             break;
          }
          $TD = $TD - $M2;
	 }

     $SYEAR = $M1;
     $LDAY[1] = $M2 - 337;
     $M1 = 0;
     
    for($i = 0; $i < 9999; $i++){
          $M1 = $M1 + 1;
          If($TD <= $LDAY[$M1 - 1]){
             break;
          }
          $TD = $TD - $LDAY[$M1 - 1];
     }

     $SMONTH = $M1;
     $SDAY = $TD;
     $Y = $SYEAR - 1;
     $TD = ($Y * 365) + ($Y / 4) - ($Y / 100) + ($Y / 400);
     
     If($SYEAR % 400 == 0 || $SYEAR % 100 != 0 && $SYEAR % 4 == 0){
        $LEAP = 1;
     }Else{
        $LEAP = 0;
	}
 
     If($LEAP){
        $LDAY[1] = 29;
     }Else{
        $LDAY[1] = 28;
     }

     For($I = 0 ; $I <= $SMONTH - 2; $I++){
         $TD = $TD + $LDAY[$I];
	 }

     $TD = $TD + $SDAY;
     $W = $TD % 7;
     
     $GF_YEAR = $SYEAR;
     $GF_MONTH = $SMONTH;
     $GF_DAY = $SDAY;
     $GF_WEEK = $WEEK[$W];
     $gf_Lun2Sun = True;

    $gf_Lun2Sun = $GF_YEAR."-".$GF_MONTH."-".$GF_DAY;

	 return $gf_Lun2Sun;
}



/***************************************************************************
'
'	함수명	:	gf_Sun2Lun -> 양력을 음력으로
'	인수		:	GF_YEAR , GF_MONTH , GF_DAY
'	리턴		:	GF_YEAR."-".GF_MONTH."-".GF_DAY
'	설명		:	말그대로 양력을 음력으로
'
//'*************************************************************************/


Function gf_Sun2Lun($GF_YEAR , $GF_MONTH , $GF_DAY ){
    
	$CY_NUM  = 169;

		$fd = fopen("../../data/suntolun.dat", "r");                // 파일을 열고
		$allText = fread($fd, filesize("../../data/suntolun.dat")); // 파일을 읽고
		fclose($fd);                                      // 파일을 닫고
		$ss = explode(Chr(10), $allText);        // 처리하고

		For($i = 0 ; $i <= 169; $i++){
			$t_str = substr($ss[$i], 5, 13);

			$LTBL[$i]=$t_str;
			$i = $i + 1;
			If($i > $CY_NUM){break;}
		}

    $LDAY[0] = 31;
    $LDAY[1] = 0;
    $LDAY[2] = 31;
    $LDAY[3] = 30;
    $LDAY[4] = 31;
    $LDAY[5] = 30;
    $LDAY[6] = 31;
    $LDAY[7] = 31;
    $LDAY[8] = 30;
    $LDAY[9] = 31;
    $LDAY[10] = 30;
    $LDAY[11] = 31;

    
    For($I = 0 ; $I <= 162; $I++){
        $DT[$I] = 0;
        For($J = 1 ; $J <= 12; $J++){
            switch(substr($LTBL[$I], $J, 1)){
                   Case 1 :
				   case 3 : 
                        $DT[$I] = $DT[$I] + 29; break;
                   Case 2 :
				   case 4 :
                        $DT[$I] = $DT[$I] + 30; break;
            }
        } 
        
        switch(substr($LTBL[$I], 13, 1)){
               Case 0 :
               Case 1 :
			   case 3:
                    $DT[$I] = $DT[$I] + 29; break;
               Case 2 :
			   case 4 :
                    $DT[$I] = $DT[$I] + 30; break;
        }
    }
		
    $TD1 = (1880 * 365) + 1880 / 4 - 1880 / 100 + 1880 / 400 + 30;
    $K11 = ($GF_YEAR - 1);
    $TD2 = $K11 * 365 + $K11 / 4 - $K11 / 100 + $K11 / 400;
    
    If($GF_YEAR % 400 == 0 || $GF_YEAR % 100 != 0 && $GF_YEAR % 4 == 0){
        $LDAY[1] = 29;
    }Else{
        $LDAY[1] = 28;
    }
    
    If($GF_DAY > $LDAY[$GF_MONTH - 1]){
	   $gf_Sun2Lun = $GF_YEAR."-".$GF_MONTH."-".$GF_DAY;
       return $gf_Sun2Lun;
    }
    
    For($I = 0 ; $I <= $GF_MONTH - 2; $I++){
        $TD2 = $TD2 + $LDAY[$I];
    }

    $TD2 = $TD2 + $GF_DAY;
    $TD = $TD2 - $TD1 + 1;
    $TD0 = $DT[0];

    For($I = 0 ; $I <= 162; $I++){
        If($TD <= $TD0){
           break;
        }
        $TD0 = $TD0 + $DT[$I + 1];
    }
    
    $GF_YEAR = $I + 1881;
    $TD0 = $TD0 - $DT[$I];
    $TD = $TD - $TD0;
    
    If(substr($LTBL[$I], 13, 1) == 0){
       $JCOUNT = 11;
    }Else{
       $JCOUNT = 12;
    }
    $M2 = 0;
    
    For($J = 0 ; $J <= $JCOUNT; $J++){
        If(substr($LTBL[$I], $J + 1, 1) <= 2){
           $M2 = $M2 + 1;
           $M1 = substr($LTBL[$I], $J + 1, 1) + 28;
        }Else{
           $M1 = substr($LTBL[$I], $J + 1, 1) + 26;
        }
        If($TD <= $M1){
           break;	//Exit For
        }
        $TD = $TD - $M1;
    } 
    $GF_MONTH = $M2;
    $GF_DAY = $TD;

    $gf_Sun2Lun = $GF_YEAR."-".$GF_MONTH."-".$GF_DAY;

	return $gf_Sun2Lun;
}
/*************************************************************************
'
'	함수명	:	f_Cal_GapJa60 
'	인수		:	in_Gan 숫자 in_Gan 숫자
'	리턴		:	
'	설명		:	큰 숫자를 갑/자에 맞게 나눈다.
'
//'*************************************************************************/

Function f_Cal_GapJa60($in_Gan , $in_Ji ){

    If($in_Gan < 0 || $in_Ji < 0){
        $f_Cal_GapJa60 = -1;
        return $f_Cal_GapJa60;
    }
    If($in_Gan == 0 && $in_Ji == 0){
        $f_Cal_GapJa60 = 0;
        return $f_Cal_GapJa60;
    }
    $cal_ji = $in_Ji;
    If($in_Gan >= $cal_ji){$cal_ji = $cal_ji + 10;}

    $cal_gapja60 = ((10 - ($cal_ji - $in_Gan)) % 10) * 6 + $in_Ji;
    $f_Cal_GapJa60 = $cal_gapja60;
    
	return $f_Cal_GapJa60;
}
/*************************************************************************
'
'	함수명	:	Math_RoundOff -> 반올림 함수
'	인수		:	su1  , decimalPlaces 
'	리턴		:	sTemp
'	설명		:	0.5는 반올림 되지 않기에..반올림 해서 리턴
'
//'*************************************************************************/



 Function Math_RoundOff( $su1, $decimalPlaces){
  $antilog = 1;

  If($decimalPlaces > 0){		 //' 10의 0승 이상 처리
   //$antilog = 10 ^ $decimalPlaces;

   $antilog = pow(10, 1/$decimalPlaces);
	  
   $sTemp = floor($su1 / $antilog + 0.5 ) * $antilog;

  }Else{ //' 1 자리와 그 이하 처리
   $sTemp = Round( $su1 + 0.000001 , -($decimalPlaces));
  }

  $Math_RoundOff = $sTemp;

  return $Math_RoundOff;
}
/*************************************************************************
'
'	함수명	:	find_yong->용신 찾기 
'	인수		:	$yeargan , $yeargi , $monthgan , $monthgi , $daygan , $daygi , $timegan , $timegi
'	리턴		:	$hansin ."-". $goosin ."-". $keesin ."-". $heesin ."-". $yongsin 
'	설명		:	팔자를 입력 받아 십성과 비교..해서 찾음
'
//'*************************************************************************/


$sixty="甲子,乙丑,丙寅,丁卯,戊辰,己巳,庚午,辛未,壬申,癸酉,甲戌,乙亥,丙子,丁丑,戊寅,己卯,庚辰,辛巳,壬午,癸未,甲申,乙酉,丙戌,丁亥,戊子,己丑,庚寅,辛卯,壬辰,癸巳,甲午,乙未,丙申,丁酉,戊戌,己亥,庚子,辛丑,壬寅,癸卯,甲辰,乙巳,丙午,丁未,戊申,己酉,庚戌,辛亥,壬子,癸丑,甲寅,乙卯,丙辰,丁巳,戊午,己未,庚申,辛酉,壬戌,癸亥";
$sixty=explode(",", $sixty);


$gigi="子,丑,寅,卯,辰,巳,午,未,申,酉,戌,亥";
$gigi=explode(",", $gigi);


Function find_yong($yeargan , $yeargi , $monthgan , $monthgi , $daygan , $daygi , $timegan , $timegi){

//echo $yeargan ." , ". $yeargi ." , ". $monthgan ." , ". $monthgi ." , ". $daygan ." , ". $daygi ." , ". $timegan ." , ". $timegi;

//$paljayuk[0] = substr(F_re_yukchin($yeargan,10,$daygan),5,4);		//'yukchin($yeargan)
$imsi=explode("(",F_re_yukchin($yeargan,10,$daygan));
$imsi2=explode(")",$imsi[1]);
$paljayuk[0]=$imsi2[0];

//$paljayuk[1] = substr(F_re_yukchin($yeargi,12,$daygan),5,4);		//'yukchin($yeargi)
$imsi=explode("(",F_re_yukchin($yeargi,12,$daygan));
$imsi2=explode(")",$imsi[1]);
$paljayuk[1]=$imsi2[0];

//$paljayuk[2] = substr(F_re_yukchin($monthgan,10,$daygan),5,4);		//'yukchin($monthgan)
$imsi=explode("(",F_re_yukchin($monthgan,10,$daygan));
$imsi2=explode(")",$imsi[1]);
$paljayuk[2]=$imsi2[0];


//$paljayuk[3] = substr(F_re_yukchin($monthgi,12,$daygan),5,4);		//'yukchin($monthgi)
$imsi=explode("(",F_re_yukchin($monthgi,12,$daygan));
$imsi2=explode(")",$imsi[1]);
$paljayuk[3]=$imsi2[0];

//$paljayuk[4] = substr(F_re_yukchin($daygi,12,$daygan),5,4);		//'$paljayuk[4]
$imsi=explode("(",F_re_yukchin($daygi,12,$daygan));
$imsi2=explode(")",$imsi[1]);
$paljayuk[4]=$imsi2[0];

//$paljayuk[5] = substr(F_re_yukchin($timegan,10,$daygan),5,4);		//'yukchin($timegan)
$imsi=explode("(",F_re_yukchin($timegan,12,$daygan));
$imsi2=explode(")",$imsi[1]);
$paljayuk[5]=$imsi2[0];

$paljayuk[6] = substr(F_re_yukchin($timegi,12,$daygan),5,4);		//'yukchin($timegi)
$imsi=explode("(",F_re_yukchin($timegi,12,$daygan));
$imsi2=explode(")",$imsi[1]);
$paljayuk[6]=$imsi2[0];

$paljayuk1[0] = substr(F_re_yukchin($yeargan,10,$daygan),5,4);		//'yukchin($yeargan) 
$imsi=explode("(",F_re_yukchin($yeargan,12,$daygan));
$imsi2=explode(")",$imsi[1]);
$paljayuk[10]=$imsi2[0];

//$paljayuk1[1] = substr(F_re_yukchin($yeargi,12,$daygan),5,4);		//'yukchin($yeargi)
$imsi=explode("(",F_re_yukchin($yeargi,12,$daygan));
$imsi2=explode(")",$imsi[1]);
$paljayuk1[1]=$imsi2[0];

//$paljayuk1[2] = substr(F_re_yukchin($monthgan,10,$daygan),5,4);		//'yukchin($monthgan)
$imsi=explode("(",F_re_yukchin($monthgan,12,$daygan));
$imsi2=explode(")",$imsi[1]);
$paljayuk1[2]=$imsi2[0];

//$paljayuk1[3] = substr(F_re_yukchin($timegan,10,$daygan),5,4);		//'yukchin($timegan)
$imsi=explode("(",F_re_yukchin($timegan,12,$daygan));
$imsi2=explode(")",$imsi[1]);
$paljayuk1[3]=$imsi2[0];

//$paljayuk1[4] = substr(F_re_yukchin($timegi,12,$daygan),5,4);		//'yukchin($timegi)
$imsi=explode("(",F_re_yukchin($timegi,12,$daygan));
$imsi2=explode(")",$imsi[1]);
$paljayuk1[4]=$imsi2[0];



$$cnt = 0;
for($i = 0; $i <= 4; $i++){
	if($paljayuk1[$i] == "偏印" || $paljayuk1[$i] == "正印"){
	$cnt = $cnt + 1;
	}
}

$inn = $cnt;


$cnt = 0;
for($i = 0; $i <= 4; $i++){
	if($paljayuk1[$i] == "比肩" || $paljayuk1[$i] == "劫財"){
	$cnt = $cnt + 1;
	}
}
$bi = $cnt;

$cnt = 0;
for($i = 0; $i <= 4; $i++){
	if($paljayuk1[$i] == "食神" || $paljayuk1[$i] == "傷官"){
	$cnt = $cnt + 1;
	}
}
$sh = $cnt;

$cnt = 0;
for($i = 0; $i <= 4; $i++){
	if($paljayuk1[$i] == "偏財" || $paljayuk1[$i] == "正財"){
	$cnt = $cnt + 1;
	}
}
$ja = $cnt;

$cnt = 0;
for($i = 0; $i <= 4; $i++){
	if($paljayuk1[$i] == "偏官" || $paljayuk1[$i] == "正官"){
	$cnt = $cnt + 1;
	}
}
$kw = $cnt;

$inbi = $inn + $bi;

$y0 = "比肩" ; $y1 = "劫財" ; $y2 = "食神" ; $y3 = "傷官" ; $y4 = "偏財";
$y5 = "正財" ; $y6 = "偏官" ; $y7 = "正官" ; $y8 = "偏印" ; $y9 = "正印";


switch($paljayuk[3]){
case $y8 :
	if($paljayuk[4]==$y8 || $paljayuk[4]==$y9){
	$hyung=1;
	}elseif($paljayuk[4]==$y0 || $paljayuk[4]==$y1){
	$hyung=2;
	}elseif($paljayuk[4]==$y2 || $paljayuk[4]==$y3){
	$hyung=3;
	}elseif($paljayuk[4]==$y4 || $paljayuk[4]==$y5){
	$hyung=4;
	}else{
	$hyung=5;
	}
	break;
case $y9 :
	if($paljayuk[4]==$y8 || $paljayuk[4]==$y9){ 
	$hyung=1;
	}elseif($paljayuk[4]==$y0 || $paljayuk[4]==$y1){ 
	$hyung=2;
	}elseif($paljayuk[4]==$y2 || $paljayuk[4]==$y3){ 
	$hyung=3;
	}elseif($paljayuk[4]==$y4 || $paljayuk[4]==$y5){ 
	$hyung=4;
	}else{
	$hyung=5;
	}
	break;
case $y0 :
	if($paljayuk[4]==$y8 || $paljayuk[4]==$y9){ 
	$hyung=6;
	}elseif($paljayuk[4]==$y0 || $paljayuk[4]==$y1){ 
	$hyung=7;
	}elseif($paljayuk[4]==$y2 || $paljayuk[4]==$y3){ 
	$hyung=8;
	}elseif($paljayuk[4]==$y4 || $paljayuk[4]==$y5){ 
	$hyung=9;
	}else{
	$hyung=10;
	}
	break;
case $y1 :
	if($paljayuk[4]==$y8 || $paljayuk[4]==$y9){ 
	$hyung=6;
	}elseif($paljayuk[4]==$y0 || $paljayuk[4]==$y1){ 
	$hyung=7;
	}elseif($paljayuk[4]==$y2 || $paljayuk[4]==$y3){ 
	$hyung=8;
	}elseif($paljayuk[4]==$y4 || $paljayuk[4]==$y5){ 
	$hyung=9;
	}else{
	$hyung=10;
	}
	break;
case $y2 :
	if($paljayuk[4]==$y8 || $paljayuk[4]==$y9){ 
	$hyung=11;
	}elseif($paljayuk[4]==$y0 || $paljayuk[4]==$y1){ 
	$hyung=12;
	}elseif($paljayuk[4]==$y2 || $paljayuk[4]==$y3){ 
	$hyung=13;
	}elseif($paljayuk[4]==$y4 || $paljayuk[4]==$y5){ 
	$hyung=14;
	}else{
	$hyung=15;
	}
	break;
case $y3 :
	if($paljayuk[4]==$y8 || $paljayuk[4]==$y9){ 
	$hyung=11;
	}elseif($paljayuk[4]==$y0 || $paljayuk[4]==$y1){ 
	$hyung=12;
	}elseif($paljayuk[4]==$y2 || $paljayuk[4]==$y3){ 
	$hyung=13;
	}elseif($paljayuk[4]==$y4 || $paljayuk[4]==$y5){ 
	$hyung=14;
	}else{
	$hyung=15;
	}
	break;
case $y4 :
	if($paljayuk[4]==$y8 || $paljayuk[4]==$y9){ 
	$hyung=16;
	}elseif($paljayuk[4]==$y0 || $paljayuk[4]==$y1){ 
	$hyung=17;
	}elseif($paljayuk[4]==$y2 || $paljayuk[4]==$y3){ 
	$hyung=18;
	}elseif($paljayuk[4]==$y4 || $paljayuk[4]==$y5){ 
	$hyung=19;
	}else{
	$hyung=20;
	} 
	break;
case $y5 :
	if($paljayuk[4]==$y8 || $paljayuk[4]==$y9){ 
	$hyung=16;
	}elseif($paljayuk[4]==$y0 || $paljayuk[4]==$y1){ 
	$hyung=17;
	}elseif($paljayuk[4]==$y2 || $paljayuk[4]==$y3){ 
	$hyung=18;
	}elseif($paljayuk[4]==$y4 || $paljayuk[4]==$y5){ 
	$hyung=19;
	}else{
	$hyung=20;
	}
	break;
case $y6 :
	if($paljayuk[4]==$y8 || $paljayuk[4]==$y9){ 
	$hyung=21;
	}elseif($paljayuk[4]==$y0 || $paljayuk[4]==$y1){ 
	$hyung=22;
	}elseif($paljayuk[4]==$y2 || $paljayuk[4]==$y3){ 
	$hyung=23;
	}elseif($paljayuk[4]==$y4 || $paljayuk[4]==$y5){ 
	$hyung=24;
	}else{
	$hyung=25;
	}
	break;
case $y7 :
	if($paljayuk[4]==$y8 || $paljayuk[4]==$y9){ 
	$hyung=21;
	}elseif($paljayuk[4]==$y0 || $paljayuk[4]==$y1){ 
	$hyung=22;
	}elseif($paljayuk[4]==$y2 || $paljayuk[4]==$y3){ 
	$hyung=23;
	}elseif($paljayuk[4]==$y4 || $paljayuk[4]==$y5){ 
	$hyung=24;
	}else{
	$hyung=25;
	}
	break;
default : //echo "애러";
}

switch($hyung){
		case 1 :
			if($inbi >= 1){ 			
				if($ja >= 3){ 				
					if($kw > 0){ 					
						$Y = 4;
						$H = 3;					
					}else{					
						$Y = 3;
						$H = 2;
					}				
				}else{				
					if($sh > 0){ 					
						$Y = 2;
						$H = 3;					
					}else{					
						if($kw > 0){ 						
							$Y = 4;
							$H = 3;						
						}else{						
							if($ja > 0){ 							
								$Y = 3;
								$H = 2;							
							}else{							
								$Y = 5;
								$H = 1;							
							}					
						}
					}
				}			
			}else{			
				$Y = 5;
				$H = 1;			
			}

		case 2 :
			if($inbi >= 1){ 			
				if($sh > 0){				
					$Y = 2;
					$H = 3;				
				}else{				
					if($ja > 0){ 					
						$Y = 3;
						$H = 2;					
					}else{					
						if($kw > 0){ 						
							$Y = 4;
							$H = 3;						
						}else{						
							$Y = 5;
							$H = 1;
						}
					}	
				}
			}else{			
				$Y = 5;
				$H = 1;	
			}

		case 3 :
			if($inbi >= 3){ 			
				if($ja >= 2){ 				
					$Y = 3;
					$H = 2;				
				}else{				
					$Y = 2;
					$H = 3;
				}			
			}else{			
				if($ja >= 2){ 				
					if($bi > 0){ 					
						$Y = 1;
						$H = 5;					
					}else{					
						$Y = 5;
						$H = 1;
					}				
				}else{				
					$Y = 5;
					$H = 1;	
				}
			}

		case 4 :

			if($inbi >= 3){ 			
				if($sh > 0){				
					$Y = 2;
					$H = 3;				
				}else{				
					if($kw >= 2){ 					
						$Y = 4;
						$H = 3;					
					}else{					
						$Y = 3;
						$H = 2;
					}
				}			
			}else{			
				if($ja >= 2){ 				
					if($bi > 0){ 					
						$Y = 1;
						$H = 5;					
					}else{					
						$Y = 5;
						$H = 1;
					}				
				}else{				
					$Y = 5;
					$H = 1;				
				}
			}

		case 5 :

			if($inbi >= 3){ 			
				if($ja > 0){ 				
					$Y = 4;
					$H = 3;				
				}else{				
					if($sh > 0){ 					
						$Y = 2;
						$H = 3;					
					}else{					
						$Y = 4;
						$H = 3;
					}
				}			
			}else{			
				if($ja >= 3){ 				
					if($bi > 0){ 					
						$Y = 1;
						$H = 5;					
					}else{					
						$Y = 5;
						$H = 1;
					}				
				}else{				
					$Y = 5;
					$H = 1;				
				}
			}			

		case 6 :

			if($inbi >= 1){ 			
				if($sh > 0){ 				
					$Y = 2;
					$H = 3;				
				}else{				
					if($ja > 0){ 					
						$Y = 3;
						$H = 2;					
					}else{					
						if($kw > 0){ 						
							$Y = 4;
							$H = 3;						
						}else{						
							$Y = 1;
							$H = 5;		
						}
					}
				}	
				
			}else{
			
				if($kw >= 3){ 				
					$Y = 5;
					$H = 1;				
				}else{				
					if($ja >= 3){ 					
						$Y = 1;
						$H = 5;					
					}else{					
						$Y = 5;
						$H = 1;		
					}
				}
			}

		case 7 :

			if($inbi >= 1){ 			
				if($sh > 0){ 				
					$Y = 2;
					$H = 3;				
				}else{				
					if($kw > 0){ 					
						$Y = 4;
						$H = 3;					
					}else{					
						if($ja > 0){ 						
							$Y = 3;
							$H = 2;						
						}else{						
							$Y = 1;
							$H = 5;				
					
						}
					}
				}			
			}else{
				if($inn > 0){ 				
					$Y = 5;
					$H = 1;				
				}else{				
					$Y = 1;
					$H = 5;			
				}
			}
				
		case 8 :
			if($inbi >= 3){
				$Y = 2;
				$H = 3;
			}else{
				if($kw >= 2){
					if($inn > 0){
						$Y = 5;
						$H = 1;
					}else{
						if($bi >= 2){
							$Y = 1;
							$H = 5;
						}else{
							$Y = 1;
							$H = 5;
						}
					}
				}else{
					if($inn > 0){
						$Y = 5;
						$H = 1;
					}else{
						$Y = 1;
						$H = 5;
					}
				}
			}

		case 9 :
			if($inbi >= 2){
				if($kw > 0){
					$Y = 4;
					$H = 3;
				}else{
					if($sh > 0){
						$Y = 2;
						$H = 3;
					}else{
						$Y = 3;
						$H = 2;
					}
				}
			}else{
				if($ja >= 2){
					$Y = 1;
					$H = 5;
				}else{
					if($inn > 0){
						$Y = 5;
						$H = 1;
					}else{
						$Y = 1;
						$H = 5;
					}
				}
			}

		case 10 :
			if($inbi >= 3){
				if($ja > 0){
					$Y = 4;
					$H = 3;
				}else{
					if($sh > 0){
						if($inn >= 3){
							$Y = 4;
							$H = 3;
						}else{
							$Y = 2;
							$H = 3;
						}
					}else{
						$Y = 4;
						$H = 3;
					}
				}
			}else{
				if($kw >= 2){
					if($inn > 0){
						$Y = 5;
						$H = 1;
					}else{
						$Y = 1;
						$H = 5;
					}
				}else{
					if($inn>0){
						$Y = 5;
						$H = 1;
					}else{
						$Y = 1;
						$H = 5;
					}
				}
			}

		case 11 :

			if($inbi >= 3){
				if($inn >= 2){
					if($ja > 0){
						$Y = 3;
						$H = 2;
					}else{
						$Y = 2;
						$H = 3;
					}
				}else{
					$Y = 2;
					$H = 3;
				}
			}else{			
				$Y = 5;
				$H = 1;
			}

		case 12 :
			if($inbi >= 3){ 			
				if($inn >= 2){ 				
					if($ja > 0){ 					
						$Y = 3;
						$H = 2;					
					}else{					
						$Y = 2;
						$H = 3;
					}				
				
				}else{				
					$Y = 2;
					$H = 3;
				}			
			}else{			
				if($ja >= 2){ 				
					$Y = 1;
					$H = 5;				
				}else{				
					if($inn > 0){ 					
						$Y = 5;
						$H = 1;					
					}else{					
						$Y = 1;
						$H = 5;
					}
				}
			}

		case 13 :
			if($inbi >= 5){ 			
				$Y = 2;
				$H = 3;
			}else{
				if($inn > 0){ 				
					$Y = 5;
					$H = 1;				
				}else{				
					if($bi > 0){ 					
						$Y = 1;
						$H = 5;					
					}else{					
						if($ja > 0){ 						
							$Y = 3;
							$H = 2;						
						}else{						
							$Y = 2;
							$H = 3;						
						}
					}
				}
			}

		case 14 :
			if($inbi >= 5){ 			
				$Y = 2;
				$H = 3;			
			}else{			
				if($inn > 0){ 				
					$Y = 5;
					$H = 1;				
				}else{				
					if($bi > 0){ 					
						$Y = 1;
						$H = 5;					
					}else{					
						if($kw >= 3){ 						
							$Y = 3;
							$H = 4;						
						}else{						
							$Y = 2;
							$H = 3;					
						}
					}
				}
			}

		case 15 :

			if($inbi >= 5){ 			
				$Y = 2;
				$H = 3;			
			}else{			
				if($inn > 0){ 				
					$Y = 5;
					$H = 1;				
				}else{				
					if($bi>0){ 					
						if($bi >= 2){ 						
							$Y = 1;
							$H = 5;						
						}else{						
							if($ja > 0){ 							
								$Y = 3;
								$H = 2;							
							}else{							
								$Y = 2;
								$H = 3;						
							}
						}
					}else{					
						if($ja > 0){ 						
							$Y = 3;
							$H = 2;						
						}else{						
							if($kw >= 4){ 							
								$Y = 4;
								$H = 3;							
							}else{							
								$Y = 2;
								$H = 3;
							}
						}
					}
				}
			}	

		case 16 :
		
			if($inbi >= 3){ 			
				if($sh >0){ 				
					$Y = 3;
					$H = 2;				
				}else{				
					if($kw > 0){ 					
						$Y = 4;
						$H = 3;					
					}else{					
						$Y = 3;
						$H = 4;
					}
				}	
			}else{			
				if($ja >= 2){ 				
					if($bi > 0){ 					
						$Y = 1;
						$H = 5;					
					}else{					
						$Y = 5;
						$H = 1;
					}				
				}else{				
					$Y = 5;
					$H = 1;			
				}
			}

		case 17 :
			if($bi >= 3){ 			
				if($sh > 0){ 				
					$Y = 2;
					$H = 3;				
				}else{				
					if($kw > 0){ 					
						$Y = 4;
						$H = 3;					
					}else{					
						$Y = 3;
						$H = 2;
					}
				}				
			}else{			
				if($bi >= 2){ 				
					$Y = 1;
					$H = 5;				
				}else{				
					if($inn > 0){ 					
						if($inn >= 2){ 						
							$Y = 5;
							$H = 1;						
						}else{						
							$Y = 1;
							$H = 5;
						}			

					}else{					
						if($bi > 0){ 						
							$Y = 1;
							$H = 5;						
						}else{						
							if($kw >= 3){ 							
								$Y = 4;
								$H = 3;
							}else{							
								$Y = 1;
								$H = 5;
							}
						}
					}
				}
			}

		case 18 :
			if($inbi >= 5){ 			
				$Y = 2;
				$H = 3;			
			}else{			
				if($inn > 0){ 				
					$Y = 5;
					$H = 1;				
				}else{				
					if($bi > 0){ 					
						$Y = 1;
						$H = 5;					
					}else{					
						if($kw >= 3){
							$Y = 3;
							$H = 4;						
						}else{
							$Y = 2;
							$H = 3;
						}
					}
				}
			}

		case 19 :
			if($inbi >= 4){
				if($bi >= 3){
					if($sh > 0){
						$Y = 2;
						$H = 3;
					}else{
						$Y = 3;
						$H = 4;
					}
				}else{
					$Y = 3;
					$H = 4;
				}			
			}else{			
				if($bi > 0){
					$Y = 1;
					$H = 5;
				}else{
					if($inn > 0){
						$Y = 5;
						$H = 1;	
					}else{
						if($kw >= 3){
							$Y = 4;
							$H = 3;
						}else{
							$Y = 3;
							$H = 4;
						}
					}
				}
			}

		case 20 :
			if($inbi >= 5){
				if($inn >= 3){
					$Y = 3;
					$H = 2;
				}else{
					$Y = 4;
					$H = 3;
				}
			}else{
				if($inn >= 2){
					$Y = 5;
					$H = 1;
				}else{
					if($bi >= 2){
						if($inn > 0){
							$Y = 5;
							$H = 1;
						}else{
							$Y = 1;
							$H = 5;
						}
					}else{
						if($inn > 0){
							$Y = 5;
							$H = 1;
						}else{
							if($ja >= 3){
								$Y = 3;
								$H = 4;
							}else{
								if($kw >= 3){
									$Y = 4;
									$H = 3;
								}else{
									$Y = 3;
									$H = 4;
								}
							}
						}
					}
				}
			}


		case 21 :
			if($inbi >= 3){ 			
				if($sh >= 2){ 				
					if($ja > 0){ 					
						$Y = 3;
						$H = 2;					
					}else{					
						$Y = 4;
						$H = 3;
					}				
				}else{				
					if($inn >= 3){ 					
						if($ja > 0){ 						
							$Y = 3;
							$H = 4;						
						}else{						
							$Y = 4;
							$H = 3;
						}					
					}else{					
						$Y = 4;
						$H = 3;
					}				
				}			
			}else{			
				$Y = 5;
				$H = 1;			
			}

		case 22 :
			if($inbi >= 3){ 			
				$Y = 4;
				$H = 3;			
			}else{			
				if($inn > 0){ 				
					$Y = 5;
					$H = 1;				
				}else{				
					$Y = 1;
					$H = 5;
				}
			}

		case 23 :
			if($inbi >= 5){ 			
				if($bi >= 3){ 				
					$Y = 2;
					$H = 3;				
				}else{				
					$Y = 4;
					$H = 3;
				}			
			}else{			
				if($inn > 0){ 				
					$Y = 5;
					$H = 1;				
				}else{				
					if($bi > 0){ 					
						$Y = 1;
						$H = 5;					
					}else{					
						if($sh >= 2){ 						
							$Y = 2;
							$H = 3;						
						}else{						
							$Y = 4;
							$H = 3;
						}
					}
				}
			}

		case 24 :
			if($inbi >= 5){ 			
				if($inn >= 3){ 				
					$Y = 3;
					$H = 4;				
				}else{				
					$Y = 4;
					$H = 3;
				}			
			}else{			
				if($inn >= 2){ 				
					$Y = 5;
					$H = 1;				
				}else{				
					if($bi >= 2){ 					
						if($inn > 0){ 						
							$Y = 5;
							$H = 1;						
						}else{						
							$Y = 1;
							$H = 5;
						}					
					}else{					
						if($inn > 0){ 						
							$Y = 5;
							$H = 1;						
						}else{						
							if($ja >= 3){ 							
								$Y = 3;
								$H = 4;							
							}else{							
								if($kw >= 3){ 								
									$Y = 4;
									$H = 3;								
								}else{								
									$Y = 3;
									$H = 4;
								}
							}
						}
					}
				}
			}


		case 25 :
			if($inbi >= 5){ 			
				$Y = 4;
				$H = 3;			
			}else{			
				if($inn > 0){ 				
					if($inn >= 2){ 					
						$Y = 5;
						$H = 1;					
					}else{					
						if($ja > 0){ 						
							if($bi > 0){ 							
								$Y = 5;
								$H = 1;							
							}else{							
								$Y = 4;
								$H = 3;
							}						
						}else{						
							$Y = 5;
							$H = 1;
						}
					}				
				
				}else{				
					if($bi > 0){ 					
						if($bi >= 2){ 						
							$Y = 1;
							$H = 5;						
						}else{						
							$Y = 4;
							$H = 3;
						}										
					}else{					
						if($sh >= 3){ 						
							$Y = 3;
							$H = 4;						
						}else{						
							$Y = 4;
							$H = 3;
						}
					}
				}
			}
}		

$ssin[0]=$Y;
$ssin[1]=$H;
$ssin[2]=$ssin[0] + 3;

if($ssin[2] > 5){$ssin[2]=$ssin[2]-5;}

$ssin[3]=$ssin[1]+3;

if($ssin[3] > 5){$ssin[3]=$ssin[3]-5;}

$ssin[4]=15-($Y+$H+$ssin[2]+$ssin[3]);


if($daygan=="甲" || $daygan=="乙"){

    if($Y==1){
	$yongsin="木"; $yong_yuk="1";
    }elseif($Y==2){ 
	$yongsin="火"; $yong_yuk="2";
    }elseif($Y==3){
	$yongsin="土"; $yong_yuk="3";
    }elseif($Y==4){
	$yongsin="金"; $yong_yuk="4";
    }else{	
	$yongsin="水"; $yong_yuk="5";
	}

}elseif($daygan=="丙" || $daygan=="丁"){

    if($Y==1){
	$yongsin="火"; $yong_yuk="1";
    }elseif($Y==2){ 
	$yongsin="土"; $yong_yuk="2";
    }elseif($Y==3){
	$yongsin="金"; $yong_yuk="3";
    }elseif($Y==4){
	$yongsin="水"; $yong_yuk="4";
    }else{	
	$yongsin="木"; $yong_yuk="5";
	}

}elseif($daygan=="戊" || $daygan=="己"){

    if($Y==1){
	$yongsin="土"; $yong_yuk="1";
    }elseif($Y==2){ 
	$yongsin="金"; $yong_yuk="2";
    }elseif($Y==3){
	$yongsin="水"; $yong_yuk="3";
    }elseif($Y==4){
	$yongsin="木"; $yong_yuk="4";
    }else{	
	$yongsin="火"; $yong_yuk="5";
	}

}elseif($daygan=="庚" || $daygan=="辛"){

    if($Y==1){
	$yongsin="金"; $yong_yuk="1";
    }elseif($Y==2){ 
	$yongsin="水"; $yong_yuk="2";
    }elseif($Y==3){
	$yongsin="木"; $yong_yuk="3";
    }elseif($Y==4){
	$yongsin="火"; $yong_yuk="4";
    }else{	
	$yongsin="土"; $yong_yuk="5";
	}

}else{

    if($Y==1){
	$yongsin="水"; $yong_yuk="1";
    }elseif($Y==2){ 
	$yongsin="木"; $yong_yuk="2";
    }elseif($Y==3){
	$yongsin="火"; $yong_yuk="3";
    }elseif($Y==4){
	$yongsin="土"; $yong_yuk="4";
    }else{	
	$yongsin="金"; $yong_yuk="5";
	}

}

if($daygan=="甲" || $daygan=="乙"){

    if($H==1){ 
	$heesin="木";
    }elseif($H==2){
	$heesin="火";
    }elseif($H==3){ 
	$heesin="土";
    }elseif($H==4){
	$heesin="金";
    }else{
	$heesin="水";
	}

}elseif($daygan=="丙" || $daygan=="丁"){

    if($H==1){ 
	$heesin="火";
    }elseif($H==2){ 
	$heesin="土";
    }elseif($H==3){ 
	$heesin="金";
    }elseif($H==4){ 
	$heesin="水";
    }else{
	$heesin="木";
	}

}elseif($daygan=="戊" || $daygan=="己"){

    if($H==1){ 
	$heesin="土"; 
    }elseif($H==2){
	$heesin="金";
    }elseif($H==3){
	$heesin="水";
    }elseif($H==4){ 
	$heesin="木";
    }else{
	$heesin="火";
	}

}elseif($daygan=="庚" || $daygan=="辛"){

    if($H==1){ 
	$heesin="金";
    }elseif($H==2){ 
	$heesin="水";
    }elseif($H==3){ 
	$heesin="木";
    }elseif($H==4){
	$heesin="火";
    }else{
	$heesin="土";
	}

}else{

    if($H==1){ 
	$heesin="水";
    }elseif($H==2){
	$heesin="木";
    }elseif($H==3){
	$heesin="火";
    }elseif($H==4){ 
	$heesin="土";
    }else{
	$heesin="金";
	}

}


if($daygan=="甲" || $daygan=="乙"){

    if($ssin[2]==1){
	$keesin="木";
    }elseif($ssin[2]==2){
	$keesin="火";
    }elseif($ssin[2]==3){
	$keesin="土";
    }elseif($ssin[2]==4){
	$keesin="金";
    }else{
	$keesin="水";
	}

}elseif($daygan=="丙" || $daygan=="丁"){

    if($ssin[2]==1){
	$keesin="火";
    }elseif($ssin[2]==2){
	$keesin="土";
    }elseif($ssin[2]==3){
	$keesin="金";
    }elseif($ssin[2]==4){
	$keesin="水";
    }else{
	$keesin="木";
	}

}elseif($daygan=="戊" || $daygan=="己"){

    if($ssin[2]==1){
	$keesin="土";
    }elseif($ssin[2]==2){
	$keesin="金";
    }elseif($ssin[2]==3){
	$keesin="水";
    }elseif($ssin[2]==4){
	$keesin="木";
    }else{
	$keesin="火";
	}

}elseif($daygan=="庚" || $daygan=="辛"){

    if($ssin[2]==1){
	$keesin="金";
    }elseif($ssin[2]==2){
	$keesin="水";
    }elseif($ssin[2]==3){
	$keesin="木";
    }elseif($ssin[2]==4){
	$keesin="火";
    }else{
	$keesin="土";
	}

}else{

    if($ssin[2]==1){
	$keesin="水";
    }elseif($ssin[2]==2){
	$keesin="木";
    }elseif($ssin[2]==3){
	$keesin="火";
    }elseif($ssin[2]==4){
	$keesin="土";
    }else{ 
	$keesin="金";
	}

}

if($daygan=="甲" || $daygan=="乙"){

    if($ssin[3]==1){
	$goosin="木";
    }elseif($ssin[3]==2){
	$goosin="火";
    }elseif($ssin[3]==3){
	$goosin="土";
    }elseif($ssin[3]==4){
	$goosin="金";
    }else{
	$goosin="水";
	}

}elseif($daygan=="丙" || $daygan=="丁"){

    if($ssin[3]==1){
	$goosin="火";
    }elseif($ssin[3]==2){
	$goosin="土";
    }elseif($ssin[3]==3){
	$goosin="金";
    }elseif($ssin[3]==4){
	$goosin="水";
    }else{
	$goosin="木";
	}

}elseif($daygan=="戊" || $daygan=="己"){

    if($ssin[3]==1){
	$goosin="土";
    }elseif($ssin[3]==2){
	$goosin="金";
    }elseif($ssin[3]==3){
	$goosin="水";
    }elseif($ssin[3]==4){
	$goosin="木";
    }else{
	$goosin="火";
	}

}elseif($daygan=="庚" || $daygan=="辛"){

    if($ssin[3]==1){
	$goosin="金";
    }elseif($ssin[3]==2){
	$goosin="水";
    }elseif($ssin[3]==3){
	$goosin="木";
    }elseif($ssin[3]==4){
	$goosin="火";
    }else{
	$goosin="土";
	}

}else{
    if($ssin[3]==1){
	$goosin="水";
    }elseif($ssin[3]==2){
	$goosin="木";
    }elseif($ssin[3]==3){
	$goosin="火";
    }elseif($ssin[3]==4){
	$goosin="土";
    }else{
	$goosin="金";
	}

}

if($daygan=="甲" ||  $daygan="乙"){

    if($ssin[4]==1){
	$hansin="木";
    }elseif($ssin[4]==2){
	$hansin="火";
    }elseif($ssin[4]==3){
	$hansin="土";
    }elseif($ssin[4]==4){
	$hansin="金";
    }else{
	$hansin="水";
	}

}elseif($daygan=="丙" ||  $daygan="丁"){

    if($ssin[4]==1){
	$hansin="火";
    }elseif($ssin[4]==2){
	$hansin="土";
    }elseif($ssin[4]==3){
	$hansin="金";
    }elseif($ssin[4]==4){
	$hansin="水";
    }else{
	$hansin="木";
	}

}elseif($daygan=="戊" ||  $daygan="己"){

    if($ssin[4]==1){
	$hansin="土";
    }elseif($ssin[4]==2){
	$hansin="金";
    }elseif($ssin[4]==3){
	$hansin="水";
    }elseif($ssin[4]==4){
	$hansin="木";
    }else{
	$hansin="火";
	}

}elseif($daygan=="庚" ||  $daygan="辛"){

    if($ssin[4]==1){
	$hansin="金";
    }elseif($ssin[4]==2){
	$hansin="水";
    }elseif($ssin[4]==3){
	$hansin="木";
    }elseif($ssin[4]==4){
	$hansin="火";
    }else{
	$hansin="土";
	}

}else{

    if($ssin[4]==1){
	$hansin="水";
    }elseif($ssin[4]==2){
	$hansin="木";
    }elseif($ssin[4]==3){
	$hansin="火";
    }elseif($ssin[4]==4){
	$hansin="土";
    }else{
	$hansin="金";
	}

}

$palja_gan[0] =$paljayuk[0];
$palja_gan[1] =$paljayuk[2];
$palja_gan[2] =$paljayuk[5];

$cnt = 0;
for($i = 0 ; $i <= sizeof($palja_gan) ; $i++){
	if($palja_gan[$i]=="偏印" || $palja_gan[$i]=="正印"){$cnt =$cnt + 1;}
}
$in_gan = $cnt;

$cnt = 0;
for($i = 0 ; $i <= sizeof($palja_gan) ; $i++){
	if($palja_gan[$i]=="比肩" || $palja_gan[$i]=="劫財"){$cnt =$cnt + 1;}
}
$bi_gan = $cnt;

$cnt = 0;
for($i = 0 ; $i <= sizeof($palja_gan) ; $i++){
	if($palja_gan[$i]=="食神" || $palja_gan[$i]=="傷官"){$cnt =$cnt + 1;}
}
$sh_gan = $cnt;

$cnt = 0;
for($i = 0 ; $i <= sizeof($palja_gan) ; $i++){
	if($palja_gan[$i]=="偏財" || $palja_gan[$i]=="正財"){$cnt =$cnt + 1;}
}
$ja_gan = $cnt;

$cnt = 0;
for($i = 0 ; $i <= sizeof($palja_gan) ; $i++){
	if($palja_gan[$i]=="偏官" || $palja_gan[$i]=="正官"){$cnt =$cnt + 1;}
}
$kw_gan = $cnt;



$palja_gi[0]=$paljayuk[1];
$palja_gi[1]=$paljayuk[3];
$palja_gi[2]=$paljayuk[4];
$palja_gi[3]=$paljayuk[6] ;

$cnt = 0;
for($i = 0 ; $i <= sizeof($palja_gi); $i++){
	if($palja_gi[$i]=="偏印" || $palja_gi[$i]=="正印"){$cnt = $cnt + 1;}
}
$in_gi = $cnt;

$cnt = 0;
for($i = 0 ; $i <= sizeof($palja_gi); $i++){
	if($palja_gi[$i]=="比肩" || $palja_gi[$i]=="劫財"){$cnt = $cnt + 1;}
}
$bi_gi = $cnt;

$cnt = 0;
for($i = 0 ; $i <= sizeof($palja_gi); $i++){
	if($palja_gi[$i]=="食神" || $palja_gi[$i]=="傷官"){$cnt = $cnt + 1;}
}
$sh_gi = $cnt;

$cnt = 0;
for($i = 0 ; $i <= sizeof($palja_gi); $i++){
	if($palja_gi[$i]=="偏財" || $palja_gi[$i]=="正財"){$cnt = $cnt + 1;}
}
$ja_gi = $cnt;

$cnt = 0;
for($i = 0 ; $i <= sizeof($palja_gi); $i++){
	if($palja_gi[$i]=="偏官" || $palja_gi[$i]=="正官"){$cnt = $cnt + 1;}
}
$kw_gi = $cnt;


$a_yuk_gangi[0]=$paljayuk[0];
$a_yuk_gangi[1]=$paljayuk[2];
$a_yuk_gangi[2]=$paljayuk[5];
$a_yuk_gangi[3]=$paljayuk[1];
$a_yuk_gangi[4]=$paljayuk[3];
$a_yuk_gangi[5]=$paljayuk[4];
$a_yuk_gangi[6]=$paljayuk[6];

$cnt = 0;
$kcnt= 0;


switch($Y){ 
	case 1 :

		for($i = 0 ; $i <= sizeof($a_yuk_gangi); $i++){
		if($a_yuk_gangi[$i]=="比肩"){$cnt = $cnt +1;}
		if($a_yuk_gangi[$i]=="劫財"){$kcnt = $kcnt +1;}

		if($cnt == 1 && $kcnt == 0){ $yong_to_sibsin = "01";}
		if($cnt == 2 && $kcnt == 0){ $yong_to_sibsin = "01";}
		if($cnt != 1 && $cnt != 2 && $cnt != 0){ $yong_to_sibsin = "02";}
		}
		break;
	case 2 :

		for($i = 0 ; $i <= sizeof($a_yuk_gangi); $i++){
		if($a_yuk_gangi[$i]=="食神"){$cnt = $cnt +1;}
		if($a_yuk_gangi[$i]=="傷官"){$kcnt = $kcnt +1;}

		if($cnt == 1 && $kcnt == 0){ $yong_to_sibsin = "03";}
		if($cnt == 2 && $kcnt == 0){ $yong_to_sibsin = "03";}
		if($cnt != 1 && $cnt != 2 && $cnt != 0){ $yong_to_sibsin = "04";}
		}
		break;
	case 3 :

		for($i = 0 ; $i <= sizeof($a_yuk_gangi); $i++){
		if($a_yuk_gangi[$i]=="正財"){$cnt = $cnt +1;}
		if($a_yuk_gangi[$i]=="偏財"){$kcnt = $kcnt +1;}

		if($cnt == 1 && $kcnt == 0){ $yong_to_sibsin = "06";}
		if($cnt == 2 && $kcnt == 0){ $yong_to_sibsin = "06";}
		if($cnt != 1 && $cnt != 2 && $cnt != 0){ $yong_to_sibsin = "05";}
		}
		break;
	case 4 :

		for($i = 0 ; $i <= sizeof($a_yuk_gangi); $i++){
		if($a_yuk_gangi[$i]=="正官"){$cnt = $cnt +1;}
		if($a_yuk_gangi[$i]=="偏官"){$kcnt = $kcnt +1;}

		if($cnt == 1 && $kcnt == 0){ $yong_to_sibsin = "08";}
		if($cnt == 2 && $kcnt == 0){ $yong_to_sibsin = "08";}
		if($cnt != 1 && $cnt != 2 && $cnt != 0){ $yong_to_sibsin = "07";}
		}
		break;
	case 5 :

		for($i = 0 ; $i <= sizeof($a_yuk_gangi); $i++){
		if($a_yuk_gangi[$i]=="正印"){$cnt = $cnt +1;}
		if($a_yuk_gangi[$i]=="偏印"){$kcnt = $kcnt +1;}

		if($cnt == 1 && $kcnt == 0){ $yong_to_sibsin = "10";}
		if($cnt == 2 && $kcnt == 0){ $yong_to_sibsin = "10";}
		if($cnt != 1 && $cnt != 2 && $cnt != 0){ $yong_to_sibsin = "09";}
		}
		break;
	default :
}



if($yong_to_sibsin == ""){ $yong_to_sibsin = "01";}



if(XcodeGan($daygan)==1){

    if($yong_to_sibsin=="01"){	
	$yong_chungan="01";
    }elseif($yong_to_sibsin=="02"){
	$yong_chungan="02";
    }elseif($yong_to_sibsin=="03"){
	$yong_chungan="03";
    }elseif($yong_to_sibsin=="04"){
	$yong_chungan="04";
    }elseif($yong_to_sibsin=="05"){
	$yong_chungan="05";
    }elseif($yong_to_sibsin=="06"){
	$yong_chungan="06";
    }elseif($yong_to_sibsin=="07"){
	$yong_chungan="07";
    }elseif($yong_to_sibsin=="08"){
	$yong_chungan="08";
    }elseif($yong_to_sibsin=="09"){
	$yong_chungan="09";
    }else{
	$yong_chungan="10";
	}

}elseif(XcodeGan($daygan)==2){

    if($yong_to_sibsin=="01"){
	$yong_chungan="02";
    }elseif($yong_to_sibsin=="02"){ 
	$yong_chungan="01";
    }elseif($yong_to_sibsin=="03"){ 
	$yong_chungan="04";
    }elseif($yong_to_sibsin=="04"){ 
	$yong_chungan="03";
    }elseif($yong_to_sibsin=="05"){ 
	$yong_chungan="06";
    }elseif($yong_to_sibsin=="06"){ 
	$yong_chungan="05";
    }elseif($yong_to_sibsin=="07"){ 
	$yong_chungan="08";
    }elseif($yong_to_sibsin=="08"){ 
	$yong_chungan="07";
    }elseif($yong_to_sibsin=="09"){ 
	$yong_chungan="10";
    }else{
	$yong_chungan="09";
	}

}elseif(XcodeGan($daygan)==3){

    if($yong_to_sibsin=="01"){ 
	$yong_chungan="03";
    }elseif($yong_to_sibsin=="02"){ 
	$yong_chungan="04";
    }elseif($yong_to_sibsin=="03"){ 
	$yong_chungan="05";
    }elseif($yong_to_sibsin=="04"){ 
	$yong_chungan="06";
    }elseif($yong_to_sibsin=="05"){ 
	$yong_chungan="07";
    }elseif($yong_to_sibsin=="06"){ 
	$yong_chungan="08";
    }elseif($yong_to_sibsin=="07"){ 
	$yong_chungan="09";
    }elseif($yong_to_sibsin=="08"){ 
	$yong_chungan="10";
    }elseif($yong_to_sibsin=="09"){ 
	$yong_chungan="01";
    }else{
	$yong_chungan="02";
    }

}elseif(XcodeGan($daygan)==4){
    
    if($yong_to_sibsin=="01"){ 
	$yong_chungan="04";
    }elseif($yong_to_sibsin=="02"){ 
	$yong_chungan="03";
    }elseif($yong_to_sibsin=="03"){ 
	$yong_chungan="06";
    }elseif($yong_to_sibsin=="04"){ 
	$yong_chungan="05";
    }elseif($yong_to_sibsin=="05"){ 
	$yong_chungan="08";
    }elseif($yong_to_sibsin=="06"){ 
	$yong_chungan="07";
    }elseif($yong_to_sibsin=="07"){ 
	$yong_chungan="10";
    }elseif($yong_to_sibsin=="08"){ 
	$yong_chungan="09";
    }elseif($yong_to_sibsin=="09"){ 
	$yong_chungan="02";
    }else{
	$yong_chungan="01";
	}

}elseif(XcodeGan($daygan)==5){

    if($yong_to_sibsin=="01"){ 
	$yong_chungan="05";
    }elseif($yong_to_sibsin=="02"){ 
	$yong_chungan="06";
    }elseif($yong_to_sibsin=="03"){ 
	$yong_chungan="07";
    }elseif($yong_to_sibsin=="04"){ 
	$yong_chungan="08";
    }elseif($yong_to_sibsin=="05"){ 
	$yong_chungan="09";
    }elseif($yong_to_sibsin=="06"){ 
	$yong_chungan="10";
    }elseif($yong_to_sibsin=="07"){ 
	$yong_chungan="01";
    }elseif($yong_to_sibsin=="08"){ 
	$yong_chungan="02";
    }elseif($yong_to_sibsin=="09"){ 
	$yong_chungan="03";
    }else{ 
	$yong_chungan="04";
    }

}elseif(XcodeGan($daygan)==6){

    if($yong_to_sibsin=="01"){		
	$yong_chungan="06";				
    }elseif($yong_to_sibsin=="02"){ 
	$yong_chungan="05";				
    }elseif($yong_to_sibsin=="03"){ 
	$yong_chungan="08";				
    }elseif($yong_to_sibsin=="04"){ 
	$yong_chungan="07";				
    }elseif($yong_to_sibsin=="05"){ 
	$yong_chungan="10";				
    }elseif($yong_to_sibsin=="06"){ 
	$yong_chungan="09";				
    }elseif($yong_to_sibsin=="07"){ 
	$yong_chungan="02";				
    }elseif($yong_to_sibsin=="08"){ 
	$yong_chungan="01";				
    }elseif($yong_to_sibsin=="09"){ 
	$yong_chungan="04";				
    }else{							
	$yong_chungan="03";				
    }								

}elseif(XcodeGan($daygan)==7){
    
    if($yong_to_sibsin=="01"){ 
	$yong_chungan="07";
    }elseif($yong_to_sibsin=="02"){ 
	$yong_chungan="08";
    }elseif($yong_to_sibsin=="03"){ 
	$yong_chungan="09";
    }elseif($yong_to_sibsin=="04"){ 
	$yong_chungan="10";
    }elseif($yong_to_sibsin=="05"){ 
	$yong_chungan="01";
    }elseif($yong_to_sibsin=="06"){ 
	$yong_chungan="02";
    }elseif($yong_to_sibsin=="07"){ 
	$yong_chungan="03";
    }elseif($yong_to_sibsin=="08"){ 
	$yong_chungan="04";
    }elseif($yong_to_sibsin=="09"){ 
	$yong_chungan="05";
    }else{ 
	$yong_chungan="06";
    }

}elseif(XcodeGan($daygan)==8){
    
    if($yong_to_sibsin=="01"){ 
	$yong_chungan="08";
    }elseif($yong_to_sibsin=="02"){ 
	$yong_chungan="07";
    }elseif($yong_to_sibsin=="03"){ 
	$yong_chungan="10";
    }elseif($yong_to_sibsin=="04"){ 
	$yong_chungan="09";
    }elseif($yong_to_sibsin=="05"){ 
	$yong_chungan="02";
    }elseif($yong_to_sibsin=="06"){ 
	$yong_chungan="01";
    }elseif($yong_to_sibsin=="07"){ 
	$yong_chungan="04";
    }elseif($yong_to_sibsin=="08"){ 
	$yong_chungan="03";
    }elseif($yong_to_sibsin=="09"){ 
	$yong_chungan="06";
    }else{ 
	$yong_chungan="05";
	}

}elseif(XcodeGan($daygan)==9){

    if($yong_to_sibsin=="01"){ 
	$yong_chungan="09";
    }elseif($yong_to_sibsin=="02"){ 
	$yong_chungan="10";
    }elseif($yong_to_sibsin=="03"){ 
	$yong_chungan="01";
    }elseif($yong_to_sibsin=="04"){ 
	$yong_chungan="02";
    }elseif($yong_to_sibsin=="05"){ 
	$yong_chungan="03";
    }elseif($yong_to_sibsin=="06"){ 
	$yong_chungan="04";
    }elseif($yong_to_sibsin=="07"){ 
	$yong_chungan="05";
    }elseif($yong_to_sibsin=="08"){ 
	$yong_chungan="06";
    }elseif($yong_to_sibsin=="09"){ 
	$yong_chungan="07";
    }else{ 
	$yong_chungan="08";
	}

}else{
    if($yong_to_sibsin=="01"){ 
	$yong_chungan="10";
    }elseif($yong_to_sibsin=="02"){ 
	$yong_chungan="09";
    }elseif($yong_to_sibsin=="03"){ 
	$yong_chungan="02";
    }elseif($yong_to_sibsin=="04"){ 
	$yong_chungan="01";
    }elseif($yong_to_sibsin=="05"){ 
	$yong_chungan="04";
    }elseif($yong_to_sibsin=="06"){ 
	$yong_chungan="03";
    }elseif($yong_to_sibsin=="07"){ 
	$yong_chungan="06";
    }elseif($yong_to_sibsin=="08"){ 
	$yong_chungan="05";
    }elseif($yong_to_sibsin=="09"){ 
	$yong_chungan="08";
    }else{ 
	$yong_chungan="07";
	}
}

if($yongsin=="木"){$yong_code="1";}
if($yongsin=="火"){$yong_code="2";}
if($yongsin=="土"){$yong_code="3";}
if($yongsin=="金"){$yong_code="4";}
if($yongsin=="水"){$yong_code="5";}

if($heesin=="木"){$hee_code="1";}
if($heesin=="火"){$hee_code="2";}
if($heesin=="土"){$hee_code="3";}
if($heesin=="金"){$hee_code="4";}
if($heesin=="水"){$hee_code="5";}

if($keesin=="木"){$kee_code="1";}
if($keesin=="火"){$kee_code="2";}
if($keesin=="土"){$kee_code="3";}
if($keesin=="金"){$kee_code="4";}
if($keesin=="水"){$kee_code="5";}

if($goosin=="木"){$goo_code="1";}
if($goosin=="火"){$goo_code="2";}
if($goosin=="土"){$goo_code="3";}
if($goosin=="金"){$goo_code="4";}
if($goosin=="水"){$goo_code="5";}

if($hansin=="木"){$han_code="1";}
if($hansin=="火"){$han_code="2";}
if($hansin=="土"){$han_code="3";}
if($hansin=="金"){$han_code="4";}
if($hansin=="水"){$han_code="5";}


$find_yong = $hansin ."-". $goosin ."-". $keesin ."-". $heesin ."-". $yongsin;
$find_yong = $find_yong ."|".$yong_code ."-". $hee_code ."-". $kee_code ."-". $goo_code ."-". $han_code;
$find_yong = $find_yong ."|".$yong_to_sibsin;
$find_yong = $find_yong ."|".$yong_chungan;

$woon12_daygi=F_woonsung($daygi,$daygan);

$find_yong = $find_yong."|".$woon12_daygi;

	return $find_yong;
}

/*************************************************************************
'	함수명	:	zizangan 
'	인수		:	a
'	리턴		:	zizang
'	설명		:	지장간을 찾는다.
//'*************************************************************************/


Function  zizangan($a){
	$zizang ="壬癸-癸辛己-戊丙甲-甲乙-乙癸戊-戊庚丙-丙己丁-丁乙己-己戊壬庚-庚辛-辛丁戊-戊甲壬";
	$zizang=explode("-", $zizang);
	$str="子-丑-寅-卯-辰-巳-午-未-申-酉-戌-亥";
	$str=explode("-", $str);


	for($i = 0 ; $i <= sizeof($str); $i++){
		if($a == $str[$i]){
			$ss=$i;
			break;
		}
	}

	$zizangan=$zizang[$ss];

	return $zizangan;
}


/*************************************************************************
'
'	함수명	:	XcodeGan 
'	인수		:	str
'	리턴		:	zizang
'	설명		:	천간에 대한 코드를 뽑는다.1-12까지
'
//'*************************************************************************/
Function XcodeGan($str){	
	$chungan="甲,乙,丙,丁,戊,己,庚,辛,壬,癸";
	$chungan=explode(",", $chungan);

	For($i = 0 ; $i <= sizeof($chungan); $i++){
		If($str == $chungan[$i]){ 
		$ss = $i; 
		break;
		}
	}

	$XcodeGan=$ss + 1;

	return $XcodeGan;
}



/*************************************************************************
'
'	함수명	:	XcodeGi 
'	인수		:	str
'	리턴		:	zizang
'	설명		:	지지에 대한 코드를 뽑는다.1-12까지
'
//'*************************************************************************/

Function XcodeGi($str){
	$gigi="子,丑,寅,卯,辰,巳,午,未,申,酉,戌,亥";
	$gigi=explode(",", $gigi);

	For($i = 0 ; $i <= sizeof($gigi); $i++){
		If($str == $gigi[$i]){
		$ss = $i; 
		break;
		}
	}
	$XcodeGi=$ss+1;
	return $XcodeGi;
}

/*************************************************************************
'
'	함수명	:	gongmangF -> 시작 함수 
'	인수		:	a
'	리턴		:	result
'	설명		:	공망을 찾는다.
'
//'*************************************************************************/
Function gongmangF($a){
	$str[0]="甲子-乙丑-丙寅-丁卯-戊辰-己巳-庚午-辛未-壬申-癸酉";
	$str[1]="甲戌-乙亥-丙子-丁丑-戊寅-己卯-庚辰-辛巳-壬午-癸未";
	$str[2]="甲申-乙酉-丙戌-丁亥-戊子-己丑-庚寅-辛卯-壬辰-癸巳";
	$str[3]="甲午-乙未-丙申-丁酉-戊戌-己亥-庚子-辛丑-壬寅-癸卯";
	$str[4]="甲辰-乙巳-丙午-丁未-戊申-己酉-庚戌-辛亥-壬子-癸丑";
	$str[5]="甲寅-乙卯-丙辰-丁巳-戊午-己未-庚申-辛酉-壬戌-癸亥";
	$result="戌亥-申酉-午未-辰巳-寅卯-子丑";
	$result = explode("-", $result);
	$ss = 0;
	for($i = 0; $i <= 5; $i++){
	$tempArr=explode("-", $str[$i]);
		for($j = 0 ; $j <= sizeof($tempArr) ; $j++){
			if($a == $tempArr[$j]){
				$ss = $i;
				break;
			}
		}
	}
	$gongmangF = $result[$ss];
	return $gongmangF;
}

/*************************************************************************
'	
'	함수명	:	b_saju_Click -> 시작 함수 
'	인수		:	
'	리턴		:	
'	설명		:음력 양력..작성된 사주를 글로발 변수(INSA_)에 셋팅../최종 셋팅을 INSA_ARR 에 저장
'
//'*************************************************************************/

Function b_saju_Click($Man_Value , $Sun_Value , $Text1_Text, $Text2_Text, $Text3_Text ,$Text4_Text ,$Text5_Text,$Bl){

//echo "[".$Sun_Value ."]";
$Gan  = "Gan";
$Ji  = "Ji";


	switch($Man_Value){
		Case 1 : $Opt_sex_Man_Value = True; break;
		Case 2 : $Opt_sex_Man_Value = False; break;
	}

	//$Opt_Cal_Sun_Value= True;

	
	if ($Sun_Value=='lunar'){$Sun_Value=1;}
	if ($Sun_Value=='solar'){$Sun_Value=2;}
	

	switch($Sun_Value){
		Case 1 : $Opt_Cal_Sun_Value = True; break;
		Case 2 : $Opt_Cal_Sun_Value = False; break;
		Case 3 : 

		$ForReading = 1;
		$TristateFalse = 0;

		$fd = fopen("../data/YunDat.dat", "r");                // 파일을 열고
		$allText = fread($fd, filesize($selectstrFname)); // 파일을 읽고
		fclose($fd);                                      // 파일을 닫고
		$ss = explode(Chr(10), $allText);        // 처리하고

		For($i = 0 ; $i <= sizeof($ss); $i++){
			$temparr=explode("|", $ss[$i]);

			If($temparr[0] == $Text1_Text."/".$Text2_Text."/".$Text3_Text){ 

			$Opt_Cal_Sun_Value = True; 			
				$tempDate =	str_replace("/", "-", $temparr[1]);
				$Text1_Text = date("Y", $tempDate);
				$Text2_Text = date("m", $tempDate);
				$Text3_Text = date("d", $tempDate);
				break; 
			} 

		} 
	}

	$CY_MIN  = 1881;
	$CY_MAX  = 2050;

	$f_Begin_Flag = True;

	$fp = fopen("../../data/div24.dat", "r");
	$allText = fread($fp, filesize("../../data/div24.dat"));							// 파일을 읽고
	fclose($fp);                                      // 파일을 닫고

	$out = explode(chr(10), $allText);        // 처리하고

	for($i=0; $i < sizeof($out); $i++){
		$f_buf = $out[$i];

        $t_i = substr($f_buf, 0, 4);
        $t_j = substr($f_buf, 4, 3);
        $t_date = substr($f_buf, 7, strLen($f_buf) - 8);

        If($f_Begin_Flag == True){
            $load_from = $t_date;
        }

        $f_Begin_Flag = False;
        $load_to = $t_date;

        If($t_i <= $CY_MIN || $t_i >= $CY_MAX || $t_j <= 0 || $t_j >= 25){
            $init_gDIV_Load = False;

            //return $init_gDIV_Load;
			break;
        }

		$t_j = str_replace(" ", "", $t_j);
		
        $gDIV[$t_i - 1901][$t_j]= $t_date;

		//echo $t_j."-".($t_i - 1901)."-".$gDIV[$t_i - 1901][$t_j]."<BR>";
	}

    $init_gDIV_Load = True;

	if($Text4_Text == "" || $Text4_Text == 0){$Text4_Text = 5;}

    $INSA_Name = "손님";		//'txt_Name_Text'-<<<수정요함
    If($Opt_sex_Man_Value == True){ $INSA_sex = 1;}Else{$INSA_sex = 2;}		// '음은 짝수, 양은 홀수
    
    If($Opt_Cal_Sun_Value == True){			//' 양력으로 입력했을 때
		 $INSA_Birth1 = date("Y-m-d H:i", mktime((int)$Text4_Text, (int)$Text5_Text, 0, (int)$Text2_Text, (int)$Text3_Text, (int)$Text1_Text));              //'__양력일자
       // $INSA_Birth1 = DateSerial($Text1_Text, $Text2_Text, $Text3_Text) + TimeSerial($Text4_Text, $Text5_Text, 0);              //'__양력일자
        $i_year = $Text1_Text;
        $i_Month = $Text2_Text;
        $i_Day = $Text3_Text;
        $i_Yun = False;
        $INSA_B1y = $i_year;
        $INSA_B1m = $i_Month;
        $INSA_B1d = $i_Day;
        $b_Err = gf_Sun2Lun($i_year, $i_Month, $i_Day);

		$b_ErrSplit = explode("-", $b_Err);

        $INSA_Birth0 = date("Y-m-d H:i", mktime((int)$Text4_Text, (int)$Text5_Text, 0, (int)$b_ErrSplit[1], (int)$b_ErrSplit[2], (int)$b_ErrSplit[0]));
        //$INSA_Birth0 = DateSerial($b_ErrSplit[0], $b_ErrSplit[1], $b_ErrSplit[2]) + TimeSerial($Text4_Text, $Text5_Text, 0);            //'__음력 일자

        $INSA_B0y = $i_year;
        $INSA_B0m = $i_Month;
        $INSA_B0d = $i_Day;
        //MsgBox "(음력)=" & INSA_B0y & "년" & INSA_B0m & "월" & INSA_B0d & "일" & i_Yun, vbOKOnly, "유성"
    }Else{// ' 음력을 입력했을 때
        $INSA_Birth0 = date("Y-m-d H:i", mktime((int)$Text4_Text, (int)$Text5_Text, 0, (int)$Text2_Text, (int)$Text3_Text, (int)$Text1_Text));
        //$INSA_Birth0 = DateSerial($Text1_Text, $Text2_Text, $Text3_Text) + TimeSerial($Text4_Text, $Text5_Text, 0);          //'__음력 일자
        $i_year = $Text1_Text;
        $i_Month = $Text2_Text;
        $i_Day = $Text3_Text;
        $INSA_B0y = $i_year;
        $INSA_B0m = $i_Month;
        $INSA_B0d = $i_Day;

        If($Opt_Yun_False_Enabled == False && $Opt_Yun_True_Value == False){
            $Opt_Yun_True_Value = True;
            $Opt_Yun_False_Enabled = False;
        }
        $i_Yun = $Opt_Yun_True_Value;
        $b_Err = gf_Lun2Sun($i_year, $i_Month, $i_Day, $i_Yun);

		$b_ErrSplit = explode("-", $b_Err);

        $INSA_Birth1 = date("Y-m-d H:i", mktime((int)$Text4_Text, (int)$Text5_Text, 0, (int)$b_ErrSplit[1], (int)$b_ErrSplit[2], (int)$b_ErrSplit[0]));
       // $INSA_Birth1 = DateSerial($i_year, $i_Month, $i_Day)  + TimeSerial($Text4_Text, $Text5_Text, 0);           //'__음력 일자
        $INSA_B1y = $i_year;
        $INSA_B1m = $i_Month;
        $INSA_B1d = $i_Day;

        //response.write "(양력)=" & INSA_B1y & "년" & INSA_B1m & "월" & INSA_B1d & "일" 

    }
    
    $INSA_JulGi = fi_Pre_Div24($INSA_Birth1, $gDIV);



    $gsLong = 127.5;
    $giYajaSi = 0;
    $giSummer = 0;
    $giKTime = 0;
    $gfDivCal = True;
    $gfDivLoad = False;


	$in_date = $INSA_Birth1;
    
    $s_TL = $s_TimeLongitude;
    $s_EL = $s_EarthLongitude;
    

    If($b_KTime == True){
        If ($in_date >= "1954-03-21" && $in_date <= "1961-08-09"){
            $s_TL = $s_EL;
        }
    }
    $TimeCor = ($s_EL - $s_TL) * 4;
    If($b_Summer == True){
        If(($in_date >= "1948-05-31" && $in_date <= "1948-09-12") || ($in_date >= "1949-05-31" && $in_date <= "1949-09-23")  || ($in_date >= "1950-05-31" && $in_date <= "1950-09-23") || ($in_date >= "1951-05-31" && $in_date <= "1951-09-08") || ($in_date >= "1955-05-31" && $in_date <= "1955-09-21") || ($in_date >= "1956-05-31" && $in_date <= "1956-09-29") || ($in_date >= "1957-05-31" && $in_date <= "1957-09-21") || ($in_date >= "1958-05-31" && $in_date <= "1958-09-20") || ($in_date >= "1959-05-31" && $in_date <= "1959-09-19")  || ($in_date >= "1960-05-31" && $in_date <= "1960-09-17")  || ($in_date >= "1987-05-31" && $in_date <= "1987-10-10")  || ($in_date >= "1988-05-31" && $in_date <= "1988-10-08") ){
            $TimeCor = $TimeCor - 60;
        }
    } 

//'------------------------------------------------------------
	$TimeCor = $TimeCor - 30;
//'------------------------------------------------------------

	$d_CDate = date("Y-m-d H:i", (strtotime($in_date) + ($TimeCor * 60)));

    //$d_CDate = DateSerial(date("Y", $in_date), date("m", $in_date), date("d", $in_date)) + TimeSerial(date("H", $in_date), date("i", $in_date) + $TimeCor, date("s", $in_date));
	$d_CDate = $d_CDate;

    $i_year = date("Y", strtotime($in_date));

    If($d_CDate < $gDIV[$i_year- 1901][3]){
        $yun_ju = $i_year - 1;
	}Else{
		$yun_ju = $i_year;
    }
    //1900년 경자년 기준
    $PALJA[1] = ($yun_ju - 1900 + 7) % 10;
    If($PALJA[1] <= 0){ $PALJA[1] = $PALJA[1] + 10;}
    $PALJA[2] = ($yun_ju - 1900 + 1) % 12;
    If($PALJA[2] <= 0){ $PALJA[2] = $PALJA[2] + 12;}
    // 월주 구하기
    $wol_cnt = 1;

	for($i = 0; $i <= 25; $i++){
		if($gDIV[$i_year][$wol_cnt] > $in_date){break;}
		$wol_cnt = $wol_cnt + 1;
	}
	
/*
    Do While wol_cnt < 25
        If gDIV(i_year- 1901, wol_cnt) > in_date){ Exit Do// '입력값 기준이면 in_dat로 check, 계산값 기준이면 d_CDATE 로 check
                                                    
        wol_cnt = wol_cnt + 1
    Loop 
*/
	$wol_cnt=25;
	
    $PALJA[4] = (($wol_cnt / 2) + 1) % 12;
	
//	$PALJA[4] = $PALJA[4] - 1;

    If($PALJA[4] <= 0){ $PALJA[4] = 12 + $PALJA[4];}
    
    If($PALJA[4] != 1 && $PALJA[4] != 2){
        $PALJA[3] = ((($PALJA[1] % 5) * 2 + 8) + $PALJA[4]) % 10;
    }Else{
        $PALJA[3] = ((($PALJA[1] % 5) * 2) + $PALJA[4]) % 10;
    }

    If($PALJA[3] <= 0){ $PALJA[3] = 10 + $PALJA[3];}



   // '일주:1901년 1월 1일 기준(기묘일)
   
	//$PALJA[5] = date("Y-m-d", (strtotime($d_CDate - date("Y-m-d",mktime(0,0,0,1,7,1901))))) ;//% 10;
//    $PALJA[5] = (mktime(0,0,0, date("m", $d_CDate), date("d", $d_CDate),date("Y", $d_CDate)) - "1901-01-01" + 6) % 10;

	$PALJA[5] =(strtotime("d",$d_CDate)+7700) % 10 ;

    If($PALJA[5] <= 0){ $PALJA[5] = 10 + $PALJA[5];}
	if($PALJA[5] > 10){$PALJA[5] = $PALJA[5] - 10;}

	//$PALJA[6] = date("Y-m-d", (strtotime($d_CDate - "1901-01-05"))) % 12;
   // $PALJA[6] = (DateSerial(date("Y", $d_CDate), date("m", $d_CDate), date("d", $d_CDate)) - "1901-01-01" + 4) % 12;

   	$PALJA[6] =(strtotime("d",$d_CDate)+7698) % 10 ;

//	$PALJA[6] = $PALJA[6] - 2;

    If($PALJA[6] <= 0){ $PALJA[6] = 12 + $PALJA[6];}
	if($PALJA[6] > 12){$PALJA[6] = $PALJA[6] - 12;}

    $BTime = strtotime($d_CDate);

	If($d_CDate >= date("Y-m-d", $BTime + 0) && $d_CDate <= date("Y-m-d", $BTime + 59)){ $PALJA[8] = 1 ;}
	If($d_CDate >= date("Y-m-d", $BTime + 60) && $d_CDate <= date("Y-m-d", $BTime + 179)){ $PALJA[8] = 2 ;}
	If($d_CDate >= date("Y-m-d", $BTime + 180) && $d_CDate <= date("Y-m-d", $BTime + 299)){ $PALJA[8] = 3 ;}
	If($d_CDate >= date("Y-m-d", $BTime + 300) && $d_CDate <= date("Y-m-d", $BTime + 419)){ $PALJA[8] = 4 ;}
	If($d_CDate >= date("Y-m-d", $BTime + 420) && $d_CDate <= date("Y-m-d", $BTime + 539)){ $PALJA[8] = 5 ;}
	If($d_CDate >= date("Y-m-d", $BTime + 540) && $d_CDate <= date("Y-m-d", $BTime + 659)){ $PALJA[8] = 6 ;}
	If($d_CDate >= date("Y-m-d", $BTime + 660) && $d_CDate <= date("Y-m-d", $BTime + 779)){ $PALJA[8] = 7 ;}
	If($d_CDate >= date("Y-m-d", $BTime + 780) && $d_CDate <= date("Y-m-d", $BTime + 899)){ $PALJA[8] = 8 ;}
	If($d_CDate >= date("Y-m-d", $BTime + 900) && $d_CDate <= date("Y-m-d", $BTime + 1019)){ $PALJA[8] = 9 ;}
	If($d_CDate >= date("Y-m-d", $BTime + 1020) && $d_CDate <= date("Y-m-d", $BTime + 1139)){ $PALJA[8] = 10 ;}
	If($d_CDate >= date("Y-m-d", $BTime + 1140) && $d_CDate <= date("Y-m-d", $BTime + 1259)){ $PALJA[8] = 11 ;}
	If($d_CDate >= date("Y-m-d", $BTime + 1260) && $d_CDate <= date("Y-m-d", $BTime + 1439)){ $PALJA[8] = 12 ;}
        //'야자시 사용하는 경우 일진변경 없음, 시간변경,
        //'야자시 미사용인 경우 일진변경, 시간은 자시

//------------------------------------------------------------
	If($b_YajaSi == ""){$b_YajaSi = False;}
//------------------------------------------------------------

	If($d_CDate >= date("Y-m-d", $BTime + 1380) && $d_CDate <= date("Y-m-d", $BTime + 1439)){ 
	$PALJA[8] = 12 ;
            If($b_YajaSi = True){ //'야자시 사용인 경우 일진변경 없음, 시간변경
                $PALJA[8] = 13;
			}Else{ //'야자시 미사용인 경우 일진변경 , 시간은 다음 일진 기준으로 사용
                $PALJA[5] = ($PALJA[5] + 1) % 10;
                If($PALJA[5] <= 0){ $PALJA[5] = $PALJA[5] + 10;}
                $PALJA[6] = ($PALJA[6] + 1) % 12;
                If($PALJA[6] <= 0){ $PALJA[6] = $PALJA[6] + 12;}
                $PALJA[8] = 1;
            }
	} 



    $PALJA[7] = ((($PALJA[5] % 5) * 2 + 8) + $PALJA[8]) % 10;

	$PALJA[7] = $PALJA[7] + 3;
	if($PALJA[7] > 10){$PALJA[7] = 10 - $PALJA[7];}
    If($PALJA[7] <= 0){ $PALJA[7] = $PALJA[7] + 10;}

    $PALJA[8] = $PALJA[8] % 12;
	$PALJA[8] = $PALJA[8] + 3;
	if($PALJA[8] > 12){$PALJA[8] = 12 - $PALJA[8];}
    If($PALJA[8] <= 0){ $PALJA[8] = $PALJA[8] + 12;}



    $SAJU[1] = f_Cal_GapJa60($PALJA[1], $PALJA[2]);
    $SAJU[2] = f_Cal_GapJa60($PALJA[3], $PALJA[4]);
    $SAJU[3] = f_Cal_GapJa60($PALJA[5], $PALJA[6]);
    $SAJU[4] = f_Cal_GapJa60($PALJA[7], $PALJA[8]);

    $BIRTHDAY = $in_date;

    //Call p_Cal_Palja(INSA_Birth1, 135, CSng(gsLong), CBool(giYajaSi), CBool(giSummer), CBool(giKTime))'    '팔짜 셑팅

    $i_saju_div = $INSA_JulGi;
    If($i_saju_div % 2 == 0){ $i_saju_div = $i_saju_div - 1;}
    
    If($i_saju_div == 23){
          If(($PALJA[1] % 2) == ($INSA_sex % 2)){					 //양남음녀인 경우
              If($INSA_Birth1 < $gDIV[date("Y", strtotime($INSA_Birth1)) - 1901][1]){
                 $i_div_day = $gDIV[date("Y", strtotime($INSA_Birth1))- 1901][1];
              }Else{
                 $i_div_day = $gDIV[(date("Y", strtotime($INSA_Birth1)) + 1)- 1901][1];
              }
          $INSA_DaeUn_Under_date = $i_div_day - $INSA_Birth1; // 양남음녀 다음절기
          //INSA_i_Day2 = (DateDiff("h", INSA_Birth1, i_div_day) % (24 * 3)) \ 7.2

          $INSA_i_Day2 = (DateDiff("h", $INSA_Birth1, $i_div_day) / (24 * 3));

          ///MsgBox "양남음녀1i_Day2=" & (DateDiff("h", INSA_Birth1, i_div_day) / (24 * 3)), vbOKOnly, "유성"
		}Else{
             If($INSA_Birth1 > $gDIV[date("Y", strtotime($INSA_Birth1)) - 1901][23]){
                $i_div_day = $gDIV[date("Y", strtotime($INSA_Birth1))- 1901][23];
             }Else{
                $i_div_day = $gDIV[(date("Y", strtotime($INSA_Birth1)) - 1)- 1901][23];
             }
          
          $INSA_DaeUn_Over_date = $INSA_Birth1 - $i_div_day;  // 음남양녀 이전절기
          $INSA_i_Day2 = (DateDiff("h", $i_div_day, $INSA_Birth1) / (24 * 3));
          //MsgBox "음남양녀1i_Day2=" & (DateDiff("h", i_div_day, INSA_Birth1) / (24 * 3)), vbOKOnly, "유성"
       }
    }Else{
       If(($PALJA[1] % 2) == ($INSA_sex % 2)){  //양남음녀인 경우
          $i_div_day = $gDIV[date("Y", strtotime($INSA_Birth1))- 1901][$i_saju_div + 2];
          $INSA_DaeUn_Under_date = $i_div_day - $INSA_Birth1; // 양남음녀 다음절기
          $INSA_i_Day2 = (DateDiff("h", $INSA_Birth1, $i_div_day) / (24 * 3));
          //MsgBox "양남음녀2i_Day2=" & (DateDiff("h", INSA_Birth1, i_div_day) / (24 * 3)), vbOKOnly, "유성"
       }Else{
          $i_div_day = $gDIV[date("Y", strtotime($INSA_Birth1))- 1901][$i_saju_div];
          $INSA_DaeUn_Over_date = $INSA_Birth1 - $i_div_day;  // 음남양녀 이전절기
          $INSA_i_Day2 = (DateDiff("h", $i_div_day, $INSA_Birth1) / (24 * 3));
          //MsgBox "음남양녀2i_Day2=" & (DateDiff("h", i_div_day, INSA_Birth1) / (24 * 3)), vbOKOnly, "유성"
       }
    }
    
    $INSA_Old = $i_div_day - $INSA_Birth1 + 1; //'나이계산(한국나이로)
    //'MsgBox "i_div_day=" & i_div_day & "INSA_Birth1=" & INSA_Birth1, vbOKOnly, "유성"
    
    
    If((($PALJA[1] % 2) == ($INSA_sex % 2)) || ((($PALJA[1] % 2) != 0) && (($INSA_sex % 2) != 0))){  //'양남음녀인 경우
        $iCaldate = date("Y", strtotime($INSA_DaeUn_Under_date));
        If($iCaldate <= 1899){
            $iCaldate = 0;
        }Else{
            $iCaldate = date("d", $INSA_DaeUn_Under_date);
        }
        $iCalHour = date("H", strtotime($INSA_DaeUn_Under_date)) / 2;
        $INSA_DaeUnSu = Math_RoundOff(($iCaldate * 12 + $iCalHour + 18) / 36 ,0);  //'대운 수 계산시 소수점 생략
    }Else{ //'음남양녀인 경우 이전절기까지 일자를 계산
        $iCaldate = date("Y", $INSA_DaeUn_Over_date);
        If($iCaldate <= 1899){  //'date 표기상 같은 년도의 차는0이되는데 1900년으로 표기된다.
            $iCaldate = 0;
        }Else{
            $iCaldate = date("d", strtotime($INSA_DaeUn_Over_date));
        }
        $iCalHour = date("H", strtotime($INSA_DaeUn_Over_date)) / 2;
        $INSA_DaeUnSu = Math_RoundOff(($iCaldate * 12 + $iCalHour + 18) / 36  ,0); //'대운 수 계산시 소수점 생략
    }

    //INSA_Old = Year(Date) - Year(INSA_Birth1)


///response.write INSA_DaeUnSu
    switch($PALJA[4]){
        Case 1 : //'자

			If(date("d", strtotime($INSA_DaeUn_Over_date)) >= 0 || date("d", strtotime($INSA_DaeUn_Over_date)) <= 10){  
			$INSA_DangLyung = 9;  //'壬
			}Else{
			$INSA_DangLyung = 10;  //'癸
			} 

        Case 2: //'축

			If(date("d", strtotime($INSA_DaeUn_Over_date)) >= 0 || date("d", strtotime($INSA_DaeUn_Over_date)) <= 9){  
			$INSA_DangLyung = 10;  //'癸
			}ElseIf(date("d", strtotime($INSA_DaeUn_Over_date)) >= 10 || date("d", strtotime($INSA_DaeUn_Over_date)) <= 12){  
			$INSA_DangLyung = 8;  //'辛
			}Else{			
			$INSA_DangLyung = 6;  //'己
			} 

        Case 3: //'인

			If(date("d", strtotime($INSA_DaeUn_Over_date)) >= 0 || date("d", strtotime($INSA_DaeUn_Over_date)) <= 7){  
			$INSA_DangLyung = 5;  //'戊
			}ElseIf(date("d", strtotime($INSA_DaeUn_Over_date)) >= 8 || date("d", strtotime($INSA_DaeUn_Over_date)) <= 14){  
			$INSA_DangLyung = 3;  //'丙
			}Else{			
			 $INSA_DangLyung = 1;  //'甲
			} 

        Case 4: //'묘

			If(date("d", strtotime($INSA_DaeUn_Over_date)) >= 0 || date("d", strtotime($INSA_DaeUn_Over_date)) <= 10){  
			$INSA_DangLyung = 1;  //'甲
			}Else{			
			$INSA_DangLyung = 2;  //'乙
			} 

        Case 5:// '진

			If(date("d", strtotime($INSA_DaeUn_Over_date)) >= 0 || date("d", strtotime($INSA_DaeUn_Over_date)) <= 9){  
			$INSA_DangLyung = 2;  //'乙
			}ElseIf(date("d", strtotime($INSA_DaeUn_Over_date)) >= 10 || date("d", strtotime($INSA_DaeUn_Over_date)) <= 12){  
			$INSA_DangLyung = 10;  //'癸
			}Else{			
			$INSA_DangLyung = 5;  //'戊
			} 

        Case 6: //'사

			If(date("d", strtotime($INSA_DaeUn_Over_date)) >= 0 || date("d", strtotime($INSA_DaeUn_Over_date)) <= 7){  
			$INSA_DangLyung = 5;  //'戊
			}ElseIf(date("d", strtotime($INSA_DaeUn_Over_date)) >= 8 || date("d", strtotime($INSA_DaeUn_Over_date)) <= 14){  
			$INSA_DangLyung = 7;  //'庚
			}Else{			
			$INSA_DangLyung = 3;  //'丙
			} 

        Case 7: //'오

			If(date("d", strtotime($INSA_DaeUn_Over_date)) >= 0 || date("d", strtotime($INSA_DaeUn_Over_date)) <= 10){  
			$INSA_DangLyung = 3;  //'丙
			}ElseIf(date("d", strtotime($INSA_DaeUn_Over_date)) >= 11 || date("d", strtotime($INSA_DaeUn_Over_date)) <= 20){  
			$INSA_DangLyung = 6;  //'己
			}Else{			
			$INSA_DangLyung = 4;  //'丁
			} 

        Case 8: //'미

			If(date("d", strtotime($INSA_DaeUn_Over_date)) >= 0 || date("d", strtotime($INSA_DaeUn_Over_date)) <= 9){  
			$INSA_DangLyung = 4;  //'丁
			}ElseIf(date("d", strtotime($INSA_DaeUn_Over_date)) >= 10 || date("d", strtotime($INSA_DaeUn_Over_date)) <= 12){  
			$INSA_DangLyung = 2;  //'乙
			}Else{			
			$INSA_DangLyung = 6;  //'己
			} 

        Case 9: //'신

			If(date("d", strtotime($INSA_DaeUn_Over_date)) >= 0 || date("d", strtotime($INSA_DaeUn_Over_date)) <= 7){  
			$INSA_DangLyung = 5;  //'戊
			}ElseIf(date("d", strtotime($INSA_DaeUn_Over_date)) >= 8 || date("d", strtotime($INSA_DaeUn_Over_date)) <= 14){  
			$INSA_DangLyung = 9;  //'壬
			}Else{			
			$INSA_DangLyung = 7;  //'庚
			} 

        Case 10: //'유

			If(date("d", strtotime($INSA_DaeUn_Over_date)) >= 0 || date("d", strtotime($INSA_DaeUn_Over_date)) <= 10){  
			$INSA_DangLyung = 7;  //'庚
			}Else{			
			$INSA_DangLyung = 8;  //'辛
			} 

        Case 11: //'술

			If(date("d", strtotime($INSA_DaeUn_Over_date)) >= 0 || date("d", strtotime($INSA_DaeUn_Over_date)) <= 9){  
			$INSA_DangLyung = 8;  //'辛
			}ElseIf(date("d", strtotime($INSA_DaeUn_Over_date)) >= 10 || date("d", strtotime($INSA_DaeUn_Over_date)) <= 12){  
			$INSA_DangLyung = 4;  //丁
			}Else{			
			$INSA_DangLyung = 5;  //'戊
			} 


        Case 12: //'해

			If(date("d", strtotime($INSA_DaeUn_Over_date)) >= 0 || date("d", strtotime($INSA_DaeUn_Over_date)) <= 7){  
			$INSA_DangLyung = 5;  //'戊
			}ElseIf(date("d", strtotime($INSA_DaeUn_Over_date)) >= 8 || date("d", strtotime($INSA_DaeUn_Over_date)) <= 14){  
			$INSA_DangLyung = 1;  //'甲
			}Else{			
			$INSA_DangLyung = 9;  //'壬
			} 

	}
//'----------------------------------------------------(끝)

    
    $i_daeun_No = 0;
    $f_daeun_chk = False;
    
   $INSA_Old = Date("Y") - Date("Y", strtotime($INSA_Birth1)) + 1; // 세(世) 나이 = 만 나이 + 1살
    
    For($i_cnt = 10 ; $i_cnt >= 1 ; $i_cnt--){

        //i_Dae = INSA_DaeUnSu + (i_cnt - 1) * 10
		$i_Dae = $INSA_DaeUnSu + (($i_cnt-1)*10);
        If($i_Dae < $INSA_Old && $f_daeun_chk == False && $INSA_Old - $i_Dae <= 10){
            $i_daeun_No = ($i_cnt - 8) * (-1);
            $f_daeun_chk = True;               //대운수 색상표시
        }

        $s_Saju[3] = $s_Saju[3] . $i_Dae . "  ";

        If(($INSA_sex % 2) == ($PALJA[1] % 2)){ //양남 혹은 음녀
            $i_Gan = ($PALJA[3] + $i_cnt) % 10;
        }Else{
            $i_Gan = ($PALJA[3] - $i_cnt) % 10;
        }

		$i_Gan = $i_Gan + 1;
		if($i_Gan > 10){$i_Gan = 10 - $i_Gan;}
        If($i_Gan <= 0){ $i_Gan = $i_Gan + 10;}
        $s_Saju[4] = $s_Saju[4] . fSS(($i_Gan), $Gan) . "  ";
        //대운지지 구하기
        If(($INSA_sex % 2) == ($PALJA[1] % 2)){ //양남 혹은 음녀
            $i_Ji = ($PALJA[4] + $i_cnt) % 12;
        }Else{
            $i_Ji = ($PALJA[4] - $i_cnt) % 12;
        }

        If($i_Ji <= 0){ $i_Ji = $i_Ji + 12;}
        $s_Saju[5] = $s_Saju[5] . fSS(($i_Ji), $Ji) . "  ";


	}
//'----------------------------------------------------(절입일 표기)
	

    $d_In = $INSA_Birth1;
    $d_pD = f_Pre_Div24($d_In, $gDIV);
    $d_nD = f_Next_Div24(date("Y-m-d", strtotime($d_In)), $gDIV);
	$d_lD = f_Next_Div24(date("Y-m-d", strtotime($d_nD)), $gDIV);
    $i_pD = fi_Pre_Div24($d_In, $gDIV);

    $i_nD = $i_pD + 1;
	If($i_nD > 24){ $i_nD = $i_nD - 24;}
    $i_lD = $i_pD + 2;
	If($i_lD > 24){ $i_lD = $i_lD - 24;}
   
    $yy = $INSA_B1y;
    $mm = $INSA_B1m;
    $dd = $INSA_B1d;       
    
    $nWeek = date("w", strtotime($INSA_B1y + "-" + $INSA_B1m + "-01")) + $INSA_B1d;


    For($i = 0 ; $i <= 6; $i++){
        If(7 < $nWeek){
           $nWeek = $nWeek - 7;
        }
	}

	//echo "'".$INSA_B1d."'";

    switch($nWeek){
                CAse 1: $uWeek = "土"; break;
                CAse 2: $uWeek = "日"; break;
                CAse 3: $uWeek = "月"; break;
                CAse 4: $uWeek = "火"; break;
                CAse 5: $uWeek = "水"; break;
                CAse 6: $uWeek = "木"; break;
                CAse 7: $uWeek = "金"; break;
                default: $uWeek = "??"; break;
    }

$s_Saju[1] = fSS($PALJA[7], $Gan) . "  " . fSS($PALJA[5], $Gan) . "  " . fSS($PALJA[3], $Gan) . "  " . fSS($PALJA[1], $Gan);
$s_Saju[2] = fSS($PALJA[8], $Ji) . "  " . fSS($PALJA[6], $Ji) . "  " . fSS($PALJA[4], $Ji) . "  " . fSS($PALJA[2], $Ji);

$yearju=fSS($PALJA[1], $Gan).fSS($PALJA[2], $Ji);
$weulju=fSS($PALJA[3], $Gan).fSS($PALJA[4], $Ji);
$ilgan=fSS($PALJA[5], $Gan);
$ilgi=fSS($PALJA[6], $Ji);
$siju=fSS($PALJA[7], $Gan).fSS($PALJA[8], $Ji); 

$daewoonsGan=explode("  ", $s_Saju[4]);
$daewoonsJi=explode("  ", $s_Saju[5]);

$daewoon1=$daewoonsGan[9].$daewoonsJi[9];
$daewoon2=$daewoonsGan[8].$daewoonsJi[8];
$daewoon3=$daewoonsGan[7].$daewoonsJi[7];
$daewoon4=$daewoonsGan[6].$daewoonsJi[6];
$daewoon5=$daewoonsGan[5].$daewoonsJi[5];
$daewoon6=$daewoonsGan[4].$daewoonsJi[4];
$daewoon7=$daewoonsGan[3].$daewoonsJi[3];
$daewoon8=$daewoonsGan[2].$daewoonsJi[2];

$mok = explode("  ", $s_Saju[3]);
$mok = $mok[9];

$allsaju=$yearju.$weulju.$ilgan.$ilgi.$siju.$daewoon1.$daewoon2.$daewoon3.$daewoon4.$daewoon5.$daewoon6.$daewoon7.$daewoon8;


$tmp = iconv_substr($yearju, 0, 1,'UTF-8')."|".iconv_substr($yearju, 1, 1,'UTF-8')."|".iconv_substr($weulju, 0, 1,'UTF-8')."|".iconv_substr($weulju, 1, 1,'UTF-8')."|".$ilgan."|".$ilgi."|".iconv_substr($siju, 0, 1,'UTF-8')."|".iconv_substr($siju, 1, 1,'UTF-8')."|".$daewoonsGan[9]."|".$daewoonsJi[9]."|".$daewoonsGan[8]."|".$daewoonsJi[8]."|".$daewoonsGan[7]."|".$daewoonsJi[7]."|".$daewoonsGan[6]."|".$daewoonsJi[6]."|".$daewoonsGan[5]."|".$daewoonsJi[5]."|".$daewoonsGan[4]."|".$daewoonsJi[4]."|".$daewoonsGan[3]."|".$daewoonsJi[3]."|".$daewoonsGan[2]."|".$daewoonsJi[2]."|";




//-----------------------
//echo $tmp."<BR>";
//-----------------------

$tmp = substr($tmp, 0, strlen($tmp)-1);
$rtn[0]=$tmp;
$rtn[1]=$mok;


$rtn[2]=find_yong(fSS($PALJA[1], $Gan) , fSS($PALJA[2], $Ji) , fSS($PALJA[3], $Gan) , fSS($PALJA[4], $Ji) , fSS($PALJA[5], $Gan) , fSS($PALJA[6], $Ji) , fSS($PALJA[7], $Gan) , fSS($PALJA[8], $Ji));
$rtn[3]= $INSA_B1y . "년 " . $INSA_B1m . "월 " . $INSA_B1d . "일 " . fSS($PALJA[8], $Ji) . "시 (" . $uWeek . "요일)";
$rtn[4]= $INSA_B0y . "년 " . $INSA_B0m . "월 " . $INSA_B0d . "일 " . $Text4_Text . "시 " . $Text5_Text & "분 ";

	$b_saju_Click=$rtn;    

	return $b_saju_Click;
}



Function setyeargi(){

	 $curYear = date("Y");	
	 $curMonth = date("m");		
	 $curDay = date("d");		
	 $curHour = date("H");		
	 $curMinute= date("i");	

	$SoloSaju=b_saju_Click(1, 1 , $curYear, $curMonth, $curDay ,$curHour ,$curMinute,"");

	$sSajuArr = explode("|", $SoloSaju[0]);


	$Rtn[0] = ($sSajuArr[0].$sSajuArr[1]);
	$Rtn[1] = ($sSajuArr[2].$sSajuArr[3]);
	$Rtn[2] = ($sSajuArr[4].$sSajuArr[5]);
	$Rtn[3] = ($sSajuArr[6].$sSajuArr[7]);

	//'년간 $sSajuArr[0]
	//'년지 $sSajuArr[1]/
	//'월간 $sSajuArr[2]
	//'월지 $sSajuArr[3]

	//'일간 $sSajuArr[4]
	//'일지 $sSajuArr[5]
	//'일간 $sSajuArr[6]
	//'일지 $sSajuArr[7]

	$setyeargi=$Rtn;

	return $setyeargi;
}


  function dateDiff($f, $date1, $date2){ 
	 if($date1=="")$date1="1";
	 if($date2=="")$date2="1";
    $_date1 = explode("-",$date1."-1-1-1-1-1-1"); 
    $_date2 = explode("-",$date2."-1-1-1-1-1-1"); 

    $tm1 = mktime(0,0,0,$_date1[1],$_date1[2],$_date1[0]); 
    $tm2 = mktime(0,0,0,$_date2[1],$_date2[2],$_date2[0]); 

    return ($tm1 - $tm2) / 86400; 
  } 


?>

