<?
switch($urlinfo)
{
	Case "free" :
		$menuTitle = "무료운세";
		$menuNAME = '띠별운세|별자리운세|혈액형운세|주민번호운세|행운번호운세|혈액형궁합|웰빙주택운세|바이오리듬|꿈해몽|태몽';
		$menuURL = '/forms/comm_forms.php?urlinfo=free&sel=1|/forms/comm_forms.php?urlinfo=free&sel=2|/forms/comm_forms.php?urlinfo=free&sel=3|/forms/comm_forms.php?urlinfo=free&sel=4|/forms/comm_forms.php?urlinfo=free&sel=5|/forms/comm_forms.php?urlinfo=free&sel=6|/forms/comm_forms.php?urlinfo=free&sel=7|/forms/comm_forms.php?urlinfo=free&sel=8|/forms/comm_forms.php?urlinfo=free&sel=13|/forms/comm_forms.php?urlinfo=free&sel=14';
		$casenum = "19";
		$moneyNUM = "10";
		break;
	case "index" :
	Case "dream" :
		$menuTITLE = "사주/운세";
		$menuNAME = "올해의 토정비결|새해신수|자평명리학 평생총운|인생풀이|사주운세|십년대운풀이|전생운|질병운|나의 오행기운세|자평명리학 오늘의운세|당사주 평생총운|사주로 보는 심리분석|살풀이|성격운세|초년운|중년운|말년운";
		$menuURL = "/forms/comm_forms.php?urlinfo=saju&sel=1|/forms/comm_forms.php?urlinfo=saju&sel=2|/forms/comm_forms.php?urlinfo=saju&sel=3|/forms/comm_forms.php?urlinfo=saju&sel=4|/forms/comm_forms.php?urlinfo=saju&sel=5|/forms/comm_forms.php?urlinfo=saju&sel=6|/forms/comm_forms.php?urlinfo=saju&sel=7|/forms/comm_forms.php?urlinfo=saju&sel=8|/forms/comm_forms.php?urlinfo=saju&sel=9|/forms/comm_forms.php?urlinfo=saju&sel=10|/forms/comm_forms.php?urlinfo=saju&sel=11|/forms/comm_forms.php?urlinfo=saju&sel=12|/forms/comm_forms.php?urlinfo=saju&sel=13|/forms/comm_forms.php?urlinfo=saju&sel=14|/forms/comm_forms.php?urlinfo=saju&sel=15|/forms/comm_forms.php?urlinfo=saju&sel=16|/forms/comm_forms.php?urlinfo=saju&sel=17";
		$caseNum = "19";
		$moneyNUM = "10";
		break;
	Case "bujeok" :
	Case "sangdam" :
	Case "zpop" :
	Case "join" :
		$menuTITLE = "사주/운세";
		$menuNAME = "올해의 토정비결|새해신수|자평명리학 평생총운|인생풀이|사주운세|십년대운풀이|전생운|질병운|나의 오행기운세|자평명리학 오늘의운세|당사주 평생총운|사주로 보는 심리분석|살풀이|성격운세|초년운|중년운|말년운";
		$menuURL = "/forms/comm_forms.php?urlinfo=saju&sel=1|/forms/comm_forms.php?urlinfo=saju&sel=2|/forms/comm_forms.php?urlinfo=saju&sel=3|/forms/comm_forms.php?urlinfo=saju&sel=4|/forms/comm_forms.php?urlinfo=saju&sel=5|/forms/comm_forms.php?urlinfo=saju&sel=6|/forms/comm_forms.php?urlinfo=saju&sel=7|/forms/comm_forms.php?urlinfo=saju&sel=8|/forms/comm_forms.php?urlinfo=saju&sel=9|/forms/comm_forms.php?urlinfo=saju&sel=10|/forms/comm_forms.php?urlinfo=saju&sel=11|/forms/comm_forms.php?urlinfo=saju&sel=12|/forms/comm_forms.php?urlinfo=saju&sel=13|/forms/comm_forms.php?urlinfo=saju&sel=14|/forms/comm_forms.php?urlinfo=saju&sel=15|/forms/comm_forms.php?urlinfo=saju&sel=16|/forms/comm_forms.php?urlinfo=saju&sel=17";
		$caseNum = "01";
		$moneyNUM = "1";
		break;
	case "join" :
		$menuNAME = "일반회원|상품권";
		$menuURL = "/process/join.php?urlinfo=join&sel=1|/process/join.php?urlinfo=join&sel=2";
		$caseNum = "01";
		$menuTITLE = "회원가입";
		break;
	Case "admin" :
		$menuNAME = "관리자 ID/PW 변경|사업자 정보변경|회원관리|상품권코드|결제요금변경|팝업창설정";
		$menuURL = "/admin/admin.php?sel=1|/admin/admin.php?sel=2|/admin/admin.php?sel=5|/admin/admin.php?sel=6|/admin/admin.php?sel=7&moneysel=0|/admin/admin.php?sel=8";
		$caseNum = "01";
		$menuTITLE = "관리자모드";
		break;	
	Case "saju" :
		$menuTITLE = "사주/운세";
		$menuNAME = "올해의 토정비결|새해신수|자평명리학 평생총운|인생풀이|사주운세|십년대운풀이|전생운|질병운|나의 오행기운세|자평명리학 오늘의운세|당사주 평생총운|사주로 보는 심리분석|살풀이|성격운세|초년운|중년운|말년운|직업운|재물운|선천적기질운|태어난계절에따른운";
		$menuURL = "/forms/comm_forms.php?urlinfo=saju&sel=1|/forms/comm_forms.php?urlinfo=saju&sel=2|/forms/comm_forms.php?urlinfo=saju&sel=3|/forms/comm_forms.php?urlinfo=saju&sel=4|/forms/comm_forms.php?urlinfo=saju&sel=5|/forms/comm_forms.php?urlinfo=saju&sel=6|/forms/comm_forms.php?urlinfo=saju&sel=7|/forms/comm_forms.php?urlinfo=saju&sel=8|/forms/comm_forms.php?urlinfo=saju&sel=9|/forms/comm_forms.php?urlinfo=saju&sel=10|/forms/comm_forms.php?urlinfo=saju&sel=11|/forms/comm_forms.php?urlinfo=saju&sel=12|/forms/comm_forms.php?urlinfo=saju&sel=13|/forms/comm_forms.php?urlinfo=saju&sel=14|/forms/comm_forms.php?urlinfo=saju&sel=15|/forms/comm_forms.php?urlinfo=saju&sel=16|/forms/comm_forms.php?urlinfo=saju&sel=17|/forms/comm_forms.php?urlinfo=saju&sel=18|/forms/comm_forms.php?urlinfo=saju&sel=19|/forms/comm_forms.php?urlinfo=saju&sel=20|/forms/comm_forms.php?urlinfo=saju&sel=21";
		$caseNum = "01";
		$moneyNUM = "1";
		break;
	Case "name" :
		$menuTITLE = "이름/작명";
		$menuNAME = "자동이름풀이|-br-(성1자,이름1자)|자동이름풀이|-br-(성1자,이름2자)|자동이름풀이|-br-(성1자,이름3자)|자동이름풀이|-br-(성2자,이름1자)|자동이름풀이|-br-(성2자,이름2자)|셀프용신작명|-br-(성1자,이름2자)|성씨추명학";
		$menuURL = "/forms/comm_forms.php?urlinfo=name&sel=1|-br-|/forms/comm_forms.php?urlinfo=name&sel=2|-br-|/forms/comm_forms.php?urlinfo=name&sel=3|-br-|/forms/comm_forms.php?urlinfo=name&sel=4|-br-|/forms/comm_forms.php?urlinfo=name&sel=5|-br-|/forms/comm_forms.php?urlinfo=name&sel=6|-br-|/forms/comm_forms.php?urlinfo=name&sel=7";
		$caseNum = "02";
		$moneyNUM = "2";

		switch($sel){
			case "1" :
			case "2" :
			case "3" :
			case "4" :
			case "5" :
				$selstr = "01";
				break;
			default :
				$selstr = "0".$sel;
				break;
		}
		break;
	Case "gunghap" :
		$menuTITLE = "정통궁합";
		$menuNAME = "정통궁합|-br-(속궁합,겉궁합)|사상체질궁합|용신으로 보는<br>&nbsp;&nbsp;연인애정운|그이의 러브스타일<br>&nbsp;&nbsp;보기|섹스 토정비결|침실 섹스궁합|결혼배필운|인연은몇명|애인부부운|이성의성격|인연수1|인연수2|속궁합|겉궁합|애정운|부부화합운|섹스운|천생복덕운";
		$menuURL = "/forms/comm_forms.php?urlinfo=gunghap&sel=1|-br-|/forms/comm_forms.php?urlinfo=gunghap&sel=2|/forms/comm_forms.php?urlinfo=gunghap&sel=3|/forms/comm_forms.php?urlinfo=gunghap&sel=4|/forms/comm_forms.php?urlinfo=gunghap&sel=5|/forms/comm_forms.php?urlinfo=gunghap&sel=6|/forms/comm_forms.php?urlinfo=gunghap&sel=7|/forms/comm_forms.php?urlinfo=gunghap&sel=8|/forms/comm_forms.php?urlinfo=gunghap&sel=9|/forms/comm_forms.php?urlinfo=gunghap&sel=10|/forms/comm_forms.php?urlinfo=gunghap&sel=11|/forms/comm_forms.php?urlinfo=gunghap&sel=12|/forms/comm_forms.php?urlinfo=gunghap&sel=13|/forms/comm_forms.php?urlinfo=gunghap&sel=14|/forms/comm_forms.php?urlinfo=gunghap&sel=15|/forms/comm_forms.php?urlinfo=gunghap&sel=16|/forms/comm_forms.php?urlinfo=gunghap&sel=17|/forms/comm_forms.php?urlinfo=gunghap&sel=18";
		$caseNum = "03";
		$moneyNUM = "3";
		break;
	Case "jum" :
		$menuTITLE = "점(占)";
		$menuNAME = "자미두수|주역점|주역신수비결|영험한 첨|단시점|육효(六爻)|자식운|형제운|적성운|질병건강운|주거가택운|사업합작운|직장상사운|직장부하운|육임단시|64괘운세분석";
		$menuURL = "/forms/comm_forms.php?urlinfo=jum&sel=1|/forms/comm_forms.php?urlinfo=jum&sel=2|/forms/comm_forms.php?urlinfo=jum&sel=3|/forms/comm_forms.php?urlinfo=jum&sel=4|/forms/comm_forms.php?urlinfo=jum&sel=5|/forms/comm_forms.php?urlinfo=jum&sel=6|/forms/comm_forms.php?urlinfo=jum&sel=7|/forms/comm_forms.php?urlinfo=jum&sel=8|/forms/comm_forms.php?urlinfo=jum&sel=9|/forms/comm_forms.php?urlinfo=jum&sel=10|/forms/comm_forms.php?urlinfo=jum&sel=11|/forms/comm_forms.php?urlinfo=jum&sel=12|/forms/comm_forms.php?urlinfo=jum&sel=13|/forms/comm_forms.php?urlinfo=jum&sel=14|/forms/comm_forms.php?urlinfo=jum&sel=15|/forms/comm_forms.php?urlinfo=jum&sel=16";
		$caseNum = "04";
		$moneyNUM = "4";
		break;
	Case "faceface" :
		$menuTITLE = "신통관상";
		$menuNAME = "관상보기(마의상법)";
		$menuURL = "/forms/comm_forms.php?urlinfo=faceface&sel=1";
		$caseNum = "05";
		$moneyNUM = "5";
		break;
	Case "lotto" :
		$menuTITLE = "로또운세";
		$menuNAME = "로또번호운세";
		$menuURL = "/forms/comm_forms.php?urlinfo=lotto&sel=1";
		$caseNum = "06";
		$moneyNUM = "6";
		break;
	Case "yukim" :
		$menuTITLE = "대육임";
		$menuNAME = "육임정단|지두법(길흉속지법)";
		$menuURL = "/forms/comm_forms.php?urlinfo=yukim&sel=1|/forms/comm_forms.php?urlinfo=yukim&sel=2";
		$caseNum = "07";
		$moneyNUM = "7";
		break;
	case "manse" :
		$menuTITLE = "만세력";
		$menuNAME = "사주명식|음양력변환";
		$menuURL = "/forms/comm_forms.php?urlinfo=manse&sel=1|/forms/comm_forms.php?urlinfo=manse&sel=2";
		$caseNum = "09";
		$moneyNUM = "9";
		break;
	case "selectDay" :
		$menuTITLE = "택일";
		$menuNAME = "결혼택일|이사택일|특정일운세";
		$menuURL = "/forms/comm_forms.php?urlinfo=selectDay&sel=1|/forms/comm_forms.php?urlinfo=selectDay&sel=2|/forms/comm_forms.php?urlinfo=selectDay&sel=3";
		$caseNum = "12";
		$moneyNUM = "8";
		break;
	case "theme" :
		$menuTITLE = "테마운세";
		$menuNAME = "천생운|타로점성술|신통방통동전점|탄생석점|나의길흉숫자|방위점|나의수호천사와타로점|나의별자리사랑|피해야할상대|현재운세풀이|현재나의운분석|사업운총평|재물모으는법|재물손실막는법|재테크비법";
		$menuURL = "/forms/comm_forms.php?urlinfo=theme&sel=1|/forms/comm_forms.php?urlinfo=theme&sel=2|/forms/comm_forms.php?urlinfo=theme&sel=3|/forms/comm_forms.php?urlinfo=theme&sel=4|/forms/comm_forms.php?urlinfo=theme&sel=5|/forms/comm_forms.php?urlinfo=theme&sel=6|/forms/comm_forms.php?urlinfo=theme&sel=7|/forms/comm_forms.php?urlinfo=theme&sel=8|/forms/comm_forms.php?urlinfo=theme&sel=9|/forms/comm_forms.php?urlinfo=theme&sel=10|/forms/comm_forms.php?urlinfo=theme&sel=11|/forms/comm_forms.php?urlinfo=theme&sel=12|/forms/comm_forms.php?urlinfo=theme&sel=13|/forms/comm_forms.php?urlinfo=theme&sel=14|/forms/comm_forms.php?urlinfo=theme&sel=15";
		$caseNum = "12";
		$moneyNUM = "11";
		break;

}

//if($urlinfo != "name"){
	if(strlen($sel) == 1){
		$selstr = "0".$sel;
	}else{
		$selstr = $sel;
	}
//}
?>